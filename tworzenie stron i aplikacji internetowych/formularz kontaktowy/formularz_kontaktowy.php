<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularz kontaktowy</title>
</head>
<body>

<form action="" method="post">
    Imię i nazwisko <span style="color:red">*</span><br>
    <input type="text" name="imie" value="<?php echo @$_POST['imie']; ?>"><br>

    Adres email <span style="color:red">*</span><br>
    <input type="text" name="email" value="<?php echo @$_POST['email']; ?>"><br>

    Przedział wiekowy <span style="color:red">*</span><br>
    <select name="wiek">
        <option value=""></option>
        <option value="do 25" <?php if(@$_POST['wiek']=="do 25") echo "selected"; ?>>do 25</option>
        <option value="25-50" <?php if(@$_POST['wiek']=="25-50") echo "selected"; ?>>25-50 lat</option>
        <option value="50-75" <?php if(@$_POST['wiek']=="50-75") echo "selected"; ?>>50-75 lat</option>
        <option value="powyżej 75" <?php if(@$_POST['wiek']=="powyżej 75") echo "selected"; ?>>powyżej 75</option>
    </select><br>

    Wiadomość <span style="color:red">*</span><br>
    <textarea name="wiadomosc"><?php echo @$_POST['wiadomosc']; ?></textarea><br>

    <input type="checkbox" name="zgoda" <?php if(isset($_POST['zgoda'])) echo "checked"; ?>> 
    Zgoda na przetwarzanie danych <span style="color:red">*</span><br><br>

    <input type="submit" name="wyslij" value="Wyślij">
</form>

</body>
</html>

<style>
    body {
        font-family: sans-serif;
    }
    form {
        background-color: #f0f7ff;
        padding: 20px;
        width: 350px;
    }
    input[type="text"], select, textarea {
        width: 250px;
        margin-bottom: 10px;
        display: block;
    }
    textarea {
        height: 50px;
    }
</style>

<?php
if (isset($_POST['wyslij'])) {
    if (count(explode(" ", trim($_POST['imie']))) >= 2 && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && !empty($_POST['wiek']) && strlen(str_replace(" ", "", $_POST['wiadomosc'])) >= 10 && isset($_POST['zgoda'])) {
        
        $tablica = [
            'full_name' => $_POST['imie'],
            'email_address' => $_POST['email'],
            'age_range' => $_POST['wiek'],
            'message_content' => $_POST['wiadomosc'],
            'consent' => 'true'
        ];
        
        file_put_contents("formularz_kontaktowy.txt", date('Y-m-d H:i:s') . "\n" . print_r($tablica, true) . "\n", FILE_APPEND);
        echo "<p style='color:red'>Dane z formularza zostały zapisane do pliku formularz_kontaktowy.txt</p>";
    } else {
        echo "<p style='color:red'>Błąd: Sprawdź czy wszystkie pola są poprawne!</p>";
    }
}
?>
