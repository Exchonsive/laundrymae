-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 07:51 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry_mae`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
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
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`, `stok`, `tgl_update`, `supplier`, `harga`) VALUES
(1, 'Deterjen Bubuk', 5, '2019-11-13', 'Ronaldo', 8000),
(2, 'Pewangi', 4, '2019-11-27', 'Bayu', 4000),
(3, 'Softener', 3, '2019-11-12', 'Ditya', 5000),
(8, 'parfum', 4, '2019-11-12', 'Bayu', 10000),
(12, 'Sabun Cair', 10, '2019-11-13', 'Ditya', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_laundry`
--

CREATE TABLE `jenis_laundry` (
  `id_jenis` int(10) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `jenis_laundry`
--

INSERT INTO `jenis_laundry` (`id_jenis`, `jenis`, `harga`) VALUES
(2, 'Cuci kilat', 20000),
(3, 'Cuci Kering', 5000),
(4, 'Cuci Kasur', 20000),
(5, 'Cuci + Gosok', 9000),
(6, 'Cuci Karpet', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `id_konsumen` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `nama`, `alamat`, `telp`) VALUES
(1, 'Angga Putra', 'Jl.Elang 5 Blok E 12', '082445129182'),
(4, 'Abdul Toing zaelanue', 'Vida, Jl.Glamoria No 59', '021122166252'),
(5, 'Moh. Rangga Wijaya', 'Kranggan Jl.jatibening no.2', '089821726362721'),
(6, 'Reyndra Yuda', 'Cikiwul Kp.Jambon', '021827616287'),
(7, 'Roif fadillah', 'BTR 1 Blok E17/11 RT01/013', '081183177221'),
(10, 'Alvy Fitria Rahmawati', 'Griya Alam Sentosa Blok AA', '08982182377271');

-- --------------------------------------------------------

--
-- Table structure for table `pemakaian_barang`
--

CREATE TABLE `pemakaian_barang` (
  `id_pemakaian` int(10) NOT NULL,
  `tgl_pakai` date NOT NULL,
  `barang` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pemakaian_barang`
--

INSERT INTO `pemakaian_barang` (`id_pemakaian`, `tgl_pakai`, `barang`, `jumlah`) VALUES
(7, '2019-11-12', 'Parfum', 2),
(8, '2019-11-12', 'Deterjen Bubuk', 3),
(9, '2019-11-12', 'aa', 4),
(10, '2019-11-13', 'aaaa', 10),
(11, '2019-11-13', 'Raaaa', 120),
(12, '2019-11-13', 'Deterjen Bubuk', 5),
(13, '2019-11-13', 'aaaa', 21);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
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
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`no_pembelian`, `tgl`, `totali`, `supplier`, `barang`, `totalh`) VALUES
(7, '2019-11-12', 8, 'Ronaldo', 'Deterjen Bubuk', 64000),
(8, '2019-11-12', 5, 'Ditya', 'Pemutih', 65000),
(10, '2019-11-12', 3, 'Ronaldo', 'Deterjen Bubuk', 24000),
(11, '2019-11-12', 3, 'Ronaldo', 'Parfum', 30000),
(12, '2019-11-12', 3, 'Bayu', 'parfum', 30000),
(13, '2019-11-12', 3, 'Bayu', 'parfum', 30000),
(16, '2019-11-12', 3, 'Ronaldo', 'Deterjen Bubuk', 24000),
(17, '2019-11-13', 2, 'Ronaldo', 'aaaa', 4444),
(18, '2019-11-13', 3, 'Ronaldo', 'aaaa', 6666),
(19, '2019-11-13', 222, 'Ronaldo', 'Raaaa', 493284),
(20, '2019-11-13', 111, 'Bayu', 'aaaa', 12321),
(21, '2019-11-13', 10, 'Ditya', 'Sabun Cair', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('Administrator','Karyawan') NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `gender` enum('Laki laki','Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `username`, `password`, `level`, `nik`, `alamat`, `telp`, `gender`) VALUES
(8, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '-', '-', '-', 'Laki laki'),
(9, 'Maeru Bagas Trisoko', 'maeru', '1764fc5ef3e395f6cbbdc66c61b56a7a', 'Karyawan', '171810328', 'BTR', '08982818631', 'Laki laki');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama`, `alamat`, `telp`) VALUES
(1, 'Ronaldo', 'Jl. Water Park No.18', '08178171124'),
(2, 'Bayu', 'Dukuh Zamrud', '08128938728'),
(3, 'Ditya', 'Rawa Lumbu', '081283776262');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_transaksi` varchar(11) NOT NULL,
  `nama_konsumen` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
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
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kode_transaksi`, `nama_konsumen`, `telp`, `alamat`, `tgl_transaksi`, `tgl_ambil`, `jenis`, `berat`, `tarif`, `diskon`, `status`, `nama_kasir`) VALUES
('LDR-0001', 'Abdul Toing zaelanue', '021122166252', 'Vida, Jl.Glamoria No 59', '2019-11-12', '2019-11-22', 'Cuci + Gosok', 3, 27000, 'Tidak ada', 'BELUM LUNAS', 'Administrator'),
('LDR-0002', 'Reyndra Yuda', '021827616287', 'Cikiwul Kp.Jambon', '2019-11-12', '2019-11-27', 'Cuci Karpet', 15, 202500, '10%', 'LUNAS', 'Administrator'),
('LDR-0003', 'Angga Putra', '082445129182', 'Jl.Elang 5 Blok E 12', '2019-11-12', '2019-11-25', 'Cuci Kasur', 3, 60000, 'Tidak ada', 'LUNAS', 'Administrator'),
('LDR-0004', 'Moh. Rangga Wijaya', '089821726362721', 'Kranggan Jl.jatibening no.2', '2019-11-12', '2019-11-28', 'Cuci Kasur', 17, 306000, '10%', 'LUNAS', 'Administrator'),
('LDR-0006', 'Abdul Toing zaelanue', '021122166252', 'Vida, Jl.Glamoria No 59', '2019-11-13', '2019-11-26', 'Cuci Kasur', 12, 240000, 'Tidak ada', 'BELUM LUNAS', 'Administrator'),
('LDR-0007', 'Reyndra Yuda', '021827616287', 'Cikiwul Kp.Jambon', '2019-11-13', '2019-11-25', 'Cuci Kasur', 12, 240000, 'Tidak ada', 'LUNAS', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `jenis_laundry`
--
ALTER TABLE `jenis_laundry`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indexes for table `pemakaian_barang`
--
ALTER TABLE `pemakaian_barang`
  ADD PRIMARY KEY (`id_pemakaian`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`no_pembelian`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `jenis_laundry`
--
ALTER TABLE `jenis_laundry`
  MODIFY `id_jenis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id_konsumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pemakaian_barang`
--
ALTER TABLE `pemakaian_barang`
  MODIFY `id_pemakaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `no_pembelian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
