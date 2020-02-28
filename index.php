
<?php


require('env.php');



if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = '';
}



$page = ucfirst($page);

include('Controller.php');

?>

