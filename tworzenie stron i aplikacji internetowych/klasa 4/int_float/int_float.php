<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php $liczba1 = 0;
    $liczba2 = -300;
    $liczba3 = 1.2;
    $liczba4 = -1.0E-5;
    $dodaj = 159.85 ?>
</head>

<body>
    <fieldset>
        <legend>AD 2.</legend>
        <p>Zmienna <em>$liczba1</em> ma wartość <b>0</b>, a funkcja <code>is_int()</code> zwraca dla niej wynik: <code><b><?= var_dump(is_int($liczba1)) ?></b></code></p>
        <p>Zmienna <em>$liczba2</em> ma wartość <b>-300</b>, a funkcja <code>is_int()</code> zwraca dla niej wynik: <code><b><?= var_dump(is_int($liczba2)) ?></b></code></p>
        <p>Zmienna <em>$liczba3</em> ma wartość <b>1.2</b>, a funkcja <code>is_int()</code> zwraca dla niej wynik: <code><b><?= var_dump(is_int($liczba3)) ?></b></code></p>
        <p>Zmienna <em>$liczba4</em> ma wartość <b>-1.0E-5</b>, a funkcja <code>is_int()</code> zwraca dla niej wynik: <code><b><?= var_dump(is_int($liczba4)) ?></b></code></p>
        <hr>
        <p>Zmienna <em>$liczba1</em> ma wartość <b>0</b>, a funkcja <code>is_float()</code> zwraca dla niej wynik: <code><b><?= var_dump(is_float($liczba1)) ?></b></code></p>
        <p>Zmienna <em>$liczba2</em> ma wartość <b>-300</b>, a funkcja <code>is_float()</code> zwraca dla niej wynik: <code><b><?= var_dump(is_float($liczba2)) ?></b></code></p>
        <p>Zmienna <em>$liczba3</em> ma wartość <b>1.2</b>, a funkcja <code>is_float()</code> zwraca dla niej wynik: <code><b><?= var_dump(is_float($liczba3)) ?></b></code></p>
        <p>Zmienna <em>$liczba4</em> ma wartość <b>-1.0E-5</b>, a funkcja <code>is_float()</code> zwraca dla niej wynik: <code><b><?= var_dump(is_float($liczba4)) ?></b></code></p>
    </fieldset>
    <fieldset>
        <legend>AD 3.</legend>
        <p>Zmienna <em>$dodaj</em> ma wartość <b>159.85</b>, a funkcja <code>is_numeric()</code> zwraca dla niej wynik: <code><b><?= var_dump(is_numeric($dodaj)) ?></b></code></p>
    </fieldset>
    <fieldset>
        <legend>AD 4.</legend>
        <p>Stała <b>PHP_INT_MAX</b> ma wartość <b><?= var_dump(PHP_INT_MAX) ?></b></p>
        <p>Stała <b>PHP_INT_MIN</b> ma wartość <b><?= var_dump(PHP_INT_MIN) ?></b></p>
        <p>Stała <b>PHP_INT_SIZE</b> ma wartość <b><?=var_dump(PHP_INT_SIZE)?></b></p>
        <p>Stała <b>PHP_FLOAT_MAX</b> ma wartość <b><?=var_dump(PHP_FLOAT_MAX)?></b></p>
        <p>Stała <b>PHP_FLOAT_MIN</b> ma wartość <b><?=var_dump(PHP_FLOAT_MIN)?></b></p>
        <p>Stała <b>PHP_FLOAT_DIG</b> ma wartość <b><?=var_dump(PHP_FLOAT_DIG)?></b></p>
        <p>Stała <b>PHP_FLOAT_EPSILON</b> ma wartość <b><?=var_dump(PHP_FLOAT_EPSILON)?></b></p>
    </fieldset>
</body>

</html>