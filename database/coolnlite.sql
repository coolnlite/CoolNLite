-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 12:31 PM
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
  `message` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `full_name`, `tel`, `models`, `area`, `message`, `time`) VALUES
(33, ' Nguyễn Văn A', '0971738344', '', '', '', '2022-05-18 07:37:26'),
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
(93, ' Lê Long Đỉnh', '0971234323', 'Hatchback', 'Bình Dương', 'Tôi đang thử nghiệm form', '2022-05-20 10:22:52');

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
-- Indexes for table `keyword`
--
ALTER TABLE `keyword`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

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
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `keyword`
--
ALTER TABLE `keyword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
