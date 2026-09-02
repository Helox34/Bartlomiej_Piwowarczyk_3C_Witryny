<?php

$i = 1 ; // 1. START: Licznik tworzymy na samym początku, PRZED pętlą

while ( $i <= 3 ) { // 2. STOP: W nawiasie sprawdzamy TYLKO warunek
    
    echo 'To jest powtórzenie numer: ' . $i . '<br>' ;
    
    $i++ ; // 3. KROK: Licznik zwiększamy na samym końcu wewnątrz klamer!
    
} // Pamiętamy o zamknięciu klamry!

?>
<?php
$licznik = 1 ;

while ( $licznik <= 4 ) {

echo $licznik . '<br>';

$licznik++ ;
}
?>
