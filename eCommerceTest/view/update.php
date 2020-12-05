<?php
echo '
<form method="GET" action="index.php">
  
  <fieldset>
    <legend>Confection du Chocolat :</legend>
    <p>
      <label for="id">Identifiant</label> :
      <input value = "'. htmlspecialchars($id) .'" type="text" placeholder="Ex : 1" name="id" id="id" '.$restriction.'/>
    </p>
    <p>
      <label for="type">Type de produit</label> :
      <input value = "'. htmlspecialchars($type) .'" type="text" placeholder="Ex : Wonka Bar" name="type" id="type" required/>
    </p>
    <p>
      <label for="nom">Nom du poduit</label> :
      <input value = "'. htmlspecialchars($nom) .'"  type="text" placeholder="Ex : Chocolat au Lait" name="nom" id="nom" required/>
    </p>
    <p>
      <label for="prixkilo">Prix au kilo</label> :
      <input value = "'. htmlspecialchars($prixkilo) .'" type="text" placeholder="Ex : 20" name="prixkilo" id="prixkilo" required/>
    </p>
    <p>
      <label for="masse">Masse du produit en grammes</label> :
      <input value = "'. htmlspecialchars($masse) .'" type="text" placeholder="Ex : 100" name="masse" id="masse" required/>
    </p>
    <p>
      <label for="image">Lien de l\'image</label> :
      <input value = "'. htmlspecialchars($image) .'" type="text" placeholder="Ex : images/products/wonka-bar-noir.jpg" name="image" id="image" required/>
    </p>
    <p>
      <label for="description">Description</label> :
      <input value = "'. htmlspecialchars($description) .'" type="text" placeholder="Ex : Lorem " name="description" id="description" required/>
    </p>
    <p>
      <input type="submit" value="Envoyer" />
    </p>
    <input type=\'hidden\' name=\'action\' value=\''.$action.'\'>
    <input type=\'hidden\' name=\'controller\' value=\''.static::$object.'\'>
  </fieldset> 
</form>'
?>
