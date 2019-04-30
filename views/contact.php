<?php
session_start();

include "../entities/client.php";
include "../core/clientC.php";
include "../core/carteCF.php";
$cond4='';
if ($_SESSION['username']!='') {
  # code...

$carte1C=new carteC();
$cartes=$carte1C->recuperercarte($_SESSION['username']);

  $clientC=new clientC();
    $result=$clientC->recupererclient($_SESSION['username']);
  foreach($result as $row){
    $username=$row['username'];
    $mail=$row['mail'];
    $password=$row['password'];
    $tel=$row['tel'];
    $age=$row['age'];
    $photo=$row['photo'];
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Karma - Contact</title>
    <link rel="icon" href="img/favicon.ico" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">
  <link rel="stylesheet" type="text/css" href="mycss.css">

  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="mycss2.css">

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
              
              <li class="nav-item submenu dropdown active">
                <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Contact</a>
 <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.html">A propos de nous</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.html">service AV</a></li>

                </ul>
              </li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><a href="#"><button><i class="ti-shopping-cart"></i></button></a> </li>
             <?php if ($_SESSION['username']!='') { ?>
              <li class="nav-item"><a  href="compte.php"><img src="img/<?php echo $photo ?>" width="70" heigth="70"></a><center><p><strong><?php echo $username ?></strong></p></strong></center>
              <?php }
              else
              {?>
              <li class="nav-item"><a class="button button-header" href="login.php">Se Connecter</a></li>
            <?php
              } 
              ?>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->


	<!-- ================ start banner area ================= -->
	<section class="blog-banner-area" id="contact">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Contact</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              
              <li class="breadcrumb-item active" aria-current="page">Contacter nous</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->

	<!-- ================ contact section start ================= -->
  <section class="section-margin--small">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 420px;"></div>
        <script>
          function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#A3A3A3'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: 36.830870, lng: 10.097370},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }
          
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
        
      </div>


      <div class="row">
        <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Tunis</h3>
              <p>Adresse</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-headphone"></i></span>
            <div class="media-body">
              <h3><a href="20788336">20788336</a></h3>
              <p>Lundi-Samedi</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">karma.company@gmail.com</a></h3>
              <p>Envoyer un mail!</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-9">



<?php

if ( (isset($_POST['sujet']))&& (isset($_POST['message']) ) )
{

if (($_POST['sujet']!='')&&($_POST['message'])!='') {

if (strlen($_POST['message'])>19) {
  # code...


 $to       ='karma.company@gmail.com';
$subject  =$_POST['sujet'];
$message  =$_POST['message'];
$headers  = 'From:'.$mail. "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
           mail($to, $subject, $message, $headers);
           
 }  

 else
 $cond4='Le message doit contenir au mois 20 characters';       

}
}


else
{

}


?>



          <form  class="simple-form"  method="POST"  action="Contact.php">
                
                <table >
                  <tr>
                    <input class="form-control" name="sujet"  type="text" placeholder="Entrer le sujet" style="width: 50%;" pattern="(.{6,})" title="Le sujet doit contenir de 6 à 20 characters" oninvalid="this.setCustomValidity('Le sujet doit contenir au mois 6 characters')"  oninput="this.setCustomValidity('')" maxlength="20" required>
                    <br>
                  </tr>
                  <tr>
                    
                    <textarea class="form-control"  name="message"  cols="30" rows="5" title="Le message doit contenir au mois 20 characters" oninvalid="this.setCustomValidity('Le message doit contenir au mois 20 characters')"  oninput="this.setCustomValidity('')"  required ></textarea>
                                              <br/><p class="controle"><?php echo $cond4 ?></p>
                  </tr>
                </table>
                  
              
              <?php  if ($_SESSION['username']=='') {
              ?>

              <input type="button"  value="Envoyer le message" onclick="document.getElementById('id01').style.display='block'">
              <div id="id01" class="modal" style="background-color: #b38600; height:350px; width: 500px; border:10px solid black; opacity: 0.7;  ">
  <center>
  <form class="modal-content animate" action="login.php" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     
    </div>

    <div class="container">

      <h2 style="color: black;"> Tu doit etre Connecter</h2>
      <br>
      <div class="container" >
      <a href="login.php"><button type="button"  class="cancelbtn">Login d'ici</button></a>
    </div>
       <div class="container" >
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
  </center>
</div>


              <?php
               }
               else
               {
               ?>
              <input type="submit"  value="Envoyer le message">
              <?php
               }
               
               ?>
           
          </form>


        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->
  
  

  <!--================ Start footer Area  =================-->	
	<footer>
		<div class="footer-area footer-only">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets ">
							<h4 class="footer_title large_title">Notre mission</h4>
							<p>
								xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
							</p>
							<p>
								xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
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
								<p>xxxxxxxxxxxxxxx</p>
	
								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Numéro de Tel 
								</p>
								<p>
									xxxxxxxxxx <br>
									xxxxxxxxxx
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
  <script src="vendors/jquery.form.js"></script>
  <script src="vendors/jquery.validate.min.js"></script>
  <script src="vendors/contact.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>