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

    <!-- sweetalerts -->
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>vendors/sweetalert2/sweetalert2.min.css">
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
                            <h3>Data User</h3>
                            <p class="text-subtitle text-muted">PT. GRAHA SUMBER ENERGI</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() . 'Homepage'; ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data User</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-primary block" style=" float: right;" data-bs-toggle="modal" data-bs-target="#default" data-backdrop="static" data-keyboard="false">Tambah User</button>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Pegawai</th>
                                        <th>Nama Lengkap</th>
                                        <th>Last Login</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($user->result_array() as $row) :

                                        $no++;
                                        $id           = $row['id'];
                                        $kode_pegawai = $row['kode_pegawai'];
                                        $nama_lengkap = $row['nama_lengkap'];
                                        $last_login = $row['last_login'];
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $kode_pegawai ?></td>
                                            <td><?php echo $nama_lengkap ?></td>
                                            <td><?php echo $last_login ?></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a class="btn btn-link btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $id; ?>"><span class="fa fa-edit"></span></a>
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
                <?php foreach ($user->result_array() as $row) :
                    $id = $row['id'];
                    $nama_lengkap = $row['nama_lengkap'];
                    ?>
                    <div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button> -->
                                    <h4 class="modal-title" id="myModalLabel">Hapus User</h4>
                                </div>
                                <form class="form-horizontal" action="<?php echo base_url() . 'User/delete' ?>" method="post">
                                    <div class="modal-body">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>" />

                                        <p>Apakah Anda yakin mau menghapus <b><?php echo $nama_lengkap; ?></b> ?</p>

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

                <!-- modal -->
                <div class="modal fade " id="default" role="dialog" aria-hidden="true" data-backdrop="static">>
                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel1">Tambah Data User</h5>
                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                            <style>
                                .form-input {
                                    padding-top: 5px;
                                }
                            </style>

                            <div class="modal-body">
                                <div class="modal-body">
                                    <form action="<?php echo base_url() . 'User/add'; ?>" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Kode Pegawai</label>
                                                <div class="form-group form-input">
                                                    <input type="text" name="kode_pegawai" placeholder="Kode Pegawai" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Nama Lengkap</label>
                                                <div class="form-group form-input">
                                                    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                                <div class="form-group form-input">
                                                    <input type="text" name="username" placeholder="Username" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Password</label>
                                                <div class="form-group form-input">
                                                    <input type="password" class="form-control" name="password" minlength="8" placeholder="***" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hak Akses</label>
                                                <div class="form-group form-input">
                                                    <select name="hak_akses" class="form-control" required>
                                                        <option value="">--Pilih--</option>
                                                        <option value="Admin"> Admin </option>
                                                        <option value="Pln"> Operator / PLN </option>
                                                        <option value="Manager"> Manager </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                        <i class="bx bx-x d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Batal</span>
                                    </button>
                                    <button type="submit" class="btn btn-primary ml-1">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Tambah</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- end modal -->

                <!-- modal edit -->
                <?php foreach ($user->result_array() as $row) :
                    $id = $row['id'];
                    $kode_pegawai = $row['kode_pegawai'];
                    $nama_lengkap = $row['nama_lengkap'];
                    $hak_akses    = $row['hak_akses'];

                    ?>
                    <div class="modal fade " id="ModalEdit<?php echo $id; ?>" role="dialog" aria-hidden="true" data-backdrop="static">>
                        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel1">Update Data User</h5>
                                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                                <style>
                                    .form-input {
                                        padding-top: 5px;
                                    }
                                </style>

                                <div class="modal-body">
                                    <div class="modal-body">
                                        <form action="<?php echo base_url() . 'User/update'; ?>" method="post">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Kode Pegawai</label>
                                                    <div class="form-group form-input">
                                                        <input type="text" name="kode_pegawai" value="<?php echo $row['kode_pegawai']; ?>" placeholder="Kode Pegawai" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Nama Lengkap</label>
                                                    <div class="form-group form-input">
                                                        <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap']; ?>" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Hak Akses</label>
                                                    <div class="form-group form-input">
                                                        <select name="hak_akses" class="form-control" required>
                                                            <option value="<?php echo $row['hak_akses']; ?>"> <?php echo $row['hak_akses']; ?> </option>
                                                            <option value="Admin"> Admin </option>
                                                            <option value="Pln"> Operator / PLN </option>
                                                            <option value="Manager"> Manager </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Username</label>
                                                    <div class="form-group form-input">
                                                        <input type="text" name="username" value="<?php echo $row['username']; ?>" placeholder="Kode Pegawai" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Password</label>
                                                    <div class="form-group form-input">
                                                        <input type="checkbox" id="vehicle1" name="password" value="123456*">
                                                        <label>Ubah Password</label>
                                                        <br>
                                                        <small style="color: #da7070;">Password default : 123456* </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Batal</span>
                                        </button>
                                        <button type="submit" class="btn btn-primary ml-1">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Simpan</span>
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