-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2020 at 07:07 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dv_medical_terrace`
--

-- --------------------------------------------------------

--
-- Table structure for table `dv_approval_request`
--

CREATE TABLE `dv_approval_request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_approval_request` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dv_approval_request`
--

INSERT INTO `dv_approval_request` (`id`, `type`, `type_id`, `date_approval_request`, `created_at`, `updated_at`) VALUES
(1, '4', '22', '2020-02-20', '2020-02-19 19:29:47', '2020-02-19 19:29:47'),
(2, '4', '23', '2020-02-20', '2020-02-19 20:23:28', '2020-02-19 20:23:28'),
(3, '4', '23', '2020-02-20', '2020-02-19 20:23:28', '2020-02-19 20:23:28'),
(4, '4', '23', '2020-02-20', '2020-02-19 20:23:29', '2020-02-19 20:23:29'),
(5, '4', '23', '2020-02-20', '2020-02-19 20:23:29', '2020-02-19 20:23:29'),
(6, '4', '23', '2020-02-20', '2020-02-19 20:23:29', '2020-02-19 20:23:29'),
(7, '4', '23', '2020-02-20', '2020-02-19 20:23:29', '2020-02-19 20:23:29'),
(8, '4', '23', '2020-02-20', '2020-02-19 20:23:29', '2020-02-19 20:23:29'),
(9, '4', '23', '2020-02-20', '2020-02-19 20:23:30', '2020-02-19 20:23:30'),
(10, '4', '23', '2020-02-20', '2020-02-19 20:23:30', '2020-02-19 20:23:30'),
(11, '4', '23', '2020-02-20', '2020-02-19 20:23:30', '2020-02-19 20:23:30'),
(12, '4', '22', '2020-02-20', '2020-02-19 20:24:00', '2020-02-19 20:24:00'),
(13, '4', '21', '2020-02-20', '2020-02-19 20:26:03', '2020-02-19 20:26:03'),
(14, '4', '23', '2020-02-20', '2020-02-19 20:30:12', '2020-02-19 20:30:12'),
(15, '4', '21', '2020-02-20', '2020-02-19 23:01:10', '2020-02-19 23:01:10'),
(16, '4', '21', '2020-02-20', '2020-02-19 23:02:27', '2020-02-19 23:02:27'),
(17, '4', '22', '2020-02-20', '2020-02-19 23:03:32', '2020-02-19 23:03:32'),
(18, '4', '18', '2020-02-20', '2020-02-19 23:24:55', '2020-02-19 23:24:55'),
(19, '4', '18', '2020-02-20', '2020-02-19 23:29:41', '2020-02-19 23:29:41'),
(20, '4', '20', '2020-02-20', '2020-02-19 23:30:14', '2020-02-19 23:30:14'),
(21, '4', '20', '2020-02-20', '2020-02-19 23:30:20', '2020-02-19 23:30:20'),
(22, '3', '3', '2020-02-20', '2020-02-20 01:25:20', '2020-02-20 01:25:20'),
(23, '3', '3', '2020-02-20', '2020-02-20 01:26:54', '2020-02-20 01:26:54'),
(24, '3', '3', '2020-02-20', '2020-02-20 01:27:05', '2020-02-20 01:27:05'),
(25, '3', '4', '2020-02-20', '2020-02-20 01:51:43', '2020-02-20 01:51:43'),
(26, '3', '4', '2020-02-20', '2020-02-20 01:52:22', '2020-02-20 01:52:22'),
(27, '4', '18', '2020-02-20', '2020-02-20 02:22:38', '2020-02-20 02:22:38'),
(28, '4', '18', '2020-02-22', '2020-02-21 22:42:25', '2020-02-21 22:42:25'),
(29, '4', '18', '2020-02-22', '2020-02-21 22:42:26', '2020-02-21 22:42:26');

-- --------------------------------------------------------

--
-- Table structure for table `dv_approve`
--

CREATE TABLE `dv_approve` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_approve` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dv_approved`
--

CREATE TABLE `dv_approved` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `source_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_approved` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dv_archive`
--

CREATE TABLE `dv_archive` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tracking_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `archived_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dv_archive`
--

INSERT INTO `dv_archive` (`id`, `type`, `type_id`, `tracking_type`, `archived_date`, `created_at`, `updated_at`) VALUES
(1, '4', '21', '1', '2020-02-19 08:57', '2020-02-19 00:57:04', '2020-02-19 00:57:04'),
(2, '4', '22', '1', '2020-02-19 09:19', '2020-02-19 01:19:37', '2020-02-19 01:19:37'),
(3, '4', '23', '1', '2020-02-19 09:22', '2020-02-19 01:22:19', '2020-02-19 01:22:19'),
(4, '4', '22', '3', '2020-02-20', '2020-02-19 19:29:47', '2020-02-19 19:29:47'),
(5, '4', '23', '5', '2020-02-20', '2020-02-19 20:23:28', '2020-02-19 20:23:28'),
(6, '4', '23', '5', '2020-02-20', '2020-02-19 20:23:28', '2020-02-19 20:23:28'),
(7, '4', '23', '5', '2020-02-20', '2020-02-19 20:23:29', '2020-02-19 20:23:29'),
(8, '4', '23', '5', '2020-02-20', '2020-02-19 20:23:29', '2020-02-19 20:23:29'),
(9, '4', '23', '5', '2020-02-20', '2020-02-19 20:23:29', '2020-02-19 20:23:29'),
(10, '4', '23', '5', '2020-02-20', '2020-02-19 20:23:29', '2020-02-19 20:23:29'),
(11, '4', '23', '5', '2020-02-20', '2020-02-19 20:23:29', '2020-02-19 20:23:29'),
(12, '4', '23', '5', '2020-02-20', '2020-02-19 20:23:30', '2020-02-19 20:23:30'),
(13, '4', '23', '5', '2020-02-20', '2020-02-19 20:23:30', '2020-02-19 20:23:30'),
(14, '4', '23', '5', '2020-02-20', '2020-02-19 20:23:30', '2020-02-19 20:23:30'),
(15, '4', '22', '5', '2020-02-20', '2020-02-19 20:24:00', '2020-02-19 20:24:00'),
(16, '4', '21', '5', '2020-02-20', '2020-02-19 20:26:03', '2020-02-19 20:26:03'),
(17, '4', '23', '6', '2020-02-20', '2020-02-19 20:30:12', '2020-02-19 20:30:12'),
(18, '4', '21', '3', '2020-02-20', '2020-02-19 23:01:10', '2020-02-19 23:01:10'),
(19, '4', '21', '5', '2020-02-20', '2020-02-19 23:02:27', '2020-02-19 23:02:27'),
(20, '4', '22', '6', '2020-02-20', '2020-02-19 23:03:32', '2020-02-19 23:03:32'),
(21, '4', '18', '3', '2020-02-20', '2020-02-19 23:24:55', '2020-02-19 23:24:55'),
(22, '4', '18', '5', '2020-02-20', '2020-02-19 23:29:41', '2020-02-19 23:29:41'),
(23, '4', '20', '3', '2020-02-20', '2020-02-19 23:30:14', '2020-02-19 23:30:14'),
(24, '4', '20', '5', '2020-02-20', '2020-02-19 23:30:20', '2020-02-19 23:30:20'),
(25, '4', '24', '1', '2020-02-20', '2020-02-20 00:11:26', '2020-02-20 00:11:26'),
(26, '4', '25', '1', '2020-02-20', '2020-02-20 00:14:59', '2020-02-20 00:14:59'),
(27, '4', '26', '1', '2020-02-20', '2020-02-20 00:24:21', '2020-02-20 00:24:21'),
(28, '3', '3', '3', '2020-02-20', '2020-02-20 01:25:20', '2020-02-20 01:25:20'),
(29, '3', '3', '5', '2020-02-20', '2020-02-20 01:26:54', '2020-02-20 01:26:54'),
(30, '3', '3', '6', '2020-02-20', '2020-02-20 01:27:05', '2020-02-20 01:27:05'),
(31, '3', '4', '3', '2020-02-20', '2020-02-20 01:51:43', '2020-02-20 01:51:43'),
(32, '3', '4', '5', '2020-02-20', '2020-02-20 01:52:22', '2020-02-20 01:52:22'),
(33, '4', '18', '6', '2020-02-20', '2020-02-20 02:22:38', '2020-02-20 02:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `dv_doctors`
--

CREATE TABLE `dv_doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url_generation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `certificate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alphabet_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_caption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_alt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `career_academic_back` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `career_work_exp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `career_awards` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_career` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_office` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dv_doctors`
--

INSERT INTO `dv_doctors` (`id`, `url_generation`, `status`, `certificate`, `name`, `alphabet_name`, `image`, `image_caption`, `image_alt`, `industry`, `conference`, `birthday`, `place_of_birth`, `career_academic_back`, `career_work_exp`, `career_awards`, `sort_career`, `hospital_office`, `department`, `doctor_comment`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum', 1, 'Lorem Ipsum', 'Locelle Emperio', 'Lorem Ipsum', '', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dv_drafts`
--

