<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$title = "Pierwsza strona z PHP—em";
$link_1 = "https://www.interia.pl/";
$link_2 = "https://www.onet.pl/";
$link_3 = "https://www.wp.pl/";
?>

<h3><?php echo $title ?></h3>
<li><p><?php echo href'$link_1' ?></p></li>
<li><p><?php echo href'$link_2' ?></p></li>
<li><p><?php echo href'$link_3' ?></p></li>

</body>
</html>