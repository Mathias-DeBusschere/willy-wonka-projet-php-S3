<?php
require_once File::build_path(array("model","ModelCommande.php")); // chargement du modèle

class ControllerCommande {
    protected static $object ='commande';

    public static function readAll() {

        $tab_commande = ModelCommande::selectAll();         
        $view='commandegeneral';
        $pagetitle='Liste des Commandes';
        $controller='commande';
        require File::build_path(array("view","view.php"));
    }

    public static function read(){
        
        $c = $_GET['id'];
        $commande = ModelCommande::select($c);
        if ($commande == null){
            $controller='error';
            $view='errorgeneral';
            $pagetitle='Oups :(';
            require File::build_path(array("view","view.php"));
        }else{
            $view='detail';
            $pagetitle='Détails commande';
            $controller='commande';
            require File::build_path(array("view","view.php"));
        }
    }

    public static function delete(){
        $id = $_GET['id'];
        ModelCommande::delete($id);
        ControllerCommande::readAll();
    }

    public static function create(){
        $id = '';
        $idUtilisateur = '';
        

        $action='created';
        $restriction='';
        $view='update';
        $pagetitle='Création commande';
        $controller='commande';
        require File::build_path(array("view","view.php"));
    }


    public static function created(){
        
        $idUtilisateur = $_GET['idUtilisateur'];

        $data = array(
            "id" => 'null',
        "idUtilisateur" => $idUtilisateur);

    
        ModelCommande::save($data);

        ControllerCommande::readAll();
    }

    
}
?>
