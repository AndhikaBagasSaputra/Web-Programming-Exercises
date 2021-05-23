<?php
require 'function.php';

$db = new koneksiDB();
$koneksi = $db->getKoneksi();
$request = $_SERVER['REQUEST_METHOD'];
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segment = explode('/', $uri_path);
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);

switch ($request) {
    case 'GET':
        if (!empty($uri_segment[4])) {
            $nim = $uri_segment[4];
            get_mahasiswa($nim);
        } else {
            get_mahasiswa();
        }
        break;

        // case 'POST':
        //     insert_mahasiswa();
        //     break;

        // case 'PUT':
        //     $nim = intval($uri_segment[3]);
        //     update_mahasiswa($nim);
        //     break;

        // case 'DELETE':
        //     $nim = intval($uri_segment[3]);
        //     delete_mahasiswa($nim);
        //     break;

    default:
        header("HTTP/1.0 405 METHOD TIDAK TERDAFTAR");
        break;
}
