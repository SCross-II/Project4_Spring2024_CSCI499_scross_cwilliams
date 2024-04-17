-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2024 at 06:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question_text` text NOT NULL,
  `option_a` varchar(255) DEFAULT NULL,
  `option_b` varchar(255) DEFAULT NULL,
  `option_c` varchar(255) DEFAULT NULL,
  `correct_option` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_text`, `option_a`, `option_b`, `option_c`, `correct_option`) VALUES
(1, 'In what sports league do the Minnesota Lynx play?\r\n', 'ESPN', 'NBCUniversal', 'WWE', 'C'),
(2, 'What’s the name of the French brand of luxury sports cars that includes the Veyron, Chiron, and Divo?', 'Ferrari', 'Bugatti', 'Lamborghini', 'B'),
(3, 'Since he pitched 749 games in his 22-year career (including a perfect game in 1904), which MLB player has an award for great pitchers named after him?', 'Cy Young', 'Sandy Koufax', 'Babe Ruth', 'A'),
(4, 'In a football game, what’s it called when a player loses control (and therefore possession) of the ball before they have a chance to score, get tackled, or go out of bounds?', 'Interception', 'Touchdown', 'Fumble', 'C'),
(5, 'What is the feline name of the sports teams of the University of Kentucky?', 'Wildcats', 'Tigers', 'Bulldogs', 'A'),
(6, 'What former Minnesota Vikings and New England Patriots wide receiver has the NFL records for single season touchdown receptions, as well as the rookie record in that category? He’s also known for his tempestuous attitude, demanding multiple trades in his career.', 'Terrell Owens', 'Jerry Rice', 'Randy Moss', 'C'),
(7, 'The modern NBA team known as the Washington Wizards began their journey in Chicago as the Packers. Before finally landing in Washington, D.C., the team was transferred to what charming city of the Eastern US?', 'Philadelphia', 'Baltimore', 'Boston', 'B'),
(8, 'Only one NFL team has their logo on one side of the helmet and NOT on the other side. What team is this?', 'Dallas Cowboys', 'Pittsburgh Steelers', 'Green Bay Packers', 'B'),
(9, 'If you had tickets to Game 5 of the NBA Finals on June 11, 1997, you would witness Michael Jordan\'s iconic \"flu game\" in what city?', 'Salt Lake City', 'Los Angeles', 'Chicago', 'A'),
(10, 'What Washington Wizards player tarnished his legacy and standing in the NBA when he infamously brought guns into the locker room during the 2009-10 season?', 'Gilbert Arenas', 'John Wall', 'Bradley Beal', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `scores_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
