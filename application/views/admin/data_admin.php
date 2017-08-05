<main ng-app="apps" ng-controller="mahasiswaController">

  <!-- Button trigger modal -->
  <!-- <div class="center text-xs-center">
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
      Tambah Admin
    </button>
  </div> -->

  <table id="datatable" datatable="ng" class="table table-bordered" cellspacing="0" width="100%">
    <thead class="thead-inverse">
      <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Alamat</th>
        <th>No.telp</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1; foreach ($admin as $key) {?>
        <tr>
          <td><?= $i ?></td>
          <td><?= $key->nama ?></td>
          <td><?= $key->username ?></td>
          <td><?= $key->alamat ?></td>
          <td><?= $key->notelepon ?></td>
        </tr>
        <?php $i++; } ?>
      </tbody>
    </table>
  </main>

  <!-- Modal -->
  <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document"> -->
      <!--Content-->

      <!-- <form class="" action="<?= base_url('BebasTanggungan/simpan') ?>" method="post">
        <div class="modal-content"> -->
          <!--Header-->
          <!-- <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Tambah data</h4>
          </div> -->
          <!--Body-->
          <!-- <div class="modal-body">

            <div class="md-form">
              <select name="nim" class="mdb-select">
                <option value="" disabled selected>NIM</option>
                <?php foreach ($mhs as $key => $value) { ?>
                  <option value="<?= $value['nim'] ?>"><?= $value['nim']." - ".$value['nama_mahasiswa'] ?></option>
                <?php } ?>
              </select>
            </div> -->

            <!-- <div class="md-form">
              <select name="jenis_tanggungan" class="mdb-select">
              <option value="" disabled selected>Jenis Tanggungan</option>
                <optgroup label="Gudang dan Jurusan">
                  <option value="Kerusakan Komponen/Alat">Kerusakan Komponen/Alat</option>
                  <option value="Peminjaman Komponen/Alat">Peminjaman Komponen/Alat</option>
                  <option value="Distribusi CD Lap. Akhir">Distribusi CD Lap. Akhir</option>
                  <option value="Buku Petunjuk Operasional">Buku petunjuk operasional</option>
                  <option value="Penyerahan Alat/Buku Sumbangan">Penyerahan Alat/Buku Sumbangan</option>
                  <option value="Tanggungan Tatib">Tanggungan Tatib</option>
                  <option value="Buku Tata Tertib">Buku Tata Tertib</option>
                </optgroup>
                <optgroup label="Program Studi">
                  <option value="Distribusi Buku Lapangan Akhir">Distribusi Buku Laporan Akhir</option>
                  <option value="Distribusi Laporan PKL">Distribusi Laporan PKL</option>
                  <option value="Kompensasi">Kompensasi</option>
                  <option value="KTM">KTM</option>
                  <option value="Publikasi Tugas akhir">Publikasi Tugas akhir</option>
                </optgroup>
              </select>
            </div> -->

          <!-- </div> -->
          <!--Footer-->
          <!-- <div class="modal-footer">
            <button type="submit" name="ok" class="btn btn-block btn-primary">Simpan</button>
          </div> -->
        <!-- </div>
      </form> -->
      <!--/.Content-->
    </div>
  </div>
  <!-- /.Live preview-->
