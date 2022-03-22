-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 01:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_upload`
--

CREATE TABLE `file_upload` (
  `file_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `url` varchar(150) NOT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `tmp` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_upload`
--

INSERT INTO `file_upload` (`file_id`, `name`, `url`, `size`, `type`, `tmp`) VALUES
(24, '80300912_1035691676768139_395859078313672704_n.jpg', '6238be5b3d1be8.24109699.jpg', 109353, 'image/jpeg', 'C:xampp	mpphp85CC.tmp'),
(25, '126887902_1257220564650430_3527480493471334927_n.jpg', '6238be5ee07ed2.93097169.jpg', 203444, 'image/jpeg', 'C:xampp	mpphp9425.tmp'),
(26, '121171017_1197535020618985_9039124390090660935_n.jpg', '6238be616768d5.96273368.jpg', 334657, 'image/jpeg', 'C:xampp	mpphp9E09.tmp'),
(27, '213866288_1403911786647973_240886469070456647_n.jpg', '6238be6400ed41.31502861.jpg', 239859, 'image/jpeg', 'C:xampp	mpphpA80D.tmp'),
(28, 'kosoma-cute-picture', '6238be66b98925.74633622.jpg', 147138, 'image/jpeg', 'C:xampp	mpphpB2DB.tmp'),
(29, 'stella', '6238be69980377.05947552.jpg', 207315, 'image/jpeg', 'C:xampp	mpphpBDF8.tmp'),
(30, 'kosoma-picture', '6238be6c655d52.23682195.jpg', 268102, 'image/jpeg', 'C:xampp	mpphpC8E6.tmp'),
(31, '267740308_1570297319974236_5875240066312448560_n.jpg', '6238be6f42b3a0.81137031.jpg', 176892, 'image/jpeg', 'C:xampp	mpphpD422.tmp'),
(32, '272451277_1594508000886501_3208303632081154135_n.jpg', '6238be71a22e27.77987273.jpg', 304399, 'image/jpeg', 'C:xampp	mpphpDD6A.tmp'),
(33, '272863819_1545297425842741_7443624197943030154_n.jpg', '6238be740474f1.68401387.jpg', 203968, 'image/jpeg', 'C:xampp	mpphpE6A2.tmp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `position` varchar(50) DEFAULT 'Developer'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `sex`, `position`) VALUES
(1, 'Kok Koko', 'Male', 'Developer'),
(2, 'Him Sothea', 'Female', 'Designer'),
(3, 'Kok Dara', 'Male', 'Frontend Developer'),
(4, 'Him Kanha', 'Female', 'UI / UX'),
(6, 'Sok Bonna', 'Male', 'Mobile App Developer'),
(7, 'Hong Tola', 'Male', 'Backend Developer'),
(8, 'Chin Rathana', 'Male', 'POS Developer'),
(9, 'Bun Thyda', 'Female', 'Designer'),
(13, 'Kok Samnang', 'Male', 'Data Analyst'),
(15, 'Huy Kumpheak', 'Male', 'Backend Developer'),
(20, 'Tong Hongeng', 'Male', 'Data Analyst'),
(21, 'Hong Dara123', 'Male', 'Java Developer'),
(28, 'Hong dara123', 'Female', 'UI / UX'),
(37, 'Hong Dara1234', 'Male', 'Backend Developer'),
(42, 'Hong Khanha', 'Male', 'Java Developer'),
(43, 'Doung Dara', 'Male', 'Backend Developer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_upload`
--
ALTER TABLE `file_upload`
  ADD PRIMARY KEY (`file_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_upload`
--
ALTER TABLE `file_upload`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
