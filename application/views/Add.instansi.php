<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Instansi</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>css/bootstrap.css">

    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>css/app.css">
    <link rel="shortcut icon" href="<?php echo base_url() . "assets/"; ?>images/favicon.svg" type="image/x-icon">
    <link rel="icon" type="image/png" href="<?php echo base_url() . "assets/"; ?>images/logo/gse.png" />
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="<?php echo base_url('Homepage/') ?>"><img src="<?php echo base_url() . "assets/"; ?>images/logo/gse.png" alt="Logo" style="height: 100px;"></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <!-- menu -->
                <?php include 'pages/submenu.php'; ?>
                <!-- end menu -->
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Instansi</h3>
                            <p class="text-subtitle text-muted">PT. GRAHA SUMBER ENERGI</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('Homepage') ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">

                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tambah Data Instansi</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="<?php echo site_url() . 'Instansi/simpan' ?>" method="post">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Kode Perusahaan</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" name="kode_instansi" class="form-control" placeholder="Kode Instansi" id="first-name-icon" required>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-bookmark"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Nama Instansi</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" name="nama" class="form-control" placeholder="Nama Instansi" id="first-name-icon" required>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>wilayah</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" name="wilayah" class="form-control" placeholder="Wilayah" required>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-map"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Alamat</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" name="alamat" class="form-control" placeholder="alamat" required>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-pen"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Phone</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="number" name="telp" class="form-control" placeholder="Phone" required>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-phone"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-envelope"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Keterangan</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-pencil"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="col-md-2">
                                                        <label>Username</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="username" placeholder="Username">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-key"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Password</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control" name="password" minlength="8" placeholder="******">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-lock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Horizontal form layout section end -->



            </div>

            <?php include 'pages/footer.php'; ?>
        </div>
    </div>
    <script src="<?php echo base_url() . "assets/"; ?>vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url() . "assets/"; ?>js/main.js"></script>
</body>

</html>