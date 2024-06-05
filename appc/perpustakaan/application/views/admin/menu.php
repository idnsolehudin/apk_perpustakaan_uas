<body class="large-sidebar fixed-sidebar fixed-header content-appear">
    <div class="wrapper">

        <!-- Sidebar -->
        <div class="site-sidebar-overlay"></div>
        <div class="site-sidebar">
            <a class="logo" href="index.html">
                <span class="l-text">Perpustakaan</span>
                <span class="l-icon"></span>
            </a>
            <div class="custom-scroll custom-scroll-light">
                <?php if ($_SESSION['username'] == "kepala") { ?>
                    <ul class="sidebar-menu">
                        <li class="menu-title m-t-0-5">Navigation</li>
                        <li class="<?php echo ($this->uri->segment(1) == 'chome') ? 'active' : ''; ?>">
                            <a href="<?php echo base_url(); ?>chome" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="ti-home"></i></span>
                                <span class="s-text">Home</span>
                            </a>
                        </li>
                        <li class="with-sub">
                            <a href="#" class="waves-effect  waves-light">
                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                <span class="s-icon"><i class="ti-package"></i></span>
                                <span class="s-text">Log (Riwayat)</span>
                            </a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>logpeminjaman">Log Peminjaman</a></li>
                                <li><a href="<?php echo base_url(); ?>logpengembalian">Log Pengembalian</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>clogin/logout" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="ti-loop"></i></span>
                                <span class="s-text">Log Out</span>
                            </a>
                        </li>
                    </ul>
                <?php } else { ?>
                    <ul class="sidebar-menu">
                        <li class="menu-title m-t-0-5">Navigation</li>
                        <li class="<?php echo ($this->uri->segment(1) == 'chome') ? 'active' : ''; ?>">
                            <a href="<?php echo base_url(); ?>chome" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="ti-home"></i></span>
                                <span class="s-text">Home</span>
                            </a>
                        </li>
                        <li class="<?php echo ($this->uri->segment(1) == 'buku') ? 'active' : ''; ?>">
                            <a href="<?php echo base_url(); ?>buku" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="ti-book"></i></span>
                                <span class="s-text">Data Buku</span>
                            </a>
                        </li>
                        <li class="<?php echo ($this->uri->segment(1) == 'kategori') ? 'active' : ''; ?>">
                            <a href="<?php echo base_url(); ?>kategori" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="ti-list"></i></span>
                                <span class="s-text">Kategori</span>
                            </a>
                        </li>

                        <li class="<?php echo ($this->uri->segment(1) == 'mahasiswa') ? 'active' : ''; ?>">
                            <a href="<?php echo base_url(); ?>mahasiswa" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="ti-user"></i></span>
                                <span class="s-text">Mahasiswa</span>
                            </a>
                        </li>

                        <li class="<?php echo ($this->uri->segment(1) == 'peminjaman') ? 'active' : ''; ?>">
                            <a href="<?php echo base_url(); ?>peminjaman" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="ti-arrow-right"></i></span>
                                <span class="tag tag-danger count"></span>
                                <span class="s-text">Peminjaman</span>
                            </a>
                        </li>

                        <li class="<?php echo ($this->uri->segment(1) == 'pengembalian') ? 'active' : ''; ?>">
                            <a href="<?php echo base_url(); ?>pengembalian" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="ti-arrow-left"></i></span>
                                <span class="tag tag-danger count_kembali"></span>
                                <span class="s-text">Pengembalian</span>
                            </a>
                        </li>
                        <li class="with-sub">
                            <a href="#" class="waves-effect  waves-light">
                                <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                <span class="s-icon"><i class="ti-package"></i></span>
                                <span class="s-text">Log (Riwayat)</span>
                            </a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>logpeminjaman">Log Peminjaman</a></li>
                                <li><a href="<?php echo base_url(); ?>logpengembalian">Log Pengembalian</a></li>
                            </ul>
                        </li>

                        <li class="<?php echo ($this->uri->segment(1) == 'qr') ? 'active' : ''; ?>">
                            <a href="<?php echo base_url(); ?>qr" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="ti-shortcode"></i></span>
                                <span class="s-text">QR Code</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>clogin/logout" class="waves-effect  waves-light">
                                <span class="s-icon"><i class="ti-loop"></i></span>
                                <span class="s-text">Log Out</span>
                            </a>
                        </li>
                    </ul>
                <?php } ?>
            </div>
        </div>

        <!-- Sidebar second -->


        <!-- Template options -->


        <!-- Header -->
        <div class="site-header">
            <nav class="navbar navbar-light">
                <ul class="nav navbar-nav">
                    <li class="nav-item m-r-1 hidden-lg-up">
                        <a class="nav-link collapse-button" href="#">
                            <i class="ti-menu"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav pull-xs-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                            <!-- <div class="avatar box-32">
                                <img src="<?php echo base_url(); ?>public/img/avatars/1.jpg" alt="">
                            </div> -->
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated flipInY">
                            <a class="dropdown-item" href="#">
                                <i class="ti-email m-r-0-5"></i> Inbox
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="ti-user m-r-0-5"></i> Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="ti-settings m-r-0-5"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="ti-help m-r-0-5"></i> Help</a>
                            <a class="dropdown-item" href="#"><i class="ti-power-off m-r-0-5"></i> Sign out</a>
                        </div>
                    </li>
                </ul>
                <div class="navbar-toggleable-sm collapse" id="collapse-1">
                    <div class="header-form pull-md-left m-md-r-1">
                        <h4>Sistem Informasi Perpustakaan</h4>
                    </div>
                </div>
            </nav>
        </div>