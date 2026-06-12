<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
</head>
<body>
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($servername, $username, $password);
    if (!$conn) {
        die('Błąd połączenia: ' . mysqli_connect_error());
    }

    mysqli_set_charset($conn, 'utf8');

    $queries = [
        "CREATE DATABASE IF NOT EXISTS magazyn CHARACTER SET utf8 COLLATE utf8_general_ci",
        "USE magazyn",
        "DROP TABLE IF EXISTS dostawy",
        "CREATE TABLE dostawy (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nazwa VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
            ilosc INT(11) NOT NULL,
            data DATE NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci",
        "INSERT INTO dostawy (nazwa, ilosc, data) VALUES
            ('Poziomica', 7, '2023-09-07'),
            ('Wieszak', 11, '2023-09-11'),
            ('Kielnia', 20, '2023-09-20'),
            ('Bateria wannowa', 22, '2023-09-22')"
    ];

    foreach ($queries as $query) {
        if (!mysqli_query($conn, $query)) {
            echo '<p>Błąd: ' . htmlspecialchars(mysqli_error($conn)) . '</p>';
            mysqli_close($conn);
            exit;
        }
    }

    echo '<p>Baza danych <strong>magazyn</strong> oraz tabela <strong>dostawy</strong> zostały utworzone.</p>';
    mysqli_close($conn);
    ?>
</body>
</html>