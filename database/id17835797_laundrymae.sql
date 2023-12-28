-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 13 Jan 2022 pada 13.28
-- Versi server: 10.5.12-MariaDB
-- Versi PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17835797_laundrymae`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `tgl_update` date NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`, `stok`, `tgl_update`, `supplier`, `harga`) VALUES
(14, 'Detergen', 2, '2022-01-05', 'Edi Sucipto', 24000),
(15, 'Pelembut', 13, '2022-01-05', 'Ahmad Arifin', 6000),
(16, 'Pemutih', 9, '2022-01-05', 'Deva Ismanto', 11000),
(17, 'Pewangi', 12, '2022-01-05', 'Zulkarnain', 16000),
(18, 'Cleaner', 4, '2022-01-05', 'Rafli ananda', 26000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_laundry`
--

CREATE TABLE `jenis_laundry` (
  `id_jenis` int(10) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `jenis_laundry`
--

INSERT INTO `jenis_laundry` (`id_jenis`, `jenis`, `harga`) VALUES
(2, 'Cuci kilat', 20000),
(4, 'Cuci Kasur', 20000),
(5, 'Cuci + Gosok', 9000),
(6, 'Cuci Karpet', 15000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `id_konsumen` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `nama`, `alamat`, `telp`) VALUES
(449, 'Rahmat Hidayat', 'Griya Alam Sentosa Blok AB RT.12 RW.01', '081211567911'),
(450, 'Emas Budiyanto', 'Jr. Rajiman No. 849, Administrasi Jakarta Pusat 78126', '08719496398'),
(451, 'Samsul Simanjuntak', 'Jr. Warga No. 168, Singkawang, Jakarta 48157', '085536166459'),
(452, 'Dewi Riyanti', 'Dk. Kyai Gede No. 779, Tasikmalaya, Jakarta Pusat 76353', '081277944813'),
(453, 'Yance Uyainah', 'Psr. Jaksa No. 909, Madiun 39677, Jawa Barat', '089769012872'),
(454, 'Uli Suartini', 'Jln. Baranang Siang Indah No. 207, 17151, Jakarta Barat', '082602183724');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemakaian_barang`
--

CREATE TABLE `pemakaian_barang` (
  `id_pemakaian` int(10) NOT NULL,
  `tgl_pakai` date NOT NULL,
  `barang` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `pemakaian_barang`
--

INSERT INTO `pemakaian_barang` (`id_pemakaian`, `tgl_pakai`, `barang`, `jumlah`) VALUES
(14, '2022-01-05', 'Cleaner', 1),
(15, '2021-12-23', 'Detergen', 6),
(16, '2021-12-28', 'Pelembut', 4),
(17, '2021-12-30', 'Pemutih', 6),
(18, '2022-01-04', 'Pewangi', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `no_pembelian` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `totali` int(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `barang` varchar(100) NOT NULL,
  `totalh` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`no_pembelian`, `tgl`, `totali`, `supplier`, `barang`, `totalh`) VALUES
(23, '2022-01-05', 3, 'Edi Sucipto', 'Detergen', 72000),
(24, '2021-11-24', 6, 'Rafli Ananda', 'Cleaner', 156000),
(25, '2021-12-08', 25, 'Ahmad Arifin', 'Pelembut', 150000),
(26, '2021-12-23', 12, 'Deva Ismanto', 'Pemutih', 132000),
(27, '2022-01-03', 26, 'Zulkarnain', 'Pewangi', 416000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('Administrator','Karyawan') NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `gender` enum('Laki laki','Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `username`, `password`, `level`, `nik`, `alamat`, `telp`, `gender`) VALUES
(8, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '-', '-', '-', 'Laki laki'),
(12, 'User', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Karyawan', '00022214355', '-', '1', 'Laki laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama`, `alamat`, `telp`) VALUES
(9, 'Edi Sucipto', 'RT.004/RW.001, Mustikasari, Mustika Jaya, Bekasi City, West Java 17116', '08945129182'),
(10, 'Ahmad Arifin', 'Psr Tanah Abang Bl A Los D/3, Dki Jakarta', '021-31935928'),
(11, 'Zulkarnain', 'Jl Inerbang Raya 38 RT 010/03, Dki Jakarta', '021-80886247'),
(12, 'Deva Ismanto', 'Jl Pasar Tanah Abang Bl East Lt 1/Bks/74, Dki Jakarta', '08982554585'),
(13, 'Rafli ananda', 'Jl Kramat Jaya Baru Bl I/1, Dki Jakarta', '085518479855');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_transaksi` varchar(11) NOT NULL,
  `nama_konsumen` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `tgl_ambil` date NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `berat` int(11) NOT NULL,
  `tarif` int(11) NOT NULL,
  `diskon` varchar(25) NOT NULL,
  `status` enum('BELUM LUNAS','LUNAS') NOT NULL,
  `nama_kasir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`kode_transaksi`, `nama_konsumen`, `telp`, `alamat`, `tgl_transaksi`, `tgl_ambil`, `jenis`, `berat`, `tarif`, `diskon`, `status`, `nama_kasir`) VALUES
('LDR-0000', 'Uli Suartini', '082602183724', 'Jln. Baranang Siang Indah No. 207, 17151, Jakarta Barat', '2021-11-22', '2021-11-23', 'Cuci kilat', 4, 80000, 'Tidak ada', 'LUNAS', 'Administrator'),
('LDR-0001', 'Rahmat Hidayat', '081211567911', 'Griya Alam Sentosa Blok AB RT.12 RW.01', '2021-11-07', '2021-11-10', 'Cuci + Gosok', 3, 27000, 'Tidak ada', 'LUNAS', 'Administrator'),
('LDR-0002', 'Emas Budiyanto', '08719496398', 'Jr. Rajiman No. 849, Administrasi Jakarta Pusat 78126', '2021-11-05', '2021-11-08', 'Cuci + Gosok', 13, 105300, '10%', 'LUNAS', 'Administrator'),
('LDR-0003', 'Yance Uyainah', '089769012872', 'Psr. Jaksa No. 909, Madiun 39677, Jawa Barat', '2021-11-04', '2021-11-12', 'Cuci Karpet', 6, 90000, 'Tidak ada', 'LUNAS', 'Administrator'),
('LDR-0004', 'Dewi Riyanti', '081277944813', 'Dk. Kyai Gede No. 779, Tasikmalaya, Jakarta Pusat 76353', '2021-12-18', '2021-12-21', 'Cuci + Gosok', 18, 145800, '10%', 'LUNAS', 'Administrator'),
('LDR-0005', 'Rahmat Hidayat', '0812444585654', 'Griya Alam Sentosa Blok AB RT.12 RW.01', '2022-01-05', '2022-01-13', 'Cuci Kasur', 6, 20000, '', 'LUNAS', 'user'),
('LDR-0006', 'Yance Uyainah', '089769012872', 'Psr. Jaksa No. 909, Madiun 39677, Jawa Barat', '2022-01-05', '2022-01-05', 'Cuci Kasur', 10, 200000, 'Tidak ada', 'BELUM LUNAS', 'Administrator'),
('LDR-0007', 'Emas Budiyanto', '08719496398', 'Jr. Rajiman No. 849, Administrasi Jakarta Pusat 78126', '2022-01-05', '2022-01-14', 'Cuci kilat', 6, 120000, 'Tidak ada', 'LUNAS', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `jenis_laundry`
--
ALTER TABLE `jenis_laundry`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indeks untuk tabel `pemakaian_barang`
--
ALTER TABLE `pemakaian_barang`
  ADD PRIMARY KEY (`id_pemakaian`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`no_pembelian`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `jenis_laundry`
--
ALTER TABLE `jenis_laundry`
  MODIFY `id_jenis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id_konsumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=460;

--
-- AUTO_INCREMENT untuk tabel `pemakaian_barang`
--
ALTER TABLE `pemakaian_barang`
  MODIFY `id_pemakaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `no_pembelian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
