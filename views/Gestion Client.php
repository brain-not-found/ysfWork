<?PHP

include "../entities/client.php";
include "../core/carteC.php";
include "../core/clientCF.php";
include "../core/demandeCF.php";

$carte1C=new carteC();
$listecartes=$carte1C->affichercartes();
$client1C=new clientC();
$listeclients=$client1C->afficherclients();
$demande1C=new demandeC();
$listedemandes=$demande1C->afficherdemandes();

$numclients=$listeclients->rowCount();
$numcartes=$listecartes->rowCount();
$numdemandes=$listedemandes->rowCount();




//*/

//var_dump($listeclients->fetchAll());
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Karma - client</title>
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
    <script type="text/javascript" src="myjs1.js"></script>
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
                <a class="navbar-brand" href="index.html">Gestion De Client</a>
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

        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <a href="login.php"><img src="images/user.png" width="48" height="48" alt="User" /></a>
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lamia Marzouki</div>
                    <div class="email">lamiamarzoukibekri@yahoo.com</div>
                    
                </div>
            </div>
            <!-- #User Info -->

            <!-- Menu -->
             <div class="menu">
                <ul class="list">
                    <li class="header">Navigation principale</li>
                    
                    <li>
                        <a href="Statistique.html">
                            <i class="material-icons">text_fields</i>
                            <span>Statistique</span>
                        </a>
                    </li>
                    <li>
                        <a href="gestion produit.html">
                            <i class="material-icons">layers</i>
                            <span>Gestion de produits</span>
                        </a>
                    </li>
                    <li>
                        <a href="gestion livraison.html" >
                            <i class="material-icons">widgets</i>
                            <span>Gestion de livraison</span>
                        </a>
                       
                    </li>
                   
                    <li class="active">
                        <a href="gestion client.html">
                            <i class="material-icons">face</i>
                            <span>Gestion des Clients</span>
                        </a>
                    </li>
                    <li>
                        <a href="gestion blog.html">
                            <i class="material-icons">assignment</i>
                            <span>Gestion de Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="SAV.html" >
                            <i class="material-icons">view_list</i>
                            <span>Service Apres vente</span>
                        </a>
                    </li>
                    <li>
                        <a href="gestion pub.html" >
                            <i class="material-icons">perm_media</i>
                            <span>Gestion de Pub</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
       
        <!-- #END# Right Sidebar -->
         <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Gestion de Client</h2>
            </div>

 <!-- Headings -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Informations générales :
                            </h2>
                            
                        </div>
                                                <div class="body">

                         <form name="f">
                            
                        <table id="t01" style="border: none;">
                       
  
  <tr style="border: none;">
    <td style="border: none;">
        <div class="info-box bg-indigo hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">face</i>
                        </div>
                        <div class="content">
                            <div class="text">CLIENTS</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $numclients ?>" data-speed="1000" data-fresh-interval="20"><?php echo $numclients ?></div>
                        </div>
                    </div>
    </td>
     <td style="border: none;">
        <div class="info-box bg-deep-purple hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">card_membership</i>
                        </div>
                        <div class="content">
                            <div class="text"> CARTES </div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $numcartes ?>" data-speed="1500" data-fresh-interval="20"><?php echo $numcartes ?></div>
                        </div>
                    </div>
    </td>
    <td style="border: none;">
        <div class="info-box bg-purple hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">email</i>
                        </div>
                        <div class="content">
                            <div class="text">DEMANDES</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $numdemandes ?>" data-speed="1000" data-fresh-interval="20"><?php echo $numdemandes ?></div>
                        </div>
                    </div>
    </td>
   
</tr>
  
        </table>
</form>
</div>

          </div>
                    
         </div>



            <!-- #END# Headings -->

            <!-- Headings -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Consulter les Clients :
                            </h2>
                            
                        </div>
                                                <div class="body">

                         <form name="f">

                        <table id="t01" style="border: none;">
                       
   <tr>
<th>username</th>
<th>mail</th>
<th>password</th>
<th>tel</th>
<th>age</th>
<th>modifier</th>
<th>supprimer</th>

</tr>

