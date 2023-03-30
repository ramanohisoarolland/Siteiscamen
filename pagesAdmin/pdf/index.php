<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
            <div class="">

                <select id=""  style=" color: white;background-color: #ccc;"  name="departement">
                    <option value=""></option>
                    <option>Ecotourisme</option>
                    <option>Gestion Management</option>
                    <option>Paramedicaux</option>
                    <option>Informatique</option>
                    <option>Science de l'Education</option>
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
          <button type="submit" name="save">ENVOYER</button>
        </form>
      </div>
    </div>
  </body>
</html>