<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Barang</title>

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
                            <h3>Data Barang</h3>
                            <p class="text-subtitle text-muted">PT. GRAHA SUMBER ENERGI</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('Homepage') ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
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
                                    <h4 class="card-title">Edit Data Barang</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="<?php echo site_url() . 'Barang/update' ?>" method="post" enctype="multipart/form-data">
                                            <?php foreach ($barang as $row) { ?>
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <label>Kode Barang</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="text" name="kode_barang" class="form-control" placeholder="Kode Barang" id="first-name-icon" value="<?php echo $row->kode_barang ?>" required>
                                                                    <input type="hidden" name="id" value="<?php echo $row->id ?>">
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-bookmark"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Material</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="text" name="material" class="form-control" placeholder="Material" id="first-name-icon" value="<?php echo $row->material ?>" required>
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-gear"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Varian Type</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="text" name="varian_type" class="form-control" placeholder="Varian Type" value="<?php echo $row->varian_type ?>" required>
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Deskripsi</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" value="<?php echo $row->deskripsi ?>" required>
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Satuan</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="text" name="satuan" class="form-control" value="<?php echo $row->satuan ?>" placeholder="Buah" required>
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Harga Satuan</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="number" name="harga_satuan" class="form-control" value="<?php echo $row->harga_satuan ?>" placeholder="Harga Satuan" required>
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Gambar</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="file" name="gambar" class="form-control" placeholder="Varian Type" required>
                                                                    <div class="form-control-icon" style="padding-left: 5px;">
                                                                        <i class="bi bi-image"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                            <a href="<?php echo base_url() . 'Barang'; ?>" class="btn btn-light-secondary me-1 mb-1">Cancel</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Horizontal form layout section end -->
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?php echo base_url() . "assets/"; ?>vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url() . "assets/"; ?>js/main.js"></script>
</body>

</html>