
<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
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
        <div class="container">
          <div class="row">
            <form action="index.php" method="post" enctype="multipart/form-data" >
              <h3>Ajouter des cours</h3>
              <input type="file" class="form-control" name="myfile"> <br>
                <div class="">

                    <select id="" class="form-control" name="departement">
                        <option value=""></option>
                        <option  value="ecotourisme">Ecotourisme</option>
                        <option value="gestion">Gestion Management</option>
                        <option value="paramedicaux">Paramedicaux</option>
                        <option value="informatique">Informatique</option>
                        <option value="pedagogique">Science de l'Education</option>
                    </select>
                </div>
                <div class=" ml-10">
                    <select id="" class="form-control mt-3" style=" color: black;background-color: #ccc;"  name="niveau">
                        <option></option>
                        <option>licence1</option>
                        <option>licence2</option>
                        <option>licence3</option>
                    </select>
                </div> 
                <div class=" ml-10">
                    <select id="" class="form-control mt-3" style=" color: black;background-color: #ccc;"  name="pour">
                        <option></option>
                        <option>Support de cours</option>
                        <option>Devoirs</option>
                        <option>Evaluation</option>
                        <option>Examen</option>

                    </select>
                </div> <br>
              <button type="submit" class="btn btn-lg btn-success" name="save">ENVOYER</button>
            </form>
          </div>
        </div>
    </div>
</div>
</body>
</html>