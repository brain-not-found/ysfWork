
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}




/* Controlle de saisir page Connexion */


function test(){

var pwd = f.pwd.value;
var login = f.namee.value;



if(login.length== 0)
{
alert("saisir le nom d'utilisateur ");	
}
else if( pwd.length== 0)
{
alert("Saisir votre mot de passe");
} 
else
{
alert('Bienvenue') ;
f.login.value="";
f.pwd.value="";
}

}



function confirmepwd()
{
var pwd = ff.password.value;
var confpwd = ff.confirmPassword.value;	


else if( confpwd != pwd)
{
alert("Confirmer votre mot de passe");
} 

}

/* Controlle de saisir page Registre */

function test1(){

var pwd = ff.password.value;
var login = ff.username.value;
var confpwd = ff.confirmPassword.value;
var email = ff.email.value;
var age = ff.age.value;
var tel = ff.tel.value;
var photo = ff.photo.value;




if(login.length== 0)
{
alert("saisir le nom d'utilisateur ");

}

else if( email.length== 0)
{
alert("Saisir votre adresse mail ");
} 

else if( pwd.length== 0)
{
alert("Saisir votre mot de passe");
} 

else if(( confpwd.length== 0) || ( confpwd != pwd))
{
alert("Confirmer votre mot de passe");
} 

else if( tel.length== 0)
{
alert("Saisir votre numero de tel");
} 

else if( age.length== 0)
{
alert("Saisir votre Date de naisssance");
}

else if( photo.length== 0)
{
alert("Saisir votre Date de naisssance");
}  

else
{
alert('Bienvenue') ;
ff.username.value="";
ff.password.value="";
ff.confirmPassword.value="";
ff.email.value="";
ff.age.value="";
ff.tel.value="";
ff.photo.value="";

}

}


