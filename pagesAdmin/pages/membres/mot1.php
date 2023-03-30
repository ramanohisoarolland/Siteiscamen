<?php
include('dbcon.php');
include('header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="../css1/style.css">
  <link rel="icon" href="images/logo.jpg">


    <title>Document</title>
    <style>
    .content{
	margin-left: 25rem;
    padding-top: 16rem;
    padding-right: 10rem;
}
body{
    margin: 0 0 0 0;
    padding:  0 0 0 0;
    background-image: url(./images/mot1.jpg);
    background-position: fixed;
    background-attachment: fixed;
}
html{
	scroll-snap-type: proximity;
}
    </style>
</head>
<body>
<section class="content d-flex col-md-6">
        <section class="container-fluid" style="padding-left: 4rem;">
           <form action="code.php" method="POST" enctype="multipart/form-data">
                <div class="card mt-3" style="width: 29rem; display: inline-block;" >
                    <div class="card-header text-center">
                           <?php
                                    $query = "SELECT * FROM mot";
                                    $statement = $conn->prepare($query);
                                    $statement->execute();
                                    $statement->setFetchMode(PDO::FETCH_OBJ);//PDO::FETCH_ASSOC 
                                    $result = $statement->fetchAll(); 
                                    if ($result) {
                                        foreach($result as $row )
                                        {
                                            ?> 
                            <img src="uploads/<?= $row->fileName;?>" style="width: 230px; height: 200px;" class="card-img-top">
                                <!-- <input type="file" value="parcourir"> -->
                            <div class="card-body">
                                <h3 class=" card-title text-center"><?= $row->nom;  ?> <br> <?= $row->prenom;  ?> </h3>
                                <p class="card-text"><?= $row->message;  ?></p>
                            </div>    
                                <a href="mot1.php?id=<?= $row->id; ?>" class="btn btn-primary">Mettre a jours</a>
                                <?php      }
                                            }
                                            else
                                            {
                                                ?> 
                                                          
                                <tr>
                                <td colspan="5"> No Record Found</td>
                                </tr>
                                                <?php 
                                        } ?>
                    </div>  
                </div> 
        </form>
    </section>
        

    <section class="col-md-12">
        <?php
            if (isset($_GET['id'])) {
                $student_id = $_GET['id'];

                $query = "SELECT * FROM mot WHERE id=:stud_id";
                $statement = $conn->prepare($query);
                $data = [':stud_id' => $student_id];
                $statement->execute($data);

                $result = $statement->fetch(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
            }

        ?>
        <form action="code.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="student_id" value="<?= $result->id;?>">
            <div class="col-md-12" style="color:black;">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Profile : </label>
                        <img src="uploads/<?= $result->fileName;?>" style="width: 60px; height: 60px; border-radius: 100%;">
                        <input type="file" name="file" class="form-control" accept="*/image" value="uploads/<?= $result->fileName;?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nom : </label>
                        <input type="text" class="form-control bg-transparent" id="formGroupExampleInput" name="nom" value="<?= $result->nom;?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Prenom : </label>
                        <input type="text" class="form-control bg-transparent" id="formGroupExampleInput" name="prenom" value="<?= $result->prenom;?>">
                    </div>
                    <label for="exampleFormControlTextarea1 ">MESSAGES : </label>
                    <textarea class="form-control mt-12 bg-transparent" style="color: #ffc107;" id="exampleFormControlTextarea1" rows="5" name="message" ><?= $result->message;?></textarea>
                    <div class="form-group" style="padding-top: 5rem;">
                        <div class="col-md-6 mb-12">
                            <input type="submit" class="btn btn-primary form-control mt-12" name="enregistrer" value="Enregistrer">
                        </div>
                        <div class="col-md-6 mb-12">
                            <input type="reset" class="btn btn-danger form-control" name="Supprimer" value="Supprimer">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </section>
</section>


<section class="content hidden" style="padding-right: 23rem; padding-left: 0; color: whitesmoke;">
            <form action="code.php" method="POST" enctype="multipart/form-data" class="container">
                <div class="d-flex">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Profile : </label>
                            <input type="file" class="form-control mt-3" name="file" placeholder="Last name">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nom : </label>
                            <input type="text" class="form-control bg-transparent" style="color: whitesmoke;" id="formGroupExampleInput" name="nom">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Prenom : </label>
                            <input type="text" name="prenom" class="form-control bg-transparent" id="formGroupExampleInput2" >
                        </div>
                    </div>
                    <div class="form-group col-md-7 ">
                        <label for="exampleFormControlTextarea1">MESSAGES : </label>
                        <textarea class="form-control bg-transparent" style="color: whitesmoke;"  id="exampleFormControlTextarea1" rows="5" name="message"></textarea>
                    </div>
                </div>
                <div class="d-flex" style="padding-left: 7rem;">
                    <div class="form-group col-md-6">
                        <input type="submit" class="btn btn-primary form-control" style="color: whitesmoke;" name="envoyer" value="Envoyer">
                    </div>
                        <div class="form-group col-md-6">
                            <input type="reset" class="btn btn-danger form-control" style="color: whitesmoke;" name="Annuler" value="Annuler">
                        </div>
                    </div>
                </div>
            </form>
        </section>
<section class="content">
</section>
</body>
</html>