-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Okt 2019 pada 09.10
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bioskop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank`
--

CREATE TABLE `bank` (
  `id_bank` varchar(50) NOT NULL,
  `nama_bank` varchar(20) NOT NULL,
  `logo_bank` varchar(50) NOT NULL,
  `no_rekening` int(30) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_bank`, `logo_bank`, `no_rekening`, `nama_pemilik`) VALUES
('5d880db876ad5', 'BNI', '5d880db876ad5.png', 2147483647, 'nama bni'),
('5d8810b053e6b', 'BRI', '5d8810b053e6b.jpg', 2147483647, 'nama BRI'),
('5d881319f0a4a', 'BCA', '5d881319f0a4a.png', 655646, 'nama bca'),
('5d88134403ceb', 'Mandiri', '5d88134403ceb.jpg', 4547646, 'nama mandiri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id_film` varchar(64) NOT NULL,
  `judul_film` varchar(45) NOT NULL,
  `sinopsis` varchar(3000) NOT NULL,
  `trailer` varchar(500) NOT NULL DEFAULT 'default.mp4',
  `gambar` varchar(500) NOT NULL DEFAULT 'default.jpg',
  `id_genre` varchar(11) NOT NULL,
  `status_film` varchar(20) NOT NULL,
  `durasi` varchar(30) NOT NULL,
  `total_view` int(11) NOT NULL,
  `rilis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id_film`, `judul_film`, `sinopsis`, `trailer`, `gambar`, `id_genre`, `status_film`, `durasi`, `total_view`, `rilis`) VALUES
