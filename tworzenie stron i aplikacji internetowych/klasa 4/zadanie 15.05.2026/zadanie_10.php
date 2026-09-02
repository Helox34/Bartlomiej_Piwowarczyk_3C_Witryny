
<!doctype html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Data zatrudnienia</title>
</head>
<body>

<?php
$servername = 'localhost';
$username = 'piwowarczyk';
$password = '1234';
$database = 'piwowarczyk';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
	die('Błąd połączenia: ' . mysqli_connect_error());
}

mysqli_set_charset($conn, 'utf8');

$sql = "SELECT Imie, Nazwisko, Data_zatrudnienia FROM pracownicy ORDER BY Data_zatrudnienia";
$result = mysqli_query($conn, $sql);

echo "<h2>Data zatrudnienia</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Imię</th><th>Nazwisko</th><th>Data zatrudnienia</th></tr>";

if ($result && mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>" . htmlspecialchars($row['Imie']) . "</td>";
		echo "<td>" . htmlspecialchars($row['Nazwisko']) . "</td>";
		echo "<td>" . htmlspecialchars($row['Data_zatrudnienia']) . "</td>";
		echo "</tr>";
	}
} else {
	echo "<tr><td colspan='3'>Brak wyników</td></tr>";
}

echo "</table>";

mysqli_close($conn);

?>

</body>
</html>

