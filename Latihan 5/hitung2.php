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

    if (isset($_POST['penjumlahan'])) {
        $hasil = $bil1 + $bil2;
        $op = "+";
    } elseif (isset($_POST['pengurangan'])) {
        $hasil = $bil1 - $bil2;
        $op = "-";
    } elseif (isset($_POST['perkalian'])) {
        $hasil = $bil1 * $bil2;
        $op = "x";
    } elseif (isset($_POST['pembagian'])) {
        $hasil = $bil1 / $bil2;
        $op = "/";
    } elseif (isset($_POST['pangkat'])) {
        $hasil = $bil1 ** $bil2;
        $op = "^";
    }

    echo "<h2>" . $bil1 . "$op" . $bil2 . "=" . $hasil . "</h2>";
    ?>
</body>

</html>