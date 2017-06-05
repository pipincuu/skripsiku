<html>
<body>

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Membership
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="Dashboard">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Membership
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="col-md-12">
  				<div class="panel panel-default">


  						  <div class="panel-heading">
  								<h3 class="panel-title text-center">Registrasi Anggota Perpustakaan</h3>
  						  </div>

  					  <div class="panel-body">
  			<div class="row">

  					<form action="" method="POST">

  						<div class="col-md-6">
  							<div class="form-group">
  				    			<label for="nim">Nim</label>
  				   				<input type="text" name="nim" class="form-control" id="nim" placeholder="Masukkan Nim Mahasiswa"
                    value="<?= $hasil['nim'] ?>">
  				 			 </div>

  				  			<div class="form-group">
  				    			<label for="nama_mahasiswa">Nama Mahasiswa</label>
  				    			<input type="text" name="nama_mahasiswa"  class="form-control" id="nama_mahasiswa" placeholder="Masukkan Nama Mahasiswa"
                    value="<?= $hasil['nama_mahasiswa'] ?>">
  				  			</div>
  				  			<div class="form-group">
  				    			<label for="jurusan">Jurusan</label>
  				   				<input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Masukkan Jurusan Mahasiswa"
                    value="<?= $hasil['jurusan'] ?>">

  				 			 </div>
                 <div class="form-group">
                   <label for="program_studi">Program Studi</label>
                   <input type="text" name="program_studi" class="form-control" id="program_studi" placeholder="Masukkan Program Studi Mahasiswa"
                   value="<?= $hasil['program_studi'] ?>">
                </div>
  				 			 <div class="form-group">
  				    			<label for="tanggal_lahir">Tanggal Lahir</label>
  				   				<div class="form-group input-append date" id="tanggal_lahir" data-date-format="yyyy-mm-dd" >
  								  <input class="span2 form-control" name="tanggal_lahir" size="3" type="text" value="<?= $hasil['tanggal_lahir'] ?>">
  								 <!--  <di class="add-on input-group-addon"><i class="fa fa-calendar"></i></span> -->
  								</div>
  				 			 </div>
  				 		</div>

  						<div class="col-md-6">
                <div class="form-group">
                   <label for="tanggal_registrasi">Tanggal Registrasi</label>
                   <div class="form-group input-append date" id="tanggal_registrasi" data-date-format="yyyy-mm-dd" >
                   <input class="span2 form-control" name="tanggal_registrasi" size="3" type="text" value="<?= $hasil['tanggal_registrasi'] ?>">
                  <!--  <di class="add-on input-group-addon"><i class="fa fa-calendar"></i></span> -->
                  <div class="form-group">
   				    			<label for="tanggal_expired">Tanggal Expired</label>
   				   				<div class="form-group input-append date" id="tanggal_expired" data-date-format="yyyy-mm-dd" >
   								  <input class="span2 form-control" name="tanggal_expired" size="3" type="text" value="<?= $hasil['tanggal_expired'] ?>">
   								 <!--  <di class="add-on input-group-addon"><i class="fa fa-calendar"></i></span> -->
  				 			 <div class="form-group">
  				    			<label for="jenis_kelamin">Jenis Kelamin</label>
  				   				<input type="text" name="jenis_kelamin"  class="form-control" id="jenis_kelamin" placeholder="Masukkan Jenis Kelamin Anggota"
                    value="<?= $hasil['jenis_kelamin'] ?>">
  				 			 </div>
  							 <div class="form-group">
  				    			<label for="alamat">Alamat </label>
  				   				<input type="text" name="alamat"  class="form-control" id="alamat" placeholder="Masukkan Alamat Anggota"
                    value="<?= $hasil['alamat'] ?>">
  				 			 </div>
  							 <div class="form-group">
  				    			<label for="no_telepon">No. Telepon</label>
  				   				<input type="text" name="no_telepon"  class="form-control" id="no_telepon" placeholder="Masukkan No.Telepon Anggota"
                    value="<?= $hasil['no_telepon'] ?>">
  				 			 </div>

  				 			 <input type="submit" class="btn btn-primary" name="submit" value="Save">
  						</div>


                          </form>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

</body>
</html>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>res/css/bootsrap.min.css"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>res/css/bootsrap.css"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>res/css/datepicker.css"></script>
<script src="<?= base_url() ?>res/css/datepicker.css"></script>
<script src="<?= base_url('res/js/jquery.js') ?>"</script>
<script src="<?= base_url('res/js/bootstrap.min.js') ?>"</script>
<script src="<?= base_url() ?>res/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
        $(function () {
        $('.span2').datepicker({
        	format: 'yyyy-mm-dd'
        });
    });
</script>
