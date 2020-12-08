<section class="other_products" id="general">
	<h1 id="top_page_title">Contenus</h1>
		<?php
		$tab_contenu = ModelContenu::selectAll(); 
			require File::build_path(array("view","contenu","list.php"));
		?>
		<a href="index.php?controller=contenu&action=create"> <h1>Nouveau contenu</h1></a>
</section>