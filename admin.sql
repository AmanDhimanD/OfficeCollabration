-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 07:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `25sep`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Sno` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `designation` varchar(1000) NOT NULL,
  `band` int(10) NOT NULL,
  `reporting` text NOT NULL,
  `project` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Sno`, `name`, `email`, `pass`, `designation`, `band`, `reporting`, `project`) VALUES
(9, 'Shweta Rani', 's.1@gmail.com', '123', 'Emp.', 2, '12-02-2021', 'Crud Application'),
(10, 'Shivani', 'shivani123@yahho.com', 'shivani', 'Emp.', 3, '01-10-2021', 'Mern Application'),
(11, 'Demo', 'demo1234@gmail.com', 'demotry', 'Tester', 2, '03-12-2021', 'Crud Application'),
(12, 'Aman kumar', 'Aman@gmail.com', '12345678', 'SOFTware', 1, '12-02-2021', 'Mern'),
(13, 'Aman Kumar', 'aman@gmail.com', '123', 'Software', 1, '12-02-2021', 'Web tech'),
(14, 'Kamal', 'kamal@edu.com', 'kamal', 'Software Ennginneer', 1, '12-02-2022', 'Mern'),
(15, 'Aman', 'Dhiman@gmail.com', 'aman', 'SE', 1, '12-02-2022', 'Crud');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
