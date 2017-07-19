<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Dashboard <small>Statistics Overview</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Dashboard
                    </li>
                </ol>
            </div>

            <div class="col-md-8">

              <table id="my-table" class="table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Id Buku</th>
										<th>No Kategori</th>
										<th>Judul Buku</th>
										<th>Pengarang Buku</th>
										<th>Penerbit Buku</th>
										<th>Tahun Terbit</th>
										<th>Action</th>
									</tr>
								</thead>


								<tbody>
									<?php foreach($buku as $key){ ?>
									<tr>
										<td><?php echo $key['id_buku']; ?></td>
										<td><?php echo $key['no_kategori']; ?></td>
										<td><?php echo $key['judul_buku']; ?></td>
										<td><?php echo $key['pengarang_buku']; ?></td>
										<td><?php echo $key['penerbit_buku']; ?></td>
										<td><?php echo $key['tahun_terbit']; ?></td>

										<td class="text-center">
											<div class="btn-group-vertical">

												<a href="<?php echo base_url().'cart/add/'.$key['id_buku'] ?>" class="btn btn-success">
                          <i class="fa fa-plus-square-o"></i>
                        </a>
											</div>
										</td>
									</tr>
									<?php } ?>
								</tbody>

							</table>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
