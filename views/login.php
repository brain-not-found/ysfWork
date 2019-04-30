<?php
// Initialize the session
session_start();
include "../core/clientC.php";
 $_SESSION["username"] = trim('');
$cond1='';
$cond2='';
$cond3='';

if ( (isset($_POST['username']))&& (isset($_POST['password']) ) )
{
	if (($_POST['username']=='admin')&&($_POST['password']=='admin')) {
		header('Location: Gestion Client.php');	
	}
	else{
$clientC=new clientC();
$result=$clientC->recupererclient($_POST['username']);
	if($result->rowCount() != 0)
	{
	foreach($result as $row){
		$username=$row['username'];
		$mail=$row['mail'];
		$password=$row['password'];
		$tel=$row['tel'];
		$age=$row['age'];
		$confirme=$row['confirme'];
	
	if (password_verify($_POST['password'],$password)) 
	{
		if($confirme=='oui')
		{
 $_SESSION["username"] = trim($_POST['username']);
header('Location: compte.php');	
        }
        else
        {
$code=rand(10000,99999);
 $_SESSION["code"] = trim($code);
 $_SESSION["username"] = trim($username);

 $to       = $mail;
$subject  = 'Mot de passe oublié';
$message  = 'Hi '.$username.' Voici votre code de confirmation : '. $code ;
$headers  = 'From: karma.company@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
           mail($to, $subject, $message, $headers);
header('Location: confirmcompte.php');	
        }
        
    }

    else 
    {
    	$cond1="Mot de passe non valider";
    }
}
}
    else
    {
    	$cond2="Utilisateur non existé ";
    }
}
}


else
{
	echo "";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Karma - Connexion</title>
	  <link rel="icon" href="img/favicon.ico" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">
  <link rel="stylesheet" href="mycss2.css">

  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="myjs.js"></script>
</head>
<body>
	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="main.php"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item "><a class="nav-link" href="main.php">Accueil</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">cosmétique naturelle</a>
                
							</li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Blog</a>
                
							</li>
							
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Contact</a>
 <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="Contact.php">A propos de nous</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.html">service AV</a></li>
                </ul>
              </li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><a href="#"><button><i class="ti-shopping-cart"></i></button></a> </li>
              <li class="nav-item"><a class="button button-header" href="login.php">Se Connecter</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->
  
  <!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Connexion / Inscription</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              
              <li class="breadcrumb-item active" aria-current="page">Se connecter d'ici</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  <!--================Login Box Area =================-->
	<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<div class="hover">
							<h4>Nouveau sur notre site ?</h4>
							<p>Nous sommes pas les seuls mais nous somme les meilleurs </p>
							<a class="button button-account" href="register.php">Créer un compte</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Connectez-vous pour entrer</h3>

						<form class="simple-form" method="POST" action="login.php" id="contactForm" name="f" >
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="username" placeholder="Nom d utilisateur" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom d utilisateur'" required title="Entrer votre nom d utulisateur" oninvalid="this.setCustomValidity('Entrer votre nom d utulisateur')"  oninput="this.setCustomValidity('')">
																							<br/><p class="controle"><?php echo $cond2 ?></p>

							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="password" placeholder="Mot de passe" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mot de passe'" required 
								title="Entrer votre mot de passe" oninvalid="this.setCustomValidity('Entrer votre mot de passe')"  oninput="this.setCustomValidity('')">
															<br/><p class="controle"><?php echo $cond1 ?></p>

							</div>
							
							<div class="col-md-12 form-group">


<input type="submit" value="Se Connecter" class="button button-login w-100">

                        <p style="color: white;">.</p>
                        <a href="cmpt.php">Compte  oublié ?</a><br>
						<a href="pwd.php">Mot de passe oublié ?</a>
							</div>
	

						</form>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->



  <!--================ Start footer Area  =================-->	
	<footer>
		<div class="footer-area footer-only">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets ">
							<h4 class="footer_title large_title">Notre mission</h4>
							<p>
								So seed seed green that winged cattle in. Gathering thing made fly you're no 
								divided deep moved us lan Gathering thing us land years living.
							</p>
							<p>
								So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved 
							</p>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Liens rapides</h4>
							<ul class="list">
								<li><a href="#">Accueil</a></li>
								<li><a href="#">cosmétique naturelle</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
					
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Contact</h4>
							<div class="ml-40">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
                                       siège social							
                                </p>
								<p>24 rue de la culture, citée idheaa 2, ben younes, Tunis</p>
	
								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Numéro de Tel 
								</p>
								<p>
									+126 20258260 <br>
									+126 55687890
								</p>
	
								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Email
								</p>
								<p>
									lamiamarzoukibekri@yahoo.com <br>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row d-flex">
					<p class="col-lg-12 footer-text text-center">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">404 Brain Not Found</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->



  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>