<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Podzielne przez 3</title>
    </head>
    <body>
<h2>
<?php
$numery = range(-9, 9);
$pierwszy = true;
foreach ($numery as $numer) {
    if (!$pierwszy) {
        echo "|";
    }
    $pierwszy = false;

    if ($numer % 3 == 0) {
        echo "<span style='color: limegreen'>$numer</span>";
        continue;
    }
    echo $numer;
}
?>
</h2>
    </body>
</html> 