<?php
require('functions.php');
if(deleteEtudiants($_GET["id"])):
    $_SESSION["message"] = "L'Etudiant a était bien supprimer";
        header("Location: etudiants.php");

endif;

?>