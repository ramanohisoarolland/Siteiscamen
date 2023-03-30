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
            <form action="action.php" method="POST" enctype="multipart/form-data" class="container">	
                <p class="text-center"><h3><i class="fa fa-user-circle-o"></i> Connexion</h3></p>
                <div class="d-flex">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="">type</label>
                            <select name="type" id="" class="form-control">
                                <option value="admin">ADMIN</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">profile : </label>
                            <input type="file" class="form-control mt-3" name="file" style="color: black;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nom d'utilisateur : </label>
                            <input type="text" class="form-control" name="login" placeholder="Mot de passe" >
                        </div>
                        <div class="form-group">
                            <label for="">Email : </label>
                            <input type="text" class="form-control" name="email"  >
                        </div>
                        <div class="form-group">
                            <label for="">Mot de passe : </label>
                            <input type="password" class="form-control" name="password" placeholder="Mot de passe" >
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="form-group">
                        <button type="submit" name="connexion" class="btn btn-success btn-lg" > S'inscrire </button>
                    </div>
                    <div class="form-group" style="margin-left: 5rem;">
                        <a href="membres_admin.php" name="connexion" class="btn btn-warning btn-lg" >Retour </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
