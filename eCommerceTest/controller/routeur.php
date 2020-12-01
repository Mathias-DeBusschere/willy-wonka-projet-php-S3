<?php
//require_once File::build_path(array("controller","ControllerVoiture.php"));
//require_once File::build_path(array("controller","ControllerUtilisateur.php"));
//require_once File::build_path(array("controller","ControllerTrajet.php"));

// On recupère l'action passée dans l'URL
// if(isset($_GET['action'])){
// 	$action = $_GET['action'];
// }else{
// 	$action = "readAll";
// }

// if(isset($_GET['controller'])){
// 	$controller = $_GET['controller'];
// }else{
// 	$controller = "voiture";
// }

// $controller_class = 'Controller'.ucfirst($controller);
// $class_methods = get_class_methods('ControllerVoiture');

// if(class_exists($controller_class)){
// 	if(in_array($action, $class_methods)){
// 		$controller_class::$action(); 
// 	}else{
// 		$controller='voiture';
// 	    $view='error';
// 	    $pagetitle='Error';
// 	    require File::build_path(array("view","view.php"));
// 	}
// }else{
// 	$controller='voiture';
//     $view='error';
//     $pagetitle='Error';
//     require File::build_path(array("view","view.php"));
// }

if(isset($_GET['page'])){
	$page = $_GET['page'];
}else{
 	$page = "accueil";
}

$view=$page;
$pagetitle='Accueil';
require_once File::build_path(array("view","view.php"));

// Appel de la méthode statique $action de ControllerVoiture



?>