-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 11, 2022 at 05:25 PM
-- Server version: 8.0.19
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suitecrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_type` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `industry` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `annual_revenue` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_fax` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_address_street` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_address_city` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_address_state` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_address_postalcode` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_address_country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rating` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_office` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_alternate` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ownership` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `employees` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ticker_symbol` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_address_street` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_address_city` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_address_state` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_address_postalcode` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_address_country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sic_code` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `campaign_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_audit`
--

CREATE TABLE `accounts_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_bugs`
--

CREATE TABLE `accounts_bugs` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `account_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bug_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_cases`
--

CREATE TABLE `accounts_cases` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `account_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `case_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_contacts`
--

CREATE TABLE `accounts_contacts` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_cstm`
--

CREATE TABLE `accounts_cstm` (
  `id_c` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `jjwg_maps_lng_c` float(11,8) DEFAULT '0.00000000',
  `jjwg_maps_lat_c` float(10,8) DEFAULT '0.00000000',
  `jjwg_maps_geocode_status_c` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jjwg_maps_address_c` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_opportunities`
--

CREATE TABLE `accounts_opportunities` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `opportunity_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acl_actions`
--

CREATE TABLE `acl_actions` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `acltype` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aclaccess` int DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acl_actions`
--

INSERT INTO `acl_actions` (`id`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `name`, `category`, `acltype`, `aclaccess`, `deleted`) VALUES
('104517e8-1676-dc8a-ed0a-636e6002cd98', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'SecurityGroups', 'module', 90, 0),
('10454bad-27fb-1ded-d18e-636e6092a2d1', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'AOS_PDF_Templates', 'module', 90, 0),
('105d3626-da5a-4229-f3cb-636e608e7c52', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Surveys', 'module', 90, 0),
('10d5dc67-bdc6-075c-f14e-636e6077b766', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'AOS_Contracts', 'module', 90, 0),
('10ff4033-c3ec-2b97-edaf-636e5fe41584', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'AM_ProjectTemplates', 'module', 90, 0),
('1137eb5e-a876-2b56-7c25-636e5fabefbe', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Meetings', 'module', 90, 0),
('11a40dd5-3c12-507b-b267-636e60356a10', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'AOS_Contracts', 'module', 90, 0),
('11b80326-f085-22b1-3204-636e5f21676d', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'AOD_IndexEvent', 'module', 90, 0),
('11d6d4d5-e623-2a5e-afb4-636e5f1a7bfe', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'ProspectLists', 'module', 90, 0),
('1224194f-2b4c-985e-ad03-636e604d5904', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Calls_Reschedule', 'module', 90, 0),
('123a011b-a927-c7ef-6241-636e5f1354d9', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Campaigns', 'module', 90, 0),
('1318a19f-a083-239a-7bee-636e607fb98f', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'AOS_Quotes', 'module', 90, 0),
('135d0803-303b-371c-1963-636e5fc52794', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'AOD_IndexEvent', 'module', 90, 0),
('14119fc1-92d5-1eab-8c7b-636e5f0ee50b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'EmailTemplates', 'module', 90, 0),
('150e292d-e8b9-c19a-e1f5-636e5f85f4c9', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'AM_TaskTemplates', 'module', 90, 0),
('1537f306-ed5b-2346-f98a-636e60b75dd9', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'AOS_Invoices', 'module', 90, 0),
('153ac5bc-c341-27ab-a669-636e5f0a91be', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Documents', 'module', 90, 0),
('1591a180-ec1d-7025-bd38-636e60de850d', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'SurveyQuestionResponses', 'module', 90, 0),
('16762ed6-8811-e1c4-8771-636e5f10e65e', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Emails', 'module', 90, 0),
('175f0b8f-e30b-9dc0-6315-636e60d18cc0', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Calls_Reschedule', 'module', 90, 0),
('1786fb6c-b76c-5028-cd7e-636e5f49a6de', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'AOD_Index', 'module', 90, 0),
('18c6bcd3-cb11-f127-550b-636e6007d031', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'AOS_Products', 'module', 90, 0),
('19976a0b-4b16-832f-0859-636e5f24a814', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'FP_events', 'module', 90, 0),
('19d18853-6c80-4e29-245a-636e5f1650cd', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'ProjectTask', 'module', 90, 0),
('19d6078a-02ef-e9a4-6f54-636e604ec19e', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'TemplateSectionLine', 'module', 89, 0),
('1a468cce-3614-e94c-29a9-636e60e752dd', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'AOS_Product_Categories', 'module', 90, 0),
('1a5e4919-ad26-d3f7-ff70-636e5f8fa462', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Bugs', 'module', 90, 0),
('1afa8fe5-46e5-0ef8-335c-636e5f3d5550', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Accounts', 'module', 90, 0),
('1bdac4dd-d948-12b6-b41b-636e5f106040', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'AOP_Case_Updates', 'module', 89, 0),
('1ceaaa45-47de-862a-b969-636e5ffbf708', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Meetings', 'module', 90, 0),
('1cf8bc9a-076f-4497-882a-636e60309fca', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'AOS_PDF_Templates', 'module', 90, 0),
('1d392a70-a396-5e01-7c14-636e5f9ea5b3', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Users', 'module', 90, 0),
('1d9e2198-6fee-6ed3-2ab3-636e5fcca583', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'EAPM', 'module', 90, 0),
('1e360cdb-52ea-3ec0-55e5-636e5f443498', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'ProjectTask', 'module', 90, 0),
('1e4aa9de-45e2-b4bd-d5d8-636e5fa53b89', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'EmailMarketing', 'module', 90, 0),
('1ea9ac05-8346-51fa-9173-636e5f85253d', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Campaigns', 'module', 90, 0),
('203bc38d-a499-68d2-f779-636e5f579e20', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'ProspectLists', 'module', 90, 0),
('203c1369-2f64-0ee8-81f4-636e5f282330', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Project', 'module', 90, 0),
('204cf493-d697-2a75-9112-636e60127196', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'SurveyQuestionOptions', 'module', 90, 0),
('20da6e4f-e7fc-aa5d-4cb4-636e5fb3c171', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'AOR_Reports', 'module', 90, 0),
('20e1c702-593d-b13a-a235-636e601b28c1', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Calls_Reschedule', 'module', 90, 0),
('214ca5e9-f654-b146-cb1b-636e60f2fcdf', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'jjwg_Areas', 'module', 90, 0),
('21bf75e8-1cc5-aecc-3698-636e6091210a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'SecurityGroups', 'module', 90, 0),
('221ad06f-5eb4-cfeb-7fb5-636e5fa15a8f', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'AM_TaskTemplates', 'module', 90, 0),
('22898eb3-04cc-16ea-f766-636e60db5d50', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'AOS_Contracts', 'module', 90, 0),
('240688c0-f574-b7d3-55db-636e60d95a87', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'SurveyResponses', 'module', 90, 0),
('24100177-a0e7-3184-c362-636e5f67044a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Project', 'module', 89, 0),
('2488a86f-a1bb-3d2b-4dc9-636e60c6981e', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'AOS_Quotes', 'module', 90, 0),
('24f70040-9531-0da0-4f3e-636e60cd03ff', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'SurveyQuestions', 'module', 89, 0),
('2507136e-8e43-2b77-529f-636e60e0f7a0', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'AOS_Products', 'module', 90, 0),
('25d475ed-d9aa-a822-2eca-636e6049c70c', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'jjwg_Markers', 'module', 90, 0),
('27469ea0-f25f-c089-3d38-636e60f5c3b2', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'SurveyQuestionResponses', 'module', 90, 0),
('28cb99df-a977-b6ee-cb5d-636e5f6eccc6', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'AM_ProjectTemplates', 'module', 90, 0),
('291a069c-9195-96bc-168f-636e60a925b3', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'TemplateSectionLine', 'module', 90, 0),
('2961d3d0-99f9-013b-3f45-636e5f5d8976', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Emails', 'module', 90, 0),
('29e016b8-8895-5cf9-9b18-636e5fc242ae', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Bugs', 'module', 90, 0),
('2a0251c2-103f-18e4-b021-636e5f750779', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'ProjectTask', 'module', 90, 0),
('2a59c4f9-655e-8d69-81d7-636e5f0b6966', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Accounts', 'module', 90, 0),
('2a7c0859-5391-d871-91e4-636e5f6bc0a3', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Users', 'module', 90, 0),
('2be4a6e0-f958-f91c-fed8-636e5f5a4968', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Notes', 'module', 89, 0),
('2c2cb48e-8d16-e510-5132-636e5f5384e2', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'EAPM', 'module', 90, 0),
('2cbdad82-a94e-7edd-4c98-636e60acbe93', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'AOS_Product_Categories', 'module', 90, 0),
('2d590fbd-121e-b305-ac22-636e5ff2d0af', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'AOP_Case_Updates', 'module', 90, 0),
('2d66a332-b0da-32c5-aa1c-636e5f41a613', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'ProspectLists', 'module', 90, 0),
('2d8a7b51-fe26-0eb5-5c11-636e5fef059a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'EmailMarketing', 'module', 90, 0),
('2df0d97d-a5e5-d91e-4642-636e6065eea0', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'SecurityGroups', 'module', 90, 0),
('2ea533dc-cfdc-67a6-2dd2-636e5fe4f396', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'FP_events', 'module', 90, 0),
('2edcfa13-5bee-04a8-92c3-636e5fe6289a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'EmailTemplates', 'module', 90, 0),
('2ef0f6e8-ffcc-129b-432a-636e5f5e4862', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Calls', 'module', 90, 0),
('2fbdc199-6491-c459-9d6e-636e5f6b14a4', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Campaigns', 'module', 90, 0),
('2ffe7528-b4d3-3a2b-f65e-636e5f8904a0', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Meetings', 'module', 90, 0),
('301ad729-710a-4564-7d27-636e5f5bea20', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Project', 'module', 90, 0),
('3043ee2b-b599-79e1-c9b7-636e6020492c', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'AOW_WorkFlow', 'module', 90, 0),
('30bd0c1d-a76a-3ceb-012e-636e5fc7387e', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Meetings', 'module', 90, 0),
('31f0bbb0-56d9-5fa1-c269-636e5f469e7d', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Documents', 'module', 90, 0),
('337baea1-1856-53be-be6c-636e5f783a7c', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Contacts', 'module', 89, 0),
('351ae526-1acb-1a62-6912-636e602e5006', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'SurveyQuestionResponses', 'module', 90, 0),
('354ce6c8-8c39-b8ab-b415-636e60bb97a0', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Calls_Reschedule', 'module', 90, 0),
('35b67922-9192-4484-1ac6-636e604add1c', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'jjwg_Areas', 'module', 90, 0),
('35e5ee4b-ec45-6d5d-d20b-636e600c56de', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'TemplateSectionLine', 'module', 90, 0),
('3626c1e6-377b-bc17-7a36-636e5ffad3f7', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Accounts', 'module', 90, 0),
('369d0f26-d332-80cb-94ad-636e60b2470b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'AOR_Scheduled_Reports', 'module', 90, 0),
('38713262-9e70-791b-9446-636e5fddd0e3', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Emails', 'module', 90, 0),
('38e78f7f-3104-1ff7-5000-636e60251047', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'SurveyQuestions', 'module', 90, 0),
('395eaf96-a009-98a7-329d-636e5f3be89a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'AOD_Index', 'module', 90, 0),
('3a573348-e534-c08d-dd6a-636e5f5400bf', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'AOK_Knowledge_Base_Categories', 'module', 90, 0),
('3a74c145-b135-739c-8b1c-636e5fe31603', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'EmailMarketing', 'module', 90, 0),
('3b3ae31f-bf5e-e099-4287-636e5fa21234', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'EAPM', 'module', 90, 0),
('3b64dd50-2e66-11bb-39e3-636e5febcb09', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Tasks', 'module', 89, 0),
('3b656639-c31b-cb8d-309e-636e5f10ccb6', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'ProspectLists', 'module', 90, 0),
('3c51fe62-48cd-a8c8-9302-636e5fa797a3', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'FP_events', 'module', 90, 0),
('3d1aaadd-086b-76a3-357a-636e60c6228b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'jjwg_Markers', 'module', 90, 0),
('3d30e69e-7347-274b-03b0-636e60a73cbc', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'SecurityGroups', 'module', 90, 0),
('3d8af28a-d0aa-4a4f-22b4-636e5fb4d02a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Notes', 'module', 90, 0),
('3d98da34-624c-68c2-d0b3-636e5f80a97a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Alerts', 'module', 89, 0),
('3db3aedc-03e8-2f23-d4bd-636e5fd9b91a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Users', 'module', 90, 0),
('3dda1907-e45c-426d-5f6d-636e6065b761', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'AOS_Products', 'module', 90, 0),
('3ddabf68-5c40-8ff9-67fa-636e609488bc', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'AOW_WorkFlow', 'module', 90, 0),
('3e20ff7f-60f6-bf2e-ec7b-636e5fcb6558', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Campaigns', 'module', 90, 0),
('3e43b4f1-eb85-560b-3450-636e5fd762a6', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Bugs', 'module', 90, 0),
('3ed6547b-399c-214b-1d60-636e5ff64637', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Meetings', 'module', 90, 0),
('3fbebccb-e086-2da2-bea7-636e606c147c', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'AOW_Processed', 'module', 89, 0),
('400e2a87-8776-c8a7-e585-636e60735007', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'AOS_PDF_Templates', 'module', 90, 0),
('4326ac61-d14f-6e51-2c5e-636e5f8a5a17', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'AOP_Case_Updates', 'module', 90, 0),
('4386ced4-7c1d-79a5-b28f-636e5f142f58', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Contacts', 'module', 90, 0),
('43ffe803-245e-67fd-f08c-636e5f8f6dd5', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Project', 'module', 90, 0),
('4461044d-af6f-b65a-e42c-636e5fcdbdda', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Campaigns', 'module', 90, 0),
('451389d1-05ab-ce6a-2553-636e60617bb5', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'jjwg_Areas', 'module', 90, 0),
('46211d71-2c1f-0588-e438-636e5fa22c42', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'AOD_Index', 'module', 90, 0),
('46940b78-8d75-6d78-4e4e-636e60a2a29d', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Surveys', 'module', 90, 0),
('46963989-4e6b-b6f9-5dd9-636e60db75a8', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'SurveyQuestions', 'module', 90, 0),
('46be7218-6080-0a19-bf61-636e60330b96', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'TemplateSectionLine', 'module', 90, 0),
('46f21a2b-8ea6-43c4-ad21-636e5fe5b79a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Calls', 'module', 90, 0),
('46f32f1d-7751-fb82-a557-636e5f73c840', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'AOR_Reports', 'module', 90, 0),
('47ae0a5d-e136-de82-415c-636e5fc2cae9', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Leads', 'module', 89, 0),
('47fc0017-cbd0-1bf2-7c29-636e60ab7178', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Calls_Reschedule', 'module', 90, 0),
('49a0025d-2b3b-a1f9-e20c-636e5f109227', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'AM_ProjectTemplates', 'module', 90, 0),
('49a9df14-de06-00fc-7987-636e5f4a0545', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'ProspectLists', 'module', 90, 0),
('49d7e793-7198-7a46-2118-636e5f99f3b7', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'AOK_Knowledge_Base_Categories', 'module', 90, 0),
('4a1ab402-b905-ed6d-5098-636e60573a3e', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'AOS_Product_Categories', 'module', 90, 0),
('4a3215de-5c34-f83e-440c-636e5fba42ec', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Emails', 'module', 90, 0),
('4a428b75-14e0-5d1f-17fb-636e60a7f3a3', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'AOS_Quotes', 'module', 90, 0),
('4adc011d-feb7-ff28-b565-636e60b00e48', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'SurveyQuestionResponses', 'module', 90, 0),
('4b02405b-5b95-15fc-0d3c-636e5fb40bec', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Users', 'module', 90, 0),
('4baf7e8d-5335-9437-7b70-636e5ffb3fcd', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Tasks', 'module', 90, 0),
('4bb1b137-657a-76e5-d7ed-636e5f43a9fe', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'FP_events', 'module', 90, 0),
('4bb7cacb-89c8-0461-10e5-636e5f05bf79', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Alerts', 'module', 90, 0),
('4c011d3d-0d85-8385-a8e0-636e5f960014', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Notes', 'module', 90, 0),
('4c234fb3-2849-fc5f-8c24-636e602ef1ee', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'jjwg_Markers', 'module', 90, 0),
('4d7a9c39-b949-e2b2-5eaf-636e5f22eed0', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'EmailTemplates', 'module', 90, 0),
('4dfbc282-b794-05b3-85cd-636e5fc47aeb', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'EmailMarketing', 'module', 90, 0),
('4e187524-8507-16e0-8ca7-636e5f7a5e5a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Meetings', 'module', 90, 0),
('4e3a6a76-c6a0-44ec-1393-636e5fc4a159', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Spots', 'module', 89, 0),
('4e527ac8-f183-eca4-bf69-636e5f7fced1', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Campaigns', 'module', 90, 0),
('4f91d99a-c006-6907-d8b7-636e5f1a41d2', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Documents', 'module', 90, 0),
('517cc731-ceb0-dd35-132a-636e5f51de22', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Contacts', 'module', 90, 0),
('52841185-66ca-c57d-084a-636e5fc1e068', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'AOP_Case_Updates', 'module', 90, 0),
('542ad808-3770-ad24-266d-636e601a3dc3', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'AOW_WorkFlow', 'module', 90, 0),
('54fcefd3-1dc6-dc56-4fa8-636e60871670', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'SurveyQuestionResponses', 'module', 89, 0),
('55aeb231-b9ff-6ac7-ddc7-636e5f085166', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'AOD_Index', 'module', 90, 0),
('55cf0f12-cd3c-4fe9-3159-636e60cf33b6', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Calls_Reschedule', 'module', 90, 0),
('55dd863d-9187-672f-ad58-636e5f096d50', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Project', 'module', 90, 0),
('56a88d15-3ca3-2343-6eba-636e5fefdb75', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Emails', 'module', 90, 0),
('56bf6d6f-846c-f984-d5e7-636e6003abb9', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'SurveyQuestions', 'module', 90, 0),
('56c25052-ccf8-3e33-6eaa-636e5f3b90ee', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'AOK_Knowledge_Base_Categories', 'module', 90, 0),
('57dd0549-a16c-b20a-8dce-636e5f4d785f', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'AM_TaskTemplates', 'module', 90, 0),
('582d49a0-5767-65ce-3806-636e5fb8417f', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Tasks', 'module', 90, 0),
('5954bd41-bc95-1de9-6670-636e602797c7', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'AOW_Processed', 'module', 90, 0),
('598fdada-8c66-384d-98d3-636e600dfe06', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'TemplateSectionLine', 'module', 90, 0),
('59a202ca-6da6-6dce-0369-636e5ff6fa02', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'ProspectLists', 'module', 90, 0),
('5a3be433-cc4f-2cd6-4351-636e5ffb1c18', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'EmailTemplates', 'module', 90, 0),
('5a3c0c2a-3a68-3a43-55b5-636e60065ff8', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'AOS_Product_Categories', 'module', 89, 0),
('5a40e8fc-eece-9738-7fa8-636e5fc6dde8', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Notes', 'module', 90, 0),
('5a9a9154-e79a-b889-b34a-636e5f746e1e', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'FP_events', 'module', 90, 0),
('5b15dede-8def-b426-0c2f-636e5f23cc7e', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Users', 'module', 90, 0),
('5b2f0717-7e33-682a-89ca-636e6061b7dc', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'AOS_Product_Categories', 'module', 90, 0),
('5bf48e2b-10dd-9bde-d38a-636e5f5a5336', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Campaigns', 'module', 90, 0),
('5c2199c9-bcc1-4849-d229-636e5f7a671c', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Alerts', 'module', 90, 0),
('5c65806c-b161-927c-d066-636e5f7733c7', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'EmailMarketing', 'module', 90, 0),
('5ddd76dc-2152-1cb0-4330-636e5fc6cbf4', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Documents', 'module', 90, 0),
('5e7facec-c308-0620-c3d0-636e5fc4f44e', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'AOR_Scheduled_Reports', 'module', 89, 0),
('5effdf44-a3f0-4f73-a95a-636e5fd83d7d', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Calls', 'module', 90, 0),
('5f44ee45-af1c-e464-8388-636e5f23633b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Contacts', 'module', 90, 0),
('5fba84a6-5637-7bf5-955e-636e5f5474e3', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Opportunities', 'module', 89, 0),
('5ffc4880-1da3-cdeb-2b72-636e5f6feba8', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Spots', 'module', 90, 0),
('617c0686-d9d2-0209-58e1-636e5f00d0bd', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'AOD_Index', 'module', 89, 0),
('62c51c5c-ad29-72d4-61f2-636e5fbcdd90', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Project', 'module', 90, 0),
('63865bba-182b-b6d2-89a6-636e5f9f2420', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'AOD_Index', 'module', 90, 0),
('639af594-9871-bed6-9b2c-636e6029620e', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'AOS_Contracts', 'module', 90, 0),
('642d052f-7641-8d70-992c-636e6080e2ce', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'SurveyQuestionResponses', 'module', 90, 0),
('64f7014d-18f6-d8e2-d990-636e60c3ceec', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'AOS_Invoices', 'module', 90, 0),
('65c12afc-8f0e-5529-cbd3-636e5f2da997', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'AOP_Case_Updates', 'module', 90, 0),
('65c1427f-2114-7b83-491a-636e60b02aca', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'AOS_Products', 'module', 90, 0),
('65e2d8a5-ce02-92fe-0590-636e604b6e50', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'SurveyQuestions', 'module', 90, 0),
('66a8b4cf-6cb3-9d0f-0cbb-636e5f222c7e', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Tasks', 'module', 90, 0),
('66b67130-d241-e996-feeb-636e60222d0a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'AOW_WorkFlow', 'module', 90, 0),
('671bb35a-ec4b-40c7-2b13-636e5f74b443', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Notes', 'module', 90, 0),
('6844e6ea-e31b-822f-c4c6-636e60582c8d', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'SurveyResponses', 'module', 89, 0),
('68b70aec-05de-65a8-3646-636e6030abc2', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'AOS_Product_Categories', 'module', 90, 0),
('6ac0c59b-5eee-5c19-1c40-636e5f8bb72b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'FP_events', 'module', 90, 0),
('6ae704f5-7821-e53a-ca0e-636e603da25f', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'AOW_WorkFlow', 'module', 90, 0),
('6af89b59-c5da-acbd-ea9d-636e6082c863', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'TemplateSectionLine', 'module', 90, 0),
('6badf7ff-b7af-9c28-89b2-636e60cf774b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'AOW_Processed', 'module', 90, 0),
('6bd6aab6-22d3-447c-42b7-636e5f1152d0', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Documents', 'module', 90, 0),
('6ca657d8-67ea-32cb-6eba-636e5f698883', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Prospects', 'module', 89, 0),
('6ca8f3fb-24d3-c249-04a6-636e5f941b13', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Leads', 'module', 90, 0),
('6cf2eb39-e7b4-99f9-32d0-636e5f383f93', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Alerts', 'module', 90, 0),
('6df87b18-7f4d-f9e8-fd4a-636e5f219bbf', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'AOR_Scheduled_Reports', 'module', 90, 0),
('6e61ed8d-399b-4d0a-2ac8-636e5f136591', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Emails', 'module', 90, 0),
('6e922eb7-f193-c483-11bc-636e5fce2197', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Contacts', 'module', 90, 0),
('6f0b15d5-dfa2-e8d3-4109-636e5f9fb0fa', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Calls', 'module', 90, 0),
('6fd914ce-8741-ffc5-8be1-636e5f5a1822', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'FP_Event_Locations', 'module', 89, 0),
('73126919-57e7-305d-23d5-636e5f33f90b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Tasks', 'module', 90, 0),
('732c9bfa-c104-f796-c94d-636e5f286a8c', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Project', 'module', 90, 0),
('73698cdd-9a3d-3eab-ae63-636e60ebe7ff', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'jjwg_Address_Cache', 'module', 89, 0),
('737e5527-1bed-625f-eb1f-636e5fcc6e2f', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'AOD_Index', 'module', 90, 0),
('74f1c728-b48c-bdeb-1626-636e603bbd87', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'AOW_WorkFlow', 'module', 90, 0),
('769b71ec-33fa-2eba-7ccb-636e60979e98', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'AOS_Product_Categories', 'module', 90, 0),
('76f2e745-a3f8-07c4-e8dc-636e60b924bb', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'jjwg_Markers', 'module', 90, 0),
('7733acbe-074e-06fd-5e42-636e60637db2', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'AOS_Products', 'module', 90, 0),
('77510774-44ba-0e6a-84e1-636e5fbfc9f4', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Notes', 'module', 90, 0),
('776306e1-6cf6-a8b4-3dac-636e606f3e1d', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'SurveyResponses', 'module', 90, 0),
('778b44b0-e13f-3d3f-c6e3-636e5f62a8ee', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Opportunities', 'module', 90, 0),
('77ec8970-3b66-140e-497e-636e5fd9675f', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'AOK_KnowledgeBase', 'module', 89, 0),
('789e7e6a-8812-cdc3-5fd8-636e5f3ebb9b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Spots', 'module', 90, 0),
('7a94a5a9-9b22-f9cf-94ef-636e5f4da86d', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'AOP_Case_Updates', 'module', 90, 0),
('7bce0107-c849-79e9-423f-636e5fa46a6e', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Alerts', 'module', 90, 0),
('7be6ecfc-2227-f8da-3a1a-636e5f6204d1', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Documents', 'module', 90, 0),
('7c251401-1a73-ac3b-bb4a-636e5f23c957', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Calls', 'module', 90, 0),
('7c50cf65-c60d-3e17-cd58-636e604e24cd', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'SurveyQuestions', 'module', 90, 0),
('7c702a76-e899-e875-e9a0-636e5f2a0b42', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Emails', 'module', 90, 0),
('7c774183-c6ed-1817-67d2-636e5faad3c8', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Prospects', 'module', 90, 0),
('7e3c7bef-026b-f0f0-d6a3-636e60a69b2a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'TemplateSectionLine', 'module', 90, 0),
('7e4cf832-3bdf-8410-e473-636e5fc01838', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'FP_Event_Locations', 'module', 90, 0),
('7f51e607-e5f9-c49c-805e-636e6073e9e4', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'AOW_Processed', 'module', 90, 0),
('80d0a4ae-d18d-77f7-ef4b-636e5f54fb9e', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Leads', 'module', 90, 0),
('82244261-8396-4e9a-eef9-636e60db053f', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'SurveyQuestionOptions', 'module', 89, 0),
('82b6dcab-595e-e91e-03aa-636e5fad1e5b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'AOD_Index', 'module', 90, 0),
('83b9fe65-b8b3-aa2a-cd48-636e5ff43aba', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Tasks', 'module', 90, 0),
('851ee189-17f9-7201-2143-636e5faf36f8', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'ProjectTask', 'module', 89, 0),
('862a13eb-0063-4508-6b84-636e60ec9ba2', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'AOW_WorkFlow', 'module', 90, 0),
('863c1967-cec0-d3df-c973-636e5fe5e2de', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'AOP_Case_Events', 'module', 89, 0),
('865ae786-05b3-948d-b4c6-636e5f865a9a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Contacts', 'module', 90, 0),
('86b09bf7-fc0e-4142-a42d-636e5ff0ea07', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Notes', 'module', 90, 0),
('871a3fa6-725c-4610-4ae8-636e60ea0295', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'AOS_Products', 'module', 90, 0),
('8730de96-209f-ee98-4cae-636e60d9db8a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'AOS_Product_Categories', 'module', 90, 0),
('88242404-08d2-7c52-9d19-636e5f3d7a9b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Calls', 'module', 90, 0),
('88594e80-fecc-ea13-d764-636e5f3a4919', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Alerts', 'module', 90, 0),
('8aa37b0b-b800-5b85-305f-636e5ff515d7', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'AOR_Scheduled_Reports', 'module', 90, 0),
('8af7e021-87e9-cb6b-4ad4-636e6086ddb5', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'jjwg_Address_Cache', 'module', 90, 0),
('8b30d22b-10c6-e03e-bf1a-636e5f62f23f', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'AOK_KnowledgeBase', 'module', 90, 0),
('8b655559-e057-f036-a15a-636e5fc8505d', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'AOP_Case_Updates', 'module', 90, 0),
('8cb2cc55-d87d-c795-5674-636e5f06eb91', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Opportunities', 'module', 90, 0),
('8dd63362-396f-ed67-019b-636e6024723e', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'AOS_Contracts', 'module', 90, 0),
('8de78624-0b9f-7004-f712-636e6065a192', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'AOW_Processed', 'module', 90, 0),
('8e2a10db-98b4-dcc2-f9a0-636e60c6cfb3', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'OutboundEmailAccounts', 'module', 89, 0),
('8e81bba7-3fb8-afb3-fb4c-636e5fb329b8', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'FP_Event_Locations', 'module', 90, 0),
('8eaad584-e0c3-af24-c28f-636e5fb0d3e4', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'AOD_IndexEvent', 'module', 89, 0),
('8ebcdb44-c8e6-8b21-255d-636e5fa60cd6', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Documents', 'module', 90, 0),
('8ed3cbe7-7633-d51f-4a94-636e60acbc3f', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'TemplateSectionLine', 'module', 90, 0),
('8f7d27e6-8a0e-12f3-89ca-636e5fd8b590', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Spots', 'module', 90, 0),
('8f839c0f-7a1c-2412-dbbd-636e60c37a0d', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'jjwg_Maps', 'module', 89, 0),
('8fce4fa5-8457-2e6c-6553-636e5f437cd5', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'AM_ProjectTemplates', 'module', 89, 0),
('90b6ef6c-8cac-794a-4c14-636e5fa1271d', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Cases', 'module', 89, 0),
('91bcbe19-6793-e6b7-9629-636e5f2dfdcb', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Users', 'module', 90, 0),
('91e103a9-47c6-ef1a-164d-636e602a0c61', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'SurveyQuestions', 'module', 90, 0),
('93490d4a-6db4-ec1c-791a-636e5f013dce', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Cases', 'module', 90, 0),
('935fbbb3-f5c1-c66d-fce2-636e5f85047f', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Prospects', 'module', 90, 0),
('94017d53-e393-eaa7-f2a3-636e5f97f0e7', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'ProjectTask', 'module', 90, 0),
('94043eb1-ebab-ae0a-c02f-636e5fe5ba98', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Tasks', 'module', 90, 0),
('94738eac-137c-2817-3312-636e5fd2c210', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Notes', 'module', 90, 0),
('94c7540e-06ce-f8c8-3909-636e5fc40758', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Contacts', 'module', 90, 0),
('955e4804-40f4-897c-d581-636e60b7d947', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'jjwg_Markers', 'module', 90, 0),
('96f9cb3e-bb5b-50ed-bd1a-636e60b86f4b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'SurveyResponses', 'module', 90, 0),
('9766254f-b72a-cd14-0618-636e5fbc6986', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Calls', 'module', 90, 0),
('976c4ce4-b2e8-9b61-f26a-636e5f081453', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'AOK_KnowledgeBase', 'module', 90, 0),
('97811588-34ac-0574-9316-636e5f8167b7', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'AOP_Case_Events', 'module', 90, 0),
('97f51faf-0e55-0d07-7d27-636e601c19b0', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'AOS_Invoices', 'module', 89, 0),
('983eea77-b5d6-5248-c8ce-636e60ad4f3d', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'jjwg_Address_Cache', 'module', 90, 0),
('98e7037b-91ae-260b-8f2e-636e5f84bc79', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Accounts', 'module', 90, 0),
('9ae1517a-7b4c-fe1a-f230-636e5f11af1c', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Alerts', 'module', 90, 0),
('9b380cad-9256-c8b1-5332-636e5ffe9648', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Emails', 'module', 89, 0),
('9bab27be-3bef-4c0d-6ac1-636e5f2e4b29', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Opportunities', 'module', 90, 0),
('9be431ea-0e68-e465-e539-636e5fdd6be9', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'AOP_Case_Updates', 'module', 90, 0),
('9bfd3b61-9733-1ea2-c51f-636e5fd0d5bf', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'FP_Event_Locations', 'module', 90, 0),
('9c4ad50f-2cfe-0f40-e57c-636e5f54b02a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Leads', 'module', 90, 0),
('9d71f875-b789-d792-7f1f-636e608174a9', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'jjwg_Maps', 'module', 90, 0),
('9d95d113-72bc-070f-7c9c-636e60bf3789', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'OutboundEmailAccounts', 'module', 90, 0),
('9e5f7e09-4698-8f19-c8ac-636e603a3370', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'AOW_Processed', 'module', 90, 0),
('9ebb00e4-ee82-b8a8-3402-636e5f7e6595', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'AOR_Scheduled_Reports', 'module', 90, 0),
('9f9f07a9-28f0-8656-aab4-636e607aeda8', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Surveys', 'module', 89, 0),
('9fdae278-1793-00d8-60b4-636e5f2c9fdb', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'AM_ProjectTemplates', 'module', 90, 0),
('a095639c-cf1a-aa0d-0428-636e5fc23e40', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Cases', 'module', 90, 0),
('a09cf0bd-797f-f805-c845-636e5f7ec78a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Tasks', 'module', 90, 0),
('a38d0eab-55a1-6789-0e36-636e5f8355e5', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'EAPM', 'module', 90, 0),
('a3b1f8bb-1ab3-5350-4953-636e60fedb53', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'jjwg_Markers', 'module', 90, 0),
('a491dd6a-eb90-3c32-a6d9-636e5f838b56', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Contacts', 'module', 90, 0),
('a4abcda1-c34d-6c59-e613-636e5fa6777f', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'AOD_IndexEvent', 'module', 90, 0),
('a4b7f0d3-4dbd-8d7f-44de-636e5f93c65b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Spots', 'module', 90, 0),
('a4c1fa44-eac7-8ef6-e85d-636e60d99f2a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'AOS_Quotes', 'module', 90, 0),
('a51cf121-17da-dad5-ac89-636e5f24a3a3', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'AOP_Case_Events', 'module', 90, 0),
('a70803b6-28b4-72dd-b57f-636e60535ecf', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'jjwg_Maps', 'module', 90, 0),
('a70cdc6e-ea00-b7d0-3558-636e605d53ba', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'AOS_Invoices', 'module', 90, 0),
('a7400c47-2e61-ec60-22ff-636e5f109a5f', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'AOP_Case_Events', 'module', 90, 0),
('a766ecc1-9e0a-2a30-ac5e-636e5ff29318', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Prospects', 'module', 90, 0),
('a840e005-2813-d4e6-27d8-636e5f2f51a0', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'FP_Event_Locations', 'module', 90, 0),
('a8c5604d-c55c-bd02-f49d-636e5f3399bb', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'AM_TaskTemplates', 'module', 89, 0),
('a8f6d6ac-2195-111f-e102-636e5fa23c58', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Alerts', 'module', 90, 0),
('ab151c95-aa62-d63c-c88d-636e60fd112b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'OutboundEmailAccounts', 'module', 90, 0),
('abcb6f47-95be-bde7-9d24-636e5fbc88bb', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'AOK_Knowledge_Base_Categories', 'module', 89, 0),
('ac8e64dc-58ca-6a0f-7c9c-636e601424d6', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'AOS_PDF_Templates', 'module', 89, 0),
('ac9b8038-05a8-2534-87fd-636e5f7e68bd', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'AOR_Reports', 'module', 89, 0),
('aca1642f-257b-0529-f777-636e60d280fb', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'jjwg_Maps', 'module', 90, 0),
('ad954e2a-451a-d7c3-c20c-636e6080d10e', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'SurveyQuestions', 'module', 90, 0),
('ae0507c1-6e09-735b-7cf1-636e60b8724c', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'AOS_Products', 'module', 90, 0),
('ae2ee5ee-6171-7e3d-4fe6-636e60b17576', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Surveys', 'module', 90, 0),
('ae69e43a-23a4-066d-0c14-636e5fd5ec5e', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'AOK_KnowledgeBase', 'module', 90, 0),
('aebcf315-e61e-01c2-39d6-636e60d10c5b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'SurveyQuestionOptions', 'module', 90, 0),
('af5a27ec-19fa-d9fb-163e-636e60463de0', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'AOW_Processed', 'module', 90, 0),
('af6a0d3d-5f85-ef79-c697-636e5f3dbe09', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'AOK_KnowledgeBase', 'module', 90, 0),
('af7031c6-9e83-fada-3681-636e60ce0031', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'jjwg_Address_Cache', 'module', 90, 0),
('af848178-4fa6-97e8-23d4-636e5f6ade5e', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Cases', 'module', 90, 0),
('b01e3f01-5e13-127d-055a-636e5f10e9d6', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'AM_ProjectTemplates', 'module', 90, 0),
('b387b4c1-f049-598b-5bf6-636e5fc74d66', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'AOD_IndexEvent', 'module', 90, 0),
('b434dd97-65d3-2230-313b-636e5f232fdf', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Spots', 'module', 90, 0),
('b4ce870e-9c2c-9af0-8f85-636e6036f928', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'AOS_Quotes', 'module', 89, 0),
('b5098893-d916-2dab-0f39-636e5fb66ca9', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'AOP_Case_Events', 'module', 90, 0),
('b513afed-e513-7d82-22ee-636e5f7c5521', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Opportunities', 'module', 90, 0),
('b5b0b8a8-b1a1-6df6-1f56-636e5f672765', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Prospects', 'module', 90, 0),
('b7a31f15-1158-bca3-0e16-636e600e1cda', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'AOS_Invoices', 'module', 90, 0),
('b854f165-51a1-d045-53e5-636e602e9d0f', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'SurveyResponses', 'module', 90, 0),
('b868abf9-15ef-ba84-29b9-636e5f598b53', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'AOR_Scheduled_Reports', 'module', 90, 0),
('b88ad450-f22e-76a6-5afc-636e5f342c95', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Leads', 'module', 90, 0),
('b89001f7-b2a2-67d5-75da-636e60b7ab7a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'jjwg_Address_Cache', 'module', 90, 0),
('b9f8aa31-80a8-cd74-4fbc-636e5f081dd4', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'AM_TaskTemplates', 'module', 90, 0),
('ba6051c4-7cd8-1346-7003-636e60d13542', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Surveys', 'module', 90, 0),
('bbb8f739-f0c7-15a1-f93b-636e5fe00555', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'AOK_Knowledge_Base_Categories', 'module', 90, 0),
('bbcf77a8-6f75-dfae-5c46-636e5f51b250', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Accounts', 'module', 89, 0),
('bc6b7a4e-cda0-cb9d-328b-636e60965742', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'SecurityGroups', 'module', 89, 0),
('bccf48a9-bc55-3f2a-ff49-636e6019cfa7', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'AOW_Processed', 'module', 90, 0),
('bdfd1332-b8ef-be21-98d3-636e60ec1ab0', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'jjwg_Maps', 'module', 90, 0),
('be416a66-f41c-0cad-7f4d-636e5fdfb7ab', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'FP_Event_Locations', 'module', 90, 0),
('be9386dc-37d1-1cf3-a511-636e60bf8f53', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'jjwg_Areas', 'module', 89, 0),
('bf335b65-663b-7743-d5f6-636e5fbf3624', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Cases', 'module', 90, 0),
('bf3ebfb0-d950-44f4-2b5e-636e6033aa1e', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'AOS_PDF_Templates', 'module', 90, 0),
('bf6846cc-023c-0d96-a3dd-636e5ff04849', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'EAPM', 'module', 89, 0),
('c056c7f2-d55c-079b-d743-636e6028b909', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'OutboundEmailAccounts', 'module', 90, 0),
('c0d50e28-2cc8-88b8-7b63-636e600a85c5', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'jjwg_Address_Cache', 'module', 90, 0),
('c151141a-448b-0a47-b6ef-636e5fd81063', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'AOK_KnowledgeBase', 'module', 90, 0),
('c1a8bca8-3079-9683-e667-636e5f61d847', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Bugs', 'module', 89, 0),
('c2d80e45-dfb1-33c1-4932-636e6079a57b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'OutboundEmailAccounts', 'module', 90, 0),
('c3560b01-6d35-ed42-6c7b-636e60ad1bfb', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'jjwg_Markers', 'module', 90, 0),
('c38ffb8f-832a-6c50-0c44-636e5f9e1291', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'AM_ProjectTemplates', 'module', 90, 0),
('c3cf00a7-8b0b-b7df-74b9-636e5fc968e7', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'EmailTemplates', 'module', 89, 0),
('c4402173-0b5c-bc3f-8d80-636e5f5f90b9', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Prospects', 'module', 90, 0),
('c46cc6d9-3970-3718-1452-636e5fa72a41', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'AOP_Case_Events', 'module', 90, 0),
('c488c647-d0f8-b805-b605-636e5f74292a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'AOD_IndexEvent', 'module', 90, 0),
('c4db2446-b3ea-6984-33aa-636e5f603350', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'AOR_Reports', 'module', 90, 0),
('c5b36662-f43e-0324-24dd-636e601ad9ba', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Calls_Reschedule', 'module', 89, 0),
('c60cbcbc-567c-ed66-c1c9-636e6018db59', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'AOS_Quotes', 'module', 90, 0),
('c78fbe23-342e-78f2-3324-636e60579ed2', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'AOS_Invoices', 'module', 90, 0),
('c7a103a4-dd8b-a8ac-7612-636e5fea4d28', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'AOR_Reports', 'module', 90, 0),
('c7b81e96-1ad1-758a-a31e-636e60b1b287', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'SurveyQuestionOptions', 'module', 90, 0),
('c839f5a8-8101-80fa-d108-636e60d794a7', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'AOS_Contracts', 'module', 89, 0),
('c846ced6-dd1e-e107-6953-636e5ffaf29c', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Opportunities', 'module', 90, 0),
('c87c962b-7ac5-5564-fba4-636e5fc344fe', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'AOR_Scheduled_Reports', 'module', 90, 0),
('c89309a3-4fc0-e26a-7b58-636e5ff14fdb', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'ProjectTask', 'module', 90, 0),
('cb5d0957-93a5-7a52-5197-636e5f6f809a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'AOK_Knowledge_Base_Categories', 'module', 90, 0),
('cbab7fba-e233-29f4-39c3-636e5fb051f5', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Spots', 'module', 90, 0),
('cc080a6b-faa2-9749-61f9-636e5f3fe4f5', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Bugs', 'module', 90, 0),
('cc4218a2-758a-0930-98c1-636e60ae2728', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'jjwg_Maps', 'module', 90, 0),
('cd2b6c39-8d88-bc9e-cd42-636e60f5c70c', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'SurveyQuestionResponses', 'module', 90, 0),
('cd3a61d5-4427-15f8-7ade-636e60350c56', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'AOS_PDF_Templates', 'module', 90, 0),
('cda16faa-55e3-b664-11b5-636e5f9e3ae7', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'AM_TaskTemplates', 'module', 90, 0),
('cdaca899-8f33-3114-176c-636e5fd30008', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'EAPM', 'module', 90, 0),
('cdbe2b53-9138-4c20-b83c-636e606b6695', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'OutboundEmailAccounts', 'module', 90, 0),
('cdec824a-60f3-cad3-8757-636e5f0132f0', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Accounts', 'module', 90, 0),
('cee36b25-d25b-d89d-9161-636e60a9c272', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'SurveyResponses', 'module', 90, 0),
('cf5c7d8a-c1df-eceb-c686-636e6038c0de', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Surveys', 'module', 90, 0),
('cf9c3cbe-8fba-178a-c47a-636e602cf1e0', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'jjwg_Address_Cache', 'module', 90, 0),
('cfc04804-0bad-6284-61f8-636e5f582fda', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Leads', 'module', 90, 0);
INSERT INTO `acl_actions` (`id`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `name`, `category`, `acltype`, `aclaccess`, `deleted`) VALUES
('cffae51b-3073-597a-01d4-636e5f40f74d', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Cases', 'module', 90, 0),
('d00501dc-d1eb-6919-f5b0-636e5f07e03d', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'AOK_Knowledge_Base_Categories', 'module', 90, 0),
('d04dd769-a23b-7dff-b8f6-636e6074d1d4', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'SecurityGroups', 'module', 90, 0),
('d0989c2e-2bc3-e412-4e3d-636e5fbeb7c2', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'FP_Event_Locations', 'module', 90, 0),
('d11fc0ed-e533-3cfc-d927-636e5fc6528a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'AOD_IndexEvent', 'module', 90, 0),
('d181d7ba-cde0-93eb-9f1c-636e5f549514', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'AOR_Reports', 'module', 90, 0),
('d1e98155-5e59-e98d-fbed-636e5fbff903', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'AOK_KnowledgeBase', 'module', 90, 0),
('d223bfc3-e341-bd71-c951-636e60d1d91b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'jjwg_Areas', 'module', 90, 0),
('d36ff936-89e5-d17e-47da-636e5f4aa3b2', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Bugs', 'module', 90, 0),
('d40d764b-e76b-ada6-2c87-636e5f973c7a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'AM_ProjectTemplates', 'module', 90, 0),
('d4a2d1a8-ca60-2eea-bb96-636e5f7c0c58', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Users', 'module', 90, 0),
('d53f0023-8c97-61a8-39db-636e5fbf5977', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'AOP_Case_Events', 'module', 90, 0),
('d56c8566-dd39-8489-e9fb-636e5f2a94e2', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'EmailTemplates', 'module', 90, 0),
('d57d636a-f081-f6e1-68f4-636e5f385ba8', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Prospects', 'module', 90, 0),
('d5ad5887-f7dd-1b66-88a1-636e5fd036b6', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Meetings', 'module', 89, 0),
('d5be79c7-80a1-e609-a829-636e5faebd38', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'ProjectTask', 'module', 90, 0),
('d6a18089-09e0-a615-5651-636e5f524d22', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'ProspectLists', 'module', 89, 0),
('d74b1434-52c8-919d-74c6-636e60ce3b7f', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'SurveyQuestionOptions', 'module', 90, 0),
('d777c998-4366-cdf2-1d74-636e6088d7e2', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'AOS_Contracts', 'module', 90, 0),
('d7de5881-2688-c9fb-c635-636e601ac823', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'AOS_Invoices', 'module', 90, 0),
('d848dc62-9a87-3078-aec8-636e5f9af7f5', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'AOR_Scheduled_Reports', 'module', 90, 0),
('d8836775-9baf-2e28-a4f5-636e600a42b2', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'AOS_Quotes', 'module', 90, 0),
('da4a5a1d-625c-2bd1-bca3-636e5fbf82b3', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Opportunities', 'module', 90, 0),
('dbe73ba4-e9d2-57ce-a4c0-636e5f670f47', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'AM_TaskTemplates', 'module', 90, 0),
('dc31f3df-047e-f925-4bbd-636e605acbb1', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'Surveys', 'module', 90, 0),
('dcab0a05-50b8-20af-8c0d-636e5ff93f81', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'EAPM', 'module', 90, 0),
('dcf69ed5-83b6-e9a1-42cc-636e603bdc29', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'jjwg_Maps', 'module', 90, 0),
('dd47e79a-2d71-83f8-3ced-636e602f71c2', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'SurveyResponses', 'module', 90, 0),
('dd90b62c-fcbb-c807-f1f2-636e5f9a7b84', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Leads', 'module', 90, 0),
('ddbfb36b-65f9-6b9b-4480-636e5f9bf5f3', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'FP_events', 'module', 89, 0),
('ddeb3ee2-7509-1f3a-8408-636e5fda4b88', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Accounts', 'module', 90, 0),
('de6c5402-e0ad-b27b-0aec-636e5fb23e80', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'AOR_Reports', 'module', 90, 0),
('def8c48c-fe68-1114-1da4-636e5f0a83db', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'AOK_Knowledge_Base_Categories', 'module', 90, 0),
('df00f7b7-2925-6558-df2f-636e601cae53', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'AOS_PDF_Templates', 'module', 90, 0),
('dfc4e984-fdf4-e6e5-14ac-636e60ce3a4b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'OutboundEmailAccounts', 'module', 90, 0),
('e0190979-5769-46e6-dbaf-636e5f5645c2', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'FP_Event_Locations', 'module', 90, 0),
('e0506d05-d7c6-9319-1985-636e5fab59de', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Cases', 'module', 90, 0),
('e06a79d1-63b7-c9d4-57e7-636e5f7d582c', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Spots', 'module', 90, 0),
('e083ea72-7e37-6689-d264-636e60f78683', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'jjwg_Areas', 'module', 90, 0),
('e08e6e4e-4627-bbb9-e97a-636e6070470b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'SecurityGroups', 'module', 90, 0),
('e097cd98-e826-e075-c536-636e5fcd5144', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'Bugs', 'module', 90, 0),
('e14be7e0-4d6f-88e6-a4e6-636e5fb0cd55', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'ProjectTask', 'module', 90, 0),
('e1bc25bf-9adf-56bf-c494-636e60d2d194', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'AOW_WorkFlow', 'module', 89, 0),
('e1d1f9ee-3bca-8009-0dff-636e5f37c64f', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Prospects', 'module', 90, 0),
('e25c74dd-c57f-c20d-8305-636e5f2ae4cf', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'AOP_Case_Events', 'module', 90, 0),
('e3130e10-798f-fc47-daec-636e5fa1a26d', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'EmailMarketing', 'module', 90, 0),
('e36369e6-9a39-0d39-9bca-636e60e9cff0', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'jjwg_Address_Cache', 'module', 90, 0),
('e48c6ebe-8ea4-2491-d333-636e5fd6b4d8', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'AOD_IndexEvent', 'module', 90, 0),
('e49cca50-d98c-447c-93fd-636e6092407b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'AOS_Invoices', 'module', 90, 0),
('e4a05dec-8317-5801-bbfe-636e5f2c99e7', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'AOK_KnowledgeBase', 'module', 90, 0),
('e4e35f1f-39c8-9fe8-a1eb-636e60c6c536', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'AOS_Contracts', 'module', 90, 0),
('e545fc04-b7b1-704d-02b4-636e604316f4', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'SurveyQuestionOptions', 'module', 90, 0),
('e695a2df-c9a8-e645-c905-636e5f3af821', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'list', 'EmailTemplates', 'module', 90, 0),
('e6a03b9b-a827-f86e-e0bc-636e5ff6a1b1', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'EmailMarketing', 'module', 89, 0),
('e72fa774-cf46-d42e-587c-636e60fa8cdb', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Calls_Reschedule', 'module', 90, 0),
('e7727f7e-d3c0-53f2-2546-636e5fbadaf5', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Meetings', 'module', 90, 0),
('e88a0085-e93a-f10e-e37d-636e5f1c92dc', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Leads', 'module', 90, 0),
('e8ae3bbf-95be-8cd7-2759-636e5fbe505a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'ProspectLists', 'module', 90, 0),
('e8b30d77-ca5e-9b99-f156-636e5f5350d7', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Users', 'module', 89, 0),
('e8c1b205-7e42-0e32-6b17-636e608da493', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'SurveyQuestionResponses', 'module', 90, 0),
('e9178710-c613-730e-833f-636e5f29d2bb', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'AM_TaskTemplates', 'module', 90, 0),
('e94dbfdb-83fd-f88d-e788-636e60230273', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'Surveys', 'module', 90, 0),
('eaae4114-1747-af60-21ca-636e5f653eef', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Campaigns', 'module', 89, 0),
('eb3898ca-df14-09e1-1a90-636e6027b058', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'SurveyResponses', 'module', 90, 0),
('ec695949-4992-326e-e8eb-636e5f081c03', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'massupdate', 'Opportunities', 'module', 90, 0),
('ecbb08da-0b30-c59f-46f1-636e5fd599d5', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Accounts', 'module', 90, 0),
('ecd4cb10-6d21-10cf-8e63-636e5f991731', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'Bugs', 'module', 90, 0),
('ed514814-a1d1-c9c6-342a-636e60f36717', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'AOS_Products', 'module', 89, 0),
('ee91ba98-938e-b3d4-871b-636e5f562d70', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'EAPM', 'module', 90, 0),
('eee50f47-66fa-19ea-c6dc-636e5fea2277', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'Project', 'module', 90, 0),
('f01f8be9-38e9-c8b2-6cb1-636e5fd02d3b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'AOR_Reports', 'module', 90, 0),
('f032cc34-113f-3715-988a-636e60b6664b', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'AOS_PDF_Templates', 'module', 90, 0),
('f053032f-f01c-d87f-57aa-636e601779b9', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'SurveyQuestionOptions', 'module', 90, 0),
('f0683c31-ecd8-3923-1ef5-636e60e50f5c', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'jjwg_Areas', 'module', 90, 0),
('f09aa6e6-3c70-aad1-78a8-636e60fb6f29', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'OutboundEmailAccounts', 'module', 90, 0),
('f0b975a6-45c2-da03-7b55-636e5f7a0adf', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'Cases', 'module', 90, 0),
('f0b9ba0d-7b5d-a3fe-98c0-636e606fde37', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'AOS_Quotes', 'module', 90, 0),
('f0cdba50-6d54-39ff-23e2-636e602c7cfa', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'export', 'jjwg_Maps', 'module', 90, 0),
('f15ce5ee-c1ae-4e01-de03-636e60adfa89', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'SecurityGroups', 'module', 90, 0),
('f16e887d-71b1-2c6c-5f07-636e5f47ada2', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'FP_events', 'module', 90, 0),
('f17c8f6e-2560-9aef-80ae-636e5fd9e1c7', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Documents', 'module', 89, 0),
('f19c39e5-4dc6-3705-c516-636e5fbb1ba5', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'Calls', 'module', 89, 0),
('f25584a2-8971-58de-5440-636e60a4489a', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'access', 'jjwg_Markers', 'module', 89, 0),
('f34e5de1-8bfc-3e27-4fa2-636e60ccb12f', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'import', 'SurveyQuestionOptions', 'module', 90, 0),
('f3750243-a808-2248-2944-636e5f429f98', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'edit', 'EmailTemplates', 'module', 90, 0),
('f41860b3-a7ae-d05a-59a7-636e5f1a3610', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'view', 'EmailMarketing', 'module', 90, 0),
('fcd30e55-bfa7-3834-e703-636e60044e7c', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '', 'delete', 'jjwg_Areas', 'module', 90, 0);

-- --------------------------------------------------------

--
-- Table structure for table `acl_roles`
--

CREATE TABLE `acl_roles` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acl_roles_actions`
--

CREATE TABLE `acl_roles_actions` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `action_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `access_override` int DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acl_roles_users`
--

CREATE TABLE `acl_roles_users` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `address_book`
--

CREATE TABLE `address_book` (
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `bean` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bean_id` char(36) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alerts`
--

CREATE TABLE `alerts` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  `target_module` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `url_redirect` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reminder_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `am_projecttemplates`
--

CREATE TABLE `am_projecttemplates` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Draft',
  `priority` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'High',
  `override_business_hours` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `am_projecttemplates_audit`
--

CREATE TABLE `am_projecttemplates_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `am_projecttemplates_contacts_1_c`
--

CREATE TABLE `am_projecttemplates_contacts_1_c` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `am_projecttemplates_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contacts_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `am_projecttemplates_project_1_c`
--

CREATE TABLE `am_projecttemplates_project_1_c` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `am_projecttemplates_project_1am_projecttemplates_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `am_projecttemplates_project_1project_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `am_projecttemplates_users_1_c`
--

CREATE TABLE `am_projecttemplates_users_1_c` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `am_projecttemplates_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `users_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `am_tasktemplates`
--

CREATE TABLE `am_tasktemplates` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Not Started',
  `priority` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'High',
  `percent_complete` int DEFAULT '0',
  `predecessors` int DEFAULT NULL,
  `milestone_flag` tinyint(1) DEFAULT '0',
  `relationship_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'FS',
  `task_number` int DEFAULT NULL,
  `order_number` int DEFAULT NULL,
  `estimated_effort` int DEFAULT NULL,
  `utilization` varchar(100) COLLATE utf8mb4_general_ci DEFAULT '0',
  `duration` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `am_tasktemplates_am_projecttemplates_c`
--

CREATE TABLE `am_tasktemplates_am_projecttemplates_c` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `am_tasktemplates_am_projecttemplatesam_projecttemplates_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `am_tasktemplates_am_projecttemplatesam_tasktemplates_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `am_tasktemplates_audit`
--

CREATE TABLE `am_tasktemplates_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aobh_businesshours`
--

CREATE TABLE `aobh_businesshours` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `opening_hours` varchar(100) COLLATE utf8mb4_general_ci DEFAULT '1',
  `closing_hours` varchar(100) COLLATE utf8mb4_general_ci DEFAULT '1',
  `open_status` tinyint(1) DEFAULT NULL,
  `day` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'monday'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aod_index`
--

CREATE TABLE `aod_index` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_optimised` datetime DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aod_index`
--

INSERT INTO `aod_index` (`id`, `name`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `description`, `deleted`, `assigned_user_id`, `last_optimised`, `location`) VALUES
('1', 'Index', '2022-11-11 14:54:01', '2022-11-11 14:54:01', '1', '1', NULL, 0, NULL, NULL, 'modules/AOD_Index/Index/Index');

-- --------------------------------------------------------

--
-- Table structure for table `aod_indexevent`
--

CREATE TABLE `aod_indexevent` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `error` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `success` tinyint(1) DEFAULT '0',
  `record_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `record_module` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aod_indexevent_audit`
--

CREATE TABLE `aod_indexevent_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aod_index_audit`
--

CREATE TABLE `aod_index_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aok_knowledgebase`
--

CREATE TABLE `aok_knowledgebase` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Draft',
  `revision` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `additional_info` text COLLATE utf8mb4_general_ci,
  `user_id_c` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id1_c` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aok_knowledgebase_audit`
--

CREATE TABLE `aok_knowledgebase_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aok_knowledgebase_categories`
--

CREATE TABLE `aok_knowledgebase_categories` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `aok_knowledgebase_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aok_knowledge_base_categories_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aok_knowledge_base_categories`
--

CREATE TABLE `aok_knowledge_base_categories` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aok_knowledge_base_categories_audit`
--

CREATE TABLE `aok_knowledge_base_categories_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aop_case_events`
--

CREATE TABLE `aop_case_events` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `case_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aop_case_events_audit`
--

CREATE TABLE `aop_case_events_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aop_case_updates`
--

CREATE TABLE `aop_case_updates` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `case_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `internal` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aop_case_updates_audit`
--

CREATE TABLE `aop_case_updates_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aor_charts`
--

CREATE TABLE `aor_charts` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `aor_report_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `x_field` int DEFAULT NULL,
  `y_field` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aor_conditions`
--

CREATE TABLE `aor_conditions` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `aor_report_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `condition_order` int DEFAULT NULL,
  `logic_op` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parenthesis` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `module_path` longtext COLLATE utf8mb4_general_ci,
  `field` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `operator` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `value_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parameter` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aor_fields`
--

CREATE TABLE `aor_fields` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `aor_report_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_order` int DEFAULT NULL,
  `module_path` longtext COLLATE utf8mb4_general_ci,
  `field` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `display` tinyint(1) DEFAULT NULL,
  `link` tinyint(1) DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_function` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sort_by` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `format` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `total` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sort_order` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `group_by` tinyint(1) DEFAULT NULL,
  `group_order` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `group_display` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aor_reports`
--

CREATE TABLE `aor_reports` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `report_module` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `graphs_per_row` int DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aor_reports_audit`
--

CREATE TABLE `aor_reports_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aor_scheduled_reports`
--

CREATE TABLE `aor_scheduled_reports` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `schedule` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_run` datetime DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email_recipients` longtext COLLATE utf8mb4_general_ci,
  `aor_report_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_contracts`
--

CREATE TABLE `aos_contracts` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `total_contract_value` decimal(26,6) DEFAULT NULL,
  `total_contract_value_usdollar` decimal(26,6) DEFAULT NULL,
  `currency_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Not Started',
  `customer_signed_date` date DEFAULT NULL,
  `company_signed_date` date DEFAULT NULL,
  `renewal_reminder_date` datetime DEFAULT NULL,
  `contract_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Type',
  `contract_account_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `opportunity_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `call_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `total_amt` decimal(26,6) DEFAULT NULL,
  `total_amt_usdollar` decimal(26,6) DEFAULT NULL,
  `subtotal_amount` decimal(26,6) DEFAULT NULL,
  `subtotal_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `discount_amount` decimal(26,6) DEFAULT NULL,
  `discount_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `tax_amount` decimal(26,6) DEFAULT NULL,
  `tax_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `shipping_amount` decimal(26,6) DEFAULT NULL,
  `shipping_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `shipping_tax` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_tax_amt` decimal(26,6) DEFAULT NULL,
  `shipping_tax_amt_usdollar` decimal(26,6) DEFAULT NULL,
  `total_amount` decimal(26,6) DEFAULT NULL,
  `total_amount_usdollar` decimal(26,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_contracts_audit`
--

CREATE TABLE `aos_contracts_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_contracts_documents`
--

CREATE TABLE `aos_contracts_documents` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `aos_contracts_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `documents_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `document_revision_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_invoices`
--

CREATE TABLE `aos_invoices` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_account_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_contact_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_address_street` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_address_city` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_address_state` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_address_postalcode` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_address_country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_address_street` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_address_city` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_address_state` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_address_postalcode` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_address_country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `number` int NOT NULL,
  `total_amt` decimal(26,6) DEFAULT NULL,
  `total_amt_usdollar` decimal(26,6) DEFAULT NULL,
  `subtotal_amount` decimal(26,6) DEFAULT NULL,
  `subtotal_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `discount_amount` decimal(26,6) DEFAULT NULL,
  `discount_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `tax_amount` decimal(26,6) DEFAULT NULL,
  `tax_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `shipping_amount` decimal(26,6) DEFAULT NULL,
  `shipping_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `shipping_tax` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_tax_amt` decimal(26,6) DEFAULT NULL,
  `shipping_tax_amt_usdollar` decimal(26,6) DEFAULT NULL,
  `total_amount` decimal(26,6) DEFAULT NULL,
  `total_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `currency_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `quote_number` int DEFAULT NULL,
  `quote_date` date DEFAULT NULL,
  `invoice_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `template_ddown_c` text COLLATE utf8mb4_general_ci,
  `subtotal_tax_amount` decimal(26,6) DEFAULT NULL,
  `subtotal_tax_amount_usdollar` decimal(26,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_invoices_audit`
--

CREATE TABLE `aos_invoices_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_line_item_groups`
--

CREATE TABLE `aos_line_item_groups` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `total_amt` decimal(26,6) DEFAULT NULL,
  `total_amt_usdollar` decimal(26,6) DEFAULT NULL,
  `discount_amount` decimal(26,6) DEFAULT NULL,
  `discount_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `subtotal_amount` decimal(26,6) DEFAULT NULL,
  `subtotal_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `tax_amount` decimal(26,6) DEFAULT NULL,
  `tax_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `subtotal_tax_amount` decimal(26,6) DEFAULT NULL,
  `subtotal_tax_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `total_amount` decimal(26,6) DEFAULT NULL,
  `total_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `parent_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `number` int DEFAULT NULL,
  `currency_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_line_item_groups_audit`
--

CREATE TABLE `aos_line_item_groups_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_pdf_templates`
--

CREATE TABLE `aos_pdf_templates` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pdfheader` longtext COLLATE utf8mb4_general_ci,
  `pdffooter` longtext COLLATE utf8mb4_general_ci,
  `margin_left` int DEFAULT '15',
  `margin_right` int DEFAULT '15',
  `margin_top` int DEFAULT '16',
  `margin_bottom` int DEFAULT '16',
  `margin_header` int DEFAULT '9',
  `margin_footer` int DEFAULT '9',
  `page_size` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `orientation` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_pdf_templates_audit`
--

CREATE TABLE `aos_pdf_templates_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_products`
--

CREATE TABLE `aos_products` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `maincode` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'XXXX',
  `part_number` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Good',
  `cost` decimal(26,6) DEFAULT NULL,
  `cost_usdollar` decimal(26,6) DEFAULT NULL,
  `currency_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` decimal(26,6) DEFAULT NULL,
  `price_usdollar` decimal(26,6) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aos_product_category_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_products_audit`
--

CREATE TABLE `aos_products_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_products_quotes`
--

CREATE TABLE `aos_products_quotes` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` text COLLATE utf8mb4_general_ci,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `currency_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `part_number` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `item_description` text COLLATE utf8mb4_general_ci,
  `number` int DEFAULT NULL,
  `product_qty` decimal(18,4) DEFAULT NULL,
  `product_cost_price` decimal(26,6) DEFAULT NULL,
  `product_cost_price_usdollar` decimal(26,6) DEFAULT NULL,
  `product_list_price` decimal(26,6) DEFAULT NULL,
  `product_list_price_usdollar` decimal(26,6) DEFAULT NULL,
  `product_discount` decimal(26,6) DEFAULT NULL,
  `product_discount_usdollar` decimal(26,6) DEFAULT NULL,
  `product_discount_amount` decimal(26,6) DEFAULT NULL,
  `product_discount_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'Percentage',
  `product_unit_price` decimal(26,6) DEFAULT NULL,
  `product_unit_price_usdollar` decimal(26,6) DEFAULT NULL,
  `vat_amt` decimal(26,6) DEFAULT NULL,
  `vat_amt_usdollar` decimal(26,6) DEFAULT NULL,
  `product_total_price` decimal(26,6) DEFAULT NULL,
  `product_total_price_usdollar` decimal(26,6) DEFAULT NULL,
  `vat` varchar(100) COLLATE utf8mb4_general_ci DEFAULT '5.0',
  `parent_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `product_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `group_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_products_quotes_audit`
--

CREATE TABLE `aos_products_quotes_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_product_categories`
--

CREATE TABLE `aos_product_categories` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_parent` tinyint(1) DEFAULT '0',
  `parent_category_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_product_categories_audit`
--

CREATE TABLE `aos_product_categories_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_quotes`
--

CREATE TABLE `aos_quotes` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `approval_issue` text COLLATE utf8mb4_general_ci,
  `billing_account_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_contact_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_address_street` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_address_city` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_address_state` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_address_postalcode` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_address_country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_address_street` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_address_city` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_address_state` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_address_postalcode` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_address_country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `expiration` date DEFAULT NULL,
  `number` int DEFAULT NULL,
  `opportunity_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `template_ddown_c` text COLLATE utf8mb4_general_ci,
  `total_amt` decimal(26,6) DEFAULT NULL,
  `total_amt_usdollar` decimal(26,6) DEFAULT NULL,
  `subtotal_amount` decimal(26,6) DEFAULT NULL,
  `subtotal_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `discount_amount` decimal(26,6) DEFAULT NULL,
  `discount_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `tax_amount` decimal(26,6) DEFAULT NULL,
  `tax_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `shipping_amount` decimal(26,6) DEFAULT NULL,
  `shipping_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `shipping_tax` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_tax_amt` decimal(26,6) DEFAULT NULL,
  `shipping_tax_amt_usdollar` decimal(26,6) DEFAULT NULL,
  `total_amount` decimal(26,6) DEFAULT NULL,
  `total_amount_usdollar` decimal(26,6) DEFAULT NULL,
  `currency_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `stage` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Draft',
  `term` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `terms_c` text COLLATE utf8mb4_general_ci,
  `approval_status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `invoice_status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Not Invoiced',
  `subtotal_tax_amount` decimal(26,6) DEFAULT NULL,
  `subtotal_tax_amount_usdollar` decimal(26,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_quotes_aos_invoices_c`
--

CREATE TABLE `aos_quotes_aos_invoices_c` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `aos_quotes77d9_quotes_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aos_quotes6b83nvoices_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_quotes_audit`
--

CREATE TABLE `aos_quotes_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_quotes_os_contracts_c`
--

CREATE TABLE `aos_quotes_os_contracts_c` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `aos_quotese81e_quotes_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aos_quotes4dc0ntracts_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aos_quotes_project_c`
--

CREATE TABLE `aos_quotes_project_c` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `aos_quotes1112_quotes_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aos_quotes7207project_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aow_actions`
--

CREATE TABLE `aow_actions` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `aow_workflow_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `action_order` int DEFAULT NULL,
  `action` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parameters` longtext COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aow_conditions`
--

CREATE TABLE `aow_conditions` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `aow_workflow_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `condition_order` int DEFAULT NULL,
  `module_path` longtext COLLATE utf8mb4_general_ci,
  `field` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `operator` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `value_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aow_processed`
--

CREATE TABLE `aow_processed` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `aow_workflow_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parent_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aow_processed_aow_actions`
--

CREATE TABLE `aow_processed_aow_actions` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `aow_processed_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aow_action_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(36) COLLATE utf8mb4_general_ci DEFAULT 'Pending',
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aow_workflow`
--

CREATE TABLE `aow_workflow` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `flow_module` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `flow_run_on` varchar(100) COLLATE utf8mb4_general_ci DEFAULT '0',
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Active',
  `run_when` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Always',
  `multiple_runs` tinyint(1) DEFAULT '0',
  `run_on_import` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aow_workflow_audit`
--

CREATE TABLE `aow_workflow_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bugs`
--

CREATE TABLE `bugs` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bug_number` int NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `priority` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `resolution` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `work_log` text COLLATE utf8mb4_general_ci,
  `found_in_release` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fixed_in_release` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `source` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `product_category` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bugs_audit`
--

CREATE TABLE `bugs_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calls`
--

CREATE TABLE `calls` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `duration_hours` int DEFAULT NULL,
  `duration_minutes` int DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `parent_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Planned',
  `direction` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reminder_time` int DEFAULT '-1',
  `email_reminder_time` int DEFAULT '-1',
  `email_reminder_sent` tinyint(1) DEFAULT '0',
  `outlook_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `repeat_type` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `repeat_interval` int DEFAULT '1',
  `repeat_dow` varchar(7) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `repeat_until` date DEFAULT NULL,
  `repeat_count` int DEFAULT NULL,
  `repeat_parent_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `recurring_source` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calls_contacts`
--

CREATE TABLE `calls_contacts` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `call_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `required` varchar(1) COLLATE utf8mb4_general_ci DEFAULT '1',
  `accept_status` varchar(25) COLLATE utf8mb4_general_ci DEFAULT 'none',
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calls_leads`
--

CREATE TABLE `calls_leads` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `call_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lead_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `required` varchar(1) COLLATE utf8mb4_general_ci DEFAULT '1',
  `accept_status` varchar(25) COLLATE utf8mb4_general_ci DEFAULT 'none',
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calls_reschedule`
--

CREATE TABLE `calls_reschedule` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reason` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `call_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calls_reschedule_audit`
--

CREATE TABLE `calls_reschedule_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calls_users`
--

CREATE TABLE `calls_users` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `call_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `required` varchar(1) COLLATE utf8mb4_general_ci DEFAULT '1',
  `accept_status` varchar(25) COLLATE utf8mb4_general_ci DEFAULT 'none',
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tracker_key` int NOT NULL,
  `tracker_count` int DEFAULT '0',
  `refer_url` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'http://',
  `tracker_text` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `impressions` int DEFAULT '0',
  `currency_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `budget` double DEFAULT NULL,
  `expected_cost` double DEFAULT NULL,
  `actual_cost` double DEFAULT NULL,
  `expected_revenue` double DEFAULT NULL,
  `campaign_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `objective` text COLLATE utf8mb4_general_ci,
  `content` text COLLATE utf8mb4_general_ci,
  `frequency` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `survey_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaigns_audit`
--

CREATE TABLE `campaigns_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaign_log`
--

CREATE TABLE `campaign_log` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `campaign_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `target_tracker_key` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `target_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `target_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `activity_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `activity_date` datetime DEFAULT NULL,
  `related_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `related_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `archived` tinyint(1) DEFAULT '0',
  `hits` int DEFAULT '0',
  `list_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `more_information` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `marketing_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaign_trkrs`
--

CREATE TABLE `campaign_trkrs` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `tracker_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tracker_url` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'http://',
  `tracker_key` int NOT NULL,
  `campaign_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_optout` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `case_number` int NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `priority` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `resolution` text COLLATE utf8mb4_general_ci,
  `work_log` text COLLATE utf8mb4_general_ci,
  `account_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `state` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Open',
  `contact_created_by_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cases_aos_products_1_c`
--

CREATE TABLE `cases_aos_products_1_c` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `cases_aos_products_1cases_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cases_aos_products_1aos_products_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cases_audit`
--

CREATE TABLE `cases_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cases_bugs`
--

CREATE TABLE `cases_bugs` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `case_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bug_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cases_cstm`
--

CREATE TABLE `cases_cstm` (
  `id_c` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `jjwg_maps_lng_c` float(11,8) DEFAULT '0.00000000',
  `jjwg_maps_lat_c` float(10,8) DEFAULT '0.00000000',
  `jjwg_maps_geocode_status_c` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jjwg_maps_address_c` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `category` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`category`, `name`, `value`) VALUES
('notify', 'fromaddress', 'do_not_reply@example.com'),
('notify', 'fromname', 'SuiteCRM'),
('notify', 'send_by_default', '1'),
('notify', 'on', '1'),
('notify', 'send_from_assigning_user', '0'),
('info', 'sugar_version', '6.5.25'),
('MySettings', 'tab', 'YTozMzp7aTowO3M6NDoiSG9tZSI7aToxO3M6ODoiQWNjb3VudHMiO2k6MjtzOjg6IkNvbnRhY3RzIjtpOjM7czoxMzoiT3Bwb3J0dW5pdGllcyI7aTo0O3M6NToiTGVhZHMiO2k6NTtzOjEwOiJBT1NfUXVvdGVzIjtpOjY7czo4OiJDYWxlbmRhciI7aTo3O3M6OToiRG9jdW1lbnRzIjtpOjg7czo2OiJFbWFpbHMiO2k6OTtzOjU6IlNwb3RzIjtpOjEwO3M6OToiQ2FtcGFpZ25zIjtpOjExO3M6NToiQ2FsbHMiO2k6MTI7czo4OiJNZWV0aW5ncyI7aToxMztzOjU6IlRhc2tzIjtpOjE0O3M6NToiTm90ZXMiO2k6MTU7czoxMjoiQU9TX0ludm9pY2VzIjtpOjE2O3M6MTM6IkFPU19Db250cmFjdHMiO2k6MTc7czo1OiJDYXNlcyI7aToxODtzOjk6IlByb3NwZWN0cyI7aToxOTtzOjEzOiJQcm9zcGVjdExpc3RzIjtpOjIwO3M6NzoiUHJvamVjdCI7aToyMTtzOjE5OiJBTV9Qcm9qZWN0VGVtcGxhdGVzIjtpOjIyO3M6MTY6IkFNX1Rhc2tUZW1wbGF0ZXMiO2k6MjM7czo5OiJGUF9ldmVudHMiO2k6MjQ7czoxODoiRlBfRXZlbnRfTG9jYXRpb25zIjtpOjI1O3M6MTI6IkFPU19Qcm9kdWN0cyI7aToyNjtzOjIyOiJBT1NfUHJvZHVjdF9DYXRlZ29yaWVzIjtpOjI3O3M6MTc6IkFPU19QREZfVGVtcGxhdGVzIjtpOjI4O3M6MTE6IkFPUl9SZXBvcnRzIjtpOjI5O3M6MTc6IkFPS19Lbm93bGVkZ2VCYXNlIjtpOjMwO3M6Mjk6IkFPS19Lbm93bGVkZ2VfQmFzZV9DYXRlZ29yaWVzIjtpOjMxO3M6MTQ6IkVtYWlsVGVtcGxhdGVzIjtpOjMyO3M6NzoiU3VydmV5cyI7fQ=='),
('portal', 'on', '0'),
('tracker', 'Tracker', '1'),
('sugarfeed', 'enabled', '1'),
('sugarfeed', 'module_UserFeed', '1'),
('sugarfeed', 'module_Cases', '1'),
('sugarfeed', 'module_Contacts', '1'),
('sugarfeed', 'module_Leads', '1'),
('sugarfeed', 'module_Opportunities', '1'),
('Update', 'CheckUpdates', 'manual'),
('system', 'name', 'SuiteCRM'),
('system', 'adminwizard', '1'),
('notify', 'allow_default_outbound', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `salutation` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `do_not_call` tinyint(1) DEFAULT '0',
  `phone_home` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_mobile` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_work` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_other` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_fax` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lawful_basis` text COLLATE utf8mb4_general_ci,
  `date_reviewed` date DEFAULT NULL,
  `lawful_basis_source` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primary_address_street` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primary_address_city` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primary_address_state` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primary_address_postalcode` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primary_address_country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_address_street` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_address_city` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_address_state` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_address_postalcode` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_address_country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `assistant` varchar(75) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `assistant_phone` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lead_source` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reports_to_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `campaign_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `joomla_account_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `portal_account_disabled` tinyint(1) DEFAULT NULL,
  `portal_user_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Single'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts_audit`
--

CREATE TABLE `contacts_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts_bugs`
--

CREATE TABLE `contacts_bugs` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bug_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_role` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts_cases`
--

CREATE TABLE `contacts_cases` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `case_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_role` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts_cstm`
--

CREATE TABLE `contacts_cstm` (
  `id_c` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `jjwg_maps_lng_c` float(11,8) DEFAULT '0.00000000',
  `jjwg_maps_lat_c` float(10,8) DEFAULT '0.00000000',
  `jjwg_maps_geocode_status_c` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jjwg_maps_address_c` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts_users`
--

CREATE TABLE `contacts_users` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cron_remove_documents`
--

CREATE TABLE `cron_remove_documents` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `bean_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `module` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `symbol` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `iso4217` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `conversion_rate` double DEFAULT '0',
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `custom_fields`
--

CREATE TABLE `custom_fields` (
  `bean_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `set_num` int DEFAULT '0',
  `field0` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field1` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field2` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field3` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field4` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field5` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field6` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field7` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field8` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field9` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `document_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `doc_id` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `doc_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Sugar',
  `doc_url` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `active_date` date DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `category_id` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `subcategory_id` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_id` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `document_revision_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `related_doc_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `related_doc_rev_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_template` tinyint(1) DEFAULT '0',
  `template_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents_accounts`
--

CREATE TABLE `documents_accounts` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `document_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents_bugs`
--

CREATE TABLE `documents_bugs` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `document_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bug_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents_cases`
--

CREATE TABLE `documents_cases` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `document_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `case_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents_contacts`
--

CREATE TABLE `documents_contacts` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `document_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents_opportunities`
--

CREATE TABLE `documents_opportunities` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `document_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `opportunity_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `document_revisions`
--

CREATE TABLE `document_revisions` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `change_log` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `document_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `doc_id` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `doc_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `doc_url` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `file_ext` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `file_mime_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `revision` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eapm`
--

CREATE TABLE `eapm` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `application` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'webex',
  `api_data` text COLLATE utf8mb4_general_ci,
  `consumer_key` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `consumer_secret` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `oauth_token` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `oauth_secret` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `validated` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emailman`
--

CREATE TABLE `emailman` (
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id` int NOT NULL,
  `campaign_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `marketing_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `list_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `send_date_time` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `in_queue` tinyint(1) DEFAULT '0',
  `in_queue_date` datetime DEFAULT NULL,
  `send_attempts` int DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  `related_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `related_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `related_confirm_opt_in` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `orphaned` tinyint(1) DEFAULT NULL,
  `last_synced` datetime DEFAULT NULL,
  `date_sent_received` datetime DEFAULT NULL,
  `message_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `flagged` tinyint(1) DEFAULT NULL,
  `reply_to_status` tinyint(1) DEFAULT NULL,
  `intent` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'pick',
  `mailbox_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parent_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category_id` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emails_beans`
--

CREATE TABLE `emails_beans` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `email_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bean_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bean_module` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `campaign_data` text COLLATE utf8mb4_general_ci,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emails_email_addr_rel`
--

CREATE TABLE `emails_email_addr_rel` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `email_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `address_type` varchar(4) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email_address_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emails_text`
--

CREATE TABLE `emails_text` (
  `email_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `from_addr` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reply_to_addr` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `to_addrs` text COLLATE utf8mb4_general_ci,
  `cc_addrs` text COLLATE utf8mb4_general_ci,
  `bcc_addrs` text COLLATE utf8mb4_general_ci,
  `description` longtext COLLATE utf8mb4_general_ci,
  `description_html` longtext COLLATE utf8mb4_general_ci,
  `raw_source` longtext COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_addresses`
--

CREATE TABLE `email_addresses` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email_address_caps` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `invalid_email` tinyint(1) DEFAULT '0',
  `opt_out` tinyint(1) DEFAULT '0',
  `confirm_opt_in` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'not-opt-in',
  `confirm_opt_in_date` datetime DEFAULT NULL,
  `confirm_opt_in_sent_date` datetime DEFAULT NULL,
  `confirm_opt_in_fail_date` datetime DEFAULT NULL,
  `confirm_opt_in_token` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_addresses_audit`
--

CREATE TABLE `email_addresses_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_addr_bean_rel`
--

CREATE TABLE `email_addr_bean_rel` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `email_address_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `bean_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `bean_module` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primary_address` tinyint(1) DEFAULT '0',
  `reply_to_address` tinyint(1) DEFAULT '0',
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_cache`
--

CREATE TABLE `email_cache` (
  `ie_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mbox` varchar(60) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fromaddr` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `toaddr` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `senddate` datetime DEFAULT NULL,
  `message_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mailsize` int UNSIGNED DEFAULT NULL,
  `imap_uid` int UNSIGNED DEFAULT NULL,
  `msgno` int UNSIGNED DEFAULT NULL,
  `recent` tinyint DEFAULT NULL,
  `flagged` tinyint DEFAULT NULL,
  `answered` tinyint DEFAULT NULL,
  `deleted` tinyint DEFAULT NULL,
  `seen` tinyint DEFAULT NULL,
  `draft` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_marketing`
--

CREATE TABLE `email_marketing` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `from_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `from_addr` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reply_to_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reply_to_addr` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `inbound_email_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `template_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `campaign_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `outbound_email_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `all_prospect_lists` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_marketing_prospect_lists`
--

CREATE TABLE `email_marketing_prospect_lists` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `prospect_list_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email_marketing_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `published` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `subject` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_general_ci,
  `body_html` longtext COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT NULL,
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `text_only` tinyint(1) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `published`, `name`, `description`, `subject`, `body`, `body_html`, `deleted`, `assigned_user_id`, `text_only`, `type`) VALUES
('8b4a4af3-a588-f62b-8385-636e605e7dda', '2013-05-24 14:31:45', '2022-11-11 14:43:52', '1', '1', 'off', 'Event Invite Template', 'Default event invite template.', 'You have been invited to $fp_events_name', 'Dear $contact_name,\r\nYou have been invited to $fp_events_name on $fp_events_date_start to $fp_events_date_end\r\n$fp_events_description\r\nYours Sincerely,\r\n', '\r\n<p>Dear $contact_name,</p>\r\n<p>You have been invited to $fp_events_name on $fp_events_date_start to $fp_events_date_end</p>\r\n<p>$fp_events_description</p>\r\n<p>If you would like to accept this invititation please click accept.</p>\r\n<p> $fp_events_link or $fp_events_link_declined</p>\r\n<p>Yours Sincerely,</p>\r\n', 0, NULL, NULL, 'system'),
('96a53f04-1d86-77e4-63cd-636e601c99c9', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'off', 'Case Closure', 'Template for informing a contact that their case has been closed.', '$acase_name [CASE:$acase_case_number] closed', 'Hi $contact_first_name $contact_last_name,\r\n\r\n					   Your case $acase_name (# $acase_case_number) has been closed on $acase_date_entered\r\n					   Status:				$acase_status\r\n					   Reference:			$acase_case_number\r\n					   Resolution:			$acase_resolution', '<p> Hi $contact_first_name $contact_last_name,</p>\r\n					    <p>Your case $acase_name (# $acase_case_number) has been closed on $acase_date_entered</p>\r\n					    <table border=\"0\"><tbody>\r\n					    <tr><td>Status</td><td>$acase_status</td></tr>\r\n					    <tr><td>Reference</td><td>$acase_case_number</td></tr>\r\n					    <tr><td>Resolution</td><td>$acase_resolution</td></tr>\r\n					    </tbody></table>', 0, NULL, NULL, 'system'),
('b9b04790-33ce-42fd-7cdc-636e60ee450e', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'off', 'Joomla Account Creation', 'Template used when informing a contact that they\'ve been given an account on the joomla portal.', 'Support Portal Account Created', 'Hi $contact_name,\r\n					   An account has been created for you at $portal_address.\r\n					   You may login using this email address and the password $joomla_pass', '<p>Hi $contact_name,</p>\r\n					    <p>An account has been created for you at <a href=\"$portal_address\">$portal_address</a>.</p>\r\n					    <p>You may login using this email address and the password $joomla_pass</p>', 0, NULL, NULL, 'system'),
('c39202b1-7cdb-4eda-fed5-636e603fe465', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'off', 'User Case Update', 'Email template to send to a SuiteCRM user when their case is updated.', '$acase_name (# $acase_case_number) update', 'Hi $user_first_name $user_last_name,\r\n\r\n					   You\'ve had an update to your case $acase_name (# $acase_case_number) on $aop_case_updates_date_entered:\r\n					       $contact_first_name $contact_last_name, said:\r\n					               $aop_case_updates_description\r\n                        You may review this Case at:\r\n                            $sugarurl/index.php?module=Cases&action=DetailView&record=$acase_id;', '<p>Hi $user_first_name $user_last_name,</p>\r\n					     <p> </p>\r\n					     <p>You\'ve had an update to your case $acase_name (# $acase_case_number) on $aop_case_updates_date_entered:</p>\r\n					     <p><strong>$contact_first_name $contact_last_name, said:</strong></p>\r\n					     <p style=\"padding-left:30px;\">$aop_case_updates_description</p>\r\n					     <p>You may review this Case at: $sugarurl/index.php?module=Cases&action=DetailView&record=$acase_id;</p>', 0, NULL, NULL, 'system'),
('cc4c814a-9b99-139d-6c51-636e60613639', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'off', 'Case Creation', 'Template to send to a contact when a case is received from them.', '$acase_name [CASE:$acase_case_number]', 'Hi $contact_first_name $contact_last_name,\r\n\r\n					   We\'ve received your case $acase_name (# $acase_case_number) on $acase_date_entered\r\n					   Status:		$acase_status\r\n					   Reference:	$acase_case_number\r\n					   Description:	$acase_description', '<p> Hi $contact_first_name $contact_last_name,</p>\r\n					    <p>We\'ve received your case $acase_name (# $acase_case_number) on $acase_date_entered</p>\r\n					    <table border=\"0\"><tbody>\r\n					    <tr><td>Status</td><td>$acase_status</td></tr>\r\n					    <tr><td>Reference</td><td>$acase_case_number</td></tr>\r\n					    <tr><td>Description</td><td>$acase_description</td></tr>\r\n					    </tbody></table>', 0, NULL, NULL, 'system'),
('e9a8d5e5-768a-e33a-d949-636e60506d25', '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'off', 'Contact Case Update', 'Template to send to a contact when their case is updated.', '$acase_name update [CASE:$acase_case_number]', 'Hi $user_first_name $user_last_name,\r\n\r\n					   You\'ve had an update to your case $acase_name (# $acase_case_number) on $aop_case_updates_date_entered:\r\n					       $contact_first_name $contact_last_name, said:\r\n					               $aop_case_updates_description', '<p>Hi $contact_first_name $contact_last_name,</p>\r\n					    <p> </p>\r\n					    <p>You\'ve had an update to your case $acase_name (# $acase_case_number) on $aop_case_updates_date_entered:</p>\r\n					    <p><strong>$user_first_name $user_last_name said:</strong></p>\r\n					    <p style=\"padding-left:30px;\">$aop_case_updates_description</p>', 0, NULL, NULL, 'system');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parent_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fields_meta_data`
--

CREATE TABLE `fields_meta_data` (
  `id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `vname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `comments` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `help` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `custom_module` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `len` int DEFAULT NULL,
  `required` tinyint(1) DEFAULT '0',
  `default_value` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `audited` tinyint(1) DEFAULT '0',
  `massupdate` tinyint(1) DEFAULT '0',
  `duplicate_merge` smallint DEFAULT '0',
  `reportable` tinyint(1) DEFAULT '1',
  `importable` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ext1` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ext2` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ext3` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ext4` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fields_meta_data`
--

INSERT INTO `fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES
('Accountsjjwg_maps_address_c', 'jjwg_maps_address_c', 'LBL_JJWG_MAPS_ADDRESS', 'Address', 'Address', 'Accounts', 'varchar', 255, 0, NULL, '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Accountsjjwg_maps_geocode_status_c', 'jjwg_maps_geocode_status_c', 'LBL_JJWG_MAPS_GEOCODE_STATUS', 'Geocode Status', 'Geocode Status', 'Accounts', 'varchar', 255, 0, NULL, '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Accountsjjwg_maps_lat_c', 'jjwg_maps_lat_c', 'LBL_JJWG_MAPS_LAT', '', 'Latitude', 'Accounts', 'float', 10, 0, '0.00000000', '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Accountsjjwg_maps_lng_c', 'jjwg_maps_lng_c', 'LBL_JJWG_MAPS_LNG', '', 'Longitude', 'Accounts', 'float', 11, 0, '0.00000000', '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Casesjjwg_maps_address_c', 'jjwg_maps_address_c', 'LBL_JJWG_MAPS_ADDRESS', 'Address', 'Address', 'Cases', 'varchar', 255, 0, NULL, '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Casesjjwg_maps_geocode_status_c', 'jjwg_maps_geocode_status_c', 'LBL_JJWG_MAPS_GEOCODE_STATUS', 'Geocode Status', 'Geocode Status', 'Cases', 'varchar', 255, 0, NULL, '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Casesjjwg_maps_lat_c', 'jjwg_maps_lat_c', 'LBL_JJWG_MAPS_LAT', '', 'Latitude', 'Cases', 'float', 10, 0, '0.00000000', '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Casesjjwg_maps_lng_c', 'jjwg_maps_lng_c', 'LBL_JJWG_MAPS_LNG', '', 'Longitude', 'Cases', 'float', 11, 0, '0.00000000', '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Contactsjjwg_maps_address_c', 'jjwg_maps_address_c', 'LBL_JJWG_MAPS_ADDRESS', 'Address', 'Address', 'Contacts', 'varchar', 255, 0, NULL, '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Contactsjjwg_maps_geocode_status_c', 'jjwg_maps_geocode_status_c', 'LBL_JJWG_MAPS_GEOCODE_STATUS', 'Geocode Status', 'Geocode Status', 'Contacts', 'varchar', 255, 0, NULL, '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Contactsjjwg_maps_lat_c', 'jjwg_maps_lat_c', 'LBL_JJWG_MAPS_LAT', '', 'Latitude', 'Contacts', 'float', 10, 0, '0.00000000', '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Contactsjjwg_maps_lng_c', 'jjwg_maps_lng_c', 'LBL_JJWG_MAPS_LNG', '', 'Longitude', 'Contacts', 'float', 11, 0, '0.00000000', '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Leadsjjwg_maps_address_c', 'jjwg_maps_address_c', 'LBL_JJWG_MAPS_ADDRESS', 'Address', 'Address', 'Leads', 'varchar', 255, 0, NULL, '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Leadsjjwg_maps_geocode_status_c', 'jjwg_maps_geocode_status_c', 'LBL_JJWG_MAPS_GEOCODE_STATUS', 'Geocode Status', 'Geocode Status', 'Leads', 'varchar', 255, 0, NULL, '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Leadsjjwg_maps_lat_c', 'jjwg_maps_lat_c', 'LBL_JJWG_MAPS_LAT', '', 'Latitude', 'Leads', 'float', 10, 0, '0.00000000', '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Leadsjjwg_maps_lng_c', 'jjwg_maps_lng_c', 'LBL_JJWG_MAPS_LNG', '', 'Longitude', 'Leads', 'float', 11, 0, '0.00000000', '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Meetingsjjwg_maps_address_c', 'jjwg_maps_address_c', 'LBL_JJWG_MAPS_ADDRESS', 'Address', 'Address', 'Meetings', 'varchar', 255, 0, NULL, '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Meetingsjjwg_maps_geocode_status_c', 'jjwg_maps_geocode_status_c', 'LBL_JJWG_MAPS_GEOCODE_STATUS', 'Geocode Status', 'Geocode Status', 'Meetings', 'varchar', 255, 0, NULL, '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Meetingsjjwg_maps_lat_c', 'jjwg_maps_lat_c', 'LBL_JJWG_MAPS_LAT', '', 'Latitude', 'Meetings', 'float', 10, 0, '0.00000000', '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Meetingsjjwg_maps_lng_c', 'jjwg_maps_lng_c', 'LBL_JJWG_MAPS_LNG', '', 'Longitude', 'Meetings', 'float', 11, 0, '0.00000000', '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Opportunitiesjjwg_maps_address_c', 'jjwg_maps_address_c', 'LBL_JJWG_MAPS_ADDRESS', 'Address', 'Address', 'Opportunities', 'varchar', 255, 0, NULL, '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Opportunitiesjjwg_maps_geocode_status_c', 'jjwg_maps_geocode_status_c', 'LBL_JJWG_MAPS_GEOCODE_STATUS', 'Geocode Status', 'Geocode Status', 'Opportunities', 'varchar', 255, 0, NULL, '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Opportunitiesjjwg_maps_lat_c', 'jjwg_maps_lat_c', 'LBL_JJWG_MAPS_LAT', '', 'Latitude', 'Opportunities', 'float', 10, 0, '0.00000000', '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Opportunitiesjjwg_maps_lng_c', 'jjwg_maps_lng_c', 'LBL_JJWG_MAPS_LNG', '', 'Longitude', 'Opportunities', 'float', 11, 0, '0.00000000', '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Projectjjwg_maps_address_c', 'jjwg_maps_address_c', 'LBL_JJWG_MAPS_ADDRESS', 'Address', 'Address', 'Project', 'varchar', 255, 0, NULL, '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Projectjjwg_maps_geocode_status_c', 'jjwg_maps_geocode_status_c', 'LBL_JJWG_MAPS_GEOCODE_STATUS', 'Geocode Status', 'Geocode Status', 'Project', 'varchar', 255, 0, NULL, '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Projectjjwg_maps_lat_c', 'jjwg_maps_lat_c', 'LBL_JJWG_MAPS_LAT', '', 'Latitude', 'Project', 'float', 10, 0, '0.00000000', '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Projectjjwg_maps_lng_c', 'jjwg_maps_lng_c', 'LBL_JJWG_MAPS_LNG', '', 'Longitude', 'Project', 'float', 11, 0, '0.00000000', '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Prospectsjjwg_maps_address_c', 'jjwg_maps_address_c', 'LBL_JJWG_MAPS_ADDRESS', 'Address', 'Address', 'Prospects', 'varchar', 255, 0, NULL, '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Prospectsjjwg_maps_geocode_status_c', 'jjwg_maps_geocode_status_c', 'LBL_JJWG_MAPS_GEOCODE_STATUS', 'Geocode Status', 'Geocode Status', 'Prospects', 'varchar', 255, 0, NULL, '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', NULL, '', '', ''),
('Prospectsjjwg_maps_lat_c', 'jjwg_maps_lat_c', 'LBL_JJWG_MAPS_LAT', '', 'Latitude', 'Prospects', 'float', 10, 0, '0.00000000', '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', '8', '', '', ''),
('Prospectsjjwg_maps_lng_c', 'jjwg_maps_lng_c', 'LBL_JJWG_MAPS_LNG', '', 'Longitude', 'Prospects', 'float', 11, 0, '0.00000000', '2022-11-11 14:43:52', 0, 0, 0, 0, 1, 'true', '8', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `folders`
--

CREATE TABLE `folders` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `folder_type` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parent_folder` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `has_child` tinyint(1) DEFAULT '0',
  `is_group` tinyint(1) DEFAULT '0',
  `is_dynamic` tinyint(1) DEFAULT '0',
  `dynamic_query` text COLLATE utf8mb4_general_ci,
  `assign_to_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `modified_by` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `folders_rel`
--

CREATE TABLE `folders_rel` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `folder_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `polymorphic_module` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `polymorphic_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `folders_subscriptions`
--

CREATE TABLE `folders_subscriptions` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `folder_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fp_events`
--

CREATE TABLE `fp_events` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `duration_hours` int DEFAULT NULL,
  `duration_minutes` int DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `budget` decimal(26,6) DEFAULT NULL,
  `currency_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `invite_templates` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `accept_redirect` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `decline_redirect` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `activity_status_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fp_events_audit`
--

CREATE TABLE `fp_events_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fp_events_contacts_c`
--

CREATE TABLE `fp_events_contacts_c` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `fp_events_contactsfp_events_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fp_events_contactscontacts_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `invite_status` varchar(25) COLLATE utf8mb4_general_ci DEFAULT 'Not Invited',
  `accept_status` varchar(25) COLLATE utf8mb4_general_ci DEFAULT 'No Response',
  `email_responded` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fp_events_fp_event_delegates_1_c`
--

CREATE TABLE `fp_events_fp_event_delegates_1_c` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `fp_events_fp_event_delegates_1fp_events_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fp_events_fp_event_delegates_1fp_event_delegates_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fp_events_fp_event_locations_1_c`
--

CREATE TABLE `fp_events_fp_event_locations_1_c` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `fp_events_fp_event_locations_1fp_events_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fp_events_fp_event_locations_1fp_event_locations_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fp_events_leads_1_c`
--

CREATE TABLE `fp_events_leads_1_c` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `fp_events_leads_1fp_events_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fp_events_leads_1leads_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `invite_status` varchar(25) COLLATE utf8mb4_general_ci DEFAULT 'Not Invited',
  `accept_status` varchar(25) COLLATE utf8mb4_general_ci DEFAULT 'No Response',
  `email_responded` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fp_events_prospects_1_c`
--

CREATE TABLE `fp_events_prospects_1_c` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `fp_events_prospects_1fp_events_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fp_events_prospects_1prospects_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `invite_status` varchar(25) COLLATE utf8mb4_general_ci DEFAULT 'Not Invited',
  `accept_status` varchar(25) COLLATE utf8mb4_general_ci DEFAULT 'No Response',
  `email_responded` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fp_event_locations`
--

CREATE TABLE `fp_event_locations` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address_city` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address_country` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address_postalcode` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address_state` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fp_event_locations_audit`
--

CREATE TABLE `fp_event_locations_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fp_event_locations_fp_events_1_c`
--

CREATE TABLE `fp_event_locations_fp_events_1_c` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `fp_event_locations_fp_events_1fp_event_locations_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fp_event_locations_fp_events_1fp_events_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `import_maps`
--

CREATE TABLE `import_maps` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(254) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `source` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `enclosure` varchar(1) COLLATE utf8mb4_general_ci DEFAULT ' ',
  `delimiter` varchar(1) COLLATE utf8mb4_general_ci DEFAULT ',',
  `module` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_general_ci,
  `default_values` text COLLATE utf8mb4_general_ci,
  `has_header` tinyint(1) DEFAULT '1',
  `deleted` tinyint(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_published` varchar(3) COLLATE utf8mb4_general_ci DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inbound_email`
--

CREATE TABLE `inbound_email` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Active',
  `server_url` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email_user` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email_password` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `port` int DEFAULT NULL,
  `service` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mailbox` text COLLATE utf8mb4_general_ci,
  `delete_seen` tinyint(1) DEFAULT '0',
  `mailbox_type` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `template_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `stored_options` text COLLATE utf8mb4_general_ci,
  `group_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_personal` tinyint(1) DEFAULT '0',
  `groupfolder_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inbound_email_autoreply`
--

CREATE TABLE `inbound_email_autoreply` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `autoreplied_to` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ie_id` char(36) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inbound_email_cache_ts`
--

CREATE TABLE `inbound_email_cache_ts` (
  `id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ie_timestamp` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jjwg_address_cache`
--

CREATE TABLE `jjwg_address_cache` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lat` float(10,8) DEFAULT NULL,
  `lng` float(11,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jjwg_address_cache_audit`
--

CREATE TABLE `jjwg_address_cache_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jjwg_areas`
--

CREATE TABLE `jjwg_areas` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `coordinates` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jjwg_areas_audit`
--

CREATE TABLE `jjwg_areas_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jjwg_maps`
--

CREATE TABLE `jjwg_maps` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `distance` float(9,4) DEFAULT NULL,
  `unit_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'mi',
  `module_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Accounts',
  `parent_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jjwg_maps_audit`
--

CREATE TABLE `jjwg_maps_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jjwg_maps_jjwg_areas_c`
--

CREATE TABLE `jjwg_maps_jjwg_areas_c` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `jjwg_maps_5304wg_maps_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jjwg_maps_41f2g_areas_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jjwg_maps_jjwg_markers_c`
--

CREATE TABLE `jjwg_maps_jjwg_markers_c` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `jjwg_maps_b229wg_maps_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jjwg_maps_2e31markers_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jjwg_markers`
--

CREATE TABLE `jjwg_markers` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jjwg_maps_lat` float(10,8) DEFAULT '0.00000000',
  `jjwg_maps_lng` float(11,8) DEFAULT '0.00000000',
  `marker_image` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'company'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jjwg_markers_audit`
--

CREATE TABLE `jjwg_markers_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_queue`
--

CREATE TABLE `job_queue` (
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `scheduler_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `execute_time` datetime DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `resolution` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_general_ci,
  `target` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data` text COLLATE utf8mb4_general_ci,
  `requeue` tinyint(1) DEFAULT '0',
  `retry_count` tinyint DEFAULT NULL,
  `failure_count` tinyint DEFAULT NULL,
  `job_delay` int DEFAULT NULL,
  `client` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `percent_complete` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `salutation` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `department` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `do_not_call` tinyint(1) DEFAULT '0',
  `phone_home` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_mobile` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_work` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_other` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_fax` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lawful_basis` text COLLATE utf8mb4_general_ci,
  `date_reviewed` date DEFAULT NULL,
  `lawful_basis_source` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primary_address_street` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primary_address_city` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primary_address_state` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primary_address_postalcode` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primary_address_country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_address_street` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_address_city` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_address_state` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_address_postalcode` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_address_country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `assistant` varchar(75) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `assistant_phone` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `converted` tinyint(1) DEFAULT '0',
  `refered_by` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lead_source` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lead_source_description` text COLLATE utf8mb4_general_ci,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_description` text COLLATE utf8mb4_general_ci,
  `reports_to_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_description` text COLLATE utf8mb4_general_ci,
  `contact_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `opportunity_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `opportunity_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `opportunity_amount` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `campaign_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `portal_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `portal_app` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads_audit`
--

CREATE TABLE `leads_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads_cstm`
--

CREATE TABLE `leads_cstm` (
  `id_c` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `jjwg_maps_lng_c` float(11,8) DEFAULT '0.00000000',
  `jjwg_maps_lat_c` float(10,8) DEFAULT '0.00000000',
  `jjwg_maps_geocode_status_c` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jjwg_maps_address_c` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `linked_documents`
--

CREATE TABLE `linked_documents` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parent_type` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `document_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `document_revision_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `location` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `join_url` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `host_url` varchar(400) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `displayed_url` varchar(400) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `creator` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `external_id` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `duration_hours` int DEFAULT NULL,
  `duration_minutes` int DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `parent_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Planned',
  `type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'Sugar',
  `parent_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reminder_time` int DEFAULT '-1',
  `email_reminder_time` int DEFAULT '-1',
  `email_reminder_sent` tinyint(1) DEFAULT '0',
  `outlook_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sequence` int DEFAULT '0',
  `repeat_type` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `repeat_interval` int DEFAULT '1',
  `repeat_dow` varchar(7) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `repeat_until` date DEFAULT NULL,
  `repeat_count` int DEFAULT NULL,
  `repeat_parent_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `recurring_source` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gsync_id` varchar(1024) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gsync_lastsync` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meetings_contacts`
--

CREATE TABLE `meetings_contacts` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `meeting_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `required` varchar(1) COLLATE utf8mb4_general_ci DEFAULT '1',
  `accept_status` varchar(25) COLLATE utf8mb4_general_ci DEFAULT 'none',
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meetings_cstm`
--

CREATE TABLE `meetings_cstm` (
  `id_c` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `jjwg_maps_lng_c` float(11,8) DEFAULT '0.00000000',
  `jjwg_maps_lat_c` float(10,8) DEFAULT '0.00000000',
  `jjwg_maps_geocode_status_c` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jjwg_maps_address_c` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meetings_leads`
--

CREATE TABLE `meetings_leads` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `meeting_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lead_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `required` varchar(1) COLLATE utf8mb4_general_ci DEFAULT '1',
  `accept_status` varchar(25) COLLATE utf8mb4_general_ci DEFAULT 'none',
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meetings_users`
--

CREATE TABLE `meetings_users` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `meeting_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `required` varchar(1) COLLATE utf8mb4_general_ci DEFAULT '1',
  `accept_status` varchar(25) COLLATE utf8mb4_general_ci DEFAULT 'none',
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `file_mime_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parent_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `portal_flag` tinyint(1) DEFAULT NULL,
  `embed_flag` tinyint(1) DEFAULT '0',
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth2clients`
--

CREATE TABLE `oauth2clients` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `secret` varchar(4000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `redirect_url` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_confidential` tinyint(1) DEFAULT '1',
  `allowed_grant_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'password',
  `duration_value` int DEFAULT NULL,
  `duration_amount` int DEFAULT NULL,
  `duration_unit` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'Duration Unit',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth2tokens`
--

CREATE TABLE `oauth2tokens` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `token_is_revoked` tinyint(1) DEFAULT NULL,
  `token_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `access_token_expires` datetime DEFAULT NULL,
  `access_token` varchar(4000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `refresh_token` varchar(4000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `refresh_token_expires` datetime DEFAULT NULL,
  `grant_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `state` varchar(1024) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `client` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_consumer`
--

CREATE TABLE `oauth_consumer` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `c_key` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `c_secret` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_nonce`
--

CREATE TABLE `oauth_nonce` (
  `conskey` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `nonce` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `nonce_ts` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_tokens`
--

CREATE TABLE `oauth_tokens` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `secret` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tstate` varchar(1) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `consumer` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `token_ts` bigint DEFAULT NULL,
  `verify` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `callback_url` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `opportunities`
--

CREATE TABLE `opportunities` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `opportunity_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `campaign_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lead_source` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `amount_usdollar` double DEFAULT NULL,
  `currency_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_closed` date DEFAULT NULL,
  `next_step` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sales_stage` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `probability` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `opportunities_audit`
--

CREATE TABLE `opportunities_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `opportunities_contacts`
--

CREATE TABLE `opportunities_contacts` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `opportunity_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_role` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `opportunities_cstm`
--

CREATE TABLE `opportunities_cstm` (
  `id_c` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `jjwg_maps_lng_c` float(11,8) DEFAULT '0.00000000',
  `jjwg_maps_lat_c` float(10,8) DEFAULT '0.00000000',
  `jjwg_maps_geocode_status_c` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jjwg_maps_address_c` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `outbound_email`
--

CREATE TABLE `outbound_email` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `type` varchar(15) COLLATE utf8mb4_general_ci DEFAULT 'user',
  `user_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `smtp_from_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `smtp_from_addr` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mail_sendtype` varchar(8) COLLATE utf8mb4_general_ci DEFAULT 'smtp',
  `mail_smtptype` varchar(20) COLLATE utf8mb4_general_ci DEFAULT 'other',
  `mail_smtpserver` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mail_smtpport` varchar(5) COLLATE utf8mb4_general_ci DEFAULT '0',
  `mail_smtpuser` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mail_smtppass` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mail_smtpauth_req` tinyint(1) DEFAULT '0',
  `mail_smtpssl` varchar(1) COLLATE utf8mb4_general_ci DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `outbound_email`
--

INSERT INTO `outbound_email` (`id`, `name`, `type`, `user_id`, `smtp_from_name`, `smtp_from_addr`, `mail_sendtype`, `mail_smtptype`, `mail_smtpserver`, `mail_smtpport`, `mail_smtpuser`, `mail_smtppass`, `mail_smtpauth_req`, `mail_smtpssl`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `deleted`, `assigned_user_id`) VALUES
('320d1e7a-8133-9406-ed69-636e607b8b9c', 'system', 'system', '1', NULL, NULL, 'SMTP', 'other', '', '25', '', '', 1, '0', NULL, NULL, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `outbound_email_audit`
--

CREATE TABLE `outbound_email_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `estimated_start_date` date DEFAULT NULL,
  `estimated_end_date` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `priority` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `override_business_hours` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects_accounts`
--

CREATE TABLE `projects_accounts` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `account_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `project_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects_bugs`
--

CREATE TABLE `projects_bugs` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `bug_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `project_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects_cases`
--

CREATE TABLE `projects_cases` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `case_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `project_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects_contacts`
--

CREATE TABLE `projects_contacts` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `project_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects_opportunities`
--

CREATE TABLE `projects_opportunities` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `opportunity_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `project_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects_products`
--

CREATE TABLE `projects_products` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `product_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `project_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_contacts_1_c`
--

CREATE TABLE `project_contacts_1_c` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `project_contacts_1project_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `project_contacts_1contacts_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_cstm`
--

CREATE TABLE `project_cstm` (
  `id_c` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `jjwg_maps_lng_c` float(11,8) DEFAULT '0.00000000',
  `jjwg_maps_lat_c` float(10,8) DEFAULT '0.00000000',
  `jjwg_maps_geocode_status_c` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jjwg_maps_address_c` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_task`
--

CREATE TABLE `project_task` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `project_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `project_task_id` int DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `relationship_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `predecessors` text COLLATE utf8mb4_general_ci,
  `date_start` date DEFAULT NULL,
  `time_start` int DEFAULT NULL,
  `time_finish` int DEFAULT NULL,
  `date_finish` date DEFAULT NULL,
  `duration` int DEFAULT NULL,
  `duration_unit` text COLLATE utf8mb4_general_ci,
  `actual_duration` int DEFAULT NULL,
  `percent_complete` int DEFAULT NULL,
  `date_due` date DEFAULT NULL,
  `time_due` time DEFAULT NULL,
  `parent_task_id` int DEFAULT NULL,
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `priority` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `milestone_flag` tinyint(1) DEFAULT NULL,
  `order_number` int DEFAULT '1',
  `task_number` int DEFAULT NULL,
  `estimated_effort` int DEFAULT NULL,
  `actual_effort` int DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `utilization` int DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_task_audit`
--

CREATE TABLE `project_task_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_users_1_c`
--

CREATE TABLE `project_users_1_c` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `project_users_1project_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `project_users_1users_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prospects`
--

CREATE TABLE `prospects` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `salutation` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `do_not_call` tinyint(1) DEFAULT '0',
  `phone_home` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_mobile` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_work` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_other` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_fax` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lawful_basis` text COLLATE utf8mb4_general_ci,
  `date_reviewed` date DEFAULT NULL,
  `lawful_basis_source` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primary_address_street` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primary_address_city` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primary_address_state` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primary_address_postalcode` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primary_address_country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_address_street` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_address_city` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_address_state` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_address_postalcode` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_address_country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `assistant` varchar(75) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `assistant_phone` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tracker_key` int NOT NULL,
  `birthdate` date DEFAULT NULL,
  `lead_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_name` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `campaign_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prospects_cstm`
--

CREATE TABLE `prospects_cstm` (
  `id_c` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `jjwg_maps_lng_c` float(11,8) DEFAULT '0.00000000',
  `jjwg_maps_lat_c` float(10,8) DEFAULT '0.00000000',
  `jjwg_maps_geocode_status_c` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jjwg_maps_address_c` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prospect_lists`
--

CREATE TABLE `prospect_lists` (
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `list_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `domain_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prospect_lists_prospects`
--

CREATE TABLE `prospect_lists_prospects` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `prospect_list_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `related_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `related_type` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prospect_list_campaigns`
--

CREATE TABLE `prospect_list_campaigns` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `prospect_list_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `campaign_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relationships`
--

CREATE TABLE `relationships` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `relationship_name` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lhs_module` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lhs_table` varchar(64) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lhs_key` varchar(64) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rhs_module` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rhs_table` varchar(64) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rhs_key` varchar(64) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `join_table` varchar(64) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `join_key_lhs` varchar(64) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `join_key_rhs` varchar(64) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `relationship_type` varchar(64) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `relationship_role_column` varchar(64) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `relationship_role_column_value` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reverse` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `relationships`
--

INSERT INTO `relationships` (`id`, `relationship_name`, `lhs_module`, `lhs_table`, `lhs_key`, `rhs_module`, `rhs_table`, `rhs_key`, `join_table`, `join_key_lhs`, `join_key_rhs`, `relationship_type`, `relationship_role_column`, `relationship_role_column_value`, `reverse`, `deleted`) VALUES
('1096afdb-6580-7b53-875b-636e60bff22a', 'jjwg_address_cache_assigned_user', 'Users', 'users', 'id', 'jjwg_Address_Cache', 'jjwg_address_cache', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('12251369-8b55-86e8-4c73-636e6056e28d', 'project_tasks_meetings', 'ProjectTask', 'project_task', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'ProjectTask', 0, 0),
('127c3dd9-b3df-9d4e-7c69-636e60579af3', 'campaign_notes', 'Campaigns', 'campaigns', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Campaigns', 0, 0),
('12ff88ba-910f-05f7-db02-636e60af7679', 'surveyquestions_assigned_user', 'Users', 'users', 'id', 'SurveyQuestions', 'surveyquestions', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('13556419-e9c5-330d-6687-636e60b29d0f', 'aop_case_events_assigned_user', 'Users', 'users', 'id', 'AOP_Case_Events', 'aop_case_events', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('139f6397-337b-efba-d6aa-636e60205cad', 'jjwg_Maps_meetings', 'jjwg_Maps', 'jjwg_Maps', 'parent_id', 'Meetings', 'meetings', 'id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Meetings', 0, 0),
('13fdf01f-e8bc-6ddf-6d5f-636e60d12146', 'aok_knowledgebase_categories', 'AOK_KnowledgeBase', 'aok_knowledgebase', 'id', 'AOK_Knowledge_Base_Categories', 'aok_knowledge_base_categories', 'id', 'aok_knowledgebase_categories', 'aok_knowledgebase_id', 'aok_knowledge_base_categories_id', 'many-to-many', NULL, NULL, 0, 0),
('15970445-be6c-ba97-e890-636e6074afe7', 'aok_knowledgebase_created_by', 'Users', 'users', 'id', 'AOK_KnowledgeBase', 'aok_knowledgebase', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('15ab5b74-3872-a8c4-4275-636e6048c320', 'prospect_list_prospects', 'ProspectLists', 'prospect_lists', 'id', 'Prospects', 'prospects', 'id', 'prospect_lists_prospects', 'prospect_list_id', 'related_id', 'many-to-many', 'related_type', 'Prospects', 0, 0),
('15d2135c-03fa-2902-1dda-636e6076f15e', 'contacts_bugs', 'Contacts', 'contacts', 'id', 'Bugs', 'bugs', 'id', 'contacts_bugs', 'contact_id', 'bug_id', 'many-to-many', NULL, NULL, 0, 0),
('15e1c582-7043-25c6-2114-636e605d9264', 'securitygroups_project_task', 'SecurityGroups', 'securitygroups', 'id', 'ProjectTask', 'project_task', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'ProjectTask', 0, 0),
('15fb2ffc-f1c0-acf5-91cd-636e605ea4e9', 'outbound_email_created_by', 'Users', 'users', 'id', 'OutboundEmailAccounts', 'outbound_email', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1609a8ad-573d-f729-c9f3-636e607bc994', 'aor_charts_created_by', 'Users', 'users', 'id', 'AOR_Charts', 'aor_charts', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('165b5824-b424-ea33-3c26-636e605af2e1', 'notes_modified_user', 'Users', 'users', 'id', 'Notes', 'notes', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1665444c-0a69-c038-57d4-636e60156319', 'contacts_assigned_user', 'Users', 'users', 'id', 'Contacts', 'contacts', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('16a1e525-3c03-f704-770f-636e608b502e', 'spots_created_by', 'Users', 'users', 'id', 'Spots', 'spots', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('16db6136-42ff-f120-9ae7-636e60cc4652', 'securitygroups_aow_workflow', 'SecurityGroups', 'securitygroups', 'id', 'AOW_WorkFlow', 'aow_workflow', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'AOW_WorkFlow', 0, 0),
('16e8a5a8-6ed2-13cd-71e1-636e60b33db9', 'meetings_notes', 'Meetings', 'meetings', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Meetings', 0, 0),
('171352a2-389a-76ca-dc34-636e6013de7d', 'aow_conditions_modified_user', 'Users', 'users', 'id', 'AOW_Conditions', 'aow_conditions', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('172b87c6-668b-2ac6-8db3-636e60bcc5f2', 'alerts_modified_user', 'Users', 'users', 'id', 'Alerts', 'alerts', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('176054c2-c1db-9cf6-38af-636e60b32005', 'prospects_created_by', 'Users', 'users', 'id', 'Prospects', 'prospects', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('17b25ba9-8b18-d8e3-2c3e-636e6083738c', 'cases_created_by', 'Users', 'users', 'id', 'Cases', 'cases', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('18b9cc92-a1e8-ed15-60c8-636e60307822', 'surveys_created_by', 'Users', 'users', 'id', 'Surveys', 'surveys', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('196fed1c-a037-c50c-0452-636e609369cc', 'securitygroups_aos_quotes', 'SecurityGroups', 'securitygroups', 'id', 'AOS_Quotes', 'aos_quotes', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'AOS_Quotes', 0, 0),
('1a8fdd1f-e8ee-c251-38e7-636e60761072', 'emails_modified_user', 'Users', 'users', 'id', 'Emails', 'emails', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1ab33497-6085-4da1-577e-636e6047842b', 'aor_reports_modified_user', 'Users', 'users', 'id', 'AOR_Reports', 'aor_reports', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1ac32481-2593-0aa7-8234-636e60760751', 'opportunities_campaign', 'Campaigns', 'campaigns', 'id', 'Opportunities', 'opportunities', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1ad008fc-7f70-b3b4-1bf1-636e60fec1b9', 'bug_calls', 'Bugs', 'bugs', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Bugs', 0, 0),
('1b03c840-60d5-9061-9faf-636e609824e7', 'securitygroups_surveyquestions', 'SecurityGroups', 'securitygroups', 'id', 'SurveyQuestions', 'surveyquestions', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'SurveyQuestions', 0, 0),
('1b8912de-6d7f-b205-f98e-636e60ee68ba', 'account_aos_invoices', 'Accounts', 'accounts', 'id', 'AOS_Invoices', 'aos_invoices', 'billing_account_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1ba259bf-4b41-a118-e876-636e6051d0e7', 'leads_assigned_user', 'Users', 'users', 'id', 'Leads', 'leads', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1ba503c1-020f-ff75-7650-636e60af2885', 'am_projecttemplates_project_1', 'AM_ProjectTemplates', 'am_projecttemplates', 'id', 'Project', 'project', 'id', 'am_projecttemplates_project_1_c', 'am_projecttemplates_project_1am_projecttemplates_ida', 'am_projecttemplates_project_1project_idb', 'many-to-many', NULL, NULL, 0, 0),
('1bbf77e1-4d7d-6cd5-e2f8-636e60132a2e', 'cases_aop_case_events', 'Cases', 'cases', 'id', 'AOP_Case_Events', 'aop_case_events', 'case_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1c41ea5c-d111-bc44-092f-636e60080b41', 'securitygroups_project', 'SecurityGroups', 'securitygroups', 'id', 'Project', 'project', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'Project', 0, 0),
('1dd81f30-5d7d-9815-9a50-636e60dda38b', 'aor_charts_aor_reports', 'AOR_Reports', 'aor_reports', 'id', 'AOR_Charts', 'aor_charts', 'aor_report_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1e251b94-003f-9431-902b-636e602a960d', 'outbound_email_assigned_user', 'Users', 'users', 'id', 'OutboundEmailAccounts', 'outbound_email', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1e5ed21e-aeb9-fc92-156a-636e60c45f44', 'campaign_email_marketing', 'Campaigns', 'campaigns', 'id', 'EmailMarketing', 'email_marketing', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('1e6caa1b-d0eb-665f-e99a-636e6020477a', 'contacts_cases', 'Contacts', 'contacts', 'id', 'Cases', 'cases', 'id', 'contacts_cases', 'contact_id', 'case_id', 'many-to-many', NULL, NULL, 0, 0),
('1ee186c3-ef04-d595-ad37-636e60340fa8', 'jjwg_Maps_prospects', 'jjwg_Maps', 'jjwg_Maps', 'parent_id', 'Prospects', 'prospects', 'id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Prospects', 0, 0),
('2063bd64-dbbc-c9c0-9fbb-636e6031ff7c', 'notes_created_by', 'Users', 'users', 'id', 'Notes', 'notes', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('213a90a4-8f00-1393-7afd-636e607255a0', 'project_tasks_calls', 'ProjectTask', 'project_task', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'ProjectTask', 0, 0),
('21fbaf17-825e-d1f9-bfc6-636e60fbd564', 'aow_workflow_aow_conditions', 'AOW_WorkFlow', 'aow_workflow', 'id', 'AOW_Conditions', 'aow_conditions', 'aow_workflow_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('224a4f2e-11ba-1807-7c87-636e60335dad', 'securitygroups_prospect_lists', 'SecurityGroups', 'securitygroups', 'id', 'ProspectLists', 'prospect_lists', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'ProspectLists', 0, 0),
('2262274b-3357-46be-0b44-636e6078ddfa', 'spots_assigned_user', 'Users', 'users', 'id', 'Spots', 'spots', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2292387c-6e85-6152-beb8-636e60a13470', 'prospect_list_leads', 'ProspectLists', 'prospect_lists', 'id', 'Leads', 'leads', 'id', 'prospect_lists_prospects', 'prospect_list_id', 'related_id', 'many-to-many', 'related_type', 'Leads', 0, 0),
('22b63a18-a635-d6d0-bc2a-636e60d9881f', 'securitygroups_contacts', 'SecurityGroups', 'securitygroups', 'id', 'Contacts', 'contacts', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'Contacts', 0, 0),
('22cf91ce-91f8-ed77-174e-636e60ffffd4', 'surveys_assigned_user', 'Users', 'users', 'id', 'Surveys', 'surveys', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('22d503fa-6f9b-f916-379b-636e60909b13', 'aow_conditions_created_by', 'Users', 'users', 'id', 'AOW_Conditions', 'aow_conditions', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('231788a7-4b50-4f83-bebc-636e60156d0b', 'cases_assigned_user', 'Users', 'users', 'id', 'Cases', 'cases', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('231c040d-c819-f33d-394c-636e601a27c8', 'jjwg_Maps_cases', 'jjwg_Maps', 'jjwg_Maps', 'parent_id', 'Cases', 'cases', 'id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Cases', 0, 0),
('2320f72a-1755-6a9e-0f45-636e60453340', 'securitygroups_leads', 'SecurityGroups', 'securitygroups', 'id', 'Leads', 'leads', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'Leads', 0, 0),
('2344af2e-6bac-06c0-c48b-636e60f90b6f', 'surveyquestions_surveyquestionoptions', 'SurveyQuestions', 'surveyquestions', 'id', 'SurveyQuestionOptions', 'surveyquestionoptions', 'survey_question_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('245b7c27-6ebe-f693-748b-636e60d81b35', 'alerts_created_by', 'Users', 'users', 'id', 'Alerts', 'alerts', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2643f81b-1220-95de-e8c4-636e601ef5a0', 'aor_reports_created_by', 'Users', 'users', 'id', 'AOR_Reports', 'aor_reports', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('265fc0b7-2c1b-36bd-6106-636e601bc2b8', 'aos_quotes_aos_product_quotes', 'AOS_Quotes', 'aos_quotes', 'id', 'AOS_Products_Quotes', 'aos_products_quotes', 'parent_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('26729c52-ef86-a45d-baa4-636e606d5ba9', 'campaign_emailman', 'Campaigns', 'campaigns', 'id', 'EmailMan', 'emailman', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('26927e95-ae04-0eaa-768f-636e605a7a61', 'emails_created_by', 'Users', 'users', 'id', 'Emails', 'emails', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('26c50e6f-c389-2286-9569-636e60cc1682', 'am_projecttemplates_contacts_1', 'AM_ProjectTemplates', 'am_projecttemplates', 'id', 'Contacts', 'contacts', 'id', 'am_projecttemplates_contacts_1_c', 'am_projecttemplates_ida', 'contacts_idb', 'many-to-many', NULL, NULL, 0, 0),
('26d23bb4-901d-f38b-8a4b-636e60ac6b64', 'prospects_assigned_user', 'Users', 'users', 'id', 'Prospects', 'prospects', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('27030575-d2c9-0203-c2cc-636e6079e1fa', 'contacts_users', 'Contacts', 'contacts', 'id', 'Users', 'users', 'id', 'contacts_users', 'contact_id', 'user_id', 'many-to-many', NULL, NULL, 0, 0),
('2785c6a7-2576-4e5e-b6e1-636e60ab099a', 'bug_emails', 'Bugs', 'bugs', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Bugs', 0, 0),
('2800082d-3fb3-7c74-983c-636e608c9f39', 'aop_case_events_modified_user', 'Users', 'users', 'id', 'AOP_Case_Events', 'aop_case_events', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('287cf843-f65c-dd75-fa60-636e6054a645', 'inbound_email_created_by', 'Users', 'users', 'id', 'InboundEmail', 'inbound_email', 'created_by', NULL, NULL, NULL, 'one-to-one', NULL, NULL, 0, 0),
('294afca5-8817-a7f3-13dd-636e60e5ad06', 'opportunity_aos_quotes', 'Opportunities', 'opportunities', 'id', 'AOS_Quotes', 'aos_quotes', 'opportunity_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('29569b46-95a3-3ebc-e5b7-636e60d4ca8a', 'projects_notes', 'Project', 'project', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Project', 0, 0),
('295dff96-0fa5-6d44-bfa5-636e6024e0fb', 'project_tasks_emails', 'ProjectTask', 'project_task', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'ProjectTask', 0, 0),
('2a278860-18f5-a598-f756-636e60e3a147', 'aok_knowledgebase_assigned_user', 'Users', 'users', 'id', 'AOK_KnowledgeBase', 'aok_knowledgebase', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2a5495a2-923e-a0f5-dc6b-636e606b68f6', 'account_aos_contracts', 'Accounts', 'accounts', 'id', 'AOS_Contracts', 'aos_contracts', 'contract_account_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2a9f4d22-1e72-795c-b6b4-636e601ad72a', 'securitygroups_surveys', 'SecurityGroups', 'securitygroups', 'id', 'Surveys', 'surveys', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'Surveys', 0, 0),
('2abcac75-6aca-0b4c-dc0b-636e606581ab', 'securitygroups_spots', 'SecurityGroups', 'securitygroups', 'id', 'Spots', 'spots', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'Spots', 0, 0),
('2ac50433-0900-8d5e-a3aa-636e60ee8224', 'aow_workflow_aow_actions', 'AOW_WorkFlow', 'aow_workflow', 'id', 'AOW_Actions', 'aow_actions', 'aow_workflow_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2b5384a4-7f23-7544-b445-636e60d9f3aa', 'contacts_email_addresses', 'Contacts', 'contacts', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'Contacts', 0, 0),
('2bd75413-110a-13d2-365d-636e60078602', 'aod_indexevent_modified_user', 'Users', 'users', 'id', 'AOD_IndexEvent', 'aod_indexevent', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2cd50ca7-118f-1722-83db-636e60c0dd7a', 'sugarfeed_assigned_user', 'Users', 'users', 'id', 'SugarFeed', 'sugarfeed', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2d5f0599-0ceb-9620-ca7c-636e601d9164', 'bug_tasks', 'Bugs', 'bugs', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Bugs', 0, 0),
('2e6060ae-3172-06a7-2412-636e6050038c', 'securitygroups_users', 'SecurityGroups', 'securitygroups', 'id', 'Users', 'users', 'id', 'securitygroups_users', 'securitygroup_id', 'user_id', 'many-to-many', NULL, NULL, 0, 0),
('2e8e82cb-7d06-8b53-4d7f-636e6055792a', 'securitygroups_cases', 'SecurityGroups', 'securitygroups', 'id', 'Cases', 'cases', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'Cases', 0, 0),
('2e9a47dc-a442-f67e-440b-636e60b2b446', 'aos_products_quotes_modified_user', 'Users', 'users', 'id', 'AOS_Products_Quotes', 'aos_products_quotes', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('2f140a7c-fd38-b795-81f4-636e605165e6', 'securitygroups_prospects', 'SecurityGroups', 'securitygroups', 'id', 'Prospects', 'prospects', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'Prospects', 0, 0),
('2f9c246c-974a-d1fe-7682-636e6074762f', 'alerts_assigned_user', 'Users', 'users', 'id', 'Alerts', 'alerts', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('315a6d58-7010-d8af-da9e-636e6088aa60', 'leads_email_addresses', 'Leads', 'leads', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'Leads', 0, 0),
('323b4bca-0300-61f5-fdc2-636e606b3ff8', 'aos_quotes_aos_line_item_groups', 'AOS_Quotes', 'aos_quotes', 'id', 'AOS_Line_Item_Groups', 'aos_line_item_groups', 'parent_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('323ef372-a584-b311-ecfb-636e6082d601', 'emails_assigned_user', 'Users', 'users', 'id', 'Emails', 'emails', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('32d934bd-2f0e-0040-6b3b-636e608d7b91', 'am_projecttemplates_users_1', 'AM_ProjectTemplates', 'am_projecttemplates', 'id', 'Users', 'users', 'id', 'am_projecttemplates_users_1_c', 'am_projecttemplates_ida', 'users_idb', 'many-to-many', NULL, NULL, 0, 0),
('32e37c70-654f-385a-6771-636e600e235d', 'emails_bugs_rel', 'Emails', 'emails', 'id', 'Bugs', 'bugs', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Bugs', 0, 0),
('32f14e01-dbfd-8bab-7e94-636e6088a5b1', 'project_tasks_assigned_user', 'Users', 'users', 'id', 'ProjectTask', 'project_task', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('32faebd6-2949-3db5-983d-636e605c9f66', 'prospect_list_users', 'ProspectLists', 'prospect_lists', 'id', 'Users', 'users', 'id', 'prospect_lists_prospects', 'prospect_list_id', 'related_id', 'many-to-many', 'related_type', 'Users', 0, 0),
('33b1c47a-9ada-ffc0-790b-636e604c681f', 'bug_notes', 'Bugs', 'bugs', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Bugs', 0, 0),
('33b54d9d-22e3-1913-5305-636e60ac8712', 'projects_tasks', 'Project', 'project', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Project', 0, 0),
('33fbc9d6-1a7c-5cb6-be34-636e60056fdc', 'opportunity_aos_contracts', 'Opportunities', 'opportunities', 'id', 'AOS_Contracts', 'aos_contracts', 'opportunity_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('345dc8f0-0414-3d54-a526-636e60f7d9c1', 'inbound_email_modified_user_id', 'Users', 'users', 'id', 'InboundEmail', 'inbound_email', 'modified_user_id', NULL, NULL, NULL, 'one-to-one', NULL, NULL, 0, 0),
('346d9cdf-db83-dd78-463f-636e607066e5', 'aor_reports_assigned_user', 'Users', 'users', 'id', 'AOR_Reports', 'aor_reports', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('35274250-c2d7-0079-329e-636e60358aeb', 'campaign_campaignlog', 'Campaigns', 'campaigns', 'id', 'CampaignLog', 'campaign_log', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('358209e6-9f46-ab96-ef87-636e6057779b', 'opportunity_leads', 'Opportunities', 'opportunities', 'id', 'Leads', 'leads', 'opportunity_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('3639270c-c7ca-5061-f967-636e609b1276', 'aow_workflow_aow_processed', 'AOW_WorkFlow', 'aow_workflow', 'id', 'AOW_Processed', 'aow_processed', 'aow_workflow_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('36d4d295-eaec-1fe7-f8f5-636e60bdfec5', 'contacts_email_addresses_primary', 'Contacts', 'contacts', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('36d619a8-8358-d8bf-173e-636e6007c30f', 'am_projecttemplates_modified_user', 'Users', 'users', 'id', 'AM_ProjectTemplates', 'am_projecttemplates', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('371ed1f5-a8b8-7ed8-7e63-636e601d76a7', 'surveys_surveyquestions', 'Surveys', 'surveys', 'id', 'SurveyQuestions', 'surveyquestions', 'survey_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('3791cee9-f973-7c48-10a9-636e60185bd5', 'aod_indexevent_created_by', 'Users', 'users', 'id', 'AOD_IndexEvent', 'aod_indexevent', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('37a7beca-1003-c0e9-6465-636e604a3ed4', 'favorites_modified_user', 'Users', 'users', 'id', 'Favorites', 'favorites', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('39f7130a-c678-8ef5-836d-636e60084f62', 'accounts_modified_user', 'Users', 'users', 'id', 'Accounts', 'accounts', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('3aa65b36-ee0a-70c7-740b-636e6015468a', 'aos_products_quotes_created_by', 'Users', 'users', 'id', 'AOS_Products_Quotes', 'aos_products_quotes', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('3ac57420-f57d-f363-d103-636e60c0ffde', 'surveyquestionoptions_surveyquestionresponses', 'SurveyQuestionOptions', 'surveyquestionoptions', 'id', 'SurveyQuestionResponses', 'surveyquestionresponses', 'id', 'surveyquestionoptions_surveyquestionresponses', 'surveyq72c7options_ida', 'surveyq10d4sponses_idb', 'many-to-many', NULL, NULL, 0, 0),
('3af4faf4-8a9c-e611-aa64-636e60d8b3ea', 'prospects_email_addresses', 'Prospects', 'prospects', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'Prospects', 0, 0),
('3b069579-c607-ab0d-19da-636e601d03d0', 'am_tasktemplates_am_projecttemplates', 'AM_ProjectTemplates', 'am_projecttemplates', 'id', 'AM_TaskTemplates', 'am_tasktemplates', 'id', 'am_tasktemplates_am_projecttemplates_c', 'am_tasktemplates_am_projecttemplatesam_projecttemplates_ida', 'am_tasktemplates_am_projecttemplatesam_tasktemplates_idb', 'many-to-many', NULL, NULL, 0, 0),
('3b5a77a0-493a-0d57-8957-636e609ddff6', 'prospect_list_accounts', 'ProspectLists', 'prospect_lists', 'id', 'Accounts', 'accounts', 'id', 'prospect_lists_prospects', 'prospect_list_id', 'related_id', 'many-to-many', 'related_type', 'Accounts', 0, 0),
('3b6df64b-121d-13a0-6fce-636e60dc2a02', 'securitygroups_emails', 'SecurityGroups', 'securitygroups', 'id', 'Emails', 'emails', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'Emails', 0, 0),
('3bec7cdf-ad3c-4f21-de04-636e60baaff2', 'securitygroups_aok_knowledgebase', 'SecurityGroups', 'securitygroups', 'id', 'AOK_KnowledgeBase', 'aok_knowledgebase', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'AOK_KnowledgeBase', 0, 0),
('3c2b83f6-8437-62f7-a884-636e60aa7f93', 'fp_events_modified_user', 'Users', 'users', 'id', 'FP_events', 'fp_events', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('3c715800-0257-162e-eb8a-636e6070ac49', 'schedulers_created_by_rel', 'Users', 'users', 'id', 'Schedulers', 'schedulers', 'created_by', NULL, NULL, NULL, 'one-to-one', NULL, NULL, 0, 0),
('3d2bc119-1df5-f307-eaed-636e602e511a', 'case_calls', 'Cases', 'cases', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Cases', 0, 0),
('3d743f65-1878-ab6a-a327-636e60ffc90e', 'campaign_assigned_user', 'Users', 'users', 'id', 'Campaigns', 'campaigns', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('3e84fb00-ce21-c00f-ff63-636e60086475', 'emails_cases_rel', 'Emails', 'emails', 'id', 'Cases', 'cases', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Cases', 0, 0),
('3edb7864-c775-32f6-09ea-636e608c610b', 'projects_meetings', 'Project', 'project', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Project', 0, 0),
('3eef07c8-2067-0506-5010-636e604347f9', 'contact_direct_reports', 'Contacts', 'contacts', 'id', 'Contacts', 'contacts', 'reports_to_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('3f10fa29-f7d3-18ae-8748-636e60405e27', 'surveys_surveyresponses', 'Surveys', 'surveys', 'id', 'SurveyResponses', 'surveyresponses', 'survey_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('400f5e7f-3f72-86e4-4c88-636e6048d3fc', 'aod_indexevent_assigned_user', 'Users', 'users', 'id', 'AOD_IndexEvent', 'aod_indexevent', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4028a2dd-1b0e-b578-5ca2-636e60e4bb71', 'project_tasks_modified_user', 'Users', 'users', 'id', 'ProjectTask', 'project_task', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('40f32d89-ec34-5e21-735a-636e60a2118d', 'favorites_created_by', 'Users', 'users', 'id', 'Favorites', 'favorites', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('40feb663-88b4-657c-a808-636e60282a77', 'aos_product_categories_modified_user', 'Users', 'users', 'id', 'AOS_Product_Categories', 'aos_product_categories', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4132eff6-ef8e-37a0-519c-636e60100098', 'eapm_modified_user', 'Users', 'users', 'id', 'EAPM', 'eapm', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4258057f-86a2-5e95-1554-636e60873773', 'aow_workflow_assigned_user', 'Users', 'users', 'id', 'AOW_WorkFlow', 'aow_workflow', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('428a5122-ee69-2acb-33d1-636e6003a6df', 'securitygroups_aor_reports', 'SecurityGroups', 'securitygroups', 'id', 'AOR_Reports', 'aor_reports', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'AOR_Reports', 0, 0),
('42e8b819-4561-fc1d-65d9-636e60b61836', 'templatesectionline_modified_user', 'Users', 'users', 'id', 'TemplateSectionLine', 'templatesectionline', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4366bc9e-b028-037d-ffd8-636e60bc6c07', 'am_projecttemplates_created_by', 'Users', 'users', 'id', 'AM_ProjectTemplates', 'am_projecttemplates', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('43a565cb-7fae-109d-ea33-636e607ecbcc', 'roles_users', 'Roles', 'roles', 'id', 'Users', 'users', 'id', 'roles_users', 'role_id', 'user_id', 'many-to-many', NULL, NULL, 0, 0),
('43b60071-40f1-e74e-5643-636e602e4aaa', 'bugs_release', 'Releases', 'releases', 'id', 'Bugs', 'bugs', 'found_in_release', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('44006e25-000d-42fe-2c40-636e60816af4', 'emails_notes_rel', 'Emails', 'emails', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('445a0301-d7b6-6eda-a1b0-636e60a60694', 'account_campaign_log', 'Accounts', 'accounts', 'id', 'CampaignLog', 'campaign_log', 'target_id', NULL, NULL, NULL, 'one-to-many', 'target_type', 'Accounts', 0, 0),
('456faeae-1f42-dba6-85d6-636e605c712e', 'accounts_created_by', 'Users', 'users', 'id', 'Accounts', 'accounts', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4678e731-2e88-0869-104a-636e6066018a', 'cases_aos_products_1', 'Cases', 'cases', 'id', 'AOS_Products', 'aos_products', 'id', 'cases_aos_products_1_c', 'cases_aos_products_1cases_ida', 'cases_aos_products_1aos_products_idb', 'many-to-many', NULL, NULL, 0, 0),
('46c5cfa9-d40a-b111-67f6-636e60f0f738', 'aos_products_quotes_assigned_user', 'Users', 'users', 'id', 'AOS_Products_Quotes', 'aos_products_quotes', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('46ca5861-993c-b31c-0366-636e60c11273', 'aos_contracts_documents', 'AOS_Contracts', 'aos_contracts', 'id', 'Documents', 'documents', 'id', 'aos_contracts_documents', 'aos_contracts_id', 'documents_id', 'many-to-many', NULL, NULL, 0, 0),
('480a57b8-2d55-5335-22c7-636e60f8e870', 'schedulers_modified_user_id_rel', 'Users', 'users', 'id', 'Schedulers', 'schedulers', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('48ffa8b4-e6ea-2987-5c49-636e60847aa8', 'aos_product_categories_created_by', 'Users', 'users', 'id', 'AOS_Product_Categories', 'aos_product_categories', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('490a3100-c8cb-1a2c-5a3b-636e60639e57', 'eapm_created_by', 'Users', 'users', 'id', 'EAPM', 'eapm', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4b8846c8-bba0-ef8a-bdfe-636e604f09a6', 'surveys_campaigns', 'Surveys', 'surveys', 'id', 'Campaigns', 'campaigns', 'survey_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4ba4ce60-5d01-8728-6ccd-636e60b955c2', 'aor_reports_aor_fields', 'AOR_Reports', 'aor_reports', 'id', 'AOR_Fields', 'aor_fields', 'aor_report_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4bd0f4b3-dd05-8f3e-a374-636e60710aca', 'favorites_assigned_user', 'Users', 'users', 'id', 'Favorites', 'favorites', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4c4bdcea-1d5d-3849-d9fe-636e60e51047', 'templatesectionline_created_by', 'Users', 'users', 'id', 'TemplateSectionLine', 'templatesectionline', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4df7f3af-47ee-a753-663a-636e60f0d2ee', 'contact_leads', 'Contacts', 'contacts', 'id', 'Leads', 'leads', 'contact_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4ed2cac5-5bac-1d2c-9b75-636e60b74307', 'project_tasks_created_by', 'Users', 'users', 'id', 'ProjectTask', 'project_task', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4ef18e15-29aa-a1af-7b46-636e60c4f64b', 'emails_opportunities_rel', 'Emails', 'emails', 'id', 'Opportunities', 'opportunities', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Opportunities', 0, 0),
('4f1720d8-900d-2ffe-db8a-636e60b76c40', 'emails_contacts_rel', 'Emails', 'emails', 'id', 'Contacts', 'contacts', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Contacts', 0, 0),
('4f38aa6a-5205-8fcf-8682-636e608c0e65', 'projects_bugs', 'Project', 'project', 'id', 'Bugs', 'bugs', 'id', 'projects_bugs', 'project_id', 'bug_id', 'many-to-many', NULL, NULL, 0, 0),
('4ff0f1b7-4262-0682-bd3c-636e60467a81', 'aos_product_quotes_aos_products', 'AOS_Products', 'aos_products', 'id', 'AOS_Products_Quotes', 'aos_products_quotes', 'product_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('4ff94a2b-534f-378b-ea10-636e60b68c7b', 'am_projecttemplates_assigned_user', 'Users', 'users', 'id', 'AM_ProjectTemplates', 'am_projecttemplates', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5020c7b4-57bd-5a15-f586-636e60840d61', 'leads_email_addresses_primary', 'Leads', 'leads', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('50521a8b-e9f1-68ec-0ed9-636e603a51e9', 'accounts_assigned_user', 'Users', 'users', 'id', 'Accounts', 'accounts', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5187153b-d7f1-24e0-0be4-636e6010abee', 'aos_invoices_modified_user', 'Users', 'users', 'id', 'AOS_Invoices', 'aos_invoices', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('51af051c-2e22-d986-af45-636e6089ca28', 'contacts_modified_user', 'Users', 'users', 'id', 'Contacts', 'contacts', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5333cb9e-9e07-aabf-e55b-636e60e5ff63', 'aos_quotes_aos_contracts', 'AOS_Quotes', 'aos_quotes', 'id', 'AOS_Contracts', 'aos_contracts', 'id', 'aos_quotes_os_contracts_c', 'aos_quotese81e_quotes_ida', 'aos_quotes4dc0ntracts_idb', 'many-to-many', NULL, NULL, 0, 0),
('53a81dc7-7243-0d16-773e-636e60a837f6', 'fp_events_created_by', 'Users', 'users', 'id', 'FP_events', 'fp_events', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('53e517be-67e6-6b94-0c45-636e606943c6', 'aos_product_categories_assigned_user', 'Users', 'users', 'id', 'AOS_Product_Categories', 'aos_product_categories', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('54017204-1c6c-3c79-329a-636e6040a28e', 'case_tasks', 'Cases', 'cases', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Cases', 0, 0),
('56a7024e-faaf-2072-3fc8-636e60a5f2b7', 'lead_direct_reports', 'Leads', 'leads', 'id', 'Leads', 'leads', 'reports_to_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('56aedf4b-3eb4-dc25-ec5a-636e60d8cc3e', 'aop_case_updates_modified_user', 'Users', 'users', 'id', 'AOP_Case_Updates', 'aop_case_updates', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('57401173-343c-56af-cebc-636e607c05e6', 'contact_notes', 'Contacts', 'contacts', 'id', 'Notes', 'notes', 'contact_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5758b04a-23ea-f7f3-737b-636e602dadb3', 'projects_cases', 'Project', 'project', 'id', 'Cases', 'cases', 'id', 'projects_cases', 'project_id', 'case_id', 'many-to-many', NULL, NULL, 0, 0),
('576c0fa8-20f4-e6d4-9958-636e60d489d9', 'eapm_assigned_user', 'Users', 'users', 'id', 'EAPM', 'eapm', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('59e9014b-5fcf-88b2-58d1-636e60be17f1', 'aos_invoices_created_by', 'Users', 'users', 'id', 'AOS_Invoices', 'aos_invoices', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5a0e8daf-d300-7460-8283-636e60179486', 'aor_reports_aor_conditions', 'AOR_Reports', 'aor_reports', 'id', 'AOR_Conditions', 'aor_conditions', 'aor_report_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5adbb968-931f-5456-be67-636e60acd4d4', 'emails_accounts_rel', 'Emails', 'emails', 'id', 'Accounts', 'accounts', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Accounts', 0, 0),
('5b5042e9-7dfa-157b-ef94-636e60d910b3', 'fp_events_assigned_user', 'Users', 'users', 'id', 'FP_events', 'fp_events', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5bb18ed1-6eea-c3b0-fd70-636e604aa44f', 'securitygroups_aos_product_categories', 'SecurityGroups', 'securitygroups', 'id', 'AOS_Product_Categories', 'aos_product_categories', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'AOS_Product_Categories', 0, 0),
('5bfb67ce-ca07-1e28-7ddd-636e60c061fc', 'case_notes', 'Cases', 'cases', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Cases', 0, 0),
('5c7d0d84-8c5e-8b81-fb3a-636e6002f787', 'surveyquestionoptions_modified_user', 'Users', 'users', 'id', 'SurveyQuestionOptions', 'surveyquestionoptions', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5d37c0b0-acee-9d58-e562-636e60789978', 'emails_tasks_rel', 'Emails', 'emails', 'id', 'Tasks', 'tasks', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Tasks', 0, 0),
('5d504d6e-fd89-80ef-0331-636e601d5335', 'tasks_modified_user', 'Users', 'users', 'id', 'Tasks', 'tasks', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5da60c97-dc12-a4be-dea9-636e6051eecf', 'campaign_opportunities', 'Campaigns', 'campaigns', 'id', 'Opportunities', 'opportunities', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5e33e40d-5591-29ed-bb1d-636e6025c1cb', 'campaign_modified_user', 'Users', 'users', 'id', 'Campaigns', 'campaigns', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5ecdb568-5561-9e90-e67d-636e600f76fd', 'prospects_email_addresses_primary', 'Prospects', 'prospects', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('5ef205ac-8d15-4cdc-ad6d-636e60c61843', 'cases_bugs', 'Cases', 'cases', 'id', 'Bugs', 'bugs', 'id', 'cases_bugs', 'case_id', 'bug_id', 'many-to-many', NULL, NULL, 0, 0),
('5f374276-a538-c0ca-6e78-636e606bedc2', 'aos_quotes_aos_invoices', 'AOS_Quotes', 'aos_quotes', 'id', 'AOS_Invoices', 'aos_invoices', 'id', 'aos_quotes_aos_invoices_c', 'aos_quotes77d9_quotes_ida', 'aos_quotes6b83nvoices_idb', 'many-to-many', NULL, NULL, 0, 0),
('5fb4fa7a-55f0-fb5b-f06c-636e60fc2b9c', 'calls_reschedule_modified_user', 'Users', 'users', 'id', 'Calls_Reschedule', 'calls_reschedule', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('5fca98fb-a1c2-c95b-1e1c-636e603fae5d', 'projects_calls', 'Project', 'project', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Project', 0, 0),
('60aae121-a63a-232d-5eef-636e602c1215', 'lead_tasks', 'Leads', 'leads', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Leads', 0, 0),
('61183690-0c47-6b2d-4252-636e60ba135f', 'aos_contracts_modified_user', 'Users', 'users', 'id', 'AOS_Contracts', 'aos_contracts', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('61b2493a-17ab-8798-3f2f-636e60e95fa6', 'calls_modified_user', 'Users', 'users', 'id', 'Calls', 'calls', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('621768c0-694a-2972-3166-636e6018ab2c', 'jjwg_areas_modified_user', 'Users', 'users', 'id', 'jjwg_Areas', 'jjwg_areas', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('62b44ad3-94a6-0951-4c05-636e60d8b3d4', 'projects_accounts', 'Project', 'project', 'id', 'Accounts', 'accounts', 'id', 'projects_accounts', 'project_id', 'account_id', 'many-to-many', NULL, NULL, 0, 0),
('62ee0ee6-5e67-31e0-e925-636e60604f83', 'project_tasks_tasks', 'ProjectTask', 'project_task', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'ProjectTask', 0, 0),
('638f7203-c539-3132-cef6-636e6045b148', 'aop_case_updates_created_by', 'Users', 'users', 'id', 'AOP_Case_Updates', 'aop_case_updates', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('63a61f19-d04f-e3c4-057f-636e60baeb5c', 'securitygroups_fp_events', 'SecurityGroups', 'securitygroups', 'id', 'FP_events', 'fp_events', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'FP_events', 0, 0),
('6472b507-cecc-4e7e-1fb9-636e604b9842', 'case_meetings', 'Cases', 'cases', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Cases', 0, 0),
('64b9e699-74e0-0753-9175-636e600ed822', 'bugs_fixed_in_release', 'Releases', 'releases', 'id', 'Bugs', 'bugs', 'fixed_in_release', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('65692493-65bf-9122-08f5-636e60f9c35a', 'emails_leads_rel', 'Emails', 'emails', 'id', 'Leads', 'leads', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Leads', 0, 0),
('65c70211-2123-2c25-6e13-636e608bc479', 'aos_invoices_assigned_user', 'Users', 'users', 'id', 'AOS_Invoices', 'aos_invoices', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('66e2b6f2-e0f5-bc35-1075-636e604983b3', 'aor_scheduled_reports_aor_reports', 'AOR_Reports', 'aor_reports', 'id', 'AOR_Scheduled_Reports', 'aor_scheduled_reports', 'aor_report_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('66fd077b-19ec-b86d-a3fc-636e6036d97c', 'surveyquestions_created_by', 'Users', 'users', 'id', 'SurveyQuestions', 'surveyquestions', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('688936a9-eb56-3b88-2bb5-636e60ce86cf', 'surveyquestionoptions_created_by', 'Users', 'users', 'id', 'SurveyQuestionOptions', 'surveyquestionoptions', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('688f4f71-d200-a43d-773e-636e600c234b', 'emails_users_rel', 'Emails', 'emails', 'id', 'Users', 'users', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Users', 0, 0),
('68f285a2-edf5-a4a3-0bc0-636e600037c4', 'tasks_created_by', 'Users', 'users', 'id', 'Tasks', 'tasks', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('69632658-2be3-e468-6aff-636e60f6c38b', 'schedulers_jobs_rel', 'Schedulers', 'schedulers', 'id', 'SchedulersJobs', 'job_queue', 'scheduler_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('6967d0e0-1820-bcbc-56ce-636e60566578', 'calls_created_by', 'Users', 'users', 'id', 'Calls', 'calls', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('6a21f258-6b51-f69f-268d-636e6044fadd', 'prospect_tasks', 'Prospects', 'prospects', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Prospects', 0, 0),
('6b7255ba-778a-16d5-78db-636e605abcce', 'sub_product_categories', 'AOS_Product_Categories', 'aos_product_categories', 'id', 'AOS_Product_Categories', 'aos_product_categories', 'parent_category_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('6bbe4658-30fb-495b-95e4-636e6069a5e5', 'projects_emails', 'Project', 'project', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Project', 0, 0),
('6c0057a5-0f76-151e-de3a-636e606dc862', 'calls_reschedule_created_by', 'Users', 'users', 'id', 'Calls_Reschedule', 'calls_reschedule', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('6c3048fc-8221-4839-41b7-636e609edb5c', 'projects_contacts', 'Project', 'project', 'id', 'Contacts', 'contacts', 'id', 'projects_contacts', 'project_id', 'contact_id', 'many-to-many', NULL, NULL, 0, 0),
('6c3e371f-da29-95e5-da40-636e60f14b5a', 'contact_tasks', 'Contacts', 'contacts', 'id', 'Tasks', 'tasks', 'contact_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('6c418a18-4d51-14b5-8d8a-636e60c352bc', 'aop_case_updates_assigned_user', 'Users', 'users', 'id', 'AOP_Case_Updates', 'aop_case_updates', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('6c652444-ef1b-da45-fab5-636e6090b9c1', 'jjwg_areas_created_by', 'Users', 'users', 'id', 'jjwg_Areas', 'jjwg_areas', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('6c915078-46ab-74ed-8b7f-636e60dbc2fc', 'aos_contracts_created_by', 'Users', 'users', 'id', 'AOS_Contracts', 'aos_contracts', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('6ca67bdd-decb-52d9-c572-636e6097afac', 'documents_modified_user', 'Users', 'users', 'id', 'Documents', 'documents', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('7009e013-ef6c-a5c4-cf41-636e6012c269', 'surveyresponses_campaigns', 'Campaigns', 'campaigns', 'id', 'SurveyResponses', 'surveyresponses', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('70b3447b-6834-e161-bc5c-636e60cc38b6', 'lead_notes', 'Leads', 'leads', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Leads', 0, 0),
('70c4c8ec-d484-8d3f-8d27-636e6011ce1c', 'securitygroups_aos_invoices', 'SecurityGroups', 'securitygroups', 'id', 'AOS_Invoices', 'aos_invoices', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'AOS_Invoices', 0, 0),
('70e30f0f-aea8-50e0-0739-636e60ca8093', 'reminders_modified_user', 'Users', 'users', 'id', 'Reminders', 'reminders', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('72471311-c16d-0cba-dc0c-636e6025b19f', 'aos_quotes_project', 'AOS_Quotes', 'aos_quotes', 'id', 'Project', 'project', 'id', 'aos_quotes_project_c', 'aos_quotes1112_quotes_ida', 'aos_quotes7207project_idb', 'many-to-many', NULL, NULL, 0, 0),
('73e7ceb9-cf4d-9780-8990-636e60c100ab', 'emails_project_task_rel', 'Emails', 'emails', 'id', 'ProjectTask', 'project_task', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'ProjectTask', 0, 0),
('742836fd-7108-10ec-671f-636e60efb174', 'case_emails', 'Cases', 'cases', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Cases', 0, 0),
('746d09b3-612f-f576-a217-636e60f0e8a7', 'jjwg_address_cache_created_by', 'Users', 'users', 'id', 'jjwg_Address_Cache', 'jjwg_address_cache', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('74eded4d-8463-3e74-f1e4-636e60b93122', 'user_direct_reports', 'Users', 'users', 'id', 'Users', 'users', 'reports_to_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('752d7fd5-5b11-362b-7e71-636e60a1096e', 'prospect_notes', 'Prospects', 'prospects', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Prospects', 0, 0),
('771b44e3-da71-f091-64bc-636e606e302d', 'jjwg_maps_modified_user', 'Users', 'users', 'id', 'jjwg_Maps', 'jjwg_maps', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('776d0da2-3c82-1fbf-515c-636e608eab5d', 'emails_aos_contracts_rel', 'Emails', 'emails', 'id', 'AOS_Contracts', 'aos_contracts', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'AOS_Contracts', 0, 0),
('7770030e-44c6-0794-ccd8-636e6052412e', 'calls_reschedule_assigned_user', 'Users', 'users', 'id', 'Calls_Reschedule', 'calls_reschedule', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('77a1e64d-571a-8b18-47c5-636e60f6e76d', 'documents_created_by', 'Users', 'users', 'id', 'Documents', 'documents', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('77a9d4cc-be6e-5dc1-90d1-636e601be8db', 'cases_aop_case_updates', 'Cases', 'cases', 'id', 'AOP_Case_Updates', 'aop_case_updates', 'case_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('77b26fec-e496-9b27-fdae-636e60fa518f', 'jjwg_areas_assigned_user', 'Users', 'users', 'id', 'jjwg_Areas', 'jjwg_areas', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('77b40061-55ff-3332-1930-636e60ea18ca', 'aos_contracts_assigned_user', 'Users', 'users', 'id', 'AOS_Contracts', 'aos_contracts', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('7869a3f5-4fc9-9844-fb6c-636e60f7642e', 'saved_search_assigned_user', 'Users', 'users', 'id', 'SavedSearch', 'saved_search', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('78cad0ec-d715-c739-a80f-636e6016bd19', 'surveyquestionoptions_assigned_user', 'Users', 'users', 'id', 'SurveyQuestionOptions', 'surveyquestionoptions', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('78fcd6f4-0502-2869-650a-636e60d9f6be', 'reminders_created_by', 'Users', 'users', 'id', 'Reminders', 'reminders', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('79650589-e7a4-d153-33b7-636e603b2d85', 'aor_conditions_modified_user', 'Users', 'users', 'id', 'AOR_Conditions', 'aor_conditions', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('7a44ab49-4a13-770b-3140-636e60b480d2', 'aod_index_modified_user', 'Users', 'users', 'id', 'AOD_Index', 'aod_index', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('7a69ee24-d85d-7a18-e6c4-636e6004adfc', 'projects_project_tasks', 'Project', 'project', 'id', 'ProjectTask', 'project_task', 'project_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('7b87a254-fd30-b0af-fd0c-636e609a0463', 'securitygroups_accounts', 'SecurityGroups', 'securitygroups', 'id', 'Accounts', 'accounts', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'Accounts', 0, 0),
('7bb4afc2-b5bd-9580-1602-636e60e2176d', 'aow_processed_aow_actions', 'AOW_Processed', 'aow_processed', 'id', 'AOW_Actions', 'aow_actions', 'id', 'aow_processed_aow_actions', 'aow_processed_id', 'aow_action_id', 'many-to-many', NULL, NULL, 0, 0),
('7c1a492d-555a-1e0a-8cf8-636e608c9aba', 'projects_opportunities', 'Project', 'project', 'id', 'Opportunities', 'opportunities', 'id', 'projects_opportunities', 'project_id', 'opportunity_id', 'many-to-many', NULL, NULL, 0, 0),
('7cc56f08-1a83-4b5b-6214-636e60f4a94a', 'lead_meetings', 'Leads', 'leads', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Leads', 0, 0),
('7cd50ba7-87bd-8ce5-3c3c-636e60de46d1', 'aop_case_events_created_by', 'Users', 'users', 'id', 'AOP_Case_Events', 'aop_case_events', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('7d33baab-d4c7-df69-081f-636e603b9796', 'prospect_meetings', 'Prospects', 'prospects', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Prospects', 0, 0),
('7e8d0f2f-f5a4-4e4a-6e33-636e6002094d', 'aok_knowledgebase_modified_user', 'Users', 'users', 'id', 'AOK_KnowledgeBase', 'aok_knowledgebase', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('7f83acae-106c-1d6a-c0b7-636e6021463b', 'securitygroups_aos_contracts', 'SecurityGroups', 'securitygroups', 'id', 'AOS_Contracts', 'aos_contracts', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'AOS_Contracts', 0, 0),
('7fb3e893-a1bc-ae43-8ea1-636e607aed21', 'aos_invoices_aos_product_quotes', 'AOS_Invoices', 'aos_invoices', 'id', 'AOS_Products_Quotes', 'aos_products_quotes', 'parent_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('802ad1e9-85b6-760d-472b-636e6001777d', 'emails_projects_rel', 'Emails', 'emails', 'id', 'Project', 'project', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Project', 0, 0),
('805abc4a-ab0f-512d-4304-636e600eb06e', 'cases_created_contact', 'Contacts', 'contacts', 'id', 'Cases', 'cases', 'contact_created_by_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('8098b90c-dc1a-8c85-d5ab-636e6045ee07', 'surveyresponses_modified_user', 'Users', 'users', 'id', 'SurveyResponses', 'surveyresponses', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('80f2e99d-8e7e-48e0-5623-636e600c06a5', 'users_users_password_link', 'Users', 'users', 'id', NULL, 'users_signatures', 'user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('8138c00e-919d-1a37-7c36-636e606511e2', 'aor_conditions_created_by', 'Users', 'users', 'id', 'AOR_Conditions', 'aor_conditions', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0);
INSERT INTO `relationships` (`id`, `relationship_name`, `lhs_module`, `lhs_table`, `lhs_key`, `rhs_module`, `rhs_table`, `rhs_key`, `join_table`, `join_key_lhs`, `join_key_rhs`, `relationship_type`, `relationship_role_column`, `relationship_role_column_value`, `reverse`, `deleted`) VALUES
('81d11e72-9b66-7b3a-167c-636e608c0d66', 'contact_tasks_parent', 'Contacts', 'contacts', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Contacts', 0, 0),
('8243d4a3-0faa-e905-6edd-636e602bd071', 'aow_actions_modified_user', 'Users', 'users', 'id', 'AOW_Actions', 'aow_actions', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('829b7cd1-5cf4-1274-5420-636e6092c6d4', 'calls_assigned_user', 'Users', 'users', 'id', 'Calls', 'calls', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('8460a537-9ac4-2a40-e298-636e608430bd', 'aos_line_item_groups_modified_user', 'Users', 'users', 'id', 'AOS_Line_Item_Groups', 'aos_line_item_groups', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('847016f9-0790-3a36-532c-636e6042559e', 'fp_event_locations_fp_events_1', 'FP_Event_Locations', 'fp_event_locations', 'id', 'FP_events', 'fp_events', 'id', 'fp_event_locations_fp_events_1_c', 'fp_event_locations_fp_events_1fp_event_locations_ida', 'fp_event_locations_fp_events_1fp_events_idb', 'many-to-many', NULL, NULL, 0, 0),
('84a0e907-a251-a5fd-59f2-636e60b72dbf', 'securitygroups_jjwg_areas', 'SecurityGroups', 'securitygroups', 'id', 'jjwg_Areas', 'jjwg_areas', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'jjwg_Areas', 0, 0),
('85ab1b29-2fc4-84cd-fb7f-636e6027e2a4', 'projects_assigned_user', 'Users', 'users', 'id', 'Project', 'project', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('861dbdc1-c937-a436-0daa-636e60ff43eb', 'aobh_businesshours_modified_user', 'Users', 'users', 'id', 'AOBH_BusinessHours', 'aobh_businesshours', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('86927815-e017-f000-933e-636e60ee9917', 'oauth2tokens_modified_user', 'Users', 'users', 'id', 'OAuth2Tokens', 'oauth2tokens', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('86c10844-d3ec-7802-bfc5-636e60549339', 'jjwg_maps_created_by', 'Users', 'users', 'id', 'jjwg_Maps', 'jjwg_maps', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('87fdf307-772e-dec3-41bb-636e60d7ef84', 'lead_calls', 'Leads', 'leads', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Leads', 0, 0),
('880aa1aa-a218-a78a-623f-636e60a1608c', 'accounts_email_addresses', 'Accounts', 'accounts', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'Accounts', 0, 0),
('886561b7-3d3f-4a96-b3ae-636e60c671aa', 'acl_roles_actions', 'ACLRoles', 'acl_roles', 'id', 'ACLActions', 'acl_actions', 'id', 'acl_roles_actions', 'role_id', 'action_id', 'many-to-many', NULL, NULL, 0, 0),
('88a8e2ad-73cd-ad5b-7a7b-636e606420c1', 'prospect_calls', 'Prospects', 'prospects', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Prospects', 0, 0),
('8912f9a4-a2ea-d1e8-3f9e-636e60d43871', 'securitygroups_surveyquestionoptions', 'SecurityGroups', 'securitygroups', 'id', 'SurveyQuestionOptions', 'surveyquestionoptions', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'SurveyQuestionOptions', 0, 0),
('89810903-289c-ddf2-3d44-636e60c97d1d', 'campaign_campaigntrakers', 'Campaigns', 'campaigns', 'id', 'CampaignTrackers', 'campaign_trkrs', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('8a1624f0-b004-9526-cf08-636e60bb520d', 'emails_meetings_rel', 'Emails', 'emails', 'id', 'Meetings', 'meetings', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Meetings', 0, 0),
('8a885c39-62ef-fdce-db6c-636e60e0d220', 'aow_actions_created_by', 'Users', 'users', 'id', 'AOW_Actions', 'aow_actions', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('8b6bff8f-7daa-0b16-97ba-636e60a496fc', 'aos_contracts_tasks', 'AOS_Contracts', 'aos_contracts', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'AOS_Contracts', 0, 0),
('8c61ca59-f296-2675-2584-636e6067b46f', 'securitygroups_calls', 'SecurityGroups', 'securitygroups', 'id', 'Calls', 'calls', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'Calls', 0, 0),
('8c66a57c-e6d6-ed25-d9ff-636e609d86b1', 'surveyresponses_created_by', 'Users', 'users', 'id', 'SurveyResponses', 'surveyresponses', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('8cd4cbaf-9e54-124a-1407-636e600d763f', 'securitygroups_emailtemplates', 'SecurityGroups', 'securitygroups', 'id', 'EmailTemplates', 'email_templates', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'EmailTemplates', 0, 0),
('8d646ee4-228e-fda9-75a2-636e6019dba6', 'projects_modified_user', 'Users', 'users', 'id', 'Project', 'project', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('8e210910-55a8-6bc0-55e1-636e6031fef3', 'reminders_assigned_user', 'Users', 'users', 'id', 'Reminders', 'reminders', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('90068044-ab4e-7379-cda7-636e60a046fe', 'oauth2tokens_created_by', 'Users', 'users', 'id', 'OAuth2Tokens', 'oauth2tokens', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('90104688-2036-d7c1-4b6f-636e60c1d858', 'lead_emails', 'Leads', 'leads', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Leads', 0, 0),
('9017bdac-ad4f-ab6f-d323-636e600f7d88', 'aos_line_item_groups_created_by', 'Users', 'users', 'id', 'AOS_Line_Item_Groups', 'aos_line_item_groups', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('9050b97d-9453-2fb3-a478-636e6008b8d7', 'users_email_addresses', 'Users', 'users', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'Users', 0, 0),
('9071165b-bf0c-7327-9d14-636e60cd188e', 'tasks_assigned_user', 'Users', 'users', 'id', 'Tasks', 'tasks', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('90834127-f49b-f9af-86ee-636e6087a937', 'accounts_email_addresses_primary', 'Accounts', 'accounts', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('90b5621f-afc7-abf3-2a6f-636e60c926d9', 'aos_invoices_aos_line_item_groups', 'AOS_Invoices', 'aos_invoices', 'id', 'AOS_Line_Item_Groups', 'aos_line_item_groups', 'parent_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('91d82fbc-613e-c442-3112-636e60a8a659', 'jjwg_maps_assigned_user', 'Users', 'users', 'id', 'jjwg_Maps', 'jjwg_maps', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('927a4112-bf82-b9df-c4d3-636e603dd6a0', 'fp_events_contacts', 'FP_events', 'fp_events', 'id', 'Contacts', 'contacts', 'id', 'fp_events_contacts_c', 'fp_events_contactsfp_events_ida', 'fp_events_contactscontacts_idb', 'many-to-many', NULL, NULL, 0, 0),
('9486b9c6-1ad5-2456-0639-636e603e338c', 'emails_prospects_rel', 'Emails', 'emails', 'id', 'Prospects', 'prospects', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Prospects', 0, 0),
('951fc0f8-f958-736f-46d9-636e60cf9d8f', 'documents_assigned_user', 'Users', 'users', 'id', 'Documents', 'documents', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('95698c7d-321a-60ae-7b92-636e60c5e86d', 'contact_notes_parent', 'Contacts', 'contacts', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Contacts', 0, 0),
('95a0d9cb-9d71-5d4f-7a69-636e60feb4c4', 'prospect_emails', 'Prospects', 'prospects', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Prospects', 0, 0),
('9689d1aa-8e12-ab4f-3d1d-636e6059ebf8', 'oauthkeys_modified_user', 'Users', 'users', 'id', 'OAuthKeys', 'oauth_consumer', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('978e3280-b342-aba5-2caa-636e60c9de35', 'emailtemplates_assigned_user', 'Users', 'users', 'id', 'EmailTemplates', 'email_templates', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('97c0e0fe-58a8-a1ed-51ec-636e600ae46a', 'surveyresponses_assigned_user', 'Users', 'users', 'id', 'SurveyResponses', 'surveyresponses', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('98ec9105-a950-0084-de43-636e6073975a', 'acl_roles_users', 'ACLRoles', 'acl_roles', 'id', 'Users', 'users', 'id', 'acl_roles_users', 'role_id', 'user_id', 'many-to-many', NULL, NULL, 0, 0),
('990c7764-ad15-279e-7a4b-636e6030912e', 'aos_contracts_notes', 'AOS_Contracts', 'aos_contracts', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'AOS_Contracts', 0, 0),
('995cb660-aac9-20e3-0dc9-636e6000ddd0', 'aobh_businesshours_created_by', 'Users', 'users', 'id', 'AOBH_BusinessHours', 'aobh_businesshours', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('9b7da318-12a1-a0bb-e2ef-636e60b44d4e', 'lead_campaign_log', 'Leads', 'leads', 'id', 'CampaignLog', 'campaign_log', 'target_id', NULL, NULL, NULL, 'one-to-many', 'target_type', 'Leads', 0, 0),
('9cab2145-bddb-0e9f-eeb9-636e60b4d94a', 'surveyquestionresponses_modified_user', 'Users', 'users', 'id', 'SurveyQuestionResponses', 'surveyquestionresponses', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('9cbe2846-360f-d22a-bbc9-636e60d97b0d', 'securitygroups_tasks', 'SecurityGroups', 'securitygroups', 'id', 'Tasks', 'tasks', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'Tasks', 0, 0),
('9ce17c0a-01f0-3c5d-6f3e-636e6033e9a6', 'aos_line_item_groups_assigned_user', 'Users', 'users', 'id', 'AOS_Line_Item_Groups', 'aos_line_item_groups', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('9d25aa6b-1204-d17e-d2ef-636e60492755', 'securitygroups_documents', 'SecurityGroups', 'securitygroups', 'id', 'Documents', 'documents', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'Documents', 0, 0),
('9d2b2af5-bc07-b26f-afbe-636e60e81266', 'projects_created_by', 'Users', 'users', 'id', 'Project', 'project', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('9d315c06-56bb-c70d-67f9-636e600bcaea', 'securitygroups_jjwg_maps', 'SecurityGroups', 'securitygroups', 'id', 'jjwg_Maps', 'jjwg_maps', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'jjwg_Maps', 0, 0),
('9d33d293-965b-6dce-4e8c-636e60d2bd7f', 'users_email_addresses_primary', 'Users', 'users', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('9d3bdae6-4bfe-7013-5543-636e60ced31f', 'jjwg_markers_modified_user', 'Users', 'users', 'id', 'jjwg_Markers', 'jjwg_markers', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('9d3c8ca3-6828-6274-5cdf-636e60dbab9f', 'member_accounts', 'Accounts', 'accounts', 'id', 'Accounts', 'accounts', 'parent_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('9de007c3-a5ac-c612-0ed6-636e605af9d0', 'opportunities_modified_user', 'Users', 'users', 'id', 'Opportunities', 'opportunities', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('9eae05d9-a423-c1a6-1bd6-636e60b58da6', 'leads_created_by', 'Users', 'users', 'id', 'Leads', 'leads', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('9f4bd367-c967-d126-8eff-636e60a6d21a', 'aok_knowledge_base_categories_modified_user', 'Users', 'users', 'id', 'AOK_Knowledge_Base_Categories', 'aok_knowledge_base_categories', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('9f940e2d-1f00-de32-596b-636e60b23f41', 'oauth2clients_assigned_user', 'Users', 'users', 'id', 'OAuth2Clients', 'oauth2clients', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a0380898-23fd-3b55-5142-636e6056a62e', 'meetings_contacts', 'Meetings', 'meetings', 'id', 'Contacts', 'contacts', 'id', 'meetings_contacts', 'meeting_id', 'contact_id', 'many-to-many', NULL, NULL, 0, 0),
('a0c3df9b-c1db-043c-d88f-636e604b34bf', 'prospect_campaign_log', 'Prospects', 'prospects', 'id', 'CampaignLog', 'campaign_log', 'target_id', NULL, NULL, NULL, 'one-to-many', 'target_type', 'Prospects', 0, 0),
('a0cd1735-f96d-c99e-1ebf-636e60b19c75', 'fp_event_locations_modified_user', 'Users', 'users', 'id', 'FP_Event_Locations', 'fp_event_locations', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a1110528-0aeb-4672-d492-636e60d98861', 'spots_modified_user', 'Users', 'users', 'id', 'Spots', 'spots', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a11f0e47-0ddc-227d-e5a0-636e603afd7a', 'oauth2tokens_assigned_user', 'Users', 'users', 'id', 'OAuth2Tokens', 'oauth2tokens', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a12c67e3-7a64-2a8c-a0e4-636e609c1573', 'fp_events_fp_event_locations_1', 'FP_events', 'fp_events', 'id', 'FP_Event_Locations', 'fp_event_locations', 'id', 'fp_events_fp_event_locations_1_c', 'fp_events_fp_event_locations_1fp_events_ida', 'fp_events_fp_event_locations_1fp_event_locations_idb', 'many-to-many', NULL, NULL, 0, 0),
('a14e282c-1d37-b3fe-1541-636e60fbc077', 'accounts_bugs', 'Accounts', 'accounts', 'id', 'Bugs', 'bugs', 'id', 'accounts_bugs', 'account_id', 'bug_id', 'many-to-many', NULL, NULL, 0, 0),
('a220fb30-3777-a6c2-0c1e-636e606f8426', 'aod_index_created_by', 'Users', 'users', 'id', 'AOD_Index', 'aod_index', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a233ea4e-496f-f037-f50b-636e6029891b', 'schedulersjobs_assigned_user', 'Users', 'users', 'id', 'SchedulersJobs', 'job_queue', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a3e5cfca-1979-8e5f-c6ca-636e60321be7', 'aow_processed_modified_user', 'Users', 'users', 'id', 'AOW_Processed', 'aow_processed', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a49c05de-bed9-6824-7a67-636e60fb1edb', 'securitygroups_meetings', 'SecurityGroups', 'securitygroups', 'id', 'Meetings', 'meetings', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'Meetings', 0, 0),
('a5074ea7-3518-5c3c-6a50-636e60572d9f', 'document_revisions', 'Documents', 'documents', 'id', 'DocumentRevisions', 'document_revisions', 'document_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a50adcb3-5741-c498-5cfa-636e605ca77d', 'surveyquestionresponses_created_by', 'Users', 'users', 'id', 'SurveyQuestionResponses', 'surveyquestionresponses', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a50e626c-11c9-7955-47f9-636e60f02565', 'securitygroups_surveyresponses', 'SecurityGroups', 'securitygroups', 'id', 'SurveyResponses', 'surveyresponses', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'SurveyResponses', 0, 0),
('a5313efd-f8be-0857-cd31-636e609a09a4', 'calls_notes', 'Calls', 'calls', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Calls', 0, 0),
('a538602c-48cc-2806-e725-636e605e30af', 'email_marketing_prospect_lists', 'EmailMarketing', 'email_marketing', 'id', 'ProspectLists', 'prospect_lists', 'id', 'email_marketing_prospect_lists', 'email_marketing_id', 'prospect_list_id', 'many-to-many', NULL, NULL, 0, 0),
('a5568436-d46e-621d-d281-636e602fe9c9', 'oauthkeys_created_by', 'Users', 'users', 'id', 'OAuthKeys', 'oauth_consumer', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a7680ced-e6f4-8bf2-d04e-636e60fa83bb', 'jjwg_Maps_projects', 'jjwg_Maps', 'jjwg_Maps', 'parent_id', 'Project', 'project', 'id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Project', 0, 0),
('a76e8ed0-57c3-7487-e2ce-636e604bfafe', 'campaigns_modified_user', 'Users', 'users', 'id', 'Campaigns', 'campaigns', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a84bd8e6-3edd-9900-a210-636e603dccc6', 'groups_aos_product_quotes', 'AOS_Line_Item_Groups', 'aos_line_item_groups', 'id', 'AOS_Products_Quotes', 'aos_products_quotes', 'group_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a8ca8a8c-2ca6-8752-b6ce-636e60bf9ec5', 'account_cases', 'Accounts', 'accounts', 'id', 'Cases', 'cases', 'account_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a8ddd71d-d9ad-6b8e-cdd6-636e6051bdf9', 'jjwg_Maps_accounts', 'jjwg_Maps', 'jjwg_Maps', 'parent_id', 'Accounts', 'accounts', 'id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('a8ee8775-60c0-fbf9-8570-636e6031a28c', 'jjwg_markers_created_by', 'Users', 'users', 'id', 'jjwg_Markers', 'jjwg_markers', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a936ca68-bc74-1c0c-0ce5-636e603c2161', 'aos_products_modified_user', 'Users', 'users', 'id', 'AOS_Products', 'aos_products', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('a93f2425-9eb6-bac2-7e50-636e60f92a02', 'fp_events_leads_1', 'FP_events', 'fp_events', 'id', 'Leads', 'leads', 'id', 'fp_events_leads_1_c', 'fp_events_leads_1fp_events_ida', 'fp_events_leads_1leads_idb', 'many-to-many', NULL, NULL, 0, 0),
('a992ba25-9ff8-8a9e-2e50-636e60ca01c3', 'aor_fields_modified_user', 'Users', 'users', 'id', 'AOR_Fields', 'aor_fields', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('aa89f0eb-8775-27ef-beae-636e609e9ff4', 'opportunities_created_by', 'Users', 'users', 'id', 'Opportunities', 'opportunities', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('aaac22b6-2789-7017-ba12-636e60096423', 'aod_index_assigned_user', 'Users', 'users', 'id', 'AOD_Index', 'aod_index', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ab0038d2-08c4-cfa3-29a0-636e607b24ae', 'tasks_notes', 'Tasks', 'tasks', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ad9a29be-86cb-3ad3-a997-636e60cdb10e', 'surveyquestionresponses_assigned_user', 'Users', 'users', 'id', 'SurveyQuestionResponses', 'surveyquestionresponses', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('add6145e-4731-34e4-1cce-636e608859b1', 'accounts_contacts', 'Accounts', 'accounts', 'id', 'Contacts', 'contacts', 'id', 'accounts_contacts', 'account_id', 'contact_id', 'many-to-many', NULL, NULL, 0, 0),
('ae1de460-5314-c89a-8389-636e60fd5653', 'meetings_users', 'Meetings', 'meetings', 'id', 'Users', 'users', 'id', 'meetings_users', 'meeting_id', 'user_id', 'many-to-many', NULL, NULL, 0, 0),
('ae4f18cf-7f0b-0df8-ed5f-636e606709cd', 'surveyresponses_surveyquestionresponses', 'SurveyResponses', 'surveyresponses', 'id', 'SurveyQuestionResponses', 'surveyquestionresponses', 'surveyresponse_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('aefb8b44-e050-228c-9b4a-636e60c2fe22', 'aow_processed_created_by', 'Users', 'users', 'id', 'AOW_Processed', 'aow_processed', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b04ad995-5a0c-774e-13d6-636e608e785f', 'am_tasktemplates_modified_user', 'Users', 'users', 'id', 'AM_TaskTemplates', 'am_tasktemplates', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b0afb0ff-4c1e-f355-087c-636e603eed11', 'jjwg_markers_assigned_user', 'Users', 'users', 'id', 'jjwg_Markers', 'jjwg_markers', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b112a2ca-2cd9-9e7f-da95-636e605f7fe9', 'account_tasks', 'Accounts', 'accounts', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('b11e0aad-bda6-16ff-fc05-636e6006018b', 'campaigns_created_by', 'Users', 'users', 'id', 'Campaigns', 'campaigns', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b1380ed7-d588-4431-ebbb-636e602a7b84', 'campaignlog_contact', 'CampaignLog', 'campaign_log', 'related_id', 'Contacts', 'contacts', 'id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b1453eb4-4572-9149-008a-636e601ecc63', 'fp_events_prospects_1', 'FP_events', 'fp_events', 'id', 'Prospects', 'prospects', 'id', 'fp_events_prospects_1_c', 'fp_events_prospects_1fp_events_ida', 'fp_events_prospects_1prospects_idb', 'many-to-many', NULL, NULL, 0, 0),
('b18d3b25-fe7e-b352-6d65-636e60f64e60', 'oauthkeys_assigned_user', 'Users', 'users', 'id', 'OAuthKeys', 'oauth_consumer', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b1a12a2c-6f46-c882-81ec-636e60589634', 'contact_campaign_log', 'Contacts', 'contacts', 'id', 'CampaignLog', 'campaign_log', 'target_id', NULL, NULL, NULL, 'one-to-many', 'target_type', 'Contacts', 0, 0),
('b2234fc7-e5b9-634a-5f65-636e6098de8c', 'aok_knowledge_base_categories_created_by', 'Users', 'users', 'id', 'AOK_Knowledge_Base_Categories', 'aok_knowledge_base_categories', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b52c2ba9-95fe-bfc9-9178-636e6006626e', 'aos_products_created_by', 'Users', 'users', 'id', 'AOS_Products', 'aos_products', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b542d55e-133b-93be-0448-636e60b63747', 'leads_documents', 'Leads', 'leads', 'id', 'Documents', 'documents', 'id', 'linked_documents', 'parent_id', 'document_id', 'many-to-many', 'parent_type', 'Leads', 0, 0),
('b55c3426-d446-64e4-a0d4-636e60fd4223', 'fp_event_locations_created_by', 'Users', 'users', 'id', 'FP_Event_Locations', 'fp_event_locations', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b57ce3ff-84fe-6ac2-d40a-636e60b1f11c', 'jjwg_Maps_contacts', 'jjwg_Maps', 'jjwg_Maps', 'parent_id', 'Contacts', 'contacts', 'id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Contacts', 0, 0),
('b66ed008-4b0f-7c14-d6d1-636e608ecc93', 'calls_reschedule', 'Calls', 'calls', 'id', 'Calls_Reschedule', 'calls_reschedule', 'call_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b699ba62-72ba-5d3d-9cd5-636e6027ed0c', 'prospectlists_assigned_user', 'Users', 'users', 'id', 'ProspectLists', 'prospect_lists', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b743de49-2931-a839-2226-636e6095dc14', 'securitygroups_modified_user', 'Users', 'users', 'id', 'SecurityGroups', 'securitygroups', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b8c505ce-2a86-78cd-26df-636e60ab70c5', 'accounts_opportunities', 'Accounts', 'accounts', 'id', 'Opportunities', 'opportunities', 'id', 'accounts_opportunities', 'account_id', 'opportunity_id', 'many-to-many', NULL, NULL, 0, 0),
('b8dfa11a-32a0-e6f3-edcd-636e606484a3', 'account_notes', 'Accounts', 'accounts', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('b8f9cb13-49ff-e3a0-214b-636e60f5ab64', 'securitygroups_surveyquestionresponses', 'SecurityGroups', 'securitygroups', 'id', 'SurveyQuestionResponses', 'surveyquestionresponses', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'SurveyQuestionResponses', 0, 0),
('b95687e5-5a04-b981-89ab-636e6099f893', 'contact_aos_quotes', 'Contacts', 'contacts', 'id', 'AOS_Quotes', 'aos_quotes', 'billing_contact_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b978fc02-6fa5-09ae-5c7c-636e6056bb67', 'aor_fields_created_by', 'Users', 'users', 'id', 'AOR_Fields', 'aor_fields', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('b9c4c466-0f69-68fc-410e-636e6015345e', 'opportunities_assigned_user', 'Users', 'users', 'id', 'Opportunities', 'opportunities', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ba10b0fa-0ba3-cf02-66d7-636e60891ad1', 'aok_knowledge_base_categories_assigned_user', 'Users', 'users', 'id', 'AOK_Knowledge_Base_Categories', 'aok_knowledge_base_categories', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ba9706d6-1e82-e6a9-988c-636e60aa9dba', 'jjwg_maps_jjwg_areas', 'jjwg_Maps', 'jjwg_maps', 'id', 'jjwg_Areas', 'jjwg_areas', 'id', 'jjwg_maps_jjwg_areas_c', 'jjwg_maps_5304wg_maps_ida', 'jjwg_maps_41f2g_areas_idb', 'many-to-many', NULL, NULL, 0, 0),
('bc90e475-a201-873f-2688-636e60d7fe45', 'campaigns_assigned_user', 'Users', 'users', 'id', 'Campaigns', 'campaigns', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('bd2852a3-752c-102a-c986-636e60bdcda9', 'securitygroups_jjwg_markers', 'SecurityGroups', 'securitygroups', 'id', 'jjwg_Markers', 'jjwg_markers', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'jjwg_Markers', 0, 0),
('bdff07c0-9ab3-0314-5de5-636e60e9e35c', 'securitygroups_notes', 'SecurityGroups', 'securitygroups', 'id', 'Notes', 'notes', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'Notes', 0, 0),
('be620497-ed68-16c7-63da-636e607376a7', 'securitygroups_prospectlists', 'SecurityGroups', 'securitygroups', 'id', 'ProspectLists', 'prospect_lists', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'ProspectLists', 0, 0),
('be6e06ee-30d6-cd50-62fe-636e60c77f5f', 'cases_modified_user', 'Users', 'users', 'id', 'Cases', 'cases', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('bf8e0f50-d5bc-453d-356a-636e6021eb4d', 'campaignlog_lead', 'CampaignLog', 'campaign_log', 'related_id', 'Leads', 'leads', 'id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c0c5a733-0d1b-21da-e51f-636e6089d441', 'revisions_created_by', 'Users', 'users', 'id', 'DocumentRevisions', 'document_revisions', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c0d31403-2ee3-3595-5d0e-636e607c63c5', 'jjwg_Maps_leads', 'jjwg_Maps', 'jjwg_Maps', 'parent_id', 'Leads', 'leads', 'id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Leads', 0, 0),
('c0d6ce2b-2cf9-c321-6c30-636e6023b15f', 'documents_accounts', 'Documents', 'documents', 'id', 'Accounts', 'accounts', 'id', 'documents_accounts', 'document_id', 'account_id', 'many-to-many', NULL, NULL, 0, 0),
('c0f51ea3-5959-272f-5043-636e6046e869', 'account_meetings', 'Accounts', 'accounts', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('c123b0bf-c05d-cb66-54bb-636e60fb241b', 'securitygroups_created_by', 'Users', 'users', 'id', 'SecurityGroups', 'securitygroups', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c252e21a-3c9b-b170-0a72-636e606385f2', 'aos_contracts_meetings', 'AOS_Contracts', 'aos_contracts', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'AOS_Contracts', 0, 0),
('c253769a-5a5b-34e7-d101-636e606c8152', 'meetings_leads', 'Meetings', 'meetings', 'id', 'Leads', 'leads', 'id', 'meetings_leads', 'meeting_id', 'lead_id', 'many-to-many', NULL, NULL, 0, 0),
('c26d1260-d126-3862-32c3-636e6096f202', 'securitygroups_opportunities', 'SecurityGroups', 'securitygroups', 'id', 'Opportunities', 'opportunities', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'Opportunities', 0, 0),
('c4899cc4-7d10-8347-c7ff-636e6068de4e', 'fp_event_locations_assigned_user', 'Users', 'users', 'id', 'FP_Event_Locations', 'fp_event_locations', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c58ef40c-6866-fff9-a737-636e607aec1f', 'calls_contacts', 'Calls', 'calls', 'id', 'Contacts', 'contacts', 'id', 'calls_contacts', 'call_id', 'contact_id', 'many-to-many', NULL, NULL, 0, 0),
('c5c3f805-65a0-f38f-2c5a-636e6006b057', 'contact_aos_invoices', 'Contacts', 'contacts', 'id', 'AOS_Invoices', 'aos_invoices', 'billing_contact_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c5d4a535-8261-ed23-702d-636e60efe680', 'securitygroups_campaigns', 'SecurityGroups', 'securitygroups', 'id', 'Campaigns', 'campaigns', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'Campaigns', 0, 0),
('c6d2e7ec-f16f-6638-642e-636e60ebd9f5', 'am_tasktemplates_created_by', 'Users', 'users', 'id', 'AM_TaskTemplates', 'am_tasktemplates', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c727057f-04ac-107c-80ea-636e600dca8c', 'campaignlog_created_opportunities', 'CampaignLog', 'campaign_log', 'related_id', 'Opportunities', 'opportunities', 'id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c8b119ba-0d74-15a7-bfb4-636e60eb8ee2', 'jjwg_maps_jjwg_markers', 'jjwg_Maps', 'jjwg_maps', 'id', 'jjwg_Markers', 'jjwg_markers', 'id', 'jjwg_maps_jjwg_markers_c', 'jjwg_maps_b229wg_maps_ida', 'jjwg_maps_2e31markers_idb', 'many-to-many', NULL, NULL, 0, 0),
('c8e81f63-0c41-1e4f-f3ee-636e6066a015', 'reminders_invitees_modified_user', 'Users', 'users', 'id', 'Reminders_Invitees', 'reminders_invitees', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('c9353049-2cc6-d688-b3d6-636e603cdbc3', 'bugs_modified_user', 'Users', 'users', 'id', 'Bugs', 'bugs', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ca02089e-a753-17b0-5ca5-636e60ce876b', 'outbound_email_modified_user', 'Users', 'users', 'id', 'OutboundEmailAccounts', 'outbound_email', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('caa2b3da-8e97-ff50-22d5-636e60bc5f77', 'opportunity_calls', 'Opportunities', 'opportunities', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('cbda2c00-83cf-24b0-3ae1-636e60fa18dc', 'consumer_tokens', 'OAuthKeys', 'oauth_consumer', 'id', 'OAuthTokens', 'oauth_tokens', 'consumer', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('cdc280d7-6a39-956c-fb39-636e60337dad', 'securitygroups_fp_event_locations', 'SecurityGroups', 'securitygroups', 'id', 'FP_Event_Locations', 'fp_event_locations', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'FP_Event_Locations', 0, 0),
('ce032c78-2e66-b593-2241-636e60e5f7e9', 'account_calls', 'Accounts', 'accounts', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('ce0d0138-0bcb-7116-7886-636e60a13351', 'campaign_accounts', 'Campaigns', 'campaigns', 'id', 'Accounts', 'accounts', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ce272a2b-0491-443d-f34f-636e60094055', 'contact_aos_contracts', 'Contacts', 'contacts', 'id', 'AOS_Contracts', 'aos_contracts', 'contact_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ceba552a-a3c2-6717-254c-636e604fdfd4', 'aow_workflow_modified_user', 'Users', 'users', 'id', 'AOW_WorkFlow', 'aow_workflow', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('cefcd0a4-e586-a6b7-ea72-636e60d180a3', 'campaignlog_targeted_users', 'CampaignLog', 'campaign_log', 'target_id', 'Users', 'users', 'id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('cf792661-b298-9fce-c3a6-636e605363a1', 'opportunities_contacts', 'Opportunities', 'opportunities', 'id', 'Contacts', 'contacts', 'id', 'opportunities_contacts', 'opportunity_id', 'contact_id', 'many-to-many', NULL, NULL, 0, 0),
('d05395bb-4da8-52de-a63e-636e60e20076', 'documents_contacts', 'Documents', 'documents', 'id', 'Contacts', 'contacts', 'id', 'documents_contacts', 'document_id', 'contact_id', 'many-to-many', NULL, NULL, 0, 0),
('d065eff4-1e3a-8ea7-7acc-636e60258ad0', 'aor_scheduled_reports_modified_user', 'Users', 'users', 'id', 'AOR_Scheduled_Reports', 'aor_scheduled_reports', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d18471bd-93fd-23df-52ff-636e6033e756', 'bugs_created_by', 'Users', 'users', 'id', 'Bugs', 'bugs', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d1e42048-86da-4f74-7d99-636e60a6a851', 'aop_case_updates_notes', 'AOP_Case_Updates', 'aop_case_updates', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'AOP_Case_Updates', 0, 0),
('d2e85c97-0416-97a0-5b31-636e60def67d', 'aos_pdf_templates_modified_user', 'Users', 'users', 'id', 'AOS_PDF_Templates', 'aos_pdf_templates', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d32d39a2-9339-9a79-7aae-636e60548bdf', 'calls_users', 'Calls', 'calls', 'id', 'Users', 'users', 'id', 'calls_users', 'call_id', 'user_id', 'many-to-many', NULL, NULL, 0, 0),
('d5410c4b-1540-4f6c-6a07-636e60ebd9a6', 'project_contacts_1', 'Project', 'project', 'id', 'Contacts', 'contacts', 'id', 'project_contacts_1_c', 'project_contacts_1project_ida', 'project_contacts_1contacts_idb', 'many-to-many', NULL, NULL, 0, 0),
('d567e06a-c7d3-29b6-9266-636e605eb66d', 'aos_products_assigned_user', 'Users', 'users', 'id', 'AOS_Products', 'aos_products', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d5832d72-6563-6c24-efc9-636e60a0a909', 'reminders_invitees_created_by', 'Users', 'users', 'id', 'Reminders_Invitees', 'reminders_invitees', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d5a4f069-e2d7-c21d-e193-636e607aff8a', 'am_tasktemplates_assigned_user', 'Users', 'users', 'id', 'AM_TaskTemplates', 'am_tasktemplates', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d5fc9ea0-77d6-c744-6550-636e60a551f8', 'opportunity_meetings', 'Opportunities', 'opportunities', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('d66412d9-c825-9bfa-a6cb-636e60658eba', 'aos_contracts_calls', 'AOS_Contracts', 'aos_contracts', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'AOS_Contracts', 0, 0),
('d76195bd-be9a-d0a7-c7ec-636e60e57f41', 'meetings_modified_user', 'Users', 'users', 'id', 'Meetings', 'meetings', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d7b005f8-5473-354f-d207-636e601423b2', 'aos_quotes_created_by', 'Users', 'users', 'id', 'AOS_Quotes', 'aos_quotes', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d7e7ca64-3aff-956b-1c63-636e607356a7', 'oauth2clients_modified_user', 'Users', 'users', 'id', 'OAuth2Clients', 'oauth2clients', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d8335c14-9d75-cf4a-c845-636e60a8691f', 'oauthtokens_assigned_user', 'Users', 'users', 'id', 'OAuthTokens', 'oauth_tokens', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d951d7cd-349b-80d0-b55d-636e60439fd6', 'documents_opportunities', 'Documents', 'documents', 'id', 'Opportunities', 'opportunities', 'id', 'documents_opportunities', 'document_id', 'opportunity_id', 'many-to-many', NULL, NULL, 0, 0),
('d9846017-17a2-1059-9646-636e60c6629d', 'optimistic_locking', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
('d9d5d915-d37c-ae39-4499-636e60270259', 'campaign_contacts', 'Campaigns', 'campaigns', 'id', 'Contacts', 'contacts', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('d9df3f47-ef1a-6d1b-17de-636e60274f33', 'campaignlog_sent_emails', 'CampaignLog', 'campaign_log', 'related_id', 'Emails', 'emails', 'id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('dac7c024-1c73-d163-e970-636e6065558c', 'calls_leads', 'Calls', 'calls', 'id', 'Leads', 'leads', 'id', 'calls_leads', 'call_id', 'lead_id', 'many-to-many', NULL, NULL, 0, 0),
('db405a26-003e-d3a1-9553-636e6080b5cb', 'aos_pdf_templates_created_by', 'Users', 'users', 'id', 'AOS_PDF_Templates', 'aos_pdf_templates', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('dc0bc12b-8527-c839-cff9-636e6077ce63', 'contacts_aop_case_updates', 'Contacts', 'contacts', 'id', 'AOP_Case_Updates', 'aop_case_updates', 'contact_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('dcd20b07-e0ca-2a93-f9fb-636e6021d47c', 'aor_charts_modified_user', 'Users', 'users', 'id', 'AOR_Charts', 'aor_charts', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('dd9c4d79-ca7a-e549-821d-636e606e0c3d', 'prospect_list_campaigns', 'ProspectLists', 'prospect_lists', 'id', 'Campaigns', 'campaigns', 'id', 'prospect_list_campaigns', 'prospect_list_id', 'campaign_id', 'many-to-many', NULL, NULL, 0, 0),
('ddc70267-c895-4529-2a1e-636e601db8c7', 'account_emails', 'Accounts', 'accounts', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('dddcdcfb-7ca7-06b3-1d16-636e60e57616', 'opportunity_tasks', 'Opportunities', 'opportunities', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('de3b17c0-dba3-7402-d646-636e60356c83', 'bugs_assigned_user', 'Users', 'users', 'id', 'Bugs', 'bugs', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e0f25f33-012c-2dad-da21-636e60ce741d', 'reminders_invitees_assigned_user', 'Users', 'users', 'id', 'Reminders_Invitees', 'reminders_invitees', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e11e0970-85a5-72a5-bb72-636e6099c5fa', 'aos_quotes_assigned_user', 'Users', 'users', 'id', 'AOS_Quotes', 'aos_quotes', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e13e0f0e-ee2e-80cf-8e1b-636e6085b036', 'contacts_created_by', 'Users', 'users', 'id', 'Contacts', 'contacts', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e18c93bf-e87f-64cd-c403-636e602c7947', 'aor_scheduled_reports_created_by', 'Users', 'users', 'id', 'AOR_Scheduled_Reports', 'aor_scheduled_reports', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e1955255-67cc-99c4-8a04-636e608b7f6b', 'aos_contracts_aos_products_quotes', 'AOS_Contracts', 'aos_contracts', 'id', 'AOS_Products_Quotes', 'aos_products_quotes', 'parent_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e21468ba-dd3e-e8d8-3a90-636e60fb1301', 'campaign_leads', 'Campaigns', 'campaigns', 'id', 'Leads', 'leads', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e2532696-521d-e181-e09b-636e60c7598c', 'sugarfeed_modified_user', 'Users', 'users', 'id', 'SugarFeed', 'sugarfeed', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e2e5ed4b-fe54-dcda-dc1c-636e60ec9f69', 'aos_pdf_templates_assigned_user', 'Users', 'users', 'id', 'AOS_PDF_Templates', 'aos_pdf_templates', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e3218fff-6da5-451c-1075-636e60c29f8a', 'meetings_created_by', 'Users', 'users', 'id', 'Meetings', 'meetings', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e392856d-c796-b202-d262-636e60d61cff', 'securitygroups_aos_products', 'SecurityGroups', 'securitygroups', 'id', 'AOS_Products', 'aos_products', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'AOS_Products', 0, 0),
('e4393b8d-f2ea-dbe2-817f-636e60522b38', 'securitygroups_emailmarketing', 'SecurityGroups', 'securitygroups', 'id', 'EmailMarketing', 'email_marketing', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'EmailMarketing', 0, 0),
('e4d3e3af-73ce-c4a4-6ca8-636e600904e7', 'project_users_1', 'Project', 'project', 'id', 'Users', 'users', 'id', 'project_users_1_c', 'project_users_1project_ida', 'project_users_1users_idb', 'many-to-many', NULL, NULL, 0, 0),
('e5007841-901a-a46c-4129-636e604a8328', 'securitygroups_projecttask', 'SecurityGroups', 'securitygroups', 'id', 'ProjectTask', 'project_task', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'ProjectTask', 0, 0),
('e5fc8aa5-3ae7-c4de-9423-636e60badf07', 'unified_search', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
('e610c7ed-fcdf-60c1-9a58-636e6020dccd', 'opportunity_notes', 'Opportunities', 'opportunities', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('e6145060-7af7-5779-858f-636e60081a64', 'oauth2clients_created_by', 'Users', 'users', 'id', 'OAuth2Clients', 'oauth2clients', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e630beef-d053-04b5-c93b-636e603bb270', 'aow_workflow_created_by', 'Users', 'users', 'id', 'AOW_WorkFlow', 'aow_workflow', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e6f57e6e-efe6-d05a-dee5-636e60acfa0c', 'securitygroups_assigned_user', 'Users', 'users', 'id', 'SecurityGroups', 'securitygroups', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e712792f-ceb9-a5de-a606-636e603282e2', 'documents_cases', 'Documents', 'documents', 'id', 'Cases', 'cases', 'id', 'documents_cases', 'document_id', 'case_id', 'many-to-many', NULL, NULL, 0, 0),
('e7900146-bf00-de59-0c56-636e6036f4c2', 'surveys_modified_user', 'Users', 'users', 'id', 'Surveys', 'surveys', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e94e43e9-9e8a-9b3e-ea87-636e6019f1ff', 'aos_quotes_modified_user', 'Users', 'users', 'id', 'AOS_Quotes', 'aos_quotes', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('e96100c5-025f-2a6c-90cb-636e60e8114d', 'bug_meetings', 'Bugs', 'bugs', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Bugs', 0, 0),
('e9ccb999-ec92-a99b-3818-636e6002ee52', 'securitygroups_aor_scheduled_reports', 'SecurityGroups', 'securitygroups', 'id', 'AOR_Scheduled_Reports', 'aor_scheduled_reports', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'AOR_Scheduled_Reports', 0, 0),
('e9d7920d-d3cf-f1f7-e63a-636e601cf5a2', 'account_leads', 'Accounts', 'accounts', 'id', 'Leads', 'leads', 'account_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ea240d6b-a6d2-52da-5f89-636e608f8063', 'securitygroups_bugs', 'SecurityGroups', 'securitygroups', 'id', 'Bugs', 'bugs', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'Bugs', 0, 0),
('eadb08c8-0924-6651-63c4-636e605cb1d1', 'opportunity_currencies', 'Opportunities', 'opportunities', 'currency_id', 'Currencies', 'currencies', 'id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('eb25b0c0-15f2-d09c-9653-636e60ee7923', 'prospect_list_contacts', 'ProspectLists', 'prospect_lists', 'id', 'Contacts', 'contacts', 'id', 'prospect_lists_prospects', 'prospect_list_id', 'related_id', 'many-to-many', 'related_type', 'Contacts', 0, 0),
('eb801460-78a6-222b-c086-636e60fc51d7', 'jjwg_Maps_opportunities', 'jjwg_Maps', 'jjwg_Maps', 'parent_id', 'Opportunities', 'opportunities', 'id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('ec1495fd-c804-789a-5cc6-636e6051b6d5', 'email_template_email_marketings', 'EmailTemplates', 'email_templates', 'id', 'EmailMarketing', 'email_marketing', 'template_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ec16d4ff-e69c-0cad-2494-636e608a239d', 'jjwg_address_cache_modified_user', 'Users', 'users', 'id', 'jjwg_Address_Cache', 'jjwg_address_cache', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('eda4b329-b73c-389e-76e3-636e60c6ef23', 'campaign_prospects', 'Campaigns', 'campaigns', 'id', 'Prospects', 'prospects', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ee25bfbb-e08a-8074-db5d-636e60907013', 'sugarfeed_created_by', 'Users', 'users', 'id', 'SugarFeed', 'sugarfeed', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ee31017c-8bae-9cd1-4d64-636e60399946', 'aos_contracts_aos_line_item_groups', 'AOS_Contracts', 'aos_contracts', 'id', 'AOS_Line_Item_Groups', 'aos_line_item_groups', 'parent_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('ee4080c6-1cc8-9de5-619b-636e606a308b', 'meetings_assigned_user', 'Users', 'users', 'id', 'Meetings', 'meetings', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('eea4d51d-52ac-c65a-218f-636e603969d7', 'project_tasks_notes', 'ProjectTask', 'project_task', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'ProjectTask', 0, 0),
('eecbae71-90c0-0ee1-30d7-636e60418a7c', 'opportunity_emails', 'Opportunities', 'opportunities', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Opportunities', 0, 0),
('ef847a33-352c-6c1b-5c6c-636e60dfa0ba', 'surveyquestions_modified_user', 'Users', 'users', 'id', 'SurveyQuestions', 'surveyquestions', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('efddb60b-cfb0-41f9-40d7-636e6071a3b3', 'product_categories', 'AOS_Product_Categories', 'aos_product_categories', 'id', 'AOS_Products', 'aos_products', 'aos_product_category_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('eff157d5-4a7e-6aba-f385-636e60b4c169', 'documents_bugs', 'Documents', 'documents', 'id', 'Bugs', 'bugs', 'id', 'documents_bugs', 'document_id', 'bug_id', 'many-to-many', NULL, NULL, 0, 0),
('f177ce36-7abf-17a9-23d2-636e6014b85a', 'securitygroups_aos_pdf_templates', 'SecurityGroups', 'securitygroups', 'id', 'AOS_PDF_Templates', 'aos_pdf_templates', 'id', 'securitygroups_records', 'securitygroup_id', 'record_id', 'many-to-many', 'module', 'AOS_PDF_Templates', 0, 0),
('f1846f62-0de9-d4af-2acc-636e607c3efb', 'oauth2clients_oauth2tokens', 'OAuth2Clients', 'oauth2clients', 'id', 'OAuth2Tokens', 'oauth2tokens', 'client', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('f2b19ca7-e2cb-b74e-8f64-636e60022671', 'leads_modified_user', 'Users', 'users', 'id', 'Leads', 'leads', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('f3199d5a-62dc-4d1e-ed51-636e60f1a410', 'securitygroups_acl_roles', 'SecurityGroups', 'securitygroups', 'id', 'ACLRoles', 'acl_roles', 'id', 'securitygroups_acl_roles', 'securitygroup_id', 'role_id', 'many-to-many', NULL, NULL, 0, 0),
('f3260089-e79c-f716-c11d-636e60db8c29', 'account_aos_quotes', 'Accounts', 'accounts', 'id', 'AOS_Quotes', 'aos_quotes', 'billing_account_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('f3c3d7eb-1f32-6ea6-e6bf-636e606ad213', 'notes_assigned_user', 'Users', 'users', 'id', 'Notes', 'notes', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('f4330e58-a868-faf4-0e5c-636e607ed6d5', 'prospects_modified_user', 'Users', 'users', 'id', 'Prospects', 'prospects', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `releases`
--

CREATE TABLE `releases` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `list_order` int DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `popup` tinyint(1) DEFAULT NULL,
  `email` tinyint(1) DEFAULT NULL,
  `email_sent` tinyint(1) DEFAULT NULL,
  `timer_popup` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `timer_email` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `related_event_module` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `related_event_module_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_willexecute` int DEFAULT '-1',
  `popup_viewed` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reminders_invitees`
--

CREATE TABLE `reminders_invitees` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reminder_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `related_invitee_module` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `related_invitee_module_id` char(36) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `modules` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles_modules`
--

CREATE TABLE `roles_modules` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `module_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `allow` tinyint(1) DEFAULT '0',
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles_users`
--

CREATE TABLE `roles_users` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `saved_search`
--

CREATE TABLE `saved_search` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `search_module` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contents` text COLLATE utf8mb4_general_ci,
  `description` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedulers`
--

CREATE TABLE `schedulers` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `job` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_time_start` datetime DEFAULT NULL,
  `date_time_end` datetime DEFAULT NULL,
  `job_interval` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `time_from` time DEFAULT NULL,
  `time_to` time DEFAULT NULL,
  `last_run` datetime DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `catch_up` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedulers`
--

INSERT INTO `schedulers` (`id`, `deleted`, `date_entered`, `date_modified`, `created_by`, `modified_user_id`, `name`, `job`, `date_time_start`, `date_time_end`, `job_interval`, `time_from`, `time_to`, `last_run`, `status`, `catch_up`) VALUES
('13029216-a2cf-8016-8532-636e60e6accf', 0, '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'Removal of documents from filesystem', 'function::removeDocumentsFromFS', '2015-01-01 06:00:01', NULL, '0::3::1::*::*', NULL, NULL, NULL, 'Active', 0),
('247911f4-3adc-2726-9eb6-636e60e0be2f', 0, '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'Prune SuiteCRM Feed Tables', 'function::trimSugarFeeds', '2015-01-01 06:45:01', NULL, '0::2::1::*::*', NULL, NULL, NULL, 'Active', 1),
('35d8bb10-90ac-fcc9-49d0-636e60a693e6', 0, '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'Google Calendar Sync', 'function::syncGoogleCalendar', '2015-01-01 08:00:01', NULL, '*/15::*::*::*::*', NULL, NULL, NULL, 'Active', 0),
('37dab43b-f0b6-5946-8cbf-636e60f3d4f9', 0, '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'Process Workflow Tasks', 'function::processAOW_Workflow', '2015-01-01 17:15:01', NULL, '*::*::*::*::*', NULL, NULL, NULL, 'Active', 1),
('4450e4e3-48e7-fc38-8cdd-636e60d7e2fd', 0, '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'Run Report Generation Scheduled Tasks', 'function::aorRunScheduledReports', '2015-01-01 10:30:01', NULL, '*::*::*::*::*', NULL, NULL, NULL, 'Active', 1),
('5a362824-f64a-a908-f0df-636e60cfde5c', 0, '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'Prune Tracker Tables', 'function::trimTracker', '2015-01-01 16:15:01', NULL, '0::2::1::*::*', NULL, NULL, NULL, 'Active', 1),
('6c49e838-918a-ddf7-7753-636e60cf87b9', 0, '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'Check Inbound Mailboxes', 'function::pollMonitoredInboxesAOP', '2015-01-01 15:15:01', NULL, '*::*::*::*::*', NULL, NULL, NULL, 'Active', 0),
('7a4028cb-243f-5567-230c-636e6026dbf0', 0, '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'Run Nightly Process Bounced Campaign Emails', 'function::pollMonitoredInboxesForBouncedCampaignEmails', '2015-01-01 14:30:01', NULL, '0::2-6::*::*::*', NULL, NULL, NULL, 'Active', 1),
('8abeca7a-e922-bbea-5c42-636e60c89c4e', 0, '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'Run Nightly Mass Email Campaigns', 'function::runMassEmailCampaign', '2015-01-01 16:45:01', NULL, '0::2-6::*::*::*', NULL, NULL, NULL, 'Active', 1),
('9cdab88a-8dcd-9c33-557b-636e605f04ff', 0, '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'Prune Database on 1st of Month', 'function::pruneDatabase', '2015-01-01 14:15:01', NULL, '0::4::1::*::*', NULL, NULL, NULL, 'Inactive', 0),
('aefc5336-c3e1-db25-714c-636e60cf6f83', 0, '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'Perform Lucene Index', 'function::aodIndexUnindexed', '2015-01-01 06:00:01', NULL, '0::0::*::*::*', NULL, NULL, NULL, 'Active', 0),
('c1bd0815-e7ea-1c70-d88d-636e60ffad44', 0, '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'Optimise AOD Index', 'function::aodOptimiseIndex', '2015-01-01 14:00:01', NULL, '0::*/3::*::*::*', NULL, NULL, NULL, 'Active', 0),
('d33ae803-990c-7331-d4fd-636e603885f1', 0, '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'Run Email Reminder Notifications', 'function::sendEmailReminders', '2015-01-01 09:15:01', NULL, '*::*::*::*::*', NULL, NULL, NULL, 'Active', 0),
('f39ce850-74ad-71cb-c042-636e6012aa84', 0, '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'Clean Jobs Queue', 'function::cleanJobQueue', '2015-01-01 09:45:01', NULL, '0::5::*::*::*', NULL, NULL, NULL, 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `securitygroups`
--

CREATE TABLE `securitygroups` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `noninheritable` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `securitygroups_acl_roles`
--

CREATE TABLE `securitygroups_acl_roles` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `securitygroup_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `securitygroups_audit`
--

CREATE TABLE `securitygroups_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `securitygroups_default`
--

CREATE TABLE `securitygroups_default` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `securitygroup_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `module` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `securitygroups_records`
--

CREATE TABLE `securitygroups_records` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `securitygroup_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `record_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `module` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `securitygroups_users`
--

CREATE TABLE `securitygroups_users` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `securitygroup_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primary_group` tinyint(1) DEFAULT NULL,
  `noninheritable` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spots`
--

CREATE TABLE `spots` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `config` longtext COLLATE utf8mb4_general_ci,
  `type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sugarfeed`
--

CREATE TABLE `sugarfeed` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `related_module` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `related_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link_type` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surveyquestionoptions`
--

CREATE TABLE `surveyquestionoptions` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sort_order` int DEFAULT NULL,
  `survey_question_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surveyquestionoptions_audit`
--

CREATE TABLE `surveyquestionoptions_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surveyquestionoptions_surveyquestionresponses`
--

CREATE TABLE `surveyquestionoptions_surveyquestionresponses` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `surveyq72c7options_ida` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `surveyq10d4sponses_idb` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surveyquestionresponses`
--

CREATE TABLE `surveyquestionresponses` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_general_ci,
  `answer_bool` tinyint(1) DEFAULT NULL,
  `answer_datetime` datetime DEFAULT NULL,
  `surveyquestion_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `surveyresponse_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surveyquestionresponses_audit`
--

CREATE TABLE `surveyquestionresponses_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surveyquestions`
--

CREATE TABLE `surveyquestions` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sort_order` int DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `happiness_question` tinyint(1) DEFAULT NULL,
  `survey_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surveyquestions_audit`
--

CREATE TABLE `surveyquestions_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surveyresponses`
--

CREATE TABLE `surveyresponses` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `happiness` int DEFAULT NULL,
  `email_response_sent` tinyint(1) DEFAULT NULL,
  `account_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `campaign_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `survey_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surveyresponses_audit`
--

CREATE TABLE `surveyresponses_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Draft',
  `submit_text` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'Submit',
  `satisfied_text` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'Satisfied',
  `neither_text` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'Neither Satisfied nor Dissatisfied',
  `dissatisfied_text` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'Dissatisfied'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surveys_audit`
--

CREATE TABLE `surveys_audit` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `created_by` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_value_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_value_text` text COLLATE utf8mb4_general_ci,
  `after_value_text` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT 'Not Started',
  `date_due_flag` tinyint(1) DEFAULT '0',
  `date_due` datetime DEFAULT NULL,
  `date_start_flag` tinyint(1) DEFAULT '0',
  `date_start` datetime DEFAULT NULL,
  `parent_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parent_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `priority` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `templatesectionline`
--

CREATE TABLE `templatesectionline` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `deleted` tinyint(1) DEFAULT '0',
  `thumbnail` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `grp` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ord` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tracker`
--

CREATE TABLE `tracker` (
  `id` int NOT NULL,
  `monitor_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `module_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `item_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `item_summary` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `action` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `session_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `visible` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upgrade_history`
--

CREATE TABLE `upgrade_history` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `md5sum` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `type` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `version` varchar(64) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `id_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `manifest` longtext COLLATE utf8mb4_general_ci,
  `date_entered` datetime DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `user_name` varchar(60) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_hash` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `system_generated_password` tinyint(1) DEFAULT NULL,
  `pwd_last_changed` datetime DEFAULT NULL,
  `authenticate_id` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sugar_login` tinyint(1) DEFAULT '1',
  `first_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  `external_auth_only` tinyint(1) DEFAULT '0',
  `receive_notifications` tinyint(1) DEFAULT '1',
  `description` text COLLATE utf8mb4_general_ci,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `department` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_home` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_mobile` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_work` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_other` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_fax` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address_street` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address_city` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address_state` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address_country` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address_postalcode` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `portal_only` tinyint(1) DEFAULT '0',
  `show_on_employees` tinyint(1) DEFAULT '1',
  `employee_status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `messenger_id` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `messenger_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reports_to_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_group` tinyint(1) DEFAULT NULL,
  `factor_auth` tinyint(1) DEFAULT NULL,
  `factor_auth_interface` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_hash`, `system_generated_password`, `pwd_last_changed`, `authenticate_id`, `sugar_login`, `first_name`, `last_name`, `is_admin`, `external_auth_only`, `receive_notifications`, `description`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `title`, `photo`, `department`, `phone_home`, `phone_mobile`, `phone_work`, `phone_other`, `phone_fax`, `status`, `address_street`, `address_city`, `address_state`, `address_country`, `address_postalcode`, `deleted`, `portal_only`, `show_on_employees`, `employee_status`, `messenger_id`, `messenger_type`, `reports_to_id`, `is_group`, `factor_auth`, `factor_auth_interface`) VALUES
('1', 'admin', '$2y$10$aPat/hjZ4WqlVo8/xHclB.Befx0DGGnXgFmwWuvIwIfZdFG1Br8Gm', 0, NULL, NULL, 1, NULL, 'Administrator', 1, 0, 1, NULL, '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', '1', 'Administrator', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 'Active', NULL, NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_feeds`
--

CREATE TABLE `users_feeds` (
  `user_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `feed_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rank` int DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_last_import`
--

CREATE TABLE `users_last_import` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `import_module` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bean_type` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bean_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_password_link`
--

CREATE TABLE `users_password_link` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `keyhash` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_signatures`
--

CREATE TABLE `users_signatures` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `user_id` varchar(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `signature` text COLLATE utf8mb4_general_ci,
  `signature_html` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_preferences`
--

CREATE TABLE `user_preferences` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `assigned_user_id` char(36) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contents` longtext COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_preferences`
--

INSERT INTO `user_preferences` (`id`, `category`, `deleted`, `date_entered`, `date_modified`, `assigned_user_id`, `contents`) VALUES
('111d4490-242e-3a10-0c8f-636e60d0b6e9', 'global', 0, '2022-11-11 14:43:52', '2022-11-11 14:54:01', '1', 'YToyNDp7czoyMDoiY2FsZW5kYXJfcHVibGlzaF9rZXkiO3M6MzY6IjY3MWMwZDA3LWFmYzEtZjU4Zi04MjFmLTYzNmU2MDhjZDQ0NSI7czoxMjoibWFpbG1lcmdlX29uIjtzOjM6Im9mZiI7czoxNjoic3dhcF9sYXN0X3ZpZXdlZCI7czowOiIiO3M6MTQ6InN3YXBfc2hvcnRjdXRzIjtzOjA6IiI7czoxOToibmF2aWdhdGlvbl9wYXJhZGlnbSI7czoyOiJnbSI7czoyMDoic29ydF9tb2R1bGVzX2J5X25hbWUiO3M6MDoiIjtzOjEzOiJzdWJwYW5lbF90YWJzIjtzOjA6IiI7czoyNToiY291bnRfY29sbGFwc2VkX3N1YnBhbmVscyI7czowOiIiO3M6MTQ6Im1vZHVsZV9mYXZpY29uIjtzOjA6IiI7czo5OiJoaWRlX3RhYnMiO2E6MDp7fXM6MTE6InJlbW92ZV90YWJzIjthOjA6e31zOjc6Im5vX29wcHMiO3M6Mzoib2ZmIjtzOjg6InRpbWV6b25lIjtzOjEzOiJFdXJvcGUvQmVybGluIjtzOjI6InV0IjtzOjE6IjEiO3M6MTU6Im1haWxfc210cHNlcnZlciI7czowOiIiO3M6MTM6Im1haWxfc210cHBvcnQiO3M6MjoiMjUiO3M6MTM6Im1haWxfc210cHVzZXIiO3M6MDoiIjtzOjEzOiJtYWlsX3NtdHBwYXNzIjtzOjA6IiI7czoxNDoidXNlX3JlYWxfbmFtZXMiO3M6Mzoib2ZmIjtzOjE3OiJtYWlsX3NtdHBhdXRoX3JlcSI7czoxOiIxIjtzOjEyOiJtYWlsX3NtdHBzc2wiO2k6MTtzOjE3OiJlbWFpbF9zaG93X2NvdW50cyI7aTowO3M6MTA6InVzZXJfdGhlbWUiO3M6NjoiU3VpdGVQIjtzOjE5OiJ0aGVtZV9jdXJyZW50X2dyb3VwIjtzOjM6IkFsbCI7fQ=='),
('1ecfe07c-f985-57c9-fa1b-636e605145b6', 'GoogleSync', 0, '2022-11-11 14:43:52', '2022-11-11 14:43:52', '1', 'YToxOntzOjg6InN5bmNHQ2FsIjtpOjA7fQ=='),
('6c050496-0320-facb-19c2-636e625285ee', 'Home2_SUGARFEED', 0, '2022-11-11 14:54:01', '2022-11-11 14:54:01', '1', 'YToxOntzOjEzOiJsaXN0dmlld09yZGVyIjthOjI6e3M6Nzoib3JkZXJCeSI7czoxMjoiZGF0ZV9lbnRlcmVkIjtzOjk6InNvcnRPcmRlciI7czo0OiJERVNDIjt9fQ=='),
('975c88de-36c7-98aa-abdd-636e62fe0b2a', 'Home', 0, '2022-11-11 14:54:01', '2022-11-11 14:54:01', '1', 'YToyOntzOjg6ImRhc2hsZXRzIjthOjY6e3M6MzY6IjUyOGYwMmNmLWE4YmMtNmNlNS01ZWQ5LTYzNmU2MjFjYmZhNiI7YTo0OntzOjk6ImNsYXNzTmFtZSI7czoxNjoiU3VnYXJGZWVkRGFzaGxldCI7czo2OiJtb2R1bGUiO3M6OToiU3VnYXJGZWVkIjtzOjExOiJmb3JjZUNvbHVtbiI7aToxO3M6MTI6ImZpbGVMb2NhdGlvbiI7czo2NDoibW9kdWxlcy9TdWdhckZlZWQvRGFzaGxldHMvU3VnYXJGZWVkRGFzaGxldC9TdWdhckZlZWREYXNobGV0LnBocCI7fXM6MzY6IjM0MWQ0ODhiLTczOTYtZDBhMy0zM2ViLTYzNmU2MjNhZTFkYyI7YTo1OntzOjk6ImNsYXNzTmFtZSI7czoxNDoiTXlDYWxsc0Rhc2hsZXQiO3M6NjoibW9kdWxlIjtzOjU6IkNhbGxzIjtzOjExOiJmb3JjZUNvbHVtbiI7aTowO3M6MTI6ImZpbGVMb2NhdGlvbiI7czo1NjoibW9kdWxlcy9DYWxscy9EYXNobGV0cy9NeUNhbGxzRGFzaGxldC9NeUNhbGxzRGFzaGxldC5waHAiO3M6Nzoib3B0aW9ucyI7YTowOnt9fXM6MzY6IjRjZTAwNmE4LWMwMjUtOTAyMy00NDllLTYzNmU2MjAyYjYxNCI7YTo1OntzOjk6ImNsYXNzTmFtZSI7czoxNzoiTXlNZWV0aW5nc0Rhc2hsZXQiO3M6NjoibW9kdWxlIjtzOjg6Ik1lZXRpbmdzIjtzOjExOiJmb3JjZUNvbHVtbiI7aTowO3M6MTI6ImZpbGVMb2NhdGlvbiI7czo2NToibW9kdWxlcy9NZWV0aW5ncy9EYXNobGV0cy9NeU1lZXRpbmdzRGFzaGxldC9NeU1lZXRpbmdzRGFzaGxldC5waHAiO3M6Nzoib3B0aW9ucyI7YTowOnt9fXM6MzY6IjdhMGY3ODY3LTZjODAtMWUxNC1hMjg1LTYzNmU2MjRkNmVkNSI7YTo1OntzOjk6ImNsYXNzTmFtZSI7czoyMjoiTXlPcHBvcnR1bml0aWVzRGFzaGxldCI7czo2OiJtb2R1bGUiO3M6MTM6Ik9wcG9ydHVuaXRpZXMiO3M6MTE6ImZvcmNlQ29sdW1uIjtpOjA7czoxMjoiZmlsZUxvY2F0aW9uIjtzOjgwOiJtb2R1bGVzL09wcG9ydHVuaXRpZXMvRGFzaGxldHMvTXlPcHBvcnR1bml0aWVzRGFzaGxldC9NeU9wcG9ydHVuaXRpZXNEYXNobGV0LnBocCI7czo3OiJvcHRpb25zIjthOjA6e319czozNjoiYmQ5YzNlMTgtYWVhNS0yMjBjLTcyMmUtNjM2ZTYyZjhkNjcxIjthOjU6e3M6OToiY2xhc3NOYW1lIjtzOjE3OiJNeUFjY291bnRzRGFzaGxldCI7czo2OiJtb2R1bGUiO3M6ODoiQWNjb3VudHMiO3M6MTE6ImZvcmNlQ29sdW1uIjtpOjA7czoxMjoiZmlsZUxvY2F0aW9uIjtzOjY1OiJtb2R1bGVzL0FjY291bnRzL0Rhc2hsZXRzL015QWNjb3VudHNEYXNobGV0L015QWNjb3VudHNEYXNobGV0LnBocCI7czo3OiJvcHRpb25zIjthOjA6e319czozNjoiZGJhMThmODctYjI3NS01YjI4LTdiNGQtNjM2ZTYyOTk5OWZhIjthOjU6e3M6OToiY2xhc3NOYW1lIjtzOjE0OiJNeUxlYWRzRGFzaGxldCI7czo2OiJtb2R1bGUiO3M6NToiTGVhZHMiO3M6MTE6ImZvcmNlQ29sdW1uIjtpOjA7czoxMjoiZmlsZUxvY2F0aW9uIjtzOjU2OiJtb2R1bGVzL0xlYWRzL0Rhc2hsZXRzL015TGVhZHNEYXNobGV0L015TGVhZHNEYXNobGV0LnBocCI7czo3OiJvcHRpb25zIjthOjA6e319fXM6NToicGFnZXMiO2E6MTp7aTowO2E6Mzp7czo3OiJjb2x1bW5zIjthOjI6e2k6MDthOjI6e3M6NToid2lkdGgiO3M6MzoiNjAlIjtzOjg6ImRhc2hsZXRzIjthOjU6e2k6MDtzOjM2OiIzNDFkNDg4Yi03Mzk2LWQwYTMtMzNlYi02MzZlNjIzYWUxZGMiO2k6MTtzOjM2OiI0Y2UwMDZhOC1jMDI1LTkwMjMtNDQ5ZS02MzZlNjIwMmI2MTQiO2k6MjtzOjM2OiI3YTBmNzg2Ny02YzgwLTFlMTQtYTI4NS02MzZlNjI0ZDZlZDUiO2k6MztzOjM2OiJiZDljM2UxOC1hZWE1LTIyMGMtNzIyZS02MzZlNjJmOGQ2NzEiO2k6NDtzOjM2OiJkYmExOGY4Ny1iMjc1LTViMjgtN2I0ZC02MzZlNjI5OTk5ZmEiO319aToxO2E6Mjp7czo1OiJ3aWR0aCI7czozOiI0MCUiO3M6ODoiZGFzaGxldHMiO2E6MTp7aTowO3M6MzY6IjUyOGYwMmNmLWE4YmMtNmNlNS01ZWQ5LTYzNmU2MjFjYmZhNiI7fX19czoxMDoibnVtQ29sdW1ucyI7czoxOiIzIjtzOjE0OiJwYWdlVGl0bGVMYWJlbCI7czoyMDoiTEJMX0hPTUVfUEFHRV8xX05BTUUiO319fQ=='),
('a9736502-dfa8-73c0-baed-636e62c3b5a1', 'Home2_CALL', 0, '2022-11-11 14:54:01', '2022-11-11 14:54:01', '1', 'YToxOntzOjEzOiJsaXN0dmlld09yZGVyIjthOjI6e3M6Nzoib3JkZXJCeSI7czoxMjoiZGF0ZV9lbnRlcmVkIjtzOjk6InNvcnRPcmRlciI7czo0OiJERVNDIjt9fQ=='),
('ba5a7df4-10e9-0495-fc20-636e62bad2a3', 'Home2_MEETING', 0, '2022-11-11 14:54:01', '2022-11-11 14:54:01', '1', 'YToxOntzOjEzOiJsaXN0dmlld09yZGVyIjthOjI6e3M6Nzoib3JkZXJCeSI7czoxMjoiZGF0ZV9lbnRlcmVkIjtzOjk6InNvcnRPcmRlciI7czo0OiJERVNDIjt9fQ=='),
('ca7533a0-cf8a-c200-445d-636e6248d217', 'Home2_OPPORTUNITY', 0, '2022-11-11 14:54:01', '2022-11-11 14:54:01', '1', 'YToxOntzOjEzOiJsaXN0dmlld09yZGVyIjthOjI6e3M6Nzoib3JkZXJCeSI7czoxMjoiZGF0ZV9lbnRlcmVkIjtzOjk6InNvcnRPcmRlciI7czo0OiJERVNDIjt9fQ=='),
('db1633f8-de3c-9e31-a554-636e623ce2ae', 'Home2_ACCOUNT', 0, '2022-11-11 14:54:01', '2022-11-11 14:54:01', '1', 'YToxOntzOjEzOiJsaXN0dmlld09yZGVyIjthOjI6e3M6Nzoib3JkZXJCeSI7czoxMjoiZGF0ZV9lbnRlcmVkIjtzOjk6InNvcnRPcmRlciI7czo0OiJERVNDIjt9fQ=='),
('ea974a01-9877-cf72-16aa-636e6233f328', 'Home2_LEAD', 0, '2022-11-11 14:54:01', '2022-11-11 14:54:01', '1', 'YToxOntzOjEzOiJsaXN0dmlld09yZGVyIjthOjI6e3M6Nzoib3JkZXJCeSI7czoxMjoiZGF0ZV9lbnRlcmVkIjtzOjk6InNvcnRPcmRlciI7czo0OiJERVNDIjt9fQ=='),
('eb2cb6e0-5958-5d23-bf1a-636e621bd042', 'Home2_LEAD_dba18f87-b275-5b28-7b4d-636e629999fa', 0, '2022-11-11 14:54:34', '2022-11-11 14:54:34', '1', 'YToxOntzOjEzOiJsaXN0dmlld09yZGVyIjthOjI6e3M6Nzoib3JkZXJCeSI7czoxMjoiZGF0ZV9lbnRlcmVkIjtzOjk6InNvcnRPcmRlciI7czo0OiJERVNDIjt9fQ==');

-- --------------------------------------------------------

--
-- Table structure for table `vcals`
--

CREATE TABLE `vcals` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `user_id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `source` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_accnt_id_del` (`id`,`deleted`),
  ADD KEY `idx_accnt_name_del` (`name`,`deleted`),
  ADD KEY `idx_accnt_assigned_del` (`deleted`,`assigned_user_id`),
  ADD KEY `idx_accnt_parent_id` (`parent_id`);

--
-- Indexes for table `accounts_audit`
--
ALTER TABLE `accounts_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_accounts_parent_id` (`parent_id`);

--
-- Indexes for table `accounts_bugs`
--
ALTER TABLE `accounts_bugs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_acc_bug_acc` (`account_id`),
  ADD KEY `idx_acc_bug_bug` (`bug_id`),
  ADD KEY `idx_account_bug` (`account_id`,`bug_id`);

--
-- Indexes for table `accounts_cases`
--
ALTER TABLE `accounts_cases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_acc_case_acc` (`account_id`),
  ADD KEY `idx_acc_acc_case` (`case_id`);

--
-- Indexes for table `accounts_contacts`
--
ALTER TABLE `accounts_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_account_contact` (`account_id`,`contact_id`),
  ADD KEY `idx_contid_del_accid` (`contact_id`,`deleted`,`account_id`);

--
-- Indexes for table `accounts_cstm`
--
ALTER TABLE `accounts_cstm`
  ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `accounts_opportunities`
--
ALTER TABLE `accounts_opportunities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_account_opportunity` (`account_id`,`opportunity_id`),
  ADD KEY `idx_oppid_del_accid` (`opportunity_id`,`deleted`,`account_id`);

--
-- Indexes for table `acl_actions`
--
ALTER TABLE `acl_actions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aclaction_id_del` (`id`,`deleted`),
  ADD KEY `idx_category_name` (`category`,`name`);

--
-- Indexes for table `acl_roles`
--
ALTER TABLE `acl_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aclrole_id_del` (`id`,`deleted`);

--
-- Indexes for table `acl_roles_actions`
--
ALTER TABLE `acl_roles_actions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_acl_role_id` (`role_id`),
  ADD KEY `idx_acl_action_id` (`action_id`),
  ADD KEY `idx_aclrole_action` (`role_id`,`action_id`);

--
-- Indexes for table `acl_roles_users`
--
ALTER TABLE `acl_roles_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aclrole_id` (`role_id`),
  ADD KEY `idx_acluser_id` (`user_id`),
  ADD KEY `idx_aclrole_user` (`role_id`,`user_id`);

--
-- Indexes for table `address_book`
--
ALTER TABLE `address_book`
  ADD KEY `ab_user_bean_idx` (`assigned_user_id`,`bean`);

--
-- Indexes for table `alerts`
--
ALTER TABLE `alerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `am_projecttemplates`
--
ALTER TABLE `am_projecttemplates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `am_projecttemplates_audit`
--
ALTER TABLE `am_projecttemplates_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_am_projecttemplates_parent_id` (`parent_id`);

--
-- Indexes for table `am_projecttemplates_contacts_1_c`
--
ALTER TABLE `am_projecttemplates_contacts_1_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `am_projecttemplates_contacts_1_alt` (`am_projecttemplates_ida`,`contacts_idb`);

--
-- Indexes for table `am_projecttemplates_project_1_c`
--
ALTER TABLE `am_projecttemplates_project_1_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `am_projecttemplates_project_1_ida1` (`am_projecttemplates_project_1am_projecttemplates_ida`),
  ADD KEY `am_projecttemplates_project_1_alt` (`am_projecttemplates_project_1project_idb`);

--
-- Indexes for table `am_projecttemplates_users_1_c`
--
ALTER TABLE `am_projecttemplates_users_1_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `am_projecttemplates_users_1_alt` (`am_projecttemplates_ida`,`users_idb`);

--
-- Indexes for table `am_tasktemplates`
--
ALTER TABLE `am_tasktemplates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `am_tasktemplates_am_projecttemplates_c`
--
ALTER TABLE `am_tasktemplates_am_projecttemplates_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `am_tasktemplates_am_projecttemplates_ida1` (`am_tasktemplates_am_projecttemplatesam_projecttemplates_ida`),
  ADD KEY `am_tasktemplates_am_projecttemplates_alt` (`am_tasktemplates_am_projecttemplatesam_tasktemplates_idb`);

--
-- Indexes for table `am_tasktemplates_audit`
--
ALTER TABLE `am_tasktemplates_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_am_tasktemplates_parent_id` (`parent_id`);

--
-- Indexes for table `aobh_businesshours`
--
ALTER TABLE `aobh_businesshours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aod_index`
--
ALTER TABLE `aod_index`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aod_indexevent`
--
ALTER TABLE `aod_indexevent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_record_module` (`record_module`),
  ADD KEY `idx_record_id` (`record_id`);

--
-- Indexes for table `aod_indexevent_audit`
--
ALTER TABLE `aod_indexevent_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aod_indexevent_parent_id` (`parent_id`);

--
-- Indexes for table `aod_index_audit`
--
ALTER TABLE `aod_index_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aod_index_parent_id` (`parent_id`);

--
-- Indexes for table `aok_knowledgebase`
--
ALTER TABLE `aok_knowledgebase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aok_knowledgebase_audit`
--
ALTER TABLE `aok_knowledgebase_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aok_knowledgebase_parent_id` (`parent_id`);

--
-- Indexes for table `aok_knowledgebase_categories`
--
ALTER TABLE `aok_knowledgebase_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aok_knowledgebase_categories_alt` (`aok_knowledgebase_id`,`aok_knowledge_base_categories_id`);

--
-- Indexes for table `aok_knowledge_base_categories`
--
ALTER TABLE `aok_knowledge_base_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aok_knowledge_base_categories_audit`
--
ALTER TABLE `aok_knowledge_base_categories_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aok_knowledge_base_categories_parent_id` (`parent_id`);

--
-- Indexes for table `aop_case_events`
--
ALTER TABLE `aop_case_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aop_case_events_audit`
--
ALTER TABLE `aop_case_events_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aop_case_events_parent_id` (`parent_id`);

--
-- Indexes for table `aop_case_updates`
--
ALTER TABLE `aop_case_updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aop_case_updates_audit`
--
ALTER TABLE `aop_case_updates_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aop_case_updates_parent_id` (`parent_id`);

--
-- Indexes for table `aor_charts`
--
ALTER TABLE `aor_charts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aor_conditions`
--
ALTER TABLE `aor_conditions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aor_conditions_index_report_id` (`aor_report_id`);

--
-- Indexes for table `aor_fields`
--
ALTER TABLE `aor_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aor_fields_index_report_id` (`aor_report_id`);

--
-- Indexes for table `aor_reports`
--
ALTER TABLE `aor_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aor_reports_audit`
--
ALTER TABLE `aor_reports_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aor_reports_parent_id` (`parent_id`);

--
-- Indexes for table `aor_scheduled_reports`
--
ALTER TABLE `aor_scheduled_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aos_contracts`
--
ALTER TABLE `aos_contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aos_contracts_audit`
--
ALTER TABLE `aos_contracts_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aos_contracts_parent_id` (`parent_id`);

--
-- Indexes for table `aos_contracts_documents`
--
ALTER TABLE `aos_contracts_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aos_contracts_documents_alt` (`aos_contracts_id`,`documents_id`);

--
-- Indexes for table `aos_invoices`
--
ALTER TABLE `aos_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aos_invoices_audit`
--
ALTER TABLE `aos_invoices_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aos_invoices_parent_id` (`parent_id`);

--
-- Indexes for table `aos_line_item_groups`
--
ALTER TABLE `aos_line_item_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aos_line_item_groups_audit`
--
ALTER TABLE `aos_line_item_groups_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aos_line_item_groups_parent_id` (`parent_id`);

--
-- Indexes for table `aos_pdf_templates`
--
ALTER TABLE `aos_pdf_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aos_pdf_templates_audit`
--
ALTER TABLE `aos_pdf_templates_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aos_pdf_templates_parent_id` (`parent_id`);

--
-- Indexes for table `aos_products`
--
ALTER TABLE `aos_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aos_products_audit`
--
ALTER TABLE `aos_products_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aos_products_parent_id` (`parent_id`);

--
-- Indexes for table `aos_products_quotes`
--
ALTER TABLE `aos_products_quotes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aospq_par_del` (`parent_id`,`parent_type`,`deleted`);

--
-- Indexes for table `aos_products_quotes_audit`
--
ALTER TABLE `aos_products_quotes_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aos_products_quotes_parent_id` (`parent_id`);

--
-- Indexes for table `aos_product_categories`
--
ALTER TABLE `aos_product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aos_product_categories_audit`
--
ALTER TABLE `aos_product_categories_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aos_product_categories_parent_id` (`parent_id`);

--
-- Indexes for table `aos_quotes`
--
ALTER TABLE `aos_quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aos_quotes_aos_invoices_c`
--
ALTER TABLE `aos_quotes_aos_invoices_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aos_quotes_aos_invoices_alt` (`aos_quotes77d9_quotes_ida`,`aos_quotes6b83nvoices_idb`);

--
-- Indexes for table `aos_quotes_audit`
--
ALTER TABLE `aos_quotes_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aos_quotes_parent_id` (`parent_id`);

--
-- Indexes for table `aos_quotes_os_contracts_c`
--
ALTER TABLE `aos_quotes_os_contracts_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aos_quotes_aos_contracts_alt` (`aos_quotese81e_quotes_ida`,`aos_quotes4dc0ntracts_idb`);

--
-- Indexes for table `aos_quotes_project_c`
--
ALTER TABLE `aos_quotes_project_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aos_quotes_project_alt` (`aos_quotes1112_quotes_ida`,`aos_quotes7207project_idb`);

--
-- Indexes for table `aow_actions`
--
ALTER TABLE `aow_actions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aow_action_index_workflow_id` (`aow_workflow_id`);

--
-- Indexes for table `aow_conditions`
--
ALTER TABLE `aow_conditions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aow_conditions_index_workflow_id` (`aow_workflow_id`);

--
-- Indexes for table `aow_processed`
--
ALTER TABLE `aow_processed`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aow_processed_index_workflow` (`aow_workflow_id`,`status`,`parent_id`,`deleted`),
  ADD KEY `aow_processed_index_status` (`status`),
  ADD KEY `aow_processed_index_workflow_id` (`aow_workflow_id`);

--
-- Indexes for table `aow_processed_aow_actions`
--
ALTER TABLE `aow_processed_aow_actions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aow_processed_aow_actions` (`aow_processed_id`,`aow_action_id`),
  ADD KEY `idx_actid_del_freid` (`aow_action_id`,`deleted`,`aow_processed_id`);

--
-- Indexes for table `aow_workflow`
--
ALTER TABLE `aow_workflow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aow_workflow_index_status` (`status`);

--
-- Indexes for table `aow_workflow_audit`
--
ALTER TABLE `aow_workflow_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aow_workflow_parent_id` (`parent_id`);

--
-- Indexes for table `bugs`
--
ALTER TABLE `bugs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bugsnumk` (`bug_number`),
  ADD KEY `bug_number` (`bug_number`),
  ADD KEY `idx_bug_name` (`name`),
  ADD KEY `idx_bugs_assigned_user` (`assigned_user_id`);

--
-- Indexes for table `bugs_audit`
--
ALTER TABLE `bugs_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_bugs_parent_id` (`parent_id`);

--
-- Indexes for table `calls`
--
ALTER TABLE `calls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_call_name` (`name`),
  ADD KEY `idx_status` (`status`),
  ADD KEY `idx_calls_date_start` (`date_start`),
  ADD KEY `idx_calls_par_del` (`parent_id`,`parent_type`,`deleted`),
  ADD KEY `idx_calls_assigned_del` (`deleted`,`assigned_user_id`);

--
-- Indexes for table `calls_contacts`
--
ALTER TABLE `calls_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_con_call_call` (`call_id`),
  ADD KEY `idx_con_call_con` (`contact_id`),
  ADD KEY `idx_call_contact` (`call_id`,`contact_id`);

--
-- Indexes for table `calls_leads`
--
ALTER TABLE `calls_leads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_lead_call_call` (`call_id`),
  ADD KEY `idx_lead_call_lead` (`lead_id`),
  ADD KEY `idx_call_lead` (`call_id`,`lead_id`);

--
-- Indexes for table `calls_reschedule`
--
ALTER TABLE `calls_reschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calls_reschedule_audit`
--
ALTER TABLE `calls_reschedule_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_calls_reschedule_parent_id` (`parent_id`);

--
-- Indexes for table `calls_users`
--
ALTER TABLE `calls_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_usr_call_call` (`call_id`),
  ADD KEY `idx_usr_call_usr` (`user_id`),
  ADD KEY `idx_call_users` (`call_id`,`user_id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `camp_auto_tracker_key` (`tracker_key`),
  ADD KEY `idx_campaign_name` (`name`),
  ADD KEY `idx_survey_id` (`survey_id`);

--
-- Indexes for table `campaigns_audit`
--
ALTER TABLE `campaigns_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_campaigns_parent_id` (`parent_id`);

--
-- Indexes for table `campaign_log`
--
ALTER TABLE `campaign_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_camp_tracker` (`target_tracker_key`),
  ADD KEY `idx_camp_campaign_id` (`campaign_id`),
  ADD KEY `idx_camp_more_info` (`more_information`),
  ADD KEY `idx_target_id` (`target_id`),
  ADD KEY `idx_target_id_deleted` (`target_id`,`deleted`);

--
-- Indexes for table `campaign_trkrs`
--
ALTER TABLE `campaign_trkrs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campaign_tracker_key_idx` (`tracker_key`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `casesnumk` (`case_number`),
  ADD KEY `case_number` (`case_number`),
  ADD KEY `idx_case_name` (`name`),
  ADD KEY `idx_account_id` (`account_id`),
  ADD KEY `idx_cases_stat_del` (`assigned_user_id`,`status`,`deleted`);

--
-- Indexes for table `cases_aos_products_1_c`
--
ALTER TABLE `cases_aos_products_1_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cases_aos_products_1_ida1` (`cases_aos_products_1cases_ida`),
  ADD KEY `cases_aos_products_1_alt` (`cases_aos_products_1aos_products_idb`);

--
-- Indexes for table `cases_audit`
--
ALTER TABLE `cases_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_cases_parent_id` (`parent_id`);

--
-- Indexes for table `cases_bugs`
--
ALTER TABLE `cases_bugs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_cas_bug_cas` (`case_id`),
  ADD KEY `idx_cas_bug_bug` (`bug_id`),
  ADD KEY `idx_case_bug` (`case_id`,`bug_id`);

--
-- Indexes for table `cases_cstm`
--
ALTER TABLE `cases_cstm`
  ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD KEY `idx_config_cat` (`category`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_cont_last_first` (`last_name`,`first_name`,`deleted`),
  ADD KEY `idx_contacts_del_last` (`deleted`,`last_name`),
  ADD KEY `idx_cont_del_reports` (`deleted`,`reports_to_id`,`last_name`),
  ADD KEY `idx_reports_to_id` (`reports_to_id`),
  ADD KEY `idx_del_id_user` (`deleted`,`id`,`assigned_user_id`),
  ADD KEY `idx_cont_assigned` (`assigned_user_id`);

--
-- Indexes for table `contacts_audit`
--
ALTER TABLE `contacts_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_contacts_parent_id` (`parent_id`);

--
-- Indexes for table `contacts_bugs`
--
ALTER TABLE `contacts_bugs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_con_bug_con` (`contact_id`),
  ADD KEY `idx_con_bug_bug` (`bug_id`),
  ADD KEY `idx_contact_bug` (`contact_id`,`bug_id`);

--
-- Indexes for table `contacts_cases`
--
ALTER TABLE `contacts_cases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_con_case_con` (`contact_id`),
  ADD KEY `idx_con_case_case` (`case_id`),
  ADD KEY `idx_contacts_cases` (`contact_id`,`case_id`);

--
-- Indexes for table `contacts_cstm`
--
ALTER TABLE `contacts_cstm`
  ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `contacts_users`
--
ALTER TABLE `contacts_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_con_users_con` (`contact_id`),
  ADD KEY `idx_con_users_user` (`user_id`),
  ADD KEY `idx_contacts_users` (`contact_id`,`user_id`);

--
-- Indexes for table `cron_remove_documents`
--
ALTER TABLE `cron_remove_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_cron_remove_document_bean_id` (`bean_id`),
  ADD KEY `idx_cron_remove_document_stamp` (`date_modified`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_currency_name` (`name`,`deleted`);

--
-- Indexes for table `custom_fields`
--
ALTER TABLE `custom_fields`
  ADD KEY `idx_beanid_set_num` (`bean_id`,`set_num`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_doc_cat` (`category_id`,`subcategory_id`);

--
-- Indexes for table `documents_accounts`
--
ALTER TABLE `documents_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_accounts_account_id` (`account_id`,`document_id`),
  ADD KEY `documents_accounts_document_id` (`document_id`,`account_id`);

--
-- Indexes for table `documents_bugs`
--
ALTER TABLE `documents_bugs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_bugs_bug_id` (`bug_id`,`document_id`),
  ADD KEY `documents_bugs_document_id` (`document_id`,`bug_id`);

--
-- Indexes for table `documents_cases`
--
ALTER TABLE `documents_cases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_cases_case_id` (`case_id`,`document_id`),
  ADD KEY `documents_cases_document_id` (`document_id`,`case_id`);

--
-- Indexes for table `documents_contacts`
--
ALTER TABLE `documents_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_contacts_contact_id` (`contact_id`,`document_id`),
  ADD KEY `documents_contacts_document_id` (`document_id`,`contact_id`);

--
-- Indexes for table `documents_opportunities`
--
ALTER TABLE `documents_opportunities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_docu_opps_oppo_id` (`opportunity_id`,`document_id`),
  ADD KEY `idx_docu_oppo_docu_id` (`document_id`,`opportunity_id`);

--
-- Indexes for table `document_revisions`
--
ALTER TABLE `document_revisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documentrevision_mimetype` (`file_mime_type`);

--
-- Indexes for table `eapm`
--
ALTER TABLE `eapm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_app_active` (`assigned_user_id`,`application`,`validated`);

--
-- Indexes for table `emailman`
--
ALTER TABLE `emailman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_eman_list` (`list_id`,`user_id`,`deleted`),
  ADD KEY `idx_eman_campaign_id` (`campaign_id`),
  ADD KEY `idx_eman_relid_reltype_id` (`related_id`,`related_type`,`campaign_id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_email_name` (`name`),
  ADD KEY `idx_message_id` (`message_id`),
  ADD KEY `idx_email_parent_id` (`parent_id`),
  ADD KEY `idx_email_assigned` (`assigned_user_id`,`type`,`status`),
  ADD KEY `idx_email_cat` (`category_id`),
  ADD KEY `idx_email_uid` (`uid`);

--
-- Indexes for table `emails_beans`
--
ALTER TABLE `emails_beans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_emails_beans_bean_id` (`bean_id`),
  ADD KEY `idx_emails_beans_email_bean` (`email_id`,`bean_id`,`deleted`);

--
-- Indexes for table `emails_email_addr_rel`
--
ALTER TABLE `emails_email_addr_rel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_eearl_email_id` (`email_id`,`address_type`),
  ADD KEY `idx_eearl_address_id` (`email_address_id`);

--
-- Indexes for table `emails_text`
--
ALTER TABLE `emails_text`
  ADD PRIMARY KEY (`email_id`),
  ADD KEY `emails_textfromaddr` (`from_addr`);

--
-- Indexes for table `email_addresses`
--
ALTER TABLE `email_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_ea_caps_opt_out_invalid` (`email_address_caps`,`opt_out`,`invalid_email`),
  ADD KEY `idx_ea_opt_out_invalid` (`email_address`,`opt_out`,`invalid_email`);

--
-- Indexes for table `email_addresses_audit`
--
ALTER TABLE `email_addresses_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_email_addresses_parent_id` (`parent_id`);

--
-- Indexes for table `email_addr_bean_rel`
--
ALTER TABLE `email_addr_bean_rel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_email_address_id` (`email_address_id`),
  ADD KEY `idx_bean_id` (`bean_id`,`bean_module`);

--
-- Indexes for table `email_cache`
--
ALTER TABLE `email_cache`
  ADD KEY `idx_ie_id` (`ie_id`),
  ADD KEY `idx_mail_date` (`ie_id`,`mbox`,`senddate`),
  ADD KEY `idx_mail_from` (`ie_id`,`mbox`,`fromaddr`),
  ADD KEY `idx_mail_subj` (`subject`),
  ADD KEY `idx_mail_to` (`toaddr`);

--
-- Indexes for table `email_marketing`
--
ALTER TABLE `email_marketing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_emmkt_name` (`name`),
  ADD KEY `idx_emmkit_del` (`deleted`);

--
-- Indexes for table `email_marketing_prospect_lists`
--
ALTER TABLE `email_marketing_prospect_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_mp_prospects` (`email_marketing_id`,`prospect_list_id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_email_template_name` (`name`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fields_meta_data`
--
ALTER TABLE `fields_meta_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_meta_id_del` (`id`,`deleted`),
  ADD KEY `idx_meta_cm_del` (`custom_module`,`deleted`);

--
-- Indexes for table `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_parent_folder` (`parent_folder`);

--
-- Indexes for table `folders_rel`
--
ALTER TABLE `folders_rel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_poly_module_poly_id` (`polymorphic_module`,`polymorphic_id`),
  ADD KEY `idx_fr_id_deleted_poly` (`folder_id`,`deleted`,`polymorphic_id`);

--
-- Indexes for table `folders_subscriptions`
--
ALTER TABLE `folders_subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_folder_id_assigned_user_id` (`folder_id`,`assigned_user_id`);

--
-- Indexes for table `fp_events`
--
ALTER TABLE `fp_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fp_events_audit`
--
ALTER TABLE `fp_events_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_fp_events_parent_id` (`parent_id`);

--
-- Indexes for table `fp_events_contacts_c`
--
ALTER TABLE `fp_events_contacts_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fp_events_contacts_alt` (`fp_events_contactsfp_events_ida`,`fp_events_contactscontacts_idb`);

--
-- Indexes for table `fp_events_fp_event_delegates_1_c`
--
ALTER TABLE `fp_events_fp_event_delegates_1_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fp_events_fp_event_delegates_1_ida1` (`fp_events_fp_event_delegates_1fp_events_ida`),
  ADD KEY `fp_events_fp_event_delegates_1_alt` (`fp_events_fp_event_delegates_1fp_event_delegates_idb`);

--
-- Indexes for table `fp_events_fp_event_locations_1_c`
--
ALTER TABLE `fp_events_fp_event_locations_1_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fp_events_fp_event_locations_1_alt` (`fp_events_fp_event_locations_1fp_events_ida`,`fp_events_fp_event_locations_1fp_event_locations_idb`);

--
-- Indexes for table `fp_events_leads_1_c`
--
ALTER TABLE `fp_events_leads_1_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fp_events_leads_1_alt` (`fp_events_leads_1fp_events_ida`,`fp_events_leads_1leads_idb`);

--
-- Indexes for table `fp_events_prospects_1_c`
--
ALTER TABLE `fp_events_prospects_1_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fp_events_prospects_1_alt` (`fp_events_prospects_1fp_events_ida`,`fp_events_prospects_1prospects_idb`);

--
-- Indexes for table `fp_event_locations`
--
ALTER TABLE `fp_event_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fp_event_locations_audit`
--
ALTER TABLE `fp_event_locations_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_fp_event_locations_parent_id` (`parent_id`);

--
-- Indexes for table `fp_event_locations_fp_events_1_c`
--
ALTER TABLE `fp_event_locations_fp_events_1_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fp_event_locations_fp_events_1_ida1` (`fp_event_locations_fp_events_1fp_event_locations_ida`),
  ADD KEY `fp_event_locations_fp_events_1_alt` (`fp_event_locations_fp_events_1fp_events_idb`);

--
-- Indexes for table `import_maps`
--
ALTER TABLE `import_maps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_owner_module_name` (`assigned_user_id`,`module`,`name`,`deleted`);

--
-- Indexes for table `inbound_email`
--
ALTER TABLE `inbound_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbound_email_autoreply`
--
ALTER TABLE `inbound_email_autoreply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_ie_autoreplied_to` (`autoreplied_to`);

--
-- Indexes for table `inbound_email_cache_ts`
--
ALTER TABLE `inbound_email_cache_ts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jjwg_address_cache`
--
ALTER TABLE `jjwg_address_cache`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jjwg_address_cache_audit`
--
ALTER TABLE `jjwg_address_cache_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_jjwg_address_cache_parent_id` (`parent_id`);

--
-- Indexes for table `jjwg_areas`
--
ALTER TABLE `jjwg_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jjwg_areas_audit`
--
ALTER TABLE `jjwg_areas_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_jjwg_areas_parent_id` (`parent_id`);

--
-- Indexes for table `jjwg_maps`
--
ALTER TABLE `jjwg_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jjwg_maps_audit`
--
ALTER TABLE `jjwg_maps_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_jjwg_maps_parent_id` (`parent_id`);

--
-- Indexes for table `jjwg_maps_jjwg_areas_c`
--
ALTER TABLE `jjwg_maps_jjwg_areas_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jjwg_maps_jjwg_areas_alt` (`jjwg_maps_5304wg_maps_ida`,`jjwg_maps_41f2g_areas_idb`);

--
-- Indexes for table `jjwg_maps_jjwg_markers_c`
--
ALTER TABLE `jjwg_maps_jjwg_markers_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jjwg_maps_jjwg_markers_alt` (`jjwg_maps_b229wg_maps_ida`,`jjwg_maps_2e31markers_idb`);

--
-- Indexes for table `jjwg_markers`
--
ALTER TABLE `jjwg_markers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jjwg_markers_audit`
--
ALTER TABLE `jjwg_markers_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_jjwg_markers_parent_id` (`parent_id`);

--
-- Indexes for table `job_queue`
--
ALTER TABLE `job_queue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_status_scheduler` (`status`,`scheduler_id`),
  ADD KEY `idx_status_time` (`status`,`execute_time`,`date_entered`),
  ADD KEY `idx_status_entered` (`status`,`date_entered`),
  ADD KEY `idx_status_modified` (`status`,`date_modified`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_lead_acct_name_first` (`account_name`,`deleted`),
  ADD KEY `idx_lead_last_first` (`last_name`,`first_name`,`deleted`),
  ADD KEY `idx_lead_del_stat` (`last_name`,`status`,`deleted`,`first_name`),
  ADD KEY `idx_lead_opp_del` (`opportunity_id`,`deleted`),
  ADD KEY `idx_leads_acct_del` (`account_id`,`deleted`),
  ADD KEY `idx_del_user` (`deleted`,`assigned_user_id`),
  ADD KEY `idx_lead_assigned` (`assigned_user_id`),
  ADD KEY `idx_lead_contact` (`contact_id`),
  ADD KEY `idx_reports_to` (`reports_to_id`),
  ADD KEY `idx_lead_phone_work` (`phone_work`),
  ADD KEY `idx_leads_id_del` (`id`,`deleted`);

--
-- Indexes for table `leads_audit`
--
ALTER TABLE `leads_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_leads_parent_id` (`parent_id`);

--
-- Indexes for table `leads_cstm`
--
ALTER TABLE `leads_cstm`
  ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `linked_documents`
--
ALTER TABLE `linked_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_parent_document` (`parent_type`,`parent_id`,`document_id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_mtg_name` (`name`),
  ADD KEY `idx_meet_par_del` (`parent_id`,`parent_type`,`deleted`),
  ADD KEY `idx_meet_stat_del` (`assigned_user_id`,`status`,`deleted`),
  ADD KEY `idx_meet_date_start` (`date_start`);

--
-- Indexes for table `meetings_contacts`
--
ALTER TABLE `meetings_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_con_mtg_mtg` (`meeting_id`),
  ADD KEY `idx_con_mtg_con` (`contact_id`),
  ADD KEY `idx_meeting_contact` (`meeting_id`,`contact_id`);

--
-- Indexes for table `meetings_cstm`
--
ALTER TABLE `meetings_cstm`
  ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `meetings_leads`
--
ALTER TABLE `meetings_leads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_lead_meeting_meeting` (`meeting_id`),
  ADD KEY `idx_lead_meeting_lead` (`lead_id`),
  ADD KEY `idx_meeting_lead` (`meeting_id`,`lead_id`);

--
-- Indexes for table `meetings_users`
--
ALTER TABLE `meetings_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_usr_mtg_mtg` (`meeting_id`),
  ADD KEY `idx_usr_mtg_usr` (`user_id`),
  ADD KEY `idx_meeting_users` (`meeting_id`,`user_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_note_name` (`name`),
  ADD KEY `idx_notes_parent` (`parent_id`,`parent_type`),
  ADD KEY `idx_note_contact` (`contact_id`),
  ADD KEY `idx_notes_assigned_del` (`deleted`,`assigned_user_id`);

--
-- Indexes for table `oauth2clients`
--
ALTER TABLE `oauth2clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth2tokens`
--
ALTER TABLE `oauth2tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_consumer`
--
ALTER TABLE `oauth_consumer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ckey` (`c_key`);

--
-- Indexes for table `oauth_nonce`
--
ALTER TABLE `oauth_nonce`
  ADD PRIMARY KEY (`conskey`,`nonce`),
  ADD KEY `oauth_nonce_keyts` (`conskey`,`nonce_ts`);

--
-- Indexes for table `oauth_tokens`
--
ALTER TABLE `oauth_tokens`
  ADD PRIMARY KEY (`id`,`deleted`),
  ADD KEY `oauth_state_ts` (`tstate`,`token_ts`),
  ADD KEY `constoken_key` (`consumer`);

--
-- Indexes for table `opportunities`
--
ALTER TABLE `opportunities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_opp_name` (`name`),
  ADD KEY `idx_opp_assigned` (`assigned_user_id`),
  ADD KEY `idx_opp_id_deleted` (`id`,`deleted`);

--
-- Indexes for table `opportunities_audit`
--
ALTER TABLE `opportunities_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_opportunities_parent_id` (`parent_id`);

--
-- Indexes for table `opportunities_contacts`
--
ALTER TABLE `opportunities_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_con_opp_con` (`contact_id`),
  ADD KEY `idx_con_opp_opp` (`opportunity_id`),
  ADD KEY `idx_opportunities_contacts` (`opportunity_id`,`contact_id`);

--
-- Indexes for table `opportunities_cstm`
--
ALTER TABLE `opportunities_cstm`
  ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `outbound_email`
--
ALTER TABLE `outbound_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outbound_email_audit`
--
ALTER TABLE `outbound_email_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_outbound_email_parent_id` (`parent_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_accounts`
--
ALTER TABLE `projects_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_proj_acct_proj` (`project_id`),
  ADD KEY `idx_proj_acct_acct` (`account_id`),
  ADD KEY `projects_accounts_alt` (`project_id`,`account_id`);

--
-- Indexes for table `projects_bugs`
--
ALTER TABLE `projects_bugs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_proj_bug_proj` (`project_id`),
  ADD KEY `idx_proj_bug_bug` (`bug_id`),
  ADD KEY `projects_bugs_alt` (`project_id`,`bug_id`);

--
-- Indexes for table `projects_cases`
--
ALTER TABLE `projects_cases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_proj_case_proj` (`project_id`),
  ADD KEY `idx_proj_case_case` (`case_id`),
  ADD KEY `projects_cases_alt` (`project_id`,`case_id`);

--
-- Indexes for table `projects_contacts`
--
ALTER TABLE `projects_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_proj_con_proj` (`project_id`),
  ADD KEY `idx_proj_con_con` (`contact_id`),
  ADD KEY `projects_contacts_alt` (`project_id`,`contact_id`);

--
-- Indexes for table `projects_opportunities`
--
ALTER TABLE `projects_opportunities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_proj_opp_proj` (`project_id`),
  ADD KEY `idx_proj_opp_opp` (`opportunity_id`),
  ADD KEY `projects_opportunities_alt` (`project_id`,`opportunity_id`);

--
-- Indexes for table `projects_products`
--
ALTER TABLE `projects_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_proj_prod_project` (`project_id`),
  ADD KEY `idx_proj_prod_product` (`product_id`),
  ADD KEY `projects_products_alt` (`project_id`,`product_id`);

--
-- Indexes for table `project_contacts_1_c`
--
ALTER TABLE `project_contacts_1_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_contacts_1_alt` (`project_contacts_1project_ida`,`project_contacts_1contacts_idb`);

--
-- Indexes for table `project_cstm`
--
ALTER TABLE `project_cstm`
  ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `project_task`
--
ALTER TABLE `project_task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_task_audit`
--
ALTER TABLE `project_task_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_project_task_parent_id` (`parent_id`);

--
-- Indexes for table `project_users_1_c`
--
ALTER TABLE `project_users_1_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_users_1_alt` (`project_users_1project_ida`,`project_users_1users_idb`);

--
-- Indexes for table `prospects`
--
ALTER TABLE `prospects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prospect_auto_tracker_key` (`tracker_key`),
  ADD KEY `idx_prospects_last_first` (`last_name`,`first_name`,`deleted`),
  ADD KEY `idx_prospecs_del_last` (`last_name`,`deleted`),
  ADD KEY `idx_prospects_id_del` (`id`,`deleted`),
  ADD KEY `idx_prospects_assigned` (`assigned_user_id`);

--
-- Indexes for table `prospects_cstm`
--
ALTER TABLE `prospects_cstm`
  ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `prospect_lists`
--
ALTER TABLE `prospect_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_prospect_list_name` (`name`);

--
-- Indexes for table `prospect_lists_prospects`
--
ALTER TABLE `prospect_lists_prospects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_plp_pro_id` (`prospect_list_id`,`deleted`),
  ADD KEY `idx_plp_rel_id` (`related_id`,`related_type`,`prospect_list_id`);

--
-- Indexes for table `prospect_list_campaigns`
--
ALTER TABLE `prospect_list_campaigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_pro_id` (`prospect_list_id`),
  ADD KEY `idx_cam_id` (`campaign_id`),
  ADD KEY `idx_prospect_list_campaigns` (`prospect_list_id`,`campaign_id`);

--
-- Indexes for table `relationships`
--
ALTER TABLE `relationships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_rel_name` (`relationship_name`);

--
-- Indexes for table `releases`
--
ALTER TABLE `releases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_releases` (`name`,`deleted`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_reminder_name` (`name`),
  ADD KEY `idx_reminder_deleted` (`deleted`),
  ADD KEY `idx_reminder_related_event_module` (`related_event_module`),
  ADD KEY `idx_reminder_related_event_module_id` (`related_event_module_id`);

--
-- Indexes for table `reminders_invitees`
--
ALTER TABLE `reminders_invitees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_reminder_invitee_name` (`name`),
  ADD KEY `idx_reminder_invitee_assigned_user_id` (`assigned_user_id`),
  ADD KEY `idx_reminder_invitee_reminder_id` (`reminder_id`),
  ADD KEY `idx_reminder_invitee_related_invitee_module` (`related_invitee_module`),
  ADD KEY `idx_reminder_invitee_related_invitee_module_id` (`related_invitee_module_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_role_id_del` (`id`,`deleted`);

--
-- Indexes for table `roles_modules`
--
ALTER TABLE `roles_modules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_role_id` (`role_id`),
  ADD KEY `idx_module_id` (`module_id`);

--
-- Indexes for table `roles_users`
--
ALTER TABLE `roles_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_ru_role_id` (`role_id`),
  ADD KEY `idx_ru_user_id` (`user_id`);

--
-- Indexes for table `saved_search`
--
ALTER TABLE `saved_search`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_desc` (`name`,`deleted`);

--
-- Indexes for table `schedulers`
--
ALTER TABLE `schedulers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_schedule` (`date_time_start`,`deleted`);

--
-- Indexes for table `securitygroups`
--
ALTER TABLE `securitygroups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `securitygroups_acl_roles`
--
ALTER TABLE `securitygroups_acl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `securitygroups_audit`
--
ALTER TABLE `securitygroups_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_securitygroups_parent_id` (`parent_id`);

--
-- Indexes for table `securitygroups_default`
--
ALTER TABLE `securitygroups_default`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `securitygroups_records`
--
ALTER TABLE `securitygroups_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_securitygroups_records_mod` (`module`,`deleted`,`record_id`,`securitygroup_id`),
  ADD KEY `idx_securitygroups_records_del` (`deleted`,`record_id`,`module`,`securitygroup_id`);

--
-- Indexes for table `securitygroups_users`
--
ALTER TABLE `securitygroups_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `securitygroups_users_idxa` (`securitygroup_id`),
  ADD KEY `securitygroups_users_idxb` (`user_id`),
  ADD KEY `securitygroups_users_idxc` (`user_id`,`deleted`,`securitygroup_id`,`id`),
  ADD KEY `securitygroups_users_idxd` (`user_id`,`deleted`,`securitygroup_id`);

--
-- Indexes for table `spots`
--
ALTER TABLE `spots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sugarfeed`
--
ALTER TABLE `sugarfeed`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sgrfeed_date` (`date_entered`,`deleted`);

--
-- Indexes for table `surveyquestionoptions`
--
ALTER TABLE `surveyquestionoptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveyquestionoptions_audit`
--
ALTER TABLE `surveyquestionoptions_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_surveyquestionoptions_parent_id` (`parent_id`);

--
-- Indexes for table `surveyquestionoptions_surveyquestionresponses`
--
ALTER TABLE `surveyquestionoptions_surveyquestionresponses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surveyquestionoptions_surveyquestionresponses_alt` (`surveyq72c7options_ida`,`surveyq10d4sponses_idb`);

--
-- Indexes for table `surveyquestionresponses`
--
ALTER TABLE `surveyquestionresponses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveyquestionresponses_audit`
--
ALTER TABLE `surveyquestionresponses_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_surveyquestionresponses_parent_id` (`parent_id`);

--
-- Indexes for table `surveyquestions`
--
ALTER TABLE `surveyquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveyquestions_audit`
--
ALTER TABLE `surveyquestions_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_surveyquestions_parent_id` (`parent_id`);

--
-- Indexes for table `surveyresponses`
--
ALTER TABLE `surveyresponses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveyresponses_audit`
--
ALTER TABLE `surveyresponses_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_surveyresponses_parent_id` (`parent_id`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveys_audit`
--
ALTER TABLE `surveys_audit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_surveys_parent_id` (`parent_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_tsk_name` (`name`),
  ADD KEY `idx_task_con_del` (`contact_id`,`deleted`),
  ADD KEY `idx_task_par_del` (`parent_id`,`parent_type`,`deleted`),
  ADD KEY `idx_task_assigned` (`assigned_user_id`),
  ADD KEY `idx_task_status` (`status`);

--
-- Indexes for table `templatesectionline`
--
ALTER TABLE `templatesectionline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracker`
--
ALTER TABLE `tracker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_tracker_iid` (`item_id`),
  ADD KEY `idx_tracker_userid_vis_id` (`user_id`,`visible`,`id`),
  ADD KEY `idx_tracker_userid_itemid_vis` (`user_id`,`item_id`,`visible`),
  ADD KEY `idx_tracker_monitor_id` (`monitor_id`),
  ADD KEY `idx_tracker_date_modified` (`date_modified`);

--
-- Indexes for table `upgrade_history`
--
ALTER TABLE `upgrade_history`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `upgrade_history_md5_uk` (`md5sum`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_name` (`user_name`,`is_group`,`status`,`last_name`(30),`first_name`(30),`id`);

--
-- Indexes for table `users_feeds`
--
ALTER TABLE `users_feeds`
  ADD KEY `idx_ud_user_id` (`user_id`,`feed_id`);

--
-- Indexes for table `users_last_import`
--
ALTER TABLE `users_last_import`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_id` (`assigned_user_id`);

--
-- Indexes for table `users_password_link`
--
ALTER TABLE `users_password_link`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_username` (`username`);

--
-- Indexes for table `users_signatures`
--
ALTER TABLE `users_signatures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_usersig_uid` (`user_id`);

--
-- Indexes for table `user_preferences`
--
ALTER TABLE `user_preferences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_userprefnamecat` (`assigned_user_id`,`category`);

--
-- Indexes for table `vcals`
--
ALTER TABLE `vcals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_vcal` (`type`,`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bugs`
--
ALTER TABLE `bugs`
  MODIFY `bug_number` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `tracker_key` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campaign_trkrs`
--
ALTER TABLE `campaign_trkrs`
  MODIFY `tracker_key` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `case_number` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emailman`
--
ALTER TABLE `emailman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prospects`
--
ALTER TABLE `prospects`
  MODIFY `tracker_key` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tracker`
--
ALTER TABLE `tracker`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
