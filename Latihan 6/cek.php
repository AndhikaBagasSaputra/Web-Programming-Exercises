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

    // mengecek keberadaan session 'namauser'
    // ket: session 'namauser' akan tercreate ketika proses login sukses
    // silakan cek kembali di script proses.php

    if (!isset($_SESSION['namauser'])) {
        echo "<p>Hayoo.. mau coba nge by-pass ya?</p>";
        echo "<p><a href='form.html'>Login</a> dulu ya..</p>";

        // setelah memunculkan pesan di atas, selanjutnya dibreak dg exit()
        exit();
    }

    ?>

</body>

</html>