<?php

include('../dbcon.php');
// insertion de donnee
    if (isset($_POST['enregistrer'])) {
        
        $heure = $_POST['heure'];
        $heure1 = $_POST['heure1'];
        $heure2 = $_POST['heure2'];
        $heure3 = $_POST['heure3'];
        $filiere = $_POST['filiere'];
        $niveau = $_POST['niveau'];
        $lundi = $_POST['lundi'];
        $lundi1 = $_POST['lundi1'];
        $lundi2 = $_POST['lundi2'];
        $lundi3 = $_POST['lundi3'];
        $mardi = $_POST['mardi'];
        $mardi1 = $_POST['mardi1'];
        $mardi2 = $_POST['mardi2'];
        $mardi3 = $_POST['mardi3'];
        $mercredi = $_POST['mercredi'];
        $mercredi1 = $_POST['mercredi1'];
        $mercredi2 = $_POST['mercredi2'];
        $mercredi3 = $_POST['mercredi3'];
        $jeudi = $_POST['jeudi'];
        $jeudi1 = $_POST['jeudi1'];
        $jeudi2 = $_POST['jeudi2'];
        $jeudi3 = $_POST['jeudi3'];
        $vendredi = $_POST['vendredi'];
        $vendredi1 = $_POST['vendredi1'];
        $vendredi2 = $_POST['vendredi2'];
        $vendredi3 = $_POST['vendredi3'];
                $query = 'INSERT INTO emploi_du_temp(heure, heure1, heure2, heure3,filiere, niveau, lundi, lundi1, lundi2, lundi3, mardi, mardi1, mardi2 ,mardi3, mercredi, mercredi1, mercredi2, mercredi3, jeudi, jeudi1, jeudi2, jeudi3, vendredi, vendredi1, vendredi2, vendredi3)
                 VALUES(:heure, :heure1, :heure2, :heure3, :filiere, :niveau, :lundi, :lundi1, :lundi2, :lundi3, :mardi, :mardi1, :mardi2 ,:mardi3, :mercredi, :mercredi1, :mercredi2, :mercredi3,  :jeudi, :jeudi1, :jeudi2, :jeudi3,  :vendredi, :vendredi1, :vendredi2, :vendredi3)';
                $query_run = $conn->prepare($query);
    
            $data = [
                ':heure' => $heure,
                ':heure1' => $heure1,
                ':heure2' => $heure2,
                ':heure3' => $heure3,
                ':filiere' => $filiere,
                ':niveau' => $niveau,
                ':lundi' => $lundi,
                ':lundi1' => $lundi1,
                ':lundi2' => $lundi2,
                ':lundi3' => $lundi3,
                ':mardi' => $mardi,
                ':mardi1' => $mardi1,
                ':mardi2' => $mardi2,
                ':mardi3' => $mardi3,
                ':mercredi' => $mercredi,
                ':mercredi1' => $mercredi1,
                ':mercredi2' => $mercredi2,
                ':mercredi3' => $mercredi3,
                ':jeudi' => $jeudi,
                ':jeudi1' => $jeudi1,
                ':jeudi2' => $jeudi2,
                ':jeudi3' => $jeudi3,
                ':vendredi' => $vendredi,
                ':vendredi1' => $vendredi1,
                ':vendredi2' => $vendredi2,
                ':vendredi3' => $vendredi3,

            
            
            ];
            $query_execute = $query_run->execute($data);
    
            if($query_execute)
            {
                echo "save to database";
                // header("Refresh:2");
                $_SESSION['message'] = "insert Succefully";
                header('location: affiche_emploi_du_temps.php');
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "Not insert";
                header('location: ajout_emploi_du_temps.php');
                exit(0);
            }
        }
    
    
// INSERTION DANS LA BASE DE DONNEE

if(isset($_POST['save_student_btn'])){
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $prenom = $_POST['prenom'];
    $datenais = $_POST['datenais'];
    $pere = $_POST['pere'];
    $mere = $_POST['mere'];
    $matricule = $_POST['matricule'];
    $adresse = $_POST['adresse'];
    $departement = $_POST['departement'];
    $sexe = $_POST['sexe'];
    $niveau = $_POST['niveau'];
    // EXTENSION IMAGES ET UPLOAD IMAGES VERS LA BASE DE DONNEE
        $uploads_dir = "uploads/";
        $maxSize = 20000000; //2MB
        $type = $_FILES["file"]["type"];
        $name = $_FILES["file"]["name"];
        $tmp_name = $_FILES["file"]["tmp_name"];
        $fileExtension = explode(".",$name);
        $fileExtension = end($fileExtension);
        //for a unique name
        $n1=rand(1,10000);
        $n2=date("ymd");
        $n3=time();
        @$newName=$n1.$n2.$n3.".".$fileExtension;
    //or  another way $newName=uniqid();
    $filePath=$uploads_dir.$newName;
    if (empty($name)) {
        echo "<h1>please select a file </h1>";
    }elseif ($_FILES["file"]["size"]>$maxSize) {
        echo "please select max size = 2 MB ";
    }elseif($type=="image/jpeg" || $type=="image/png" || $type=="image/webp" || $type=="image/bmp" || $type=="image/gif" || $type=="image/pdf") 
    {
            move_uploaded_file($tmp_name,$filePath);
            // $add=$conn->prepare("INSERT INTO inscription SET fileName=?");
            $query = "INSERT INTO inscription (matricule,fileName, nom, prenom, email, phone, datenais, pere, mere, adresse, departement, sexe, niveau) VALUES(:matricule, :fileName, :nom, :prenom, :email, :phone, :datenais, :pere, :mere, :adresse, :departement, :sexe, :niveau)";
        $query_run = $conn->prepare($query);

        $data = [

            ':objet' => $objet,
            ':message' => $message,
            ':fileName' => $newName,
        
        
        ];
        $query_execute = $query_run->execute($data);

        if($query_execute)
        {
            echo "save to database";
            // header("Refresh:2");
            $_SESSION['message'] = "insert Succefully";
            header('location: liste.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not insert";
            header('location: liste.php');
            exit(0);
        }
    }

}
        

    
?>