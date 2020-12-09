<?php
require_once File::build_path(array("model","ModelContenu.php")); // chargement du modèle

class ControllerContenu {
    protected static $object ='contenu';

    public static function readAll() {

        $tab_contenu = ModelContenu::selectAll();         
        $view='contenugeneral';
        $pagetitle='Liste des Contenus';
        $controller='contenu';
        require File::build_path(array("view","view.php"));
    }

    public static function delete(){
        $idCommande = $_GET['idCommande'];
        $idProduit = $_GET['idProduit'];
        echo "Le contenu $idCommande | $idProduit vient d'être supprimé !";
        ModelContenu::deleteContenu($idCommande,$idProduit);
        ControllerContenu::readAll();
    }

    public static function create(){
        $idCommande = '';
        $idProduit = '';
        $quantite ='';
        

        $action='created';
        $restriction='required';
        $view='update';
        $pagetitle='Création contenu';
        $controller='contenu';
        require File::build_path(array("view","view.php"));
    }


    public static function created(){
        $idCommande = $_GET['idCommande'];
        $idProduit = $_GET['idProduit'];
        $quantite = $_GET['quantite'];

        $data = array(
        "idCommande" => $idCommande,
        "idProduit" => $idProduit,
        "quantite" => $quantite);

        

        $contenu = new ModelContenu($idCommande,$idProduit,$quantite);
        $contenu->save($data);

        ControllerContenu::readAll();
    }

    public static function update(){
        $idCommande = $_GET['idCommande'];
        $idProduit = $_GET['idProduit'];
        $quantite = ModelContenu::selectContenu($idCommande,$idProduit)->getQuantite();

        $restriction='readonly';
        $action='updated';

        $view='update';
        $pagetitle='Modification Contenu';
        $controller='contenu';
        require File::build_path(array("view","view.php"));
    }

    public static function updated(){
        $idCommande = $_GET['idCommande'];
        $idProduit = $_GET['idProduit'];


        $contenu = ModelContenu::selectContenu($idCommande,$idProduit);
        $data = array(
        "idCommande" => $idCommande,
        "idProduit" => $idProduit,
        "quantite" => $_GET['quantite']);

        $contenu->update($data);
        
        ControllerContenu::readAll();
    }  
}
?>
