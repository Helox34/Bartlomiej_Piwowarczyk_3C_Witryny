<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj nową dostawę</title>
    <style>
        body {
            background-color: darkgray;
            color: #111;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .box {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: lightgray;
        }
        form {
            background-color: lightgray;
            padding: 10px;
        }
        fieldset {
            border: 1px dashed gray;
            padding: 10px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        label span {
            display: inline-block;
            width: 80px;
        }
        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: calc(100% - 90px);
            padding: 5px;
            margin-left: 10px;
        }
        input[disabled] {
            background-color: #eee;
        }
        .button-row {
            text-align: center;
            margin-top: 10px;
        }
        .button-row input[type="submit"] {
            padding: 6px 16px;
            font-size: 16px;
        }
        .message {
            color: lime;
            text-align: center;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: navy;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Dodaj nową dostawę</h1>
    <div class="box">
    <?php
    // Lekcyjna wersja formularza dodawania
    $conn = mysqli_connect('localhost', 'root', '', 'magazyn');
    if (!$conn) { die('Błąd połączenia: ' . mysqli_connect_error()); }
    mysqli_set_charset($conn, 'utf8');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $n = mysqli_real_escape_string($conn, trim($_POST['nazwa'] ?? ''));
        $i = intval($_POST['ilosc'] ?? 0);
        $d = $_POST['data'] ?? '';
        if ($n !== '' && $i > 0 && $d !== '') {
            mysqli_query($conn, "INSERT INTO dostawy (nazwa, ilosc, data) VALUES ('$n', $i, '$d')");
            header('Location: lista.php');
            exit;
        } else {
            echo '<p>Wypełnij pola poprawnie.</p>';
        }
    }
    ?>

    <form method="post">
        <fieldset>
            <label><span>ID</span><input type="text" disabled value="(auto)" /></label>
            <label><span>Nazwa</span><input type="text" name="nazwa" required /></label>
            <label><span>Ilość</span><input type="number" name="ilosc" min="1" required /></label>
            <label><span>Data</span><input type="date" name="data" required /></label>
        </fieldset>
        <div class="button-row">
            <input type="submit" value="Dodaj" />
        </div>
    </form>

    <a class="back-link" href="lista.php">Powrót do listy dostaw</a>
    </div>
</body>
</html>