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
				$class .= ($i == 0) ? ' ' : '' . 'last';
			endif;
			if (! empty($class)):
				echo ' class="' . $class . '"';
			endif;
		?>><?php
		
		if (FALSE && $item['active']): // TODO
			?><span class="active selected"><?php echo $item['title'] ?></span><?php
		else:
			?><a href="<?php echo $item['uri'] ?>"<?php if ($item['selected']) echo ' class="selected"'; ?>><?php echo $item['title'] ?></a><?php
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
