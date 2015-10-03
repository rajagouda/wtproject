-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 02, 2015 at 05:15 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE IF NOT EXISTS `mobile` (
  `name` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `spec` varchar(500) NOT NULL,
  `price` int(10) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `page` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`name`, `image`, `spec`, `price`, `brand`, `page`) VALUES
('oneplus', 'one2.jpg', 'one2.jpg', 25000, 'oneplus', 'one2.php'),
('YU Yuphoria YU5010 ', 'yuphoria.jpg', '', 6999, 'MicroMax', 'yuphoria.php'),
('Microsoft Lumia 535 (Dual SIM)', 'lumia.jpg', '', 6518, 'Nokia', 'lumia.php'),
('YU Yureka Plus- MoonDust Grey', 'yureka.jpg', '', 8999, 'Micromax', 'yureka.php'),
('Iphone 6', 'iphone.jpg', '', 73000, 'Apple', 'iphone.php'),
('Mi 4i (16GB, Grey)', 'mi4i.jpg', '', 12999, 'Xiaomi', 'mi4i.php'),
('Google Nexus 5', 'nexus.jpg', '', 23999, 'LG', 'nexus.php'),
('XOLO BLACK 16 GB ', 'black.jpg', '', 12999, 'XOLO', 'black.php'),
('Samsung Galaxy E5 16GB', 'e5.jpg', '', 14999, 'Samsung', 'e5.php'),
('hTC Desire 820 16GB', '820.jpg', '', 21999, 'HTC', '820.php'),
('LG G3 Flagship 32GB Titan Black', 'g3.jpg', '', 30450, 'LG', 'g3.php'),
('Samsung Galaxy S6 32GB', 's6.jpg', '', 49950, '', 's6.php'),
('LG G Flex 2 16GB', 'flex.jpg', '', 38982, 'LG', 'flex.php'),
('Samsung Note 4 32GB White', 'note4.jpg', '', 41599, 'Samsung', 'note4.php'),
('HTC One M9 Plus 32 GB', 'm9.jpg', '', 53895, 'HTC', 'm9.php');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `address`) VALUES
(1, 'aakash', 'gouda', 'aakashg12@gmail.com', 'e19d5cd5af0378da05f63f891c7467af', '9987712457', '59/A/404,Tilak Nagar,Chembur,Mumbai-89'),
(2, 'test', 'user', 'aksstar@aaksh.com', '25d55ad283aa400af464c76d713c07ad', '', ''),
(3, 'prithvi', 'raj', 'prt@gmail.com', '25f9e794323b453885f5181f1b624d0b', '123456789', 'adas/czxczxc5/acascac/cxzczxczcx'),
(4, 'cccccccc', 'ccccccccc', 'awe@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
