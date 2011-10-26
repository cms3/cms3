<ul>
<?php 
$render = function($items, $itself)
{
?>
	<?php foreach($items as $i => $item): ?>
		<li<?php 
			$class = '';
			if ($i == 0):
				$class = 'first';
			endif;
			if ($i == count($items) - 1):
				$class .= ' last';
			endif;
			if (! empty($class)):
				echo ' class="' . $class . '"';
			endif;
		?>><?php
		
		if (FALSE && $item['active']): // TODO
			?><span class="active selected"><?php echo $item['title'] ?></span><?
		else:
			?><a href="<?php echo $item['uri'] ?>"<?php if ($item['selected']) echo ' class="selected"'; ?>><?php echo $item['title'] ?></a><?
		endif;

		?><?php
		
		$itself($item['children'], $itself);
		
		?>
		</li>
	<?php endforeach; ?>
<?php
};

$render($this->items, $render);
?>
</ul>
