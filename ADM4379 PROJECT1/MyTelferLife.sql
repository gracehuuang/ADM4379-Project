-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 20, 2024 at 04:58 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MyTelferLife`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `ID` int(11) NOT NULL,
  `First Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `Email` text NOT NULL,
  `Display Name` text NOT NULL,
  `Program` text NOT NULL,
  `Year of Study` text NOT NULL,
  `GPA` int(11) NOT NULL,
  `BIO` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`ID`, `First Name`, `Last Name`, `Email`, `Display Name`, `Program`, `Year of Study`, `GPA`, `BIO`) VALUES
(1, 'Camilia', 'Kaci', 'ckaci101@uottawa.ca', 'camiliakaci', 'Business Technology Management', 'Fourth Year', 8, 'hello I\'m Cami!'),
(2, 'Shay ', 'Kirk', 'skirk065@uottawa.ca', 'shaykirk', 'Business Technology Management', 'Fourth Year', 8, 'hello im shay'),
(3, 'Jacob', 'Aristotle', 'jaris096@uottawa.ca', 'jacobaristotle', 'business techonology management', 'fourth year', 8, 'hello im jacob'),
(4, 'Joseph', 'Eid', 'jeid102@uottawa.ca', 'Joeyeid', 'business technology management', 'fourth year', 8, 'hello im joey'),
(5, 'Kurtis', 'Ikkers', 'kikke019@uottawa.ca', 'Kurtisikkers', 'business technology management', 'fourth year', 8, 'hello im kurtis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
