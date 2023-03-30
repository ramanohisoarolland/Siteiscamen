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
  <link rel="icon" href="images/logo.jpg">
    <title>Document</title>
    <style>
        .content{
	margin-left: 8rem;
	padding-top: 8rem;
}

</style>
</head>
<body>
 <div>
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
    <table class="table table-bordered">
        <thead class="alert-info">
            <tr>
                <th>Profile</th>
                <th>nom</th>
                <th>prenom</th>
                <th>adresse</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include('dbcon.php');
        include('code.php');
                        if (isset($_POST['search'])) 
                        {
                            $rechercher = $_POST['rechercher'];
                            $query = $conn->prepare("SELECT * FROM inscription WHERE nom LIKE '$rechercher%' ");
                            $query->execute();
                            $query->setFetchMode(PDO::FETCH_OBJ);//PD
                            $result = $query->fetchAll(); 
                            if ($result) 
                            ?>
                                <?php
                                foreach($result as $row)
                                {
                                    ?>
                                    <tr>
                                    <td><img src="uploads/<?= $row->fileName;?>" style="width: 60px; height: 60px; border-radius: 100%;"></td>
                                    <td><?= $row->nom;  ?></td>
                                    <td><?= $row->prenom;  ?></td>
                                    <td><?= $row->adresse;  ?></td>
                                
                                    </tr>
                                <?php }

                        }
                        ?>
                        

        </tbody>
    </table>
</div>

<form action="">
    <input type="button" onclik="textjavascript:print()" value="imprimer">
</form>



<script src="js/all.js"></script>
<script src="js/jquery-3..4.1.js"></script>
<script src="js/jquery-3..4.1.min.js"></script>
<script src="js/popper.min.js"></script>
</body>
</html>