<?PHP
foreach($listeclients as $row){
	?>
	<tr>
	<td><?PHP echo $row['username']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td ><p style="font-size: 4px;"><?PHP echo $row['password']; ?></p></td>
	<td><?PHP echo $row['tel']; ?></td>
	<td><?PHP echo $row['age']; ?></td>
	
	<td><a href="mClient.php?username=<?PHP echo $row['username']; ?>">
	Modifier</a></td>
    <td><form method="POST" action="supprimerclient.php">
    <input type="submit" name="supprimer" value="supprimer"  class="btn bg-amber waves-effect"  onclick="confirm();">
    <input type="hidden" value="<?PHP echo $row['username']; ?>" name="username">
    </form>
    </td>
	</tr>
	<?PHP
}
?>
  
        </table>
</form>
</div>

          </div>
                    
         </div>



            <!-- #END# Headings -->

 <!-- Headings -->
 
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Rechercher un client :
                            </h2>
                            
                        </div>
                                                <div class="body">
<div>
    <form method="POST">

    <table style="border :none;">
    <tr style="border :none;">
        <td style="border :none;">
           <input  type="text" class="form-control" id="name" name="rech" placeholder="Nom d utilisateur" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom d utilisateur'" required
           oninvalid="this.setCustomValidity('Entrer le nom d utulisateur')"  oninput="this.setCustomValidity('')"> 
        </td>
        <td style="border :none;">
             <input type="submit" name="rechercher" value="Rechercher" class="btn bg-amber waves-effect">
        </td>
    </tr>
</table>
</form>
   
</div>

                         <form name="f">
                            <?php if (isset($_POST['rech'])){
                            ?>
                                
        

<?php
$clients=$client1C->recupererclient($_POST['rech']);
if($clients->rowCount() == 0)
                                {
?>

                                    <div class="font-bold col-pink" style="padding-left: 20%;">
                                       <strong>Utilisateur non touver  !!!  </strong> essai autre Nom d'utulisateur
                                    </div>
<?php
                                }
 else
                                {

    foreach($clients as $row){
?>
  <table id="t01" style="border: none;">
                       
   <tr>
<th>username</th>
<th>mail</th>
<th>password</th>
<th>tel</th>
<th>age</th>
<th>modifier</th>
<th>supprimer</th>

</tr>
    <tr>
    <td><?PHP echo $row['username']; ?></td>
    <td><?PHP echo $row['mail']; ?></td>
    <td ><p style="font-size: 4px;"><?PHP echo $row['password']; ?></p></td>
    <td><?PHP echo $row['tel']; ?></td>
    <td><?PHP echo $row['age']; ?></td>
    
    <td><a href="mClient.php?username=<?PHP echo $row['username']; ?>">
    Modifier</a></td>
    <td><form method="POST" action="supprimerclient.php">
    <input type="submit" name="supprimer" value="supprimer" class="btn bg-amber waves-effect"  onclick="confirm();">
    <input type="hidden" value="<?PHP echo $row['username']; ?>" name="username">
    </form>
    </td>
    </tr>


  
        </table>
        <?PHP
}
}
?>
        <?PHP
}
?>
</form>
</div>

          </div>
                    
         </div>



            <!-- #END# Headings -->
            
            <!-- Body Copy -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Les demandes :</h2>
                        </div>
                        <div class="body">
                            <table id="t01">
     <tr>
        <th>ID </th>
        <th>Nom d'utilisateur</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>type de demande</th> 
        <th>Ajouter Carte</th>
        <th>Améliorer Carte</th>
        <th>supprimer Demande</th>

    </tr>

    <?PHP
