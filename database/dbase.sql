-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2015 at 08:02 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`adm_id` int(12) NOT NULL,
  `adm_username` varchar(200) DEFAULT NULL,
  `adm_password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `adm_username`, `adm_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
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

CREATE TABLE IF NOT EXISTS `students` (
`stud_id` int(12) NOT NULL,
  `stud_no` varchar(12) DEFAULT NULL,
  `stud_fname` varchar(200) DEFAULT NULL,
  `stud_mname` varchar(200) DEFAULT NULL,
  `stud_lname` varchar(200) DEFAULT NULL,
  `stud_gender` varchar(200) DEFAULT NULL,
  `stud_age` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stud_id`, `stud_no`, `stud_fname`, `stud_mname`, `stud_lname`, `stud_gender`, `stud_age`) VALUES
(1, '12-3213-321', 'Regin', 'Jude', 'Bayer', 'Male', '25'),
(2, '12-3213-3213', 'Mark', 'Oliver', 'Gan', 'Male', '30'),
(3, '12-3213-3232', 'Mc Donald', 'Ramirez', 'Fuentebella', 'Male', '18');

-- --------------------------------------------------------

--
-- Table structure for table `student_year_level`
--

CREATE TABLE IF NOT EXISTS `student_year_level` (
`syl_id` int(12) NOT NULL,
  `stud_id` int(12) DEFAULT NULL,
  `year_id` int(12) DEFAULT NULL,
  `schoolyear` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_year_level`
--

INSERT INTO `student_year_level` (`syl_id`, `stud_id`, `year_id`, `schoolyear`) VALUES
(4, 3, 5, '2014-2015'),
(5, 1, 4, '2014-2015'),
(6, 2, 4, '2014-2015');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
`subj_id` int(12) NOT NULL,
  `subj_code` varchar(200) DEFAULT NULL,
  `subj_desc` varchar(200) DEFAULT NULL,
  `units` varchar(12) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subj_id`, `subj_code`, `subj_desc`, `units`) VALUES
(21, 'IS', 'Integrated Sciences', '2'),
(22, 'Math 1', 'Elementary Algebra', '2'),
(23, 'English 1', 'Communications Arts', '2'),
(24, 'Computer Science 1', 'Introduction to Computer Science', '1'),
(25, 'Filipino 1', 'Sining ng Komunikasyan', '1'),
(26, 'Social Science 1', 'Philippine History and Government', '1'),
(27, 'Values Education 1', 'Introduction to Values Education', '1'),
(28, 'PEHM 1', 'Physical Education, Health and Music 1', '1'),
(29, 'Religion 1', 'Life of Jesus Christ', '1'),
(30, 'TLE 1', 'Home Economics', '2'),
(31, 'Speech', 'Oral Practice', '1'),
(32, 'Biology 1', 'Introduction to Biology', '2'),
(33, 'Chemistry 1', 'Inorganic Chemistry Part 1', '1'),
(34, 'Physics 1', 'General Physics', '1'),
(35, 'Mathematics 2', 'Plane Geometry', '1'),
(36, 'Mathematics 3', 'Advanced Algebra 1', '1'),
(37, 'Computer Science 2', 'Introduction to Programming', '1'),
(38, 'English 2', 'Communication Arts II', '1'),
(39, 'Filipino 2', 'Pagsusuri at Pagpapahalagang Pampanitikan', '1'),
(40, 'Social Science 2', 'Asian Studies', '1'),
(41, 'Values Education 2', 'Values Development', '1'),
(42, 'PEHM 2', 'Physical Education, Health and Music II', '1'),
(43, 'Arts', 'Art Appreciation', '1'),
(44, 'CADD', 'Drafting using Computer-Aided Design', '1');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
`teach_id` int(12) NOT NULL,
  `teach_no` varchar(12) DEFAULT NULL,
  `teach_fname` varchar(200) DEFAULT NULL,
  `teach_mname` varchar(200) DEFAULT NULL,
  `teach_lname` varchar(200) DEFAULT NULL,
  `teach_gender` varchar(200) DEFAULT NULL,
  `teach_degree` varchar(200) DEFAULT NULL,
  `teach_masteral` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teach_id`, `teach_no`, `teach_fname`, `teach_mname`, `teach_lname`, `teach_gender`, `teach_degree`, `teach_masteral`) VALUES
