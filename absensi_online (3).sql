-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2021 pada 03.52
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_absensi`
--

CREATE TABLE `db_absensi` (
  `id_absen` bigint(20) NOT NULL,
  `kode_absen` varchar(100) NOT NULL,
  `nama_pegawai` varchar(125) NOT NULL,
  `kode_pegawai` varchar(125) NOT NULL,
  `tgl_absen` varchar(125) NOT NULL,
  `jam_masuk` varchar(13) NOT NULL,
  `jam_pulang` varchar(13) NOT NULL,
  `status_pegawai` int(1) NOT NULL,
  `keterangan_absen` varchar(100) NOT NULL,
  `maps_absen` varchar(255) NOT NULL,
  `time_backup` varchar(500) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_absensi`
--

INSERT INTO `db_absensi` (`id_absen`, `kode_absen`, `nama_pegawai`, `kode_pegawai`, `tgl_absen`, `jam_masuk`, `jam_pulang`, `status_pegawai`, `keterangan_absen`, `maps_absen`, `time_backup`, `created_date`) VALUES
(14, 'absen_20211199932', 'Admin', '293571010111', 'Sabtu, 20 November 2021', '04:02:14', '04:02:33', 3, 'Bekerja Di Kantor', '3.7142255, 98.6573791', '', '2021-11-20'),
(21, 'absen_20211167535', 'Admin', '293571010111', 'Minggu, 21 November 2021', '15:59:21', '20:30:05', 1, 'Bekerja Di Kantor', 'No Location', '', '2021-11-21'),
(23, 'absen_20211130454', 'Inri Kurniati br Ginting', '849214160653350', 'Minggu, 21 November 2021', '16:03:35', '20:45:49', 1, 'Bekerja Di Kantor', 'No Location', '', '2021-11-21'),
(24, 'absen_20211127168', 'Ary Sitepu', '145847963062189', 'Minggu, 21 November 2021', '16:14:37', '', 1, 'Bekerja Di Kantor', 'No Location', '', '2021-11-21'),
(38, 'absen_20211113183', 'ibal', '369067571405283', 'Senin, 22 November 2021', '11:14:36', '', 2, 'Bekerja Di Kantor', 'searching...', '', '2021-11-22'),
(39, 'absen_20211135946', 'Ary Sitepu', '145847963062189', 'Senin, 22 November 2021', '13:14:54', '', 3, 'Bekerja Di Kantor', 'searching...', '', '2021-11-22'),
(40, 'absen_20211190136', 'Patricia br Sinuraya', '227551084816409', 'Senin, 22 November 2021', '13:33:23', '', 2, 'Bekerja Di Kantor', 'searching...', '', '2021-11-22'),
(41, 'absen_20211194995', 'Admin', '293571010111', 'Senin, 22 November 2021', '14:35:44', '', 2, 'Bekerja Di Kantor', 'searching...', '', '2021-11-22'),
(42, 'absen_20211190018', 'Admin', '293571010111', 'Selasa, 23 November 2021', '08:20:04', '', 1, 'Bekerja Di Kantor', 'searching...', '', '2021-11-23'),
(43, 'absen_20211196816', 'Admin', '293571010111', 'Rabu, 24 November 2021', '07:23:09', '', 1, 'Cuti', 'searching...', '', '2021-11-24'),
(44, 'absen_20211176224', 'Patricia br Sinuraya', '227551084816409', 'Rabu, 24 November 2021', '09:22:44', '', 2, 'Bekerja Di Kantor', 'searching...', '', '2021-11-24'),
(45, 'absen_20211165423', 'Admin', '293571010111', 'Kamis, 25 November 2021', '08:23:12', '', 1, 'Bekerja Di Kantor', 'searching...', '', '2021-11-25'),
(47, 'absen_20211180667', 'Ary Sitepu', '145847963062189', 'Kamis, 25 November 2021', '13:25:48', '', 1, 'Bekerja Di Kantor', 'searching...', '', '2021-11-25'),
(48, 'absen_20211163012', 'Admin', '293571010111', 'Jumat, 26 November 2021', '09:05:02', '', 2, 'Bekerja Di Kantor', 'searching...', '', '2021-11-26'),
(52, 'absen_20211171886', 'Ary Sitepu', '145847963062189', 'Jumat, 26 November 2021', '16:33:45', '', 3, 'Cuti', 'searching...', '', '2021-11-26'),
(53, 'absen_20211186983', 'Ary Sitepu', '145847963062189', 'Senin, 29 November 2021', '08:17:06', '', 1, 'Cuti', 'searching...', '', '2021-11-29'),
(54, 'absen_20211181533', 'Admin', '293571010111', 'Selasa, 30 November 2021', '08:20:12', '', 1, 'Bekerja Di Kantor', 'searching...', '', '2021-11-30'),
(55, 'absen_20211282401', 'Admin', '293571010111', 'Rabu, 1 Desember 2021', '09:06:40', '', 1, 'Bekerja Di Kantor', 'searching...', '', '2021-12-01'),
(56, 'absen_20211275673', 'Ary Sitepu', '145847963062189', 'Rabu, 1 Desember 2021', '09:32:06', '', 1, 'Cuti', 'searching...', '', '2021-12-01'),
(57, 'absen_20211235731', 'Patricia br Sinuraya', '227551084816409', 'Rabu, 1 Desember 2021', '11:02:50', '', 1, 'Bekerja Di Kantor', 'searching...', '', '2021-12-01'),
(58, 'absen_20211270808', 'Inri Kurniati br Ginting', '849214160653350', 'Rabu, 1 Desember 2021', '11:11:25', '', 1, 'Cuti', 'searching...', '', '2021-12-01'),
(59, 'absen_20211228462', 'ibal', '369067571405283', 'Rabu, 1 Desember 2021', '11:19:01', '', 1, 'Cuti', 'searching...', '', '2021-12-01'),
(60, 'absen_20211233432', 'Atap Teduh', '514645073899208', 'Rabu, 1 Desember 2021', '11:39:17', '', 1, 'Bekerja Di Kantor', 'searching...', '', '2021-12-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_hari`
--

CREATE TABLE `db_hari` (
  `id_hari` int(11) NOT NULL,
  `nama_hari` varchar(128) NOT NULL,
  `jam_masuk` varchar(13) NOT NULL,
  `max_telat` varchar(13) NOT NULL,
  `jam_pulang` varchar(13) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_hari`
--

INSERT INTO `db_hari` (`id_hari`, `nama_hari`, `jam_masuk`, `max_telat`, `jam_pulang`, `status`) VALUES
(1, 'Senin', '08:20:00', '13:30:00', '17:00:00', 'aktif'),
(2, 'Selasa', '08:30:00', '08:45:00', '17:00:00', 'aktif'),
(3, 'Rabu', '14:00:00', '16:45:00', '17:00:00', 'aktif'),
(4, 'Kamis', '14:00:00', '16:45:00', '17:00:00', 'aktif'),
(5, 'Jumat', '16:30:00', '17:45:00', '18:00:00', 'aktif'),
(6, 'Sabtu', '08:30:00', '08:45:00', '13:00:00', 'aktif'),
(7, 'Minggu', '17:00:00', '16:30:00', '20:00:00', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_rememberme`
--

CREATE TABLE `db_rememberme` (
  `id_session` int(11) NOT NULL,
  `kode_pegawai` varchar(125) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_agent` varchar(35) NOT NULL,
  `agent_string` varchar(255) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `user_ip` varchar(35) NOT NULL,
  `cookie_hash` varchar(255) NOT NULL,
  `expired` int(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_setting`
--

CREATE TABLE `db_setting` (
  `status_setting` int(1) NOT NULL DEFAULT 0,
  `nama_instansi` varchar(255) NOT NULL,
  `jumbotron_lead_set` varchar(125) NOT NULL,
  `nama_app_absensi` varchar(20) NOT NULL DEFAULT 'Absensi Online',
  `logo_instansi` varchar(255) NOT NULL,
  `timezone` varchar(35) NOT NULL,
  `absen_mulai` varchar(13) NOT NULL,
  `maps_use` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_setting`
--

INSERT INTO `db_setting` (`status_setting`, `nama_instansi`, `jumbotron_lead_set`, `nama_app_absensi`, `logo_instansi`, `timezone`, `absen_mulai`, `maps_use`) VALUES
(1, 'PT. ATAP TEDUH LESTARI', 'Good Roof, Good Life', 'Absensi Online', '983af86aa57053f3b8fda5341101a798.png', 'Asia/Jakarta', '07:00:00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_izin`
--

CREATE TABLE `tb_izin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `jenis_izin` varchar(100) NOT NULL,
  `tanggal_izin` date NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `created_by` varchar(128) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `edited_by` varchar(128) NOT NULL,
  `edited_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_izin`
--

INSERT INTO `tb_izin` (`id`, `nama`, `divisi`, `jenis_izin`, `tanggal_izin`, `tanggal_masuk`, `created_by`, `created_date`, `edited_by`, `edited_time`) VALUES
(22, '43', 'Auditor', 'Sakit', '2021-11-22', '2021-11-23', '', '2021-11-30 02:58:36', '', '2021-11-30 02:58:36'),
(23, '45', 'IT', 'Cuti', '2021-11-23', '2021-11-25', '', '2021-11-30 08:20:46', '', '2021-11-30 08:20:46'),
(28, '45', 'IT', 'Cuti', '2021-11-11', '2021-11-14', '', '2021-11-30 11:00:37', '', '2021-11-30 11:00:37'),
(29, '42', 'IT', 'Cuti', '2021-11-29', '2021-11-30', '', '2021-11-30 13:21:40', '', '2021-11-30 13:21:40'),
(30, '48', 'Acounting', 'Cuti', '2021-11-21', '2021-11-22', '', '2021-11-30 15:05:05', '', '2021-11-30 15:05:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_pegawai` int(11) NOT NULL,
  `nama_lengkap` varchar(125) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(1) NOT NULL,
  `umur` int(11) NOT NULL,
  `image` varchar(125) NOT NULL,
  `qr_code_image` varchar(125) NOT NULL,
  `kode_pegawai` varchar(125) NOT NULL,
  `instansi` varchar(125) NOT NULL,
  `jabatan` varchar(125) NOT NULL,
  `npwp` varchar(255) NOT NULL,
  `tgl_lahir` varchar(25) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `bagian_shift` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `qr_code_use` int(2) NOT NULL,
  `last_login` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_pegawai`, `nama_lengkap`, `username`, `password`, `role_id`, `umur`, `image`, `qr_code_image`, `kode_pegawai`, `instansi`, `jabatan`, `npwp`, `tgl_lahir`, `tempat_lahir`, `jenis_kelamin`, `bagian_shift`, `is_active`, `qr_code_use`, `last_login`, `date_created`) VALUES
(12, 'Admin', 'admin', '$2y$10$sZVyS3G6aVjMRoLq0JhuZuiAat.QjOOtbcyohRih3IxtQaEvJG4Eq', 1, 18, 'default.png', 'no-qrcode.png', '293571010111', 'PT. ATAP TEDUH LESTARI', 'Test', 'Tidak Ada', '2020-09-08', 'Test', 'Laki - Laki', 1, 1, 0, 1638333405, 1584698797),
(42, 'azmi', 'azmi', '$2y$10$Zo8PsQ1XApBnMN/Ol98yhOehhx68MdX9wua2nXl4I90zy160I8Ply', 3, 25, '9b93c7d071a84e8aea90056178bda6eb.jpg', 'no-qrcode.png', '660520929818374', 'PT. ATAP TEDUH LESTARI', 'Head', 'Tidak Ada', '1996-07-11', 'Medan', 'Laki - Laki', 1, 1, 0, 1637473406, 1637330701),
(43, 'Patricia br Sinuraya', '12345678', '$2y$10$Ewgz/eesaVo6HuAIWnfqo./krmBlhJukhi1s99Otx.bd/f.HJt9he', 3, 35, 'c9fe188e0ec17bbcfc0c9d329dc2d536.jpg', 'no-qrcode.png', '227551084816409', 'PT. ATAP TEDUH LESTARI', 'Auditor', '12345678', '2021-11-14', 'Jakarta', 'Laki - Laki', 1, 1, 0, 1638331858, 1637484840),
(44, 'Inri Kurniati br Ginting', '1122334455', '$2y$10$reI3.jWURAoT9vyV6cEobeQODk.a6ulnUtaVx6pX.VegW.ABmFTDK', 3, 20, 'af0d4911577a803d02b758e3298408fa.jpg', 'no-qrcode.png', '849214160653350', 'PT. ATAP TEDUH LESTARI', 'Head IPC', '1122334455', '2021-11-21', 'Jakarta', 'Perempuan', 1, 1, 0, 1638331894, 1637485269),
(45, 'Ary Sitepu', '20060788', '$2y$10$R2GCPOs/dYazwE6AvBL0P.a.udTH5HdhhyYnV6BOv5kik9s0Oak1O', 1, 25, 'd237c572f78357feb8817c68f5f95807.jpg', 'no-qrcode.png', '145847963062189', 'PT. ATAP TEDUH LESTARI', 'Head IT', '20060788', '2021-11-15', 'Jakarta', 'Laki - Laki', 1, 1, 0, 1638331132, 1637486055),
(46, 'Atap Teduh', 'atapteduh', '$2y$10$3vuCp9/5nTJAW7eIhZh6uewJRRNXDRCWd6bJ9nNRnrSwGoLN5kSfK', 1, 40, '0ecf3eb4f28e660b4e6fa22f022cc0a4.png', 'no-qrcode.png', '514645073899208', 'PT. ATAP TEDUH LESTARI', 'Head', '12345678', '2021-11-15', 'medan', 'Laki - Laki', 1, 1, 0, 0, 1637548490),
(47, 'ibal', 'ibal', '$2y$10$5NC0Bwh32x.RP73TXpxb/ejIdV94Ons2fcRL2lrk57I/jgTl1NfaO', 2, 20, 'a9d5caa4d6e6373dda79a8aa3bbbd471.png', 'no-qrcode.png', '369067571405283', 'PT. ATAP TEDUH LESTARI', 'Head', '12345678', '2021-11-22', 'jakarta', 'Laki - Laki', 1, 1, 0, 1638332355, 1637554267),
(48, 'anto', 'anto', '$2y$10$SVgvMvKWrXrV1y4s9avq4.2pnr.st.II0S3fy340S1SvPhaybC0q6', 3, 24, '517026000f7d82b2e3171c92f3020f8f.jpg', '', '315690547189708', 'PT. ATAP TEDUH LESTARI', 'IPC', '12345678', '2021-11-30', 'JAKARTA', 'Laki - Laki', 1, 1, 0, 0, 1638237046);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_absensi`
--
ALTER TABLE `db_absensi`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indeks untuk tabel `db_hari`
--
ALTER TABLE `db_hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indeks untuk tabel `db_rememberme`
--
ALTER TABLE `db_rememberme`
  ADD PRIMARY KEY (`id_session`);

--
-- Indeks untuk tabel `db_setting`
--
ALTER TABLE `db_setting`
  ADD PRIMARY KEY (`status_setting`);

--
-- Indeks untuk tabel `tb_izin`
--
ALTER TABLE `tb_izin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_absensi`
--
ALTER TABLE `db_absensi`
  MODIFY `id_absen` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `db_hari`
--
ALTER TABLE `db_hari`
  MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `db_rememberme`
--
ALTER TABLE `db_rememberme`
  MODIFY `id_session` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_izin`
--
ALTER TABLE `tb_izin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
