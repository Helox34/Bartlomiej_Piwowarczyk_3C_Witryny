<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 5</title>
</head>
<body>
    <h2>Pracownicy biblioteki</h2>
    <?php
    $servername = 'localhost';
    $username = 'piwowarczyk';
    $password = '1234';
    $database = 'piwowarczyk';

    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if (!$conn) {
        die("Błąd połączenia: " . mysqli_connect_error());
    }

    mysqli_set_charset($conn, "utf8mb4");

    $query = "SELECT Id_pracownika, UPPER(CONCAT(Imie, ' ', Nazwisko)) AS Pracownik FROM Pracownicy";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        echo '<ol>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<li>' . $row['Id_pracownika'] . '. ' . htmlspecialchars($row['Pracownik']) . '</li>';
        }
        echo '</ol>';
    } else {
        echo 'Brak danych lub błąd zapytania';
    }

    mysqli_close($conn);
    ?>
</body>
</html>
