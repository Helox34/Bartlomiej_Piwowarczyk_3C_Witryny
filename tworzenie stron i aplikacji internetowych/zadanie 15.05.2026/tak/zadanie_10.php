<style>
    body {
        font-family: Arial, sans-serif;
    }

    table {
        border-collapse: collapse;
        border: 1px solid black;
        width: 100%;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }

</style>
<?php
    $servername = 'localhost';
    $username = 'piwowarczyk';
    $password = '1234';
    $database = 'piwowarczyk';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Błąd połączenia: " . mysqli_connect_error());
}

mysqli_set_charset($conn, 'utf8');

$sql = "SELECT 
    CONCAT(Imie, ' ', Nazwisko) AS Czytelnik,
    CASE WHEN Plec='M' THEN 'mężczyzna' ELSE 'kobieta' END AS Plec,
    Data_ur AS 'Data urodzenia',
    CONCAT(Ulica, ' ', LEFT(Kod,2), '-', RIGHT(Kod,3), ' ', Miasto) AS Adres,
    Nr_legitymacji AS 'Numer legitymacji',
    Data_zapisania AS 'Data zapisania'
FROM czytelnicy
WHERE Data_skreslenia IS NULL
ORDER BY Nr_legitymacji ASC;";

$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo "Błąd zapytania: " . htmlspecialchars(mysqli_error($conn));
} else {
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<tr>
                <th>Czytelnik</th>
                <th>Płeć</th>
                <th>Data urodzenia</th>
                <th>Adres</th>
                <th>Numer legitymacji</th>
                <th>Data zapisania</th>
              </tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Brak wyników.";
    }
}

mysqli_close($conn);
?>