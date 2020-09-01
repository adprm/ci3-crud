-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 09:24 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud-ci3`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` varchar(64) NOT NULL,
  `title` varchar(64) NOT NULL,
  `desc` text NOT NULL,
  `release` date NOT NULL,
  `poster` varchar(64) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `desc`, `release`, `poster`) VALUES
('5f4de6385849a', 'Transformers ', 'Transformers is an American science fiction film based on the Transformers story in 1984. This film combines CGI with live action. Directed by Michael Bay. The slogan of this film is very famous, namely ', '2020-09-01', '5f4de6385849a.jpg'),
('5f4de7ed015ff', 'Harry Potter', 'Harry Potter is a series of seven fantasy novels written by British author J. K. Rowling. This novel tells the story of the adventures of a teenage witch named Harry Potter and his best friend, Ronald Bilius Weasley and Hermione Jean Granger, who are students at Hogwarts School of Witchcraft and Wizardry.', '2020-08-31', '5f4de7ed015ff.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
