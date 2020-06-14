-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 06:47 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bonafied_table`
--

CREATE TABLE `bonafied_table` (
  `id` varchar(300) NOT NULL,
  `usn` varchar(200) NOT NULL,
  `department` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `guide` varchar(50) NOT NULL,
  `cmp_name` varchar(100) NOT NULL,
  `cmp_location` varchar(100) NOT NULL,
  `weblink` varchar(300) NOT NULL,
  `hr_name` varchar(100) NOT NULL,
  `hr_email` varchar(100) NOT NULL,
  `hr_phone` varchar(50) NOT NULL,
  `intr_title` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `stipend` varchar(100) NOT NULL,
  `duration` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `status` varchar(5) NOT NULL,
  `application_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `department_id` varchar(10) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` varchar(15) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `department` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `dept_id` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(100) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `sem` int(6) NOT NULL,
  `department` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `staff_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonafied_table`
--
ALTER TABLE `bonafied_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
