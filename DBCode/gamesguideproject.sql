-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 04:50 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamesguideproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `gamename` varchar(30) NOT NULL,
  `id` int(7) NOT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `rating` float NOT NULL,
  `numberofViews` int(12) NOT NULL,
  `agerequired` int(2) NOT NULL,
  `company` varchar(30) NOT NULL,
  `releasedDate` date NOT NULL,
  `addedDate` date NOT NULL,
  `numberofplayers` int(12) NOT NULL,
  `Short description` char(255) NOT NULL,
  `Icon` blob NOT NULL,
  `BackGround` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gamedownloadlinks`
--

CREATE TABLE `gamedownloadlinks` (
  `name` varchar(30) NOT NULL,
  `downloadurl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gamelisttype`
--

CREATE TABLE `gamelisttype` (
  `name` varchar(30) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gamephotolist`
--

CREATE TABLE `gamephotolist` (
  `name` varchar(30) NOT NULL,
  `photo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gamevideolist`
--

CREATE TABLE `gamevideolist` (
  `name` varchar(30) NOT NULL,
  `videoUrl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `generallike`
--

CREATE TABLE `generallike` (
  `Id` int(9) NOT NULL,
  `commentId` int(7) NOT NULL,
  `personEmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `personEmail` varchar(30) NOT NULL,
  `textvalue` text NOT NULL,
  `photovalue` longblob NOT NULL,
  `ID` int(7) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `Email` varchar(30) NOT NULL,
  `Password` varchar(60) CHARACTER SET latin1 COLLATE latin1_danish_ci NOT NULL,
  `Photo` longblob,
  `Name` varchar(9) NOT NULL,
  `Admin Flag` tinyint(1) DEFAULT NULL,
  `User Flag` tinyint(1) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Email`, `Password`, `Photo`, `Name`, `Admin Flag`, `User Flag`, `verified`) VALUES
('1@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, '1', NULL, 1, 1),
('ayman@hotmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', NULL, '1', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personfavoritegame`
--

CREATE TABLE `personfavoritegame` (
  `gamename` varchar(30) NOT NULL,
  `personEmail` varchar(30) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personrating`
--

CREATE TABLE `personrating` (
  `rate` tinyint(2) NOT NULL,
  `gamename` varchar(30) NOT NULL,
  `personemail` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supportmessage`
--

CREATE TABLE `supportmessage` (
  `id` int(7) NOT NULL,
  `personEmail` varchar(30) NOT NULL,
  `flagRead` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `gamedownloadlinks`
--
ALTER TABLE `gamedownloadlinks`
  ADD KEY `name` (`name`);

--
-- Indexes for table `gamelisttype`
--
ALTER TABLE `gamelisttype`
  ADD KEY `name` (`name`);

--
-- Indexes for table `gamephotolist`
--
ALTER TABLE `gamephotolist`
  ADD KEY `name` (`name`);

--
-- Indexes for table `gamevideolist`
--
ALTER TABLE `gamevideolist`
  ADD KEY `name` (`name`);

--
-- Indexes for table `generallike`
--
ALTER TABLE `generallike`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `commentId` (`commentId`),
  ADD KEY `personEmail` (`personEmail`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `personEmail` (`personEmail`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Email`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `personfavoritegame`
--
ALTER TABLE `personfavoritegame`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `personEmail` (`personEmail`),
  ADD KEY `gamename` (`gamename`);

--
-- Indexes for table `personrating`
--
ALTER TABLE `personrating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personemail` (`personemail`),
  ADD KEY `gamename` (`gamename`);

--
-- Indexes for table `supportmessage`
--
ALTER TABLE `supportmessage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personEmail` (`personEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `generallike`
--
ALTER TABLE `generallike`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` int(7) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gamedownloadlinks`
--
ALTER TABLE `gamedownloadlinks`
  ADD CONSTRAINT `gamedownloadlinks_ibfk_1` FOREIGN KEY (`name`) REFERENCES `game` (`name`);

--
-- Constraints for table `gamelisttype`
--
ALTER TABLE `gamelisttype`
  ADD CONSTRAINT `gamelisttype_ibfk_1` FOREIGN KEY (`name`) REFERENCES `game` (`name`);

--
-- Constraints for table `gamephotolist`
--
ALTER TABLE `gamephotolist`
  ADD CONSTRAINT `gamephotolist_ibfk_1` FOREIGN KEY (`name`) REFERENCES `game` (`name`);

--
-- Constraints for table `gamevideolist`
--
ALTER TABLE `gamevideolist`
  ADD CONSTRAINT `gamevideolist_ibfk_1` FOREIGN KEY (`name`) REFERENCES `game` (`name`);

--
-- Constraints for table `generallike`
--
ALTER TABLE `generallike`
  ADD CONSTRAINT `generallike_ibfk_1` FOREIGN KEY (`commentId`) REFERENCES `comment` (`id`),
  ADD CONSTRAINT `generallike_ibfk_2` FOREIGN KEY (`personEmail`) REFERENCES `person` (`Email`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`personEmail`) REFERENCES `person` (`Email`);

--
-- Constraints for table `personfavoritegame`
--
ALTER TABLE `personfavoritegame`
  ADD CONSTRAINT `personfavoritegame_ibfk_1` FOREIGN KEY (`gamename`) REFERENCES `game` (`name`),
  ADD CONSTRAINT `personfavoritegame_ibfk_2` FOREIGN KEY (`personEmail`) REFERENCES `person` (`Email`);

--
-- Constraints for table `personrating`
--
ALTER TABLE `personrating`
  ADD CONSTRAINT `personrating_ibfk_1` FOREIGN KEY (`gamename`) REFERENCES `game` (`name`),
  ADD CONSTRAINT `personrating_ibfk_2` FOREIGN KEY (`personemail`) REFERENCES `person` (`Email`);

--
-- Constraints for table `supportmessage`
--
ALTER TABLE `supportmessage`
  ADD CONSTRAINT `supportmessage_ibfk_1` FOREIGN KEY (`personEmail`) REFERENCES `person` (`Email`),
  ADD CONSTRAINT `supportmessage_ibfk_2` FOREIGN KEY (`id`) REFERENCES `message` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
