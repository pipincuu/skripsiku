<!--Double navigation-->
<header>
    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav fixed custom-scrollbar">

        <!-- Logo -->
        <li>
            <div class="logo-wrapper sn-ad-avatar-wrapper">
                <div class="rgba-stylish-strong">
                    <p class="user white-text">
                      Selamat Datang <?= $this->session->userdata('nama'); ?>
                    </p>
                </div>
            </div>
        </li>
        <!--/. Logo -->

        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                <!-- <li><a class="collapsible-header waves-effect arrow-r">
                  <i class="fa fa-list-alt"></i> Data Tanggungan<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="waves-effect">Jurusan dan Gudang</a>
                            </li>
                            <li><a href="#" class="waves-effect">Program Studi</a>
                            </li>
                            <li><a href="#" class="waves-effect">Perpustakaan</a>
                            </li>
                        </ul>
                    </div>
                </li> -->
                <li>
                  <a href="<?= base_url('bebas-tanggungan') ?>" class=" waves-effect arrow-r">
                    <i class="fa fa-user-circle-o"></i> Data Bebas Tanggungan
                  </a>
                </li>
                <li>
                  <a href="" class=" waves-effect arrow-r">
                    <i class="fa fa-user-circle-o"></i> Data Admin
                  </a>
                </li>
            </ul>
        </li>
        <!--/. Side navigation links -->

    </ul>
    <!--/. Sidebar navigation -->

    <!--Navbar-->
    <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">

        <!-- SideNav slide-out button -->
        <div class="float-xs-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
        </div>

        <!-- Breadcrumb-->
        <div class="breadcrumb-dn">
            <p>Halaman Admin</p>
        </div>


        <ul class="nav navbar-nav float-xs-right">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="hidden-sm-down">Profil</span></a>
                <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <a class="dropdown-item" href="<?= base_url('admin/logout') ?>">Logout</a>
                </div>
            </li>
        </ul>

    </nav>
    <!--/.Navbar-->
</header>
<!--/Double navigation-->
