<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Data Ukuran Tabung</h1>
    <table border="1">
        <tr>
            <th>Nama Tabung</th>
            <th>Diameter</th>
            <th>Tinggi</th>
            <th>Luas</th>
        </tr>
        <?php
        $namafile = "datatabung.dat";
        $myfile = fopen($namafile, "r") or die("Data Tidak Ditemukan !");
        while (!feof($myfile)) {
            echo "<tr>";
            $data = explode(",", fgets($myfile));
            $link = "hitungluas.php?n=$data[0]&d=$data[1]&t=$data[2]";
            echo "
            <td>$data[0]</td>
            <td>$data[1]</td>
            <td>$data[2]</td>
            <td><a href = $link target='_blank'>view</a></td>
            ";
        }
        echo "</tr>"
        ?>
    </table>

</body>

</html>