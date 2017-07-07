-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2017 at 10:10 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `agency_id` int(11) NOT NULL,
  `agency_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`agency_id`, `agency_name`) VALUES
(1, 'Brgy. Busay'),
(2, 'Bago City DSWD'),
(3, 'Red Cross Youth Bacolod Chapter');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` varchar(10) NOT NULL,
  `survey_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `status` int(30) NOT NULL,
  `booking_address` varchar(100) NOT NULL,
  `booking_city` varchar(50) NOT NULL,
  `program_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `zipcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `donation` (
  `donation_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `donation_date` date NOT NULL,
  `donation_time` time NOT NULL,
  `expiry` date NOT NULL,
  `exam_id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` int(11) NOT NULL,
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
  `donor_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_address` varchar(100) NOT NULL,
  `event_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `linkages`
--

CREATE TABLE `linkages` (
  `linkage_id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `physical_exam` (
  `exam_id` int(11) NOT NULL,
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
  `survey_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physical_exam`
--

INSERT INTO `physical_exam` (`exam_id`, `donor_id`, `weight`, `blood_pressure`, `pulse_rate`, `temp`, `gen_appearance`, `skin`, `heent`, `heart_lungs`, `remarks`, `volume`, `medical_officer`, `reasons_for_deferral`, `blood_bag_type`, `segment_number`, `time_started`, `time_ended`, `phlebotomist`, `blood_type`, `screened_by`, `hematocrit`, `exam_status`, `donation_date`, `expiry`, `survey_id`) VALUES
(1, 10, '46', '120/180', '80', '36', 'fdfdf', 'green', 'fdfd', 'fdfd', 'Accepted', '120', 'Medical Techonology', 'dsdss', 'Double', 'a998798da8', '10:57:00', '19:58:00', 'test test', 'A', 'test test', '', 1, '2016-11-30', '2017-01-30', 0),
(3, 17, '44', '100/120', '60', '45', 'dfsf', 'ljkj', 'kjk', 'lkjk', 'Accepted', '120', 'Medical Techonology', '', '', '', '00:00:00', '00:00:00', '', 'B', '', '', 0, '0000-00-00', '2017-03-13', 0),
(4, 10, '87', '1909', '78', '89', 'jhjh', 'jhjh', 'jhjh', 'hjhj', 'Accepted', '120', 'Medical Techonology', '', '', '', '00:00:00', '00:00:00', '', 'B', '', '', 0, '0000-00-00', '2017-03-17', 0),
(5, 11, '10', '120/130', '20', '35', 'dds', 'lkl', 'lkl', ';lkl', 'Accepted', '150', 'Matt Daemon', '', '', '', '00:00:00', '00:00:00', '', 'D', '', '', 0, '0000-00-00', '2017-03-24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_id` int(11) NOT NULL,
  `program` varchar(500) NOT NULL,
  `program_address` varchar(500) NOT NULL,
  `city_id` int(11) NOT NULL,
  `program_date` date NOT NULL,
  `program_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `program_donor` (
  `program_donor_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `schedule` (
  `sched_id` int(11) NOT NULL,
  `sched_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sched_id`, `sched_date`, `start_time`, `end_time`, `user_id`, `date_end`) VALUES
(5, '2017-02-09', '10:15:00', '10:15:00', 2, '2017-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `survey_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `survey_date` date NOT NULL,
  `survey_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_last` varchar(100) NOT NULL,
  `user_first` varchar(100) NOT NULL,
  `user_middle` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `user_last`, `user_first`, `user_middle`, `user_type`) VALUES
(1, 'admin', 'admin', 'Daemon', 'Matt', 'C.', 'Recruitment Officer '),
(2, 'med', 'med', 'Techonology', 'Medical', '', 'Medical Technology'),
(3, 'admin', 'admin', 'Dragic', 'Goran', 'Lee', 'Administrator'),
(4, 'test', 'test', 'test', 'test', 'test', 'Phlebotomist');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`agency_id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD UNIQUE KEY `city_name` (`city_name`,`zipcode`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `linkages`
--
ALTER TABLE `linkages`
  ADD PRIMARY KEY (`linkage_id`);

--
-- Indexes for table `physical_exam`
--
ALTER TABLE `physical_exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `program_donor`
--
ALTER TABLE `program_donor`
  ADD PRIMARY KEY (`program_donor_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sched_id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `agency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `linkages`
--
ALTER TABLE `linkages`
  MODIFY `linkage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `physical_exam`
--
ALTER TABLE `physical_exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `program_donor`
--
ALTER TABLE `program_donor`
  MODIFY `program_donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sched_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
