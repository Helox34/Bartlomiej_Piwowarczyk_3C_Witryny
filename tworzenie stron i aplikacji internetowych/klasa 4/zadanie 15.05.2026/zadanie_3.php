<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 3</title>
</head>
<body>
<?php
$servername = 'localhost';
$username = 'piwowarczyk';
$password = '1234';
$database = 'piwowarczyk';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn)
{
    echo 'Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: ' . mysqli_connect_error();
}
else
{
    echo 'Połączono, hej jestem tutaj!';
}

mysqli_close($conn);
?>
</body>
</html>
