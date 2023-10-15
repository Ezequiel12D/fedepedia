<?php 
require_once "../../../includes/config.php";

if(isset($_SESSION['user']) && $_SESSION['user'][0]['rol_id'] == 1 || !isset($_SESSION['user'])){
    header('Location: ../../../index.php');
}else{
    
}

$page = "Adds";
$section = "add_ad";
require_once "../../../views/layout.php";

?>