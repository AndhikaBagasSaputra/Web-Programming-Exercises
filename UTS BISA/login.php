<?php
session_start();
if ($_POST['submit']) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    setcookie('nama', $nama, time() + 3600, "/");
    setcookie('email', $email, time() + 3600, "/");


    $_SESSION['lives'] = 5;
    $_SESSION['score'] = 0;
    header("Location: main.php");
}
