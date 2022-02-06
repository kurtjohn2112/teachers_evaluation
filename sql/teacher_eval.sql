-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 02:03 AM
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
-- Database: `teacher_eval`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_cred`
--

CREATE TABLE `login_cred` (
  `login_id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `student_id` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_cred`
--

INSERT INTO `login_cred` (`login_id`, `email`, `password`, `student_id`) VALUES
(1, 'kjmojado21@gmail.com', '8KMKlQE7nj', '1');

-- --------------------------------------------------------

--
-- Table structure for table `students_cred`
--

CREATE TABLE `students_cred` (
  `student_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mothers_name` varchar(255) NOT NULL,
  `fathers_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_cred`
--

INSERT INTO `students_cred` (`student_id`, `fname`, `lname`, `mothers_name`, `fathers_name`, `address`, `gender`, `state`, `city`, `course`, `email`) VALUES
(1, 'students_cred', 'Mojado', 'asda', 'asdasd', 'Cebu City', 'male', '3', '3', 'asdasd', ' kjmojado21@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_cred`
--
ALTER TABLE `login_cred`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `students_cred`
--
ALTER TABLE `students_cred`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_cred`
--
ALTER TABLE `login_cred`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students_cred`
--
ALTER TABLE `students_cred`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
