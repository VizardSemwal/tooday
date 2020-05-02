-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2020 at 11:35 AM
-- Server version: 10.2.31-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toodayin_userdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `feeback`
--

CREATE TABLE `feeback` (
  `feedback_id` int(255) NOT NULL,
  `matter` text NOT NULL,
  `feedback` text NOT NULL,
  `time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `post_id` int(255) NOT NULL,
  `notification_type` text NOT NULL,
  `not_user_id` int(20) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `user_id`, `post_id`, `notification_type`, `not_user_id`, `post_date`, `status`) VALUES
(358, 39, 0, 'review', 39, '2020-04-22 14:59:49', 1),
(359, 39, 0, 'review', 39, '2020-04-22 15:00:02', 1),
(360, 39, 0, 'review', 39, '2020-04-22 15:00:39', 1),
(361, 39, 0, 'review', 39, '2020-04-22 15:00:43', 1),
(371, 39, 0, 'review', 39, '2020-04-22 16:04:21', 1),
(372, 39, 0, 'review', 39, '2020-04-22 16:07:36', 1),
(375, 39, 0, 'view', 0, '2020-04-22 16:11:24', 1),
(381, 39, 0, 'review', 39, '2020-04-22 16:58:08', 1),
(382, 39, 0, 'review', 39, '2020-04-22 16:58:23', 1),
(383, 39, 0, 'review', 39, '2020-04-22 16:58:25', 1),
(384, 39, 0, 'review', 39, '2020-04-22 16:58:28', 1),
(390, 40, 0, 'review', 40, '2020-04-25 05:29:23', 1),
(391, 40, 0, 'review', 40, '2020-04-25 05:29:30', 1),
(392, 40, 0, 'review', 40, '2020-04-25 05:29:59', 1),
(393, 40, 0, 'review', 40, '2020-04-25 05:30:00', 1),
(394, 40, 0, 'review', 40, '2020-04-25 05:30:00', 1),
(396, 40, 0, 'view', 39, '2020-04-25 11:58:42', 1),
(397, 40, 0, 'view', 0, '2020-04-25 13:10:11', 1),
(401, 40, 0, 'review', 39, '2020-04-25 18:05:37', 1),
(402, 40, 0, 'review', 39, '2020-04-25 18:05:38', 1),
(403, 40, 0, 'review', 39, '2020-04-25 18:05:47', 1),
(404, 40, 0, 'review', 39, '2020-04-25 18:05:59', 1),
(405, 39, 0, 'view', 40, '2020-04-26 14:06:05', 1),
(406, 39, 0, 'review', 40, '2020-04-26 14:06:22', 1),
(407, 39, 0, 'review', 39, '2020-04-26 17:53:38', 1),
(418, 39, 298, 'uploadphoto', 0, '2020-04-29 14:11:44', 1),
(419, 39, 299, 'uploadphoto', 0, '2020-04-29 14:12:07', 1),
(420, 39, 300, 'uploadphoto', 0, '2020-04-29 14:12:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `opinion_datas`
--

CREATE TABLE `opinion_datas` (
  `opinion_id` int(255) NOT NULL,
  `post_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `opinion` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `photo_info`
--

CREATE TABLE `photo_info` (
  `post_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp(),
  `location` varchar(35) NOT NULL,
  `description` varchar(255) NOT NULL,
  `post_type` varchar(40) NOT NULL,
  `text` text DEFAULT NULL,
  `option1` varchar(50) DEFAULT NULL,
  `option2` varchar(50) DEFAULT NULL,
  `option3` varchar(50) DEFAULT NULL,
  `option4` varchar(50) DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo_info`
--

INSERT INTO `photo_info` (`post_id`, `user_id`, `post`, `post_date`, `location`, `description`, `post_type`, `text`, `option1`, `option2`, `option3`, `option4`, `status`) VALUES
(298, 39, 'upload/aaaaaa.jpg', '2020-04-29 14:11:44', ' Meerut', 'scsad asd  asd asd a sd ads asd asd asds asd ', 'image', NULL, NULL, NULL, NULL, NULL, 0),
(299, 39, 'upload/abc.jpg', '2020-04-29 14:12:07', ' Meerut', 'adsadasd', 'image', NULL, NULL, NULL, NULL, NULL, 0),
(300, 39, 'upload/123.jpg', '2020-04-29 14:12:34', ' New Delhi', 'dasasd asd  asd asd as  asd asd', 'image', NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE `post_comment` (
  `comment_id` int(255) NOT NULL,
  `post_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `post_time` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE `post_like` (
  `like_id` int(255) NOT NULL,
  `post_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `likes` int(255) DEFAULT NULL,
  `dislikes` int(255) DEFAULT NULL,
  `post_date` datetime DEFAULT current_timestamp(),
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(255) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_id`, `rating`) VALUES
(18, 80);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `user_id`, `mobile`, `review`, `post_date`, `status`) VALUES
(179, 39, '9411783388', 'vikas', '2020-04-22 14:59:49', 0),
(180, 39, '9411783388', 'csd', '2020-04-22 15:00:02', 0),
(181, 39, '9411783388', 'csd', '2020-04-22 15:00:39', 0),
(182, 39, '9411783388', 'csd', '2020-04-22 15:00:43', 0),
(183, 39, '9411783388', 'sc', '2020-04-22 16:04:21', 0),
(184, 39, '9411783388', 'csd', '2020-04-22 16:07:36', 0),
(185, 39, '9411783388', 'Bhai kya baane diye ye', '2020-04-22 16:58:08', 0),
(186, 39, '9411783388', 'Bhai kya baane diye ye', '2020-04-22 16:58:23', 0),
(187, 39, '9411783388', 'Bhai kya baane diye ye', '2020-04-22 16:58:25', 0),
(188, 39, '9411783388', 'Bhai kya baane diye ye', '2020-04-22 16:58:28', 0),
(189, 40, '7017768355', 'Gazab', '2020-04-25 05:29:23', 0),
(190, 40, '7017768355', 'Gazab', '2020-04-25 05:29:30', 0),
(191, 40, '7017768355', 'Gazab', '2020-04-25 05:29:59', 0),
(192, 40, '7017768355', 'Gazab', '2020-04-25 05:30:00', 0),
(193, 40, '7017768355', 'Gazab', '2020-04-25 05:30:00', 0),
(194, 39, '7017768355', 'Thanksbro', '2020-04-25 18:05:37', 0),
(195, 39, '7017768355', 'Thanksbro', '2020-04-25 18:05:38', 0),
(196, 39, '7017768355', 'Thanksbro', '2020-04-25 18:05:47', 0),
(197, 39, '7017768355', 'Thanksbro', '2020-04-25 18:05:59', 0),
(198, 40, '9411783388', 'wah bro', '2020-04-26 14:06:22', 0),
(199, 39, '9411783388', 'thanks man', '2020-04-26 17:53:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `mobile` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `age` int(5) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `profession` varchar(40) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `locality` varchar(40) DEFAULT NULL,
  `profilepic` varchar(400) DEFAULT NULL,
  `rating` varchar(10) DEFAULT NULL,
  `likes` int(255) DEFAULT NULL,
  `user_id` int(255) NOT NULL,
  `total_post` int(255) DEFAULT NULL,
  `total_comment` int(255) DEFAULT NULL,
  `reviews` int(255) DEFAULT NULL,
  `contest` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`mobile`, `location`, `name`, `age`, `city`, `profession`, `bio`, `locality`, `profilepic`, `rating`, `likes`, `user_id`, `total_post`, `total_comment`, `reviews`, `contest`) VALUES
('9411783388', 'City of London', 'Vikas Semwal', 3, 'Dehradun', 'mmm', 'ascascas as as dasd a sdasd as asd ads as dasd asd a sasd ', 'Nakronda', '', NULL, 7, 39, 24, 8, 12, 0),
('7017768355', 'City of London', '', 0, '', '', '', '', '1587909843.png', NULL, 0, 40, 0, 0, 9, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feeback`
--
ALTER TABLE `feeback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `opinion_datas`
--
ALTER TABLE `opinion_datas`
  ADD PRIMARY KEY (`opinion_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `photo_info`
--
ALTER TABLE `photo_info`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `post_like`
--
ALTER TABLE `post_like`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feeback`
--
ALTER TABLE `feeback`
  MODIFY `feedback_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=421;

--
-- AUTO_INCREMENT for table `opinion_datas`
--
ALTER TABLE `opinion_datas`
  MODIFY `opinion_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `photo_info`
--
ALTER TABLE `photo_info`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `comment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=531;

--
-- AUTO_INCREMENT for table `post_like`
--
ALTER TABLE `post_like`
  MODIFY `like_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=742;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `opinion_datas`
--
ALTER TABLE `opinion_datas`
  ADD CONSTRAINT `opinion_datas_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `photo_info` (`post_id`),
  ADD CONSTRAINT `opinion_datas_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `photo_info`
--
ALTER TABLE `photo_info`
  ADD CONSTRAINT `photo_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD CONSTRAINT `post_comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`),
  ADD CONSTRAINT `post_comment_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `photo_info` (`post_id`);

--
-- Constraints for table `post_like`
--
ALTER TABLE `post_like`
  ADD CONSTRAINT `post_like_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `photo_info` (`post_id`),
  ADD CONSTRAINT `post_like_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
