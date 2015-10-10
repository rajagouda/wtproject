-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2015 at 05:49 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `page` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `name`, `brand`, `price`, `page`) VALUES
('1@gmail.com', 'XOLO BLACK 16 GB ', 'XOLO', 12999, 'black.php'),
('1@gmail.com', 'XOLO BLACK 16 GB ', 'XOLO', 12999, 'black.php'),
('1@gmail.com', 'XOLO BLACK 16 GB ', 'XOLO', 12999, 'black.php'),
('1@gmail.com', 'XOLO BLACK 16 GB ', 'XOLO', 12999, 'black.php'),
('2@gmail.com', 'XOLO BLACK 16 GB ', 'XOLO', 12999, 'black.php'),
('2@gmail.com', 'XOLO BLACK 16 GB ', 'XOLO', 12999, 'black.php'),
('2@gmail.com', 'XOLO BLACK 16 GB ', 'XOLO', 12999, 'black.php'),
('1@gmail.com', 'XOLO BLACK 16 GB ', 'XOLO', 12999, 'black.php'),
('1@gmail.com', 'XOLO BLACK 16 GB ', 'XOLO', 12999, 'black.php'),
('1@gmail.com', 'XOLO BLACK 16 GB ', 'XOLO', 12999, 'black.php'),
('1@gmail.com', 'XOLO BLACK 16 GB ', 'XOLO', 12999, 'black.php'),
('1@gmail.com', 'XOLO BLACK 16 GB ', 'XOLO', 12999, 'black.php'),
('1@gmail.com', 'XOLO BLACK 16 GB ', 'XOLO', 12999, 'black.php'),
('1@gmail.com', 'XOLO BLACK 16 GB ', 'XOLO', 12999, 'black.php'),
('1@gmail.com', 'XOLO BLACK 16 GB ', 'XOLO', 12999, 'black.php'),
('12@gmail.com', 'XOLO BLACK 16 GB ', 'XOLO', 12999, 'black.php'),
('q@gmail.com', 'XOLO BLACK 16 GB ', 'XOLO', 12999, 'black.php'),
('1@gmail.com', 'Google Nexus 5', 'LG', 23999, 'nexus.php'),
('1@gmail.com', 'Samsung Galaxy E5 16GB', 'Samsung', 14999, 'e5.php'),
('12@gmail.com', 'Samsung Galaxy S6 32GB', 'Samsung', 49950, 's6.php'),
('12@gmail.com', 'Samsung Note 4 32GB White', 'Samsung', 41599, 'note4.php'),
('12@gmail.com', 'Microsoft Lumia 535 (Dual SIM)', 'Nokia', 6518, 'lumia.php'),
('12@gmail.com', 'Samsung Galaxy S6 32GB', 'Samsung', 49950, 's6.php');

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
('Samsung Galaxy S6 32GB', 's6.jpg', '', 49950, 'Samsung', 's6.php'),
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
  `phone` int(20) NOT NULL,
  `address` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `address`) VALUES
(1, 'aakash', 'gouda', 'aakashg12@gmail.com', 'e19d5cd5af0378da05f63f891c7467af', 284687124, 'n mnsdbcvhjdefgj   ferfeqwrjkgbergbewrg'),
(2, 'test', 'user', 'aksstar@aaksh.com', '25d55ad283aa400af464c76d713c07ad', 432545, 'gvergnjgnerjbnerb ef ergjergsrbgr errejg'),
(3, 'prithvi', 'raj', 'prt@gmail.com', '25f9e794323b453885f5181f1b624d0b', 3452345, 'fgmnegmewbgbe r  remfgbewq ef3jef ererjgherj'),
(4, 'cccccccc', 'ccccccccc', 'awe@gmail.com', '25d55ad283aa400af464c76d713c07ad', 3425, 'ranger,gore efjenrg egfjbejkg ermgn'),
(5, 'raja', 'gouda', 'raja.candid@gmail.com', '25f9e794323b453885f5181f1b624d0b', 43634543, 'ergjnjnwergjewr  fenrgken erfgnkerng'),
(6, 'akash', 'patil', '123@gmail.com', '25f9e794323b453885f5181f1b624d0b', 433245, 'rgknergknrg  erjngergege rg'),
(7, 'ef', 'ef', 'awe@gmai.com', '76d80224611fc919a5d54f0ff9fba446', 657654, 'regmerngerg e genrgkewng'),
(9, 'awe', 'asd', 'asd@gmail.com', '202cb962ac59075b964b07152d234b70', 5647457, 'regainer,gnergnkerng er ger g'),
(10, 'Abstain', 'Denny', '1@gmail.com', '202cb962ac59075b964b07152d234b70', 7567, 'rower,kngkqr,e rgkqrekg'),
(11, 'Jay', 'Larry', '1234@gmail.com', '202cb962ac59075b964b07152d234b70', 546546, 'ergfmnwegnng r rkengkwe'),
(12, 'eww', 'wed', 'wee@jdnwf.com', '202cb962ac59075b964b07152d234b70', 45735, 'ergnergner erfgkerngkrngkvreg '),
(13, 'www', 'www', '2@gmail.com', '202cb962ac59075b964b07152d234b70', 45356, 'gtntrynyntyny'),
(14, 'polly', 'Andre', '12@gmail.com', '202cb962ac59075b964b07152d234b70', 5425, 'retwhetrherth'),
(15, 'plm', 'moo', 'q@gmail.com', '202cb962ac59075b964b07152d234b70', 1234, 'dfedf');

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
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
