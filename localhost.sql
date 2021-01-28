-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 28, 2021 at 02:50 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15668406_project`
--
CREATE DATABASE IF NOT EXISTS `id15668406_project` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id15668406_project`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `password`) VALUES
(25, 'kamran khan', 'admin4'),
(26, 'arshian tariq', 'admin5'),
(27, 'jibran akram', 'admin6'),
(28, 'hamad jamal', 'admin7');

-- --------------------------------------------------------

--
-- Table structure for table `change_requests`
--

CREATE TABLE `change_requests` (
  `student_id` int(11) NOT NULL,
  `reference_no` decimal(1,0) NOT NULL CHECK (`reference_no` < 3),
  `info` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dept_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credits` decimal(1,0) DEFAULT NULL CHECK (`credits` > 0),
  `cap` int(11) DEFAULT NULL CHECK (`cap` > 20 and `cap` < 150)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `title`, `dept_name`, `credits`, `cap`) VALUES
('c6', 'OOAD', 'UIITT', 4, 50),
('cal2', 'Calculus 2', 'math', 3, 50),
('cs100', 'Computational problem solving', 'cs', 3, 50),
('cs200', 'Intro to programming', 'cs', 4, 50),
('cs202', 'Data structures', 'cs', 3, 50),
('cs210', 'Discrete math', 'cs', 4, 50),
('cs220', 'Digital logic circuits', 'cs', 3, 50),
('cs225', 'Fundamentals of computer systems', 'cs', 4, 50),
('cs230', 'Computer organisation', 'cs', 3, 50),
('cs300', 'Advance programming', 'cs', 3, 50),
('cs310', 'Algorithms', 'cs', 3, 50),
('cs315', 'Theory of automata', 'cs', 3, 50),
('cs331', 'Artificial intelligence', 'cs', 3, 50),
('cs340', 'Database', 'cs', 3, 50),
('cs360', 'Software engineering', 'cs', 3, 50),
('cs370', 'Operating system', 'cs', 3, 50),
('cs382', 'Network centric computing', 'cs', 3, 50),
('cs432', 'Intro to data mining', 'cs', 3, 50),
('cs436', 'Computer vision', 'cs', 3, 50),
('cs452', 'Computer graphics', 'cs', 3, 50),
('cs471', 'Computer networks', 'cs', 3, 50),
('cs473', 'Network security', 'cs', 3, 50),
('cs501', 'Applied probabillity', 'cs', 3, 50),
('cs510', 'Design analysis', 'cs', 3, 50),
('cs535', 'Machine learning', 'cs', 3, 50),
('cs536', 'Data mining', 'cs', 3, 50),
('cs567', 'Software reuse', 'cs', 3, 50),
('cs569', 'Design patterns', 'cs', 3, 50),
('cs582', 'Distributed systems', 'cs', 3, 50),
('cs585', 'Service oriented computing', 'cs', 3, 50),
('LA1', 'Linear algebra', 'math', 3, 40),
('PE', 'Ethics', 'UIITT', 4, 50),
('PF', 'programming', 'UIITT', 4, 50);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `building` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_name`, `building`) VALUES
('accounting_finance', 'business'),
('bio', 'science'),
('chem', 'science'),
('cs', 'science'),
('econ_math', 'humanities'),
('economics', 'humanities'),
('ee', 'science'),
('history', 'humanities'),
('llb', 'law'),
('management_science', 'business'),
('math', 'science'),
('OBJECT DESIGN', 'UIIT'),
('OOAD', 'UIIT'),
('PF', 'UIIT'),
('physics', 'science'),
('pol_sci', 'humanities'),
('psychology', 'humanities');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled`
--

CREATE TABLE `enrolled` (
  `student_id` int(11) NOT NULL,
  `course_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `sec_id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `semester` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `year` decimal(4,0) NOT NULL CHECK (`year` in (2018,2019,2020,2021,2022)),
  `grade` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL CHECK (`grade` in ('A+','A','A-','B+','B','B-','C+','C','C-','D','F')),
  `marks` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enrolled`
--

