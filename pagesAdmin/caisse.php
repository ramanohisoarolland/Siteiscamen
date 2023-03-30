
<?php

require('code.php');
require_once "header.php";

?>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
<style>
    .main-panel{
        margin-left: 14rem;
    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container">
                <div class="container">
                    <div class="navbar">
                        <form action="code.php" method="POST">
                            <div class="container">
                                <h2>Registre d'ecolage</h2>
                            </div>
                            <div class="d-flex  navbar ">
                                <div class="col card container">
                                    <div class="form-group">
                                        <label for=""><h4>Nom :</h4></label>
                                        <input type="text" name="nom" class="form-control">
                                    </div>
                                    <div class="form-group">
                                    <label for=""><h4>Matricule :</h4></label>
                                        <input type="text" name="cne" class="form-control">
                                    </div>
                                </div>
                                <div class="col card container" style="margin-left: 2rem;">
                                    <div class="form-group">
                                        <label for=""><h4>Filiere :</h4></label>
                                        <select name="filiere" id=""  class="form-control">
                                        <option value="ecotourisme" class="form-control">ecotourisme</option>
                                        <option value="gestion" class="form-control">gestion</option>
                                        <option value="paramedicaux" class="form-control">paramedicaux</option>
                                        <option value="pedagogique" class="form-control">pedagogique</option>
                                        <option value="informatique" class="form-control">informatique</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label for=""><h4>Niveaux :</h4></label>
                                    <select name="niveau" id=""  class="form-control">
                                        <option value="Licence1" class="form-control">Licence1</option>
                                        <option value="Licence2" class="form-control">Licence2</option>
                                        <option value="Licence3" class="form-control">Licence3</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nombre de Mois à payer</th>
                                                <th>Date</th>
                                                <th>Somme</th>
                                                <th>Emergement</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <!-- <td><input type="month" name="mois" class="form-control"></td> -->
                                                <td><input type="number" name="mois" class="form-control"></td>
                                                <td><input type="date" name="date" class="form-control"></td>
                                                <td><input type="text" name="somme" class="form-control" style="width: 8rem;"></td>
                                                <td><input type="checkbox" name="emergement" class="form-control"></td>
                                                <td><input type="submit" class="btn btn-success" name="enregistrer" value="enregistrer"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="card mb-5">
                                        <div class="nav-item">
                                        <?php
                                                include('pages/dbcon.php');
                                                            $query = "SELECT * FROM ecolage ORDER BY id desc limit 1";
                                                            $statement = $conn->prepare($query);
                                                            $statement->execute();
                                                            $statement->setFetchMode(PDO::FETCH_OBJ);//PDO::FETCH_ASSOC 
                                                            $result = $statement->fetchAll(); 
                                                            if ($result) {
                                                                foreach($result as $row)
                                                                {
                                                                    ?>
                                                                    <h5 class="nav-link">Total : <?php echo $row->somme * $row->mois  ?></h5>

                                                    <?php }
                                                        }

                                        ?>

                                        </div>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
         </div>
    </div>
</div>
<script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>