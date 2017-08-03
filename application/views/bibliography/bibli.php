<html>
<body>

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Bibliography
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="Dashboard">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Bibliography
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="col-md-12">
          <div class="panel panel-default">


                <div class="panel-heading">
                  <h3 class="panel-title text-center">Arsip Perpustakaan</h3>
                </div>

              <div class="panel-body">
        <div class="row">

            <form action="" method="POST">

              <div class="col-md-6">
                <div class="form-group">
                  <label for="judul_buku">Judul Buku</label>
                  <input type="text" name="judul_buku" class="form-control" id="judul_buku" placeholder="Masukkan Judul Buku">
               </div>
                  <div class="form-group">
                    <label for="no_kategori">No Kategori</label>
                    <!-- <input type="text" name="no_kategori"  class="form-control" id="no_kategori" placeholder="Masukkan No Kategori Buku"> -->
                    <select class="form-control" name="no_kategori">
                    <?php foreach ($kategori as $key) { ?>
                        <option value="<?= $key->no_kategori ?>"><?= $key->no_kategori." (".$key->nama_kategori.")" ?></option>
                    <?php } ?>
                      </select>
                  </div>
                 <div class="form-group">
                   <label for="pengarang_buku">Pengarang Buku</label>
                   <input type="text" name="pengarang_buku" class="form-control" id="pengarang_buku" placeholder="Masukkan Pengarang Buku">
                </div>
                <div class="form-group">
                   <label for="penerbit_buku">Penerbit Buku</label>
                   <input type="text" name="penerbit_buku" class="form-control" id="penerbit_buku" placeholder="Masukkan Penerbit Buku">
                </div>
                <div class="form-group">
                   <label for="tahun_terbit">Tahun Terbit</label>
                   <input type="text" name="tahun_terbit" class="form-control" id="tahun_terbit" placeholder="Masukkan Tahun Terbit Buku">
                </div>
                <div class="form-group">
                   <label for="tempat_terbit">Tempat Terbit</label>
                   <input type="text" name="tempat_terbit" class="form-control" id="tempat_terbit" placeholder="Masukkan Tempat Terbit Buku">
                </div>
                <div class="form-group">
                   <label for="edisi">Edisi</label>
                   <input type="text" name="edisi" class="form-control" id="edisi" placeholder="Masukkan Edisi Buku">
                </div>

              </div>

              <div class="col-md-6">

              <div class="form-group">
                   <label for="jumlah_eksemplar">Jumlah Eksemplar</label>
                   <input type="text" name="jumlah_eksemplar" class="form-control" id="jumlah_eksemplar" placeholder="Masukkan Jumlah Eksemplar Buku">
                </div>
              <div class="form-group">
                     <label for="jumlah_stok_buku">Jumlah Stok Buku</label>
                     <input type="text" name="jumlah_stok_buku" class="form-control" id="jumlah_stok_buku" placeholder="Masukkan Jumlah Stok Buku">
                </div>
                <div class="form-group">
    				    			<label for="jenis_koleksi_buku">Jenis Koleksi Buku</label>
                       <select name="jenis_koleksi_buku" class="form-control">
    				   			   <option value="Koleksi Umum">Koleksi Umum</option>
                       <option value="Koleksi Laporan Akhir">Koleksi Laporan Akhir/Skripsi</option>
                       <option value="Koleksi Tandon">Koleksi Tandon</option>
    				 			 	</select>
    				 			 </div>
                 <div class="form-group">
                   <label for="no_registrasi">No Registrasi</label>
                   <input type="text" name="no_registrasi" class="form-control" id="no_registrasi" placeholder="Masukkan No Registrasi Buku">
                </div>
                 <div class="form-group">
                    <label for="no_acc">No Acc</label>
                    <input type="text" name="no_acc"  class="form-control" id="no_acc" placeholder="Masukkan No Acc Buku">
                 </div>
                 <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan"  class="form-control" id="keterangan" placeholder="Masukkan Keterangan">
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
</script>
