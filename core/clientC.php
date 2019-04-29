<?PHP
include "../config.php";
class clientC {



/*function afficherclient ($client){
		echo "username: ".$client->getusername()."<br>";
		echo "mail: ".$client->getmail()."<br>";
		echo "passowrd: ".$client->getpassword()."<br>";
		echo "tel: ".$client->gettel()."<br>";
		echo "age: ".$client->getage()."<br>";
		echo "photo: ".$client->getphoto()."<br>";

	}*/


	function ajouterclient($client){
		$sql="insert into client (username,mail,password,tel,age,photo) values (:username, :mail,:password,:tel,:age,:photo)";
		$db = config::getConnexion();
		
		try{
        $req=$db->prepare($sql);
		
        $username=$client->getusername();
        $mail=$client->getmail();
        $password=$client->getpassword();
        $age=$client->getage();
        $tel=$client->gettel();
        $photo=$client->getphoto();
        $hash=password_hash($password,PASSWORD_DEFAULT);
		$req->bindValue(':username',$username);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':password',$hash);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':age',$age);
		$req->bindValue(':photo',$photo);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	


	function afficherclients(){
		//$sql="SElECT * From client e inner join formationphp.client a on e.username= a.username";
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}



	function supprimerclient($username){
		$sql="DELETE FROM client where username= :username";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':username',$username);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	function modifierclient($client,$username){
		$sql="UPDATE client SET username=:usernamen,mail=:mail,password=:password,tel=:tel,age=:age,photo=:photo WHERE username=:username";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$usernamen=$client->getusername();
        $mail=$client->getmail();
        $password=$client->getpassword();
        $tel=$client->gettel();
        $age=$client->getage();
        $photo=$client->getphoto();


		$datas = array(':usernamen'=>$usernamen, ':username'=>$username, ':mail'=>$mail,':password'=>$password,':tel'=>$tel,':age'=>$age,':photo'=>$photo);
		$req->bindValue(':usernamen',$usernamen);
		$req->bindValue(':username',$username);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':password',$password);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':age',$age);
		$req->bindValue(':photo',$photo);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}



	function recupererclient($username)
	{
		$sql="SELECT * FROM client WHERE username='$username' ";
		$db = config::getConnexion();
		
		try{

		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	


	function recuperermail($mail)
	{
$sql="SELECT * FROM client WHERE mail='$mail' ";
		$db = config::getConnexion();
		
		try{

		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	}

    function newpassword($username,$password)
    {
    	$sql="UPDATE client SET password=:password WHERE username='$username'";
    	$db= config::getConnexion();

    	try
    	{
    		$req=$db->prepare($sql);
        $hash=password_hash($password,PASSWORD_DEFAULT);
		$req->bindValue(':password',$hash);
		
		
		
            $s=$req->execute();
    	}
 		catch (Exception $e)
 		{
            die('Erreur: '.$e->getMessage());
        }
	}
	

 function confirmcompte($username)
    {
    	$sql="UPDATE client SET confirme=:confirme WHERE username='$username'";
    	$db= config::getConnexion();

    	try
    	{
    		$req=$db->prepare($sql);
    	$confirm="oui";
		$req->bindValue(':confirme',$confirm);
		
            $s=$req->execute();
    	}
 		catch (Exception $e)
 		{
            die('Erreur: '.$e->getMessage());
        }
	}




}


?>