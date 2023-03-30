<?php
   include('../dbcon.php');


   if(isset($_POST['signup'])){
    $nom_module = $_POST['nom_module'];
    $nature = $_POST['nature'];
    $prof = $_POST['prof'];

            $query = "INSERT INTO module (nom_module, nature ,prof) VALUES(:nom_module, :nature ,:prof)";
            $query_run = $conn->prepare($query);

        $data = [
        
      
            ':nom_module' => $nom_module,
            ':nature' => $nature,
            ':prof' => $prof,
        
        
        ];
        $query_execute = $query_run->execute($data);
    }


    if(isset($_POST['informer'])){
        $expediteur = $_POST['expediteur'];
        $objet = $_POST['objet'];
        $message = $_POST['message'];
        try {
           
            $query = "INSERT INTO programme (expediteur, objet, message) VALUES(:expediteur,:objet, :message)";
            $query_run = $conn->prepare($query);
            $data = [     
                ':expediteur' => $expediteur,
                ':objet' => $objet,
                ':message' => $message
            ];
            $query_execute = $query_run->execute($data);
    
            if($query_execute)
            {
                echo " enregistrer";
                // header("Refresh:2");
                $_SESSION['message'] = "messages envoyé";
                header('location: membres_admin.php');
                exit(0);
            }      else
            {
                $_SESSION['message'] = "echec de trasanction";
                header('location: membres_admin.php');
                exit(0);
            }
            
        } 
        catch (PDOException $e) {
            echo $e->getMessage();
        }
           
    }
    

   if(isset($_POST['connexion'])){
    $type = $_POST['type'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    // EXTENSION IMAGES ET UPLOAD IMAGES VERS LA BASE DE DONNEE
        $uploads_dir = "uploads/";
        $maxSize = 20000000; //2MB
        $type1 = $_FILES["file"]["type"];
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
    }elseif($type1=="image/jpeg" || $type1=="image/png" || $type1=="image/webp" || $type1=="image/bmp" || $type1=="image/gif" || $type1=="image/pdf") 
    {
            move_uploaded_file($tmp_name,$filePath);
            // $add=$conn->prepare("INSERT INTO inscription SET telephone=?");
            $query = "INSERT INTO utilisateur (type, login, password, fileName, email) VALUES(:type, :login, :password, :fileName, :email)";
            $query_run = $conn->prepare($query);

        $data = [
        
      
            ':type' => $type,
            ':login' => $login,
            ':password' => $password,
            ':fileName' => $newName,
            ':email' => $email,
        
        
        ];
        $query_execute = $query_run->execute($data);

        if($query_execute)
        {
            echo "save to database";
            // header("Refresh:2");
            $_SESSION['password'] = "insert Succefully";
            header('location: membres_admin.php');
            exit(0);
        }
        else
        {
            $_SESSION['password'] = "Not insert";
            header('location: membres_admin.php');
            exit(0);
        }
    }


}


include('../dbcon.php');

if (isset($_POST['connexion'])) {
   if (empty($_POST["login"]) || empty($_POST["password"])) {
    $message = '<label> All field is required </label>';
   }
   else {
    $query = "SELECT * FROM utilisateur WHERE login = :login AND password = :password AND type='admin'";
    $statement = $conn->prepare($query);
    $statement -> execute( array(
        'login' => $_POST['login'],
        'password' => $_POST['password'],
    )
    );
    $count  = $statement->rowCount();
    if($count > 0)
    {
        $_SESSION['username'] = $_POST["login"];
        header("location: membres_admin.php");

    }
    else {
      header('location:membres.php');
    }
   }
}



