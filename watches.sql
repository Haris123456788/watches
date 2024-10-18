-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2024 at 04:20 PM
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
-- Database: `watches`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `brand_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `alt`, `brand_image`) VALUES
(1, 'brands', 'rado.png'),
(2, 'brands', 'swatch.png'),
(3, 'brands', 'omega-1.png'),
(4, 'brands', 'zenith.png');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `subheading` varchar(255) NOT NULL,
  `button1_text` varchar(255) NOT NULL,
  `button2_text` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `heading`, `subheading`, `button1_text`, `button2_text`, `image`) VALUES
(1, 'Custom Watches For ', ' Any Occasion', 'DESIGN &amp; ORDER', 'REQUEST VIRTUAL', 'header-bg.png'),
(2, 'Elegant Timepieces for', 'Every Style', 'SHOP NOW', 'LEARN MORE', 'header-bg.png'),
(3, 'Exclusive Designs', 'Crafted for You', 'CUSTOMIZE', 'EXPLORE COLLECTION', 'header-bg.png');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `name`, `price`, `category`, `image`) VALUES
(1, 'ADRIATICA ADR', '$650.00', 'latest', 'watch-2.png'),
(2, 'SEIKO SNZGO7K1', '$126.00', 'latest', 'watch-3.png'),
(3, 'ROAMER RM 220837', '$250.00', 'latest', 'watch-1.png'),
(5, 'ADRIATICA ADR', '$650.00', 'popular', 'watch-2.png'),
(6, 'SEIKO SNZGO7K1', '$126.00', 'popular', 'watch-3.png'),
(7, 'ROAMER RM 220837', '$250.00', 'popular', 'watch-1.png'),
(8, 'SEIKO SNZGO7K1', '$126.00', 'latest', 'watch-3.png'),
(9, 'ROAMER RM 220837', '$250.00', 'latest', 'watch-1.png'),
(10, 'ROAMER RM 220837', '$250.00', 'latest', 'watch-1.png'),
(11, 'ROAMER RM 220837', '$250.00', 'popular', 'watch-1.png'),
(12, 'ADRIATICA ADR', '$650.00', 'popular', 'watch-2.png'),
(13, 'SEIKO SNZGO7K1', '$126.00', 'popular', 'watch-3.png');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `heading`, `description`) VALUES
(1, 'Our Store', 'Memphis clinched a spot in the play-in tournament with the victory, but the fight for seeding continues. The race for the No. 8 spot in the West -- and the safety net of having to win just one of two games to make the playoffs -- could come down to the regular seasons final day, when Memphis and Golden State meet. The good thing for the Grizzlies is they dont have to leave home until that matchup as they have games against Dallas and two against Sacramento before the finale.'),
(2, 'Our story', 'Memphis clinched a spot in the play-in tournament with the victory, but the fight for seeding continues. The race for the No. 8 spot in the West -- and the safety net of having to win just one of two games to make the playoffs -- could come down to the regular seasons final day, when Memphis and Golden State meet. The good thing for the Grizzlies is they dont have to leave home until that matchup as they have games against Dallas and two against Sacramento before the finale.'),
(3, 'Our mission', 'Memphis clinched a spot in the play-in tournament with the victory, but the fight for seeding continues. The race for the No. 8 spot in the West -- and the safety net of having to win just one of two games to make the playoffs -- could come down to the regular seasons final day, when Memphis and Golden State meet. The good thing for the Grizzlies is they dont have to leave home until that matchup as they have games against Dallas and two against Sacramento before the finale.');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `message`, `image`) VALUES
(1, 'amanda smith', 'I recently purchased a stunning timepiece from this store, and I couldn\'t be happier with my choice. The quality of the watches is exceptional, and the variety available is impressive. The staff was incredibly knowledgeable, helping me select a watch that perfectly fits my style. It\'s not just a watch; it\'s a statement piece that I proudly wear every day. Highly recommend visiting this store for anyone looking to elevate their wrist game!', 'sandra-willims.png'),
(2, 'Ainara Vergara', 'I had an amazing experience shopping at this watch store! The selection of watches is truly remarkable, showcasing both classic and modern styles. I found the perfect watch that not only matches my personal taste but also fits my budget. The staff was friendly and attentive, guiding me through the options without any pressure. Wearing my new watch feels great, and I get compliments on it all the time. I highly recommend this store for anyone in search of a high-quality timepiece!', 'smith.png'),
(3, 'amanda smith', 'I had an amazing experience shopping at this watch store! The selection of watches is truly remarkable, showcasing both classic and modern styles. I found the perfect watch that not only matches my personal taste but also fits my budget. The staff was friendly and attentive, guiding me through the options without any pressure. Wearing my new watch feels great, and I get compliments on it all the time. I highly recommend this store for anyone in search of a high-quality timepiece!', 'sandra-willims.png'),
(4, 'Ainara Vergara', 'I had an amazing experience shopping at this watch store! The selection of watches is truly remarkable, showcasing both classic and modern styles. I found the perfect watch that not only matches my personal taste but also fits my budget. The staff was friendly and attentive, guiding me through the options without any pressure. Wearing my new watch feels great, and I get compliments on it all the time. I highly recommend this store for anyone in search of a high-quality timepiece!', 'smith.png'),
(5, 'Ainara Vergara', 'I had an amazing experience shopping at this watch store! The selection of watches is truly remarkable, showcasing both classic and modern styles. I found the perfect watch that not only matches my personal taste but also fits my budget. The staff was friendly and attentive, guiding me through the options without any pressure. Wearing my new watch feels great, and I get compliments on it all the time. I highly recommend this store for anyone in search of a high-quality timepiece!', 'smith.png'),
(6, 'amanda smith', 'I had an amazing experience shopping at this watch store! The selection of watches is truly remarkable, showcasing both classic and modern styles. I found the perfect watch that not only matches my personal taste but also fits my budget. The staff was friendly and attentive, guiding me through the options without any pressure. Wearing my new watch feels great, and I get compliments on it all the time. I highly recommend this store for anyone in search of a high-quality timepiece!', 'sandra-willims.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
