-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2016 at 03:30 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giadv_local`
--

-- --------------------------------------------------------

--
-- Table structure for table `cbkkdvvtkhac`
--

CREATE TABLE `cbkkdvvtkhac` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `socv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhap` date DEFAULT NULL,
  `socvlk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhaplk` date DEFAULT NULL,
  `ngayhieuluc` date DEFAULT NULL,
  `ttnguoinop` text COLLATE utf8_unicode_ci,
  `ngaynhan` date DEFAULT NULL,
  `sohsnhan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaychuyen` datetime DEFAULT NULL,
  `lydo` text COLLATE utf8_unicode_ci,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uudai` text COLLATE utf8_unicode_ci,
  `ghichu` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cbkkdvvtkhac`
--

INSERT INTO `cbkkdvvtkhac` (`id`, `masothue`, `masokk`, `socv`, `ngaynhap`, `socvlk`, `ngaynhaplk`, `ngayhieuluc`, `ttnguoinop`, `ngaynhan`, `sohsnhan`, `ngaychuyen`, `lydo`, `trangthai`, `uudai`, `ghichu`, `created_at`, `updated_at`) VALUES
(4, 'ToanViet010203', 'ToanViet010203.1464839587', 'CV004', '2016-06-20', '', '0000-00-00', '2016-06-30', 'Vũ Ngọc Nam - 0985874255', '2016-06-02', '3', '2016-06-02 10:53:38', NULL, 'Đang công bố', '', 'Thông tin kê khai', '2016-06-02 03:53:07', '2016-06-02 08:57:47');

-- --------------------------------------------------------

--
-- Table structure for table `cbkkdvvtxb`
--

CREATE TABLE `cbkkdvvtxb` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `socv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhap` date DEFAULT NULL,
  `socvlk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhaplk` date DEFAULT NULL,
  `ngayhieuluc` date DEFAULT NULL,
  `ttnguoinop` text COLLATE utf8_unicode_ci,
  `ngaynhan` date DEFAULT NULL,
  `sohsnhan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaychuyen` datetime DEFAULT NULL,
  `lydo` text COLLATE utf8_unicode_ci,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uudai` text COLLATE utf8_unicode_ci,
  `ghichu` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cbkkdvvtxk`
--

CREATE TABLE `cbkkdvvtxk` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `socv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhap` date DEFAULT NULL,
  `socvlk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhaplk` date DEFAULT NULL,
  `ngayhieuluc` date DEFAULT NULL,
  `ttnguoinop` text COLLATE utf8_unicode_ci,
  `ngaynhan` date DEFAULT NULL,
  `sohsnhan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaychuyen` datetime DEFAULT NULL,
  `lydo` text COLLATE utf8_unicode_ci,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uudai` text COLLATE utf8_unicode_ci,
  `ghichu` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cbkkdvvtxk`
--

INSERT INTO `cbkkdvvtxk` (`id`, `masothue`, `masokk`, `socv`, `ngaynhap`, `socvlk`, `ngaynhaplk`, `ngayhieuluc`, `ttnguoinop`, `ngaynhan`, `sohsnhan`, `ngaychuyen`, `lydo`, `trangthai`, `uudai`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, '0312241579', '0312241579.1464685318', 'CV0001', '2016-06-01', '', '0000-00-00', '2016-06-10', 'Nguyễn Văn Hải - 0808080808', '2016-06-02', '1', '2016-05-31 16:02:42', NULL, 'Đang công bố', '', '- Giá vé bao gồm giá bến bãi, điều hành xe, chi phi trên đường đi,...\r\n- Giá vé đã bao gồm thuế VAT, bảo hiểm', '2016-05-31 09:01:58', '2016-06-02 03:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `cbkkdvvtxtx`
--

CREATE TABLE `cbkkdvvtxtx` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `socv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhap` date DEFAULT NULL,
  `socvlk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhaplk` date DEFAULT NULL,
  `ngayhieuluc` date DEFAULT NULL,
  `ttnguoinop` text COLLATE utf8_unicode_ci,
  `ngaynhan` date DEFAULT NULL,
  `sohsnhan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaychuyen` datetime DEFAULT NULL,
  `lydo` text COLLATE utf8_unicode_ci,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uudai` text COLLATE utf8_unicode_ci,
  `ghichu` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cbkkdvvtxtx`
--

INSERT INTO `cbkkdvvtxtx` (`id`, `masothue`, `masokk`, `socv`, `ngaynhap`, `socvlk`, `ngaynhaplk`, `ngayhieuluc`, `ttnguoinop`, `ngaynhan`, `sohsnhan`, `ngaychuyen`, `lydo`, `trangthai`, `uudai`, `ghichu`, `created_at`, `updated_at`) VALUES
(2, 'ToanViet010203', 'ToanViet010203.1464839340', 'CV003', '2016-06-10', '', '0000-00-00', '2016-06-15', 'Hoàng Ngọc Lan - 0903487999', '2016-06-02', '2', '2016-06-02 10:49:28', NULL, 'Đang công bố', '', 'Thông tin kê khai lần đầu.', '2016-06-02 03:49:00', '2016-06-02 08:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `cbkkgdvlt`
--

CREATE TABLE `cbkkgdvlt` (
  `id` int(10) UNSIGNED NOT NULL,
  `mahs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macskd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhap` date DEFAULT NULL,
  `socv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `socvlk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycvlk` date DEFAULT NULL,
  `ngayhieuluc` date DEFAULT NULL,
  `ttnguoinop` text COLLATE utf8_unicode_ci,
  `ngaynhan` date DEFAULT NULL,
  `sohsnhan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8_unicode_ci,
  `ngaychuyen` datetime DEFAULT NULL,
  `lydo` text COLLATE utf8_unicode_ci,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idkk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cbkkgdvlt`
--

