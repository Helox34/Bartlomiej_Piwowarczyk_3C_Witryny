<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$servername = 'localhost';
$username = 'piwowarczyk';
$password = '1234';
$database = 'piwowarczyk';

$conn = mysqli_connect($servername, $username, $password, $database);

echo 'Initial character set: ', mysqli_character_set_name($conn),
 "<br>";
mysqli_set_charset($conn, "utf8mb4");

echo 'Current character set: ', mysqli_character_set_name($conn);
?>