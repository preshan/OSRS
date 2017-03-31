-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 06:39 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `osrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `alsubjectmaster`
--

CREATE TABLE IF NOT EXISTS `alsubjectmaster` (
  `SubjectKey` int(11) NOT NULL,
  `SubjectID` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `alsubjectmaster`
--

INSERT INTO `alsubjectmaster` (`SubjectKey`, `SubjectID`) VALUES
(5, 'Physics'),
(6, 'Chemistry'),
(7, 'Biology'),
(8, 'Botany'),
(9, 'Zoology'),
(10, 'Agricultural Science'),
(11, 'Combined Mathematics'),
(12, 'Higher Mathematics'),
(13, 'Mathematics'),
(14, 'Accounting'),
(15, 'Business Statistics'),
(16, 'Business Studies'),
(17, 'Economics'),
(18, 'Geography'),
(19, 'Art'),
(20, 'Political Science'),
(21, 'Logic and Scientific Methods'),
(22, 'Home Economics'),
(23, 'History'),
(24, 'Buddhist Civilization'),
(25, 'Hindu Civilization'),
(26, 'Islamic Civilization'),
(27, 'Greek & Roman Civilization'),
(28, 'Buddhism'),
(29, 'Hinduism'),
(30, 'Christianity'),
(31, 'Islam'),
(32, 'Dancing ( Sinhala)'),
(33, 'Dancing ( Bharatha)'),
(34, 'Music ( Oriental)'),
(35, 'Music ( Carnatic)'),
(36, 'Music ( Western)'),
(37, 'Drama & Theatre ( Sinhala)'),
(38, 'Sinhala'),
(39, 'Drama & Theatre ( Tamil)'),
(40, 'Drama & Theatre ( English)'),
(41, 'Tamil'),
(42, 'English'),
(43, 'Pali'),
(44, 'Sanskrit'),
(45, 'Latin'),
(46, 'Greek'),
(47, 'Arabic'),
(48, 'Malay'),
(49, 'Persian'),
(50, 'French'),
(51, 'German'),
(52, 'Russian'),
(53, 'Hindi'),
(54, 'Urdu'),
(55, 'Chinese'),
(56, 'Japanese'),
(57, 'Information Communication Technology'),
(58, 'Communication & Media Studies'),
(59, 'Civil Technology'),
(60, 'Mechanical Technology'),
(61, 'Electrical tronic & Information Technology'),
(62, 'Food Technology'),
(63, 'Agro Technology'),
(64, 'Bio Resource Technology'),
(65, 'Cristian Civilization'),
(66, 'Engineering Technology'),
(67, 'Boi System Technolgy'),
(68, 'Science for Technology'),
(69, 'General English');

-- --------------------------------------------------------

--
-- Table structure for table `atidetails`
--

CREATE TABLE IF NOT EXISTS `atidetails` (
  `ATIKey` int(11) NOT NULL,
  `ATIID` varchar(500) NOT NULL,
  `Location` varchar(500) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `TP` varchar(100) NOT NULL,
  `FAX` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atidetails`
--

