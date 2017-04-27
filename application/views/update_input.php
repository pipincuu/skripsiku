<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data Mahasiswa </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>res/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>res/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>res/font-awesome/css/font-awesome.css">

	<script type="text/javascript" src="<?php echo base_url() ?>res/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>res/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>bs/js/bootstrap-datepicker.js"></script>
</head>
<body>
<div class="container">
		<div class="row">



			<div class="col-md-12">
				<div class="panel-biruw panel-default">


						  <div class="panel-heading">
								<h3 class="panel-title text-center">Form Input Data Mahasiswa Tingkat Akhir Jurusan Teknologi Informasi</h3>
						  </div>

					  <div class="panel-body">

					<form action="" method="POST">
							<!-- <div class="form-group">
				    			<label for="iduser">ID USER</label>
				   				<input type="text" name="Id_user" class="form-control" id="noid" placeholder="">
				 			 </div> -->

				 			<div class="form-group">
    							  <label for="nim">Nim</label>
  								<input type="text" name="nim" class="form-control" id="nim" placeholder="Masukkan Nim Mahasiswa" value="<?= $hasil['nim'] ?>">
    						</div>

				  			<div class="form-group">
				    			<label for="nama_mahasiswa">Nama</label>
				    			<input type="text" name="nama_mahasiswa" class="form-control" id="nama_mahasiswa" placeholder="Masukkan Nama Mahasiswa"
									value="<?= $hasil['nama_mahasiswa'] ?>">
				  			</div>


				  			<div class="form-group">
				    			<label for="program_studi">Program Studi</label>
				   				<input type="textbox" name="program_studi" class="form-control" id="program_studi" placeholder="Masukkan Program Studi Mahasiswa"
									value="<?= $hasil['program_studi'] ?>">
							</div>


							 <div class="form-group">

				 			 <input type="submit" name="submit" class="btn btn-lg btn-primary" name="ok" value="Save">
					</form>

				</div>

		</div>
	</div>


</body>
</html>
