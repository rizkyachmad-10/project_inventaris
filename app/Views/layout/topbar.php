<header class="header-top" header-theme="light">

    <div class="container-fluid">

        <div class="d-flex align-items-center justify-content-between"
             style="height:70px;">

            <!-- SEARCH -->
            <div class="header-search" style="width:300px;">

                <div class="input-group">

                    <input type="text"
                           class="form-control"
                           placeholder="Search...">

                    <span class="input-group-append">
                        <button class="btn btn-link" type="button">
                            <i class="ik ik-search"></i>
                        </button>
                    </span>

                </div>

            </div>

            <!-- MENU KANAN -->
            <div class="d-flex align-items-center">

                <!-- Notifikasi -->
                <a href="#"
                   class="d-flex align-items-center mr-4 text-dark"
                   style="text-decoration:none;">

                    <i class="ik ik-bell mr-1"></i>

                    <span class="badge badge-danger">
                        3
                    </span>

                </a>

                <!-- Admin -->
                <a href="#"
                   class="d-flex align-items-center mr-4 text-dark"
                   style="text-decoration:none;">

                    <i class="ik ik-user mr-1"></i>

                    <span>
                        <?= esc(session()->get('username') ?? 'Admin') ?>
                    </span>

                </a>

                <!-- Logout -->
                <a href="<?= base_url('logout') ?>"
                   class="text-dark"
                   style="text-decoration:none;">

                    Logout

                </a>

            </div>

        </div>

    </div>

</header>