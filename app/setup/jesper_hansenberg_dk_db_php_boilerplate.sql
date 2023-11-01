-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2023 at 11:02 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jesper_hansenberg_dk_db_php_boilerplate`
--

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `forum_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`forum_id`, `topic_id`, `name`, `description`) VALUES
(1, 1, 'All', ''),
(1, 2, 'Trending', ''),
(2, 3, 'All', ''),
(2, 4, 'Trending', ''),

-- Finite Abys Game Forum
(1, 5, 'General Discussion', 'Discuss anything related to the game.'),
(1, 6, 'Bugs & Issues', 'Report bugs and issues you encounter here.'),
(1, 7, 'Support', 'Ask for help regarding the game.'),
(1, 8, 'Feature Requests', 'Suggest features you would like to see implemented.'),

-- Mod Workshop Forum
(2, 9, 'New Mods', 'Discuss new mods here.'),
(2, 10, 'Mod: Infinite Abys', 'Most popular mod, making the game replayable'),
(2, 11, 'Mod: Abys', 'A retro mod, giving nostalgia'),
(2, 12, 'Mod: Calamity', 'A challenging mod for the game'),
(2, 13, 'General Discussion', 'Discuss all things related to modding'),
(2, 14, 'Mod Support', 'Recieve help on creating or running mods');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `comments` (`comment_id`, `user_id`, `post_id`, `value`, `content`, `created_at`) VALUES
(1, 7, 1, 0, 'My name is Joe Biden and I aprove this message', '2023-10-25 00:00:00'),
(2, 8, 2, 0, 'My name is Barack Obama and I aprove this message', '2023-10-25 00:00:00'),
(3, 7, 1, 0, 'My name is Joe Biden and I aprove this message', '2023-10-25 00:00:00'),
(4, 7, 2, 0, 'My name is Joe Biden and I aprove this message', '2023-10-25 00:00:00'),
(5, 6, 1, 0, 'My name is Donald J Trump and I aprove this message', '2023-10-25 00:00:00'),
(6, 7, 2, 0, 'My name is Joe Biden and I aprove this message', '2023-10-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `group_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `permissions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `name`, `permissions`) VALUES
(1, 'Standard User', ''),
(2, 'Administrator', '{\"admin\": 1,\r\n\"moderator\" :1}');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `value` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `posts` (`post_id`, `user_id`, `topic_id`, `title`, `value`, `content`, `created_at`) VALUES
(1, 1, 5, 'AITA?', 0, 'My gf has asked me to stop gooning after having a 6 hour sesh with the boys. I promptly kicked her out and left her to the streets after such vile comments. But now no one is here to cook dinner, so I am starting to regret. AITA?', '2023-10-25 00:00:00'),
(2, 2, 7, 'Help', 0, 'I am in trouble, and need quick help on the best ways to remove a fragile 3 inch cylinder from a small hole in the wall', '2023-10-25 00:00:00'),
(3, 3, 5, 'Gooning session ends prematurely', 0, 'I think some sort of bug is happening, where my gooning session stops too quickly', '2023-10-25 00:00:00'),
(4, 4, 8, 'Gooning feature?', 0, 'Will there ever come a gooning feature to Finite Abys? I love this game and I would really like to see more mechanics added.', '2023-10-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `joined` datetime NOT NULL,
  `group_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `name`, `joined`, `group_id`) VALUES
(1, 'Gunnar', '$2y$10$qaEEEemHqZoY0K7CzylbfuXs4CeG2v9jHAjC4uQKPFUgaO3y4NS6O', 'Gunnar', '2023-10-25 00:00:00', 2),
(2, 'Casper', '$2y$10$qaEEEemHqZoY0K7CzylbfuXs4CeG2v9jHAjC4uQKPFUgaO3y4NS6O', 'Casper', '2023-10-25 00:00:00', 2),
(3, 'Mihnea', '$2y$10$qaEEEemHqZoY0K7CzylbfuXs4CeG2v9jHAjC4uQKPFUgaO3y4NS6O', 'Mihnea', '2023-10-25 00:00:00', 2),
(4, 'Jeppe', '$2y$10$qaEEEemHqZoY0K7CzylbfuXs4CeG2v9jHAjC4uQKPFUgaO3y4NS6O', 'Jeppe', '2023-10-25 00:00:00', 2),
(5, 'Jesper', '$2y$10$qaEEEemHqZoY0K7CzylbfuXs4CeG2v9jHAjC4uQKPFUgaO3y4NS6O', 'Jesper', '2023-10-25 00:00:00', 1),
(6, 'DTrump', '$2y$10$qaEEEemHqZoY0K7CzylbfuXs4CeG2v9jHAjC4uQKPFUgaO3y4NS6O', 'Donald J Trump', '2023-10-25 00:00:00', 1),
(7, 'JBiden', '$2y$10$qaEEEemHqZoY0K7CzylbfuXs4CeG2v9jHAjC4uQKPFUgaO3y4NS6O', 'Joe Biden', '2023-10-25 00:00:00', 1),
(8, 'BObama', '$2y$10$qaEEEemHqZoY0K7CzylbfuXs4CeG2v9jHAjC4uQKPFUgaO3y4NS6O', 'Barack Obama', '2023-10-25 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_session`
--

CREATE TABLE `users_session` (
  `users_session_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

-- CREATE TABLE `votes` (
--   `vote_id` int(11) NOT NULL,
--   `user_id` int(11) NOT NULL,
--   `post_id` int(11) DEFAULT NULL,
--   `comment_id` int(11) DEFAULT NULL,
--   `value` tinyint(1) NOT NULL,
--   `created_at` timestamp NOT NULL DEFAULT current_timestamp()
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `users_ibfk_1` (`group_id`);

--
-- Indexes for table `users_session`
--
ALTER TABLE `users_session`
  ADD PRIMARY KEY (`users_session_id`),
  ADD KEY `users_session_ibfk_1` (`uid`);

--
-- Indexes for table `votes`
--
-- ALTER TABLE `votes`
--   ADD PRIMARY KEY (`vote_id`),
--   ADD KEY `user_id` (`user_id`),
--   ADD KEY `post_id` (`post_id`),
--   ADD KEY `comment_id` (`comment_id`);

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `users_session`
--
ALTER TABLE `users_session`
  MODIFY `users_session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `votes`
--
-- ALTER TABLE `votes`
--   MODIFY `vote_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`topic_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`);

--
-- Constraints for table `users_session`
--
ALTER TABLE `users_session`
  ADD CONSTRAINT `users_session_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `votes`
--
-- ALTER TABLE `votes`
--   ADD CONSTRAINT `votes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`uid`),
--   ADD CONSTRAINT `votes_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`),
--   ADD CONSTRAINT `votes_ibfk_3` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`comment_id`);
-- COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
