-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 10:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `synoptic`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentid` int(11) NOT NULL,
  `ctext` varchar(150) NOT NULL,
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `reply` int(11) NOT NULL,
  `name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--
-- Error reading structure for table synoptic.country: #1932 - Table &#039;synoptic.country&#039; doesn&#039;t exist in engine
-- Error reading data for table synoptic.country: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `synoptic`.`country`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `countryy`
--

CREATE TABLE `countryy` (
  `countryID` int(11) NOT NULL,
  `countryname` varchar(30) NOT NULL,
  `townId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `galleryid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`galleryid`, `image`) VALUES
(11, 'image1.png'),
(12, 'image2.png'),
(13, 'image3.png'),
(14, 'iamge4.png'),
(15, 'image5.png'),
(19, 'image5.png'),
(20, 'image5.png'),
(21, 'image1.png'),
(22, 'image2.png'),
(23, 'image2.png');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postid` int(11) NOT NULL,
  `countryname` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` varchar(200) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postid`, `countryname`, `details`, `image`, `date`, `userID`) VALUES
(58, '    Malta', '        Beautiful place where one can enjoy a nice holiday', 'Screenshot 2024-01-24 214056.png', '2024/06/06', 0),
(59, '    Marocco ', '        Nice people and very good food ', 'Screenshot 2024-01-24 214056.png', '2024/06/06', 0),
(61, '   Japan', '      really nice mountain views and food is amazing ', 'Screenshot 2024-01-24 214056.png', '2024/06/06', 0),
(62, '    Spain', '        Nice cities and towns   ', 'Screenshot 2024-01-24 214056.png', '2024/06/06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `town`
--

CREATE TABLE `town` (
  `townID` int(11) NOT NULL,
  `townName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Dob` date NOT NULL,
  `password` varchar(100) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `surname`, `email`, `Dob`, `password`, `comments`) VALUES
(1, 'Mir', 'borg', 'hello@gmail.com', '1997-02-02', '$2y$10$kb9aZp/J/TvrpyPSybRZDO.UiJwLKefMQZP3D5G7gMTmkYEJXBaMa', 'shy person'),
(2, 'Mir', 'borg', 'hello@gmail.com', '1997-02-02', '$2y$10$scZCstP17RkCFW5hvdlpVOLp0hdEX8QsYy.v2r4K/dnGxCxi.iGCi', 'shy person'),
(3, 'Mir', 'borg', 'hello@gmail.com', '2016-08-17', '$2y$10$Lsx/bfWnw49J3bCg/01LP.NJkkVgkO2YkLUTmOoQs9gkLgScoq75.', 'shy person ,loves travelling'),
(4, 'tommy', 'grixti', 'h@gmail.com', '2017-08-17', '$2y$10$LRzxJNKefBmX7sfrGCpo.e1d.C6XaztfEafUYWuqINiUzrn6P78iS', 'Perfect human'),
(5, 'thomas', 'borg', '2@gmail.com', '2016-12-08', '$2y$10$DzMRU6kXeY8w2WvSaCQadeWo9ESmHOi.sZiA1IID9zXPeReNe.huK', 'Loves travelling'),
(6, 'pawla', 'damato', 'p@gmail.com', '1950-01-09', '$2y$10$jCbLAlpkoZ6k5H6/Ez/W6OzKkj263/YkmhPSqwAeh8kw9Jop6noFm', 'enjoys travelling'),
(7, 'jos', 'grixti', 'j@gmail.com', '1970-10-20', '$2y$10$Zpmn5LZztIJ.f36qouLs9eV3ysYyWiFFjR0J/4.BdRzzShpb/XQRG', 'i like seeing new cultures'),
(9, 'paul', 'formosa', 'pf@gmail.com', '2009-04-01', '$2y$10$r.sUmofBHyYIyWh3BXhm7O1OthRBMFxuyDSYqTrCsXB/YOY63Ujru', 'a full time traveller'),
(11, 'Max', 'Callus', 'max@gmail.com', '1994-04-04', '$2y$10$AzioL1/t28qNvzjLqoTqJ.bCA0E.Zzac55fjtSyDUmaIDMtGDYiu.', 'Travaller '),
(12, 'Neil', 'Borda', 'n@gmail.com', '1998-04-02', '$2y$10$j1TLAvEe98vpuHlUiCMSPe0ji36FySHtaHnMSInkLpR4YuzqMTmUW', 'i dont travel as i wish'),
(13, 'timmy', 'grixti', 't@gmail.com', '2022-02-26', '$2y$10$8zKI.thTXIuxxT5/g/OkJObIjihI8suv41YI0fQDO.eNC/6Rwq71q', 'Cute and shy person'),
(14, 'Teddy', 'Grixti', 'ted@gmail.com', '2022-02-28', '$2y$10$cJWpiI9Fp5T0jaabIfnA3uIds8nGDCetwfvboZzhT1e1Nnvv4GVAe', 'Calm person who like travel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `countryy`
--
ALTER TABLE `countryy`
  ADD PRIMARY KEY (`countryID`),
  ADD KEY `FK_CountryTown` (`townId`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`galleryid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `town`
--
ALTER TABLE `town`
  ADD PRIMARY KEY (`townID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `countryy`
--
ALTER TABLE `countryy`
  MODIFY `countryID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `galleryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `town`
--
ALTER TABLE `town`
  MODIFY `townID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `countryy`
--
ALTER TABLE `countryy`
  ADD CONSTRAINT `FK_CountryTown` FOREIGN KEY (`townId`) REFERENCES `town` (`townID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
