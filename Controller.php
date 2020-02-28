<?php

include("View.php");
require_once("Model.php");


################################################################
##### SUPERGLOBALES ############################################
################################################################

$superglobals = array($_SERVER, $_ENV, $_FILES, $_COOKIE, $_POST, $_GET);

foreach($superglobals as $superglobal)
{
    foreach($superglobal as $key => $value) { if(!is_array($value)) { ${$key} = trim(rawurldecode($value)); /* echo "$key $value<br>"; */ }  else { ${$key} = $value; } }
}


global $submit, $nom, $prenom;

//Si bouton envoyé

if($submit){

$name= $nom." ".$prenom;

$header = "From:" .$email;
$header .= "Reply-To: ". $email . "\r\n";
$header .= "CC:sor.joan@gmail.com\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 

// la mise en page du mail de reception en html
$htmlContent = ' 
<html> 
<head> 
    <title>'.$name.'</title> 
</head> 
<body> 
    <h1 style="color : red">Hello !</h1> 
    <table cellpadding="0" cellspacing="0" width="100%">
<tbody style="display: block">
<tr>
<td style="display: block; width: 250px; height: 60px; text-align: left">
From:<a href=mailto:'.$email.'>'.$email.'</a><br>
Reply-To:<a href='.$email.'>'.$email.'</a><br><br>
</td>
</tr>
<tr>
<td style="display: block; width: "250px; min-height: 250px"">
'. $message.'.<br><br><br><br>'.'
</td>
</tr>
</tbody></table>
</html>'; 


//si les champs ne sont pas rempli

if (!$email || !$message || !$nom || !$prenom) {
    echo "Rempli le formulaire!!!!!";
} else {
    //envoie la fonction mail
    $result = mail($name, $htmlContent, $header);
//appel la function pour inserer dans la base de donnée
    envoieBdd($email, $message, $nom, $prenom);
   
}
}

