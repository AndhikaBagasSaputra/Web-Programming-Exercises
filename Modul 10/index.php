<?php
require 'function.php';
$karyawan = query("SELECT * FROM crud");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <style>
        body {
            background-color: #f4f4f4;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th {
            height: 30px;
        }

        table td {
            text-align: center;
        }

        button {
            background: #444;
            border-radius: 5px;
            padding: 5px 5px;
        }

        button a {
            color: #f4f4f4;
        }
    </style>
</head>

<body>

    <center>
        <h1>Data Karyawan</h1>
    </center>
    <hr>

    <br>

    <table border="1" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Edit</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No Telpon</th>
            <th>Alamat</th>
            <th>Jenis kelamin</th>
            <th>Tempat lahir</th>
            <th>Tanggal lahir</th>
        </tr>

        <?php $n = 1; ?>
        <?php foreach ($karyawan as $row) : ?>
            <tr>
                <td><?= $n;  ?></td>
                <td><?= $row["0"];  ?></td>
                <td><a href="change.php?id=<?= $row["0"]; ?>">Ubah</a> |
                    <a href="delete.php?id=<?= $row["0"]; ?>" onclick="return confirm('Yakin ?');">
                        Hapus</a>
                </td>
                <td><?= $row["1"];  ?></td>
                <td><?= $row["2"];  ?></td>
                <td><?= $row["3"];  ?></td>
                <td><?= $row["4"];  ?></td>
                <td><?= $row["5"];  ?></td>
                <td><?= $row["6"];  ?></td>
                <td><?= $row["7"];  ?></td>
            </tr>
            <?php $n++; ?>
        <?php endforeach; ?>


    </table>
    <br>
    <button><a href="add.php">Tambah Data</a></button>



</body>

</html>