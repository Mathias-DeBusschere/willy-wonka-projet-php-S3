<?php
    session_unset();
    session_destroy();
    setcookie(session_name(),'',time()-1);
    require File::build_path(array("view","accueil.php"));
?>