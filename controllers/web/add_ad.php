<?php 

if(isset($_SESSION['user']) && $_SESSION['user']['rol_id'] == 1 || !isset($_SESSION['user'])){
  header('Location: ../../index.php');
}

$page = "Adds";
$section = "add_ad";
require_once "../../views/layout.php";

?>