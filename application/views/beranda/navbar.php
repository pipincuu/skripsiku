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
          <a class="navbar-brand navbar-inverse navbar-brand" href="Dashboard"> <i class="fa fa-book"></i> Sistem Informasi Perpustakaan Pusat Politeknik Negeri Malang</a>
      </div>
      <!-- Top Menu Items -->
      <ul class="nav navbar-right top-nav">
          <li>
            <a href="<?= base_url('Sirkulasi') ?>">
              <i class="fa fa-shopping-cart"></i>
              <span class="badge">
                <?= count($this->cart->contents()); ?>
              </span>
            </a>
          </li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $this->session->userdata('username'); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li>
                      <a href="<?= base_url('Admin/logout') ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
                  <a href="Dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
              </li>
              <li>
                  <a href="Bibliography"><i class="fa fa-fw fa-bookmark"></i> Bibliography</a>
              </li>
              <li>
                  <a href="Anggota"><i class="fa fa-fw fa-user"></i> Membership</a>
              </li>
              <li>
                  <a href="Home"><i class="fa fa-fw fa-user"></i> Mahasiswa</a>
              </li>
              <li>
                  <a href="Kategori"><i class="fa fa-list-alt"></i>  Kategori</a>
              </li>
              <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-desktop"></i> Sirkulasi <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="Sirkulasi">Peminjaman Buku</a>
                            </li>
                            <li>
                                <a href="Sirkulasi/liat_sirkulasi">Data Peminjaman Buku</a>
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
