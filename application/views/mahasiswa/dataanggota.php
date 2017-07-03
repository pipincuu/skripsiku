<html>
<body>

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                      <div class="text-center">
                        <h1 class="page-header">
                            <b>Data Anggota</b>
                        </h1>
                      </div>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="Dashboard">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-users"></i> Data Anggota
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="col-md-12">
  				<div class="panel panel-default">


  						  <div class="panel-heading">
  								<h3 class="panel-title text-center">Data Anggota</h3>
  						  </div>

  					  <div class="panel-body">
  			<div class="row">

  					  <table id="my-table" class="table table-hover dt-responsive" cellspacing="0" width="100%">
                <tr>
                    <?php foreach($tampil as $key){ ?>
                <td>Nim</td>
                <td><?php echo $key['nim']; ?></td>
                <td>Nama</td>
                <td><?php echo $key['nama_mahasiswa']; ?></td>
              </tr>
              <tr>
                <td>Jurusan</td>
                <td><?php echo $key['jurusan']; ?></td>
                <td>Program Studi</td>
                <td><?php echo $key['program_studi']; ?></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $key['jenis_kelamin']; ?></td>
                <td>Tanggal Lahir</td>
                <td><?php echo $key['tanggal_lahir']; ?></td>
              </tr>
                <?php } ?>
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
