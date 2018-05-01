-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 01, 2018 at 06:46 PM
-- Server version: 10.1.31-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubeswebpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `comic_ep`
--

CREATE TABLE `comic_ep` (
  `id` int(10) UNSIGNED NOT NULL,
  `comic_id` int(11) NOT NULL,
  `ep_title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `ep_num` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `pages` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comic_ep`
--

INSERT INTO `comic_ep` (`id`, `comic_id`, `ep_title`, `ep_num`, `pages`) VALUES
(6, 3, 'Perkenalan 1', '1', '[\"uploads/comics/pages/S_7725488028646.jpg\",\"uploads/comics/pages/S_7725489248085.jpg\",\"uploads/comics/pages/search-engine-optimization-red.png\",\"uploads/comics/pages/sosmed_logo.jpg\"]');

-- --------------------------------------------------------

--
-- Table structure for table `comic_serial`
--

CREATE TABLE `comic_serial` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `synopsis` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `genre` text COLLATE utf8_unicode_ci NOT NULL,
  `mature` enum('Y') COLLATE utf8_unicode_ci DEFAULT NULL,
  `cover` varchar(2083) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latestEpisode` int(11) NOT NULL,
  `complete` enum('Y') COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comic_serial`
--

INSERT INTO `comic_serial` (`id`, `title`, `synopsis`, `genre`, `mature`, `cover`, `latestEpisode`, `complete`) VALUES
(3, 'Viola Evergarden', 'Sinopsis Cerita', '[\"Fiksi\",\"Komedi\"]', NULL, 'idea-icon-ap.png', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `author` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `replyOf` int(11) DEFAULT NULL,
  `replyThreadId` int(11) NOT NULL,
  `creation_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `author` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `contentId` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'str125', '03AC674216F3E15C761EE1A5E255F067953623C8B388B4459E13F978D7C846F4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comic_ep`
--
ALTER TABLE `comic_ep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comic_serial`
--
ALTER TABLE `comic_serial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_author_index` (`author`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comic_ep`
--
ALTER TABLE `comic_ep`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comic_serial`
--
ALTER TABLE `comic_serial`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
