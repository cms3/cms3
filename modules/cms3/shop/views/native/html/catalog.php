	<cms3:include renderer="template" name="caption" title="<?php echo $this->title; ?>" />

    <div class="prods_content2 prods_table2">

        <!-- CATALOG BEGIN -->

        <div class="catalog<?php if (@$this->with_sections): ?> sections<?php endif; ?>">
        
        <?php
            $last_type = NULL;
			foreach ($this->products as $product):
				echo $this->template('cms3\shop\catalog_product', array('product' => $product, 'last_type' => $last_type, 'with_sections' => @$this->with_sections));
                $last_type = $product['type']['id'];
			endforeach;
        ?>

	    </div>

        <!-- CATALOG END -->
        
        <?php
			if (isset($this->pagination)):
				echo $this->template('cms3\pagination\pagination', array('pagination' => $this->pagination));
			endif;
		?>

	</div>
