<?php
require_once __DIR__ . '/config.php';

// Prosta walidacja serwerowa
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];
if($name === '') $errors[] = 'Imię jest wymagane.';
if($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Poprawny e-mail jest wymagany.';
if($message === '') $errors[] = 'Wiadomość nie może być pusta.';

if($errors){
    echo '<h2>Błędy:</h2><ul><li>' . implode('</li><li>', array_map('htmlspecialchars', $errors)) . '</li></ul>';
    echo '<p><a href="index.html">Powrót</a></p>';
    exit;
}

// Zapis do bazy (prepared statement)
try {
    $stmt = $pdo->prepare('INSERT INTO messages (name, email, message) VALUES (:name, :email, :message)');
    $stmt->execute([':name' => $name, ':email' => $email, ':message' => $message]);
} catch (PDOException $e) {
    die('Błąd zapisu: ' . $e->getMessage());
}

echo '<h2>Dziękuję — wiadomość została zapisana.</h2>';
echo '<p><a href="index.html">Wróć do formularza</a></p>';
