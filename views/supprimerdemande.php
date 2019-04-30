<?PHP
include "../core/demandeC.php";
$demandeC=new demandeC();
if (isset($_POST["username"])){
	$demandeC->supprimerdemandes($_POST["username"]);
	header('Location: Gestion Client.php');
}

?>