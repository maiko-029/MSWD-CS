-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2023 at 10:53 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phppractice`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(28, 'Marlon Juhn', 'Timogan', 'marlon.timogan@gmail.com', 'mjtimogan');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bdate` date NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `mname`, `lname`, `gender`, `bdate`, `address`) VALUES
(9, 'Manuel', 'Roxas', 'Quezon', 'Female', '1967-12-11', 'Quezon City'),
(11, 'Cory Jane', 'Cojuangco', 'Aquino', 'Female', '1966-10-19', 'Malacanang Palace'),
(12, 'Marlon Juhn', 'Marsado', 'Timogan', 'Male', '1996-11-06', 'Brgy 7, Nasipit ADN'),
(15, 'Andrea Kathleen May', 'Manalo', 'Panganiban', 'Male', '1993-12-09', 'Brgy Kalugmaan'),
(16, 'Jose John', 'Protacio', 'Rizal', 'Male', '1933-12-09', 'Dapitan City,Philippines'),
(24, 'Lorena Mae', 'Maglasang', 'Legarda', 'Female', '1934-04-27', 'Brgy. 6, Nasipit ADN'),
(26, 'Ricardo John', 'Ambot', 'Dalisay', 'Male', '1996-12-09', 'Manila Zoo City Philippines'),
(27, 'Ashley', 'Roxas', 'Binay', 'Female', '1994-09-08', 'Butuan City'),
(29, 'Nancy', 'Roxas', 'Binay', 'Female', '2019-08-29', 'Brgy. Triangulo, Nasipit'),
(30, 'Louigie', 'Cahigao', 'Prejoles', 'Female', '1987-10-20', 'D-5 Kinabjangan Nasipit, Agusan Del Norte');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
