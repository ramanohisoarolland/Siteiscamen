<?php
// include('files/functions.php');
require_once "header.php";

$absences = listAbsences();

?>
<style>
    .main-panel{
        margin-left: 14rem;
    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="">
            <h3>Liste des absences des étudiants</h3>
            <h4><a href="absences_etudiants_pdf.php" class="btn btn-primary btn-lg"><i class="fa fa-file-pdf-o"></i> Compte rendu des absences</a></h4>
            <hr>
                <div>
                    <table class="table">
                        <tr>
                            <th>Profile</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Matricule</th>
                            <th>Module</th>
                            <th>Date absence</th>
                            <th>Justification</th>
                            <th>Marquée</th>
                            <?php if($_SESSION["type"] == "admin"): ?>
                                <th>Action</th>
                            <?php endif; ?>
                        </tr>
                        <?php foreach($absences as $a): ?>
                            <tr>
                                <td><img src="..\uploads/<?=$a["fileName"] ?>" alt=""></td>
                                <td><?=$a["nom"] ?></td>
                                <td><?=$a["prenom"] ?></td>
                                <td><?=$a["cne"] ?></td>
                                <td><?=$a["module"] ?></td>
                                <td><?=$a["date_absence"] ?></td>
                                <td><?=$a["type_absence"] ?></td>
                                <td><?=$a["nom_prof"] ?> <?=$a["prenom_prof"] ?></td>
                                <?php if($_SESSION["type"] == "admin"): ?>
                                    <td><a href="deleteAbsence.php?id=<?=$a['id'] ?>" class="btn btn-sm btn-danger" >Supprimer</a></td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
        </div>
        <?php require_once "footer.php"?>
    </div>
</div>
