<?php
include('dbcon.php');
include('code.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="icon" href="images/logo.jpg">
    <title>ajouter</title>
    <style>
            .content{
	margin-left: 15rem;
	top: 0;
}
input[type="text"],input[type="file"],input[type="email"],input[type="date"]
{
    background-color: #ccc;
    color: black;
    font-size: 1.6rem;
}
    </style>
</head>
<body>
<div>
        <?php
            include('header.php');
        ?>
</div>
    <section class="section1 fixed-top card-header  " style="height:8rem; margin-left: 23rem;">
		<label for="check" >
			<i class="fas fa-bars" style="top: 1.5rem; padding-right: 5rem; font-size: 4rem; color: black;" id="sidebar_btn"></i>
		</label>
		<center><h1>Ajouts des Etudiants Universitaire</h1></center>
	</section>
<div class="content" style="padding-top: 2rem;">
    <?php
    if (isset($_GET['id'])) {
        $student_id = $_GET['id'];

        $query = "SELECT * FROM inscription WHERE id=:stud_id ";
        $statement = $conn->prepare($query);
        $data = [':stud_id' => $student_id];
        $statement->execute($data);

        $result = $statement->fetch(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
        // extract($result);
    }

?>
 <form action="code.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="student_id" value="<?= $result->id;?>">
    <div class="card  col-md-8">
        <div class="text-center">
            <h2>Profile</h2>
            <div class="col-md-12 mb-3">
                <td ><img src="uploads/<?= $result->fileName;?>" style="width: 100px; height: 100px; border-radius: 100%;"></td>
                <input type="file" name="file" class="form-control mt-3" accept="*/image" value="uploads/<?= $result->fileName;?>">
            </div>
        </div>
        <div class="d-flex mr-1">
                <div class="">
                    <div class="col mt-3">
                        <div class="col-md-12 mb-3">
                            <label for="">Departement : </label>
                            <input type="text" class="form-control mt-3" name="departement" value="<?= $result->departement;?>">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Niveaux : </label>
                            <input type="text" class="form-control mt-3" name="niveau" value="<?= $result->niveau;?>">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">email : </label>
                            <input type="text" class="form-control mt-3" name="email" placeholder="Last name" value="<?= $result->email;?>">
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="col-md-12 mb-3">
                            <label for="">Nom : </label>
                            <input type="text" class="form-control mt-3" name="nom" placeholder="Last name" value="<?= $result->nom;?>">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Prenom : </label>
                            <input type="text" class="form-control mt-3" name="prenom" placeholder="Last name" value="<?= $result->prenom;?>">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Adresse : </label>
                            <input type="text" class="form-control mt-3" name="adresse" placeholder="Last name" value="<?= $result->adresse;?>">
                        </div>
                        <div class="col-md-3 mb-3">
                                <input type="submit" class="btn btn-primary form-control mt-3" name="update_student_btn" value="Save change">
                        </div>
                        <div class="col-md-3 mb-3">
                                <input type="reset" class="btn btn-primary form-control mt-3" name="update_student_btn" value="Exit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</form>
</div>
<script src="js/main.js"></script>
<script src="js/jquery-3.4.1.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/mdb.min.js"></script>
</body>
</html>