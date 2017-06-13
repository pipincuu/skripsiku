<html>
<body>
<!-- <div class="col-md-12"> -->
				<div class="panel panel-default">
					 <div class="panel-heading">
								<h3 class="panel-title text-center"><B>Daftar Kategori Arsip Perpustakaan</B></h3>
						  </div>
					<div class="panel-body">
						<!-- <div class="row"> -->
						<ol class="breadcrumb">
								<li>
										<i class="fa fa-dashboard"></i>  <a href="Dashboard">Dashboard</a>
								</li>
								<li class="active">
										<i class="fa fa fa-users"></i> Kategori
								</li>
						</ol>
						<ol class="breadcrumb">
							<div class="text-center">
							<a href="<?php echo base_url() ?>Category" method="POST" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Kategori</a>
					</div>
						</ol>

							<table id="my-table" class="table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>No Kategori</th>
										<th>Nama Kategori</th>
										<th>Deskripsi</th>
										<th>Action</th>
									</tr>
								</thead>


								<tbody>
									<?php foreach($tampil as $key){ ?>
									<tr>
										<td><?php echo $key['no_kategori']; ?></td>
										<td><?php echo $key['nama_kategori']; ?></td>
										<td><?php echo $key['deskripsi']; ?></td>

										<td class="text-center">
											<div class="btn-group-vertical">
												<a href="<?php echo base_url().'Kategori/ubah_kategori/'.$key['no_kategori'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i> </a>
												<a href="<?php echo base_url().'Kategori/hapus_kategori/'.$key['no_kategori'] ?>" class="btn btn-danger"><i class="fa fa-times"></i> </a>
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
