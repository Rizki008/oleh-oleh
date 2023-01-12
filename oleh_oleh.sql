-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 07:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oleh_oleh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(125) DEFAULT NULL,
  `no_tlpn` varchar(15) DEFAULT NULL,
  `kode_post` varchar(10) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `nama_admin`, `username`, `password`, `no_tlpn`, `kode_post`, `alamat`, `level`) VALUES
(1, 'Adlan', 'admin', 'admin', '08935662374', '45512', 'Desa Purwawinangunn RT/RW 01/01', '1');

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id_alamat` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `nama2` varchar(50) DEFAULT NULL,
  `no_tlpn2` varchar(15) DEFAULT NULL,
  `kode_post2` varchar(10) DEFAULT NULL,
  `alamat2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`id_alamat`, `id_pelanggan`, `nama2`, `no_tlpn2`, `kode_post2`, `alamat2`) VALUES
(1, 5, 'jaja', '089192819281', '78291', 'kuingan'),
(2, 3, 'hjghj', '9080897897', '6779', 'gfhfghfgfh');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Makanan Ringan'),
(2, 'Minuman'),
(4, 'Makanan');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_toko`
--

CREATE TABLE `lokasi_toko` (
  `id` int(11) NOT NULL,
  `nama_toko` varchar(125) DEFAULT NULL,
  `lokasi` int(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi_toko`
--

INSERT INTO `lokasi_toko` (`id`, `nama_toko`, `lokasi`, `alamat`) VALUES
(1, 'oleh-oleh', 211, 'kuningan');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(125) DEFAULT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `no_tlpn` varchar(15) DEFAULT NULL,
  `alamat` varchar(125) DEFAULT NULL,
  `kode_pos` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `username`, `password`, `no_tlpn`, `alamat`, `kode_pos`) VALUES
(3, 'uud', 'uud', '12345', '085731639595', 'kelurahan cigugur kab.kuningan', '12341'),
(5, 'Fahri Hairil', 'Fahri', '12345', '0895374645552', 'Desa Cipondok RT/05 RW/02 Kec.Kadugede Kab.Kuningan', '45561'),
(6, 'asbun', 'bunas', '12341234', '089192819281', 'kab.jamblang', '19291');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(11) NOT NULL,
  `nama_pemilik` varchar(20) NOT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(125) DEFAULT NULL,
  `no_tlpn` varchar(15) DEFAULT NULL,
  `kode_post` varchar(10) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `nama_pemilik`, `username`, `password`, `no_tlpn`, `kode_post`, `alamat`) VALUES
(1, 'Ipeng', 'pemilik', 'pemilik', '0997897868645', '45577', 'Desa Cijoho RT/RW 02/10');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_produk` varchar(125) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `berat` varchar(50) DEFAULT NULL,
  `product_unit` varchar(50) DEFAULT NULL,
  `stock` varchar(128) DEFAULT NULL,
  `nama_diskon` varchar(50) DEFAULT NULL,
  `diskon` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga`, `berat`, `product_unit`, `stock`, `nama_diskon`, `diskon`, `deskripsi`, `gambar`) VALUES
(1, 1, 'Kopi Luak Khas Linggarjati', '50000', '1', 'Kg', '10', NULL, NULL, 'Rasanya tidak perlu diragukan lagi', 'kopi.jpg'),
(2, 2, 'Leupeut', '15000', '1', 'ikat', '12', NULL, NULL, 'Rasanya gurih dan menjadi favorit banyak orang.', 'leupeut.jpg'),
(4, 2, 'JENIPER', '30000', '500', 'ml', '17', NULL, NULL, 'jeruk nipis peras asli tanpa gula dan pengawet', 'jeniper.jpeg'),
(5, 2, 'JENISA ', '30000', '500', 'ml', '21', NULL, NULL, 'jenisa jeruk nipir sirup dengan gula asli', 'jenisa1.jpeg'),
(6, 1, 'Kwecang', '15000', '1', 'ikat', '43', NULL, NULL, 'Dari beras ketan  yang rasanya gurih', 'kwecang1.jpg'),
(7, 1, 'Peyeum Ketan', '50000', '5', 'bungkus', '12', NULL, NULL, 'peyem ketan  tanpa pemanis buatan', 'peyem.jpg'),
(8, 1, 'Kripik Gemblong', '30000', '1', 'kg', '1', NULL, NULL, 'kripik singkong cocok \r\ndimakan dengan baso', 'gemblong.jpg'),
(9, 1, 'Kripik Gadung', '35000', '1', 'kg', '21', NULL, NULL, 'kripik gadung renyah dan gurih', 'gadung.jpg'),
(10, 1, 'Opak Bakar', '40000', '1', 'kg', '65', '17 Agustus', '5000', 'opak bakar', 'opak2.jpg'),
(11, 2, 'Sirup Tjampolay', '30000', '500', 'ml', '100', '-', '0', 'Sirup manis nan menyegarkan', 'sinarharapan_co_279346858_642552330327832_8836748650703927103_n.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(50) DEFAULT NULL,
  `no_rek` varchar(50) DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `no_rek`, `atas_nama`) VALUES
(1, 'BRI', '32412356453', 'diki');

-- --------------------------------------------------------

--
-- Table structure for table `rinci_transaksi`
--

