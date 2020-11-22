<?php

// //Nommer ces variables correctement, ce fichier pourra être dans un .gitignore
// $host = "localhost";
// $dbname = "monportfolio; port=3308; charset=utf8";
// $user = "root";
// $pass = "";
// $projetName = "monportfolio";

/*$host = "localhost";
$dbname = "joans_; port=3808; charset=utf8";
$user = "joans";
$pass = "knjs9opz0AHmqA==";
$projetName = "joans_mailproject";

$projectNameLength = strlen($projetName) + 1;
$base_url = mb_substr($_SERVER['REQUEST_URI'], 0, $projectNameLength);
*/
$host_name = 'db5001213097.hosting-data.io';
$database = "dbs1037266";
$user_name = 'dbu1214965';
$password = "Jo@n230985";

//$dbh = null;

try {
    $dbh = new PDO('mysql:host='.$host_name.'; dbname='.$database, $user_name, $password);
    echo"---------------Connection--------------------";
  } catch (PDOException $e) {
    echo"---------------ERREUR----------------";
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
  }