INSERT INTO `enrolled` (`student_id`, `course_id`, `sec_id`, `semester`, `year`, `grade`, `marks`) VALUES
(1, 'cs100', '1', 'fall', 2020, 'C', 23.00),
(1, 'Cs202', '1', 'fall', 2020, 'A', NULL),
(1, 'Cs340', '1', 'fall', 2019, 'A', NULL),
(2, 'Cal2', '1', 'fall', 2018, 'A+', NULL),
(2, 'cs100', '1', 'fall', 2020, 'C+', 33.00),
(2, 'Cs202', '1', 'fall', 2018, 'A+', NULL),
(2, 'Cs334', '1', 'fall', 2018, 'A+', NULL),
(2, 'Cs340', '1', 'fall', 2018, 'A+', NULL),
(2, 'Cs500', '1', 'fall', 2019, 'A', NULL),
(2, 'Cs510', '1', 'fall', 2019, 'A', NULL),
(2, 'LA1', '1', 'fall', 2018, 'A+', NULL),
(3, 'Cal2', '1', 'fall', 2018, 'A+', NULL),
(3, 'cs100', '1', 'fall', 2020, 'C+', 33.00),
(3, 'Cs202', '1', 'fall', 2018, 'A+', NULL),
(3, 'Cs334', '1', 'fall', 2018, 'A+', NULL),
(3, 'Cs340', '1', 'fall', 2018, 'A+', NULL),
(3, 'LA1', '1', 'fall', 2018, 'A+', NULL),
(4, 'Cal2', '1', 'fall', 2018, 'A', NULL),
(4, 'cs100', '1', 'fall', 2020, 'C-', 13.00),
(4, 'Cs202', '1', 'fall', 2018, 'A', NULL),
(4, 'Cs334', '1', 'fall', 2018, 'A', NULL),
(4, 'Cs340', '1', 'fall', 2018, 'A', NULL),
(4, 'Cs500', '1', 'fall', 2019, 'A+', NULL),
(4, 'Cs510', '1', 'fall', 2019, 'A+', NULL),
(4, 'LA1', '1', 'fall', 2018, 'A', NULL),
(5, 'Cal2', '1', 'fall', 2018, 'A', NULL),
(5, 'cs100', '1', 'fall', 2020, 'C-', 13.00),
(5, 'Cs202', '1', 'fall', 2018, 'A', NULL),
(5, 'Cs334', '1', 'fall', 2018, 'A', NULL),
(5, 'Cs340', '1', 'fall', 2018, 'A', NULL),
(5, 'Cs500', '1', 'fall', 2019, 'A+', NULL),
(5, 'Cs510', '1', 'fall', 2019, 'A+', NULL),
(5, 'LA1', '1', 'fall', 2018, 'A', NULL),
(6, 'Cal2', '1', 'fall', 2018, 'A', NULL),
(6, 'cs100', '1', 'fall', 2020, 'A-', 73.00),
(6, 'Cs202', '1', 'fall', 2018, 'A', NULL),
(6, 'Cs334', '1', 'fall', 2018, 'A', NULL),
(6, 'Cs340', '1', 'fall', 2018, 'A', NULL),
(6, 'Cs500', '1', 'fall', 2019, 'A', NULL),
(6, 'Cs510', '1', 'fall', 2019, 'A', NULL),
(6, 'LA1', '1', 'fall', 2018, 'A', NULL),
(7, 'Cal2', '1', 'fall', 2018, 'B+', NULL),
(7, 'cs100', '1', 'fall', 2020, 'B+', 63.00),
(7, 'Cs202', '1', 'fall', 2018, 'B+', NULL),
(7, 'Cs334', '1', 'fall', 2018, 'B+', NULL),
(7, 'Cs340', '1', 'fall', 2018, 'B+', NULL),
(7, 'LA1', '1', 'fall', 2018, 'B+', NULL),
(8, 'Cal2', '1', 'fall', 2018, 'B+', NULL),
(8, 'cs100', '1', 'fall', 2020, 'C-', 13.00),
(8, 'Cs202', '1', 'fall', 2018, 'B+', NULL),
(8, 'Cs334', '1', 'fall', 2018, 'B+', NULL),
(8, 'Cs340', '1', 'fall', 2018, 'B+', NULL),
(8, 'LA1', '1', 'fall', 2018, 'B+', NULL),
(9, 'Cal2', '1', 'fall', 2018, 'B-', NULL),
(9, 'cs100', '1', 'fall', 2020, 'C+', 33.00),
(9, 'Cs202', '1', 'fall', 2018, 'B-', NULL),
(9, 'Cs334', '1', 'fall', 2018, 'B-', NULL),
(9, 'Cs340', '1', 'fall', 2018, 'B-', NULL),
(9, 'Cs500', '1', 'fall', 2019, 'A', NULL),
(9, 'Cs510', '1', 'fall', 2019, 'A', NULL),
(9, 'LA1', '1', 'fall', 2018, 'B-', NULL),
(10, 'Cal2', '1', 'fall', 2018, 'A', NULL),
(10, 'cs100', '1', 'fall', 2020, 'B-', 43.00),
(10, 'Cs202', '1', 'fall', 2018, 'A', NULL),
(10, 'Cs334', '1', 'fall', 2018, 'A', NULL),
(10, 'Cs340', '1', 'fall', 2018, 'A', NULL),
(10, 'LA1', '1', 'fall', 2018, 'A', NULL),
(11, 'Cal2', '2', 'spring', 2018, 'A', NULL),
(11, 'cs100', '1', 'fall', 2020, 'A-', 73.00),
(11, 'cs200', '1', 'fall', 2020, NULL, 73.00),
(11, 'Cs202', '2', 'spring', 2018, 'A', NULL),
(11, 'Cs334', '2', 'spring', 2018, 'A', NULL),
(11, 'Cs340', '2', 'spring', 2018, 'A', NULL),
(11, 'Cs500', '1', 'fall', 2019, 'B+', NULL),
(11, 'Cs510', '1', 'fall', 2019, 'B+', NULL),
(11, 'LA1', '2', 'spring', 2018, 'A', NULL),
(12, 'Cal2', '2', 'spring', 2018, 'B', NULL),
(12, 'cs100', '1', 'fall', 2020, 'B+', 63.00),
(12, 'cs200', '1', 'fall', 2020, NULL, 83.00),
(12, 'Cs202', '2', 'spring', 2018, 'B', NULL),
(12, 'Cs334', '2', 'spring', 2018, 'B', NULL),
(12, 'Cs340', '2', 'spring', 2018, 'B', NULL),
(12, 'Cs500', '1', 'fall', 2019, 'B+', NULL),
(12, 'Cs510', '1', 'fall', 2019, 'B+', NULL),
(12, 'LA1', '2', 'spring', 2018, 'B', NULL),
(13, 'Cal2', '2', 'spring', 2018, 'B-', NULL),
(13, 'cs100', '1', 'fall', 2020, 'B-', 43.00),
(13, 'cs200', '1', 'fall', 2020, NULL, 23.00),
(13, 'Cs202', '2', 'spring', 2018, 'B-', NULL),
(13, 'Cs334', '2', 'spring', 2018, 'B-', NULL),
(13, 'Cs340', '2', 'spring', 2018, 'B-', NULL),
(13, 'Cs500', '1', 'fall', 2019, 'B-', NULL),
(13, 'Cs510', '1', 'fall', 2019, 'B-', NULL),
(13, 'LA1', '2', 'spring', 2018, 'B-', NULL),
(14, 'Cal2', '2', 'spring', 2018, 'B-', NULL),
(14, 'cs100', '1', 'fall', 2020, 'C+', 33.00),
(14, 'cs200', '1', 'fall', 2020, NULL, 13.00),
(14, 'Cs202', '2', 'spring', 2018, 'B-', NULL),
(14, 'Cs334', '2', 'spring', 2018, 'B-', NULL),
(14, 'Cs340', '2', 'spring', 2018, 'B-', NULL),
(14, 'LA1', '2', 'spring', 2018, 'B-', NULL),
(15, 'Cal2', '2', 'spring', 2018, 'A', NULL),
(15, 'cs100', '1', 'fall', 2020, 'C', 23.00),
(15, 'cs200', '1', 'fall', 2020, NULL, 23.00),
(15, 'Cs202', '2', 'spring', 2018, 'A', NULL),
(15, 'Cs334', '2', 'spring', 2018, 'A', NULL),
(15, 'Cs340', '2', 'spring', 2018, 'A', NULL),
(15, 'Cs500', '1', 'fall', 2019, 'A-', NULL),
(15, 'Cs510', '1', 'fall', 2019, 'A-', NULL),
(15, 'LA1', '2', 'spring', 2018, 'A', NULL),
(16, 'Cal2', '2', 'spring', 2018, 'B+', NULL),
(16, 'cs100', '1', 'fall', 2020, 'B-', 43.00),
(16, 'cs200', '1', 'fall', 2020, NULL, 23.00),
(16, 'Cs202', '2', 'spring', 2018, 'B+', NULL),
(16, 'Cs334', '2', 'spring', 2018, 'B+', NULL),
(16, 'Cs340', '2', 'spring', 2018, 'B+', NULL),
(16, 'LA1', '2', 'spring', 2018, 'B+', NULL),
(17, 'Cal2', '2', 'spring', 2018, 'B+', NULL),
(17, 'cs100', '1', 'fall', 2020, 'B', 53.00),
(17, 'cs200', '1', 'fall', 2020, NULL, 13.00),
(17, 'Cs202', '2', 'spring', 2018, 'B+', NULL),
(17, 'Cs334', '2', 'spring', 2018, 'B+', NULL),
(17, 'Cs340', '2', 'spring', 2018, 'B+', NULL),
(17, 'LA1', '2', 'spring', 2018, 'B+', NULL),
(18, 'Cal2', '2', 'spring', 2018, 'A+', NULL),
(18, 'cs100', '1', 'fall', 2020, 'A-', 73.00),
(18, 'cs200', '1', 'fall', 2020, NULL, 53.00),
(18, 'Cs202', '2', 'spring', 2018, 'A+', NULL),
(18, 'Cs334', '2', 'spring', 2018, 'A+', NULL),
(18, 'Cs340', '2', 'spring', 2018, 'A+', NULL),
(18, 'LA1', '2', 'spring', 2018, 'A+', NULL),
(19, 'Cal2', '2', 'spring', 2018, 'A', NULL),
(19, 'cs200', '1', 'fall', 2020, NULL, 53.00),
(19, 'Cs202', '2', 'spring', 2018, 'A', NULL),
(19, 'Cs334', '2', 'spring', 2018, 'A', NULL),
(19, 'Cs340', '2', 'spring', 2018, 'A', NULL),
(19, 'Cs500', '1', 'fall', 2019, 'A-', NULL),
(19, 'Cs510', '1', 'fall', 2019, 'A-', NULL),
(19, 'LA1', '2', 'spring', 2018, 'A', NULL),
(20, 'Cal2', '2', 'spring', 2018, 'B', NULL),
(20, 'Cs202', '2', 'spring', 2018, 'B', NULL),
(20, 'Cs334', '2', 'spring', 2018, 'B', NULL),
(20, 'Cs340', '2', 'spring', 2018, 'B', NULL),
(20, 'Cs500', '1', 'fall', 2019, 'B', NULL),
(20, 'Cs510', '1', 'fall', 2019, 'B', NULL),
(20, 'LA1', '2', 'spring', 2018, 'B', NULL),
(143, 'cs200', '1', 'fall', 2020, NULL, 13.00),
(146, 'cs200', '1', 'fall', 2020, NULL, 83.00),
(147, 'cs200', '1', 'fall', 2020, NULL, 93.00),
(161, 'cs200', '1', 'fall', 2020, NULL, 23.00),
(163, 'cs200', '1', 'fall', 2020, NULL, 23.00),
(167, 'cs200', '1', 'fall', 2020, NULL, 63.00),
(176, 'cs200', '1', 'fall', 2020, NULL, 53.00),
(187, 'cs200', '1', 'fall', 2020, NULL, 63.00),
(196, 'cs200', '1', 'fall', 2020, NULL, 73.00),
(1444, 'cs200', '1', 'fall', 2020, NULL, 13.00),
(4180, 'cal2', '2', 'fall', 2020, NULL, 63.50),
(4180, 'cs100', '1', 'spring', 2020, 'A', 95.00),
(4180, 'cs202', '2', 'fall', 2020, 'A', 85.00),
(4180, 'cs225', '1', 'fall', 2020, 'A', 85.00),
(4180, 'cs340', '1', 'fall', 2020, 'B+', 60.50),
(4180, 'cs382', '1', 'fall', 2020, 'C-', 50.00),
(4180, 'cs382', '1', 'spring', 2020, NULL, NULL),
(4180, 'cs432', '2', 'fall', 2020, NULL, 10.14),
(4180, 'cs436', '1', 'fall', 2020, NULL, 10.14),
(4180, 'cs452', '1', 'fall', 2020, NULL, 10.14),
(4180, 'cs535', '1', 'fall', 2020, NULL, 10.14),
(4181, 'cal2', '2', 'fall', 2020, NULL, 63.50),
(4181, 'cs100', '1', 'spring', 2020, 'A-', 90.00),
(4181, 'cs202', '2', 'fall', 2020, 'A', 85.00),
(4181, 'cs225', '1', 'fall', 2020, 'A', 85.00),
(4181, 'cs310', '2', 'fall', 2020, NULL, 10.14),
(4181, 'cs340', '1', 'fall', 2020, 'A', 80.50),
(4181, 'cs370', '2', 'fall', 2020, NULL, 10.14),
(4181, 'cs432', '2', 'fall', 2020, NULL, 10.14),
(4181, 'cs436', '1', 'fall', 2020, NULL, 10.14),
(4182, 'cal2', '1', 'fall', 2020, NULL, 85.00),
(4182, 'cs100', '1', 'fall', 2020, 'A-', 77.00),
(4182, 'cs202', '1', 'fall', 2020, 'A', 85.00),
(4182, 'cs225', '1', 'fall', 2020, 'A-', 80.00),
(4182, 'cs230', '1', 'fall', 2020, NULL, 10.14),
(4182, 'cs310', '2', 'fall', 2020, NULL, 10.14),
(4182, 'cs340', '1', 'fall', 2020, 'A-', 75.50),
(4182, 'cs340', '2', 'fall', 2020, NULL, 10.14),
(4182, 'cs370', '2', 'fall', 2020, NULL, 10.14),
(4183, 'cal2', '2', 'fall', 2020, NULL, 82.50),
(4183, 'cs100', '2', 'spring', 2020, 'A-', 85.00),
(4183, 'cs202', '2', 'fall', 2020, 'A-', 80.00),
(4183, 'cs225', '1', 'fall', 2020, 'B+', 76.00),
(4183, 'cs340', '1', 'fall', 2020, 'B+', 70.50),
(4184, 'cal2', '1', 'fall', 2020, NULL, 57.50),
(4184, 'cs100', '1', 'fall', 2020, 'A', 84.00),
(4184, 'cs202', '1', 'fall', 2020, 'B+', 75.00),
(4184, 'cs225', '1', 'fall', 2020, 'B', 69.00),
(4184, 'cs340', '1', 'fall', 2020, 'B', 65.50),
(4185, 'cal2', '2', 'fall', 2020, NULL, 70.50),
(4185, 'cs100', '2', 'spring', 2020, 'A-', 82.00),
(4185, 'cs202', '2', 'fall', 2020, 'B', 70.00),
(4185, 'cs225', '1', 'fall', 2020, NULL, 60.00),
(4185, 'cs340', '1', 'fall', 2020, 'B-', 60.50),
(4186, 'cal2', '1', 'fall', 2020, NULL, 47.00),
(4186, 'cs100', '1', 'fall', 2020, 'B', 60.00),
(4186, 'cs202', '1', 'fall', 2020, 'B-', 65.00),
(4186, 'cs230', '1', 'fall', 2020, 'A', 85.00),
(4186, 'cs340', '1', 'fall', 2020, 'C+', 55.50),
(4187, 'cal2', '2', 'fall', 2020, NULL, 45.00),
(4187, 'cs100', '2', 'spring', 2020, 'C', 47.00),
(4187, 'cs202', '2', 'fall', 2020, 'C+', 55.00),
(4187, 'cs230', '2', 'fall', 2020, 'A-', 80.00),
(4187, 'cs340', '1', 'fall', 2020, 'B+', 70.50),
(4188, 'cal2', '1', 'fall', 2020, NULL, 40.00),
(4188, 'cs100', '1', 'fall', 2020, 'A-', 80.00),
(4188, 'cs202', '1', 'fall', 2020, 'C', 50.00),
(4188, 'cs230', '1', 'fall', 2020, 'B+', 75.00),
(4188, 'cs340', '1', 'fall', 2020, 'B', 65.50),
(4189, 'cal2', '2', 'fall', 2020, NULL, 90.10),
(4189, 'cs100', '2', 'spring', 2020, 'A-', 81.00),
(4189, 'cs202', '2', 'fall', 2020, 'C-', 45.00),
(4189, 'cs230', '2', 'fall', 2020, 'B', 70.00),
(4189, 'cs340', '1', 'fall', 2020, 'C-', 50.50),
(4190, 'cal2', '2', 'fall', 2020, NULL, 66.50),
(4190, 'cs100', '1', 'fall', 2020, 'A-', 75.00),
(4190, 'cs202', '1', 'fall', 2020, 'D', 40.00),
(4190, 'cs230', '1', 'fall', 2020, 'B-', 65.00),
(4190, 'cs340', '1', 'fall', 2020, 'A', 81.50),
(4191, 'cal2', '1', 'fall', 2020, NULL, 81.00),
(4191, 'cs200', '1', 'spring', 2020, 'A-', 90.00),
(4191, 'cs210', '2', 'fall', 2020, 'A', 85.00),
(4191, 'cs300', '1', 'fall', 2020, 'A', 85.00),
(4191, 'cs360', '1', 'fall', 2020, 'A', 84.50),
(4192, 'cal2', '2', 'fall', 2020, NULL, 82.50),
(4192, 'cs200', '1', 'fall', 2020, 'B+', 77.00),
(4192, 'cs210', '1', 'fall', 2020, 'A-', 79.00),
(4192, 'cs300', '2', 'fall', 2020, 'A-', 80.00),
(4192, 'cs360', '1', 'fall', 2020, 'A-', 74.50),
(4193, 'cal2', '1', 'fall', 2020, NULL, 57.50),
(4193, 'cs200', '2', 'spring', 2020, 'A-', 85.00),
(4193, 'cs210', '2', 'fall', 2020, 'B+', 74.00),
(4193, 'cs300', '1', 'fall', 2020, 'B+', 75.00),
(4193, 'cs360', '1', 'fall', 2020, 'B+', 69.50),
(4194, 'cal2', '2', 'fall', 2020, NULL, 70.50),
(4194, 'cs200', '1', 'fall', 2020, 'A-', 84.00),
(4194, 'cs210', '1', 'fall', 2020, 'B', 69.00),
(4194, 'cs300', '2', 'fall', 2020, 'B', 70.00),
(4194, 'cs360', '1', 'fall', 2020, 'B+', 68.50),
(4195, 'cal2', '1', 'fall', 2020, NULL, 47.00),
(4195, 'cs200', '2', 'spring', 2020, 'A-', 82.00),
(4195, 'cs210', '2', 'fall', 2020, 'B-', 64.00),
(4195, 'cs300', '1', 'fall', 2020, 'B-', 65.00),
(4195, 'cs360', '1', 'fall', 2020, 'B+', 67.75),
(4196, 'cal2', '2', 'fall', 2020, NULL, 45.00),
(4196, 'cs200', '1', 'fall', 2020, 'C+', 60.00),
(4196, 'cs210', '2', 'fall', 2020, 'C+', 59.50),
(4196, 'cs310', '1', 'fall', 2020, 'A', 85.00),
(4196, 'cs360', '1', 'fall', 2020, 'C+', 55.50),
(4197, 'cal2', '1', 'fall', 2020, NULL, 40.00),
(4197, 'cs200', '2', 'spring', 2020, 'C', 47.00),
(4197, 'cs210', '2', 'fall', 2020, 'C', 55.00),
(4197, 'cs310', '2', 'fall', 2020, 'A-', 80.00),
(4197, 'cs360', '1', 'fall', 2020, 'C', 50.50),
(4198, 'cal2', '2', 'fall', 2020, NULL, 90.10),
(4198, 'cs200', '1', 'fall', 2020, 'A-', 80.00),
(4198, 'cs210', '2', 'fall', 2020, 'C-', 49.00),
(4198, 'cs310', '1', 'fall', 2020, 'B+', 75.00),
(4198, 'cs360', '1', 'fall', 2020, 'B+', 69.50),
(4199, 'cal2', '2', 'fall', 2020, NULL, 63.50),
(4199, 'cs200', '2', 'spring', 2020, 'A-', 81.00),
(4199, 'cs210', '2', 'fall', 2020, 'D', 44.00),
(4199, 'cs310', '2', 'fall', 2020, 'B', 70.00),
(4199, 'cs360', '1', 'fall', 2020, 'B+', 70.50),
(4200, 'cal2', '1', 'fall', 2020, NULL, 85.00),
(4200, 'cs200', '1', 'fall', 2020, 'B', 75.00),
(4200, 'cs210', '2', 'fall', 2020, 'F', 30.00),
(4200, 'cs310', '1', 'fall', 2020, 'B-', 65.00),
(4200, 'cs360', '1', 'fall', 2020, 'B-', 60.50),
(4201, 'cal2', '2', 'fall', 2020, NULL, 82.50),
(4201, 'cs200', '1', 'fall', 2020, 'A', 85.00),
(4201, 'cs220', '2', 'fall', 2020, 'A', 85.00),
(4201, 'cs315', '1', 'fall', 2020, 'A', 85.00),
(4201, 'cs370', '1', 'fall', 2020, 'A', 84.50),
(4202, 'cal2', '1', 'fall', 2020, NULL, 57.50),
(4202, 'cs200', '2', 'spring', 2020, 'A-', 80.00),
(4202, 'cs220', '1', 'fall', 2020, 'A-', 79.00),
(4202, 'cs315', '2', 'fall', 2020, 'A-', 80.00),
(4202, 'cs370', '1', 'fall', 2020, 'A-', 74.50),
(4203, 'cal2', '2', 'fall', 2020, NULL, 70.50),
(4203, 'cs200', '1', 'fall', 2020, 'B+', 75.00),
(4203, 'cs220', '2', 'fall', 2020, 'B+', 74.00),
(4203, 'cs315', '1', 'fall', 2020, 'B+', 75.00),
(4203, 'cs370', '1', 'fall', 2020, 'B+', 69.50),
(4204, 'cal2', '1', 'fall', 2020, NULL, 47.00),
(4204, 'cs200', '2', 'spring', 2020, 'B', 70.00),
(4204, 'cs220', '1', 'fall', 2020, 'B', 69.00),
(4204, 'cs315', '2', 'fall', 2020, 'B', 70.00),
(4204, 'cs370', '1', 'fall', 2020, 'B+', 68.50),
(4205, 'cal2', '2', 'fall', 2020, NULL, 45.00),
(4205, 'cs200', '1', 'fall', 2020, 'B-', 65.00),
(4205, 'cs220', '2', 'fall', 2020, 'B-', 64.00),
(4205, 'cs315', '1', 'fall', 2020, 'B-', 65.00),
(4205, 'cs370', '1', 'fall', 2020, 'B+', 67.75),
(4206, 'cal2', '1', 'fall', 2020, NULL, 40.00),
(4206, 'cs200', '2', 'spring', 2020, 'C+', 60.00),
(4206, 'cs220', '2', 'fall', 2020, 'C+', 59.50),
(4206, 'cs331', '1', 'fall', 2020, 'A', 85.00),
(4206, 'cs370', '1', 'fall', 2020, 'C+', 55.50),
(4207, 'cal2', '2', 'fall', 2020, NULL, 90.10),
(4207, 'cs200', '1', 'fall', 2020, 'C+', 56.00),
(4207, 'cs220', '2', 'fall', 2020, 'C', 55.00),
(4207, 'cs331', '2', 'fall', 2020, 'A-', 80.00),
(4207, 'cs370', '1', 'fall', 2020, 'B+', 69.50),
(4208, 'cal2', '1', 'fall', 2020, NULL, 40.00),
(4208, 'cs200', '2', 'spring', 2020, 'B', 70.00),
(4208, 'cs220', '2', 'fall', 2020, 'C-', 49.00),
(4208, 'cs331', '1', 'fall', 2020, 'B+', 75.00),
(4208, 'cs370', '1', 'fall', 2020, 'B', 60.00),
(4209, 'cal2', '2', 'fall', 2020, NULL, 90.10),
(4209, 'cs200', '1', 'fall', 2020, 'B', 71.00),
(4209, 'cs220', '2', 'fall', 2020, 'D', 44.00),
(4209, 'cs331', '2', 'fall', 2020, 'B', 70.00),
(4209, 'cs370', '1', 'fall', 2020, 'B-', 60.50),
(42020, 'cs500', '1', 'spring', 2020, NULL, NULL),
(42021, 'cs500', '1', 'spring', 2020, NULL, NULL),
(42022, 'cs500', '1', 'spring', 2020, NULL, NULL),
(42023, 'cs500', '1', 'spring', 2020, NULL, NULL),
(42024, 'cs500', '1', 'spring', 2020, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_requests`
--

CREATE TABLE `enrollment_requests` (
  `course_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `sec_id` decimal(1,0) NOT NULL CHECK (`sec_id` in (1,2,3,4)),
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enrollment_requests`
--

INSERT INTO `enrollment_requests` (`course_id`, `sec_id`, `student_id`) VALUES
('cs382', 1, 4180),
('cs500', 1, 42020),
('cs500', 1, 42021),
('cs500', 1, 42022),
('cs500', 1, 42023),
('cs500', 1, 42024),
('cs500', 2, 42030),
('cs500', 2, 42031),
('cs500', 2, 42032),
('cs500', 2, 42033),
('cs500', 2, 42034),
('cs530', 1, 42025),
('cs530', 1, 42026),
('cs530', 1, 42027),
('cs530', 1, 42028),
('cs530', 1, 42029),
('cs536', 1, 42025),
('cs536', 1, 42026),
('cs536', 1, 42027),
('cs536', 1, 42028),
('cs536', 1, 42029),
('LA1', 2, 4180);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `faculty_id` int(11) NOT NULL,
  `course_id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `student_id` int(11) NOT NULL,
  `sec_id` decimal(1,0) NOT NULL CHECK (`sec_id` in (1,2,3,4)),
  `year` decimal(4,0) NOT NULL CHECK (`year` in (2018,2019,2020,2021,2022)),
  `semester` varchar(6) COLLATE utf8_unicode_ci NOT NULL CHECK (`semester` in ('fall','spring')),
  `delivery` decimal(2,0) DEFAULT NULL CHECK (`delivery` >= 0 and `delivery` <= 10),
  `management` decimal(2,0) DEFAULT NULL CHECK (`management` >= 0 and `management` <= 10),
  `engagement` decimal(2,0) DEFAULT NULL CHECK (`engagement` >= 0 and `engagement` <= 10),
  `comments` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`faculty_id`, `course_id`, `student_id`, `sec_id`, `year`, `semester`, `delivery`, `management`, `engagement`, `comments`) VALUES
