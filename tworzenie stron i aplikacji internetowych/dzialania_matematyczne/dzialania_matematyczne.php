<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php $x = 5;
    $y = 15;
    $a = 4;
    $b = 35;
    $r = 16;
    $alfa = 93;
    $R = 3;
    $l = 5;
    ?>
</head>

<body>
    <fieldset>
        <legend>AD 1.</legend>
        <p>Wynik dodawania 5 i 15 wynosi <?= $x + $y ?></p>
        <p>Wynik odejmowana 5 i 15 wynosi <?= $x - $y ?></p>
        <p>Wynik mnożenia 5 i 15 wynosi <?= $x * $y ?></p>
        <p>Wynik dzielenia 5 przez 15 wynosi <?= $x / $y ?></p>
        <p>Reszta z dzielenia 5 przez 15 wynosi <?= $x % $y ?></p>
    </fieldset>
    <fieldset>
        <legend>AD 2.</legend>
        <p>Obwód prostokąta o bokach 5 i 35 jest równy <?= 2 * $a + 2 * $b ?></p>
        <p>Pole prostokąta o bokach 4 i 35 jest równe <?= $a * $b ?>j<sup>2</sup></p>
    </fieldset>
    <fieldset>
        <legend>AD 3.</legend>
        <p>Obwód koła o promienu 16 jest równy <?= number_format(2 * $r * pi(), 4) ?></p>
        <p>Pole koła o promieniu 16 jest równe <?= number_format(pi() * $r ** 2, 4) ?>j<sup>2</sup></p>
        <p>Pole wycinka koła o promieniu 16 i kącie środkowym 93&deg; jest równe <?= number_format($alfa / 360 * pi() * $r ** 2, 4) ?> j<sup>2</sup></p>
    </fieldset>
    <fieldset>
        <legend>AD 4.</legend>
        <p>Pole powierzchni stożka o promieniu podstawy 3 i tworzącej 5 jest równe <?= number_format(pi() * $R ** 2 + pi() * $R * $l, 4) ?> j<sup>2</sup></p>
        <p>Objętość stożka o promieniu podstawy 3 i wysokości 4 jest równa <?= number_format(pi() * $R ** 2 / 3 * 4, 4) ?> j<sup>3</sup></p>
    </fieldset>
</body>

</html>