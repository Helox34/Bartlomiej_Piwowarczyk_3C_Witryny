<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
h3 { 
    color:red 
}
p { 
    color:blue;
}
div { 
    color:green;
}

</style>

<?php
$a = 97;
$b = 3.14;
$c ='PHP';
?>

<h3><?php echo $a ?> jest liczbą pierwszą</h3>
<p>Liczba Pi zaokrąglona do dwóch miejsc po przecinku:<?php echo $b ?></p> 
<div style="text-decoration: underline overline"><?php echo $c ?> to język skryptowy wykonywany po stronie serwera </div>

</body>
</html> 