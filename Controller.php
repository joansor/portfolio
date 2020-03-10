<?php

require_once("View.php");
require_once("Model.php");


################################################################
##### SUPERGLOBALES ############################################
################################################################

$superglobals = array($_SERVER, $_ENV, $_FILES, $_COOKIE, $_POST, $_GET);

foreach($superglobals as $superglobal)
{
    foreach($superglobal as $key => $value) { if(!is_array($value)) { ${$key} = trim(rawurldecode($value)); /* echo "$key $value<br>"; */ }  else { ${$key} = $value; } }
}


global $submit, $nom, $prenom, $message;

//Si bouton envoyé

if($submit){

$name= $nom." ".$prenom;

$header = "From:" .$email. "\r\n";
$header .= "Reply-To: ". $email . "\r\n";
$header .= "CC:". $email ."\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 

// la mise en page du mail de reception en html
$htmlContent = ' 
<html> 
<head> 
    <title>Mail</title> 
</head> 
<body> 
    <h1 style="color : red">Hello ! Un mail envoyé de mon portfolio de '.$name.' !</h1> 
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

$to = @html_entity_decode($to);
$header = @html_entity_decode($header);
$message = @html_entity_decode($message);
$subject = @html_entity_decode($subject);

//si les champs ne sont pas rempli

if (!$email || !$message || !$nom || !$prenom) {
    echo "Rempli le formulaire!!!!!";
// }else if(!preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $email)){

//     echo "Charactère pas valide pour le champs Mail !";
    
} else {
    $to = "sor.joan@gmail.com";
    //envoie la fonction mail
    $result = mail($to, $subject, $htmlContent, $header);
//appel la function pour inserer dans la base de donnée
    envoieBdd($email, $message, $nom, $prenom);
    
   
}
}

