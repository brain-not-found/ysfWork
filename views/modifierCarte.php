﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Karma - modifier</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

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
        <!-- Left Sidebar -->
       
            

  <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Gestion de Client</h2>
            </div>


            <!-- Headings -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">


                        <?PHP
include "../entities/carte.php";
include "../core/carteC.php";
include "../core/clientCF.php";
include "../core/demandeCF.php";

if (isset($_GET['username'])){

$carteC=new carteC();
$client1C=new clientC();
$demande1C=new demandeC();
    $result1=$client1C->recupererclient($_GET['username']);
    foreach($result1 as $row){
        $username=$row['username'];
        $mail=$row['mail'];
        $tel=$row['tel'];
        $age=$row['age'];
                            }
        $result2=$demande1C->recupererdemande($_GET['username']);
        $verif=$result2->rowCount();
if ($verif!=0) {

    foreach($result2 as $row){
        $idx=$row['id'];
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        }
                            }
        else
        {
        $idx=666;
        $nom='Go out';
        $prenom='Go out';  
        }


     $result3=$carteC->recuperercarte($_GET['username']);
    foreach($result3 as $row){
        $type=$row['type'];
                            }




?>

                        <div class="header">
                            <h2>
                                modifier le carte de <b><?PHP echo $username ?></b>   :
                            </h2>
                            
                        </div>
                              <div class="body">


                         <form name="f" method="POST">
                        <table id="t01">
                       
<tr>
<td>username</td>
<td><input type="text" name="username" value="<?PHP echo $username ?>"></td>
</tr>
<tr>
<td>mail</td>
<td><input type="text" name="mail" value="<?PHP echo $mail ?>"></td>
</tr>
<tr>
<td>type</td>
<td><input type="text" name="type" value="<?PHP echo $type ?>"></td>
</tr>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>tel </td>
<td><input type="number" name="tel" value="<?PHP echo $tel ?>"></td>
</tr>
<tr>
<td>age</td>
<td><input type="text" name="age" value="<?PHP echo $age ?>"></td>

</tr>

</table>
  <div class="label2">

 <input type="submit" name="modifier" value="modifier" class="button">
<input type="hidden" name="username_ini" value="<?PHP echo $_GET['username'];?>" class="button" >
      </div>
  
        
</form>



   

 <?PHP

}

 
if (isset($_POST['modifier'])){
    $carte=new carte($_POST['username'],$_POST['mail'],$_POST['type'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['age']);
    $carteC->modifiercarte($carte,$_POST['username_ini']);
    $demande1C->supprimerdemande($idx);
}



 ?> 
<div class="label2">
 <a href="Gestion Client.php" style="color: white"><input type="submit" name="close" value="Close" class="button"></a>
</div>   
</div>
</div>
</div>
</div>

         </div>


    </section>




            <!-- Widgets -->
            
                <!-- #END# Answered Tickets -->
            
                <!-- Task Info -->
               
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
               

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
