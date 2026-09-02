<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacje o dostawie</title>
    <style>
        body {
            background-color: palevioletred;
            color: #111;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        ul {
            list-style-type: square;
            max-width: 400px;
            margin: 20px auto;
            padding-left: 20px;
        }
        a {
            display: block;
            max-width: 400px;
            margin: 0 auto;
            text-align: center;
            color: navy;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Informacje o dostawie</h1>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'magazyn');
    if (!$conn) { die('Błąd połączenia: ' . mysqli_connect_error()); }
    mysqli_set_charset($conn, 'utf8');

    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    if ($id <= 0) {
        echo '<p>Nieprawidłowy identyfikator.</p>';
        echo '<p><a href="lista.php">Powrót do listy</a></p>';
        exit;
    }

    $res = mysqli_query($conn, 'SELECT id, nazwa, ilosc, data FROM dostawy WHERE id=' . $id);
    if ($row = mysqli_fetch_assoc($res)) {
        echo '<ul>';
        echo '<li>Id: ' . $row['id'] . '</li>';
        echo '<li>Nazwa: ' . htmlspecialchars($row['nazwa']) . '</li>';
        echo '<li>Ilość: ' . $row['ilosc'] . '</li>';
        echo '<li>Data: ' . $row['data'] . '</li>';
        echo '</ul>';
    } else {
        echo '<p>Brak danych dla tego ID.</p>';
    }

    mysqli_free_result($res);
    mysqli_close($conn);
    ?>
    <p><a href="lista.php">Powrót do listy dostaw</a></p>
</body>
</html>
