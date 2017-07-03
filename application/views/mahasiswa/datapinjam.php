<html>
<body>

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                      <div class="text-center">
                        <h1 class="page-header">
                            Data Peminjaman Buku
                        </h1>
                      </div>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="Dashboard">Beranda</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-user"></i> Data Peminjaman Buku
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- <div class="col-md-12">
  				<div class="panel panel-default">


  						  <div class="panel-heading">
  								<h3 class="panel-title text-center">Pinjaman Terkini</h3>
  						  </div> -->

                <table id="my-table" class="table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>ID Buku</th>
                      <th>Judul Buku</th>
                      <th>Tanggal Pinjam</th>
                      <th>Tanggal Kembali</th>
                    </tr>
                  </thead>


                  <!-- <tbody>
                    <?php foreach($tampil as $key){ ?>
                    <tr>
                      <td><?php echo $key['nim']; ?></td>
                      <td><?php echo $key['nama_mahasiswa']; ?></td>
                      <td><?php echo $key['jurusan']; ?></td>
                      <td><?php echo $key['program_studi']; ?></td>
                      <td><?php echo $key['tanggal_lahir']; ?></td>
                      <td><?php echo $key['tanggal_registrasi']; ?></td>
                      <td><?php echo $key['tanggal_expired']; ?></td>
                      <td><?php echo $key['jenis_kelamin']; ?></td>
                      <td><?php echo $key['alamat']; ?></td>
                      <td><?php echo $key['no_telepon']; ?></td>

                    </tr>
                    <?php } ?>
                  </tbody> -->

                </table>

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
