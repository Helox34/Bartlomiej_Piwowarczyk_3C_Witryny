<?php
// Konfiguracja połączenia z bazą (XAMPP domyślnie: user=root, empty password)
$db_host = '127.0.0.1';
$db_name = 'poprawka_db';
$db_user = 'root';
$db_pass = '';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die('Błąd połączenia z bazą: ' . $e->getMessage());
}
