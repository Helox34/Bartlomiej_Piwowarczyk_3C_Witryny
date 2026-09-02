<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$text = "Nie ma nic trudniejszego na świecie niż szczerość i nie ma nic łatwiejszego niż pochlebstwo.";

echo "<p>$text</p>";
function ucwords($string) {
    return mb_convert_case($string, MB_CASE_TITLE, "UTF-8");
}
echo "<blockquote>" . ucwords($text) . "</blockquote>";
?>

</body>
</html>