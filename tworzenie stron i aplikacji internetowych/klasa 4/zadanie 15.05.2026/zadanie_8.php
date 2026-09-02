<?php
$servername = 'localhost';
$username = 'piwowarczyk';
$password = '1234';
$database = 'piwowarczyk';

$conect = new mysqli($servername, $username, $password, $database);

if ($conect->connect_error) {
    die("Błąd połączenia: " . $conect->connect_error);
}

$conect->set_charset('utf8');

$query = "SELECT 		sygnatura,
            			tytul,
            			CONCAT(imie, ' ', nazwisko) AS autor,
            			wydawnictwo,
            			rok_wyd,
            			cena
            FROM 		ksiazki
            WHERE 		(wydawnictwo = 'PWN' OR wydawnictwo = 'Helion')
            AND 		rok_wyd > 1990
            AND 		rok_wyd < 2011
            ORDER BY 	rok_wyd ASC";

$result = $conect->query($query);

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>Sygnatura</th>
        <th>Tytuł</th>
        <th>Autor</th>
        <th>Wydawnictwo</th>
        <th>Rok wydania</th>
        <th>Cena</th>
      </tr>";

if ($result === false) {
    echo "<tr><td colspan='6'>Błąd zapytania: " . htmlspecialchars($conect->error) . "</td></tr>";
} elseif ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        $zl = floor($row["cena"]);
        $gr = (int) round(($row["cena"] - $zl) * 100);
        if ($gr === 100) { $zl += 1; $gr = 0; }

        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["sygnatura"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["tytul"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["autor"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["wydawnictwo"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["rok_wyd"]) . "</td>";

        echo "<td style='text-align:right;'>" . $zl . " zł " . sprintf("%02d", $gr) . " gr</td>";

        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>Brak wyników</td></tr>";
}

echo "</table>";

$conect->close();
?>