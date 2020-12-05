<?php
require_once File::build_path(array("model","ModelChocolat.php")); // chargement du modèle

class ControllerChocolat {
    protected static $object ='chocolat';

    public static function readAll() {

        $tab_chocolat = ModelChocolat::selectAll();     
        $view='chocolatgeneral';
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

    public static function delete(){
        $id = $_GET['id'];
        echo "Le chocolat $id vient d'être supprimé !";
        ModelChocolat::delete($id);
        ControllerChocolat::readAll();
    }

    public static function create(){
        $id = '';
        $type = '';
        $nom = '';
        $prixkilo = '';
        $masse = '';
        $image = '';
        $description = '';
        $action='created';

        $view='update';
        $pagetitle='Confection Chocolat';
        require File::build_path(array("view","view.php"));
    }

    public static function created(){
        $data = array(
        "id" => $_GET['id'],
        "type" => $_GET['type'],
        "nom" => $_GET['nom'],
        "prixkilo" => $_GET['prixkilo'],
        "masse" => $_GET['masse'],
        "image" => $_GET['image'],
        "description" => $_GET['description']);

        $id = $_GET['id'];
        $type = $_GET['type'];
        $nom = $_GET['nom'];
        $prixkilo = $_GET['prixkilo'];
        $masse = $_GET['masse'];
        $image = $_GET['image'];
        $description = $_GET['description'];

        $chocolat = new ModelChocolat($id,$type,$nom,$prixkilo,$masse,$image,$description);
        $chocolat->save($data);
        // $view='created';
        // $pagetitle='Validation Confection';
        // require File::build_path(array("view","view.php"));

        ControllerChocolat::readAll();
        // $view='list';
        // $pagetitle='Liste Chocolats';
        // $tab_chocolat = ModelChocolat::selectAll(); 
        // require File::build_path(array("view","view.php"));
    }

    
}
?>