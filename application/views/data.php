
<div class="panel panelPeta-default">
  <div class="panel-heading">
    <h3 class="panel-title text-center">Data Mahasiswa Tingkat Akhir Jurusan Teknologi Informasi </h3>
  </div>
  <div class="panel-body">


    <table id="my-table" class="table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Nim</th>
          <th>Nama Mahasiswa</th>
          <th>Program Studi</th>
          <th>Action</th>

        </tr>
      </thead>

      <tbody>
        <?php foreach($tampil as $key){ ?>
          <tr>
            <td><?php echo $key['nim']; ?></td>
            <td><?php echo $key['nama_mahasiswa']; ?></td>
            <td><?php echo $key['program_studi']; ?></td>

            <td class="text-center">
              <div class="btn-group-vertical">
                <a href="<?php echo base_url().'Data/ubah_mahasiswa/'.$key['nim'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i> </a>
                <a href="<?php echo base_url().'Data/hapus/'.$key['nim'] ?>" class="btn btn-danger"><i class="fa fa-times"></i> </a>
              </tr>
              <?php } ?>
            </div>
          </td>
        </tbody>
      </table>
    </div>
  </div>
