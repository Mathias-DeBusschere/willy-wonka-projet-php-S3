<section class="page_product">
	<article class="other_product_article" style="width:100%">
		<?php 
		$tab_contenu = ModelCommande::selectAllContenu($commande->getId());
		echo '<p style="padding: 20px;">Commande N°'.$commande->getId().'     -    '.ModelUtilisateur::select($commande->getIdUtilisateur())->getNom().','.ModelUtilisateur::select($commande->getIdUtilisateur())->getPrenom().'</p>

		<table style ="width: 100%; text-align: center;">
    		<thead>
		        <tr>
		            <th>Produit</th>
		            <th>Quantité</th>
		            <th>Prix Unitaire</th>
		            <th>Prix Total</th>
		            <th>Actions</th>
		        </tr>
		    </thead>
		    <tbody>

		';
		$total=0;
		foreach ($tab_contenu as $contenu){
			$total =$total + $contenu->getQuantite()*ModelChocolat::select($contenu->getIdProduit())->getPrixKilo();
		echo '
		
		        <tr>
		            <td><a href="index.php?controller=chocolat&action=read&id='.$contenu->getIdProduit().'">'.ModelChocolat::select($contenu->getIdProduit())->getType().' '.ModelChocolat::select($contenu->getIdProduit())->getNom().'</a></td>
		            <td>'.$contenu->getQuantite().'</td>
		            <td>'.ModelChocolat::select($contenu->getIdProduit())->getPrixKilo().'</td>
		            <td>'.$contenu->getQuantite()*ModelChocolat::select($contenu->getIdProduit())->getPrixKilo().'</td>
		            <td>
		            	<a href="index.php?controller=contenu&action=update&idCommande='.rawurlencode($contenu->getIdCommande()).'&idProduit='.rawurlencode($contenu->getIdProduit()).'"><img src="images/header/settings.png" alt="delete" style="width: 30px;height: 30px;background-color: #888A8588;border-radius: 100%;justify-content: space-around;align-items: center;"></a>
		            	<a href="index.php?controller=contenu&action=delete&idCommande='.rawurlencode($contenu->getIdCommande()).'&idProduit='.rawurlencode($contenu->getIdProduit()).'"><img src="images/header/delete.png" alt="delete" style="width: 30px;height: 30px;background-color: #888A8588;border-radius: 100%;justify-content: space-around;align-items: center;"></a>
		        </tr>
		    
		';}
		echo '
				<tr>
		            <td></td>
		            <td></td>
		            <td></td>
		            <td>'.$total.'</td>
		        </tr>
			</tbody>
		</table>';

		?>
		<a href="index.php?controller=commande&action=readAll">Retour</a>
	</article>
</section>
