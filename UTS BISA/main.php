<?php
if (!isset($_COOKIE['email'])) {
    header("Location: index.php");
}
session_start();



$lives = $_SESSION['lives'];
$score = $_SESSION['score'];

$_SESSION['angka1'] = random_int(0, 20);
$_SESSION['angka2'] = random_int(0, 20);
$angka = $_SESSION['angka1'];
$angka1 = $_SESSION['angka2'];
$tebakan = $angka + $angka1;
$_SESSION['tebakan'] = $tebakan;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <style>
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

        h1,
        p {
            font-family: 'Ubuntu', sans-serif;
        }

        p {
            font-weight: bold;
            font-size: 15px;
        }
    </style>
    <title>Mathematics Game</title>

</head>

<body>
    <center>
        <h1>Mathematics Game</h1>
        <hr><br>
        <p>Hello <?= $_COOKIE['nama']; ?>, Tetap semangat ya... you can do the best !!!</p>
        <p>Lives: <?= $_SESSION['lives']; ?> | Score: <?= $_SESSION['score']; ?></p>

        <form action="jawaban.php" method="POST">
            <label for="penjumlahan"><?= $angka; ?> + <?= $angka1; ?> = </label>
            <input type="number" name="jawaban" id="penjumlahan"><br><br>
            <button type="submit" value="Submit" name="submit">Jawab</button>
        </form>
    </center>

</body>

</html>