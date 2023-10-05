<?php 
$conn = mysqli_connect("localhost","root","","fedepedia.sql");

$insert = "INSERT INTO users(id,email,username,name,password,birth_date,gender,created_at,deleted_at) VALUES()";

$query = mysqli_query($conn,$insert);