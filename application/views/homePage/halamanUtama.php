
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
				<!-- Card-->
				<div class="card testimonial-card">

					<!--Bacground color-->
					<div class="card-up default-color">
					</div>

					<!--Avatar-->
					<div class="avatar"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%288%29.jpg" class="rounded-circle img-responsive">
					</div>

					<div class="card-block">
						<!--Name-->
						<h4 class="card-title">{{ mhs.NIM }}</h4>
						<h4 class="card-title">{{ mhs.nama_mahasiswa }}</h4>
						<hr>
						<!--Quotation-->
						<p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
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
