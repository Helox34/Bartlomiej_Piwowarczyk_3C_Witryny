<!doctype html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Nazwy stanowisk</title>

<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
    }

    td:last-child{
        text-align: right;
    }
</style>

</head>
<body>

<?php

$servername = 'localhost';
$username = 'piwowarczyk';
$password = '1234';
$database = 'piwowarczyk';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Błąd połączenia: " . mysqli_connect_error());
}

mb_internal_encoding('UTF-8');

$query = "SELECT Nazwa FROM stanowiska ORDER BY Nazwa;";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo "Błąd zapytania: " . mysqli_error($conn);
} else {
    echo "<table>";
    echo "<tr>
            <th>Nazwa stanowiska</th>
            <th>Liczba liter</th>
          </tr>";

    while($row = mysqli_fetch_assoc($result)){
        $nazwa = $row['Nazwa'];
        $liczba_liter = mb_strlen($nazwa);

        echo "<tr>";
        echo "<td>" . htmlspecialchars($nazwa) . "</td>";
        echo "<td>$liczba_liter liter</td>";
        echo "</tr>";
    }

    echo "</table>";
}

mysqli_close($conn);

?>

</body>
</html>