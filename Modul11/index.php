<?php
require 'function.php';

$db = new koneksiDB();
$koneksi = $db->getKoneksi();
$request = $_SERVER['REQUEST_METHOD'];
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segment = explode('/', $uri_path);

switch ($request) {
    case 'GET':
        if (!empty($uri_segment[3])) {
            $id = intval($uri_segment[3]);
            get_karyawan($id);
        } else {
            get_karyawan();
        }
        break;

    case 'POST':
        insert_karyawan();
        break;

    case 'PUT':
        $id = intval($uri_segment[3]);
        update_karyawan($id);
        break;

    case 'DELETE':
        $id = intval($uri_segment[3]);
        delete_karyawan($id);
        break;

    default:
        header("HTTP/1.0 405 METHOD TIDAK TERDAFTAR");
        break;
}