INSERT INTO `atidetails` (`ATIKey`, `ATIID`, `Location`, `Address`, `TP`, `FAX`) VALUES
(1, 'ATI Galle', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `coursemaster`
--

CREATE TABLE IF NOT EXISTS `coursemaster` (
  `CourseKey` int(11) NOT NULL,
  `CourseID` varchar(500) NOT NULL,
  `Duration` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursemaster`
--

INSERT INTO `coursemaster` (`CourseKey`, `CourseID`, `Duration`) VALUES
(21, 'Higher National Diploma in Accountancy (HNDA)', '4'),
(22, 'Higher National Diploma in Agriculture (HNDT.Agri)', '3'),
(23, 'Higher National Diploma in Building Services (HNDBS)', '3.5'),
(24, 'Higher National Diploma in Building Services (HNDBS)', '2.5'),
(25, 'Higher National Diploma in Business Administration (HNDBA)', '2.5'),
(26, 'Higher National Diploma in English (HNDE)', '2.5'),
(27, 'Higher National Diploma in Engineering - Civil', '3.5'),
(28, 'Higher National Diploma in Engineering - Electrical', '3.5'),
(29, 'Higher National Diploma in Engineering - Mechanical', '3.5'),
(30, 'Higher National Diploma in Management (HNDM)', '3'),
(31, 'Higher Nation Diploma in Information Technology (HNDIT)', '2.5'),
(32, 'Higher Nation Diploma in Quantity Survey)', '2.5'),
(33, 'Higher Nation Diploma in Tourism and Hospitality Management (HNDTHM)', '3');

-- --------------------------------------------------------

--
-- Table structure for table `districtdetails`
--

CREATE TABLE IF NOT EXISTS `districtdetails` (
  `DistrictKey` int(11) NOT NULL,
  `DistrictID` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districtdetails`
--

INSERT INTO `districtdetails` (`DistrictKey`, `DistrictID`) VALUES
(1, 'Galle'),
(2, 'Colombo');

-- --------------------------------------------------------

--
-- Table structure for table `olsubjectmaster`
--

CREATE TABLE IF NOT EXISTS `olsubjectmaster` (
  `SubjectKey` int(11) NOT NULL,
  `SubjectID` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `olsubjectmaster`
--

INSERT INTO `olsubjectmaster` (`SubjectKey`, `SubjectID`) VALUES
(1, 'English Language'),
(2, 'Mathematics'),
(3, 'Science & Technology'),
(4, 'Buddhism'),
(5, 'Christianity (RC)'),
(6, 'Christianity'),
(7, 'Saivism'),
(8, 'Hinduism'),
(9, 'Islam'),
(10, 'Social Studies & History'),
(11, 'Sinhala Language & Lit'),
(12, 'Tamil Language & Lit'),
(13, 'Art'),
(14, 'Dancing ( Sinhala)'),
(15, 'Dancing ( Baratha)'),
(16, 'Music ( Oriental)'),
(17, 'Music ( Carnatic)'),
(18, 'Music ( Western)'),
(19, 'Business & Accounting Studies'),
(20, 'Drama & Theatre'),
(21, 'Agriculture & Food Technology'),
(22, 'Horticulture'),
(23, 'Animal Husbandry'),
(24, 'Tamil Literature'),
(25, 'Development Studies'),
(26, 'Geography'),
(27, 'Health & Physical Education'),
(28, 'Inland Bio - Resources Technology'),
(29, 'Marine Bio - Resources Technology'),
(30, 'Food Science & Food Technology'),
(31, 'Short hand & Typing ( Sinhala)'),
(32, 'Construction Technology'),
(33, 'Mechanical Technology'),
(34, 'Arts & Crafts'),
(35, 'Electricity & Electronics'),
(36, 'Home Economics'),
(37, 'Physical Education'),
(38, 'Appreciation of English Literary Texts'),
(39, 'Sinhala Literature'),
(40, 'Arabic Literature'),
(41, 'Pali'),
(42, 'Sanskrit'),
(43, 'Arabic'),
(44, 'Second Language Sinhala'),
(45, 'Second Language'),
(46, 'Latin'),
(47, 'French'),
(48, 'Malay'),
(49, 'History'),
(50, 'Hindi'),
(51, 'Japanese'),
(52, 'German'),
(53, 'Information & Communication Technology'),
(54, 'Entrepreneurship Studies'),
(55, 'Health & Physical Education'),
(56, 'Communication & Media Studies'),
(57, 'Citizenship Education & Governance / Civil & Governance'),
(58, 'Fisheries & Food Technology'),
(59, 'Design & Technology'),
(60, 'Arts & Crafts');

-- --------------------------------------------------------

--
-- Table structure for table `studentalexamdetailsmap`
--

CREATE TABLE IF NOT EXISTS `studentalexamdetailsmap` (
  `StudentKey` int(11) NOT NULL,
  `Year` year(4) NOT NULL,
  `IndexNo` varchar(500) NOT NULL,
  `Medium` varchar(500) NOT NULL,
  `Zscore` int(11) NOT NULL,
  `EnglishQulification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentalsubjectmap`
--

CREATE TABLE IF NOT EXISTS `studentalsubjectmap` (
  `StudentKey` int(11) NOT NULL,
  `SubjectKey` int(11) NOT NULL,
  `Grade` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentatimap`
--

CREATE TABLE IF NOT EXISTS `studentatimap` (
  `ApplicationKey` int(11) NOT NULL,
  `ApplicationID` varchar(100) NOT NULL,
  `StudentKey` int(11) NOT NULL,
  `ATIKey` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentcoursemap`
--

CREATE TABLE IF NOT EXISTS `studentcoursemap` (
  `StudentKey` int(11) NOT NULL,
  `CourseKey` int(11) NOT NULL,
  `Priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentdistrictmap`
--

CREATE TABLE IF NOT EXISTS `studentdistrictmap` (
  `StudentKey` int(11) NOT NULL,
  `DistrictKey` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentmaster`
--

CREATE TABLE IF NOT EXISTS `studentmaster` (
  `StudentKey` int(11) NOT NULL,
  `NameWithInitials` varchar(500) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `AddressL1` varchar(500) NOT NULL,
  `AddressL2` varchar(500) NOT NULL,
  `AddressL3` varchar(500) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `NIC` varchar(500) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `ContactNo` varchar(500) NOT NULL,
  `ModifiedUserKey` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentolexamdetailsmap`
--

CREATE TABLE IF NOT EXISTS `studentolexamdetailsmap` (
  `StudentKey` int(11) NOT NULL,
  `Year` year(4) NOT NULL,
  `IndexNo` varchar(500) NOT NULL,
  `Medium` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentolsubjectmap`
--

CREATE TABLE IF NOT EXISTS `studentolsubjectmap` (
  `StudentKey` int(11) NOT NULL,
  `SubjectKey` int(11) NOT NULL,
  `Grade` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usermaster`
--

CREATE TABLE IF NOT EXISTS `usermaster` (
  `UserKey` int(11) NOT NULL,
  `UserID` varchar(500) NOT NULL,
  `FullName` varchar(500) NOT NULL,
  `CreatedUserKey` int(11) NOT NULL,
  `CreatedDateTime` datetime NOT NULL,
  `ModifiedUserKey` int(11) NOT NULL,
  `ModifiedDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alsubjectmaster`
--
ALTER TABLE `alsubjectmaster`
  ADD PRIMARY KEY (`SubjectKey`);

--
-- Indexes for table `atidetails`
--
ALTER TABLE `atidetails`
  ADD PRIMARY KEY (`ATIKey`);

--
-- Indexes for table `coursemaster`
--
ALTER TABLE `coursemaster`
  ADD PRIMARY KEY (`CourseKey`);

--
-- Indexes for table `districtdetails`
--
ALTER TABLE `districtdetails`
  ADD PRIMARY KEY (`DistrictKey`);

--
-- Indexes for table `olsubjectmaster`
--
ALTER TABLE `olsubjectmaster`
  ADD PRIMARY KEY (`SubjectKey`);

--
-- Indexes for table `studentalexamdetailsmap`
--
ALTER TABLE `studentalexamdetailsmap`
  ADD PRIMARY KEY (`StudentKey`);

--
-- Indexes for table `studentalsubjectmap`
--
ALTER TABLE `studentalsubjectmap`
  ADD PRIMARY KEY (`StudentKey`,`SubjectKey`), ADD KEY `SU_SASM` (`SubjectKey`);

--
-- Indexes for table `studentatimap`
--
ALTER TABLE `studentatimap`
  ADD PRIMARY KEY (`ApplicationKey`,`StudentKey`,`ATIKey`), ADD KEY `S_SAM` (`StudentKey`), ADD KEY `A_SAM` (`ATIKey`);

--
-- Indexes for table `studentcoursemap`
--
ALTER TABLE `studentcoursemap`
  ADD PRIMARY KEY (`StudentKey`,`CourseKey`), ADD KEY `C_SCM` (`CourseKey`);

--
-- Indexes for table `studentdistrictmap`
--
ALTER TABLE `studentdistrictmap`
  ADD PRIMARY KEY (`StudentKey`,`DistrictKey`), ADD KEY `D_SDM` (`DistrictKey`);

--
-- Indexes for table `studentmaster`
--
ALTER TABLE `studentmaster`
  ADD PRIMARY KEY (`StudentKey`,`ModifiedUserKey`);

--
-- Indexes for table `studentolexamdetailsmap`
--
ALTER TABLE `studentolexamdetailsmap`
  ADD PRIMARY KEY (`StudentKey`);

--
-- Indexes for table `studentolsubjectmap`
--
ALTER TABLE `studentolsubjectmap`
  ADD PRIMARY KEY (`StudentKey`,`SubjectKey`), ADD KEY `SU_SOLM` (`SubjectKey`);

--
-- Indexes for table `usermaster`
--
ALTER TABLE `usermaster`
  ADD PRIMARY KEY (`UserKey`), ADD UNIQUE KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alsubjectmaster`
--
ALTER TABLE `alsubjectmaster`
  MODIFY `SubjectKey` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `atidetails`
--
ALTER TABLE `atidetails`
  MODIFY `ATIKey` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `coursemaster`
--
ALTER TABLE `coursemaster`
  MODIFY `CourseKey` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `districtdetails`
--
ALTER TABLE `districtdetails`
  MODIFY `DistrictKey` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `olsubjectmaster`
--
ALTER TABLE `olsubjectmaster`
  MODIFY `SubjectKey` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `studentatimap`
--
ALTER TABLE `studentatimap`
  MODIFY `ApplicationKey` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `studentmaster`
--
ALTER TABLE `studentmaster`
  MODIFY `StudentKey` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `usermaster`
--
ALTER TABLE `usermaster`
  MODIFY `UserKey` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentalexamdetailsmap`
--
ALTER TABLE `studentalexamdetailsmap`
ADD CONSTRAINT `S_SAEDM` FOREIGN KEY (`StudentKey`) REFERENCES `studentmaster` (`StudentKey`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentalsubjectmap`
--
ALTER TABLE `studentalsubjectmap`
ADD CONSTRAINT `ST_SASM` FOREIGN KEY (`StudentKey`) REFERENCES `studentmaster` (`StudentKey`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `SU_SASM` FOREIGN KEY (`SubjectKey`) REFERENCES `alsubjectmaster` (`SubjectKey`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentatimap`
--
ALTER TABLE `studentatimap`
ADD CONSTRAINT `A_SAM` FOREIGN KEY (`ATIKey`) REFERENCES `atidetails` (`ATIKey`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `S_SAM` FOREIGN KEY (`StudentKey`) REFERENCES `studentmaster` (`StudentKey`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentcoursemap`
--
ALTER TABLE `studentcoursemap`
ADD CONSTRAINT `C_SCM` FOREIGN KEY (`CourseKey`) REFERENCES `coursemaster` (`CourseKey`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `S_SCM` FOREIGN KEY (`StudentKey`) REFERENCES `studentmaster` (`StudentKey`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentdistrictmap`
--
ALTER TABLE `studentdistrictmap`
ADD CONSTRAINT `D_SDM` FOREIGN KEY (`DistrictKey`) REFERENCES `districtdetails` (`DistrictKey`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `S_SDM` FOREIGN KEY (`StudentKey`) REFERENCES `studentmaster` (`StudentKey`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentolexamdetailsmap`
--
ALTER TABLE `studentolexamdetailsmap`
ADD CONSTRAINT `S_SOEDM` FOREIGN KEY (`StudentKey`) REFERENCES `studentmaster` (`StudentKey`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentolsubjectmap`
--
ALTER TABLE `studentolsubjectmap`
ADD CONSTRAINT `ST_SOLM` FOREIGN KEY (`StudentKey`) REFERENCES `studentmaster` (`StudentKey`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `SU_SOLM` FOREIGN KEY (`SubjectKey`) REFERENCES `olsubjectmaster` (`SubjectKey`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
