<section class="other_products" id="general">
	<h1 id="top_page_title">Commandes</h1>
		<?php
		$tab_chocolat = ModelCommande::selectAll(); 
			require File::build_path(array("view","commande","list.php"));

		?>
		<a href="index.php?controller=commande&action=create"> <h1>Nouvelle commande</h1></a>
</section>