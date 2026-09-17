<div class="app-sidebar colored">

    <div class="sidebar-header">

        <a class="header-brand" href="<?= base_url('dashboard') ?>">

            <div class="logo-img">
                <img src="<?= base_url('assets/img/brand.svg') ?>"
                     class="header-brand-img"
                     alt="TK Inventaris">
            </div>

            <span class="text">
                TK Inventaris
            </span>

        </a>

        <button type="button" class="nav-toggle">
            <i class="ik ik-toggle-right"></i>
        </button>

    </div>


    <div class="sidebar-content">

        <div class="nav-container">

            <nav id="main-menu-navigation"
                 class="navigation-main">


                <!-- DASHBOARD -->
                <div class="nav-item active">

                    <a href="<?= base_url('dashboard') ?>">

                        <i class="ik ik-home"></i>

                        <span>
                            Dashboard
                        </span>

                    </a>

                </div>


                <!-- INVENTARIS -->
                <div class="nav-lavel">
                    INVENTARIS
                </div>


                <div class="nav-item">

                    <a href="#">

                        <i class="ik ik-box"></i>

                        <span>
                            Data Barang
                        </span>

                    </a>

                </div>


                <div class="nav-item">

                    <a href="#">

                        <i class="ik ik-layers"></i>

                        <span>
                            Kategori Barang
                        </span>

                    </a>

                </div>


                <!-- TRANSAKSI -->
                <div class="nav-lavel">
                    TRANSAKSI
                </div>


                <div class="nav-item">

                    <a href="#">

                        <i class="ik ik-edit"></i>

                        <span>
                            Peminjaman
                        </span>

                    </a>

                </div>


                <div class="nav-item">

                    <a href="#">

                        <i class="ik ik-repeat"></i>

                        <span>
                            Pengembalian
                        </span>

                    </a>

                </div>


                <!-- MASTER DATA -->
                <div class="nav-lavel">
                    MASTER DATA
                </div>


                <div class="nav-item">

                    <a href="#">

                        <i class="ik ik-users"></i>

                        <span>
                            Pengguna
                        </span>

                    </a>

                </div>


                <div class="nav-item">

                    <a href="#">

                        <i class="ik ik-home"></i>

                        <span>
                            Ruangan
                        </span>

                    </a>

                </div>


                <!-- LOGOUT -->
                <div class="nav-item">

                    <a href="<?= base_url('logout') ?>">

                        <i class="ik ik-log-out"></i>

                        <span>
                            Logout
                        </span>

                    </a>

                </div>


            </nav>

        </div>

    </div>

</div>