<?php


function envoieBdd($email, $message, $nom, $prenom)
{
  global $email, $message, $nom, $prenom;

  //en local
  // $host = "localhost";
  // $dbname = "monportfolio; port=3308; charset=utf8";
  // $user = "root";
  // $pass = "";

  $host_name = 'db5001213097.hosting-data.io';
  $database = 'dbs1037266';
  $user_name = 'dbu1214965';
  $password = 'Jo@n230985';

  /* $link = new mysqli($host_name, $user_name, $password, $database);

  if ($link->connect_error) {
    die('<p>La connexion au serveur MySQL a échoué: ' . $link->connect_error . '</p>');
  } else {
    echo '<p>Connexion au serveur MySQL établie avec succès.</p>';*/


  /*******************************************/
  /*************** Connexion BDD ****************/
  /*******************************************/
  try {
    $dbco = new PDO('mysql:host=' . $host_name . '; dbname=' . $database, $user_name, $password);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    //prepare la requete
    if ($nom && $prenom && $email && $message) {
      $sql = $dbco->prepare("INSERT INTO portfolio SET nom = :nom, prenom = :prenom, email = :email,  message = :message");
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
