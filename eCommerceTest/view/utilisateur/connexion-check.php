<?php
    if (isset($_POST["login-submit"])) {
        $email = $_POST["email"];
        $password = $_POST["pwd"];
        $hashedPwd = Security::hasher($password);

        if (empty($email) || empty($password)) {
            $_POST["error"] = "emptyFields";
	    ControllerUtilisateur::connexion();
            exit();
        } else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $_POST["error"] = "invalidEmail";
	    ControllerUtilisateur::connexion();
            exit();
        } else if (!ModelUtilisateur::checkPassword($email,$hashedPwd)) {
            $_POST["error"] = "invalidPwdEmailPair";
	    ControllerUtilisateur::connexion();
            exit();
        } else if (ModelUtilisateur::checkPassword($email,$hashedPwd)){
		if (is_null(ModelUtilisateur::selectByEmail($email)->getNonce())) {
		    $_SESSION['idUser'] = ModelUtilisateur::selectByEmail($email)->getId();
		    $_SESSION['emailUser'] = $email;
		    $_SESSION['isAdmin'] = ModelUtilisateur::selectByEmail($email)->getAdmin();
		    
		    if (isset($_POST["remember_me"]) && $_POST["remember_me"] == "on") {
			$_SESSION['stayLogged'] = 'on';
		    }
		    header ("Location: index.php");
		} else {
		    $_POST["error"] = "invalidAccount";
		    ControllerUtilisateur::connexion();
		    exit();
		}

        } else {
	    ControllerUtilisateur::connexion();
            exit();
        }
    } else {
	ControllerUtilisateur::connexion();
        exit();
    }
?>
