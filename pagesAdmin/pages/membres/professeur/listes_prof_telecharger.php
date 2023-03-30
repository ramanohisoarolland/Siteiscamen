<?php
require "../../GestionAbsence/files/database.php";
require "../files/functions.php";

$professeur = toutProfesseurs();


?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestion Absence</title>
</head>
<body>
<div class="container-fluid">
    <h3>Liste des prof</h3>
    <table class="table" border="1" >
        <tr>
                            <th>id</th>
                            <th>Profile</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>tél</th>
        </tr>
        <?php foreach ($professeur as $s): ?>
            <tr>
                            <td><?=$s["id"] ?></td>
                            <td ><img src="uploads/<?=$s["fileName"] ?>" alt="" style="width: 60px; height: 60px; border-radius: 100%;"></td>
                            <td><a href=""><?=$s["nom"] ?></a></td>
                            <td><a href=""><?=$s["prenom"] ?></a></td>
                            <td><?=$s["email"] ?></td>
                            <td><?=$s["telephone"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<script src="../../GestionAbsence/js/jquery-3.2.1.min.js" ></script>
<script src="../../GestionAbsence/js/bootstrap.min.js" ></script>
<script src="../../GestionAbsence/js/jspdf.min.js" ></script>
<script src="../../GestionAbsence/js/jspdf.plugin.autotable.js" ></script>
<script src="../../GestionAbsence/js/app.js" ></script>

<script>
    var columns = ["id" , "profile", "nom" ,"prenom", "email" , "telephone"];
    var rows = [];

    <?php foreach ($professeur as $a): ?>
    var row = ["<?=$a['id'] ?>", "<?=$a['fileName'] ?>", "<?=$a['nom'] ?>", "<?=$a['prenom'] ?>","<?=$a['email'] ?>", "<?=$a['telephone'] ?>"];
    rows.push(row);
    <?php endforeach; ?>

    var doc = new jsPDF('l');
    doc.autoTable(columns, rows, {
        addPageContent: function(data) {
            doc.text("Liste des prof", 10, 10);
        },
        margin: {horizontal: 7},
        bodyStyles: {valign: 'top'},
        styles: {overflow: 'linebreak', columnWidth: 'wrap'},
        columnStyles: {text: {columnWidth: 'auto'}}
    });

    doc.save("liste-prof");
</script>

</body>
</html>




