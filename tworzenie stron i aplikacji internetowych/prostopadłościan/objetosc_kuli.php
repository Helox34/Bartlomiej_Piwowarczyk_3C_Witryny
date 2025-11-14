<?php
$prom = 1;
$objetosc = (4/3) * pi() * pow($prom, 3);
$objetosc = round($objetosc, 4);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Objętość kuli</title>
</head>
<body>
<p style="color: darkred; font-size: 22px; border: 4px double darkred;">Objętość kuli o promieniu <?php echo $prom; ?> cm jest równa <?php echo $objetosc; ?> cm3.</p>
</body>
</html>
