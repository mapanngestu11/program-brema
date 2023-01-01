<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input - Mazer Admin Dashboard</title>

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
                <!-- menu -->
                <?php include 'pages/submenu.php'; ?>
                <?php include 'lib.php'; ?>
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
                            <h3>Input</h3>
                            <p class="text-subtitle text-muted">Give textual form controls like input upgrade with
                                custom styles,
                                sizing, focus states, and more.</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Input</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Input with Icons start -->
                <section id="input-with-icons">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Input Data Transaksi</h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>Data Transaksi Bisa di inputkan dengan mengecek <strong>Kode instansi</strong> terlebih dahulu.
                                            </p>
                                        </div>
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <h6>Cek Kode Instansi</h6>
                                                    <div class="form-group position-relative has-icon-left">
                                                        <input type="text" name="kode_instansi" id="kode_instansi" class="form-control" placeholder="Kode Instansi">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-key"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end" style="padding-bottom: 5px;">
                                                <button onclick="check_kode()" id="cek_kode" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            </div>
                                        </form>
                                        <hr style="padding:1px;">
                                        <form class="form">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h6>SPB</h6>
                                                    <div class="form-group position-relative has-icon-left">
                                                        <input type="text" name="spb" class="form-control" placeholder="SPB." required>
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-files"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h6>Kode Instansi</h6>
                                                    <div class="form-group position-relative has-icon-left">
                                                        <input type="text" class="form-control" name="kode_instansi" id="kode_instansi_baru" readonly>
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-key"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- baris ke 2 -->
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h6>Nama</h6>
                                                    <div class="form-group position-relative has-icon-left">
                                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" readonly>
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-files"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h6>Wilayah</h6>
                                                    <div class="form-group position-relative has-icon-left">
                                                        <input type="text" class="form-control" name="wilayah" id="wilayah" readonly>
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-map"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- baris ke 3 -->
                                            <h6 style="padding: 5px;"><u>Data Penagihan</u></h6>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h6>Tagihan</h6>
                                                    <div class="form-group position-relative has-icon-left">
                                                        <select name="tagihan" class="form-control" required>
                                                            <option value="">--Pilih--</option>
                                                            <option value="sudah"> Sudah </option>
                                                            <option value="belum"> Belum </option>
                                                        </select>
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h6>Jumlah Tagihan</h6>
                                                    <div class="form-group position-relative has-icon-left">
                                                        <input type="text" id="rupiah2" name="rupiah2" class="form-control">
                                                        <div class=" form-control-icon">
                                                            <i class="bi bi-pen"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 d-flex justify-content-end" style="padding: 5px;">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input with Icons end -->

            </div>

            <!-- footer -->
            <?php include 'pages/footer.php'; ?>
            <!-- end footer -->
        </div>
    </div>
    <script src="<?php echo base_url() . "assets/"; ?>vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url() . "assets/"; ?>js/main.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>

    <!-- cek kode -->

    <script>
        $(document).ready(function() {
            $('#cek_kode').click(function() {

                var id = $('#data_kode').val();
                if (id != '') {


                } else {
                    alert("Masukan Kode Instansi");
                }

            });
        });

        function check_kode() {
            $('#cek_kode').text('Sedang mencari...');
            $('#cek_kode').attr('disabled', true);



            var input_check_kode = $('[name="kode_instansi"]').val();

            if (!$.trim(input_check_kode)) {
                alert("Data Belum Di Input" + input_check_kode);
                $('#cek_kode').text('Cek Data');
                $('#cek_kode').attr('disabled', false);
            } else {

                console.log(input_check_kode);
                // alert('input_check_kode');
                // alert(input_check_nip);
                $.ajax({
                    url: "<?= site_url('Transaksi/cek_kode/') ?>",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        input_check_kode: input_check_kode
                    },



                    success: function(data) {

                        if (data.result.kode_instansi) {
                            console.log(data.result.kode_instansi);
                            alert('Data Ditemukan.');
                            $('#kode_instansi_baru').val(data.result.kode_instansi);
                            $('#nama').val(data.result.nama);
                            $('#wilayah').val(data.result.wilayah);

                            $('#cek_kode').text('Cek Kode');
                            $('#cek_kode').attr('disabled', false);
                            $('#pay-button').attr('disabled', false);
                        } else if (!data.result.kode_instansi) {
                            alert('data Tidak Ditemukan.');
                            console.log(data.result);
                            $('#kode_instansi').val('');
                            $('#cek_kode').text('Submit');
                            $('#cek_kode').attr('disabled', false);

                        }



                    },
                    error: function(jqXHR, textStatus, errorThrown) {



                        $('#cek_nisn').attr('disabled', false);
                    }
                })
            }
        }
    </script>
    <!-- end cek kode -->

    <!-- cek rupiah -->
    <script>
        var rupiah1 = document.getElementById("rupiah1");
        rupiah1.addEventListener("keyup", function(e) {
            rupiah1.value = convertRupiah(this.value);
        });
        rupiah1.addEventListener('keydown', function(event) {
            return isNumberKey(event);
        });

        var rupiah2 = document.getElementById("rupiah2");
        rupiah2.addEventListener("keyup", function(e) {
            rupiah2.value = convertRupiah(this.value, "Rp. ");
        });
        rupiah2.addEventListener('keydown', function(event) {
            return isNumberKey(event);
        });

        function convertRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, "").toString(),
                split = number_string.split(","),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? "." : "";
                rupiah += separator + ribuan.join(".");
            }

            rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
            return prefix == undefined ? rupiah : rupiah ? prefix + rupiah : "";
        }

        function isNumberKey(evt) {
            key = evt.which || evt.keyCode;
            if (key != 188 // Comma
                &&
                key != 8 // Backspace
                &&
                key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
                &&
                (key < 48 || key > 57) // Non digit
            ) {
                evt.preventDefault();
                return;
            }
        }
    </script>

</body>

</html>