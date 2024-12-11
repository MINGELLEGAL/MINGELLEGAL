<?php
$servername = "localhost";
$username = "usuario123";
$password = "senha123";
$dbname = "bancolegal1234";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>