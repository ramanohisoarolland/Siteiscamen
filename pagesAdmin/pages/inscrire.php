<?php
include('code.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="icon" href="images/logo.jpg">
  

    <!-- <link rel="stylesheet" type="text/css" href="css1/style.css"> -->
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

        
    }.filiere ul li a{
        text-decoration: none;
        list-style: none;

        
    }
    .inscrire{
        padding: 100px -1rem;

    }
    .rech{
        padding: 15px;
    }
    body{
    background-image: url(./images/mot3.jpg);
    background-position: fixed;
    background-attachment: fixed;
}
input[type="text"],input[type="file"],input[type="email"],input[type="date"]
{
    background-color: #ccc;
    color: black;
    font-size: 1.6rem;
}
    .content{
	padding-left: 0rem;
	padding-top: 1rem;

}

    </style>
</head>
<body>
<div class="fixed-top">
<?php
    include('header.php');
?>
</div>
    <section class="section1 fixed-top card-header  " style="height:8rem; margin-left: 23rem;">
		<label for="check" >
			<i class="fas fa-bars" style="top: 1.5rem; padding-right: 5rem; font-size: 3rem; color: black;" id="sidebar_btn"></i>
		</label>
		<center><h1>Ajouts des Etudiants Universitaire</h1></center>
	</section>
<div class="content">   
<div class="inscrire" style="color: black;">
    <form action="code.php" method="POST" enctype="multipart/form-data" class="container">		
       <div class="d-flex">
            <div class="  col-md-6">
                    <!-- <div class="card-header text-center">
                        <h2>Renseignez-vous</h2>
                    </div> -->
                <div class="d-flex mr-1">
                        <div class="col ">
                            <div class="col mt-3">
                                <div class="col-md-12 mb-3">
                                    <label for="">profile : </label>
                                    <input type="file" class="form-control mt-3" name="file" style="color: black;">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Matricule : </label>
                                    <input type="text" class="form-control mt-3" style="color: black;" name="matricule">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Nom : </label>
                                    <input type="text" class="form-control mt-3" name="nom" style="color: black;">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Prenom : </label>
                                    <input type="text" class="form-control mt-3" name="prenom" style="color: black;">
                                </div>
                            </div>
                        </div>
                        
                </div>
            </div>
            <div class="col">
                <div class="col mt-3">
                    <div class="col-md-12 mb-3">
                        <label for="">Date de naissance : </label>
                        <input type="date" class="form-control mt-3" name="datenais" style="color: black;">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Adresse : </label>
                        <input type="text" class="form-control mt-3" name="adresse" style="color: black;">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Sexe : </label>
                        <select  id="" class="form-control mt-3" style="height: 3.5rem; color: black;background-color: #ccc;" name="sexe">
                            <option></option>
                            <option>Homme</option>
                            <option>Femme</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
                <div class="d-flex mr-1">
                        <div class="col">
                            <div class="col mt-3">
                                <div class="col-md-12 mb-3">
                                    <label for="">Departement : </label>
                                    <select id="" class="form-control mt-3" style="height: 3.5rem; color: black;background-color: #ccc;"  name="departement">
                                        <option value=""></option>
                                        <option>Ecotourisme</option>
                                        <option>Gestion Management</option>
                                        <option>Paramedicaux</option>
                                        <option>Informatique</option>
                                        <option>Science de l'Education</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Niveaux : </label>
                                    <select id="" class="form-control mt-3" style="height: 3.5rem;  color: black;background-color: #ccc;"  name="niveau">
                                        <option></option>
                                        <option>licence1</option>
                                        <option>licence2</option>
                                        <option>licence3</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">email : </label>
                                    <input type="text" class="form-control mt-3" name="email" style="color: black;">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="col mt-3">
                                <div class="col-md-12 mb-3">
                                    <label for="">Pere : </label>
                                    <input type="text" class="form-control mt-3" name="pere" style="color: black;">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Mere : </label>
                                    <input type="text" class="form-control mt-3" name="mere" style="color: black;">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">phone : </label>
                                    <input type="text" class="form-control mt-3" name="phone" style="color: black;">
                                </div>
                            </div>
                        </div>
                </div>
        </div>
        <div class="col-md-5  mb-3">
            <input type="submit" style="font-size: 1.6rem;" class="btn btn-primary form-control mt-3" name="save_student_btn" value="Enregister">
        </div>
        <div class="col-md-5  mb-3">
            <a href="liste.php" style="font-size: 1.6rem;" class="btn btn-danger form-control mt-3"> Annuler </a>
        </div>
    </form>
</div>
</div>
<section class="content">
    <div class="col-md-12">
        <div class="d-flex mr-1">
            <div class="col ">
                <div class="col mt-3">
                    <div class="col-md-12 mb-3">
                        <label for="">profile : </label>
                        <input type="file" class="form-control mt-3" name="file" style="color: black;">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Matricule : </label>
                        <input type="text" class="form-control mt-3" style="color: black;" name="matricule">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Nom : </label>
                        <input type="text" class="form-control mt-3" name="nom" style="color: black;">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Prenom : </label>
                        <input type="text" class="form-control mt-3" name="prenom" style="color: black;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>