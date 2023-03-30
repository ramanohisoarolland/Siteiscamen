


<?php require_once "header.php"?>
<style>
        .content{
	margin-left: 8rem;
	padding-top: 8rem;
    font-size: 1.4rem;
}

</style>
<div class="content">
<div class="container" >
    <div class="row">

        <div class="col-lg-4 col-lg-offset-4">
            <?php
            if (isset($message)) {
                echo '<label class="text-danger>'.$message.'</label>';            }
            ?>
            <form action="action.php" method="POST" autocomplete="off" >
                <p class="text-center"><h3><i class="fa fa-user-circle-o"></i> Connexion</h3></p>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="login" class="form-control" placeholder="Username" >
                </div>
                <div class="form-group">
                    <label for="">Mot de passe : </label>
                    <input type="password" class="form-control" name="password" placeholder="Mot de passe" >
                </div>
                <div class="form-group">
                    <button type="submit" name="connexion" class="btn btn-success btn-lg" > Se connecter </button>
                </div>

            </form>
        </div>

    </div>
</div>

</div>