<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Tagihan</title>

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
                            <h3>Data Tagihan</h3>
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
                                    <h4 class="card-title">Edit Data Tagihan</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="<?php echo site_url() . 'Tagihan/Update' ?>" method="post" enctype="multipart/form-data">
                                            <?php foreach ($data_penagihan->result_array() as $row) {
                                                $id                         = $row['id'];
                                                $kode_instansi              = $row['kode_instansi'];
                                                $nama                       = $row['nama'];
                                                $wilayah                    = $row['wilayah'];
                                                $spb                        = $row['data_spb'];
                                                $tagihan                    = $row['tagihan'];
                                                $faktur_pajak               = $row['faktur_pajak'];
                                                $jumlah_tagihan             = $row['jumlah_tagihan'];
                                                $total_pembayaran            = $row['total_pembayaran'];
                                                $tanggal_bayar              = $row['tanggal_bayar'];
                                                $do_diterima                = $row['do_diterima'];
                                                $hari                       = $row['hari'];
                                                $tanggal                    = $row['tanggal'];


                                            ?>

                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <label>Nama Instansi</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <select class="form-control" name="kode_instansi" required>
                                                                        <option value=""> <?php echo $nama; ?> </option>
                                                                        <?php foreach ($instansi->result_array() as $row) { ?>
                                                                            <option value="<?php echo $row['kode_instansi'] ?>"><?php echo $row['nama']; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-bookmark"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Wilayah</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="text" name="wilayah" class="form-control" value="<?php echo $wilayah; ?>" id="first-name-icon" required>
                                                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-map"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>SPB</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="text" name="spb" class="form-control" value="<?php echo $spb; ?>" required>
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Tagihan</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <select class="form-control" name="tagihan" required>

                                                                        <option value=""><?php echo $tagihan; ?></option>
                                                                        <option value="lunas">Lunas</option>
                                                                        <option value="Belum">Belum</option>

                                                                    </select>
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Faktur Pajak</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="date" name="faktur_pajak" class="form-control" value="<?php echo $faktur_pajak; ?>" required>
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Jumlah Tagihan</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="number" name="jumlah_tagihan" class="form-control" value="<?php echo $jumlah_tagihan; ?>" required>
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Tanggal Bayar</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="date" name="tanggal_bayar" value="<?php echo $tanggal_bayar; ?>" class="form-control" placeholder="Buah" required>
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Tanggal DO Di Terima</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="date" name="do_diterima" class="form-control" value="<?php echo $do_diterima; ?>" required>
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Jumlah Hari</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="form-group has-icon-left">
                                                                <div class="position-relative">
                                                                    <input type="number" name="hari" class="form-control" value="<?php echo $hari; ?>" required>
                                                                    <div class="form-control-icon">
                                                                        <i class="bi bi-pencil"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                            <a href="<?php echo base_url('Tagihan') ?>" class="btn btn-light-secondary me-1 mb-1">Kembali</a>
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

            <?php include 'pages/footer.php'; ?>
        </div>
    </div>
    <script src="<?php echo base_url() . "assets/"; ?>vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url() . "assets/"; ?>js/main.js"></script>
</body>

</html>