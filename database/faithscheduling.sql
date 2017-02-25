-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2017 at 08:30 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faithscheduling`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(12) NOT NULL,
  `adm_username` varchar(200) DEFAULT NULL,
  `adm_password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `adm_username`, `adm_password`) VALUES
(1, 'admin', 'd1133275ee2118be63a577af759fc052');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `sched_id` int(12) NOT NULL,
  `timehr` varchar(20) DEFAULT NULL,
  `days` varchar(20) DEFAULT NULL,
  `teach_id` int(12) DEFAULT NULL,
  `yls_id` int(12) DEFAULT NULL,
  `schoolyear` varchar(20) DEFAULT NULL,
  `room` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stud_id` int(12) NOT NULL,
  `stud_no` varchar(12) DEFAULT NULL,
  `stud_fname` varchar(200) DEFAULT NULL,
  `stud_mname` varchar(200) DEFAULT NULL,
  `stud_lname` varchar(200) DEFAULT NULL,
  `stud_gender` varchar(200) DEFAULT NULL,
  `stud_age` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_year_level`
--

CREATE TABLE `student_year_level` (
  `syl_id` int(12) NOT NULL,
  `stud_id` int(12) DEFAULT NULL,
  `year_id` int(12) DEFAULT NULL,
  `schoolyear` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subj_id` int(12) NOT NULL,
  `subj_code` varchar(200) DEFAULT NULL,
  `subj_desc` varchar(200) DEFAULT NULL,
  `units` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teach_id` int(12) NOT NULL,
  `teach_no` varchar(12) DEFAULT NULL,
  `teach_fname` varchar(200) DEFAULT NULL,
  `teach_mname` varchar(200) DEFAULT NULL,
  `teach_lname` varchar(200) DEFAULT NULL,
  `teach_gender` varchar(200) DEFAULT NULL,
  `teach_degree` varchar(200) DEFAULT NULL,
  `teach_masteral` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

-- --------------------------------------------------------
--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

--
-- Table structure for table `year_level`
--

CREATE TABLE `year_level` (
  `year_id` int(12) NOT NULL,
  `year_level` varchar(200) DEFAULT NULL,
  `section` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year_level_subject`
--

CREATE TABLE `year_level_subject` (
  `yls_id` int(12) NOT NULL,
  `year_id` int(12) DEFAULT NULL,
  `subj_id` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sched_id`),
  ADD KEY `teach_id` (`teach_id`),
  ADD KEY `yls_id` (`yls_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `student_year_level`
--
ALTER TABLE `student_year_level`
  ADD PRIMARY KEY (`syl_id`),
  ADD KEY `stud_id` (`stud_id`,`year_id`),
  ADD KEY `year_id` (`year_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subj_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teach_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year_level`
--
ALTER TABLE `year_level`
  ADD PRIMARY KEY (`year_id`);

--
-- Indexes for table `year_level_subject`
--
ALTER TABLE `year_level_subject`
  ADD PRIMARY KEY (`yls_id`),
  ADD KEY `year_id` (`year_id`,`subj_id`),
  ADD KEY `subj_id` (`subj_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sched_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stud_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student_year_level`
--
ALTER TABLE `student_year_level`
  MODIFY `syl_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subj_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teach_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `year_level`
--
ALTER TABLE `year_level`
  MODIFY `year_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `year_level_subject`
--
ALTER TABLE `year_level_subject`
  MODIFY `yls_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`teach_id`) REFERENCES `teachers` (`teach_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`yls_id`) REFERENCES `year_level_subject` (`yls_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_year_level`
--
ALTER TABLE `student_year_level`
  ADD CONSTRAINT `student_year_level_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `students` (`stud_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_year_level_ibfk_2` FOREIGN KEY (`year_id`) REFERENCES `year_level` (`year_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `year_level_subject`
--
ALTER TABLE `year_level_subject`
  ADD CONSTRAINT `year_level_subject_ibfk_1` FOREIGN KEY (`subj_id`) REFERENCES `subjects` (`subj_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `year_level_subject_ibfk_2` FOREIGN KEY (`year_id`) REFERENCES `year_level` (`year_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
