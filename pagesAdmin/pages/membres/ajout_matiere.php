<?php 
$conn = new PDO('mysql:host=localhost; dbname=projetiscamen;', "root", "");
    if(isset($_POST['ajouter'])){
        $nom_module = $_POST['nom_module'];
        $nature = $_POST['nature'];
        $prof = $_POST['prof'];
        try {
           
            $query = "INSERT INTO module (nom_module, nature ,prof) VALUES(:nom_module, :nature ,:prof)";
            $query_run = $conn->prepare($query);
            $data = [
        
      
                ':nom_module' => $nom_module,
                ':nature' => $nature,
                ':prof' => $prof,
            
            
            ];
            $query_execute = $query_run->execute($data);
    
            if($query_execute)
            {
                echo "save to database";
                // header("Refresh:2");
                $_SESSION['message'] = "insert Succefully";
                header('location: ajout_matiere.php');
                exit(0);
            }      else
            {
                $_SESSION['message'] = "Not insert";
                header('location: ajout_matiere.php');
                exit(0);
            }
            
        } 
        catch (PDOException $e) {
            echo $e->getMessage();
        }
           
    }

?>
<?php
        include('header.php');
        ?>
    <style>
    .main-panel{
        margin-left: 14rem;
    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container" >
            <div class="row col-md-12">
                <div class="col-lg-12 col-lg-offset-2">
                    <h3><i class="fa fa-user-circle-o"></i> Inscription</h3>
                    <form action="" method="POST" autocomplete="off" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">MATIERE :</label>
                                    <input type="text" name="nom_module" class="form-control" placeholder="Nom">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">NATURE : </label>
                            <input type="nature" class="form-control" name="nature" placeholder="Mot de passe" >
                        </div>
                        <div class="form-group">
                            <label for="">PROFESSEUR : </label>
                            <input type="text" class="form-control" name="prof" placeholder="Mot de passe" >
                        </div>
                        <div class="form-group">
                            <button type="submit" name="ajouter" class="btn btn-success btn-lg" > Enregistrer </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
