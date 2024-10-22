-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 08:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `open-project-match`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `confirmemail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `userType` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `housenumber` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `cellphone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `confirmemail`, `password`, `firstname`, `surname`, `mobile`, `userType`, `companyname`, `title`, `street`, `housenumber`, `zipcode`, `city`, `country`, `telephone`, `cellphone`, `fax`, `created_at`, `updated_at`) VALUES
(14, 'saddam@gmail.com', 'saddam@gmail.com', '524568', 'Saddam', 'Khan', '01744882708', 'solution provider', '', '', '', '', '', '', '', '', '', '', '2024-10-20 17:26:57', '2024-10-20 18:51:43'),
(15, 'haidar@gmail.com', 'haidar@gmail.com', '748568', 'Haidar', 'Ali', '01912313734', 'project uploader', 'Softstation 71', 'Mr.', '1', '10', '1216', 'Dhaka', 'Bangladesh', '01912313734', '01912313734', '111', '2024-10-20 17:28:21', '2024-10-20 18:51:50'),
(16, 'hiya@gmail.com', 'hiya@gmail.com', '965485', 'Hiya', 'binte', '01912313734', 'project uploader', 'softstation', 'Ms.', '1', '5', '1211', 'Dhaka', 'Bangladesh', '01912313734', '01912313734', '1234', '2024-10-20 17:33:35', '2024-10-20 18:51:55'),
(17, 'sagor@gmail.com', 'sagor@gmail.com', '543546', 'ss', 'sss', '111', 'solution provider', '', '', '', '', '', '', '', '', '', '', '2024-10-20 17:46:44', '2024-10-20 17:46:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
