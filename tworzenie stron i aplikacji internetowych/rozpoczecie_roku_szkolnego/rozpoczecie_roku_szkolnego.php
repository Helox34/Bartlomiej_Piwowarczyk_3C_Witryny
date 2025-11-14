<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$today = time();
$month = date('n', $today);
$year = date('Y', $today);

if ($month >= 9) {
    $school_year = $year;
} else {
    $school_year = $year - 1;
}

$school_start = mktime(0, 0, 0, 9, 1, $school_year);
$day_name = date('l', $school_start);
$day_of_year = date('z', $school_start) + 1;
    ?>
<p style="background-color: lightsteelblue; border: 2px dotted blueviolet; border-radius: 5px; font-style: italic; padding: 15px;">
    Rozpoczęcie tego roku szkolnego odbyło się w <?php  $day_name; ?> i był to <?php=$day_of_year; ?> dzień roku.</p>

</body>
</html>