<?php require_once "header.php"?>
<style>
    .main-panel{
        margin-left: 14rem;
    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container" >
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <form action="login.php" method="POST" autocomplete="off" >
                        <p class="text-center"><h3><i class="fa fa-user-circle-o"></i> Connexion</h3></p>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" >
                        </div>
                        <div class="form-group">
                            <label for="">Mot de passe : </label>
                            <input type="password" class="form-control" id="myInput" name="password" placeholder="Mot de passe" >
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-control-input" style="width: 1.4rem; height: 1.4rem;" onclick="myFunction()"> Afficher mot de passe
                        </div>
                        <div class="form-group">
                            <button type="submit" name="connexion" class="btn btn-success btn-lg" > Se connecter </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <?php require_once "footer.php" ?>
    </div>
</div>
<script>
    function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

</script>
