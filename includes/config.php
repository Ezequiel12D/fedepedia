<?php 
date_default_timezone_set('America/Argentina/Buenos_Aires');

$data = [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'db' => 'fedepedia'
];

$conn = mysqli_connect($data['host'], $data['user'], $data['password'], $data['db']);
if (!$conn) {
  die('Error de Conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}
session_start();

mysqli_set_charset($conn, "utf8");
?>