<html>
<body>
<!-- <div class="col-md-12"> -->
				<div class="panel panel-default">
					 <div class="panel-heading">
								<h3 class="panel-title text-center"><B>Arsip Peminjaman Anggota Perpustakaan</B></h3>
						  </div>
					<div class="panel-body">
						<!-- <div class="row"> -->
						<ol class="breadcrumb">
								<li>
										<i class="fa fa-dashboard"></i>  <a href="Dashboard">Dashboard</a>
								</li>
								<li class="active">
										<i class="fa fa fa-desktop"></i> Sirkulasi
								</li>
						</ol>

            <!-- LIST BUKU  -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Data Buku yg dipinjam</h3>
              </div>
              <div class="panel-body">
                <table class="table">
                  <tr>
                    <thead>
                      <th>#</th>
                      <th>ID buku</th>
                      <th>Nama Buku</th>
                    </thead>
                  </tr>

                  <tr>
                    <?php $i=1; foreach ($detail as $key) { ?>
                    <tbody>
                      <td><?= $i; ?></td>
                      <td><?= $key->id_buku; ?></td>
                      <td><?= $key->judul_buku; ?></td>
                    </tbody>
                    <?php $i++; } ?>
                  </tr>
                </table>
              </div>
            </div>

            <div class="panel-footer">
              <a href="<?= base_url('Sirkulasi/kembalikan/'.$id) ?>" class="btn btn-success">Kembalikan</a>
              <a href="<?= base_url('Sirkulasi/perpanjang/'.$id) ?>" class="btn btn-default">Perpanjang</a>
            </div>

					  	<!-- </div> -->
					</div>
				</div>
			</div>
	</div>

</body>



<script type="text/javascript" src="<?php echo base_url() ?>res/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>res/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>res/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>res/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>res/js/dataTables.responsive.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>res/js/dataTableIndonesia.js"></script>

</html>
