<?php
require_once File::build_path(array("model","ModelChocolat.php")); // chargement du modèle

class ControllerChocolat {
    protected static $object ='chocolat';

    public static function readAll() {

        $tab_chocolat = ModelChocolat::selectAll();     
        $view='list';
        $pagetitle='Liste des Chocolats';
        require File::build_path(array("view","view.php"));
    }

    public static function read(){
        
        $chocolat = $_GET['id'];
        $c = ModelChocolat::select($chocolat);
        if ($c == null){
            //$view='error';
            //$pagetitle='Error';
            //require File::build_path(array("view","view.php"));
        }else{
            $view='detail';
            $pagetitle='Page Produit';
            require File::build_path(array("view","view.php"));
        }
    }

    
}
?>