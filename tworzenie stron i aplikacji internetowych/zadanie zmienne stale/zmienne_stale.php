<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
span {
    border:solid 
}
.ramka { margin: 10px 0;
         color:green; 
}

</style>

<?php
$ciag_znaków ="Ala ma kota";
$liczba_całkowita =1024;
$liczba_zmiennoprzecinkowa =65.536;
$bull = false;
?>

    <p>echo dla ciągu znaków: <span><?php echo $ciag_znaków ?></span></p>
    <p>echo dla liczby całkowitej: <span><?php echo $liczba_całkowita ?></span></p>
    <p>echo dla liczby rzeczywistej: <span><?php echo $liczba_zmiennoprzecinkowa ?></span></p>
    <p>echo dla wartości bool'owskiej: <?php echo $bull ?></p>
 <hr>
   <br>
   <p>var_dump dla ciągu znaków: <span><?php echo var_dump($ciag_znaków);  ?></span></p>
   <p>var_dump dla liczby całokowitej: <span><?php echo var_dump($liczba_całkowia);  ?></span></p>
   <p>var_dump dla liczby rzeczywistej: <span><?php echo var_dump($liczba_zmiennoprzecinkowa);  ?></span></p>
   <p>var_dump dla wartości bool'owskiej: <span><?php echo var_dump($bull);  ?></span></p>




</body>
</html> 