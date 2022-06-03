-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2022 pada 13.42
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

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
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` int(11) NOT NULL,
  `id_provinsi` int(11) DEFAULT NULL,
  `kabupaten` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `id_provinsi`, `kabupaten`) VALUES
(1, 1, 'cirebon'),
(2, 1, 'kuningan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'sembako'),
(2, 'minuman'),
(3, 'sembako'),
(4, 'makanan'),
(5, 'makanan ringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(50) DEFAULT NULL,
  `ongkir` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`, `ongkir`) VALUES
(1, 'Jl.Siliwangi Kuningan', '120000'),
(2, 'Kec. Ciawigebang', '7000'),
(3, 'cipicung', '12000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi_toko`
--

CREATE TABLE `lokasi_toko` (
  `id` int(11) NOT NULL,
  `nama_toko` varchar(125) DEFAULT NULL,
  `lokasi` int(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokasi_toko`
--

INSERT INTO `lokasi_toko` (`id`, `nama_toko`, `lokasi`, `alamat`) VALUES
(1, 'oleh-oleh', 211, 'kuningan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `id_kabupaten` int(11) DEFAULT NULL,
  `nama_pelanggan` varchar(125) DEFAULT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `no_tlpn` varchar(15) DEFAULT NULL,
  `alamat` varchar(125) DEFAULT NULL,
  `kode_pos` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `id_kabupaten`, `nama_pelanggan`, `username`, `password`, `no_tlpn`, `alamat`, `kode_pos`) VALUES
(1, 1, 'yanto', 'admin', '12345', '089123762517', NULL, NULL),
(2, NULL, 'quen', 'admin', 'admin', '085745698745', 'jl. ramajaksa winduherang kuningan', '123124'),
(3, NULL, 'uud', 'uud', '12345', '085731639595', 'kelurahan cigugur kab.kuningan', '12341');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(11) NOT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `username`, `password`) VALUES
(1, 'pemilik', 'pemilik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
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
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga`, `berat`, `product_unit`, `stock`, `nama_diskon`, `diskon`, `deskripsi`, `gambar`) VALUES
(1, 4, 'TROPICANA CHOCO VAN', '350000', '200', 'ML', '45', 'hari raya', '500', 'sasasa', 'bd201.png'),
(2, 5, 'OISHI MAKADO TMT', '350000', '200', 'GR', '110', NULL, NULL, 'asasa', 'bayar1.png'),
(3, 1, 'MITU GANTI PPK WHITE', '3500', '250', 'ML', '20', NULL, NULL, 'sasa', 'bg40.jpg'),
(4, 3, 'OISHI MAKADO TMT', '350000', '21', 'gram', '10', 'hari raya', '2000', 'sasfaa', 'bg301.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `provinsi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `provinsi`) VALUES
(1, 'jawabarat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(50) DEFAULT NULL,
  `no_rek` varchar(50) DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `no_rek`, `atas_nama`) VALUES
(1, 'BRI', '32412356453', 'diki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rinci_transaksi`
--

CREATE TABLE `rinci_transaksi` (
  `id_rinci` int(11) NOT NULL,
  `no_order` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rinci_transaksi`
--

INSERT INTO `rinci_transaksi` (`id_rinci`, `no_order`, `id_produk`, `qty`) VALUES
(1, 20220417, 3, '3'),
(2, 20220417, 2, '1'),
(3, 20220517, 3, '1'),
(4, 20220517, 4, '1'),
(5, 20220603, 3, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
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
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `id_lokasi`, `no_order`, `tgl_order`, `nama_pelanggan`, `no_tlpn`, `alamat`, `provinsi`, `kota`, `expedisi`, `paket`, `kode_pos`, `ongkir`, `estimasi`, `berat`, `grand_total`, `total_bayar`, `status_bayar`, `status_order`, `atas_nama`, `nama_bank`, `no_rek`, `bukti_bayar`, `nama_pengirim`, `catatan`) VALUES
(1, 1, 2, '20220417WZRSDCGP', '2022-04-17', 'uud', '085156727368', 'sindang barang', NULL, NULL, NULL, NULL, '452157', '7000', NULL, NULL, '360500', '367500', 1, 2, 'wulan', 'bni', '1234567896541', 'bayar1.png', 'ridwan', NULL),
(2, 2, NULL, '20220517AGTY8SXS', '2022-05-17', 'uud', '123451234512', 'sindang barang', NULL, NULL, NULL, NULL, '452157', '36000', NULL, '271', '351500', '387500', 1, 3, 'wulan', 'bni', '1234567896541', 'Buket_bunga_flanel_11.jpg', '12wqw', NULL),
(3, 2, NULL, '20220603SJX6FVTN', '2022-06-03', NULL, NULL, NULL, 'Bali', 'Bangli', 'tiki', 'ECO', NULL, '24000', '4 Hari', '250', '3500', '27500', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(125) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `lokasi_toko`
--
ALTER TABLE `lokasi_toko`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indeks untuk tabel `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indeks untuk tabel `rinci_transaksi`
--
ALTER TABLE `rinci_transaksi`
  ADD PRIMARY KEY (`id_rinci`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `lokasi_toko`
--
ALTER TABLE `lokasi_toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `rinci_transaksi`
--
ALTER TABLE `rinci_transaksi`
  MODIFY `id_rinci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
