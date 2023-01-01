-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 01:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_app_penagihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `material` varchar(50) NOT NULL,
  `varian_type` varchar(50) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_satuan` varchar(20) NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id`, `kode_barang`, `material`, `varian_type`, `satuan`, `deskripsi`, `harga_satuan`, `gambar`, `tanggal`) VALUES
(2, '123', 'Kabel', 'Kabel', '13', 'Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar muffin. Dessert bonbon caramels brownie chocolate bar chocolate tart dragée.  Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar muffin.', '10000', '5697e8c19dc724a806d9774ad6661df4.jpg', '2022-11-09'),
(3, '1234', 'Box', 'Box', '13', 'Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar muffin. Dessert bonbon caramels brownie chocolate bar chocolate tart dragée.  Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar muffin.', '150000', '078e81ee9f9c36e174152678453a3b09.jpg', '2022-11-09'),
(4, '12345', 'Cable', 'Cable', '13', 'Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar muffin. Dessert bonbon caramels brownie chocolate bar chocolate tart dragée.  Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar muffin.', '20000', '93b03462930767a8bad78eb208277a49.jpg', '2022-11-09'),
(5, '555', 'kabel123', 'kabel123', '1', '', '1000', '09cc414b47626be7537739a1d7ce7d46.jpg', '2022-12-07'),
(6, 'barang', 'besi', '123', 'kg', '', '10000', 'b0fa31f7c54ab1efc4846f93eb378270.png', '2022-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_instansi`
--

CREATE TABLE `tbl_instansi` (
  `id` int(11) NOT NULL,
  `kode_instansi` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `wilayah` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_instansi`
--

INSERT INTO `tbl_instansi` (`id`, `kode_instansi`, `nama`, `wilayah`, `alamat`, `telp`, `email`, `keterangan`, `username`, `password`, `hak_akses`, `tanggal`) VALUES
(2, '1223', 'def', 'abc', 'abc', '123', 'admin@gmail.com', 'abc12345', 'abc123', 'e99a18c428cb38d5f260853678922e03', 'Instansi', '2022-12-06 10:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penagihan`
--

CREATE TABLE `tbl_penagihan` (
  `id` int(11) NOT NULL,
  `kode_instansi` varchar(20) NOT NULL,
  `wilayah` varchar(50) NOT NULL,
  `spb` varchar(30) NOT NULL,
  `tagihan` varchar(5) NOT NULL,
  `faktur_pajak` date NOT NULL,
  `jumlah_tagihan` varchar(50) NOT NULL,
  `potongan_1` varchar(50) NOT NULL,
  `potongan_2` varchar(50) NOT NULL,
  `total_pembayaran` varchar(50) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `do_diterima` date NOT NULL,
  `hari` int(10) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penagihan`
--

INSERT INTO `tbl_penagihan` (`id`, `kode_instansi`, `wilayah`, `spb`, `tagihan`, `faktur_pajak`, `jumlah_tagihan`, `potongan_1`, `potongan_2`, `total_pembayaran`, `tanggal_bayar`, `do_diterima`, `hari`, `tanggal`) VALUES
(2, '1223', 'tangerang', '123', 'lunas', '2022-12-03', '87049930', '7913630000', '118704450', '7794925550', '2022-12-06', '2022-12-03', 10, '2022-12-07 05:46:14'),
(3, '1223', 'tangerang', '123', 'lunas', '2022-12-03', '87049930', '7913630000', '118704450', '7794925550', '2022-12-05', '2022-12-03', 10, '2022-12-05 00:00:00'),
(4, '1223', 'tangerang', '123/20/213', 'Belum', '2022-12-09', '1000000', '90909090.909091', '1363636.3636364', '89545454.545455', '2022-12-29', '2022-12-31', 10, '2022-12-30 05:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajuan`
--

CREATE TABLE `tbl_pengajuan` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `material` varchar(50) NOT NULL,
  `harga_satuan` varchar(50) NOT NULL,
  `varian_type` varchar(50) NOT NULL,
  `kode_instansi` varchar(20) NOT NULL,
  `biaya_transportasi` varchar(50) NOT NULL,
  `file` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengajuan`
--

INSERT INTO `tbl_pengajuan` (`id`, `kode_barang`, `material`, `harga_satuan`, `varian_type`, `kode_instansi`, `biaya_transportasi`, `file`, `tanggal`) VALUES
(2, '123', 'Kabel', '10,000', 'Kabel', '1223', '100005', '46748d27d9a3586600904723db9b18ea.pdf', '2022-12-03'),
(3, '555', 'kabel123', '1,000', 'kabel123', '1223', '10000', 'ca04745760bc858818bae9ffc2fcc3ba.pdf', '2022-12-07'),
(4, '123', 'Kabel', '10,000', 'Kabel', '1223', '200000', '634e8d0bf743b0418fd2aad70ae49dd6.pdf', '2022-12-30'),
(5, '123', 'Kabel', '10,000', 'Kabel', '1223', '200000', '4820b6962732a4f99ee9ed8270d81abf.pdf', '2022-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `kode_pegawai` varchar(15) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `kode_pegawai`, `nama_lengkap`, `username`, `password`, `hak_akses`, `last_login`) VALUES
(3, '001', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '2023-01-01 19:26:11'),
(4, '002', 'pln', 'pln12345', '4aabc83c95c0e6d25f7f5ed1cf53a036', 'Pln', '2023-01-01 19:26:11'),
(5, '003', 'manager', 'manager123', '0795151defba7a4b5dfa89170de46277', 'Manager', '2023-01-01 19:26:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_instansi`
--
ALTER TABLE `tbl_instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penagihan`
--
ALTER TABLE `tbl_penagihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_instansi`
--
ALTER TABLE `tbl_instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_penagihan`
--
ALTER TABLE `tbl_penagihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
