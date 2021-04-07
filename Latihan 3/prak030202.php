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
    function hitungDenda($tglHarusKembali, $tglKembali)
    {
        $tgl1 = explode("-", $tglHarusKembali);
        $hari = $tgl1[2];
        $bulan = $tgl1[1];
        $tahun = $tgl1[0];

        $tgl2 = explode("-", $tglKembali);
        $date = $tgl2[2];
        $month = $tgl2[1];
        $year = $tgl2[0];

        $jd1 = gregoriantojd($bulan, $hari, $tahun);
        $jd2 = gregoriantojd($month, $date, $year);

        $selisih = $jd2 - $jd1;
        $denda = $selisih * 3000;
        return $denda;
    }
    echo "Besarnya denda adalah : Rp " . hitungDenda("2021-01-03", "2021-01-05");
    ?>

</body>

</html>