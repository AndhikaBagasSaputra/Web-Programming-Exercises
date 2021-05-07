<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "modul10");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $name = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $nomor = htmlspecialchars($data["nomor"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $tempat = htmlspecialchars($data["tempat"]);
    $tanggal = htmlspecialchars($data["tanggal"]);

    // query insert data
    $query = "INSERT INTO crud VALUES ('', '$name', '$email','$nomor','$alamat','$jenis','$tempat','$tanggal' )";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM crud WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $name = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $nomor = htmlspecialchars($data["nomor"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $tempat = htmlspecialchars($data["tempat"]);
    $tanggal = htmlspecialchars($data["tanggal"]);

    // query insert data
    $query = "UPDATE crud SET nama = '$name', email = '$email', telpon = '$nomor', 
    alamat = '$alamat', kelamin = '$jenis', tempat = '$tempat', tanggal = '$tanggal' WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
