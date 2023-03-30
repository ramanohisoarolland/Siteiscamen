<?php

   session_start();
    require "database.php";
    require "functions.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Site Icons -->
        <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="../css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="../js/modernizer.js"></script>
    <title>Document</title>
</head>
<body class="bg-light footer">
<header class="top-navbar fixed-top">
		<nav class="navbar navbar-expand-lg navbar-light bg-success">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
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
                            <a class="dropdown-item" href="../pagesAccueil/organigrame.php">Organigramme </a>
								<a class="dropdown-item" href="../pagesAccueil/localisation.php">Localisation </a>
								<a class="dropdown-item" href="../pagesAccueil/information.php">Programmes </a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="../pagesAccueil/teachers.php">Professeurs</a></li>
						<li class="nav-item"><a class="nav-link" href="../pagesAccueil/gallery.php">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="../pagesAccueil/historique.php">Historiques</a></li>
						<li class="nav-item"><a class="nav-link" href="../pagesAccueil/contact.php">Contact</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="btn btn-info btn-lg " href="login.php"><span>Se connecter</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
    <div class="container" style="padding-left: 18rem; padding-top: 5rem;">
        <div class=" col-md-6">
            <div class="text-center form-group ">
                <h3 class="h3">Authentification</h3>
            </div>
            <form action="#" method="POST" autocomplete="off" >
                <p class="text-center"><h3><i class="fa fa-user-circle-o"></i> Connexion</h3></p>
                <div class="form-group">
                    <label for="">Nom Utilisateur</label>
                    <input type="text" name="username" class="form-control " placeholder="Username" >
                </div>
                        <div class="form-group">
                    <label for="">Mot de passe : </label>
                    <input type="password" class="form-control " id="myInput" name="password" placeholder="Mot de passe" >
                </div>
                <div class="form-group">
                    <input type="checkbox" class="form-control " style="width: 1.4rem; height: 1.4rem;" onclick="myFunction()"> Afficher mot de passe
                </div>
                <div class="form-group">
                    <button type="submit" name="connexion" class="btn btn-success btn-lg" > Se connecter </button>
                </div>

            </form>
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
							<li><a href="#">About</a></li>
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
    <!-- ALL PLUGINS -->
    <script src="../js/custom.js"></script>
	<script src="../js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
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
</body>
</html>