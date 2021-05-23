<?php
class koneksiDB
{
    function getKoneksi()
    {
        $host = "localhost";
        $username = "root";
        $pw = "";
        $db = "modul11";
        $conn = mysqli_connect($host, $username, $pw, $db) or die("Koneksi Gagal" . mysqli_connect_error());
        if (mysqli_connect_errno()) {
            exit;
        }
        return $conn;
    }
}

function get_karyawan($id = "")
{
    global $koneksi;
    $query = "SELECT * FROM tb_karyawan";
    if (!empty($id)) {
        $query .= " WHERE id = $id LIMIT 1";
    }
    $respon = array();
    $result = mysqli_query($koneksi, $query);
    $i = 0;
    if ($result) {
        $respon['kode'] = 1;
        $respon['status'] = "Sukses";
        while ($row = mysqli_fetch_array($result)) {
            $respon['data'][$i]['ID Karyawan'] = $row['id'];
            $respon['data'][$i]['Nama'] = $row['nama'];
            $respon['data'][$i]['Email'] = $row['email'];
            $respon['data'][$i]['Jabatan'] = $row['jabatan'];
            $respon['data'][$i]['Gaji'] = $row['gaji'];
            $i++;
        }
    } else {
        $respon['kode'] = 0;
        $respon['status'] = "Gagal";
    }

    header('Content-type: application/json');
    echo json_encode($respon);
}

function insert_karyawan()
{
    global $koneksi;
    $data = json_decode(file_get_contents('php://input'), true);
    $nama = $data['nama'];
    $email = $data['email'];
    $jabatan = $data['jabatan'];
    $gaji = $data['gaji'];

    $query = "INSERT INTO tb_karyawan VALUES ('', '$nama', '$email', '$jabatan', '$gaji' )";

    if (mysqli_query($koneksi, $query)) {
        $respon  = [
            'kode' => 1,
            'status' => "Data Karyawan Berhasil Ditambahkan"
        ];
    } else {
        $respon = [
            'kode' => 0,
            'status' => "Data Karyawan Gagal Ditambahkan"
        ];
    }
    header('Content-Type: application/json');
    echo json_encode($respon);
}


function update_karyawan($id)
{
    global $koneksi;
    $data = json_decode(file_get_contents('php://input'), true);
    $nama = $data['nama'];
    $email = $data['email'];
    $jabatan = $data['jabatan'];
    $gaji = $data['gaji'];

    $query = "UPDATE tb_karyawan SET nama = '$nama', email = '$email', 
            jabatan= '$jabatan', gaji= '$gaji' WHERE id = $id";

    if (mysqli_query($koneksi, $query)) {
        $respon = [
            'kode' => 1,
            'status' => "Data Karyawan Berhasil Diupdate"
        ];
    } else {
        $respon = [
            'kode' => 0,
            'status' => "Data Karyawan Gagal Diupdate"
        ];
    }
    header('Content-Type: application/json');
    echo json_encode($respon);
}

function delete_karyawan($id)
{
    global $koneksi;

    $query = "DELETE FROM tb_karyawan WHERE id = $id";

    if (mysqli_query($koneksi, $query)) {
        $respon = [
            'kode' => 1,
            'status' => "Data Karyawan Berhasil Dihapus"
        ];
    } else {
        $respon = [
            'kode' => 0,
            'status' => "Data Karyawan Gagal Dihapus"
        ];
    }
    header('Content-Type: application/json');
    echo json_encode($respon);
}
