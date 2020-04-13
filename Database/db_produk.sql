-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2020 pada 15.56
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_produk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `kode_produk` varchar(50) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` varchar(50) NOT NULL,
  `satuan` varchar(12) NOT NULL,
  `kategori` varchar(12) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kode_produk`, `nama_produk`, `harga_produk`, `satuan`, `kategori`, `gambar`, `stok`) VALUES
('MD1586785543', 'Kopi Dalgona', '15000', 'Gelas', 'Minuman', 'https://cdn2.tstatic.net/padang/foto/bank/images/dalgona-coffee-342020-2.jpg', 5),
('MD1586785601', 'Tempe Bacem', '20000', 'Piring', 'Makanan', 'https://www.masakapahariini.com/wp-content/uploads/2018/07/thumb-2.jpg', 10),
('MD1586785800', 'Ayam Geprek', '20000', 'Gelas', 'Minuman', 'https://selerasa.com/wp-content/uploads/2019/02/Resep-ayam-geprek-untuk-jualan.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_produk`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
