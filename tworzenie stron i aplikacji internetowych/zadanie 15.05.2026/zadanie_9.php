<!doctype html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>wiecej_niz_500</title>
</head>

<body>

    <?php

    $servername = 'localhost';
    $username = 'piwowarczyk';
    $password = '1234';
    $database = 'piwowarczyk';
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        echo 'Błąd połączenia z bazą danych: ' . mysqli_connect_error();
    } else {
        mysqli_set_charset($conn, 'utf8');
        $sql = "
SELECT		ksiazki.Sygnatura,
			ksiazki.Tytul,
			CONCAT(ksiazki.Imie, ' ', ksiazki.Nazwisko) AS Autor,
			dzialy.Nazwa AS Dzial,
			ksiazki.Wydawnictwo,
			ksiazki.Rok_wyd,
			ksiazki.Objetosc_ks AS Liczba_stron,
			ksiazki.Cena
FROM 		ksiazki
JOIN 		dzialy
ON 			ksiazki.Id_dzial = dzialy.Id_dzial
WHERE 		ksiazki.Objetosc_ks > 500
ORDER BY 	ksiazki.Objetosc_ks ASC";

        $result = mysqli_query($conn, $sql);

        echo "<table border='1' style='border-collapse: collapse;'>";

        echo "<tr style='background-color: #40E0D0;'>
            <th style='padding:5px;'>Sygnatura</th>
            <th style='padding:5px;'>Tytuł</th>
            <th style='padding:5px;'>Autor</th>
            <th style='padding:5px;'>Dział</th>
            <th style='padding:5px;'>Wydawnictwo</th>
            <th style='padding:5px;'>Rok wydania</th>
            <th style='padding:5px;'>Liczba stron</th>
            <th style='padding:5px;'>Cena</th>
          </tr>";

        if ($result === false) {
            echo "<tr><td colspan='8'>Błąd zapytania: " . htmlspecialchars(mysqli_error($conn)) . "</td></tr>";
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr style='background-color: #40E0D0;'>";

                echo "<td style='padding:5px;'>" . htmlspecialchars($row['Sygnatura']) . "</td>";

                echo "<td style='padding:5px;'>" . htmlspecialchars($row['Tytul']) . "</td>";

                echo "<td style='padding:5px;'>" . htmlspecialchars($row['Autor']) . "</td>";

                echo "<td style='padding:5px;'>" . htmlspecialchars($row['Dzial']) . "</td>";

                echo "<td style='padding:5px;'>" . htmlspecialchars($row['Wydawnictwo']) . "</td>";

                echo "<td style='padding:5px; text-align:center;'>" . htmlspecialchars($row['Rok_wyd']) . "</td>";

                echo "<td style='padding:5px; text-align:right;'>" . htmlspecialchars($row['Liczba_stron']) . "</td>";

                echo "<td style='padding:5px; text-align:right; background-color: #40E0D0;'>";

                echo number_format((float) $row['Cena'], 2, '.', '') . " zł";

                echo "</td>";

                echo "</tr>";
            }
        }

        echo "</table>";
    }

    mysqli_close($conn);

    ?>

</body>

</html>