
<div class="container-fluid panelPeta-default">
		<div class="row">

			<div class="col-md-12">
				<div class="panel-biruw panel-default">


						  <div class="panel-heading">
								<h3 class="panel-title text-center">Form Input Data Mahasiswa Tingkat Akhir Jurusan Teknologi Informasi</h3>
						  </div>

					  <div class="panel-body">

					<form action="" method="POST">
							<!-- <div class="form-group">
				    			<label for="iduser">ID USER</label>
				   				<input type="text" name="Id_user" class="form-control" id="noid" placeholder="">
				 			 </div> -->

				 			<div class="form-group">
    							  <label for="nim">Nim</label>
  								<input type="text" name="nim" class="form-control" id="nim" placeholder="Masukkan Nim Mahasiswa">
    						</div>

				  			<div class="form-group">
				    			<label for="nama_mahasiswa">Nama</label>
				    			<input type="text" name="nama_mahasiswa" class="form-control" id="nama_mahasiswa" placeholder="Masukkan Nama Mahasiswa">
				  			</div>


				  			<div class="form-group">
				    			<label for="program_studi">Program Studi</label>
				   				<input type="textbox" name="program_studi" class="form-control" id="program_studi" placeholder="Masukkan Program Studi Mahasiswa">
							</div>

							<div class="form-group">
				    			<label for="jenis_kelamin">Jenis Kelamin</label>
				   				<input type="textbox" name="jenis_kelamin" class="form-control" id="jenis_kelamin" placeholder="Masukkan Jenis Kelamin Mahasiswa">
							</div>


							<label for="nama">Tanggal Lahir</label>
                                  <div class="form-inline form-group" role="form">

                                    <div class="form-group">
                                     <select name="htanggal" class="form-control">
                                       <option value="">-Tanggal-</option>
                                        <?php
                                             for($i=31;$i>=1;$i--){
                                             echo "<option value='$i'>$i</option>";
                                               }
                                         ?>
                                        </select>
                                       </div>

                                               <div class="form-group">
                                                  <select name="hbulan" class="form-control">
                                                     <option value="">-Bulan-</option>
                                                       <?php
                                                        for($i=1;$i<=12;$i++){
                                                        echo "<option value='$i'>$i</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                 </div>

                                                         <div class="form-group">
                                                           <select name="htanggal" class="form-control">
                                                             <option value="">-Tahun-</option>
                                                              <?php
                                                              for($i=1960;$i<=2017;$i++){
                                                              echo "<option value='$i'>$i</option>";
                                                              }
                                                              ?>
                                                            </select>
                                                          </div>

            				 </div>


							 <div class="form-group">

				 			 <input type="submit" name="ok" class="gllpUpdateButton btn btn-success" value="Save">
					</form>

				</div>

		</div>
	</div>
