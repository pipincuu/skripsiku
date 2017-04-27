<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Sistem Kemahasiswaan Jurusan Teknologi Informasi Politeknik Negeri Malang </title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url() ?>res/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>res/css/sb-admin.css" rel="stylesheet">
    <link href="<?= base_url() ?>res/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="<?= base_url() ?>res/js/jquery.js"></script>
    <!-- // <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCF38TleEdLG-FtUyE80-7FDBJID5CB-8s&callback=initMap" async defer></script> -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="<?= base_url() ?>res/js/latlon-picker.js"></script>
    <script src="<?= base_url() ?>res/js/bootstrap.min.js"></script>

</head>

<body>



            <div id="page-wrapper">

                <div class="panel panelPeta-default">
                  <div class="panel-heading">
                    <h3 class="panel-title text-center">Form Input Data Mahasiswa Tingkat Akhir Lulusan Tahun 2017 Jurusan Teknologi Informasi Politeknik Negeri Malang </h3>
                </div>
                <div class="panel-body">

                 <form action=" " method="POST" role="form">

                    <!-- <fieldset class="gllpLatlonPicker">

                        <div class="gllpMap">Google Maps</div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control gllpSearchField" placeholder="Cari Lokasi..">
                                <span class="input-group-btn">
                                    <button type="button" class="gllpSearchButton btn btn-info"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-inline">
                                <div class="form-group">
                                    Latitude :
                                    <input type="text" name="latitude" class="gllpLatitude form-control" value="<?= $hasil['latitude'] ?>"/>
                                </div>

                                <div class="form-group">
                                    Longitude :
                                    <input type="text" name="longitude" class="gllpLongitude form-control" value="<?= $hasil['longitude'] ?>"/>
                                </div>

                                <div class="form-group">
                                 Zoom :
                                 <input type="text" class="gllpZoom form-control" value=""/>
                             </div>
                         </div>
                     </div> -->

                     <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="text" name="nim" class="form-control" id="nim" placeholder="Masukkan Nim Mahasiswa"
                        value="<?= $hasil['nim'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="nama_mahasiswa">Nama Mahasiswa</label>
                        <input type="text" name="nama_mahasiswa"  class="form-control" id="namaMahasiswa" placeholder="Masukkan Nama Mahasiswa"
                        	value="<?= $hasil['nama_mahasiswa'] ?>">
                    </div>

                    <div class="form-group">
    				    			<label for="program_studi">Program Studi</label>
    				   				<input type="textbox" name="program_studi" class="form-control" id="program_studi" placeholder="Masukkan Program Studi Mahasiswa"
                      	value="<?= $hasil['program_studi'] ?>">
    							</div>

                    <div class="form-group">
                        <input type="submit" name="submit" class="gllpUpdateButton btn btn-success" value="Simpan Data">
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>



</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->


</body>

</html>
