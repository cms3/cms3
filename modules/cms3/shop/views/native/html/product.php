<cms3:include renderer="template" name="caption" title="<?php echo $this->product['title'] ?>" />

<div class="product">

<div class="photo">
	<div><img src="<?php echo $this->product['default_image']['thumbnail']['url'] ?>" width="<?php echo $this->product['default_image']['thumbnail']['width'] ?>" height="<?php echo $this->product['default_image']['thumbnail']['height'] ?>" alt="<?php echo $this->product['title'] ?>" /></div>
	<div class="product-images">
		<?php
			if (count($this->product['images']) > 1):
				foreach  ($this->product['images'] as $i => $image):
					?><a<?php if ($i == 0): echo ' class="selected"'; endif; ?> href="<?php echo $image['large']['url'] ?>" data-width="<?php echo $image['small']['width'] ?>" data-height="<?php echo $image['small']['height'] ?>"><img src="<?php echo $image['small']['url'] ?>" width="<?php echo $image['small']['width'] ?>" height="<?php echo $image['small']['height'] ?>" alt="" /></a><?php
				endforeach;
			endif;
		?>
	</div>
</div>

<div class="selling">
	<?php if ($this->product['price']['value']): ?>
		<div class="price"><?php echo $this->product['price']['value'] ?> грн.</div>
	<?php endif; ?>
</div>

<div class="tab-page text">
	<p>
		<?php echo $this->product['short_description'] ?>
	</p>
	<div>
		<?php echo $this->product['description'] ?>
	</div>
	<table class="edition-info">
	<?php if (isset($this->product['vendor'])): ?>
		<tr><td>Производитель</td><td><a href="/?shop.product.type.id=<?php echo $this->product['type']['id'] ?>&shop.product.properties.vendor.id=<?php echo $this->product['vendor']['id'] ?>"><?php echo $this->product['vendor']['title'] ?></a></td></tr>
	<?php endif; ?>
	<?php if ($this->product['properties']['width']): ?>
		<tr><td>Ширина</td><td><?php echo $this->product['properties']['width'] ?></td></tr>
	<?php endif; ?>
	<?php if ($this->product['properties']['height']): ?>
		<tr><td>Высота</td><td><?php echo $this->product['properties']['height'] ?></td></tr>
	<?php endif; ?>
	<?php if ($this->product['properties']['length']): ?>
		<tr><td>Длина</td><td><?php echo $this->product['properties']['length'] ?></td></tr>
	<?php endif; ?>
	</table>
</div>

</div>