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
    function gandakanString($s, $n)
    {
        for ($i = 1; $i <= $n; $i++) {
            echo $s;
        }
    }
    echo gandakanString("Hello", 5);
    ?>
</body>

</html>