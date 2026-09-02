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
        <h2>Galeria</h2>
        <section>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'islandia');
            $sql = "SELECT idObiekt, plik, nazwa FROM obiekty WHERE panstwo = 'Islandia';";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "<a href='obiekty.php?id=" . $row['idObiekt'] . "'><img src='" . $row['plik'] . "' alt='" . $row['nazwa'] . "' title='" . $row['nazwa'] . "' class='miniatury'></a>";
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
