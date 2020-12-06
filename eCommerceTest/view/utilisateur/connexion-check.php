<?php
    if (isset($_POST["login-submit"])) {
        
    } else {
        require File::build_path(array("view","utilisateur","connexion.php"));
        exit();
    }
?>