foreach($listedemandes as $row){
    ?>
    <tr>
    <td><?PHP echo $row['id']; ?></td>
    <td><?PHP echo $row['username']; ?></td>
    <td><?PHP echo $row['nom']; ?></td>
    <td><?PHP echo $row['prenom']; ?></td>
    <td><b><?PHP echo $row['type']; ?></b></td>

   <td><a href="?action=<?php echo $row['username']; ?>#zizi">
    <?php if($row['type']=="Nouvelle Carte"){ echo 'Ajouter' ;}?></a></td>

    <td><a href="?action=<?php echo $row['username']; ?>#mimi<?php  ?>">
    <?php if($row['type']=="Améliorer") { echo 'Améliorer' ;}?></a></td>

    <td><form method="POST" action="supprimerdemande.php">
    <input type="submit" name="supprimer" value="Refuser" class="btn bg-amber waves-effect"   onclick="confirm();">
    <input type="hidden" value="<?PHP echo $row['username']; ?>" name="username">
    </form>
    </td>
    </tr>
    <?PHP
}
?>

    </table>
       
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Body Copy -->
            <!-- Headings -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                         
                         <form id="zizi" name="f" method="POST" action="ajoutcarte.php">
                            <div class="header">
                            <h2>
                                Ajouter une carte de fidèlité :
                            </h2>
                            
                        </div>

 <?php
 $c1='';
 $c2='';
 $c3='';
 $c4='';
 $c5=''; 
 $c6=''; 
 

if (isset($_GET['action'])){

 $client77=$client1C->recupererclient($_GET['action']); 
 


foreach($client77 as $row){
    $c1=$row['username'];
    $c2=$row['mail'];
    $c3=$row['tel'];
    $c4=$row['age'];

}


$demande77=$demande1C->recupererdemande($_GET['action']); 

 
foreach($demande77 as $row){
    $c5=$row['nom'];
    $c6=$row['prenom'];

}
}

    ?>

                        <table id="t01">
                       
    <tr><td>Nom d'utulisateur</td></p><td><input class="form-control" type="text" value="<?PHP echo $c1 ; ?>" name="username" readonly></td></tr>
    <tr><td>E-mail</td></p><td><input class="form-control" type="email" name="mail" value="<?PHP echo $c2; ?>" placeholder="Exemple@yyy.xxx" readonly></td></tr>
</td></tr>
    <tr><td>Nom</td><td><input class="form-control" type="text" name="nom" value="<?PHP echo $c5; ?>" readonly></td></tr>
    <tr><td>Prenom</td></p><td><input class="form-control" type="text" name="prenom" value="<?PHP echo $c6; ?>" readonly></td></tr>
    <tr><td>Numero de telephone</td><td><input class="form-control" type="number" name="tel" value="<?PHP echo $c3; ?>" readonly></td></tr>
    <tr><td>Age</td></p><td><input class="form-control" type="date" name="age" value="<?PHP echo $c4; ?>" readonly></td></tr>
    	
  </table>

  <br>
             <label class="label2"><input  type="submit" name="Ajouter"  onclick="test2();" value="Crée un Carte" class="btn bg-amber waves-effect" style="width: 400px;" ></label>
            
             </form>
                        </div>
                    
            </div>
<!-- Headings -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Consulter les cartes des fidèlités :
                            </h2>
                            
                        </div>
                         <form name="f">
                        <table id="t01">
                       
    <tr>
         <th>username</th>
         <th>mail</th>
         <th>type</th>
         <th>nom</th>
         <th>prenom</th>
         <th>tel</th>
         <th>age</th>
         <th>supprimer</th>
         <th>modifier</th>
</tr>
<?PHP


foreach($listecartes as $row){
    ?>
    <tr>
    <td><?PHP echo $row['username']; ?></td>
    <td><?PHP echo $row['mail']; ?></td>
    <td><?PHP echo $row['type']; ?></td>
    <td><?PHP echo $row['nom']; ?></td>
    <td><?PHP echo $row['prenom']; ?></td>
    <td><?PHP echo $row['tel']; ?></td>
    <td><?PHP echo $row['age']; ?></td>
    <td>
        <form method="POST" action="supprimercarte.php">
            <input type="submit" name="supprimer" value="supprimer" class="btn bg-amber waves-effect"   onclick="confirm();" >
            <input type="hidden" value="<?PHP echo $row['username']; ?>" name="username">
        </form>
    </td>
    <td>
    <a href="modifierCarte.php?username=<?PHP echo $row['username']; ?>">
    Modifier</a></td>
    </tr>
    <?PHP
}
?>
  
        </table>
