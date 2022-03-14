<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link h6 mb-0" href="<?= base_url('welcome') ?>">
                                <h4>Artikel.com</h4>
                            </a>
                        </li>
                    </ul>

                    <!-- Topbar Search -->
                    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->


                    <div class="row-mt-3">
                        <div class="col-mr-6">
                            <form action="<?= base_url(); ?>" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Searh for..." name="keyword">
                                    <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a href="<?= base_url('welcome') ?>">BERANDA</a>
                        </li>

                        <?php $menu = $this->db->get('kategori')->result();
                        foreach ($menu as $m) {
                        ?>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <a href="<?= base_url("$m->link"); ?>">
                                <i class="<?= $m->logo ?>"></i>
                                <!-- <?= $m->alias ?> -->
                                <span><?= $m->kategori ?></span>
                            </a>

                        <?php } ?>

                        <!-- <li class="nav-item">
                            <a class="nav-link h6 mb-0" href="<?= base_url('tambah_kategori') ?>">KATEGORI</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link h6 mb-0" href="<?= base_url('kategori/news') ?>">NEWS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link h6 mb-0" href="<?= base_url('kategori/hot') ?>">HOT</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link h6 mb-0" href="<?= base_url('kategori/inet') ?>">INET</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link h6 mb-0" href="<?= base_url('kategori/sport') ?>">SPORT</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link h6 mb-0" href="<?= base_url('kategori/oto') ?>">OTO</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link h6 mb-0" href="<?= base_url('kategori/food') ?>">FOOD</a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link h6 mb-0" href="<?= base_url('kategori/health') ?>">HEALTH</a>
                        </li> -->


                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-dark" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</body>