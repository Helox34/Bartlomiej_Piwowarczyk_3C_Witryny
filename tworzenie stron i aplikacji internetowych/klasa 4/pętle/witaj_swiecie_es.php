<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Witaj Świecie ESPANOL</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 4px double magenta;
            padding: 15px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <?php
            $tekst = "¡Hola Mundo!";
            $znaki = mb_str_split($tekst);

            foreach ($znaki as $znak) {
                echo "<td>$znak</td>";
            }
            ?>
        </tr>
    </table>
</body>
</html>
