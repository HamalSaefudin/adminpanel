
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SB Admin - Dashboard</title>

	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

	<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

	<link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">

	<link href="<?php echo base_url('css/sb-admin.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

		<a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

		<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
			<i class="fas fa-bars"></i>
		</button>

		<!-- Navbar Search -->
		<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

		<!-- Navbar -->
		<ul class="navbar-nav ml-auto ml-md-0">
		  <li class="nav-item dropdown no-arrow">
				<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
				 aria-expanded="false">
					<i class="fas fa-user-circle fa-fw"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<a class="dropdown-item" href="#">Settings</a>
					<a class="dropdown-item" href="#">Activity Log</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
				</div>
			</li>
		</ul>

	</nav>

	<div id="wrapper">
		<ul class="sidebar navbar-nav">
		<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url() ?>admin/index/">
					<i class="fas fa-fw fa-list"></i>
					<span>List Admin</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="charts.html">
					<i class="fas fa-fw fa-database"></i>
					<span> News</span></a>
			</li>
		</ul>

		<div id="content-wrapper">

			<div class="container-fluid">

				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Dashboard</a>
					</li>
					<li class="breadcrumb-item active">Admin List</li>
				</ol>
				<div class="container">
		<?php echo $this->session->flashdata('notif') ?>
		<a href="<?php echo base_url() ?>admin/tambah/" class="btn btn-md btn-success">Tambah Admin</a>
		<hr>
		<!-- table -->
		<div class="table-responsive">
			<table id="table" class="table table-striped table-bordered table-hover">
			    <thead>
			      <tr>
			        <th>No.</th>
			        <th>No Induk</th>
			        <th>Nama Admin</th>
			        <th>Tanggal Terbit</th>
			        <th>Pengarang</th>
			        <th>Options</th>
			      </tr>
			    </thead>
			    <tbody>

			    <?php
			    	$no = 1; 
			    	foreach($data_admin as $hasil){ 
			    ?>
			      
			      <tr>
			        <td><?php echo $no++ ?></td>
			        <td><?php echo $hasil->no_induk ?></td>
			        <td><?php echo $hasil->nama_admin ?></td>
			        <td><?php echo $hasil->tanggal_terbit ?></td>
			        <td><?php echo $hasil->pengarang ?></td>
			        <td>
			        	<a href="<?php echo base_url() ?>admin/edit/<?php echo $hasil->id_admin ?>" class="btn btn-sm btn-success">Edit</a>
			        	<a href="<?php echo base_url() ?>admin/hapus/<?php echo $hasil->id_admin ?>" class="btn btn-sm btn-danger">Hapus</a>
			        </td>
			      </tr>

			    <?php } ?>

			    </tbody>
			  </table>
		</div>

		</div>
			</div>

			<footer class="sticky-footer">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright © Your Website 2018</span>
					</div>
				</div>
			</footer>
	</div>
	</div>
	
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="<?php echo base_url() ?>index.php/dashboard/logout">Logout</a>
				</div>
			</div>
		</div>
	</div>

	
	<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

	<script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
	<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js') ?>"></script>
	<script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>
	<script src="<?php echo base_url('js/demo/datatables-demo.js') ?>"></script>
	<script src="<?php echo base_url('js/demo/chart-area-demo.js') ?>"></script>
<script>
	$('#table').DataTable( {
    autoFill: true
} );
</script>

</body>

</html>
	
