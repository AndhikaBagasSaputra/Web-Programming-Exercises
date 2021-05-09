<?php
require 'conn.php';
if (!isset($_COOKIE['email'])) {
    header("Location: index.php");
}
session_start();
$lives = $_SESSION['lives'];
$score = $_SESSION['score'];
$nama = $_COOKIE['nama'];
$jawaban = $_POST['jawaban'];
$tebakan = $_SESSION['tebakan'];


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
    <style>
        body {
            background-color: #f4f4f4;
        }

        h1,
        p {
            font-family: 'Ubuntu', sans-serif;
        }

        p {
            font-weight: bold;
            font-size: 15px;
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
    </style>
</head>

<body>
    <center>
        <h1>Mathematics Game</h1>
        <hr><br>
        <?php
        if (isset($_POST['submit'])) {
            if ($tebakan == $jawaban) {
                $_SESSION['score'] = $score + 10;
        ?>
                <p>Selamat <?= $nama ?>, Jawaban kamu benar !!!</p><br>
                <p>Lives: <?= $lives ?> | Score: <?= $score ?></p>
                <button><a href="main.php">Soal selanjutnya</a></button>
            <?php
            } else {
                $_SESSION['score'] = $score - 2;
                $_SESSION['lives'] = $lives - 1;
            ?>
                <p>Hallo <?= $nama ?>, Sayang jawaban anda salah... tetap semangat !!!</p><br>
                <p>Lives: <?= $lives ?> | Score: <?= $score ?></p>
                <?php
                if ($lives == 0) {
                    $sql = "INSERT INTO skor (nama, score) VALUES ('$nama', '$score')";

                    mysqli_query($conn, $sql);
                ?>
                    <p>Hallo <?= $nama ?>, Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik. </p>
                    <p>Score kamu: <?= $score ?></p>
                    <button><a href="score.php">Lihat papan score</a></button>
                <?php
                } else {
                ?>

                    <button><a href="main.php">Soal selanjutnya</a></button>
        <?php
                }
            }
        }
        ?>
    </center>
</body>

</html>