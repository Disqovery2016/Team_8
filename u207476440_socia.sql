
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2016 at 07:02 AM
-- Server version: 10.0.22-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u207476440_socia`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `rollno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reset_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `active_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `category`, `rollno`, `password`, `time`, `reset_code`, `active`, `active_code`) VALUES
(13, 'ashvinipatel', 'ashvinipatel548@gmail.com', '9601923612', 'Worker', '1234567891', '88572bdaba72ca3267e9698d46edc374dcbeec1f', 'Saturday 5 Nov, 2016 || 10:43:17', '', 1, 'c5e8ab50dd32b06e9d323af7abfe9e710b09256a'),
(10, 'Arvinth raaj', 'arvinthraaj.kk@gmail.com', '9543819252', 'Employer', '13456789836', '8ddeb6da0d8bb54827c788eb80c5b83949d6a6c7', 'Saturday 5 Nov, 2016 || 10:19:55', '', 1, 'be22996061f1067b31b28a7c9b6e27ecdc9676d5'),
(12, 'Aishvary Pratap Singh', 'aishvarypsingh@gmail.com', '9990736796', 'Employer', '13029100', '4233137d1c510f2e55ba5cb220b864b11033f156', 'Saturday 5 Nov, 2016 || 10:33:40', '', 1, 'dfeae474c73178264efc882421913e0c20a97fb1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
