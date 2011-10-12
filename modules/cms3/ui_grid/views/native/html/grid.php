<?php
use \CMS3\Engine\NS;
$fields = array();

		foreach ($this->model->meta()->fields() as $id => $field)
		{
			$fields[$id] = clone $field;
			$field = $fields[$id];

			$field->type = get_class($field);

			$field->type = NS::extract_class_name($field->type);
			$field->type = NS::remove_class_prefix($field->type, 'field_');
			$field->type = inflector::camelize($field->type);
			unset($field->in_db);
			unset($field->language_column);
			unset($field->table);
			unset($field->foreign_column);
			unset($field->allow_null);
			unset($field->model);
			unset($field->column);
		//	unset($field->name);
			unset($field->unique);
			unset($field->primary);
			unset($field->convert_empty);
			unset($field->empty_value);
			unset($field->convert_empty);
			unset($field->filters);
			unset($field->rules);
			unset($field->namespace);
		}


	/*\CMS3\Engine\App::instance()->document->media->link('script', 'http://thermos.com.ua/templates/thermos/js/script.js', NULL, TRUE);
	\CMS3\Engine\App::instance()->document->media->link('script', 'http://thermos.com.ua/templates/thermos/js/script.js', NULL, TRUE);
	\CMS3\Engine\App::instance()->document->media->link('style', '/themes/default/css/main.css');*/


/*echo '<br/><br/>';
/*print_r(($this->model->meta()->fields()));
echo '<br/><br/>';*/
use CMS3\UI_Grid\Helper_JSON as JSON;
$columns = JSON::encode($fields, array(
	'camelize' => true
));


//echo $columns;
//echo '<br/><br/>';

use \CMS3\Engine\HTML;
$items = array();
$i = 0;
foreach ($this->data as $item)
{
	foreach($fields as $field)
	{
		echo $field->type.'<br/>';
		switch ($field->type) {
			case 'params':
				$items[$i][$field->name] = 'ss';//$item->{$field->name};
				break;
			case 'belongsto':
				$items[$i][$field->name] = $item->{$field->name}->id;
				break;
			default:
				$items[$i][$field->name] = HTML::chars($item->{$field->name});
				break;
		}
	}
	$i++;
}

$items = JSON::encode($items);
echo $items;
//echo '<br/><br/>';
//echo json_encode($fields);

//echo JSON::encode();
?>



<script id="gridTemplate" type="text/x-jquery-tmpl">
	<div id=${id} class="cms3-rich-grid">
		<div class="controls">
            <div>
                <button class="new"><span>New</span></button>
            </div>
            <div>
	            <button class="edit"><span>Edit</span></button>
                <input type="submit" name="delete" value="Delete" />
            </div>
            <div>
                <input type="submit" name="publish" value="Publish" />
                <input type="submit" name="unpublish" value="Unpublish" />
            </div>

            <div>
                <input type="submit" name="sync" id="sync" value="Sync" />
            </div>

            <div class="editgridbuttons">
                <input type="submit" name="save"  class="bold" value="Save" />
                <input type="submit" name="cancel" value="Cancel" />
            </div>
        </div>
		<div class="grid">
			<table cellpadding="0" cellspacing="0">
				<thead>
					<tr class="gridheader">
						<th width="1%"><input type="submit" name="checkall" value="✔" /></th>
						{{each(fieldId, field) fields}}
							{{tmpl({field: field, fieldId: fieldId})  '#field'+field.headTemplate+'TableGridTemplate'}}
						{{/each}}
					</tr>
					<tr>
						<th width="1%"></th>
						{{each(fieldId, field) fields}}
							{{tmpl({field: field, fieldId: fieldId})  '#filter'+field.filterTemplate+'TableGridTemplate'}}
						{{/each}}
					</tr>
				</thead>
				<tbody>
					{{each(i, item) items}}
						{{tmpl({item: item, fields: fields}) '#itemTableGridTemplate'}}
					{{/each}}
				</tbody>
			</table>
		</div>
		<div class="edit-field-list" style="position:relative;">
			<span>»</span>
			<div class="popupwnd" style="display:none;">
				<ul>
					{{each(fieldId, field) fields}}
						{{if field.display}}
							<li><input type="checkbox" checked="checked" id="view${fieldId}" /><label for="view${fieldId}">${field.label}</label></li>
						{{else}}
							<li><input type="checkbox" id="view${fieldId}" /><label for="view${fieldId}">${field.label}</label></li>
						{{/if}}
					{{/each}}
				</ul>
			</div>
		</div>
		<div class="edit-items"></div>
	</div>
</script>

