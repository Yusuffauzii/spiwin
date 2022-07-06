<?php
include('database.php');
$db = new database();
$kd_pembay = $_GET['id'];
if (! is_null($kd_pembay)) {
  // code...
  $data_pem = $db->get_by_struk($kd_pembay);
} else {
  header('location:stampil.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head> <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
  <meta name="author" content="AdminKit">
  <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

  <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

  <title>Struk | Spiwin</title>
 <style>
#tabel
{
font-size:15px;
border-collapse:collapse;
}
#tabel  td
{
padding-left:5px;
border: 1px solid black;
}
</style>
 
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
            	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
				<div class="head">
          <table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border = '0'>
<td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
<span style='font-size:12pt'><b>SPIWIN Store</b></span></br>
No Telepon : (025) 7822-55-655 </br>
Email : <span style="text-transform: none;">awd.com</br></span>
Tanggal Pembayaran : <?php echo $data_pem['tgl']; ?>
</td>
<td style='vertical-align:top' width='30%' align='left'>
<b><span style='font-size:12pt'>Struk</span></b></br>
Kode Pembayaran    : <?php echo $data_pem['kd_pmb'] ?></br>

</td>
</table>
<table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border = '0'>
<td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
Nama Pembeli : <?php echo $data_pem['nm_pbl']; ?> </br>
</td>
</table>
			
				</div>
              <table cellspacing='0' style='width:550px; font-size:8pt; font-family:calibri;  border-collapse: collapse;' border='1'>
                      <tr align='center'>		
                    <td width='30%'>Nama Barang</td>
<td width='20%'>Harga Barang</td>
<td width='17%'>Total Harga</td>
                    <tr>
                      <td><?php echo $data_pem['nm_brg']; ?></td>
                      <td>Rp.<?php echo number_format($data_pem['hrgb']); ?></td>
                        <td style='text-align:right'>Rp.<?php echo number_format($data_pem['hrgb']); ?></td>
                      
                    <tr>
            <td colspan = '2'><div style='text-align:right'>Total Yang Harus Di Bayar Adalah : </div></td>
            <td style='text-align:right'>Rp.<?php echo number_format($data_pem['hrgb']); ?></td>
            </tr>
            <tr>
            <td colspan = '2'><div style='text-align:right'>Cash : </div></td>
            <td style='text-align:right'>Rp.<?php echo number_format($data_pem['total']); ?></td>
            </tr>                
            <tr>
            <td colspan = '2'><div style='text-align:right'>Kembalian : </div></td><td style='text-align:right'>Rp.<?php echo number_format($data_pem['kembalian']); ?></td>
            </tr>             
			       </table>
             <br>
             <br>  
             <table style='width:650; font-size:7pt;' cellspacing='2'>
              <tr>
              <td align='center'>Diterima Oleh,<?php echo $data_pem['nm_pbl']; ?></br></br><u>(............)</u></td>
<td style='border:1px solid black; padding:5px; text-align:left; width:30%'></td>
<td align='center'>TTD,M.Wildan Alfarizi</br></br><u>(...........)</u></td>
</tr>
</table>
            </div>
        </div>
    </div>
</div>
<script src="../../assets/plugins/bootstrap/js/bootstrap.js"></script>
<!-- Bootstrap Core Css -->
<link href="../../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
<style type="text/css">
	.head{
		text-align: left;
		text-transform: uppercase;
		font-weight: bold;
		margin:20px 0;
	}
	h2,h3,p{
		margin: 0;
		padding: 0;
	}
	.ttd{
		float: right;
		margin: 20px;
	}
</style>			
   
        <script>
		window.print();
	    </script>
</body>
</html>