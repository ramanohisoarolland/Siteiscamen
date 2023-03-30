<?php


function database()
{

    /* Base donnée */
    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "projetiscamen";

    $db = new PDO("mysql:host=" . $host . ";dbname=" . $database, $username, $password,
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT
        )
    );

    return $db;

}

/* Inscription étudiant */
function inscriptionEtudiant($nom, $cne, $filiere, $niveau)
{

    $db = database();

    $sttm = $db->prepare("INSERT INTO etudiant ( nom, cne,filiere niveau) VALUE (:nom, :cne, :filiere :niveau)");

    $sttm->bindParam(':nom', $nom);
    $sttm->bindParam(':cne', $cne);
    $sttm->bindParam(':filiere', $filiere);
    $sttm->bindParam(':niveau', $niveau);

    if ($sttm->execute()) {
        return true;
    }

    return false;

}


function inscriptionEcolage($mois, $date,$somme)
{

    $db = database();

    $sttm = $db->prepare("INSERT INTO ecolage (mois, date, somme) VALUE (:mois, :date, :somme)");

    $sttm->bindParam(':mois', $mois);
    $sttm->bindParam(':date', $date);
    $sttm->bindParam(':somme', $somme);

    if ($sttm->execute()) {
        return true;
    }

    return false;
}

if (isset($_POST['enregistrer'])) 
{
                    if (inscriptionEtudiant($_POST["nom"], $_POST["cne"], $_POST["filiere"],  $_POST["niveau"]) || inscriptionEcolage($_POST["mois"],  $_POST["date"], $_POST["somme"])) {

                        $_SESSION["message"] = "Vous êtes maintenant inscrit ! merci de se connecter utilisant votre username et mot de passe";
                        header("Location: caisse.php");
                        exit();
                    }

                } 

?>