-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 05:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_stem`
--

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` int(11) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `stem_track` text NOT NULL,
  `year_grad` varchar(50) NOT NULL,
  `pursue_study` varchar(50) NOT NULL,
  `course` text DEFAULT NULL,
  `school` text DEFAULT NULL,
  `job_status` text DEFAULT NULL,
  `name_job` text DEFAULT NULL,
  `instcom_name` text DEFAULT NULL,
  `token` varchar(200) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `emp_gender` varchar(30) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `token` varchar(200) NOT NULL,
  `status` varchar(2) NOT NULL DEFAULT '1',
  `log_status` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `mname`, `lname`, `emp_gender`, `usertype`, `token`, `status`, `log_status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$XVG96XAkEaMFRPgoCKDLneCps21.cCO3Yg95XIukDtR/nGRxmtCWq', 'JOHN', 'C', 'WICK', 'Male', 'Administrator', 'bc73da01222532f6c7adbc57483200d3', '1', 0, '2023-05-02 13:38:36', NULL);



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
