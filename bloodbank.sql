-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 26, 2017 at 04:59 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE IF NOT EXISTS `agency` (
  `agency_id` int(11) NOT NULL AUTO_INCREMENT,
  `agency_name` varchar(200) NOT NULL,
  PRIMARY KEY (`agency_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`agency_id`, `agency_name`) VALUES
(1, 'Brgy. Busay'),
(2, 'Bago City DSWD'),
(3, 'Red Cross Youth Bacolod Chapter');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `donor_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `status` int(30) NOT NULL,
  `booking_address` varchar(100) NOT NULL,
  `booking_city` varchar(50) NOT NULL,
  `program_name` varchar(500) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `donor_id`, `booking_date`, `booking_time`, `status`, `booking_address`, `booking_city`, `program_name`) VALUES
(7, 2, '2017-02-21', '06:55:00', 0, '', '', ''),
(8, 2, '2017-02-22', '06:55:00', 0, '', '', ''),
(9, 2, '2017-02-21', '06:55:00', 0, '', '', ''),
(10, 2, '2017-02-21', '06:55:00', 0, '', '', ''),
(11, 2, '2017-02-22', '06:55:00', 0, '', '', ''),
(12, 2, '2017-02-21', '06:55:00', 0, '', '', ''),
(13, 2, '2017-02-21', '06:55:00', 0, '', '', ''),
(14, 1, '2017-03-01', '07:00:00', 0, '', '', ''),
(15, 10, '2017-02-23', '21:40:00', 0, 'Bago City', 'Bago City', 'Bloodletting'),
(16, 14, '2017-03-15', '20:05:00', 0, '', 'Bacolod City', ''),
(17, 14, '2017-03-23', '23:50:00', 0, '', 'Bacolod City', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(500) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(1, 'Are you:'),
(2, 'In the past three days?'),
(3, 'QUESTION No. 5, FOR FEMALE DONORS: in the past 1 and 1/2 months (6 Wks)'),
(4, 'In the past 12 Wks have you been\r\n'),
(5, 'In the past 12 months have you been'),
(6, 'Have you ever?');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(100) NOT NULL,
  `zipcode` int(11) NOT NULL,
  PRIMARY KEY (`city_id`),
  UNIQUE KEY `city_name` (`city_name`,`zipcode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `zipcode`) VALUES
(2, 'Bacolod City', 6100),
(1, 'Bago City', 6101);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `donation_id` int(11) NOT NULL AUTO_INCREMENT,
  `donor_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `donation_date` date NOT NULL,
  `donation_time` time NOT NULL,
  `expiry` date NOT NULL,
  `exam_id` int(11) NOT NULL,
  PRIMARY KEY (`donation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `donor_id` int(11) NOT NULL AUTO_INCREMENT,
  `donor_last` varchar(100) NOT NULL,
  `donor_first` varchar(100) NOT NULL,
  `donor_middle` varchar(100) NOT NULL,
  `donor_bday` date NOT NULL,
  `donor_gender` varchar(100) NOT NULL,
  `donor_contact` varchar(100) NOT NULL,
  `donor_email` varchar(100) NOT NULL,
  `donor_password` varchar(30) NOT NULL,
  `donor_nationality` varchar(100) NOT NULL,
  `donor_civil` varchar(20) NOT NULL,
  `donor_occupation` varchar(100) NOT NULL,
  `donor_address` varchar(100) NOT NULL,
  `donor_city` varchar(30) NOT NULL,
  `donor_zipcode` varchar(10) NOT NULL,
  `donor_office_address` varchar(100) NOT NULL,
  `donor_office_zipcode` int(10) NOT NULL,
  `donor_pic` varchar(100) NOT NULL,
  `donor_type` varchar(30) NOT NULL,
  PRIMARY KEY (`donor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `donor_last`, `donor_first`, `donor_middle`, `donor_bday`, `donor_gender`, `donor_contact`, `donor_email`, `donor_password`, `donor_nationality`, `donor_civil`, `donor_occupation`, `donor_address`, `donor_city`, `donor_zipcode`, `donor_office_address`, `donor_office_zipcode`, `donor_pic`, `donor_type`) VALUES
(10, 'Cueva', 'Kaye', 'G', '2017-01-01', 'female', '9898', 'kaye@gmail.com', '123', 'kjk', '', 'kjkj', 'jkjkj', 'jkjk', '', '', 0, '16358888_120300001863097991_867938277_n.jpg', ''),
(11, 'adada', 'dada', 'dada', '2017-01-01', 'female', '76767', 'e@y.com', '123', 'ddsd', '', 'jhjhj', 'dsds', 'dsds', '', '', 0, '', ''),
(12, 'dad', 'sasa', 'ada', '2017-01-01', 'female', '4242', 'emoblazz@gmail.com', '12345', 'dsds', '', 'jhjh', 'dsds', 'dsds', '', '', 0, '', ''),
(13, 'sasa', 'sasa', 'saa', '2017-01-01', 'female', '7878', 'g@g.com', '123', '', '', 'jhjh', '', '', '', '', 0, '', ''),
(14, 'Katipunan', 'Carmina', 'A', '1998-01-01', 'female', '09051914070', 'emoblazz@gmail.com', '123', 'Filipino', 'Single', 'Technician', 'Brgy. Busay', 'Bago City', '6101', 'Talisay', 6115, 'f349458176.jpg', 'Volunteer'),
(15, 'jhjh', 'jhjhdada', 'jhjh', '2017-01-01', 'female', '7676', 'emoblazz@gmail.com', '', '', '', 'kjjk', '', '', '', '', 0, '', ''),
(17, 'lklk', 'kjkj', 'lkl', '2017-01-01', 'female', 'uiuiu', 'emoblazz@gmail.com', '123', 'kjkj', '', 'kjkjkjmn', 'kjkj', 'kjkj', '', '', 0, '', ''),
(18, 'Katipun', 'Carmin', '', '2017-01-01', 'female', '7878', 'emoblazz@gmail.com1', '123', 'Filipino', 'Single', 'None', 'Prk. Tumpok', '2', '6101', 'Talisay', 6115, '', 'Volunteer'),
(19, 'Last', 'First', 'Mi', '1995-01-01', 'male', '89787', 'a@email.com', '123', 'American', 'Married', 'Teacher', 'Prk. Santol', '2', '6101', 'jhjh', 6765, '', 'Forced');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(100) NOT NULL,
  `event_address` varchar(100) NOT NULL,
  `event_date` datetime NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `linkages`
--

CREATE TABLE IF NOT EXISTS `linkages` (
  `linkage_id` int(11) NOT NULL AUTO_INCREMENT,
  `agency_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  PRIMARY KEY (`linkage_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `linkages`
--

INSERT INTO `linkages` (`linkage_id`, `agency_id`, `booking_id`) VALUES
(1, 1, 12),
(2, 1, 13),
(3, 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `physical_exam`
--

CREATE TABLE IF NOT EXISTS `physical_exam` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `donor_id` int(11) NOT NULL,
  `weight` varchar(15) NOT NULL,
  `blood_pressure` varchar(15) NOT NULL,
  `pulse_rate` varchar(15) NOT NULL,
  `temp` varchar(15) NOT NULL,
  `gen_appearance` varchar(1000) NOT NULL,
  `skin` varchar(100) NOT NULL,
  `heent` varchar(100) NOT NULL,
  `heart_lungs` varchar(100) NOT NULL,
  `remarks` varchar(20) NOT NULL,
  `volume` varchar(10) NOT NULL,
  `medical_officer` varchar(50) NOT NULL,
  `reasons_for_deferral` varchar(500) NOT NULL,
  `blood_bag_type` varchar(10) NOT NULL,
  `segment_number` varchar(30) NOT NULL,
  `time_started` time NOT NULL,
  `time_ended` time NOT NULL,
  `phlebotomist` varchar(50) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `screened_by` varchar(50) NOT NULL,
  `hematocrit` varchar(30) NOT NULL,
  `exam_status` int(11) NOT NULL,
  `donation_date` date NOT NULL,
  `expiry` date NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `physical_exam`
--

INSERT INTO `physical_exam` (`exam_id`, `donor_id`, `weight`, `blood_pressure`, `pulse_rate`, `temp`, `gen_appearance`, `skin`, `heent`, `heart_lungs`, `remarks`, `volume`, `medical_officer`, `reasons_for_deferral`, `blood_bag_type`, `segment_number`, `time_started`, `time_ended`, `phlebotomist`, `blood_type`, `screened_by`, `hematocrit`, `exam_status`, `donation_date`, `expiry`) VALUES
(1, 10, '46', '120/180', '80', '36', 'fdfdf', 'green', 'fdfd', 'fdfd', 'Accepted', '120', 'Medical Techonology', 'dsdss', 'Double', 'a998798da8', '10:57:00', '19:58:00', 'test test', 'A', 'test test', '', 1, '2016-11-30', '2017-01-30'),
(3, 17, '44', '100/120', '60', '45', 'dfsf', 'ljkj', 'kjk', 'lkjk', 'Accepted', '120', 'Medical Techonology', '', '', '', '00:00:00', '00:00:00', '', 'B', '', '', 0, '0000-00-00', '2017-03-13'),
(4, 10, '87', '1909', '78', '89', 'jhjh', 'jhjh', 'jhjh', 'hjhj', 'Accepted', '120', 'Medical Techonology', '', '', '', '00:00:00', '00:00:00', '', 'B', '', '', 0, '0000-00-00', '2017-03-17'),
(5, 11, '10', '120/130', '20', '35', 'dds', 'lkl', 'lkl', ';lkl', 'Accepted', '150', 'Matt Daemon', '', '', '', '00:00:00', '00:00:00', '', 'D', '', '', 0, '0000-00-00', '2017-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `program_id` int(11) NOT NULL AUTO_INCREMENT,
  `program` varchar(500) NOT NULL,
  `program_address` varchar(500) NOT NULL,
  `city_id` int(11) NOT NULL,
  `program_date` date NOT NULL,
  `program_time` time NOT NULL,
  PRIMARY KEY (`program_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `program`, `program_address`, `city_id`, `program_date`, `program_time`) VALUES
(1, 'Bloodletting', 'Bago City', 1, '2017-03-16', '11:00:00'),
(2, 'Sample', 'kkjk', 2, '0000-00-00', '11:00:00'),
(3, 'ds', 'dsds', 2, '0000-00-00', '11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `program_donor`
--

CREATE TABLE IF NOT EXISTS `program_donor` (
  `program_donor_id` int(11) NOT NULL AUTO_INCREMENT,
  `donor_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  PRIMARY KEY (`program_donor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `program_donor`
--

INSERT INTO `program_donor` (`program_donor_id`, `donor_id`, `program_id`) VALUES
(1, 18, 1),
(2, 19, 1),
(3, 10, 2),
(4, 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(1000) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question`, `category_id`) VALUES
(1, 'Feeling healthy today?', 1),
(2, 'Currently taking medication?', 1),
(3, 'Have you taken any medication from the deferral list?', 1),
(4, 'Have you received any vaccination?', 1),
(5, 'Have you taken aspirin or anything that has aspirin in it?	\r\n', 2),
(6, 'Have you been pregnant or are you pregnant now? Last Menstrual period? ', 3),
(7, 'Donated blood, platelet or plasma?	\r\n', 4),
(8, 'Had a blood transfusion?	\r\n', 5),
(9, 'Had surgical operation, dental extraction?	\r\n', 5),
(10, 'Had a tattoo, ear or body piercing, accidental contact with blood, needle-stick & accupuncture?	\r\n', 5),
(11, 'Had sexual contact with high risk individuals?	\r\n', 5),
(12, 'Had sexual contact with anyone in exchange for material or monetary gain?	', 5),
(13, 'Had sexual contact with person who has worked abroad?	\r\n', 5),
(14, 'Engaged in Casual Sex?	\r\n', 5),
(15, 'Lived with a person who has hepatitis?	\r\n', 5),
(16, 'Have you been imprisoned?	\r\n', 5),
(17, 'Have any of your relatives had Creutsfeldt-Jakob (Mad Cow) disease?', 5),
(18, 'Lived outside your place of residence?', 6),
(19, 'Lived outside Philippines	\r\n', 6),
(20, 'Use needles to take drugs, steroids, or anything not prescribed by your doctor?	\r\n', 6),
(21, 'Used clothing factor concentrate?	\r\n', 6),
(22, 'Had a positive test for HIV/AIDS virus, Syphillis or Malaria?', 6),
(23, 'Had Hepatitis?', 6),
(24, 'Had Malaria?', 6),
(25, 'Been told to have or treated for genital wart, syphillis, gonorrhea or other Sexuality Transmissible Infections?	\r\n', 6),
(26, 'Had any type of cancer, for example Leukemia?	\r\n', 6),
(27, 'Had any problems with your heart or lungs?', 6),
(28, 'Had a bleeding condition or blood disease?', 6),
(29, 'Are you giving blood because you wanted to be tested for HIV or Hepatitis virus?	\r\n', 6),
(30, 'Are you aware that if you have the AIDS/Hepatitis virus, you can givr it to someone else though you may feel well and have a negative HIV/Hepatitis test?	\r\n', 6);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `sched_id` int(11) NOT NULL AUTO_INCREMENT,
  `sched_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_end` date NOT NULL,
  PRIMARY KEY (`sched_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sched_id`, `sched_date`, `start_time`, `end_time`, `user_id`, `date_end`) VALUES
(5, '2017-02-09', '10:15:00', '10:15:00', 2, '2017-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `survey_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `answer` varchar(10) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `survey_date` date NOT NULL,
  `survey_status` int(11) NOT NULL,
  PRIMARY KEY (`survey_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=211 ;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`survey_id`, `question_id`, `answer`, `donor_id`, `survey_date`, `survey_status`) VALUES
(1, 1, 'yes', 17, '2017-03-04', 1),
(2, 2, 'yes', 17, '2017-03-04', 1),
(3, 3, 'yes', 17, '2017-03-04', 1),
(4, 4, 'yes', 17, '2017-03-04', 1),
(5, 5, 'yes', 17, '2017-03-04', 1),
(6, 6, 'yes', 17, '2017-03-04', 1),
(7, 7, 'yes', 17, '2017-03-04', 1),
(8, 8, 'yes', 17, '2017-03-04', 1),
(9, 9, 'yes', 17, '2017-03-04', 1),
(10, 10, 'yes', 17, '2017-03-04', 1),
(11, 11, 'yes', 17, '2017-03-04', 1),
(12, 12, 'yes', 17, '2017-03-04', 1),
(13, 13, 'yes', 17, '2017-03-04', 1),
(14, 14, 'yes', 17, '2017-03-04', 1),
(15, 15, 'yes', 17, '2017-03-04', 1),
(16, 16, 'yes', 17, '2017-03-04', 1),
(17, 17, 'yes', 17, '2017-03-04', 1),
(18, 18, 'yes', 17, '2017-03-04', 1),
(19, 19, 'yes', 17, '2017-03-04', 1),
(20, 20, 'yes', 17, '2017-03-04', 1),
(21, 21, 'yes', 17, '2017-03-04', 1),
(22, 22, 'yes', 17, '2017-03-04', 1),
(23, 23, 'yes', 17, '2017-03-04', 1),
(24, 24, 'yes', 17, '2017-03-04', 1),
(25, 25, 'yes', 17, '2017-03-04', 1),
(26, 26, 'yes', 17, '2017-03-04', 1),
(27, 27, 'yes', 17, '2017-03-04', 1),
(28, 28, 'yes', 17, '2017-03-04', 1),
(29, 29, 'yes', 17, '2017-03-04', 1),
(30, 30, 'yes', 17, '2017-03-04', 1),
(61, 1, 'yes', 11, '2017-03-07', 1),
(62, 2, 'yes', 11, '2017-03-07', 1),
(63, 3, 'yes', 11, '2017-03-07', 1),
(64, 4, 'yes', 11, '2017-03-07', 1),
(65, 5, 'yes', 11, '2017-03-07', 1),
(66, 6, 'yes', 11, '2017-03-07', 1),
(67, 7, 'yes', 11, '2017-03-07', 1),
(68, 8, 'yes', 11, '2017-03-07', 1),
(69, 9, 'yes', 11, '2017-03-07', 1),
(70, 10, 'yes', 11, '2017-03-07', 1),
(71, 11, 'yes', 11, '2017-03-07', 1),
(72, 12, 'yes', 11, '2017-03-07', 1),
(73, 13, 'yes', 11, '2017-03-07', 1),
(74, 14, 'yes', 11, '2017-03-07', 1),
(75, 15, 'yes', 11, '2017-03-07', 1),
(76, 16, 'yes', 11, '2017-03-07', 1),
(77, 17, 'yes', 11, '2017-03-07', 1),
(78, 18, 'yes', 11, '2017-03-07', 1),
(79, 19, 'yes', 11, '2017-03-07', 1),
(80, 20, 'yes', 11, '2017-03-07', 1),
(81, 21, 'yes', 11, '2017-03-07', 1),
(82, 22, 'yes', 11, '2017-03-07', 1),
(83, 23, 'yes', 11, '2017-03-07', 1),
(84, 24, 'yes', 11, '2017-03-07', 1),
(85, 25, 'yes', 11, '2017-03-07', 1),
(86, 26, 'yes', 11, '2017-03-07', 1),
(87, 27, 'yes', 11, '2017-03-07', 1),
(88, 28, 'yes', 11, '2017-03-07', 1),
(89, 29, 'yes', 11, '2017-03-07', 1),
(90, 30, 'yes', 11, '2017-03-07', 1),
(91, 1, 'yes', 18, '2017-03-13', 0),
(92, 2, 'yes', 18, '2017-03-13', 0),
(93, 3, 'yes', 18, '2017-03-13', 0),
(94, 4, 'yes', 18, '2017-03-13', 0),
(95, 5, 'yes', 18, '2017-03-13', 0),
(96, 6, 'yes', 18, '2017-03-13', 0),
(97, 7, 'yes', 18, '2017-03-13', 0),
(98, 8, 'yes', 18, '2017-03-13', 0),
(99, 9, 'yes', 18, '2017-03-13', 0),
(100, 10, 'yes', 18, '2017-03-13', 0),
(101, 11, 'yes', 18, '2017-03-13', 0),
(102, 12, 'yes', 18, '2017-03-13', 0),
(103, 13, 'yes', 18, '2017-03-13', 0),
(104, 14, 'yes', 18, '2017-03-13', 0),
(105, 15, 'yes', 18, '2017-03-13', 0),
(106, 16, 'yes', 18, '2017-03-13', 0),
(107, 17, 'yes', 18, '2017-03-13', 0),
(108, 18, 'yes', 18, '2017-03-13', 0),
(109, 19, 'yes', 18, '2017-03-13', 0),
(110, 20, 'yes', 18, '2017-03-13', 0),
(111, 21, 'yes', 18, '2017-03-13', 0),
(112, 22, 'yes', 18, '2017-03-13', 0),
(113, 23, 'yes', 18, '2017-03-13', 0),
(114, 24, 'yes', 18, '2017-03-13', 0),
(115, 25, 'yes', 18, '2017-03-13', 0),
(116, 26, 'yes', 18, '2017-03-13', 0),
(117, 27, 'yes', 18, '2017-03-13', 0),
(118, 28, 'yes', 18, '2017-03-13', 0),
(119, 29, 'yes', 18, '2017-03-13', 0),
(120, 30, 'yes', 18, '2017-03-13', 0),
(121, 1, 'yes', 19, '2017-03-13', 0),
(122, 2, 'yes', 19, '2017-03-13', 0),
(123, 3, 'yes', 19, '2017-03-13', 0),
(124, 4, 'yes', 19, '2017-03-13', 0),
(125, 5, 'yes', 19, '2017-03-13', 0),
(126, 6, 'yes', 19, '2017-03-13', 0),
(127, 7, 'yes', 19, '2017-03-13', 0),
(128, 8, 'yes', 19, '2017-03-13', 0),
(129, 9, 'yes', 19, '2017-03-13', 0),
(130, 10, 'yes', 19, '2017-03-13', 0),
(131, 11, 'yes', 19, '2017-03-13', 0),
(132, 12, 'yes', 19, '2017-03-13', 0),
(133, 13, 'yes', 19, '2017-03-13', 0),
(134, 14, 'yes', 19, '2017-03-13', 0),
(135, 15, 'yes', 19, '2017-03-13', 0),
(136, 16, 'yes', 19, '2017-03-13', 0),
(137, 17, 'yes', 19, '2017-03-13', 0),
(138, 18, 'yes', 19, '2017-03-13', 0),
(139, 19, 'yes', 19, '2017-03-13', 0),
(140, 20, 'yes', 19, '2017-03-13', 0),
(141, 21, 'yes', 19, '2017-03-13', 0),
(142, 22, 'yes', 19, '2017-03-13', 0),
(143, 23, 'yes', 19, '2017-03-13', 0),
(144, 24, 'yes', 19, '2017-03-13', 0),
(145, 25, 'yes', 19, '2017-03-13', 0),
(146, 26, 'yes', 19, '2017-03-13', 0),
(147, 27, 'yes', 19, '2017-03-13', 0),
(148, 28, 'yes', 19, '2017-03-13', 0),
(149, 29, 'yes', 19, '2017-03-13', 0),
(150, 30, 'yes', 19, '2017-03-13', 0),
(151, 1, 'yes', 10, '2017-03-01', 0),
(152, 2, 'yes', 10, '2017-03-01', 0),
(153, 3, 'yes', 10, '2017-03-01', 0),
(154, 4, 'yes', 10, '2017-03-01', 0),
(155, 5, 'yes', 10, '2017-03-01', 0),
(156, 6, 'yes', 10, '2017-03-01', 0),
(157, 7, 'yes', 10, '2017-03-01', 0),
(158, 8, 'yes', 10, '2017-03-01', 0),
(159, 9, 'yes', 10, '2017-03-01', 0),
(160, 10, 'yes', 10, '2017-03-01', 0),
(161, 11, 'yes', 10, '2017-03-01', 0),
(162, 12, 'yes', 10, '2017-03-01', 0),
(163, 13, 'yes', 10, '2017-03-01', 0),
(164, 14, 'yes', 10, '2017-03-01', 0),
(165, 15, 'yes', 10, '2017-03-01', 0),
(166, 16, 'yes', 10, '2017-03-01', 0),
(167, 17, 'yes', 10, '2017-03-01', 0),
(168, 18, 'yes', 10, '2017-03-01', 0),
(169, 19, 'yes', 10, '2017-03-01', 0),
(170, 20, 'yes', 10, '2017-03-01', 0),
(171, 21, 'yes', 10, '2017-03-01', 0),
(172, 22, 'yes', 10, '2017-03-01', 0),
(173, 23, 'yes', 10, '2017-03-01', 0),
(174, 24, 'yes', 10, '2017-03-01', 0),
(175, 25, 'yes', 10, '2017-03-01', 0),
(176, 26, 'yes', 10, '2017-03-01', 0),
(177, 27, 'yes', 10, '2017-03-01', 0),
(178, 28, 'yes', 10, '2017-03-01', 0),
(179, 29, 'yes', 10, '2017-03-01', 0),
(180, 30, 'yes', 10, '2017-03-01', 0),
(181, 1, 'yes', 10, '2017-03-13', 0),
(182, 2, 'yes', 10, '2017-03-13', 0),
(183, 3, 'yes', 10, '2017-03-13', 0),
(184, 4, 'yes', 10, '2017-03-13', 0),
(185, 5, 'yes', 10, '2017-03-13', 0),
(186, 6, 'yes', 10, '2017-03-13', 0),
(187, 7, 'yes', 10, '2017-03-13', 0),
(188, 8, 'yes', 10, '2017-03-13', 0),
(189, 9, 'yes', 10, '2017-03-13', 0),
(190, 10, 'yes', 10, '2017-03-13', 0),
(191, 11, 'yes', 10, '2017-03-13', 0),
(192, 12, 'yes', 10, '2017-03-13', 0),
(193, 13, 'yes', 10, '2017-03-13', 0),
(194, 14, 'yes', 10, '2017-03-13', 0),
(195, 15, 'yes', 10, '2017-03-13', 0),
(196, 16, 'yes', 10, '2017-03-13', 0),
(197, 17, 'yes', 10, '2017-03-13', 0),
(198, 18, 'yes', 10, '2017-03-13', 0),
(199, 19, 'yes', 10, '2017-03-13', 0),
(200, 20, 'yes', 10, '2017-03-13', 0),
(201, 21, 'yes', 10, '2017-03-13', 0),
(202, 22, 'yes', 10, '2017-03-13', 0),
(203, 23, 'yes', 10, '2017-03-13', 0),
(204, 24, 'yes', 10, '2017-03-13', 0),
(205, 25, 'yes', 10, '2017-03-13', 0),
(206, 26, 'yes', 10, '2017-03-13', 0),
(207, 27, 'yes', 10, '2017-03-13', 0),
(208, 28, 'yes', 10, '2017-03-13', 0),
(209, 29, 'yes', 10, '2017-03-13', 0),
(210, 30, 'yes', 10, '2017-03-13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_last` varchar(100) NOT NULL,
  `user_first` varchar(100) NOT NULL,
  `user_middle` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `user_last`, `user_first`, `user_middle`, `user_type`) VALUES
(1, 'admin', 'admin', 'Daemon', 'Matt', 'C.', 'Recruitment Officer '),
(2, 'med', 'med', 'Techonology', 'Medical', '', 'Medical Technology'),
(3, 'admin', 'admin', 'Dragic', 'Goran', 'Lee', 'Administrator'),
(4, 'test', 'test', 'test', 'test', 'test', 'Phlebotomist');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
