<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 6 - Nazwy stanowisk</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
        .right-align {
            text-align: right;
        }
    </style>
</head>
<body>
    <h2>Zestawienie stanowisk i liczby liter</h2>
    <?php
    $conn = mysqli_connect('localhost', 'piwowarczyk', 'haslo123', 'piwowarczyk');
    
    if (!$conn) {
        die("Błąd połączenia: " . mysqli_connect_error());
    }
    
    mysqli_set_charset($conn, "utf8mb4");

    $query = "SELECT Nazwa, CHAR_LENGTH(Nazwa) AS Liczba_liter FROM Stanowiska";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo '<tr><th>Nazwa stanowiska</th><th>Liczba liter</th></tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($row['Nazwa']) . '</td>';
            echo '<td class="right-align">' . $row['Liczba_liter'] . ' liter</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Brak danych';
    }

    mysqli_close($conn);
    ?>
</body>
</html>
