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
        <?
        unset($_COOKIE['my_login']);
        setcookie('my_login', '', time() + 3600);
        ?>
        <form action="play.php" method="GET"><br>
            Nama: <input type="text" name="login">
            <input type="submit" value="Start Game">
        </form>
    </center>
</body>

</html>