CREATE TABLE `dv_drafts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_drafts` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dv_hospital`
--

CREATE TABLE `dv_hospital` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hospital_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_ins` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_phonic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `common_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_eng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parking` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_caption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_alt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hosp_subheading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hosp_text_subheading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medsublist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dv_hospital_releasing`
--

CREATE TABLE `dv_hospital_releasing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hospital_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_release` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dv_preview`
--

CREATE TABLE `dv_preview` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_preview` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dv_release`
--

CREATE TABLE `dv_release` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_release` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dv_release_reservation`
--

CREATE TABLE `dv_release_reservation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_release_reservation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dv_source_type`
--

CREATE TABLE `dv_source_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `source_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hospital_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `explain_details`
--

CREATE TABLE `explain_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `explain_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feature_details`
--

CREATE TABLE `feature_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_access`
--

CREATE TABLE `hospital_access` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hospital_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_detail_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_access_det`
--

CREATE TABLE `hospital_access_det` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `access_detail_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `by_what` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_where` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minutes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_departments`
--

CREATE TABLE `hospital_departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dpt_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospital_departments`
--

INSERT INTO `hospital_departments` (`id`, `dpt_name`, `created_at`, `updated_at`) VALUES
(10, '糖　尿病内科', NULL, NULL),
(12, '内分泌内科', NULL, NULL),
(13, '脂質代謝内科', NULL, NULL),
(14, '腎臓内科', NULL, NULL),
(15, '神経内科', NULL, NULL),
(16, '心療内科', NULL, NULL),
(17, '感染症内科', NULL, NULL),
(18, '漢方内科', NULL, NULL),
(19, '老年内科', NULL, NULL),
(20, '女性内科', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hospital_departments_exam`
--

CREATE TABLE `hospital_departments_exam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_subheading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weekdays` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_hours` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_dpt_explain`
--

CREATE TABLE `hospital_dpt_explain` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dpt_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `explain_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_feature`
--

CREATE TABLE `hospital_feature` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hospital_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_staff`
--

CREATE TABLE `hospital_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hospital_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosp_dpt_special_hours`
--

CREATE TABLE `hosp_dpt_special_hours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dpt_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weekdays` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `treatment_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `illness`
--

