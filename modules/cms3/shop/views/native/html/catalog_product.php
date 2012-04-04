<ins class="item">
	<div class="brace">
		<?php
			if (@$this->with_sections && $this->product['type']['id'] != $this->last_type):
				?><div class="section"><div class="cont"><span><a href="/?shop/product/type/id=<?php echo $this->product['type']['id'] ?>"><?php
					echo $this->product['type']['title']
				?></a></span></div><ins></ins></div><?php
			endif;
		?>
		<ins class="img-block">
			<a href="/?shop/product/id=<?php echo $this->product['id'] ?>" class="drag-obj"><img src="<?php echo $this->product['default_image']['thumbnail']['url'] ?>" alt="<?php echo $this->product['title'] ?>" /></a><br />
		</ins>
		<div class="caption">
			<?php
				if (isset($this->product['properties']['vendor']['title'])):
					?><div class="author"><?php echo $this->product['properties']['vendor']['title'] ?></div><?php
				endif;
			?>
			<h3 class="title"><a href="/?shop/product/id=<?php echo $this->product['id'] ?>"><?php echo $this->product['title'] ?></a></h3>
			<?php if (isset($this->product['vendor'])): ?>
				<div class="author"><?php echo $this->product['vendor']['title'] ?></div>
			<?php endif; ?>
			<?php if ($this->product['price']['value']): ?>
				<div class="price"><span class="whole"><?php echo $this->product['price']['value'] ?></span>&nbsp;грн.</div>
			<?php endif; ?>
		</div>
	</div>
</ins>
