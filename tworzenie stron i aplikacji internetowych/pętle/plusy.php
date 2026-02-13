<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plusy</title>
</head>
<body>
    <?php
$plusy = rand(0, 10);
?>
    <blockquote>
        $plusy = <?php echo $plusy; ?>
    </blockquote>
    <blockquote>
        <?php
if ($plusy >= 1 && $plusy <= 9) {
    for ($i = 0; $i < $plusy; $i++) {
        echo "+";
    }
}
else {
    echo "Wartość jest poza zakresem <1, 9>";
}
?>
    </blockquote>
</body>
</html>
