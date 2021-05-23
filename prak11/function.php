<?php
class koneksiDB
{
    function getKoneksi()
    {
        $host = "localhost";
        $username = "root";
        $pw = "";
        $db = "universitas";
        $conn = mysqli_connect($host, $username, $pw, $db) or die("Koneksi Gagal" . mysqli_connect_error());
        if (mysqli_connect_errno()) {
            exit;
        }
        return $conn;
    }
}
function get_mahasiswa($nim = "")
{
    global $koneksi;
    $query = "SELECT * FROM mahasiswa";
    if (!empty($nim)) {
        $query .= " WHERE nim = '" . $nim . "'";
    }
    $respon = array();
    $result = mysqli_query($koneksi, $query);
    $i = 0;
    if ($result) {
        $respon['kode'] = 1;
        $respon['status'] = "sukses";
        while ($row = mysqli_fetch_array($result)) {
            $respon['data'][$i]['nim'] = $row['nim'];
            $respon['data'][$i]['nama'] = $row['nama'];
            $respon['data'][$i]['angkatan'] = $row['angkatan'];
            $respon['data'][$i]['semester'] = $row['semester'];
            $respon['data'][$i]['ipk'] = $row['ipk'];
            $i++;
        }
    } else {
        $respon['kode'] = 0;
        $respon['status'] = "gagal";
    }
    header('Content-Type: application/json');
    echo json_encode($respon);
}

function insert_mahasiswa()
{
    global $koneksi;
    $data = json_decode(file_get_contents('php://input'), true);
    $nim = $data['nim'];
    $nama = $data['nama'];
    $angkatan = $data['angkatan'];
    $semester = $data['semester'];
    $ipk = $data['ipk'];

    $query = "INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$angkatan', '$semester', '$ipk' )";

    if (mysqli_query($koneksi, $query)) {
        $respon    = [
            'kode' => 1,
            'status' => 'Data Mahasiswa Berhasil Ditambah'
        ];
    } else {
        $respon = [
            'kode' => 0,
            'status' => 'Data Mahasiswa Gagal Ditambah'
        ];
    }
    header('Content-Type: application/json');
    echo json_encode($respon);
}

function update_mahasiswa($nim)
{
    global $koneksi;
    $data = json_decode(file_get_contents('php://input'), true);
    $nama = $data['nama'];
    $angkatan = $data['angkatan'];
    $semester = $data['semester'];
    $ipk = $data['ipk'];

    $query = "UPDATE mahasiswa SET nama = ' $nama', angkatan = ' $angkatan', semester = ' $semester', ipk = ' $ipk' WHERE nim = ' $nim '";

    if (mysqli_query($koneksi, $query)) {
        $respon    = [
            'kode' => 1,
            'status' => 'Data Mahasiswa Berhasil Diupdate'
        ];
    } else {
        $respon = [
            'kode' => 0,
            'status' => 'Data Mahasiswa Gagal Diupdate'
        ];
    }
    header('Content-Type: application/json');
    echo json_encode($respon);
}

function delete_mahasiswa($nim)
{
    global $koneksi;

    $query = "DELETE FROM mahasiswa WHERE nim = '" . $nim . "'";

    if (mysqli_query($koneksi, $query)) {
        $respon = [
            'kode' => 1,
            'status' => "Data mahasiswa Berhasil Dihapus"
        ];
    } else {
        $respon = [
            'kode' => 0,
            'status' => "Data mahasiswa Gagal Dihapus"
        ];
    }
    header('Content-Type: application/json');
    echo json_encode($respon);
}
