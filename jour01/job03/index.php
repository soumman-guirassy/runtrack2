<?php
    $boolean = true;
    $val = 23;
    $str = "chocolat au lait";
    $float = 0.23;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            margin: 40px;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px 16px;
            text-align: left;
        }
        th {
            background: #f0f0f0;
        }
        tr:nth-child(even) {
            background: #f7f7f7;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>NOM</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>boolean</td>
                <td>$boolean</td>
                <td><?php echo $boolean; ?></td>
            </tr>
            <tr>
                <td>integer</td>
                <td>$val</td>
                <td><?php echo $val; ?></td>
            </tr>
            <tr>
                <td>string</td>
                <td>$str</td>
                <td><?php echo $str; ?></td>
            </tr>
            <tr>
                <td>float</td>
                <td>$float</td>
                <td><?php echo $float; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>