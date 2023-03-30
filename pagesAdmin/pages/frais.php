<?php
include('dbcon.php');


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

    <title>Document</title>
    <style>
    .content{
	margin-left: 20rem;
    padding-top: 15rem;
    padding-right: 10rem;
}

body{
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
    <section>
    <?php
include('header.php');

?>
    </section>
<section class="d-flex content col-md-6">
            <section>
                <div class="card ">
                <div class="">
                            <table class="table table-striped table-hover text-center mt-2" style="color: black; width: 23rem; height: 23rem;">
                                        <?php
                                                include('dbcon.php');
                                                $query = "SELECT * FROM niveau1 LIMIT 1";
                                                $statement = $conn->prepare($query);
                                                $statement->execute();
                                                $statement->setFetchMode(PDO::FETCH_OBJ);//PDO::FETCH_ASSOC 
                                                $result = $statement->fetchAll(); 
                                                if ($result) 
                                                {
                                                    foreach($result as $row )
                                                    {
                                                        ?> 
                                <tr>
                                <td >Droit D'inscription : </td>
                                <td><?= $row->droit;?></td>
                                </tr>
                                <tr>
                                <td>Frais Genereaux : </td>
                                <td><?= $row->frais;?></td>
                                </tr>
                                <tr>
                                <td>Frais D'etude</td>
                                <td><?= $row->ecol;?></td>
                                </tr>
                                <form action="code.php" method="POST">
                                            <td>
                                                <a href="frais.php?id=<?= $row->id;  ?>"><i class="fa fa-edit" style="color: yellow;">METTRE A JOURS</i></a>                                       
                                            </td>
                                </form>
                                            <?php     }
                                                }?>
                            </table>
                        </div>
                </div>
    </section>
    <section class="col-md-12">
        <?php
            if (isset($_GET['id'])) {
                $student_id = $_GET['id'];

                $query = "SELECT * FROM   niveau1 WHERE id=:stud_id";
                $statement = $conn->prepare($query);
                $data = [':stud_id' => $student_id];
                $statement->execute($data);

                $result = $statement->fetch(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
            }

        ?>
        <form  action="code.php" method="POST">
            <input type="hidden" name="student_id" value="<?= $result->id;?>">
            <div class="col-md-12" style="color:black;">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Droit d'inscription : </label>
                        <input type="text" class="form-control bg-transparent" id="formGroupExampleInput" name="droit" value="<?= $result->droit;?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2"> Frais Géneraux: </label>
                        <input type="text" class="form-control bg-transparent" id="formGroupExampleInput" name="frais" value="<?= $result->frais;?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2"> Frais d'Etudes: </label>
                        <input type="text" class="form-control bg-transparent" id="formGroupExampleInput" name="ecol" value="<?= $result->ecol;?>">
                    </div>
                    <div class="form-group" style="padding-top: 5rem;">
                        <div class="col-md-6 mb-12">
                            <input type="submit" class="btn btn-primary form-control mt-12" name="valider" value="Enregistrer">
                        </div>
                        <div class="col-md-6 mb-12">
                            <input type="reset" class="btn btn-danger form-control" name="Supprimer" value="Supprimer">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</section>
</section>
<section class="d-flex content col-md-8">
            <section>
                <div class="card ">
                <div class="">
                            <table class="table table-striped table-hover text-center mt-2" style="color: black; width: 23rem; height: 23rem;">
                                        <?php
                                                include('dbcon.php');
                                                $query = "SELECT * FROM niveau2 LIMIT 1";
                                                $statement = $conn->prepare($query);
                                                $statement->execute();
                                                $statement->setFetchMode(PDO::FETCH_OBJ);//PDO::FETCH_ASSOC 
                                                $result = $statement->fetchAll(); 
                                                if ($result) 
                                                {
                                                    foreach($result as $row )
                                                    {
                                                        ?> 
                                <tr>
                                <td >Droit D'inscription : </td>
                                <td><?= $row->droit;?></td>
                                </tr>
                                <tr>
                                <td>Frais Genereaux : </td>
                                <td><?= $row->frais;?></td>
                                </tr>
                                <tr>
                                <td>Frais D'etude</td>
                                <td><?= $row->ecol;?></td>
                                </tr>
                                <form action="code.php" method="POST">
                                            <td>
                                                <a href="frais.php?id=<?= $row->id;  ?>"><i class="fa fa-edit" style="color: yellow;">METTRE A JOURS</i></a>                                       
                                            </td>
                                </form>
                                            <?php     }
                                                }?>
                            </table>
                        </div>
                </div>
    </section>
    <section class="col-md-8">
        <?php
            if (isset($_GET['id'])) {
                $student_id = $_GET['id'];

                $query = "SELECT * FROM   niveau2 WHERE id=:stud_id";
                $statement = $conn->prepare($query);
                $data = [':stud_id' => $student_id];
                $statement->execute($data);

                $result = $statement->fetch(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
            }

        ?>
        <form  action="code.php" method="POST">
            <input type="hidden" name="student_id" value="<?= $result->id;?>">
            <div class="col-md-12" style="color:black;">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Droit d'inscription : </label>
                        <input type="text" class="form-control bg-transparent" id="formGroupExampleInput" name="droit" value="<?= $result->droit;?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2"> Frais Géneraux: </label>
                        <input type="text" class="form-control bg-transparent" id="formGroupExampleInput" name="frais" value="<?= $result->frais;?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2"> Frais d'Etudes: </label>
                        <input type="text" class="form-control bg-transparent" id="formGroupExampleInput" name="ecol" value="<?= $result->ecol;?>">
                    </div>
                    <div class="form-group" style="padding-top: 5rem;">
                        <div class="col-md-6 mb-12">
                            <input type="submit" class="btn btn-primary form-control mt-12" name="valider1" value="Enregistrer">
                        </div>
                        <div class="col-md-6 mb-12">
                            <input type="reset" class="btn btn-danger form-control" name="Supprimer" value="Supprimer">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</section>
</section>
<section class="d-flex content col-md-6">
            <section>
                <div class="card ">
                <div class="">
                            <table class="table table-striped table-hover text-center mt-2" style="color: black; width: 23rem; height: 23rem;">
                                        <?php
                                                include('dbcon.php');
                                                $query = "SELECT * FROM niveau3 LIMIT 1";
                                                $statement = $conn->prepare($query);
                                                $statement->execute();
                                                $statement->setFetchMode(PDO::FETCH_OBJ);//PDO::FETCH_ASSOC 
                                                $result = $statement->fetchAll(); 
                                                if ($result) 
                                                {
                                                    foreach($result as $row )
                                                    {
                                                        ?> 
                                <tr>
                                <td >Droit D'inscription : </td>
                                <td><?= $row->droit;?></td>
                                </tr>
                                <tr>
                                <td>Frais Genereaux : </td>
                                <td><?= $row->frais;?></td>
                                </tr>
                                <tr>
                                <td>Frais D'etude</td>
                                <td><?= $row->ecol;?></td>
                                </tr>
                                <form action="code.php" method="POST">
                                            <td>
                                                <a href="frais.php?id=<?= $row->id;  ?>"><i class="fa fa-edit" style="color: yellow;">METTRE A JOURS</i></a>                                       
                                            </td>
                                </form>
                                            <?php     }
                                                }?>
                    </table>
            </section>
            <section class="col-md-12">
        <?php
            if (isset($_GET['id'])) {
                $student_id = $_GET['id'];

                $query = "SELECT * FROM   niveau3 WHERE id=:stud_id";
                $statement = $conn->prepare($query);
                $data = [':stud_id' => $student_id];
                $statement->execute($data);

                $result = $statement->fetch(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
            }

        ?>
        <form  action="code.php" method="POST">
            <input type="hidden" name="student_id" value="<?= $result->id;?>">
            <div class="col-md-12" style="color:black;">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Droit d'inscription : </label>
                        <input type="text" class="form-control bg-transparent" id="formGroupExampleInput" name="droit" value="<?= $result->droit;?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2"> Frais Géneraux: </label>
                        <input type="text" class="form-control bg-transparent" id="formGroupExampleInput" name="frais" value="<?= $result->frais;?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2"> Frais d'Etudes: </label>
                        <input type="text" class="form-control bg-transparent" id="formGroupExampleInput" name="ecol" value="<?= $result->ecol;?>">
                    </div>
                    <div class="form-group" style="padding-top: 5rem;">
                        <div class="col-md-6 mb-12">
                            <input type="submit" class="btn btn-primary form-control mt-12" name="valider2" value="Enregistrer">
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
</body>
</html>