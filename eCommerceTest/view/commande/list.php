<?php
foreach ($tab_commande as $commande){
		echo '<a href="index.php?controller=commande&action=read&id='.rawurlencode($commande->getId()).'">
	<article class="other_product_article" style="width:100%">
	  IdCommande:'.$commande->getId().' | IdUtilisateur: '
	.$commande->getIdUtilisateur().' |</article> </a>';
}
?>

