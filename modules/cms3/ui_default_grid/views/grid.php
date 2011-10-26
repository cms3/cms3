

<style type="text/css">
table td {
	border: solid 1px lightgrey;
	padding: 3px;
}
table {
	border-collapse: collapse;
}
th {
	background: lightgrey;
	border: solid 1px black;
	padding: 3px;
}
</style>

<table>
<tr>
<?php foreach ($this->_model->meta()->fields() as $field): ?>
	<th>
	<?php echo $field->name; ?>
	</th>
<?php endforeach; ?>
<th></th>
</tr>

<?php foreach ($this->data as $item): ?>
	<tr>
		<?php foreach ($this->_model->meta()->fields() as $field): ?>
			<td>
				<?php if ($field->name == $this->_model->meta()->primary_key()): ?>
					<a href="/admin/<?php echo $class . '/' . $item->{$field->name}; ?>">
				<?php endif; ?>
				
				<?php if (is_object($item->{$field->name})): ?>
					<?php echo get_class($item->{$field->name}); ?>
				<?php else: ?>
					<?php HTML::chars($item->{$field->name}); ?>
				<?php endif; ?>
				
				<?php if ($field->name == $this->_model->meta()->primary_key()): ?>
					<?php echo ' [edit]</a>'; ?>
				<?php endif; ?>
			</td>
		<?php endforeach; ?>
		<td><a href="/action/cms3/admin/controller/delete_item?id=<?php $item->{$this->_model->meta()->primary_key()}; ?>&model=<?php echo $class; ?>'">[X]</a></td>
	</tr>
<?php endforeach; ?>
<table>
		
<br /><a href="/admin/' <?php echo $class; ?></php> '/0">Add</a>