(1, '12-3213-321', 'Erza', 'Red', 'Scarlet', 'Female', 'BSGenEd', ''),
(2, '12-321-313', 'Regin', 'Jude', 'Bayer', 'Male', 'BSGenEd', ''),
(3, '12-3213-3213', 'Mark', 'Mar', 'Mendoza', 'Male', 'BSED', ''),
(4, '12-3213-312', 'Mackoy', 'Koi', 'Morales', 'Male', 'BSGenEd', ''),
(5, '12-3213-424', 'Mark', 'Oliver', 'Gan', 'Male', 'BSGenEd', ''),
(6, '12-442-424', 'Micahael', 'Oliver', 'Principe', 'Male', 'BSGenEd', ''),
(7, '12-3213-333', 'Pamela', 'Denise', 'Peralta', 'Female', 'BSGenEd', ''),
(8, '12-5535-553', 'Mc Donald', 'Jollybee', 'Fuenttebella', 'Male', 'BSGenEd', ''),
(9, '12-3221-111', 'Kathryn', 'Mahaba', 'Magbanua', 'Female', 'BSGenEd', ''),
(10, '12-0932-312', 'Kent', 'Michael', 'Ibanez', 'Male', 'BSGenEd', ''),
(11, '12-3322-333', 'Jan', 'Mark', 'Duenas', 'Male', 'BSGenEd', ''),
(12, '12-993-323', 'Etherious', 'Natsu', 'Dragneel', 'Male', 'BSGenEd', ''),
(13, '12-0993-323', 'Gray', 'Ice', 'Fullbuster', 'Male', 'BSGenEd', ''),
(14, '12-983-322', 'Lucy', 'Reira', 'Hertphilia', 'Female', 'BSGenEd', '');

-- --------------------------------------------------------

--
-- Table structure for table `year_level`
--

CREATE TABLE IF NOT EXISTS `year_level` (
`year_id` int(12) NOT NULL,
  `year_level` varchar(200) DEFAULT NULL,
  `section` varchar(12) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_level`
--

INSERT INTO `year_level` (`year_id`, `year_level`, `section`) VALUES
(4, '1st yr', 'A'),
(5, '2nd yr', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `year_level_subject`
--

CREATE TABLE IF NOT EXISTS `year_level_subject` (
`yls_id` int(12) NOT NULL,
  `year_id` int(12) DEFAULT NULL,
  `subj_id` int(12) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_level_subject`
--

INSERT INTO `year_level_subject` (`yls_id`, `year_id`, `subj_id`) VALUES
(10, 4, 21),
(11, 4, 22),
(12, 4, 23),
(13, 4, 24),
(14, 4, 25),
(15, 4, 26),
(16, 4, 27),
(17, 4, 28),
(18, 4, 29),
(19, 4, 30),
(20, 4, 31),
(21, 5, 32),
(22, 5, 33),
(23, 5, 34),
(24, 5, 35),
(25, 5, 36),
(26, 5, 37),
(27, 5, 38),
(28, 5, 39),
(29, 5, 40),
(30, 5, 41),
(31, 5, 42),
(32, 5, 43),
(33, 5, 44);

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
 ADD PRIMARY KEY (`sched_id`), ADD KEY `teach_id` (`teach_id`), ADD KEY `yls_id` (`yls_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `student_year_level`
--
ALTER TABLE `student_year_level`
 ADD PRIMARY KEY (`syl_id`), ADD KEY `stud_id` (`stud_id`,`year_id`), ADD KEY `year_id` (`year_id`);

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
-- Indexes for table `year_level`
--
ALTER TABLE `year_level`
 ADD PRIMARY KEY (`year_id`);

--
-- Indexes for table `year_level_subject`
--
ALTER TABLE `year_level_subject`
 ADD PRIMARY KEY (`yls_id`), ADD KEY `year_id` (`year_id`,`subj_id`), ADD KEY `subj_id` (`subj_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `adm_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
MODIFY `sched_id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `stud_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student_year_level`
--
ALTER TABLE `student_year_level`
MODIFY `syl_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
MODIFY `subj_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
MODIFY `teach_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `year_level`
--
ALTER TABLE `year_level`
MODIFY `year_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `year_level_subject`
--
ALTER TABLE `year_level_subject`
MODIFY `yls_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
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
