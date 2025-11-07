<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$a = 5;
$b = 12;
$c = 84;

$diagonal = sqrt(pow($a, 2) + pow($b, 2) + pow($c, 2));

echo "<p>Przekątna prostopadłościanu o krawędziach długości $a, $b i $c jest równa $diagonal.</p>";

$surfaceArea = 2 * ($a * $b + $b * $c + $a * $c);

echo "<p>Pole powierzchni prostopadłościanu o krawędziach długości $a, $b i $c wynosi $surfaceArea j<sup>2</sup>.</p>";
?>

</body>
</html>