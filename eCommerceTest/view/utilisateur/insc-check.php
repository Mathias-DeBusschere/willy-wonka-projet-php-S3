<?php
    if(isset($_POST["signup-submit"])) {

        $prenom = $_POST["prenom"];
        $nom = $_POST["nom"];
        $gender = $_POST["gender"];
        $other_gender = $_POST["other_gender"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $pwd_repeat = $_POST["pwd-repeat"];

        if (empty($prenom) || empty($nom) || empty($email) || empty($pwd) || empty($pwd_repeat) || (empty($gender) && empty($other_gender))) {
            $_POST["error"] = "emptyFields";
            require File::build_path(array("view","utilisateur","inscription.php"));
            exit();
        } else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $_POST["error"] = "invalidEmail";
            unset($_POST["email"]);
            require File::build_path(array("view","utilisateur","inscription.php"));
            exit();
        } else if (ModelUtilisateur::select($email)) {
            $_POST["error"] = "emailAlreadyUsed";
            unset($_POST["email"]);
            require File::build_path(array("view","utilisateur","inscription.php"));
            exit();
        } else if ($pwd != $pwd_repeat) {
            $_POST["error"] = "paswordRepeat";
            require File::build_path(array("view","utilisateur","inscription.php"));
            exit();
        } else {
            if (empty($gender))
                $gender = $other_gender;

            $hashed_pwd = Security::hacher($pwd);
            $nonce = Security::generateRandomHex();

            $data = array(
                "prenom" => $prenom,
                "nom" => $nom,
                "gender" => $gender,
                "email" => $email,
                "password" => $hashed_pwd,
                "admin" => 1,
                "nonce" => $nonce
            );
            ControllerUtilisateur::created($data);

        }

    } else {
        require File::build_path(array("view","utilisateur","inscription.php"));
        exit();
    }

?>
