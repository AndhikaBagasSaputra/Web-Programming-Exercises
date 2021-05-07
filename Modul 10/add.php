<?php
require 'function.php';
// cek tombol submit
if (isset($_POST["submit"])) {

    // cek data berhasil ditambah atau tidak
    if (tambah($_POST) > 0) {
        header("Location: index.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Karyawan</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#tanggal").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>
    <style>
        body {
            background-color: #f4f4f4;
        }

        button {
            background: #444;
            border-radius: 5px;
            padding: 5px 5px;
            color: #f4f4f4;
        }
    </style>
</head>

<body>
    <center>
        <h1>Tambah Data Karyawan</h1>

        <hr><br>

        <form action="" method="post">

            <label for="nama">Nama </label><br>
            <input type="text" name="nama" id="nama" required><br><br>


            <label for="email">Email </label><br>
            <input type="text" name="email" id="email" required><br><br>


            <label for="nomor">No Telpon </label><br>
            <input type="text" name="nomor" id="nomor"><br><br>


            <label for="alamat">Alamat </label><br>
            <input type="text" name="alamat" id="alamat" required><br><br>


            <label for="jenis">Jenis Kelamin </label><br>
            <input type="radio" name="jenis" id="jenis" value="pria" checked />
            Pria
            <input type="radio" name="jenis" id="jenis" value="wanita" />
            Wanita<br><br>


            <label for="tempat">tempat Lahir </label><br>
            <input type="text" name="tempat" id="tempat" required><br><br>


            <label for="tanggal">Tanggal Lahir</label><br>
            <input type="text" name="tanggal" id="tanggal" required><br><br>


            <button type="submit" name="submit">Tambah Data</button>

        </form>
    </center>
</body>

</html>