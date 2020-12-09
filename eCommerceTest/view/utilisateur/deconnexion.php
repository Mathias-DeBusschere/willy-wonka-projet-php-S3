<?php
    session_unset();
    session_destroy();
//    setcookie(session_name(),'',time()-1)
    echo "<p> Vous êtes déconnecté, retourner à <a href=\"index.php\">l'accueil</a></p>";
?>
