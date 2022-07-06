<?php
include 'database.php';
$db = new database();
$kd_tran = $_GET['id'];
if (! is_null($kd_tran)) {
  // code...
  $data_tran = $db->get_by_tran($kd_tran);
} else {
  header('location:stampil.php');
}
$kd_barang = $data_tran['kd_brg'];
if (! is_null($kd_barang)) {
  // code...
  $data_barang = $db->get_by_barang($kd_barang);
} else {
  header('location:btampil.php');
}
$kd_pembeli = $data_tran['kd_pbl'];
if (! is_null($kd_pembeli)) {
  // code...
  $data_pembeli = $db->get_by_pembeli($kd_pembeli);
} else {
  header('location:ptampil.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title>Input Data Transaksi | Spiwin</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.php">
          <span class="align-middle">Spiwin</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

						<li class="sidebar-item">
						<a class="sidebar-link" href="index.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
        </li>

					<li class="sidebar-header">
						Barang
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="fbar.php">
             <i class="align-middle me-2" data-feather="upload"></i> <span class="align-middle">Input Data Barang</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="btampil.php">
            <i class="align-middle me-2" data-feather="database"></i> <span class="align-middle">Data Barang</span>
            </a>
					</li>
					<li class="sidebar-header">
						Pembeli
					</li>
					<li class="sidebar-item ">
						<a class="sidebar-link" href="fpem.php">
             <i class="align-middle me-2" data-feather="user-plus"></i> <span class="align-middle">Input Data Pembeli</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ptampil.php">
            <i class="align-middle me-2" data-feather="user"></i> <span class="align-middle">Data Pembeli</span>
            </a>
					</li>
					<li class="sidebar-header">
						Supplier
					</li>
					<li class="sidebar-item ">
						<a class="sidebar-link" href="fsup.php">
             <i class="align-middle me-2" data-feather="folder-plus"></i> <span class="align-middle">Input Data Supplier</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="stampil.php">
            <i class="align-middle me-2" data-feather="folder"></i> <span class="align-middle">Data Supplier</span>
            </a>
					</li>
						<li class="sidebar-header">
						Pemesanan
					</li>
					<li class="sidebar-item active">
						<a class="sidebar-link" href="ftran.php">
             <i class="align-middle me-2" data-feather="dollar-sign"></i> <span class="align-middle">Input Data Pemesanan</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ttampil.php">
            <i class="align-middle me-2" data-feather="book"></i> <span class="align-middle">Data Pemesanan</span>
            </a>
					</li>
					<li class="sidebar-header">
						Pembayaran
					</li>
					<li class="sidebar-item ">
						<a class="sidebar-link" href="fbay.php">
             <i class="align-middle me-2" data-feather="dollar-sign"></i> <span class="align-middle">Input Data Pembayaran</span>
            </a>
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="ytampil.php">
            <i class="align-middle me-2" data-feather="book"></i> <span class="align-middle">Data Pembayaran</span>
            </a>
					</li>
				</ul>

			
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<form action="data.php?action=ad6" method="post"> 
					<h1 class="h3 mb-3">Data Pembayaran</h1>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Pembayaran</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" name="kt" placeholder="Kode Pembayaran">
								</div> 
								<div class="card-body">
									<input type="text" class="form-control" name="kti" value="<?php echo $data_tran['kd_tr']; ?>" placeholder="Kode Transaksi">
								</div> 
								<div class="card-body">
									<select class="form-control" name="kb">
			<option value="<?php echo $data_barang['kd_brg']; ?>" ><?php echo $data_barang['nm_brg']; ?></option>
                       
									</select>
								</div>
								<div class="card-body">
									<select class="form-control" name="kp">
			<option value="<?php echo $data_pembeli['kd_pbl']; ?>" ><?php echo $data_pembeli['nm_pbl']; ?></option>
									</select>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" name="harb" value="<?php echo $data_barang['hrgb']; ?>" placeholder="Harga Jual">
								</div>
								<div class="card-body">
									<input type="text" class="form-control" name="tb" placeholder="Total Bayar">
								</div>
								<div class="card-body">
									<button class="btn btn-success">Next</button>
								</div>
							</div>
						</div>
					</div>
					</form>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>