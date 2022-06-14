-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 10:27 AM
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
(1, 'Copyright © 2022 by COOL N LITE', 'Tầng 12, Petroland, 12 Tân Trào, Q.7, TP HCM', '0835 808 85', 'coolnlite@gmail.com', 'COOL N LITE - The Titanium Film', 'Phim cách nhiệt COOL N LITE được sản xuất tại các cơ sở sản xuất phim công nghệ cao hàng đầu Hoa Kỳ. Đồng thời được nghiên cứu và phát triển bởi các kỹ sư tài năng nổi tiếng của Nhật để tạo ra phim cách nhiệt siêu cấp, công nghệ Titanium đầu tiên trên thế giới.', '2022-06-08 11:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `keyword`
--

CREATE TABLE `keyword` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `url_real` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(1) NOT NULL,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `url`, `url_real`, `position`, `time`) VALUES
(1, 'Premier Series', 'premier-series.html', 'premier.php', 0, '2022-06-09 09:55:37'),
(2, 'Titan X Series', 'titan-x-series.html', 'titanx.php', 1, '2022-06-09 11:57:02'),
(3, 'Tin Tức', 'tin-tuc.html', 'news.php', 2, '2022-06-09 09:56:02'),
(4, 'Chúng Tôi', 'chung-toi.html', 'about.php', 3, '2022-06-09 09:56:15'),
(5, 'Đại Lý', 'dai-ly.html', 'agency.php', 4, '2022-06-09 09:56:28');

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

-- --------------------------------------------------------

--
-- Table structure for table `news_keyword`
--

CREATE TABLE `news_keyword` (
  `id_news_tag` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_news`
--

CREATE TABLE `seo_news` (
  `id` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
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

--
-- Dumping data for table `seo_pages`
--

INSERT INTO `seo_pages` (`id`, `title`, `description`, `keyword`, `link_fb`, `img_fb`, `title_fb`, `description_fb`, `keyword_fb`, `title_tw`, `description_tw`, `img_tw`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', '', '', '', '');

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
(1, 'dashboard.php', '<i class=\"fas fa-home\"></i>', 'Bảng điều khiển', 0, '2022-06-08 13:43:37'),
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
  `token` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `time` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `pass_word`, `position`, `token`, `full_name`, `image`, `status`, `time`) VALUES
(1, 'thaisaone', 'vodongthai68@gmail.com', 'f2db2c94d7f2554ccda9edd32ae2bef5', 2, 'u8lWKiG6yRXrlye9hebCPTtrX1BSAI', 'Võ Đông Thái', '/uploads/users/1d7f3558b481ac55f57c60f3c03321ef.jpg', 1, '2022-05-19 10:13:12');

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
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `token` (`token`);

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
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `news_keyword`
--
ALTER TABLE `news_keyword`
  MODIFY `id_news_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `seo_news`
--
ALTER TABLE `seo_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `seo_pages`
--
ALTER TABLE `seo_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sidebar`
--
ALTER TABLE `sidebar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
