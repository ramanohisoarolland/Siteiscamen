<?php
    include('../dbcon.php');
    if(isset($_POST['noter'])){
        $num_etudiant = $_POST['num_etudiant'];
        $num_matiere = $_POST['num_matiere'];
        $moyenne = $_POST['moyenne'];
    
                $query = "INSERT INTO note (num_etudiant, num_matiere ,moyenne) VALUES(:num_etudiant, :num_matiere ,:moyenne)";
                $query_run = $conn->prepare($query);
    
            $data = [
            
          
                ':num_etudiant' => $num_etudiant,
                ':num_matiere' => $num_matiere,
                ':moyenne' => $moyenne,
            
            
            ];
            $query_execute = $query_run->execute($data);
            if($query_execute)
            {
                echo " enregistrer";
                // header("Refresh:2");
                $_SESSION['message'] = "note enregistrer";
                header('location: ajouter_notes.php');
                exit(0);
            }      else
            {
                $_SESSION['message'] = "echec de trasanction";
                header('location: ajouter_notes.php');
                exit(0);
            }
            
        }
?>
<?php
    require_once "header.php";
?>
<style>
    .main-panel{
        margin-left: 14rem;
    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container card">
            <div class="form-group mt-4">
                <a href=""><h3 class="h3"><i class="fa fa-edit"></i><span>Notes </span></a> / Gestion des notes</h3>
            </div>
            <div class="card-header d-flex">
                <div class="text-right">
                    <div class="container">
                        <a href="" data-toggle="modal" data-target="#exampleModal">
                            <h4 class="h4 text-right"><i class="fa fa-plus"></i> Ajouter</h4>
                        </a>
                    </div>
                </div>
            </div>
           <form action="ajouter_notes.php" method="post">
                <div class="container text-right">
                    <div class="form-group d-flex mb-5 mt-5" style="padding-left: 12rem;">
                        <button name="search"><h3 class="mt-1"><i class="fa fa-search" ></i> Rechercher : </h3></button>
                        <input type="search" name="rechercher" placeholder="Entrer votre numero de etudiant" class="form-control col-md-6">
                    </div>
                </div>
           </form>
            <form action="" method="post" class="container">
                <div class="container col-md-10">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><h4><b>Numéro étudiant</h4></b></th>
                                <th><h4><b>Numéro matière</h4></b></th>
                                <th><h4><b>Notes</h4></b></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        include('../dbcon.php');
                        if (isset($_POST['search'])) 
                        {
                            $rechercher = $_POST['rechercher'];
                            $query = $conn->prepare("SELECT * FROM note WHERE num_etudiant LIKE '$rechercher' ");
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
                                    <td><?= $row->num_etudiant;  ?></td>
                                    <td><?= $row->num_matiere;  ?></td>
                                    <td><?= $row->moyenne;  ?></td>
                                
                                    </tr>
                                <?php }

                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal insertion -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="ajouter_notes.php" method="post">
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Numero d'Etudiant</label>
                        <input type="text" name="num_etudiant" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Denomination</label>
                        <input type="text" name="num_matiere" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Moyenne</label>
                        <input type="text" name="moyenne" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" name="noter" class="btn btn-primary">Enregistre</button>
            </div>
      </form>
    </div>
  </div>
</div>

<script src="../../js/all.js"></script>



</div>   

