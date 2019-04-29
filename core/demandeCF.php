<?PHP
class demandeC {



/*function afficherdemande ($demande){
		echo "username: ".$demande->getusername()."<br>";
		echo "mail: ".$demande->getmail()."<br>";
		echo "passowrd: ".$demande->gettype()."<br>";
		echo "tel: ".$demande->gettel()."<br>";
		echo "age: ".$demande->getage()."<br>";
		echo "photo: ".$demande->getphoto()."<br>";

	}*/


	


	function afficherdemandes(){
		//$sql="SElECT * From demande e inner join formationphp.demande a on e.username= a.username";
		$sql="SElECT * From demande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}



	function supprimerdemande($id){
		$sql="DELETE FROM demande where username=:id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	/*function modifierdemande($demande,$id){
			$sql="UPDATE demande SET username=:usernamen,mail=:mail,type=:type,nom=:nom,prenom=:prenom,tel=:tel,age=:age WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$usernamen=$demande->getusername();
        $mail=$demande->getmail();
        $type=$demande->gettype();
        $nom=$demande->getnom();
        $prenom=$demande->getprenom();
        $tel=$demande->gettel();
        $age=$demande->getage();
        //$photo=$demande->getphoto();


		$datas = array(':usernamen'=>$usernamen, ':username'=>$username, ':mail'=>$mail,':type'=>$type,':nom'=>$nom,':prenom'=>$prenom,':tel'=>$tel,':age'=>$age);
		$req->bindValue(':usernamen',$usernamen);
		$req->bindValue(':username',$username);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':type',$type);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':age',$age);
		//$req->bindValue(':photo',$photo);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
*/


	function recupererdemande($username){
		$sql="SELECT * from demande where username='$username'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	


	/*function rechercherListedemandes($tarif){
		$sql="SELECT * from demande where tel=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/



}

?>