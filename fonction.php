<?php

################################################################
##### SUPERGLOBALES ############################################
################################################################

$superglobals = array($_SERVER, $_ENV, $_FILES, $_COOKIE, $_POST, $_GET);

foreach ($superglobals as $superglobal) {
    foreach ($superglobal as $key => $value) {
        if (!is_array($value)) {
            ${$key} = trim(rawurldecode($value));
        } else {
            ${$key} = $value;
        }
    }
}

global $submit, $nom, $prenom, $message;

//Si formulaire submit
if ($submit) {
    $name = $nom . " " . $prenom;
    $header = "From:" . $email . "\r\n";
    $header .= "Reply-To: " . $email . "\r\n";
    $header .= "CC:" . $email . "\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // la mise en page du mail de reception en html
    $htmlContent = ' 
    <html> 
    <head> 
        <title>Mail</title> 
    </head> 
    <body> 
        <h1 style="color : red">Hello ! Un mail envoyé de mon portfolio de ' . $name . ' !</h1> 
        <table cellpadding="0" cellspacing="0" width="100%">
    <tbody style="display: block">
    <tr>
    <td style="display: block; width: 250px; height: 60px; text-align: left">
    From:<a href=mailto:' . $email . '>' . $email . '</a><br>
    Reply-To:<a href=' . $email . '>' . $email . '</a><br><br>
    </td>
    </tr>
    <tr>
    <td style="display: block; width: "250px; min-height: 250px"">
    ' . $message . '.<br><br><br><br>' . '
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
    } else {
        $to = "sor.joan@gmail.com";
        //envoie la fonction mail
        mail($to, $subject, $htmlContent, $header);

        //appel la function pour inserer dans la base de donnée
        /*************** Connexion BDD ****************/
        $host_name = 'db5001213097.hosting-data.io';
        $database = "dbs1037266";
        $user_name = 'dbu1214965';
        $password = "Mil@-220118";
        $dbh = null;
        $dbh = new PDO('mysql:host=' . $host_name . '; port=3306; dbname=' . $database, $user_name, $password);
        //prepare la requete
        if ($nom && $prenom && $email && $message) {
            $sql = $dbh->prepare("INSERT INTO portfolio SET nom = :nom, prenom = :prenom, email = :email, message = :message");
            // execute la requete
            $sql->execute(array(
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':email' => $email,
                ':message' => $message,
            ));
            "<div id=\"envoyer\">Envoyé</div>";
        }
        if ($dbh->connect_error) {
            die('<p>La connexion au serveur MySQL a échoué: ' . $dbh->connect_error . '</p>');
        } else {
            // echo '<p>Connexion au serveur MySQL établie avec succès.</p>';
        }
    }
}
