<html>
<body>
<div id="wrapper">

  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand navbar-inverse navbar-brand" href="Mahasiswa"> <i class="fa fa-user-md"></i> Area Anggota UPT. Perpustakaan POLINEMA</a>
      </div>
      <!-- Top Menu Items -->
      <ul class="nav navbar-right top-nav">
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $this->session->userdata('username'); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li>
                      <a href="<?= base_url('Signin/logout') ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                  </li>
              </ul>
          </li>
      </ul>
      <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
      <!-- <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav"> -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
              <li>
                  <a href="Mahasiswa"><i class="fa fa-fw fa-dashboard"></i> Beranda</a>
              </li>
              <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-desktop"></i> Data Mahasiswa <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="Datapinjam">Data Sirkulasi Peminjaman Buku</a>
                            </li>
                            <li>
                                <a href="History">History Peminjaman</a>
                            </li>
                        </ul>
                    </li>
              <!-- <li>
                  <a href=""><i class="fa fa-fw fa-desktop"></i> Sirkulasi</a>
              </li> -->

            </ul>
      </div>
                  <!-- /.navbar-collapse -->

    </nav>

    <script src="<?= base_url('res/js/jquery.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url('res/js/bootstrap.min.js') ?>"></script>

  </body>
</html>
