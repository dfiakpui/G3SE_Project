-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2015 at 10:37 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `group_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE IF NOT EXISTS `assessment` (
`Assess_id` int(100) NOT NULL,
  `Course_id` varchar(100) NOT NULL,
  `Weight` varchar(1000) NOT NULL,
  `Description` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`Assess_id`, `Course_id`, `Weight`, `Description`) VALUES
(2, 'gh00', '200%', 'Time for some coding. :)										'),
(5, 'BA 255', '250%', 'My name is Management Information System														'),
(6, 'SOAN121', '50%', 'You must love reading to pass this course. :D'),
(7, 'Ba008', '150%', 'shut up');

-- --------------------------------------------------------

--
-- Table structure for table `assistant`
--

CREATE TABLE IF NOT EXISTS `assistant` (
`assistant_id` int(11) NOT NULL,
  `assistant_name` varchar(100) NOT NULL,
  `assistant_email` varchar(100) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assistant`
--

INSERT INTO `assistant` (`assistant_id`, `assistant_name`, `assistant_email`, `department_name`, `course_name`) VALUES
(5, 'daniel', 'daniel.com', 'Science', 'Agric'),
(6, 'Kofi', 'kofi@gmail.com', 'Ba101', 'MIS'),
(7, 'sjffs', 'fjsfsf@gmail.com', 'fsnf', 'fjsd'),
(8, 'sfsfjs', 'sfsdf@gmail.com', 'fskdf', 'fs'),
(9, 'klfsnf', 'dkfns@gmail.com', 'fwn', 'jlfn'),
(10, 'klfsnf', 'dkfns@gmail.com', 'fwn', 'jlfn'),
(11, 'klfsnf', 'dkfns@gmail.com', 'fwn', 'jlfn'),
(12, 'jdsnfjks', 'dfsjfnds@gmail.com', 'kkk', 'jfs');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `Course_ID` int(11) NOT NULL,
  `Required_Book` int(50) NOT NULL,
  `Department` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE IF NOT EXISTS `classrooms` (
`ID` int(100) NOT NULL,
  `Hall_No` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`ID`, `Hall_No`, `Location`) VALUES
(24, '222', 'Engineering'),
(25, '888', 'Admin Block'),
(29, '5555', 'Databank'),
(33, '249', 'Hall Way'),
(34, '789', 'Path way'),
(35, '123', 'Library Corn');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` varchar(50) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_department` varchar(100) NOT NULL,
  `course_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_department`, `course_description`) VALUES
('453', 'dance', 'arts', 'To teach skills in dance'),
('555', 'business', 'BA', 'accounting practice');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
`Department_ID` int(11) NOT NULL,
  `Department_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_ID`, `Department_name`) VALUES
(2, 'Bussine Administration'),
(3, 'Arts and Science'),
(4, 'Thesis/Projects'),
(6, 'Career Services'),
(17, 'computer engineering'),
(25, 'Food Science'),
(38, ''),
(39, ''),
(40, ''),
(41, 'Management'),
(42, 'hjdgjfhj'),
(43, 'hjdgjfhj'),
(44, 'ART 2'),
(45, 'hdfj');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE IF NOT EXISTS `lecturers` (
`lecturer_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `office_number` int(11) NOT NULL,
  `office_hours` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `department_id` int(11) NOT NULL,
  `password` varchar(250) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`lecturer_id`, `name`, `office_number`, `office_hours`, `email`, `phone_number`, `department_id`, `password`, `username`) VALUES
(1, 'Obed', 152, '4:00', 'obed.nsiah@gmail.com', '02655144789', 5, NULL, NULL),
(20, 'Agatha Maison', 222, '400', 'agatha.maison@gmail.com', '02114578541', 15, NULL, NULL),
(21, 'Will', 225, '4:00', 'wmarin@gmail.com', '0255471866', 21, NULL, NULL),
(22, 'daniel', 207221218, '5', 'kf@gmail.com', '0547940360', 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
`schedule_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `week` int(11) NOT NULL,
  `date` varchar(250) NOT NULL,
  `topic` varchar(1024) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `course_id`, `week`, `date`, `topic`) VALUES
(1, 0, 1, 'Jan 12', 'Intro to Web Tech'),
(2, 0, 1, 'Jan 14', 'HTML'),
(3, 0, 2, 'Jan 19', 'PHP'),
(4, 0, 3, 'Jan 26', 'CSS'),
(5, 0, 4, 'Feb 3', 'JQuery'),
(6, 0, 5, 'Feb 10', 'JQuery'),
(7, 0, 0, '', ''),
(8, 0, 6, 'mar 4', 'math');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
 ADD PRIMARY KEY (`Assess_id`);

--
-- Indexes for table `assistant`
--
ALTER TABLE `assistant`
 ADD PRIMARY KEY (`assistant_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD KEY `Department` (`Department`);

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
 ADD PRIMARY KEY (`Department_ID`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
 ADD PRIMARY KEY (`lecturer_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
 ADD PRIMARY KEY (`schedule_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
MODIFY `Assess_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `assistant`
--
ALTER TABLE `assistant`
MODIFY `assistant_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `classrooms`
--
ALTER TABLE `classrooms`
MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
MODIFY `Department_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
MODIFY `lecturer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
