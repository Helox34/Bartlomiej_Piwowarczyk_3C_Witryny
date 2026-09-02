<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1 - Utwórz bazę</title>
</head>
<body>
    <h2>Zadanie 1</h2>
    <?php
    $conn = mysqli_connect('localhost', 'root', '');
    if (!$conn) {
        die('Błąd połączenia: ' . mysqli_connect_error());
    }
    mysqli_set_charset($conn, 'utf8');

    mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS magazyn CHARACTER SET utf8 COLLATE utf8_general_ci");
    mysqli_query($conn, "USE magazyn");
    mysqli_query($conn, "CREATE TABLE IF NOT EXISTS dostawy (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nazwa VARCHAR(50) NOT NULL,
        ilosc INT(11) NOT NULL,
        data DATE NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");

    echo '<p>Gotowe. Jeśli chcesz mieć przykładowe dane, zaimportuj <strong>baza.sql</strong> lub dodaj wpisy przez formularz.</p>';

    mysqli_close($conn);
    ?>
</body>
</html>