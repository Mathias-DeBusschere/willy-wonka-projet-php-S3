<?php
require_once File::build_path(array("model","ModelCommande.php")); // chargement du modèle

class ControllerCommande {
    protected static $object ='commande';

    public static function readAll() {

        $tab_commande = ModelCommande::selectAll();         
        $view='commandegeneral';
        $pagetitle='Liste des Commandes';
        require File::build_path(array("view","view.php"));
    }

    public static function delete(){
        $id = $_GET['id'];
        echo "La commande $id vient d'être supprimé !";
        ModelCommande::delete($id);
        ControllerCommande::readAll();
    }

    public static function create(){
        $id = '';
        $idProduit = '';
        $idUtilisateur = '';
        

        $action='created';
        $restriction='required';
        $view='update';
        $pagetitle='Création commande';
        require File::build_path(array("view","view.php"));
    }


    public static function created(){
        $data = array(
        "id" => $_GET['id'],
        "idProduit" => $_GET['idProduit'],
        "idUtilisateur" => $_GET['idUtilisateur']);

        $id = $_GET['id'];
        $idProduit = $_GET['idProduit'];
        $idUtilisateur = $_GET['idUtilisateur'];

        $commande = new ModelCommande($id,$idProduit,$idUtilisateur);
        $commande->save($data);

        ControllerCommande::readAll();
    }

    public static function update(){
        $id = $_GET['id'];
        $idProduit = ModelCommande::select($id)->getIdProduit();
        $idUtilisateur = ModelCommande::select($id)->getIdUtilisateur();

        $restriction='readonly';
        $action='updated';

        $view='update';
        $pagetitle='Modification Commande';
        require File::build_path(array("view","view.php"));
    }

    public static function updated(){
        $id = $_GET['id'];


        $commande = ModelCommande::select($id);
        $data = array(
        "id" => $_GET['id'],
        "idProduit" => $_GET['idProduit'],
        "idUtilisateur" => $_GET['idUtilisateur']);

        $commande->update($data);
        
        ControllerCommande::readAll();
    }


    
}
?>