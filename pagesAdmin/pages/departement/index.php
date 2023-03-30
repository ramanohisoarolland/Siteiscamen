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
        <div class="card">
            <div class="navbar">
                <div class="container">
                    <h2>Fiche D'ecolage</h2>
                    <div class="nav-item">
                        <table class="table bg-success">
                            <thead>
                                <tr>
                                    <th>Niveaux</th>
                                    <th>Ecotourisme</th>
                                    <th>Gestion</th>
                                    <th>Paramedicaux</th>
                                    <th>Pedagogique</th>
                                    <th>Informatique</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Licence1</td>
                                    <td>45 000</td>
                                    <td>50 000</td>
                                    <td>25 000</td>
                                    <td>30 000</td>
                                    <td>56 000</td>
                                </tr>
                                <tr>
                                    <td>Licence2</td>
                                    <td>50 000</td>
                                    <td>60 000</td>
                                    <td>36 000</td>
                                    <td>36 000</td>
                                    <td>60 000</td>
                                </tr>
                                <tr>
                                    <td>Licence3</td>
                                    <td>60 000</td>
                                    <td>62 000</td>
                                    <td>40 000</td>
                                    <td>45 000</td>
                                    <td>65 000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 2rem;">
            <div class="card-header d-flex">
                <h3 class="nav-link">
                    Voir l'emploi du temp par Departements et Par Niveaux
                </h3>
                <?php if(isset($_SESSION["login"]) && $_SESSION["type"] == "admin" ): ?>
                    <div class="form-group" style="margin-left: 20rem; margin-top: 2rem;">
                            <a href="ajout_emploi_du_temps.php" class="btn btn-lg-12 btn-warning">ajouter un emploi du temp</a> 
                    </div>
                <?php endif?>
            </div>
        </div>
            <div class="container">
                <form action="search.php" method="POST" enctype="multipart/form-data" class="container d-flex"  style="">
                    <div class="d-flex col-md-4">
                        <div class="nav-item col-md-12" style="">
                            <div class="container text-primary">
                                <label for="">DEPARTEMENTS</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="filiere" value="ecotourisme" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    ECOTOURISME
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="filiere" value="gestion" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    GESTION
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="filiere" value="paramedicaux" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    PARAMEDICAUX
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="filiere" value="pedagogique" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    PEDAGOGIQUE
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="filiere" value="informatique" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    INFORMATIQUE
                                </label>
                            </div>
                        </div>
                        <div class="container">
                            <label for="">Niveaux</label>
                            <select name="niveau" id="" class="form-control">
                                <option value="">votre niveaux</option>
                                <option value="licence1">NIVEAU1</option>
                                <option value="licence2">NIVEAU2</option>
                                <option value="licence3">NIVEAU3</option>
                            </select>
                            <div class="form-group" style="margin-left: 20rem; margin-top: 2rem;">
                                <input type="submit" name="consulter" class="btn btn-lg btn-primary" value="CONSULTER">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>
</div>
