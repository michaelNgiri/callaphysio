-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 09:57 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cap`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `slug`, `first_name`, `last_name`, `middle_name`, `birthday`, `user_type`, `photo`, `address`, `city`, `state`, `country`, `map_longitude`, `map_latitude`, `email`, `phone`, `password`, `website`, `facebook`, `twitter`, `linkedin`, `instagram`, `other`, `reg`, `expertise`, `bio`, `facebook_id`, `google_id`, `preferences`, `approved_at`, `blocked_at`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'michael-ngiri', 'Michael', 'Ngiri', NULL, NULL, 2, 'img/profile-pictures/me.jpg', NULL, NULL, 37, 1, NULL, NULL, 'michael@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'd4XI4FcXa7rgvLN7HO31qxt7Jx6tbu0iVJxgck8cw6EqoGtDRlzRUFcBEYrC', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(2, 'emmanuel-osinaike', 'emmanuel', 'osinaike', NULL, '2018-07-09', 2, 'img/profile-pictures/emmanuel.jpg', NULL, NULL, 24, 1, NULL, NULL, 'emmanual@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(3, 'evans-osinaike', 'evans', 'osinaike', NULL, '2018-07-09', 2, 'img/profile-pictures/evans.jpg', NULL, NULL, 30, 1, NULL, NULL, 'evans@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', 'https://facebook.com/callaphysio', 'https://linkedin.com/callaphysio\r\n', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(4, 'philip-coulson', 'Philip', 'Coulson', NULL, NULL, 2, NULL, NULL, NULL, 3, 1, NULL, NULL, 'phil@shield.com', NULL, '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', NULL, NULL, 'https://facebook.com/callaphysio', 'https://linkedin.com/callaphysio\r\n', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(5, 'jane-hill', 'jane', 'jane', NULL, NULL, 2, NULL, NULL, NULL, 12, 1, NULL, NULL, 'jane@callaphysio.com', NULL, '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', NULL, NULL, 'https://facebook.com/callaphysio', 'https://linkedin.com/callaphysio\r\n', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(6, 'kennedy-shiroma', 'keneddy', 'shiroma', NULL, '2018-07-09', 2, NULL, NULL, 42, 12, 1, NULL, NULL, 'kennedy@callaphysio.com', NULL, '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', NULL, NULL, 'https://facebook.com/callaphysio', 'https://linkedin.com/callaphysio\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(7, 'cap-cap', 'guest', 'user', NULL, NULL, 1, NULL, NULL, NULL, 17, 1, NULL, NULL, 'cap@callaphysio.com', NULL, '$2y$10$/rZZnc1j1s5jtER5qKnedej/6DsVtArtMuYOARrzUMIogojNUMbqm', NULL, NULL, NULL, NULL, 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8T7HzEcw2rVdwAmo4aDxpe7kMThYpYL2ojoePCwUeMCVPAZOUBw6wyBh4lX6', '2018-07-18 11:42:42', '2018-07-18 11:42:42', NULL),
(8, 'test-physio', 'test', 'physio', NULL, NULL, 2, NULL, NULL, NULL, 37, 1, NULL, NULL, 'test@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(9, 'physio1', 'physio', 'physio', NULL, NULL, 2, NULL, NULL, NULL, 37, 1, NULL, NULL, 'physio1@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(10, 'rihannon-bucky', 'rihannon', 'bucky', NULL, NULL, 2, NULL, NULL, NULL, 32, 1, NULL, NULL, 'rihannon@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(11, 'riley-davis', 'riley', 'davis', NULL, NULL, 2, NULL, NULL, NULL, 1, 1, NULL, NULL, 'riley@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(12, 'matilde-webber', 'matilda', 'webber', NULL, NULL, 2, NULL, NULL, NULL, 5, 1, NULL, NULL, 'matty@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(13, 'angus-McGyver', 'Angus', 'McGyver', NULL, NULL, 2, NULL, NULL, NULL, 5, 1, NULL, NULL, 'mcgyver@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(14, 'daisy-johnson', 'Daisy', 'Johnson', NULL, NULL, 2, NULL, NULL, NULL, 6, 1, NULL, NULL, 'quake@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(15, 'helena-rodriguez', 'helena', 'rodriguez', NULL, NULL, 2, NULL, NULL, NULL, 7, 1, NULL, NULL, 'yoyo@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(16, 'mack-mckenzie', 'mack', 'mckenzie', NULL, NULL, 2, NULL, NULL, NULL, 8, 1, NULL, NULL, 'toroman@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(17, 'liephold-fitz', 'liephold', 'fitz', NULL, NULL, 2, NULL, NULL, NULL, 9, 1, NULL, NULL, 'thedoctor@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(18, 'jemma-annie-simmons', 'jemma', 'simmons', 'annie', NULL, 2, NULL, NULL, NULL, 10, 1, NULL, NULL, 'jemma@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(19, 'melinda-may', 'melinda', 'may', '', NULL, 2, NULL, NULL, NULL, 11, 1, NULL, NULL, 'thecalvary@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(20, 'grant-ward', 'grant', 'ward', '', NULL, 2, NULL, NULL, NULL, 12, 1, NULL, NULL, 'ward@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(21, 'billy-koenig', 'billy', 'koenig', '', NULL, 2, NULL, NULL, NULL, 13, 1, NULL, NULL, 'koenig@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(22, 'holden-radcliffe', 'holden', 'radcliffe', '', NULL, 2, NULL, NULL, NULL, 14, 1, NULL, NULL, 'radcliffe@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(23, 'bobby-morse', 'bobby', 'morse', '', NULL, 2, NULL, NULL, NULL, 15, 1, NULL, NULL, 'mockingbird@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(24, 'lance-hunter', 'lance', 'hunter', '', NULL, 2, NULL, NULL, NULL, 16, 1, NULL, NULL, 'hunter@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(25, 'trip', 'trip', 'triplet', '', NULL, 2, NULL, NULL, NULL, 17, 1, NULL, NULL, 'trip@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL),
(26, 'mike-peterson', 'mike', 'peterson', '', NULL, 2, NULL, NULL, NULL, 18, 1, NULL, NULL, 'deathlock@callaphysio.com', '+2348012345678', '$2y$10$8HUlJlPHRVrTtfzppLYGbOgbSfmbqJVeDnti4SQQVPvM3Vcbs5kPC', 'www.callaphysio.com', 'https://facebook.com/callaphysio', NULL, 'https://linkedin.com/callaphysio', 'instagram.com/cap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hfygXb0Jzo1MEb91NXP0Cc51n6PuZJIdtBTGozbZkoNqClkhP7EmcPaQ5TJk', '2018-07-18 10:09:06', '2018-07-18 10:09:06', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_slug_unique` (`slug`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `user_type_id` (`user_type`),
  ADD KEY `city_id` (`city`),
  ADD KEY `state_id` (`state`),
  ADD KEY `country_id` (`country`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `city_id` FOREIGN KEY (`city`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `country_id` FOREIGN KEY (`country`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `state_id` FOREIGN KEY (`state`) REFERENCES `states` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_type_id` FOREIGN KEY (`user_type`) REFERENCES `user_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
