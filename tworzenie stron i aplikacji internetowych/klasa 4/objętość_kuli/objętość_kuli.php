<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Objętość kuli</title>
</head>
<body>
    <p style="color: darkred; font-size: 22px; border: 4px double darkred;">Objętość kuli o promieniu <?php=$prom; ?> cm jest równa <?php=$objetosc; ?> cm<sup>3</sup>.</p>

<?php
$prom = 1;
$objetosc = (4/3) * pi() * ($prom ** 3);
$objetosc = round($objetosc, 4);
?>


</body>
</html>