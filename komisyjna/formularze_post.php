<form method="POST" action="index.php">
    
    <label>Wpisz swoje imię:</label>
    <input type="text" name="imie_uzytkownika">
    
    <button type="submit" name="wyslij">Wyślij dane</button>
    
</form>
<?php
// CZĘŚĆ 2: Odbiór danych w PHP

// Sprawdzamy, CZY użytkownik w ogóle kliknął przycisk "Wyślij"
if ( isset( $_POST['wyslij'] ) ) {
    
    // Wyciągamy zawartość okienka tekstowego z super-paczki $_POST
    $imie = $_POST['imie_uzytkownika'] ;
    
    echo 'Witaj na serwerze, ' . $imie . '!' ;
    
}
?>

<form>
<input type="number" name="wiek_uzytkownika">
<button type="submit" name="sprawdz">Sprawdź</button>
</form>
<?php

if (isset($_POST['sprawdz'])){
$_POST ['wiek_uzytkownika'] = $wiek
echo 'Twój wiek to: ' . $wiek . '<br>' ;
}
?>