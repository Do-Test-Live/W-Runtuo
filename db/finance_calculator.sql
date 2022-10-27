-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 07:15 AM
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
-- Database: `finance_calculator`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `inserted_at`, `updated_at`) VALUES
(1, 'Monoget Saha', 'monoget1@gmail.com', 'Test', 'Hi', '2022-10-27 11:13:19', '2022-10-27 05:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `loan_apply`
--

CREATE TABLE `loan_apply` (
  `id` int(11) NOT NULL,
  `c_name` varchar(250) NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `identy_num` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `contact_time` varchar(150) NOT NULL,
  `contact_num` varchar(25) NOT NULL,
  `pay_method` varchar(100) NOT NULL,
  `applicant_type` varchar(100) NOT NULL,
  `loan_amount` double(10,2) NOT NULL,
  `other_info` varchar(1500) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_apply`
--

INSERT INTO `loan_apply` (`id`, `c_name`, `e_name`, `identy_num`, `dob`, `gender`, `contact_time`, `contact_num`, `pay_method`, `applicant_type`, `loan_amount`, `other_info`, `inserted_at`, `updated_at`) VALUES
(1, 'GGG', 'DDD', 'DDD', '2022-10-05', '', '', '85472552782', 'Cash', 'Existing customers', 5000.00, ' weafae  YWSr hgg ESr tys gywzag ar yzr ygwsr hsarha', '2022-10-15 13:57:53', '2022-10-15 07:57:53'),
(2, 'tets', 'Tehsh', 'Jejsns', '0000-00-00', '', '', '727272772', 'Cash', 'New application client', 118818.00, 'Gy', '2022-10-26 16:21:01', '2022-10-26 10:21:01'),
(3, 'asdf', 'dfs', 'dsfa', '0000-00-00', '', '', '3242332', 'Choose..', 'New application client', 3333.00, 'dfs', '2022-10-26 17:43:51', '2022-10-26 11:43:51'),
(4, 'GGG', 'DDD', 'DDD', '0000-00-00', '', '', '9699', 'Cheque', 'Existing customers', 1000.00, '2158252', '2022-10-26 17:47:16', '2022-10-26 11:47:16'),
(5, 'Vv', 'Bbb', 'Jn', '0000-00-00', '', '', 'Hjhi', 'Cheque', 'Existing customers', 255.00, 'Vvb', '2022-10-26 17:48:05', '2022-10-26 11:48:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_apply`
--
ALTER TABLE `loan_apply`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loan_apply`
--
ALTER TABLE `loan_apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
