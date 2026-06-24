Operatory Arytmetyczne
+ dodawanie 
- odejmowanie
% dzielenie
* mnozenie
moduło reszta z dzielenia

Operatory Porównania
Pojedynczy = służy tylko do wrzucania wartości do zmiennej
== - podobny
=== - identyczny

Operatory Logiczne i Bitowe
Logiczne && lub ||
&& - oba warunki muszą być prawdą
|| - wystarczy jeden prawdziwy warunek
Bitowe & lub |
prawda/fałsz
!negacja 



<?php

// Dane pasażera
$wiek = 20;
$posiada_bilet = true;
$waga_bagazu = 25;

// 1. Arytmetyka: Sprawdzamy, o ile pasażer przekroczył darmowy limit (20 kg)
$nadbagaz = $waga_bagazu - 20; // Wynik: 5

// 2. Porównanie i Logika: Czy pasażer jest pełnoletni ORAZ ma bilet?
// Używamy podwójnego ampersandu (&&), czyli logicznego "I"
if ( $wiek >= 18  &&  $posiada_bilet === true ) {
    
    // Ta instrukcja wykona się tylko, jeśli OBA warunki powyżej są prawdziwe
    echo 'Weryfikacja pomyślna. Twój nadbagaż to: ' . $nadbagaz . ' kg.';
    
} else {
    
    echo 'Odmowa wstępu na pokład.';
    
}

?>

<?php
$liczba = '343'

if ($liczba = 2 % 1 && $liczba > 10) {
echo 'liczba spełnia warunki'
} else {
echo 'liczba nie spełnia warunków'}
?>

<?php
$wiek = 20;
if($wiek = 18){
echo 'Masz 18 lat'}
?>

<?php
$punkty = 100;
if($punkty === 100 ){
echo 'maksymalny wynik';
}
?>