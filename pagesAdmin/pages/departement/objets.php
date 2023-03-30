
<?php
include('action.php');

?>
<div class="container">
<form action="action.php" method="POST" enctype="multipart/form-data" class="container">
<div class="d-flex mr-1">
    <div class="col ">
        <div class="col mt-3">
            <div class="col-md-12 mb-3">
                <label for="">profile : </label>
                <input type="file" class="form-control mt-3" name="file" style="color: black;">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">objets : </label>
                <input type="text" class="form-control mt-3" style="color: black;" name="objet">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">message : </label>
                <textarea name="message" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="col-md-12 mb-3">
                <input type="submit" class="form-control mt-3" name="inserer" style="color: black;">
            </div>
        </div>
    </div>
</form>
</div>