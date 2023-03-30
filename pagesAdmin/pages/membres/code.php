<?php
// session_start();

include('../dbcon.php');


if (isset($_POST['delete'])) 
{
    $student_id = $_POST['delete'];

    try {
        $query = "DELETE FROM professeur WHERE id=:stud_id";
        $statement = $conn->prepare($query);
        $data = [
            ':stud_id' => $student_id
        ];
        $query_execute = $statement->execute($data);
        if($query_execute)
        {
            $_SESSION['message'] = "Deleted Succefully";
            header('location: membres_admin.php');
            exit(0);
        }
        else
      {
         $_SESSION['message'] = "Not Deleted";
         header('location: membres_admin.php');
         exit(0);
         
      }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

if (isset($_POST['delete_student'])) 
{
    $student_id = $_POST['delete_student'];

    try {
        $query = "DELETE FROM inscription WHERE id=:stud_id";
        $statement = $conn->prepare($query);
        $data = [
            ':stud_id' => $student_id
        ];
        $query_execute = $statement->execute($data);
        if($query_execute)
        {
            $_SESSION['message'] = "Deleted Succefully";
            header('location: liste.php');
            exit(0);
        }
        else
      {
         $_SESSION['message'] = "Not Deleted";
         header('location: liste.php');
         exit(0);
         
      }

    } catch (PDOException $e) {
        echo $e->getMessage();
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
        
            ':matricule' => $matricule,
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':phone' => $phone,
            ':datenais' => $datenais,
            ':pere' => $pere,
            ':mere' => $mere,
            ':adresse' => $adresse,
            ':departement' => $departement,
            ':sexe' => $sexe,
            ':niveau' => $niveau,
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

// 1111111111111111111111111111111111111111111111111111111111111111111111111
// 1111111111111111111111111111111111111111111111111111111111111111111111111
// 1111111111111111111111111111111111111111111111111111111111111111111111111
// 1111111111111111111111111111111111111111111111111111111111111111111111111
// 1111111111111111111111111111111111111111111111111111111111111111111111111
// 1111111111111111111111111111111111111111111111111111111111111111111111111




// frais de eetudes a l'iscamen de moronadava555555555555555555555555555555555555555555555
// frais de eetudes a l'iscamen de moronadava555555555555555555555555555555555555555555555
// frais de eetudes a l'iscamen de moronadava555555555555555555555555555555555555555555555
// frais de eetudes a l'iscamen de moronadava555555555555555555555555555555555555555555555
// frais de eetudes a l'iscamen de moronadava555555555555555555555555555555555555555555555
// frais de eetudes a l'iscamen de moronadava555555555555555555555555555555555555555555555
// frais de eetudes a l'iscamen de moronadava555555555555555555555555555555555555555555555
// frais de eetudes a l'iscamen de moronadava555555555555555555555555555555555555555555555

if(isset($_POST['envoyer'])){
    $frais = $_POST['frais'];
    $droit = $_POST['droit'];
    $ecol = $_POST['ecol'];
    try {
       
        $query = "INSERT INTO niveau1 (droit, frais, ecol) VALUES(:droit, :frais, :ecol)";
        $query_run = $conn->prepare($query);
        $data = [     
            ':droit' => $droit,
            ':frais' => $frais,
            ':ecol' => $ecol
        ];
        $query_execute = $query_run->execute($data);

        if($query_execute)
        {
            echo "save to database";
            // header("Refresh:2");
            $_SESSION['message'] = "insert Succefully";
            header('location: frais.php');
            exit(0);
        }      else
        {
            $_SESSION['message'] = "Not insert";
            header('location: frais.php');
            exit(0);
        }
        
    } 
    catch (PDOException $e) {
        echo $e->getMessage();
    }
       
}


if(isset($_POST['envoyer1'])){
    $frais = $_POST['frais'];
    $droit = $_POST['droit'];
    $ecol = $_POST['ecol'];
    try {
       
        $query = "INSERT INTO niveau2 (droit, frais, ecol) VALUES(:droit, :frais, :ecol)";
        $query_run = $conn->prepare($query);
        $data = [     
            ':droit' => $droit,
            ':frais' => $frais,
            ':ecol' => $ecol
        ];
        $query_execute = $query_run->execute($data);

        if($query_execute)
        {
            echo "save to database";
            // header("Refresh:2");
            $_SESSION['message'] = "insert Succefully";
            header('location: frais.php');
            exit(0);
        }      else
        {
            $_SESSION['message'] = "Not insert";
            header('location: frais.php');
            exit(0);
        }
        
    } 
    catch (PDOException $e) {
        echo $e->getMessage();
    }
       
}

if(isset($_POST['envoyer2'])){
    $frais = $_POST['frais'];
    $droit = $_POST['droit'];
    $ecol = $_POST['ecol'];
    try {
       
        $query = "INSERT INTO niveau3 (droit, frais, ecol) VALUES(:droit, :frais, :ecol)";
        $query_run = $conn->prepare($query);
        $data = [     
            ':droit' => $droit,
            ':frais' => $frais,
            ':ecol' => $ecol
        ];
        $query_execute = $query_run->execute($data);

        if($query_execute)
        {
            echo "save to database";
            // header("Refresh:2");
            $_SESSION['message'] = "insert Succefully";
            header('location: frais.php');
            exit(0);
        }      else
        {
            $_SESSION['message'] = "Not insert";
            header('location: frais.php');
            exit(0);
        }
        
    } 
    catch (PDOException $e) {
        echo $e->getMessage();
    }
       
}
// 6666666666666666666666666666666666666666666666666666
// oddatefjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjgkkkkgk6666666666666666666666666666666666666666666666666666
// oddatefjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjgkkkkgk6666666666666666666666666666666666666666666666666666
// oddatefjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjgkkkkgk6666666666666666666666666666666666666666666666666666
// oddatefjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjgkkkkgk


if (isset($_POST['valider'])) {
    $student_id = $_POST['student_id'];
    $droit = $_POST['droit'];
    $frais = $_POST['frais'];
    $ecol = $_POST['ecol'];
    try {
        $query = "UPDATE niveau1 SET droit=:droit, frais=:frais, ecol=:ecol WHERE id=:stud_id LIMIT 1";
        $statement = $conn->prepare($query);

        $data = [
            ':droit' => $droit,
            ':frais' => $frais,
            ':ecol' => $ecol,
            ':stud_id' => $student_id
        ];
       $query_execute = $statement->execute($data);
       if($query_execute)
       {
           $_SESSION['message'] = "update Succefully";
           header('location: frais.php');
           exit(0);
       }
       else
     {
        $_SESSION['message'] = "Not inserted";
        header('location: frais.php');
        exit(0);
     }

    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }
}

if (isset($_POST['valider1'])) {
    $student_id = $_POST['student_id'];
    $droit = $_POST['droit'];
    $frais = $_POST['frais'];
    $ecol = $_POST['ecol'];
    try {
        $query = "UPDATE niveau2 SET droit=:droit, frais=:frais, ecol=:ecol WHERE id=:stud_id LIMIT 1";
        $statement = $conn->prepare($query);

        $data = [
            ':droit' => $droit,
            ':frais' => $frais,
            ':ecol' => $ecol,
            ':stud_id' => $student_id
        ];
       $query_execute = $statement->execute($data);
       if($query_execute)
       {
           $_SESSION['message'] = "update Succefully";
           header('location: frais.php');
           exit(0);
       }
       else
     {
        $_SESSION['message'] = "Not inserted";
        header('location: frais.php');
        exit(0);
     }

    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }
}


if (isset($_POST['valider2'])) {
    $student_id = $_POST['student_id'];
    $droit = $_POST['droit'];
    $frais = $_POST['frais'];
    $ecol = $_POST['ecol'];
    try {
        $query = "UPDATE niveau3 SET droit=:droit, frais=:frais, ecol=:ecol WHERE id=:stud_id LIMIT 1";
        $statement = $conn->prepare($query);

        $data = [
            ':droit' => $droit,
            ':frais' => $frais,
            ':ecol' => $ecol,
            ':stud_id' => $student_id
        ];
       $query_execute = $statement->execute($data);
       if($query_execute)
       {
           $_SESSION['message'] = "update Succefully";
           header('location: frais.php');
           exit(0);
       }
       else
     {
        $_SESSION['message'] = "Not inserted";
        header('location: frais.php');
        exit(0);
     }

    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }
}

if(isset($_POST['commentaire'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    try {
       
        $query = "INSERT INTO clients (email, nom,prenom, phone, message) VALUES(:email, :nom,:prenom, :phone, :message)";
        $query_run = $conn->prepare($query);
        $data = [     
            ':email' => $email,
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':phone' => $phone,
            ':message' => $message
        ];
        $query_execute = $query_run->execute($data);

        if($query_execute)
        {
            echo " enregistrer";
            // header("Refresh:2");
            $_SESSION['message'] = "messages envoyé";
            header('location: contact.php');
            exit(0);
        }      else
        {
            $_SESSION['message'] = "echec de trasanction";
            header('location: contact.php');
            exit(0);
        }
        
    } 
    catch (PDOException $e) {
        echo $e->getMessage();
    }
       
}



?>