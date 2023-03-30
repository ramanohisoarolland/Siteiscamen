<?php
//  include('header.php');
 include('../dbcon.php');


 if (isset($_POST['btnUpdate'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    try {
        $query = "UPDATE professeur SET nom=:nom, prenom=:prenom, telephone=:telephone, email=:email WHERE id=:student_id LIMIT 1";
        $statement = $conn->prepare($query);

        $data = [
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':telephone' => $telephone,
            ':email' => $email,
        ];
       $query_execute = $statement->execute($data);
       if($query_execute)
       {
           $_SESSION['message'] = "update Succefully";
        //    header('location: membres_admin.php');
           exit(0);
       }
       else
     {
        $_SESSION['message'] = "Not inserted";
        header('location: membres_admin.php');
        exit(0);
     }

    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>

  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../fontawesome/css/all.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../../js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
                <?php
                include('../dbcon.php');
                    if (isset($_GET['id'])) {
                        $student_id = $_GET['id'];

                        $query = "SELECT * FROM professeur WHERE id=:stud_id";
                        $statement = $conn->prepare($query);
                        $data = [':stud_id' => $student_id];
                        $statement->execute($data);

                        $result = $statement->fetch(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                    }

                ?>
<div class="col-md-5">
    <table class="table table-hover text-center">
            <thead class="table-header">
                <tr class="text-center">
                            <th>Profile</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>email</th>
                            <th>Tél</th>
                            <th>Actions</th>
                 </tr>
                                </thead>
                                <tbody >
                                <?php
                                    include('../dbcon.php');

                                    $query = "SELECT * FROM professeur ORDER BY id DESC";
                                    $statement = $conn->prepare($query);
                                    $statement->execute();
                                    $statement->setFetchMode(PDO::FETCH_OBJ);//PDO::FETCH_ASSOC 
                                    $result = $statement->fetchAll(); 
                                    if ($result) {
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <tr>
                                            <td ><img src="../uploads/<?=$row->fileName ?>" alt="" style="width: 60px; height: 60px; border-radius: 100%;"></td>
                                            <td class="nom"><?= $row->nom;  ?></td>
                                            <td class="prenom"><?= $row->prenom;  ?></td>
                                            <td class="email"><?= $row->email;  ?></td>
                                            <td class="telephone"><?= $row->telephone;  ?></td>
                                            <!-- <form action="code.php" method="post"> -->
                                            <form action="code.php" method="POST" enctype="multipart/form-data" class="container">
                                            <td>
                                                    <a href="#" class="edit" data-toggle="modal" data-target="#editStudentModal"><i class="fa fa-pen" style=""></i></a>                                       
                                                </td>
                                                <td>
                                                        <button type="submit" name="delete" value="<?= $row->id;  ?>" class="btn btn-danger">supprimer</button>
                                                </td>
                                           
                                            </form>
                                        </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="5"> No Record Found</td>
                                        </tr>
                                        <?php 
                                    }
                    ?>
                 <tr>
                    <td></td>
                 </tr>
            </tbody>
        </table>
</div>


<!-- Modification -->
<div class="modal fade" id="editStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="navbar">
                    <div class="">
                        <div class="row card col-md-12">
                            <div class="form-group">
                                <label for="">Nom</label>
                                <input type="text" id="nom"  name="nom"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Prenom</label>
                                <input type="text"  id="prenom"  name="prenom"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text"  id="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Tél</label>
                                <input type="text"  id="telephone"    name="telephone"   class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" name="" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="sumit" name="btnUpdate"  class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
  </div>
</div>
<script type="text/javascript">
    $('.edit').click(function(){
        var $row = $(this).closest('tr');
        var id = $row.find('.id').text();
        var fileName = $row.find('.fileName').text();
        var nom = $row.find('.nom').text();
        var prenom = $row.find('.prenom').text();
        var email = $row.find('.email').text();
        var telephone = $row.find('.telephone').text();

        $('#nom').val(nom);
        $('#prenom').val(prenom);
        $('#email').val(email);
        $('#telephone').val(telephone);

        $('#editStudentModal').modal('show')
    });
</script>

  <!-- Plugin js for this page -->
  <script src="../../vendors/chart.js/Chart.min.js"></script>
  <script src="../../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../../js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/dashboard.js"></script>
  <script src="../../js/Chart.roundedBarCharts.js"></script>