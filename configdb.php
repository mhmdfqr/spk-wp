<?php
@session_start();
$_SESSION['judul'] = 'SPK WP Pemilihan Rumah Makan';
$_SESSION['welcome'] = 'SISTEM PENGAMBIL KEPUTUSAN BERBASIS WEB DENGAN METODE WEIGHT PRODUCT';
$_SESSION['by'] = '';
$mysqli = new mysqli('localhost', 'root', '', 'spk-wp');
if ($mysqli->connect_errno) {
	echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
	exit();
}
?>