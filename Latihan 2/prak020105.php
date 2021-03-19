</html> -->
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
    $i = 1;
    do {
        if ($i % 2 == 0) echo "<font color='green'><h" . $i . ">Heading" . $i . "</h" . $i . "></font>";
        $i++;
    } while ($i <= 6)
    ?>
</body>

</html>