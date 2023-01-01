<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Web Penagihan</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>css/bootstrap.css">

    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>vendors/iconly/bold.css">

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
                <!-- submenu -->
                <?php include 'pages/submenu.php'; ?>
                <!-- end submenu -->
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
                <h3>PT.<span>GRAHA SUMBER ENERGI</span></h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldPaper"></i>
                                                </div>
                                            </div>
                                            <?php foreach ($user as $key => $user_data) { ?>
                                                <div class="col-md-8">
                                                    <h6 class="text-muted font-semibold">Data User</h6>
                                                    <h6 class="font-extrabold mb-0"><?php echo $user_data->jumlah; ?></h6>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="iconly-boldPaper-Plus"></i>
                                                </div>
                                            </div>
                                            <?php foreach ($tagihan as $key => $tagihan_data) { ?>

                                                <div class="col-md-8">
                                                    <h6 class="text-muted font-semibold">Data Tagihan</h6>
                                                    <h6 class="font-extrabold mb-0"><?php echo $tagihan_data->jumlah ?></h6>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldPaper-Negative"></i>
                                                </div>
                                            </div>
                                            <?php foreach ($transaksi as $key => $pengajuan_data) { ?>
                                                <div class="col-md-8">
                                                    <h6 class="text-muted font-semibold">Data Transaksi</h6>
                                                    <h6 class="font-extrabold mb-0"><?php echo $pengajuan_data->jumlah; ?></h6>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldHome"></i>
                                                </div>
                                            </div>
                                            <?php foreach ($instansi as $key => $instansi_data) { ?>
                                                <div class="col-md-8">
                                                    <h6 class="text-muted font-semibold">Data Instansi</h6>
                                                    <h6 class="font-extrabold mb-0"><?php echo $instansi_data->jumlah; ?></h6>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Data Pengajuan</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-profile-visit"></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-12 col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Data Pengajuan Terakhir</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Instansi</th>
                                                        <th>Tanggal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($pengajuan as $key => $value) { ?>

                                                        <tr>
                                                            <td class="col-3">
                                                                <div class="d-flex align-items-center">
                                                                    <p class="font-bold ms-3 mb-0"><?php echo $value->nama; ?></p>
                                                                </div>
                                                            </td>
                                                            <td class="col-auto">
                                                                <p class=" mb-0"><?php echo $value->tanggal; ?></p>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>

            <!-- footer -->
            <?php include 'pages/footer.php'; ?>
            <!-- end footer -->
        </div>
    </div>
    <script src="<?php echo base_url() . "assets/"; ?>vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url() . "assets/"; ?>vendors/apexcharts/apexcharts.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>js/pages/dashboard.js"></script>

    <script src="<?php echo base_url() . "assets/"; ?>js/main.js"></script>
</body>

</html>