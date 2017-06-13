<html>
<body>

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Kategori
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="Dashboard">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Kategori
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="col-md-12">
  				<div class="panel panel-default">


  						  <div class="panel-heading">
  								<h3 class="panel-title text-center">Kategori Arsip Perpustakaan</h3>
  						  </div>

  					  <div class="panel-body">
  			<div class="row">

  					<form action="" method="POST">

  						<div class="col-md-12">
  							<div class="form-group">
  				    			<label for="no_kategori">No Kategori</label>
  				   				<input type="text" name="no_kategori" class="form-control" id="no_kategori" placeholder="Masukkan No Kategori">
  				 			 </div>

  				  			<div class="form-group">
  				    			<label for="nama_kategori">Nama Kategori</label>
  				    			<input type="text" name="nama_kategori"  class="form-control" id="nama_kategori" placeholder="Masukkan Nama Kategori">
  				  			</div>
                  <div class="form-group">
				    			         <label for="deskripsi">Deskripsi</label>
				   				         <textarea rows="" cols="" input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Masukkan Deskripsi Kategori Buku">
				   				          </textarea>
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
