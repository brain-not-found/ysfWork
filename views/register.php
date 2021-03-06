<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Karma - Inscription</title>
	  <link rel="icon" href="img/favicon.ico" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">

  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="mycss2.css">

  <script src="myjs.js"></script>

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
					<h1>Inscription</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Créer un Compte d'ici</li>
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
							<h4>Vous avez déjà un compte ?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="button button-account" href="login.php">Connecte-toi maintenant</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner register_form_inner">
						<h3>Créer un Compte</h3>
						

						<form class="simple-form" method="POST" action="ajoutClient.php" id="register_form"  name="ff">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="username" placeholder="Nom d utilisateur" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom dutilisateur'" pattern="(.{6,})" title="Le Nom d utilisateur doit contenir au mois 6 characters" 
								oninvalid="this.setCustomValidity('Le Nom d utilisateur doit contenir au mois 6 characters')"  oninput="this.setCustomValidity('')" maxlength="25" required>
								
							</div>
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="mail" placeholder="Adresse E-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Aadresse E-email'" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Ce doit etre un mail (example@domain.xxx)"
								 oninvalid="this.setCustomValidity('Ce doit etre un mail (example@domain.xxx)')"  oninput="this.setCustomValidity('')" required>
              </div>
              <div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}" title="Doit contenir au moins 4 characters et au moins  ( 1 Majuscule ,1 Minuscule , 1 chiffre) "
								 oninvalid="this.setCustomValidity('Doit contenir au moins 4 characters et au moins  ( 1 Majuscule ,1 Minuscule , 1 chiffre) ')"  oninput="this.setCustomValidity('')" required>
              </div>
              <div class="col-md-12 form-group">
								<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="mot de passe de confirmation" pattern="(.{4,})" title="Doit contenir au moins 4 characters et au moins  ( 1 Majuscule ,1 Minuscule , 1 chiffre) " onfocus="this.placeholder = ''" onblur="this.placeholder = 'mot de passe de confirmation'"
								 oninvalid="this.setCustomValidity('Doit contenir au moins 4 characters et au moins  ( 1 Majuscule ,1 Minuscule , 1 chiffre) ')"  oninput="this.setCustomValidity('')" required>
							</div>
              <div class="col-md-12 form-group">
								<input type="tel" class="form-control" id="Number" name="tel" placeholder="Numéro de Tel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Numéro de Tel'" pattern=".{8,}"  title="Le Numéro de Telephone doit contenir  8 chiffre" maxlength="8" 
								oninvalid="this.setCustomValidity('Le Numéro de Telephone doit contenir  8 chiffre')"  oninput="this.setCustomValidity('')" required>
              </div>
              <div class="col-md-12 form-group">
								<input type="date" class="form-control" id="age" name="age" placeholder="Date de naissance" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date de naissance'"
								min="1900-01-01" max="2003-12-31"  title="tu doit etre plus que 16 ans" 
								oninvalid="this.setCustomValidity('tu doit etre plus que 16 ans')"  oninput="this.setCustomValidity('')" required>
              </div>
             <div class="col-md-12 form-group">
								<input type="file" class="form-control" id="photo" name="photo" placeholder="photo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'photo'" accept="image/*"
								oninvalid="this.setCustomValidity('Tu doit impoter une photo')"  oninput="this.setCustomValidity('')" required>
              </div>
              
							
							<div class="col-md-12 form-group">
                                  <td><input type="submit" name="ajouter" value="Inscription" class="button button-register w-100" style="border-radius: 50px; box-shadow: 1px 2px 3px; width: 60%;"></td>
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