<?php
session_start();
session_destroy();

setcookie('nama', $nama, time() + 0, "/");
setcookie('email', $email, time() + 0, "/");
header("Location: index.php");
