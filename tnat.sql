-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 09:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tnat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdon`
--

CREATE TABLE `chitietdon` (
  `machitiet` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `maloai` int(11) NOT NULL,
  `mahang` int(11) NOT NULL,
  `madonhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `madonhang` int(11) NOT NULL,
  `soluonghang` int(11) NOT NULL,
  `tenkhach_d` varchar(200) NOT NULL,
  `sdt_d` int(11) NOT NULL,
  `diachi_d` text NOT NULL,
  `ngaydathang` date NOT NULL,
  `trangthai` tinyint(4) NOT NULL,
  `mahang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`madonhang`, `soluonghang`, `tenkhach_d`, `sdt_d`, `diachi_d`, `ngaydathang`, `trangthai`, `mahang`) VALUES
(51, 2, 'tien', 123456789, 'q12', '2023-04-06', 0, 9),
(52, 2, 'kimanh', 123456789, 'phan thiet', '2023-04-06', 0, 9);

-- --------------------------------------------------------

--
-- Table structure for table `hang`
--

CREATE TABLE `hang` (
  `mahang` int(11) NOT NULL,
  `tenhang` varchar(200) NOT NULL,
  `giahang` double NOT NULL,
  `tieudehang` text NOT NULL,
  `motahang` text NOT NULL,
  `ngayuphang` date NOT NULL,
  `hinhanh` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `maloai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hang`
--

INSERT INTO `hang` (`mahang`, `tenhang`, `giahang`, `tieudehang`, `motahang`, `ngayuphang`, `hinhanh`, `maloai`) VALUES
(9, 'Nhẫn midi', 100000, 'Nhẫn midi', 'Nhẫn', '2023-03-28', 'jisoo3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(200) NOT NULL,
  `motaloai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `motaloai`) VALUES
(1, 'Nhẫn', 'nhẫn'),
(2, 'Bông tai', 'bông tai'),
(3, 'Lắc tay', 'lắc tay');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `hoten` varchar(200) NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `ngaysinh` date NOT NULL,
  `sdt` char(10) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `chucvu` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `username`, `hoten`, `gioitinh`, `ngaysinh`, `sdt`, `diachi`, `chucvu`) VALUES
(1, 'tnat@gmail.com', 'tnat', 'Admin', '', 0, '0000-00-00', '', '', 1),
(2, 'kimanh@gmail.com', 'kimanh', 'kimanh', 'Kim Anh', 2, '2002-01-22', '0123456789', 'Thành phố Phan Thiết, tỉnh Bình Thuận', 0),
(3, 'ngoc@gmail.com', 'ngoc', 'ngoc', '', 2, '0000-00-00', '', '', 0),
(4, 'hehe@gmail.com', 'hehe', 'hehe', '', 0, '0000-00-00', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdon`
--
ALTER TABLE `chitietdon`
  ADD PRIMARY KEY (`machitiet`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `maloai_ct` (`maloai`),
  ADD KEY `mahang_ct` (`mahang`),
  ADD KEY `madonhang_ct` (`madonhang`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madonhang`),
  ADD KEY `mahang` (`mahang`);

--
-- Indexes for table `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`mahang`),
  ADD KEY `maloai` (`maloai`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdon`
--
ALTER TABLE `chitietdon`
  MODIFY `machitiet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madonhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `hang`
--
ALTER TABLE `hang`
  MODIFY `mahang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdon`
--
ALTER TABLE `chitietdon`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `madonhang_ct` FOREIGN KEY (`madonhang`) REFERENCES `donhang` (`madonhang`),
  ADD CONSTRAINT `mahang_ct` FOREIGN KEY (`mahang`) REFERENCES `hang` (`mahang`),
  ADD CONSTRAINT `maloai_ct` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `mahang` FOREIGN KEY (`mahang`) REFERENCES `hang` (`mahang`);

--
-- Constraints for table `hang`
--
ALTER TABLE `hang`
  ADD CONSTRAINT `maloai` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
