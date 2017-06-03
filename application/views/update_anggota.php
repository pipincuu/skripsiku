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
  				    			<label for="Nim">Nim</label>
  				   				<input type="text" name="Nim_Mahasiswa" class="form-control" id="nim" placeholder="Masukkan Nim Mahasiswa"
                    value="<?= $hasil['nim'] ?>">
  				 			 </div>

  				  			<div class="form-group">
  				    			<label for="Nama">Nama Mahasiswa</label>
  				    			<input type="text" name="Nama_Mahasiswa"  class="form-control" id="nama" placeholder="Masukkan Nama Mahasiswa"
                    value="<?= $hasil['nama_mahasiswa'] ?>">
  				  			</div>
  				  			<div class="form-group">
  				    			<label for="Jurusan">Jurusan</label>
  				   				<input type="text" name="Jurusan_Anggota" class="form-control" id="jurusan" placeholder="Masukkan Jurusan Mahasiswa"
                    value="<?= $hasil['jurusan'] ?>">

  				 			 </div>
                 <div class="form-group">
                   <label for="Program_Studi">Program Studi</label>
                   <input type="text" name="Prodi_Anggota" class="form-control" id="programstudi" placeholder="Masukkan Program Studi Mahasiswa"
                   value="<?= $hasil['program_studi'] ?>">
                </div>
  				 			 <div class="form-group">
  				    			<label for="ttl">Tanggal Lahir</label>
  				   				<div class="form-group input-append date" id="dp1" data-date-format="yyyy-mm-dd" >
  								  <input class="span2 form-control" name="Tgl_Lahir" size="3" type="text" value="<?= $hasil['tanggal_lahir'] ?>">
  								 <!--  <di class="add-on input-group-addon"><i class="fa fa-calendar"></i></span> -->
  								</div>
  				 			 </div>
  				 		</div>

  						<div class="col-md-6">
                <div class="form-group">
                   <label for="tanggal_registrasi">Tanggal Registrasi</label>
                   <div class="form-group input-append date" id="dp1" data-date-format="yyyy-mm-dd" >
                   <input class="span2 form-control" name="Tgl_Registrasi" size="3" type="text" value="<?= $hasil['tanggal_registrasi'] ?>">
                  <!--  <di class="add-on input-group-addon"><i class="fa fa-calendar"></i></span> -->
                  <div class="form-group">
   				    			<label for="tanggal_expired">Tanggal Expired</label>
   				   				<div class="form-group input-append date" id="dp1" data-date-format="yyyy-mm-dd" >
   								  <input class="span2 form-control" name="Tgl_Expired" size="3" type="text" value="<?= $hasil['tanggal_expired'] ?>">
   								 <!--  <di class="add-on input-group-addon"><i class="fa fa-calendar"></i></span> -->
  				 			 <div class="form-group">
  				    			<label for="jk">Jenis Kelamin</label>
  				   				<input type="text" name="JK_Anggota"  class="form-control" id="jk" placeholder="Masukkan Jenis Kelamin Anggota"
                    value="<?= $hasil['jenis_kelamin'] ?>">
  				 			 </div>
  							 <div class="form-group">
  				    			<label for="alamat">Alamat </label>
  				   				<input type="text" name="Alamat"  class="form-control" id="alamat" placeholder="Masukkan Alamat Anggota"
                    value="<?= $hasil['alamat'] ?>">
  				 			 </div>
  							 <div class="form-group">
  				    			<label for="notelp">No. Telepon</label>
  				   				<input type="text" name="Notelp"  class="form-control" id="notelp" placeholder="Masukkan No.Telepon Anggota"
                    value="<?= $hasil['no_telepon'] ?>">
  				 			 </div>

  				 			 <input type="submit" class="btn btn-primary" name="ok" value="Save">
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
