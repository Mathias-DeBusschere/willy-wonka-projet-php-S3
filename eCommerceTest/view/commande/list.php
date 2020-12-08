<?php
foreach ($tab_commande as $commande){
		echo '<p>| '.$commande->getId().' | '.$commande->getIdUtilisateur().' | '.
	'<a href="index.php?controller=commande&action=update&id='.rawurlencode($commande->getId()).'"><img src="images/header/settings.png" alt="delete" style="width: 30px;height: 30px;background-color: #888A8588;border-radius: 100%;justify-content: space-around;align-items: center;"></a>'.
	'<a href="index.php?controller=commande&action=delete&id='.rawurlencode($commande->getId()).'"><img src="images/header/delete.png" alt="delete" style="width: 30px;height: 30px;background-color: #888A8588;border-radius: 100%;justify-content: space-around;align-items: center;"></a></p>'
	;

	}
?>

