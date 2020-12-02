<section class="other_products" id="general">
<h1 id="top_page_title">Nos Chocolats</h1>
<div class="other_products_list general">
<?php
foreach ($tab_chocolat as $chocolat)
	echo '
	<article class="other_product_article">
			<a href="index.php?page=chocolatnoir">
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
		</article>';
?>
</div>
</section>
