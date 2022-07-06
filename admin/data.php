<?php
include('database.php');
$koneksi = new database();

$action = $_GET['action'];
if ($action == "add1") {
	$koneksi->tambah_data_barang($_POST['kd'],$_POST['nm'],$_POST['ns'],$_POST['qty'],$_POST['harga'],$_POST['harb']);
	echo "alert(Data Berhasil Masuk)";
	header('location:btampil.php');
} elseif ($action == "add2") {
	$koneksi->tambah_data_pembeli($_POST['kd'],$_POST['nm'],$_POST['no'],$_POST['al']);
	header('location:ptampil.php');
}elseif ($action == "add3") {
	$koneksi->tambah_data_supplier($_POST['kd'],$_POST['nm'],$_POST['no'],$_POST['al']);
	header('location:stampil.php');
}elseif ($action == "ad4") {
	$tz = 'Asia/Jakarta';
	$dt = new DateTime("now", new DateTimeZone($tz));
	$timestamp = $dt->format('Y-m-d G:i:s');
	$koneksi->tambah_data_tran($_POST['kt'],$_POST['kb'],$_POST['kp'],$timestamp);
	header('location:ttampil.php');
}elseif ($action == "ad5") {
$bayar = $_POST['tb'];
$harga = $_POST['harb'];
$kembali = $bayar - $harga;
	$tz = 'Asia/Jakarta';
	$dt = new DateTime("now", new DateTimeZone($tz));
	$timestamp = $dt->format('Y-m-d G:i:s');
	$koneksi->tambah_data_pem($_POST['kt'],$_POST['kb'],$_POST['kp'],$_POST['tb'],$kembali,$timestamp);
	header('location:ytampil.php');
}elseif ($action == "ad6") {
$bayar = $_POST['tb'];
$harga = $_POST['harb'];
$kembali = $bayar - $harga;
	$tz = 'Asia/Jakarta';
	$dt = new DateTime("now", new DateTimeZone($tz));
	$timestamp = $dt->format('Y-m-d G:i:s');
	$koneksi->tambah_data_pem($_POST['kt'],$_POST['kb'],$_POST['kp'],$_POST['tb'],$kembali,$timestamp);
	$kd_tran = $_POST['kti'];
	$koneksi->delete_data_tran($kd_tran);
	header('location:ytampil.php');
}elseif ($action == "delete1") {
	$kd_barang = $_GET['id'];
	$koneksi->delete_data_barang($kd_barang);
	header('location:btampil.php');
}elseif ($action == "delete2") {
	$kd_pembeli = $_GET['id'];
	$koneksi->delete_data_pembeli($kd_pembeli);
	header('location:ptampil.php');
}elseif ($action == "delete3") {
	$kd_supplier = $_GET['id'];
	$koneksi->delete_data_supplier($kd_supplier);
	header('location:stampil.php');
}elseif ($action == "delete4") {
	$kd_pem = $_GET['id'];
	$koneksi->delete_data_pem($kd_pem);
	header('location:ytampil.php');
}elseif ($action == "delete5") {
	$kd_tran = $_GET['id'];
	$koneksi->delete_data_tran($kd_tran);
	header('location:ttampil.php');
} elseif ($action == "update1") {
	$koneksi->update_data_barang($_POST['kd'],$_POST['nm'],$_POST['ns'],$_POST['qty'],$_POST['harga'],$_POST['harb']);
	header('location:btampil.php');
} elseif ($action == "update2") {
	$koneksi->update_data_pembeli($_POST['kd'],$_POST['nm'],$_POST['no'],$_POST['al']);
	header('location:ptampil.php');
} elseif ($action == "update3") {
	$koneksi->update_data_supplier($_POST['kd'],$_POST['nm'],$_POST['no'],$_POST['al']);
	header('location:stampil.php');
}elseif ($action == "update4") {
	$tz = 'Asia/Jakarta';
	$dt = new DateTime("now", new DateTimeZone($tz));
	$timestamp = $dt->format('Y-m-d G:i:s');
	$koneksi->update_data_pem($_POST['kt'],$timestamp,$_POST['tb'],$_POST['kp']);
	header('location:ytampil.php');
}elseif ($action == "update5") {
	$tz = 'Asia/Jakarta';
	$dt = new DateTime("now", new DateTimeZone($tz));
	$timestamp = $dt->format('Y-m-d G:i:s');
	$koneksi->update_data_tran($_POST['kt'],$_POST['kb'],$_POST['kp'],$timestamp);
	header('location:ttampil.php');
} elseif ($action == "login") {
	$koneksi->cek_data($_POST['username'],$_POST['password']);
} elseif ($action == "logout") {
	session_start();
   session_destroy();
   header('location:../login.php');

}