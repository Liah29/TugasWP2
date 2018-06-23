-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 Jun 2018 pada 23.05
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multilogin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul_yangdiambil`
--

CREATE TABLE `matkul_yangdiambil` (
  `id` int(11) NOT NULL,
  `nim` varchar(8) NOT NULL,
  `kd_mk` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matkul_yangdiambil`
--

INSERT INTO `matkul_yangdiambil` (`id`, `nim`, `kd_mk`) VALUES
(1, '10114148', 'IF20001'),
(2, '10114148', 'IF99192'),
(3, '1234', 'IF20001'),
(8, '10114148', 'IF991913'),
(9, '17140042', 'IF20001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_mahasiswa`
--

CREATE TABLE `t_mahasiswa` (
  `nim` varchar(8) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `ttl` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(40) DEFAULT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`nim`, `nama`, `ttl`, `tgl_lahir`, `alamat`, `foto`) VALUES
('10114141', 'Udin Tajudin', 'garut', '2018-05-05', 'Garut', '10114141.jpg'),
('10114148', 'Cecep Rahmat', 'Garut', '2018-01-02', 'Jl. Tubagus Ismail No.5', '10114148.jpg'),
('10114149', 'Dadan Mustopa', 'Garut', '2018-05-05', 'Bandung', '10114149.jpg'),
('1234', 'Yana Yanuar', 'Papua', '1988-05-21', 'Jl. Cisitu Lama 1', '1234.jpg'),
('123456', 'Anton Santosa', 'Banten', '1988-03-20', 'Jl. Cimandiri 15', '123456.jpg'),
('17140009', 'Dani Ramdani', 'Garut', '1989-04-11', 'Tangerang', '17140009.jpg'),
('17140042', 'Liah Jamaliah', 'Garut', '1996-07-18', 'Tangerang', '17140042.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_mata_kuliah`
--

CREATE TABLE `t_mata_kuliah` (
  `kd_mk` varchar(8) NOT NULL,
  `nama_mk` varchar(30) DEFAULT NULL,
  `Tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_mata_kuliah`
--

INSERT INTO `t_mata_kuliah` (`kd_mk`, `nama_mk`, `Tahun`) VALUES
('IF09087', 'Sistem Operasi', 2014),
('IF1234', 'Bahasa Inggris', 2014),
('IF20001', 'Pemrograman Dasar', 2018),
('IF34348', 'Pemrograman Lanjut', 2017),
('IF37325P', 'Rekayasa Perangkat Lunak', 2014),
('IF890', 'Troubleshooting', 2015),
('IF991913', 'Web Programming', 2018),
('IF99192', 'Internetworking', 2015),
('matkul', 'Algoritman dan Pemrograman 1', 2014);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_nilai`
--

CREATE TABLE `t_nilai` (
  `kd_nilai` bigint(8) NOT NULL,
  `nim` varchar(8) DEFAULT NULL,
  `kd_mk` varchar(8) DEFAULT NULL,
  `kehadiran` double DEFAULT NULL,
  `tugas_1` double DEFAULT NULL,
  `tugas_2` double DEFAULT NULL,
  `tugas_3` double DEFAULT NULL,
  `uts` double DEFAULT NULL,
  `uas` double DEFAULT NULL,
  `nilai_kehadiran` double DEFAULT NULL,
  `nilai_tugas` double DEFAULT NULL,
  `nilai_uts` double DEFAULT NULL,
  `nilai_uas` double DEFAULT NULL,
  `nilai_akhir` double DEFAULT NULL,
  `indeks` char(1) DEFAULT NULL,
  `ket` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_nilai`
--

INSERT INTO `t_nilai` (`kd_nilai`, `nim`, `kd_mk`, `kehadiran`, `tugas_1`, `tugas_2`, `tugas_3`, `uts`, `uas`, `nilai_kehadiran`, `nilai_tugas`, `nilai_uts`, `nilai_uas`, `nilai_akhir`, `indeks`, `ket`) VALUES
(1, '10114148', 'IF20001', 14, 90, 80, 100, 100, 100, 10, 18, 30, 40, 98, 'A', 'Sangat Baik'),
(2, '1234', 'IF37325P', 14, 100, 100, 100, 100, 100, 10, 20, 30, 40, 100, 'A', 'Sangat Baik'),
(3, '10114148', 'IF991913', 14, 90, 80, 100, 100, 100, 10, 18, 30, 40, 98, 'A', 'Sangat Baik'),
(4, '17140042', 'IF20001', 100, 90, 80, 100, 90, 100, 71.428571428571, 18, 27, 40, 156.42857142857, '', ''),
(5, '1234', 'matkul', 100, 80, 60, 70, 90, 80, 71.428571428571, 16, 27, 32, 146.42857142857, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(8) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Administrator','Mahasiswa','Dosen') NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `level`, `img`) VALUES
('10114141', 'ramdan', 'Administrator', 'ig.ico'),
('10114148', 'ramdan', 'Mahasiswa', '10114148.jpg'),
('1234', 'dosen', 'Dosen', '1234.jpg'),
('123456', 'admin', 'Administrator', '123456.jpg'),
('17140042', 'liahjamaliah', 'Mahasiswa', 'th.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matkul_yangdiambil`
--
ALTER TABLE `matkul_yangdiambil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`nim`),
  ADD KEY `kd_mk` (`kd_mk`);

--
-- Indexes for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `t_mata_kuliah`
--
ALTER TABLE `t_mata_kuliah`
  ADD PRIMARY KEY (`kd_mk`);

--
-- Indexes for table `t_nilai`
--
ALTER TABLE `t_nilai`
  ADD PRIMARY KEY (`kd_nilai`),
  ADD KEY `nim` (`nim`),
  ADD KEY `kd_mk` (`kd_mk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matkul_yangdiambil`
--
ALTER TABLE `matkul_yangdiambil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `t_nilai`
--
ALTER TABLE `t_nilai`
  MODIFY `kd_nilai` bigint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `matkul_yangdiambil`
--
ALTER TABLE `matkul_yangdiambil`
  ADD CONSTRAINT `matkul_yangdiambil_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `t_mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matkul_yangdiambil_ibfk_2` FOREIGN KEY (`kd_mk`) REFERENCES `t_mata_kuliah` (`kd_mk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_nilai`
--
ALTER TABLE `t_nilai`
  ADD CONSTRAINT `t_nilai_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `t_mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_nilai_ibfk_2` FOREIGN KEY (`kd_mk`) REFERENCES `t_mata_kuliah` (`kd_mk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`username`) REFERENCES `t_mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
