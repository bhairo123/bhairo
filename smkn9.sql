-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2022 pada 21.14
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkn9`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `ID` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `namea` text NOT NULL,
  `mobile` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`ID`, `name`, `namea`, `mobile`, `email`, `comment`) VALUES
(19, 'Bhairo', 'achmad', 851627213, 'achmadbhairo@gmail.com', 'tes kolom komentar'),
(21, 'Bhairo', 'achmad', 851627213, 'achmadbhairo@gmail.com', 'tes kolom komentar:)'),
(22, 'shx', 'shx', 1243513, 'shx@gmail.com', 'this page is awesome'),
(23, 'Bhairo', 'Achmad', 2147483647, 'achmadbhairo@gmail.com', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum cumque dolores vero iste neque aperiam pariatur beatae repellat nemo, numquam fugit repudiandae reiciendis ipsam est doloremque illo ducimus distinctio provident tenetur? Nostrum nemo laudantium, harum omnis cumque atque libero numquam dolorem distinctio quis dignissimos facere dolor corporis saepe similique molestiae itaque, quasi sed facilis optio porro dolorum? Deleniti autem dicta perspiciatis, quidem aspernatur nihil itaque veritatis, dolorum illum laboriosam expedita. Iure beatae aperiam corrupti? Sint laboriosam aut iusto? Tempore maxime soluta qui, culpa reiciendis odit ad voluptate doloremque! Laborum eveniet fugit temporibus ipsum in inventore quasi veniam molestiae minus natus.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `belakang` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `talk` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `name`, `belakang`, `email`, `mobile`, `talk`) VALUES
(1, 'bhairo', 'achmad', 'sad@gmail.com', 89565, 'asdasdas'),
(2, 'Bhairo', 'Achmad', 'achmadbhairo@gmail.com', 2147483647, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum cumque dolores vero iste neque aperiam pariatur beatae repellat nemo, numquam fugit repudiandae reiciendis ipsam est doloremque illo ducimus distinctio provident tenetur? Nostrum nemo laudantium, harum omnis cumque atque libero numquam dolorem distinctio quis dignissimos facere dolor corporis saepe similique molestiae itaque, quasi sed facilis optio porro dolorum? Deleniti autem dicta perspiciatis, quidem aspernatur nihil itaque veritatis, dolorum illum laboriosam expedita. Iure beatae aperiam corrupti? Sint laboriosam aut iusto? Tempore maxime soluta qui, culpa reiciendis odit ad voluptate doloremque! Laborum eveniet fugit temporibus ipsum in inventore quasi veniam molestiae minus natus.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tugas` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twiter` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `id_jabatan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `name`, `tugas`, `instagram`, `facebook`, `twiter`, `image`, `id_jabatan`) VALUES
(4, 'YUDA', 'YUDA GAMTENG', 'YUDA', 'YUDA', '', '61fba32c82a68.jpg', 2),
(8, 'tes', 'tes', 'tes', 'tes', 'tes', '61fbcb9998306.png', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'KEPALA SEKOLAH'),
(2, 'GURU MAPEL'),
(3, 'GURU TBSM'),
(4, 'GURU TKJ'),
(5, 'GURU RPL'),
(6, 'GURU ANIM'),
(7, 'GURU ELIND');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `ID` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `akhir` text NOT NULL,
  `no` int(20) NOT NULL,
  `gmail` varchar(30) NOT NULL,
  `laporan` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`ID`, `nama`, `akhir`, `no`, `gmail`, `laporan`) VALUES
(16, 'Bhairo', 'achmad', 11111, 'achmadbhairo@gmail.com', 're'),
(17, 'Bhairo', 'royal', 12413412, 'king@gimail.com', 'feed'),
(19, 'bhairo', 'bhai', 0, 'asd', 'j'),
(20, 'bhairo', 'achmad', 2124, 'achmadbhairo@gmail.com', 'ini feed back'),
(21, 'Bhairo', 'Achmad', 2147483647, 'achmadbhiro@gmail.com', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum cumque dolores vero iste neque '),
(22, 'bhairo', 'bhairo', 2147483647, 'achmadbhairo@gmail.com', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum cumque dolores vero iste neque aperiam pariatur beatae repellat nemo, numquam fugit repudiandae reiciendis ipsam est doloremque illo ducimus distinctio provident tenetur? Nostrum nemo laudantium, harum omnis cumque atque libero numquam dolorem distinctio quis dignissimos facere dolor corporis saepe similique molestiae itaque, quasi sed facilis optio porro dolorum? Deleniti autem dicta perspiciatis, quidem aspernatur nihil itaque veritatis, dolorum illum laboriosam expedita. Iure beatae aperiam corrupti? Sint laboriosam aut iusto? Tempore maxime soluta qui, culpa reiciendis odit ad voluptate doloremque! Laborum eveniet fugit temporibus ipsum in inventore quasi veniam molestiae minus natus.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id_news`, `jenis`) VALUES
(1, 'NEWS'),
(2, 'STUDENT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `id_news` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `upload`
--

INSERT INTO `upload` (`id`, `name`, `date`, `id_news`, `title`, `sub_title`, `image`, `isi`) VALUES
(1, 'BHAIRO', '2022-02-04', 1, 'TES NEWS', 'TES NEWS', '61fc994673f38.png', 'TES NEWS'),
(2, 'BHAIRO', '2022-02-04', 1, 'JUDUL', 'SUB JUDUL', '61fc996d837d7.png', 'TES NEWS'),
(3, 'BHAIRO', '2022-02-04', 2, 'STUDENT', 'STUDENT', '61fc99a998886.png', 'TES STUDENT'),
(4, 'BHAIRO', '2022-02-04', 2, 'TES DESCENDING', 'DESCENDING', '61fc9ffcb9219.png', 'DESCENDING TES ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pw` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `pw`) VALUES
(1, 'admin', 'skanawa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indeks untuk tabel `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_news` (`id_news`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `upload`
--
ALTER TABLE `upload`
  ADD CONSTRAINT `upload_ibfk_1` FOREIGN KEY (`id_news`) REFERENCES `news` (`id_news`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
