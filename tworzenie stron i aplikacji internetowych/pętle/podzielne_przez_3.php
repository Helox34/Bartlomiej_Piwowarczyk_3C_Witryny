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
$numbers = range(-9, 9);
$count = count($numbers);
foreach ($numbers as $index => $number) {
    if ($number % 3 == 0) {
        echo "<span style='color: limegreen'>$number</span>";
    }
    else {
        echo $number;
    }

    if ($index < $count - 1) {
        echo "|";
    }
}
?>
        </h2>
    </body>
</html>
