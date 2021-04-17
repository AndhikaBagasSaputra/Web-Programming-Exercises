<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>

</head>

<body>
    <?php
    $namafile = "datamhs.dat";
    $myfile = fopen($namafile, "r") or die("File tidak ditemukan !!!");

    echo "<center><h1>DATA MAHASISWA</h1>";
    echo "<h4>Jumlah Data Mahasiswa : " . count(file($namafile)) . "</h4></br>";

    $tanggal = explode("-", date("Y-m-d"));
    $hari = $tanggal[2];
    $bulan = $tanggal[1];
    $tahun = $tanggal[0];
    $jd1 = gregoriantojd($bulan, $hari, $tahun);

    function lahir(string $kelender, $jd1)
    {
        $tanggal1 = explode("-", $kelender);
        $hari1 = $tanggal1[2];
        $bulan1 = $tanggal1[1];
        $tahun1 = $tanggal1[0];
        $jd2 = gregoriantojd($bulan1, $hari1, $tahun1);
        $umur = intval(($jd1 - $jd2) / 365);
        return $umur;
    }
    // TABLE MAHASASIWA
    echo "<table border = 2>";
    echo "<tr bgcolor = #bdc7c9>
    <th>No</th>
    <th>Nim</th>
    <th>Nama</th>
    <th>Tanggal lahir</th>
    <th>Tempat lahir</th>
    <th>Usia</th></tr>";

    $n = 1;
    while (!feof($myfile)) {
        $data = explode("|", fgets($myfile));
        echo "<tr>";
        if ($data[0] != '') {
            $usia = lahir($data[2], $jd1);
            echo "<td>$n</td>
            <td>$data[0]</td>
            <td>$data[1]</td>
            <td>$data[2]</td>
            <td>$data[3]</td>
            <td>$usia</td>";
            $n++;
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "</center>"
    ?>
</body>

</html>