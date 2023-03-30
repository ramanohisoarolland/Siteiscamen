<?php
include('header.php');
require_once('../functions.php');
    $students = [];

    $students = toutEtudiants();


?>
            <div class="container">
                <div class="col-md-8">
                    <h3>Liste des étudiants</h3>
                    <form action="../functions.php" method="POST" enctype="multipart/form-data">
                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>Profile</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>CNE</th>
                            <th>Tél</th>
                            <th>Email</th>
                            <th>Date naissance</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($students as $s): ?>
                        <tr>
                            <td><?=$s["id"] ?></td>
                            <td ><img src="../uploads/<?=$s["fileName"] ?>" alt="" style="width: 60px; height: 60px; border-radius: 100%;"></td>
                            <td><a href=""><?=$s["nom"] ?></a></td>
                            <td><a href=""><?=$s["prenom"] ?></a></td>
                            <td><?=$s["cne"] ?></td>
                            <td><?=$s["telephone"] ?></td>
                            <td><?=$s["email"] ?></td>
                            <td><?=$s["date_naissance"] ?></td>
                            <td><a href="../deleteEtudiants.php?id=<?=$s['id'] ?>"><i class="fa fa-trash"></i></a></td>
                            <td ><a href="marquer_absence.php?id=<?=$s['id'] ?>"><i class="fa fa-edit"></i></a></td>
                            

                        </tr>
                        <?php endforeach; ?>
                    </table>
                    </form>
                </div>
            </div>