(123, 'cs100', 4180, 1, 2018, 'fall', 8, 6, 7, 'good'),
(123, 'cs100', 4181, 1, 2018, 'spring', 5, 4, 8, 'good'),
(123, 'cs100', 4182, 1, 2018, 'fall', 9, 7, 4, 'good'),
(123, 'cs100', 4182, 1, 2018, 'spring', 7, 2, 5, 'good'),
(123, 'cs100', 4190, 1, 2019, 'fall', 5, 4, 8, 'good'),
(123, 'cs100', 4191, 1, 2019, 'spring', 5, 4, 8, 'good'),
(123, 'cs100', 4192, 1, 2019, 'fall', 5, 3, 6, 'good'),
(123, 'cs100', 4192, 1, 2019, 'spring', 8, 7, 9, 'good'),
(123, 'cs100', 4201, 1, 2020, 'fall', 2, 6, 10, 'good'),
(123, 'cs200', 1, 1, 2018, 'fall', 4, 5, 6, ''),
(123, 'cs200', 2, 1, 2018, 'spring', 5, 7, 7, ''),
(123, 'cs200', 3, 1, 2019, 'fall', 8, 9, 10, ''),
(123, 'cs200', 4, 1, 2019, 'spring', 10, 9, 10, ''),
(123, 'cs200', 5, 1, 2020, 'fall', 8, 7, 8, ''),
(123, 'cs340', 1, 1, 2018, 'fall', 7, 8, 7, ''),
(123, 'cs340', 3, 1, 2019, 'spring', 6, 5, 4, ''),
(123, 'cs340', 12, 1, 2020, 'fall', 7, 6, 4, ''),
(123, 'cs346', 1, 1, 2018, 'fall', 3, 4, 6, ''),
(123, 'cs346', 2, 1, 2018, 'spring', 5, 5, 6, ''),
(123, 'cs346', 3, 1, 2019, 'fall', 6, 7, 9, ''),
(123, 'cs346', 4, 1, 2019, 'spring', 5, 4, 9, ''),
(123, 'cs346', 5, 1, 2020, 'fall', 6, 8, 10, ''),
(123, 'cs436', 1, 1, 2018, 'fall', 5, 5, 5, ''),
(123, 'cs436', 2, 1, 2018, 'spring', 9, 9, 10, ''),
(123, 'cs436', 3, 1, 2019, 'fall', 10, 10, 9, ''),
(123, 'cs436', 4, 1, 2019, 'spring', 9, 8, 7, ''),
(123, 'cs436', 5, 1, 2020, 'fall', 5, 6, 9, ''),
(302, 'cs202', 4183, 1, 2018, 'fall', 10, 6, 3, 'good'),
(302, 'cs202', 4184, 1, 2018, 'spring', 5, 9, 8, 'good'),
(302, 'cs202', 4187, 1, 2018, 'spring', 7, 9, 10, 'good'),
(302, 'cs202', 4188, 1, 2018, 'fall', 9, 9, 4, 'good'),
(302, 'cs202', 4190, 1, 2018, 'spring', 8, 8, 9, 'good'),
(302, 'cs202', 4192, 1, 2019, 'fall', 7, 5, 6, 'good'),
(302, 'cs202', 4195, 1, 2019, 'fall', 6, 5, 6, 'good'),
(302, 'cs202', 4196, 1, 2018, 'spring', 10, 9, 10, 'good'),
(302, 'cs202', 4204, 1, 2020, 'fall', 9, 9, 9, 'good'),
(302, 'cs202', 4207, 1, 2020, 'fall', 10, 10, 10, 'good'),
(335, 'cal2', 4180, 2, 2020, 'fall', 2, 2, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dept_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `salary` decimal(8,2) DEFAULT NULL CHECK (`salary` > 0)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `name`, `password`, `address`, `dept_name`, `contact`, `salary`) VALUES
(123, 'Mian Ahmed', '123', 'Bahria Town, 595, Lahore', 'cs', '9221-1002938', NULL),
(300, 'Shahid Masood', '300', 'Press Centre Shahrah-e-Kamal Ataturk, Lahore', 'cs', '9221-2631123', 100000.00),
(301, 'Asim Kareem', '301', 'R-475, Shadman Town-2, Lahore', 'cs', '9221-5050084', 100000.00),
(302, 'Basit Shafique', '302', 'F-563, Workers, Layyah', 'cs', '9242-7842531', 100000.00),
(303, 'Ihsan Ayub Qazi', '303', 'UG-6 Eden Towers Main Boulevard, Karachi', 'cs', '9221-4537647', 200000.00),
(304, 'Imdad Ullah Khan', '304', '8-Davis Road, Karachi', 'cs', '9221-2256310', 200000.00),
(305, 'Mariam Mustafa', '305', '20 Shahrah-e-Fatima Jinnah, Multan', 'cs', '9242-7661773', 300000.00),
(306, 'Mian Muhammad Awais', '306', 'Sector 15 Korangi Industrial Area, Multan', 'cs', '9221-2201537', 400000.00),
(307, 'Mubeen Javaid', '307', 'Moon Market Allama Town, Mumbai', 'cs', '9221-5379191', 500000.00),
(308, 'Murtaza Taj', '308', 'Park Avenue, Swat', 'cs', '9221-2413939', 500000.00),
(309, 'Naveed Arshad', '309', 'Hakimsons Building 19-West Road, Gilgit', 'cs', '321-6192092', 100000.00),
(310, 'Aziz Mithani', '310', '200-g Model Town Ugoki, Lahore', 'bio', '9221-5379191', 100000.00),
(311, 'Muhammad Afzal', '311', '520/A, Uni Plaza I.I., Lahore', 'bio', '9221-5379191', 100000.00),
(312, 'Muhammad Tariq', '312', 'Park Avenue , Lahore', 'bio', '9221-5379191', 200000.00),
(313, 'Saif Ullah', '313', 'The Forum, Clifton, Karachi', 'bio', '9221-5379191', 200000.00),
(314, 'Shaper Mirza', '314', '200-g Model Town Ugoki, Karachi', 'bio', '9221-5379191', 300000.00),
(315, 'Syed Shahzad', '315', '2Hakimsons Building, Karachi', 'bio', '9221-5379191', 400000.00),
(316, 'Iman Malik', '316', '200-g Model Town Ugoki, Karachi', 'bio', '9221-5379191', 500000.00),
(317, 'Ahmed Bilal', '317', '200-g Model Town Ugoki, Multan', 'bio', '9221-5379191', 600000.00),
(318, 'Abu Huraira', '318', '200-g Model Town Ugoki, Multan', 'bio', '9221-5379191', 300000.00),
(319, 'Ali Shahzad', '319', 'Garden Market Murad, Swat', 'bio', '9221-5379191', 200000.00),
(320, 'Imran Rashid', '320', '520/A, Uni Plaza I.I.Chundrigar Road,', 'economics', '9221-5379191', 100000.00),
(321, 'Zubair Abassi', '321', '520/A, Park Avenue Shahrah-e-Faisal, Karachi', 'economics', '9221-4537833', 100000.00),
(322, 'Muhammad Afzal', '322', 'The Forum, Clifton,Karachi', 'economics', '9221-7240583', 200000.00),
(323, 'Nasir Abbass', '323', 'Uni Plaza I.I.Chundrigar Road,', 'economics', '9221-7353940', 400000.00),
(324, 'Sadaf Ahmed', '324', 'Hakimsons Building 19-West, Multan', 'economics', '9221-5379191', 500000.00),
(325, 'Shahryar Shahid', '325', '520/A, Park Avenue Shahrah-e-Faisal, Karachi', 'accounting-finance', '9221-4537833', 100000.00),
(326, 'Atif Rahim', '326', '520/A, Park Avenue Shahrah-e-Faisal, Karachi', 'accounting-finance', '9221-4537833', 100000.00),
(327, 'Agha Ali Akram', '327', 'The Forum, Clifton,Karachi', 'accounting-finance', '9221-7240583', 200000.00),
(328, 'Abid Ali', '328', 'Uni Plaza I.I.Chundrigar Road,', 'accounting-finance', '9221-7353940', 400000.00),
(329, 'Adnan Zahid', '329', 'Hakimsons Building 19-West, Multan', 'accounting-finance', '9221-5379191', 500000.00),
(330, 'Ali Raza', '330', '520/A, Park Avenue Shahrah-e-Faisal, Karachi', 'accounting-finance', '9221-4537833', 100000.00),
(331, 'Abdul Qureshi', '331', '520/A, Park Avenue Shahrah-e-Faisal, Karachi', 'accounting-finance', '9221-4537833', 100000.00),
(332, 'Ihsan ul Haq', '332', 'The Forum, Clifton,Karachi', 'accounting-finance', '9221-7240583', 200000.00),
(333, 'Mohsin Bashir', '333', 'Uni Plaza I.I.Chundrigar Road,', 'accounting-finance', '9221-7353940', 400000.00),
(334, 'Imran Siddique', '334', 'Hakimsons Building 19-West, Multan', 'accounting-finance', '9221-5379191', 500000.00),
(335, 'Mudassar Razzaq', '335', 'Afson Street,Zafarwal Road, Lahore', 'math', '03345123802', 250000.00),
(336, 'Imran Naeem', '336', 'Ghani Centre, 28-Multan Road', 'math', '03345256812', 260000.00);

