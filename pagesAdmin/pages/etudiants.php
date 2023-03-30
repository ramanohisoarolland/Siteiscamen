<?php
    include('functions.php');
    require_once "header.php";
    $students = [];

    $students = toutEtudiants();


?>

<style>
    .main-panel{
        margin-left: 14rem;
    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="">
        <h4><a href="listes_etudiants_pdf.php" class="btn btn-success btn-lg"><i class="fa fa-download"></i> Telecharger les listes des Etudiants</a></h4>
            <div class="">
                <div class="col-md-12">
                    <h3>Liste des étudiants</h3>
                    <?php
                        $connection=mysqli_connect("localhost","root","","projetiscamen");
                        $query = "SELECT id FROM etudiant ORDER BY id";
                         $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                             ?>  
                             <div class="card">
                                 <div class="navbar">
                                     <h4>Effectifs des Etudiants  : </h4>
                                     <h2 class="card text-info">0<?php echo $row; ?> Etudiants</h2>
                                 </div>
                             </div>
                    <table class="table">
                        <tr>
                            <th>Profile</th>
                            <th>matricule</th>
                            <th>Nom et Prénom</th>
                            <th>Tél</th>
                            <th>Email</th>
                            <th>Date naissance</th>
                            <?php if(isset($_SESSION["login"]) && $_SESSION["type"] == "admin" ): ?><th style="padding-left: 3rem;">Action</th>
                                <?php endif?>
                        </tr>
                        <?php foreach($students as $s): ?>
                        <tr>
                            <td ><img src="uploads/<?=$s["fileName"] ?>" alt="" style="width: 60px; height: 60px; border-radius: 100%;"></td>
                            <td><?=$s["cne"] ?></td>
                            <td><a href=""><?=$s["nom"] ?></a> <a href=""><?=$s["prenom"] ?></td>
                            <td><?=$s["telephone"] ?></td>
                            <td><?=$s["email"] ?></td>
                            <td><?=$s["date_naissance"] ?></td>
                            <form action="code.php" method="POST" enctype="multipart/form-data">
                            <?php if(isset($_SESSION["login"]) && $_SESSION["type"] == "admin" ): ?>
                                <td>
                                     <a href="modifier_etud.php?id=<?=  $s['id']; ?>" class="" style="background: none; border: none;"><i class="fa fa-pen" ></i> Modifier</a>                                      
                                    <button type="submit" name="delete_etudiant" value="<?= $s['id'];?>" class=""  style="background: none; border: none; color: red;"><i class="fa fa-trash"></i> Suppr</button>
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


