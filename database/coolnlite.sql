-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2022 at 07:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `full_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `models` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `full_name`, `tel`, `models`, `area`, `message`, `time`) VALUES
(34, ' Nguyễn Văn A', '0971738344', 'SUV', 'Bình Phước', 'Sáng sớm ăn cơm ở nhà', '2022-05-18 07:37:52'),
(35, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:02:18'),
(36, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:05:00'),
(37, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:05:04'),
(38, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:05:07'),
(39, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:05:10'),
(40, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:05:13'),
(41, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:06:44'),
(42, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:06:47'),
(43, ' Nguyễn Văn A', '0971738344', 'Sedan', 'Bình Phước', '', '2022-05-20 03:07:02'),
(44, ' Nguyễn Văn A', '0971738344', 'Sedan', 'Bình Phước', 'gggggg', '2022-05-20 03:07:08'),
(45, ' Nguyễn Văn A', '0971738344', 'Crossover - CUV', 'Bình Phước', 'Text', '2022-05-20 03:07:41'),
(46, ' Nguyễn Văn A', '0971738344', 'Crossover - CUV', 'Bình Phước', '', '2022-05-20 03:09:32'),
(47, ' Nguyễn Văn B', '0971738344', 'Convertible', 'Tp Hồ Chí Minh', '', '2022-05-20 03:10:23'),
(48, ' Nguyễn Văn A', '0971738344', 'SUV', 'Tp Cần Thơ', '', '2022-05-20 03:11:01'),
(49, ' Nguyễn Văn A', '0971738344', 'SUV', 'Tp Cần Thơ', '', '2022-05-20 03:11:01'),
(50, ' Nguyễn Văn A', '0971738344', 'Sedan', 'Bình Phước', '', '2022-05-20 03:07:02'),
(51, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:06:47'),
(52, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:05:10'),
(53, ' Nguyễn Alo', '0971888888', 'Hatchback', 'Bình Định', '', '2022-05-20 09:49:55'),
(54, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:05:10'),
(55, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:06:47'),
(56, 'Lê Thị Hương', '0973664167', '', 'Bình Định', 'Tôi là ai', '2022-05-20 09:52:07'),
(57, 'Lê Thị Hương', '0973664167', '', 'Bình Định', 'Tôi là ai', '2022-05-20 09:52:21'),
(58, ' Nguyễn Văn A', '0971738344', 'Crossover - CUV', 'Bình Phước', '', '2022-05-20 03:09:32'),
(59, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:05:10'),
(60, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:05:10'),
(61, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:06:47'),
(62, ' Nguyễn Alo', '0971888888', 'Hatchback', 'Bình Định', '', '2022-05-20 09:49:55'),
(63, 'Lê Thị Hương', '0973664167', '', 'Bình Định', 'Tôi là ai', '2022-05-20 09:52:07'),
(64, 'Lê Thị Hương', '0973664167', '', 'Bình Định', 'Tôi là ai', '2022-05-20 09:52:07'),
(65, 'Lê Thị Hương', '0973664167', '', 'Bình Định', 'Tôi là ai', '2022-05-20 09:52:21'),
(66, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:05:10'),
(67, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:05:00'),
(68, ' Nguyễn Văn A', '0971738344', 'SUV', 'Bình Phước', 'Sáng sớm ăn cơm ở nhà', '2022-05-18 07:37:52'),
(69, ' Nguyễn Văn A', '0971738344', 'SUV', 'Tp Cần Thơ', '', '2022-05-20 03:11:01'),
(70, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:06:47'),
(71, ' Nguyễn Văn B', '0971738344', 'Convertible', 'Tp Hồ Chí Minh', '', '2022-05-20 03:10:23'),
(72, ' Nguyễn Văn A', '0971738344', 'SUV', 'Bình Phước', 'Sáng sớm ăn cơm ở nhà', '2022-05-18 07:37:52'),
(73, ' Nguyễn Văn A', '0971738344', 'SUV', 'Tp Cần Thơ', '', '2022-05-20 03:11:01'),
(74, ' Nguyễn Văn A', '0971738344', 'SUV', 'Bình Phước', 'Sáng sớm ăn cơm ở nhà', '2022-05-18 07:37:52'),
(75, ' Lê Long Đỉnh', '0971234323', 'Coupe', 'Bến Tre', 'Mẫu tin thử nghiệm', '2022-05-20 10:21:17'),
(76, 'Lê Thị Hương', '0973664167', '', 'Bình Định', 'Tôi là ai', '2022-05-20 09:52:07'),
(77, ' Lê Long Đỉnh', '0971234323', 'Hatchback', 'Bình Dương', 'Tôi đang thử nghiệm form', '2022-05-20 10:22:52'),
(78, ' Lê Long Đỉnh', '0971234323', 'Hatchback', 'Bình Dương', 'Tôi đang thử nghiệm form', '2022-05-20 10:22:52'),
(79, 'Lê Thị Hương', '0973664167', '', 'Bình Định', 'Tôi là ai', '2022-05-20 09:52:07'),
(80, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:06:47'),
(81, ' Lê Long Đỉnh', '0971234323', 'Coupe', 'Bến Tre', 'Mẫu tin thử nghiệm thôi mà', '2022-05-20 10:21:17'),
(82, ' Lê Long Đỉnh', '0971234323', 'Coupe', 'Bến Tre', 'Mẫu tin thử nghiệm thôi mà', '2022-05-20 10:21:17'),
(83, ' Lê Long Đỉnh', '0971234323', 'Hatchback', 'Bình Dương', 'Tôi đang thử nghiệm form', '2022-05-20 10:22:52'),
(84, ' Nguyễn Văn A', '0971738344', 'SUV', 'Bình Phước', 'Sáng sớm ăn cơm ở nhà', '2022-05-18 07:37:52'),
(85, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:05:10'),
(86, 'Lê Thị Hương', '0973664167', '', 'Bình Định', 'Tôi là ai, vì sao mọi người làm như thế', '2022-05-20 09:52:07'),
(87, ' Lê Long Đỉnh', '0971234323', 'Coupe', 'Bến Tre', 'Mẫu tin thử nghiệm thôi mà', '2022-05-20 10:21:17'),
(88, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:05:10'),
(89, ' Lê Long Đỉnh', '0971234323', 'Coupe', 'Bến Tre', 'Mẫu tin thử nghiệm thôi mà', '2022-05-20 10:21:17'),
(90, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:05:10'),
(91, ' Nguyễn Văn A', '0971738344', 'SUV', 'Bình Phước', 'Sáng sớm ăn cơm ở nhà', '2022-05-18 07:37:52'),
(92, ' Lê Long Đỉnh', '0971234323', 'Hatchback', 'Bình Dương', 'Tôi đang thử nghiệm form', '2022-05-20 10:22:52'),
(93, ' Lê Long Đỉnh', '0971234323', 'Hatchback', 'Bình Dương', 'Tôi đang thử nghiệm form', '2022-05-20 10:22:52'),
(94, ' Lê Thị Bình', '0921738555', 'Sedan', 'Cao Bằng', '', '2022-05-21 14:09:16'),
(95, ' Lê Thị Bình', '0921738555', 'Sedan', 'Cao Bằng', '', '2022-05-21 14:09:16'),
(96, ' Lê Thị Bình', '0921738555', 'Sedan', 'Cao Bằng', '', '2022-05-21 14:09:16'),
(97, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:05:10'),
(98, ' Lê Long Đỉnh', '0971234323', 'Coupe', 'Bến Tre', 'Mẫu tin thử nghiệm thôi mà', '2022-05-20 10:21:17'),
(99, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:05:10'),
(100, ' Lê Thị Bình', '0921738555', 'Sedan', 'Cao Bằng', '', '2022-05-21 14:09:16'),
(101, ' Nguyễn Văn A', '0971738344', 'SUV', 'Bình Phước', 'Sáng sớm ăn cơm ở nhà', '2022-05-18 07:37:52'),
(102, ' Võ Đông Thái', '0971738344', 'Hatchback', 'Bà Rịa-Vũng Tàu', 'Sáng uống cà phê', '2022-05-20 03:05:10'),
(103, ' Nguyễn Văn A', '0971738344', 'SUV', 'Bình Phước', 'Sáng sớm ăn cơm ở nhà', '2022-05-18 07:37:52'),
(104, ' Lê Long Đỉnh', '0971234323', 'Coupe', 'Bến Tre', 'Mẫu tin thử nghiệm thôi mà', '2022-05-20 10:21:17'),
(105, ' Lê Thị Bình', '0921738555', 'Sedan', 'Cao Bằng', 'Tôi đang test các form', '2022-05-21 14:09:16'),
(106, ' Dương Quá', '0921738555', 'Limousine', '', 'Tôi là quá nhi ở thế kỷ 21\n', '2022-05-21 14:13:51'),
(107, ' Tiểu Long Nữ', '0921738555', 'Convertible', 'Quảng Ninh', 'Vì sao như vậy nhỉ', '2022-05-21 14:15:08'),
(108, ' name', '0921738555', 'Sedan', 'Bà Rịa-Vũng Tàu', '', '2022-05-21 17:33:15');

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
  `subitle` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `copyright`, `address`, `phone`, `mail`, `title`, `subitle`, `time`) VALUES
(1, 'Copyright © 2022 by COOL N LITE', 'Tầng 12, Petroland, 12 Tân Trào, Q.7, TP HCM', '0835 808 858', 'coolnlite@gmail.com', 'COOL N LITE - The Titanium Film', 'Phim cách nhiệt COOL N LITE được sản xuất tại các cơ sở sản xuất phim công nghệ cao hàng đầu Hoa Kỳ. Đồng thời được nghiên cứu và phát triển bởi các kỹ sư tài năng nổi tiếng của Nhật để tạo ra phim cách nhiệt siêu cấp, công nghệ Titanium đầu tiên trên thế giới.', '2022-05-23 17:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `keyword`
--

CREATE TABLE `keyword` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keyword`
--

