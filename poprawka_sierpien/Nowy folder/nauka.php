<?php
/* =========================================================================
   KOMPLEKSOWY SKRYPT PHP - PRZYGOTOWANIE DO POPRAWKI
   Wszystkie 27 zagadnień z teorii i praktyki
   ========================================================================= */

echo "<h1>Powtórka z PHP - Sierpień</h1>";

// =========================================================================
// 1. Proste i specjalne typy danych w PHP
// =========================================================================
/* TEORIA: PHP posiada typy skalarne (int, float, string, bool), 
   złożone (array, object) oraz specjalne (NULL, resource). */
$dystans_km = 120; // Integer (liczba całkowita)
$napiecie = 3.3; // Float (zmiennoprzecinkowa)
$nazwa_projektu = "Posłaniec"; // String (ciąg znaków)
$czy_dziala = true; // Boolean (prawda/fałsz)
$brak_sygnalu = null; // NULL (brak przypisanej wartości)


// =========================================================================
// 2. Tablice w PHP & 3. Tablice asocjacyjne
// =========================================================================
/* TEORIA: 
   - Tablice indeksowane mają klucze liczbowe (od 0). 
   - Tablice asocjacyjne mają klucze tekstowe (własne nazwy). */

$typy_rowerow = ["Gravel", "Szosa", "MTB"]; // Indeksowana

$moj_rower = [
    "marka" => "Propain",
    "model" => "Spindrift AL 7",
    "rok_produkcji" => 2024,
    "stan" => "do_sprzedazy"
]; // Asocjacyjna


// =========================================================================
// OPERATORY (Punkty 4-9)
// =========================================================================

// 4. Arytmetyczne (+, -, *, /, %, **)
$czas_jazdy_h = 7.5;
$srednia_predkosc = $dystans_km / $czas_jazdy_h;
$reszta_z_dzielenia = 10 % 3; // Zwróci 1

// 5. Porównania (==, ===, !=, !==, >, <, >=, <=)
/* TEORIA: == sprawdza wartość, === sprawdza wartość i TYP danych (tzw. identyczność) */
$czy_ten_sam_rok = ($moj_rower['rok_produkcji'] == "2024"); // True (mimo że string vs int)
$czy_identyczny_rok = ($moj_rower['rok_produkcji'] === "2024"); // False (bo typy się nie zgadzają)

// 6. Bitowe (&, |, ^, ~, <<, >>)
/* PRAKTYKA: Rzadko używane w webdevie, częściej przy mikrokontrolerach i rejestrach. */
$a = 5;  // 0101 w systemie binarnym
$b = 3;  // 0011 w systemie binarnym
$wynik_bitowy = $a & $b; // Wynik 1 (0001) - tylko bity zapalone w obu miejscach dają 1

// 7. Logiczne (&&, ||, !)
$zbudowano_uklad = true;
$napisano_kod = false;
$projekt_skonczony = ($zbudowano_uklad && $napisano_kod); // False - oba muszą być True

// 8. Przypisania (=, +=, -=, *=, /=, .=)
$licznik_kilometrow = 50;
$licznik_kilometrow += 70; // To samo co: $licznik_kilometrow = $licznik_kilometrow + 70;

// 9. Inkrementacji (++) i Dekrementacji (--)
$uzytkownicy = 5;
$uzytkownicy++; // Zwiększa o 1, teraz wynosi 6


// =========================================================================
// 10. Instrukcja warunkowa & Operator warunkowy (Ternary)
// =========================================================================
if ($licznik_kilometrow >= 100) {
    echo "<p>Zrobiłeś setkę!</p>";
} elseif ($licznik_kilometrow > 50) {
    echo "<p>Dobry trening.</p>";
} else {
    echo "<p>Rozgrzewka.</p>";
}

// Operator warunkowy (skrócony if): warunek ? jesli_prawda : jesli_falsz;
$status_baterii = ($napiecie > 3.0) ? "Bateria OK" : "Naładuj baterię";


// =========================================================================
// 11. Instrukcja wyboru (Switch)
// =========================================================================
$mikrokontroler = "ESP8266";
switch ($mikrokontroler) {
    case "Arduino Uno":
        echo "<p>Płytka bazowa, brak WiFi.</p>";
        break;
    case "ESP8266":
        echo "<p>Świetny wybór do projektów IoT!</p>";
        break;
    default:
        echo "<p>Nieznana płytka.</p>";
}


// =========================================================================
// PĘTLE (Punkty 12-15)
// =========================================================================

// 12. Pętla FOR - kiedy z góry wiesz, ile razy ma się wykonać
echo "Odliczanie: ";
for ($i = 0; $i < 3; $i++) {
    echo "$i... ";
}

// 13. Pętla WHILE - wykonuje się dopóki warunek jest prawdziwy
$poziom_baterii = 100;
while ($poziom_baterii > 98) {
    $poziom_baterii--; // Symulacja rozładowywania
}

// 14. Pętla DO...WHILE - wykona się ZAWSZE przynajmniej raz!
$proba = 1;
do {
    // Nawet gdy warunek jest zły, ten kod ruszy raz
    $proba++;
} while ($proba < 1);

// 15. Pętla FOREACH - dedykowana specjalnie dla tablic
echo "<ul>";
foreach ($typy_rowerow as $typ) {
    echo "<li>$typ</li>";
}
echo "</ul>";

