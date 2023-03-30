
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
        <div class="d-flex">
        <div class="row" style="margin-top: 5rem;">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-item nav-link " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">Inscription</a>
                <a class="nav-item nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Nouveau Modules</a>
                <a class="nav-item nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Mots</a>
                <a class="nav-item nav-link" href="prefet.php">Programmes</a>
                </div>
            </div>
        </div>
        <div>
            <nav class="container navbar" style="height: 5rem;">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false"> Membres Admin</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Professeurs </a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Etudiants</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                   <?php
                        include('signup.php');
                   ?>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <?php
                        include('ajout_matiere.php');
                    ?>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                     <?php
                        include('mot.php');
                    ?>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <?php
                     header('location:prefet.php');
                      ?>
                </div>
            
                <div class="tab-pane fade show " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <?php include('list_admin.php'); ?>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <?php 
                    include('liste_prof.php')

                ?>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"><?php
                        include('etudiants.php') ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="navbar">
      <!-- <div class="nav-brand">
            <div class="d-flex" style="margin-left: 5rem;">
                <div class="col">
                    <a href="../signup.php" > Etudiant</a>
                </div>
                <div class="col" >
                    <a href="../professeur/signup.php" > Professeur</a>
                </div>
                <div class="col" >
                    <a href="../professeur/signup.php" >Modules</a>
                </div>
            </div>
      </div> -->
    </div>
    </div>    
    </div>    