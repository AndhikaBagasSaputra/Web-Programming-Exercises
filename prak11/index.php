<?php

require 'function.php';
$db = new koneksiDB();
$koneksi = $db->getKoneksi();
$request = $_SERVER['REQUEST_METHOD'];
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segment = explode('/', $uri_path);
$input = array_pop($uri_segment);

switch ($request) {
	case 'GET':
		if (!empty($input)) {
			$nim = (string)($input);
			get_mahasiswa($nim);
		} else {
			get_mahasiswa();
		}
		break;

	case 'POST':
		insert_mahasiswa();
		break;

	case 'PUT':
		$nim = (string)($input);
		update_mahasiswa($nim);
		break;

	case 'DELETE':
		$nim = (string)($input);
		delete_mahasiswa($nim);
		break;
	default:
		header("HTTP/1.0 405 Method Tidak Terdaftar");
		break;
}
