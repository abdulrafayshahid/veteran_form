-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 04:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veteran_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `form1_part1`
--

CREATE TABLE `form1_part1` (
  `id` int(11) NOT NULL,
  `full_legal_last_name` varchar(255) DEFAULT NULL,
  `mi` varchar(255) DEFAULT NULL,
  `first` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `social_security` varchar(255) DEFAULT NULL,
  `coc_location` varchar(255) DEFAULT NULL,
  `continuum_care_code` varchar(255) DEFAULT NULL,
  `referral_source` varchar(255) DEFAULT NULL,
  `va_station` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `ethnicity` varchar(255) DEFAULT NULL,
  `primary_race` varchar(255) DEFAULT NULL,
  `secondary_race` varchar(255) DEFAULT NULL,
  `copy_dd214` varchar(255) DEFAULT NULL,
  `branch_service` varchar(255) DEFAULT NULL,
  `service_date` varchar(255) DEFAULT NULL,
  `military_mos` varchar(255) DEFAULT NULL,
  `injury` varchar(255) DEFAULT NULL,
  `military_status` varchar(255) DEFAULT NULL,
  `rank` varchar(255) DEFAULT NULL,
  `combat` varchar(255) DEFAULT NULL,
  `service_connected_disability` varchar(255) DEFAULT NULL,
  `discharge` varchar(255) DEFAULT NULL,
  `theater_operations` varchar(255) DEFAULT NULL,
  `prepared_by` varchar(255) DEFAULT NULL,
  `household_status` varchar(255) DEFAULT NULL,
  `cod_signature` varchar(255) DEFAULT NULL,
  `cod_printed_name` varchar(255) DEFAULT NULL,
  `cod_date` varchar(255) DEFAULT NULL,
  `hfc_veteran` varchar(255) DEFAULT NULL,
  `hfc_case_manager` varchar(255) DEFAULT NULL,
  `hfc_enrol_date` varchar(255) DEFAULT NULL,
  `hvrp_program` varchar(255) DEFAULT NULL,
  `code_program` varchar(255) DEFAULT NULL,
  `arthur_blank_program` varchar(255) DEFAULT NULL,
  `hvrp_program_2` varchar(255) DEFAULT NULL,
  `code_program_2` varchar(255) DEFAULT NULL,
  `arthur_blank_program_2` varchar(255) DEFAULT NULL,
  `cod_program_enrolled` varchar(255) DEFAULT NULL,
  `cod_verification` varchar(255) DEFAULT NULL,
  `cod_case_notes` varchar(255) DEFAULT NULL,
  `file_reviewed_by` varchar(255) DEFAULT NULL,
  `file_reviewed_date` varchar(255) DEFAULT NULL,
  `consent_blanks` varchar(255) DEFAULT NULL,
  `consent_employment` varchar(255) DEFAULT NULL,
  `consent_national` varchar(255) DEFAULT NULL,
  `consent_other` varchar(255) DEFAULT NULL,
  `consent_veteran_signature` varchar(255) DEFAULT NULL,
  `consent_date` varchar(255) DEFAULT NULL,
  `consent_blanks_2` varchar(255) DEFAULT NULL,
  `consent_veteran_signature_2` varchar(255) DEFAULT NULL,
  `consent_date_2` varchar(255) DEFAULT NULL,
  `consent_veteran_inc_case_signature` varchar(255) DEFAULT NULL,
  `consent_date_3` varchar(255) DEFAULT NULL,
  `hvsv_applicant_name` varchar(255) DEFAULT NULL,
  `hvsv_checkbox_value` varchar(255) DEFAULT NULL,
  `hvsv_description` longtext DEFAULT NULL,
  `hvsv_applicant_signature` varchar(255) DEFAULT NULL,
  `hvsv_applicant_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form1_part1`
--

INSERT INTO `form1_part1` (`id`, `full_legal_last_name`, `mi`, `first`, `dob`, `email_address`, `phone`, `address`, `social_security`, `coc_location`, `continuum_care_code`, `referral_source`, `va_station`, `gender`, `ethnicity`, `primary_race`, `secondary_race`, `copy_dd214`, `branch_service`, `service_date`, `military_mos`, `injury`, `military_status`, `rank`, `combat`, `service_connected_disability`, `discharge`, `theater_operations`, `prepared_by`, `household_status`, `cod_signature`, `cod_printed_name`, `cod_date`, `hfc_veteran`, `hfc_case_manager`, `hfc_enrol_date`, `hvrp_program`, `code_program`, `arthur_blank_program`, `hvrp_program_2`, `code_program_2`, `arthur_blank_program_2`, `cod_program_enrolled`, `cod_verification`, `cod_case_notes`, `file_reviewed_by`, `file_reviewed_date`, `consent_blanks`, `consent_employment`, `consent_national`, `consent_other`, `consent_veteran_signature`, `consent_date`, `consent_blanks_2`, `consent_veteran_signature_2`, `consent_date_2`, `consent_veteran_inc_case_signature`, `consent_date_3`, `hvsv_applicant_name`, `hvsv_checkbox_value`, `hvsv_description`, `hvsv_applicant_signature`, `hvsv_applicant_date`) VALUES
(4, 'asdsad', 'cole', 'asdf', '2024-05-01', 'user@gmail.com', '12515115', 'asd', 'asd', 'asd', 'asd', 'asd', 'sad', 'M', '', '', '', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'asdsad', 'cole', 'asdf', '2024-05-01', 'user@gmail.com', '12515115', 'asd', 'asd', 'asd', 'asd', 'asd', 'sad', 'M', '', '', '', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `form1_part2`
--

CREATE TABLE `form1_part2` (
  `id` int(11) NOT NULL,
  `form1_part1_id` int(11) DEFAULT NULL,
  `pa_name` varchar(255) DEFAULT NULL,
  `pa_signature_1` varchar(255) DEFAULT NULL,
  `pa_case_manager_name` varchar(255) DEFAULT NULL,
  `pa_signature_2` varchar(255) DEFAULT NULL,
  `pa_date` varchar(255) DEFAULT NULL,
  `iep_client_name` varchar(255) DEFAULT NULL,
  `iep_registered@cc` varchar(255) DEFAULT NULL,
  `iep_dvop` varchar(255) DEFAULT NULL,
  `iep_job_seeker` varchar(255) DEFAULT NULL,
  `iep_transportation` varchar(255) DEFAULT NULL,
  `iep_licenses` varchar(255) DEFAULT NULL,
  `iep_looking_for` varchar(255) DEFAULT NULL,
  `iep_resume` varchar(255) DEFAULT NULL,
  `iep_restrictions` longtext DEFAULT NULL,
  `iep_job_titles` longtext DEFAULT NULL,
  `iep_skills` longtext DEFAULT NULL,
  `iep_short_term_goal` longtext DEFAULT NULL,
  `iep_long_term_goal` longtext DEFAULT NULL,
  `iep_training` longtext DEFAULT NULL,
  `iep_desired_industry` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form1_part2`
--

INSERT INTO `form1_part2` (`id`, `form1_part1_id`, `pa_name`, `pa_signature_1`, `pa_case_manager_name`, `pa_signature_2`, `pa_date`, `iep_client_name`, `iep_registered@cc`, `iep_dvop`, `iep_job_seeker`, `iep_transportation`, `iep_licenses`, `iep_looking_for`, `iep_resume`, `iep_restrictions`, `iep_job_titles`, `iep_skills`, `iep_short_term_goal`, `iep_long_term_goal`, `iep_training`, `iep_desired_industry`) VALUES
(4, NULL, '', '', '', '', '', 'asd', 'asd', 'asdsad', 'asd', 'asd', 'asd', '', 'Yes', 'sad', 'sad', 'sad', 'dasdsad', 'asd', 'sasad', 'female,female,female');

-- --------------------------------------------------------

--
-- Table structure for table `form2`
--

CREATE TABLE `form2` (
  `id` int(11) NOT NULL,
  `purchase_request` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `vendor_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description_purchases` varchar(255) DEFAULT NULL,
  `name_grant_program` varchar(255) DEFAULT NULL,
  `requester_name` varchar(255) DEFAULT NULL,
  `approver_name` varchar(255) DEFAULT NULL,
  `date_request` varchar(255) DEFAULT NULL,
  `date_approval` varchar(255) DEFAULT NULL,
  `requester_signature` varchar(255) DEFAULT NULL,
  `approver_signature` varchar(255) DEFAULT NULL,
  `acknowledge` longtext DEFAULT NULL,
  `veterans_name` varchar(255) DEFAULT NULL,
  `veterans_signature` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `ev_name` varchar(255) DEFAULT NULL,
  `ev_ss_number` varchar(255) DEFAULT NULL,
  `ev_address` varchar(255) DEFAULT NULL,
  `ev_phone_number` varchar(255) DEFAULT NULL,
  `ev_employer_name` varchar(255) DEFAULT NULL,
  `ev_start_date` varchar(255) DEFAULT NULL,
  `ev_date` varchar(255) DEFAULT NULL,
  `ev_phone_number_2` varchar(255) DEFAULT NULL,
  `ev_contact_person` varchar(255) DEFAULT NULL,
  `ev_title` varchar(255) DEFAULT NULL,
  `ev_clients_job_title` varchar(255) DEFAULT NULL,
  `ev_hrs_week` varchar(255) DEFAULT NULL,
  `ev_wage` varchar(255) DEFAULT NULL,
  `ev_veterans_provided` varchar(255) DEFAULT NULL,
  `ev_date_placement` varchar(255) DEFAULT NULL,
  `ev_submitted_by` varchar(255) DEFAULT NULL,
  `ajc_veterans_name` varchar(255) DEFAULT NULL,
  `ajc_veterans_address` varchar(255) DEFAULT NULL,
  `ajc_dob` varchar(255) DEFAULT NULL,
  `ajc_dos` varchar(255) DEFAULT NULL,
  `ajc_email` varchar(255) DEFAULT NULL,
  `ajc_phone_number` varchar(255) DEFAULT NULL,
  `ajc_client` varchar(255) DEFAULT NULL,
  `ajc_dvop_name` varchar(255) DEFAULT NULL,
  `ajc_telephone` varchar(255) DEFAULT NULL,
  `ajc_doe` varchar(255) DEFAULT NULL,
  `ajc_jobseeker_id` varchar(255) DEFAULT NULL,
  `extra_data_client_name` varchar(255) DEFAULT NULL,
  `extra_data_client_enolled` text DEFAULT NULL,
  `extra_data_date_name` varchar(255) DEFAULT NULL,
  `extra_data_ivtp` text DEFAULT NULL,
  `extra_data_episodic` text DEFAULT NULL,
  `extra_data_work` text DEFAULT NULL,
  `extra_data_client_coenrolled` varchar(255) DEFAULT NULL,
  `extra_data_referral` varchar(255) DEFAULT NULL,
  `extra_data_trainings` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form2`
--

INSERT INTO `form2` (`id`, `purchase_request`, `amount`, `vendor_name`, `address`, `description_purchases`, `name_grant_program`, `requester_name`, `approver_name`, `date_request`, `date_approval`, `requester_signature`, `approver_signature`, `acknowledge`, `veterans_name`, `veterans_signature`, `date`, `ev_name`, `ev_ss_number`, `ev_address`, `ev_phone_number`, `ev_employer_name`, `ev_start_date`, `ev_date`, `ev_phone_number_2`, `ev_contact_person`, `ev_title`, `ev_clients_job_title`, `ev_hrs_week`, `ev_wage`, `ev_veterans_provided`, `ev_date_placement`, `ev_submitted_by`, `ajc_veterans_name`, `ajc_veterans_address`, `ajc_dob`, `ajc_dos`, `ajc_email`, `ajc_phone_number`, `ajc_client`, `ajc_dvop_name`, `ajc_telephone`, `ajc_doe`, `ajc_jobseeker_id`, `extra_data_client_name`, `extra_data_client_enolled`, `extra_data_date_name`, `extra_data_ivtp`, `extra_data_episodic`, `extra_data_work`, `extra_data_client_coenrolled`, `extra_data_referral`, `extra_data_trainings`) VALUES
(3, 'URGENT* Needed within 24 Hours', 9, 'sad', 'asd', 'asd', 'asd', 'asd', 'sadsad', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asd', '', '', '', '2', 'asd', 'No?', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

CREATE TABLE `questionnaire` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_initial` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `cell_phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `homeless` varchar(255) DEFAULT NULL,
  `your_description` varchar(255) DEFAULT NULL,
  `other_details` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `race` varchar(255) DEFAULT NULL,
  `hear_about_us` varchar(255) DEFAULT NULL,
  `county_residence` varchar(255) DEFAULT NULL,
  `work_hours` varchar(255) DEFAULT NULL,
  `school_certification` varchar(255) DEFAULT NULL,
  `learn_about_services` longtext DEFAULT NULL,
  `spoke_with` varchar(255) DEFAULT NULL,
  `any_questions` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questionnaire`
--

INSERT INTO `questionnaire` (`id`, `first_name`, `middle_initial`, `last_name`, `cell_phone`, `email`, `address`, `homeless`, `your_description`, `other_details`, `gender`, `marital_status`, `age`, `race`, `hear_about_us`, `county_residence`, `work_hours`, `school_certification`, `learn_about_services`, `spoke_with`, `any_questions`) VALUES
(8, 'Max', 'Som', 'Holloway', '0211111111211', 'user123@gmail.com', 'asdastreet, bakery road', 'yes', 'service_provider', '', 'M', 'Never Married', '29', 'Native Hawaiian', 'friend_referral', 'US', 'yes', 'yes', 'Social Media', 'Someone else/ I do not Remember', 'No'),
(9, 'ron', 'cole', 'man', '12515115', 'user1235@gmail.com', 'asdastreet, bakery road', 'yes', 'service_provider', '', 'Male', 'Never Married', '29', 'Native Hawaiian', 'friend_referral', 'US', 'yes', 'yes', 'Social Media', 'Someone else/ I do not Remember', 'No'),
(10, 'asdf', 'cole', 'asdsad', '12515115', 'user@gmail.com', 'asdastreet, bakery road', 'yes', 'service_provider', '', 'F', 'Widowed', '29', 'Hispanic or Latino', 'online_search', 'US', 'no', 'no', 'Veteran inc. Community Event', 'Marian Jordan', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form1_part1`
--
ALTER TABLE `form1_part1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form1_part2`
--
ALTER TABLE `form1_part2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form1_part1_foreign_key` (`form1_part1_id`);

--
-- Indexes for table `form2`
--
ALTER TABLE `form2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form1_part1`
--
ALTER TABLE `form1_part1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `form1_part2`
--
ALTER TABLE `form1_part2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `form2`
--
ALTER TABLE `form2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questionnaire`
--
ALTER TABLE `questionnaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form1_part2`
--
ALTER TABLE `form1_part2`
  ADD CONSTRAINT `form1_part1_foreign_key` FOREIGN KEY (`form1_part1_id`) REFERENCES `form1_part1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
