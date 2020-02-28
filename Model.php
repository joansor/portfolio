<?php


function envoieBdd($email, $message, $nom, $prenom)
{
global $email, $message, $nom, $prenom;


//en ligne
$host = "localhost";
$dbname = "joans_monportfolio; charset=utf8";
$user = "joans";
$pass = "knjs9opz0AHmqA==";


//en local
// $host = "localhost";
// $dbname = "monportfolio; port=3308; charset=utf8";
// $user = "root";
// $pass = "";


/*******************************************/
/*************** Connexion BDD ****************/
/*******************************************/
try {
    $dbco = new PDO('mysql:host=' . $host . '; dbname=' . $dbname, $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    //prepare la requete
    if ($nom && $prenom && $email && $message) {
        $sql = $dbco->prepare("INSERT INTO contact SET nom = :nom, prenom = :prenom, email = :email,  message = :message");
        // execute la requete
        $sql->execute(array(
            
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':message' => $message,
            
        ));
        // echo "<br>Entrée ajoutée dans la table";
        "<div id=\"envoyer\">Envoyé</div>";
    } else {
        // echo "--- pas de fichier envoyé ---";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

}
