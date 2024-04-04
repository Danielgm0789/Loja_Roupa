<?php
$server = "localhost";
$database = "loja_roupa";
$username = "root";
$password = "";

$conn = mysqli_connect($server, $username, $password, $database);

if ($conn->connect_error) {
    die ("erro: " . $conn->connect_error);
}
?>