-- --------------------------------------------------------

--
-- Table structure for table `helpdesk`
--

CREATE TABLE `helpdesk` (
  `helpdesk_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `helpdesk`
--

INSERT INTO `helpdesk` (`helpdesk_id`, `name`, `password`) VALUES
(10, 'Kashif Abbassi', 'helpdesk0'),
(11, 'Sabir Shakir', 'helpdesk1'),
(12, 'Adnan Ali', 'helpdesk2'),
(13, 'Hassan Ali', 'helpdesk3');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `faculty_id` int(11) NOT NULL,
  `course_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `sec_id` decimal(1,0) NOT NULL CHECK (`sec_id` in (1,2,3,4)),
  `semester` varchar(6) COLLATE utf8_unicode_ci NOT NULL CHECK (`semester` in ('fall','spring')),
  `year` decimal(4,0) NOT NULL CHECK (`year` in (2018,2019,2020,2021,2022))
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prereq`
--

CREATE TABLE `prereq` (
  `course_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `prereq_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `faculty_id` int(11) NOT NULL,
  `course_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `ta_id` int(11) DEFAULT NULL,
  `sec_id` decimal(1,0) NOT NULL CHECK (`sec_id` in (1,2,3,4)),
  `semester` varchar(6) COLLATE utf8_unicode_ci NOT NULL CHECK (`semester` in ('fall','spring')),
  `year` decimal(4,0) NOT NULL CHECK (`year` in (2018,2019,2020,2021,2022)),
  `building` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `room_number` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_slot_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`faculty_id`, `course_id`, `ta_id`, `sec_id`, `semester`, `year`, `building`, `room_number`, `time_slot_id`) VALUES
