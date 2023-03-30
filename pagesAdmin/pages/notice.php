<?php
include('header.php');
include('./dbcon.php');
if (isset($_POST['delete'])) 
{
    $student_id = $_POST['delete'];

    try {
        $query = "DELETE FROM clients WHERE id=:stud_id";
        $statement = $conn->prepare($query);
        $data = [
            ':stud_id' => $student_id
        ];
        $query_execute = $statement->execute($data);
        if($query_execute)
        {
            $_SESSION['message'] = "Deleted Succefully";
            exit(0);
            header('location: notice.php');
        }
        else
      {
         $_SESSION['message'] = "Not Deleted";
         header('location: notice.php');
         exit(0);
         
      }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>
	
    <style>
    .main-panel{
        margin-left: 14rem;
    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container card navbar"  style="margin-bottom: 5rem;">
        <?php
$bdd=new PDO('mysql:host=localhost; dbname=projetiscamen; charset=utf8;', 'root','' );
$recupMessages= $bdd->query('SELECT*FROM clients ORDER BY id DESC');
while($message= $recupMessages->fetch())
{ 
    ?>
            <div class="d-flex">
            <div class="card">
                <ul class="col">
                    <li style="list-style: none;"><h5 class="">NOM : <a href=""><?=$message['nom'];?></a></h5></li>
                    <li style="list-style: none;"><h5 class="">PRENOM  &nbsp;:&nbsp;<a href=""> <?=$message['prenom'];?></a></h5></li>
                    <li style="list-style: none;"><h5 class="">CONTACT &nbsp;:&nbsp;<a href=""> <?=$message['phone'];?></a></h5></li>
                    <li style="list-style: none;"><h5 class="">EMAIL  &nbsp;:&nbsp;<a href=""><?=$message['email'];?></a></h5></li>
                </ul>
            </div>
            <div class="card " style="width: 38rem;" style="margin-left: 12rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">MESSAGE :</h5>
                    <p class="card-text"><?=$message['message'];?>.</p><br>
                    <form action="" method="post">
                        <button type="submit" name="delete" value="<?= $message['id'];  ?>" class="fa fa-trash" style="background: none; color: rgb(231, 110, 29); border: none;" >Supprimer</button>       
                    </form>
                </div>
            </div>
            </div>
            <?php
}
?>
        </div>
    </div>
</div>