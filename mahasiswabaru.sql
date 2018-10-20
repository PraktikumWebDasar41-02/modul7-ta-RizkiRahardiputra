-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2018 pada 07.50
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswabaru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswabaru`
--

CREATE TABLE `mahasiswabaru` (
  `nama` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jeniskelamin` varchar(15) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `fakultas` varchar(5) NOT NULL,
  `asal` varchar(20) NOT NULL,
  `moto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswabaru`
--

INSERT INTO `mahasiswabaru` (`nama`, `nim`, `tanggal`, `jeniskelamin`, `prodi`, `fakultas`, `asal`, `moto`) VALUES
('Chandra', '670117', '2018-10-11', 'Laki-Laki', 'SISFO', 'on', 'Bandung', 'Nonton'),
('Bayu caca', '67011700', '2018-10-03', 'Laki-Laki', 'TT', 'FRI', 'Malang', 'Ngeyoutube'),
('Rapyourbae', '1000', '2018-10-03', 'Laki-Laki', 'IKOM', 'FIT', 'Jakarta', 'Pro Fornite'),
('Rizki ', '6701170031', '2018-10-01', 'Laki-Laki', 'SISFO', 'on', 'Jakarta', 'Nonton is my life');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
