<?php 

$host = "localhost";
$user = "id19183687_username";
$pass = "0nl!in3exam!N@tion2022";
$db   = "id19183687_name";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>