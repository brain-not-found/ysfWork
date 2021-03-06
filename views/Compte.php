<?php
session_start();

include "../entities/client.php";
include "../core/clientC.php";
include "../core/carteCF.php";

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
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Karma - Compte</title>
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
              <li class="nav-item"><a  href="compte.php"><img src="img/<?php echo $row['photo']?>" width="70" heigth="70"></a><center><p><strong><?php echo $row['username']?></strong></p></strong></center>
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
					<h1>Mon Compte</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              
              <li class="breadcrumb-item active" aria-current="page">Modifier vos données</li>
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
														    <a href="login.php"><input type="submit" name="logout" value="Deconnexion" class="button"></a>
<br><br>
							<h4>Voici vos Données <br> <br>  </h4>
									
									<table >
										
										<tr><th><b>Nom d'utulisateur</b></th><td><?PHP echo $row['username']; ?></td></tr>
										<tr><th><b>E-mail</b></th><td><?PHP echo $mail; ?></td></tr>
										<tr><th><b>Numero de telephone</b></th><td><?PHP echo $tel; ?></td></tr>
										<tr><th><b>Date de naissance</b></th><td><?PHP echo $age; ?></td></tr>
										


										
    							    </table>
   <?php
}
?>
    					   <br/><br/>
							    <a href="mclientper.php?username=<?PHP echo $row['username']; ?>">	<input type="submit" name="modifier" value="Modifier" class="button"></a>

						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>demande un Carte de fidelité </h3>
						<form class="simple-form" method="POST" action="ajoutdemande.php" id="contactForm" name="f"  >

							
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="nom" placeholder="Nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom'"  pattern="^[a-zA-Z]+$" title="Le nom doit contenir des lettres seulement" oninvalid="this.setCustomValidity('Le nom doit contenir des lettres seulement')"  oninput="this.setCustomValidity('')" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="prenom" placeholder="Prenom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Prenom'" pattern="^[a-zA-Z]+$" title="Le prenom doit contenir des lettres seulement" oninvalid="this.setCustomValidity('Le prenom doit contenir des lettres seulement')"  oninput="this.setCustomValidity('')" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="hidden" class="form-control" id="name" name="username" value="<?PHP echo $username; ?>" placeholder="Nom d'utulisateur " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom d\'utulisateur">
							</div>
							<div class="col-md-12 form-group">
								<select  name="type" >
<?php  if ($cartes->rowCount()==0) {
	# code...
?>
<option>Nouvelle Carte</option>
<?php
}
else
{
?>
<option>Modifier</option>
<option>Améliorer</option>
<?php
}
?>
</select>
							</div>
							
 <pre><br> </pre>
							<div class="col-md-12 form-group">
								<input type="submit" name="demande" value="demander" class="button button-login w-100" style="color: #cc9900; color: white ;border-radius: 20px; " >
							</div>
						</form>
						
						<?php   
if ($cartes->rowCount()!=0)
 {
	# code...

						 ?>
						
							<input type="submit" value="Consulter Votre Carte de fidélité" class="button button-login w-100" onclick="document.getElementById('id01').style.display='block'" >

								

								<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" style="color: #b38600;">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     
    </div>

    <div class="container">

      <h2 style="color: #cc9900;"> Voici Votre Carte de fidélité</h2>
      <br>
    <?PHP


foreach($cartes as $row){
	if ($row['type']=='Gold'){

	?>

    <table style="border:5px solid #cc9900; box-shadow: 1px 2px 3px; background-color: rgb(255, 255, 0 , 0.5)">

<?php
}
    ?>

     <?PHP


	if ($row['type']=='Silver'){

	?>

    <table style="border:5px solid #cc9900; box-shadow: 1px 2px 3px; background-color: rgb(204, 204, 204,0.5)">

<?php
}
    ?>

     <?PHP


	if ($row['type']=='Bronze'){

	?>

    <table style="border:5px solid #cc9900; box-shadow: 1px 2px 3px; background-color: rgb(128, 77, 0 , 0.5)">

<?php
}
    ?>
      	<tr class="table">
         <th>username</th>
         <th>mail</th>
         <th>type</th>
         <th>nom</th>
         
</tr>

     <tr class="table">
    <td><?PHP echo $row['username']; ?></td>
    <td><?PHP echo $row['mail']; ?></td>
    <td><?PHP echo $row['type']; ?></td>
    <td><?PHP echo $row['nom']; ?></td>
   
      
    </tr>

    <tr class="table">
    	<th>prenom</th>
         <th>tel</th>
         <th>age</th>
         <th></th>
    </tr>

    <tr class="table">
    	 <td><?PHP echo $row['prenom']; ?></td>
    <td><?PHP echo $row['tel']; ?></td>
    <td><?PHP echo $row['age']; ?></td>
    <td></td>
    </tr>
    </table> 

    <?php
    }
    ?> 

    <div class="container" >
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div> 

<?php
}
?>
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