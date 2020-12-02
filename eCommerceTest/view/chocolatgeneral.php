<section class="other_products" id="general">
	<h1 id="top_page_title">Nos Chocolats</h1>
	<div class="other_products_list general">
		<?php
		$tab_chocolat = ModelChocolat::selectAll(); 
			require File::build_path(array("view","list.php"));
		?>
	</div>
</section>