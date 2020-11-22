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
  $database = "dbs1037266";
  $user_name = 'dbu1214965';
  $password = "Jo@n230985";
  $dbh = null;

  /*******************************************/
  /*************** Connexion BDD ****************/
  /*******************************************/

  try {
    $dbh = new PDO('mysql:host='.$host_name.'; dbname='.$database, $user_name, $password);
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
      // echo "<br>Entrée ajoutée dans la table";
      "<div id=\"envoyer\">Envoyé</div>";
    }
  } catch (PDOException $e) {
    echo"---------------ERREUR----------------";
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
  }
}
