<!DOCTYPE html>
<html>
<head>
	<title>Form Peminjaman Gedung dan Ruangan</title>
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
								<h3 class="panel-title text-center">Form Peminjaman Gedung dan Ruangan Politeknik Negeri Malang</h3>
						  </div>

					  <div class="panel-body">

					<form action="" method="POST">
							<!-- <div class="form-group">
				    			<label for="iduser">ID USER</label>
				   				<input type="text" name="Id_user" class="form-control" id="noid" placeholder="">
				 			 </div> -->

				 			<div class="form-group">
    							  <label for="gedung">Gedung</label>
  								<input type="text" name="gedung" class="form-control" id="gedung" placeholder="">
    						</div>

				  			<div class="form-group">
				    			<label for="nama">Ruangan</label>
				    			<input type="text" name="ruangan" class="form-control" id="ruangan" placeholder="">
				  			</div>

				  			<label for="nama">Tanggal Peminjaman</label>
				  			<div class="form-inline form-group" role="form">

				  				<div class="form-group">
				  					<select name="htanggal" class="form-control">
				  						<option value="">-Tanggal-</option>
				  						<?php
				  							for($i=31;$i>=1;$i--){
				  								echo "<option value='$i'>$i</option>";
				  							}
				  						?>
				  					</select>
				  				</div>

				  				<div class="form-group">
				  					<select name="hbulan" class="form-control">
				  						<option value="">-Bulan-</option>
				  						<?php
				  							for($i=1;$i<=12;$i++){
				  								echo "<option value='$i'>$i</option>";
				  							}
				  						?>
				  					</select>
				  				</div>

				  				<div class="form-group">
				  					<select name="htanggal" class="form-control">
				  						<option value="">-Tahun-</option>
				  						<?php
				  							for($i=1960;$i<=2016;$i++){
				  								echo "<option value='$i'>$i</option>";
				  							}
				  						?>
				  					</select>
				  				</div>

				  			</div>

				  			<label for="nama">Tanggal Pengembalian</label>
				  			<div class="form-inline form-group" role="form">

				  			<div class="form-group">
				  					<select name="htanggal" class="form-control">
				  						<option value="">-Tanggal-</option>
				  						<?php
				  							for($i=31;$i>=1;$i--){
				  								echo "<option value='$i'>$i</option>";
				  							}
				  						?>
				  					</select>
				  				</div>

				  				<div class="form-group">
				  					<select name="hbulan" class="form-control">
				  						<option value="">-Bulan-</option>
				  						<?php
				  							for($i=1;$i<=12;$i++){
				  								echo "<option value='$i'>$i</option>";
				  							}
				  						?>
				  					</select>
				  				</div>

				  				<div class="form-group">
				  					<select name="htanggal" class="form-control">
				  						<option value="">-Tahun-</option>
				  						<?php
				  							for($i=1960;$i<=2016;$i++){
				  								echo "<option value='$i'>$i</option>";
				  							}
				  						?>
				  					</select>
				  				</div>
				  			</div>

				  			<div class="form-group">
				    			<label for="asal">Nama Kegiatan</label>
				   				<input type="textbox" name="nama_kegiatan" class="form-control" id="nama_kegiatan" placeholder="">
							</div>


							<div class="form-group">
				    			<label for="asal">Detail Kegiatan</label>

				   				<textarea rows="4" cols="50" input type="text" name="detail_kegiatan" class="form-control" id="detail_kegiatan" placeholder="">
				   				</textarea>
							</div>

							 <div class="form-group">

				 			 <input type="submit" class="btn btn-lg btn-primary" name="ok" value="Save">
					</form>

				</div>

		</div>
	</div>


</body>
</html>
