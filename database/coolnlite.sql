-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 07:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coolnlite`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `id` int(11) NOT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`id`, `img`, `name`, `address`, `phone`, `time`) VALUES
(14, '/uploads/agency/70c75b6662ba4fd033afc35221320259.jpg', ' 68 Workshop', 'Đường Lạc Hồng Nối Dài, khu phố Phi Kinh, phường Vĩnh Hiệp, thành phố Rạch Giá, tỉnh Kiên Giang.', '0981852352', '2022-06-03 17:03:32'),
(15, '/uploads/agency/add69b6668cb324ddce42fe273a18f17.jpg', ' Khắc Trung Ô Tô', '04 Lô X, đường 65, phường Tân Phong, Quận 7, TPHCM.', '0944223443', '2022-06-03 17:04:34'),
(16, '/uploads/agency/66c6800059abfb84b94f5426f80fe0e1.jpg', ' Quốc Long Auto', 'Số 559, đường Phạm Ngọc Thạch, khu phố 5, phường Phú Mỹ, thành phố Thủ Dầu Một, tỉnh Bình Dương.', '0908313929', '2022-06-03 17:05:00'),
(17, '/uploads/agency/ee0c59d7005048a85bdc77bc0b55aa05.jpg', ' N Auto Spa', 'Số 261, đường Lào Cai, phường Chánh Nghĩa, thành phố Thủ Dầu Một, tỉnh Bình Dương.', '0946383896', '2022-06-03 17:05:45'),
(18, '/uploads/agency/b01207d585c04389e0b586a61625fbca.jpg', ' Panther 4X4', 'Số 19, đường 03, khu phố 7, phường Hiệp Bình Chánh, thành phố Thủ Đức, TPHCM', '0938335339', '2022-06-03 17:06:17'),
(19, '/uploads/agency/417c5d7884303bb837a1136533fdd04d.jpg', ' 4CAR Workshop', 'Số 351 Bình Lợi, Phường 13, Quận Bình Thạnh, TPHCM', '0907412666', '2022-06-03 17:06:43'),
(20, '/uploads/agency/6d9110524d71fefb74ccfec315846a6b.jpg', ' PRO Auto', '245 - 245A Phan Văn Hớn, Phường Tân Thới Nhất, Quận 12, Tp Hồ Chí Minh', '0906668404', '2022-06-03 17:07:08'),
(21, '/uploads/agency/3fdcc36b6f4547c6c71783cdfc43b208.jpg', ' Rồng Việt Ô Tô', 'Số 863, đường 30/4, Phường 11, thành phố Vũng Tàu, tỉnh Bà Rịa - Vũng Tàu', '9038639999', '2022-06-03 17:07:34'),
(22, '/uploads/agency/1e93090d0955e2670cc34e91d0633c50.jpg', ' LV Car Care', 'Ô 86 Lô DC79, đường DA6, KDC Việt Sing, khu phố Hoà Lân 2, phường Thuận Giao, thành phố Thuận An, tỉnh Bình Dương.', '976911949', '2022-06-03 17:07:55'),
(23, '/uploads/agency/2b7ee164ec6deb04d09061fe0cd98d83.jpg', ' Bảo Huy Auto', 'Số 1, đường Trường Chinh, khu phố 5, Phường 3, thành phố Tây Ninh, tỉnh Tây Ninh.', '0944228122', '2022-06-03 17:08:21'),
(24, '/uploads/agency/c0dfa563435432513d7110d0e8096da9.jpg', ' Tòng Dũng Auto', 'Thửa 52 Trần Nguyên Đán, phường Đông Xuyên,  thành phố Long Xuyên, tỉnh An Giang.', '0888444445', '2022-06-03 17:08:45'),
(25, '/uploads/agency/dfb3849f51e8e98f558ac8ac77716ff7.jpg', ' AutoBis', 'Đường Tam Đảo, Phường 14, Quận 10, Thành phố Hồ Chí Minh', '0908888191', '2022-06-03 17:09:10'),
(26, '/uploads/agency/d9968f2075b1d5b82b4ec1406ad155b2.jpg', ' CCMFast', 'Số 42 Quốc lộ 22, ấp Chợ, xã Tân Phú Trung, huyện Củ Chi, TPHCM.', '0123456789', '2022-06-03 17:10:55'),
(27, '/uploads/agency/bc149d60b69bf0ab34f6f4d4ce873a80.jpg', ' Nam Khanh Auto', 'Lô D3-31 đường Hoàng Diệu, khu đô thị mới Nam Lê Lợi, phường Nghĩa Lộ, thành phố Quảng Ngãi, tỉnh Quảng Ngãi', '0704767676', '2022-06-03 17:11:22'),
(28, '/uploads/agency/5a61a9d65071775a51ca82ca5c853575.jpg', ' Tony Car Workshop ', 'Số 448 - 450 đường 2 tháng 9, thành phố Đà Nẵng, tỉnh Đà Nẵng', '0905675161', '2022-06-03 17:11:42'),
(29, '/uploads/agency/f9d6110d9cf220db266c9218da4cdef3.jpg', ' Sapa Boss ', 'Số 351 Lê Duẫn, phường Đông Lễ, thành phố Đông Hà, tỉnh Quảng Trị', '0949802777', '2022-06-03 17:12:01'),
(30, '/uploads/agency/98ab881177b5602413be714030614014.jpg', ' Dung Thông II', 'Số 396 đường 23 tháng 10, xã Vĩnh Hiệp, thành phố Nha Trang, tỉnh Khánh Hoà', '0906078747', '2022-06-03 17:12:19'),
(31, '/uploads/agency/698b13576d8cb1976c1dc1eff6ee24c7.jpg', ' Nhất Trung Auto - Phan Thiết', 'Số 313 Trần Hưng Đạo, thành phố Phan Thiết, tỉnh Bình Thuận', '0838191919', '2022-06-03 17:12:41'),
(32, '/uploads/agency/14ebb2278df8f756e6358f48c5e2080e.jpg', ' Hiếu Auto', '264 Quang Trung, thành phố Đồng Hới, tỉnh Quảng Bình', '0123456789', '2022-06-03 17:13:10'),
(33, '/uploads/agency/ff5e964b4362d3f75b2a0551dbd58f11.jpg', ' BMC Workshop', '02 Hoàng Minh Thảo, phường Tân An, thành phố Buôn Mê Thuột, tỉnh Đắk Lắk ', '0868884747', '2022-06-03 17:13:29'),
(34, '/uploads/agency/7149f0e40ba8b788b53b3e873fe1e39d.jpg', ' Hừng Phát Auto', 'Số 26 Lý Thái Tổ, phường Tân An, thành phố Buôn Mê Thuột, tỉnh Đắk Lắk', '0908068377', '2022-06-03 17:13:50'),
(35, '/uploads/agency/97aecc7a306621e9764b804735f86958.jpg', ' KTF Auto', 'Số 210 Nguyễn Công Trứ, phường 8, thành phố Đà Lạt, tỉnh Lâm Đồng', '0988717952', '2022-06-03 17:14:09'),
(36, '/uploads/agency/bafa3816a9fb8d4d9d102c8e14437981.jpg', ' Chung Auto', 'Số 10/80 Thiên Hiền, quận Mỹ Đình, Hà Nội', '0927626888', '2022-06-03 17:14:28'),
(37, '/uploads/agency/d48fd152f4b65984f58d885d848869b6.jpg', ' Combo Tuning', 'Số 142 phố Phú Viên, phường Bồ Đề, quận Long Biên, Hà Nội', '0904381379', '2022-06-03 17:14:45'),
(38, '/uploads/agency/33178ecd016f2248d9f78315cc555d86.jpg', ' Oto Pro ', 'Số 35 đường Thanh Bình, phường Mộ Lao, quận Hà Đông, Hà Nội', '0919294895', '2022-06-03 17:15:11'),
(39, '/uploads/agency/832b4c59886a85875a4d995550260795.jpg', ' Làm Xe Chất', 'Số 15, đường Võ Chí Công, phường Nghĩa Đô, quận Cầu Giấy, Hà Nội', '0906274724', '2022-06-03 17:15:28'),
(40, '/uploads/agency/fc78d41f86328cc5df49a78fd191d0e0.jpg', ' Lan Hà Auto', 'Đường Phạm Bạch Hổ, Hiến Nam, thành phố Hưng Yên, tỉnh Hưng Yên', '0975442552', '2022-06-03 17:15:47'),
(41, '/uploads/agency/8ac75dd8a5181002958e162060e673e9.jpg', ' Garage độ xe TMT ', '378F Lê Thánh Tông, huyện Ngô Quyền, thành phố Hải Phòng, tỉnh Hải Phòng.', '0901566789', '2022-06-03 17:16:09'),
(42, '/uploads/agency/d509d8cb873952b01b15b4b59896b14a.jpg', ' Nguyễn Tài Auto ', '39 Đường Hoàng Hoa Thám, Phường Võ Cường, Thành phố Bắc Ninh, Tỉnh Bắc Ninh', '0933999636', '2022-06-03 17:16:28'),
(43, '/uploads/agency/2eb7f744f1268ceba3edfda8d77587b1.jpg', ' Huy Auto', 'Số 913, tổ 2, khu 10, phường Bãi Cháy, thành phố Hạ Long, tỉnh Quảng Ninh', '0904808588', '2022-06-03 17:16:48');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `full_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `models` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `full_name`, `tel`, `models`, `area`, `message`, `time`) VALUES
(34, ' Nguyễn Văn A', '0971738344', 'SUV', 'Bình Phước', 'Sáng sớm ăn cơm ở nhà', '2022-05-18 14:37:52'),
(35, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:02:18'),
(36, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:05:00'),
(37, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:05:04'),
(38, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:05:07'),
(39, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:05:10'),
(40, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:05:13'),
(41, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:06:44'),
(42, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:06:47'),
(43, ' Nguyễn Văn A', '0971738344', 'Sedan', 'Bình Phước', '', '2022-05-20 10:07:02'),
(44, ' Nguyễn Văn A', '0971738344', 'Sedan', 'Bình Phước', 'gggggg', '2022-05-20 10:07:08'),
(45, ' Nguyễn Văn A', '0971738344', 'Crossover - CUV', 'Bình Phước', 'Text', '2022-05-20 10:07:41'),
(46, ' Nguyễn Văn A', '0971738344', 'Crossover - CUV', 'Bình Phước', '', '2022-05-20 10:09:32'),
(47, ' Nguyễn Văn B', '0971738344', 'Convertible', 'Tp Hồ Chí Minh', '', '2022-05-20 10:10:23'),
(48, ' Nguyễn Văn A', '0971738344', 'SUV', 'Tp Cần Thơ', '', '2022-05-20 10:11:01'),
(49, ' Nguyễn Văn A', '0971738344', 'SUV', 'Tp Cần Thơ', '', '2022-05-20 10:11:01'),
(50, ' Nguyễn Văn A', '0971738344', 'Sedan', 'Bình Phước', '', '2022-05-20 10:07:02'),
(51, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:06:47'),
(52, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:05:10'),
(53, ' Nguyễn Alo', '0971888888', 'Hatchback', 'Bình Định', '', '2022-05-20 16:49:55'),
(54, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:05:10'),
(55, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:06:47'),
(56, 'Lê Thị Hương', '0973664167', '', 'Bình Định', 'Tôi là ai', '2022-05-20 16:52:07'),
(57, 'Lê Thị Hương', '0973664167', '', 'Bình Định', 'Tôi là ai', '2022-05-20 16:52:21'),
(58, ' Nguyễn Văn A', '0971738344', 'Crossover - CUV', 'Bình Phước', '', '2022-05-20 10:09:32'),
(59, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:05:10'),
(60, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:05:10'),
(61, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:06:47'),
(62, ' Nguyễn Alo', '0971888888', 'Hatchback', 'Bình Định', '', '2022-05-20 16:49:55'),
(63, 'Lê Thị Hương', '0973664167', '', 'Bình Định', 'Tôi là ai', '2022-05-20 16:52:07'),
(64, 'Lê Thị Hương', '0973664167', '', 'Bình Định', 'Tôi là ai', '2022-05-20 16:52:07'),
(65, 'Lê Thị Hương', '0973664167', '', 'Bình Định', 'Tôi là ai', '2022-05-20 16:52:21'),
(66, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:05:10'),
(67, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:05:00'),
(68, ' Nguyễn Văn A', '0971738344', 'SUV', 'Bình Phước', 'Sáng sớm ăn cơm ở nhà', '2022-05-18 14:37:52'),
(69, ' Nguyễn Văn A', '0971738344', 'SUV', 'Tp Cần Thơ', '', '2022-05-20 10:11:01'),
(70, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:06:47'),
(71, ' Nguyễn Văn B', '0971738344', 'Convertible', 'Tp Hồ Chí Minh', '', '2022-05-20 10:10:23'),
(72, ' Nguyễn Văn A', '0971738344', 'SUV', 'Bình Phước', 'Sáng sớm ăn cơm ở nhà', '2022-05-18 14:37:52'),
(73, ' Nguyễn Văn A', '0971738344', 'SUV', 'Tp Cần Thơ', '', '2022-05-20 10:11:01'),
(74, ' Nguyễn Văn A', '0971738344', 'SUV', 'Bình Phước', 'Sáng sớm ăn cơm ở nhà', '2022-05-18 14:37:52'),
(75, ' Lê Long Đỉnh', '0971234323', 'Coupe', 'Bến Tre', 'Mẫu tin thử nghiệm', '2022-05-20 17:21:17'),
(76, 'Lê Thị Hương', '0973664167', '', 'Bình Định', 'Tôi là ai', '2022-05-20 16:52:07'),
(77, ' Lê Long Đỉnh', '0971234323', 'Hatchback', 'Bình Dương', 'Tôi đang thử nghiệm form', '2022-05-20 17:22:52'),
(78, ' Lê Long Đỉnh', '0971234323', 'Hatchback', 'Bình Dương', 'Tôi đang thử nghiệm form', '2022-05-20 17:22:52'),
(79, 'Lê Thị Hương', '0973664167', '', 'Bình Định', 'Tôi là ai', '2022-05-20 16:52:07'),
(80, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:06:47'),
(81, ' Lê Long Đỉnh', '0971234323', 'Coupe', 'Bến Tre', 'Mẫu tin thử nghiệm thôi mà', '2022-05-20 17:21:17'),
(82, ' Lê Long Đỉnh', '0971234323', 'Coupe', 'Bến Tre', 'Mẫu tin thử nghiệm thôi mà', '2022-05-20 17:21:17'),
(83, ' Lê Long Đỉnh', '0971234323', 'Hatchback', 'Bình Dương', 'Tôi đang thử nghiệm form', '2022-05-20 17:22:52'),
(84, ' Nguyễn Văn A', '0971738344', 'SUV', 'Bình Phước', 'Sáng sớm ăn cơm ở nhà', '2022-05-18 14:37:52'),
(85, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:05:10'),
(86, 'Lê Thị Hương', '0973664167', '', 'Bình Định', 'Tôi là ai, vì sao mọi người làm như thế', '2022-05-20 16:52:07'),
(87, ' Lê Long Đỉnh', '0971234323', 'Coupe', 'Bến Tre', 'Mẫu tin thử nghiệm thôi mà', '2022-05-20 17:21:17'),
(88, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:05:10'),
(89, ' Lê Long Đỉnh', '0971234323', 'Coupe', 'Bến Tre', 'Mẫu tin thử nghiệm thôi mà', '2022-05-20 17:21:17'),
(90, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:05:10'),
(91, ' Nguyễn Văn A', '0971738344', 'SUV', 'Bình Phước', 'Sáng sớm ăn cơm ở nhà', '2022-05-18 14:37:52'),
(92, ' Lê Long Đỉnh', '0971234323', 'Hatchback', 'Bình Dương', 'Tôi đang thử nghiệm form', '2022-05-20 17:22:52'),
(93, ' Lê Long Đỉnh', '0971234323', 'Hatchback', 'Bình Dương', 'Tôi đang thử nghiệm form', '2022-05-20 17:22:52'),
(94, ' Lê Thị Bình', '0921738555', 'Sedan', 'Cao Bằng', '', '2022-05-21 21:09:16'),
(96, ' Lê Thị Bình', '0921738555', 'Sedan', 'Cao Bằng', '', '2022-05-21 21:09:16'),
(97, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:05:10'),
(98, ' Lê Long Đỉnh', '0971234323', 'Coupe', 'Bến Tre', 'Mẫu tin thử nghiệm thôi mà', '2022-05-20 17:21:17'),
(99, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:05:10'),
(100, ' Lê Thị Bình', '0921738555', 'Sedan', 'Cao Bằng', '', '2022-05-21 21:09:16'),
(101, ' Nguyễn Văn A', '0971738344', 'SUV', 'Bình Phước', 'Sáng sớm ăn cơm ở nhà', '2022-05-18 14:37:52'),
(102, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 10:05:10'),
(103, ' Nguyễn Văn A', '0971738344', 'SUV', 'Bình Phước', 'Sáng sớm ăn cơm ở nhà', '2022-05-18 14:37:52'),
(104, ' Lê Long Đỉnh', '0971234323', 'Coupe', 'Bến Tre', 'Mẫu tin thử nghiệm thôi mà', '2022-05-20 17:21:17'),
(105, ' Lê Thị Bình', '0921738555', 'Sedan', 'Cao Bằng', 'Tôi đang test các form', '2022-05-21 21:09:16'),
(106, ' Dương Quá', '0921738555', 'Limousine', '', 'Tôi là quá nhi ở thế kỷ 21\n', '2022-05-21 21:13:51'),
(107, ' Tiểu Long Nữ', '0921738555', 'Convertible', 'Quảng Ninh', 'Vì sao như vậy nhỉ', '2022-05-21 21:15:08'),
(109, ' Lê Văn An', '0971738344', 'Limousine', 'Bắc Ninh', 'Tôi đang test', '2022-05-25 11:33:46'),
(110, ' Đoàn Khắc Nguyễn', '0365123456', 'Hatchback', 'Bình Dương', 'Tôi là nguyễn', '2022-05-25 11:46:58'),
(111, ' Nguyễn Văn A', '0971738344', 'Limousine', 'Bình Định', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis, sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae nquae. Hic ab dolorum temporibus expedita.Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciu', '2022-05-25 14:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `copyright` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `copyright`, `address`, `phone`, `mail`, `title`, `subtitle`, `time`) VALUES
(1, 'Copyright © 2022 by COOL N LITE', 'Tầng 12, Petroland, 12 Tân Trào, Q.7, TP HCM', '0835 808 858', 'coolnlite@gmail.com', 'COOL N LITE - The Titanium Film', 'Phim cách nhiệt COOL N LITE được sản xuất tại các cơ sở sản xuất phim công nghệ cao hàng đầu Hoa Kỳ. Đồng thời được nghiên cứu và phát triển bởi các kỹ sư tài năng nổi tiếng của Nhật để tạo ra phim cách nhiệt siêu cấp, công nghệ Titanium đầu tiên trên thế giới.', '2022-05-24 00:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `keyword`
--

CREATE TABLE `keyword` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keyword`
--

INSERT INTO `keyword` (`id`, `name`, `time`) VALUES
(1, 'phim cách nhiệt ô tô', '2022-05-25 13:49:31'),
(2, 'MTFILM', '2022-05-25 13:49:31'),
(3, 'COOL N LITE', '2022-06-01 10:01:54'),
(9, 'titan x series', '2022-06-01 10:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(1) NOT NULL,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `url`, `position`, `time`) VALUES
(1, 'Premier Series', 'premier.php', 0, '2022-05-23 23:54:14'),
(2, 'Titan X Series', 'titanx.php', 1, '2022-05-23 23:54:14'),
(3, 'Tin Tức', 'news.php', 2, '2022-05-23 23:55:17'),
(4, 'Chúng Tôi', 'about.php', 3, '2022-05-23 23:55:17'),
(5, 'Đại Lý', 'agency.php', 4, '2022-05-24 00:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `url` varchar(220) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thumnail` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `view` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `time` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `url`, `thumnail`, `title`, `description`, `content`, `status`, `view`, `id_user`, `time`) VALUES
(1, 'bai-viet-so-1', '/uploads/avatar.jpg', 'Trải nghiệm đánh giá iOS 15 Beta 2: Đã có bản Public Beta cho người dùng cập\n                                nhật miễn phí, bổ sung thêm tính năng mới', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis, sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae nquae. Hic ab dolorum temporibus expedita.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis,sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae quae. Hic ab dolorum temporibus expedita.</p>\r\n <img src=\"./uploads/avatar.jpg\" alt=\"hinh ảnh minh họa\">\r\n<br/>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis,sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae quae. Hic ab dolorum temporibus expedita.</p>\r\n<br/>\r\n<img src=\"./uploads/sieuxe.jpg\" alt=\"hinh ảnh minh họa\">', 1, 1, 1, '2022-05-25 13:49:31'),
(2, 'bai-viet-so-2', '/uploads/sieuxe.jpg', 'Dùng điện thoại nhiều có ảnh hưởng đến sức khoẻ tâm thần?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis, sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae nquae. Hic ab dolorum temporibus expedita.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis,sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae quae. Hic ab dolorum temporibus expedita.</p>\r\n <img src=\"./uploads/avatar.jpg\" alt=\"hinh ảnh minh họa\">\r\n<br/>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis,sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae quae. Hic ab dolorum temporibus expedita.</p>\r\n<br/>\r\n<img src=\"./uploads/sieuxe.jpg\" alt=\"hinh ảnh minh họa\">', 1, 1, 1, '2022-05-25 13:49:31'),
(3, 'bai-viet-so-3', '/uploads/avatar.jpg', 'Tổng giám đốc đương nhiệm WHO Tedros tự tranh cử và được bầu làm tiếp 5 năm nữa', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis, sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae nquae. Hic ab dolorum temporibus expedita.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis,sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae quae. Hic ab dolorum temporibus expedita.</p>\r\n <img src=\"./uploads/avatar.jpg\" alt=\"hinh ảnh minh họa\">\r\n<br/>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis,sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae quae. Hic ab dolorum temporibus expedita.</p>\r\n<br/>\r\n<img src=\"./uploads/sieuxe.jpg\" alt=\"hinh ảnh minh họa\">', 1, 1, 1, '2022-05-25 13:49:31'),
(4, 'bai-viet-so-4', '/uploads/sieuxe.jpg', 'Phong tỏa quá lâu, đại học Thượng Hải phải cho sinh viên thi bơi online để hoàn thành môn học', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis, sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae nquae. Hic ab dolorum temporibus expedita.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis,sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae quae. Hic ab dolorum temporibus expedita.</p>\r\n <img src=\"./uploads/avatar.jpg\" alt=\"hinh ảnh minh họa\">\r\n<br/>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis,sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae quae. Hic ab dolorum temporibus expedita.</p>\r\n<br/>\r\n<img src=\"./uploads/sieuxe.jpg\" alt=\"hinh ảnh minh họa\">', 1, 1, 1, '2022-05-25 13:49:31'),
(5, 'bai-viet-so-5', '/uploads/avatar.jpg', 'Đậu mùa khỉ xuất hiện tại nhiều quốc gia, WHO đề nghị cảnh giác nhưng chưa cần tiêm vaccine đại trà', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis, sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae nquae. Hic ab dolorum temporibus expedita.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis,sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae quae. Hic ab dolorum temporibus expedita.</p>\r\n <img src=\"./uploads/avatar.jpg\" alt=\"hinh ảnh minh họa\">\r\n<br/>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis,sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae quae. Hic ab dolorum temporibus expedita.</p>\r\n<br/>\r\n<img src=\"./uploads/sieuxe.jpg\" alt=\"hinh ảnh minh họa\">', 1, 1, 1, '2022-05-25 13:49:31'),
(6, 'bai-viet-so-6', '/uploads/sieuxe.jpg', 'iPhone 14 Pro có thể sẽ được áp dụng tính năng always-on display', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis, sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae nquae. Hic ab dolorum temporibus expedita.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis,sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae quae. Hic ab dolorum temporibus expedita.</p>\r\n <img src=\"./uploads/avatar.jpg\" alt=\"hinh ảnh minh họa\">\r\n<br/>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis,sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae quae. Hic ab dolorum temporibus expedita.</p>\r\n<br/>\r\n<img src=\"./uploads/sieuxe.jpg\" alt=\"hinh ảnh minh họa\">', 1, 1, 1, '2022-05-25 13:49:31'),
(7, 'bai-viet-so-7', '/uploads/avatar.jpg', 'Đây là hệ thống camera Street View mới sẽ được Google sử dụng trong tương lai', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis, sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae nquae. Hic ab dolorum temporibus expedita.', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis,sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae quae. Hic ab dolorum temporibus expedita.</p>\r\n <img src=\"./uploads/avatar.jpg\" alt=\"hinh ảnh minh họa\">\r\n<br/>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit et nesciunt omnis,sunt explicabo commodi nostrum repellat provident delectus totam sint assumenda, beatae quae. Hic ab dolorum temporibus expedita.</p>\r\n<br/>\r\n<img src=\"./uploads/sieuxe.jpg\" alt=\"hinh ảnh minh họa\">', 1, 1, 1, '2022-05-25 13:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `news_keyword`
--

CREATE TABLE `news_keyword` (
  `id_news_tag` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_keyword`
--

INSERT INTO `news_keyword` (`id_news_tag`, `id_news`, `id_tag`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(7, 3, 1),
(8, 3, 2),
(9, 3, 3),
(10, 4, 1),
(11, 4, 2),
(12, 4, 3),
(13, 5, 1),
(14, 5, 2),
(15, 5, 3),
(16, 6, 1),
(17, 6, 2),
(18, 6, 3),
(19, 7, 1),
(20, 7, 2),
(21, 7, 3),
(52, 7, 10);

-- --------------------------------------------------------

--
-- Table structure for table `seo_news`
--

CREATE TABLE `seo_news` (
  `id` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link_fb` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img_fb` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `title_fb` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description_fb` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keyword_fb` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title_tw` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description_tw` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `img_tw` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seo_news`
--

INSERT INTO `seo_news` (`id`, `id_news`, `title`, `description`, `keyword`, `link_fb`, `img_fb`, `title_fb`, `description_fb`, `keyword_fb`, `title_tw`, `description_tw`, `img_tw`) VALUES
(9, 8, 'Thử nghiệm bài viết 1', 'ok 1', 'jjjj 1', 'https://www.facebook.com/coolnlitevnn', '/uploads/seo_news/4a84c47bab61123f97979034965bec59.jpg', 'hh gg', 'hh gg', 'hh ggg', 'hh gg', 'hh gg', '/uploads/seo_news/12bc107c726b857d8fe6d85d798789ff.png');

-- --------------------------------------------------------

--
-- Table structure for table `seo_pages`
--

CREATE TABLE `seo_pages` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link_fb` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img_fb` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `title_fb` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description_fb` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `keyword_fb` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title_tw` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description_tw` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `img_tw` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sidebar`
--

CREATE TABLE `sidebar` (
  `id` int(11) NOT NULL,
  `url` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(1) NOT NULL,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sidebar`
--

INSERT INTO `sidebar` (`id`, `url`, `icon`, `name`, `position`, `time`) VALUES
(1, 'dashboard.php', '<i class=\"fas fa-home\"></i>', 'Bảng điều khiển', 0, '2022-05-21 21:29:49'),
(2, 'news.php', '<i class=\"fas fa-books\"></i>', 'Bài viết', 1, '2022-05-21 21:29:49'),
(5, 'customers.php', '<i class=\"fas fa-users\"></i>', 'Khách hàng', 2, '2022-05-21 21:33:49'),
(6, 'account.php', ' <i class=\"fas fa-user-cog\"></i>', 'Tài khoản', 3, '2022-05-21 21:33:49'),
(9, 'setting.php', '<i class=\"fas fa-cog\"></i>', 'Cài đặt', 6, '2022-05-21 21:37:09'),
(10, 'modules/logout.php', '<i class=\"fas fa-sign-out-alt\"></i>', 'Đăng xuất', 7, '2022-05-21 21:37:09'),
(11, 'seo.php', '<i class=\"fas fa-search-dollar\"></i>', 'SEO', 5, '2022-05-21 21:33:49'),
(12, 'agency.php', '<i class=\"fas fa-house-return\"></i>', 'Đại lý', 4, '2022-05-21 21:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_word` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(1) NOT NULL,
  `full_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `time` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `pass_word`, `position`, `full_name`, `image`, `status`, `time`) VALUES
(1, 'thaisaone', 'vodongthai68@gmail.com', 'f2db2c94d7f2554ccda9edd32ae2bef5', 2, 'Võ Đông Thái', '/uploads/luffy.jpg', 1, '2022-05-19 10:13:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keyword`
--
ALTER TABLE `keyword`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `news_keyword`
--
ALTER TABLE `news_keyword`
  ADD PRIMARY KEY (`id_news_tag`);

--
-- Indexes for table `seo_news`
--
ALTER TABLE `seo_news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_news` (`id_news`);

--
-- Indexes for table `seo_pages`
--
ALTER TABLE `seo_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebar`
--
ALTER TABLE `sidebar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`),
  ADD UNIQUE KEY `icon` (`icon`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `pass_word` (`pass_word`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keyword`
--
ALTER TABLE `keyword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `news_keyword`
--
ALTER TABLE `news_keyword`
  MODIFY `id_news_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `seo_news`
--
ALTER TABLE `seo_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seo_pages`
--
ALTER TABLE `seo_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sidebar`
--
ALTER TABLE `sidebar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
