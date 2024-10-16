<?php
$host = 'localhost';
$db = 'sik';
$user = 'root';
$pass = 'root'; // Ganti dengan password Anda

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>