CREATE TABLE `illness` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ill_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_shoulder` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_ph` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_doc_role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_doc_cmt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_img_cap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_img_alt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_kwords` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_seo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_seo_txt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_meta_a` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_meta_b` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_h1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_h2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_tag_kw` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_tag_dep` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_tag_symp` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_tag_season` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_tag_season_txt` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_tag_free` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ill_summary` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_sub_txt` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ill_cat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tracking_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `illness`
--

INSERT INTO `illness` (`id`, `ill_id`, `ill_url`, `ill_shoulder`, `ill_name`, `ill_ph`, `ill_doc`, `ill_doc_role`, `ill_doc_cmt`, `ill_img`, `ill_img_cap`, `ill_img_alt`, `ill_kwords`, `ill_seo`, `ill_seo_txt`, `ill_meta_a`, `ill_meta_b`, `ill_h1`, `ill_h2`, `ill_tag_kw`, `ill_tag_dep`, `ill_tag_symp`, `ill_tag_season`, `ill_tag_season_txt`, `ill_tag_free`, `created_at`, `updated_at`, `ill_summary`, `ill_sub_txt`, `ill_cat`, `tracking_status`) VALUES
(18, '1892814520', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Locelle Emperio', '取材協力', 'この特集内容に関する先生からのコメントをお願いします。', '/img/H4pulF_template.jpg', 'Lorem Ipsum', 'Lorem Ipsum', '[{\"kword\":\"Lorem Ipsum\"},{\"kword\":\"Lorem Ipsum\"},{\"kword\":\"Lorem Ipsum\"},{\"kword\":\"null\"},{\"kword\":\"null\"},{\"kword\":\"null\"},{\"kword\":\"null\"},{\"kword\":\"null\"}]', '1', 'タイトルタグをカスタマイズす', '親譲りの無鉄砲で小供の時から 損ばかりしている。', '親譲りの無鉄砲で小供の時から損ばかりしている。', 'Lorem Ip', '[{\"h2\":\"Lorem Ipsum\"},{\"h2\":\"Lorem Ipsum\"},{\"h2\":\"Lorem Ipsum\"}]', '[{\"tag\":\"on\"},{\"tag\":\"on\"},{\"tag\":\"on\"}]', '[{\"tag_dep\":\"\\u8102\\u8cea\\u4ee3\\u8b1d\\u5185\\u79d1\"},{\"tag_dep\":\"\\u5185\\u5206\\u6ccc\\u5185\\u79d1\"},{\"tag_dep\":\"\\u5185\\u5206\\u6ccc\\u5185\\u79d1\"},{\"tag_dep\":\"\\u7cd6\\u3000\\u5c3f\\u75c5\\u5185\\u79d1\"},{\"tag_dep\":\"\\u7cd6\\u3000\\u5c3f\\u75c5\\u5185\\u79d1\"},{\"tag_dep\":\"\\u7cd6\\u3000\\u5c3f\\u75c5\\u5185\\u79d1\"}]', '[{\"tag_sy\":\"Lorem Ipsum\"},{\"tag_sy\":\"Lorem Ipsum\"},{\"tag_sy\":\"Lorem Ipsum\"},{\"tag_sy\":\"Lorem Ipsum\"},{\"tag_sy\":\"Lorem Ipsum\"},{\"tag_sy\":\"Lorem Ipsum\"}]', '[{\"tag_s\":\"on\"},{\"tag_s\":\"on\"},{\"tag_s\":\"on\"}]', '[{\"tag_txt\":\"Lorem Ipsum\"},{\"tag_txt\":\"Lorem Ipsum\"},{\"tag_txt\":\"Lorem Ipsum\"}]', '[{\"tag_f\":\"Lorem Ipsum\"},{\"tag_f\":\"Lorem Ipsum\"},{\"tag_f\":\"Lorem Ipsum\"}]', '2020-02-17 19:30:14', '2020-02-17 19:30:14', '[{\"sm\":\"\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30bf\\u3099\\u30df\\u30fc\\u3066\\u3099 \\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593 \\u3001\\u884c\\u9593 \\u7b49\\u3092\\u78ba\\u8a8d\\u3059 \\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\"},{\"sm\":\"\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30bf\\u3099\\u30df\\u30fc\\u3066\\u3099 \\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593 \\u3001\\u884c\\u9593 \\u7b49\\u3092\\u78ba\\u8a8d\\u3059 \\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\"},{\"sm\":\"\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30bf\\u3099\\u30df\\u30fc\\u3066\\u3099 \\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593 \\u3001\\u884c\\u9593 \\u7b49\\u3092\\u78ba\\u8a8d\\u3059 \\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\"},{\"sm\":\"\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30bf\\u3099\\u30df\\u30fc\\u3066\\u3099 \\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593 \\u3001\\u884c\\u9593 \\u7b49\\u3092\\u78ba\\u8a8d\\u3059 \\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\"},{\"sm\":\"\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30bf\\u3099\\u30df\\u30fc\\u3066\\u3099 \\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593 \\u3001\\u884c\\u9593 \\u7b49\\u3092\\u78ba\\u8a8d\\u3059 \\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\"}]', '[{\"heading\":\"\\u539f\\u56e0\",\"sub\":\"Lorem Ipsum\",\"txt_ckeditor\":\"<p>\\u30e1\\u30a4\\u30f3\\u5199\\u771f\\u306e\\u76f4\\u4e0b\\u306b\\u5165\\u308b\\u30ea\\u30fc\\u30c9\\u306e\\u90e8\\u5206\\u3067\\u3059\\u3002<\\/p>\"}]', '選択してください', '6'),
(20, '1721606116', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Locelle Emperio', '取材協力', 'この特集内容に関する先生からのコメントをお願いします。', '/img/zBm6cx_template1.jpg', 'Lorem Ipsum', 'Lorem Ipsum', '[{\"kword\":\"Lorem Ipsum\"},{\"kword\":\"Lorem Ipsum\"},{\"kword\":\"Lorem Ipsum\"},{\"kword\":\"null\"},{\"kword\":\"null\"},{\"kword\":\"null\"},{\"kword\":\"null\"},{\"kword\":\"null\"}]', '1', 'タイトルタグをカスタマイズす', '親譲りの無鉄砲で小供の時から 損ばかりしている。', '親譲りの無鉄砲で小供の時から損ばかりしている。', 'Lorem Ipsum', '[{\"h2\":\"Lorem Ipsum\"},{\"h2\":\"Lorem Ipsum\"},{\"h2\":\"Lorem Ipsum\"}]', '[{\"tag\":\"on\"},{\"tag\":\"on\"},{\"tag\":\"on\"}]', '[{\"tag_dep\":\"\\u8102\\u8cea\\u4ee3\\u8b1d\\u5185\\u79d1\"},{\"tag_dep\":\"\\u5185\\u5206\\u6ccc\\u5185\\u79d1\"},{\"tag_dep\":\"\\u5185\\u5206\\u6ccc\\u5185\\u79d1\"},{\"tag_dep\":\"\\u7cd6\\u3000\\u5c3f\\u75c5\\u5185\\u79d1\"},{\"tag_dep\":\"\\u7cd6\\u3000\\u5c3f\\u75c5\\u5185\\u79d1\"},{\"tag_dep\":\"\\u7cd6\\u3000\\u5c3f\\u75c5\\u5185\\u79d1\"}]', '[{\"tag_sy\":\"Lorem Ipsum\"},{\"tag_sy\":\"Lorem Ipsum\"},{\"tag_sy\":\"Lorem Ipsum\"},{\"tag_sy\":\"Lorem Ipsum\"},{\"tag_sy\":\"Lorem Ipsum\"},{\"tag_sy\":\"Lorem Ipsum\"}]', '[{\"tag_s\":\"1\"},{\"tag_s\":\"1\"},{\"tag_s\":\"1\"}]', '[{\"tag_txt\":\"Lorem Ipsum\"},{\"tag_txt\":\"Lorem Ipsum\"},{\"tag_txt\":\"Lorem Ipsum\"}]', '[{\"tag_f\":\"Lorem Ipsum\"},{\"tag_f\":\"Lorem Ipsum\"},{\"tag_f\":\"Lorem Ipsum\"}]', '2020-02-17 22:50:51', '2020-02-17 22:50:51', '[{\"sm\":\"\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30bf\\u3099\\u30df\\u30fc\\u3066\\u3099 \\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593 \\u3001\\u884c\\u9593 \\u7b49\\u3092\\u78ba\\u8a8d\\u3059 \\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\"},{\"sm\":\"\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30bf\\u3099\\u30df\\u30fc\\u3066\\u3099 \\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593 \\u3001\\u884c\\u9593 \\u7b49\\u3092\\u78ba\\u8a8d\\u3059 \\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\"},{\"sm\":\"\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30bf\\u3099\\u30df\\u30fc\\u3066\\u3099 \\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593 \\u3001\\u884c\\u9593 \\u7b49\\u3092\\u78ba\\u8a8d\\u3059 \\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\"},{\"sm\":\"\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30bf\\u3099\\u30df\\u30fc\\u3066\\u3099 \\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593 \\u3001\\u884c\\u9593 \\u7b49\\u3092\\u78ba\\u8a8d\\u3059 \\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\"},{\"sm\":\"\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30bf\\u3099\\u30df\\u30fc\\u3066\\u3099 \\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593 \\u3001\\u884c\\u9593 \\u7b49\\u3092\\u78ba\\u8a8d\\u3059 \\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\"}]', '[{\"heading\":null,\"sub\":\"Lorem Ipsum\",\"txt_ckeditor\":\"<p>\\u30e1\\u30a4\\u30f3\\u5199\\u771f\\u306e\\u76f4\\u4e0b\\u306b\\u5165\\u308b\\u30ea\\u30fc\\u30c9\\u306e\\u90e8\\u5206\\u3067\\u3059\\u3002<\\/p>\"}]', '選択してください', '5'),
(21, '604569556', 'Sample', 'Sample', 'Sample', 'Sample', '1', '監修', 'Sample', '/img/PpmgNq_S__41148420.jpg', 'Sample', 'Sample', '[{\"kword\":\"Sample\"},{\"kword\":\"Sample\"},{\"kword\":null},{\"kword\":null},{\"kword\":null},{\"kword\":null},{\"kword\":null},{\"kword\":null}]', 'on', 'Sample', 'Sample', 'Sample', 'Sample', '[{\"h2\":\"Sample\"},{\"h2\":\"Sample\"},{\"h2\":null}]', '[{\"tag\":\"1\"},{\"tag\":\"1\"}]', '[{\"tag_dep\":\"\\u5185\\u5206\\u6ccc\\u5185\\u79d1\"},{\"tag_dep\":\"\\u814e\\u81d3\\u5185\\u79d1\"},{\"tag_dep\":\"\\u8102\\u8cea\\u4ee3\\u8b1d\\u5185\\u79d1\"},{\"tag_dep\":\"\\u814e\\u81d3\\u5185\\u79d1\"},{\"tag_dep\":\"\\u8102\\u8cea\\u4ee3\\u8b1d\\u5185\\u79d1\"},{\"tag_dep\":\"\\u5185\\u5206\\u6ccc\\u5185\\u79d1\"}]', '[{\"tag_sy\":\"Sample\"},{\"tag_sy\":\"Sample\"},{\"tag_sy\":null},{\"tag_sy\":null},{\"tag_sy\":null},{\"tag_sy\":null}]', '[{\"tag_s\":\"1\"},{\"tag_s\":\"1\"}]', '[{\"tag_txt\":\"Sample\"},{\"tag_txt\":null},{\"tag_txt\":null}]', '[{\"tag_f\":\"Sample\"},{\"tag_f\":\"Sample\"},{\"tag_f\":null}]', '2020-02-19 00:57:04', '2020-02-19 00:57:04', '[{\"sm\":\"Sample\"},{\"sm\":\"Sample\"},{\"sm\":\"Sample\"},{\"sm\":\"Sample\"},{\"sm\":\"Sample\"}]', '[{\"heading\":\"\\u8fd1\\u5e74\\u306e\\u52d5\\u5411\",\"sub\":\"Sample\",\"txt_ckeditor\":\"<p>Sample<\\/p>\"}]', '女性特有のがん＊', '5'),
(22, '1894468992', 'sample', 'sample', 'sample', 'sample', '1', '監修', 'sample', '/img/UKH18T_S__41148420.jpg', 'sample', 'sample', '[{\"kword\":\"sample\"},{\"kword\":null},{\"kword\":null},{\"kword\":null},{\"kword\":null},{\"kword\":null},{\"kword\":null},{\"kword\":null}]', 'on', 'sample', 'sample', 'sample', 'Sample', '[{\"h2\":\"sample\"},{\"h2\":null},{\"h2\":null}]', '[{\"tag\":\"1\"}]', '[{\"tag_dep\":\"\\u8102\\u8cea\\u4ee3\\u8b1d\\u5185\\u79d1\"},{\"tag_dep\":\"\\u814e\\u81d3\\u5185\\u79d1\"},{\"tag_dep\":null},{\"tag_dep\":null},{\"tag_dep\":null},{\"tag_dep\":null}]', '[{\"tag_sy\":\"sample\"},{\"tag_sy\":\"sample\"},{\"tag_sy\":null},{\"tag_sy\":null},{\"tag_sy\":null},{\"tag_sy\":null}]', '[{\"tag_s\":\"1\"}]', '[{\"tag_txt\":\"sample\"},{\"tag_txt\":null},{\"tag_txt\":null}]', '[{\"tag_f\":\"sample\"},{\"tag_f\":\"sample\"},{\"tag_f\":null}]', '2020-02-19 01:19:37', '2020-02-19 01:19:37', '[{\"sm\":\"sample\"},{\"sm\":\"sample\"},{\"sm\":\"sample\"},{\"sm\":null},{\"sm\":null}]', '[{\"heading\":\"\\u8fd1\\u5e74\\u306e\\u52d5\\u5411\",\"sub\":\"sample\",\"txt_ckeditor\":\"<p>sample<\\/p>\"}]', '女性特有のがん＊', '6'),
(26, '1475439268', 'この特集内容に関す', 'この特集内容に関す', 'この特集内容に関す', 'この特集内容に関す', '1', '監修・取材協力', 'この特集内容に関する先生からのコメントをお願いします。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。', '/img/eaDB2T_S__41148420.jpg', 'この特集内容に関す', 'この特集内容に関す', '[{\"kword\":\"fsdfds\"},{\"kword\":\"gdsgdf\"},{\"kword\":\"erttw\"},{\"kword\":null},{\"kword\":null},{\"kword\":null},{\"kword\":null},{\"kword\":null}]', 'on', 'タイトルタグをカスタマイズする場合はこちらに入力ください', '親譲りの無鉄砲で小供の時から 損ばかりしている。小学校に居る時分学校の。', '親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をした。', 'Sample', '[{\"h2\":\"\\u3053\\u306e\\u7279\\u96c6\\u5185\\u5bb9\\u306b\\u95a2\\u3059\"},{\"h2\":\"\\u3053\\u306e\\u7279\\u96c6\\u5185\\u5bb9\\u306b\\u95a2\\u3059\"},{\"h2\":null}]', '[{\"tag\":\"1\"},{\"tag\":\"1\"},{\"tag\":\"1\"}]', '[{\"tag_dep\":\"\\u7cd6\\u3000\\u5c3f\\u75c5\\u5185\\u79d1\"},{\"tag_dep\":\"\\u7cd6\\u3000\\u5c3f\\u75c5\\u5185\\u79d1\"},{\"tag_dep\":\"\\u7cd6\\u3000\\u5c3f\\u75c5\\u5185\\u79d1\"},{\"tag_dep\":\"\\u7cd6\\u3000\\u5c3f\\u75c5\\u5185\\u79d1\"},{\"tag_dep\":\"\\u7cd6\\u3000\\u5c3f\\u75c5\\u5185\\u79d1\"},{\"tag_dep\":\"\\u7cd6\\u3000\\u5c3f\\u75c5\\u5185\\u79d1\"}]', '[{\"tag_sy\":\"\\u3053\\u306e\\u7279\\u96c6\\u5185\\u5bb9\\u306b\\u95a2\\u3059\"},{\"tag_sy\":\"\\u3053\\u306e\\u7279\\u96c6\\u5185\\u5bb9\\u306b\\u95a2\\u3059\"},{\"tag_sy\":null},{\"tag_sy\":null},{\"tag_sy\":null},{\"tag_sy\":null}]', '[{\"tag_s\":\"1\"},{\"tag_s\":\"1\"}]', '[{\"tag_txt\":\"\\u3053\\u306e\\u7279\\u96c6\\u5185\\u5bb9\\u306b\\u95a2\\u3059\"},{\"tag_txt\":null},{\"tag_txt\":null}]', '[{\"tag_f\":\"\\u3053\\u306e\\u7279\\u96c6\\u5185\\u5bb9\\u306b\\u95a2\\u3059\"},{\"tag_f\":\"\\u3053\\u306e\\u7279\\u96c6\\u5185\\u5bb9\\u306b\\u95a2\\u3059\"},{\"tag_f\":null}]', '2020-02-20 00:24:21', '2020-02-20 00:24:21', '[{\"sm\":\"\\u3053\\u306e\\u7279\\u96c6\\u5185\\u5bb9\\u306b\\u95a2\\u3059\"},{\"sm\":\"\\u3053\\u306e\\u7279\\u96c6\\u5185\\u5bb9\\u306b\\u95a2\\u3059\"},{\"sm\":\"\\u3053\\u306e\\u7279\\u96c6\\u5185\\u5bb9\\u306b\\u95a2\\u3059\"},{\"sm\":\"\\u3053\\u306e\\u7279\\u96c6\\u5185\\u5bb9\\u306b\\u95a2\\u3059\"},{\"sm\":\"\\u3053\\u306e\\u7279\\u96c6\\u5185\\u5bb9\\u306b\\u95a2\\u3059\"}]', '[{\"heading\":\"\\u75c7\\u72b6\",\"sub\":\"\\u3053\\u306e\\u7279\\u96c6\\u5185\\u5bb9\\u306b\\u95a2\\u3059\",\"txt_ckeditor\":\"<p>\\u30e1\\u30a4\\u30f3\\u5199\\u771f\\u306e\\u76f4\\u4e0b\\u306b\\u5165\\u308b\\u30ea\\u30fc\\u30c9\\u306e\\u90e8\\u5206\\u3067\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002<\\/p>\"}]', '女性特有のがん＊', '1');

-- --------------------------------------------------------

--
-- Table structure for table `illness_archive`
--

CREATE TABLE `illness_archive` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `illness_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_release` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `illness_category`
--

CREATE TABLE `illness_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ill_graph`
--

CREATE TABLE `ill_graph` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ig_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig_ill_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig_caption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig_txt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig_alt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ig_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ill_image`
--

