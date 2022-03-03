-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 03, 2022 at 03:05 PM
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
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answer_id` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `eval_id` varchar(255) NOT NULL,
  `question_id` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `criteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `student_id`, `eval_id`, `question_id`, `score`, `criteria`) VALUES
(1, '1', '1', '2', '5', 'MANAGEMENT'),
(2, '1', '1', '3', '5', 'MANAGEMENT'),
(3, '1', '1', '4', '5', 'MANAGEMENT'),
(4, '1', '1', '5', '5', 'ATTENDANCE'),
(5, '1', '1', '6', '1', 'ATTENDANCE'),
(6, '1', '1', '7', '5', 'ATTENDANCE'),
(7, '1', '1', '8', '5', 'ATTENDANCE'),
(8, '1', '1', '9', '5', 'PERFORMANCE'),
(9, '1', '1', '10', '5', 'PERFORMANCE'),
(10, '1', '1', '11', '5', 'PERFORMANCE'),
(11, '1', '1', '12', '5', 'PERFORMANCE'),
(12, '5', '1', '2', '4', 'MANAGEMENT'),
(13, '5', '1', '3', '5', 'MANAGEMENT'),
(14, '5', '1', '4', '2', 'MANAGEMENT'),
(15, '5', '1', '5', '5', 'ATTENDANCE'),
(16, '5', '1', '6', '1', 'ATTENDANCE'),
(17, '5', '1', '7', '1', 'ATTENDANCE'),
(18, '5', '1', '8', '1', 'ATTENDANCE'),
(19, '5', '1', '9', '1', 'PERFORMANCE'),
(20, '5', '1', '10', '1', 'PERFORMANCE'),
(21, '5', '1', '11', '1', 'PERFORMANCE'),
(22, '5', '1', '12', '1', 'PERFORMANCE'),
(23, '6', '1', '2', '5', 'MANAGEMENT'),
(24, '6', '1', '3', '5', 'MANAGEMENT'),
(25, '6', '1', '4', '5', 'MANAGEMENT'),
(26, '6', '1', '5', '5', 'ATTENDANCE'),
(27, '6', '1', '6', '1', 'ATTENDANCE'),
(28, '6', '1', '7', '1', 'ATTENDANCE'),
(29, '6', '1', '8', '1', 'ATTENDANCE'),
(30, '6', '1', '9', '1', 'PERFORMANCE'),
(31, '6', '1', '10', '1', 'PERFORMANCE'),
(32, '6', '1', '11', '1', 'PERFORMANCE'),
(33, '6', '1', '12', '1', 'PERFORMANCE'),
(34, '1', '2', '13', '5', 'MANAGEMENT'),
(35, '1', '2', '14', '5', 'ATTENDANCE'),
(36, '1', '2', '15', '5', 'ATTENDANCE'),
(37, '1', '3', '19', '5', 'MANAGEMENT'),
(38, '1', '3', '20', '5', 'MANAGEMENT'),
(39, '1', '3', '22', '5', 'MANAGEMENT'),
(40, '1', '3', '23', '5', 'PERFORMANCE'),
(41, '1', '3', '24', '5', 'PERFORMANCE'),
(42, '1', '3', '25', '5', 'ATTENDANCE'),
(43, '1', '3', '26', '5', 'ATTENDANCE'),
(44, '1', '3', '27', '5', 'ATTENDANCE'),
(45, '1', '4', '28', '5', 'MANAGEMENT'),
(46, '1', '4', '29', '5', 'MANAGEMENT'),
(47, '1', '4', '30', '5', 'MANAGEMENT'),
(48, '1', '4', '31', '5', 'PERFORMANCE'),
(49, '1', '4', '32', '5', 'PERFORMANCE'),
(50, '1', '4', '33', '5', 'PERFORMANCE');

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
(4, '1', 'B', 'IT'),
(5, '1', 'C', 'IT'),
(6, '1', 'A', 'ELECTRICAL ENGINEERING'),
(7, '1', 'B', 'ELECTRICAL ENGINEERING'),
(8, '1', 'A', 'NURSING'),
(9, '1', 'B', 'NURSING'),
(10, '1', 'C', 'NURSING'),
(11, '1', 'A', 'BSIT'),
(12, '1', 'B', 'BSIT');

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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `eval_id` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `eval_id`, `student_id`, `content`) VALUES
(1, '2', '1', 'sample'),
(3, '2', '1', 'this is a sample comment'),
(4, '2', '1', 'you are a nice teacher, we love you'),
(5, '4', '1', 'i feel like a monster'),
(6, '4', '1', 'this is a sample comment'),
(7, '4', '1', 'you are a nice teacher, we love you');

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
(16, 'NURSING', '', 'NEW DEPARTMENT'),
(18, 'BSIT', '', 'IT DEPARTMENT');

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE `criteria` (
  `id` int(11) NOT NULL,
  `eval_id` varchar(255) NOT NULL,
  `criteria_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `criteria`
--

INSERT INTO `criteria` (`id`, `eval_id`, `criteria_name`) VALUES
(1, '1', 'MANAGEMENT'),
(2, '1', 'PERFORMANCE'),
(3, '1', 'ATTENDANCE'),
(4, '2', 'MANAGEMENT'),
(5, '2', 'PERFORMANCE'),
(6, '2', 'ATTENDANCE'),
(7, '3', 'MANAGEMENT'),
(8, '3', 'PERFORMANCE'),
(9, '3', 'ATTENDANCE'),
(10, '4', 'MANAGEMENT'),
(11, '4', 'PERFORMANCE');

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
-- Table structure for table `evaluations`
--

CREATE TABLE `evaluations` (
  `id` int(11) NOT NULL,
  `school_year` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'NO',
  `year` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `teacher_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `evaluations`
--

INSERT INTO `evaluations` (`id`, `school_year`, `semester`, `status`, `year`, `section`, `course`, `teacher_id`) VALUES
(1, '2021-2022', '1ST', 'YES', '1', 'A', 'BSIT', '1'),
(4, '2021-2022', '1ST', 'YES', '1', 'A', 'BSIT', '3');

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
(2, '123', 'Kurt John', 'kj@ctu.com', 'ICT', 'IT DEPARTMENT', 'COLLEGE DEANS'),
(3, '456', 'John Wick', 'kj@ctu.com', 'COT', 'IT DEPARTMENT', 'FACULTIES'),
(5, '789', 'Bjorn Ironside', 'kj@ctu.com', 'COT', 'ENGINEERING DEPARTMENT', 'ADMINISTRATOR'),
(6, '101112', 'Ragnar Lothbrok', 'kj@ctu.com', '', 'ENGINEERING DEPARTMENT', 'DEPARTMENT CHAIR'),
(7, '131415', 'Harald Finehair', 'kj@ctu.com', 'ICT', '', 'DEAN OF INSTRUCTIONS');

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
(1, 'kjmojado21@gmail.com', 'admin', '1'),
(2, 'mdavin@gmail.com', 'user', '2'),
(3, 'jr@gmail.com', 'user', '3'),
(4, 'myot@gmail.com', 'user', '4'),
(5, 'katog@gmail.com', 'sample', '5'),
(6, 'nursy@gmail.com', 'sample', '6');

-- --------------------------------------------------------

--
-- Table structure for table `questionaires`
--

CREATE TABLE `questionaires` (
  `quest_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `criteria` varchar(255) NOT NULL,
  `eval_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questionaires`
--

INSERT INTO `questionaires` (`quest_id`, `question`, `criteria`, `eval_id`) VALUES
(2, 'DOES THE TEACHER SPEAK WELL?', 'MANAGEMENT', 1),
(3, 'DOES THE TEACHER SPEAK WELL?', 'MANAGEMENT', 1),
(4, 'DOES THE TEACHER SPEAK WELL?', 'MANAGEMENT', 1),
(5, 'ALWAYS PRESENT?', 'ATTENDANCE', 1),
(6, 'ALWAYS PRESENT?', 'ATTENDANCE', 1),
(7, 'ALWAYS PRESENT?', 'ATTENDANCE', 1),
(8, 'ALWAYS PRESENT?', 'ATTENDANCE', 1),
(9, 'DOES THE TEACHER SPEAK WELL?', 'PERFORMANCE', 1),
(10, 'ALWAYS PRESENT?', 'PERFORMANCE', 1),
(11, 'DOES THE TEACHER SPEAK WELL?', 'PERFORMANCE', 1),
(12, 'DOES THE TEACHER SPEAK WELL?', 'PERFORMANCE', 1),
(13, 'DOES THE TEACHER SPEAK WELL?', 'MANAGEMENT', 2),
(14, 'ALWAYS PRESENT?', 'ATTENDANCE', 2),
(15, 'ALWAYS PRESENT?', 'ATTENDANCE', 2),
(16, 'DOES THE TEACHER SPEAK WELL?', 'PERFORMANCE', 2),
(17, 'ni amot?', 'PERFORMANCE', 2),
(18, 'DOES THE TEACHER SPEAK WELL?', 'PERFORMANCE', 2),
(19, 'DOES THE TEACHER SPEAK WELL?', 'MANAGEMENT', 3),
(20, 'sample_1', 'MANAGEMENT', 3),
(22, 'sample_2', 'MANAGEMENT', 3),
(23, 'sample_1', 'PERFORMANCE', 3),
(24, 'sample_10', 'PERFORMANCE', 3),
(25, 'sample_1', 'ATTENDANCE', 3),
(26, 'sample_1', 'ATTENDANCE', 3),
(27, 'sample_1', 'ATTENDANCE', 3),
(28, 'sample_1', 'MANAGEMENT', 4),
(29, 'sample_1', 'MANAGEMENT', 4),
(30, 'sample_1', 'MANAGEMENT', 4),
(31, 'ALWAYS PRESENT?', 'PERFORMANCE', 4),
(32, 'DOES THE TEACHER SPEAK WELL?', 'PERFORMANCE', 4),
(33, 'ALWAYS PRESENT?', 'PERFORMANCE', 4);

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
(1, 'Kurt John ', 'Mojado', 'IT DEPARTMENT', 'A', 'ICT', 'sample@sample', 'male', 'BSIT', 'student', '1'),
(2, 'Mark Davin ', 'Tiu', 'NEW DEPARTMENT', 'A', 'ICT', 'sample@sample', 'male', 'NURSING', 'student', '1'),
(3, 'Joven', 'Roculan', 'IT DEPARTMENT', 'A', 'ICT', 'sample@sample', 'male', 'COM-SCI', 'student', '1'),
(4, 'Jose Mari', 'Romeo', 'ENGINEERING DEPARTMENT', 'B', 'ICT', 'sample@sample', 'male', 'ELECTRICAL ENGINEERING', 'student', '1'),
(5, 'Mark Davin ', 'Jeno', 'IT DEPARTMENT', 'A', 'ICT', '', 'male', 'BSIT', 'student', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_desc` varchar(255) NOT NULL,
  `sub_class_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `sub_name`, `sub_desc`, `sub_class_id`) VALUES
(1, 'ENGLISH 101', '', '6'),
(2, 'FILIPINO 101', '', '6'),
(3, 'ENGLISH 101', '', '11'),
(4, 'FILIPINO 101', '', '11'),
(5, 'MATH', '', '11');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `fname`, `lname`, `department`, `username`, `password`) VALUES
(1, 'Damian', 'Marley', 'IT DEPARTMENT', 'marley@gmail.com', 'user'),
(2, 'Kyrson ', 'Jeno', 'ENGINEERING DEPARTMENT', 'kjeno@gmail.com', 'teacher'),
(3, 'Christine', 'Canete', 'IT DEPARTMENT', 'xtine@ctu.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`);

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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `evaluations`
--
ALTER TABLE `evaluations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `questionaires`
--
ALTER TABLE `questionaires`
  ADD PRIMARY KEY (`quest_id`);

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
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `college_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `questionaires`
--
ALTER TABLE `questionaires`
  MODIFY `quest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
