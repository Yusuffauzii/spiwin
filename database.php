<?php
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "spiwin";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		if (mysqli_connect_errno()) {
			echo "koneksi database Gagal :" . mysql_connect_error();
		}
	}

	
	function cek_data($username,$password){
		$query = mysqli_query($this->koneksi, "select * from user where usr ='$username' and pass ='$password'");
		$jum = mysqli_num_rows($query);
		if ($jum > 0) {
			$row = mysqli_fetch_array($query);
			$_SESSION['kd_usr'] = $row['kd_usr'];
			$_SESSION['usr'] = $row['usr'];
			$_SESSION['pass'] = $row['pass'];
			$_SESSION['level'] = $row['level'];
			if ($row['level']=="admin") {
			header('location:admin/index.php');
			}elseif ($row['level']=="pegawai") {
			header('location:pegawai/index.php');
			}
		} else{
			header('location:login.php');
		}
	}
	function cek($nim){
		$query = mysqli_query($this->koneksi, "select * from siswa where nim ='$nim'");
		$jum = mysqli_num_rows($query);
		if ($jum > 0) {
			$row = mysqli_fetch_array($query);
			$_SESSION['nim'] = $row['nim'];
			$_SESSION['nama'] = $row['nama'];
			$_SESSION['prodi'] = $row['prodi'];
			header('location:siswa/index.php');
		} else{
			header('location:login_siswa.php');
		}
	}
}
?>