CREATE TABLE `ill_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `im_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `im_ill_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `im_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `im_caption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `im_alt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_29_093932_create_dv_doctors_table', 1),
(4, '2019_09_23_085105_add_illness_category_table', 1),
(5, '2019_11_18_081235_create_hospital_table', 1),
(6, '2019_11_18_081332_create_hospital_access_table', 1),
(7, '2019_11_18_081411_create_hospital_access_det_table', 1),
(8, '2019_11_18_081447_create_hospital_departments_table', 1),
(9, '2019_11_18_081505_create_hospital_departments_exam_table', 1),
(10, '2019_11_18_081625_create_hosp_dpt_special_hours', 1),
(11, '2019_11_18_081729_create_hospital_feature', 1),
(12, '2019_11_18_081756_create_feature_images', 1),
(13, '2019_11_18_081843_create_hospital_dpt_explain', 1),
(14, '2019_11_18_081914_create_explain_image', 1),
(15, '2019_11_18_082023_create_equipments', 1),
(16, '2019_11_18_082049_create_hospital_staff', 1),
(17, '2020_01_21_035352_create_special_table', 1),
(18, '2020_01_21_055608_create_sp_lead_table', 1),
(19, '2020_01_24_062323_create_illness_table', 1),
(20, '2020_01_24_072552_create_ill_image_table', 1),
(21, '2020_01_24_074536_create_ill_graph_table', 1),
(22, '2020_01_27_033514_add_ill_summary_to_illness', 1),
(23, '2020_01_27_033836_add_ill_sub_txt_to_illness', 1),
(24, '2020_01_27_034200_create_risk_assessment_table', 1),
(25, '2020_01_27_070402_add_ill_cat_to_illness', 1),
(26, '2020_01_27_081235_add_ig_title_to_ill_graph', 1),
(27, '2020_01_28_060119_add_ra_result_to_risk_assessment', 1),
(28, '2020_01_29_062546_add_sp_id_to_special', 1),
(29, '2020_01_29_064902_add_sp_txt_to_special', 1),
(30, '2020_01_29_065006_add_sp_sum_to_special', 1),
(31, '2020_01_29_065059_add_sp_ill_img_to_special', 1),
(32, '2020_01_29_070452_add_sp_sum2_to_special', 1),
(33, '2020_01_29_071041_add_sp_seo_kwords_to_special', 1),
(34, '2020_01_29_071817_add_seo_title_to_special', 1),
(35, '2020_01_31_031041_add_sp_tag_season_txt_to_special', 2),
(36, '2020_02_04_015907_add_ill_sub1_and_ill_sub2_to_illness', 3),
(37, '2020_02_04_020141_add_ill_sub1_and_ill_sub2_to_illness', 4),
(38, '2020_02_04_063055_add_sp_sub1_and_sp_sub2_to_special', 5),
(39, '2020_02_04_070523_add_sp_sub3_and_sp_sub4_to_special', 6),
(40, '2020_02_12_085852_add_status_to_illness', 7),
(41, '2020_02_12_093004_add_sp_status_to_special', 8),
(42, '2020_02_13_040130_create_releasing_table', 9),
(43, '2020_02_17_034057_illness_archive', 9),
(44, '2020_02_17_034320_special_archive', 9),
(46, '2020_02_13_093740_create_drafts_table', 10),
(47, '2020_02_13_093852_create_approve_table', 10),
(48, '2020_02_13_093929_create_source_type_table', 10),
(49, '2020_02_14_035758_create_approved_table', 10),
(50, '2020_02_14_093112_add_drafts_table', 10),
(51, '2020_02_18_034041_add_ra_status_to_risk_assessment', 10),
(52, '2020_02_18_091309_add_preview_table', 11),
(53, '2020_02_18_091437_create_approval_request_table', 11),
(54, '2020_02_18_091512_create_release_reservation_table', 11),
(55, '2020_02_18_091534_create_release_table', 11),
(56, '2020_02_13_093311_create_archive_table', 12),
(57, '2020_02_19_082947_add_tracking_status_to_illness', 13),
(58, '2020_02_19_083023_add_tracking_status_to_special', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `risk_assessment`
--

CREATE TABLE `risk_assessment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ra_ill_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ra_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ra_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ra_result` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ra_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `risk_assessment`
--

INSERT INTO `risk_assessment` (`id`, `ra_ill_id`, `ra_title`, `ra_text`, `created_at`, `updated_at`, `ra_result`, `ra_status`) VALUES
(11, '1892814520', '1', '[{\"sh\":\"Sed ut perspiciatis\",\"rl\":\"1\"},{\"sh\":\"Sed ut perspiciatis\",\"rl\":\"2\"},{\"sh\":\"Sed ut perspiciatis\",\"rl\":\"3\"},{\"sh\":\"Sed ut perspiciatis\",\"rl\":\"4\"},{\"sh\":\"Sed ut perspiciatis\",\"rl\":\"5\"}]', '2020-02-17 19:30:14', '2020-02-17 19:30:14', '[{\"cr\":\"Lorem Ipsums\"},{\"cr\":\"Lorem Ipsums\"},{\"cr\":\"Lorem Ipsums\"},{\"cr\":\"Lorem Ipsums\"}]', '1'),
(12, '1892814520', '1', '[{\"sh2\":\"Lorem Ipsum\",\"rl2\":\"5\"},{\"sh2\":\"Lorem Ipsum\",\"rl2\":\"4\"},{\"sh2\":\"Lorem Ipsum\",\"rl2\":\"3\"},{\"sh2\":\"Lorem Ipsum\",\"rl2\":\"2\"},{\"sh2\":\"Lorem Ipsum\",\"rl2\":\"1\"}]', '2020-02-17 19:30:14', '2020-02-17 19:30:14', '[{\"cr2\":\"Sed ut perspiciatis\"},{\"cr2\":\"Sed ut perspiciatis\"},{\"cr2\":\"Sed ut perspiciatis\"},{\"cr2\":\"Sed ut perspiciatis\"}]', '2'),
(13, '1721606116', '1', '[{\"sh\":\"Sed ut perspiciatis\",\"rl\":\"1\"},{\"sh\":\"Sed ut perspiciatis\",\"rl\":\"2\"},{\"sh\":\"Sed ut perspiciatis\",\"rl\":\"3\"},{\"sh\":\"Sed ut perspiciatis\",\"rl\":\"4\"},{\"sh\":\"Sed ut perspiciatis\",\"rl\":\"5\"}]', '2020-02-17 22:50:51', '2020-02-17 22:50:51', '[{\"cr\":\"Lorem Ipsums\"},{\"cr\":\"Lorem Ipsums\"},{\"cr\":\"Lorem Ipsums\"},{\"cr\":\"Lorem Ipsums\"}]', '1'),
(14, '1721606116', '1', '[{\"sh2\":\"Lorem Ipsum\",\"rl2\":\"5\"},{\"sh2\":\"Lorem Ipsum\",\"rl2\":\"4\"},{\"sh2\":\"Lorem Ipsum\",\"rl2\":\"3\"},{\"sh2\":\"Lorem Ipsum\",\"rl2\":\"2\"},{\"sh2\":\"Lorem Ipsum\",\"rl2\":\"1\"}]', '2020-02-17 22:50:51', '2020-02-17 22:50:51', '[{\"cr2\":\"Sed ut perspiciatis\"},{\"cr2\":\"Sed ut perspiciatis\"},{\"cr2\":\"Sed ut perspiciatis\"},{\"cr2\":\"Sed ut perspiciatis\"}]', '2'),
(15, '604569556', '1', '[{\"sh\":\"Sample\",\"rl\":\"1\"},{\"sh\":\"Sample\",\"rl\":\"1\"},{\"sh\":\"Sample\",\"rl\":\"1\"},{\"sh\":\"Sample\",\"rl\":\"1\"},{\"sh\":\"Sample\",\"rl\":\"1\"}]', '2020-02-19 00:57:04', '2020-02-19 00:57:04', '[{\"cr\":\"Sample\"},{\"cr\":\"Sample\"},{\"cr\":\"Sample\"},{\"cr\":\"Sample\"}]', '1'),
(16, '1894468992', '1', '[{\"sh\":\"sample\",\"rl\":\"1\"},{\"sh\":\"sample\",\"rl\":\"1\"},{\"sh\":\"sample\",\"rl\":\"1\"},{\"sh\":null,\"rl\":\"1\"},{\"sh\":null,\"rl\":\"1\"}]', '2020-02-19 01:19:37', '2020-02-19 01:19:37', '[{\"cr\":null},{\"cr\":null},{\"cr\":null},{\"cr\":null}]', '1'),
(17, '1144922550', '1', '[{\"sh\":\"sample\",\"rl\":\"1\"},{\"sh\":\"sample\",\"rl\":\"1\"},{\"sh\":\"sample\",\"rl\":\"1\"},{\"sh\":null,\"rl\":\"1\"},{\"sh\":null,\"rl\":\"1\"}]', '2020-02-19 01:22:19', '2020-02-19 01:22:19', '[{\"cr\":null},{\"cr\":null},{\"cr\":null},{\"cr\":null}]', '1'),
(18, '1144922550', '1', '[{\"sh2\":\"sample\",\"rl2\":\"1\"},{\"sh2\":\"sample\",\"rl2\":\"1\"},{\"sh2\":null,\"rl2\":\"1\"},{\"sh2\":null,\"rl2\":\"1\"},{\"sh2\":null,\"rl2\":\"1\"}]', '2020-02-19 01:22:19', '2020-02-19 01:22:19', '[{\"cr2\":null},{\"cr2\":null},{\"cr2\":null},{\"cr2\":null}]', '2');

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE `special` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sp_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_mag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_ill_cat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_cat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_title_shldr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_doc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_doc_tsk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_doc_cmt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_img_cap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_img_alt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_seo_txt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_seo_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_seo_desc2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_h1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_h2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_tag_kw` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_tag_ill` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_tag_dep` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_tag_symp` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_tag_season` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_tag_free` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sp_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_txt` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_sum` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_ill_img` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_sum2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_seo_kwords` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_ta_season_txt` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tracking_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `special`
--

INSERT INTO `special` (`id`, `sp_url`, `sp_mag`, `sp_ill_cat`, `sp_cat`, `sp_title_shldr`, `sp_title`, `sp_doc`, `sp_doc_tsk`, `sp_doc_cmt`, `sp_img`, `sp_img_cap`, `sp_img_alt`, `sp_seo_txt`, `sp_seo_desc`, `sp_seo_desc2`, `sp_h1`, `sp_h2`, `sp_tag_kw`, `sp_tag_ill`, `sp_tag_dep`, `sp_tag_symp`, `sp_tag_season`, `sp_tag_free`, `created_at`, `updated_at`, `sp_id`, `sp_txt`, `sp_sum`, `sp_ill_img`, `sp_sum2`, `sp_seo_kwords`, `seo_title`, `sp_ta_season_txt`, `tracking_status`) VALUES
(3, 'Samp', 'Samp', 'Lorem Ipsum', '生活習慣病', 'Samp', 'Samp', 'Locelle Emperio', '取材協力', 'Samp', '/img/PmnXCu_bottom-arrow.png', 'Samp', 'Samp', 'タイトルタグをカスタマイズする場合はこちらに入力ください', '親譲りの無鉄砲で小供の時から損ばかりしている。', '親譲りの無鉄砲で小供の時から損ばかりしている。', 'sample', '[{\"h2\":\"Samp\"},{\"h2\":\"Samp\"},{\"h2\":null}]', '[{\"tag_ch\":\"1\"},{\"tag_ch\":\"1\"}]', '[{\"tag_ill\":\"\\u8003\\u3048\\u3089\\u308c\\u308b\\u75c5\\u6c17\\u3088\\u308a\"},{\"tag_ill\":\"\\u8003\\u3048\\u3089\\u308c\\u308b\\u75c5\\u6c17\\u3088\\u308a\"},{\"tag_ill\":\"\\u8003\\u3048\\u3089\\u308c\\u308b\\u75c5\\u6c17\\u3088\\u308a\"}]', '[{\"tag_dep\":\"\\u795e\\u7d4c\\u5185\\u79d1\"},{\"tag_dep\":\"\\u7cd6\\u3000\\u5c3f\\u75c5\\u5185\\u79d1\"},{\"tag_dep\":\"\\u6f22\\u65b9\\u5185\\u79d1\"},{\"tag_dep\":null},{\"tag_dep\":null},{\"tag_dep\":null}]', '[{\"tag_sy\":\"Samp\"},{\"tag_sy\":\"Samp\"},{\"tag_sy\":null},{\"tag_sy\":null},{\"tag_sy\":null},{\"tag_sy\":null}]', '[{\"tag_s\":\"1\"},{\"tag_s\":\"1\"}]', '[{\"tag_f\":\"Samp\"},{\"tag_f\":\"Samp\"},{\"tag_f\":null}]', '2020-02-17 17:39:55', '2020-02-17 17:39:55', '815033066', '[{\"lead_ckeditor\":\"\\u30e1\\u30a4\\u30f3\\u5199\\u771f\\u306e\\u76f4\\u4e0b\\u306b\\u5165\\u308b\\u30ea\\u30fc\\u30c9\\u306e\\u90e8\\u5206\\u3067\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\"},{\"lead_ckeditor\":\"<p>\\u30e1\\u30a4\\u30f3\\u5199\\u771f\\u306e\\u76f4\\u4e0b\\u306b\\u5165\\u308b\\u30ea\\u30fc\\u30c9\\u306e\\u90e8\\u5206\\u3067\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002<\\/p>\"}]', '[{\"heading\":\"\\u8fd1\\u5e74\\u306e\\u52d5\\u5411\",\"sub\":\"Lorem Ipsum\",\"txt_ckeditor\":\"\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\"},{\"heading\":\"\\u8fd1\\u5e74\\u306e\\u52d5\\u5411\",\"sub\":\"Samp\",\"txt_ckeditor\":\"<p>\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002<\\/p>\"}]', '[{\"pos_ill\":\"Lorem Ipsum\"},{\"pos_ill\":\"Lorem Ipsum\"},{\"pos_ill\":\"Lorem Ipsum\"}]', '[{\"heading\":null,\"sub\":null,\"txt_ckeditor\":\"\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\"},{\"heading\":null,\"sub\":null,\"txt_ckeditor\":\"\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\"},{\"heading\":\"\\u8fd1\\u5e74\\u306e\\u52d5\\u5411\",\"sub\":\"Lorem Ipsum\",\"txt_ckeditor\":\"<p>\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002<\\/p>\"}]', '[{\"kword\":\"Samp\"},{\"kword\":\"Samp\"},{\"kword\":null},{\"kword\":null},{\"kword\":null},{\"kword\":null},{\"kword\":null},{\"kword\":null}]', 'Sample', '[{\"tag_txt\":\"Samp\"},{\"tag_txt\":null},{\"tag_txt\":null}]', '6'),
(4, 'Ipsum Dolors', 'Ipsum Dolors', '胸部のがん', '食中毒（食あたり）', 'Ipsum Dolors', 'Ipsum Dolors', 'Locelle Emperio', '監修・取材協力', 'この特集内容に関する先生からのコメントをお願いします。', '/img/J76yQD_close.png', 'Ipsum Dolors', 'Ipsum Dolors', 'タイトルタグをカスタマイズする場合はこちらに入力くだ', '親譲りの無鉄砲で小供の時から損ばかりしている。', '親譲りの無鉄砲で小供の時から損ばかりしている。', 'sample', '[{\"h2\":\"Ipsum Dolor\"},{\"h2\":\"Ipsum Dolor\"},{\"h2\":\"Ipsum Dolor\"}]', '[{\"tag\":\"on\"}]', '[{\"tag_ill\":\"\\u8003\\u3048\\u3089\\u308c\\u308b\\u75c5\\u6c17\\u3088\\u308a\"}]', '[{\"tag_dep\":\"\\u5185\\u5206\\u6ccc\\u5185\\u79d1\"},{\"tag_dep\":\"\\u7cd6\\u3000\\u5c3f\\u75c5\\u5185\\u79d1\"},{\"tag_dep\":\"\\u8102\\u8cea\\u4ee3\\u8b1d\\u5185\\u79d1\"},{\"tag_dep\":\"\\u5fc3\\u7642\\u5185\\u79d1\"},{\"tag_dep\":\"\\u7cd6\\u3000\\u5c3f\\u75c5\\u5185\\u79d1\"},{\"tag_dep\":\"\\u8102\\u8cea\\u4ee3\\u8b1d\\u5185\\u79d1\"}]', '[{\"tag_sy\":\"Ipsum Dolor\"},{\"tag_sy\":\"Ipsum Dolor\"},{\"tag_sy\":\"Ipsum Dolor\"},{\"tag_sy\":\"Ipsum Dolor\"},{\"tag_sy\":\"Ipsum Dolor\"},{\"tag_sy\":\"null\"}]', '[{\"tag_s\":\"1\"},{\"tag_s\":\"1\"}]', '[{\"tag_f\":\"Ipsum Dolor\"},{\"tag_f\":\"Ipsum Dolor\"},{\"tag_f\":\"Ipsum Dolor\"}]', '2020-02-17 17:47:07', '2020-02-17 17:47:07', '10700768', '[{\"lead_ckeditor\":\"\\u30e1\\u30a4\\u30f3\\u5199\\u771f\\u306e\\u76f4\\u4e0b\\u306b\\u5165\\u308b\\u30ea\\u30fc\\u30c9\\u306e\\u90e8\\u5206\\u3067\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\"},{\"lead_ckeditor\":\"<p>\\u30e1\\u30a4\\u30f3\\u5199\\u771f\\u306e\\u76f4\\u4e0b\\u306b\\u5165\\u308b\\u30ea\\u30fc\\u30c9\\u306e\\u90e8\\u5206\\u3067\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002<\\/p>\"}]', '[{\"heading\":null,\"sub\":\"Lorem Ipsum\",\"txt_ckeditor\":\"\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\"},{\"heading\":\"FAQ\",\"sub\":\"Ipsum Dolors\",\"txt_ckeditor\":\"<p>\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002<\\/p>\"}]', '[{\"pos_ill\":\"Ipsum Dolors\"},{\"pos_ill\":\"Ipsum Dolors\"},{\"pos_ill\":\"Ipsum Dolors\"},{\"pos_ill\":\"Lorem Ipsum\"}]', '[{\"heading\":\"FAQ\",\"sub\":\"Ipsum Dolors\",\"txt_ckeditor\":\"\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\"},{\"heading\":\"FAQ\",\"sub\":\"Lorem Ipsums\",\"txt_ckeditor\":\"<p>\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002<\\/p>\"}]', '[{\"kword\":\"Ipsum Dolor\"},{\"kword\":\"Ipsum Dolor\"},{\"kword\":\"Ipsum Dolor\"},{\"kword\":\"Ipsum Dolor\"},{\"kword\":\"null\"},{\"kword\":\"null\"},{\"kword\":\"null\"},{\"kword\":\"null\"}]', '1', '[{\"tag_txt\":\"Ipsum Dolor\"},{\"tag_txt\":\"Ipsum Dolor\"},{\"tag_txt\":\"Ipsum Dolor\"}]', '5'),
(5, 'Sample', 'Sample', '女性特有のがん＊', 'がん', 'Sample', 'Sample', 'Locelle Emperio', '監修', 'Sample', '/img/XloMYR_S__41148420.jpg', 'Sample', 'Sample', 'タイトルタグをカスタマイズする場合はこちらに入力ください', '親譲りの無鉄砲で小供の時から損ばかりしている。', '親譲りの無鉄砲で小供の時から損ばかりしている。', 'sample', '[{\"h2\":\"Sample\"},{\"h2\":\"Sample\"},{\"h2\":\"Sample\"}]', '[{\"tag_ch\":\"on\"},{\"tag_ch\":\"on\"}]', '[{\"tag_ill\":\"1\"},{\"tag_ill\":\"1\"}]', '[{\"tag_dep\":\"\\u795e\\u7d4c\\u5185\\u79d1\"},{\"tag_dep\":\"\\u7cd6\\u3000\\u5c3f\\u75c5\\u5185\\u79d1\"},{\"tag_dep\":\"\\u6f22\\u65b9\\u5185\\u79d1\"},{\"tag_dep\":\"\\u8102\\u8cea\\u4ee3\\u8b1d\\u5185\\u79d1\"},{\"tag_dep\":\"\\u7cd6\\u3000\\u5c3f\\u75c5\\u5185\\u79d1\"},{\"tag_dep\":\"\\u7cd6\\u3000\\u5c3f\\u75c5\\u5185\\u79d1\"}]', '[{\"tag_sy\":\"Sample\"},{\"tag_sy\":\"Sample\"},{\"tag_sy\":\"Sample\"},{\"tag_sy\":\"null\"},{\"tag_sy\":\"null\"},{\"tag_sy\":\"null\"}]', '[{\"tag_s\":\"1\"},{\"tag_s\":\"1\"},{\"tag_s\":\"1\"}]', '[{\"tag_f\":\"Sample\"},{\"tag_f\":\"Sample\"},{\"tag_f\":\"Sample\"}]', '2020-02-18 01:48:20', '2020-02-18 01:48:20', '1983003149', '[{\"lead_ckeditor\":\"\\u30e1\\u30a4\\u30f3\\u5199\\u771f\\u306e\\u76f4\\u4e0b\\u306b\\u5165\\u308b\\u30ea\\u30fc\\u30c9\\u306e\\u90e8\\u5206\\u3067\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\"},{\"lead_ckeditor\":\"<p>\\u30e1\\u30a4\\u30f3\\u5199\\u771f\\u306e\\u76f4\\u4e0b\\u306b\\u5165\\u308b\\u30ea\\u30fc\\u30c9\\u306e\\u90e8\\u5206\\u3067\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002<\\/p>\"}]', '[{\"heading\":null,\"sub\":\"Lorem Ipsum\",\"txt_ckeditor\":\"\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\"},{\"heading\":null,\"sub\":\"Sample\",\"txt_ckeditor\":\"<p>\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002<\\/p>\"}]', '[{\"pos_ill\":\"Lorem Ipsum\"},{\"pos_ill\":\"Lorem Ipsum\"},{\"pos_ill\":\"Lorem Ipsum\"},{\"pos_ill\":\"Sample\"}]', '[{\"heading\":\"\\u691c\\u8a3a\\u304b\\u3089\\u6cbb\\u7642\\u307e\\u3067\",\"sub\":\"Sample\",\"txt_ckeditor\":\"\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\"},{\"heading\":\"FAQ\",\"sub\":\"Sample\",\"txt_ckeditor\":\"\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\"},{\"heading\":\"FAQ\",\"sub\":\"Lorem Ipsum\",\"txt_ckeditor\":\"<p>\\u3053\\u306e\\u6587\\u7ae0\\u306f\\u30c0\\u30df\\u30fc\\u3067\\u3059\\u3002\\u6587\\u5b57\\u306e\\u5927\\u304d\\u3055\\u3001\\u91cf\\u3001\\u5b57\\u9593\\u3001\\u884c\\u9593\\u7b49\\u3092\\u78ba\\u8a8d\\u3059\\u308b\\u305f\\u3081\\u306b\\u5165\\u308c\\u3066\\u3044\\u307e\\u3059\\u3002<\\/p>\"}]', '[{\"kword\":\"Sample\"},{\"kword\":\"Sample\"},{\"kword\":\"Sample\"},{\"kword\":\"Sample\"},{\"kword\":\"null\"},{\"kword\":\"null\"},{\"kword\":\"null\"},{\"kword\":\"null\"}]', '1', '[{\"tag_txt\":\"Sample\"},{\"tag_txt\":\"Sample\"},{\"tag_txt\":\"Sample\"}]', '1');

-- --------------------------------------------------------

--
-- Table structure for table `special_archive`
--

CREATE TABLE `special_archive` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `special_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_release` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sp_lead`
--

CREATE TABLE `sp_lead` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sp_id` int(11) NOT NULL,
  `sp_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kim Villar', 'kim.a.villar@ad-kit.co.jp', NULL, '$2y$10$JKdBkMLOqOB7HxD7ovP/GemIIgfxCXSYv.iZq2ZiuWcUXe4TJ6Ka6', NULL, '2020-01-30 00:46:51', '2020-01-30 00:46:51'),
(2, 'Suissa Gyle Lo', 'suissatwitz@gmail.com', NULL, '$2y$10$Iep7bB7H8XX6BVxx0/8jwelye3rbBNflwEbbXvkC.ESUpg3TxxTta', NULL, '2020-02-20 23:14:55', '2020-02-20 23:14:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dv_approval_request`
--
ALTER TABLE `dv_approval_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dv_approve`
--
ALTER TABLE `dv_approve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dv_approved`
--
ALTER TABLE `dv_approved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dv_archive`
--
ALTER TABLE `dv_archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dv_doctors`
--
ALTER TABLE `dv_doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dv_drafts`
--
ALTER TABLE `dv_drafts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dv_hospital`
--
ALTER TABLE `dv_hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dv_hospital_releasing`
--
ALTER TABLE `dv_hospital_releasing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dv_preview`
--
ALTER TABLE `dv_preview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dv_release`
--
ALTER TABLE `dv_release`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dv_release_reservation`
--
ALTER TABLE `dv_release_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dv_source_type`
--
ALTER TABLE `dv_source_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `explain_details`
--
ALTER TABLE `explain_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_details`
--
ALTER TABLE `feature_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_access`
--
ALTER TABLE `hospital_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_access_det`
--
ALTER TABLE `hospital_access_det`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_departments`
--
ALTER TABLE `hospital_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_departments_exam`
--
ALTER TABLE `hospital_departments_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_dpt_explain`
--
ALTER TABLE `hospital_dpt_explain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_feature`
--
ALTER TABLE `hospital_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_staff`
--
ALTER TABLE `hospital_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hosp_dpt_special_hours`
--
ALTER TABLE `hosp_dpt_special_hours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `illness`
--
ALTER TABLE `illness`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `illness_archive`
--
ALTER TABLE `illness_archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `illness_category`
--
ALTER TABLE `illness_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ill_graph`
--
ALTER TABLE `ill_graph`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ill_image`
--
ALTER TABLE `ill_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `risk_assessment`
--
ALTER TABLE `risk_assessment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special`
--
ALTER TABLE `special`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_archive`
--
ALTER TABLE `special_archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_lead`
--
ALTER TABLE `sp_lead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dv_approval_request`
--
ALTER TABLE `dv_approval_request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `dv_approve`
--
ALTER TABLE `dv_approve`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dv_approved`
--
ALTER TABLE `dv_approved`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dv_archive`
--
ALTER TABLE `dv_archive`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `dv_doctors`
--
ALTER TABLE `dv_doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dv_drafts`
--
ALTER TABLE `dv_drafts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dv_hospital`
--
ALTER TABLE `dv_hospital`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dv_hospital_releasing`
--
ALTER TABLE `dv_hospital_releasing`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dv_preview`
--
ALTER TABLE `dv_preview`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dv_release`
--
ALTER TABLE `dv_release`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dv_release_reservation`
--
ALTER TABLE `dv_release_reservation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dv_source_type`
--
ALTER TABLE `dv_source_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `explain_details`
--
ALTER TABLE `explain_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feature_details`
--
ALTER TABLE `feature_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital_access`
--
ALTER TABLE `hospital_access`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital_access_det`
--
ALTER TABLE `hospital_access_det`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital_departments`
--
ALTER TABLE `hospital_departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `hospital_departments_exam`
--
ALTER TABLE `hospital_departments_exam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital_dpt_explain`
--
ALTER TABLE `hospital_dpt_explain`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital_feature`
--
ALTER TABLE `hospital_feature`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital_staff`
--
ALTER TABLE `hospital_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hosp_dpt_special_hours`
--
ALTER TABLE `hosp_dpt_special_hours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `illness`
--
ALTER TABLE `illness`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `illness_archive`
--
ALTER TABLE `illness_archive`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `illness_category`
--
ALTER TABLE `illness_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ill_graph`
--
ALTER TABLE `ill_graph`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ill_image`
--
ALTER TABLE `ill_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `risk_assessment`
--
ALTER TABLE `risk_assessment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `special`
--
ALTER TABLE `special`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `special_archive`
--
ALTER TABLE `special_archive`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sp_lead`
--
ALTER TABLE `sp_lead`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
