<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dostaw</title>
    <style>
        body {
            background-color: lightblue;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: deepskyblue;
        }
        th, td {
            border: 1px solid blue;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: deepskyblue;
        }
        td a {
            color: navy;
            text-decoration: underline;
        }
        .count {
            max-width: 600px;
            margin: 20px auto;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Dane w tabeli <em>dostawy</em></h2>
    <?php
    $servername = 'localhost';
    $username = 'magazyn';
    $password = 'magazyn';
    $database = 'magazyn';

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die('<p>Błąd połączenia: ' . mysqli_connect_error() . '</p>');
    }
    mysqli_set_charset($conn, 'utf8');

    $sql = "SELECT id, nazwa, ilosc, data FROM dostawy ORDER BY id";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo '<p>Błąd zapytania: ' . htmlspecialchars(mysqli_error($conn)) . '</p>';
        mysqli_close($conn);
        exit;
    }

    $count = mysqli_num_rows($result);
    echo '<table>';
    echo '<tr><th>ID</th><th>Nazwa</th><th>Ilość</th><th>Data</th></tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['id']) . '</td>';
        echo '<td><a href="dostawa.php?id=' . intval($row['id']) . '">' . htmlspecialchars($row['nazwa']) . '</a></td>';
        echo '<td>' . htmlspecialchars($row['ilosc']) . '</td>';
        echo '<td>' . htmlspecialchars($row['data']) . '</td>';
        echo '</tr>';
    }

    echo '<tr><td colspan="4" style="text-align:center;"><a href="dodaj.php">dodaj nową dostawę</a></td></tr>';
    echo '</table>';
    echo '<p class="count">Liczba wierszy w tabeli <em>dostawy</em>: ' . $count . '</p>';

    mysqli_free_result($result);
    mysqli_close($conn);
    ?>
</body>
</html>
