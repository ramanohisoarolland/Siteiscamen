<?php
include('../pagesAdmin/pages/dbcon.php');
if(isset($_POST['commentaire'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    try {
       
        $query = "INSERT INTO clients (email, nom,prenom, phone, message) VALUES(:email, :nom,:prenom, :phone, :message)";
        $query_run = $conn->prepare($query);
        $data = [     
            ':email' => $email,
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':phone' => $phone,
            ':message' => $message
        ];
        $query_execute = $query_run->execute($data);

        if($query_execute)
        {
            echo " enregistrer";
            // header("Refresh:2");
            $_SESSION['message'] = "messages envoyé";
            header('location: contact.php');
            exit(0);
        }      else
        {
            $_SESSION['message'] = "echec de trasanction";
            header('location: contact.php');
            exit(0);
        }
        
    } 
    catch (PDOException $e) {
        echo $e->getMessage();
    }
       
}?>


<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>SITE ISCAMEN</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../images/logo.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="../css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="../js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.../js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 
	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

    <!-- Start header -->
    <header class="top-navbar fixed-top">
		<nav class="navbar navbar-expand-lg navbar-light bg-success">
			<div class="container-fluid">
				<a class="navbar-brand" href="../index.php">
					<img src="../images/logo.ico" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="../index.php">Accueil</a></li>
						<li class="nav-item"><a class="nav-link" href="mots.php">Mots</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Departement </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="../departements/ecotourisme.php">Ecotourisme </a>
								<a class="dropdown-item" href="../departements/gestion.php"> Gestion </a>
								<a class="dropdown-item" href="../departements/paramedicaux.php"> Paramedicaux </a>
								<a class="dropdown-item" href="../departements/pedagogique.php"> Pedagogique </a>
								<a class="dropdown-item" href="../departements/informatique.php"> Informatique </a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Actualité </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="organigrame.php">Organigramme </a>
								<a class="dropdown-item" href="localisation.php">Localisation </a>
								<a class="dropdown-item" href="information.php">Programmes </a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="teachers.php">Professeurs</a></li>
						<li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="historique.php">Historiques</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="btn btn-info btn-lg " href="../securite/login.php"><span>Se connecter</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div class="all-title-box" style="background-image: url(../images/iscamen.jpg); height: 30rem; background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
		<div class="container text-center">
			<h1>information<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
		</div>
	</div>
	
    <div id="contact" class="section wb">
        <div class="container">
        <?php
                        include('../pagesAdmin/pages/dbcon.php');
                        $query = "SELECT * FROM programme ORDER BY id DESC LIMIT 1";
                        $statement = $conn->prepare($query);
                        $statement->execute();
                        $statement->setFetchMode(PDO::FETCH_OBJ);//PDO::FETCH_ASSOC 
                        $result = $statement->fetchAll(); 
                        if ($result) {
                            foreach($result as $row )
                            {
                                ?>
        <h2><?= $row->expediteur;  ?> <br> <?= $row->objet;  ?></h2>
        <p><?= $row->message;  ?>.</p>
        <?php  } }  ?>
        </div>
    </div>
	

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Apropos</h3>
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                        <div class="footer-right">
							<ul class="footer-links-soi">
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-phone"></i></a></li>
							</ul><!-- end links -->
						</div>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">Mots</a></li>
                            <li><a href="#">Departements</a></li>
							<li><a href="#">Apropos</a></li>
							<li><a href="#">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">iscamensite@gmail.com</a></li>
                            <li><a href="#">www.iscamenFacebook.com</a></li>
                            <li>+261 34 83 766 84</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">copyright. &copy; 2022 <a href="#">ISCaMen</a> crée par : <a href="">RAMANOHISOA MARTIN ROLLAND</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->


    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="../js/all.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCKjLTXdq6Db3Xit_pW_GK4EXuPRtnod4o"></script>
	<!-- Mapsed JavaScript -->
	<script src="../js/mapsed.js"></script>
	<script src="../js/01-custom-places-example.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../js/custom.js"></script>

</body>
</html>