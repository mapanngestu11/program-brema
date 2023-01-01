<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Pengajuan</title>

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
                                    <h4 class="card-title">Update Data Pengajuan</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="<?php echo site_url() . 'Pengajuan/update' ?>" method="post" enctype="multipart/form-data">
                                            <?php
                                            $no = 0;
                                            foreach ($pengajuan->result_array() as $row) :
                                                $id           = $row['id'];
                                                $kode_barang  = $row['kode_barang'];
                                                $material           = $row['material'];
                                                $varian_type        = $row['varian_type'];
                                                $harga_satuan       = $row['harga_satuan'];
                                                $nama               = $row['nama'];
                                                $biaya_transportasi = $row['biaya_transportasi'];
                                            ?>
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label>Kode barang</label>
                                                        </div>

                                                        <div class="col-md-9">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="text" class="form-control" name="kode_barang" value="<?php echo $kode_barang ?>" id="first-name-icon" readonly>
                                                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-bookmark"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>Material</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="text" name="material" class="form-control" value="<?php echo $material ?>" id="first-name-icon" readonly>
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>Harga Satuan</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="text" name="harga_satuan" class="form-control" id="harga_satuan" value="<?php echo $harga_satuan ?>" readonly>
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>Varian Type</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="text" name="varian_type" class="form-control" value="<?php echo $varian_type ?>" readonly>
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>Unit Penerima</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <select name="kode_instansi" class="form-control" required>
                                                                        <option value=""> <?php echo $nama ?></option>
                                                                        <?php foreach ($instansi->result_array() as $row) : ?>
                                                                            <option value="<?php echo $row['kode_instansi'] ?>"><?php echo $row['nama']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-pen"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>Biaya Transportasi</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="number" name="biaya_transportasi" class="form-control" id="biaya_transportasi" value="<?php echo $biaya_transportasi; ?>" placeholder="Rp." required>
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>Lampirkan File</label>
                                                        </div>

                                                        <div class="col-md-9">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="file" class="form-control" name="file" placeholder="Berkas" required>
                                                                    <div class=" form-control-icon">
                                                                        <i class="bi bi-envelope"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p style="color: #e25454; text-align:right;">File Harus Berupa PDF</p>
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
                                    <?php endforeach; ?>
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