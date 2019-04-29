<?php
// Initialize the session
session_start();
include "../core/clientC.php";
$cond1="";
$cond2="";
if  (isset($_POST['password']))
{
if ($_POST['password']==$_POST['passwordconf']) {

$clientC=new clientC();
$clientC->newpassword($_SESSION["username"],$_POST['password']);
header('Location: login.php');
}
else
{
	$cond2="Mot de passe non valide";
}
}

else
{
    $cond1="Saisir un mot de passe ";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Karma - Mot de passe oublié</title>
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
	
	<!--================ End Header Menu Area =================-->
  
  <!-- ================ start banner area ================= -->	
	
	<!-- ================ end banner area ================= -->
  
  <!--================Login Box Area =================-->
	<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Saisir Un nouveau mot de passe </h3>

						<form class="row login_form" method="POST" action="newpwd.php" id="contactForm" name="f" >
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="password" placeholder="Mot de pass " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mot de pass'">
																							

							</div>

							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="passwordconf" placeholder="Confirmer Mot de pass" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirmer Mot de pass'">
																							<br/><p class="controle"><?php echo $cond2 ?></p>

							</div>
							
							<div class="col-md-12 form-group">
								<input type="submit" value="Changer" class="button button-login w-100" ">
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->



  <!--================ Start footer Area  =================-->	
	
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