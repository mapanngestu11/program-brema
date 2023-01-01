<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengajuan</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>css/bootstrap.css">

    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>css/app.css">
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
                <?php include 'pages/submenu.php'; ?>
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
                            <h3>Data Pengajuan</h3>
                            <p class="text-subtitle text-muted">Data Barng yang bisa di ajukan oleh instansi.</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah Pengajuan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Basic card section start -->
                <section id="content-types">
                    <div class="row">
                        <?php
                        foreach ($barang->result_array() as $row) :
                            $id                 = $row['id'];
                            $kode_barang        = $row['kode_barang'];
                            $material           = $row['material'];
                            $varian_type        = $row['varian_type'];
                            $harga_satuan        = $row['harga_satuan'];
                            $deskripsi          = $row['deskripsi'];
                            $gambar             = $row['gambar'];
                        ?>
                            <style>
                                #demo-3 {
                                    white-space: nowrap;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                    max-width: 100px;
                                }
                            </style>
                            <div class="col-md-4 col-sm-12">
                                <div class="card">
                                    <div class="card-content">
                                        <img class="card-img-top img-fluid" src="<?php echo base_url() . "assets/"; ?>foto_barang/<?php echo $gambar ?>" alt="Card image cap" style="height: 250px" />
                                        <div class="card-body">
                                            <h4 class="card-title"><?php echo $material; ?></h4>
                                            <hr>
                                            <p class="card-text">
                                                <?php echo $varian_type; ?>
                                            </p>
                                            <p class="card-text">
                                                <?php echo $harga_satuan; ?>
                                            </p id="#demo-3">
                                            <p class="card-text deskripsi">
                                                <?php echo $deskripsi; ?>
                                            </p>
                                            <a href="<?php echo base_url() . 'Pengajuan/add/' . $kode_barang; ?>" class="btn btn-primary block">Tambah Data</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
                <!-- Basic Card types section end -->

            </div>

            <?php include 'pages/footer.php' ?>
        </div>
    </div>
    <script src="<?php echo base_url() . "assets/"; ?>vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url() . "assets/"; ?>js/main.js"></script>
</body>

</html>