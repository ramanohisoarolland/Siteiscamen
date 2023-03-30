
        <div class=" col-md-12">
            <div class="">
                <h3><i class="fa fa-user-circle-o"></i> Inscription</h3>
                <form action="../functions.php" method="POST" enctype="multipart/form-data" class="container">
                    <div class="col-md-12">
                        <div>
                            <div class="form-group">
                                <label for="">Type</label>
                                <select name="type" id="type_compte" class="form-control" >
                                    <option value="professeur">Professeur</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">profile : </label>
                                <input type="file" class="form-control mt-3" name="file" style="color: black;">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Nom</label>
                                        <input type="text" name="nom" class="form-control" placeholder="Nom">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Prénom</label>
                                        <input type="text" name="prenom" class="form-control" placeholder="Prénom">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Téléphone</label>
                                        <input type="text" name="telephone" class="form-control" placeholder="Téléphone">
                                    </div>
                                </div>
                            </div>
                            <div class="row student">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">CIN</label>
                                        <input type="text" name="cin" class="form-control" placeholder="CIN">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <!-- Professeur -->
                            <div class="form-group professeur">
                                <label for="">SOM</label>
                                <input type="number" min="1111111" max="9999999"  name="som" class="form-control" placeholder="SOM" >
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" >
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username" >
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">MATIERE :</label>
                                        <input type="text" name="nom_module" class="form-control" placeholder="Nom">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">NATURE : </label>
                                <input type="nature" class="form-control" name="nature" placeholder="Mot de passe" >
                            </div>
                            <div class="form-group">
                                <label for="">Mot de passe : </label>
                                <input type="password" class="form-control" name="password" placeholder="Mot de passe" >
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>