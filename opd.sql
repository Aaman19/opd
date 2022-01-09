-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 12:49 PM
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
-- Database: `opd`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnose`
--

CREATE TABLE `diagnose` (
  `opd_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `complaints` varchar(255) NOT NULL,
  `past_patient_details` varchar(255) NOT NULL,
  `investigations` varchar(255) NOT NULL,
  `findings` varchar(255) NOT NULL,
  `final_diagnostics` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `diagnosis_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnose`
--

INSERT INTO `diagnose` (`opd_id`, `p_id`, `d_id`, `complaints`, `past_patient_details`, `investigations`, `findings`, `final_diagnostics`, `remarks`, `diagnosis_date`) VALUES
(4, 58, 1, '1', '1', '1', '1', '1', '1', '2022-01-03 15:58:42'),
(5, 58, 1, '3', '3', '3', '3', '3', '3', '2022-01-03 15:59:40'),
(6, 58, 1, '11', '1', '1', '1', '1', '1', '2022-01-04 08:48:34'),
(7, 62, 1, '2', '2', '2', '2', '2', '2', '2022-01-04 09:51:16'),
(8, 58, 2, 'd', 'd', 'd', 'd', 'd', 'd', '2022-01-04 11:07:23'),
(9, 62, 2, 'coughing, sneezing', 'none', 'none', 'sore throat', 'heavy  cough', 'drink luke warm water', '2022-01-04 11:20:10'),
(10, 61, 2, 'uu', 'u', 'u', 'uu', 'u', 'u', '2022-01-04 13:33:07'),
(11, 77, 2, '1', '1', '1', '1', '1', '11', '2022-01-04 13:46:46'),
(12, 77, 2, 'sdjnkjznclnclanclancjanckljcccccnnnnnnnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn', '2022-01-05 10:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE `doctor_info` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `d_dob` date NOT NULL,
  `d_gender` varchar(10) NOT NULL,
  `d_contact` varchar(20) NOT NULL,
  `d_email` varchar(100) NOT NULL,
  `d_address` varchar(250) NOT NULL,
  `d_specialization` varchar(200) NOT NULL,
  `d_hospital_name` varchar(200) NOT NULL,
  `d_uname` varchar(100) NOT NULL,
  `d_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`d_id`, `d_name`, `d_dob`, `d_gender`, `d_contact`, `d_email`, `d_address`, `d_specialization`, `d_hospital_name`, `d_uname`, `d_password`) VALUES
(1, 'shubham gupta', '2000-02-20', 'male', '9892323825', 'shubham@gmail.com', 'azad nagar, andheri west, mumbai 53', 'MBBS', 'shraddha vihar hospital', 'shubham@123', 'shubham@123'),
(2, 'shalini yadav', '2000-03-30', 'female', '1234567892', 'shalini123@gmail.com', 'bandra west, mumbai 53', 'BHMS', 'shradda vihar hospital', 'shalini@123', 'shalini@123'),
(55, 'aman bhist', '2021-11-28', 'male', '8123456987', 'aman@gmail.com', 'miraroad', 'MBBS', '-', 'Aman@123', 'Aman@123'),
(56, 'rishabh', '2021-11-29', '', '8412365792', 'rishabh@gmail.com', 'andherri', 'BHMS', 'aopllo', 'Rishab@123', 'Rishabh@123'),
(57, 'aman', '2019-10-20', '', '1234567890', 'aman@yahoo.com', 'borivali', 'mbbs', 'LR hosp', 'aman', 'Aman@987'),
(58, 'aman', '2019-10-20', 'others', '1234567890', 'aman@yahoo.com', 'borivali', 'mbbs', 'LR hosp', 'aman', 'Aman@987'),
(59, 'aman', '2019-10-20', 'others', '1234567890', 'aman@yahoo.com', 'borivali', 'mbbs', 'LR hosp', 'aman', '$2y$10$gNTJjg2hdr5IyNLa.HfOX.08rE.0WmGFjuZgw/SrTOeNWj24Gjpfe'),
(60, 'aman', '2019-10-20', 'others', '1234567890', 'aman@yahoo.com', 'borivali', 'mbbs', 'LR hosp', 'aman', '$2y$10$DmBMQ6o3wUMqfjNuzANFvuF6iBux9nXL/GRA.vHCf6CN6HSWiEqrm'),
(61, 'shubham gupta', '1980-11-28', 'male', '9876543211', 'shubh@gmail.com', 'dadar', 'mbbs', 'apollo', 'shubham@123', '$2y$10$UzD6/WrfkQtqkPtsw/AJGOlT9mUJ9nqYHg00tEJ08nCjZ1.3dC70G');

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `p_id` int(100) NOT NULL,
  `d_id` int(100) NOT NULL,
  `m_id` int(100) NOT NULL,
  `medicine` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `M` varchar(100) NOT NULL,
  `A` varchar(100) NOT NULL,
  `N` varchar(100) NOT NULL,
  `Remark` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`p_id`, `d_id`, `m_id`, `medicine`, `company`, `M`, `A`, `N`, `Remark`, `date`) VALUES
(58, 1, 1, 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', '2022-01-03 15:53:08'),
(58, 1, 2, 'bb', 'bb', 'bb', 'bb', 'bb', 'bb', '2022-01-03 15:55:01'),
(58, 1, 3, 'bb', 'bb', 'bb', 'bb', 'bb', 'bb', '2022-01-03 15:55:01'),
(58, 1, 4, '1', '1', '1', '1', '1', '1', '2022-01-03 15:58:42'),
(58, 1, 5, '2', '2', '2', '2', '2', '2', '2022-01-03 15:58:42'),
(58, 1, 6, '3', '3', '3', '3', '3', '3', '2022-01-03 15:59:40'),
(58, 1, 7, '1', '1', '1', '1', '1', '1', '2022-01-04 08:48:34'),
(62, 1, 8, '2', '2', '2', '2', '2', '2', '2022-01-04 09:51:16'),
(58, 2, 9, 'd', 'd', 'd', 'd', 'd', 'd', '2022-01-04 11:07:23'),
(58, 2, 10, 'x', 'x', 'x', 'x', 'x', 'x', '2022-01-04 11:07:23'),
(62, 2, 11, 'dolo', 'cipla', '1', '1', '1', '-', '2022-01-04 11:20:10'),
(61, 2, 12, 'u', 'uu', 'u', 'u', 'u', 'u', '2022-01-04 13:33:07'),
(77, 2, 13, '1', '1', '1', '1', '1', '1', '2022-01-04 13:46:46'),
(77, 2, 14, 'nacbskljvbaskldvjnskdj', 'dbclksjd', 'i1', '1', '1', 'gducgahcbaijscckcnacsnac', '2022-01-05 10:21:51'),
(77, 2, 15, 'ddijnzkjcncjnac', 'ihabckzjbnckj', '1`1`1', '1', '1', 'jefokaeje', '2022-01-05 10:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_DOB` date NOT NULL,
  `p_blood_group` varchar(10) NOT NULL,
  `p_occupation` varchar(50) NOT NULL,
  `p_contact` varchar(20) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `p_gender` varchar(7) NOT NULL,
  `p_enroll_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`p_id`, `p_name`, `p_DOB`, `p_blood_group`, `p_occupation`, `p_contact`, `p_address`, `p_gender`, `p_enroll_date`) VALUES
(58, 'Rishabh Gupta', '2000-01-30', 'B-VE', 'business', '8104015756', 'savera society, veera desai road, andheri(w)', 'male', '2021-07-02 15:49:35'),
(60, 'ajay verma', '2000-01-30', 'A-VE', 'business', '9874563217', 'bandra(west) , mumbai 63', 'male', '2021-07-03 11:44:42'),
(61, 'kajal gupta', '2001-05-20', 'A-VE', 'student', '8513859486', 'tcet, kandivali(west), mumbai 101', 'female', '2021-07-03 11:45:57'),
(62, 'sayali ghadge', '2000-04-12', 'O-VE', 'student', '9876543214', 'kandivali , mumbai 101', 'female', '2021-07-03 11:46:48'),
(63, 'aman bhist', '2000-03-31', 'AB-VE', 'business', '379124685', 'mira road, mumbai 105', 'male', '2021-07-03 11:47:57'),
(64, 'Rishabh sharma', '2002-06-24', 'B-VE', 'business', '9832741564', 'colaba , mumbai 12', 'male', '2021-07-03 11:49:19'),
(67, 'aman gupta', '2000-05-12', 'B+VE', 'business', '9989562314', 'mira road, mumbai 101', 'male', '2021-07-03 18:12:27'),
(68, 'konica gupta', '1996-11-19', 'O+VE', 'student', '9865321475', 'andheri west, mumbai 53', 'female', '2021-07-07 20:41:23'),
(70, 'abhijeet', '2000-12-02', 'O-VE', 'student', '9865321475', 'kandivali, andheri west', 'male', '2021-07-19 14:15:55'),
(77, 'Anshul gupta', '2005-01-17', 'O-VE', 'student', '8140157552', 'andheri west', 'male', '2021-09-17 08:32:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnose`
--
ALTER TABLE `diagnose`
  ADD PRIMARY KEY (`opd_id`);

--
-- Indexes for table `doctor_info`
--
ALTER TABLE `doctor_info`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnose`
--
ALTER TABLE `diagnose`
  MODIFY `opd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctor_info`
--
ALTER TABLE `doctor_info`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `m_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `patient_info`
--
ALTER TABLE `patient_info`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
