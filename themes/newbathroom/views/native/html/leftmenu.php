<?php 

$render = function($items, $itself)
{
?>
<ul class="categories">
	<?php foreach($items as $i => $item): ?>
		<li<?php
			$class = '';
			if ($i == 0):
				$class = 'first';
			endif;
			if ($i == count($items) - 1):
				$class .= ($i == 0) ? ' ' : '' . 'last';
			endif;
			if (! empty($class)):
				echo ' class="' . $class . '"';
			endif;
		?>><?php
		
	
		if (FALSE && $item['active']): // TODO
			?><span class="active selected"><span><?php echo $item['title'] ?></span></span><?php
		else:
			if (count($item['children'])):
				?><strong><?php
			else:
				?><a href="<?php echo $item['uri'] ?>"<?php if ($item['active']) echo ' class="selected"'; ?>><span><?php
			endif;
			echo $item['title'];
			if (count($item['children'])):
				?></strong><span class="category_arrow"></span><?php
			else:
				?></span></a><?php
			endif;
			?></a><?php
			
		endif;

		?><?php
		
		if (count($item['children'])):
			$itself($item['children'], $itself);
		endif;
		
		?>
		</li>
	<?php endforeach; ?>
</ul>
<?php
};

$render($this->items, $render);
?>

