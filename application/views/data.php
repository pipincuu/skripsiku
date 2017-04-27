<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Sistem Kemahasiswaan Jurusan Teknologi Informasi </title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url() ?>res/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>res/css/sb-admin.css" rel="stylesheet">
    <link href="<?= base_url() ?>res/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>res/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>res/css/dataTables.responsive.css" rel="stylesheet" type="text/css">

    <script src="<?= base_url() ?>res/js/jquery.js"></script>
    <!-- // <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCF38TleEdLG-FtUyE80-7FDBJID5CB-8s&callback=initMap" async defer></script> -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="<?= base_url() ?>res/js/latlon-picker.js"></script>
    <script src="<?= base_url() ?>res/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>res/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>res/js/dataTables.bootstrap.js"></script>
    <script src="<?= base_url() ?>res/js/dataTables.responsive.js"></script>
    <script src="<?= base_url() ?>res/js/dataTableIndonesia.js"></script>



</head>
<body>
   <div class="panel panelPeta-default">
    <div class="panel-heading">
        <h3 class="panel-title text-center">Data Mahasiswa Tingkat Akhir Jurusan Teknologi Informasi </h3>
    </div>
    <div class="panel-body">

                <!-- <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="container">

                                    </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

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
    </body>



    </html>
