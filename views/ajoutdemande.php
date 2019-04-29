<?PHP
include "../entities/demande.php";
include "../core/demandeC.php";

if (isset($_POST['username']) and isset($_POST['type'])  and isset($_POST['nom']) and isset($_POST['prenom']) ){
$demande1=new demande($_POST['username'],$_POST['type'],$_POST['nom'],$_POST['prenom']);
//Partie2
/*
var_dump($demande1);
}
*/
//Partie3
$demande1C=new demandeC();
$demande1C->ajouterdemande($demande1);
header('Location: Compte.php');
	
}

else{
	echo "vérifier les champs";
}
//*/

?>