<html>
<body>

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                      <div class="text-center">
                        <h1 class="page-header">
                            <b>Area Anggota Perpustakaan</b>
                        </h1>
                      </div>
                        
                        <ol class="breadcrumb">
                          <div class="text-center">
                            <h3>Selamat datang di area anggota perpustakaan, di area ini anggota perpustakaan
                              dapat melakukan pengecekan daftar peminjaman buku beserta history peminjaman yang
                              dilakukan oleh anggota. </h3>
                            </div>
                        </ol>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIM</th>
                                    <th>Tgl Pinjam</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php $i=1; foreach ($data_pinjam as $key) { ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $key->nim ?></td>
                                    <td><?= $key->tanggal_pinjam ?></td>
                                    <td><?= $key->status_peminjaman ?></td>
                                </tr>
                            <?php $i++; } ?>
                            </tbody>

                        </table>
                        

                    </div>
                </div>
                <!-- /.row -->



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
