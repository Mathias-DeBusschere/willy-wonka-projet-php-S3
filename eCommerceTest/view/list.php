<?php
foreach ($tab_chocolat as $chocolat)
	
	if(isset($c)){
		if($c->getId() != $chocolat->getId()){
			echo '
		<article class="other_product_article">
			<a href="index.php?action=read&id='.$chocolat->getId().'">
				<div class="image">
					<img class="product_img" src="'.$chocolat->getImage().'" alt="product_image" />
				</div>
				<h2><span class="wonka_font">'.$chocolat->getType().'</span> - '.$chocolat->getNom().' - '. $chocolat->getMasse() .'g </h2>
				<p class="product_price">'. $chocolat->getPrixKilo()*($chocolat->getMasse()/1000) .'€</p>
			</a>
				<form action="cart.html" method="post" class="other_product_cart">
					<input type="hidden" name="item_id" value="0000" />
					<input type="hidden" name="add_one_cart" class="add_one_cart" value="1" />
					<input type="submit" name="add_one_cart_submit" value="" />
				</form>
				<a href="index.php?action=delete&id='.$chocolat->getId().'">
					<img class="other_product_delete" src="images/header/delete.png" alt="delete" style="position: absolute;left: 3px;bottom: 3px;width: 30px;height: 30px;background-color: #888A8588;border-radius: 100%;display: flex;justify-content: space-around;align-items: center;">
				</a>
		</article>';}
	}else{
		echo '
		<article class="other_product_article">
			<a href="index.php?action=read&id='.$chocolat->getId().'">
				<div class="image">
					<img class="product_img" src="'.$chocolat->getImage().'" alt="product_image" />
				</div>
				<h2><span class="wonka_font">'.$chocolat->getType().'</span> - '.$chocolat->getNom().' - '. $chocolat->getMasse() .'g </h2>
				<p class="product_price">'. $chocolat->getPrixKilo()*($chocolat->getMasse()/1000) .'€</p>
			</a>
				<form action="cart.html" method="post" class="other_product_cart">
					<input type="hidden" name="item_id" value="0000" />
					<input type="hidden" name="add_one_cart" class="add_one_cart" value="1" />
					<input type="submit" name="add_one_cart_submit" value="" />
				</form>
				<a href="index.php?action=delete&id='.$chocolat->getId().'">
					<img class="other_product_delete" src="images/header/delete.png" alt="delete" style="position: absolute;left: 3px;bottom: 3px;width: 30px;height: 30px;background-color: #888A8588;border-radius: 100%;display: flex;justify-content: space-around;align-items: center;">
				</a>
		</article>';
	}
	
?>