</form>

          </div>
                    
         </div>



            <!-- #END# Headings -->
            <!-- Text Styles -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       
                        


                        <form id="mimi" method="POST"  >
                             <div class="header">
                            <h2>
                                UPGRADE :
                            </h2>
                        </div>
                        <figure class="figure"><img src="images/goldclient.png" alt="gold  client"  width="150" height="150" class="img">
                            <figcaption>
                            <input type="checkbox" value="Gold" name="choix1">Gold Client</input>
                        </figcaption>
                    </figure>
                        <figure class="figure">
                            <img src="images/silverclient.png" alt="gold  client"  width="150" height="150" class="img">
                            <figcaption>
                                <input type="checkbox" value="Silver" name="choix2"> Silver Client </input>
                            </figcaption>
                        </figure>
                                             <label class="label3"  ><input type="submit" name="Upgrade" value="Upgrade" class="btn bg-amber waves-effect"
                                             style="width: 320px;" onClick="document.location.reload(true)"></label>


</form>


                     <?php 
                         if ((isset($_POST['choix1']))){
                         $listecartes=$carte1C->ameliorercarte($_POST['choix1'],$_GET['action']);
                         $demandeC=new demandeC();

                         $demandeC->supprimerdemande($_GET['action']);



                     }
                     else if ((isset($_POST['choix2']))){
                         $listecartes=$carte1C->ameliorercarte($_POST['choix2'],$_GET['action']);
                         $demandeC=new demandeC();

                         $demandeC->supprimerdemande($_GET['action']);


                     }
                    

                     ?>

                    </div>
                </div>
            </div>
            <!-- #END# Text Styles -->



            <!-- Unordered List -->
            <div class="row clearfix">



                <!-- Gold Cards Zone -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="card">
 <?php
         $type='Gold';
         $tricartes=$carte1C->rechercherListecartes($type);
         $gol=$tricartes->rowCount();
?>
                        <div class="header">
                           <div class="info-box bg-amber hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">brightness_high</i>
                        </div>
                        <div class="content">
                            <div class="text">Gold Cards</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $gol ?>" data-speed="1000" data-fresh-interval="20"><?php echo $gol ?></div>
                        </div>
                    </div>         
                        </div>
                       
                     <div class="body">
    <table id="t01">
                       
    <tr>
         <th>username</th>
         <th>mail</th>
         
</tr>
  <?php
        foreach($tricartes as $row){
    ?>
    <tr>
    <td><?PHP echo $row['username']; ?></td>
    <td><?PHP echo $row['mail']; ?></td>
</tr>
   <?PHP
}
?>
</table>


</div>
 
                        </div>
                    </div>






                <!-- Silver Cards Zone -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="card">
                         <?php

         $type='Silver';
         $tricartes=$carte1C->rechercherListecartes($type);
         $sil=$tricartes->rowCount();

        ?>
                        <div class="header">
                    <div class="info-box bg-grey hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">brightness_medium</i>
                        </div>
                        <div class="content">
                            <div class="text">Silver Cards</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $sil ?>" data-speed="1000" data-fresh-interval="20"><?php echo $sil ?></div>
                        </div>
                    </div>                            
                        
                        </div>
                        <div class="body">
                            <table id="t01">
                            
                       
    <tr>
         <th>username</th>
         <th>mail</th>
         
</tr>
  <?php
foreach($tricartes as $row){
    ?>

    <tr>
    <td><?PHP echo $row['username']; ?></td>
    <td><?PHP echo $row['mail']; ?></td>
</tr>
<?php
}
?>
</table>

                        </div>

                    </div>
                </div>






                <!-- Bronze Cards Zone -->


                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="card">
          <?php
         $type='Bronze';
         $tricartes=$carte1C->rechercherListecartes($type);
        $bro=$tricartes->rowCount();
        
    ?>
                        <div class="header">

     
                           <div class="info-box bg-brown hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">brightness_low</i>
                        </div>
                        <div class="content">
                            <div class="text">Bronze Cards</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $bro ?>" data-speed="1000" data-fresh-interval="20"><?php echo $bro ?></div>
                        </div>
                    </div>
                           
                        </div>
                        <div class="body">
                             <table id="t01">
                       
    <tr>
         <th>username</th>
         <th>mail</th>
         
</tr>
  
<?php foreach($tricartes as $row){
    ?>
    <tr>
    <td><?PHP echo $row['username']; ?></td>
    <td><?PHP echo $row['mail']; ?></td>
</tr>
<?PHP
}
?>
</table>
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

