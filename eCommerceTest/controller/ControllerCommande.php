<?php
require_once File::build_path(array("model","ModelCommande.php")); // chargement du modèle

class ControllerCommande {
    protected static $object ='commande';

    public static function readAll() {

        $tab_commande = ModelCommande::selectAll();     
        echo"yoooo";
    }

    
}
?>