CREATE TABLE `rinci_transaksi` (
  `id_rinci` int(11) NOT NULL,
  `no_order` varchar(50) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rinci_transaksi`
--

INSERT INTO `rinci_transaksi` (`id_rinci`, `no_order`, `id_produk`, `qty`) VALUES
(6, '20221127HX3D6AHF', 11, '3'),
(7, '20221127HX3D6AHF', 8, '1'),
(8, '20221127AIOVQZKU', 10, '2'),
(9, '20221127AIOVQZKU', 5, '1'),
(10, '20221204PAMKDWSO', 11, '1'),
(11, '20221204TLVD4EN9', 7, '1'),
(12, '20221204ADZXMF5W', 6, '1'),
(13, '20221204ADZXMF5W', 11, '1'),
(14, '20221204NXF2KABL', 2, '1'),
(15, '20221204QAHDFBSM', 10, '1'),
(16, '202212044ZJLT9WU', 2, '1'),
(17, '20221204GJATMLGK', 11, '1'),
(18, '20221204TSXAMGGL', 11, '1'),
(19, '20221204UTWND3G9', 11, '1');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_lokasi` int(11) DEFAULT NULL,
  `no_order` varchar(50) DEFAULT NULL,
  `tgl_order` date DEFAULT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `no_tlpn` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `alamat2` varchar(50) NOT NULL,
  `provinsi` varchar(125) DEFAULT NULL,
  `kota` varchar(125) DEFAULT NULL,
  `expedisi` varchar(50) DEFAULT NULL,
  `paket` varchar(50) DEFAULT NULL,
  `kode_pos` varchar(50) DEFAULT NULL,
  `ongkir` varchar(50) DEFAULT NULL,
  `estimasi` varchar(50) DEFAULT NULL,
  `berat` varchar(50) DEFAULT NULL,
  `grand_total` varchar(125) DEFAULT NULL,
  `total_bayar` varchar(125) DEFAULT NULL,
  `status_bayar` int(11) DEFAULT NULL,
  `status_order` int(11) DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL,
  `nama_bank` varchar(20) DEFAULT NULL,
  `no_rek` varchar(50) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `nama_pengirim` varchar(50) DEFAULT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `id_lokasi`, `no_order`, `tgl_order`, `nama_pelanggan`, `no_tlpn`, `alamat`, `alamat2`, `provinsi`, `kota`, `expedisi`, `paket`, `kode_pos`, `ongkir`, `estimasi`, `berat`, `grand_total`, `total_bayar`, `status_bayar`, `status_order`, `atas_nama`, `nama_bank`, `no_rek`, `bukti_bayar`, `nama_pengirim`, `catatan`) VALUES
(4, 5, NULL, '20221127HX3D6AHF', '2022-11-27', NULL, NULL, NULL, '', 'Jawa Tengah', 'Jepara', 'jne', 'REG', NULL, '46000', '2-3 Hari', '1501', '120000', '166000', 1, 3, 'Fahri', 'BNI', '20180910058', 'Koala1.jpg', '20220603IHQLV3FM', NULL),
(5, 3, NULL, '20221127AIOVQZKU', '2022-11-27', NULL, NULL, NULL, '', 'Jawa Barat', 'Kuningan', 'tiki', 'ONS', NULL, '13000', '1 Hari', '502', '100000', '113000', 1, 3, 'Uud', 'BRI', '321009752233', 'Jellyfish.jpg', '12134394350', NULL),
(6, 5, NULL, '20221204PAMKDWSO', '2022-12-04', NULL, NULL, NULL, '', 'Kalimantan Tengah', 'Kotawaringin Timur', 'jne', 'OKE', NULL, '52000', '5-7 Hari', '500', '30000', '82000', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 5, NULL, '20221204TLVD4EN9', '2022-12-04', 'jaja', '089192819281', 'kuingan', '', 'Bali', 'Bangli', 'jne', 'OKE', '78291', '30000', '3-6 Hari', '5', '50000', '80000', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 5, NULL, '20221204ADZXMF5W', '2022-12-04', 'jaja', '089192819281', 'kuingan', '', 'Lampung', 'Metro', 'tiki', 'ECO', '78291', '20000', '5 Hari', '501', '380000', '400000', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 5, NULL, '20221204NXF2KABL', '2022-12-04', 'jaja', '089192819281', 'kuingan', '', 'Kalimantan Tengah', 'Seruyan', 'jne', 'OKE', '78291', '52000', '5-7 Hari', '1', '15000', '67000', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 5, NULL, '20221204QAHDFBSM', '2022-12-04', NULL, NULL, NULL, '', 'Kepulauan Riau', 'Batam', 'jne', 'OKE', NULL, '37000', '2-3 Hari', '1', '35000', '72000', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 5, NULL, '202212044ZJLT9WU', '2022-12-04', NULL, NULL, NULL, '', 'Kalimantan Utara', 'Malinau', 'tiki', 'ECO', NULL, '72000', '5 Hari', '1', '15000', '87000', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 5, NULL, '20221204GJATMLGK', '2022-12-04', 'jaja', '089192819281', 'kuingan', 'alamat2', 'Kalimantan Timur', 'Paser', 'jne', 'OKE', '78291', '57000', '5-7 Hari', '500', '30000', '87000', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 5, NULL, '20221204TSXAMGGL', '2022-12-04', NULL, NULL, NULL, '', 'Kalimantan Utara', 'Malinau', 'jne', 'REG', NULL, '84000', '3-5 Hari', '500', '30000', '114000', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 3, NULL, '20221204UTWND3G9', '2022-12-04', NULL, NULL, NULL, '', 'Kepulauan Riau', 'Karimun', 'jne', 'OKE', NULL, '50000', '4-7 Hari', '500', '30000', '80000', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `lokasi_toko`
--
ALTER TABLE `lokasi_toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `rinci_transaksi`
--
ALTER TABLE `rinci_transaksi`
  ADD PRIMARY KEY (`id_rinci`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lokasi_toko`
--
ALTER TABLE `lokasi_toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rinci_transaksi`
--
ALTER TABLE `rinci_transaksi`
  MODIFY `id_rinci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
