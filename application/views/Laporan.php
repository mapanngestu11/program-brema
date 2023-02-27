<html>

<head>
    <title>Laporan Penagihan</title>
</head>

<body>
    <table width="100%">
        <tr>
            <td width="30%" align="center"><img src="<?php echo base_url() . "assets/"; ?>images/logo/gse.png" width="60%"></td>
            <td width="50%" align="center">
                <h1>Laporan Penagihan</h1>

                <h3>PT.GRAHA SUMBER ENERGI</h3>
                <p>Jl. Manis Raya No.12, RW.002, Manis Jaya, Kec. Jatiuwung, Kabupaten Tangerang, Banten 15136</p>
            </td>
        </tr>
    </table>
    <hr>
    <style>
        .tanggal {
            float: right;
            font-size: 14px;
        }
    </style>
    <?php
    $tanggal = date('d-F-y');
    ?>
    <p class="tanggal">Tangerang, <?php echo $tanggal ?></p>

    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>

    <table id="customers">
        <tr>
            <th>Nama Instansi</th>
            <th>Wilayah</th>
            <th>SPB</th>
            <th>Faktur Pajak</th>
            <th>Jumlah Tagihan</th>
            <th>Tanggal Bayar</th>
            <th>Do Diterima</th>
            <th>Jumlah Hari</th>
            <th>Keterangan</th>
        </tr>
        <?php foreach ($laporan->result_array() as $row) :
            $nama = $row['nama'];
            $wilayah = $row['wilayah'];
            $spb = $row['spb'];
            $faktur_pajak = $row['faktur_pajak'];
            $jumlah_tagihan = $row['jumlah_tagihan'];
            $tanggal_bayar = $row['tanggal_bayar'];
            $do_diterima = $row['do_diterima'];
            $hari       = $row['hari'];
            $tagihan   = $row['tagihan'];

            $originalDate6 = $tanggal_bayar;
            $tgl = date("d-F-Y", strtotime($originalDate6));


            $originalDate6 = $do_diterima;
            $tgl1 = date("d-F-Y", strtotime($originalDate6));

            ?>
            <tr>

                <td><?php echo $nama; ?></td>
                <td><?php echo $wilayah; ?></td>
                <td><?php echo $spb; ?></td>
                <td><?php echo $faktur_pajak; ?></td>
                <td>Rp.<?php echo number_format($jumlah_tagihan); ?></td>
                <td><?php echo $tgl; ?></td>
                <td><?php echo $tgl1; ?></td>
                <td><?php echo $hari; ?></td>
                <td><?php echo $tagihan; ?></td>

            </tr>
        <?php endforeach; ?>
    </table>

</body>


<script>
    window.print();
</script>

</html>