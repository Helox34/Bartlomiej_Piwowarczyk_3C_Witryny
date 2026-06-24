<?php

// Nasza znana tablica asocjacyjna
$film = [
    'tytul' => 'Matrix',
    'rok' => 1999,
    'rezyser' => 'Wachowski'
];

// Mówimy komputerowi: "Weź tablicę $film i DLA KAŻDEJ szuflady..."
foreach ( $film   as   $klucz => $wartosc ) {
    
    // Wewnątrz klamer komputer automatycznie podmienia zmienne!
    echo 'W szufladzie o nazwie ' . $klucz . ' znajduje się: ' . $wartosc . '<br>' ;
    
}

?>
<?php
$user = [
    'imie' => 'Jan',
    'rola' => 'Administrator'
];

foreach ( $user   as   $klucz => $wartosc ) {

echo 'W szufladzie o nazwie ' . $klucz . ' znajduje się: ' . $wartosc . '<br>' ;
}
?>