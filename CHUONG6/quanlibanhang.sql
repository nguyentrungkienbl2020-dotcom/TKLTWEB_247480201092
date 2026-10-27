-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2026 at 10:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlibanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahang` varchar(4) NOT NULL,
  `tenhang` varchar(20) NOT NULL,
  `masx` varchar(2) NOT NULL,
  `namsx` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`mahang`, `tenhang`, `masx`, `namsx`, `gia`) VALUES
('AS01', 'Asus TUF', 'AS', 2017, 520),
('AS02', 'Asus Vivobook', 'AS', 2017, 580),
('DE01', 'Dell Vostro', 'DE', 2015, 650),
('DE02', 'Dell Inspiron', 'AS', 2015, 520),
('LE01', 'Lenovo Thinkpad', 'LE', 2019, 750),
('LE02', 'Lenovo Legion', 'LE', 2020, 540),
('LE03', 'Lenovo Yoga', 'LE', 2020, 600),
('TO01', 'Toshiba Satellite', 'TO', 2014, 630);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` varchar(4) NOT NULL,
  `makh` varchar(4) NOT NULL,
  `mahang` varchar(4) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhnien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `makh`, `mahang`, `soluong`, `thanhnien`) VALUES
('001', 'K001', 'DE01', 2, 0),
('001', 'K001', 'DE02', 1, 0),
('001', 'K001', 'LE01', 5, 0),
('002', 'K002', 'LE02', 3, 0),
('003', 'K002', 'TO01', 1, 0),
('004', 'K003', 'DE01', 2, 0),
('005', 'K004', 'AS01', 4, 0),
('005', 'K004', 'LE01', 6, 0),
('005', 'K004', 'LE02', 8, 0),
('006', 'K005', 'AS01', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` varchar(4) NOT NULL,
  `tenkh` varchar(30) NOT NULL,
  `namsinh` int(11) NOT NULL,
  `dienthoai` varchar(10) NOT NULL,
  `diachi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `namsinh`, `dienthoai`, `diachi`) VALUES
('K001', 'Nguyễn Thị Lan', 1980, '0912345678', 'Bạc Liêu'),
('K002', 'Ngô Thanh Minh', 1985, '0987654321', 'Vĩnh Lợi'),
('K003', 'Lâm Minh Thanh', 1979, '0918263547', 'Giá Rai'),
('K004', 'Dương Thu Thuỷ', 1995, '0912475757', 'Hồng Dân'),
('K005', 'Nguyễn Thị Xuân', 1987, '0912475798', 'Phước Long'),
('K006', 'Huỳnh Mẫn Đạt', 1975, '0956835687', 'Bạc Liêu'),
('K007', 'Lâm Hoài Bảo', 1990, '0947245564', 'Bạc Liêu'),
('K008', 'Hồ Trung Tính', 2000, '0913433453', 'Phước Long'),
('K009', 'Trương Xuân Thi', 2001, '0911223344', 'Vĩnh Lợi'),
('K010', 'Ngô Vân Nam', 2001, '0911223355', 'Giá Rai');

-- --------------------------------------------------------

--
-- Table structure for table `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `masx` varchar(2) NOT NULL,
  `tensx` varchar(40) NOT NULL,
  `quocgia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`masx`, `tensx`, `quocgia`) VALUES
('AS', 'ASUS', 'Đài Loan'),
('DE', 'DELL', 'Hoa Kỳ'),
('LE', 'LENOVO', 'Trung Quốc'),
('TO', 'TOSHIBA', 'Nhật Bản');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahang`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`,`mahang`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`masx`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
