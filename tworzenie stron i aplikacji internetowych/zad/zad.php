<?php
// Załóżmy przykładową datę rozpoczęcia roku szkolnego (np. 2 września 2024 – poniedziałek)
$rok = date("Y"); 
// Rok szkolny zaczyna się 1 września — ale zadanie mówi, że może być SOBOTA lub NIEDZIELA,
// więc ustawimy datę dynamicznie (pierwszy weekend września):

$timestamp = mktime(0, 0, 0, 9, 1, $rok); // 1 września danego roku

// Sprawdzamy który to dzień tygodnia
$dzien_tyg = date("w", $timestamp); // 0 = niedziela, 6 = sobota

if ($dzien_tyg != 0 && $dzien_tyg != 6) {
    obliczamy ile dni do soboty
    $dni_do_soboty = 6 - $dzien_tyg;
    $timestamp = strtotime("+$dni_do_soboty days", $timestamp);
}


$dzien_ang = date("l", $timestamp);


$dzien_roku = date("z", $timestamp) + 1;
?>

<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Rozpoczęcie roku szkolnego</title>
<style>
    p.info {
        background-color: lightsteelblue;
        border: 2px dashed blueviolet;
        border-radius: 5px;
        font-style: italic;
        padding: 15px;
    }
</style>
</head>
<body>

<p class="info">
    Rozpoczęcie tego roku szkolnego odbyło się w <strong><?= $dzien_ang ?></strong> 
    i był to <strong><?= $dzien_roku ?></strong> dzień roku.
</p>

</body>
</html>
