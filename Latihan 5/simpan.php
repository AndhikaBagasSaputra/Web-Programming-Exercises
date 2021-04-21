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

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $tmpt = $_POST['tmpt'];
    $namafile = "datamhs.dat";
    $myfile = fopen($namafile, "a") or die("file tidak ditemukan !");

    fwrite($myfile, "" . $nim . "|" . $nama . "|" . $tgl . "|" . $tmpt);
    fclose($myfile);
    ?>
</body>

</html>