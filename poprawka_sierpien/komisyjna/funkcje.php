<?php

// 1. DEFINICJA (Budujemy robota)
function przywitajUzytkownika ( $imie ) {
    
    $tekst = 'Cześć ' . $imie . '! Miłego dnia!<br>' ;
    
    return $tekst ; // Zwracamy gotowy wynik na zewnątrz
    
}

// 2. WYWOŁANIE (Uruchamiamy robota)
echo przywitajUzytkownika ( 'Jan' ) ; 
echo przywitajUzytkownika ( 'Anna' ) ;


$owoce = ['jabłko', 'banan', 'śliwka'];
echo count($owoce); // Wyświetli: 3

array_push($owoce, 'pomarańcza'); // Tablica ma teraz 4 elementy

if ( in_array('banan', $owoce) ) { echo 'Mamy banana!'; }

$daty = "2026-06-24";
$tablica_daty = explode("-", $daty); 
// Wynik: ['2026', '06', '24']

// Przykład użycia na egzaminie:
echo date( 'Y-m-d H:i:s' ) ; // Wyświetli np.: 2026-06-24 22:15:30

echo strlen('PHP'); // Wyświetli: 3

$cytat = "PHP jest trudny";
echo str_replace("trudny", "super", $cytat); // PHP jest super

$haslo = "TajneHaslo123";
echo substr($haslo, 0, 5); // Wycina od pozycji 0 dokładnie 5 liter: Tajne

?>

<?php
function $pomnóż ( $liczba ) {

    $wynik = $liczba * 2 ;

    return $wynik ;

}
?>