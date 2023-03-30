
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
        <div class="container">
            <table class="table">
                <thead class="alert-success">
                    <tr>
                        <th>heure</th>
                        <th>lundi</th>
                        <th>mardi</th>
                        <th>mercredi</th>
                        <th>jeudi</th>
                        <th>vendredi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include('../dbcon.php');
                                if (isset($_POST['consulter'])) 
                                {
                                    $niveau = $_POST['niveau'];
                                    $filiere = $_POST['filiere'];
                                    $query = $conn->prepare("SELECT * FROM emploi_du_temp WHERE niveau LIKE '$niveau%' AND filiere LIKE '$filiere%' ORDER BY ID DESC limit 1 ");
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
                                                <td><?= $row->heure;  ?></td>
                                                <td><?= $row->lundi;  ?></td>
                                                <td><?= $row->mardi;  ?></td>
                                                <td><?= $row->mercredi;  ?></td>
                                                <td><?= $row->jeudi;  ?></td>
                                                <td><?= $row->vendredi;  ?></td>
                                            </tr>
                                            <tr>
                                                <td><?= $row->heure1;  ?></td>
                                                <td><?= $row->lundi1;  ?></td>
                                                <td><?= $row->mardi1;  ?></td>
                                                <td><?= $row->mercredi1;  ?></td>
                                                <td><?= $row->jeudi1;  ?></td>
                                                <td><?= $row->vendredi1;  ?></td>
                                            </tr>
                                            <tr>
                                                <td><?= $row->heure2;  ?></td>
                                                <td><?= $row->lundi2;  ?></td>
                                                <td><?= $row->mardi2;  ?></td>
                                                <td><?= $row->mercredi2;  ?></td>
                                                <td><?= $row->jeudi2;  ?></td>
                                                <td><?= $row->vendredi;  ?></td>
                                            </tr>
                                            <tr>
                                                <td><?= $row->heure3;  ?></td>
                                                <td><?= $row->lundi3;  ?></td>
                                                <td><?= $row->mardi3;  ?></td>
                                                <td><?= $row->mercredi3;  ?></td>
                                                <td><?= $row->jeudi3;  ?></td>
                                                <td><?= $row->vendredi3;  ?></td>
                                            </tr>
                                        <?php }

                                }
                                else {
                                    ?>
                                    <tr>
                                        <td>no reccording</td>
                                    </tr>
                            <?php  }
                                ?>
                                

                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
