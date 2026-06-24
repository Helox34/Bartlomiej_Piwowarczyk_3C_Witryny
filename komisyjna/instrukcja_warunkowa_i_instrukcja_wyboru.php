<?php

// ==========================================
// PRZYKŁAD 1: Operator warunkowy (? :)
// ==========================================
$wiek = 20;

// Sprawdzamy warunek w jednej linijce
$status = ( $wiek >= 18 ) ? 'Dorosły' : 'Niepełnoletni' ;

echo $status; // Wyświetli: Dorosły


// ==========================================
// PRZYKŁAD 2: Instrukcja wyboru (switch)
// ==========================================
$numer_dnia = 2;

switch ( $numer_dnia ) {
    
    case 1:
        echo 'Poniedziałek';
        break; // <--- ZATRZYMAJ SIĘ TUTAJ, nie idź do kolejnego case!
        
    case 2:
        echo 'Wtorek';
        break; // <--- Znaleziono pasujący dzień, wyświetlamy i kończymy
        
    case 3:
        echo 'Środa';
        break;
        
    default:
        echo 'Nieznany dzień tygodnia'; // Wykona się, jeśli zmienna to np. 9
        break;
}

?>

<?php
$bilet = 'ulgowy';
switch ($bilet) {

case zwykly:
echo 'Cena: 15 zł';
break;

case ulgowy:
echo 'Cena: 10 zł';
break;

default :
echo 'Cena: 20 zł';
break;
}
?>

<?php
$temperatura = 15
$pogoda = ($temperatura >= 20) ? 'cieplo' : 'zimno';
echo $pogoda;


?>