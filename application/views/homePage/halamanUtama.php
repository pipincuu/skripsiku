
<!--Main layout-->
<main ng-app="apps">

	<!-- Search Box  -->
	<div class="md-form input-group blue-grey lighten-5 z-depth-1">
		<span class="input-group-addon blue-grey lighten-5" id="basic-addon1"><i class="fa fa-search"></i></span>
		<input type="text" ng-model="nim" class="form-control search" placeholder="Masukkan Nomor Induk Mahasiswa" aria-describedby="basic-addon1">
	</div>
	<!-- /Seacrh Box  -->

	<!-- Data Mahasiswa  -->
	<div ng-controller="mahasiswaController">

		<div class="row">

			<div class="col-md-4" ng-repeat="mhs in mhs | filter:nim">
				<!--Card-->
				<div class="card testimonial-card">

					<!--Bacground color-->
					<div class="card-up primary-color-dark">
					</div>

					<!--Avatar-->
					<div class="avatar"><img src="<?= base_url('mdb/img/') ?>fiqi.jpg" class="rounded-circle img-responsive">
					</div>

					<div class="card-block">
						<!--Name-->
						<h4 class="card-title"><strong>{{ mhs.NIM }}</strong></h4>
						<p>{{ mhs.nama_mahasiswa }}</p>
						<!--Quotation-->
						<p>
							<!-- <div class="chip white-text blue">
								Gudang dan Jurusan 2
							</div>
							<div class="chip white-text green">
								Program Studi 1
							</div>
							<div class="chip white-text orange">
								Perpustakaan 1
							</div> -->
						</p>
						<ul class="">
							<li class="list-group-item">
								<span class="tag bg-success label-pill float-xs-right">
									<i class="fa fa-check"></i>
								</span> Gudang & Jurusan
							</li>
							<li class="list-group-item">
								<span class="tag bg-danger label-pill float-xs-right">
									<i class="fa fa-close"></i>
								</span> Program Studi
							</li>
							<li class="list-group-item">
								<span class="tag bg-warning label-pill float-xs-right">
									<i class="fa fa-question"></i>
								</span> Perpustakaan
							</li>
						</ul>

						<button type="button" class="btn btn-default" name="button">Lihat Detail</button>
					</div>

				</div>
				<!--/.Card-->
			</div>

		</div>


	</div>

	<!-- /Data Mahasiswa -->

	<!-- <table class="table table-bordered">
	<thead class="thead-inverse">
	<tr>
	<th>#</th>
	<th>Nama</th>
	<th>lol</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Doraa</td>
<td>demn</td>
</tr>
</tbody>
</table> -->

</main>
<!--/Main layout-->
