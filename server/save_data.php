-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 26, 2017 at 06:53 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `travel_starter`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
`id` int(11) UNSIGNED NOT NULL,
`name` varchar(50) NOT NULL,
`date_queried` date NOT NULL,
`place_id` varchar(50) NOT NULL,
`city_id` varchar(50) NOT NULL,
`longitude` decimal(11,8) NOT NULL,
`latitude` decimal(10,8) NOT NULL,
`images` text NOT NULL,
`snippet` varchar(100) NOT NULL,
`hashtags` varchar(50) NOT NULL,
`tag_label` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name`, `date_queried`, `place_id`, `city_id`, `longitude`, `latitude`, `images`, `snippet`, `hashtags`, `tag_label`) VALUES
(2, 'Plaza de Santa Ana', '2017-06-24', 'W__4328786', 'Madrid', '-3.70127180', '40.41514590', 'https://upload.wikimedia.org/wikipedia/commons/0/0a/Night_scene_in_Plaza_de_Santa_Ana%2C_Madrid.JPG\"', 'Located in the center.', '#PlazadeSantaAna', 'eatingout'),
(3, 'Chocolatería San Ginés', '2017-06-24', 'N__178821166', 'Madrid', '-3.70683510', '40.41678090', 'https://upload.wikimedia.org/wikipedia/commons/2/22/Chocolate_con_churros_-_San_Gin%C3%A9s_-_Madrid.jpg', 'Spanish doughnuts and talented waiters.', '#ChocolateríaSanGinés', 'eatingout');

-- --------------------------------------------------------

--
-- Table structure for table `items_in_itinerary`
--

CREATE TABLE `items_in_itinerary` (
`id` int(11) NOT NULL,
`activity_id` int(10) UNSIGNED NOT NULL,
`itinerary_id` int(10) UNSIGNED NOT NULL,
`timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Itineraries`
--

CREATE TABLE `Itineraries` (
`id` int(11) UNSIGNED NOT NULL,
`itinerary_name` varchar(20) NOT NULL,
`activity_id_list` int(11) UNSIGNED NOT NULL,
`timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` int(11) UNSIGNED NOT NULL,
`first_name` varchar(50) NOT NULL,
`last_name` varchar(50) NOT NULL,
`profile_picture` longblob NOT NULL,
`gallery_pictures` longblob NOT NULL,
`email` varchar(80) NOT NULL,
`facebook_id` bigint(20) UNSIGNED NOT NULL,
`itinerary_id_list` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items_in_itinerary`
--
ALTER TABLE `items_in_itinerary`
ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Itineraries`
--
ALTER TABLE `Itineraries`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `items_in_itinerary`
--
ALTER TABLE `items_in_itinerary`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Itineraries`
--
ALTER TABLE `Itineraries`
MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;