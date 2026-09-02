<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 6</title>
    <style>
        table,td,th{
            border-style: solid;
            border-width: 1px;
            border-collapse: collapse;
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

    $q = mysqli_query($conn, "SELECT Nazwa, CHAR_LENGTH(Nazwa) FROM Stanowiska");

    echo "<table>
        <tr>
            <th>Nazwa stanowiska</th>
            <th>Liczba liter</th>
        </tr>";
    
    while ($row = mysqli_fetch_row($q)) {
        echo "<tr>
            <td>" . htmlspecialchars($row[0]) . "</td>
            <td class='right'>$row[1] liter</td>
        </tr>";
    }
    echo "</table>";

    mysqli_close($conn);
    ?>
</body>
</html>
