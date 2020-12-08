<?php
echo '
<form method="GET" action="index.php">
  
  <fieldset>
    <legend>Création contenu :</legend>
    <p>
      <label for="idCommande">Identifiant Commande</label> :
      <input value = "'. htmlspecialchars($idCommande) .'" type="text" placeholder="Ex : 1" name="idCommande" id="idCommande" '.$restriction.'/>
    </p>
    <p>
      <label for="idProduit">Identifiant Produit</label> :
      <input value = "'. htmlspecialchars($idProduit) .'"  type="text" placeholder="Ex : 1" name="idProduit" id="idProduit" required/>
    </p>
    <p>
      <label for="quantite">Quantité</label> :
      <input value = "'. htmlspecialchars($quantite) .'"  type="text" placeholder="Ex : 1" name="quantite" id="quantite" required/>
    </p>
    <p>
      <input type="submit" value="Envoyer" />
    </p>
    <input type=\'hidden\' name=\'action\' value=\''.$action.'\'>
    <input type=\'hidden\' name=\'controller\' value=\''.static::$object.'\'>
  </fieldset> 
</form>'
?>
