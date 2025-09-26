<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$DOBRA_RADA = "Bez chleba, to się nie najesz.";
?>

<h3><?php echo $DOBRA_RADA; ?></h3>

<p>Do stałej DOBRA_RADA stosuję funkcję <b>strlen</b>: <?php echo strlen($DOBRA_RADA); ?></p>
<p>Do stałej DOBRA_RADA stosuję funkcję <b>str_word_count</b>: <?php echo str_word_count($DOBRA_RADA); ?></p>
<p>Do stałej DOBRA_RADA stosuję funkcję <b>strrev</b>: <?php echo strrev($DOBRA_RADA); ?></p>
<p>Do stałej DOBRA_RADA stosuję funkcję <b>strpos</b>: <?php echo strpos($DOBRA_RADA, "to"); ?></p>
<p>Do stałej DOBRA_RADA stosuję funkcję <b>str_replace</b>: <?php echo str_replace("chleba", "mięsa", $DOBRA_RADA); ?></p>
<p>Do stałej DOBRA_RADA stosuję funkcję <b>strtolower</b>: <?php echo strtolower($DOBRA_RADA); ?></p>
<p>Do stałej DOBRA_RADA stosuję funkcję <b>strtoupper</b>: <?php echo strtoupper($DOBRA_RADA); ?></p>
<p>Do stałej DOBRA_RADA stosuję funkcję <b>ucwords</b>: <?php echo ucwords($DOBRA_RADA); ?></p>
<p>Do stałej DOBRA_RADA stosuję funkcję <b>trim</b>: <?php echo trim($DOBRA_RADA); ?></p>
<p>Do stałej DOBRA_RADA stosuję funkcję <b>strstr</b>: <?php echo strstr($DOBRA_RADA, "nie"); ?></p>
<p>Do stałej DOBRA_RADA stosuję funkcję <b>substr</b>: <?php echo substr($DOBRA_RADA, 10, 5); ?></p>
<p>Do stałej DOBRA_RADA stosuję funkcję <b>str_pad</b>: <?php echo str_pad($DOBRA_RADA, 41, " -_-", STR_PAD_BOTH); ?></p>

</body>
</html>
