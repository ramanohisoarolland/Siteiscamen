<?php
include('header.php');
    include('../files/functions.php');
    // require_once "header.php";
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
        <h4><a href="listes_prof_telecharger.php" class="btn btn-success btn-lg"><i class="fa fa-download"></i> Telecharger les listes des Etudiants</a></h4>
            <div class="container">
                <div class="col-md-8">
                    <h3>Liste des Professeurs</h3>
                    <form action="functions.php" method="POST" enctype="multipart/form-data">
                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>Profile</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>email</th>
                            <th>Tél</th>
                            <?php 
                                if(isset($_SESSION["type"]) && $_SESSION["type"] == "admin" ):
                                echo "<th>Modifier</th>"; 
                                endif
                                ?>
                        </tr>
                        <?php foreach($professeur as $s): ?>
                        <tr>
                            <td><?=$s["id"] ?></td>
                            <td ><img src="uploads/<?=$s["fileName"] ?>" alt="" style="width: 60px; height: 60px; border-radius: 100%;"></td>
                            <td><a href=""><?=$s["nom"] ?></a></td>
                            <td><a href=""><?=$s["prenom"] ?></a></td>
                            <td><?=$s["email"] ?></td>
                            <td><?=$s["telephone"] ?></td>
                            <td hidden><a href="marquer_absence.php?id=<?=$s['id'] ?>" class="btn btn-sm btn-warning"><i class="fa fa-flag-o"></i> Marquer absence</a></td>
                            <?php 
                            if(isset($_SESSION["type"]) && $_SESSION["type"] == "admin" ):
                            echo "<td><a href='modifier_etudiant.php?id=".$s['id']."' class='btn btn-sm btn-primary'><i class='fa fa-cog'></i> Modifier infos</a></td>"; 
                            endif
                            ?>

                        </tr>
                        <?php endforeach; ?>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
