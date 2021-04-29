<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>

        <?php
        $GLOBALS['b_match'] = false;

        if (isset($_GET['number_guess'])) {
            setcookie('my_guess', $_GET['number_guess']);
            $_COOKIE['my_guess'] = $_GET['number_guess'];
        } else {
            unset($_COOKIE['my_guess']);
            setcookie('my_guess', '', time() + 3600);
        }

        if (isset($_GET['login'])) {
            setcookie('my_login', $_GET['login']);
            setcookie('my_rand', rand(1, 100));
            $_COOKIE['my_login'] = $_GET['login'];
            $GLOBALS['b_match'] = false;
        }
        echo "Selamat Datang " . $_COOKIE['my_login'] . " !</br>";

        if (isset($_COOKIE['my_guess'])) {
            echo "</br>";
            if (is_numeric($_COOKIE['my_guess'])) {
                echo "Angka yang kamu pilih " . $_COOKIE['my_guess'] . ".</br>";
            } else {
                echo "Bilangan tebakan Anda  :)";
            }
            jawab($_COOKIE['my_guess'], $_COOKIE['my_rand']);
            echo "</br>";
        }
        if (!$GLOBALS['b_match']) {
            echo "</br>";
            echo "Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya !";
            echo "</form>";
            echo "<form action='play.php' method='get'>";
            echo "</br>Tebak: <input type = 'text' name = 'number_guess'>";
            echo "<input type='submit' value='SUBMIT'>";
            echo "</form>";
        } else {
            echo "<form action='Tebak Angka.php'>";
            echo "<br><input type='submit' value='Ulagi lagi ?'>";
        }
        function jawab($tebakan, $jawaban)
        {
            if ($tebakan == $jawaban) {
                echo "Selamat ya… Anda benar, saya telah memilih bilangan " . $_COOKIE['my_rand'];
                $GLOBALS['b_match'] = true;
            }
            if ($tebakan > $jawaban) {
                echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi.";
            }
            if ($tebakan < $jawaban) {
                echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah.";
            }
        }
        ?>

    </center>
</body>

</html>