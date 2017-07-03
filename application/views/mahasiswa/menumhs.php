<!DOCTYPE html>
<html>
<head>
	<title>UPT. PERPUSTAKAAN POLITEKNIK NEGERI MALANG</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>res/css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>res/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>res/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>res/font-awesome/css/font-awesome.css">

	<script type="text/javascript" src="<?php echo base_url() ?>res/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>res/js/bootstrap.js"></script>

</head>
<body>

	<nav class="navbar navbar-default" role="navigation">
  <!-- <div class="container-fluid"> -->
    <div class="navbar-header">
      <a class="navbar-brand" href="Home">
        <!-- <img alt="Brand" src="logo.jpg"> -->
				<b>UPT PERPUSTAKAAN POLINEMA</b></a>
    <!-- </div> -->
  </div>
</nav>


<!-- <nav class="navbar navbar-default" role="navigation">
	Brand and toggle get grouped for better mobile display
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="home" img src="upt.jpg"></a>
	</div> -->

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li><a href="Mahasiswa"><i class="fa fa-home"></i> Beranda</a></li>
			<li class="dropdown">
          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          			<i class="fa fa-users"></i>
          			Area Anggota Perpustakaan<span class="caret"></span>
          		</a>
	          <ul class="dropdown-menu" role="menu">
								<li><a href="Dataanggota">Data Anggota</a></li>
	            	<li><a href="Datapinjam">Daftar Peminjaman Buku</a></li>
	            	<li><a href="History">History Peminjaman Buku</a></li>
	          </ul>
					</li>
		</ul>

		<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>

		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">User <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<hr>
					<!-- <li><a href="#">Login</a></li> -->
					<li><a href=""> <i class="fa fa-fw fa-sign-out"></i>Log out</a></li>
				</ul>
			</li>
		</ul>
	</div>
</body>

</html>
