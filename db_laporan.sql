-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2023 pada 17.47
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laporan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_lap` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `nama_opd` varchar(50) NOT NULL,
  `isi` varchar(500) NOT NULL,
  `tgl` date NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_lap`, `kode`, `nama`, `notelp`, `nama_opd`, `isi`, `tgl`, `gambar`, `status`) VALUES
(1, 'LPR-ISDN-KMNN-230801-001', 'Budi', '081234567890', 'BADAN KEPEGAWAIAN DAERAH', 'Terjadinya peretasan terhadap website', '2023-08-11', '1.jpg', 'Diterima'),
(2, 'LPR-ISDN-KMNN-230801-002', 'Ali', '081298765756', 'INSPEKTORAT', 'Telah terjadi serangan Hacker pada melalui website', '2023-08-14', '2.png', 'Diproses'),
(3, 'LPR-ISDN-KMNN-230801-003', 'Andi', '081298765799', 'DINAS PENDIDIKAN', 'Tampilan website tiba-tiba berubah, tidak sesuai dengan seharusnya', '2023-08-23', '3.jpg', 'Terkirim'),
(4, 'LPR-ISDN-KMNN-230801-004', 'Ani', '081298765737', 'DINAS SOSIAL', 'serangan Hacker melalui website', '2023-08-31', '4.jpg', 'Terkirim'),
(5, 'LPR-ISDN-KMNN-230801-005', 'Abi', '081298762454', 'DINAS PERHUBUNGAN', 'adanya peretasan memalui website', '2023-09-08', '5.jpg', 'Terkirim'),
(6, 'LPR-ISDN-KMNN-230801-006', 'Hana', '081234524343', 'DINAS PENDIDIKAN', 'adanya serangan virus pada komputer', '2023-09-05', '6.png', 'Terkirim'),
(7, 'LPR-ISDN-KMNN-230801-007', 'Yaya', '081298765767', 'BADAN PENDAPATAN DAERAH', 'serangan virus pada komputer', '2023-09-12', '7.png', 'Terkirim'),
(8, 'LPR-ISDN-KMNN-230801-008', 'Ari', '081243254366', 'BIRO PEREKONOMIAN', 'terdeteksi virus pada komputer', '2023-09-13', '8.jpg', 'Terkirim'),
(9, 'LPR-ISDN-KMNN-230801-009', 'Adi', '081234568646', 'BADAN PENGHUBUNG', 'terdapat virus pada komputer', '2023-09-24', '8.jpg', 'Terkirim'),
(10, 'LPR-ISDN-KMNN-230801-010', 'Contoh', '081298765455', 'DINAS KESEHATAN', 'adanya serangan virus', '2023-10-01', '10.webp', 'Terkirim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `opd`
--

CREATE TABLE `opd` (
  `id_opd` int(11) NOT NULL,
  `nama_opd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `opd`
--

INSERT INTO `opd` (`id_opd`, `nama_opd`) VALUES
(1, 'SEKRETARIAT DAERAH'),
(2, 'SEKRETARIAT DPRD'),
(3, 'INSPEKTORAT'),
(4, 'BADAN KEPEGAWAIAN DAERAH'),
(5, 'BADAN PENGEMBANGAN SUMBER DAYA MANUSIA'),
(6, 'BADAN PENGHUBUNG'),
(7, 'BADAN PENANGGULANGAN BENCANA DAERAH'),
(8, 'DINAS PENDIDIKAN'),
(9, 'DINAS KESEHATAN'),
(10, 'DINAS SOSIAL'),
(11, 'DINAS TENAGA KERJA DAN TRANSMIGRASI'),
(12, 'DINAS LINGKUNGAN HIDUP'),
(13, 'DINAS PEMBERDAYAAN MASYARAKAT DAN DESA'),
(14, 'DINAS PERHUBUNGAN'),
(15, 'DINAS KOPERASI, USAHA KECIL DAN MENENGAH'),
(16, 'DINAS PENANAMAN MODAL DAN \r\nPELAYANAN TERPADU 1 '),
(17, 'DINAS KEBUDAYAAN'),
(18, 'DINAS KELAUTAN DAN PERIKANAN'),
(19, 'DINAS PETERNAKAN DAN KESEHATAN HEWAN'),
(20, 'DINAS KEHUTANAN'),
(21, 'DINAS ENERGI DAN SUMBER DAYA MINERAL'),
(22, 'DINAS PERINDUSTRIAN DAN PERDAGANGAN'),
(23, 'SATUAN POLISI PAMONG PRAJA'),
(24, 'RS DR ACHMAD MOCHTAR BUKITTINGI'),
(25, 'RSUD PARIAMAN'),
(26, 'RSUD M NATSIR'),
(27, 'RSJ HB SAANIN PADANG'),
(28, 'DINAS BINA MARGA, CIPTA KARYA DAN TATA RUANG'),
(29, 'DINAS PERUMAHAN RAKYAT, \r\nKAWASAN PERMUKIMAN '),
(30, 'DINAS KOMUNIKASI, INFORMATIKA DAN STATISTIK'),
(31, 'DINAS KEARSIPAN DAN PERPUSTAKAAN'),
(32, 'DINAS SUMBER DAYA AIR DAN BINA KONSTRUKSI'),
(33, 'DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN '),
(34, 'DINAS PANGAN'),
(35, 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL '),
(36, 'DINAS PEMUDA DAN OLAHRAGA'),
(37, 'DINAS PARIWISATA'),
(38, 'DINASPERKEBUNAN,TANAMANPANGANDAN HORTIKULTURA'),
(39, 'BADAN PERENCANAAN PEMBANGUNAN DAERAH '),
(40, 'BADAN PENGELOLAAN KEUANGAN DAN ASET DAERAH '),
(41, 'BADAN PENDAPATAN DAERAH'),
(42, 'BADAN PENELITIAN DAN PENGEMBANGAN'),
(43, 'BADAN KESATUAN BANGSA DAN POLITIK'),
(44, 'BIRO PEMERINTAHAN DAN OTONOMI DAERAH'),
(45, 'BIRO HUKUM'),
(46, 'BIRO KESEJAHTERAAN RAKYAT'),
(47, 'BIRO PEREKONOMIAN'),
(48, 'BIRO PENGADAAN BARANG DAN JASA'),
(49, 'BIRO ADMINISTRASI PEMBANGUNAN'),
(50, 'BIRO ORGANISASI'),
(51, 'BIRO UMUM'),
(52, 'BIRO ADMINISTRASI PIMPINAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_lap`
--

CREATE TABLE `status_lap` (
  `id_status` int(11) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `status_lap`
--

INSERT INTO `status_lap` (`id_status`, `status`) VALUES
(1, 'Diverifikasi'),
(2, 'Diproses'),
(3, 'Selesai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_lap`);

--
-- Indeks untuk tabel `opd`
--
ALTER TABLE `opd`
  ADD PRIMARY KEY (`id_opd`);

--
-- Indeks untuk tabel `status_lap`
--
ALTER TABLE `status_lap`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_lap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `opd`
--
ALTER TABLE `opd`
  MODIFY `id_opd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `status_lap`
--
ALTER TABLE `status_lap`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