(123, 'cs100', NULL, 1, 'fall', 2020, NULL, NULL, NULL),
(123, 'cs200', NULL, 1, 'fall', 2020, NULL, NULL, NULL),
(123, 'cs340', NULL, 2, 'fall', 2020, NULL, NULL, NULL),
(123, 'cs436', NULL, 3, 'fall', 2020, NULL, NULL, NULL),
(300, 'cs100', NULL, 1, 'fall', 2020, 'science', NULL, 1),
(300, 'cs100', NULL, 2, 'fall', 2020, 'science', NULL, 15),
(300, 'cs200', NULL, 1, 'spring', 2020, 'science', NULL, 1),
(300, 'cs200', NULL, 2, 'spring', 2020, 'science', NULL, 2),
(302, 'cs202', NULL, 1, 'fall', 2020, 'science', NULL, 2),
(302, 'cs202', NULL, 2, 'fall', 2020, 'science', NULL, 16),
(302, 'cs300', NULL, 1, 'spring', 2020, 'science', NULL, 3),
(302, 'cs300', NULL, 2, 'spring', 2020, 'science', NULL, 4),
(303, 'cs210', NULL, 1, 'fall', 2020, 'science', NULL, 3),
(303, 'cs210', NULL, 2, 'fall', 2020, 'science', NULL, 17),
(303, 'cs331', NULL, 1, 'spring', 2020, 'science', NULL, 5),
(303, 'cs331', NULL, 2, 'spring', 2020, 'science', NULL, 6),
(303, 'cs340', NULL, 1, 'fall', 2020, 'science', NULL, 7),
(303, 'cs360', NULL, 1, 'spring', 2020, 'science', NULL, 7),
(303, 'cs360', NULL, 2, 'spring', 2020, 'science', NULL, 8),
(303, 'cs382', NULL, 1, 'spring', 2020, 'science', NULL, 9),
(303, 'cs382', NULL, 2, 'spring', 2020, 'science', NULL, 10),
(305, 'cs220', NULL, 1, 'spring', 2020, 'science', NULL, 11),
(305, 'cs220', NULL, 2, 'spring', 2020, 'science', NULL, 12),
(305, 'cs225', NULL, 1, 'fall', 2020, 'science', NULL, 4),
(305, 'cs225', NULL, 2, 'fall', 2020, 'science', NULL, 18),
(305, 'cs471', NULL, 1, 'spring', 2020, 'science', NULL, 13),
(305, 'cs471', NULL, 2, 'spring', 2020, 'science', NULL, 14),
(306, 'cs230', NULL, 1, 'fall', 2020, 'science', NULL, 5),
(306, 'cs230', NULL, 2, 'fall', 2020, 'science', NULL, 19),
(306, 'cs473', NULL, 1, 'spring', 2020, 'science', NULL, 15),
(306, 'cs473', NULL, 2, 'spring', 2020, 'science', NULL, 16),
(308, 'cs310', NULL, 1, 'fall', 2020, 'science', NULL, 6),
(308, 'cs310', NULL, 2, 'fall', 2020, 'science', NULL, 20),
(308, 'cs501', NULL, 1, 'spring', 2020, 'science', NULL, 17),
(308, 'cs501', NULL, 2, 'spring', 2020, 'science', NULL, 18),
(311, 'cs340', NULL, 2, 'fall', 2020, 'science', NULL, 21),
(311, 'cs536', NULL, 1, 'spring', 2020, 'science', NULL, 19),
(311, 'cs536', NULL, 2, 'spring', 2020, 'science', NULL, 20),
(313, 'cs370', NULL, 1, 'fall', 2020, 'science', NULL, 8),
(313, 'cs370', NULL, 2, 'fall', 2020, 'science', NULL, 22),
(313, 'cs569', NULL, 1, 'spring', 2020, 'science', NULL, 21),
(313, 'cs569', NULL, 2, 'spring', 2020, 'science', NULL, 22),
(315, 'cs432', NULL, 1, 'fall', 2020, 'science', NULL, 9),
(315, 'cs432', NULL, 2, 'fall', 2020, 'science', NULL, 23),
(315, 'cs582', NULL, 1, 'spring', 2020, 'science', NULL, 23),
(315, 'cs582', NULL, 2, 'spring', 2020, 'science', NULL, 24),
(316, 'cs436', NULL, 1, 'fall', 2020, 'science', NULL, 10),
(316, 'cs436', NULL, 2, 'fall', 2020, 'science', NULL, NULL),
(316, 'cs585', NULL, 1, 'spring', 2020, 'science', NULL, 25),
(316, 'cs585', NULL, 2, 'spring', 2020, 'science', NULL, 26),
(317, 'cs452', NULL, 1, 'fall', 2020, 'science', NULL, 11),
(317, 'cs452', NULL, 2, 'fall', 2020, 'science', NULL, NULL),
(321, 'cs510', NULL, 1, 'fall', 2020, 'science', NULL, 12),
(321, 'cs510', NULL, 2, 'fall', 2020, 'science', NULL, NULL),
(322, 'cs535', NULL, 1, 'fall', 2020, 'science', NULL, 13),
(322, 'cs535', NULL, 2, 'fall', 2020, 'science', NULL, NULL),
(324, 'cs567', NULL, 1, 'spring', 2020, 'science', NULL, 27),
(324, 'cs567', NULL, 2, 'spring', 2020, 'science', NULL, 28),
(335, 'cal2', 4181, 1, 'fall', 2020, 'science', NULL, 0),
(335, 'cal2', NULL, 2, 'fall', 2020, 'science', NULL, 14),
(335, 'LA1', NULL, 1, 'spring', 2020, 'science', NULL, 29),
(335, 'LA1', NULL, 2, 'spring', 2020, 'science', NULL, 30);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dept_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `password`, `address`, `dept_name`, `contact`, `email`) VALUES
(4180, 'Asad Khatak', '4180', 'Block 17 Gulshan-e-Iqbal, Lahore', 'cs', '9221-4980199', '4180@lums.edu.pk'),
(4181, 'Asif Abass', '4181', 'Main RCD Highway, Lahore', 'cs', '03026733281', '4181@lums.edu.pk'),
(4182, 'Ammar Amin', '4182', '3rd Floor, Shahrah-e-Quaid-e-Azam, Gojra', 'cs', '9221-5379909', '4182@lums.edu.pk'),
(4183, 'Arslan Khan', '4183', 'Flat No -5, 3rd Floor Link Arcade , Swat', 'cs', '9221-3299884', '4183@lums.edu.pk'),
(4184, 'Bilal Shahid', '4184', 'Plaza Square M.A.Jinnah Road, Skardu', 'cs', '9252-4586283', '4184@lums.edu.pk'),
(4185, 'Ijaz Ullah', '4185', '1st Floor, D.H.A., Layyah', 'cs', ' 9251-223028', '4185@lums.edu.pk'),
(4186, 'Fahad Ali', '4186', 'C-19, F.B.Area Near Water Pump, Layyah', 'cs', '9221-4980199', '4186@lums.edu.pk'),
(4187, 'Fawad Khan', '4187', '4th Floor, Kehkashan Mall Road, Lahore', 'cs', '9221-4980199', '4187@lums.edu.pk'),
(4188, 'Fida Hussain', '4188', 'Cantt., Gujjranwala', 'cs', '9221-4980199', '4188@lums.edu.pk'),
(4189, 'Furqan Khan', '4189', ' Suite No.13, Blue Area, Muzafarabad', 'cs', '9221-4980199', '4189@lums.edu.pk'),
(4190, 'Habib Amjad', '4190', 'J.C.H.S, Off Shaheed -e- Millat Road, Islamabad', 'cs', '9221-4980199', '4190@lums.edu.pk'),
(4191, 'Haseeb Ahmed', '4191', '18-19, Badri BuildingI.I.Chundrigar Road, Lahore', 'cs', '9221-4980199', '4191@lums.edu.pk'),
(4192, 'hassan Naeem', '4192', 'B-5, Clifton, Lahore', 'cs', '9221-4980199', '4192@lums.edu.pk'),
(4193, 'Ibrahim Lodhi', '4193', 'BNr. Aa Traders, Shershah Chowk, Site Lahore', 'cs', '9221-4980199', '4193@lums.edu.pk'),
(4194, 'Ismail Khan', '4194', 'UET Society', 'cs', '03318549266', '4194@lums.edu.pk'),
(4195, 'Farooq Ahmed', '4195', 'National Building Chowk, Peshawaer', 'cs', '9221-4980199', '4195@lums.edu.pk'),
(4196, 'Iftikhar thakur', '4196', '559,Sector G,Ugoki, Gujrat', 'cs', '9221-4980199', '4196@lums.edu.pk'),
(4197, 'Junaid Amjad', '4197', ' 27, Saddar, Quetta', 'cs', '9221-4980199', '4197@lums.edu.pk'),
(4198, 'Kashif Lashari', '4198', 'Suite 404A,Good Earth, Sukkur', 'cs', '9221-4980199', '4198@lums.edu.pk'),
(4199, 'Liaqat Khan', '4199', 'Mubarik Pura, P.O. Box,Jamshoro', 'cs', '9221-4980199', '4199@lums.edu.pk'),
(4200, 'Kamran Khan', '4200', '164-Aurangzeb Block New Garden Town, Layyah', 'cs', '9221-4980199', '4200@lums.edu.pk'),
(4201, 'Jalal Akbar', '4201', '406, Marston Road, Faislabad', 'cs', '9221-4980199', '4201@lums.edu.pk'),
(4202, 'Khalid Mehmood', '4202', '175-Jinnah Colony Shafi Centre, Karachi', 'cs', '9221-4980199', '4202@lums.edu.pk'),
(4203, 'Mohsin Sheikh', '4203', 'Rehman Street # 3, Brandreth Road, Lahore', 'cs', '9221-4980199', '4203@lums.edu.pk'),
(4204, 'Munawar Khan', '4204', 'Bs 15/3, Lahore', 'cs', '9221-4980199', '4204@lums.edu.pk'),
(4205, 'Muzammil Ashraf', '4205', 'C-10/1,Clifton, Gilgit', 'cs', '9221-4980199', '42050@lums.edu.pk'),
(4206, 'Nabeel Nadeem', '4206', '18, Millat Road Iqbal Town,Swat', 'cs', '9221-4980199', '4206@lums.edu.pk'),
(4207, 'Usama Niazi', '4207', '18, Millat Road Iqbal Town, Larkana', 'cs', '9221-4980199', '4207@lums.edu.pk'),
(4208, 'Naseem Ali', '4208', '7-B, F-8/2, Multan', 'cs', '9221-4980199', '4208@lums.edu.pk'),
(4209, 'Bushra Ansari', '4209', 'F.B.Area, Karachi', 'cs', '9221-4980199', '4209@lums.edu.pk');

