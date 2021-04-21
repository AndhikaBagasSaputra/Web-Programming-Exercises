<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];

    $op = $_POST['operasi'];

    if ($op == "+") {
        $hasil = $bil1 + $bil2;
    } elseif ($op == "-") {
        $hasil = $bil1 - $bil2;
    } elseif ($op == "x") {
        $hasil = $bil1 * $bil2;
    } elseif ($op == "/") {
        $hasil = $bil1 / $bil2;
    } elseif ($op == "^") {
        $hasil = $bil1 ** $bil2;
    }

    echo "<h2>" . $bil1 . "" . $op . "" . $bil2 . "=" . $hasil . "</h2>";
    ?>
</body>

</html>