<?php
session_start();
include('dbcon.php');
header('liste.php');
include('code.php');
include('header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css1/style.css">
  <link rel="icon" href="../images/logo.jpg">

    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>ajouter</title>
    <style>
           .filiere ul {
        display: flex;
        justify-content: space-between;
        float: left;
    }
    
    .filiere ul li {
        text-decoration: none;
        list-style: none;
        padding: 20px 50px 20px 20px;
        color: whitesmoke;
        
    }.filiere ul li a{
        text-decoration: none;
        list-style: none;
        color: whitesmoke;
        
    }
    .inscrire{
        padding: 100px 23rem;

    }
    .rech{
        padding: 15px;
    }
    body{
    background-image: url(./images/mot2.jpg);
    background-position: fixed;
    background-attachment: fixed;
}
    .content{
	padding-left: 24rem;
    padding-top: 13rem;
    padding-right: 0rem;
}
    </style>
</head>
<body>

<div class="content">
    <div class="card-header ">
        <div class="text-center" style="color: green;">
            <h2>Voir en detail la listes des Etudiants <br><center class="mt-3">à l'ISCaMEN</center> </h2>
        </div>
    </div>
    <div class="d-flex mt-4">
    <form action="search.php" method="POST" enctype="multipart/form-data" class="container">
        <div class=" ml-5">
                <input class="form-control " style="width: 50rem; height: 5rem;" type="text" name="rechercher" placeholder="Entrer les numero matricule (ex: 122/info/12/...)" aria-label="Search">
        </div>
    
            <div class="form-group ml-5" >
                <button class="btn btn-success my-2 my-sm-0" style="height: 5rem; width: 10rem; font-size: 2.5rem;" name="search">Search</button>
            </div>
        </form>
        <div class="form-group ml-5" style="padding-left: 13rem;">
            <a href="inscrire.php"><button class="btn btn-primary" style="height: 5rem; font-size: 1.7rem; padding-left: 2rem;">Ajouter un nouveaux Etudiant</button></a>
        </div>
    </div>
    <div class="container mt-3">
        <table class="table table-dark table-hover text-center">
            <thead>
                <tr class="">
                                        <th>ID</th>
                                        <th>profile</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>email</th>
                                        <th>adresse</th>
                                        <th>Departement</th>
                                        <th>Nveaux</th>
                                        <th>Editer</th>
                                        <th>Effacer</th>
                 </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $query = "SELECT * FROM inscription WHERE niveau='licence1'";
                                    $statement = $conn->prepare($query);
                                    $statement->execute();
                                    $statement->setFetchMode(PDO::FETCH_OBJ);//PDO::FETCH_ASSOC 
                                    $result = $statement->fetchAll(); 
                                    if ($result) {
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <tr>
                                            <td><?= $row->matricule;  ?></td>
                                            <td ><img src="uploads/<?= $row->fileName;?>" style="width: 60px; height: 60px; border-radius: 100%;"></td>
                                            <td><?= $row->nom;  ?></td>
                                            <td><?= $row->prenom;  ?></td>
                                            <td><?= $row->email;  ?></td>
                                            <td><?= $row->adresse;  ?></td>
                                            <td><?= $row->departement;  ?></td>
                                            <td><?= $row->niveau;  ?></td>
                                            <!-- <form action="code.php" method="post"> -->
                                            <form action="code.php" method="POST" enctype="multipart/form-data" class="container">
                                            <td>
                                                <a href="mod.php?id=<?= $row->id;  ?>"><i class="fa fa-edit" style="color: yellow;"></i></a>                                       
                                            </td>
                                            <td>
                                                    <button type="submit" name="delete_student" value="<?= $row->id;  ?>" class="fa fa-trash" style="background: none; color: rgb(231, 110, 29); border: none;" ></button>
                                            </td>
                                            </form>
                                        </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="5"> No Record Found</td>
                                        </tr>
                                        <?php 
                                    }
                    ?>
                 <tr>
                    <td></td>
                 </tr>
            </tbody>
        </table>
    </div>
</div>                      
            


  <!-- <script src="js/all.js"></script>   -->
</body>
</html>