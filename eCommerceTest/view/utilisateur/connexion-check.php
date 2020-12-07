<?php
    if (isset($_POST["login-submit"])) {
        $email = $_POST["email"];
        $password = $_POST["pwd"];
        $hashedPwd = Security::hacher($password);

        if (empty($email) || empty($password)) {
            $_POST["error"] = "emptyFields";
            require File::build_path(array("view","utilisateur","connexion.php"));
            exit();
        } else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $_POST["error"] = "invalidEmail";
            require File::build_path(array("view","utilisateur","connexion.php"));
            exit();
        } else if (ModelUtilisateur::checkPassword($email,$hashedPwd)) {
            $_POST["error"] = "invalidPwdEmailPair";
            require File::build_path(array("view","utilisateur","connexion.php"));
            exit();
        } else {
//            session
        }
    } else {
        require File::build_path(array("view","utilisateur","connexion.php"));
        exit();
    }
?>