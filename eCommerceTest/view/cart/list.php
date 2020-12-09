<?php
    foreach ($_SESSION["cart"] as $item) {
        echo "<p>Product id : " . $item["id"] . ", quantity : " . $item["quantity"] . "</p>";
    }
    echo "</br><p><a href=\"index.php?controller=chocolat&action=emptyCart\">vider le panier</a></p>";

?>