<?php
use \CMS3\Engine\NS;
use \CMS3\Engine\HTML;
use \CMS3\Dataview\Helper_JSON as JSON;

print_r($this->models);

$grid_data = new \stdClass();

$grid_data->models = $this->models;
$grid_data->model = $this->model;
$grid_data->id = 'richGrid' . $this->block_id;
$grid_data->container = 'div#workspace';

$grid_data = JSON::encode($grid_data, array(
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
		{{each(fieldId, field) fields}}
			{{tmpl({cell: item[fieldId], field: field, fieldId: fieldId}) '#cell'+fields[fieldId].cellTemplate+'TableGridTemplate'}}
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
				{{tmpl({item: item, fields: field.model.fields}) '#cms3-template-field-list-item-generator-'+field.templateListItemGenerator}}
			{{/if}}
		{{/each}}
	</td>
</script>

<script id="cellHasmanyTableGridTemplate" type="text/x-jquery-tmpl">
	<td class="column${fieldId}">
		{{each(i, item) field.model.items}}
			{{if item.id == cell}}
				{{tmpl({item: item, fields: field.model.fields}) '#cms3-template-field-list-item-generator-'+field.templateListItemGenerator}}<br/>
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

<script id="cms3-template-field-list-item-generator-base" type="text/x-jquery-tmpl">
{{each(fieldId, cell) item}}{{if fields[fieldId].showInList}}${cell}{{/if}}{{/each}}
</script>

<script id="cellBelongstoEditTemplate" type="text/x-jquery-tmpl">
	<label for="${fieldId}">${field.label}</label><br/>
	<div id="${fieldId}">
		{{each(i, item) field.model.items}}
			{{if item.id == cell}}
				<input type="radio" id="${fieldId}-${item.id}" name="${fieldId}" value="${item.id}" checked="checked" /><label for="${fieldId}-${item.id}">{{tmpl({item: item, fields: field.model.fields}) '#cms3-template-field-list-item-generator-'+field.templateListItemGenerator}}</label><br />
			{{else}}
				<input type="radio" id="${fieldId}-${item.id}" name="${fieldId}" value="${item.id}"/><label for="${fieldId}-${item.id}">{{tmpl({item: item, fields: field.model.fields}) '#cms3-template-field-list-item-generator-'+field.templateListItemGenerator}}</label><br />
			{{/if}}
		{{/each}}
		<input type="radio" id="${fieldId}-0" name="${fieldId}" value="0"/>
		<label for="${fieldId}-0">New
			<fieldset>
				{{each(fieldId, childField) field.model.fields}}
					{{tmpl({cell: childField.defaultValue, field: childField, fieldId: fieldId}) '#cellContainer'+childField.cellContainerTemplate+'EditTemplate'}}
				{{/each}}
			</fieldset>
		</label>
	</div>
	<br />
</script>

<script id="cellHasmanyEditTemplate" type="text/x-jquery-tmpl">
	<label for="${fieldId}">${field.label}</label><br/>
	<select multiple="multiple"  name="${fieldId}" id="${fieldId}">
		{{each(i, item) field.model.items}}
			{{if item.id == cell}}
				<option value="${item.id}" selected="selected">{{tmpl({item: item, fields: field.model.fields}) '#cms3-template-field-list-item-generator-'+field.templateListItemGenerator}}</option>
			{{else}}
				<option value="${item.id}">{{tmpl({item: item, fields: field.model.fields}) '#cms3-template-field-list-item-generator-'+field.templateListItemGenerator}}</option>
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
			{{if cell && cell.length>1}}
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
			{{each(fieldId, field) fields}}
				{{tmpl({cell: item[fieldId], field: field, fieldId: fieldId}) '#cellContainer'+field.cellContainerTemplate+'EditTemplate'}}
			{{/each}}
		</form>
	</div>
</script>

<script id="cms3-template-window" type="text/x-jquery-tmpl">
	<div id="${id}" class="cms3-window ${windowState}">
		<div class="cms3-window-head">
			<div>
				<span>${label}</span>
				<div class="cms3-window-head-buttons">
					<span class="minimized">_
						<span class="separator"></span>
					</span>
					<span class="maximized">□
						<span class="separator"></span>
					</span>
					<span class="normal">▫
						<span class="separator"></span>
					</span>
					<span class="close">✖</span>
				</div>
			</div>
		</div>
		<div class="cms3-window-content">

		</div>
		<div class="cms3-window-buttons">
			<button><span>Сохранить</span></button> <button><span>Закрыть</span></button>
		</div>
	</div>
</script>

<script id="demo" type="text/x-jquery-tmpl">

        <tr class="field">
			<td class="label"><span>Название товара</span></td>
			<td class="input">
				<div class="cms3-field-editable text">
					<div class="wrapper">
						<input class="hint" type="text" value="Подсказка" />
					</div>

					<div class="autocomplete">
						<ul>
							<li>Все</li>
							<li class="hover">Всыыы</li>
							<li>Всы</li>
							<li>Вса</li>
						</ul>
					</div>
				</div>
			</td>
		</tr>

		<tr class="field">
			<td class="label">Выделить в списке</td>
			<td class="input" colspan="0">
				<div class="cms3-field-editable checkbox">
					<input type="text" id="checkbox"/>
				</div>
			</td>
		</tr>



		<tr class="field">
			<td class="label"><span>Тип товара</span></td>
			<td class="input">
				<div class="cms3-field-editable show-autocomplete select multiple">
					<table>
						<tr>
							<td class="select"><div class="cms3-field-editable-options"><div>aaaa <span>✖</span></div><div>bbbb <span>✖</span></div><div>aaa fff <span>✖</span></div></div><input class="hint" type="text" value="Подсказка" /></td>
							<td class="select-button"><span>▼</span></td>
						</tr>
					</table>
					<div class="autocomplete">
						<ul>
							<li>Все</li>
							<li class="hover">Всыыы</li>
							<li>Всы</li>
							<li>Вса</li>
						</ul>
					</div>
				</div>
			</td>
            <td class="undo"><div></div></td>
		</tr>
</script>


<script id="cms3-template-form" type="text/x-jquery-tmpl">
	<table class="cms3-form" id="${id}">
        {{each(fieldId, field) fields}}
            {{tmpl({cells: item[fieldId], field: field, fieldId: fieldId}) '#cms3-template-form-field-'+field.templateCellFormContainer}}
        {{/each}}
        {{tmpl({}) '#demo'}}
	</table>
</script>

<script id="cms3-template-form-field-base" type="text/x-jquery-tmpl">
    <tr class="field ${fieldId}">
        <td class="label"><span>${field.label}</span></td>
        <td class="input">
            {{tmpl({cells: cells, field: field, fieldId: fieldId}) '#cms3-template-field-editable-'+field.templateCellEditable}}
        </td>
        <td class="undo">
            <div style="display:none" title="<?php echo __('Restore the original value.') ?>"></div>
        </td>
    </tr>
</script>

<script id="cms3-template-field-editable-base" type="text/x-jquery-tmpl">
    <div class="cms3-field-editable text {{if field.label==''}}show-autocomplete{{/if}}">
        <div class="input-container">
            <div class="wrapper">
                {{if cells.length == 1}}
                    <input placeholder="${field.hint}" type="text" value="${cells}" />
                {{else}}
                    <input type="text" value="" />
                {{/if}}
            </div>

            {{if cells.length > 1}}
                <div class="cms3-field-editable-options">
                    {{each(i, cell) cells}}
                        <div>${cell}</div>
                    {{/each}}
                </div>
            {{/if}}
        </div>
        <div class="autocomplete">
            <ul>
                <li>Все</li>
                <li class="hover">Всыыы</li>
                <li>Всы</li>
                <li>Вса</li>
            </ul>
        </div>
    </div>
</script>

<script id="cms3-template-field-editable-demo" type="text/x-jquery-tmpl">
    <div class="cms3-field-editable select">
        <table>
            <tr>
                {{each(fieldId, item) field.model.items}}
                    {{if item.id == cell}}
                        <td><input placeholder="${field.hint}" type="text" value="{{tmpl({item: item, fields: field.model.fields}) '#cms3-template-field-list-item-generator-'+field.listItemGenerator}}" /></td>
                        <td class="select-button"><span>▼</span></td>
                    {{/if}}
                {{/each}}
            </tr>
        </table>
        <div class="autocomplete">
            <ul>
                {{each(fieldId, item) field.model.items}}
                    <li>{{tmpl({item: item, fields: field.model.fields}) '#cms3-template-field-list-item-generator-'+field.templateListItemGenerator}}</li>
                {{/each}}
                <li class="hover">Всыыы</li>
            </ul>
        </div>
    </div>
</script>

<script id="cms3-template-field-editable-select" type="text/x-jquery-tmpl">
    <div class="cms3-field-editable select show-autocomplete">
        <table>
            <tr>
                {{each(j, item) field.model.items}}
                    {{if item.id == cells[0]}}
                        <td><input placeholder="${field.hint}" type="text" value="{{tmpl({item: item, fields: field.model.fields}) '#cms3-template-field-list-item-generator-'+field.templateListItemGenerator}}" /></td>
                        <td class="select-button"><span>▼</span></td>
                    {{/if}}
                {{/each}}
            </tr>
        </table>
        <div class="autocomplete">
            <ul>
                {{each(i, item) field.model.items}}
                    <li>{{tmpl({item: item, fields: field.model.fields}) '#cms3-template-field-list-item-generator-'+field.templateListItemGenerator}}</li>
                {{/each}}

                <li class="hover">Всыыы</li>
            </ul>
        </div>
    </div>
</script>

<script type="text/javascript">
	cms3.richGrid.create(<?php echo $grid_data; ?>);

/*	cms3.window.create({
		label: 'Название',
        container: 'div#workspace'
	});

	cms3.form.create({
		label: 'Название',
        container: '#window div.cms3-window-content',
        fields: {
            title: {
                label: 'Название товара',
                hint: 'Подсказка',
                type: 'string'
            }
        },
        item: {
            title: 'ert'
        }
	});*/
</script>