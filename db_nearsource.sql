-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2015 at 06:32 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_nearsource`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_employees`
--

CREATE TABLE IF NOT EXISTS `tb_employees` (
  `employee_id` int(11) NOT NULL,
  `employee_ci` varchar(10) NOT NULL,
  `employee_fullname` varchar(50) NOT NULL,
  `employee_address` varchar(250) NOT NULL,
  `employee_email` varchar(30) NOT NULL,
  `employee_phone` varchar(11) NOT NULL,
  `employee_cdate` date NOT NULL,
  `employee_bdate` date NOT NULL,
  `employee_freelance` tinyint(1) NOT NULL,
  `employee_rate` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_employees`
--

INSERT INTO `tb_employees` (`employee_id`, `employee_ci`, `employee_fullname`, `employee_address`, `employee_email`, `employee_phone`, `employee_cdate`, `employee_bdate`, `employee_freelance`, `employee_rate`) VALUES
(1, 'V-19399770', 'Roberto Gonzalez', 'Av. Paez, El Paraiso, Rsd. Sorocaima', 'test@mail.com', '02125459515', '2015-11-19', '1988-08-08', 1, 0),
(2, 'V-19399769', 'Madelaine Gonzalez', 'Direction Test', 'testlong@gmail.com', '04142452768', '2015-11-20', '1988-08-08', 1, 12.68);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_fullname`, `user_name`, `user_password`) VALUES
(1, 'Admin Test', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_employees`
--
ALTER TABLE `tb_employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`), ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_employees`
--
ALTER TABLE `tb_employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
