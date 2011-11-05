<?php
use \CMS3\Engine\NS;
use \CMS3\Engine\HTML;
use \CMS3\Dataview\Helper_JSON as JSON;

$data = $this->data;
$data->id = 'richGrid' . $this->block_id;
$data->container = 'div#workspace';

$data = JSON::encode($this->data, array(
	'camelize' => true
));
?>



<script id="gridTemplate" type="text/x-jquery-tmpl">
	<div id=${id} class="cms3-rich-grid">
		<div class="controls">
            <div>
                <button class="new"><span>New</span></button>
            </div>
            <div>
	            <button class="edit"><span>Edit</span></button>
	            <button class="delete"><span>Delete</span></button>
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
						<th width="1%" class="check-all"><input type="checkbox" value="0" /></th>
						{{each(fieldId, field) fields}}
							{{tmpl({field: field, fieldId: fieldId})  '#field'+field.headTemplate+'TableGridTemplate'}}
						{{/each}}
					</tr>
					<tr class="filter">
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
		{{if field.ordering}}
			<a class="sort" href="#${fieldId}">${field.label}</a>
			<span class="symbol big sort">
				<span class="asc" style="display:none">&darr;</span>
				<span class="desc" style="display:none">&uarr;</span>
			</span>
		{{else}}
			${field.label}
		{{/if}}
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

<script id="cellBelongstoTableGridTemplate" type="text/x-jquery-tmpl">
	<td class="column${fieldId}">
		{{each(i, item) field.model.items}}
			{{if item.id == cell}}
				{{tmpl({item: item, fields: field.model.fields}) '#titleGenerator'+field.titleGenerator+'Template'}}
			{{/if}}
		{{/each}}
	</td>
</script>

<script id="cellHasmanyTableGridTemplate" type="text/x-jquery-tmpl">
	<td class="column${fieldId}">
		{{each(i, item) field.model.items}}
			{{if item.id == cell}}
				{{tmpl({item: item, fields: field.model.fields}) '#titleGenerator'+field.titleGenerator+'Template'}}<br/>
			{{/if}}
		{{/each}}
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

<script id="titleGeneratorDefaultTemplate" type="text/x-jquery-tmpl">
	{{each(fieldId, cell) item}}
		{{if fields[fieldId].showInList}}
			${cell}
		{{/if}}
	{{/each}}
</script>

<script id="cellBelongstoEditTemplate" type="text/x-jquery-tmpl">
	<label for="${fieldId}">${field.label}</label><br/>
	<select  name="${fieldId}" id="${fieldId}">
		{{each(i, item) field.model.items}}
			{{if item.id == cell}}
				<option value="${item.id}" selected="selected">{{tmpl({item: item, fields: field.model.fields}) '#titleGenerator'+field.titleGenerator+'Template'}}</option>
			{{else}}
				<option value="${item.id}">{{tmpl({item: item, fields: field.model.fields}) '#titleGenerator'+field.titleGenerator+'Template'}}</option>
			{{/if}}
		{{/each}}
	</select>
	<br />
</script>

<script id="cellHasmanyEditTemplate" type="text/x-jquery-tmpl">
	<label for="${fieldId}">${field.label}</label><br/>
	<select multiple="multiple"  name="${fieldId}" id="${fieldId}">
		{{each(i, item) field.model.items}}
			{{if item.id == cell}}
				<option value="${item.id}" selected="selected">{{tmpl({item: item, fields: field.model.fields}) '#titleGenerator'+field.titleGenerator+'Template'}}</option>
			{{else}}
				<option value="${item.id}">{{tmpl({item: item, fields: field.model.fields}) '#titleGenerator'+field.titleGenerator+'Template'}}</option>
			{{/if}}
		{{/each}}
	</select>
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
	cms3.richGrid.create(<?php echo $data; ?>);
</script>