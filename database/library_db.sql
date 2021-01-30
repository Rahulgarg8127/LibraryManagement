-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2021 at 03:32 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `B_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BOOK_NAME` text NOT NULL,
  `GENRE` text NOT NULL,
  `PRICE` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  PRIMARY KEY (`B_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`B_ID`, `BOOK_NAME`, `GENRE`, `PRICE`, `Stock`) VALUES
(1, ' Basics of Digital Electronics', '10', 220, 4),
(3, 'C Programming', '12', 190, 3),
(4, 'Discrete Mathematics', '11', 180, 10),
(5, 'Operating System', '9', 230, 0),
(6, ' Software Engineering', '12', 220, 4),
(8, 'Operation Research', '11', 180, 3),
(9, 'Programming Language DBMS', '10', 200, 8),
(10, 'Data Structures & Applications', '12', 190, 5),
(11, 'Mathematics', '12', 150, 4);

-- --------------------------------------------------------

--
-- Table structure for table `issuebooks`
--

CREATE TABLE IF NOT EXISTS `issuebooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `B_ID` int(11) NOT NULL,
  `BOOK_NAME` text NOT NULL,
  `U_ID` int(11) NOT NULL,
  `NAME` text NOT NULL,
  `ISSUE_DATE` date NOT NULL,
  `RETURN_DATE` date NOT NULL,
  `RETURN_ON` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuebooks`
--

INSERT INTO `issuebooks` (`id`, `B_ID`, `BOOK_NAME`, `U_ID`, `NAME`, `ISSUE_DATE`, `RETURN_DATE`, `RETURN_ON`) VALUES
(7, 7, 'vashist@gmail.com', 3, 'Vashist', '2019-12-07', '2019-12-14', '2019-12-27'),
(10, 5, 'abcd@gmail.com', 3, 'Parikshit', '2019-12-13', '2019-12-28', '2020-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `issuebooks1`
--

CREATE TABLE IF NOT EXISTS `issuebooks1` (
  `B_ID` int(11) NOT NULL,
  `BOOK_NAME` text NOT NULL,
  `U_ID` int(11) NOT NULL,
  `ISSUE_DATE` date NOT NULL,
  `RETURNED_DATE` date NOT NULL,
  `TIME` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuebooks1`
--

INSERT INTO `issuebooks1` (`B_ID`, `BOOK_NAME`, `U_ID`, `ISSUE_DATE`, `RETURNED_DATE`, `TIME`) VALUES
(11, 'Mathematics', 21, '2021-01-29', '2021-02-18', 1611900704),
(6, ' Software Engineering', 21, '2021-01-29', '2021-02-18', 1611900730);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `S_NO` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` text NOT NULL,
  PRIMARY KEY (`S_NO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`S_NO`, `USERNAME`, `PASSWORD`) VALUES
(1, 'admin', 'admin123'),
(22, 'RAHUL', 'abcd'),
(23, 'Gaurav', 'gaurav123'),
(24, 'Mohit', 'mohit123'),
(25, 'Aman', 'aman123');

-- --------------------------------------------------------

--
-- Table structure for table `returnedbooks`
--

CREATE TABLE IF NOT EXISTS `returnedbooks` (
  `ISSUE_DATE` date NOT NULL,
  `U_ID` int(11) NOT NULL,
  `NAME` text NOT NULL,
  `BOOK_NAME` text NOT NULL,
  `RETURNED_DATE` date NOT NULL,
  `DAYS` int(11) NOT NULL,
  `FINE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returnedbooks`
--

INSERT INTO `returnedbooks` (`ISSUE_DATE`, `U_ID`, `NAME`, `BOOK_NAME`, `RETURNED_DATE`, `DAYS`, `FINE`) VALUES
('2019-12-26', 16, 'MAYANK', ' Software Engineering', '2020-01-15', 0, 0),
('2019-12-30', 20, 'JATIN', 'Mathematics', '2020-01-19', 0, 0),
('2019-11-13', 16, 'MAYANK', 'Programming Language DBMS', '2019-12-03', 27, 540),
('2020-01-04', 18, 'TARUN', 'Programming Language DBMS', '2020-01-24', 15, 300),
('2020-01-04', 19, 'ABHISHEK', 'C Programming', '2020-01-24', 94, 1880),
('2021-01-29', 21, 'RAHUL', 'Mathematics', '2021-02-18', 0, 0),
('2021-01-29', 21, 'RAHUL', 'Discrete Mathematics', '2021-02-18', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `U_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` text NOT NULL,
  `ROLLNO` varchar(100) NOT NULL,
  `CLASS` int(11) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `COUNT` int(2) NOT NULL DEFAULT '2',
  PRIMARY KEY (`U_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`U_ID`, `USERNAME`, `ROLLNO`, `CLASS`, `PASSWORD`, `COUNT`) VALUES
(21, 'RAHUL', '2K18CSUN01125', 11, 'abcd', 0),
(22, 'Gaurav', '256', 11, 'gaurav123', 2),
(23, 'Mohit', '15', 8, 'mohit123', 2),
(24, 'Aman', '44', 11, 'aman123', 2);
