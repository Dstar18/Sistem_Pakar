-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 13 Jan 2021 pada 11.06
-- Versi server: 10.3.25-MariaDB-0ubuntu0.20.04.1
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spakar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `gejalaID` int(11) NOT NULL,
  `gejalaCode` varchar(50) DEFAULT NULL,
  `gejalaNama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`gejalaID`, `gejalaCode`, `gejalaNama`) VALUES
(1, 'G001', 'Mengalami batuk ringan tidak berdahak'),
(2, 'G002', 'Mengalami batuk berat dan berdahak'),
(3, 'G003', 'Diare atau sering buang air besar'),
(4, 'G004', 'Salah satu mata memerah'),
(5, 'G005', 'Kedua mata memerah'),
(6, 'G006', 'Nyeri pada salah satu sisi kepala'),
(7, 'G007', 'Nyeri diseluruh bagian kepala'),
(8, 'G008', 'Hilangnya indera penciuman (anosmia)'),
(9, 'G009', 'Mengalami gangguan dalam bernapas atau sesak napas'),
(10, 'G010', 'Tubuh suka tiba-tiba menggigil'),
(11, 'G011', 'Tak banyak aktivitas tapi badan mudah berkeringat'),
(12, 'G012', 'Badan lemas tak bertenaga (asthenia)'),
(13, 'G013', 'Ruam pada kulit, atau perubahan warna pada jari tangan atau kaki'),
(14, 'G014', 'Tidak mengalami gejala apapun'),
(17, 'G100', 'Kulit terbakar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kesehatan`
--

