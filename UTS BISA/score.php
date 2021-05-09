<?php
require 'conn.php';
$data = query("SELECT * FROM skor ORDER BY score DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <title>Mathematics Game</title>
    <title>Mathematics Game</title>
    <style>
        h1 {
            text-align: center;
        }

        h1,
        h2 {
            font-family: 'Ubuntu', sans-serif;
        }

        body {
            background-color: #f4f4f4;
        }

        button {
            font-size: 15px;
            font-weight: bold;
            padding: 7px;
            border-radius: 5px;
            color: #fff;
            background-color: #444;
        }

        button a {
            color: #fff;
            text-decoration: none;
        }

        table {
            border-collapse: collapse;
            font-family: 'Ubuntu', sans-serif;
        }
    </style>
</head>

<body>
    <h1>Mathematics Game</h1>
    <hr><br>
    <center>
        <h2>HALL OF FAME</h2>
        <table border="1" cellpadding="5">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Score</th>
            </tr>

            <?php $n = 1; ?>
            <?php foreach ($data as $row) : ?>
                <tr>
                    <td align="center"><?= $n;  ?></td>
                    <td align="center"><?= $row["1"];  ?></td>
                    <td align="center"><?= $row["2"];  ?></td>

                </tr>
                <?php $n++; ?>
            <?php endforeach; ?>
        </table>
        <br>
        <button><a href="logout.php">Keluar</a></button>
        <button><a href="main.php">Main Lagi</a></button>
    </center>
</body>

</html>