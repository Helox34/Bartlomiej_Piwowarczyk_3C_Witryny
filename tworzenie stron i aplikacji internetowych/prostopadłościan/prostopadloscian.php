<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prostopadłościan</title>
    <style>
        <style>
        .roz {
            color: violet;
            font-size: 1.5em;
            font-weight: 600;
            text-transform: capitalize;
        }
        .fiolet {
            color: purple;
            font-size: 25px;
            font-weight: 600;
            text-decoration: overline;
        }
        .icon {
            display: inline-block;
            transformscalex(-1);
            
        }
        .icon1 {
            display: inline-block;
            rotate(270deg);
            
        }
    </style>
</head>
<body>
<?php
$a = 5;
$b = 12;
$c = 84;

$diagonal = sqrt(pow($a, 2) + pow($b, 2) + pow($c, 2));

echo "<p class='roz'><span class='icon1'>👉</span> Przekątna prostopadłościanu o krawędziach długości $a, $b i $c jest równa $diagonal <span class='icon1'>👈</span></p>";

$surfaceArea = 2 * ($a * $b + $b * $c + $a * $c);

echo "<p class='fiolet'><span class='icon'>✍️</span> Pole powierzchni prostopadłościanu o krawędziach długości $a, $b i $c wynosi $surfaceArea j<sup>2</sup> <span class='icon'>✍️</span></p>";
?>

</body>
</html>
