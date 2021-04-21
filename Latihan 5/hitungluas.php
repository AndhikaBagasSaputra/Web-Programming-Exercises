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
	$pi = 22 / 7;
	$nama = $_GET['n'];
	$d = $_GET['d'];
	$t = $_GET['t'];

	$ls = ($d * $pi) * $t;
	$ll = ($pi * ($d ** 2)) / 4;
	$lt = ($ls + ($ll * 2));

	echo "Luas Tabung " . $nama . " Dengan Diameter " . $d . " Dan Tinggi " . $t . " Adalah " . $lt . " Satuan Luas";
	?>
</body>

</html>