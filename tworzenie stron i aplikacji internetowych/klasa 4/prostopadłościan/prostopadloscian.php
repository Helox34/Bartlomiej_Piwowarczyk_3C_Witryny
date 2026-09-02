<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prostopadłościan</title>
    <style>
<<<<<<< HEAD
        <style>
        .roz {
=======
        .diagonal {
>>>>>>> f5b719a9f1f8184fb442892e0ba6b874f801a183
            color: violet;
            font-size: 1.5em;
            font-weight: 600;
            text-transform: capitalize;
        }
<<<<<<< HEAD
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
            
=======
        .surface-area {
            color: purple;
            font-size: 25px;
            font-weight: 600;
            text-decoration: line-through;
        }
        .icon {
            display: inline-block;
            transform: rotate(90deg);
>>>>>>> f5b719a9f1f8184fb442892e0ba6b874f801a183
        }
    </style>
</head>
<body>
<?php
$a = 5;
$b = 12;
$c = 84;

<<<<<<< HEAD
$diagonal = sqrt(pow($a, 2) + pow($b, 2) + pow($c, 2));

echo "<p class='roz'><span class='icon1'>👉</span> Przekątna prostopadłościanu o krawędziach długości $a, $b i $c jest równa $diagonal <span class='icon1'>👈</span></p>";

$surfaceArea = 2 * ($a * $b + $b * $c + $a * $c);

echo "<p class='fiolet'><span class='icon'>✍️</span> Pole powierzchni prostopadłościanu o krawędziach długości $a, $b i $c wynosi $surfaceArea j<sup>2</sup> <span class='icon'>✍️</span></p>";
?>

=======

$diagonal = sqrt(pow($a, 2) + pow($b, 2) + pow($c, 2));


echo "<p class='diagonal'><span class='icon'>👉</span> Przekątna prostopadłościanu o krawędziach długości $a, $b i $c jest równa $diagonal. <span class='icon'>👈</span></p>";

$surfaceArea = 2 * ($a * $b + $b * $c + $a * $c);

echo "<p class='surface-area'><span class='icon'>✍️</span> Pole powierzchni prostopadłościanu o krawędziach długości $a, $b i $c wynosi $surfaceArea j<sup>2</sup>. <span class='icon'>✍️</span></p>";
?>
>>>>>>> f5b719a9f1f8184fb442892e0ba6b874f801a183
</body>
</html>