if (isset($_POST['enregistrer'])) {
  $student_id = $_POST['student_id'];
  $login = $_POST['login'];
  $prenom = $_POST['prenom'];
  $type = $_POST['type'];
  try {
      $query = "UPDATE utilisateur SET login=:login, prenom=:prenom, type=:type, fileName=:fileName WHERE id=:stud_id LIMIT 1";
      $statement = $conn->prepare($query);

      $data = [
          ':login' => $login,
          ':prenom' => $prenom,
          ':type' => $type,
          ':stud_id' => $student_id
      ];
     $query_execute = $statement->execute($data);
     if($query_execute)
     {
         $_SESSION['message'] = "update Succefully";
         header('location: mod_user.php');
         exit(0);
     }
     else
   {
      $_SESSION['message'] = "Not inserted";
      header('location: mod_user.php');
      exit(0);
   }

  }
  catch (PDOException $e) {
      echo $e->getMessage();
  }
}



// MISE A JOUR DES INFORMATION PAR MONSEIGNEUR , RECTEUR, SECRETAIRE GENERAL dans LA TABLE NOMMEE ++++ === "mot"

if (isset($_POST['enregistrer'])) {
  $student_id = $_POST['student_id'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $message = $_POST['message'];
  // $filename = $_FILES['fileName'];
      $uploads_dir = "../uploads/";
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
      move_uploaded_file($tmp_name,$filePath);
  try {
      $query = "UPDATE mot SET nom=:nom, prenom=:prenom, message=:message, fileName=:fileName WHERE id=:stud_id LIMIT 1";
      $statement = $conn->prepare($query);

      $data = [
          ':nom' => $nom,
          ':prenom' => $prenom,
          ':message' => $message,
          ':fileName' => $newName,
          ':stud_id' => $student_id
      ];
     $query_execute = $statement->execute($data);
     if($query_execute)
     {
         $_SESSION['message'] = "update Succefully";
         header('location: mot.php');
         exit(0);
     }
     else
   {
      $_SESSION['message'] = "Not inserted";
      header('location: mot.php');
      exit(0);
   }

  }
  catch (PDOException $e) {
      echo $e->getMessage();
  }
}
// INSERTION  DE MESSAGES DANS LA BASE  DE DONEE ++++ MOTS DE MONSEIGNEUR DANS LA TABLE NOMMEE ==== ("MOT")

if(isset($_POST['envoyer'])){
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $message = $_POST['message'];
  $classe = $_POST['classe'];
  // EXTENSION IMAGES ET UPLOAD IMAGES VERS LA BASE DE DONNEE
      $uploads_dir = "../uploads/";
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
          $query = "INSERT INTO mot (nom, prenom, message, fileName, classe) VALUES(:nom, :prenom, :message, :fileName, :classe)";
          $query_run = $conn->prepare($query);

      $data = [
      
    
          ':nom' => $nom,
          ':prenom' => $prenom,
          ':message' => $message,
          ':fileName' => $newName,
          ':classe' => $classe,
      
      
      ];
      $query_execute = $query_run->execute($data);

      if($query_execute)
      {
          echo "save to database";
          // header("Refresh:2");
          $_SESSION['message'] = "insert Succefully";
          header('location: mot.php');
          exit(0);
      }
      else
      {
          $_SESSION['message'] = "Not insert";
          header('location: mot.php');
          exit(0);
      }
  }


}


if (isset($_POST['btnUpdate'])) {
    $student_id = $_POST['student_id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    // $filename = $_FILES['fileName'];
        $uploads_dir = "../uploads/";
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
        move_uploaded_file($tmp_name,$filePath);
    try {
        $query = "UPDATE preofesseur SET nom=:nom, prenom=:prenom, email=:email, telephone=:telephone, fileName=:fileName WHERE id=:stud_id LIMIT 1";
        $statement = $conn->prepare($query);
  
        $data = [
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':telephone' => $telephone,
            ':fileName' => $newName,
            ':stud_id' => $student_id
        ];
       $query_execute = $statement->execute($data);
       if($query_execute)
       {
           $_SESSION['message'] = "update Succefully";
           header('location: membres_admin.php');
           exit(0);
       }
       else
     {
        $_SESSION['message'] = "Not inserted";
        header('location: membres_admin.php');
        exit(0);
     }
  
    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }
  }
?>