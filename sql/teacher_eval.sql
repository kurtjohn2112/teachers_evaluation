-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 23, 2022 at 07:55 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

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
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `year`, `section`, `course`) VALUES
(1, '1', 'A', 'COM-SCI'),
(2, '2', 'C', 'COM-SCI'),
(3, '1', 'A', 'IT'),
(4, '1', 'B', 'IT'),
(5, '1', 'C', 'IT'),
(6, '1', 'A', 'ELECTRICAL ENGINEERING'),
(7, '1', 'B', 'ELECTRICAL ENGINEERING'),
(8, '1', 'A', 'NURSING'),
(9, '1', 'B', 'NURSING'),
(10, '1', 'C', 'NURSING');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `college_id` int(11) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `college_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `college_name`, `college_detail`) VALUES
(1, 'COT', 'i have no idea'),
(2, 'ICT', 'i have no idea'),
(3, 'TES', 'i have no idea');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_detail` varchar(255) NOT NULL,
  `department_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_detail`, `department_name`) VALUES
(9, 'ELECTRICAL ENGINEERING', 'kirig2', 'ENGINEERING DEPARTMENT'),
(10, 'COM-SCI', 'computer science', 'SAMPLE'),
(13, 'ELECTRICAL ENGINEERING', 'computer science', 'ENGINEERING DEPARTMENT'),
(14, 'COM-SCI', 'computer science', 'ENGINEERING DEPARTMENT'),
(15, 'ELECTRICAL ENGINEERING', '', 'IT DEPARTMENT'),
(16, 'NURSING', '', 'NEW DEPARTMENT');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `department_details` varchar(255) NOT NULL,
  `department_college` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`, `department_details`, `department_college`) VALUES
(6, 'ENGINEERING DEPARTMENT', 'sample', 'COT'),
(10, 'IT DEPARTMENT', 'sample', 'ICT'),
(16, 'SAMPLE', 'nani??', 'COT'),
(17, 'NEW DEPARTMENT', '', 'TES');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_users`
--

CREATE TABLE `faculty_users` (
  `id` int(11) NOT NULL,
  `school_id` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `ctu_email` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty_users`
--

INSERT INTO `faculty_users` (`id`, `school_id`, `fullname`, `ctu_email`, `college`, `department`, `role`) VALUES
(1, 'AS34S25', 'Bernardine Ragas', 'berns@ctu', 'ICT', 'IT DEPARTMENT', 'STUDENTS'),
(2, '1232asdas', 'Kurt John', 'kj@ctu.com', 'ICT', 'IT DEPARTMENT', 'COLLEGE DEANS'),
(3, '1232asdas', 'Kurt John', 'kj@ctu.com', 'COT', 'IT DEPARTMENT', 'FACULTIES'),
(5, '1232asdas', 'Kurt John', 'kj@ctu.com', 'COT', 'ENGINEERING DEPARTMENT', 'ADMINISTRATOR'),
(6, '1232asdas', 'Kurt John', 'kj@ctu.com', '', 'ENGINEERING DEPARTMENT', 'DEPARTMENT CHAIR'),
(7, '1232asdas', 'Kurt John', 'kj@ctu.com', 'ICT', '', 'DEAN OF INSTRUCTIONS');

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
(1, 'Sample@gmail.com', 'sample', '1'),
(2, 'Sample@gmail.com', 'admin', '2'),
(3, 'tiu@gmail.com', 'user', '3'),
(4, '', '', '4'),
(5, '', '', '5'),
(6, 'katog@gmail.com', 'sample', '6');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'ADMINISTRATOR'),
(2, 'STUDENTS'),
(3, 'FACULTIES'),
(4, 'DEPARTMENT CHAIR'),
(5, 'COLLEGE DEANS'),
(6, 'DEAN OF INSTRUCTIONS');

-- --------------------------------------------------------

--
-- Table structure for table `students_cred`
--

CREATE TABLE `students_cred` (
  `student_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `year_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_cred`
--

INSERT INTO `students_cred` (`student_id`, `fname`, `lname`, `department`, `section`, `college`, `address`, `gender`, `course`, `status`, `year_level`) VALUES
(2, 'Anthony', 'Roculan', 'IT Depaprtment', 'IT Section 1', '', 'sample@sample', '', '', '1', 'first_year'),
(3, 'Mark Davin ', 'Tiu', 'new department', 'IT Section 1', 'new collge', 'sample@sample', 'male', '', '1', 'first_year'),
(4, 'Kyrson', 'Jeno', 'new department', 'IT Section 1', 'new collge', 'sample@sample', 'male', '', '', 'Sample@gmail.com'),
(5, 'Kyrson', 'Jeno', 'new department', 'IT Section 1', 'new collge', 'sample@sample', 'male', '', '', 'Sample@gmail.com'),
(6, 'sample', 'sample', 'new department', 'IT Section 1', 'new collge', 'sample@sample', 'male', '', 'student', 'first_year');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_details`
--

CREATE TABLE `teachers_details` (
  `teacher_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'T'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `faculty_users`
--
ALTER TABLE `faculty_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_cred`
--
ALTER TABLE `login_cred`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `students_cred`
--
ALTER TABLE `students_cred`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teachers_details`
--
ALTER TABLE `teachers_details`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `college_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `faculty_users`
--
ALTER TABLE `faculty_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login_cred`
--
ALTER TABLE `login_cred`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students_cred`
--
ALTER TABLE `students_cred`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teachers_details`
--
ALTER TABLE `teachers_details`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
