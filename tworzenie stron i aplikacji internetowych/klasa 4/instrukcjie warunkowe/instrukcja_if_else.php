<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrukcja If Else</title>
    <style>
        .header-random {
            text-align: center;
            color: darkorchid;
        }
        .text-magenta {
            text-align: center;
            color: magenta;
        }
        .text-navy {
            text-align: center;
            color: navy;
        }
        .text-deeppink {
            text-align: center;
            color: deeppink;
        }
    </style>
</head>
<body>
    <?php
$losowa = rand(1, 30);
echo "<h2 class='header-random'>$losowa</h2>";

if ($losowa >= 20) {
    echo "<h4 class='text-magenta'>Wylosowana liczba jest większa lub równa 20.</h4>";
}

if ($losowa % 2 == 0) {
    echo "<h4 class='text-navy'>Wylosowana liczba jest parzysta.</h4>";
}
else {
    echo "<h4 class='text-navy'>Wylosowana liczba jest nieparzysta.</h4>";
}

if ($losowa <= 10) {
    echo "<h4 class='text-deeppink'>Pierwsza dziesiątka</h4>";
}
elseif ($losowa <= 20) {
    echo "<h4 class='text-deeppink'>Druga dziesiątka</h4>";
}
else {
    echo "<h4 class='text-deeppink'>Trzecia dziesiątka</h4>";
}
?>
</body>
</html>
