<?php

include('dbcon.php');
header('liste.php');
include('code.php');

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
  <link rel="icon" href="images/logo.jpg">

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
    background-color: whitesmoke;
    background-position: fixed;
    background-attachment: fixed;
}
.content{
	padding-left: 0rem;
	padding-top: 0rem;

}
.overflow-auto{
    background-color: #eee;
    width: 100rem;
    height: 60rem;
    overflow: scroll;
}
    </style>
</head>
<body class="background: #f8f9fa;">
<div class="fixed-top">
    <?php
    include('header.php');

    ?>
</div>
    <div class="navbar card-header fixed-top d-flex col-md-12 "  style="margin-left: 25rem; position: fixed;" id="bs-example-navbar-collapse-1">
        <div class="navbar-header" style="margin-left: 10rem;">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="inscrire.php" style="padding-top: 1rem; font-size: 2.3rem;">Listes des Inscriptions</a>
        </div>
            <ul class=" nav d-flex col-md-6">
                <li><a href="liste.php">Accueil</a></li>
                <li><a href="signup.php">Inscription</a></li>
                <li><a href="#">Deconnecter</a></li>
            </ul>
        </div>
    </div>
<div class="content">
    <div class="d-flex mt-3 ">
        <form action="search.php" method="POST" enctype="multipart/form-data" class="container d-flex"  style="margin-left: 2rem;">
            <div class=" ml-5">
                    <input class="form-control " style="width: 50rem; height: 5rem; font-size: 1.7rem;" type="text" name="rechercher" placeholder="Entrer les numero matricule (ex: 122/info/12/...)" aria-label="Search">
            </div>
            <div class="form-group ml-5" >
                <button class="fa fa-search" style="height: 5rem; width: 13rem; font-size: 2.5rem;" name="search">Search</button>
            </div>
        </form>
    </div>
    <div class="container mt-3 overflow-auto">
        <table class="table table-hover text-center" style="font-size: 1.6rem;margin-left: 8rem; width: 100rem;">
            <thead class="table-header">
                <tr class="text-center">
                                        <th class="text-center">profile</th>
                                        <th class="text-center">Nom</th>
                                        <th class="text-center">Prenom</th>
                                        <th class="text-center">email</th>
                                        <th class="text-center">adresse</th>
                                        <th class="text-center">Departement</th>
                                        <th class="text-center">Nveaux</th>
                                        <th class="text-center">Editer</th>
                                        <th class="text-center">Effacer</th>
                 </tr>
                                </thead>
                                <tbody >
                                <?php
                                    $query = "SELECT * FROM inscription ORDER BY id DESC";
                                    $statement = $conn->prepare($query);
                                    $statement->execute();
                                    $statement->setFetchMode(PDO::FETCH_OBJ);//PDO::FETCH_ASSOC 
                                    $result = $statement->fetchAll(); 
                                    if ($result) {
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <tr>
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
                                                <a href="mod.php?id=<?= $row->id;  ?>"><i class="fa fa-edit primary" style="font-size: 2.2rem;"></i></a>                                       
                                            </td>
                                            <td>
                                                    <button type="submit" name="delete_student" value="<?= $row->id;  ?>" class="fa fa-trash" style="background: none; color: rgb(231, 110, 29); border: none;font-size: 2.1rem;" ></button>
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
            
</body>
</html>