-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 02:10 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yellow`
--

-- --------------------------------------------------------

--
-- Table structure for table `uniinfo`
--

CREATE TABLE `uniinfo` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `score` double DEFAULT NULL,
  `rank` int(200) DEFAULT NULL,
  `year` int(15) DEFAULT NULL,
  `ratio` double DEFAULT NULL,
  `interstu` double DEFAULT NULL,
  `acadrep` double DEFAULT NULL,
  `info` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uniinfo`
--

INSERT INTO `uniinfo` (`id`, `name`, `address`, `score`, `rank`, `year`, `ratio`, `interstu`, `acadrep`, `info`) VALUES
(1, 'UNIVERSITY MALAYA (UM)', 'Kuala Lumpur ', 90.6, 19, 2019, 98, 97.8, 100, 'https://www.um.edu.my/'),
(2, 'UNIVERSITY PUTRA MALAYSIA (UPM)', 'Selangor', 75.1, 34, 2019, 80.3, 99.5, 68.4, 'https://www.upm.edu.my/'),
(3, 'UNIVERSITY KEBANGSAAN MALAYSIA (UKM)', 'Selangor', 72.1, 41, 2019, 90.9, 88, 74.5, 'https://www.ukm.my/portal/'),
(4, 'UNIVERSITY SAINS MALAYSIA (USM)', 'Penang', 71, 43, 2019, 77.6, 83.7, 73.6, 'https://www.usm.my/index.php'),
(5, 'UNIVERSITY TEKNOLOGI MALAYSIA (UTM)', 'Johor', 67.1, 47, 2019, 93.7, 95.8, 55.2, 'https://www.utm.my/'),
(6, 'UNIVERSITY TECHNOLOGY PETRONAS (UTP)', 'Perak', 46.1, 99, 2019, 39.5, 92.9, 22.7, 'https://www.utp.edu.my/Pages/Home.aspx'),
(7, 'UNIVERSITY UTARA MALAYSIA (UUM)', 'Kedah', 38.1, 128, 2019, 48, 98.9, 26.7, 'http://www.uum.edu.my/'),
(8, 'TAYLOR\'S UNIVERSITY\r\n', 'Selangor', 36.3, 135, 2019, 54.9, 99.3, 25.8, 'https://university.taylors.edu.my/en.html'),
(9, 'USCI UNIVERSITY\r\n', 'Kuala Lumpur', 30.8, 178, 2019, 72.2, 99.5, 11.4, 'https://www.ucsiuniversity.edu.my/'),
(10, 'MANAGEMENT AND SCIENCE UNIVERSITY (MSU)', 'Shah Alam', 0, 271, 2019, 40.5, 94.1, 20.1, 'https://www.msu.edu.my/'),
(11, 'UNIVERSITY MALAYA (UM)', 'Selangor', 94, 13, 2020, 96.6, 96.1, 89.7, 'https://www.um.edu.my/'),
(12, 'UNIVERSITY PUTRA MALAYSIA (UPM)\r\n', 'Selangor', 79.5, 33, 2020, 84.9, 99.6, 71.4, 'https://www.upm.edu.my/'),
(13, 'UNIVERSITY SAINS MALAYSIA (USM)\r\n', 'Penang', 74.9, 37, 2020, 86.2, 87.2, 76.3, 'https://www.usm.my/index.php'),
(14, 'UNIVERSITY KEBANGSAAN MALAYSIA (UKM)\r\n', 'Selangor', 73.7, 39, 2020, 95.1, 86.8, 77, 'https://www.ukm.my/portal/'),
(15, 'UNIVERSITY TEKNOLOGI MALAYSIA (UTM)\r\n', 'Johor', 70.1, 46, 2020, 85, 94.9, 58.7, 'https://www.utm.my/'),
(16, 'UNIVERSITY TECHNOLOGY PETRONAS (UTP)', 'Perak', 51.3, 82, 2020, 45.1, 82.8, 25.9, 'https://www.utp.edu.my/Pages/Home.aspx'),
(17, 'UNIVERSITY UTARA MALAYSIA (UUM)', 'Kedah', 42.4, 116, 2020, 47.3, 98.9, 29.5, 'http://www.uum.edu.my/'),
(18, 'TAYLOR\'S UNIVERSITY\r\n', 'Selangor', 44.2, 190, 2020, 63.4, 99.5, 28.1, 'https://university.taylors.edu.my/en.html'),
(19, 'USCI UNIVERSITY\r\n', 'Kuala Lumpur', 40.8, 122, 2020, 70.8, 99.5, 16.9, 'https://www.ucsiuniversity.edu.my/'),
(20, 'MANAGEMENT AND SCIENCE UNIVERSITY (MSU)', 'Selangor', 32, 179, 2020, 48.7, 88.8, 23.8, 'https://www.msu.edu.my/'),
(22, 'UNIVERSITY MALAYA (UM)', 'Kuala Lumpur', 94.6, 9, 2021, 93.6, 89.1, 92.1, 'https://www.um.edu.my/'),
(23, 'UNIVERSITY PUTRA MALAYSIA (UPM)', 'Selangor', 79.8, 28, 2021, 89.8, 99.5, 75.4, 'https://www.upm.edu.my/'),
(24, 'UNIVERSITY SAINS MALAYSIA (USM)', 'Penang', 75, 34, 2021, 89.8, 88, 79.9, 'https://www.usm.my/index.php'),
(25, 'UNIVERSITY KEBANGSAAN MALAYSIA (UKM)', 'Selangor', 74.4, 35, 2021, 98.8, 85.5, 80.1, 'https://www.ukm.my/portal/'),
(26, 'UNIVERSITY TEKNOLOGI MALAYSIA (UTM)', 'Johor', 71.3, 39, 2021, 80.3, 95.3, 63.6, 'https://www.utm.my/'),
(27, 'UNIVERSITY TECHNOLOGY PETRONAS (UTP)', 'Perak', 51, 70, 2021, 43.7, 67.7, 30.4, 'https://www.utp.edu.my/Pages/Home.aspx'),
(28, 'TAYLOR UNIVERSITY', 'Selangor', 46.7, 89, 2021, 74.3, 99.6, 32.7, 'https://university.taylors.edu.my/en.html'),
(29, 'UNIVERSITY UTARA MALAYSIA (UUM)', 'Kedah', 42.8, 107, 2021, 55.3, 98.5, 33.5, 'http://www.uum.edu.my/'),
(30, 'MANAGEMENT AND SCIENCE UNIVERSITY (MSU)', 'Selangor', 34.6, 139, 2021, 55.3, 86.2, 27.6, 'https://www.msu.edu.my/'),
(47, 'USCI UNIVERSITY', 'kuala Lumpur', 43.3, 105, 2021, 71.1, 99.3, 23.9, 'https://www.ucsiuniversity.edu.my/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `password`, `type`) VALUES
(29, 'asvinitha', 'muniandy', 'asvinitha@gmail.com', '1234', 'admin'),
(36, 'Jade', 'Geraldine', 'jade@gmail.com', 'jade', 'user'),
(37, 'Serlena ', 'Paneerselvam', 'serlena@gmail.com', 'serlena', 'user'),
(38, 'Akmal', 'Syafiq', 'akmal@gmail.com', 'akmal', 'user'),
(39, 'Brandon ', 'Jude', 'brandon@gmail.com', 'brandon', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uniinfo`
--
ALTER TABLE `uniinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uniinfo`
--
ALTER TABLE `uniinfo`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
