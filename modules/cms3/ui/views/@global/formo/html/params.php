<fieldset class="params">
	<legend><?php echo $label; ?></legend>
	<?php if ($field->error): ?>
		<div>There were errors with this section</div>
	<?php endif; ?>
	<?php foreach ($field->fields() as $param): ?>
		<?php echo $param->generate(); ?>
	<?php endforeach; ?>
</fieldset>