<?php
//require_once File::build_path(array("model","ModelChocolat.php")); // chargement du modèle

class ControllerCart {
    protected static $object ='cart';

    public static function showCart() {
        $controller='cart';
        $view='list';
        require File::build_path(array("view","view.php"));

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
	unset($_SESSION["cart"][$_GET["idInCart"]]);
	
        $controller='cart';
        $view='list';
        require File::build_path(array("view","view.php"));


    }

    public static function emptyCart() {
        $_SESSION['cart'] = array();

        $controller='cart';
        $view='list';
        require File::build_path(array("view","view.php"));
    }

    
}
?>
