<?php
   session_start();
    require "files/database.php";
    require "files/functions.php";
if (!isset($_SESSION['login'])) {
  header('location:../../../securite/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Administrateur Iscamen</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../fontawesome/css/all.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../../js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>
<body>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="../../index.php"><img src="../../images/logo.ico" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../images/logo.ico" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Rechercher" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
                <li style="margin-top: 1.3rem;"><a href="index.php">Accueil</a></li>
                <?php if(isset($_SESSION["login"]) && $_SESSION["type"] == "admin" ): ?>
                    <li style="margin-left: 1rem; margin-top: 1.3rem;"><a href="index.php"> <i class="fa fa-dashboard"></i> <b>ADMIN</b></a></li>
                <?php elseif(isset($_SESSION["type"]) && $_SESSION["type"] == "etudiant" ): ?>
                    <li style="margin-left: 1rem; margin-top: 1.3rem;"><a href="etudiant.php?id=<?=$_SESSION['id_etudiant'] ?>"> <i class="fa fa-dashboard"></i> Mes absences</a></li>
                <?php elseif(isset($_SESSION["type"]) && $_SESSION["type"] == "professeur" ): ?>
                    <li style="margin-left: 1rem; margin-top: 1.3rem;"><a href="index.php"> <i class="fa fa-dashboard"></i> <?=$_SESSION["nom"] ?></a></li>
                <?php endif; ?>
                <?php if(!isset($_SESSION["login"])): ?>
                    <li style="margin-left: 1rem; margin-top: 1.3rem;"><a href="../signup.php">Inscription</a></li>
                    <li style="margin-left: 1rem; margin-top: 1.3rem;"><a href="login.php">Connexion</a></li>
                <?php endif ?>
        <!-- /.navbar-collapse -->
              <?php if(isset($_SESSION["message"])): ?>
                  <div class="container">
                      <div class="row">
                          <div class="alert alert-info" >
                              <?php echo $_SESSION["message"] ?>
                          </div>
                      </div>
                  </div>
              <?php endif ?>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <<?php
                     $connection=mysqli_connect("localhost","root","","projetiscamen");

                    $query = "SELECT id FROM clients ORDER BY id";
                    $query_run = mysqli_query($connection, $query);
                    $row = mysqli_num_rows($query_run);
                              
                  ?>
              <a href="../notice.php" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="fab fa-chat mx-0"></i>
                    <?php echo '<h4 class="text-center mt-2 text-info">'.$row.' </h4>';?>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal"> Messages</h6>
                </div>
              </a>
              <?php if(isset($_SESSION["login"]) && $_SESSION["type"] == "admin" ): ?>
                <a class="dropdown-item preview-item" href="../signup.php">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="ti-user mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Nouveau utilisateur</h6>
                  </div>
                </a>
              <?php endif?>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <i class="fa fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-user text-primary"></i>
                Profile
              </a>
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Parametrages
              </a>
              <?php if(isset($_SESSION["id"])): ?>
              <a class="dropdown-item" href="../../../securite/logout.php">
                <i class="ti-power-off text-primary"></i>
                Deconnexion
              </a>
              <?php endif ?>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">Messages</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="ajout des messages">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Ajouter</button>
                </div>
              </form>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="fixed-top sidebar sidebar-offcanvas mt-5" id="sidebar" >
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link " href="index.php">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title"><center>
            <h3 class="text-primary">
            <?php echo $_SESSION['login']?>
            </h3>
            </center></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#pages12" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="pages12">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../index.php">Accueil</a></li>
                <li class="nav-item"> <a class="nav-link" href="../notice.php">Notifications</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Discussion</a></li>
                <li class="nav-item"> <a class="nav-link" href="mot.php">Mots</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Departements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../departement/ecotourisme/ecotourisme.php">Ecotourisme</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../departement/gestion/gestion.php">Gestion</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../departement/paramedicaux/paramedicaux.php">Paramedicaux</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../departement/pedagogique/pedagogique.php">Pedagogique</a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../departement/informatique/informatique.php">Informatique</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#caisse" aria-expanded="false" aria-controls="charts">
              <i class="fa fa-fill menu-icon"></i>
              <span class="menu-title">Services</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="caisse">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../caisse.php">Economat</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="fa fa-edit menu-icon"></i>
              <span class="menu-title">Inscription</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../signup.php">S'inscrire</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#liste" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Listes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="liste">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../etudiants.php">Listes des Etudiants</a></li>
                <li class="nav-item"> <a class="nav-link" href="../professeurs.php">Listes des Professeurs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#lecon" aria-expanded="false" aria-controls="icons">
              <i class="ti-file menu-icon"></i>
              <span class="menu-title">Gestion des Cours</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="lecon">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./../pdf/">Nouveau</a></li>
              <li class="nav-item"> <a class="nav-link" href="./../pdf/downloads.php"> Telecharger </a></li>
              <?php if(isset($_SESSION["login"]) && $_SESSION["type"] == "admin" ): ?>
                <li class="nav-item"> <a class="nav-link" href="./../membres/ajout_matiere.php"> Nouveau Module </a></li>
              <?php endif?>
            </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#abscence" aria-expanded="false" aria-controls="icons">
              <i class="ti-list menu-icon"></i>
              <span class="menu-title">Gestion des Absences</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="abscence">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./../GestionAbsence">Absence</a></li>
            </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#note" aria-expanded="false" aria-controls="icons">
              <i class="ti-pencil menu-icon"></i>
              <span class="menu-title">Notes des Etudiant</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="note">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./../directeurs/ajouter_notes.php">Notes</a></li>
            </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#parametre" aria-expanded="false" aria-controls="icons">
              <i class="ti-settings menu-icon"></i>
              <span class="menu-title">Parametrages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="parametre">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./../departement/index.php"> Emploi du temps</a></li>  
              <?php if(isset($_SESSION["login"]) && $_SESSION["type"] == "admin" ): ?>
                 <li class="nav-item"> <a class="nav-link" href="./../membres/compte_admin.php"> Nouveau Compte </a></li> 
              <?php endif?> 
            </ul>
            </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../../../securite/logout.php">
                <i class="ti-power-off text-primary"></i>&nbsp;&nbsp;&nbsp;
                <span class="menu-title">Deconnecter</span>
              </a>
          </li>
        </ul>
      </nav>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/chart.js/Chart.min.js"></script>
  <script src="../../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../../js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/dashboard.js"></script>
  <script src="../../js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

