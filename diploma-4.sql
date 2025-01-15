-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2025 at 05:49 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diploma-4`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `student_delete` (IN `did` INT)   BEGIN
	DELETE FROM students WHERE stuid=did;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `student_insert` (IN `rno` INT, IN `name` VARCHAR(50), IN `class` VARCHAR(50))   BEGIN
	INSERT INTO students (rno,name,class) VALUES (rno,name,class);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `student_select` ()   BEGIN
	SELECT * FROM students;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `student_selectbyid` (IN `uid` INT)   BEGIN
	SELECT * FROM students WHERE stuid=uid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `student_update` (IN `uid` INT, IN `rno` INT, IN `name` VARCHAR(50), IN `class` VARCHAR(50))   BEGIN
	UPDATE students SET rno=rno,name=name,class=class WHERE stuid=uid;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `AccountNumber` int(11) NOT NULL,
  `Balance` decimal(10,2) NOT NULL,
  `Branch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`AccountNumber`, `Balance`, `Branch`) VALUES
(1003056010, '10203010.20', 'Jamnagar');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(11) NOT NULL,
  `empname` varchar(50) NOT NULL,
  `empemail` varchar(50) NOT NULL,
  `empphone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `empname`, `empemail`, `empphone`) VALUES
(1, 'empname', 'empemail', 'empphone'),
(123456, 'Bhatt Mudit', 'bhattmudit213@gmail.com', '1234567891');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stuid` int(11) NOT NULL,
  `rno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stuid`, `rno`, `name`, `class`) VALUES
(1, 101, 'Darshan', 'DIPLOMA'),
(2, 102, 'Mudit', 'B.Tech-5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`AccountNumber`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stuid`),
  ADD UNIQUE KEY `rno` (`rno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `AccountNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003056011;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123457;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
