<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Ankieta</title>
    <style>
        fieldset {
            border: 4px solid yellowgreen;
            width: 400px;
        }
        .gwiazdka {
            color: red;
        }
        .komunikat {
            color: red;
        }
    </style>
</head>
<body>

<?php
$imie = "";
$nazwisko = "";
$opcja = "";
$komunikat1 = "";
$komunikat2 = "";
$komunikat3 = "";

// sprawdzanie czy kliknieto przycisk wyslij
if (isset($_POST['wyslij'])) {
    
    // sprawdzanie imienia
    if (empty($_POST['imie'])) {
        $komunikat1 = "Musisz podać imię!";
    } else {
        $imie = $_POST['imie'];
    }

    // sprawdzanie nazwiska
    if (empty($_POST['nazwisko'])) {
        $komunikat2 = "Musisz podać nazwisko!";
    } else {
        $nazwisko = $_POST['nazwisko'];
    }

    // sprawdzanie opcji
    if (empty($_POST['opcja'])) {
        $komunikat3 = "Nie wybrano żadnej opcji!";
    } else {
        $opcja = $_POST['opcja'];
    }
}
?>

<form action="" method="post">
    <fieldset>
        <legend>Ankieta</legend>
        
        Imię: <span class="gwiazdka">*</span>
        <span class="komunikat"><?php echo $komunikat1; ?></span><br>
        <input type="text" name="imie" value="<?php echo $imie; ?>"><br><br>
        
        Nazwisko: <span class="gwiazdka">*</span>
        <span class="komunikat"><?php echo $komunikat2; ?></span><br>
        <input type="text" name="nazwisko" value="<?php echo $nazwisko; ?>"><br><br>
        
        Wybierz jedną opcję: <span class="gwiazdka">*</span>
        <span class="komunikat"><?php echo $komunikat3; ?></span><br>
        
        <input type="radio" name="opcja" value="uczeń" <?php if($opcja == "uczeń") echo "checked"; ?>> uczeń<br>
        <input type="radio" name="opcja" value="absolwent" <?php if($opcja == "absolwent") echo "checked"; ?>> absolwent<br>
        <input type="radio" name="opcja" value="nauczyciel" <?php if($opcja == "nauczyciel") echo "checked"; ?>> nauczyciel<br>
        <input type="radio" name="opcja" value="pracownik administracji" <?php if($opcja == "pracownik administracji") echo "checked"; ?>> pracownik administracji<br>
        <br>
        
        <input type="submit" name="wyslij" value="Wyślij">
    </fieldset>
</form>

</body>
</html>
