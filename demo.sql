-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 01:06 PM
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
(41, '80300912_1035691676768139_395859078313672704_n.jpg', '623b0b8de6cb66.63217050.jpg', 109353, 'image/jpeg', 'C:xampp	mpphp13BA.tmp'),
(42, '121171017_1197535020618985_9039124390090660935_n.jpg', '623b0b919b7e60.05098983.jpg', 334657, 'image/jpeg', 'C:xampp	mpphp2232.tmp'),
(43, '265706355_1565478493789452_8876381265626645311_n.jpg', '623b0b94d1c2a6.42323159.jpg', 207315, 'image/jpeg', 'C:xampp	mpphp2EC6.tmp'),
(44, '272863819_1545297425842741_7443624197943030154_n.jpg', '623b0b9d7f43e4.18695507.jpg', 203968, 'image/jpeg', 'C:xampp	mpphp5088.tmp'),
(45, '208259272_1398547327184419_5811357213444465411_n.jpg', '623b0ba25af3a0.37870339.jpg', 289195, 'image/jpeg', 'C:xampp	mpphp6394.tmp'),
(46, '196315270_1391418974563921_7703925099341393779_n.jpg', '623b0ba7997d39.19463273.jpg', 308992, 'image/jpeg', 'C:xampp	mpphp7807.tmp'),
(47, '184176602_1372967659742386_1050133250918279293_n.jpg', '623b0babded675.49181154.jpg', 260369, 'image/jpeg', 'C:xampp	mpphp88D1.tmp'),
(48, '213866288_1403911786647973_240886469070456647_n.jpg', '623b0bff9ee513.23442046.jpg', 239859, 'image/jpeg', 'C:xampp	mpphpCFF8.tmp'),
(49, '218027641_1414480078924477_7005390163986436855_n.jpg', '623b0c0790b543.11256434.jpg', 268102, 'image/jpeg', 'C:xampp	mpphpEEFA.tmp'),
(50, '222598172_1417509701954848_1240485756943828007_n.jpg', '623b0c11eb7d69.29338319.jpg', 538085, 'image/jpeg', 'C:xampp	mpphp1782.tmp'),
(51, '211898506_1403910143314804_5528927128169898935_n.jpg', '623b0c1a049797.91535531.jpg', 147138, 'image/jpeg', 'C:xampp	mpphp3702.tmp');

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
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
