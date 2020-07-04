-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 08:57 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `section` int(2) NOT NULL,
  `image` varchar(200) NOT NULL,
  `brief` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `video_id` varchar(255) NOT NULL,
  `publish` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `type`, `section`, `image`, `brief`, `body`, `link`, `video_id`, `publish`) VALUES
(1, 'My First Video', 'video', 1, '2.jpg', 'Nice Video for all', 'Educational Video', 'https://youtu.be/mNA8d29xIv4', '', 0),
(2, 'asdfghjkjhgfsdf', 'post', 1, 'video.jpg', 'adfghjkyuyhgs', 'aaaaaaaaaarrrrrrrrrrrrrrrrrrr', 'aaassddwww', '', 0),
(3, 'affffffffffffffffff', 'post', 1, '2.jpg', 'wwwwwwwwwwwwwwwwwwwwwwwww', 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwww', 'wwwwwwwwwwwwwwwwwwwwwwwwwwww', '', 0),
(4, 'wwwwwwwwwwwww', 'video', 1, '2.jpg', 'ssssssssssssssssssssssssssss', 'sssssssssssssssssssssssssssssssss', 'sssssssssssssssssssssssssssssssss', 'dhV0DvtKfBc', 0),
(5, 'ssssssssss', 'post', 1, '2.jpg', 'sssssssssssssdddddddddddddddddddddddddddd', 'ddddddddddddddddddddddddddddddsssssssssssssssssssssss', 'ssssssssssssssssssss', '', 0),
(6, 'aaaaaaaaaaaaaa', 'post', 2, '2.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaassssssssssssssssssssss', 'ssssssssssssssssssssssssssssssssssss', '', 0),
(7, 'aaaaaaaasssssssss', 'video', 2, '2.jpg', 'qqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqq', 'aaaaaaaaaaaaaaaaa', '', 0),
(8, 'aaaaaaaaaassssss', 'post', 2, '2.jpg', 'ssssssssssssssssss', 'aaaaaaaaaaaaaaaaa', 'sssssssssssssssssssssss', '', 0),
(9, 'ssssss', 'post', 2, '2.jpg', 'aaaaaaaaaavvvvvvvvv', 'vvvvvvvvvvvvvvvvvvvv', 'dddddddddddddddddddddddddddd', '', 0),
(10, 'wwwwwwwwwww', 'post', 2, '2.jpg', 'aaaaaaaaccccccccccccc', 'ccccccccccccccccccc', 'vvvvvvvvvvv', '', 0),
(11, 'New Home', 'Post', 1, '070420201735225f00bdda0e11c20171109_140250.jpg', 'Its a good Idea', 'aaa', 'aaaa', 'aaa', 0),
(12, 'New Home', 'Video', 2, '070420201737135f00be49b8a1a20171109_134720.jpg', 'Its a good Idea', 'aaa', 'aaaa', 'aaa', 0),
(13, 'New Home2', 'Video', 2, '070420201742215f00bf7dcecd620171020_084024.jpg', 'Its a good Idea', 'aaa', 'aaaa', 'aaa', 0),
(14, '2 bath 2 bed Uttara', 'Post', 1, '070420201744095f00bfe9bcfa620171108_133802.jpg', 'Its a good Idea', 'aaa', 'aaaa', 'ssss', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `password`, `type`) VALUES
(1, 'ab', 'ab', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
