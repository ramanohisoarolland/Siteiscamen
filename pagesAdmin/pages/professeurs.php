<?php
    include('functions.php');
    require_once "header.php";
    $professeur = [];

    $professeur = toutProfesseurs();


?>
<style>
    .main-panel{
        margin-left: 14rem;
    }

</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="content">
        <h4><a href="liste_professeur_pdf.php" class="btn btn-success btn-lg"><i class="fa fa-download"></i> Telecharger les listes des Professeurs</a></h4>
            <div class="container">
                <div class="col-md-8">
                    <h3>Liste des Professeurs</h3>
                    <?php
                        $connection=mysqli_connect("localhost","root","","projetiscamen");
                        $query = "SELECT id FROM professeur ORDER BY id";
                         $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                             ?>  
                             <div class="card">
                                 <div class="navbar">
                                     <h4>Effectifs  : </h4>
                                     <h2 class="card text-info">0<?php echo $row; ?> Professeurs</h2>
                                 </div>
                             </div>
                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>Profile</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Tél</th>
                            <th>Email</th>
                           
                        </tr>
                        <?php foreach($professeur as $s): ?>
                        <tr>
                            <td><?=$s["id"] ?></td>
                            <td ><img src="uploads/<?=$s["fileName"] ?>" alt="" style="width: 60px; height: 60px; border-radius: 100%;"></td>
                            <td><a href=""><?=$s["nom"] ?></a></td>
                            <td><a href=""><?=$s["prenom"] ?></a></td>
                            <td><?=$s["telephone"] ?></td>
                            <td><?=$s["email"] ?></td>
                            <form action="code.php" method="POST" enctype="multipart/form-data" class="container">
                            <?php if(isset($_SESSION["login"]) && $_SESSION["type"] == "admin" ): ?><td>
                                     <a href="modifier_prof.php?id=<?=  $s['id']; ?>" class="btn btn-warning" ><i class="fa fa-pen" ></i> Modifier</a>                                       
                                </td>
                                <td>
                                         <button type="submit" name="delete" value="<?= $s['id'];?>" class="btn btn-danger"><i class="fa fa-trash"></i> Supprimer</button>
                                </td>
                            <?php endif?>
                            </form>

                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


