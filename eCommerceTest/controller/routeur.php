<?php
require_once File::build_path(array("controller","ControllerChocolat.php"));
require_once File::build_path(array("controller","ControllerCommande.php"));

if(isset($_GET['page'])){
	$page = $_GET['page'];
}else{
 	$page = "accueil";
}

if(isset($_GET['action'])){
	$action = $_GET['action'];
}

if(isset($_GET['controller'])){
 	$controller = $_GET['controller'];
 	$controller_class = 'Controller'.ucfirst($controller);
	$class_methods = get_class_methods('ControllerVoiture');
}




// if(class_exists($controller_class)){
// 	if(in_array($action, $class_methods)){
// 		$controller_class::$action(); 
// 	}else{
// 		$controller='chocolat';
// 	    $view='error';
// 	    $pagetitle='Error';
// 	    require File::build_path(array("view","view.php"));
// 	}
// }else{
// 	$controller='chocolat';
//  $view='error';
//  $pagetitle='Error';
//  require File::build_path(array("view","view.php"));
// }
if(isset($action) && isset($controller)){
	$controller_class::$action();
}else{
	$view=$page;
	$pagetitle='Accueil';
	require_once File::build_path(array("view","view.php"));
}



//ControllerChocolat::readAll();
?>