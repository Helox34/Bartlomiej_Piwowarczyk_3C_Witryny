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
    $servername = 'localhost';
    $username = 'magazyn';
    $password = 'magazyn';
    $database = 'magazyn';

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die('<p>Błąd połączenia: ' . mysqli_connect_error() . '</p>');
    }
    mysqli_set_charset($conn, 'utf8');

    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    if ($id <= 0) {
        echo '<p>Nieprawidłowy identyfikator dostawy.</p>';
        echo '<a href="lista.php">Powrót do listy dostaw</a>';
        mysqli_close($conn);
        exit;
    }

    $sql = "SELECT id, nazwa, ilosc, data FROM dostawy WHERE id = " . $id;
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo '<p>Błąd zapytania: ' . htmlspecialchars(mysqli_error($conn)) . '</p>';
        mysqli_close($conn);
        exit;
    }

    if (mysqli_num_rows($result) === 0) {
        echo '<p>Nie znaleziono dostawy o podanym identyfikatorze.</p>';
    } else {
        $row = mysqli_fetch_assoc($result);
        echo '<ul>';
        echo '<li>Id: ' . htmlspecialchars($row['id']) . '</li>';
        echo '<li>Nazwa: ' . htmlspecialchars($row['nazwa']) . '</li>';
        echo '<li>Ilość: ' . htmlspecialchars($row['ilosc']) . '</li>';
        echo '<li>Data: ' . htmlspecialchars($row['data']) . '</li>';
        echo '</ul>';
    }

    mysqli_free_result($result);
    mysqli_close($conn);
    ?>
    <a href="lista.php">Powrót do listy dostaw</a>
</body>
</html>
