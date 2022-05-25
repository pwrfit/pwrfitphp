<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "pwrfitbd";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Conexión fallida a la database.')</script>");
}

?>