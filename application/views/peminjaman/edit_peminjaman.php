<html>
<body>

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Sirkulasi - Peminjaman Buku
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="Dashboard">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Loan
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
                <input type="text" name="nim" class="form-control" id="nim" value="<?php echo $hasil['nim'] ?>">
				 			 	</select>
  				 			 </div>

  				  			<div class="form-group">
  				    			<label for="id_buku">ID Buku</label>
  				    			<input type="text" name="id_buku"  class="form-control" id="id_buku" placeholder="Masukkan Id Buku"
                    value="<?php echo $hasil['id_buku'] ?>">
  				  			</div>
  				  			<div class="form-group">
  				    			<label for="id_detail_buku">Status Buku</label>
  				   				<input type="text" name="id_detail_buku" class="form-control" id="id_detail_buku" placeholder="Masukkan Jurusan Mahasiswa"
                    value="<?php echo $hasil['id_detail_buku'] ?>">
  				 			 </div>
  				 		</div>

              <div class="col-md-6">
              <div class="form-group">
                 <label for="tanggal_pinjam">Tanggal Pinjam</label>
                 <div class="form-group input-append date" id="tanggal_pinjam" data-date-format="yyyy-mm-dd" >
                 <input class="span2 form-control" name="tanggal_pinjam" size="3" type="text" value="<?php echo $hasil['tanggal_pinjam'] ?>">
                <!--  <di class="add-on input-group-addon"><i class="fa fa-calendar"></i></span> -->
                </div>
              </div>
              <div class="form-group">
                 <label for="tanggal_kembali">Tanggal Kembali</label>
                 <div class="form-group input-append date" id="tanggal_kembali" data-date-format="yyyy-mm-dd" >
                 <input class="span2 form-control" name="tanggal_kembali" size="3" type="text" value="<?php echo $hasil['tanggal_kembali'] ?>">
                <!--  <di class="add-on input-group-addon"><i class="fa fa-calendar"></i></span> -->
               </div>
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
