<?php
// Initialize the session
include "../core/clientC.php";
$cond1='';
$cond2='';
if(isset($_POST['mail']) )
{

$clientC=new clientC();
$result=$clientC->recuperermail($_POST['mail']);
	if($result->rowCount() != 0)
	{
	foreach($result as $row){
		$username=$row['username'];
		$mail=$row['mail'];
		$password=$row['password'];
		$tel=$row['tel'];
		$age=$row['age'];
	
	if ($_POST['mail']==$mail) 
	{

 $to       = $mail;
$subject  = 'Compte oublié';
$message  = 'Hi cher Client Voici votre Nom d\'utilisateur : <b>'. $username .'</b>' ;
$headers  = 'From: karma.company@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
           mail($to, $subject, $message, $headers);
           header('Location: login.php');	

    }
}
}
    else 
    {
    	$cond1="Mail non valider";
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
  <title>Karma - Compte oublié</title>
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
					<h1>Compte oublié</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              
              <li class="breadcrumb-item active" aria-current="page">Recupurer Votre Nom d'utilisateur</li>
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
							<h4>Si tu face de problemes </h4>
							<p>Tu peux nous contacter Sur la page facebook <strong>Karma company
							    </strong>ou appler les numéros <br> 
								    <br>+126 <strong> 20258260 </strong>
									<br>+126 <strong> 55687890 </strong> </p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					
					<div class="login_form_inner">
						<h3>Saisir vos données</h3>
<center>
						<form class="simple-form"  method="POST" id="contactForm" >
							
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="mail" placeholder="E-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'"
								pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Ce doit etre un mail (example@domain.xxx)"
								 oninvalid="this.setCustomValidity('Ce doit etre un mail (example@domain.xxx)')"  oninput="this.setCustomValidity('')" required>
															<br/><p class="controle"><?php echo $cond1 ?></p>

							</div>
							<div class="col-md-12 form-group">
								
							</div>
							<div class="col-md-12 form-group">
								<input type="submit" value="Envoyer" class="button button-login w-100" >
							</div>
						</form>
					</center>

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
								<li><a href="#">Compte</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget instafeed">
							<h4 class="footer_title">Galleries</h4>
							<ul class="list instafeed d-flex flex-wrap">
								<li><img src="img/gallery/r1.jpg" alt=""></li>
								<li><img src="img/gallery/r2.jpg" alt=""></li>
								<li><img src="img/gallery/r3.jpg" alt=""></li>
								<li><img src="img/gallery/r5.jpg" alt=""></li>
								<li><img src="img/gallery/r7.jpg" alt=""></li>
								<li><img src="img/gallery/r8.jpg" alt=""></li>
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
								<p>123, Main Street, Your City</p>
	
								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Numéro de Tel 
								</p>
								<p>
									+123 456 7890 <br>
									+123 456 7890
								</p>
	
								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Email
								</p>
								<p>
									free@infoexample.com <br>
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