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
    $nameFile = "myfile.txt";
    $myfile = fopen($nameFile, "a") or die("TIdak bisa membuka!");
    fwrite($myfile, "DOS = Disk Operation System\n");
    fclose($myfile);
    ?>
</body>

</html>