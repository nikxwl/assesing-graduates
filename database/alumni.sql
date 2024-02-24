-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2024 at 08:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `actId` int(11) NOT NULL,
  `actName` text NOT NULL,
  `actDate` varchar(20) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`actId`, `actName`, `actDate`, `date_added`) VALUES
(2, 'Activity 5', '2022-12-23', '0000-00-00 00:00:00'),
(3, 'Activity 3', '2022-12-10', '2022-12-11 00:00:00'),
(4, 'Activity 2', '2022-12-11', '2022-12-11 00:00:00'),
(5, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, ipsum delectus voluptatum? Molestias aut inventore eaque, maxime numquam dignissimos asperiores, voluptatibus consectetur distinctio excepturi odit architecto, saepe enim sunt, molestiae.', '2022-12-11', '2022-12-11 00:00:00'),
(6, 'sample', '2022-12-27', '2022-12-27 00:00:00'),
(8, 'gfdgfd', '2023-01-06', '2022-12-27 00:00:00'),
(9, 'Announcement sample', '2023-01-09', '2023-01-16 00:00:00'),
(10, 'SAMple', '2023-01-24', '2023-01-16 00:00:00'),
(11, 'yhfng', '2023-02-13', '2023-02-05 00:00:00'),
(12, 'smaple', '2023-07-28', '2023-07-08 00:00:00'),
(13, 'sadsadsa', '2023-07-29', '2023-07-08 07:51:00'),
(14, 'samples', '2023-09-07', '2023-09-20 08:26:00'),
(16, 'dsadsadasdsa', '2023-11-16', '2023-10-24 15:58:49'),
(17, 'akoa kinis', '2023-12-09', '2023-10-24 15:59:24'),
(18, 'dfss', '2023-12-18', '2023-12-18 06:48:00'),
(19, 'Smaple', '2023-12-26', '2023-12-18 19:03:50'),
(20, 'dsa', '2023-12-28', '2023-12-18 19:17:01'),
(21, 'Sample', '2024-02-21', '2024-01-31 22:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `log_history`
--

CREATE TABLE `log_history` (
  `log_Id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `login_datetime` datetime NOT NULL,
  `logout_datetime` datetime NOT NULL,
  `logout_remarks` int(11) NOT NULL DEFAULT 0 COMMENT '0=Logged out successfully, 1=Unable to logout last login'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `log_history`
--

INSERT INTO `log_history` (`log_Id`, `user_Id`, `login_datetime`, `logout_datetime`, `logout_remarks`) VALUES
(131, 72, '2024-02-02 03:26:02', '2024-02-02 03:26:09', 0),
(132, 66, '2024-02-02 03:26:20', '2024-02-02 03:26:28', 0),
(133, 90, '2024-02-02 03:27:44', '2024-02-02 03:30:52', 0),
(134, 66, '2024-02-02 03:30:57', '2024-02-02 03:41:19', 0),
(135, 66, '2024-02-02 03:43:24', '0000-00-00 00:00:00', 1),
(136, 66, '2024-02-02 13:26:20', '2024-02-02 13:36:59', 0),
(137, 66, '2024-02-02 13:41:26', '2024-02-02 13:55:59', 0),
(138, 66, '2024-02-02 14:17:34', '2024-02-02 14:27:59', 0),
(139, 72, '2024-02-08 21:51:35', '2024-02-08 22:01:41', 0),
(140, 72, '2024-02-08 23:31:54', '2024-02-08 23:56:23', 0),
(141, 66, '2024-02-08 23:56:31', '2024-02-09 00:11:52', 0),
(142, 72, '2024-02-09 02:08:32', '2024-02-09 02:14:33', 0),
(143, 72, '2024-02-09 02:14:39', '2024-02-09 02:17:40', 0),
(144, 90, '2024-02-09 02:18:20', '2024-02-09 02:18:31', 0),
(145, 72, '2024-02-09 02:19:05', '2024-02-09 02:19:40', 0),
(146, 66, '2024-02-09 02:19:48', '2024-02-09 02:30:52', 0),
(147, 72, '2024-02-09 02:56:49', '2024-02-09 03:07:52', 0),
(148, 72, '2024-02-11 20:04:26', '2024-02-11 21:17:21', 0),
(149, 72, '2024-02-11 22:14:13', '2024-02-11 22:29:03', 0),
(150, 72, '2024-02-11 22:42:42', '2024-02-11 22:52:47', 0),
(151, 72, '2024-02-11 23:02:57', '2024-02-11 23:23:47', 0),
(152, 72, '2024-02-11 23:31:01', '2024-02-11 23:54:37', 0),
(153, 72, '2024-02-12 00:02:59', '2024-02-12 01:39:58', 0),
(154, 72, '2024-02-13 23:08:07', '2024-02-14 03:14:42', 0),
(155, 72, '2024-02-14 10:57:40', '2024-02-14 18:26:01', 0),
(156, 66, '2024-02-14 18:26:07', '2024-02-14 18:26:38', 0),
(157, 72, '2024-02-14 18:26:45', '2024-02-14 18:32:49', 0),
(158, 72, '2024-02-15 00:01:17', '2024-02-15 03:43:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `quest_ID` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `choice_type` varchar(255) NOT NULL,
  `label` text NOT NULL,
  `order_by` int(11) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`quest_ID`, `question`, `choice_type`, `label`, `order_by`, `date_created`) VALUES
(30, 'Professional Examination(s) Passed', 'Textfield/Textarea', '', 13, '2024-02-14 06:48:42'),
(31, 'Educational Attainment (Baccalaureate Degree only)', 'Textfield/Textarea', '', 12, '2024-02-14 06:48:54'),
(32, 'Reason(s) for taking the course(s) or pursuing degree(s). You may check () more than one answer.', 'Multiple Answer/Checkboxes', 'High grades in the course or subject area(s)   related to the course, Good grades in high school, Influence of parents or relatives, Peer Influence, Inspired by a role model, Strong passion for the profession, Prospect for immediate employment, Status or prestige of the profession, Availability of course offering in chosen institution, Prospect of career advancement, Affordable for the family, Prospect of attractive compensation, Opportunity for employment abroad, No particular choice or no better idea', 14, '2024-02-14 06:48:58'),
(33, 'Please list down all professional or work-related training program(s) including advance studies you \\r\\nhave attended after college. You may use extra sheet if needed.', 'Textfield/Textarea', '', 15, '2024-02-14 07:01:33'),
(34, 'What made you pursue advance studies? ', 'Multiple Answer/Checkboxes', 'For promotion, For professional development', NULL, '2024-02-14 07:02:03'),
(35, 'Are you presently employed?', 'Single Answer/Radio Button', 'Yes, No, Never Employed', 16, '2024-02-14 07:02:41'),
(36, 'Please state reason(s) why you are not yet employed. You may check () more than one answer', 'Multiple Answer/Checkboxes', 'Advance or further study, Family concern and decided not to find a job, Health-related reason(s), Lack of work experience, No job opportunity, Did not look for a job', 17, '2024-02-14 07:03:38'),
(37, 'Present Employment Status', 'Multiple Answer/Checkboxes', 'Regular or Permanent, Temporary, Casual, Contractual, Self-employed', 18, '2024-02-14 07:04:54'),
(38, 'Present occupation (Ex. Grade School Teacher, Electrical Engineer, Self-employed)', 'Textfield/Textarea', '', 19, '2024-02-14 08:06:07'),
(39, 'Major line of business of the company you are presently employed in. Check one only.', 'Multiple Answer/Checkboxes', 'Agriculture, Hunting and Forestry, Fishing, Mining and Quarrying, Manufacturing, Electricity, Gas and Water Supply, Construction, Wholesale and Retail Trade, repair of motor vehicles,   motorcycles and personal and household goods, Hotels and Restaurants, Transport Storage and Communication, Financial Intermediation, Real Estate, Renting and Business Activities, Public Administration and Defense; Compulsory   Social Security, Education, Health and Social Work, Other Community, Social and Personal Service Activities, Private Households with Employed Persons, Extra-territorial Organizations and Bodies', 20, '2024-02-14 08:07:56'),
(40, 'Place of work', 'Single Answer/Radio Button', 'Local, Abroad', 21, '2024-02-14 08:09:33'),
(41, 'Is this your first job after college?', 'Single Answer/Radio Button', 'Yes, No', 22, '2024-02-14 08:10:01'),
(42, 'What are your reason(s) for staying on the job? You may check () more than one answer.', 'Multiple Answer/Checkboxes', 'Salaries and benefits, Career challenge, Related to special skill, Related to course or program of study, Proximity to residence, Peer influence, Family influence', 23, '2024-02-14 08:10:53'),
(43, 'Is your first job related to the course you took up in college?', 'Single Answer/Radio Button', 'Yes, No', 24, '2024-02-14 08:11:15'),
(44, 'What were your reasons for accepting the job? You may check () more than one answer.', 'Multiple Answer/Checkboxes', 'Salaries & benefits, Career challenge, Related to special skills, Proximity to residence', 25, '2024-02-14 08:11:49'),
(46, ' How long did you stay in your first job?', 'Multiple Answer/Checkboxes', 'Less than a month, 1 to 6 months, 7 to 11 months, 1 year to less than 2 years, 2 years to less than 3 years, 3 years to less than 4 years', 27, '2024-02-14 08:13:16'),
(47, 'How did you find your first job?', 'Multiple Answer/Checkboxes', 'Response to an advertisement, As walk-in applicant, Recommended by someone, Information from friends, Arranged by school’s job placement officer, Family business, Job Fair or Public Employment Service Office (PESO)', 28, '2024-02-14 08:14:25'),
(48, 'How long did it take you to land your first job?', 'Single Answer/Radio Button', 'Less than a month, 1 to 6 months, 7 to 11 months, 1 year to less than 2 years, 2 years to less than 3 years, 3 years to less than 4 years', 29, '2024-02-14 08:15:19'),
(49, 'Job Level Position', 'Single Answer/Radio Button', 'Job Level, Rank or Clerical, Professional, Technical or Supervisory, Managerial or Executive, Self-employed', 30, '2024-02-14 08:16:30'),
(50, 'What is your initial gross monthly earning in your first job after college?', 'Single Answer/Radio Button', 'Below P5,000.00, P5,000.00 to less than P10,000.00, P10,000.00 to less than P15,000.00, P15,000.00 to less than P20,000.00, P 20,000.00 to less than P25,000.00, P 25,000.00 and above', 31, '2024-02-14 08:17:13'),
(51, 'Was the curriculum you had in college relevant to your first job?', 'Single Answer/Radio Button', 'Yes, No', 32, '2024-02-14 08:17:25'),
(52, 'If YES, what competencies learned in college did you find very useful in your first job? You may \\r\\ncheck () more than one answer.', 'Multiple Answer/Checkboxes', 'Communication skills, Human Relations skills, Entrepreneurial skills, Information Technology skills, Problem-solving skills, Critical Thinking skills', 33, '2024-02-14 08:18:18'),
(53, 'List down suggestions to further improve your course curriculum', 'Textfield/Textarea', '', 34, '2024-02-14 08:18:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_Id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `suffix` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `birthplace` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `civilstatus` varchar(20) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `house_no` varchar(50) DEFAULT NULL,
  `street_name` varchar(100) DEFAULT NULL,
  `purok` varchar(50) DEFAULT NULL,
  `zone` varchar(50) DEFAULT NULL,
  `barangay` varchar(50) DEFAULT NULL,
  `municipality` varchar(100) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `year_graduated` int(11) DEFAULT NULL,
  `current_job` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type` int(11) NOT NULL DEFAULT 4 COMMENT '0=Admin, 1=Evaluator, 2=Alumni Officer, 3=Department Secretary, 4=Alumni',
  `verification_code` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_Id`, `username`, `firstname`, `middlename`, `lastname`, `suffix`, `dob`, `age`, `email`, `contact`, `birthplace`, `gender`, `civilstatus`, `occupation`, `religion`, `house_no`, `street_name`, `purok`, `zone`, `barangay`, `municipality`, `province`, `region`, `year_graduated`, `current_job`, `image`, `password`, `user_type`, `verification_code`, `created_at`) VALUES
(66, 'Admin', 'Admindsadsa', 'Admindasdsadsad', 'Adminsada', 'Admin', '1998-02-02', 26, 'admin@gmail.com', '9359428963', 'Female', 'Male', 'Single', 'Admin', 'Iglesia Ni Cristo', 'Dsas', 'Admin', 'Admin', 'Dsa', 'Admin', 'Admin', '', 'Adminfss', 0, '', 'pexels-photo-1181686.jpeg', '0192023a7bbd73250516f069df18b500', 0, 254152, '2022-11-24 16:00:00'),
(72, 'evaluator', 'Evaluatorss', 'Evaluators', 'Evaluators', 'Jr', '2000-06-06', 23, 'userEvaluators@gmail.com', '9359428964', 'Evaluators', 'Female', 'Single', 'Evaluators', 'Iglesia Ni Cristo', 'Evaluators', 'Evaluators', 'Evaluators', 'Evaluators', 'Evaluators', 'Evaluators', '', 'Evaluators', 0, '', 'woman-person-flowers-wreaths.jpg', '0192023a7bbd73250516f069df18b500', 1, 295016, '2022-12-26 16:00:00'),
(86, 'alumniOfficer', 'SampleSample Sample', 'Sample Sample Sample', 'Sample Sample', 'Sample', '2008-02-27', 15, 'adminfdsfsfs@gmail.com', '9123456789', 'Samplef Fsdfsd', 'Male', 'Single', 'Sampleff Fsdfds', 'Evangelical Christianity', 'Fdfds Fdsf', 'Fsfsdfsdds ', 'Sf Fsdff', 'Fsdfsdfsdfs Fdsf Sfs', 'Fdsfd Fsfs Fs', 'Fdsfds', 'Fsdffdsf', 'Sdfsd', 0, '', 'pexels-photo-2379005.jpeg', '0192023a7bbd73250516f069df18b500', 2, 0, '2023-12-18 11:19:29'),
(87, 'DeptSecretary', 'Lestesd', 'Leste', 'Leste', 'Leste', '1986-02-26', 37, 'sonerwin12@gmail.com', '9123456789', 'Leste', 'Female', 'Widow/ER', 'Leste', 'Iglesia Ni Cristo', 'Leste', 'Leste', 'Leste', 'Leste', 'Leste', 'Leste', '', 'Leste', 0, '', 'pexels-photo-1855582.jpeg', '0192023a7bbd73250516f069df18b500', 3, NULL, '2023-12-18 11:22:55'),
(90, 'Alumni', 'Alumniko', 'Alumniko', 'Alumniko', 'Alumniko', '1992-01-28', 32, 'Alumniko@gmail.com', '9359428964', 'Alumniko', 'Female', 'Single', 'Alumniko', 'Hindu', 'Alumniko', 'Alumniko', 'Alumniko', 'Alumniko', 'Alumniko', 'Alumniko', '', 'Alumniko', 2000, 'CS', 'woman-person-flowers-wreaths.jpg', '0192023a7bbd73250516f069df18b500', 4, NULL, '2024-02-01 10:58:19'),
(91, 'Alumni222s', 'Alumni', 'Alumni', 'Alumni', 'Alumni', '1987-02-04', 36, 'sonerwinAlumni8@gmail.com', '9359428963', 'Alumni', 'Male', 'Married', 'Alumni', 'Judaism', 'Alumni', 'Alumni', 'Alumni', 'Alumni', 'Alumni', 'Alumni', 'Alumni', 'Alumni', 2001, 'Engineering', '3.jpg', '9b511f20893792860cb7dbb5c673855b', 4, NULL, '2024-02-01 11:59:26'),
(92, 'AdminTwoss', 'AdminTwo', 'AdminTwo', 'AdminTwo', 'AdminTwo', '1983-03-03', 40, 'sonerwin8@gmail.comAdminTwo', '9359428963', 'AdminTwo', 'Male', 'Married', 'AdminTwo', 'Methodist', 'AdminTwo', 'AdminTwo', 'AdminTwo', 'AdminTwo', 'AdminTwo', 'AdminTwo', 'AdminTwo', 'AdminTwo', 2000, 'IT', 'pexels-photo-1130626.jpeg', 'c050760a0efddcc300ec0cdeffe06756', 4, NULL, '2024-02-01 12:00:38'),
(94, 'Hak', 'Hak', 'Hak', 'Hak', 'Hak', '1970-02-02', 53, 'Hak@gmail.com', '9359428963', 'Hak', 'Male', 'Single', 'Hak', 'Iglesia Ni Cristo', 'Hak', 'Hak', 'Hak', 'Hak', 'Hak', 'Hak', 'Hak', 'Hak', 2003, 'Computer Science', '2.jpg', '7d1d036fc71ebf938c78308d84ea3681', 4, NULL, '2024-02-01 12:19:31'),
(96, 'Secretary', 'SecretarySecretary', 'Secretary', 'Secretary', 'Secretary', '1964-03-11', 59, 'sonerwinSecretary8@gmail.com', '9359428963', 'Secretary', 'Male', 'Single', 'Secretary', 'United Church Of Christ In The Philippines', 'Secretary', 'Secretary', 'Secretary', 'Secretary', 'Secretary', 'Secretary', 'Secretary', 'Secretary', 0, '', 'pexels-photo-1516680.jpeg', 'b180949356c963a85c848c43a5b90898', 3, NULL, '2024-02-01 15:20:22'),
(97, 'Officers', 'Officer', 'Officer', 'Officer', 'Officer', '1984-01-31', 40, 'sonerwinOfficer8@gmail.com', '9359428963', 'Officer', 'Female', 'Married', 'Officer', 'Roman Catholic', 'Officer', 'Officer', 'Officer', 'Officers', 'Officer', 'Officer', 'Officer', 'Officer', 0, '', 'pexels-photo-1239288.jpeg', 'a361c1de58e73b1299b7c0449c5e85a4', 2, NULL, '2024-02-01 15:54:03'),
(98, 'AkoEvealum', 'AkoEvealum', 'AkoEvealum', 'AkoEvealum', 'AkoEvealum', '1986-01-28', 38, 'sonerwin8@gmail.com', '9359428963', 'AkoEvealum', 'Male', 'Single', 'AkoEvealum', 'Judaism', 'AkoEvealum', 'AkoEvealum', 'AkoEvealum', 'AkoEvealum', 'AkoEvealum', 'AkoEvealum', 'AkoEvealum', 'AkoEvealum', 2222, 'Cashier', 'pexels-photo-2379004.jpeg', 'd4eff7e62ad5d7faf46e8df1eab69c8b', 4, NULL, '2024-02-01 18:30:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`actId`);

--
-- Indexes for table `log_history`
--
ALTER TABLE `log_history`
  ADD PRIMARY KEY (`log_Id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`quest_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `actId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `log_history`
--
ALTER TABLE `log_history`
  MODIFY `log_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `quest_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
