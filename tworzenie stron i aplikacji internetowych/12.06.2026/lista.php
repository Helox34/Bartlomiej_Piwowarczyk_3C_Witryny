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
    <h2 style="text-align:center;">Dane w tabeli dostawy</h2>
    <?php

    $conn = mysqli_connect('localhost', 'root', '', 'magazyn');
    if (!$conn) { die('Błąd połączenia: ' . mysqli_connect_error()); }
    mysqli_set_charset($conn, 'utf8');

    $res = mysqli_query($conn, 'SELECT id, nazwa, ilosc, data FROM dostawy ORDER BY id');
    echo '<table border="1" cellpadding="6" cellspacing="0">';
    echo '<tr><th>ID</th><th>Nazwa</th><th>Ilość</th><th>Data</th></tr>';
    while ($r = mysqli_fetch_assoc($res)) {
        echo '<tr>';
        echo '<td>' . $r['id'] . '</td>';
        echo '<td><a href="dostawa.php?id=' . $r['id'] . '">' . htmlspecialchars($r['nazwa']) . '</a></td>';
        echo '<td>' . $r['ilosc'] . '</td>';
        echo '<td>' . $r['data'] . '</td>';
        echo '</tr>';
    }
    echo '<tr><td colspan="4" style="text-align:center;"><a href="dostawa_dodaj.php">dodaj nową dostawę</a></td></tr>';
    echo '</table>';

    mysqli_free_result($res);
    mysqli_close($conn);
    ?>
</body>
</html>
