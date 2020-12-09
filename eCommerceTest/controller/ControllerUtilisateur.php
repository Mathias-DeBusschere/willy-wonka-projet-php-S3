<?php
require_once (File::build_path(array("model","ModelUtilisateur.php")));

class ControllerUtilisateur {
    protected static $object='utilisateur';

    public static function readAll() {
        $tab_u = ModelUtilisateur::selectAll();
        $controller = 'utilisateur';
        $view = 'list';
        $pagetitle = 'Liste des utilisateur';
        require (File::build_path(array("view","view.php")));
    }

    public static function read($email){
        $controller = 'utilisateur';
        if ($tab_u = ModelUtilisateur::select($email)) {
            $view = 'detail';
            $pagetitle = 'Detail Utilisateur';
            require (File::build_path(array("view","view.php")));
        }
        else{
            $view = 'error';
            $pagetitle = 'ERROR';
            require (File::build_path(array("view","view.php")));
        }
    }

    public static function delete($email) {
        ModelUtilisateur::delete($email);
        $controller = 'utilisateur';
        $view = 'deleted';
        $pagetitle = 'Utilisateur supprimé';
        $tab_u = ModelUtilisateur::selectAll();
        require (File::build_path(array("view","view.php")));
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
	$controller = 'utilisateur';
	$view = 'deconnexion';
	$pagetitle = 'Connexion';
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
