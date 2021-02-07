-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2021 at 03:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `username` varchar(8) NOT NULL,
  `password1` varchar(20) NOT NULL,
  `password2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `username`, `password1`, `password2`) VALUES
(0, 'Hem Sagar', 'testhem123@gmail.com', 'hem', '123', ''),
(0, 'mohan', 'mohan@gmail.com', 'mohan', '123', ''),
(0, 'sagar', 'sagaradhikari071@gmail.com', 'sagar', '123', ''),
(0, 'Hem Sagar', 'testhem123@gmail.com', 'hem', '123', ''),
(0, 'Hem Sagar', 'testhem123@gmail.com', 'aaa', 'aaaaa', ''),
(0, 'Hem Sagar', 'testhem123@gmail.com', 'aaa', 'aaaaa', ''),
(0, 'mohan pradhan', 'mohan@gmail.com', 'hello', 'world', ''),
(0, 'Naam Mohan', 'email@gmail.com', 'tlaloc', '123mohan', ''),
(0, 'Hemsagar  Adhikari', 'hemsagar071@gmail.com', 'hemsagar', 'hem123', ''),
(0, 'Mohan Pradhan', 'manojpradhan628@gmail.com', 'Mohan', 'mohan123', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `roll_no` int(5) NOT NULL,
  `faculty` varchar(20) NOT NULL,
  `batch` int(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
