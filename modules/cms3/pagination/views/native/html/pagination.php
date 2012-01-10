<div class="pagination">
	<h4>Страницы</h4>
	<div class="arrows"><?php
		if ($this->pagination['prev_link']):
			?><a href="<?php echo $this->pagination['prev_link'] ?>">&larr;предыдущая</a><?php
		else:
			?><span class="disabled">&larr;предыдущая</span><?php
		endif;
	?> <?php
			
		if ($this->pagination['next_link']):
			?><a href="<?php echo $this->pagination['next_link'] ?>">следующая&rarr;</a><?php
		else:
			?><span class="disabled">следующая&rarr;</span><?php
		endif;
	?></div>
	<div class="pages">
	<?php foreach ($this->pagination['pages'] as $page): ?>
		<?php if ($page['active']): ?>
			<span class="selected"><?php echo $page['title'] ?></span>
		<?php else: ?>
			<a href="<?php echo $page['link'] ?>"><?php echo $page['title'] ?></a>
		<?php endif; ?>
	<?php endforeach ;?>
	</div>
</div>
