
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
        <section class="col-md-6">
                <?php
                include('../dbcon.php');
                    if (isset($_GET['id'])) {
                        $student_id = $_GET['id'];

                        $query = "SELECT * FROM mot WHERE id=:stud_id";
                        $statement = $conn->prepare($query);
                        $data = [':stud_id' => $student_id];
                        $statement->execute($data);

                        $result = $statement->fetch(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                    }

                ?>
                <form action="action.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="student_id" value="<?= $result->id;?>">
                    <div class="col-md-12" style="color:black;">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Profile : </label>
                                <img src="../uploads/<?= $result->fileName;?>" style="width: 60px; height: 60px; border-radius: 100%;">
                                <input type="file" name="file" class="form-control" accept="*/image" value="uploads/<?= $result->fileName;?>">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nom : </label>
                                <input type="text" class="form-control bg-transparent" id="formGroupExampleInput" name="nom" value="<?= $result->nom;?>">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Prenom : </label>
                                <input type="text" class="form-control bg-transparent" id="formGroupExampleInput" name="prenom" value="<?= $result->prenom;?>">
                            </div>
                            <label for="exampleFormControlTextarea1 ">MESSAGES : </label>
                            <textarea class="form-control mt-12 bg-transparent" style="color: #ffc107;" id="exampleFormControlTextarea1" rows="5" name="message" ><?= $result->message;?></textarea>
                            <div class="form-group d-flex" style="padding-top: 5rem;">
                                <div class="col-md-6 mb-12">
                                    <input type="submit" class="btn btn-primary form-control mt-12" name="enregistrer" value="Enregistrer">
                                </div>
                                <div class="col-md-6 mb-12">
                                    <input type="reset" class="btn btn-danger form-control" name="Supprimer" value="Supprimer">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </form>
            </section>
        </section>
    </div>
</div>