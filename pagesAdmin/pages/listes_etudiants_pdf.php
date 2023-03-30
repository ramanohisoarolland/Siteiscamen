<?php

session_start();
require "GestionAbsence/files/database.php";
require "functions.php";

$etudiants = toutEtudiants();


?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestion Absence</title>
</head>
<body>
<div class="container-fluid">
    <h3>Liste des etudiants</h3>
    <table class="table" border="1" >
        <tr>
        <th>#</th>
                            <th>Profile</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>CNE</th>
                            <th>Tél</th>
                            <th>Email</th>
        </tr>
        <?php foreach ($etudiants as $s): ?>
            <tr>
                            <td><?=$s["id"] ?></td>
                            <td ><img src="uploads/<?=$s["fileName"] ?>" alt="" style="width: 60px; height: 60px; border-radius: 100%;"></td>
                            <td><a href=""><?=$s["nom"] ?></a></td>
                            <td><a href=""><?=$s["prenom"] ?></a></td>
                            <td><?=$s["cne"] ?></td>
                            <td><?=$s["telephone"] ?></td>
                            <td><?=$s["email"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<script src="GestionAbsence/js/jquery-3.2.1.min.js" ></script>
<script src="GestionAbsence/js/bootstrap.min.js" ></script>
<script src="GestionAbsence/js/jspdf.min.js" ></script>
<script src="GestionAbsence/js/jspdf.plugin.autotable.js" ></script>
<script src="GestionAbsence/js/app.js" ></script>

<script>
    var columns = ["id" , "profile", "nom" ,"prenom", "CNE" , "tel" , "Email"];
    var rows = [];

    <?php foreach ($etudiants as $a): ?>
    var row = ["<?=$a['id'] ?>", "<?=$a['fileName'] ?>", "<?=$a['nom'] ?>", "<?=$a['prenom'] ?>","<?=$a['cne'] ?>", "<?=$a['telephone'] ?>", "<?=$a['email'] ?>"];
    rows.push(row);
    <?php endforeach; ?>

    var doc = new jsPDF('l');
    doc.autoTable(columns, rows, {
        addPageContent: function(data) {
            doc.text("Liste des etudiants", 10, 10);
        },
        margin: {horizontal: 7},
        bodyStyles: {valign: 'top'},
        styles: {overflow: 'linebreak', columnWidth: 'wrap'},
        columnStyles: {text: {columnWidth: 'auto'}}
    });
    

    doc.save("liste-etudiants");
</script>

</body>
</html>




