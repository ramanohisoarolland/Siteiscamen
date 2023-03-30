<?php
// require_once('functions.php');
?>
        <div class="container" >
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h3><i class="fa fa-user-circle-o"></i> Inscription</h3>
                    <form action="functions.php" method="POST" enctype="multipart/form-data" class="container">
                        <div class="d-flex">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="">profile : </label>
                                    <input type="file" class="form-control mt-3" name="file" style="color: black;">
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Nom</label>
                                            <input type="text" name="nom" class="form-control" placeholder="Nom">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Prénom</label>
                                            <input type="text" name="prenom" class="form-control" placeholder="Prénom">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Téléphone</label>
                                            <input type="text" name="telephone" class="form-control" placeholder="Téléphone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row student">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">CIN</label>
                                            <input type="text" name="cin" class="form-control" placeholder="CIN">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Matricule</label>
                                            <input type="text" name="cne" class="form-control" placeholder="Matricule">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Date naissance</label>
                                            <input type="date" name="date_naissance" class="form-control" placeholder="Date naissance">
                                        </div>
                                    </div>
                                </div>
                                <!-- Student -->
                                <div class="row student">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Lieu de naissance</label>
                                            <input type="text" class="form-control" placeholder="Lieu de naissance" name="lieu_naissance" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8" style=";">
                                <div class="form-group">
                                    <label for="">Adresse</label>
                                    <input name="adresse" class="form-control" placeholder="Adresse" id="" cols="30" rows="5"></input>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" >
                                </div>
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username" >
                                </div>
                                <div class="form-group">
                                    <label for="">Mot de passe : </label>
                                    <input type="password" class="form-control" name="password" placeholder="Mot de passe" >
                                </div>
                            </div> 
                        </div> 
                        <div class="form-group">
                            <button type="submit" name="signup" class="btn btn-success btn-lg" > S'inscrire </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

