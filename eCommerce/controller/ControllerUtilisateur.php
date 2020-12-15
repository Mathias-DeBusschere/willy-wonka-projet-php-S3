<?php
require_once (File::build_path(array("model","ModelUtilisateur.php")));

class ControllerUtilisateur {
    protected static $object='utilisateur';

    public static function readAll() {
       if (isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"] == 0) {

        $tab_utilisateurs = ModelUtilisateur::selectAll();
        $controller = 'utilisateur';
        $view = 'utilisateursgeneral';
        $pagetitle = 'Liste des utilisateur';
        require (File::build_path(array("view","view.php")));
       } else {
	       ControllerUtilisateur::connexion();
       }

    }

    public static function read(){
       if (isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"] == 0) {
        $id = $_GET["id"];

        $utilisateur = ModelUtilisateur::select($id);
        if ($utilisateur == null){
            $controller='error';
            $view='errorgeneral';
            $pagetitle='Oups :(';
            require File::build_path(array("view","view.php"));
        }else{
            $view='detail';
            $pagetitle='Page Utilisateur';
            $controller='utilisateur';
            require File::build_path(array("view","view.php"));
        }
       } else {
	       ControllerUtilisateur::connexion();
       }
    }

    public static function delete() {
       if (isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"] == 0) {
	$id = $_GET["id"];
        ModelUtilisateur::delete($email);
        $controller = 'utilisateur';
        $view = 'deleted';
        $pagetitle = 'Utilisateur supprimé';
        $tab_u = ModelUtilisateur::selectAll();
        require (File::build_path(array("view","view.php")));
       } else {
	       ControllerUtilisateur::connexion();
       }
    }

    public static function create() {
        $controller = 'utilisateur';
        $view = 'inscription';
        $pagetitle = 'Créer utilisateur';
        require (File::build_path(array("view","view.php")));
    }

    public static function creating() {
        $controller = 'utilisateur';
        $view = 'inscription';
        $pagetitle = 'Créer utilisateur';
        require (File::build_path(array("view","utilisateur","insc-check.php")));
        require (File::build_path(array("view","view.php")));
    }

    public static function created($data) {
        ModelUtilisateur::save($data);
        $controller = 'utilisateur';
        $view = 'insc-validation';
        $pagetitle = 'Inscription complète';
        require (File::build_path(array("view","view.php")));
    }

    public static function connexion() {
        $controller = 'utilisateur';
        $view = 'connexion';
        $pagetitle = 'Connexion';
        require (File::build_path(array("view","view.php")));
    }

    public static function connecting() {
        $controller = 'utilisateur';
        $view = 'connexion';
        $pagetitle = 'Connexion';
        require (File::build_path(array("view","utilisateur","connexion-check.php")));
        require (File::build_path(array("view","view.php")));
    }

    public static function connected() {
        require (File::build_path(array("view","view.php")));
    }

    public static function deconnexion() {
        require (File::build_path(array("view","utilisateur","deconnexion.php")));
        require (File::build_path(array("view","view.php")));
    }


//    public static function update($email) {
//        $controller = 'utilisateur';
//        $view = 'update';
//        $pagetitle = 'Mise à jour de l\'utilisateur';
//        $tab_v = ModelUtilisateur::select($email);
//        require (File::build_path(array("view","view.php")));
//    }
//
//    public static function updated() {
//        ModelVoiture::update(....);
//        $controller = 'utilisateur';
//        $view = 'updated';
//        $tab_v = ModelUtilisateur::select($_GET['immatriculation']);
//        require (File::build_path(array("view","view.php")));
//    }
}
?>
