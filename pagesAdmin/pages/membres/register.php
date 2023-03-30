<?php 
$conn = new PDO('mysql:host=localhost; dbname=projetiscamen;', "root", "");
if(isset($_POST['inscrire2'])){
    $login = $_POST['login'];
    $password = $_POST['password'];

            $query = "INSERT INTO utilisateur (login, password, type) VALUES(:login, :password, :type)";
            $query_run = $conn->prepare($query);

        $data = [
        
      
            ':login' => $login,
            ':password' => $password,
            ':type' => $type,
        
        
        ];
        $query_execute = $query_run->execute($data);

        if($query_execute)
        {
            echo "save to database";
            // header("Refresh:2");
            $_SESSION['type'] = "insert Succefully";
            header('location: membres_admin.php');
            exit(0);
        }
    }










	
require_once "header.php"?>
<style>
        .content{
	margin-left: 8rem;
	padding-top: 8rem;
    font-size: 1.4rem;
}

</style>
<link rel="stylesheet" type="text/css" href="../../fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
<div class="content">
    <div class="container" >
        <div class="row">

            <div class="col-lg-8 col-lg-offset-2">
                <h3><i class="fa fa-user-circle-o"></i> Inscription</h3>
                <form action="#" method="POST" autocomplete="off" >
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nom</label>
                                <input type="text" name="login" class="form-control" placeholder="Nom">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Mot de passe : </label>
                        <input type="password" class="form-control" name="password" placeholder="Mot de passe" >
                    </div>
                    <div class="form-group">
                        <button type="submit" name="inscrire" class="btn btn-success btn-lg" > S'inscrire </button>
                    </div>

                </form>
            </div>

        </div>
    </div>

</div>