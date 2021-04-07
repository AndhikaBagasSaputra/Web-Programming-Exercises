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
    function hitungGaji($gol, $masaKerja)
    {
        if ($gol == "A") {
            if ($masaKerja < 10) {
                $gaji = 5000000;
            } else {
                $gaji = 7000000;
            }
        } elseif ($gol == "B") {
            if ($masaKerja < 10) {
                $gaji = 6000000;
            } else {
                $gaji = 8000000;
            }
        }
        return $gaji;
    }
    echo "Rp " . hitungGaji("A", 9) . "<br>";
    echo "Rp " . hitungGaji("A", 10) . "<br>";
    echo "Rp " . hitungGaji("B", 9) . "<br>";
    echo "Rp " . hitungGaji("B", 10);
    ?>
</body>

</html>