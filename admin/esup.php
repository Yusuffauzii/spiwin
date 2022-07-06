<?php
include('database.php');
$db = new database();
$kd_supplier = $_GET['id'];
if (! is_null($kd_supplier)) {
  // code...
  $data_supplier = $db->get_by_supplier($kd_supplier);
} else {
  header('location:stampil.php');
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

	<title>Input Data Supplier | Spiwin</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
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
					<li class="sidebar-item active">
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
					<li class="sidebar-item ">
						<a class="sidebar-link" href="ftran.php">
             <i class="align-middle me-2" data-feather="dollar-sign"></i> <span class="align-middle">Input Data Pemesanan</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ttampil.php">
            <i class="align-middle me-2" data-feather="book"></i> <span class="align-middle">Data Transaksi</span>
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

					<li class="sidebar-item">
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
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Admin</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="data.php?action=logout">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<form action="data.php?action=update3" method="post"> 
					<h1 class="h3 mb-3">Data Supplier</h1>


					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Input Data Supplier</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" name="kd" value="<?php echo $data_supplier['kd_sp']; ?>" placeholder="Kode Supplier">
								</div>
								<div class="card-body">
									<input type="text" class="form-control" name="nm"  value="<?php echo $data_supplier['nm_sp']; ?>" placeholder="Nama Supplier">
								</div>
								<div class="card-body">
									<input type="text" class="form-control" name="no"  value="<?php echo $data_supplier['no_tlp']; ?>" placeholder="No Telepon">
								</div>
								<div class="card-body">
									<input type="text" class="form-control" name="al"  value="<?php echo $data_supplier['alamat']; ?>" placeholder="Alamat">
								</div>
								<div class="card-body">
									<button class="btn btn-success">Simpan</button>
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