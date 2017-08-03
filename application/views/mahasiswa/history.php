<html>
<body>
<!-- <div class="col-md-12"> -->
				<div class="panel panel-default">
					 <div class="panel-heading">
								<h3 class="panel-title text-center"><B>History Peminjaman Area Anggota</B></h3>
						  </div>
					<div class="panel-body">
						<!-- <div class="row"> -->
						<ol class="breadcrumb">
								<li>
										<i class="fa fa-dashboard"></i>  <a href="Mahasiswa">Beranda</a>
								</li>
								<li class="active">
										<i class="fa fa-book"></i> History Peminjaman Area Anggota
								</li>
						</ol>
						<ol class="breadcrumb">
							<!-- <div class="text-center">
							<a href="<?php echo base_url() ?>Arsip" method="POST" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Arsip</a>
					</div> -->
						</ol>

							<table id="my-table" class="table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Id Buku</th>
										<th>Judul Buku</th>
										<th>No Kategori</th>
										<th>Pengarang Buku</th>
										<th>Penerbit Buku</th>
										<th>Tahun Terbit</th>
										<th>Tempat Terbit</th>
										<th>Edisi</th>
										<th>Jumlah Eksemplar</th>
										<th>Jumlah Stok Buku</th>
										<th>Jenis Koleksi</th>
										<th>No Registrasi</th>
										<th>No Acc</th>
										<th>Action</th>
									</tr>
								</thead>


								<tbody>
									<?php foreach($tampil as $key){ ?>
									<tr>
										<td><?php echo $key['id_buku']; ?></td>
										<td><?php echo $key['judul_buku']; ?></td>
										<td><?php echo $key['no_kategori']; ?></td>
										<td><?php echo $key['pengarang_buku']; ?></td>
										<td><?php echo $key['penerbit_buku']; ?></td>
										<td><?php echo $key['tahun_terbit']; ?></td>
										<td><?php echo $key['tempat_terbit']; ?></td>
										<td><?php echo $key['edisi']; ?></td>
										<td><?php echo $key['jumlah_eksemplar']; ?></td>
										<td><?php echo $key['jumlah_stok_buku']; ?></td>
										<td><?php echo $key['jenis_koleksi_buku']; ?></td>
										<td><?php echo $key['no_registrasi']; ?></td>
										<td><?php echo $key['no_acc']; ?></td>



										<td class="text-center">
											<div class="btn-group-vertical">
												<a href="<?php echo base_url().'Bibliography/ubah_bibli/'.$key['id_buku'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i> </a>
												<a href="<?php echo base_url().'Bibliography/hapus_bibli/'.$key['id_buku'] ?>" class="btn btn-danger"><i class="fa fa-times"></i> </a>
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
