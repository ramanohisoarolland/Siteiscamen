<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php require_once "header.php"?>
<style>
    .main-panel{
        margin-left: 14rem;
    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
       <div class="col-md-8">
           <table class="table">
              <thead>
                  <th>COURS</th>
                  <th>DEPARTEMENT</th>
                  <th>NIVEAUX</th>
                  <th>POUR</th>
                  <th>TAILLE (in mb)</th>
                  <th>TELECHARGE</th>
                  <th>Action</th>
              </thead>
              <tbody>
                <?php foreach ($files as $file): ?>
                  <tr>
                    <td><?php echo $file['name']; ?></td>
                    <td><?php echo $file['departement']; ?></td>
                    <td><?php echo $file['niveaux']; ?></td>
                    <td><?php echo $file['pour']; ?></td>
                    <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
                    <td><?php echo $file['downloads']; ?></td>
                    <td><a href="../../pdf/downloads.php?file_id=<?php echo $file['id'] ?>"><i class="fa fa-download"></i></a></td>
                  </tr>
                <?php endforeach;?>

              </tbody>
            </table>
       </div>
    </div>
</div>
</body>
</html>