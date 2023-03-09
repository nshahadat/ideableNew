-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2023 at 11:22 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `admin_email`, `admin_pass`) VALUES
(1, 'admin01', 'admin01@ideable.com', 'ideable24/7');

-- --------------------------------------------------------

--
-- Table structure for table `askpass`
--

CREATE TABLE `askpass` (
  `askid` int(11) NOT NULL,
  `investor_id` int(255) NOT NULL,
  `investor_name` varchar(255) NOT NULL,
  `inventor_id` int(11) NOT NULL,
  `inventor_name` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `c_post_id` int(11) NOT NULL,
  `c_user_name` varchar(255) NOT NULL,
  `c_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `c_post_id`, `c_user_name`, `c_text`) VALUES
(1, 3, 'Shahadat Saad', 'fantastic'),
(2, 3, 'Shahadat Saad', 'mindich blowing'),
(3, 3, 'Shahadat Saad', 'khatarnak!'),
(42, 37, 'Nayeem Mallick Haisb', 'Mind Blowing'),
(43, 37, 'Nayeem Mallick Haisb', 'Fantastic!!!'),
(44, 36, 'Borolocks', 'sjhxshsjhxjhsx'),
(45, 2, 'Borolocks', 'jklsdjsd'),
(46, 2, 'Borolocks', 'kjhg');

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
(3, 'Inventor', 'ideabletest@gmail.com', '000000', '178492', '', ''),
(4, 'Inventor', 'shahadatnayeem23@gmail.com', '000000', '661856', '', ''),
(5, 'Inventor', 'shahadatsaad23@gmail.com', '000000', '205105', '', ''),
(6, 'Inventor', 'arnobm97@gmail.com', '000000', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `investment`
--

CREATE TABLE `investment` (
  `invuid` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `investor_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investment`
--

INSERT INTO `investment` (`invuid`, `post_id`, `post_title`, `investor_email`) VALUES
(1, 28, 'Flying Car', 'nshahadat3@gmail.com'),
(7, 3, 'none', 'nshahadat3@gmail.com'),
(8, 7, 'none', 'nshahadat3@gmail.com'),
(9, 37, '', 'hassanhasibul5@gmail.com'),
(10, 36, '', 'eng101@gmail.com');

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
(2, 'Borolocks', 'eng101@gmail.com', 'hack3d', '', '', ''),
(3, 'Borolocks', 'nshahadat3@gmail.com', 'hack3d', '385943', '', ''),
(8, 'Borolocks', 'hassanhasibul5@gmail.com', 'hack3d', '', '', ''),
(9, 'FIrst ideable inventor', 'jk@jk.com', 'lll', '', '', ''),
(10, 'FIrst ideable inventorn', 'jk@jjk.com', 'lll', '', '', ''),
(11, 'FIrst ideable inventornj', 'jk@jjjk.com', 'lll', '', '', ''),
(12, 'FIrst ideable c', 'jk@jjkk.com', 'lll', '', '', '');

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
  `post_comments` varchar(255) NOT NULL,
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
  `report` varchar(255) NOT NULL,
  `hide` varchar(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `post_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `inventor_id`, `inventor_name`, `inventor_email`, `title`, `description`, `post_comments`, `category`, `doc_files_dir`, `media_files_dir`, `thumb_files_dir`, `speech_files_dir`, `type_of_investment`, `area_of_investment`, `planning`, `patent`, `theoratically_proven`, `practically_proven`, `demo`, `business_model`, `related_projects`, `approximate_time`, `likes`, `report`, `hide`, `timestamp`, `post_pass`) VALUES
