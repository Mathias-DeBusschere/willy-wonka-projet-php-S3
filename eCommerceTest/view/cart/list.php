<h1 id=\"top_page_title\">Panier</h1>
<section class=\"cart\">
<?php
    foreach ($_SESSION["cart"] as $item) {
        echo "<p>Product id : " . $item["id"] . ", quantity : " . $item["quantity"] . "</p>";
    }
    echo "</br><p><a href=\"index.php?controller=chocolat&action=emptyCart\">vider le panier</a></p>";

?>
    <h2>Votre panier est vide pour le moment.</h2>
    <p>
        Votre panier est là pour vous servir. Donnez-lui un but: remplissez le de chocolats.
    </p>
    <p>
        Continuez vos achats sur <a href=\"chocolategeneral.html\">willywonka.fr</a>.
    </p>
</section>"
