<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>

<body>
    <?php
    $baris = 4;
    $kolom = 5;
    $isi = 1;
    echo "<table border=’1’>";
    for ($i = 0; $i < $baris; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $kolom; $j++) {
            echo "<td>$isi</td>";
            $isi += 1;
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>

</html>