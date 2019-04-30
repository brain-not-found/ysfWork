<<?php 
session_start();
 ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Karma - modifier</title>
    <!-- Favicon-->
    <link rel="icon" href="img/favicon.ico" type="image/png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css1/style.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    <link href="mycss2.css" rel="stylesheet">


    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css1/themes/all-themes.css" rel="stylesheet" />
</head>


<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>S'il vous plaît, attendez...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">Chercher</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">Fermer</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">Modifier </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                    <!-- Call Search -->

                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    
                    <!-- #END# Tasks -->
                   
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
       
            

  <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Modifier Compte</h2>
            </div>

<?PHP
include "../entities/client.php";
include "../core/clientC.php";
include "../core/carteCF.php";
if (isset($_GET['username'])){
    $clientC=new clientC();
    $result=$clientC->recupererclient($_GET['username']);
    foreach($result as $row){
        $username=$row['username'];
        $mail=$row['mail'];
        $password=$row['password'];
        $tel=$row['tel'];
        $age=$row['age'];
        $photo=$row['photo'];
        }

?>
            <!-- Headings -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                modifier le compte de <b><?PHP echo $username ?></b>   :
                            </h2>
                            
                        </div>
                                                <div class="body">


                         <form name="f" method="POST" class="simple-form" >
                        <table id="t01" style="border:none;">
                       
<tr class="tablex" >
<td>username</td>
<td><input type="text" name="username" value="<?PHP echo $username ?>" class="form-control" pattern="(.{6,})" title="Le Nom d utilisateur doit contenir au mois 6 characters" oninvalid="this.setCustomValidity('Le Nom d utilisateur doit contenir au mois 6 characters')"  oninput="this.setCustomValidity('')" maxlength="25" required></td>
</tr>
<tr class="tablex">
<td>mail</td>
<td><input type="text" name="mail" value="<?PHP echo $mail ?>" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Ce doit etre un mail (example@domain.xxx)" oninvalid="this.setCustomValidity('Ce doit etre un mail (example@domain.xxx)')"  oninput="this.setCustomValidity('')" required></td>
</tr>
<tr class="tablex">
<td >tel </td>
<td><input type="tel" name="tel" value="<?PHP echo $tel ?>" class="form-control" pattern=".{8,8}"  title="Le Numéro de Telephone doit contenir  8 chiffre" oninvalid="this.setCustomValidity('Le Numéro de Telephone doit contenir  8 chiffre')"  oninput="this.setCustomValidity('')" required></td>
</tr>
<tr class="tablex">
<td>age</td>
<td><input type="text" name="age" value="<?PHP echo $age ?>" class="form-control" min="1900-01-01" max="2003-12-31"  title="tu doit etre plus que 16 ans" oninvalid="this.setCustomValidity('tu doit etre plus que 16 ans')"  oninput="this.setCustomValidity('')" required></td>
</tr>
<tr class="tablex">
<td>photo</td>
<td><input type="file" name="photo" value="<?PHP echo $photo ?>" class="form-control" accept="image/*"
                                oninvalid="this.setCustomValidity('Tu doit impoter une photo')"  oninput="this.setCustomValidity('')" ></td>
</tr >
<tr class="tablex">
<input type="hidden" name="password" value="<?PHP echo $password ?>" class="form-control" >


</table> 

<center><input type="submit" name="modifier" value="modifier" class="button button-login w-100" style="height: 50px;"></center>
<input type="hidden" name="username_ini" value="<?PHP echo $_GET['username'];?>"  >
</form>

<?PHP
    
}


else 
echo "";


if (isset($_POST['modifier'])){
    $_SESSION["username"] = trim($_POST['username']);
    if ($_POST['photo']!='') {
         $client=new client($_POST['username'],$_POST['mail'],$_POST['password'],$_POST['tel'],$_POST['age'],$_POST['photo']);
    $clientC->modifierclient($client,$_POST['username_ini']);
    }
    else
    {

    $client=new client($_POST['username'],$_POST['mail'],$_POST['password'],$_POST['tel'],$_POST['age'],$photo);
    $clientC->modifierclient($client,$_POST['username_ini']);
    }

  $carteC=new carteC();
    $carteC->changeusername($username,$_POST['username']);
}

?>
 <center><a href="Compte.php"><input type="submit" name="close" value="Close" class="button button-login w-100" style="height: 50px;" ></a></center>
</div>

          </div>
                    
         </div>


    </section>




            <!-- Widgets -->
            
                <!-- #END# Answered Tickets -->
            
                <!-- Task Info -->
               
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
               
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
