<div id="page-wrapper">

          <div class="container-fluid">

              <!-- Page Heading -->
              <div class="row">
                  <div class="col-lg-12">
                      <h1 class="page-header">
                          Forms
                      </h1>
                      <ol class="breadcrumb">
                          <li>
                              <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                          </li>
                          <li class="active">
                              <i class="fa fa-edit"></i> Forms
                          </li>
                          <button type="submit" class="btn btn-default">Submit Button</button>
                      </ol>
                  </div>
              </div>
              <!-- /.row -->

              <div class="row">
                  <div class="col-lg-6">

                      <form role="form">

                        <div class="form-group">
                          <label for="id_buku">ID Buku</label>
                            <input type="text" name="id_buku" class="form-control" id="id_buku" placeholder="">
                         </div>

                         <div class="form-group">
                          <label for="judul">judul_buku</label>
                            <input type="text" name="judul_buku" class="form-control" id="judul_buku" placeholder="">
                         </div>

                         <div class="form-group">
                           <label for="pengarang">Pengarang Buku</label>
                             <input type="text" name="pengarang_buku" class="form-control" id="pengarang_buku" placeholder="">
                          </div>

                          <div class="form-group">
                            <label for="penerbit">Penerbit Buku</label>
                              <input type="text" name="penerbit_buku" class="form-control" id="penerbit_buku" placeholder="">
                           </div>

                           <div class="form-group">
                             <label for="tahun_terbit">Tahun Terbit</label>
                               <input type="text" name="tahun_terbit" class="form-control" id="tahun_terbit" placeholder="">
                            </div>

                            <div class="form-group">
                              <label for="tempat_terbit">Tempat Terbit</label>
                                <input type="text" name="tempat_terbit" class="form-control" id="tempat_terbit" placeholder="">
                             </div>


                          <button type="reset" class="btn btn-default">Save</button>

                      </form>

                  </div>
                  <div class="col-lg-6">

                      <form role="form">

                        <div class="form-group">
                          <label for="edisi">Edisi</label>
                            <input type="text" name="edisi" class="form-control" id="edisi" placeholder="">
                         </div>

                         <div class="form-group">
                           <label for="jumlah_eksemplar">Jumlah Eksemplar</label>
                             <input type="text" name="jumlah_eksemplar" class="form-control" id="jumlah_eksemplar" placeholder="">
                          </div>

                          <div class="form-group">
                             <label for="jeniskoleksi">Jenis Koleksi Buku</label>
                                <select name="Jenis_koleksi_buku" class="form-control">
                                  <option value="">Jenis Koleksi Buku </option>
                                   <?php
                                    foreach ($jenis_user as $key) {
                                     echo '<option value="'.$key['id_jenis'].'">'.$key['id_jenis'].'</option>';
                                     }
                                   ?>
                                 </select>
                            </div>


                          <div class="form-group">
                            <label for="noreg">No. Registrasi</label>
                              <input type="text" name="no_registrasi" class="form-control" id="no_registrasi" placeholder="">
                           </div>

                           <div class="form-group">
                             <label for="noacc">No. Acc</label>
                               <input type="text" name="no_acc" class="form-control" id="no_acc" placeholder="">
                            </div>

                            <div class="form-group">
                              <label for="keterangan">Keterangan</label>
                                <input type="text" name="ket" class="form-control" id="ket" placeholder="">
                             </div>

                      </form>

                  </div>
              </div>
              <!-- /.row -->

          </div>
          <!-- /.container-fluid -->

      </div>
      <!-- /#page-wrapper -->


  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