<script id="fieldDefaultTableGridTemplate" type="text/x-jquery-tmpl">
	<th class="column${fieldId}">
		<a href="#${fieldId}">${field.label}</a>
	</th>
</script>

<script id="filterDefaultTableGridTemplate" type="text/x-jquery-tmpl">
	<th class="column${fieldId}">
		<input type="text" />
	</th>
</script>

<script id="itemTableGridTemplate" type="text/x-jquery-tmpl">
	<tr class="item${item.id}">
		<td class="center item-selector"><input class="item${item.id}" type="checkbox"></td>
		{{each(fieldId, cell) item}}
			{{tmpl({cell: cell, field: fields[fieldId], fieldId: fieldId}) '#cell'+fields[fieldId].cellTemplate+'TableGridTemplate'}}
		{{/each}}
	</tr>
</script>

<script id="cellDefaultTableGridTemplate" type="text/x-jquery-tmpl">
	<td class="column${fieldId}">
		${cell}
	</td>
</script>

<script id="cellPrimaryTableGridTemplate" type="text/x-jquery-tmpl">
	{{tmpl({cell: cell, field: field, fieldId: fieldId}) '#cellDefaultTableGridTemplate'}}
</script>

<script id="cellListTableGridTemplate" type="text/x-jquery-tmpl">
	<td class="field${fieldId}">
		{{each(i, option) field.options}}
			{{if (option.id == cell)}}
				${option.title}
			{{/if}}
		{{/each}}
	</td>
</script>

<script id="cellBooleanTableGridTemplate" type="text/x-jquery-tmpl">
	<td class="center column${fieldId}">
		{{if cell}}
			<a href="#" class="publish">✔</a>
		{{else}}
			<a href="#">-</a>
		{{/if}}
	</td>
</script>

<script id="cellDefaultEditTemplate" type="text/x-jquery-tmpl">
	<label for="${fieldId}">${field.label}</label><br/>
	<input type="text" name="${fieldId}" id="${fieldId}" value="${cell}"/>
	<br />
</script>

<script id="cellBooleanEditTemplate" type="text/x-jquery-tmpl">
	{{if (cell.length == 1) }}
		{{if cell[0]}}
			<input type="checkbox" class="text ui-widget-content ui-corner-all" name="${fieldId}" id="${fieldId}" value="1" checked="checked"/>
		{{else}}
			<input type="checkbox" class="text ui-widget-content ui-corner-all" name="${fieldId}" id="${fieldId}" value="1"/>
		{{/if}}

	{{else}}
		<input type="checkbox" disabled="disabled" class="text ui-widget-content ui-corner-all" name="${fieldId}" id="${fieldId}" value="1"/>
	{{/if}}
	<label for="${fieldId}">${field.label}</label>
</script>

<script id="cellPrimaryEditTemplate" type="text/x-jquery-tmpl">
	<span>${cell}</span>
</script>

<script id="cellContainerDefaultEditTemplate" type="text/x-jquery-tmpl">
	<div class="cell-container ${fieldId}-container">
		<div class="cell">
			{{tmpl({cell: cell, field: field, fieldId: fieldId}) '#cell'+field.cellTemplate+'EditTemplate'}}
		</div>
		<div class="override">
			{{if cell.length>1}}
				<input type="checkbox" name="${fieldId}-override" id="${fieldId}-override" value="1"/>
			{{else}}
				<input type="checkbox" name="${fieldId}-override" id="${fieldId}-override" value="1" checked="checked"/>
			{{/if}}
			<label for="${fieldId}-override">override</label>
		</div>
	</div>
</script>

<script id="cellContainerPrimaryEditTemplate" type="text/x-jquery-tmpl">
	<div class="cell-container ${fieldId}-container">
		<div class="cell">
			{{tmpl({cell: cell, field: field, fieldId: fieldId}) '#cell'+field.cellTemplate+'EditTemplate'}}
		</div>
	</div>
</script>

<script id="editItemTemplate" type="text/x-jquery-tmpl">
	<div id="${elementId}" class="cms3-rich-grid-edit-item" title="Edit item(items): ${item.id.length}">
		<form>
			{{each(fieldId, cell) item}}
				{{tmpl({cell: cell, field: fields[fieldId], fieldId: fieldId}) '#cellContainer'+fields[fieldId].cellContainerTemplate+'EditTemplate'}}
			{{/each}}
		</form>
	</div>
</script>

<script type="text/javascript">
	cms3.richGrid.create({
		id: 'richGrid<?php echo $this->block_id; ?>',
		container: 'div#workspace',
		fields: <?php echo $columns ?>,
		items: <?php echo $items ?>,
		model: "<?php echo $this->model->class_param() ?>"
	});
</script>