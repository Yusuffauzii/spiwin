<?php
include('database.php');
$koneksi = new database();

$action = $_GET['action'];
 if ($action == "login") {
	session_start();
	$koneksi->cek_data($_POST['user'],$_POST['pass']);
} elseif ($action == "logout") {
	session_start();
   session_destroy();
   header('location:index.php');

} elseif ($action == "logins") {
	session_start();
	$koneksi->cek($_POST['nim']);
}