-- --------------------------------------------------------

--
-- Table structure for table `ta_application`
--

CREATE TABLE `ta_application` (
  `student_id` int(11) NOT NULL,
  `course_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `sec_id` decimal(1,0) NOT NULL CHECK (`sec_id` in (1,2,3,4))
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ta_application`
--

INSERT INTO `ta_application` (`student_id`, `course_id`, `sec_id`) VALUES
(4180, 'cal2', 1),
(4189, 'cs382', 1),
(4194, 'cal2', 1),
(4199, 'cal2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `time_slot_id` int(11) NOT NULL,
  `day` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `start_hr` decimal(2,0) NOT NULL CHECK (`start_hr` >= 0 and `start_hr` < 24),
  `start_min` decimal(2,0) NOT NULL CHECK (`start_min` >= 0 and `start_min` < 60),
  `end_hr` decimal(2,0) DEFAULT NULL CHECK (`end_hr` >= 0 and `end_hr` < 24),
  `end_min` decimal(2,0) DEFAULT NULL CHECK (`end_min` >= 0 and `end_min` < 60)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `time_slot`
--

INSERT INTO `time_slot` (`time_slot_id`, `day`, `start_hr`, `start_min`, `end_hr`, `end_min`) VALUES
(0, 'M', 8, 15, 9, 15),
(1, 'M', 9, 15, 10, 15),
(2, 'M', 10, 15, 11, 15),
(3, 'M', 11, 15, 12, 15),
(4, 'M', 12, 15, 13, 15),
(5, 'M', 13, 15, 14, 15),
(6, 'M', 14, 15, 15, 15),
(7, 'M', 15, 15, 16, 15),
(8, 'M', 16, 15, 17, 15),
(9, 'M', 17, 15, 18, 15),
(10, 'T', 8, 15, 9, 15),
(11, 'T', 9, 15, 10, 15),
(12, 'T', 10, 15, 11, 15),
(13, 'T', 11, 15, 12, 15),
(14, 'T', 12, 15, 13, 15),
(15, 'T', 13, 15, 14, 15),
(16, 'T', 14, 15, 15, 15),
(17, 'T', 15, 15, 16, 15),
(18, 'T', 16, 15, 17, 15),
(19, 'T', 17, 15, 18, 15),
(20, 'W', 8, 15, 9, 15),
(21, 'W', 9, 15, 10, 15),
(22, 'W', 10, 15, 11, 15),
(23, 'W', 11, 15, 12, 15),
(24, 'W', 12, 15, 13, 15),
(25, 'W', 13, 15, 14, 15),
(26, 'W', 14, 15, 15, 15),
(27, 'W', 15, 15, 16, 15),
(28, 'W', 16, 15, 17, 15),
(29, 'W', 17, 15, 18, 15),
(30, 'R', 8, 15, 9, 15),
(31, 'R', 9, 15, 10, 15),
(32, 'R', 10, 15, 11, 15),
(33, 'R', 11, 15, 12, 15),
(34, 'R', 12, 15, 13, 15),
(35, 'R', 13, 15, 14, 15),
(36, 'R', 14, 15, 15, 15),
(37, 'R', 15, 15, 16, 15),
(38, 'R', 16, 15, 17, 15),
(39, 'R', 17, 15, 18, 15),
(40, 'F', 8, 15, 9, 15),
(41, 'F', 9, 15, 10, 15),
(42, 'F', 10, 15, 11, 15),
(43, 'F', 11, 15, 12, 15),
(44, 'F', 12, 15, 13, 15),
(45, 'F', 13, 15, 14, 15),
(46, 'F', 14, 15, 15, 15),
(47, 'F', 15, 15, 16, 15),
(48, 'F', 16, 15, 17, 15),
(49, 'F', 17, 15, 18, 15);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `building` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `room_number` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` decimal(3,0) DEFAULT NULL CHECK (`capacity` > 20)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `change_requests`
--
ALTER TABLE `change_requests`
  ADD PRIMARY KEY (`student_id`,`reference_no`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_name`,`building`);

--
-- Indexes for table `enrolled`
--
ALTER TABLE `enrolled`
  ADD PRIMARY KEY (`student_id`,`course_id`,`sec_id`,`semester`,`year`);

--
-- Indexes for table `enrollment_requests`
--
ALTER TABLE `enrollment_requests`
  ADD PRIMARY KEY (`course_id`,`sec_id`,`student_id`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`faculty_id`,`course_id`,`student_id`,`sec_id`,`year`,`semester`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `helpdesk`
--
ALTER TABLE `helpdesk`
  ADD PRIMARY KEY (`helpdesk_id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`faculty_id`,`course_id`,`sec_id`,`semester`,`year`);

--
-- Indexes for table `prereq`
--
ALTER TABLE `prereq`
  ADD PRIMARY KEY (`course_id`,`prereq_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`faculty_id`,`course_id`,`sec_id`,`semester`,`year`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `ta_application`
--
ALTER TABLE `ta_application`
  ADD PRIMARY KEY (`student_id`,`course_id`,`sec_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`time_slot_id`,`day`,`start_hr`,`start_min`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`building`,`room_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
