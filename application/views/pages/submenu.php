<div class="sidebar-menu">
    <ul class="menu">
        <?php if ($this->session->userdata('hak_akses') === 'Admin') : ?>
            <li class="sidebar-title">Menu
            </li>
            <li class="sidebar-item active ">
                <a href="<?php echo base_url('Homepage/') ?>" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>

                </a>
            </li>
            <li class="sidebar-title">Data Akun</li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-collection-fill"></i>
                    <span>Data User</span>
                </a>
                <ul class="submenu">
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('User/') ?>">Lihat Data</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-title">Data Instansi</li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Data Instansi</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('Instansi/add') ?>">Tambah Data</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('Instansi/') ?>">Lihat Data</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-title">Data Barang</li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Data Barang</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('Barang/add') ?>">Tambah Data</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('Barang') ?>">Lihat Data</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-title">Data Transaksi</li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-file-earmark-medical-fill"></i>
                    <span>Data Pengajuan</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('Pengajuan/list_barang') ?>">Lihat Barang</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('Pengajuan') ?>">Lihat Data</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-file-earmark-medical-fill"></i>
                    <span>Data Tagihan</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('Tagihan/add') ?>">Tambah Data</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('Tagihan') ?>">Lihat Data</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-file-earmark-medical-fill"></i>
                    <span>Data Tunggakan</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('Tunggakan') ?>">Lihat Data</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-title">Laporan</li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>Laporan</span>
                </a>
                <ul class="submenu" style="margin-bottom: 300px !important;">
                    <li class="submenu-item">
                        <a href="<?php echo base_url('Laporan') ?>">Lihat Data</a>
                    </li>
                </ul>
            </li>
            <br>
            <li class="sidebar-item active ">
                <a href="<?php echo base_url('Login/logout') ?>" class='sidebar-link'>
                    <i class="bi bi-key"></i>
                    <span>Logout</span>
                </a>
            </li>
        <?php elseif ($this->session->userdata('hak_akses') === 'Pln') : ?>
            <li class="sidebar-title">Menu
            </li>
            <li class="sidebar-item active ">
                <a href="<?php echo base_url('Homepage/') ?>" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>

                </a>
            </li>
            <li class="sidebar-title">Data Barang</li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Data Barang</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('Barang/add') ?>">Tambah Data</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('Barang') ?>">Lihat Data</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item active ">
                <a href="<?php echo base_url('Login/logout') ?>" class='sidebar-link'>
                    <i class="bi bi-key"></i>
                    <span>Logout</span>
                </a>
            </li>
        <?php elseif ($this->session->userdata('hak_akses') === 'Manager') : ?>
            <li class="sidebar-title">Menu
            </li>
            <li class="sidebar-item active ">
                <a href="<?php echo base_url('Homepage/') ?>" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>

                </a>
            </li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-file-earmark-medical-fill"></i>
                    <span>Data Tunggakan</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('Tunggakan') ?>">Lihat Data</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-title">Laporan</li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>Laporan</span>
                </a>
                <ul class="submenu" style="margin-bottom: 300px !important;">
                    <li class="submenu-item">
                        <a href="<?php echo base_url('Laporan') ?>">Lihat Data</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item active ">
                <a href="<?php echo base_url('Login/logout') ?>" class='sidebar-link'>
                    <i class="bi bi-key"></i>
                    <span>Logout</span>
                </a>
            </li>
        <?php elseif ($this->session->userdata('hak_akses') === 'Instansi') : ?>
            <li class="sidebar-title">Menu
            </li>
            <li class="sidebar-item active ">
                <a href="<?php echo base_url('Homepage/') ?>" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>

                </a>
            </li>
            <li class="sidebar-title">Data Transaksi</li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-file-earmark-medical-fill"></i>
                    <span>Data Pengajuan</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('Pengajuan/list_barang') ?>">Lihat Barang</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('Pengajuan') ?>">Lihat Data</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-file-earmark-medical-fill"></i>
                    <span>Data Tagihan</span>
                </a>
                <ul class="submenu ">
                    <!-- <li class="submenu-item ">
                        <a href="<?php echo base_url('Tagihan/add') ?>">Tambah Data</a>
                    </li> -->
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('Tagihan') ?>">Lihat Data</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item active ">
                <a href="<?php echo base_url('Login/logout') ?>" class='sidebar-link'>
                    <i class="bi bi-key"></i>
                    <span>Logout</span>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</div>