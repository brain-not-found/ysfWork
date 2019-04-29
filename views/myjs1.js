function confirm(){
var answer = confirm("Supprimer")
if (answer) {
    //some code
}
else {
    //some code
}
}


function test2(){

var login = f.username.value;
var email = f.mail.value;
var nom = f.nom.value;
var prenom = f.prenom.value;
var typee = f.type.value;
var age = f.age.value;
var tel = f.tel.value;


if( login.length== 0)
{
alert("saisir l'E-mail");
}
else if(login.length== 0)
{
alert("saisir le nom d'utilisateur ");	
}
else if(typee.length== 0)
{
alert("saisir le type");	
}
else if(nom.length== 0)
{
alert("saisir le nom");
}
else if( prenom.length== 0)
{
alert("saisir le prenom");	
}
else if(tel.length== 0)
{
alert("saisir le numero telephone ");	
}
else if(age.length== 0)
{
alert("saisir l'age");	
}

else
{
alert('ajout avec succées') ;
f.mail.value="";
f.nom.value="";
f.username.value="";
f.login.value="";
f.type.value="";
f.age.value="";
f.tel.value="";
}

}