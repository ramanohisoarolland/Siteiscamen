<?php
    require_once "header.php";
    $students = [];

    $students = toutEtudiants();


?>
<style>
    body{
        overflow: visible;
    }
    .main-panel{
        margin-left: 14rem;
    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container">
            <div style="margin-right:-3rem;">
                <div class="navbar col-md-12">
                    <h3>Liste des étudiants</h3>
                </div>
                <form action="functions.php"  method="POST" enctype="multipart/form-data">
                    <div class="navbar text-center">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Profile</th>
                                    <th>Nom</th>
                                    <th>CNE</th>
                                    <th>Tél</th>
                                    <th>Email</th>
                                    <th>Date naissance</th>
                                    <th>Action</th>
                                    <?php 
                                        if(isset($_SESSION["type"]) && $_SESSION["type"] == "admin" ):
                                        echo "<th>Modifier</th>"; 
                                        endif
                                        ?>
                                </tr>
                            </thead>
                            <?php foreach($students as $s): ?>
                            <tbody>
                                <tr>
                                    <td ><img src="..\uploads/<?=$s["fileName"] ?>" alt="" style="width: 60px; height: 60px; border-radius: 100%;"></td>
                                    <td><a href="etudiant.php?id=<?=$s['id'] ?>"><?=$s["nom"] ?></a> &nbsp;<a href="etudiant.php?id=<?=$s['id'] ?>"><?=$s["prenom"] ?></a></td>
                                    <td><?=$s["cne"] ?></td>
                                    <td><?=$s["telephone"] ?></td>
                                    <td><?=$s["email"] ?></td>
                                    <td><?=$s["date_naissance"] ?></td>
                                    <td><a href="marquer_absence.php?id=<?=$s['id'] ?>" class="btn btn-sm btn-warning"><i class="fa fa-flag"></i> Marquer</a></td>
                                    <?php 
                                    if(isset($_SESSION["type"]) && $_SESSION["type"] == "admin" ):
                                    echo "<td><a href='modifier_etudiant.php?id=".$s['id']."' class='btn btn-sm btn-primary'><i class='fa fa-cog'></i> </a></td>"; 
                                    endif
                                    ?>

                                </tr>
                            </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </form>
            </div>
        </div>
        <?php require_once "footer.php" ?>   
     </div>
</div>

