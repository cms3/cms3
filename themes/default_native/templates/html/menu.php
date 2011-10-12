<?php defined('SYSPATH') OR die('No direct access allowed.');

output_items($this->items);
 
function output_items($items){
	if (count($items)): ?>
		<ul>
		<?php foreach ($items as $item): ?>
			<li>
			<?php if ($item['active']): ?>
				<span class="selected"><?php echo $item['title'] ?></span>
			<?php elseif ($item['selected']): ?>
				<a href="<?php echo $item['uri'] ?>" class="selected"><?php echo $item['title'] ?></a>
			<?php else : ?>
				<a href="<?php echo $item['uri'] ?>"><?php echo $item['title'] ?></a>
			<?php endif; ?>
			</li>
			
			<?php if (count($item['children'])): ?>
				<li>
				<?php output_items($item['children']); ?>
				</li>
			<?php endif; ?>
		<?php endforeach; ?>
		</ul>
	<?php endif;
}
