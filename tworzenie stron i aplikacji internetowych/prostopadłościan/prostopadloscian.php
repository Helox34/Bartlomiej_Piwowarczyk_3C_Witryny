<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prostopadłościan</title>
    <style>
        .diagonal {
            color: violet;
            font-size: 1.5em;
            font-weight: 600;
            text-transform: capitalize;
        }
        .surface-area {
            color: purple;
            font-size: 25px;
            font-weight: 600;
            text-decoration: line-through;
        }
        .icon {
            display: inline-block;
            transform: rotate(90deg);
        }
    </style>
</head>
<body>
<?php
$a = 5;
$b = 12;
$c = 84;


$diagonal = sqrt(pow($a, 2) + pow($b, 2) + pow($c, 2));


echo "<p class='diagonal'><span class='icon'>👉</span> Przekątna prostopadłościanu o krawędziach długości $a, $b i $c jest równa $diagonal. <span class='icon'>👈</span></p>";

$surfaceArea = 2 * ($a * $b + $b * $c + $a * $c);

echo "<p class='surface-area'><span class='icon'>✍️</span> Pole powierzchni prostopadłościanu o krawędziach długości $a, $b i $c wynosi $surfaceArea j<sup>2</sup>. <span class='icon'>✍️</span></p>";
?>
</body>
</html>
