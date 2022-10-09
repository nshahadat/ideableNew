-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 11:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ideable`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventor`
--

CREATE TABLE `inventor` (
  `inventor_id` int(11) NOT NULL,
  `inventor_name` varchar(255) NOT NULL,
  `inventor_email` varchar(50) NOT NULL,
  `inventor_pass` char(32) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `inventor_details` text NOT NULL,
  `inventor_dp_dir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventor`
--

INSERT INTO `inventor` (`inventor_id`, `inventor_name`, `inventor_email`, `inventor_pass`, `otp`, `inventor_details`, `inventor_dp_dir`) VALUES
(1, 'test_inventor_01', 'ti1@ideable.com', 'imbiggani', '', '', ''),
(3, 'First ideable inventor', 'ideabletest@gmail.com', 'qwerty', '178492', '', ''),
(4, 'Shahadat Nayeem', 'shahadatnayeem23@gmail.com', 'pop', '471844', '', ''),
(5, 'test_user_08', 'shahanayeem23@gmail.com', '404', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `investment`
--

CREATE TABLE `investment` (
  `post_id` int(11) NOT NULL,
  `investor_id` int(11) NOT NULL,
  `investor_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `investor`
--

CREATE TABLE `investor` (
  `investor_id` int(11) NOT NULL,
  `investor_name` varchar(255) NOT NULL,
  `investor_email` varchar(50) NOT NULL,
  `investor_pass` char(32) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `investor_details` text NOT NULL,
  `investor_dp_dir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investor`
--

INSERT INTO `investor` (`investor_id`, `investor_name`, `investor_email`, `investor_pass`, `otp`, `investor_details`, `investor_dp_dir`) VALUES
(1, 'test_user_01', 'tu1@ideable.com', 'testing101', '', '', ''),
(2, 'Engineer', 'eng101@gmail.com', '787', '', '', ''),
(3, 'Shahadat Saad', 'nshahadat3@gmail.com', 'reset', '180936', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `inventor_id` int(11) NOT NULL,
  `inventor_name` varchar(255) NOT NULL,
  `inventor_email` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `doc_files_dir` varchar(255) NOT NULL,
  `media_files_dir` varchar(255) NOT NULL,
  `thumb_files_dir` varchar(255) NOT NULL,
  `speech_files_dir` varchar(255) NOT NULL,
  `type_of_investment` text NOT NULL,
  `area_of_investment` text NOT NULL,
  `planning` text NOT NULL,
  `patent` varchar(20) NOT NULL,
  `theoratically_proven` varchar(20) NOT NULL,
  `practically_proven` varchar(20) NOT NULL,
  `demo` varchar(20) NOT NULL,
  `business_model` varchar(20) NOT NULL,
  `related_projects` text NOT NULL,
  `approximate_time` varchar(50) NOT NULL,
  `likes` int(11) NOT NULL,
  `report` int(11) NOT NULL,
  `hide` varchar(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `inventor_id`, `inventor_name`, `inventor_email`, `title`, `description`, `category`, `doc_files_dir`, `media_files_dir`, `thumb_files_dir`, `speech_files_dir`, `type_of_investment`, `area_of_investment`, `planning`, `patent`, `theoratically_proven`, `practically_proven`, `demo`, `business_model`, `related_projects`, `approximate_time`, `likes`, `report`, `hide`, `timestamp`) VALUES
(2, 5, 'test_user_08', 'shahanayeem23@gmail.com', 'none', 'none', 'Technology', '/ideable/inventor/dbFiles/docFiles/', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/', '/ideable/inventor/dbFiles/speechFiles/', 'none', 'none', '', '', 'Yes', 'Yes', 'Yes', '', 'Yes', 'infinite', 0, 0, '', '2022-09-17 13:21:28'),
(3, 5, 'test_user_08', 'shahanayeem23@gmail.com', 'none', 'none', 'Technology', '/ideable/inventor/dbFiles/docFiles/', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/', '/ideable/inventor/dbFiles/speechFiles/', 'none', 'none', '', '', 'Yes', 'Yes', 'Yes', '', 'Yes', 'infinite', 0, 0, '', '2022-09-17 13:22:39'),
(4, 5, 'test_user_08', 'shahanayeem23@gmail.com', 'none', 'none', 'Technology', '/ideable/inventor/dbFiles/docFiles/', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/', '/ideable/inventor/dbFiles/speechFiles/', 'none', 'none', '', '', 'Yes', 'Yes', 'Yes', '', 'Yes', 'infinite', 0, 0, '', '2022-09-17 14:11:11'),
(5, 5, 'test_user_08', 'shahanayeem23@gmail.com', 'none', 'none', 'Technology', '/ideable/inventor/dbFiles/docFiles/', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/', '/ideable/inventor/dbFiles/speechFiles/', 'none', 'none', '', '', 'Yes', 'Yes', 'Yes', '', 'Yes', 'infinite', 0, 0, '', '2022-09-17 14:12:06'),
(6, 5, 'test_user_08', 'shahanayeem23@gmail.com', 'none', 'none', 'Technology', '/ideable/inventor/dbFiles/docFiles/', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/', '/ideable/inventor/dbFiles/speechFiles/', 'none', 'none', '', '', 'Yes', 'Yes', 'Yes', '', 'Yes', 'infinite', 0, 0, '', '2022-09-17 14:12:33'),
(7, 5, 'test_user_08', 'shahanayeem23@gmail.com', 'none', 'none', 'Technology', '/ideable/inventor/dbFiles/docFiles/', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/', '/ideable/inventor/dbFiles/speechFiles/', 'none', 'none', '', '', 'Yes', 'Yes', 'Yes', '', 'Yes', 'infinite', 0, 0, '', '2022-09-17 14:19:32'),
(8, 5, 'test_user_08', 'shahanayeem23@gmail.com', 'none', 'none', 'Technology', '/ideable/inventor/dbFiles/docFiles/', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/', '/ideable/inventor/dbFiles/speechFiles/', 'none', 'none', '', '', 'Yes', 'Yes', 'Yes', '', 'Yes', 'infinite', 0, 0, '', '2022-09-17 14:20:13');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `post_id` int(11) NOT NULL,
  `report_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventor`
--
ALTER TABLE `inventor`
  ADD PRIMARY KEY (`inventor_id`),
  ADD UNIQUE KEY `inventor_email` (`inventor_email`);

--
-- Indexes for table `investment`
--
ALTER TABLE `investment`
  ADD KEY `post` (`post_id`);

--
-- Indexes for table `investor`
--
ALTER TABLE `investor`
  ADD PRIMARY KEY (`investor_id`),
  ADD UNIQUE KEY `investor_email` (`investor_email`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD KEY `post-report` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventor`
--
ALTER TABLE `inventor`
  MODIFY `inventor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `investor`
--
ALTER TABLE `investor`
  MODIFY `investor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `investment`
--
ALTER TABLE `investment`
  ADD CONSTRAINT `post` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `post-report` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