INSERT INTO `keyword` (`id`, `name`) VALUES
(3, 'COOL N LITE'),
(2, 'MTFILM'),
(1, 'phim cách nhiệt ô tô');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `position`, `time`) VALUES
(1, 'Premier Series', 0, '2022-05-23 16:54:14'),
(2, 'Titan X Series', 1, '2022-05-23 16:54:14'),
(3, 'News', 2, '2022-05-23 16:55:17'),
(4, 'About Us', 3, '2022-05-23 16:55:17'),
(5, 'Agency', 4, '2022-05-23 17:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL,
  `id_uses` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sidebar`
--

CREATE TABLE `sidebar` (
  `id` int(11) NOT NULL,
  `url` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sidebar`
--

INSERT INTO `sidebar` (`id`, `url`, `icon`, `name`, `position`, `time`) VALUES
(1, 'dashboard.php', '<i class=\"fas fa-home\"></i>', 'Bảng điều khiển', 0, '2022-05-21 14:29:49'),
(2, 'news.php', '<i class=\"fas fa-books\"></i>', 'Bài viết', 1, '2022-05-21 14:29:49'),
(5, 'customers.php', '<i class=\"fas fa-users\"></i>', 'Khách hàng', 2, '2022-05-21 14:33:49'),
(6, 'account.php', ' <i class=\"fas fa-user-cog\"></i>', 'Tài khoản', 3, '2022-05-21 14:33:49'),
(9, 'setting.php', '<i class=\"fas fa-cog\"></i>', 'Cài đặt', 4, '2022-05-21 14:37:09'),
(10, 'modules/logout.php', '<i class=\"fas fa-sign-out-alt\"></i>', 'Đăng xuất', 5, '2022-05-21 14:37:09');

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
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `pass_word`, `position`, `full_name`, `image`, `status`, `time`) VALUES
(1, 'thaisaone', 'vodongthai68@gmail.com', 'f2db2c94d7f2554ccda9edd32ae2bef5', 2, 'Võ Đông Thái', '../uploads/luffy.jpg', 1, '2022-05-19 03:13:12');

--
-- Indexes for dumped tables
--

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
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

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
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `position` (`position`),
  ADD UNIQUE KEY `status` (`status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keyword`
--
ALTER TABLE `keyword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sidebar`
--
ALTER TABLE `sidebar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
