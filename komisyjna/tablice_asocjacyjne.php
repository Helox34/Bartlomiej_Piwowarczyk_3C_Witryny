<?php

// 1. Definiujemy tablicę asocjacyjną z danymi użytkownika
$profil = [
    'login'   => 'bobby_99',      // Klucz 'login' powiązany z tekstem 'bobby_99'
    'email'   => 'bob@domena.pl', // Klucz 'email' powiązany z tekstem 'bob@domena.pl'
    'rola'    => 'administrator', // Klucz 'rola' powiązany z tekstem 'administrator'
    'status'  => 'aktywny'        // Klucz 'status' powiązany z tekstem 'aktywny'
]; // Średnik zamyka całą operację tworzenia tablicy

// 2. Pobieramy dane z konkretnych szuflad i łączymy je w jedno zdanie
echo 'Użytkownik ' . $profil['login'] . ' ma status: ' . $profil['status'] . '.';

// Powyższe echo wyświetli na ekranie: Użytkownik bobby_99 ma status: aktywny.

?>
<?php
$ksiązka =  [
    'tytul' => 'wiedźmin',
    'autor' => 'Andrzej Sapkowski',
    'cena' => '49.99zł'
];
echo Książka o tytule $ksiązka[tytul] kosztuje $ksiązka[cena] i została napisana przez $ksiązka[autor].;
?>
<?php
$film = [
    'tytul' => 'Matrix',
    'rok' => 1999
];
echo 'Film ' . $film['tytul'] . ' powstał w roku ' . $film['rok'] . '.';

?>