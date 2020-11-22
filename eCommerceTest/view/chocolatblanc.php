
			<section class="page_product">
				<h2 hidden>placholder</h2>
				<article class="product">
					<div class="image">
						<img class="product_img" src="images/products/wonka-bar-blanc.jpg" alt="product_image" />
					</div>
					<div class="details">
						<h2><span class="wonka_font">Wonka Bar</span> 100g blanc</h2>
						<p class="detailed_info">
							xxx g<br />
							xx,xx €/KG
						</p>
						<h2 class="product_price">XX.XX€</h2>
						<p class="product_desc">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<form action="cart.html" method="post" class="add_cart">
							<input type="hidden" name="item_id" value="0002" />
							<input type="number" name="quantity" min="1" value="1" required class="quantity" />
							<input type="submit" name="submit" value="Ajouter au panier" class="submit_to_cart">
						</form>
					</div>
				</article>
				<article class="review">
					<h2>Écrire un commentaire: </h2>
					<form action="chocolateid0002.html" method="post" class="review_post"> 
						<h3><label for="review_title">Ajoutez un titre:</label></h3>
						<input type="text" name="review_title" id="review_title" maxlength="30" placeholder="Qu'est ce qui est le plus important à savoir ?" required />
						<h3><label for="review_desc">Décrivez votre expérience:</label></h3>
						<textarea placeholder="Pour quelles utilisations avez-vous employé ce produit ? Qu'est-ce que vous avez aimé ou n'avez pas aimé ?" name="review_desc" maxlength="300" rows="5" id="review_desc" required ></textarea>
						<input type="submit" class="review_post_button" name="submit_review" value="Nouveau commentaire" />
					</form>
				</article>
			</section>
			<section class="other_products">
				<h1 class="other_products_title">Autres produits:</h1>
				<div class="other_products_list">
					<article class="other_product_article">
						<a href="chocolateid0000.html">
							<div class="image">
								<img class="product_img" src="images/products/wonka-bar-noir.jpg" alt="product_image" />
							</div>
							<h2><span class="wonka_font">Wonka Bar</span> 100g noir</h2>
							<p class="product_price">XX.XX€</p>
						</a>
							<form action="cart.html" method="post" class="other_product_cart">
								<input type="hidden" name="item_id" value="0000" />
								<input type="hidden" name="add_one_cart" class="add_one_cart" value="1" />
								<input type="submit" name="add_one_cart_submit" value="" />
							</form>
					</article>
					<article class="other_product_article">
						<a href="chocolateid0001.html">
							<div class="image">
								<img class="product_img" src="images/products/wonka-bar-lait.jpg" alt="product_image" />
							</div>
							<h2><span class="wonka_font">Wonka Bar</span> 100g au Lait</h2>
							<p class="product_price">XX.XX€</p>
						</a>
							<form action="cart.html" method="post" class="other_product_cart">
								<input type="hidden" name="item_id" value="0001" />
								<input type="hidden" name="add_one_cart" class="add_one_cart" value="1" />
								<input type="submit" name="add_one_cart_submit" value="" />
							</form>
					</article>
				</div>
			</section>
		