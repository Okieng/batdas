-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Agu 2020 pada 13.18
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `det_transaksi`
--

CREATE TABLE `det_transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `total_harga` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `det_transaksi`
--

INSERT INTO `det_transaksi` (`id`, `id_transaksi`, `tgl_pembelian`, `status`, `total_harga`) VALUES
(23, 39, '2020-08-05', 'dibayar', 35000),
(24, 41, '2020-08-06', 'dibayar', 30000),
(25, 48, '2020-08-06', 'belum dibayar', 38000),
(26, 51, '2020-08-06', 'dibayar', 23000),
(27, 53, '2020-08-06', 'belum dibayar', 13000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `harga` int(30) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `nama`, `gambar`, `tipe`, `harga`, `qty`) VALUES
(1, 'Kwetiauw Goreng', 'KwetiauGoreng.jpg', 'makanan', 15000, 19),
(2, 'Kwetiau Kuah', 'KwetiauKuah.jpg', 'makanan', 15000, 20),
(3, 'Mie Ayam', 'MieAyam.jpg', 'makanan', 10000, 20),
(4, 'Mie Ayam Bakso', 'MieAyamBakso.jpeg', 'makanan', 17000, 20),
(5, 'Mie Goreng', 'MieGoreng.jpg', 'makanan', 13000, 20),
(6, 'Mie Goreng Seafood', 'MieGorengSeafood.jpg', 'makanan', 25000, 20),
(7, 'Nasi Goreng', 'NasiGoreng.jpg', 'makanan', 13000, 20),
(8, 'Nasi Goreng Seafood', 'NasiGorengSeafood.jpg', 'makanan', 25000, 20),
(9, 'Es Jeruk', 'EsJeruk.jpg', 'minuman', 6000, 20),
(10, 'Es Teh Manis', 'EsTehManis.jpg', 'minuman', 3000, 20),
(11, 'Milk Shake Chocklate', 'MilkShakeCoklat.jpg', 'minuman', 13000, 21),
(12, 'Ovaltine', 'Ovaltine.jpeg', 'minuman', 1000, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id` int(11) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id`, `nama_pembeli`) VALUES
(14, 'los dos'),
(15, 'Asep'),
(16, 'diday'),
(17, 'wili'),
(18, 'wili'),
(19, 'prayogi'),
(20, 'johan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `pembeli_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `pembeli_id`, `menu_id`, `qty`, `total`) VALUES
(39, 14, 3, 2, 20000),
(40, 14, 2, 1, 15000),
(41, 15, 2, 1, 15000),
(42, 15, 1, 1, 15000),
(45, 17, 1, 1, 15000),
(46, 17, 3, 1, 10000),
(47, 17, 7, 1, 13000),
(48, 18, 1, 1, 15000),
(49, 18, 3, 1, 10000),
(50, 18, 7, 1, 13000),
(51, 19, 3, 1, 10000),
(52, 19, 11, 1, 13000),
(53, 20, 7, 1, 13000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `pass`, `role_id`) VALUES
(1, 'admin', '1234', 1),
(2, 'kasir', '1234', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `det_transaksi`
--
ALTER TABLE `det_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembeli_id` (`pembeli_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `det_transaksi`
--
ALTER TABLE `det_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `det_transaksi`
--
ALTER TABLE `det_transaksi`
  ADD CONSTRAINT `det_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`pembeli_id`) REFERENCES `pembeli` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
