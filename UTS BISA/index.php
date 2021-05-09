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

        h1,
        h2,
        h3 {
            text-align: center;
            font-family: 'Ubuntu', sans-serif;
        }

        label {
            font-family: 'Ubuntu', sans-serif;
            font-weight: bold;
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
    <title>Mathematics Game</title>
</head>

<body>
    <h1>Mathematics Game</h1>
    <hr><br>

    <?php
    if (isset($_COOKIE['email'])) {
        $nama = $_COOKIE['nama'];
    ?>

        <h3>Hallo <?= $nama; ?>, selamat datang kembali di permainan ini!!!</h3>
        <center>
            <button><a href="main.php">Start Game</a></button>
            <button><a href="logout.php">Bukan Anda ?</a></button>
        </center>
    <?php
    } else {
    ?>
        <center>
            <h2>Login</h2>
            <form action="login.php" method="POST">

                <label for="nama">Masukkan Nama : </label>
                <input type="text" name="nama" id="nama"><br><br>

                <label for="email">Masukkan Email : </label>
                <input type="email" name="email" id="email"><br><br>
                <button type="submit" name="submit" value="submit">Submit</button>
            </form>
        </center>
    <?php
    }
    ?>
</body>

</html>