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

                      <!-- <ol class="breadcrumb">
                          < <input type="submit" name="ok" class="btn btn-lg btn-danger" value="Bibliography List">
                      </ol> -->
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
                          <label for="id_buku">ID Buku</label>
                            <input type="text" name="id_buku" class="form-control" id="id_buku" placeholder="Masukkan ID Buku">
                         </div>

                         <div class="form-group">
                          <label for="judul">judul_buku</label>
                            <input type="text" name="judul_buku" class="form-control" id="judul_buku" placeholder="Masukkan Judul Buku">
                         </div>

                         <div class="form-group">
                           <label for="pengarang">Pengarang Buku</label>
                             <input type="text" name="pengarang_buku" class="form-control" id="pengarang_buku" placeholder="Masukkan Pengarang Buku">
                          </div>

                          <div class="form-group">
                            <label for="penerbit">Penerbit Buku</label>
                              <input type="text" name="penerbit_buku" class="form-control" id="penerbit_buku" placeholder="Masukkan Penerbit Buku">
                           </div>

                           <div class="form-group">
                             <label for="tahun_terbit">Tahun Terbit</label>
                               <input type="text" name="tahun_terbit" class="form-control" id="tahun_terbit" placeholder="Masukkan Tahun Terbit">
                            </div>

                            <div class="form-group">
                              <label for="tempat_terbit">Tempat Terbit</label>
                                <input type="text" name="tempat_terbit" class="form-control" id="tempat_terbit" placeholder="Masukkan Tempat Terbit">
                             </div>

                             <div class="form-group">
                               <label for="edisi">Edisi</label>
                                 <input type="text" name="edisi" class="form-control" id="edisi" placeholder="Masukkan Edisi">
                              </div>

                      </form>

                  </div>
                  <div class="col-md-6">
                         <div class="form-group">
                           <label for="jumlah_eksemplar">Jumlah Eksemplar</label>
                             <input type="text" name="jumlah_eksemplar" class="form-control" id="jumlah_eksemplar" placeholder="Masukkan Jumlah Eksemplar">
                          </div>

                          <div class="form-group">
           				    			<label for="ttl">Tanggal Lahir</label>
           				   				<div class="form-group input-append date" id="dp1" data-date-format="yyyy-mm-dd" >
           								  <input class="span2 form-control" name="Tgl_Lahir" size="3" type="text" value="<?php echo date('Y-m-d'); ?>">

                          <div class="form-group">
                             <label for="jeniskoleksi">Jenis Koleksi Buku</label>
                                <select name="Jenis_koleksi_buku" class="form-control">
                                  <option value="">Koleksi Umum </option>
                                  <option value="">Koleksi Laporan Akhir/Skripsi </option>
                                  <option value="">Koleksi Tandon </option>
                                   <!-- <?php
                                    foreach ($jenis_user as $key) {
                                     echo '<option value="'.$key['id_jenis'].'">'.$key['id_jenis'].'</option>';
                                     }
                                   ?> -->
                                 </select>
                            </div>


                          <div class="form-group">
                            <label for="noreg">No. Registrasi</label>
                              <input type="text" name="no_registrasi" class="form-control" id="no_registrasi" placeholder="Masukkan No. Registrasi">
                           </div>

                           <div class="form-group">
                             <label for="noacc">No. Acc</label>
                               <input type="text" name="no_acc" class="form-control" id="no_acc" placeholder="Masukkan Nomor Acc">
                            </div>

                            <div class="form-group">
                              <label for="keterangan">Keterangan</label>
                                <input type="text" name="ket" class="form-control" id="ket" placeholder="Masukkan Keterangan">
                             </div>

                             <input type="submit" name="ok" class="btn btn-lg btn-primary" value="Save">

                      </form>

                  </div>
              </div>
              <!-- /.row -->

          </div>
          <!-- /.container-fluid -->

      </div>
      <!-- /#page-wrapper -->

<!-- Res CSS dan Javascript -->
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
