-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 12:53 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `adminname` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `password`) VALUES
(1, 'joel', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `lang_id` int(10) NOT NULL,
  `language` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`lang_id`, `language`) VALUES
(1, 'English'),
(2, 'Hindi'),
(3, 'Kannada'),
(4, 'Malayalam');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(10) NOT NULL,
  `movie_name` varchar(20) NOT NULL,
  `lang_id` int(10) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `rating` float NOT NULL,
  `reviews` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `lang_id`, `genre`, `rating`, `reviews`) VALUES
(1, 'Flipped', 1, 'Comedy', 4.5, 'xyz'),
(2, 'Grown ups', 1, 'Comedy', 4, 'sfs'),
(3, 'Bala', 2, 'Comedy', 4, 'good'),
(4, 'Easy A', 1, 'Comedy', 3.5, 'dgdgd'),
(5, 'Welcome', 2, 'Comedy', 4, 'sgsg'),
(6, 'Invasion', 1, 'Science-fiction', 4, 'dawdada'),
(7, 'Sputnik', 1, 'Science-fiction', 4.5, 'r1'),
(8, 'Possesser', 1, 'Science-fiction', 3.5, 'r2'),
(9, 'The Experiment', 1, 'thriller', 3.5, 'r3'),
(10, 'Devil', 1, 'thriller', 3.5, 'r4'),
(11, 'Hotel Transylvania 4', 1, 'animation', 5, 'r5'),
(12, 'The Grudge', 1, 'Horror', 4, 'r6'),
(13, 'Krrish 3', 2, 'Science-fiction', 4, 'r10'),
(14, 'Creature 3D', 2, 'Science-fiction', 4.5, 'r11'),
(15, 'Table No. 21', 2, 'thriller', 3.5, 'r12'),
(16, 'Ek Ajnabee', 2, 'thriller', 4, 'r13'),
(17, 'Hanuman', 2, 'animation', 4, 'r14'),
(18, '13 B', 2, 'Horror', 3.5, 'r15'),
(19, 'Bramhachari', 3, 'Comedy', 3.5, 'The film has multiple moments that evoke laughs and has characters and situations that are created to play to the gallery. Sathish Ninasam lives his character and does a commendable job. Aditi Prabhudeva too is impressive. The ensemble cast has some good comic talent and Shivaraj KR Pete, Achyuth Kumar and Dattanna particularly impress. Bramhachari deals with a serious issue, but never gets preachy.'),
(20, 'French Biriyani ', 3, 'Comedy', 4, 'This typical comedy of errors with mistaken identities begins with the death of a local don Charles. His wastrel son is given a cryptic message before his death, only to not remember it fully. This leads them to try and decipher what he meant, from which begins a quirky chase where the two leading men - Simon and Asgar - join in.'),
(21, 'Oppam', 4, 'thriller', 3.5, 'Heard good things about the movie & so I went to check it out myself and I was not disappointed.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `lang_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
