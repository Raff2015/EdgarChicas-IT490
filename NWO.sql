-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2018 at 08:14 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NWO`
--

-- --------------------------------------------------------

--
-- Table structure for table `Movies`
--

CREATE TABLE `Movies` (
  `MovieID` int(7) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `ReleaseDate` int(15) NOT NULL,
  `Genre` text NOT NULL,
  `RunTime` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `MWatch`
--

CREATE TABLE `MWatch` (
  `username` varchar(30) NOT NULL,
  `MovieTitle` varchar(40) NOT NULL,
  `MovieWatch` tinyint(1) NOT NULL,
  `Rating` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Person`
--

CREATE TABLE `Person` (
  `RoleID` int(10) NOT NULL,
  `Movie` varchar(40) NOT NULL,
  `Person` text NOT NULL,
  `Role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `UID` int(10) NOT NULL,
  `session_id` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `reg_date` int(15) NOT NULL,
  `last_login` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`UID`, `session_id`, `email`, `fname`, `lname`, `password`, `reg_date`, `last_login`) VALUES
(212728131, '', 'root', 'Vinny', 'Winny', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 1520380934, 0),
(1067792806, '', 'get', 'Waz', 'Zup', 'f4800df8d1bc61fc95220645938cd65532a64067', 1520380069, 1520380139);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Movies`
--
ALTER TABLE `Movies`
  ADD PRIMARY KEY (`MovieID`);

--
-- Indexes for table `MWatch`
--
ALTER TABLE `MWatch`
  ADD KEY `username` (`username`);

--
-- Indexes for table `Person`
--
ALTER TABLE `Person`
  ADD PRIMARY KEY (`RoleID`),
  ADD KEY `Movie` (`Movie`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
