-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Sep 2022 pada 16.10
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_system`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_akses`
--

CREATE TABLE `menu_akses` (
  `GroupID` int(11) NOT NULL,
  `MenuID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu_akses`
--

INSERT INTO `menu_akses` (`GroupID`, `MenuID`) VALUES
(1, 7000),
(1, 7001),
(1, 7002),
(1, 7003),
(1, 7004),
(1, 8000),
(1, 8001),
(1, 9000),
(1, 9001),
(1, 9002);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_lv1`
--

CREATE TABLE `menu_lv1` (
  `MenuID` int(11) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `MenuLabel` varchar(50) NOT NULL,
  `MenuIcon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu_lv1`
--

INSERT INTO `menu_lv1` (`MenuID`, `MenuName`, `MenuLabel`, `MenuIcon`) VALUES
(7000, 'Example', 'Example', '<i class=\'icon-grid\'></i>'),
(8000, 'Master', 'Master', '<i class=\'icon-settings\'></i>'),
(9000, 'Utility', 'Utility', '<i class=\'icon-wrench\'></i>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_lv2`
--

CREATE TABLE `menu_lv2` (
  `MenuID` int(11) NOT NULL,
  `MenuName` varchar(50) NOT NULL,
  `MenuLabel` varchar(50) NOT NULL,
  `MenuIcon` varchar(200) NOT NULL,
  `MenuLink` varchar(200) NOT NULL,
  `MenuHeader` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu_lv2`
--

INSERT INTO `menu_lv2` (`MenuID`, `MenuName`, `MenuLabel`, `MenuIcon`, `MenuLink`, `MenuHeader`) VALUES
(7001, 'Form', 'From', '', 'Example/Form', 7000),
(7002, 'Table', 'Table', '', 'Example/Table', 7000),
(7003, 'Chart', 'Chart', '', 'Example/Chart', 7000),
(7004, 'Map', 'Map', '', 'Example/Map', 7000),
(8001, 'Menu', 'Menu', '', 'Master/Menu', 8000),
(9001, 'User', 'User', '', 'Utility/User', 9000),
(9002, 'UserGroup', 'User Group', '', 'Utility/UserGroup', 9000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `UserName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Gender` tinyint(1) NOT NULL,
  `Active` bit(1) NOT NULL DEFAULT b'1',
  `GroupID` int(11) NOT NULL,
  `CreatedBy` varchar(50) NOT NULL,
  `CreatedDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`UserName`, `Email`, `Password`, `Gender`, `Active`, `GroupID`, `CreatedBy`, `CreatedDate`) VALUES
('Administrator', 'Administrator', '21232f297a57a5a743894a0e4a801fc3', 1, b'1', 1, 'System', '2022-09-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usergroup`
--

CREATE TABLE `usergroup` (
  `GroupID` int(11) NOT NULL,
  `GroupName` varchar(50) NOT NULL,
  `Active` tinyint(1) NOT NULL DEFAULT 1,
  `CreatedBy` varchar(50) NOT NULL,
  `CreatedDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `usergroup`
--

INSERT INTO `usergroup` (`GroupID`, `GroupName`, `Active`, `CreatedBy`, `CreatedDate`) VALUES
(1, 'Administrator', 1, 'System', '2022-09-04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menu_akses`
--
ALTER TABLE `menu_akses`
  ADD PRIMARY KEY (`GroupID`,`MenuID`);

--
-- Indeks untuk tabel `menu_lv1`
--
ALTER TABLE `menu_lv1`
  ADD PRIMARY KEY (`MenuID`);

--
-- Indeks untuk tabel `menu_lv2`
--
ALTER TABLE `menu_lv2`
  ADD PRIMARY KEY (`MenuID`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserName`);

--
-- Indeks untuk tabel `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`GroupID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `GroupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
