<form method="GET" action="index.php">
    
    <label>Czego szukasz w sklepie?</label>
    <input type="text" name="fraza_wyszukiwania">
    
    <button type="submit" name="kliknieto_szukaj">Szukaj</button>
    
</form>
<?php
// CZĘŚĆ 2: Odbiór danych w PHP

// Dokładnie tak samo jak w POST, sprawdzamy czy przycisk został kliknięty
if ( isset( $_GET['kliknieto_szukaj'] ) ) {
    
    // Wyciągamy dane z super-paczki $_GET
    $szukane_slowo = $_GET['fraza_wyszukiwania'] ;
    
    echo 'Wyniki wyszukiwania dla słowa: <strong>' . $szukane_slowo . '</strong>' ;
    
}
?>