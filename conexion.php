<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "exterminio";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: ". $conn->connect_error);
} else {
    $conn->set_charset("utf8");
}
?>
