<!DOCTYPE html>
<html>
<head>
	<title>OPAC POLINEMA</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>res/css/bootstrap.css">
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
			<li><a href="Home"><i class="fa fa-home"></i> Beranda</a></li>
			<li><a href="Info"><i class="fa fa-info-circle"></i> Info</a></li>
			<li><a href="Help"><i class="fa fa-question-circle"></i> Bantuan</a></li>
			<li><a href="Signin"><i class="fa fa-users"></i> Area Anggota</a></li>
			<li><a href="Admin"><i class="fa fa-lock"></i> Pustakawan</a></li>
		</ul>


		<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>

	</div>
</body>

</html>
