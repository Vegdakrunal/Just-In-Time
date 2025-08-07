-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2024 at 12:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news-site`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `post` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `post`) VALUES
(1, 'Cyber Crime', 1),
(2, 'Sports', 2),
(3, 'Entertainment', 1),
(4, 'Health', 1),
(5, 'Politics', 2);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `post_img` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES
(1, 'Cyber Theft', 'Cyber theft in United Kingdom', '1', '20 Aug, 2024', 1, '1724161090-1715757243-laptop-with-lock-chain-arrangement_23-2149101217.jpg'),
(2, 'Political Issue', 'Indian Election between bhajpa and congress on 2024dfghj', '5', '21 Aug, 2024', 1, 'politics1.jpg'),
(3, 'Sports Today', 'olampic indonesia in 2024', '2', '21 Aug, 2024', 2, '1724239148-sports1.jpg'),
(11, '29-11-2024', '                                        demo update success                            ', '5', '29 Nov, 2024', 2, '1732864933-Blank diagram (1).png'),
(6, 'Entertainment', '                    krunal vegda 18-11-2400                ', '3', '21 Oct, 2024', 2, '1732864644-csa bng1.png'),
(7, 'jainam', 'Hello my lst post', '4', '18 Nov, 2024', 5, '1731925970-1.png'),
(10, 'ooooo', '                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore nihil non corrupti quia, ae nesciunt atque sed magnam. Aliquam facere tenetur obcaecati atque earum                                                                                     ', '2', '19 Nov, 2024', 5, '1732864464-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `websitename` varchar(60) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `footerdesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `websitename`, `logo`, `footerdesc`) VALUES
(1, 'KRN News', 'logo_f.png', '© Copyright 2024 News | Powered by KRN News');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `resettoken` varchar(255) NOT NULL,
  `resettokenexpired` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `role`, `resettoken`, `resettokenexpired`) VALUES
(1, 'krunal', 'vegda', 'krunal@gmail.com', 'krunal@123', 1, '', NULL),
(2, 'Neha', 'Sharma', 'neha@gmail.com', 'neha@123', 0, '', NULL),
(3, 'admin', 'admin', 'admin@admin.com', 'admin', 1, '', NULL),
(4, 'kuldip', 'vegda', 'kunalvegda9960@gmail.com', '123', 0, '', NULL),
(5, 'jainam', 'bharwad', 'jainambharvad9@gmail.com', 'jainam', 0, '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
