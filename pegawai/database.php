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
	function hitung_tran(){
		$query = mysqli_query($this->koneksi, "select transaksi.kd_tr, barang.nm_brg,barang.hrg, pembeli.nm_pbl, transaksi.tgl from transaksi join
			barang on transaksi.kd_brg = barang.kd_brg join pembeli on transaksi.kd_pbl = pembeli.kd_pbl");

		$data = array();
		while (($row = mysqli_fetch_array($query)) != null) {
			$data[] = $row;
		}
		$cont = count($data);
		echo $cont;
	}
	function hitung_pemn(){
		$query = mysqli_query($this->koneksi, "select * from pembayaran");
		$data = array();
		while (($row = mysqli_fetch_array($query)) != null) {
			$data[] = $row;
		}
		$cont = count($data);
		echo $cont;
	}
	function hitung_pem(){
		$query = mysqli_query($this->koneksi, "select * from pembeli");
		$data = array();
		while (($row = mysqli_fetch_array($query)) != null) {
			$data[] = $row;
		}
		$cont = count($data);
		echo $cont;
	}
	function hitung_barang(){
		$query = mysqli_query($this->koneksi, "select * from barang");
		$data = array();
		while (($row = mysqli_fetch_array($query)) != null) {
			$data[] = $row;
		}
		$cont = count($data);
		echo $cont;
	}


	function tampil_data_barang(){
		$data = mysqli_query($this->koneksi, "select barang.kd_brg, barang.nm_brg,suplier.nm_sp,barang.qty,barang.hrg,barang.hrgb from barang
			join suplier on barang.kd_sp = suplier.kd_sp");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	function tampil_data_pembeli(){
		$data = mysqli_query($this->koneksi, "select * from pembeli");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tampil_data_supplier(){
		$data = mysqli_query($this->koneksi, "select * from suplier");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tampil_data_tran(){
		$data = mysqli_query($this->koneksi, "select transaksi.kd_tr, barang.nm_brg,barang.hrg, pembeli.nm_pbl, transaksi.tgl from transaksi join
			barang on transaksi.kd_brg = barang.kd_brg join pembeli on transaksi.kd_pbl = pembeli.kd_pbl");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}


	function tampil_data_pem(){
		$data = mysqli_query($this->koneksi, "select pembayaran.kd_pmb,barang.nm_brg,barang.hrgb,  pembeli.nm_pbl,pembayaran.total,pembayaran.kembalian,pembayaran.tgl from pembayaran join barang on pembayaran.kd_brg = barang.kd_brg join pembeli on pembayaran.kd_pbl = pembeli.kd_pbl ");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
function waktu(){
	
    date_default_timezone_set("Asia/Jakarta");
    $jam = date("H:i:s");
    echo "   Pukul : <b> " . $jam . " " ." </b> ";
    $a = date ("H");
    if (($a>=6) && ($a<=11)) {
        echo " <b>, Selamat Pagi !! </b>";
    }else if(($a>=11) && ($a<=15)){
        echo " , Selamat  Siang !! ";
    }elseif(($a>15) && ($a<=18)){
        echo ", Selamat Sore !!";
    }else{
        echo ", <b> Selamat Malam </b>";
    }

}
function tanggal(){
	 $tanggal = mktime(date('m'), date("d"), date('Y'));
    echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";
}
	function tambah_data_barang($kd,$nama,$supp,$qty,$harga,$hargab){
	 	mysqli_query($this->koneksi, "insert into barang values('$kd','$nama','$supp','$qty','$harga','$hargab')");
	}
    function tambah_data_pembeli($kd,$nama,$no,$alamat){
		mysqli_query($this->koneksi, "insert into pembeli values('$kd','$nama','$no','$alamat')");
	}
	 function tambah_data_supplier($kd,$nama,$no,$alamat){
		mysqli_query($this->koneksi, "insert into suplier values('$kd','$nama','$no','$alamat')");
	}
	 function tambah_data_tran($kd,$kb,$kp,$tgl){
		mysqli_query($this->koneksi, "insert into transaksi values('$kd','$kb','$kp','$tgl')");
	}
	 function tambah_data_pem($kd,$kb,$kp,$total,$kemb,$tgl){
		mysqli_query($this->koneksi, "insert into pembayaran values('$kd','$kb','$kp','$total','$kemb','$tgl')");
	}
	function get_by_barang($kd_barang){
		$query = mysqli_query($this->koneksi,"select * from barang where kd_brg='$kd_barang'");
		return $query->fetch_array();
	}
	function get_by_supplier($kd_supplier){
		$query = mysqli_query($this->koneksi,"select * from suplier where kd_sp='$kd_supplier'");
		return $query->fetch_array();
	}
	function get_by_pembeli($kd_pembeli){
		$query = mysqli_query($this->koneksi,"select * from pembeli where kd_pbl='$kd_pembeli'");
		return $query->fetch_array();
	}
	
function get_by_pem($kd_pem){
		$query = mysqli_query($this->koneksi,"select * from pembayaran where kd_pmb='$kd_pem'");
		return $query->fetch_array();
	}
	function get_by_struk($kd_pem){
		$query = mysqli_query($this->koneksi,"select pembayaran.kd_pmb,barang.nm_brg,barang.hrgb,  pembeli.nm_pbl,pembayaran.total,pembayaran.kembalian,pembayaran.tgl from pembayaran join barang on pembayaran.kd_brg = barang.kd_brg join pembeli on pembayaran.kd_pbl = pembeli.kd_pbl where kd_pmb='$kd_pem'");
		return $query->fetch_array();
	}
	function get_by_tran($kd_tran){
		$query = mysqli_query($this->koneksi,"select * from transaksi where kd_tr='$kd_tran'");
		return $query->fetch_array();
	}
	function update_data_barang($kd,$nama,$supp,$qty,$harga,$hrgb){
        $query = mysqli_query($this->koneksi,"update barang set nm_brg ='$nama', kd_sp ='$supp', qty ='$qty', hrg='$harga',hrgb='$hrgb' where kd_brg ='$kd'");
	}
	function update_data_pembeli($kd,$nama,$no,$alamat){
        $query = mysqli_query($this->koneksi,"update pembeli set nm_pbl ='$nama', no_hp ='$no', alamat ='$alamat'
        where kd_pbl ='$kd'");
	}
	function update_data_supplier($kd,$nama,$no,$alamat){
        $query = mysqli_query($this->koneksi,"update suplier set nm_sp ='$nama', no_tlp ='$no', alamat ='$alamat'
        where kd_sp ='$kd'");
	}
	function update_data_pem($kd,$tgl,$total,$kt){
        $query = mysqli_query($this->koneksi,"update pembayaran set tgl ='$tgl', total = '$total',
        kd_tr = '$kt' where kd_pmb ='$kd'");
	}
	function update_data_tran($kd,$kb,$kp,$tgl){
        $query = mysqli_query($this->koneksi,"update transaksi set kd_brg ='$kb', kd_pbl = '$kp',
        tgl = '$tgl' where kd_tr ='$kd'");
	}
	function delete_data_barang($kd_barang){
		$query = mysqli_query($this->koneksi,"delete from barang where kd_brg='$kd_barang'");
	}
		function delete_data_pembeli($kd_pembeli){
		$query = mysqli_query($this->koneksi,"delete from pembeli where kd_pbl='$kd_pembeli'");
	}
		function delete_data_supplier($kd_supplier){
		$query = mysqli_query($this->koneksi,"delete from suplier where kd_sp='$kd_supplier'");
	}
		function delete_data_pem($kd_pem){
		$query = mysqli_query($this->koneksi,"delete from pembayaran where kd_pmb='$kd_pem'");
	}
	function delete_data_tran($kd_tran){
		$query = mysqli_query($this->koneksi,"delete from transaksi where kd_tr='$kd_tran'");
	}
	function cek_data($username,$password){
		$pwd = md5($password);
		$query = mysqli_query($this->koneksi, "select * from user where username ='$username' and password ='$pwd'");
		$jum = mysqli_num_rows($query);
		if ($jum > 0) {
			header('location:tampil.php');
		} else{
			header('location:index.php');
		}
	}
}
?>