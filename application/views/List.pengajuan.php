<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>css/bootstrap.css">

    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>css/app.css">
    <link rel="shortcut icon" href="<?php echo base_url() . "assets/"; ?>images/favicon.svg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="<?php echo base_url() . "assets/"; ?>images/logo/gse.png" />
    <!-- sweetalerts -->
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>vendors/sweetalert2/sweetalert2.min.css">
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
                            <h3>Data Pengajuan</h3>
                            <p class="text-subtitle text-muted">PT. GRAHA SUMBER ENERGI</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() . 'Homepage'; ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Pengajuan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary block" href="<?php echo base_url('Pengajuan/list_barang') ?>" style=" float: right;">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Barang</th>
                                        <th>Material </th>
                                        <th>Varian Type</th>
                                        <th>Nama Instansi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($pengajuan->result_array() as $row) :

                                        $no++;
                                        $id             = $row['id'];
                                        $kode_barang  = $row['kode_barang'];
                                        $material           = $row['material'];
                                        $varian_type        = $row['varian_type'];
                                        $nama        = $row['nama'];

                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $kode_barang ?></td>
                                            <td><?php echo $material ?></td>

                                            <td><?php echo $varian_type ?></td>
                                            <td><?php echo $nama ?></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a class="btn btn-link btn-primary btn-lg" href="<?php echo base_url() . 'Pengajuan/edit/' . $id; ?>"><span class="fa fa-edit"></span></a>
                                                    <a class="btn btn-link btn-warning btn-lg" data-bs-toggle="modal" data-bs-target="#ModalDetail<?php echo $id; ?>"><i class=" fa fa-eye" data-original-title="Edit Task"></i></a>
                                                    <a class="btn btn-link btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#ModalHapus<?php echo $id; ?>"><i class=" fa fa-times" data-original-title="Edit Task"></i></a>
                                                </div>
                                            </td>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </section>
                </div>


                <!-- modal hapus -->
                <?php foreach ($pengajuan->result_array() as $row) :
                    $id = $row['id'];
                    $material = $row['material'];
                    ?>
                    <div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button> -->
                                    <h4 class="modal-title" id="myModalLabel">Hapus Barang</h4>
                                </div>
                                <form class="form-horizontal" action="<?php echo base_url() . 'Pengajuan/delete' ?>" method="post">
                                    <div class="modal-body">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>" />

                                        <p>Apakah Anda yakin mau menghapus <b><?php echo $material; ?></b> ?</p>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Batal</span>
                                        </button>
                                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- end modal -->


                <!-- modal edit -->
                <?php foreach ($pengajuan->result_array() as $row) :
                    $id                 = $row['id'];
                    $material           = $row['material'];
                    $kode_barang        = $row['kode_barang'];
                    $harga_satuan       = $row['harga_satuan'];
                    $varian_type        = $row['varian_type'];
                    $nama               = $row['nama'];
                    $biaya_transportasi = $row['biaya_transportasi'];
                    $file               = $row['file'];
                    $tanggal            = $row['tanggal'];

                    $originalDate1 = $tanggal;
                    $tgl = date("d-F-Y", strtotime($originalDate1));
                    ?>
                    <div class="modal fade" id="ModalDetail<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content modal-lg">
                                <div class="modal-header">
                                    <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button> -->
                                    <h4 class="modal-title" id="myModalLabel">Lihat Detail</h4>
                                </div>
                                <form class="form-horizontal" action="<?php echo base_url() . 'Pengajuan/delete' ?>" method="post">
                                    <div class="modal-body">
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Kode Barang</label>
                                                <input class="form-control" value="<?php echo $kode_barang; ?>" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Material</label>
                                                <input class="form-control" value="<?php echo $material; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Varian Type</label>
                                                <input class="form-control" value="<?php echo $varian_type; ?>" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Harga Satuan</label>
                                                <input class="form-control" value="<?php echo $harga_satuan; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Nama Instansi</label>
                                                <input class="form-control" value="<?php echo $nama; ?>" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Biaya Transportasi</label>
                                                <input class="form-control" value="<?php echo $biaya_transportasi; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="row form-group" style="margin-top: 10px;">
                                            <div class="col-md-6">
                                                <label>Download File</label>
                                                <br>
                                                <a href="<?php echo base_url() . "assets/file/" . $file ?>" class="btn btn-primary" style="padding-top: 5px;">Lihat</a>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Di Upload pada : <?php echo $tgl; ?></label>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary btn-flat" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Batal</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- end modal -->

                <!-- end -->
                <!-- footer -->
                <?php include 'pages/footer.php'; ?>
                <!-- end footer -->
            </div>
        </div>
        <script src="<?php echo base_url() . "assets/"; ?>vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="<?php echo base_url() . "assets/"; ?>js/bootstrap.bundle.min.js"></script>

        <script src="<?php echo base_url() . "assets/"; ?>vendors/simple-datatables/simple-datatables.js"></script>
        <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    <!-- sweetalerts -->
    <script src="<?php echo base_url() . "assets/"; ?>js/main.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>js/extensions/sweetalert2.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>vendors/sweetalert2/sweetalert2.all.min.js"></script>


    <!-- msg -->
    <?php if ($this->session->flashData('msg') == 'warning') : ?>
        <script type="text/javascript">
            Swal.fire({
                type: 'warning',
                title: 'Perhatian !',
                heading: 'Success',
                text: "Data Sudah ada .",
                showHideTransition: 'slide',
                icon: 'warning',
                hideAfter: false,
                bgColor: '#7EC857'
            });
        </script>

        <?php elseif ($this->session->flashData('msg') == 'success') : ?>
            <script type="text/javascript">
                Swal.fire({
                    type: 'success',
                    title: 'Sukses',
                    heading: 'Success',
                    text: "Data Berhasil Di Tambahkan.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    bgColor: '#7EC857'
                });
            </script>
            <?php elseif ($this->session->flashData('msg') == 'info-update') : ?>
                <script type="text/javascript">
                    Swal.fire({
                        type: 'success',
                        title: 'Sukses',
                        heading: 'Success',
                        text: "Data Berhasil Di Update.",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        bgColor: '#7EC857'
                    });
                </script>
                <?php elseif ($this->session->flashData('msg') == 'success-hapus') : ?>
                    <script type="text/javascript">
                        Swal.fire({
                            type: 'success',
                            title: 'Sukses',
                            heading: 'Success',
                            text: "Data Berhasil dihapus.",
                            showHideTransition: 'slide',
                            icon: 'success',
                            hideAfter: false,
                            bgColor: '#7EC857'
                        });
                    </script>
                    <?php else : ?>

                    <?php endif; ?>
                    <!-- end msg -->
                </body>

                </html>