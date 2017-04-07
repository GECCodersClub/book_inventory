-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 05:26 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookinv`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `AuthID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`AuthID`, `Name`) VALUES
(1025, 'Amish Tripathi'),
(1026, 'J.K. Rowling'),
(1027, 'H.C. Verma'),
(1028, 'Anton Chekov'),
(1029, 'W. Shakespeare'),
(1030, 'Adolf Hitler'),
(1031, 'Leo Tolstoy'),
(1032, 'Arthur Conan Doyle'),
(1033, 'Tite Kubo'),
(1034, 'Karl Marx'),
(1035, 'Maxim Gorky'),
(1036, 'Tsugumi Ohba'),
(1037, 'Attilio Albergoni'),
(1038, 'Alexandre Dumas');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BookID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Price` int(11) NOT NULL,
  `Edition` int(11) NOT NULL,
  `DoP` year(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BookID`, `Name`, `Price`, `Edition`, `DoP`) VALUES
(1547, 'Mein Kampf', 99, 3, 1969),
(786, 'The Unknown', 47, 0, 2020),
(6710, 'Bleach', 251, 7, 2011),
(625, 'Panchtantra', 1000, 1, 2000),
(7836, 'Utopia', 348, 2, 2003),
(8612, 'Gulliver\'s Travels', 500, 4, 2009),
(88823, 'Ben Hur', 900, 2, 2005),
(44444, 'Hamlet', 700, 1, 1980),
(8123, 'Les Miserable', 501, 7, 2001),
(11111, 'Three Musketeers', 400, 5, 2006),
(7103, 'The Godfather', 700, 2, 1995),
(5098, 'India Divided', 750, 9, 1960);

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `DistID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`DistID`, `Name`) VALUES
(1, 'Misra Agencies'),
(2, 'M/S Book Land'),
(3, 'Sri Eswar Enterprises'),
(4, 'GodricsHollow Agencies'),
(5, 'M/S Bookionix'),
(6, 'New Book Traders'),
(7, 'Indra Book Emporium'),
(8, 'Patanjali Book Centre'),
(9, 'Suresh Book Depot'),
(10, 'Student\'s Friends'),
(11, 'Ajantha Book House'),
(12, 'Yoda Book Gallery'),
(13, 'Ubisoft Ltd'),
(14, 'M/S Inception '),
(15, 'Fuchshia Pvt Ltd');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `GenreId` int(11) NOT NULL,
  `GenreType` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`GenreId`, `GenreType`) VALUES
(1, 'Fiction'),
(2, 'Comedy'),
(3, 'Drama'),
(4, 'Horror'),
(5, 'Non-fiction'),
(6, 'History'),
(7, 'Satire'),
(8, 'Biography'),
(9, 'Science'),
(10, 'Mystery'),
(11, 'Mythology'),
(12, 'Tragedy'),
(13, 'Fantasy'),
(14, 'Manga'),
(15, 'Philosophy');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `LangID` int(11) NOT NULL,
  `Lang` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`LangID`, `Lang`) VALUES
(1, 'English'),
(2, 'Hindi'),
(3, 'Marathi'),
(4, 'Spanish'),
(5, 'Mandarin'),
(6, 'Russian'),
(7, 'Japanese'),
(8, 'French'),
(9, 'Korean'),
(10, 'Italian');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `PubId` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`PubId`, `Name`) VALUES
(196, 'Dhanpat Rai'),
(349, 'Arihant'),
(155, 'PHI Learning'),
(290, 'Navneet Publications'),
(451, 'Leadstart Publications'),
(1088, 'The telegraph'),
(511, 'S. Chand & Co.'),
(673, 'Gyan Books'),
(603, 'Mehta Publications'),
(786, 'Laxmi Publications'),
(816, 'New Horizon Media'),
(929, 'Excel Books'),
(88, 'VBRI Press');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`AuthID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`DistID`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`GenreId`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`LangID`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`PubId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `AuthID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1039;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88824;
--
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
  MODIFY `DistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `GenreId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `LangID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `PubId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1089;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
