-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 05:04 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `Username` text DEFAULT NULL,
  `Email` text DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`Username`, `Email`, `Password`) VALUES
('', '', ''),
('', '', ''),
('tamanani07', 'tamanchie@gmail.com', '1234w3s');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `Id` int(11) DEFAULT NULL,
  `Name` text DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`Id`, `Name`, `Description`) VALUES
(1, 'C program calculator', 'Designed in 2022 with the help of my fellow calssmate'),
(2, 'Web portfolio', 'I am currectly building my portfolio  website on github');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `Id` int(11) DEFAULT NULL,
  `Name` text DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`Id`, `Name`, `Description`) VALUES
(1, 'Communication Skill', 'I took a course called communication skills during my first year. I learnt all the skills for good communication.'),
(2, 'PC managing and maintainance', 'With a course called PC managing and maintainance, i learnt how to maintain and manage PCs'),
(3, 'C programming', 'C programming is the first language i learnt in the university and i am more familiar with it.'),
(4, 'Business Skill', 'As i already mentioned in my bio, I am a business lady'),
(5, 'Using Photoshop', 'I obtained this skill in a course called Multimedia'),
(6, 'Web Designing', 'I am currectly learning web desgning and i am currently building my first web prtfolio which i successfully uploaded on github');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
