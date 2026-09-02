<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islandia</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1><a href="islandia.php">Zwiedzaj Islandię</a></h1>
    </header>

    <aside>
        <h3>Do zwiedzania</h3>
        <ul>
            <li>Wodospady:
                <ol>
                    <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'islandia');
                    $sql = "SELECT nazwa FROM obiekty WHERE panstwo = 'Islandia' AND idRodzaj = 10;";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<li>" . $row['nazwa'] . "</li>";
                    }
                    mysqli_close($conn);
                    ?>
                </ol>
            </li>
            <li>Siedliska zwierząt:
                <ol>
                    <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'islandia');
                    $sql = "SELECT nazwa FROM obiekty WHERE panstwo = 'Islandia' AND idRodzaj = 14;";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<li>" . $row['nazwa'] . "</li>";
                    }
                    mysqli_close($conn);
                    ?>
                </ol>
            </li>
        </ul>
    </aside>

    <main>
        <h2>Opis miejsca</h2>
        <section>
            <?php
            $id = 46;
            if (isset($_GET['id'])) {
                $id = intval($_GET['id']);
            } elseif (isset($_GET['idObiekt'])) {
                $id = intval($_GET['idObiekt']);
            }

            $conn = mysqli_connect('localhost', 'root', '', 'islandia');
            $sql = "SELECT obiekty.plik, obiekty.nazwa, obiekty.nazwaCechy, obiekty.wartoscCechy, obiekty.opis, rodzaje.rodzaj FROM obiekty JOIN rodzaje ON obiekty.idRodzaj = rodzaje.idRodzaj WHERE obiekty.idObiekt = $id;";
            $result = mysqli_query($conn, $sql);
            if ($row = mysqli_fetch_array($result)) {
                echo "<img src='" . $row['plik'] . "' alt='" . $row['nazwa'] . "'>";
                echo "<h2>" . $row['nazwa'] . "</h2>";
                echo "<h3>" . $row['rodzaj'] . "</h3>";
                echo "<p>" . $row['nazwaCechy'] . ": " . $row['wartoscCechy'] . "</p>";
                echo "<p>" . $row['opis'] . "</p>";
            }
            mysqli_close($conn);
            ?>
        </section>
    </main>

    <footer>
        <hr>
        <p>Autor: Bartłomiej Piwowarczyk</p>
    </footer>
</body>
</html>