(2, 5, 'Inventor', 'shahadatsaad23@gmail.com', 'test 01', 'test 01', '', 'Technology', '/ideable/inventor/dbFiles/docFiles/', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/demo-title-picture.jpg', '/ideable/inventor/dbFiles/speechFiles/', 'none', 'none', '', '', 'Yes', 'Yes', 'Yes', '', 'Yes', 'infinite', 0, '1', '', '2023-03-09 09:29:18', ''),
(3, 5, 'Inventor', 'shahadatsaad23@gmail.com', 'test 02', 'test 02', '', 'Technology', '/ideable/inventor/dbFiles/docFiles/', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/demo-title-picture.jpg', '/ideable/inventor/dbFiles/speechFiles/', 'none', 'none', '', '', 'Yes', 'Yes', 'Yes', '', 'Yes', 'infinite', 0, '0', '', '2023-03-09 09:29:23', ''),
(4, 5, 'Inventor', 'shahadatsaad23@gmail.com', 'test 03', 'test 03', '', 'Farming', '/ideable/inventor/dbFiles/docFiles/', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/demo-title-picture.jpg', '/ideable/inventor/dbFiles/speechFiles/', 'none', 'none', '', '', 'Yes', 'Yes', 'Yes', '', 'Yes', 'infinite', 0, '0', '', '2023-03-09 09:29:27', ''),
(5, 5, 'Inventor', 'shahadatsaad23@gmail.com', 'test 04', 'test 04', '', 'Farming', '/ideable/inventor/dbFiles/docFiles/', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/demo-title-picture.jpg', '/ideable/inventor/dbFiles/speechFiles/', 'none', 'none', '', '', 'Yes', 'Yes', 'Yes', '', 'Yes', 'infinite', 0, '0', '', '2023-03-09 09:29:30', ''),
(7, 5, 'Inventor', 'shahadatsaad23@gmail.com', 'test 05', 'test 05', '', 'Education', '/ideable/inventor/dbFiles/docFiles/', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/demo-title-picture.jpg', '/ideable/inventor/dbFiles/speechFiles/', 'none', 'none', '', '', 'Yes', 'Yes', 'Yes', '', 'Yes', 'infinite', 0, '0', '', '2023-03-09 09:29:34', ''),
(8, 5, 'Inventor', 'shahadatsaad23@gmail.com', 'test 06', 'test 06', '', 'Media', '/ideable/inventor/dbFiles/docFiles/', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/demo-title-picture.jpg', '/ideable/inventor/dbFiles/speechFiles/', 'none', 'none', '', '', 'Yes', 'Yes', 'Yes', '', 'Yes', 'infinite', 0, '0', '', '2023-03-09 09:29:37', ''),
(9, 5, 'Inventor', 'shahadatsaad23@gmail.com', 'a', 'a', '', 'Media', '/ideable/inventor/dbFiles/docFiles/', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/demo-title-picture.jpg', '/ideable/inventor/dbFiles/speechFiles/', 'a', 'a', '', '', 'Yes', 'Yes', 'Yes', '', 'Yes', 'a', 0, '0', '', '2023-03-09 09:29:49', ''),
(10, 5, 'Inventor', 'shahadatsaad23@gmail.com', 'w', 'w', '', 'Technology', '/ideable/inventor/dbFiles/docFiles/', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/demo-title-picture.jpg', '/ideable/inventor/dbFiles/speechFiles/', 'w', 'w', '', '', 'No', 'Yes', 'Yes', '', 'No', 'w', 0, '0', '', '2023-03-09 09:29:53', ''),
(11, 5, 'Inventor', 'shahadatsaad23@gmail.com', 'g', 'g', '', 'Technology', '/ideable/inventor/dbFiles/docFiles/', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/demo-title-picture.jpg', '/ideable/inventor/dbFiles/speechFiles/', 'g', 'gg', '', '', 'Yes', 'No', 'Yes', '', 'Yes', 'g', 0, '0', '', '2023-03-09 09:29:56', ''),
(12, 5, 'Inventor', 'shahadatsaad23@gmail.com', 'q', 'q', '', 'Technology', '/ideable/inventor/dbFiles/docFiles/', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/demo-title-picture.jpg', '/ideable/inventor/dbFiles/speechFiles/', 'q', 'q', '', '', 'No', 'Yes', 'Yes', '', 'Yes', 'q', 0, '0', '', '2023-03-09 09:30:00', ''),
(13, 5, 'Inventor', 'shahadatsaad23@gmail.com', 'z', 'z', '', 'Technology', '/ideable/inventor/dbFiles/docFiles/3.jpg', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/demo-title-picture.jpg', '/ideable/inventor/dbFiles/speechFiles/4.jpg', 'z', 'z', '', '', 'Yes', 'No', 'Yes', '', 'Yes', 'z', 0, '0', '', '2023-03-09 09:30:04', ''),
(14, 5, 'Inventor', 'shahadatsaad23@gmail.com', 'x', 'x', '', 'Technology', '/ideable/inventor/dbFiles/docFiles/3.jpg', '/ideable/inventor/dbFiles/mediaFiles/', '/ideable/inventor/dbFiles/thumbFiles/demo-title-picture.jpg', '/ideable/inventor/dbFiles/speechFiles/4.jpg', 'x', 'x', '', '', 'Yes', 'Yes', 'No', '', 'Yes', 'x', 0, '0', '', '2023-03-09 09:30:08', ''),
(28, 5, 'Inventor', 'shahadatsaad23@gmail.com', 'Flying Car', 'A flying car or roadable aircraft is a type of vehicle which can function both as a personal car or automobile and as an aircraft. As used here, this includes vehicles which drive as motorcycles when on the road. The term \"flying car\" is also sometimes used to include hovercars.', '', 'Technology', '/ideable/inventor/dbFiles/docFiles/demoFiles.docx', '/ideable/inventor/dbFiles/mediaFiles/demoVideo.mp4', '/ideable/inventor/dbFiles/thumbFiles/6.jpg', '/ideable/inventor/dbFiles/speechFiles/demoVideo.mp4', 'Money & Instruments', 'Flying Technology', '', '', 'Yes', 'No', 'Yes', '', 'No', '5 Years', 0, '2', '', '2023-03-09 09:30:14', ''),
(36, 3, 'First ideable inventor', 'ideabletest@gmail.com', 'Napa Tablet', 'Napa is a medicine used to relieve pain and to reduce fever. It is used to treat many conditions such as headache, body ache, toothache and common cold. Napa may be prescribed alone or in combination with another medicine. You should take it regularly as advised by your doctor. It is usually best taken with food otherwise it may upset your stomach. Do not take more or use it for longer than recommended. Side effects are rare if this medicine is used correctly but this medicine may cause stomach pain, nausea, and vomiting in some people. Consult your doctor if any of these side effects bother you or do not go away. This medicine is widely prescribed and considered safe but is not suitable for everybody. Before taking it, let your doctor know if you have liver or kidney problems or are using blood-thinning medicines.', '', 'Technology', '/ideable/inventor/dbFiles/docFiles/dan-dennis-IcAKvvms4ug-unsplash.jpg', '/ideable/inventor/dbFiles/mediaFiles/demoVideo.mp4', '/ideable/inventor/dbFiles/thumbFiles/dan-dennis-IcAKvvms4ug-unsplash.jpg', '/ideable/inventor/dbFiles/speechFiles/demoVideo.mp4', 'Marketing', 'Brand Promotion', '', '', 'Yes', 'No', 'No', '', 'Yes', '2 years', 0, '', '', '2023-01-15 22:25:07', ''),
(37, 6, 'Shahadat Arnob Safran', 'arnobm97@gmail.com', 'lorem', 'Lorem Lorem Lorem LoremLorem Lorem Lorem LoremLorem Lorem Lorem LoremLorem Lorem Lorem LoremLorem Lorem Lorem LoremLorem Lorem Lorem LoremLorem Lorem Lorem LoremLorem Lorem Lorem LoremLorem Lorem Lorem LoremLorem Lorem Lorem LoremLorem Lorem Lorem LoremLorem Lorem Lorem LoremLorem Lorem Lorem LoremLorem Lorem Lorem LoremLorem Lorem Lorem LoremLorem Lorem Lorem Lorem', '', 'Technology', '/ideable/inventor/dbFiles/docFiles/kkk.png', '/ideable/inventor/dbFiles/mediaFiles/demoVideo.mp4', '/ideable/inventor/dbFiles/thumbFiles/kkk.png', '/ideable/inventor/dbFiles/speechFiles/demoVideo.mp4', 'lorem', 'lorem', '', 'No', 'Yes', 'No', 'Yes', '', 'Yes', 'lorem', 0, '', '', '2023-01-16 20:23:36', '');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `revuid` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `report_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sharedpost`
--

CREATE TABLE `sharedpost` (
  `sharedID` int(11) NOT NULL,
  `investor_id` int(11) NOT NULL,
  `inventor_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sharedpost`
--

INSERT INTO `sharedpost` (`sharedID`, `investor_id`, `inventor_id`, `post_id`) VALUES
(7, 3, 5, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `askpass`
--
ALTER TABLE `askpass`
  ADD PRIMARY KEY (`askid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `c_post_id` (`c_post_id`);

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
  ADD PRIMARY KEY (`invuid`),
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
  ADD PRIMARY KEY (`revuid`),
  ADD KEY `post-report` (`post_id`);

--
-- Indexes for table `sharedpost`
--
ALTER TABLE `sharedpost`
  ADD PRIMARY KEY (`sharedID`),
  ADD KEY `investor_id` (`investor_id`),
  ADD KEY `inventor_id` (`inventor_id`),
  ADD KEY `post_id` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `askpass`
--
ALTER TABLE `askpass`
  MODIFY `askid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `inventor`
--
ALTER TABLE `inventor`
  MODIFY `inventor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `investment`
--
ALTER TABLE `investment`
  MODIFY `invuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `investor`
--
ALTER TABLE `investor`
  MODIFY `investor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `revuid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sharedpost`
--
ALTER TABLE `sharedpost`
  MODIFY `sharedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`c_post_id`) REFERENCES `post` (`post_id`);

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

--
-- Constraints for table `sharedpost`
--
ALTER TABLE `sharedpost`
  ADD CONSTRAINT `relation inventor` FOREIGN KEY (`inventor_id`) REFERENCES `inventor` (`inventor_id`),
  ADD CONSTRAINT `relation investor` FOREIGN KEY (`investor_id`) REFERENCES `investor` (`investor_id`),
  ADD CONSTRAINT `relation post` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
