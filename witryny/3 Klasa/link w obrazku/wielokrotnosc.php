<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wielokrotnosc</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 10px dashed greenyellow;
            font-size: 80px;
            color: red;
            text-shadow: 5px 5px 8px pink;
            padding: 100px;
        }

    </style>
</head>
<body>
    <?php $liczba = 77; ?>
    <table>
        <tr>
            <td><?php echo $liczba; ?></td>
            <td><?php echo $liczba * 2; ?></td>
            <td><?php echo $liczba * 3; ?></td>
            <td><?php echo $liczba * 4; ?></td>
        </tr>
    </table>
    
</body>
</html>