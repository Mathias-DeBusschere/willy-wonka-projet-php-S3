
<h1 id="top_page_title">Upload d'Images Produits</h1>
<article>
	<h2 hidden>placeholder</h2>
	<form method="post" enctype="multipart/form-data">
			<p><input type="file" name="nom-du-fichier"></p>
			<p><input type="submit" value="Envoyer" class ="boutton"></p>
	</form>
	<?php
		if (!empty($_FILES['nom-du-fichier']) && is_uploaded_file($_FILES['nom-du-fichier']['tmp_name'])) {
 			$name = $_FILES['nom-du-fichier']['name'];
			$pic_path = File::build_path(array("images","products","$name"));
			$allowed_ext = array("jpg", "jpeg", "png");
			$explosion = explode('.',$_FILES['nom-du-fichier']['name']);
			if (!in_array(end($explosion), $allowed_ext)) {
			  echo "Mauvais type de fichier !";
			  die;
			}

			if (!move_uploaded_file($_FILES['nom-du-fichier']['tmp_name'], $pic_path)) {
			  echo "La copie a échoué";
			}else{
				echo "Le lien de l'image est : images/products/$name";
			}

			
		}
	?>
</article>
