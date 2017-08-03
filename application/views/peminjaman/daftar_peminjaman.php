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
						<ol class="breadcrumb">
							<div class="text-center">
							<a href="<?php echo base_url() ?>Sirkulasi" method="POST" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Peminjaman</a>
					</div>
						</ol>

							<table id="my-table" class="table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Id Peminjaman</th>
										<th>Nim</th>
										<th>Tanggal Pinjam</th>
										<th>Tanggal Kembali</th>
										<th>Tanggal Perpanjangan</th>
										<th>Tanggal Dikembalikan</th>
										<th>Status peminjaman</th>
										<th>Action</th>
									</tr>
								</thead>


								<tbody>
									<?php foreach($tampil as $key){ ?>
									<tr>
										<td><?php echo $key['id_pinjam'] ?></td>
										<td><?php echo $key['nim'] ?></td>
										<td><?php echo $key['tanggal_pinjam']; ?></td>
										<td><?php echo $key['tanggal_kembali']; ?></td>
										<td><?php echo $key['tanggal_diperbarui']; ?></td>
										<td><?php echo $key['tanggal_dikembalikan']; ?> </td>
										<td><?php echo $key['status_peminjaman']; ?></td>

										<td class="text-center">
											<div class="btn-group-vertical">
												<a href="<?php echo base_url().'Sirkulasi/konfirmasi/'.$key['id_pinjam'] ?>" class="btn btn-success"><i class="fa fa-check"></i> </a>
												<a href="<?php echo base_url().'Sirkulasi/ubah_sirkulasi/'.$key['id_pinjam'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i> </a>
												<a href="<?php echo base_url().'Sirkulasi/hapus_data_sirkulasi/'.$key['id_pinjam'] ?>" class="btn btn-danger"><i class="fa fa-times"></i> </a>
											</div>
										</td>
									</tr>
									<?php } ?>
								</tbody>

							</table>

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