// Iteracja po tablicy asocjacyjnej
foreach ($moj_rower as $klucz => $wartosc) {
    echo "<p>Właściwość <b>$klucz</b>: $wartosc</p>";
}


// =========================================================================
// FUNKCJE (Punkty 16-20)
// =========================================================================

// 17. Zasięg zmiennych (Global vs Local)
$mnoznik = 2; // Zmienna globalna

// 16. Definiowanie funkcji, 18. Zwracanie wartości, 19. Argumenty, 20. Domyślne wartości
function obliczZasieg(float $pojemnosc_mah, float $zuzycie = 50.5): float
{
    // Słowo kluczowe 'global' wciąga zmienną z zewnątrz do wnętrza funkcji
    global $mnoznik;

    // Zwracamy wynik
    return ($pojemnosc_mah / $zuzycie) * $mnoznik;
}

// Wywołanie funkcji (korzysta z argumentu domyślnego dla $zuzycie)
$szacowany_czas = obliczZasieg(3000);


// =========================================================================
// FUNKCJE WBUDOWANE (Punkty 21-23)
// =========================================================================

// 21. Dotyczące tablic
$ilosc_rowerow = count($typy_rowerow); // Zlicza elementy
array_push($typy_rowerow, "Enduro"); // Dodaje na koniec tablicy
sort($typy_rowerow); // Sortuje alfabetycznie

// 22. Dotyczące daty i czasu
$dzisiejsza_data = date("Y-m-d H:i:s"); // np. 2026-08-11 12:30:00
$znacznik_czasu = time(); // Aktualny Unix Timestamp

// 23. Dotyczące ciągów znaków (String)
$ciag = "Aplikacja do komunikacji";
$dlugosc = strlen($ciag); // Długość: 24 znaki
$wielkie_litery = strtoupper($ciag); // APLIKACJA DO KOMUNIKACJI
$fragment = substr($ciag, 0, 9); // Zwróci "Aplikacja"


// =========================================================================
// FORMULARZE I WALIDACJA (Punkty 24-27)
// =========================================================================
/* 
   24. GET - Dane przesyłane w adresie URL (jawne, limitowane, dobre do wyszukiwarek).
   25. POST - Dane wysyłane w tle (ukryte, bezpieczniejsze, służą do logowania/wysyłki danych).
*/
?>

<hr>
<h2>Formularz zgłoszeniowy (Serwis)</h2>
<form method="POST" action="">
    <label>Model urządzenia:</label><br>
    <input type="text" name="model" placeholder="np. Domofon V2"><br><br>

    <label>Twój e-mail:</label><br>
    <input type="text" name="email" placeholder="adres@mail.com"><br><br>

    <button type="submit" name="wyslij">Wyślij zgłoszenie</button>
</form>

<?php
// 26. Walidacja danych formularza
if (isset($_POST['wyslij'])) {
    // Zabezpieczenie przed atakami XSS (zamienia tagi HTML na bezpieczne znaki)
    $model_urzadzenia = htmlspecialchars($_POST['model']);
    $email = trim($_POST['email']);

    $bledy = [];

    // Walidacja wbudowana (czy nie puste)
    if (empty($model_urzadzenia)) {
        $bledy[] = "Model urządzenia jest wymagany.";
    }

    // 27. Walidacja za pomocą wyrażeń regularnych (Regex)
    /* TEORIA: Wyrażenia regularne (PCRE) służą do sprawdzania wzorców tekstowych.
       Poniżej wzorzec dla adresu e-mail, używamy funkcji preg_match(). */
    $wzorzec_email = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";

    if (!preg_match($wzorzec_email, $email)) {
        $bledy[] = "Podany e-mail ma nieprawidłowy format!";
    }

    // Wyświetlanie wyników
    if (count($bledy) > 0) {
        echo "<div style='color:red;'>";
        foreach ($bledy as $blad) {
            echo "<p>$blad</p>";
        }
        echo "</div>";
    } else {
        echo "<p style='color:green;'>Zgłoszenie sprzętu $model_urzadzenia przyjęte poprawnie!</p>";
    }
}
?>
<!-- DODATEK: Połączenie z bazą danych MySQL -->
<div class="opis">
    <h2>Dodatek: Połączenie z bazą danych MySQL</h2>
    <p>Test połączenia z bazą <code>sie</code> na koncie <b>Bartek</b>:</p>

    <div class="wynik">
        <?php
        // 1. Parametry logowania do bazy
        $host = "localhost";
        $user = "Bartek";
        $password = "123";
        $dbname = "sie";

        // 2. Nawiązanie połączenia (obiektowo)
        $conn = new mysqli($host, $user, $password, $dbname);

        // 3. Sprawdzenie czy wystąpił błąd przy połączeniu
        if ($conn->connect_error) {
            // Wypisanie błędu i zatrzymanie skryptu (die)
            die("<span style='color:red;'>Błąd połączenia z bazą: " . $conn->connect_error . "</span>");
        } else {
            // Sukces!
            echo "<span style='color:green;'><b>Udało się!</b> Połączono pomyślnie z bazą danych 'sie' jako użytkownik 'Bartek'.</span>";
        }

        /* 
         W tym miejscu wpisuje się zapytania SQL, np:
         $wynik = $conn->query("SELECT * FROM nazwa_tabeli");
        */

        // 4. Zamknięcie połączenia na końcu pracy z bazą
        $conn->close();
        ?>
    </div>
</div>