<html>
<body>

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Sirkulasi
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="Dashboard">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Sirkulasi
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="col-md-12">
  				<div class="panel panel-default">


  						  <div class="panel-heading">
  								<h3 class="panel-title text-center">Transaksi Peminjaman Buku</h3>
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
  				    			<label for="tanggal_lahir">Tanggal Peminjaman</label>
  				   				<div class="form-group input-append date" id="tanggal_pinjam" data-date-format="yyyy-mm-dd" >
  								  <input class="span2 form-control" name="tanggal_pinjam" size="3" type="text" value="<?= $hasil['tanggal_pinjam'] ?>">
  								 <!--  <di class="add-on input-group-addon"><i class="fa fa-calendar"></i></span> -->
  								</div>
  				 			 </div>

                 <div class="form-group">
                   <label for="tanggal_lahir">Tanggal Kembali</label>
                   <div class="form-group input-append date" id="tanggal_kembali" data-date-format="yyyy-mm-dd" >
                   <input class="span2 form-control" name="tanggal_kembali" size="3" type="text" value="<?= $hasil['tanggal_kembali'] ?>">
                  <!--  <di class="add-on input-group-addon"><i class="fa fa-calendar"></i></span> -->
                 </div>
                </div>

                 <div class="form-group">
                   <label for="tanggal_diperbarui">Tanggal Perpanjangan</label>
                   <div class="form-group input-append date" id="tanggal_diperbarui" data-date-format="yyyy-mm-dd" >
                   <input class="span2 form-control" name="tanggal_diperbarui" size="3" type="text" value="<?= $hasil['tanggal_diperbarui'] ?>">
                  <!--  <di class="add-on input-group-addon"><i class="fa fa-calendar"></i></span> -->
                 </div>
                </div>

                 <div class="form-group">
                   <label for="tanggal_dikembalikan">Tanggal Dikembalikan</label>
                   <div class="form-group input-append date" id="tanggal_dikembalikan" data-date-format="yyyy-mm-dd" >
                   <input class="span2 form-control" name="tanggal_dikembalikan" size="3" type="text" value="<?= $hasil['tanggal_dikembalikan'] ?>">
                  <!--  <di class="add-on input-group-addon"><i class="fa fa-calendar"></i></span> -->
                 </div>
                </div>

                <div class="form-group">
  				    			<label for="status_peminjaman">Status Peminjaman</label>
  				   				<input type="text" name="status_peminjaman" class="form-control" id="status_peminjaman" placeholder="Masukkan Status Peminjaman"
                    value="<?= $hasil['status_peminjaman'] ?>">
  				 			 </div>

                 <input type="submit" class="btn btn-primary" name="submit" value="Save">
  				 		</div>


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