INSERT INTO `cbkkgdvlt` (`id`, `mahs`, `macskd`, `masothue`, `ngaynhap`, `socv`, `socvlk`, `ngaycvlk`, `ngayhieuluc`, `ttnguoinop`, `ngaynhan`, `sohsnhan`, `ghichu`, `ngaychuyen`, `lydo`, `trangthai`, `idkk`, `created_at`, `updated_at`) VALUES
(2, '1464765960', 'PhoBien010203-162016142424', 'PhoBien010203', '2016-06-01', '001/PhoBien', '', '0000-00-00', '2016-06-05', 'Nguyễn Thị Mỹ Hạnh -  09872321541', '2016-06-20', '21', 'Giờ nhận phòng: 14:00\r\nGiờ trả phòng: 12:00\r\nChính sách hủy:\r\n•	Đối với các đơn phòng nhỏ hơn 5 phòng:\r\n-	Không tính phí hủy nếu khách hàng báo trước 07 ngày (tính từ ngày đến).\r\n-	Tính phí 50% tổng số tiền đặt phòng nếu khách hàng báo trước 03-07 ngày (tính từ ngày đến).\r\n-	Tính phí 100% tổng số tiền đặt phòng nếu khách hàng hủy đặt phòng dưới 03 ngày (tính từ ngày đến).\r\n•	Đối với đơn phòng từ 5 phòng trở lên\r\n-	Không tính phí hủy nếu khách hàng báo trước 15 ngày (tính từ ngày đến).\r\n-	Tính phí 50% tổng số tiền đặt phòng nếu khách hàng báo trước 07-15 ngày (tính từ ngày đến).\r\n-	Tính phí 100% tổng số tiền đặt phòng nếu khách hàng hủy đặt phòng dưới 07 ngày (tính từ ngày đến).', '2016-06-01 14:26:24', NULL, 'Đang công bố', '8', '2016-06-20 08:11:13', '2016-06-20 08:11:13'),
(3, '1464683297', '4200284469-3152016152530', '4200284469', '2016-02-03', '05/CTTĐ', '04/CTTĐ', '2016-02-03', '2016-02-16', 'Trần Thị Thúy Nga - 091234567- thanhdatholtel@gmail.com', '2016-02-03', '1120', '- Phụ thu 150.000 đ/khách/ngày đêm\r\n- Mức kê khai nêu trên đã bao gồm thuế GTGT.', '2016-05-31 15:31:40', NULL, 'Đang công bố', '1', '2016-06-20 08:22:27', '2016-06-20 08:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `cskddvlt`
--

CREATE TABLE `cskddvlt` (
  `id` int(10) UNSIGNED NOT NULL,
  `macskd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tencskd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaihang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachikd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telkd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `toado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cskddvlt`
--

INSERT INTO `cskddvlt` (`id`, `macskd`, `masothue`, `tencskd`, `loaihang`, `diachikd`, `telkd`, `toado`, `created_at`, `updated_at`) VALUES
(1, '4200284469-3152016152530', '4200284469', 'Khách sạn Thành Đạt', '2', '86A Trần Phú -TP Nha Trang', '058.3523626', '12.2295783,109.1976831', '2016-05-31 08:25:30', '2016-05-31 08:25:30'),
(2, '4200619637-3152016155331', '4200619637', 'Khu nghỉ dưỡng AMIANA', '5', 'Đường Phạm Văn Đồng, Tổ 14, Phường Vĩnh Hoàng, Nha Trang', '058.3553333', '12.2387911,109.1967488', '2016-05-31 08:53:31', '2016-05-31 08:53:31'),
(3, 'havana010203-162016935', 'havana010203', 'Khách sạn Havana', '5', '38 Trần Phú, Phường Lộc Thọ, Nha Trang', '05113991201', '12.2421813,109.1964263', '2016-06-01 02:03:05', '2016-06-01 02:03:05'),
(4, 'Regalia010203-16201692248', 'Regalia010203', 'Khách Sạn Regalia Nha Trang', '3', '98B Trần Phú, Lộc Thọ, Nha Trang, Khánh Hòa', '058 121214141', '12.2269923,109.1997095', '2016-06-01 02:22:49', '2016-06-01 02:22:49'),
(5, 'ThienKim010203-16201694010', 'ThienKim010203', 'Khách Sạn Thiên Kim 2 ', '2', '6A Ngô Đức Kế, Nha Trang, Nha Trang, Khánh Hòa', '', '12.2412514,109.1912114', '2016-06-01 02:40:11', '2016-06-01 02:40:11'),
(6, 'SenVang010203-16201610447', 'SenVang010203', 'Khách Sạn Golden Lotus - Sen Vàng', '2', ' 96B4 Trần Phú, Nha Trang, Khánh Hòa', '058 4342342043', '12.2267483,109.2003167', '2016-06-01 03:04:47', '2016-06-01 03:04:47'),
(7, 'TuyetMai010203-162016103423', 'TuyetMai010203', 'Khách Sạn Tuyết Mai 2', '2', '98B1 Trần Phú, Nha Trang, Khánh Hòa', '058 2321312321', '12.2267483,109.2003167', '2016-06-01 03:34:24', '2016-06-01 03:34:24'),
(8, 'PhoBien010203-162016142424', 'PhoBien010203', 'Khách sạn Phố Biển', '2', '64/1 Trần Phú, Nha Trang, Khánh Hòa', '058 999999232', '12.2366631,109.1966264', '2016-06-01 07:24:24', '2016-06-01 07:24:24'),
(10, 'thanhdat_1478657651', 'thanhdat', 'CS', '3', '123567890', '1234567890', '', '2016-11-09 02:14:11', '2016-11-09 02:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `dmdvvtkhac`
--

CREATE TABLE `dmdvvtkhac` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaixe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemdau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemcuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tendichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qccl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmdvvtkhac`
--

INSERT INTO `dmdvvtkhac` (`id`, `masothue`, `madichvu`, `loaixe`, `diemdau`, `diemcuoi`, `tendichvu`, `qccl`, `dvt`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, '0312241579', 'DVXTX03122415791464766504', 'Xe tải 5 tấn', '', '', 'Xe chở hàng 5 tấn', '', 'Ngày', '', '2016-06-01 07:35:04', '2016-06-01 09:25:30'),
(2, '0312241579', 'DVXTX03122415791464767006', 'Xe tải 15 tấn', '', '', 'Xe chở hàng 15 tấn', 'Thùng kín', 'Ngày', '', '2016-06-01 07:43:26', '2016-06-01 09:24:54'),
(3, '0312241579', 'DVXTX03122415791464767111', 'Xe tải 8 tấn', '', '', 'Xe chở hàng 8 tấn', '', 'Ngày', '', '2016-06-01 07:45:11', '2016-06-01 09:25:40'),
(4, '0312241579', 'DVXTX03122415791464767182', 'Xe tải 10 tấn', '', '', 'Xe chở hàng 11 tấn', 'Thùng kín', 'Ngày', '', '2016-06-01 07:46:22', '2016-06-01 09:23:29'),
(6, '0312241579', 'DVXTX03122415791464767272', 'Xe tải 20 tấn', '', '', 'Xe chở hàng 20 tấn', 'Thùng kín', 'Ngày', '', '2016-06-01 07:47:52', '2016-06-01 09:25:15'),
(7, '0312241579', 'DVXTX03122415791464773221', 'Xe tải 5 tạ', '', '', 'Xe chở hàng 5 tạ', '', 'Ngày', '', '2016-06-01 09:27:01', '2016-06-01 09:27:01'),
(8, '0312241579', 'DVXTX03122415791464773246', 'Xe tải 1 tấn', '', '', 'Xe chở hàng 1 tấn', '', 'Ngày', '', '2016-06-01 09:27:26', '2016-06-01 09:27:26'),
(9, '0422541867', 'DVXTX04225418671464833295', 'Xe tải 1,25 tấn', '', '', 'Xe chở hàng 1,25 tấn', '', 'Ngày', '', '2016-06-02 02:08:15', '2016-06-02 02:08:15'),
(10, '0422541867', 'DVXTX04225418671464833327', 'Xe tải 2,5 tấn', '', '', 'Xe chở hàng 2,5 tấn', '', 'Ngày', '', '2016-06-02 02:08:47', '2016-06-02 02:08:47'),
(11, '0422541867', 'DVXTX04225418671464833348', 'Xe tải 3,5 tấn', '', '', 'Xe chở hàng 3,5 tấn', '', 'Ngày', '', '2016-06-02 02:09:08', '2016-06-02 02:09:08'),
(12, '0422541867', 'DVXTX04225418671464833371', 'Xe tải 5 tấn', '', '', 'Xe chở hàng 5 tấn', '', 'Ngày', '', '2016-06-02 02:09:31', '2016-06-02 02:09:31'),
(13, '0422541867', 'DVXTX04225418671464833392', 'Xe tải 8 tấn', '', '', 'Xe chở hàng 8 tấn', '', 'Ngày', '', '2016-06-02 02:09:52', '2016-06-02 02:09:52'),
(14, '0422541867', 'DVXTX04225418671464833415', 'Xe tải 10 tấn', '', '', 'Xe chở hàng 10 tấn', '', 'Ngày', '', '2016-06-02 02:10:15', '2016-06-02 02:10:15'),
(15, '0422541867', 'DVXTX04225418671464833437', 'Xe tải 15 tấn', '', '', 'Xe chở hàng 15 tấn', '', 'Ngày', '', '2016-06-02 02:10:37', '2016-06-02 02:10:37'),
(16, '7984523197', 'DVXTX79845231971464833767', 'Chuyển phát hàng', 'Hà Nội', 'Hải Dương', 'Hàng hóa < 1kg', '', 'Kg', '', '2016-06-02 02:16:07', '2016-06-02 02:16:07'),
(17, '7984523197', 'DVXTX79845231971464833814', 'Chuyển phát hàng', 'Hà Nội', 'Hải Dương', 'Hàng hóa từ 1kg đến 2kg', '', 'Kg', '', '2016-06-02 02:16:54', '2016-06-02 02:16:54'),
(18, '7984523197', 'DVXTX79845231971464833872', 'Chuyển phát hàng', 'Hà Nội', 'Hải Dương', 'Hàng hóa từ 2kg đến 3kg', '', 'Kg', '', '2016-06-02 02:17:52', '2016-06-02 02:17:52'),
(19, '7984523197', 'DVXTX79845231971464833914', 'Chuyển phát hàng', 'Hà Nội', 'Hải Phòng', 'Hàng hóa < 1kg', '', 'Kg', '', '2016-06-02 02:18:34', '2016-06-02 02:18:34'),
(20, '7984523197', 'DVXTX79845231971464833938', 'Chuyển phát hàng', 'Hà Nội', 'Hải Phòng', 'Hàng hóa từ 1kg đến 2kg', '', 'Kg', '', '2016-06-02 02:18:58', '2016-06-02 02:18:58'),
(21, '7984523197', 'DVXTX79845231971464833970', 'Chuyển phát hàng', 'Hà Nội', 'Hải Phòng', 'Hàng hóa từ 2kg đến 3kg', '', 'Kg', '', '2016-06-02 02:19:30', '2016-06-02 02:19:30'),
(22, 'ToanViet010203', 'DVXTXToanViet0102031464839408', 'Xe tải 5 tạ', '', '', 'Xe chở hàng 0,5 tấn', '', 'Ngày', '', '2016-06-02 03:50:08', '2016-06-02 03:50:08'),
(23, 'ToanViet010203', 'DVXTXToanViet0102031464839431', 'Xe tải 1,25 tấn', '', '', 'Xe chở hàng 1,25 tấn', '', 'Ngày', '', '2016-06-02 03:50:31', '2016-06-02 03:50:31'),
(24, 'ToanViet010203', 'DVXTXToanViet0102031464839454', 'Xe tải 2,5 tấn', '', '', 'Xe chở hàng 3,5 tấn', '', 'Ngày', '', '2016-06-02 03:50:54', '2016-06-02 03:50:54'),
(25, 'ToanViet010203', 'DVXTXToanViet0102031464839481', 'Xe tải 3,5 tấn', '', '', 'Xe chở hàng 3,5 tấn', '', 'Ngày', '', '2016-06-02 03:51:21', '2016-06-02 03:51:21'),
(26, 'ToanViet010203', 'DVXTXToanViet0102031464839501', 'Xe tải 5 tấn', '', '', 'Xe chở hàng 5 tấn', '', 'Ngày', '', '2016-06-02 03:51:41', '2016-06-02 03:51:41'),
(27, '0526915521', 'DVXTX05269155211464856845', 'Xe tải 1,25 tấn', 'Quảng Ninh', 'Hà Nội', 'Xe chở hàng 1,25 tấn ', '', 'Ngày', '', '2016-06-02 08:40:45', '2016-06-02 08:40:45'),
(28, '0526915521', 'DVXTX05269155211464856904', 'Xe tải 3,5 tấn', 'Quảng Ninh', 'Hà Nội', 'Xe chở hàng 3,5 tấn', '', 'Ngày', '', '2016-06-02 08:41:44', '2016-06-02 08:41:44'),
(29, '0526915521', 'DVXTX05269155211464856934', 'Xe tải 5 tấn', 'Quảng Ninh', 'Hà Nội', 'Xe chở hàng 5 tấn', '', 'Ngày', '', '2016-06-02 08:42:14', '2016-06-02 08:42:14'),
(30, '0526915521', 'DVXTX05269155211464856981', 'Xe tải 2,5 tấn', 'Quảng Ninh', 'Hải Phòng', 'Xe chở hàng 2,5 tấn', '', 'Vé', '', '2016-06-02 08:43:01', '2016-06-02 08:43:01'),
(31, '0626915598', 'DVXTX06269155981464858236', 'Xe tải 1,25 tấn', '', '', 'Xe chở hàng 1,25 tấn', '', 'Ngày', '', '2016-06-02 09:03:56', '2016-06-02 09:03:56'),
(32, '0626915598', 'DVXTX06269155981464858255', 'Xe tải 3,5 tấn', '', '', 'Xe chở hàng 3,5 tấn', '', 'Ngày', '', '2016-06-02 09:04:15', '2016-06-02 09:04:47'),
(33, '0626915598', 'DVXTX06269155981464858276', 'Xe tải 5 tấn', '', '', 'Xe chở hàng 5 tấn', '', 'Ngày', '', '2016-06-02 09:04:36', '2016-06-02 09:04:56'),
(34, '0626915598', 'DVXTX06269155981464858318', 'Xe tải 8 tấn', '', '', 'Xe chở hàng 8 tấn', '', 'Ngày', '', '2016-06-02 09:05:18', '2016-06-02 09:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `dmdvvtxb`
--

CREATE TABLE `dmdvvtxb` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemdau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemcuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tendichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qccl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvtluot` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvtthang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmdvvtxb`
--

INSERT INTO `dmdvvtxb` (`id`, `masothue`, `madichvu`, `diemdau`, `diemcuoi`, `tendichvu`, `qccl`, `dvtluot`, `dvtthang`, `ghichu`, `created_at`, `updated_at`) VALUES
(3, 'ToanViet010203', 'DVXBToanViet0102031464835826', 'Bến Thành', 'Bến Thành', 'Các tuyến xe buýt có cự ly dưới 18 km', 'Áp dụng cho đối tượng học sinh, sinh viên', 'Vé', 'Tháng', '', '2016-06-02 02:50:26', '2016-06-02 02:50:26'),
(4, 'ToanViet010203', 'DVXBToanViet0102031464835882', 'Bến Thành', 'Bến Thành', 'Các tuyến xe buýt có cự ly trên 18 km', 'Áp dụng cho học sinh, sinh viên', 'Vé', 'Tháng', '', '2016-06-02 02:51:22', '2016-06-02 02:51:22'),
(5, 'ToanViet010203', 'DVXBToanViet0102031464835931', 'HCM', 'HCM', 'Các tuyến xe buýt có cự ly dưới 18 km', 'Áp dụng cho đối tượng không phải học sinh, sinh viên', 'Vé', 'Tháng', '', '2016-06-02 02:52:11', '2016-06-02 02:52:11'),
(6, 'ToanViet010203', 'DVXBToanViet0102031464835996', 'HCM', 'HCM', 'Các tuyến xe buýt có cự ly trên 18 km', 'Áp dụng cho đối tượng không phải học sinh, sinh viên', 'Vé', 'Tháng', '', '2016-06-02 02:53:16', '2016-06-02 02:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `dmdvvtxk`
--

CREATE TABLE `dmdvvtxk` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaixe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemdau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemcuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tendichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qccl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmdvvtxk`
--

INSERT INTO `dmdvvtxk` (`id`, `masothue`, `madichvu`, `loaixe`, `diemdau`, `diemcuoi`, `tendichvu`, `qccl`, `dvt`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, '0312241579', 'DVXK03122415791464683994', 'Xe 45 chỗ', 'Sài Gòn', 'Cần Thơ', 'Sài Gòn - Cần Thơ', 'Máy lạnh, giường nằm, Wifi', 'Vé', '', '2016-05-31 08:39:54', '2016-05-31 08:39:54'),
(2, '0312241579', 'DVXK03122415791464684075', 'Xe 45 chỗ', 'Đà Lạt', 'Nha Trang', 'Đà Lạt - Nha Trang', 'Giường nằm, máy lạnh', 'Vé', '', '2016-05-31 08:41:15', '2016-05-31 08:41:15'),
(3, '0312241579', 'DVXK03122415791464684151', 'Xe 45 chỗ', 'Đà Lạt', 'Đà Nẵng', 'Đà Lạt - Đà Nẵng', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', '', '2016-05-31 08:42:31', '2016-05-31 08:42:31'),
(4, '0312241579', 'DVXK03122415791464684187', 'Xe 45 chỗ', 'Đà Lạt', 'Huế', 'Đà Lạt - Huế', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', '', '2016-05-31 08:43:07', '2016-05-31 08:43:07'),
(5, '0312241579', 'DVXK03122415791464684243', 'Xe 45 chỗ', 'Đà Lạt', 'Cần Thơ', 'Đà Lạt - Cần Thơ', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', '', '2016-05-31 08:44:03', '2016-05-31 08:44:03'),
(6, '0312241579', 'DVXK03122415791464684327', 'Xe 45 chỗ', 'Sài Gòn', 'Cà Mau', 'Sài Gòn - Cà Mau', 'Ghế ngồi, máy lạnh, nước uống', 'Vé', '', '2016-05-31 08:45:27', '2016-05-31 08:45:27'),
(7, '0312241579', 'DVXK03122415791464684401', 'Xe 30 chỗ', 'Sài Gòn', 'Mũi Né', 'Sài Gòn - Mũi Né', 'Ghế ngồi, nước uống, máy lạnh', 'Vé', '', '2016-05-31 08:46:41', '2016-05-31 08:46:41'),
(8, '0312241579', 'DVXK03122415791464684581', 'Xe 45 chỗ', 'Hà Nội', 'Đà Nẵng', 'Hà Nội - Đà Nẵng', 'Giướng nằm, nước uống, máy lạnh', 'Vé', '', '2016-05-31 08:49:41', '2016-05-31 08:49:41'),
(9, '0312241579', 'DVXK03122415791464684624', 'Xe 45 chỗ', 'Hà Nội', 'Hải Phòng', 'Hà Nội - Hải Phòng', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', '', '2016-05-31 08:50:24', '2016-05-31 08:50:24'),
(10, '0312241579', 'DVXK03122415791464684677', 'Xe 45 chỗ', 'Hà Nội', 'Nam Định', 'Hà Nội - Nam Định', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', '', '2016-05-31 08:51:17', '2016-05-31 08:51:17'),
(11, '0312241579', 'DVXK03122415791464684875', 'Xe 45 chỗ', 'Hà Nội', 'Thái Bình', 'Hà Nội - Thái Bình', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', '', '2016-05-31 08:54:36', '2016-05-31 08:54:36'),
(12, '0312241579', 'DVXK03122415791464684923', 'Xe 45 chỗ', 'Hà Nội', 'Vinh', 'Hà Nội - Vinh', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', '', '2016-05-31 08:55:23', '2016-05-31 08:55:23'),
(13, 'ToanViet010203', 'DVXKToanViet0102031464834889', 'Xe 45 chỗ', 'Sài Gòn', 'Hà Nội', 'Sài Gòn - Hà Nội', '', 'Vé', '', '2016-06-02 02:34:49', '2016-06-02 02:34:49'),
(14, 'ToanViet010203', 'DVXKToanViet0102031464834953', 'Xe 45 chỗ', 'Sài Gòn', 'Đà Lạt', 'Sài Gòn - Đà Lạt', 'Giường nằm, máy lạnh, wifi', 'Vé', '', '2016-06-02 02:35:53', '2016-06-02 02:36:20'),
(15, 'ToanViet010203', 'DVXKToanViet0102031464835040', 'Xe 45 chỗ', 'Sài Gòn', 'Nha Trang', 'Sài Gòn - Nha Trang', 'Giường nằm,...', 'Vé', '', '2016-06-02 02:37:20', '2016-06-02 02:37:20'),
(16, 'ToanViet010203', 'DVXKToanViet0102031464835095', 'Xe 45 chỗ', 'Sài Gòn', 'Đà Nẵng', 'Sài Gòn - Đà Nẵng', 'Giường nằm,...', 'Vé', '', '2016-06-02 02:38:15', '2016-06-02 02:38:15'),
(17, 'ToanViet010203', 'DVXKToanViet0102031464835125', 'Xe 45 chỗ', 'Sài Gòn', 'Huế', 'Sài Gòn - Huế', 'Giường nằm,...', 'Vé', '', '2016-06-02 02:38:45', '2016-06-02 02:38:45'),
(18, '0106900498', 'DVXK01069004981464855409', 'Xe 45 chỗ', 'Hà Nội', 'Sài Gòn', 'Hà Nội - Sài Gòn', 'Giường nằm', 'Vé', '', '2016-06-02 08:16:49', '2016-06-02 08:16:49'),
(19, '0106900498', 'DVXK01069004981464855449', 'Xe 45 chỗ', 'Hà Nội', 'Sapa', 'Hà Nội - Sapa', 'Giường nằm', 'Vé', '', '2016-06-02 08:17:29', '2016-06-02 08:17:29'),
(20, '0106900498', 'DVXK01069004981464855481', 'Xe 45 chỗ', 'Hà Nội', 'Lào Cai', 'Hà Nội - Lào Cai', '', 'Vé', '', '2016-06-02 08:18:01', '2016-06-02 08:18:01'),
(21, '0106900498', 'DVXK01069004981464855510', 'Xe 45 chỗ', 'Hà Nội', 'Huế', 'Hà Nội - Huế', '', 'Vé', '', '2016-06-02 08:18:30', '2016-06-02 08:18:30'),
(22, '0106900498', 'DVXK01069004981464855545', 'Xe 45 chỗ', 'Hà Nội', 'Đà Nẵng', 'Hà Nội - Đà Nẵng', '', 'Vé', '', '2016-06-02 08:19:05', '2016-06-02 08:19:05'),
(23, '0106900498', 'DVXK01069004981464855649', 'Xe 45 chỗ', 'Hà Nội', 'Vinh', 'Hà Nội - Vinh', '', 'Vé', '', '2016-06-02 08:20:49', '2016-06-02 08:20:49'),
(24, '0106900498', 'DVXK01069004981464855689', 'Xe 45 chỗ', 'Hà Nội', 'Thanh Hóa', 'Hà Nội - Thanh Hóa', '', 'Vé', '', '2016-06-02 08:21:29', '2016-06-02 08:21:29'),
(25, '0526915521', 'DVXK05269155211464856350', 'Xe 45 chỗ', 'Quảng Ninh', 'Sài Gòn', 'Quảng Ninh - Sài Gòn', '', 'Vé', '', '2016-06-02 08:32:30', '2016-06-02 08:32:30'),
(26, '0526915521', 'DVXK05269155211464856505', 'Xe 45 chỗ', 'Quảng Ninh', 'Hà Nội', 'Quảng Ninh - Hà Nội', '', 'Vé', '', '2016-06-02 08:35:05', '2016-06-02 08:35:05'),
(27, '0526915521', 'DVXK05269155211464856529', 'Xe 45 chỗ', 'Quảng Ninh', 'Huế', 'Quảng Ninh - Huế', '', 'Vé', '', '2016-06-02 08:35:29', '2016-06-02 08:35:29'),
(28, '0526915521', 'DVXK05269155211464856568', 'Xe 45 chỗ', 'Quảng Ninh', 'Đà Nẵng', 'Quảng Ninh - Đà Nẵng', '', 'Vé', '', '2016-06-02 08:36:08', '2016-06-02 08:36:08'),
(29, '0526915521', 'DVXK05269155211464856604', 'Xe 45 chỗ', 'Quảng Ninh', 'Nha Trang', 'Quảng Ninh - Nha Trang', '', 'Vé', '', '2016-06-02 08:36:44', '2016-06-02 08:36:44'),
(30, '0626915598', 'DVXK06269155981464857420', 'Xe 29 chỗ', 'Quảng Ninh', 'Hà Nội', 'Bến Xe Bãi Cháy - Bến xe Mỹ Đình', 'Thời gian: 4h15''', 'Vé', '', '2016-06-02 08:50:20', '2016-06-02 08:50:20'),
(31, '0626915598', 'DVXK06269155981464857452', 'Xe 45 chỗ', 'Quảng Ninh', 'Hà Nội', 'Bến Xe Bãi Cháy - Bến xe Mỹ Đình', '', 'Vé', '', '2016-06-02 08:50:52', '2016-06-02 08:50:52'),
(32, '0626915598', 'DVXK06269155981464857515', 'Xe 45 chỗ', 'Quảng Ninh', 'Hà Nội', 'Hạ Long - Bến xe Mỹ Đình', '', 'Vé', '', '2016-06-02 08:51:55', '2016-06-02 08:51:55'),
(33, '0626915598', 'DVXK06269155981464857589', 'Xe 45 chỗ', 'Quảng Ninh', 'Hà Nội', 'Văn phòng Hạ Long - Bến xe Lương Yên', '', 'Vé', '', '2016-06-02 08:53:09', '2016-06-02 08:53:09');

-- --------------------------------------------------------

--
-- Table structure for table `dmdvvtxtx`
--

CREATE TABLE `dmdvvtxtx` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaixe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tendichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qccl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmdvvtxtx`
--

INSERT INTO `dmdvvtxtx` (`id`, `masothue`, `madichvu`, `loaixe`, `tendichvu`, `qccl`, `dvt`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, '0312241579', 'DVXTX03122415791464685512', 'Xe 4 chỗ', 'Giá mở cửa', 'Máy lạnh', 'Chuyến xe', '', '2016-05-31 09:05:12', '2016-05-31 09:21:49'),
(2, '0312241579', 'DVXTX03122415791464686458', 'Xe 4 chỗ', 'Giá Km tiếp theo', 'Máy lạnh', 'Chuyến xe', '', '2016-05-31 09:20:58', '2016-05-31 09:20:58'),
(3, '0312241579', 'DVXTX03122415791464686498', 'Xe 4 chỗ', 'Từ Km thứ 30 trở đi', 'Máy lạnh', 'Chuyến xe', '', '2016-05-31 09:21:38', '2016-05-31 09:21:38'),
(4, 'ToanViet010203', 'DVXTXToanViet0102031464838598', 'Xe 4 chỗ', 'Giá mở cửa', '', 'Km', '', '2016-06-02 03:36:38', '2016-06-02 03:36:38'),
(5, 'ToanViet010203', 'DVXTXToanViet0102031464838623', 'Xe 4 chỗ', 'Giá 10 km đầu', '', 'Km', '', '2016-06-02 03:37:03', '2016-06-02 03:37:03'),
(6, 'ToanViet010203', 'DVXTXToanViet0102031464838657', 'Xe 4 chỗ', 'Giá 30 km đầu', '', 'Km', '', '2016-06-02 03:37:37', '2016-06-02 03:37:37'),
(7, 'ToanViet010203', 'DVXTXToanViet0102031464838683', 'Xe 4 chỗ', 'Giá vé từ 30 km tiếp theo', '', 'Km', '', '2016-06-02 03:38:03', '2016-06-02 03:38:03'),
(8, 'ToanViet010203', 'DVXTXToanViet0102031464838707', 'Xe 7 chỗ', 'Giá vé mở cửa', '', 'Km', '', '2016-06-02 03:38:27', '2016-06-02 03:38:27'),
(9, 'ToanViet010203', 'DVXTXToanViet0102031464838730', 'Xe 7 chỗ', 'Giá vé 30 km đầu', '', 'Km', '', '2016-06-02 03:38:50', '2016-06-02 03:38:50'),
(10, 'ToanViet010203', 'DVXTXToanViet0102031464838749', 'Xe 7 chỗ', 'Giá vé 30 km tiếp theo', '', 'Km', '', '2016-06-02 03:39:09', '2016-06-02 03:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `dndvlt`
--

CREATE TABLE `dndvlt` (
  `id` int(10) UNSIGNED NOT NULL,
  `tendn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachidn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `teldn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `faxdn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidknopthue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucdanhky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoiky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diadanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tailieu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dndvlt`
--

INSERT INTO `dndvlt` (`id`, `tendn`, `masothue`, `diachidn`, `teldn`, `faxdn`, `email`, `noidknopthue`, `chucdanhky`, `nguoiky`, `diadanh`, `trangthai`, `tailieu`, `created_at`, `updated_at`) VALUES
(1, 'Công ty TNHH Thành Đạt', '4200284469', '11 đường 23/10', '3818916', '3826434', NULL, 'Chi cục thuế thành phố Nha Trang', 'Tổng giám đốc', 'Trần Thị Thùy Nga', 'Nha Trang', 'Kích hoạt', 'https://docs.google.com/document/d/1qbcARXpxgUMB5qaY5Gy6QNph8ShQt55T_XLILmmx8KQ/edit?usp=sharing', '2016-05-31 08:16:40', '2016-05-31 08:16:40'),
(2, 'Công ty TNHH Hồ Tiên', '4200619637', 'Đường Phạm Văn Đồng, Tổ 14, Phường Vĩnh Hòa, Nha Trang', '058.3553333', '058.7306666', NULL, 'Cục Thuế Khánh Hòa', 'Giám đốc', 'Vũ Văn Toàn', 'Khánh Hòa', 'Kích hoạt', NULL, '2016-05-31 08:39:18', '2016-05-31 08:39:18'),
(3, 'Công ty TNHH Havana', 'havana010203', '38 Trần Phú, Phường Lộc Thọ, Nha Trang', '05113991201', '05113991201', NULL, 'Cục Thuế Khánh Hòa', 'Giám đốc', 'Nguyễn Thị Bắc', 'Nha Trang', 'Kích hoạt', NULL, '2016-06-01 01:54:24', '2016-06-01 01:54:24'),
(4, 'Công ty TNHH Regalia', 'Regalia010203', '98B Trần Phú, Lộc Thọ, Nha Trang, Khánh Hòa', '058 2121241212', '058 2121241212', NULL, 'Cục Thuế Khánh Hòa', 'Giám đốc', 'Nguyễn Thị Minh Tuyết', 'Nha Trang', 'Kích hoạt', NULL, '2016-06-01 02:17:18', '2016-06-01 02:17:18'),
(5, 'Công ty TNHH Thiên Kim', 'ThienKim010203', '6A Ngô Đức Kế, Nha Trang, Nha Trang, Khánh Hòa', '058 3232323232', '058 3232323232', NULL, 'Cục Thuế Khánh Hòa', 'Giám đốc', 'Nguyễn Xuân Trường', 'Nha Trang', 'Kích hoạt', NULL, '2016-06-01 02:37:06', '2016-06-01 02:37:06'),
(6, 'Công ty TNHH Sen Vàng', 'SenVang010203', '96B4 Trần Phú, Nha Trang, Khánh Hòa', '058 43432342', '058 43432342', NULL, 'Cục Thuế Khánh Hòa', 'Giám đốc', 'Nguyễn Thị Mỹ Hạnh', 'Nha Trang', 'Kích hoạt', NULL, '2016-06-01 03:01:07', '2016-06-01 03:01:07'),
(7, 'Công ty TNHH Tuyết Mai', 'TuyetMai010203', '  98B1 Trần Phú, Nha Trang, Khánh Hòa', '058 3242432423', '058 3242432423', NULL, 'Cục Thuế Khánh Hòa', 'Giám đốc', 'Trần Thị Thùy Nga', 'Nha Trang', 'Kích hoạt', NULL, '2016-06-01 03:30:45', '2016-06-01 03:30:45'),
(8, 'Công ty TNHH Phố Biển', 'PhoBien010203', '64/1 Trần Phú, Nha Trang, Khánh Hòa', '058 999999232', '058 999999232', NULL, 'Cục Thuế Khánh Hòa', 'Giám đốc', 'Nguyễn Thị Mỹ Hạnh', 'Nha Trang', 'Kích hoạt', NULL, '2016-06-01 07:21:18', '2016-06-01 07:21:18'),
(9, 'thanhdat', 'thanhdat', 'Hà Nội', 'Số DT', 'Số Fax', 'eami', 'đăng ký nộp thuế', 'Giám đốc', 'Nguyễn THị Minh Tuyết', 'Hà Nội', 'Kích hoạt', 'Link', '2016-11-08 07:29:39', '2016-11-09 02:11:17'),
(10, 'thanhdat', 'thanhdat', 'Hà Nội', 'Số DT', 'Số Fax', 'eami', 'đăng ký nộp thuế', NULL, NULL, NULL, 'Kích hoạt', 'Link', '2016-11-08 07:30:06', '2016-11-08 07:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `donvidvvt`
--

CREATE TABLE `donvidvvt` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tendonvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giayphepkd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diadanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucdanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoiky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dknopthue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvxk` tinyint(1) NOT NULL,
  `dvxb` tinyint(1) NOT NULL,
  `dvxtx` tinyint(1) NOT NULL,
  `dvk` tinyint(1) NOT NULL,
  `toado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tailieu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `setting` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donvidvvt`
--

INSERT INTO `donvidvvt` (`id`, `masothue`, `tendonvi`, `diachi`, `dienthoai`, `giayphepkd`, `fax`, `email`, `diadanh`, `chucdanh`, `nguoiky`, `dknopthue`, `dvxk`, `dvxb`, `dvxtx`, `dvk`, `toado`, `ghichu`, `trangthai`, `tailieu`, `setting`, `created_at`, `updated_at`) VALUES
(1, '0312241579', 'Công ty cổ phần xe khách Phương Trang', '471 Nguyễn Hữu Thọ, Khu phố 1 - Phường Tân Hưng - Quận 7 - TP Hồ Chí Minh', '08.3838.6852', 'Giấy chứng nhận kinh doanh số 17524680 do Sở kế hoạch và đầu tư HCM cấp ngày 01 tháng 01 năm 2000', '08.3838.6852', '', 'HCM', 'Giám đốc', 'Nguyễn Phương Trang', 'Chi cục Thuế Quận 7', 1, 1, 1, 1, '11.3245416,106.1159949', NULL, 'Kích hoạt', 'sâdsadsad', '{"dvvt":{"vtxb":"1","vtxtx":"1","vtch":"1"}}', '2016-05-31 08:33:17', '2016-11-08 03:07:27'),
(2, '0422541867', 'Công ty TNHH dịch vụ vận tải Hoàng Kim', '243B, Tổ 19, Khu Phố 2, P. Tam Hòa, Tp Biên Hòa, Đồng Nai', '0918.846.934', 'Giấy chứng nhận kinh doanh số 098562358352 do Sở kế hoạch và đầu tư Đồng  Nai cấp ngày 01 tháng 01 năm 1998', '(061) 3914165', '', 'Đồng Nai', 'Giám đốc', 'Đỗ Tuấn Cường', 'Chi cục Thuế Tam Hòa', 0, 0, 0, 1, '10.9550961,106.8529699', NULL, 'Kích hoạt', NULL, '{"dvvt":{"vtch":"1"}}', '2016-06-02 01:43:05', '2016-06-02 01:43:05'),
(3, '7984523197', 'Công ty cổ phẩn thương mại & vận tải Việt Trung', 'Km12 + 300, Quốc lộ 1A, Thanh Trì, Hà Nội ', '04 36871510', 'Giấy chứng nhận kinh doanh số 012489765 do Sở kế hoạch đầu tư Hà Nội cấp ngày 01 tháng 01 năm 2000', '04 36871510', '', 'Hà Nội', 'Giám đốc', 'Nguyễn Việt Trung', 'Chi cục Thuế Thanh Trì', 0, 0, 0, 1, '21.0189206,105.9416116', NULL, 'Kích hoạt', NULL, '{"dvvt":{"vtch":"1"}}', '2016-06-02 01:47:49', '2016-06-02 01:47:49'),
(4, 'ToanViet010203', 'Công Ty TNHH Thương Mại Dịch Vụ Vận Tải Toàn Việt', '471 Nguyễn Hữu Thọ, Khu phố 1 - Phường Tân Hưng - Quận 7 - TP Hồ Chí Minh', '04 397865432', 'Giấy chứng nhận KD', '04 397865432', '', 'Hồ Chí Minh', 'Giám đốc', 'Nguyễn Thị Bắc', 'Cục thuế Thành Phố Hồ Chí Minh', 1, 1, 1, 1, '11.0882269,106.2626088', NULL, 'Kích hoạt', NULL, '{"dvvt":{"vtxk":"1","vtxb":"1","vtxtx":"1","vtch":"1"}}', '2016-06-02 02:04:31', '2016-06-02 02:04:31'),
(5, '0106900498', 'Công ty TNHH vận tải Kim Cương', '501 Nguyễn Trãi, P. Thanh Xuân Nam, Q. Thanh Xuân, TP Hà Nội', '0466.586.111', 'Giấy chứng nhận kinh doanh số 4579531137 do Sở kế hoạch và đầu tư Hà Nội cấp ngày 15 tháng 03 năm 2008', '0466.586.111', '', 'Hà Nội', 'Giám đốc', 'Nguyễn Hoàng Hà', 'Chi cục Thuế Thanh Xuân', 1, 0, 0, 0, '20.987436,105.797881', NULL, 'Kích hoạt', NULL, '{"dvvt":{"vtxk":"1"}}', '2016-06-02 03:58:40', '2016-06-02 03:58:40'),
(6, '0526915521', 'Công ty TNHH thương mại và dịch vụ Thái Gia', 'Đường Lê Lợi , P. Yết Kiêu, TP Hạ Long', '0913071747', 'Giấy chứng nhận kinh doanh số 1249764312 do Sở kế hoạch và đầu tư Quang Ninh cấp ngày 16 tháng 03 năm 2002', '03.663.366', '', 'Quảng Ninh', 'Giám đốc', 'Nguyễn Văn Long', 'Chi cục Thuế Yết Kiêu', 1, 0, 0, 1, '20.9603535,107.0706458', NULL, 'Kích hoạt', NULL, '{"dvvt":{"vtxk":"1","vtch":"1"}}', '2016-06-02 07:18:22', '2016-06-02 07:18:22'),
(7, '0626915598', 'Công ty TNHH Quyền Hưng', 'Tổ 10, khu 1, P. Trần Hưng Đạo, TP Hạ Long', '03.818.357', 'Giấy chứng nhận kinh doanh số 0123465700 do Sở kế hoạch và đầu tư Quảng Ninh cấp ngày 01 tháng 01 năm 2000', '03.818.357', '', 'Quảng Ninh', 'Giám đốc', 'Nguyễn Văn Quyền', 'Chi cục Thuế Trần Hưng Đạo', 1, 0, 0, 1, '20.9562721,107.0849499', NULL, 'Kích hoạt', NULL, '{"dvvt":{"vtxk":"1","vtch":"1"}}', '2016-06-02 07:39:16', '2016-06-02 07:39:16'),
(8, '0412241721', 'Công ty TNHH vận tải Ngọc Phương Huy', 'Số 5, Lô E4, KDC An Sương, P. Tân Hưng Thuận, Q. 12, Tp. Hồ Chí Minh', '(08) 35925288', 'Giấy chứng nhận kinh doanh số 0123465816 do Sở kế hoạch và đầu tư HCM cấp ngày 01 tháng 12 năm 2005', '(08) 35925288', '', 'HCM', 'Giám đốc', 'Nguyễn Ngọc Phương', 'Chi cục Thuế Tân Hưng Thuận', 1, 0, 0, 0, '10.8230989,106.6296638', NULL, 'Kích hoạt', NULL, '{"dvvt":{"vtxk":"1"}}', '2016-06-02 07:44:22', '2016-06-02 07:44:22'),
(9, '462457124', 'Công Ty TNHH MTV Mạnh Cường Quân', '222B, đường Giáp Bát, phường Giáp Bát, quận Hoàng Mai, Hà Nội', '(04) 35925288', 'Giấy chứng nhận kinh doanh số 0123465700 do Sở kế hoạch và đầu tư cấp ngày 05 tháng 01 năm 2002', '(04) 35925268', '', 'Hà Nội', 'Giám đốc', 'Nguyễn Mạnh Cường', 'Chi cục Thuế Hoàng Mai', 1, 0, 1, 0, '20.9851185,105.8435461', NULL, 'Kích hoạt', NULL, '{"dvvt":{"vtxk":"1","vtxtx":"1"}}', '2016-06-02 07:48:31', '2016-06-02 07:48:31'),
(10, '0127415796', 'Công Ty TNHH Một Thành Viên Thương Mại Giao Nhận Vận Tải Huệ Duy', '176/M3 Hà Chương, P. Trung Mỹ Tây, Q. 12,Tp. Hồ Chí Minh', '(08) 35901824', 'Giấy chứng nhận kinh doanh số 0163465754 do bộ tài chính cấp ngày 01 tháng 01 năm 2000', '(08) 35901824', '', 'HCM', 'Giám đốc', 'Hoàng Ngọc Lan', 'Chi cục Thuế Quận 12', 1, 0, 1, 1, '10.8614299,106.6121535', NULL, 'Kích hoạt', NULL, '{"dvvt":{"vtxk":"1","vtxtx":"1","vtch":"1"}}', '2016-06-02 07:54:36', '2016-06-02 07:54:36'),
(11, 'thanhdat', 'thanhdat', 'Hà Nội', 'Số DT', 'Giấ phép', 'Số Fax', 'Email', '', 'Giám đốc', '', 'DKNT', 1, 1, 1, 1, '21.0277644,105.8341598', NULL, 'Kích hoạt', 'Link', '{"dvvt":{"vtxk":"1","vtxb":"1","vtxtx":"1","vtch":"1"}}', '2016-11-08 07:32:19', '2016-11-08 07:51:36');

-- --------------------------------------------------------

--
-- Table structure for table `donvi_temp`
--

CREATE TABLE `donvi_temp` (
  `id` int(10) UNSIGNED NOT NULL,
  `tendn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidknopthue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucdanhky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoiky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diadanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donvi_temp`
--

INSERT INTO `donvi_temp` (`id`, `tendn`, `masothue`, `diachi`, `tel`, `fax`, `noidknopthue`, `chucdanhky`, `nguoiky`, `diadanh`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Đơn vị 1', 'MST001', 'Hoàng Mai - Hà Nội', '43', 'Hoàng Mai - Hà Nội', 'Chi cục thuế Hoàng Mai', 'Giám đốc', 'A', 'Hà Nội', 'donvi1', 'abc', '2016-06-22 04:24:40', '2016-06-22 04:24:40'),
(2, 'Đơn vị 2', 'MST002', 'Hoàng Mai - Hà Nội', '43', 'Hoàng Mai - Hà Nội', 'Chi cục thuế Hoàng Mai', 'Giám đốc', 'B', 'Hà Nội', 'donvi2', 'abc', '2016-06-22 04:24:40', '2016-06-22 04:24:40'),
(3, 'Đơn vị 3', 'MST003', 'Hoàng Mai - Hà Nội', '43', 'Hoàng Mai - Hà Nội', 'Chi cục thuế Hoàng Mai', 'Giám đốc', 'C', 'Hà Nội', 'donvi3', 'abc', '2016-06-22 04:24:40', '2016-06-22 04:24:40'),
(4, 'Đơn vị 4', 'MST004', 'Hoàng Mai - Hà Nội', '43', 'Hoàng Mai - Hà Nội', 'Chi cục thuế Hoàng Mai', 'Giám đốc', 'D', 'Hà Nội', 'donvi4', 'abc', '2016-06-22 04:24:40', '2016-06-22 04:24:40'),
(5, 'Đơn vị 5', 'MST005', 'Hoàng Mai - Hà Nội', '43', 'Hoàng Mai - Hà Nội', 'Chi cục thuế Hoàng Mai', 'Giám đốc', 'A', 'Hà Nội', 'donvi5', 'abc', '2016-06-22 04:24:40', '2016-06-22 04:24:40'),
(6, 'Đơn vị 6', 'MST006', 'Hoàng Mai - Hà Nội', '43', 'Hoàng Mai - Hà Nội', 'Chi cục thuế Hoàng Mai', 'Giám đốc', 'B', 'Hà Nội', 'donvi6', 'abc', '2016-06-22 04:24:40', '2016-06-22 04:24:40'),
(7, 'Đơn vị 7', 'MST007', 'Hoàng Mai - Hà Nội', '43', 'Hoàng Mai - Hà Nội', 'Chi cục thuế Hoàng Mai', 'Giám đốc', 'C', 'Hà Nội', 'donvi7', 'abc', '2016-06-22 04:24:40', '2016-06-22 04:24:40'),
(8, 'Đơn vị 8', 'MST008', 'Hoàng Mai - Hà Nội', '43', 'Hoàng Mai - Hà Nội', 'Chi cục thuế Hoàng Mai', 'Giám đốc', 'D', 'Hà Nội', 'donvi8', 'abc', '2016-06-22 04:24:40', '2016-06-22 04:24:40'),
(9, 'Đơn vị 9', 'MST009', 'Hoàng Mai - Hà Nội', '43', 'Hoàng Mai - Hà Nội', 'Chi cục thuế Hoàng Mai', 'Giám đốc', 'A', 'Hà Nội', 'donvi9', 'abc', '2016-06-22 04:24:40', '2016-06-22 04:24:40'),
(10, 'Đơn vị 10', 'MST010', 'Hoàng Mai - Hà Nội', '43', 'Hoàng Mai - Hà Nội', 'Chi cục thuế Hoàng Mai', 'Giám đốc', 'B', 'Hà Nội', 'donvi10', 'abc', '2016-06-22 04:24:40', '2016-06-22 04:24:40'),
(11, 'Đơn vị 11', 'MST011', 'Hoàng Mai - Hà Nội', '43', 'Hoàng Mai - Hà Nội', 'Chi cục thuế Hoàng Mai', 'Giám đốc', 'C', 'Hà Nội', 'donvi11', 'abc', '2016-06-22 04:24:40', '2016-06-22 04:24:40'),
(12, 'Đơn vị 12', 'MST012', 'Hoàng Mai - Hà Nội', '43', 'Hoàng Mai - Hà Nội', 'Chi cục thuế Hoàng Mai', 'Giám đốc', 'D', 'Hà Nội', 'donvi12', 'abc', '2016-06-22 04:24:40', '2016-06-22 04:24:40'),
(13, 'Đơn vị 13', 'MST013', 'Hoàng Mai - Hà Nội', '43', 'Hoàng Mai - Hà Nội', 'Chi cục thuế Hoàng Mai', 'Giám đốc', 'A', 'Hà Nội', 'donvi13', 'abc', '2016-06-22 04:24:40', '2016-06-22 04:24:40'),
(14, 'Đơn vị 14', 'MST014', 'Hoàng Mai - Hà Nội', '43', 'Hoàng Mai - Hà Nội', 'Chi cục thuế Hoàng Mai', 'Giám đốc', 'B', 'Hà Nội', 'donvi14', 'abc', '2016-06-22 04:24:40', '2016-06-22 04:24:40'),
(15, 'Đơn vị 15', 'MST015', 'Hoàng Mai - Hà Nội', '43', 'Hoàng Mai - Hà Nội', 'Chi cục thuế Hoàng Mai', 'Giám đốc', 'C', 'Hà Nội', 'donvi15', 'abc', '2016-06-22 04:24:40', '2016-06-22 04:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `general-configs`
--

CREATE TABLE `general-configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `maqhns` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tendonvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `teldv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thutruong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ketoan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoilapbieu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `namhethong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `setting` text COLLATE utf8_unicode_ci NOT NULL,
  `ttlh` text COLLATE utf8_unicode_ci,
  `sodvlt` text COLLATE utf8_unicode_ci,
  `sodvvt` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `general-configs`
--

INSERT INTO `general-configs` (`id`, `maqhns`, `tendonvi`, `diachi`, `teldv`, `thutruong`, `ketoan`, `nguoilapbieu`, `namhethong`, `setting`, `ttlh`, `sodvlt`, `sodvvt`, `created_at`, `updated_at`) VALUES
(1, '', 'Sở Tài Chính Khánh Hòa', '', '', NULL, NULL, NULL, NULL, '{"dvlt":{"dvlt":"1"},"dvvt":{"vtxk":"1","vtxb":"1","vtxtx":"1","vtch":"1"}}', 'Sở Tài Chính: 058.3822072 (Phòng Thanh Tra) - 058.3826741(Phòng Vật Giá)\r\nSở Văn hóa, Thể thao và Du lịch: 058.3811871(Phòng Thanh tra)\r\nChi cục Thuế TP. Nha Trang: 058.3562181', '25', '3', '0000-00-00 00:00:00', '2016-11-07 03:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `kkdvvtkhac`
--

CREATE TABLE `kkdvvtkhac` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `socv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhap` date DEFAULT NULL,
  `socvlk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhaplk` date DEFAULT NULL,
  `ngayhieuluc` date DEFAULT NULL,
  `ttnguoinop` text COLLATE utf8_unicode_ci,
  `ngaynhan` date DEFAULT NULL,
  `sohsnhan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaychuyen` datetime DEFAULT NULL,
  `lydo` text COLLATE utf8_unicode_ci,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uudai` text COLLATE utf8_unicode_ci,
  `ghichu` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kkdvvtkhac`
--

INSERT INTO `kkdvvtkhac` (`id`, `masothue`, `masokk`, `socv`, `ngaynhap`, `socvlk`, `ngaynhaplk`, `ngayhieuluc`, `ttnguoinop`, `ngaynhan`, `sohsnhan`, `ngaychuyen`, `lydo`, `trangthai`, `uudai`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, '0422541867', '0422541867.1464833572', 'CV001', '2016-06-01', '', '0000-00-00', '2016-06-10', 'Nguyễn Văn Hoàng - 0902547657', NULL, NULL, '2016-06-02 09:28:33', NULL, 'Chờ nhận', '', 'Các thông tin kê khai lần đầu.', '2016-06-02 02:12:52', '2016-06-02 02:28:33'),
(2, '7984523197', '7984523197.1464834067', 'CV001', '2016-06-01', '', '0000-00-00', '2016-06-10', 'Nguyễn Văn Hoàng - 091254765', NULL, NULL, '2016-06-02 09:22:12', NULL, 'Chờ nhận', '', 'Kê khai giá lần đâu.', '2016-06-02 02:21:07', '2016-06-02 02:22:12'),
(3, '0312241579', '0312241579.1464834433', 'CV003', '2016-05-30', '', '0000-00-00', '2016-06-01', 'Nguyễn Hoàng Lan - 091254765', NULL, NULL, '2016-06-02 09:27:32', NULL, 'Chờ nhận', '', 'Kê khai lần đầu', '2016-06-02 02:27:13', '2016-06-02 02:27:32'),
(4, 'ToanViet010203', 'ToanViet010203.1464839587', 'CV004', '2016-06-20', '', '0000-00-00', '2016-06-30', 'Vũ Ngọc Nam - 0985874255', '2016-06-02', '3', '2016-06-02 10:53:38', NULL, 'Duyệt', '', 'Thông tin kê khai', '2016-06-02 03:53:07', '2016-06-02 08:57:47'),
(5, '0526915521', '0526915521.1464857075', 'CV002', '2016-06-20', '', '0000-00-00', '2016-06-30', 'Vũ Ngọc Thái - 0345675135', NULL, NULL, '2016-06-02 15:44:57', NULL, 'Chờ nhận', '', '', '2016-06-02 08:44:35', '2016-06-02 08:44:57'),
(6, '0626915598', '0626915598.1464858383', 'CV002', '2016-06-01', '', '0000-00-00', '2016-06-15', NULL, NULL, NULL, NULL, NULL, 'Chờ chuyển', '', '', '2016-06-02 09:06:23', '2016-06-02 09:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `kkdvvtkhacct`
--

CREATE TABLE `kkdvvtkhacct` (
  `id` int(10) UNSIGNED NOT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaixe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemdau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemcuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tendichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qccl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giakk` double DEFAULT NULL,
  `giakklk` double DEFAULT NULL,
  `giahl` double DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuevat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kkdvvtkhacct`
--

INSERT INTO `kkdvvtkhacct` (`id`, `masokk`, `madichvu`, `loaixe`, `diemdau`, `diemcuoi`, `tendichvu`, `qccl`, `dvt`, `giakk`, `giakklk`, `giahl`, `ghichu`, `thuevat`, `created_at`, `updated_at`) VALUES
(1, '0422541867.1464833572', 'DVXTX04225418671464833295', 'Xe tải 1,25 tấn', '', '', 'Xe chở hàng 1,25 tấn', '', 'Ngày', 350000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '0422541867.1464833572', 'DVXTX04225418671464833327', 'Xe tải 2,5 tấn', '', '', 'Xe chở hàng 2,5 tấn', '', 'Ngày', 420000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '0422541867.1464833572', 'DVXTX04225418671464833348', 'Xe tải 3,5 tấn', '', '', 'Xe chở hàng 3,5 tấn', '', 'Ngày', 500000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '0422541867.1464833572', 'DVXTX04225418671464833371', 'Xe tải 5 tấn', '', '', 'Xe chở hàng 5 tấn', '', 'Ngày', 600000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '0422541867.1464833572', 'DVXTX04225418671464833392', 'Xe tải 8 tấn', '', '', 'Xe chở hàng 8 tấn', '', 'Ngày', 680000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '0422541867.1464833572', 'DVXTX04225418671464833415', 'Xe tải 10 tấn', '', '', 'Xe chở hàng 10 tấn', '', 'Ngày', 750000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '0422541867.1464833572', 'DVXTX04225418671464833437', 'Xe tải 15 tấn', '', '', 'Xe chở hàng 15 tấn', '', 'Ngày', 1000000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '7984523197.1464834067', 'DVXTX79845231971464833767', 'Chuyển phát hàng', 'Hà Nội', 'Hải Dương', 'Hàng hóa < 1kg', '', 'Kg', 12000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '7984523197.1464834067', 'DVXTX79845231971464833814', 'Chuyển phát hàng', 'Hà Nội', 'Hải Dương', 'Hàng hóa từ 1kg đến 2kg', '', 'Kg', 18000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '7984523197.1464834067', 'DVXTX79845231971464833872', 'Chuyển phát hàng', 'Hà Nội', 'Hải Dương', 'Hàng hóa từ 2kg đến 3kg', '', 'Kg', 23000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '7984523197.1464834067', 'DVXTX79845231971464833914', 'Chuyển phát hàng', 'Hà Nội', 'Hải Phòng', 'Hàng hóa < 1kg', '', 'Kg', 15000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '7984523197.1464834067', 'DVXTX79845231971464833938', 'Chuyển phát hàng', 'Hà Nội', 'Hải Phòng', 'Hàng hóa từ 1kg đến 2kg', '', 'Kg', 19000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '7984523197.1464834067', 'DVXTX79845231971464833970', 'Chuyển phát hàng', 'Hà Nội', 'Hải Phòng', 'Hàng hóa từ 2kg đến 3kg', '', 'Kg', 25000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '0312241579.1464834433', 'DVXTX03122415791464766504', 'Xe tải 5 tấn', '', '', 'Xe chở hàng 5 tấn', '', 'Ngày', 360000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '0312241579.1464834433', 'DVXTX03122415791464767006', 'Xe tải 15 tấn', '', '', 'Xe chở hàng 15 tấn', 'Thùng kín', 'Ngày', 520000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '0312241579.1464834433', 'DVXTX03122415791464767111', 'Xe tải 8 tấn', '', '', 'Xe chở hàng 8 tấn', '', 'Ngày', 385000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, '0312241579.1464834433', 'DVXTX03122415791464767182', 'Xe tải 10 tấn', '', '', 'Xe chở hàng 11 tấn', 'Thùng kín', 'Ngày', 450000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '0312241579.1464834433', 'DVXTX03122415791464767272', 'Xe tải 20 tấn', '', '', 'Xe chở hàng 20 tấn', 'Thùng kín', 'Ngày', 800000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '0312241579.1464834433', 'DVXTX03122415791464773221', 'Xe tải 5 tạ', '', '', 'Xe chở hàng 5 tạ', '', 'Ngày', 280000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '0312241579.1464834433', 'DVXTX03122415791464773246', 'Xe tải 1 tấn', '', '', 'Xe chở hàng 1 tấn', '', 'Ngày', 310000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'ToanViet010203.1464839587', 'DVXTXToanViet0102031464839408', 'Xe tải 5 tạ', '', '', 'Xe chở hàng 0,5 tấn', '', 'Ngày', 100000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'ToanViet010203.1464839587', 'DVXTXToanViet0102031464839431', 'Xe tải 1,25 tấn', '', '', 'Xe chở hàng 1,25 tấn', '', 'Ngày', 150000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'ToanViet010203.1464839587', 'DVXTXToanViet0102031464839454', 'Xe tải 2,5 tấn', '', '', 'Xe chở hàng 3,5 tấn', '', 'Ngày', 180000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'ToanViet010203.1464839587', 'DVXTXToanViet0102031464839481', 'Xe tải 3,5 tấn', '', '', 'Xe chở hàng 3,5 tấn', '', 'Ngày', 250000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'ToanViet010203.1464839587', 'DVXTXToanViet0102031464839501', 'Xe tải 5 tấn', '', '', 'Xe chở hàng 5 tấn', '', 'Ngày', 500000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '0526915521.1464857075', 'DVXTX05269155211464856845', 'Xe tải 1,25 tấn', 'Quảng Ninh', 'Hà Nội', 'Xe chở hàng 1,25 tấn ', '', 'Ngày', 150000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '0526915521.1464857075', 'DVXTX05269155211464856904', 'Xe tải 3,5 tấn', 'Quảng Ninh', 'Hà Nội', 'Xe chở hàng 3,5 tấn', '', 'Ngày', 250000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '0526915521.1464857075', 'DVXTX05269155211464856934', 'Xe tải 5 tấn', 'Quảng Ninh', 'Hà Nội', 'Xe chở hàng 5 tấn', '', 'Ngày', 450000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, '0526915521.1464857075', 'DVXTX05269155211464856981', 'Xe tải 2,5 tấn', 'Quảng Ninh', 'Hải Phòng', 'Xe chở hàng 2,5 tấn', '', 'Vé', 200000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, '0626915598.1464858383', 'DVXTX06269155981464858236', 'Xe tải 1,25 tấn', '', '', 'Xe chở hàng 1,25 tấn', '', 'Ngày', 200000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, '0626915598.1464858383', 'DVXTX06269155981464858255', 'Xe tải 3,5 tấn', '', '', 'Xe chở hàng 3,5 tấn', '', 'Ngày', 350000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, '0626915598.1464858383', 'DVXTX06269155981464858276', 'Xe tải 5 tấn', '', '', 'Xe chở hàng 5 tấn', '', 'Ngày', 450000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, '0626915598.1464858383', 'DVXTX06269155981464858318', 'Xe tải 8 tấn', '', '', 'Xe chở hàng 8 tấn', '', 'Ngày', 600000, 0, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kkdvvtkhacctdf`
--

CREATE TABLE `kkdvvtkhacctdf` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaixe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemdau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemcuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tendichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qccl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giakk` double DEFAULT NULL,
  `giakklk` double DEFAULT NULL,
  `giahl` double DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuevat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kkdvvtkhacctdf`
--

INSERT INTO `kkdvvtkhacctdf` (`id`, `masothue`, `masokk`, `madichvu`, `loaixe`, `diemdau`, `diemcuoi`, `tendichvu`, `qccl`, `dvt`, `giakk`, `giakklk`, `giahl`, `ghichu`, `thuevat`, `created_at`, `updated_at`) VALUES
(1, '0422541867', '0422541867.1464833572', 'DVXTX04225418671464833295', 'Xe tải 1,25 tấn', '', '', 'Xe chở hàng 1,25 tấn', '', 'Ngày', 350000, 0, NULL, NULL, NULL, '2016-06-02 02:10:59', '2016-06-02 02:11:41'),
(2, '0422541867', '0422541867.1464833572', 'DVXTX04225418671464833327', 'Xe tải 2,5 tấn', '', '', 'Xe chở hàng 2,5 tấn', '', 'Ngày', 420000, 0, NULL, NULL, NULL, '2016-06-02 02:10:59', '2016-06-02 02:11:50'),
(3, '0422541867', '0422541867.1464833572', 'DVXTX04225418671464833348', 'Xe tải 3,5 tấn', '', '', 'Xe chở hàng 3,5 tấn', '', 'Ngày', 500000, 0, NULL, NULL, NULL, '2016-06-02 02:10:59', '2016-06-02 02:11:57'),
(4, '0422541867', '0422541867.1464833572', 'DVXTX04225418671464833371', 'Xe tải 5 tấn', '', '', 'Xe chở hàng 5 tấn', '', 'Ngày', 600000, 0, NULL, NULL, NULL, '2016-06-02 02:10:59', '2016-06-02 02:12:07'),
(5, '0422541867', '0422541867.1464833572', 'DVXTX04225418671464833392', 'Xe tải 8 tấn', '', '', 'Xe chở hàng 8 tấn', '', 'Ngày', 680000, 0, NULL, NULL, NULL, '2016-06-02 02:10:59', '2016-06-02 02:12:14'),
(6, '0422541867', '0422541867.1464833572', 'DVXTX04225418671464833415', 'Xe tải 10 tấn', '', '', 'Xe chở hàng 10 tấn', '', 'Ngày', 750000, 0, NULL, NULL, NULL, '2016-06-02 02:10:59', '2016-06-02 02:12:27'),
(7, '0422541867', '0422541867.1464833572', 'DVXTX04225418671464833437', 'Xe tải 15 tấn', '', '', 'Xe chở hàng 15 tấn', '', 'Ngày', 1000000, 0, NULL, NULL, NULL, '2016-06-02 02:10:59', '2016-06-02 02:12:37'),
(8, '7984523197', '7984523197.1464834067', 'DVXTX79845231971464833767', 'Chuyển phát hàng', 'Hà Nội', 'Hải Dương', 'Hàng hóa < 1kg', '', 'Kg', 12000, 0, NULL, NULL, NULL, '2016-06-02 02:19:41', '2016-06-02 02:20:03'),
(9, '7984523197', '7984523197.1464834067', 'DVXTX79845231971464833814', 'Chuyển phát hàng', 'Hà Nội', 'Hải Dương', 'Hàng hóa từ 1kg đến 2kg', '', 'Kg', 18000, 0, NULL, NULL, NULL, '2016-06-02 02:19:41', '2016-06-02 02:20:11'),
(10, '7984523197', '7984523197.1464834067', 'DVXTX79845231971464833872', 'Chuyển phát hàng', 'Hà Nội', 'Hải Dương', 'Hàng hóa từ 2kg đến 3kg', '', 'Kg', 23000, 0, NULL, NULL, NULL, '2016-06-02 02:19:41', '2016-06-02 02:20:19'),
(11, '7984523197', '7984523197.1464834067', 'DVXTX79845231971464833914', 'Chuyển phát hàng', 'Hà Nội', 'Hải Phòng', 'Hàng hóa < 1kg', '', 'Kg', 15000, 0, NULL, NULL, NULL, '2016-06-02 02:19:41', '2016-06-02 02:20:30'),
(12, '7984523197', '7984523197.1464834067', 'DVXTX79845231971464833938', 'Chuyển phát hàng', 'Hà Nội', 'Hải Phòng', 'Hàng hóa từ 1kg đến 2kg', '', 'Kg', 19000, 0, NULL, NULL, NULL, '2016-06-02 02:19:41', '2016-06-02 02:20:40'),
(13, '7984523197', '7984523197.1464834067', 'DVXTX79845231971464833970', 'Chuyển phát hàng', 'Hà Nội', 'Hải Phòng', 'Hàng hóa từ 2kg đến 3kg', '', 'Kg', 25000, 0, NULL, NULL, NULL, '2016-06-02 02:19:41', '2016-06-02 02:20:50'),
(14, '0312241579', '0312241579.1464834433', 'DVXTX03122415791464766504', 'Xe tải 5 tấn', '', '', 'Xe chở hàng 5 tấn', '', 'Ngày', 360000, 0, NULL, NULL, NULL, '2016-06-02 02:25:28', '2016-06-02 02:26:29'),
(15, '0312241579', '0312241579.1464834433', 'DVXTX03122415791464767006', 'Xe tải 15 tấn', '', '', 'Xe chở hàng 15 tấn', 'Thùng kín', 'Ngày', 520000, 0, NULL, NULL, NULL, '2016-06-02 02:25:28', '2016-06-02 02:26:58'),
(16, '0312241579', '0312241579.1464834433', 'DVXTX03122415791464767111', 'Xe tải 8 tấn', '', '', 'Xe chở hàng 8 tấn', '', 'Ngày', 385000, 0, NULL, NULL, NULL, '2016-06-02 02:25:28', '2016-06-02 02:26:39'),
(17, '0312241579', '0312241579.1464834433', 'DVXTX03122415791464767182', 'Xe tải 10 tấn', '', '', 'Xe chở hàng 11 tấn', 'Thùng kín', 'Ngày', 450000, 0, NULL, NULL, NULL, '2016-06-02 02:25:28', '2016-06-02 02:26:50'),
(18, '0312241579', '0312241579.1464834433', 'DVXTX03122415791464767272', 'Xe tải 20 tấn', '', '', 'Xe chở hàng 20 tấn', 'Thùng kín', 'Ngày', 800000, 0, NULL, NULL, NULL, '2016-06-02 02:25:28', '2016-06-02 02:27:05'),
(19, '0312241579', '0312241579.1464834433', 'DVXTX03122415791464773221', 'Xe tải 5 tạ', '', '', 'Xe chở hàng 5 tạ', '', 'Ngày', 280000, 0, NULL, NULL, NULL, '2016-06-02 02:25:28', '2016-06-02 02:26:09'),
(20, '0312241579', '0312241579.1464834433', 'DVXTX03122415791464773246', 'Xe tải 1 tấn', '', '', 'Xe chở hàng 1 tấn', '', 'Ngày', 310000, 0, NULL, NULL, NULL, '2016-06-02 02:25:28', '2016-06-02 02:26:18'),
(21, 'ToanViet010203', 'ToanViet010203.1464839587', 'DVXTXToanViet0102031464839408', 'Xe tải 5 tạ', '', '', 'Xe chở hàng 0,5 tấn', '', 'Ngày', 100000, 0, NULL, NULL, NULL, '2016-06-02 03:51:56', '2016-06-02 03:52:20'),
(22, 'ToanViet010203', 'ToanViet010203.1464839587', 'DVXTXToanViet0102031464839431', 'Xe tải 1,25 tấn', '', '', 'Xe chở hàng 1,25 tấn', '', 'Ngày', 150000, 0, NULL, NULL, NULL, '2016-06-02 03:51:56', '2016-06-02 03:52:26'),
(23, 'ToanViet010203', 'ToanViet010203.1464839587', 'DVXTXToanViet0102031464839454', 'Xe tải 2,5 tấn', '', '', 'Xe chở hàng 3,5 tấn', '', 'Ngày', 180000, 0, NULL, NULL, NULL, '2016-06-02 03:51:56', '2016-06-02 03:52:34'),
(24, 'ToanViet010203', 'ToanViet010203.1464839587', 'DVXTXToanViet0102031464839481', 'Xe tải 3,5 tấn', '', '', 'Xe chở hàng 3,5 tấn', '', 'Ngày', 250000, 0, NULL, NULL, NULL, '2016-06-02 03:51:56', '2016-06-02 03:52:44'),
(25, 'ToanViet010203', 'ToanViet010203.1464839587', 'DVXTXToanViet0102031464839501', 'Xe tải 5 tấn', '', '', 'Xe chở hàng 5 tấn', '', 'Ngày', 500000, 0, NULL, NULL, NULL, '2016-06-02 03:51:56', '2016-06-02 03:52:51'),
(26, '0526915521', '0526915521.1464857075', 'DVXTX05269155211464856845', 'Xe tải 1,25 tấn', 'Quảng Ninh', 'Hà Nội', 'Xe chở hàng 1,25 tấn ', '', 'Ngày', 150000, 0, NULL, NULL, NULL, '2016-06-02 08:43:19', '2016-06-02 08:44:01'),
(27, '0526915521', '0526915521.1464857075', 'DVXTX05269155211464856904', 'Xe tải 3,5 tấn', 'Quảng Ninh', 'Hà Nội', 'Xe chở hàng 3,5 tấn', '', 'Ngày', 250000, 0, NULL, NULL, NULL, '2016-06-02 08:43:19', '2016-06-02 08:44:15'),
(28, '0526915521', '0526915521.1464857075', 'DVXTX05269155211464856934', 'Xe tải 5 tấn', 'Quảng Ninh', 'Hà Nội', 'Xe chở hàng 5 tấn', '', 'Ngày', 450000, 0, NULL, NULL, NULL, '2016-06-02 08:43:19', '2016-06-02 08:44:21'),
(29, '0526915521', '0526915521.1464857075', 'DVXTX05269155211464856981', 'Xe tải 2,5 tấn', 'Quảng Ninh', 'Hải Phòng', 'Xe chở hàng 2,5 tấn', '', 'Vé', 200000, 0, NULL, NULL, NULL, '2016-06-02 08:43:19', '2016-06-02 08:44:09'),
(30, '0626915598', '0626915598.1464858383', 'DVXTX06269155981464858236', 'Xe tải 1,25 tấn', '', '', 'Xe chở hàng 1,25 tấn', '', 'Ngày', 200000, 0, NULL, NULL, NULL, '2016-06-02 09:05:29', '2016-06-02 09:05:55'),
(31, '0626915598', '0626915598.1464858383', 'DVXTX06269155981464858255', 'Xe tải 3,5 tấn', '', '', 'Xe chở hàng 3,5 tấn', '', 'Ngày', 350000, 0, NULL, NULL, NULL, '2016-06-02 09:05:29', '2016-06-02 09:06:02'),
(32, '0626915598', '0626915598.1464858383', 'DVXTX06269155981464858276', 'Xe tải 5 tấn', '', '', 'Xe chở hàng 5 tấn', '', 'Ngày', 450000, 0, NULL, NULL, NULL, '2016-06-02 09:05:30', '2016-06-02 09:06:12'),
(33, '0626915598', '0626915598.1464858383', 'DVXTX06269155981464858318', 'Xe tải 8 tấn', '', '', 'Xe chở hàng 8 tấn', '', 'Ngày', 600000, 0, NULL, NULL, NULL, '2016-06-02 09:05:30', '2016-06-02 09:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `kkdvvtxb`
--

CREATE TABLE `kkdvvtxb` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `socv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhap` date DEFAULT NULL,
  `socvlk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhaplk` date DEFAULT NULL,
  `ngayhieuluc` date DEFAULT NULL,
  `ttnguoinop` text COLLATE utf8_unicode_ci,
  `ngaynhan` date DEFAULT NULL,
  `sohsnhan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaychuyen` datetime DEFAULT NULL,
  `lydo` text COLLATE utf8_unicode_ci,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uudai` text COLLATE utf8_unicode_ci,
  `ghichu` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kkdvvtxb`
--

INSERT INTO `kkdvvtxb` (`id`, `masothue`, `masokk`, `socv`, `ngaynhap`, `socvlk`, `ngaynhaplk`, `ngayhieuluc`, `ttnguoinop`, `ngaynhan`, `sohsnhan`, `ngaychuyen`, `lydo`, `trangthai`, `uudai`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 'ToanViet010203', 'ToanViet010203.1464836615', 'CV003', '2016-06-01', '', '0000-00-00', '2016-06-10', NULL, NULL, NULL, NULL, NULL, 'Chờ chuyển', '', 'Kê khai lần đầu', '2016-06-02 03:03:35', '2016-06-02 03:11:46');

-- --------------------------------------------------------

--
-- Table structure for table `kkdvvtxbct`
--

CREATE TABLE `kkdvvtxbct` (
  `id` int(10) UNSIGNED NOT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tendichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemdau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemcuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qccl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvtluot` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvtthang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giakkluot` double DEFAULT NULL,
  `giakklkluot` double DEFAULT NULL,
  `giakkthang` double DEFAULT NULL,
  `giakklkthang` double DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuevat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kkdvvtxbct`
--

INSERT INTO `kkdvvtxbct` (`id`, `madichvu`, `masokk`, `tendichvu`, `diemdau`, `diemcuoi`, `qccl`, `dvtluot`, `dvtthang`, `giakkluot`, `giakklkluot`, `giakkthang`, `giakklkthang`, `ghichu`, `thuevat`, `created_at`, `updated_at`) VALUES
(1, 'DVXBToanViet0102031464835826', 'ToanViet010203.1464836615', 'Các tuyến xe buýt có cự ly dưới 18 km', 'Bến Thành', 'Bến Thành', 'Áp dụng cho đối tượng học sinh, sinh viên', 'Vé', 'Tháng', 5000, 0, 125000, 0, NULL, NULL, '0000-00-00 00:00:00', '2016-06-02 03:20:46'),
(2, 'DVXBToanViet0102031464835882', 'ToanViet010203.1464836615', 'Các tuyến xe buýt có cự ly trên 18 km', 'Bến Thành', 'Bến Thành', 'Áp dụng cho học sinh, sinh viên', 'Vé', 'Tháng', 7000, 0, 180000, 0, NULL, NULL, '0000-00-00 00:00:00', '2016-06-02 03:04:40'),
(3, 'DVXBToanViet0102031464835931', 'ToanViet010203.1464836615', 'Các tuyến xe buýt có cự ly dưới 18 km', 'HCM', 'HCM', 'Áp dụng cho đối tượng không phải học sinh, sinh viên', 'Vé', 'Tháng', 7000, 0, 180000, 0, NULL, NULL, '0000-00-00 00:00:00', '2016-06-02 03:04:52'),
(4, 'DVXBToanViet0102031464835996', 'ToanViet010203.1464836615', 'Các tuyến xe buýt có cự ly trên 18 km', 'HCM', 'HCM', 'Áp dụng cho đối tượng không phải học sinh, sinh viên', 'Vé', 'Tháng', 10000, 0, 210000, 0, NULL, NULL, '0000-00-00 00:00:00', '2016-06-02 03:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `kkdvvtxbctdf`
--

CREATE TABLE `kkdvvtxbctdf` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tendichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemdau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemcuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qccl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvtluot` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvtthang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giakkluot` double DEFAULT NULL,
  `giakklkluot` double DEFAULT NULL,
  `giakkthang` double DEFAULT NULL,
  `giakklkthang` double DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuevat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kkdvvtxbctdf`
--

INSERT INTO `kkdvvtxbctdf` (`id`, `masothue`, `masokk`, `madichvu`, `tendichvu`, `diemdau`, `diemcuoi`, `qccl`, `dvtluot`, `dvtthang`, `giakkluot`, `giakklkluot`, `giakkthang`, `giakklkthang`, `ghichu`, `thuevat`, `created_at`, `updated_at`) VALUES
(9, 'ToanViet010203', NULL, 'DVXBToanViet0102031464835826', 'Các tuyến xe buýt có cự ly dưới 18 km', 'Bến Thành', 'Bến Thành', 'Áp dụng cho đối tượng học sinh, sinh viên', 'Vé', 'Tháng', 0, 0, 0, 0, NULL, NULL, '2016-06-02 03:18:06', '2016-06-02 03:18:06'),
(10, 'ToanViet010203', NULL, 'DVXBToanViet0102031464835882', 'Các tuyến xe buýt có cự ly trên 18 km', 'Bến Thành', 'Bến Thành', 'Áp dụng cho học sinh, sinh viên', 'Vé', 'Tháng', 0, 0, 0, 0, NULL, NULL, '2016-06-02 03:18:06', '2016-06-02 03:18:06'),
(11, 'ToanViet010203', NULL, 'DVXBToanViet0102031464835931', 'Các tuyến xe buýt có cự ly dưới 18 km', 'HCM', 'HCM', 'Áp dụng cho đối tượng không phải học sinh, sinh viên', 'Vé', 'Tháng', 0, 0, 0, 0, NULL, NULL, '2016-06-02 03:18:06', '2016-06-02 03:18:06'),
(12, 'ToanViet010203', NULL, 'DVXBToanViet0102031464835996', 'Các tuyến xe buýt có cự ly trên 18 km', 'HCM', 'HCM', 'Áp dụng cho đối tượng không phải học sinh, sinh viên', 'Vé', 'Tháng', 0, 0, 0, 0, NULL, NULL, '2016-06-02 03:18:06', '2016-06-02 03:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `kkdvvtxk`
--

CREATE TABLE `kkdvvtxk` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `socv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhap` date DEFAULT NULL,
  `socvlk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhaplk` date DEFAULT NULL,
  `ngayhieuluc` date DEFAULT NULL,
  `ttnguoinop` text COLLATE utf8_unicode_ci,
  `ngaynhan` date DEFAULT NULL,
  `sohsnhan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaychuyen` datetime DEFAULT NULL,
  `lydo` text COLLATE utf8_unicode_ci,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uudai` text COLLATE utf8_unicode_ci,
  `ghichu` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kkdvvtxk`
--

INSERT INTO `kkdvvtxk` (`id`, `masothue`, `masokk`, `socv`, `ngaynhap`, `socvlk`, `ngaynhaplk`, `ngayhieuluc`, `ttnguoinop`, `ngaynhan`, `sohsnhan`, `ngaychuyen`, `lydo`, `trangthai`, `uudai`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, '0312241579', '0312241579.1464685318', 'CV0001', '2016-06-01', '', '0000-00-00', '2016-06-10', 'Nguyễn Văn Hải - 0808080808', '2016-06-02', '1', '2016-05-31 16:02:42', NULL, 'Duyệt', '', '- Giá vé bao gồm giá bến bãi, điều hành xe, chi phi trên đường đi,...\r\n- Giá vé đã bao gồm thuế VAT, bảo hiểm', '2016-05-31 09:01:58', '2016-06-02 03:45:41'),
(2, 'ToanViet010203', 'ToanViet010203.1464835271', 'CV001', '2016-06-01', '', '0000-00-00', '2016-06-10', 'Lê Hà - 0986456411', NULL, NULL, '2016-06-02 09:41:52', NULL, 'Chờ nhận', '', 'Kê khai giá lần đầu.', '2016-06-02 02:41:11', '2016-06-02 02:41:52'),
(3, '0106900498', '0106900498.1464855929', 'CV001', '2016-06-10', '', '0000-00-00', '2016-06-15', 'Lê Hoàn - 046666666', NULL, NULL, '2016-06-02 15:26:12', NULL, 'Chờ nhận', '', 'Kê khai lần đầu', '2016-06-02 08:25:29', '2016-06-02 08:26:12'),
(4, '0526915521', '0526915521.1464856731', 'CV001', '2016-06-01', '', '0000-00-00', '2016-06-15', 'Vũ Ngọc Thái - 031245642', NULL, NULL, '2016-06-02 15:39:25', NULL, 'Chờ nhận', '', 'Kê khai lần đầu', '2016-06-02 08:38:52', '2016-06-02 08:39:25'),
(5, '0626915598', '0626915598.1464858120', 'CV001', '2016-06-03', '', '0000-00-00', '2016-06-10', 'Phạm Văn Nam - 035678944', NULL, NULL, '2016-06-02 16:02:48', NULL, 'Chờ nhận', '', '', '2016-06-02 09:02:00', '2016-06-02 09:02:48');

-- --------------------------------------------------------

--
-- Table structure for table `kkdvvtxkct`
--

CREATE TABLE `kkdvvtxkct` (
  `id` int(10) UNSIGNED NOT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaixe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemdau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemcuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tendichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qccl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giakk` double DEFAULT NULL,
  `giakklk` double DEFAULT NULL,
  `giahl` double DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuevat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kkdvvtxkct`
--

INSERT INTO `kkdvvtxkct` (`id`, `masokk`, `madichvu`, `loaixe`, `diemdau`, `diemcuoi`, `tendichvu`, `qccl`, `dvt`, `giakk`, `giakklk`, `giahl`, `ghichu`, `thuevat`, `created_at`, `updated_at`) VALUES
(1, '0312241579.1464685318', 'DVXK03122415791464683994', 'Xe 45 chỗ', 'Sài Gòn', 'Cần Thơ', 'Sài Gòn - Cần Thơ', 'Máy lạnh, giường nằm, Wifi', 'Vé', 100000, 0, 50000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '0312241579.1464685318', 'DVXK03122415791464684075', 'Xe 45 chỗ', 'Đà Lạt', 'Nha Trang', 'Đà Lạt - Nha Trang', 'Giường nằm, máy lạnh', 'Vé', 125000, 0, 50000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '0312241579.1464685318', 'DVXK03122415791464684151', 'Xe 45 chỗ', 'Đà Lạt', 'Đà Nẵng', 'Đà Lạt - Đà Nẵng', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', 300000, 0, 100000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '0312241579.1464685318', 'DVXK03122415791464684187', 'Xe 45 chỗ', 'Đà Lạt', 'Huế', 'Đà Lạt - Huế', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', 325000, 0, 120000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '0312241579.1464685318', 'DVXK03122415791464684243', 'Xe 45 chỗ', 'Đà Lạt', 'Cần Thơ', 'Đà Lạt - Cần Thơ', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', 315000, 0, 150000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '0312241579.1464685318', 'DVXK03122415791464684327', 'Xe 45 chỗ', 'Sài Gòn', 'Cà Mau', 'Sài Gòn - Cà Mau', 'Ghế ngồi, máy lạnh, nước uống', 'Vé', 180000, 0, 60000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '0312241579.1464685318', 'DVXK03122415791464684401', 'Xe 30 chỗ', 'Sài Gòn', 'Mũi Né', 'Sài Gòn - Mũi Né', 'Ghế ngồi, nước uống, máy lạnh', 'Vé', 120000, 0, 50000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '0312241579.1464685318', 'DVXK03122415791464684581', 'Xe 45 chỗ', 'Hà Nội', 'Đà Nẵng', 'Hà Nội - Đà Nẵng', 'Giướng nằm, nước uống, máy lạnh', 'Vé', 350000, 0, 150000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '0312241579.1464685318', 'DVXK03122415791464684624', 'Xe 45 chỗ', 'Hà Nội', 'Hải Phòng', 'Hà Nội - Hải Phòng', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', 120000, 0, 50000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '0312241579.1464685318', 'DVXK03122415791464684677', 'Xe 45 chỗ', 'Hà Nội', 'Nam Định', 'Hà Nội - Nam Định', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', 200000, 0, 100000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '0312241579.1464685318', 'DVXK03122415791464684875', 'Xe 45 chỗ', 'Hà Nội', 'Thái Bình', 'Hà Nội - Thái Bình', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', 200000, 0, 150000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '0312241579.1464685318', 'DVXK03122415791464684923', 'Xe 45 chỗ', 'Hà Nội', 'Vinh', 'Hà Nội - Vinh', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', 300000, 0, 150000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'ToanViet010203.1464835271', 'DVXKToanViet0102031464834889', 'Xe 45 chỗ', 'Sài Gòn', 'Hà Nội', 'Sài Gòn - Hà Nội', '', 'Vé', 0, 0, 980000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'ToanViet010203.1464835271', 'DVXKToanViet0102031464834953', 'Xe 45 chỗ', 'Sài Gòn', 'Đà Lạt', 'Sài Gòn - Đà Lạt', 'Giường nằm, máy lạnh, wifi', 'Vé', 0, 0, 90000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'ToanViet010203.1464835271', 'DVXKToanViet0102031464835040', 'Xe 45 chỗ', 'Sài Gòn', 'Nha Trang', 'Sài Gòn - Nha Trang', 'Giường nằm,...', 'Vé', 0, 0, 180000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'ToanViet010203.1464835271', 'DVXKToanViet0102031464835095', 'Xe 45 chỗ', 'Sài Gòn', 'Đà Nẵng', 'Sài Gòn - Đà Nẵng', 'Giường nằm,...', 'Vé', 0, 0, 360000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'ToanViet010203.1464835271', 'DVXKToanViet0102031464835125', 'Xe 45 chỗ', 'Sài Gòn', 'Huế', 'Sài Gòn - Huế', 'Giường nằm,...', 'Vé', 0, 0, 480000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '0106900498.1464855929', 'DVXK01069004981464855409', 'Xe 45 chỗ', 'Hà Nội', 'Sài Gòn', 'Hà Nội - Sài Gòn', 'Giường nằm', 'Vé', 1000000, 0, 500000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '0106900498.1464855929', 'DVXK01069004981464855449', 'Xe 45 chỗ', 'Hà Nội', 'Sapa', 'Hà Nội - Sapa', 'Giường nằm', 'Vé', 280000, 0, 100000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '0106900498.1464855929', 'DVXK01069004981464855481', 'Xe 45 chỗ', 'Hà Nội', 'Lào Cai', 'Hà Nội - Lào Cai', '', 'Vé', 230000, 0, 100000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '0106900498.1464855929', 'DVXK01069004981464855510', 'Xe 45 chỗ', 'Hà Nội', 'Huế', 'Hà Nội - Huế', '', 'Vé', 300000, 0, 150000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '0106900498.1464855929', 'DVXK01069004981464855545', 'Xe 45 chỗ', 'Hà Nội', 'Đà Nẵng', 'Hà Nội - Đà Nẵng', '', 'Vé', 450000, 0, 200000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '0106900498.1464855929', 'DVXK01069004981464855649', 'Xe 45 chỗ', 'Hà Nội', 'Vinh', 'Hà Nội - Vinh', '', 'Vé', 220000, 0, 100000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '0106900498.1464855929', 'DVXK01069004981464855689', 'Xe 45 chỗ', 'Hà Nội', 'Thanh Hóa', 'Hà Nội - Thanh Hóa', '', 'Vé', 190000, 0, 90000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '0526915521.1464856731', 'DVXK05269155211464856350', 'Xe 45 chỗ', 'Quảng Ninh', 'Sài Gòn', 'Quảng Ninh - Sài Gòn', '', 'Vé', 900000, 0, 400000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '0526915521.1464856731', 'DVXK05269155211464856505', 'Xe 45 chỗ', 'Quảng Ninh', 'Hà Nội', 'Quảng Ninh - Hà Nội', '', 'Vé', 150000, 0, 80000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '0526915521.1464856731', 'DVXK05269155211464856529', 'Xe 45 chỗ', 'Quảng Ninh', 'Huế', 'Quảng Ninh - Huế', '', 'Vé', 200000, 0, 90000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '0526915521.1464856731', 'DVXK05269155211464856568', 'Xe 45 chỗ', 'Quảng Ninh', 'Đà Nẵng', 'Quảng Ninh - Đà Nẵng', '', 'Vé', 220000, 0, 100000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '0526915521.1464856731', 'DVXK05269155211464856604', 'Xe 45 chỗ', 'Quảng Ninh', 'Nha Trang', 'Quảng Ninh - Nha Trang', '', 'Vé', 250000, 0, 100000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '0626915598.1464858120', 'DVXK06269155981464857420', 'Xe 29 chỗ', 'Quảng Ninh', 'Hà Nội', 'Bến Xe Bãi Cháy - Bến xe Mỹ Đình', 'Thời gian: 4h15''', 'Vé', 320000, 0, 100000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, '0626915598.1464858120', 'DVXK06269155981464857452', 'Xe 45 chỗ', 'Quảng Ninh', 'Hà Nội', 'Bến Xe Bãi Cháy - Bến xe Mỹ Đình', '', 'Vé', 320000, 0, 100000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, '0626915598.1464858120', 'DVXK06269155981464857515', 'Xe 45 chỗ', 'Quảng Ninh', 'Hà Nội', 'Hạ Long - Bến xe Mỹ Đình', '', 'Vé', 330000, 0, 100000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, '0626915598.1464858120', 'DVXK06269155981464857589', 'Xe 45 chỗ', 'Quảng Ninh', 'Hà Nội', 'Văn phòng Hạ Long - Bến xe Lương Yên', '', 'Vé', 350000, 0, 100000, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kkdvvtxkctdf`
--

CREATE TABLE `kkdvvtxkctdf` (
  `id` int(10) UNSIGNED NOT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaixe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemdau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diemcuoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tendichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qccl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giakk` double DEFAULT NULL,
  `giakklk` double DEFAULT NULL,
  `giahl` double DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuevat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kkdvvtxkctdf`
--

INSERT INTO `kkdvvtxkctdf` (`id`, `masokk`, `masothue`, `madichvu`, `loaixe`, `diemdau`, `diemcuoi`, `tendichvu`, `qccl`, `dvt`, `giakk`, `giakklk`, `giahl`, `ghichu`, `thuevat`, `created_at`, `updated_at`) VALUES
(1, '0312241579.1464685318', '0312241579', 'DVXK03122415791464683994', 'Xe 45 chỗ', 'Sài Gòn', 'Cần Thơ', 'Sài Gòn - Cần Thơ', 'Máy lạnh, giường nằm, Wifi', 'Vé', 100000, 0, 50000, NULL, NULL, '2016-05-31 08:55:47', '2016-05-31 08:57:30'),
(2, '0312241579.1464685318', '0312241579', 'DVXK03122415791464684075', 'Xe 45 chỗ', 'Đà Lạt', 'Nha Trang', 'Đà Lạt - Nha Trang', 'Giường nằm, máy lạnh', 'Vé', 125000, 0, 50000, NULL, NULL, '2016-05-31 08:55:47', '2016-05-31 08:57:59'),
(3, '0312241579.1464685318', '0312241579', 'DVXK03122415791464684151', 'Xe 45 chỗ', 'Đà Lạt', 'Đà Nẵng', 'Đà Lạt - Đà Nẵng', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', 300000, 0, 100000, NULL, NULL, '2016-05-31 08:55:47', '2016-05-31 08:58:47'),
(4, '0312241579.1464685318', '0312241579', 'DVXK03122415791464684187', 'Xe 45 chỗ', 'Đà Lạt', 'Huế', 'Đà Lạt - Huế', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', 325000, 0, 120000, NULL, NULL, '2016-05-31 08:55:47', '2016-05-31 08:59:02'),
(5, '0312241579.1464685318', '0312241579', 'DVXK03122415791464684243', 'Xe 45 chỗ', 'Đà Lạt', 'Cần Thơ', 'Đà Lạt - Cần Thơ', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', 315000, 0, 150000, NULL, NULL, '2016-05-31 08:55:47', '2016-05-31 08:59:25'),
(6, '0312241579.1464685318', '0312241579', 'DVXK03122415791464684327', 'Xe 45 chỗ', 'Sài Gòn', 'Cà Mau', 'Sài Gòn - Cà Mau', 'Ghế ngồi, máy lạnh, nước uống', 'Vé', 180000, 0, 60000, NULL, NULL, '2016-05-31 08:55:47', '2016-05-31 08:59:48'),
(7, '0312241579.1464685318', '0312241579', 'DVXK03122415791464684401', 'Xe 30 chỗ', 'Sài Gòn', 'Mũi Né', 'Sài Gòn - Mũi Né', 'Ghế ngồi, nước uống, máy lạnh', 'Vé', 120000, 0, 50000, NULL, NULL, '2016-05-31 08:55:47', '2016-05-31 09:00:00'),
(8, '0312241579.1464685318', '0312241579', 'DVXK03122415791464684581', 'Xe 45 chỗ', 'Hà Nội', 'Đà Nẵng', 'Hà Nội - Đà Nẵng', 'Giướng nằm, nước uống, máy lạnh', 'Vé', 350000, 0, 150000, NULL, NULL, '2016-05-31 08:55:47', '2016-05-31 09:01:04'),
(9, '0312241579.1464685318', '0312241579', 'DVXK03122415791464684624', 'Xe 45 chỗ', 'Hà Nội', 'Hải Phòng', 'Hà Nội - Hải Phòng', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', 120000, 0, 50000, NULL, NULL, '2016-05-31 08:55:47', '2016-05-31 09:01:14'),
(10, '0312241579.1464685318', '0312241579', 'DVXK03122415791464684677', 'Xe 45 chỗ', 'Hà Nội', 'Nam Định', 'Hà Nội - Nam Định', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', 200000, 0, 100000, NULL, NULL, '2016-05-31 08:55:47', '2016-05-31 09:01:25'),
(11, '0312241579.1464685318', '0312241579', 'DVXK03122415791464684875', 'Xe 45 chỗ', 'Hà Nội', 'Thái Bình', 'Hà Nội - Thái Bình', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', 200000, 0, 150000, NULL, NULL, '2016-05-31 08:55:47', '2016-05-31 09:01:47'),
(12, '0312241579.1464685318', '0312241579', 'DVXK03122415791464684923', 'Xe 45 chỗ', 'Hà Nội', 'Vinh', 'Hà Nội - Vinh', 'Giường nằm, máy lạnh, Wifi, nước uống', 'Vé', 300000, 0, 150000, NULL, NULL, '2016-05-31 08:55:47', '2016-05-31 09:01:55'),
(18, NULL, 'ToanViet010203', 'DVXKToanViet0102031464834889', 'Xe 45 chỗ', 'Sài Gòn', 'Hà Nội', 'Sài Gòn - Hà Nội', '', 'Vé', 0, 0, 0, NULL, NULL, '2016-06-02 03:15:37', '2016-06-02 03:15:37'),
(19, NULL, 'ToanViet010203', 'DVXKToanViet0102031464834953', 'Xe 45 chỗ', 'Sài Gòn', 'Đà Lạt', 'Sài Gòn - Đà Lạt', 'Giường nằm, máy lạnh, wifi', 'Vé', 0, 0, 0, NULL, NULL, '2016-06-02 03:15:37', '2016-06-02 03:15:37'),
(20, NULL, 'ToanViet010203', 'DVXKToanViet0102031464835040', 'Xe 45 chỗ', 'Sài Gòn', 'Nha Trang', 'Sài Gòn - Nha Trang', 'Giường nằm,...', 'Vé', 0, 0, 0, NULL, NULL, '2016-06-02 03:15:37', '2016-06-02 03:15:37'),
(21, NULL, 'ToanViet010203', 'DVXKToanViet0102031464835095', 'Xe 45 chỗ', 'Sài Gòn', 'Đà Nẵng', 'Sài Gòn - Đà Nẵng', 'Giường nằm,...', 'Vé', 0, 0, 0, NULL, NULL, '2016-06-02 03:15:37', '2016-06-02 03:15:37'),
(22, NULL, 'ToanViet010203', 'DVXKToanViet0102031464835125', 'Xe 45 chỗ', 'Sài Gòn', 'Huế', 'Sài Gòn - Huế', 'Giường nằm,...', 'Vé', 0, 0, 0, NULL, NULL, '2016-06-02 03:15:37', '2016-06-02 03:15:37'),
(23, '0106900498.1464855929', '0106900498', 'DVXK01069004981464855409', 'Xe 45 chỗ', 'Hà Nội', 'Sài Gòn', 'Hà Nội - Sài Gòn', 'Giường nằm', 'Vé', 1000000, 0, 500000, NULL, NULL, '2016-06-02 08:21:44', '2016-06-02 08:23:01'),
(24, '0106900498.1464855929', '0106900498', 'DVXK01069004981464855449', 'Xe 45 chỗ', 'Hà Nội', 'Sapa', 'Hà Nội - Sapa', 'Giường nằm', 'Vé', 280000, 0, 100000, NULL, NULL, '2016-06-02 08:21:44', '2016-06-02 08:23:22'),
(25, '0106900498.1464855929', '0106900498', 'DVXK01069004981464855481', 'Xe 45 chỗ', 'Hà Nội', 'Lào Cai', 'Hà Nội - Lào Cai', '', 'Vé', 230000, 0, 100000, NULL, NULL, '2016-06-02 08:21:44', '2016-06-02 08:23:38'),
(26, '0106900498.1464855929', '0106900498', 'DVXK01069004981464855510', 'Xe 45 chỗ', 'Hà Nội', 'Huế', 'Hà Nội - Huế', '', 'Vé', 300000, 0, 150000, NULL, NULL, '2016-06-02 08:21:44', '2016-06-02 08:23:54'),
(27, '0106900498.1464855929', '0106900498', 'DVXK01069004981464855545', 'Xe 45 chỗ', 'Hà Nội', 'Đà Nẵng', 'Hà Nội - Đà Nẵng', '', 'Vé', 450000, 0, 200000, NULL, NULL, '2016-06-02 08:21:44', '2016-06-02 08:24:07'),
(28, '0106900498.1464855929', '0106900498', 'DVXK01069004981464855649', 'Xe 45 chỗ', 'Hà Nội', 'Vinh', 'Hà Nội - Vinh', '', 'Vé', 220000, 0, 100000, NULL, NULL, '2016-06-02 08:21:44', '2016-06-02 08:24:51'),
(29, '0106900498.1464855929', '0106900498', 'DVXK01069004981464855689', 'Xe 45 chỗ', 'Hà Nội', 'Thanh Hóa', 'Hà Nội - Thanh Hóa', '', 'Vé', 190000, 0, 90000, NULL, NULL, '2016-06-02 08:21:44', '2016-06-02 08:25:09'),
(30, '0526915521.1464856731', '0526915521', 'DVXK05269155211464856350', 'Xe 45 chỗ', 'Quảng Ninh', 'Sài Gòn', 'Quảng Ninh - Sài Gòn', '', 'Vé', 900000, 0, 400000, NULL, NULL, '2016-06-02 08:36:57', '2016-06-02 08:37:28'),
(31, '0526915521.1464856731', '0526915521', 'DVXK05269155211464856505', 'Xe 45 chỗ', 'Quảng Ninh', 'Hà Nội', 'Quảng Ninh - Hà Nội', '', 'Vé', 150000, 0, 80000, NULL, NULL, '2016-06-02 08:36:57', '2016-06-02 08:38:10'),
(32, '0526915521.1464856731', '0526915521', 'DVXK05269155211464856529', 'Xe 45 chỗ', 'Quảng Ninh', 'Huế', 'Quảng Ninh - Huế', '', 'Vé', 200000, 0, 90000, NULL, NULL, '2016-06-02 08:36:57', '2016-06-02 08:38:02'),
(33, '0526915521.1464856731', '0526915521', 'DVXK05269155211464856568', 'Xe 45 chỗ', 'Quảng Ninh', 'Đà Nẵng', 'Quảng Ninh - Đà Nẵng', '', 'Vé', 220000, 0, 100000, NULL, NULL, '2016-06-02 08:36:57', '2016-06-02 08:38:22'),
(34, '0526915521.1464856731', '0526915521', 'DVXK05269155211464856604', 'Xe 45 chỗ', 'Quảng Ninh', 'Nha Trang', 'Quảng Ninh - Nha Trang', '', 'Vé', 250000, 0, 100000, NULL, NULL, '2016-06-02 08:36:57', '2016-06-02 08:38:33'),
(35, '0626915598.1464858120', '0626915598', 'DVXK06269155981464857420', 'Xe 29 chỗ', 'Quảng Ninh', 'Hà Nội', 'Bến Xe Bãi Cháy - Bến xe Mỹ Đình', 'Thời gian: 4h15''', 'Vé', 320000, 0, 100000, NULL, NULL, '2016-06-02 08:53:29', '2016-06-02 08:53:59'),
(36, '0626915598.1464858120', '0626915598', 'DVXK06269155981464857452', 'Xe 45 chỗ', 'Quảng Ninh', 'Hà Nội', 'Bến Xe Bãi Cháy - Bến xe Mỹ Đình', '', 'Vé', 320000, 0, 100000, NULL, NULL, '2016-06-02 08:53:29', '2016-06-02 08:54:08'),
(37, '0626915598.1464858120', '0626915598', 'DVXK06269155981464857515', 'Xe 45 chỗ', 'Quảng Ninh', 'Hà Nội', 'Hạ Long - Bến xe Mỹ Đình', '', 'Vé', 330000, 0, 100000, NULL, NULL, '2016-06-02 08:53:29', '2016-06-02 08:54:19'),
(38, '0626915598.1464858120', '0626915598', 'DVXK06269155981464857589', 'Xe 45 chỗ', 'Quảng Ninh', 'Hà Nội', 'Văn phòng Hạ Long - Bến xe Lương Yên', '', 'Vé', 350000, 0, 100000, NULL, NULL, '2016-06-02 08:53:29', '2016-06-02 09:01:55');

-- --------------------------------------------------------

--
-- Table structure for table `kkdvvtxtx`
--

CREATE TABLE `kkdvvtxtx` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `socv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhap` date DEFAULT NULL,
  `socvlk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhaplk` date DEFAULT NULL,
  `ngayhieuluc` date DEFAULT NULL,
  `ttnguoinop` text COLLATE utf8_unicode_ci,
  `ngaynhan` date DEFAULT NULL,
  `sohsnhan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaychuyen` datetime DEFAULT NULL,
  `lydo` text COLLATE utf8_unicode_ci,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uudai` text COLLATE utf8_unicode_ci,
  `ghichu` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kkdvvtxtx`
--

INSERT INTO `kkdvvtxtx` (`id`, `masothue`, `masokk`, `socv`, `ngaynhap`, `socvlk`, `ngaynhaplk`, `ngayhieuluc`, `ttnguoinop`, `ngaynhan`, `sohsnhan`, `ngaychuyen`, `lydo`, `trangthai`, `uudai`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, '0312241579', '0312241579.1464834274', 'CV002', '2016-06-01', '', '0000-00-00', '2016-06-10', 'Nguyễn Văn Long- 0933333344', NULL, NULL, '2016-06-02 09:25:16', NULL, 'Chờ nhận', '', 'Kê khai lần đầu.', '2016-06-02 02:24:34', '2016-06-02 02:25:16'),
(2, 'ToanViet010203', 'ToanViet010203.1464839340', 'CV003', '2016-06-10', '', '0000-00-00', '2016-06-15', 'Hoàng Ngọc Lan - 0903487999', '2016-06-02', '2', '2016-06-02 10:49:28', NULL, 'Duyệt', '', 'Thông tin kê khai lần đầu.', '2016-06-02 03:49:00', '2016-06-02 08:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `kkdvvtxtxct`
--

CREATE TABLE `kkdvvtxtxct` (
  `id` int(10) UNSIGNED NOT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaixe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tendichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qccl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giakk` double DEFAULT NULL,
  `giakklk` double DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuevat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kkdvvtxtxct`
--

INSERT INTO `kkdvvtxtxct` (`id`, `masokk`, `madichvu`, `loaixe`, `tendichvu`, `qccl`, `dvt`, `giakk`, `giakklk`, `ghichu`, `thuevat`, `created_at`, `updated_at`) VALUES
(1, '0312241579.1464834274', 'DVXTX03122415791464685512', 'Xe 4 chỗ', 'Giá mở cửa', 'Máy lạnh', 'Chuyến xe', 8000, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '0312241579.1464834274', 'DVXTX03122415791464686458', 'Xe 4 chỗ', 'Giá Km tiếp theo', 'Máy lạnh', 'Chuyến xe', 10500, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '0312241579.1464834274', 'DVXTX03122415791464686498', 'Xe 4 chỗ', 'Từ Km thứ 30 trở đi', 'Máy lạnh', 'Chuyến xe', 9500, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'ToanViet010203.1464839340', 'DVXTXToanViet0102031464838598', 'Xe 4 chỗ', 'Giá mở cửa', '', 'Km', 8000, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'ToanViet010203.1464839340', 'DVXTXToanViet0102031464838623', 'Xe 4 chỗ', 'Giá 10 km đầu', '', 'Km', 10500, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'ToanViet010203.1464839340', 'DVXTXToanViet0102031464838657', 'Xe 4 chỗ', 'Giá 30 km đầu', '', 'Km', 9000, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'ToanViet010203.1464839340', 'DVXTXToanViet0102031464838683', 'Xe 4 chỗ', 'Giá vé từ 30 km tiếp theo', '', 'Km', 8500, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'ToanViet010203.1464839340', 'DVXTXToanViet0102031464838707', 'Xe 7 chỗ', 'Giá vé mở cửa', '', 'Km', 10000, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'ToanViet010203.1464839340', 'DVXTXToanViet0102031464838730', 'Xe 7 chỗ', 'Giá vé 30 km đầu', '', 'Km', 9000, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'ToanViet010203.1464839340', 'DVXTXToanViet0102031464838749', 'Xe 7 chỗ', 'Giá vé 30 km tiếp theo', '', 'Km', 8000, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kkdvvtxtxctdf`
--

CREATE TABLE `kkdvvtxtxctdf` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaixe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tendichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qccl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giakk` double DEFAULT NULL,
  `giakklk` double DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuevat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kkdvvtxtxctdf`
--

INSERT INTO `kkdvvtxtxctdf` (`id`, `masothue`, `masokk`, `madichvu`, `loaixe`, `tendichvu`, `qccl`, `dvt`, `giakk`, `giakklk`, `ghichu`, `thuevat`, `created_at`, `updated_at`) VALUES
(1, '0312241579', '0312241579.1464834274', 'DVXTX03122415791464685512', 'Xe 4 chỗ', 'Giá mở cửa', 'Máy lạnh', 'Chuyến xe', 8000, 0, NULL, NULL, '2016-06-02 02:23:17', '2016-06-02 02:23:42'),
(2, '0312241579', '0312241579.1464834274', 'DVXTX03122415791464686458', 'Xe 4 chỗ', 'Giá Km tiếp theo', 'Máy lạnh', 'Chuyến xe', 10500, 0, NULL, NULL, '2016-06-02 02:23:17', '2016-06-02 02:24:10'),
(3, '0312241579', '0312241579.1464834274', 'DVXTX03122415791464686498', 'Xe 4 chỗ', 'Từ Km thứ 30 trở đi', 'Máy lạnh', 'Chuyến xe', 9500, 0, NULL, NULL, '2016-06-02 02:23:17', '2016-06-02 02:24:20'),
(18, 'ToanViet010203', 'ToanViet010203.1464839340', 'DVXTXToanViet0102031464838598', 'Xe 4 chỗ', 'Giá mở cửa', '', 'Km', 8000, 0, NULL, NULL, '2016-06-02 03:47:13', '2016-06-02 03:47:23'),
(19, 'ToanViet010203', 'ToanViet010203.1464839340', 'DVXTXToanViet0102031464838623', 'Xe 4 chỗ', 'Giá 10 km đầu', '', 'Km', 10500, 0, NULL, NULL, '2016-06-02 03:47:13', '2016-06-02 03:47:42'),
(20, 'ToanViet010203', 'ToanViet010203.1464839340', 'DVXTXToanViet0102031464838657', 'Xe 4 chỗ', 'Giá 30 km đầu', '', 'Km', 9000, 0, NULL, NULL, '2016-06-02 03:47:13', '2016-06-02 03:47:49'),
(21, 'ToanViet010203', 'ToanViet010203.1464839340', 'DVXTXToanViet0102031464838683', 'Xe 4 chỗ', 'Giá vé từ 30 km tiếp theo', '', 'Km', 8500, 0, NULL, NULL, '2016-06-02 03:47:13', '2016-06-02 03:48:00'),
(22, 'ToanViet010203', 'ToanViet010203.1464839340', 'DVXTXToanViet0102031464838707', 'Xe 7 chỗ', 'Giá vé mở cửa', '', 'Km', 10000, 0, NULL, NULL, '2016-06-02 03:47:13', '2016-06-02 03:48:08'),
(23, 'ToanViet010203', 'ToanViet010203.1464839340', 'DVXTXToanViet0102031464838730', 'Xe 7 chỗ', 'Giá vé 30 km đầu', '', 'Km', 9000, 0, NULL, NULL, '2016-06-02 03:47:13', '2016-06-02 03:48:19'),
(24, 'ToanViet010203', 'ToanViet010203.1464839340', 'DVXTXToanViet0102031464838749', 'Xe 7 chỗ', 'Giá vé 30 km tiếp theo', '', 'Km', 8000, 0, NULL, NULL, '2016-06-02 03:47:13', '2016-06-02 03:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `kkgdvlt`
--

CREATE TABLE `kkgdvlt` (
  `id` int(10) UNSIGNED NOT NULL,
  `mahs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macskd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhap` date DEFAULT NULL,
  `socv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `socvlk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycvlk` date DEFAULT NULL,
  `ngayhieuluc` date DEFAULT NULL,
  `ttnguoinop` text COLLATE utf8_unicode_ci,
  `ngaynhan` date DEFAULT NULL,
  `sohsnhan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8_unicode_ci,
  `ngaychuyen` datetime DEFAULT NULL,
  `lydo` text COLLATE utf8_unicode_ci,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kkgdvlt`
--

INSERT INTO `kkgdvlt` (`id`, `mahs`, `macskd`, `masothue`, `ngaynhap`, `socv`, `socvlk`, `ngaycvlk`, `ngayhieuluc`, `ttnguoinop`, `ngaynhan`, `sohsnhan`, `ghichu`, `ngaychuyen`, `lydo`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, '1464683297', '4200284469-3152016152530', '4200284469', '2016-02-03', '05/CTTĐ', '04/CTTĐ', '2016-02-03', '2016-02-16', 'Trần Thị Thúy Nga - 091234567- thanhdatholtel@gmail.com', '2016-02-03', '1120', '- Phụ thu 150.000 đ/khách/ngày đêm\r\n- Mức kê khai nêu trên đã bao gồm thuế GTGT.', '2016-05-31 15:31:40', NULL, 'Duyệt', '2016-05-31 08:28:17', '2016-06-20 08:22:27'),
(2, '1464685204', '4200619637-3152016155331', '4200619637', '2016-02-22', '12/CV-HT-2016', '', '0000-00-00', '2016-03-01', 'Vũ Văn Toàn - 09999999- hotiencompany@gmail.com', '2016-05-31', '2', '-Mức kê khai nêu trên đã bao gồm ăn sáng, chưa bao gồm phí phục vụ 5% và thuê GTGT 10%. Các mức giá trên được quy đổi theo tỷ giá 22.000đ, tỷ giá thay đổi tại thời điểm thanh toán\r\n-Mức giá kê khai nêu trên quy định số khách lưu trú tối đa như phần ghi chú ở bảng đăng ký giá trong một phòng(buồng) lưu trú', '2016-05-31 16:00:50', NULL, 'Chờ duyệt', '2016-05-31 09:00:04', '2016-05-31 09:02:14'),
(3, '1464746782', 'havana010203-162016935', 'havana010203', '2016-06-01', '001/Havana', '', '0000-00-00', '2016-06-05', 'Nguyễn Thị Mỹ Hường - 0123456789', NULL, NULL, 'Qui định nhận phòng\r\n\r\nGiờ nhận phòng: 14h00                   Giờ trả phòng: 12h00\r\n\r\nKhi đến nhận phòng vui lòng mang theo:\r\n- CMND hoặc Passport\r\n- Mã code đặt phòng được cung cấp bởi Luvill\r\n\r\nQui định phụ thu:\r\n\r\n* Về trẻ em và giường phụ: - Số lượng khách tối đa trong phòng là: 3 người lớn hoặc 2 người lớn và 2 trẻ em dưới 12 tuổi\r\n- Trẻ em dưới 4 tuổi: miễn phí hoàn toàn\r\n- Trẻ em từ 4-11 tuổi: phụ thu ăn sáng là 200.000 vnđ.\r\n- Trẻ em từ 12 tuổi trở lên tính như người lớn.\r\n- Phụ thu khách thứ 3 dưới 18 tuổi: 400.000 vnđ (đã bao gồm ăn sáng buffet, không bao gồm giường phụ, không áp dụng cho người 18 tuổi trở lên)\r\n- Extrabed là: 600.000 vnđ/ đêm bao gồm giường phụ vàăn sáng buffet', '2016-06-01 09:07:53', NULL, 'Chờ nhận', '2016-06-01 02:06:22', '2016-06-01 02:07:53'),
(4, '1464747951', 'Regalia010203-16201692248', 'Regalia010203', '2016-06-01', '001/REGALIA', '', '0000-00-00', '2016-06-05', 'Nguyễn Thị Minh Tuyết - 0987654321', NULL, NULL, 'Giờ nhận phòng: 14:00\r\nGiờ trả phòng: 12:00\r\nChính sách hủy:\r\nChính sách hoàn hủy :\r\nMùa cao điểm \r\nHủy phòng trước 30 ngày : không tính phí\r\nHủy phòng sau 30 ngày : 100% tiền phòng\r\nMùa thấp điểm : Tháng 5 , 9 , 10\r\nHủy phòng từ 14 ngày : không tính phí\r\nHủy phòng Trong gian đoạn 7 - 14 ngày : 50% tiền phòng\r\nHủy phòng ít hơn 07 ngày : 100% tiền phòng', '2016-06-01 09:26:11', NULL, 'Chờ nhận', '2016-06-01 02:25:51', '2016-06-01 02:26:11'),
(5, '1464748994', 'ThienKim010203-16201694010', 'ThienKim010203', '2016-06-01', '001/ThienKim', '', '0000-00-00', '2016-06-05', 'Nguyễn Xuân Trường - 098754321', NULL, NULL, '', '2016-06-01 09:43:49', NULL, 'Chờ nhận', '2016-06-01 02:43:14', '2016-06-01 02:43:49'),
(6, '1464750379', 'SenVang010203-16201610447', 'SenVang010203', '2016-05-01', '001/SenVang', '', '0000-00-00', '2016-06-05', 'Nguyễn Thị Minh Tuyết- 09213214321', NULL, NULL, 'Giờ nhận phòng: 14:00\r\nGiờ trả phòng: 12:00\r\nChính sách hủy:\r\nChính sách hoàn hủy : \r\n\r\nTrước 14 ngày : không tính phí\r\n\r\nTừ 8 ngày đến 13 ngày: 30% tiền phòng\r\n\r\nTừ 5 đến 8 ngày : 50% tiền phòng\r\n\r\nSau 5 ngày hoặc không đến : 100% tiền phòng\r\n\r\nGiai đoạn lễ , cao điểm : \r\n\r\nTrước 20 ngày : không tính phí\r\n\r\nTừ 16 ngày đến 19 ngày: 30% tiền phòng\r\n\r\nTừ 12 đến 15 ngày : 50% tiền phòng\r\n\r\nSau 12 ngày hoặc không đến : 100% tiền phòng', '2016-06-01 10:18:11', NULL, 'Chờ nhận', '2016-06-01 03:06:19', '2016-06-01 03:18:11'),
(7, '1464752240', 'TuyetMai010203-162016103423', 'TuyetMai010203', '2016-05-01', '001/TuyetMai', '', '0000-00-00', '2016-06-05', 'Nguyễn Thị Mỹ Hường - 0121213213', NULL, NULL, 'Giờ nhận phòng: 13:00\r\nGiờ trả phòng: 11:30\r\nChính sách hủy:\r\n•	Đối với các đơn phòng nhỏ hơn 5 phòng:\r\n-	Không tính phí hủy nếu khách hàng báo trước 07 ngày (tính từ ngày đến).\r\n-	Tính phí 50% tổng số tiền đặt phòng nếu khách hàng báo trước 03-07 ngày (tính từ ngày đến).\r\n-	Tính phí 100% tổng số tiền đặt phòng nếu khách hàng hủy đặt phòng dưới 03 ngày (tính từ ngày đến).\r\n•	Đối với đơn phòng từ 5 phòng trở lên\r\n-	Không tính phí hủy nếu khách hàng báo trước 15 ngày (tính từ ngày đến).\r\n-	Tính phí 50% tổng số tiền đặt phòng nếu khách hàng báo trước 07-15 ngày (tính từ ngày đến).\r\n-	Tính phí 100% tổng số tiền đặt phòng nếu khách hàng hủy đặt phòng dưới 07 ngày (tính từ ngày đến).', '2016-06-01 10:38:14', NULL, 'Chờ nhận', '2016-06-01 03:37:20', '2016-06-01 03:38:14'),
(8, '1464765960', 'PhoBien010203-162016142424', 'PhoBien010203', '2016-06-01', '001/PhoBien', '', '0000-00-00', '2016-06-05', 'Nguyễn Thị Mỹ Hạnh -  09872321541', '2016-06-20', '21', 'Giờ nhận phòng: 14:00\r\nGiờ trả phòng: 12:00\r\nChính sách hủy:\r\n•	Đối với các đơn phòng nhỏ hơn 5 phòng:\r\n-	Không tính phí hủy nếu khách hàng báo trước 07 ngày (tính từ ngày đến).\r\n-	Tính phí 50% tổng số tiền đặt phòng nếu khách hàng báo trước 03-07 ngày (tính từ ngày đến).\r\n-	Tính phí 100% tổng số tiền đặt phòng nếu khách hàng hủy đặt phòng dưới 03 ngày (tính từ ngày đến).\r\n•	Đối với đơn phòng từ 5 phòng trở lên\r\n-	Không tính phí hủy nếu khách hàng báo trước 15 ngày (tính từ ngày đến).\r\n-	Tính phí 50% tổng số tiền đặt phòng nếu khách hàng báo trước 07-15 ngày (tính từ ngày đến).\r\n-	Tính phí 100% tổng số tiền đặt phòng nếu khách hàng hủy đặt phòng dưới 07 ngày (tính từ ngày đến).', '2016-06-01 14:26:24', NULL, 'Duyệt', '2016-06-01 07:26:00', '2016-06-20 08:11:13'),
(9, '1465435846', '4200284469-3152016152530', '4200284469', '2016-06-09', '06/CTTĐ', '05/CTTĐ', '2016-02-03', '2016-06-15', 'sadasdsadsad', NULL, NULL, '-Phụ thu 150.000 đ/khách/ngày\r\n-Giá trên đã bao gồm thuế GTGT', '2016-08-19 10:31:16', NULL, 'Chờ nhận', '2016-06-09 01:30:46', '2016-08-19 03:31:16'),
(10, '1477385206', 'SenVang010203-16201610447', 'SenVang010203', '2016-09-25', 'Số DV', 'dsadasd', '2016-01-31', '0000-00-00', NULL, NULL, NULL, '', NULL, NULL, 'Chờ chuyển', '2016-10-25 08:46:46', '2016-10-25 08:46:46'),
(11, '1478657944', 'thanhdat_1478657651', 'thanhdat', '2016-11-09', '001', '', NULL, '2016-11-30', 'Trần Minh - 09854321', NULL, NULL, 'Phụ thu', '2016-11-09 09:23:27', NULL, 'Chờ nhận', '2016-11-09 02:19:04', '2016-11-09 02:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `kkgdvltct`
--

CREATE TABLE `kkgdvltct` (
  `id` int(10) UNSIGNED NOT NULL,
  `macskd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maloaip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qccl` text COLLATE utf8_unicode_ci,
  `sohieu` text COLLATE utf8_unicode_ci,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mucgialk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mucgiakk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kkgdvltct`
--

INSERT INTO `kkgdvltct` (`id`, `macskd`, `mahs`, `maloaip`, `loaip`, `qccl`, `sohieu`, `ghichu`, `mucgialk`, `mucgiakk`, `created_at`, `updated_at`) VALUES
(1, '4200284469-3152016152530', '1464683297', '1464683051', 'Phòng loại I', 'Có ban công nhìn ra biển, có bàn tiếp khách, tivi LCD, có tủ lạnh, có bồn tắm, 2 giường', '101, 103, 104, 105, 107, 106, 110, 112, 201, 202, 203, 205, 207, 208, 209, 210, 211, 212, 213, 214,301, 303, 305, 307, 308, 210, 314, 401, 403, 404, 405, 407, 408, 409, 410, 411, 412, 413, 414, 501, 502, 503, 504, 505, 507, 509, 511, 512, 513, 510, 514', 'Ở tối đa 4 khách', '550000', '450000', '2016-05-31 08:28:17', '2016-05-31 08:28:17'),
(2, '4200284469-3152016152530', '1464683297', '1464683117', 'Phòng loại II', 'Có ban công nhìn ra biển, có bàn tiếp khách, tivi LCD, có tủ lạnh, có bồn tắm, 1 giường đôi', '206, 306, 406, 506', 'Ở tối đa 2 khách', '400000', '350000', '2016-05-31 08:28:17', '2016-05-31 08:28:17'),
(3, '4200619637-3152016155331', '1464685204', '1464684424', 'Dexuxe villa - 72 phòng', '', '207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 301, 302, 303, 204, 305, 306, 307, 308, 309, 310, 311, 312, 313, 314, 315, 316, 317, 318, 319, 320, 321, 324, 327, 329, 332, 335, 337, 340, 343, 345, 348, 351, 353, 356, 359, 322, 323, 325, 326, 328, 330, 331, 333, 334, 336, 338, 339, 341, 342, 344, 360, 349, 350, 352, 354, 355, 357, 358, 346, 347', 'Phòng ở tối đa 2 người', '5192000', '6512000', '2016-05-31 09:00:04', '2016-05-31 09:00:04'),
(4, '4200619637-3152016155331', '1464685204', '1464684538', 'Ocean Villa- 22 phòng', '', '101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 201, 202, 203, 204, 205, 206', 'Phòng ở tối đa 2 người', '7796800', '9680000', '2016-05-31 09:00:04', '2016-05-31 09:00:04'),
(5, '4200619637-3152016155331', '1464685204', '1464684632', 'Family Villa- 16 phòng', '', '219, 220, 221, 222, 223, 224, 225, 226, 227, 228, 229, 230, 231, 232, 233, 234', 'Phòng ở tối đa 2 người', '10683200', '15466000', '2016-05-31 09:00:04', '2016-05-31 09:00:04'),
(6, '4200619637-3152016155331', '1464685204', '1464684720', 'Ocean pool Villa - 03 phòng', '', '117, 118, 119', 'Phòng ở tối đa 2 người', '27420800', '32098000', '2016-05-31 09:00:04', '2016-05-31 09:00:04'),
(7, 'havana010203-162016935', '1464746782', '1464746320', 'DELUXE CITY VIEW TWIN', 'Diện tích phòng khoảng 40m2, gồm 2 giường đơn mỗi giường 1m2, nhìn ra hướng phố. Phòng dành cho 2 người Phòng có 2 giường đơn Deluxe City View Twin Deluxe City View Twin Tiện nghi - Dịch vụ trong phòng Bàn làm việc Internet wifi tại sảnh Bồn tắm nằm Internet wifi trong phòng Cửa sổ Két an toàn Dép đi trong phòng Máy sấy tóc Điện thoại Tivi Điện thoại quốc tế Truyền hình cáp - vệ tinh Điều hòa nhiệt độ Tủ lạnh Dụng cụ pha trà / cafe Vòi sen', '', 'Ở 2 người lớn (kèm 1 trẻ em)', '0', '3500000', '2016-06-01 02:06:22', '2016-06-01 02:06:22'),
(8, 'havana010203-162016935', '1464746782', '1464746385', 'DELUXE OCEAN VIEW', 'Diện tích: 40m2, một số phòng nhìn ra hướng biển, một số khác hướng thành phố. Phòng dành cho 2 người Phòng có 1 giường đôi Deluxe Ocean View Deluxe Ocean View Deluxe Ocean View Tiện nghi - Dịch vụ trong phòng Bồn tắm nằm Internet wifi trong phòng Cửa sổ Két an toàn Dép đi trong phòng Máy sấy tóc Điện thoại Tivi Điện thoại quốc tế Truyền hình cáp - vệ tinh Điều hòa nhiệt độ Tủ lạnh Internet wifi tại sảnh Vòi sen', '', '2 người lớn - 1 trẻ em', '0', '4000000', '2016-06-01 02:06:22', '2016-06-01 02:06:22'),
(9, 'havana010203-162016935', '1464746782', '1464746439', 'JUNIOR SUITE KING', 'Diện tích: 70m2 (01 bếp và 01 bồn tắm Jacuzzi) Loại giường: 1 giường đôi lớn 2m Hướng: biển Phòng dành cho 2 người Phòng có 1 giường đôi Phòng có thể kê thêm tối đa 1 giường phụ Junior Suite King Junior Suite King Tiện nghi - Dịch vụ trong phòng Bàn làm việc Internet wifi tại sảnh Bồn Jacuzzi Internet wifi trong phòng Cửa sổ (mở được) Két an toàn Dép đi trong phòng Máy sấy tóc Điện thoại Tivi Điện thoại quốc tế Truyền hình cáp - vệ tinh Điều hòa nhiệt độ Tủ lạnh Dụng cụ pha trà / cafe Vòi sen', '', '2 người lớn - 1 trẻ em', '0', '4500000', '2016-06-01 02:06:22', '2016-06-01 02:06:22'),
(10, 'havana010203-162016935', '1464746782', '1464746498', 'JUNIOR SUITE QUEEN', 'Diện tích: 65m2 (1 bếp) Loại giường: 1 giường đôi 1m8 Hướng: biển Phòng dành cho 2 người Phòng có 1 giường đôi Phòng có thể kê thêm tối đa 1 giường phụ Junior Suite Queen Junior Suite Queen Tiện nghi - Dịch vụ trong phòng Bàn làm việc Internet wifi trong phòng Cửa sổ (mở được) Két an toàn Dép đi trong phòng Máy sấy tóc Điện thoại Phòng tắm đứng Điện thoại quốc tế Tivi Điều hòa nhiệt độ Truyền hình cáp - vệ tinh Dụng cụ pha trà / cafe Tủ lạnh Internet wifi tại sảnh Vòi sen', '', '2 người lớn - 1 trẻ em', '0', '5000000', '2016-06-01 02:06:22', '2016-06-01 02:06:22'),
(11, 'havana010203-162016935', '1464746782', '1464746558', 'FAMILY SUITE', 'Phòng chỉ ở được tối đa 4 người lớn hoặc 3 người lớn và 1 trẻ em (khi đã ở tối đa như quy định thì không được ở thêm trẻ) Diện tích: 70m2 (01 bếp, 01 tắm đứng và 01 bồn tắm nằm) Loại giường: 1 giường đôi 1m8 và 02 giường đơn mỗi giường 1m2 Hướng: biển Phòng dành cho 4 người Phòng có 1 giường đôi Family Suite Family Suite Family Suite Tiện nghi - Dịch vụ trong phòng Bàn làm việc Internet wifi trong phòng Bồn tắm nằm Két an toàn Cửa sổ (mở được) Máy sấy tóc Dép đi trong phòng Phòng tắm đứng Điện thoại Tivi Điện thoại quốc tế Truyền hình cáp - vệ tinh Điều hòa nhiệt độ Tủ lạnh Dụng cụ pha trà / cafe Vòi sen Internet wifi tại sảnh', '', '', '0', '5500000', '2016-06-01 02:06:22', '2016-06-01 02:06:22'),
(12, 'Regalia010203-16201692248', '1464747951', '1464747596', 'EXECUTIVE SEAVIEW WITH BACONY', 'Diện tích phòng : 28 m2, Giường : 1 giường đôi / 2 giường đơn, Thêm giường tối đa : 2', '', '', '0', '4000000', '2016-06-01 02:25:51', '2016-06-01 02:25:51'),
(13, 'Regalia010203-16201692248', '1464747951', '1464747680', 'FAMILY DELUXE CITY VIEW', 'Diện tích phòng : 36 m2, Giường : 1 giường đôi / 2 giường đơn, Thêm giường tối đa : 4', '', '', '0', '4200000', '2016-06-01 02:25:51', '2016-06-01 02:25:51'),
(14, 'Regalia010203-16201692248', '1464747951', '1464747719', 'FAMILY DELUXE CITY VIEW WITH BACONY', 'Diện tích phòng : 36 m2, Giường : 2 giường đôi, Thêm giường tối đa : 4', '', '', '0', '4400000', '2016-06-01 02:25:51', '2016-06-01 02:25:51'),
(15, 'Regalia010203-16201692248', '1464747951', '1464747753', 'SUITE SEAVIEW WITH BACONY', 'Diện tích phòng : 45 m2, Giường : 1 giường đôi / 2 giường đơn, Thêm giường tối đa : 2', '', '', '0', '4600000', '2016-06-01 02:25:51', '2016-06-01 02:25:51'),
(16, 'ThienKim010203-16201694010', '1464748994', '1464748752', 'PHÒNG 1 GIƯỜNG ĐÔI (2 KHÁCH)', 'Diện tích phòng : 10 m2, Giường : 1 giường đôi, Thêm giường tối đa : 2', '', '', '0', '325000', '2016-06-01 02:43:14', '2016-06-01 02:43:14'),
(17, 'ThienKim010203-16201694010', '1464748994', '1464748796', 'PHÒNG 1 GIƯỜNG ĐÔI + 1 GIƯỜNG ĐƠN (3 KHÁCH)', 'Diện tích phòng : 15 m2, Giường : 1 giường đôi - 1 giường đơn, Thêm giường tối đa : 3', '', '', '0', '360000', '2016-06-01 02:43:14', '2016-06-01 02:43:14'),
(18, 'SenVang010203-16201610447', '1464750379', '1464750215', 'Standard ', 'Diện tích phòng : 18 m2, Giường : 1 giường đôi, Thêm giường tối đa : 2', '', '', '0', '300000', '2016-06-01 03:06:19', '2016-06-01 03:06:19'),
(19, 'SenVang010203-16201610447', '1464750379', '1464750277', 'DELUXE ( BALCONY )', 'Diện tích phòng : 20 m2, Giường : 2 giường đôi, Thêm giường tối đa : 4', '', '', '0', '350000', '2016-06-01 03:06:19', '2016-06-01 03:06:19'),
(20, 'TuyetMai010203-162016103423', '1464752240', '1464751989', 'PHÒNG 1 GIƯỜNG', 'Diện tích phòng : 10 m2, Giường : 1 giường đôi, Thêm giường tối đa : 2', '', '', '0', '350000', '2016-06-01 03:37:20', '2016-06-01 03:37:20'),
(21, 'TuyetMai010203-162016103423', '1464752240', '1464752027', 'PHÒNG 2 GIƯỜNG', 'Diện tích phòng : 12 m2, Giường : 2 giường đơn, Thêm giường tối đa : 2', '', '', '0', '400000', '2016-06-01 03:37:20', '2016-06-01 03:37:20'),
(22, 'TuyetMai010203-162016103423', '1464752240', '1464752059', 'PHÒNG 2 GIƯỜNG HƯỚNG BIỂN', 'Diện tích phòng : 20 m2, Giường : 2 giường đơn, Thêm giường tối đa : 2', '', '', '0', '450000', '2016-06-01 03:37:21', '2016-06-01 03:37:21'),
(23, 'PhoBien010203-162016142424', '1464765960', '1464765765', 'DORM', 'Diện tích phòng : 10 m2, Giường : 1 giường đôi, Thêm giường tối đa : 1', '', '', '0', '300000', '2016-06-01 07:26:00', '2016-06-01 07:26:00'),
(24, 'PhoBien010203-162016142424', '1464765960', '1464765804', '2 SINGLE BEDS WITH WINDOW NO SEA VIEW', 'Diện tích phòng : 20 m2, Giường : 2 giường đơn, Thêm giường tối đa : 2', '', '', '0', '350000', '2016-06-01 07:26:00', '2016-06-01 07:26:00'),
(25, 'PhoBien010203-162016142424', '1464765960', '1464765847', '3 DOUBLE BEDS WTH BALCONY SEAVIEW', 'Diện tích phòng : 20 m2, Giường : 3 giường đơn, Thêm giường tối đa : 3', '', '', '0', '400000', '2016-06-01 07:26:00', '2016-06-01 07:26:00'),
(26, '4200284469-3152016152530', '1465435846', '1464683051', 'Phòng loại 1', 'Có ban công nhìn ra biển, có bàn tiếp khách, tivi LCD, có tủ lạnh, có bồn tắm, 2 giường', '101, 103, 104, 105, 107, 106, 110, 112, 201, 202, 203, 205, 207, 208, 209, 210, 211, 212, 213, 214,301, 303, 305, 307, 308, 210, 314, 401, 403, 404, 405, 407, 408, 409, 410, 411, 412, 413, 414, 501, 502, 503, 504, 505, 507, 509, 511, 512, 513, 510, 514', 'Ở tối đa 4 khách', '450000', '430000', '2016-06-09 01:30:46', '2016-06-09 02:12:46'),
(27, '4200284469-3152016152530', '1465435846', '1464683117', 'Phòng loại II', 'Có ban công nhìn ra biển, có bàn tiếp khách, tivi LCD, có tủ lạnh, có bồn tắm, 1 giường đôi', '206, 306, 406, 506', 'Ở tối đa 2 khách', '350000', '340000', '2016-06-09 01:30:46', '2016-06-09 02:44:08'),
(31, '4200284469-3152016152530', '1465435846', '1465440032', 'Phòng loại 5', 'QUy cách', 'Số hiệu', 'Ghi chú', '0', '360000', '2016-06-09 02:40:32', '2016-06-09 02:45:31'),
(33, '4200284469-3152016152530', '1465435846', '1465440519', 'xsdsad', 'dsadsa', 'dsadsad', 'dsadsad', NULL, NULL, '2016-06-09 02:48:39', '2016-06-09 02:48:39'),
(34, 'SenVang010203-16201610447', '1477385206', '1464750215', 'Standard ', 'Diện tích phòng : 18 m2, Giường : 1 giường đôi, Thêm giường tối đa : 2', '', '', NULL, NULL, '2016-10-25 08:46:46', '2016-10-25 08:46:46'),
(35, 'SenVang010203-16201610447', '1477385206', '1464750277', 'DELUXE ( BALCONY )', 'Diện tích phòng : 20 m2, Giường : 2 giường đôi, Thêm giường tối đa : 4', '', '', NULL, NULL, '2016-10-25 08:46:46', '2016-10-25 08:46:46'),
(36, 'thanhdat_1478657651', '1478657944', '1478657652', 'Loại I', 'Phòng bé1', '101', 'Chả có gì', '300000', '320000', '2016-11-09 02:19:04', '2016-11-09 02:19:04'),
(37, 'thanhdat_1478657651', '1478657944', '1478657652', 'Loại II', 'Phòng to1', '102', 'Nhiều tiền', '400000', '420000', '2016-11-09 02:19:04', '2016-11-09 02:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `kkgdvltctdf`
--

CREATE TABLE `kkgdvltctdf` (
  `id` int(10) UNSIGNED NOT NULL,
  `macskd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maloaip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qccl` text COLLATE utf8_unicode_ci,
  `sohieu` text COLLATE utf8_unicode_ci,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mucgialk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mucgiakk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kkgdvltctdf`
--

INSERT INTO `kkgdvltctdf` (`id`, `macskd`, `maloaip`, `loaip`, `qccl`, `sohieu`, `ghichu`, `mucgialk`, `mucgiakk`, `created_at`, `updated_at`) VALUES
(3, '4200619637-3152016155331', '1464684424', 'Dexuxe villa - 72 phòng', '', '207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 301, 302, 303, 204, 305, 306, 307, 308, 309, 310, 311, 312, 313, 314, 315, 316, 317, 318, 319, 320, 321, 324, 327, 329, 332, 335, 337, 340, 343, 345, 348, 351, 353, 356, 359, 322, 323, 325, 326, 328, 330, 331, 333, 334, 336, 338, 339, 341, 342, 344, 360, 349, 350, 352, 354, 355, 357, 358, 346, 347', 'Phòng ở tối đa 2 người', '5192000', '6512000', '2016-05-31 08:55:41', '2016-05-31 08:55:41'),
(4, '4200619637-3152016155331', '1464684538', 'Ocean Villa- 22 phòng', '', '101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 201, 202, 203, 204, 205, 206', 'Phòng ở tối đa 2 người', '7796800', '9680000', '2016-05-31 08:56:03', '2016-05-31 08:56:03'),
(5, '4200619637-3152016155331', '1464684632', 'Family Villa- 16 phòng', '', '219, 220, 221, 222, 223, 224, 225, 226, 227, 228, 229, 230, 231, 232, 233, 234', 'Phòng ở tối đa 2 người', '10683200', '15466000', '2016-05-31 08:56:38', '2016-05-31 08:56:38'),
(6, '4200619637-3152016155331', '1464684720', 'Ocean pool Villa - 03 phòng', '', '117, 118, 119', 'Phòng ở tối đa 2 người', '27420800', '32098000', '2016-05-31 08:57:06', '2016-05-31 08:57:06'),
(12, 'Regalia010203-16201692248', '1464747596', 'EXECUTIVE SEAVIEW WITH BACONY', 'Diện tích phòng : 28 m2, Giường : 1 giường đôi / 2 giường đơn, Thêm giường tối đa : 2', '', '', '0', '4000000', '2016-06-01 02:24:22', '2016-06-01 02:24:22'),
(13, 'Regalia010203-16201692248', '1464747680', 'FAMILY DELUXE CITY VIEW', 'Diện tích phòng : 36 m2, Giường : 1 giường đôi / 2 giường đơn, Thêm giường tối đa : 4', '', '', '0', '4200000', '2016-06-01 02:24:33', '2016-06-01 02:24:33'),
(14, 'Regalia010203-16201692248', '1464747719', 'FAMILY DELUXE CITY VIEW WITH BACONY', 'Diện tích phòng : 36 m2, Giường : 2 giường đôi, Thêm giường tối đa : 4', '', '', '0', '4400000', '2016-06-01 02:24:44', '2016-06-01 02:24:44'),
(15, 'Regalia010203-16201692248', '1464747753', 'SUITE SEAVIEW WITH BACONY', 'Diện tích phòng : 45 m2, Giường : 1 giường đôi / 2 giường đơn, Thêm giường tối đa : 2', '', '', '0', '4600000', '2016-06-01 02:24:55', '2016-06-01 02:24:55'),
(16, 'ThienKim010203-16201694010', '1464748752', 'PHÒNG 1 GIƯỜNG ĐÔI (2 KHÁCH)', 'Diện tích phòng : 10 m2, Giường : 1 giường đôi, Thêm giường tối đa : 2', '', '', '0', '325000', '2016-06-01 02:42:37', '2016-06-01 02:42:37'),
(17, 'ThienKim010203-16201694010', '1464748796', 'PHÒNG 1 GIƯỜNG ĐÔI + 1 GIƯỜNG ĐƠN (3 KHÁCH)', 'Diện tích phòng : 15 m2, Giường : 1 giường đôi - 1 giường đơn, Thêm giường tối đa : 3', '', '', '0', '360000', '2016-06-01 02:42:48', '2016-06-01 02:42:48'),
(20, 'TuyetMai010203-162016103423', '1464751989', 'PHÒNG 1 GIƯỜNG', 'Diện tích phòng : 10 m2, Giường : 1 giường đôi, Thêm giường tối đa : 2', '', '', '0', '350000', '2016-06-01 03:35:51', '2016-06-01 03:35:51'),
(21, 'TuyetMai010203-162016103423', '1464752027', 'PHÒNG 2 GIƯỜNG', 'Diện tích phòng : 12 m2, Giường : 2 giường đơn, Thêm giường tối đa : 2', '', '', '0', '400000', '2016-06-01 03:36:07', '2016-06-01 03:36:07'),
(22, 'TuyetMai010203-162016103423', '1464752059', 'PHÒNG 2 GIƯỜNG HƯỚNG BIỂN', 'Diện tích phòng : 20 m2, Giường : 2 giường đơn, Thêm giường tối đa : 2', '', '', '0', '450000', '2016-06-01 03:36:22', '2016-06-01 03:36:22'),
(23, 'PhoBien010203-162016142424', '1464765765', 'DORM', 'Diện tích phòng : 10 m2, Giường : 1 giường đôi, Thêm giường tối đa : 1', '', '', '0', '300000', '2016-06-01 07:25:09', '2016-06-01 07:25:09'),
(24, 'PhoBien010203-162016142424', '1464765804', '2 SINGLE BEDS WITH WINDOW NO SEA VIEW', 'Diện tích phòng : 20 m2, Giường : 2 giường đơn, Thêm giường tối đa : 2', '', '', '0', '350000', '2016-06-01 07:25:19', '2016-06-01 07:25:19'),
(25, 'PhoBien010203-162016142424', '1464765847', '3 DOUBLE BEDS WTH BALCONY SEAVIEW', 'Diện tích phòng : 20 m2, Giường : 3 giường đơn, Thêm giường tối đa : 3', '', '', '0', '400000', '2016-06-01 07:25:28', '2016-06-01 07:25:28'),
(58, 'havana010203-162016935', '1464746320', 'DELUXE CITY VIEW TWIN', 'Diện tích phòng khoảng 40m2, gồm 2 giường đơn mỗi giường 1m2, nhìn ra hướng phố. Phòng dành cho 2 người Phòng có 2 giường đơn Deluxe City View Twin Deluxe City View Twin Tiện nghi - Dịch vụ trong phòng Bàn làm việc Internet wifi tại sảnh Bồn tắm nằm Internet wifi trong phòng Cửa sổ Két an toàn Dép đi trong phòng Máy sấy tóc Điện thoại Tivi Điện thoại quốc tế Truyền hình cáp - vệ tinh Điều hòa nhiệt độ Tủ lạnh Dụng cụ pha trà / cafe Vòi sen', '', 'Ở 2 người lớn (kèm 1 trẻ em)', NULL, NULL, '2016-10-24 03:23:22', '2016-10-24 03:23:22'),
(59, 'havana010203-162016935', '1464746385', 'DELUXE OCEAN VIEW', 'Diện tích: 40m2, một số phòng nhìn ra hướng biển, một số khác hướng thành phố. Phòng dành cho 2 người Phòng có 1 giường đôi Deluxe Ocean View Deluxe Ocean View Deluxe Ocean View Tiện nghi - Dịch vụ trong phòng Bồn tắm nằm Internet wifi trong phòng Cửa sổ Két an toàn Dép đi trong phòng Máy sấy tóc Điện thoại Tivi Điện thoại quốc tế Truyền hình cáp - vệ tinh Điều hòa nhiệt độ Tủ lạnh Internet wifi tại sảnh Vòi sen', '', '2 người lớn - 1 trẻ em', NULL, NULL, '2016-10-24 03:23:22', '2016-10-24 03:23:22'),
(60, 'havana010203-162016935', '1464746439', 'JUNIOR SUITE KING', 'Diện tích: 70m2 (01 bếp và 01 bồn tắm Jacuzzi) Loại giường: 1 giường đôi lớn 2m Hướng: biển Phòng dành cho 2 người Phòng có 1 giường đôi Phòng có thể kê thêm tối đa 1 giường phụ Junior Suite King Junior Suite King Tiện nghi - Dịch vụ trong phòng Bàn làm việc Internet wifi tại sảnh Bồn Jacuzzi Internet wifi trong phòng Cửa sổ (mở được) Két an toàn Dép đi trong phòng Máy sấy tóc Điện thoại Tivi Điện thoại quốc tế Truyền hình cáp - vệ tinh Điều hòa nhiệt độ Tủ lạnh Dụng cụ pha trà / cafe Vòi sen', '', '2 người lớn - 1 trẻ em', NULL, NULL, '2016-10-24 03:23:22', '2016-10-24 03:23:22'),
(61, 'havana010203-162016935', '1464746498', 'JUNIOR SUITE QUEEN', 'Diện tích: 65m2 (1 bếp) Loại giường: 1 giường đôi 1m8 Hướng: biển Phòng dành cho 2 người Phòng có 1 giường đôi Phòng có thể kê thêm tối đa 1 giường phụ Junior Suite Queen Junior Suite Queen Tiện nghi - Dịch vụ trong phòng Bàn làm việc Internet wifi trong phòng Cửa sổ (mở được) Két an toàn Dép đi trong phòng Máy sấy tóc Điện thoại Phòng tắm đứng Điện thoại quốc tế Tivi Điều hòa nhiệt độ Truyền hình cáp - vệ tinh Dụng cụ pha trà / cafe Tủ lạnh Internet wifi tại sảnh Vòi sen', '', '2 người lớn - 1 trẻ em', NULL, NULL, '2016-10-24 03:23:22', '2016-10-24 03:23:22'),
(62, 'havana010203-162016935', '1464746558', 'FAMILY SUITE', 'Phòng chỉ ở được tối đa 4 người lớn hoặc 3 người lớn và 1 trẻ em (khi đã ở tối đa như quy định thì không được ở thêm trẻ) Diện tích: 70m2 (01 bếp, 01 tắm đứng và 01 bồn tắm nằm) Loại giường: 1 giường đôi 1m8 và 02 giường đơn mỗi giường 1m2 Hướng: biển Phòng dành cho 4 người Phòng có 1 giường đôi Family Suite Family Suite Family Suite Tiện nghi - Dịch vụ trong phòng Bàn làm việc Internet wifi trong phòng Bồn tắm nằm Két an toàn Cửa sổ (mở được) Máy sấy tóc Dép đi trong phòng Phòng tắm đứng Điện thoại Tivi Điện thoại quốc tế Truyền hình cáp - vệ tinh Điều hòa nhiệt độ Tủ lạnh Dụng cụ pha trà / cafe Vòi sen Internet wifi tại sảnh', '', '', NULL, NULL, '2016-10-24 03:23:22', '2016-10-24 03:23:22'),
(63, 'havana010203-162016935', '1477279480', 'a', 'v', 'v', 'c', NULL, NULL, '2016-10-24 03:24:40', '2016-10-24 03:24:40'),
(68, 'SenVang010203-16201610447', '1464750215', 'Standard ', 'Diện tích phòng : 18 m2, Giường : 1 giường đôi, Thêm giường tối đa : 2', '', '', NULL, NULL, '2016-10-25 08:46:13', '2016-10-25 08:46:13'),
(69, 'SenVang010203-16201610447', '1464750277', 'DELUXE ( BALCONY )', 'Diện tích phòng : 20 m2, Giường : 2 giường đôi, Thêm giường tối đa : 4', '', '', NULL, NULL, '2016-10-25 08:46:13', '2016-10-25 08:46:13'),
(70, '4200284469-3152016152530', '1464683051', 'Phòng loại I', 'Có ban công nhìn ra biển, có bàn tiếp khách, tivi LCD, có tủ lạnh, có bồn tắm, 2 giường', '101, 103, 104, 105, 107, 106, 110, 112, 201, 202, 203, 205, 207, 208, 209, 210, 211, 212, 213, 214,301, 303, 305, 307, 308, 210, 314, 401, 403, 404, 405, 407, 408, 409, 410, 411, 412, 413, 414, 501, 502, 503, 504, 505, 507, 509, 511, 512, 513, 510, 514', 'Ở tối đa 4 khách', NULL, NULL, '2016-11-08 08:49:51', '2016-11-08 08:49:51'),
(71, '4200284469-3152016152530', '1464683117', 'Phòng loại II', 'Có ban công nhìn ra biển, có bàn tiếp khách, tivi LCD, có tủ lạnh, có bồn tắm, 1 giường đôi', '206, 306, 406, 506', 'Ở tối đa 2 khách', NULL, NULL, '2016-11-08 08:49:51', '2016-11-08 08:49:51'),
(72, 'thanhdat_1478657651', '1478657652', 'Loại I', 'Phòng bé1', '101', 'Chả có gì', '300000', '320000', '2016-11-09 02:15:01', '2016-11-09 02:15:44'),
(73, 'thanhdat_1478657651', '1478657652', 'Loại II', 'Phòng to1', '102', 'Nhiều tiền', '400000', '420000', '2016-11-09 02:15:01', '2016-11-09 02:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_05_11_141911_create_users_table', 1),
('2016_05_11_145830_create_dndvlt_table', 1),
('2016_05_11_171549_create_cskddvlt_table', 1),
('2016_05_11_175237_create_ttphong_table', 1),
('2016_05_11_190543_create_ttcskddvlt_table', 1),
('2016_05_12_084832_create_dmdvvtxk_table', 1),
('2016_05_12_084851_create_kkdvvtxk_table', 1),
('2016_05_12_084900_create_kkdvvtxkct_table', 1),
('2016_05_12_101221_create_donvidvvt_table', 1),
('2016_05_12_101616_create_dmdvvtxb_table', 1),
('2016_05_12_101629_create_kkdvvtxb_table', 1),
('2016_05_12_101638_create_kkdvvtxbct_table', 1),
('2016_05_12_102628_create_dmdvvtxtx_table', 1),
('2016_05_12_102651_create_kkdvvtxtx_table', 1),
('2016_05_12_102701_create_kkdvvtxtxct_table', 1),
('2016_05_12_104427_create_dmdvvtkhac_table', 1),
('2016_05_12_104445_create_kkdvvtkhac_table', 1),
('2016_05_12_104453_create_kkdvvtkhacct_table', 1),
('2016_05_12_143559_create_kkgdvlt_table', 1),
('2016_05_12_165437_create_kkgdvltct_table', 1),
('2016_05_12_165936_create_kkgdvltctdf_table', 1),
('2016_05_13_151803_create_general-configs_table', 1),
('2016_05_13_165328_create_cbkkgdvlt_table', 1),
('2016_05_19_155134_create_kkdvvtxkctdf_table', 1),
('2016_05_19_155151_create_kkdvvtxbctdf_table', 1),
('2016_05_19_155213_create_kkdvvtxtxctdf_table', 1),
('2016_05_19_155230_create_kkdvvtkhacctdf_table', 1),
('2016_05_20_081755_create_cbkkdvvtxk_table', 1),
('2016_05_20_081807_create_cbkkdvvtxb_table', 1),
('2016_05_20_081819_create_cbkkdvvtxtx_table', 1),
('2016_05_20_081831_create_cbkkdvvtkhac_table', 1),
('2016_06_17_083319_create_registerdvlt_table', 2),
('2016_06_17_110729_create_registerdvvt_table', 3),
('2016_06_18_093243_create_donvi_temp_table', 4),
('2016_07_02_100830_create_pagdvvtxk_table', 5),
('2016_07_02_101030_create_pagdvvtxb_table', 5),
('2016_07_02_101055_create_pagdvvtxtx_table', 5),
('2016_07_02_101116_create_pagdvvtkhac_table', 5),
('2016_07_02_101408_create_pagdvvtkhac_temp_table', 5),
('2016_07_02_101433_create_pagdvvtxb_temp_table', 5),
('2016_07_02_101445_create_pagdvvtxk_temp_table', 5),
('2016_07_02_101514_create_pagdvvtxtx_temp_table', 5),
('2016_08_06_085157_create_register_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pagdvvtkhac`
--

CREATE TABLE `pagdvvtkhac` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sanluong` double NOT NULL DEFAULT '0',
  `cpnguyenlieutt` double NOT NULL DEFAULT '0',
  `cpcongnhantt` double NOT NULL DEFAULT '0',
  `cpkhauhaott` double NOT NULL DEFAULT '0',
  `cpsanxuatdt` double NOT NULL DEFAULT '0',
  `cpsanxuatc` double NOT NULL DEFAULT '0',
  `cptaichinh` double NOT NULL DEFAULT '0',
  `cpbanhang` double NOT NULL DEFAULT '0',
  `cpquanly` double NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pagdvvtkhac_temp`
--

CREATE TABLE `pagdvvtkhac_temp` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sanluong` double NOT NULL DEFAULT '0',
  `cpnguyenlieutt` double NOT NULL DEFAULT '0',
  `cpcongnhantt` double NOT NULL DEFAULT '0',
  `cpkhauhaott` double NOT NULL DEFAULT '0',
  `cpsanxuatdt` double NOT NULL DEFAULT '0',
  `cpsanxuatc` double NOT NULL DEFAULT '0',
  `cptaichinh` double NOT NULL DEFAULT '0',
  `cpbanhang` double NOT NULL DEFAULT '0',
  `cpquanly` double NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pagdvvtxb`
--

CREATE TABLE `pagdvvtxb` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sanluong` double NOT NULL DEFAULT '0',
  `cpnguyenlieutt` double NOT NULL DEFAULT '0',
  `cpcongnhantt` double NOT NULL DEFAULT '0',
  `cpkhauhaott` double NOT NULL DEFAULT '0',
  `cpsanxuatdt` double NOT NULL DEFAULT '0',
  `cpsanxuatc` double NOT NULL DEFAULT '0',
  `cptaichinh` double NOT NULL DEFAULT '0',
  `cpbanhang` double NOT NULL DEFAULT '0',
  `cpquanly` double NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pagdvvtxb_temp`
--

CREATE TABLE `pagdvvtxb_temp` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sanluong` double NOT NULL DEFAULT '0',
  `cpnguyenlieutt` double NOT NULL DEFAULT '0',
  `cpcongnhantt` double NOT NULL DEFAULT '0',
  `cpkhauhaott` double NOT NULL DEFAULT '0',
  `cpsanxuatdt` double NOT NULL DEFAULT '0',
  `cpsanxuatc` double NOT NULL DEFAULT '0',
  `cptaichinh` double NOT NULL DEFAULT '0',
  `cpbanhang` double NOT NULL DEFAULT '0',
  `cpquanly` double NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pagdvvtxk`
--

CREATE TABLE `pagdvvtxk` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sanluong` double NOT NULL DEFAULT '0',
  `cpnguyenlieutt` double NOT NULL DEFAULT '0',
  `cpcongnhantt` double NOT NULL DEFAULT '0',
  `cpkhauhaott` double NOT NULL DEFAULT '0',
  `cpsanxuatdt` double NOT NULL DEFAULT '0',
  `cpsanxuatc` double NOT NULL DEFAULT '0',
  `cptaichinh` double NOT NULL DEFAULT '0',
  `cpbanhang` double NOT NULL DEFAULT '0',
  `cpquanly` double NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pagdvvtxk_temp`
--

CREATE TABLE `pagdvvtxk_temp` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sanluong` double NOT NULL DEFAULT '0',
  `cpnguyenlieutt` double NOT NULL DEFAULT '0',
  `cpcongnhantt` double NOT NULL DEFAULT '0',
  `cpkhauhaott` double NOT NULL DEFAULT '0',
  `cpsanxuatdt` double NOT NULL DEFAULT '0',
  `cpsanxuatc` double NOT NULL DEFAULT '0',
  `cptaichinh` double NOT NULL DEFAULT '0',
  `cpbanhang` double NOT NULL DEFAULT '0',
  `cpquanly` double NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pagdvvtxtx`
--

CREATE TABLE `pagdvvtxtx` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sanluong` double NOT NULL DEFAULT '0',
  `cpnguyenlieutt` double NOT NULL DEFAULT '0',
  `cpcongnhantt` double NOT NULL DEFAULT '0',
  `cpkhauhaott` double NOT NULL DEFAULT '0',
  `cpsanxuatdt` double NOT NULL DEFAULT '0',
  `cpsanxuatc` double NOT NULL DEFAULT '0',
  `cptaichinh` double NOT NULL DEFAULT '0',
  `cpbanhang` double NOT NULL DEFAULT '0',
  `cpquanly` double NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pagdvvtxtx_temp`
--

CREATE TABLE `pagdvvtxtx_temp` (
  `id` int(10) UNSIGNED NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masokk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `madichvu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sanluong` double NOT NULL DEFAULT '0',
  `cpnguyenlieutt` double NOT NULL DEFAULT '0',
  `cpcongnhantt` double NOT NULL DEFAULT '0',
  `cpkhauhaott` double NOT NULL DEFAULT '0',
  `cpsanxuatdt` double NOT NULL DEFAULT '0',
  `cpsanxuatc` double NOT NULL DEFAULT '0',
  `cptaichinh` double NOT NULL DEFAULT '0',
  `cpbanhang` double NOT NULL DEFAULT '0',
  `cpquanly` double NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) UNSIGNED NOT NULL,
  `tendn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachidn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teldn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `faxdn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noidknopthue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giayphepkd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tailieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dvxk` tinyint(1) NOT NULL,
  `dvxb` tinyint(1) NOT NULL,
  `dvxtx` tinyint(1) NOT NULL,
  `dvk` tinyint(1) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `setting` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ttcskddvlt`
--

CREATE TABLE `ttcskddvlt` (
  `id` int(10) UNSIGNED NOT NULL,
  `maloaip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qccl` text COLLATE utf8_unicode_ci,
  `sohieu` text COLLATE utf8_unicode_ci,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macskd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ttcskddvlt`
--

INSERT INTO `ttcskddvlt` (`id`, `maloaip`, `loaip`, `qccl`, `sohieu`, `ghichu`, `macskd`, `created_at`, `updated_at`) VALUES
(1, '1464683051', 'Phòng loại I', 'Có ban công nhìn ra biển, có bàn tiếp khách, tivi LCD, có tủ lạnh, có bồn tắm, 2 giường', '101, 103, 104, 105, 107, 106, 110, 112, 201, 202, 203, 205, 207, 208, 209, 210, 211, 212, 213, 214,301, 303, 305, 307, 308, 210, 314, 401, 403, 404, 405, 407, 408, 409, 410, 411, 412, 413, 414, 501, 502, 503, 504, 505, 507, 509, 511, 512, 513, 510, 514', 'Ở tối đa 4 khách', '4200284469-3152016152530', '2016-05-31 08:25:30', '2016-11-08 08:49:43'),
(2, '1464683117', 'Phòng loại II', 'Có ban công nhìn ra biển, có bàn tiếp khách, tivi LCD, có tủ lạnh, có bồn tắm, 1 giường đôi', '206, 306, 406, 506', 'Ở tối đa 2 khách', '4200284469-3152016152530', '2016-05-31 08:25:30', '2016-05-31 08:25:30'),
(3, '1464684424', 'Dexuxe villa - 72 phòng', '', '207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 301, 302, 303, 204, 305, 306, 307, 308, 309, 310, 311, 312, 313, 314, 315, 316, 317, 318, 319, 320, 321, 324, 327, 329, 332, 335, 337, 340, 343, 345, 348, 351, 353, 356, 359, 322, 323, 325, 326, 328, 330, 331, 333, 334, 336, 338, 339, 341, 342, 344, 360, 349, 350, 352, 354, 355, 357, 358, 346, 347', 'Phòng ở tối đa 2 người', '4200619637-3152016155331', '2016-05-31 08:53:31', '2016-05-31 08:53:31'),
(4, '1464684538', 'Ocean Villa- 22 phòng', '', '101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 201, 202, 203, 204, 205, 206', 'Phòng ở tối đa 2 người', '4200619637-3152016155331', '2016-05-31 08:53:31', '2016-05-31 08:53:31'),
(5, '1464684632', 'Family Villa- 16 phòng', '', '219, 220, 221, 222, 223, 224, 225, 226, 227, 228, 229, 230, 231, 232, 233, 234', 'Phòng ở tối đa 2 người', '4200619637-3152016155331', '2016-05-31 08:53:31', '2016-05-31 08:53:31'),
(6, '1464684720', 'Ocean pool Villa - 03 phòng', '', '117, 118, 119', 'Phòng ở tối đa 2 người', '4200619637-3152016155331', '2016-05-31 08:53:31', '2016-05-31 08:53:31'),
(7, '1464746320', 'DELUXE CITY VIEW TWIN', 'Diện tích phòng khoảng 40m2, gồm 2 giường đơn mỗi giường 1m2, nhìn ra hướng phố. Phòng dành cho 2 người Phòng có 2 giường đơn Deluxe City View Twin Deluxe City View Twin Tiện nghi - Dịch vụ trong phòng Bàn làm việc Internet wifi tại sảnh Bồn tắm nằm Internet wifi trong phòng Cửa sổ Két an toàn Dép đi trong phòng Máy sấy tóc Điện thoại Tivi Điện thoại quốc tế Truyền hình cáp - vệ tinh Điều hòa nhiệt độ Tủ lạnh Dụng cụ pha trà / cafe Vòi sen', '', 'Ở 2 người lớn (kèm 1 trẻ em)', 'havana010203-162016935', '2016-06-01 02:03:05', '2016-06-01 02:03:05'),
(8, '1464746385', 'DELUXE OCEAN VIEW', 'Diện tích: 40m2, một số phòng nhìn ra hướng biển, một số khác hướng thành phố. Phòng dành cho 2 người Phòng có 1 giường đôi Deluxe Ocean View Deluxe Ocean View Deluxe Ocean View Tiện nghi - Dịch vụ trong phòng Bồn tắm nằm Internet wifi trong phòng Cửa sổ Két an toàn Dép đi trong phòng Máy sấy tóc Điện thoại Tivi Điện thoại quốc tế Truyền hình cáp - vệ tinh Điều hòa nhiệt độ Tủ lạnh Internet wifi tại sảnh Vòi sen', '', '2 người lớn - 1 trẻ em', 'havana010203-162016935', '2016-06-01 02:03:05', '2016-06-01 02:03:05'),
(9, '1464746439', 'JUNIOR SUITE KING', 'Diện tích: 70m2 (01 bếp và 01 bồn tắm Jacuzzi) Loại giường: 1 giường đôi lớn 2m Hướng: biển Phòng dành cho 2 người Phòng có 1 giường đôi Phòng có thể kê thêm tối đa 1 giường phụ Junior Suite King Junior Suite King Tiện nghi - Dịch vụ trong phòng Bàn làm việc Internet wifi tại sảnh Bồn Jacuzzi Internet wifi trong phòng Cửa sổ (mở được) Két an toàn Dép đi trong phòng Máy sấy tóc Điện thoại Tivi Điện thoại quốc tế Truyền hình cáp - vệ tinh Điều hòa nhiệt độ Tủ lạnh Dụng cụ pha trà / cafe Vòi sen', '', '2 người lớn - 1 trẻ em', 'havana010203-162016935', '2016-06-01 02:03:05', '2016-06-01 02:03:05'),
(10, '1464746498', 'JUNIOR SUITE QUEEN', 'Diện tích: 65m2 (1 bếp) Loại giường: 1 giường đôi 1m8 Hướng: biển Phòng dành cho 2 người Phòng có 1 giường đôi Phòng có thể kê thêm tối đa 1 giường phụ Junior Suite Queen Junior Suite Queen Tiện nghi - Dịch vụ trong phòng Bàn làm việc Internet wifi trong phòng Cửa sổ (mở được) Két an toàn Dép đi trong phòng Máy sấy tóc Điện thoại Phòng tắm đứng Điện thoại quốc tế Tivi Điều hòa nhiệt độ Truyền hình cáp - vệ tinh Dụng cụ pha trà / cafe Tủ lạnh Internet wifi tại sảnh Vòi sen', '', '2 người lớn - 1 trẻ em', 'havana010203-162016935', '2016-06-01 02:03:05', '2016-06-01 02:03:05'),
(11, '1464746558', 'FAMILY SUITE', 'Phòng chỉ ở được tối đa 4 người lớn hoặc 3 người lớn và 1 trẻ em (khi đã ở tối đa như quy định thì không được ở thêm trẻ) Diện tích: 70m2 (01 bếp, 01 tắm đứng và 01 bồn tắm nằm) Loại giường: 1 giường đôi 1m8 và 02 giường đơn mỗi giường 1m2 Hướng: biển Phòng dành cho 4 người Phòng có 1 giường đôi Family Suite Family Suite Family Suite Tiện nghi - Dịch vụ trong phòng Bàn làm việc Internet wifi trong phòng Bồn tắm nằm Két an toàn Cửa sổ (mở được) Máy sấy tóc Dép đi trong phòng Phòng tắm đứng Điện thoại Tivi Điện thoại quốc tế Truyền hình cáp - vệ tinh Điều hòa nhiệt độ Tủ lạnh Dụng cụ pha trà / cafe Vòi sen Internet wifi tại sảnh', '', '', 'havana010203-162016935', '2016-06-01 02:03:05', '2016-06-01 02:03:05'),
(12, '1464747596', 'EXECUTIVE SEAVIEW WITH BACONY', 'Diện tích phòng : 28 m2, Giường : 1 giường đôi / 2 giường đơn, Thêm giường tối đa : 2', '', '', 'Regalia010203-16201692248', '2016-06-01 02:22:49', '2016-06-01 02:22:49'),
(13, '1464747680', 'FAMILY DELUXE CITY VIEW', 'Diện tích phòng : 36 m2, Giường : 1 giường đôi / 2 giường đơn, Thêm giường tối đa : 4', '', '', 'Regalia010203-16201692248', '2016-06-01 02:22:49', '2016-06-01 02:22:49'),
(14, '1464747719', 'FAMILY DELUXE CITY VIEW WITH BACONY', 'Diện tích phòng : 36 m2, Giường : 2 giường đôi, Thêm giường tối đa : 4', '', '', 'Regalia010203-16201692248', '2016-06-01 02:22:49', '2016-06-01 02:22:49'),
(15, '1464747753', 'SUITE SEAVIEW WITH BACONY', 'Diện tích phòng : 45 m2, Giường : 1 giường đôi / 2 giường đơn, Thêm giường tối đa : 2', '', '', 'Regalia010203-16201692248', '2016-06-01 02:22:49', '2016-06-01 02:22:49'),
(16, '1464748752', 'PHÒNG 1 GIƯỜNG ĐÔI (2 KHÁCH)', 'Diện tích phòng : 10 m2, Giường : 1 giường đôi, Thêm giường tối đa : 2', '', '', 'ThienKim010203-16201694010', '2016-06-01 02:40:11', '2016-06-01 02:40:11'),
(17, '1464748796', 'PHÒNG 1 GIƯỜNG ĐÔI + 1 GIƯỜNG ĐƠN (3 KHÁCH)', 'Diện tích phòng : 15 m2, Giường : 1 giường đôi - 1 giường đơn, Thêm giường tối đa : 3', '', '', 'ThienKim010203-16201694010', '2016-06-01 02:40:11', '2016-06-01 02:40:11'),
(18, '1464750215', 'Standard ', 'Diện tích phòng : 18 m2, Giường : 1 giường đôi, Thêm giường tối đa : 2', '', '', 'SenVang010203-16201610447', '2016-06-01 03:04:47', '2016-06-01 03:04:47'),
(19, '1464750277', 'DELUXE ( BALCONY )', 'Diện tích phòng : 20 m2, Giường : 2 giường đôi, Thêm giường tối đa : 4', '', '', 'SenVang010203-16201610447', '2016-06-01 03:04:47', '2016-06-01 03:04:47'),
(20, '1464751989', 'PHÒNG 1 GIƯỜNG', 'Diện tích phòng : 10 m2, Giường : 1 giường đôi, Thêm giường tối đa : 2', '', '', 'TuyetMai010203-162016103423', '2016-06-01 03:34:24', '2016-06-01 03:34:24'),
(21, '1464752027', 'PHÒNG 2 GIƯỜNG', 'Diện tích phòng : 12 m2, Giường : 2 giường đơn, Thêm giường tối đa : 2', '', '', 'TuyetMai010203-162016103423', '2016-06-01 03:34:24', '2016-06-01 03:34:24'),
(22, '1464752059', 'PHÒNG 2 GIƯỜNG HƯỚNG BIỂN', 'Diện tích phòng : 20 m2, Giường : 2 giường đơn, Thêm giường tối đa : 2', '', '', 'TuyetMai010203-162016103423', '2016-06-01 03:34:24', '2016-06-01 03:34:24'),
(23, '1464765765', 'DORM', 'Diện tích phòng : 10 m2, Giường : 1 giường đôi, Thêm giường tối đa : 1', '', '', 'PhoBien010203-162016142424', '2016-06-01 07:24:24', '2016-06-01 07:24:24'),
(24, '1464765804', '2 SINGLE BEDS WITH WINDOW NO SEA VIEW', 'Diện tích phòng : 20 m2, Giường : 2 giường đơn, Thêm giường tối đa : 2', '', '', 'PhoBien010203-162016142424', '2016-06-01 07:24:24', '2016-06-01 07:24:24'),
(25, '1464765847', '3 DOUBLE BEDS WTH BALCONY SEAVIEW', 'Diện tích phòng : 20 m2, Giường : 3 giường đơn, Thêm giường tối đa : 3', '', '', 'PhoBien010203-162016142424', '2016-06-01 07:24:24', '2016-06-01 07:24:24'),
(26, '1478657652', 'Loại I', 'Phòng bé1', '101', 'Chả có gì', 'thanhdat_1478657651', '2016-11-09 02:14:12', '2016-11-09 02:14:12'),
(27, '1478657652', 'Loại II', 'Phòng to1', '102', 'Nhiều tiền', 'thanhdat_1478657651', '2016-11-09 02:14:12', '2016-11-09 02:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `ttphong`
--

CREATE TABLE `ttphong` (
  `id` int(10) UNSIGNED NOT NULL,
  `maloaip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qccl` text COLLATE utf8_unicode_ci,
  `sohieu` text COLLATE utf8_unicode_ci,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ttphong`
--

INSERT INTO `ttphong` (`id`, `maloaip`, `loaip`, `qccl`, `sohieu`, `ghichu`, `masothue`, `created_at`, `updated_at`) VALUES
(3, '1464684424', 'Dexuxe villa - 72 phòng', '', '207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 301, 302, 303, 204, 305, 306, 307, 308, 309, 310, 311, 312, 313, 314, 315, 316, 317, 318, 319, 320, 321, 324, 327, 329, 332, 335, 337, 340, 343, 345, 348, 351, 353, 356, 359, 322, 323, 325, 326, 328, 330, 331, 333, 334, 336, 338, 339, 341, 342, 344, 360, 349, 350, 352, 354, 355, 357, 358, 346, 347', 'Phòng ở tối đa 2 người', '4200619637', '2016-05-31 08:47:04', '2016-05-31 08:47:26'),
(4, '1464684538', 'Ocean Villa- 22 phòng', '', '101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 201, 202, 203, 204, 205, 206', 'Phòng ở tối đa 2 người', '4200619637', '2016-05-31 08:48:58', '2016-05-31 08:51:01'),
(5, '1464684632', 'Family Villa- 16 phòng', '', '219, 220, 221, 222, 223, 224, 225, 226, 227, 228, 229, 230, 231, 232, 233, 234', 'Phòng ở tối đa 2 người', '4200619637', '2016-05-31 08:50:32', '2016-05-31 08:50:32'),
(6, '1464684720', 'Ocean pool Villa - 03 phòng', '', '117, 118, 119', 'Phòng ở tối đa 2 người', '4200619637', '2016-05-31 08:52:00', '2016-05-31 08:52:00'),
(7, '1464746320', 'DELUXE CITY VIEW TWIN', 'Diện tích phòng khoảng 40m2, gồm 2 giường đơn mỗi giường 1m2, nhìn ra hướng phố. Phòng dành cho 2 người Phòng có 2 giường đơn Deluxe City View Twin Deluxe City View Twin Tiện nghi - Dịch vụ trong phòng Bàn làm việc Internet wifi tại sảnh Bồn tắm nằm Internet wifi trong phòng Cửa sổ Két an toàn Dép đi trong phòng Máy sấy tóc Điện thoại Tivi Điện thoại quốc tế Truyền hình cáp - vệ tinh Điều hòa nhiệt độ Tủ lạnh Dụng cụ pha trà / cafe Vòi sen', '', 'Ở 2 người lớn (kèm 1 trẻ em)', 'havana010203', '2016-06-01 01:58:40', '2016-06-01 01:58:40'),
(8, '1464746385', 'DELUXE OCEAN VIEW', 'Diện tích: 40m2, một số phòng nhìn ra hướng biển, một số khác hướng thành phố. Phòng dành cho 2 người Phòng có 1 giường đôi Deluxe Ocean View Deluxe Ocean View Deluxe Ocean View Tiện nghi - Dịch vụ trong phòng Bồn tắm nằm Internet wifi trong phòng Cửa sổ Két an toàn Dép đi trong phòng Máy sấy tóc Điện thoại Tivi Điện thoại quốc tế Truyền hình cáp - vệ tinh Điều hòa nhiệt độ Tủ lạnh Internet wifi tại sảnh Vòi sen', '', '2 người lớn - 1 trẻ em', 'havana010203', '2016-06-01 01:59:45', '2016-06-01 01:59:45'),
(9, '1464746439', 'JUNIOR SUITE KING', 'Diện tích: 70m2 (01 bếp và 01 bồn tắm Jacuzzi) Loại giường: 1 giường đôi lớn 2m Hướng: biển Phòng dành cho 2 người Phòng có 1 giường đôi Phòng có thể kê thêm tối đa 1 giường phụ Junior Suite King Junior Suite King Tiện nghi - Dịch vụ trong phòng Bàn làm việc Internet wifi tại sảnh Bồn Jacuzzi Internet wifi trong phòng Cửa sổ (mở được) Két an toàn Dép đi trong phòng Máy sấy tóc Điện thoại Tivi Điện thoại quốc tế Truyền hình cáp - vệ tinh Điều hòa nhiệt độ Tủ lạnh Dụng cụ pha trà / cafe Vòi sen', '', '2 người lớn - 1 trẻ em', 'havana010203', '2016-06-01 02:00:39', '2016-06-01 02:00:39'),
(10, '1464746498', 'JUNIOR SUITE QUEEN', 'Diện tích: 65m2 (1 bếp) Loại giường: 1 giường đôi 1m8 Hướng: biển Phòng dành cho 2 người Phòng có 1 giường đôi Phòng có thể kê thêm tối đa 1 giường phụ Junior Suite Queen Junior Suite Queen Tiện nghi - Dịch vụ trong phòng Bàn làm việc Internet wifi trong phòng Cửa sổ (mở được) Két an toàn Dép đi trong phòng Máy sấy tóc Điện thoại Phòng tắm đứng Điện thoại quốc tế Tivi Điều hòa nhiệt độ Truyền hình cáp - vệ tinh Dụng cụ pha trà / cafe Tủ lạnh Internet wifi tại sảnh Vòi sen', '', '2 người lớn - 1 trẻ em', 'havana010203', '2016-06-01 02:01:38', '2016-06-01 02:01:38'),
(11, '1464746558', 'FAMILY SUITE', 'Phòng chỉ ở được tối đa 4 người lớn hoặc 3 người lớn và 1 trẻ em (khi đã ở tối đa như quy định thì không được ở thêm trẻ) Diện tích: 70m2 (01 bếp, 01 tắm đứng và 01 bồn tắm nằm) Loại giường: 1 giường đôi 1m8 và 02 giường đơn mỗi giường 1m2 Hướng: biển Phòng dành cho 4 người Phòng có 1 giường đôi Family Suite Family Suite Family Suite Tiện nghi - Dịch vụ trong phòng Bàn làm việc Internet wifi trong phòng Bồn tắm nằm Két an toàn Cửa sổ (mở được) Máy sấy tóc Dép đi trong phòng Phòng tắm đứng Điện thoại Tivi Điện thoại quốc tế Truyền hình cáp - vệ tinh Điều hòa nhiệt độ Tủ lạnh Dụng cụ pha trà / cafe Vòi sen Internet wifi tại sảnh', '', '', 'havana010203', '2016-06-01 02:02:38', '2016-06-01 02:02:38'),
(12, '1464747596', 'EXECUTIVE SEAVIEW WITH BACONY', 'Diện tích phòng : 28 m2, Giường : 1 giường đôi / 2 giường đơn, Thêm giường tối đa : 2', '', '', 'Regalia010203', '2016-06-01 02:19:56', '2016-06-01 02:19:56'),
(13, '1464747680', 'FAMILY DELUXE CITY VIEW', 'Diện tích phòng : 36 m2, Giường : 1 giường đôi / 2 giường đơn, Thêm giường tối đa : 4', '', '', 'Regalia010203', '2016-06-01 02:21:20', '2016-06-01 02:21:20'),
(14, '1464747719', 'FAMILY DELUXE CITY VIEW WITH BACONY', 'Diện tích phòng : 36 m2, Giường : 2 giường đôi, Thêm giường tối đa : 4', '', '', 'Regalia010203', '2016-06-01 02:21:59', '2016-06-01 02:21:59'),
(15, '1464747753', 'SUITE SEAVIEW WITH BACONY', 'Diện tích phòng : 45 m2, Giường : 1 giường đôi / 2 giường đơn, Thêm giường tối đa : 2', '', '', 'Regalia010203', '2016-06-01 02:22:33', '2016-06-01 02:22:33'),
(16, '1464748752', 'PHÒNG 1 GIƯỜNG ĐÔI (2 KHÁCH)', 'Diện tích phòng : 10 m2, Giường : 1 giường đôi, Thêm giường tối đa : 2', '', '', 'ThienKim010203', '2016-06-01 02:39:12', '2016-06-01 02:39:12'),
(17, '1464748796', 'PHÒNG 1 GIƯỜNG ĐÔI + 1 GIƯỜNG ĐƠN (3 KHÁCH)', 'Diện tích phòng : 15 m2, Giường : 1 giường đôi - 1 giường đơn, Thêm giường tối đa : 3', '', '', 'ThienKim010203', '2016-06-01 02:39:56', '2016-06-01 02:39:56'),
(20, '1464751989', 'PHÒNG 1 GIƯỜNG', 'Diện tích phòng : 10 m2, Giường : 1 giường đôi, Thêm giường tối đa : 2', '', '', 'TuyetMai010203', '2016-06-01 03:33:10', '2016-06-01 03:33:10'),
(21, '1464752027', 'PHÒNG 2 GIƯỜNG', 'Diện tích phòng : 12 m2, Giường : 2 giường đơn, Thêm giường tối đa : 2', '', '', 'TuyetMai010203', '2016-06-01 03:33:47', '2016-06-01 03:33:47'),
(22, '1464752059', 'PHÒNG 2 GIƯỜNG HƯỚNG BIỂN', 'Diện tích phòng : 20 m2, Giường : 2 giường đơn, Thêm giường tối đa : 2', '', '', 'TuyetMai010203', '2016-06-01 03:34:19', '2016-06-01 03:34:19'),
(23, '1464765765', 'DORM', 'Diện tích phòng : 10 m2, Giường : 1 giường đôi, Thêm giường tối đa : 1', '', '', 'PhoBien010203', '2016-06-01 07:22:45', '2016-06-01 07:22:45'),
(24, '1464765804', '2 SINGLE BEDS WITH WINDOW NO SEA VIEW', 'Diện tích phòng : 20 m2, Giường : 2 giường đơn, Thêm giường tối đa : 2', '', '', 'PhoBien010203', '2016-06-01 07:23:24', '2016-06-01 07:23:24'),
(25, '1464765847', '3 DOUBLE BEDS WTH BALCONY SEAVIEW', 'Diện tích phòng : 20 m2, Giường : 3 giường đơn, Thêm giường tối đa : 3', '', '', 'PhoBien010203', '2016-06-01 07:24:07', '2016-06-01 07:24:07'),
(26, '1478657583', 'Loại I', 'Phòng bé1', '101', 'Chả có gì', 'thanhdat', '2016-11-09 02:13:03', '2016-11-09 02:13:33'),
(27, '1478657605', 'Loại II', 'Phòng to1', '102', 'Nhiều tiền', 'thanhdat', '2016-11-09 02:13:25', '2016-11-09 02:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sadmin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permission` text COLLATE utf8_unicode_ci,
  `pldv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `phone`, `email`, `status`, `maxa`, `mahuyen`, `level`, `sadmin`, `permission`, `pldv`, `created_at`, `updated_at`) VALUES
(1, 'Minh Trần', 'minhtran', '107e8cf7f2b4531f6b2ff06dbcf94e10', NULL, NULL, 'Kích hoạt', NULL, NULL, 'T', 'ssa', '', NULL, '0000-00-00 00:00:00', '2016-11-07 03:50:55'),
(2, 'Hưởng Vũ', 'huongvu', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, 'Kích hoạt', NULL, NULL, 'T', NULL, '', NULL, '0000-00-00 00:00:00', '2016-06-13 02:12:02'),
(3, 'Quản trị hệ thống', 'sa', 'e10adc3949ba59abbe56e057f20f883e', '', '', 'Kích hoạt', NULL, NULL, 'T', 'sa', '', NULL, '0000-00-00 00:00:00', '2016-06-13 02:12:02'),
(4, 'Công ty TNHH Thành Đạt', 'congtytnhhthanhdat', 'e10adc3949ba59abbe56e057f20f883e', '', '', 'Kích hoạt', NULL, '4200284469', 'DVLT', NULL, '{"dvlt":{"index":"1","create":"1","edit":"1","delete":"1"},"kkdvlt":{"index":"1","create":"1","edit":"1","delete":"1","approve":"1"}}', 'DVLT', '2016-05-31 08:16:40', '2016-11-08 02:52:43'),
(5, 'Công ty cổ phần xe khách Phương Trang', 'ctphuongtrang', 'e10adc3949ba59abbe56e057f20f883e', '', '', 'Kích hoạt', NULL, '0312241579', 'DVVT', NULL, '', 'DVVT', '2016-05-31 08:33:17', '2016-06-13 02:08:10'),
(6, 'Công ty TNHH Hồ Tiên', 'congtytnhhhotien', 'e10adc3949ba59abbe56e057f20f883e', '058.3553333', NULL, 'Kích hoạt', NULL, '4200619637', 'DVLT', NULL, '', 'DVLT', '2016-05-31 08:39:18', '2016-06-13 02:12:24'),
(7, 'Công ty TNHH Havana', 'congtytnhhhavana', 'e10adc3949ba59abbe56e057f20f883e', '05113991201', NULL, 'Kích hoạt', NULL, 'havana010203', 'DVLT', NULL, '', 'DVLT', '2016-06-01 01:54:24', '2016-06-13 02:12:24'),
(8, 'Công ty TNHH Regalia', 'congtytnhhregalia', 'e10adc3949ba59abbe56e057f20f883e', '058 2121241212', NULL, 'Kích hoạt', NULL, 'Regalia010203', 'DVLT', NULL, '', 'DVLT', '2016-06-01 02:17:18', '2016-06-13 02:12:24'),
(9, 'Công ty TNHH Thiên Kim', 'congtytnhhthienkim', 'e10adc3949ba59abbe56e057f20f883e', '058 3232323232', NULL, 'Kích hoạt', NULL, 'ThienKim010203', 'DVLT', NULL, '', 'DVLT', '2016-06-01 02:37:07', '2016-06-13 02:12:24'),
(10, 'Công ty TNHH Sen Vàng', 'congtytnhhsenvang', 'e10adc3949ba59abbe56e057f20f883e', '058 43432342', NULL, 'Kích hoạt', NULL, 'SenVang010203', 'DVLT', NULL, '', 'DVLT', '2016-06-01 03:01:07', '2016-06-13 02:12:24'),
(11, 'Công ty TNHH Tuyết Mai', 'congtytnhhtuyetmai', 'e10adc3949ba59abbe56e057f20f883e', '058 3242432423', NULL, 'Kích hoạt', NULL, 'TuyetMai010203', 'DVLT', NULL, '', 'DVLT', '2016-06-01 03:30:45', '2016-06-13 02:12:24'),
(12, 'Công ty TNHH Phố Biển', 'congtytnhhphobien', 'e10adc3949ba59abbe56e057f20f883e', '058 999999232', NULL, 'Kích hoạt', NULL, 'PhoBien010203', 'DVLT', NULL, '', 'DVLT', '2016-06-01 07:21:18', '2016-06-13 02:12:24'),
(13, 'Công ty TNHH dịch vụ vận tải Hoàng Kim', 'ctyhoangkim', '202cb962ac59075b964b07152d234b70', '0918.846.934', NULL, 'Kích hoạt', NULL, '0422541867', 'DVVT', NULL, '', 'DVVT', '2016-06-02 01:43:05', '2016-06-02 01:43:05'),
(14, 'Công ty cổ phẩn thương mại & vận tải Việt Trung', 'ctyviettrung', '202cb962ac59075b964b07152d234b70', '04 36871510', NULL, 'Kích hoạt', NULL, '7984523197', 'DVVT', NULL, '{"dvvtch":{"index":"1","create":"1","edit":"1","delete":"1"},"kkdvvtch":{"index":"1","create":"1","edit":"1","delete":"1","approve":"1"}}', 'DVVT', '2016-06-02 01:47:49', '2016-11-08 02:51:57'),
(15, 'Công Ty TNHH Thương Mại Dịch Vụ Vận Tải Toàn Việt', 'congtytoanviet', 'e10adc3949ba59abbe56e057f20f883e', '04 397865432', NULL, 'Kích hoạt', NULL, 'ToanViet010203', 'DVVT', NULL, '', 'DVVT', '2016-06-02 02:04:31', '2016-06-02 02:04:31'),
(16, 'Công ty TNHH vận tải Kim Cương', 'ctykimcuong', '202cb962ac59075b964b07152d234b70', '0466.586.111', NULL, 'Kích hoạt', NULL, '0106900498', 'DVVT', NULL, '', 'DVVT', '2016-06-02 03:58:40', '2016-06-02 03:58:40'),
(17, 'Công ty TNHH thương mại và dịch vụ Thái Gia', 'ctythaigia', '202cb962ac59075b964b07152d234b70', '0913071747', NULL, 'Kích hoạt', NULL, '0526915521', 'DVVT', NULL, '', 'DVVT', '2016-06-02 07:18:22', '2016-06-02 07:18:22'),
(18, 'Công ty TNHH Quyền Hưng', 'ctyquyenhung', '202cb962ac59075b964b07152d234b70', '03.818.357', NULL, 'Kích hoạt', NULL, '0626915598', 'DVVT', NULL, '', 'DVVT', '2016-06-02 07:39:16', '2016-06-02 07:39:16'),
(19, 'Công ty TNHH vận tải Ngọc Phương Huy', 'ctyphuonghuy', '202cb962ac59075b964b07152d234b70', '(08) 35925288', NULL, 'Kích hoạt', NULL, '0412241721', 'DVVT', NULL, '', 'DVVT', '2016-06-02 07:44:22', '2016-06-02 07:44:22'),
(20, 'Công Ty TNHH MTV Mạnh Cường Quân', 'ctymanhcuong', '202cb962ac59075b964b07152d234b70', '(04) 35925288', NULL, 'Kích hoạt', NULL, '462457124', 'DVVT', NULL, '', 'DVVT', '2016-06-02 07:48:31', '2016-06-02 07:48:31'),
(21, 'Công Ty TNHH Một Thành Viên Thương Mại Giao Nhận Vận Tải Huệ Duy', 'ctyduyhue', '202cb962ac59075b964b07152d234b70', '(08) 35901824', NULL, 'Kích hoạt', NULL, '0127415796', 'DVVT', NULL, '', 'DVVT', '2016-06-02 07:54:36', '2016-06-02 07:54:36'),
(24, 'thanhdat', 'thanhdat1', 'e10adc3949ba59abbe56e057f20f883e', '', '', 'Kích hoạt', NULL, '4200284469', 'DVLT', NULL, '', 'DVLT', '2016-06-13 03:08:20', '2016-06-13 03:08:20'),
(26, 'Công ty TNHH phát triển PM Cuộc Sống', 'cuocsong', 'e10adc3949ba59abbe56e057f20f883e', '', NULL, 'Kích hoạt', NULL, '0102030405', 'DVLT', NULL, '', 'DVLT', '2016-06-17 09:03:21', '2016-06-18 03:42:57'),
(27, 'Công ty TNHH MInh CHâu', 'minhchau', 'e10adc3949ba59abbe56e057f20f883e', '', NULL, 'Chưa kích hoạt', NULL, '0909080821', 'DVVT', NULL, '', 'DVVT', '2016-06-17 09:11:25', '2016-06-17 09:12:05'),
(28, 'Đơn vị 1', 'donvi1', '900150983cd24fb0d6963f7d28e17f72', NULL, NULL, 'Kích hoạt', NULL, 'MST001', 'DVVT', NULL, '', 'DVVT', '2016-06-20 03:20:03', '2016-06-20 03:20:03'),
(29, 'Đơn vị 2', 'donvi2', '900150983cd24fb0d6963f7d28e17f72', NULL, NULL, 'Kích hoạt', NULL, 'MST002', 'DVVT', NULL, '', 'DVVT', '2016-06-20 03:20:03', '2016-06-20 03:20:03'),
(30, 'Đơn vị 3', 'donvi3', '900150983cd24fb0d6963f7d28e17f72', NULL, NULL, 'Kích hoạt', NULL, 'MST003', 'DVVT', NULL, '', 'DVVT', '2016-06-20 03:20:03', '2016-06-20 03:20:03'),
(31, 'Đơn vị 4', 'donvi4', '900150983cd24fb0d6963f7d28e17f72', NULL, NULL, 'Kích hoạt', NULL, 'MST004', 'DVVT', NULL, '', 'DVVT', '2016-06-20 03:20:03', '2016-06-20 03:20:03'),
(32, 'Đơn vị 5', 'donvi5', '900150983cd24fb0d6963f7d28e17f72', NULL, NULL, 'Kích hoạt', NULL, 'MST005', 'DVVT', NULL, '', 'DVVT', '2016-06-20 03:20:03', '2016-06-20 03:20:03'),
(33, 'Đơn vị 6', 'donvi6', '900150983cd24fb0d6963f7d28e17f72', NULL, NULL, 'Kích hoạt', NULL, 'MST006', 'DVVT', NULL, '', 'DVVT', '2016-06-20 03:20:03', '2016-06-20 03:20:03'),
(34, 'Đơn vị 7', 'donvi7', '900150983cd24fb0d6963f7d28e17f72', NULL, NULL, 'Kích hoạt', NULL, 'MST007', 'DVVT', NULL, '', 'DVVT', '2016-06-20 03:20:03', '2016-06-20 03:20:03'),
(35, 'Đơn vị 8', 'donvi8', '900150983cd24fb0d6963f7d28e17f72', NULL, NULL, 'Kích hoạt', NULL, 'MST008', 'DVVT', NULL, '', 'DVVT', '2016-06-20 03:20:03', '2016-06-20 03:20:03'),
(36, 'Đơn vị 9', 'donvi9', '900150983cd24fb0d6963f7d28e17f72', NULL, NULL, 'Kích hoạt', NULL, 'MST009', 'DVVT', NULL, '', 'DVVT', '2016-06-20 03:20:04', '2016-06-20 03:20:04'),
(37, 'Đơn vị 10', 'donvi10', '900150983cd24fb0d6963f7d28e17f72', NULL, NULL, 'Kích hoạt', NULL, 'MST010', 'DVVT', NULL, '', 'DVVT', '2016-06-20 03:20:04', '2016-06-20 03:20:04'),
(38, 'Đơn vị 11', 'donvi11', '900150983cd24fb0d6963f7d28e17f72', NULL, NULL, 'Kích hoạt', NULL, 'MST011', 'DVVT', NULL, '', 'DVVT', '2016-06-20 03:20:04', '2016-06-20 03:20:04'),
(39, 'Đơn vị 12', 'donvi12', '900150983cd24fb0d6963f7d28e17f72', NULL, NULL, 'Kích hoạt', NULL, 'MST012', 'DVVT', NULL, '', 'DVVT', '2016-06-20 03:20:04', '2016-06-20 03:20:04'),
(40, 'Đơn vị 13', 'donvi13', '900150983cd24fb0d6963f7d28e17f72', NULL, NULL, 'Kích hoạt', NULL, 'MST013', 'DVVT', NULL, '', 'DVVT', '2016-06-20 03:20:04', '2016-06-20 03:20:04'),
(41, 'Đơn vị 14', 'donvi14', '900150983cd24fb0d6963f7d28e17f72', NULL, NULL, 'Kích hoạt', NULL, 'MST014', 'DVVT', NULL, '', 'DVVT', '2016-06-20 03:20:04', '2016-06-20 03:20:04'),
(42, 'Đơn vị 15', 'donvi15', '900150983cd24fb0d6963f7d28e17f72', NULL, NULL, 'Kích hoạt', NULL, 'MST015', 'DVVT', NULL, '', 'DVVT', '2016-06-20 03:20:04', '2016-06-20 03:20:04'),
(46, 'Công ty CS', 'cs', 'e10adc3949ba59abbe56e057f20f883e', '', NULL, 'Chưa kích hoạt', NULL, '0987654321', 'DVVT', NULL, '', 'DVVT', '2016-06-22 02:47:37', '2016-06-22 02:47:37'),
(47, 'thanhdat', 'thanhdat', 'e10adc3949ba59abbe56e057f20f883e', 'Số DT', 'eami', 'Kích hoạt', NULL, 'thanhdat', 'DVLT', NULL, NULL, NULL, '2016-11-08 07:30:06', '2016-11-08 07:30:06'),
(48, 'thanhdat', 'thanhdatvt', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Email', 'Kích hoạt', NULL, 'thanhdat', 'DVVT', NULL, NULL, NULL, '2016-11-08 07:32:20', '2016-11-08 07:32:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cbkkdvvtkhac`
--
ALTER TABLE `cbkkdvvtkhac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cbkkdvvtxb`
--
ALTER TABLE `cbkkdvvtxb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cbkkdvvtxk`
--
ALTER TABLE `cbkkdvvtxk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cbkkdvvtxtx`
--
ALTER TABLE `cbkkdvvtxtx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cbkkgdvlt`
--
ALTER TABLE `cbkkgdvlt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cskddvlt`
--
ALTER TABLE `cskddvlt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dmdvvtkhac`
--
ALTER TABLE `dmdvvtkhac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dmdvvtxb`
--
ALTER TABLE `dmdvvtxb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dmdvvtxk`
--
ALTER TABLE `dmdvvtxk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dmdvvtxtx`
--
ALTER TABLE `dmdvvtxtx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dndvlt`
--
ALTER TABLE `dndvlt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donvidvvt`
--
ALTER TABLE `donvidvvt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donvi_temp`
--
ALTER TABLE `donvi_temp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `donvi_temp_username_unique` (`username`);

--
-- Indexes for table `general-configs`
--
ALTER TABLE `general-configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kkdvvtkhac`
--
ALTER TABLE `kkdvvtkhac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kkdvvtkhacct`
--
ALTER TABLE `kkdvvtkhacct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kkdvvtkhacctdf`
--
ALTER TABLE `kkdvvtkhacctdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kkdvvtxb`
--
ALTER TABLE `kkdvvtxb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kkdvvtxbct`
--
ALTER TABLE `kkdvvtxbct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kkdvvtxbctdf`
--
ALTER TABLE `kkdvvtxbctdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kkdvvtxk`
--
ALTER TABLE `kkdvvtxk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kkdvvtxkct`
--
ALTER TABLE `kkdvvtxkct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kkdvvtxkctdf`
--
ALTER TABLE `kkdvvtxkctdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kkdvvtxtx`
--
ALTER TABLE `kkdvvtxtx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kkdvvtxtxct`
--
ALTER TABLE `kkdvvtxtxct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kkdvvtxtxctdf`
--
ALTER TABLE `kkdvvtxtxctdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kkgdvlt`
--
ALTER TABLE `kkgdvlt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kkgdvltct`
--
ALTER TABLE `kkgdvltct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kkgdvltctdf`
--
ALTER TABLE `kkgdvltctdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagdvvtkhac`
--
ALTER TABLE `pagdvvtkhac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagdvvtkhac_temp`
--
ALTER TABLE `pagdvvtkhac_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagdvvtxb`
--
ALTER TABLE `pagdvvtxb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagdvvtxb_temp`
--
ALTER TABLE `pagdvvtxb_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagdvvtxk`
--
ALTER TABLE `pagdvvtxk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagdvvtxk_temp`
--
ALTER TABLE `pagdvvtxk_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagdvvtxtx`
--
ALTER TABLE `pagdvvtxtx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagdvvtxtx_temp`
--
ALTER TABLE `pagdvvtxtx_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ttcskddvlt`
--
ALTER TABLE `ttcskddvlt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ttphong`
--
ALTER TABLE `ttphong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cbkkdvvtkhac`
--
ALTER TABLE `cbkkdvvtkhac`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cbkkdvvtxb`
--
ALTER TABLE `cbkkdvvtxb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cbkkdvvtxk`
--
ALTER TABLE `cbkkdvvtxk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cbkkdvvtxtx`
--
ALTER TABLE `cbkkdvvtxtx`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cbkkgdvlt`
--
ALTER TABLE `cbkkgdvlt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cskddvlt`
--
ALTER TABLE `cskddvlt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `dmdvvtkhac`
--
ALTER TABLE `dmdvvtkhac`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `dmdvvtxb`
--
ALTER TABLE `dmdvvtxb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dmdvvtxk`
--
ALTER TABLE `dmdvvtxk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `dmdvvtxtx`
--
ALTER TABLE `dmdvvtxtx`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `dndvlt`
--
ALTER TABLE `dndvlt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `donvidvvt`
--
ALTER TABLE `donvidvvt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `donvi_temp`
--
ALTER TABLE `donvi_temp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `general-configs`
--
ALTER TABLE `general-configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kkdvvtkhac`
--
ALTER TABLE `kkdvvtkhac`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kkdvvtkhacct`
--
ALTER TABLE `kkdvvtkhacct`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `kkdvvtkhacctdf`
--
ALTER TABLE `kkdvvtkhacctdf`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `kkdvvtxb`
--
ALTER TABLE `kkdvvtxb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kkdvvtxbct`
--
ALTER TABLE `kkdvvtxbct`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kkdvvtxbctdf`
--
ALTER TABLE `kkdvvtxbctdf`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kkdvvtxk`
--
ALTER TABLE `kkdvvtxk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kkdvvtxkct`
--
ALTER TABLE `kkdvvtxkct`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `kkdvvtxkctdf`
--
ALTER TABLE `kkdvvtxkctdf`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `kkdvvtxtx`
--
ALTER TABLE `kkdvvtxtx`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kkdvvtxtxct`
--
ALTER TABLE `kkdvvtxtxct`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kkdvvtxtxctdf`
--
ALTER TABLE `kkdvvtxtxctdf`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `kkgdvlt`
--
ALTER TABLE `kkgdvlt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kkgdvltct`
--
ALTER TABLE `kkgdvltct`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `kkgdvltctdf`
--
ALTER TABLE `kkgdvltctdf`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `pagdvvtkhac`
--
ALTER TABLE `pagdvvtkhac`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagdvvtkhac_temp`
--
ALTER TABLE `pagdvvtkhac_temp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagdvvtxb`
--
ALTER TABLE `pagdvvtxb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagdvvtxb_temp`
--
ALTER TABLE `pagdvvtxb_temp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagdvvtxk`
--
ALTER TABLE `pagdvvtxk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagdvvtxk_temp`
--
ALTER TABLE `pagdvvtxk_temp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ttcskddvlt`
--
ALTER TABLE `ttcskddvlt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `ttphong`
--
ALTER TABLE `ttphong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
