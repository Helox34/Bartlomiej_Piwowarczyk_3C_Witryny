<?php

$i = 1 ; // 1. START

do { // "do" oznacza: "Rób to, co w klamrach, bez zadawania pytań!"
    
    echo 'To jest powtórzenie numer: ' . $i . '<br>' ;
    
    $i++ ; // 2. KROK
    
} while ( $i <= 3 ) ; // 3. STOP: Warunek jest na samym dole i MA ŚREDNIK!

?>

<?php
$licznik = 1 ;
do {
echo 'to jest' . $licznik . '<br>' ;
$licznik++;
}
while ($licznik <= 3 );
?>