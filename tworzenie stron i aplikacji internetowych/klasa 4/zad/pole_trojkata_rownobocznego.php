<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pole_trojkata_rownobocznego</title>
    <style>
        p {
            text-align: center;
            border-bottom: 1px;
            border-top: 1px;
            border-left: 25px;
            border-right: 25px;
            border-color: darkorange;
            border-style: solid;
        }
    </style>
</head>

<body>
    <?php $a = 17 ?>
    <p>Pole trójkąta równobocznego o boku długości <?= $a ?> jest równe <?= round($a ** 2 * sqrt(3) / 4, 3) ?> j<sup>2</sup>.</p>
</body>

</html>