CREATE TABLE `tbl_kesehatan` (
  `kesehatanID` int(11) NOT NULL,
  `kesehatanCode` varchar(50) DEFAULT NULL,
  `kesehatanKet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kesehatan`
--

INSERT INTO `tbl_kesehatan` (`kesehatanID`, `kesehatanCode`, `kesehatanKet`) VALUES
(1, 'KES001', 'Tingkat Kesehatan Baik'),
(2, 'KES002', 'Tingkat Kesehatan Kurang Baik'),
(3, 'KES003', 'Tingat Kesehatan Buruk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `nim` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jeniskel` varchar(20) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`nim`, `nama`, `jeniskel`, `prodi`, `alamat`) VALUES
(180011, 'Panji Iswara', 'Laki-Laki', 'Teknik Dirgantara', 'Kulonprogo'),
(180012, 'Anmal Hidayat', 'Laki-Laki', 'D3 Aeronautika', 'Blok O'),
(180013, 'Jesica Eyale', 'Perempuan', 'Informatika', 'Bantengan'),
(180014, 'Aldin Pamungkas', 'Laki-Laki', 'Teknik Elektro', 'Pelem Kidul'),
(180015, 'Dinda Azhari', 'Perempuan', 'D3 Aeronautika', 'Kota Jogja'),
(180016, 'Choirul Ikhsan', 'Laki-Laki', 'Teknik Mesin', 'Malioboro'),
(180017, 'Nofrisdan Sitopu', 'Laki-Laki', 'Informatika', 'Alun-alun Kidul'),
(180018, 'Ruly Hadi', 'Laki-Laki', 'Teknik Industri', 'Janti'),
(180019, 'Sri Indah', 'Perempuan', 'Teknik Dirgantara', 'Bantengan'),
(180020, 'Uhti Amelia', 'Perempuan', 'Teknik Dirgantara', 'Blok 0'),
(180022, 'Satria Wijaya', 'Laki-Laki', 'Informatika', 'Taman Siswa'),
(180025, 'Kelfin Leo', 'Laki-Laki', 'Teknik Industri', 'Pelem Lor'),
(180028, 'Dani Papua', 'Laki-Laki', 'Informatika', 'Asrama Papua'),
(180030, 'Kusuma', 'Laki-Laki', 'D3 Aeronautika', 'Jogaj'),
(180031, 'Dewi murni', 'Perempuan', 'Teknik Dirgantara', 'Kota Jogja'),
(180035, 'Dedi Pamungkas', 'Laki-Laki', 'Informatika', 'Blok O Jogja'),
(180080, 'Bintang Pamungkas', 'Laki-Laki', 'Informatika', 'PelemLor'),
(888888, 'saya', 'Perempuan', 'D3 Aeronautika', 'cdsds'),
(1800021, 'Imidian', 'Perempuan', 'Teknik Dirgantara', 'Blok R');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rules`
--

CREATE TABLE `tbl_rules` (
  `rulesID` int(11) NOT NULL,
  `rules_gejalaID` int(11) DEFAULT NULL,
  `rules_kesehatanID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_rules`
--

INSERT INTO `tbl_rules` (`rulesID`, `rules_gejalaID`, `rules_kesehatanID`) VALUES
(1, 1, 2),
(2, 2, 3),
(3, 3, 2),
(4, 4, 2),
(5, 5, 3),
(6, 6, 2),
(7, 7, 3),
(8, 8, 3),
(9, 9, 3),
(10, 10, 2),
(11, 11, 2),
(12, 12, 2),
(13, 13, 3),
(14, 14, 1),
(17, 17, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `dosenID` int(11) NOT NULL,
  `dosenNama` varchar(255) DEFAULT NULL,
  `dosenUsername` varchar(255) DEFAULT NULL,
  `dosenPassword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dosen`
--

INSERT INTO `tb_dosen` (`dosenID`, `dosenNama`, `dosenUsername`, `dosenPassword`) VALUES
(1, 'AB', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `hasilID` int(11) NOT NULL,
  `hasil_mhsID` int(11) DEFAULT NULL,
  `hasil_gejalaID` varchar(50) DEFAULT NULL,
  `hasil_kesehatanID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hasil`
--

INSERT INTO `tb_hasil` (`hasilID`, `hasil_mhsID`, `hasil_gejalaID`, `hasil_kesehatanID`) VALUES
(5, 180012, '1,2,3,4,', 2),
(7, 180011, '2,3,4,', 2),
(8, 1800021, '1,2,4,6,', 2),
(32, 180016, '1,2,4,', 3),
(33, 180020, '1,4,', 3),
(34, 180022, '15,', 1),
(35, 180025, '2,5,7,9,11,', 3),
(43, 180028, '1,4,6,14,', 2),
(44, 180080, '2,5,6,11,', 3),
(45, 180030, '15,', 1),
(46, 888888, '14,', 1),
(47, 180031, '2,5,7,10,', 3),
(48, 180035, '1,2,5,8,13,', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`gejalaID`);

--
-- Indeks untuk tabel `tbl_kesehatan`
--
ALTER TABLE `tbl_kesehatan`
  ADD PRIMARY KEY (`kesehatanID`) USING BTREE;

--
-- Indeks untuk tabel `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `tbl_rules`
--
ALTER TABLE `tbl_rules`
  ADD PRIMARY KEY (`rulesID`),
  ADD KEY `rules_gejalaID` (`rules_gejalaID`),
  ADD KEY `rules_kesehatanID` (`rules_kesehatanID`);

--
-- Indeks untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`dosenID`);

--
-- Indeks untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`hasilID`),
  ADD KEY `gejalaID` (`hasil_gejalaID`),
  ADD KEY `hasil_mhsID` (`hasil_mhsID`),
  ADD KEY `hasil_kesehatanID` (`hasil_kesehatanID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  MODIFY `gejalaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_kesehatan`
--
ALTER TABLE `tbl_kesehatan`
  MODIFY `kesehatanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_rules`
--
ALTER TABLE `tbl_rules`
  MODIFY `rulesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `dosenID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `hasilID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_rules`
--
ALTER TABLE `tbl_rules`
  ADD CONSTRAINT `rules_gejalaID` FOREIGN KEY (`rules_gejalaID`) REFERENCES `tbl_gejala` (`gejalaID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `rules_kesehatanID` FOREIGN KEY (`rules_kesehatanID`) REFERENCES `tbl_kesehatan` (`kesehatanID`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD CONSTRAINT `hasil_kesehatanID` FOREIGN KEY (`hasil_kesehatanID`) REFERENCES `tbl_kesehatan` (`kesehatanID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hasil_mhsID` FOREIGN KEY (`hasil_mhsID`) REFERENCES `tbl_mhs` (`nim`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
