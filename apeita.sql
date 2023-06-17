-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 02:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apeita`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `company` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobileno`, `password`, `company`, `role`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', '8989898111', 'Admin', 'Sagar Software Solutions pvt ltd', 'admin', 1),
(2, 'raja', 'raju123@gmail.com', '8231456982', 'staff', 'Sagar Software Solutions pvt ltd', 'staff', 1),
(3, 'jyothi', 'jyothi@gmail.com', '1234567811', 'manager', 'Sagar Software Solutions pvt ltd', 'manager', 1),
(4, 'jyothi', 'sjyotheeswarreddy@gmail.com', '8886758610', 'security', 'Sagar Software Solutions pvt ltd', 'security', 1),
(5, 'prakash', 'jp1@gmail.com', '8231456980', 'office', 'Sagar Software Solutions pvt ltd', 'office', 1),
(6, 'ramya', 'ramya@gmail.com', '7418520960', 'canteen', 'Sagar Software Solutions pvt ltd', 'canteen', 1),
(7, 'Malavika', 'madhuri123@gmail.com', '9999999999', '123', 'iGen American soft', 'office', 1),
(8, 'Dhanista', '111@gmail.com', '9999999999', '000', 'Sagar Software Solutions pvt ltd', 'office', 1),
(9, 'sujana', 'staff@gmail.com', '9123456789', '1', 'iGen American soft', 'staff', 1),
(10, 'malavika', 'malu@gmail.com', '9898989898', '1111', 'Conflux Systems', 'canteen', 1),
(15, 'anil kumar', 'anil@gmail.com', '9949878554', 'anil@123', 'sagar software solutions pvt ltd', 'office', 1),
(17, 'Dhanista', 'aa@gmail.com', '9898989898', 'AA', 'sagar software', 'office', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