('23', 'Black Panther', 'After the events of Captain America: Civil War, Prince T\'Challa returns home to the reclusive, technologically advanced African nation of Wakanda to serve as his country\'s new king. However, T\'Challa soon finds that he is challenged for the throne from factions within his own country. When two foes conspire to destroy Wakanda, the hero known as Black Panther must team up with C.I.A. agent Everett K. Ross and members of the Dora Milaje, Wakandan special forces, to prevent Wakanda from being dragged into a world war.', '5d085ca3518d9.mp4', '5d085ca3518d9.jpg', 'G002', 'playing', '134 menit', 5, '2018-02-14'),
('5d0898797c461', 'a', 'sa', 'default.mp4', '5d0898797c461.jpg', 'G002', 'playing', '', 7, '0000-00-00'),
('5d0898b991420', 'sjaaaaaaaaaaaaaaa', 'ja', 'default.mp4', '5d0898b991420.jpg', 'G002', 'coming soon', '', 8, '0000-00-00'),
('5d08995e17391', 'sj', 'ja', 'default.mp4', '5d08995e17391.gif', 'G002', 'playing', '', 0, '0000-00-00'),
('5d12fe2c0958b', 'js', 'j', 'default.mp4', '5d12fe2c0958b.gif', 'G002', 'coming soon', '', 0, '0000-00-00'),
('5d49da3492b76', 'dfvg', 'asdg', 'default.mp4', '5d49da3492b76.jpg', 'G002', 'playing', '', 0, '0000-00-00'),
('5d49dc6650d47', 'sa', 'savc', 'default.mp4', '5d49dc6650d47.jpg', 'G002', 'coming soon', '', 0, '0000-00-00'),
('5d49dd4d39afe', 'sadsadsa', 'sadsad', 'default.mp4', '5d49dd4d39afe.jpg', 'G002', 'playing', '', 0, '0000-00-00'),
('5d49ddaeebcf4', 'sadsadsa', 'sadsad', 'default.mp4', '5d49ddaeebcf4.jpg', 'G002', 'playing', '', 0, '0000-00-00'),
('5d49de44cb3bf', 'sadasd', 'sadsad', 'default.mp4', 'default.jpg', 'G002', 'coming soon', '', 0, '0000-00-00'),
('5d49dea86d691', 'wwwwwwww', 'wwwww', 'default.mp4', 'default.jpg', 'G002', 'playing', '', 0, '0000-00-00'),
('5d49df3d4dcc4', 'kimihime', 'kimihime', 'default.mp4', 'default.jpg', 'G003', 'coming soon', '', 0, '0000-00-00'),
('5d510236b6bd8', 'afs', 'fdf', 'default.mp4', 'default.jpg', 'G002', 'playing', '', 0, '0000-00-00'),
('5d5193f7e9215', 'bc', 'bc', 'default.mp4', '5d5193f7e9215.png', 'G005', 'bc', '', 0, '0000-00-00'),
('5d51fe656d390', 'sda', 'sa', 'default.mp4', '5d51fe656d390.png', 'G004', 'S', '', 0, '0000-00-00'),
('5d525d4b3d9d9', 'av', 'av', '5d525d4b3d9d9.jpg', '5d525d4b3d9d9.jpg', 'G002', 'av', '', 0, '0000-00-00'),
('5d525d67ac096', 'vda', 'av', '5d525d67ac096.jpg', '5d525d67ac096.png', 'G002', 'vzx111', '', 0, '0000-00-00'),
('BR518062019007', 'j', 'k', 'default.mp4', 'BR518062019007.jpg', 'G002', 'kjk', '', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `id_genre` varchar(11) NOT NULL,
  `genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `genre`
--

INSERT INTO `genre` (`id_genre`, `genre`) VALUES
('G001', 'Action'),
('G002', 'Drama'),
('G003', 'Comedy'),
('G004', 'Thriller'),
('G005', 'Sci-Fi'),
('G006', 'Romace'),
('G007', 'Documentary'),
('G008', 'Adventure'),
('G009', 'Fantasy'),
('G010', 'War'),
('G011', 'Biographical'),
('G012', 'Horror'),
('G013', 'Mystery'),
('G014', 'Family'),
('G015', 'Animation'),
('G016', 'Musical');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `id_harga` varchar(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`id_harga`, `harga`) VALUES
('M001', 35000),
('M002', 40000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hari`
--

CREATE TABLE `hari` (
  `id_hari` varchar(11) NOT NULL,
  `Hari` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hari`
--

INSERT INTO `hari` (`id_hari`, `Hari`) VALUES
('H001', 'senin'),
('H002', 'selasa'),
('H003', 'rabu'),
('H004', 'kamis'),
('H005', 'jumat'),
('H006', 'sabtu'),
('H007', 'minggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `icash`
--

CREATE TABLE `icash` (
  `id_icash` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `saldo_icash` int(11) NOT NULL,
  `pemasukan` int(11) NOT NULL,
  `pengeluaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `icash`
--

INSERT INTO `icash` (`id_icash`, `id_user`, `saldo_icash`, `pemasukan`, `pengeluaran`) VALUES
(2, 1022, 50, 0, 0),
(3, 1023, 78000, 0, 0),
(4, 1024, 0, 0, 0),
(5, 1002, 10000, 0, 0),
(6, 1003, 25002, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` varchar(11) NOT NULL,
  `id_film` varchar(64) NOT NULL,
  `id_hari` varchar(11) NOT NULL,
  `id_jamtayang` varchar(11) NOT NULL,
  `id_harga` varchar(11) NOT NULL,
  `id_studio` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_film`, `id_hari`, `id_jamtayang`, `id_harga`, `id_studio`) VALUES
('j001', '23', 'H001', 'T001', 'M002', 'S001'),
('j002', '23', 'H001', 'T002', 'M002', 'S001'),
('j003', '5d0898797c461', 'H001', 'T002', 'M002', 'S002'),
('j004', '23', 'H002', 'T002', 'M001', 'S002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jamtayang`
--

CREATE TABLE `jamtayang` (
  `id_jamtayang` varchar(11) NOT NULL,
  `jam_tayang` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jamtayang`
--

INSERT INTO `jamtayang` (`id_jamtayang`, `jam_tayang`) VALUES
('T001', '10:00:00'),
('T002', '15:00:00'),
('T003', '17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kursi`
--

CREATE TABLE `kursi` (
  `id_kursi` varchar(11) NOT NULL,
  `Kursi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kursi`
--

INSERT INTO `kursi` (`id_kursi`, `Kursi`) VALUES
('K001', 'A1'),
('K002', 'A2'),
('K003', 'A3'),
('K004', 'A4'),
('K005', 'A5'),
('K006', 'A6'),
('K007', 'A7'),
('K008', 'A8'),
('K009', 'A9'),
('K010', 'A10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `metodebayar`
--

CREATE TABLE `metodebayar` (
  `id_metodeBayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_pesan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_film` varchar(50) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_jamtayang` int(11) NOT NULL,
  `id_studio` int(11) NOT NULL,
  `id_kursi` int(11) NOT NULL,
  `id_harga` int(11) NOT NULL,
  `jumlah_pesanan` int(10) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_pesanan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_user`, `tanggal_pesan`, `id_film`, `id_jadwal`, `id_jamtayang`, `id_studio`, `id_kursi`, `id_harga`, `jumlah_pesanan`, `total_harga`, `status_pesanan`) VALUES
(2, 1002, '2019-09-17 02:27:17', '5d085ca3518d9', 0, 0, 0, 0, 0, 2, 0, 'oke'),
(3, 1003, '2019-09-17 02:27:58', '5d085ca3518d9', 0, 0, 0, 0, 0, 3, 0, '0');

--
-- Trigger `pesan`
--
DELIMITER $$
CREATE TRIGGER `view` AFTER INSERT ON `pesan` FOR EACH ROW BEGIN
 update film set total_view = total_view + new.jumlah_pesanan
 where id_film= new.id_film;
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `studio`
--

CREATE TABLE `studio` (
  `id_studio` varchar(11) NOT NULL,
  `studio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `studio`
--

INSERT INTO `studio` (`id_studio`, `studio`) VALUES
('S001', 'Studio 1'),
('S002', 'Studio 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `topfilm`
--

CREATE TABLE `topfilm` (
  `id_top` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `jml_pesan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `topup`
--

CREATE TABLE `topup` (
  `id_topup` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah_transfer` int(11) NOT NULL,
  `rek_pemilik` int(30) NOT NULL,
  `n_pemilik` varchar(50) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `status_topup` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `topup`
--

INSERT INTO `topup` (`id_topup`, `id_user`, `jumlah_transfer`, `rek_pemilik`, `n_pemilik`, `tanggal`, `status_topup`) VALUES
(11, 1023, 250000, 5555, 'oke', '06-Okt-2019 10:9:57 AM', '1'),
(12, 1023, 500000, 668, 'hjj', '06-Okt-2019 10:18:54 AM', '3'),
(13, 1023, 25000, 89, 'gh', '06-Okt-2019 2:9:38 PM', '2'),
(14, 1023, 250000, 55, 'vh', '06-Okt-2019 2:15:2 PM', '1'),
(15, 1023, 50000, 666, 'hhg', '06-Okt-2019 2:16:5 PM', '1'),
(16, 1023, 50000, 888, 'ghg', '06-Okt-2019 2:17:43 PM', '2'),
(17, 1003, 25000, 568, 'ggg', '07-Okt-2019 9:18:12 AM', '2');

--
-- Trigger `topup`
--
DELIMITER $$
CREATE TRIGGER `topupsaldo` AFTER UPDATE ON `topup` FOR EACH ROW BEGIN
 if new.status_topup = 2 then
 update icash set saldo_icash = saldo_icash + new.jumlah_transfer
 where id_user= new.id_user;
 end if;
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transfer`
--

CREATE TABLE `transfer` (
  `id_transfer` int(11) NOT NULL,
  `nama_bank` varchar(45) NOT NULL,
  `no_rekening` varchar(45) NOT NULL,
  `atas nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` enum('1','2') DEFAULT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `alamat`, `email`, `no_tlp`, `password`, `hak_akses`, `photo`) VALUES
(1001, 'admin', 'banyuwangi', 'admin@gmail.com', '089660652230', '21232f297a57a5a743894a0e4a801fc3', '1', ''),
(1002, 'user', 'banyuwangi', 'user@gmail.com', '089660652230', 'ee11cbb19052e40b07aac0ca060c23ee', '2', 'Screenshot_2019-08-27-09-03-50.png'),
(1003, 'oke', 'oke', 'oke@gmail.com ', '8686', '0079fcb602361af76c4fd616d60f9414', '2', 'Screenshot_2019-08-07-21-33-56.png'),
(1022, 'tes', 'alamat', 'tes@gmai.com ', '855665', '28b662d883b6d76fd96e4ddc5e9ba780', '2', ''),
(1023, 'coba', 'alamatku', 'coba@gmail.com', '0896606522301', 'c3ec0f7b054e729c5a716c8125839829', '2', 'images.jpeg'),
(1024, 'siap', 'alamat siap', 'siap@gmail.com ', '89668', '308973c2a1ddb3dda1bed7a018b9457e', '2', '');

--
-- Trigger `user`
--
DELIMITER $$
CREATE TRIGGER `saldo` AFTER INSERT ON `user` FOR EACH ROW BEGIN
    INSERT INTO icash
    set id_user = new.id_user;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indeks untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indeks untuk tabel `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indeks untuk tabel `icash`
--
ALTER TABLE `icash`
  ADD PRIMARY KEY (`id_icash`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `jamtayang`
--
ALTER TABLE `jamtayang`
  ADD PRIMARY KEY (`id_jamtayang`);

--
-- Indeks untuk tabel `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`id_kursi`);

--
-- Indeks untuk tabel `metodebayar`
--
ALTER TABLE `metodebayar`
  ADD PRIMARY KEY (`id_metodeBayar`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id_studio`);

--
-- Indeks untuk tabel `topfilm`
--
ALTER TABLE `topfilm`
  ADD PRIMARY KEY (`id_top`);

--
-- Indeks untuk tabel `topup`
--
ALTER TABLE `topup`
  ADD PRIMARY KEY (`id_topup`);

--
-- Indeks untuk tabel `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id_transfer`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `icash`
--
ALTER TABLE `icash`
  MODIFY `id_icash` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `topfilm`
--
ALTER TABLE `topfilm`
  MODIFY `id_top` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `topup`
--
ALTER TABLE `topup`
  MODIFY `id_topup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1025;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
