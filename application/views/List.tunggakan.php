<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tunggakan</title>

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
                            <h3>Data Tunggakan</h3>
                            <p class="text-subtitle text-muted">PT. GRAHA SUMBER ENERGI</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() . 'Homepage'; ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Tunggakan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <label>Data Dibawah merupakan instansi dengan status <strong> Belum Lunas</strong></label>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Instansi</th>
                                        <th>Nama </th>
                                        <th>Wilayah</th>
                                        <th>Total Pembayaran</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($data_penagihan->result_array() as $row) :

                                        $no++;
                                        $id                 = $row['id'];
                                        $kode_instansi        = $row['kode_instansi'];
                                        $nama           = $row['nama'];
                                        $wilayah        = $row['wilayah'];
                                        $total_pembayaran        = $row['total_pembayaran'];

                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $kode_instansi ?></td>
                                            <td><?php echo $nama ?></td>
                                            <td><?php echo $wilayah ?></td>
                                            <td>Rp.<?php echo number_format($total_pembayaran) ?></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a class="btn btn-link btn-warning btn-lg" data-bs-toggle="modal" data-bs-target="#ModalDetail<?php echo $id; ?>"><i class=" fa fa-eye" data-original-title="Edit Task"></i></a>
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
                <?php foreach ($data_penagihan->result_array() as $row) :
                    $id = $row['id'];
                // $nama = $row['nama'];

                    ?>
                    <div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button> -->
                                    <h4 class="modal-title" id="myModalLabel">Hapus Tagihan</h4>
                                </div>
                                <form class="form-horizontal" action="<?php echo base_url() . 'Tagihan/delete' ?>" method="post">
                                    <div class="modal-body">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>" />

                                        <p>Apakah Anda yakin mau menghapus ?</p>

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
                <?php foreach ($data_penagihan->result_array() as $row) :
                    $id = $row['id'];
                    $nama = $row['nama'];
                    $wilayah = $row['wilayah'];
                    $spb     = $row['spb'];
                    $tagihan = $row['tagihan'];
                    $faktur_pajak = $row['faktur_pajak'];
                    $jumlah_tagihan = $row['jumlah_tagihan'];
                    $total_pembayaran = $row['total_pembayaran'];
                    $tanggal_bayar = $row['tanggal_bayar'];
                    $do_diterima  = $row['do_diterima'];
                    $hari = $row['hari'];
                    $tanggal            = $row['tanggal'];
                    $originalDate1 = $tanggal;
                    $tgl = date("d-F-Y", strtotime($originalDate1));

                    $originalDate2 = $tanggal_bayar;
                    $tgl_bayar = date("d-F-Y", strtotime($originalDate1));

                    $originalDate3 = $faktur_pajak;
                    $tgl_faktur = date("d-F-Y", strtotime($originalDate3));

                    $originalDate4 = $do_diterima;
                    $tgl_do = date("d-F-Y", strtotime($originalDate3));

                    ?>
                    <style>
                        .baris {
                            padding: 5px;
                        }
                    </style>
                    <div class="modal fade" id="ModalDetail<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content modal-lg">
                                <div class="modal-header">
                                    <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button> -->
                                    <h4 class="modal-title" id="myModalLabel">Detail Tagihan</h4>
                                </div>
                                <form class="form-horizontal" action="<?php echo base_url() . 'Tagihan/' ?>" method="post">
                                    <div class="modal-body">
                                        <div class="form-group baris">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nama Instansi</label>
                                                    <input type="text" class="form-control" value="<?php echo $nama; ?>" readonly>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Wilayah</label>
                                                    <input type="text" class="form-control" value="<?php echo $wilayah; ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group baris">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Faktur Pajak</label>
                                                    <input type="text" class="form-control" value="<?php echo $tgl_faktur; ?>" readonly>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Jumlah Tagihan</label>
                                                    <input type="text" class="form-control" value="<?php echo number_format($jumlah_tagihan); ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group baris">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Total Pembayaran</label>
                                                    <input type="text" class="form-control" value="<?php echo number_format($total_pembayaran); ?>" readonly>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Tanggal Bayar</label>
                                                    <input type="text" class="form-control" value="<?php echo $tgl_bayar; ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group baris">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Do Diterima</label>
                                                    <input type="text" class="form-control" value="<?php echo $tgl_do; ?>" readonly>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Jumlah Hari</label>
                                                    <input type="text" class="form-control" value="<?php echo $hari; ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>

                                            </button>
                                            <button type="button" data-bs-dismiss="modal" class="btn btn-primary btn-flat" id="simpan">Kembali</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
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