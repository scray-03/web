-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 10:32 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `levaniweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(111) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'კატეგორია 1'),
(2, 'კატეგორია 2'),
(3, 'კატეგორია 3'),
(4, 'კატეგორია 4');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(111) NOT NULL,
  `cat_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc_ka` text DEFAULT NULL,
  `upload_date` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `cat_id`, `title`, `desc_ka`, `upload_date`, `image`) VALUES
(18, 1, '#1 სიახლე', '#1 სიახლის აღწერა', '2021-05-07', 'news/33C7gM4x0WnJL8uCbiC5cxpS783PGtiHGLTeeyCY.png'),
(19, 2, '#2 სიახლე', '#2 სიახლის აღწერა', '2021-05-07', 'news/pktAHzogVMQIB8pVoPaCMoKbms0g5HTuErpXcZOW.png'),
(20, 3, '#3 სიახლე', '#3 სიახლის აღწერა', '2021-05-07', 'news/i9L0DDIeZBZOB1IFIx1zOACvoqEqDCKy9hg1uhui.png'),
(21, 4, '#4 სიახლე', '#4 სიახლის აღწერა', '2021-05-07', 'news/d4oplHWJ045n9vb2uO139EaEWw33uQNH65XTbE8H.png'),
(22, 1, '#5 სიახლე', '#5 სიახლის აღწერა', '2021-05-07', 'news/uylmTqKvwt9zcLzIpssoHARfrCdhhF6747QfWN4k.png'),
(23, 2, '#6 სიახლე', '#6 სიახლის აღწერა', '2021-05-07', 'news/ZKcTkFdqsNcFELNgh0MqDLGJ4H5FKZUQyYtAeUj5.png'),
(24, 3, '#7 სიახლე', '#7 სიახლის აღწერა', '2021-05-07', 'news/gP5Zw5ORGNKgNALy2B37GnYH5TpXewQ6zVQdIx7r.png'),
(25, 4, '#8 სიახლე', '#8 სიახლის აღწერა', '2021-05-07', 'news/df9m5a7mmf4pSQuJZqulfMeiQIiyfuDwnI4ZZWoj.png'),
(26, 1, '#9 სიახლე', '#9 სიახლის აღწერა', '2021-05-07', 'news/NRcMui6I1RnKE9L8IRjlBZkkxadTPpgeUhC0PjWQ.png'),
(27, 2, '#10 სიახლე, რომელიც არის დარედაქტირებული', '#10 სიახლის აღწერა', '2021-05-07', 'news/p5EqhGnxLHYkMg6Bjo6SvOB59qzyVQbNGbB5hMRt.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
