<?php
echo '
<form method="GET" action="index.php">
  
  <fieldset>
    <legend>Création commande :</legend>
    <p>
      <label for="id">Identifiant Commande</label> :
      <input value = "'. htmlspecialchars($id) .'" type="text" placeholder="Ex : 1" name="id" id="id" '.$restriction.'/>
    </p>
    <p>
      <label for="idUtilisateur">idUtilisateur</label> :
      <input value = "'. htmlspecialchars($idUtilisateur) .'"  type="text" placeholder="Ex : 1" name="idUtilisateur" id="idUtilisateur" required/>
    </p>
    <p>
      <input type="submit" value="Envoyer" />
    </p>
    <input type=\'hidden\' name=\'action\' value=\''.$action.'\'>
    <input type=\'hidden\' name=\'controller\' value=\''.static::$object.'\'>
  </fieldset> 
</form>'
?>
