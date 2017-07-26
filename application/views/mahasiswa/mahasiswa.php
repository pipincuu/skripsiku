<main ng-app="apps" ng-controller="mahasiswaController">
  <!-- Nav tabs -->

  <div class="text-xs-center center">
    <button type="button" class="btn btn-default">
      Buat form bebas tanggungan
    </button>
  </div>

  <hr>

  <ul class="nav nav-tabs tabs-2 red" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Jurusan & Prodi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Perpustakaan</a>
    </li>
  </ul>
  <!-- Tab panels -->
  <div class="tab-content card">
    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel1" role="tabpanel">

      <?php
        if($status_tanggungan=="belum tuntas"){
          $class = "danger";
        }else{
          $class = "success";
        }
       ?>

      <div class="text-xs-center center">
        <a class="btn btn-<?= $class  ?> btn-rounded">
          <i class="fa fa-warning white-text"></i> <?= $status_tanggungan ?>
        </a>
      </div>

      <br>

      <table class="table">
        <tr>
          <thead>
            <th>#</th>
            <th>NIM</th>
            <th>Jenis Tanggungan</th>
            <th>status</th>
          </thead>
        </tr>

        <?php $i=1; foreach ($kemahasiswaan as $key => $value) { ?>
        <tr>
          <tbody>
            <td><?= $i ?></td>
            <td><?= $value->nim ?></td>
            <td><?= $value->jenis_tanggungan ?></td>
            <td>
              <?php
                if($value->status=="belum tuntas"){
                  echo '<i class="fa fa-times-circle red-text fa-2x"></i>';
                }else{
                  echo '<i class="fa fa-check-circle green-text fa-2x"></i>';
                }
              ?>
            </td>
          </tbody>
        </tr>
        <?php $i++; } ?>

      </table>

    </div>
    <!--/.Panel 1-->

    <br>

    <!--Panel 2-->
    <div class="tab-pane fade" id="panel2" role="tabpanel">

      <?php
        if($status_perpus=="Masih ada Tanggungan"){
          $class = "danger";
        }else{
          $class = "success";
        }
       ?>

      <div class="text-xs-center center">
        <a class="btn btn-<?= $class  ?> btn-rounded">
          <i class="fa fa-warning white-text"></i> <?= $status_perpus ?>
        </a>
      </div>

      <br>

      <table class="table">
        <tr>
          <thead>
            <th>#</th>
            <th>Nomor Peminjaman</th>
            <th>Tanggal pinjam</th>
            <th>status</th>
          </thead>
        </tr>

        <?php $i=1; foreach ($perpus as $key => $value) { ?>
        <tr>
          <tbody>
            <td><?= $i ?></td>
            <td><?= $value->id_pinjam ?></td>
            <td><?= $value->tanggal_pinjam ?></td>
            <td>
              <?php
                if($value->status_peminjaman=="belum lunas"){
                  echo '<i class="fa fa-times-circle red-text fa-2x"></i>';
                }else{
                  echo '<i class="fa fa-check-circle green-text fa-2x"></i>';
                }
              ?>
            </td>
          </tbody>
        </tr>
        <?php $i++; } ?>

      </table>
    </div>
    <!--/.Panel 2-->
  </div>

</main>
