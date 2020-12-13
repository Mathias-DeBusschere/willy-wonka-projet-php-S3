<?php
require_once File::build_path(array("model","ModelChocolat.php")); // chargement du modèle

class ControllerChocolat {
    protected static $object ='chocolat';

    public static function readAll() {
        $tab_chocolat = ModelChocolat::selectAll();
        $view='chocolatgeneral';
        $pagetitle='Liste des Chocolats';
        $controller='chocolat';
        require File::build_path(array("view","view.php"));
    }

    public static function read(){
        
        $chocolat = $_GET['id'];
        $c = ModelChocolat::select($chocolat);
        if ($c == null){
            $controller='error';
            $view='errorgeneral';
            $pagetitle='Oups :(';
            require File::build_path(array("view","view.php"));
        }else{
            $view='detail';
            $pagetitle='Page Produit';
            $controller='chocolat';
            require File::build_path(array("view","view.php"));
        }
    }

    public static function delete(){
        if (isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"] == 0) {
            $id = $_GET['id'];
            ModelChocolat::delete($id);
            ControllerChocolat::readAll();
        } else {
            ControllerChocolat::readAll();
        }
    }

    public static function create(){
        if (isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"] == 0) {
            $type = '';
            $nom = '';
            $prixkilo = '';
            $masse = '';
            $image = '';
            $description = '';
            $action='created';

            $restriction='required';
            $view='update';
            $pagetitle='Confection Chocolat';
            $controller='chocolat';
            require File::build_path(array("view","view.php"));
        } else {
            ControllerChocolat::readAll();
        }
    }

    public static function created(){
        if (isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"] == 0) {
            $data = array(
            "type" => $_GET['type'],
            "nom" => $_GET['nom'],
            "prixkilo" => $_GET['prixkilo'],
            "masse" => $_GET['masse'],
            "image" => $_GET['image'],
            "description" => $_GET['description']);

            ModelChocolat::save($data);

            ControllerChocolat::readAll();
        } else {
            ControllerChocolat::readAll();
        }
    }

    public static function update(){
        if (isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"] == 0) {
            $id = $_GET['id'];
            $type = ModelChocolat::select($id)->getType();
            $nom = ModelChocolat::select($id)->getNom();
            $prixkilo = ModelChocolat::select($id)->getPrixKilo();
            $masse = ModelChocolat::select($id)->getMasse();
            $image = ModelChocolat::select($id)->getImage();
            $description = ModelChocolat::select($id)->getDescription();

            $restriction='readonly';
            $action='updated';

            $view='update';
            $pagetitle='Modification Chocolat';
            $controller='chocolat';
            require File::build_path(array("view","view.php"));
        } else {
            ControllerChocolat::readAll();
        }
    }

    public static function updated(){
        if (isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"] == 0) {
            $id = $_GET['id'];
            $chocolat = ModelChocolat::select($id);

            $data = array(
            "id" => $id,
            "type" => $_GET['type'],
            "nom" => $_GET['nom'],
            "prixkilo" => $_GET['prixkilo'],
            "masse" => $_GET['masse'],
            "image" => $_GET['image'],
            "description" => $_GET['description']);
            $chocolat->update($data);

            ControllerChocolat::readAll();
        } else {
            ControllerChocolat::readAll();
        }
    }

    public static function addToCart() {
        $id = $_POST['idChocolat'];
        $quantity = $_POST['quantity'];

        if (!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = array();
        }

        $added = false;
        for ($i=0;$i<sizeof($_SESSION["cart"]);$i++) {
            if ($_SESSION["cart"][$i]["id"] == $id) {
                $_SESSION["cart"][$i]["quantity"] += $quantity;
                $added = true;
            }
        }

        if (!$added) {
            array_push($_SESSION['cart'], array("id" => $id, "quantity" => $quantity));
        }

        $controller='cart';
        $view='list';
        require File::build_path(array("view","view.php"));

    }

    public static function deleteFromCart() {

    }

    public static function emptyCart() {
        $_SESSION['cart'] = array();

        $controller='cart';
        $view='list';
        require File::build_path(array("view","view.php"));
    }

    
}
?>