<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekundy parzyste i nieparzyste</title>
    <style>
        .czas {
            font-size: 220px;
            font-weight: bold;
            text-align: center;
            border-style: solid;
            border-width: 20px;
        }
        .parzyste {
            color: red;
            border-color: red;
        }
        .nieparzyste {
            color: blue;
            border-color: blue;
        }
    </style>
</head>
<body>
    <?php
$aktualna_godzina = date("G:i:s");
$sekundy = date("s");

if ($sekundy % 2 == 0) {
    $modyfikator_klasy = "parzyste";
}
else {
    $modyfikator_klasy = "nieparzyste";
}

echo "<p class='czas $modyfikator_klasy'>$aktualna_godzina</p>";
?>
</body>
</html>
