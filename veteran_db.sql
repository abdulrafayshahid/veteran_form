-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 02:28 PM
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
  `email` varchar(255) DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `form1_part2`
--

CREATE TABLE `form1_part2` (
  `id` int(11) NOT NULL,
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form2`
--
ALTER TABLE `form2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form1_part1`
--
ALTER TABLE `form1_part1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form1_part2`
--
ALTER TABLE `form1_part2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form2`
--
ALTER TABLE `form2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form1_part2`
--
ALTER TABLE `form1_part2`
  ADD CONSTRAINT `form1_part1_foreign_key` FOREIGN KEY (`id`) REFERENCES `form1_part1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
