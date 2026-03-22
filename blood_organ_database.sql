-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 01:59 PM
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
-- Database: `blood_organ_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin_information_table`
--

CREATE TABLE `t_admin_information_table` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `petname` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_admin_information_table`
--

INSERT INTO `t_admin_information_table` (`id`, `name`, `age`, `gender`, `email`, `password`, `petname`, `address`, `status`) VALUES
(4, 'Debdyuti paul', 20, 'male', 'debdyutipaul6@gmail.com', '22222222', 'kalua', 'Birati,kolkata', 'Approved'),
(6, 'Shirsha Das ', 20, 'female', 'shirshadas27@gmail.com', 'debirsha', 'minu', 'birati,kolkata-51', 'Approved'),
(7, 'Sanga Halder', 20, 'female', 'SangaHalder@gmail.com', 'Sangabal', 'shibendu', 'kalna,burdwan', 'Approved'),
(9, 'Akash Das', 20, 'male', 'happyakash@gmail.com', 'akash', 'preetam', 'howrah', 'Approved'),
(10, 'preetam halder ', 20, 'male', 'preetamhalder2003@gmail.com', 'danidaniels', 'akash', 'thakurpukur', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `t_admin_login_table`
--

CREATE TABLE `t_admin_login_table` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `In_time` varchar(255) NOT NULL,
  `Out_time` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_admin_login_table`
--

INSERT INTO `t_admin_login_table` (`id`, `email`, `In_time`, `Out_time`, `status`) VALUES
(1, 'debdyutipaul6@gmail.com', '12-09-2023 10:19:13 PM', ' ', 'out'),
(2, 'debdyutipaul6@gmail.com', '12-09-2023 10:24:21 PM', ' ', 'in'),
(3, 'shirshadas27@gmail.com', '12-09-2023 10:51:49 PM', ' ', 'in'),
(4, 'preetamhalder2003@gmail.com', '13-09-2023 10:06:38 PM', ' ', 'in');

-- --------------------------------------------------------

--
-- Table structure for table `t_bloodbank_details_table`
--

CREATE TABLE `t_bloodbank_details_table` (
  `ID` int(250) NOT NULL,
  `Bank_Name` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `A+` int(200) NOT NULL,
  `A-` int(200) NOT NULL,
  `B+` int(200) NOT NULL,
  `B-` int(200) NOT NULL,
  `AB+` int(200) NOT NULL,
  `AB-` int(200) NOT NULL,
  `O+` int(200) NOT NULL,
  `O-` int(200) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='#This table contains all the blood banks details';

--
-- Dumping data for table `t_bloodbank_details_table`
--

INSERT INTO `t_bloodbank_details_table` (`ID`, `Bank_Name`, `Address`, `A+`, `A-`, `B+`, `B-`, `AB+`, `AB-`, `O+`, `O-`, `Status`) VALUES
(1, 'Lion Blood Centre ', 'Santosh Roy Road Barisha ', 54, 60, 100, 90, 20, 30, 110, 16, 'Y'),
(2, 'LIFE Care Blood Centre ', 'Linton street Entally', 100, 25, 100, 70, 45, 54, 80, 11, 'Y'),
(3, 'Kothari Blood Bank', 'Alipore Road Alipore', 70, 45, 83, 30, 21, 12, 40, 5, 'Y'),
(4, 'Bhoruka Public Welfare Trust', 'Ahmed Kidwai Road Park Street', 41, 22, 66, 33, 11, 23, 15, 4, 'Y'),
(5, 'Ashok Blood Bank ', 'No 308 Jodhpur Park', 44, 11, 22, 88, 77, 99, 55, 19, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `t_blood_doner_pending_table`
--

CREATE TABLE `t_blood_doner_pending_table` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `type` varchar(15) NOT NULL,
  `age` varchar(100) NOT NULL,
  `bloodGroup` varchar(5) NOT NULL,
  `donationPlace` varchar(30) NOT NULL,
  `placeName` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `process` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_blood_doner_pending_table`
--

INSERT INTO `t_blood_doner_pending_table` (`id`, `name`, `Email`, `type`, `age`, `bloodGroup`, `donationPlace`, `placeName`, `status`, `process`) VALUES
(8, 'Debdyuti paul', '', 'Blood', '42', 'A+', 'hospital', 'ILS Hospital Dumdum', 'Approved', 'D'),
(9, 'Debdyuti paul', '', 'Blood', '42', 'A+', 'hospital', 'ILS Hospital Dumdum', 'Approved', 'D'),
(10, 'Debdyuti paul', '', 'Blood', '42', 'A+', 'bloodBank', 'Lion Blood Centre ', 'Approved', 'D'),
(11, 'Debdyuti paul', '', 'Blood', '52', 'A+', 'hospital', 'Apollo Medical centre Kolkata', 'Approved', 'D'),
(12, 'Debdyuti paul', '', 'Blood', '52', 'A+', 'hospital', 'Apollo Medical centre Kolkata', 'Approved', 'D'),
(13, 'Debdyuti paul', '', 'Blood', '20', 'A+', 'hospital', 'Apollo Medical centre Kolkata', 'Approved', 'D'),
(14, 'Debdyuti paul', 'debdyutipaul6@gmail.com', 'Blood', '20', 'A+', 'bloodBank', 'Lion Blood Centre ', 'Approved', 'D'),
(15, 'akash das', 'happyakashdas2003@gmail.com', 'Blood', '44', 'O+', 'hospital', 'IPGME&R and SSKM Hospital', 'Approved', 'D'),
(16, 'Debdyuti Paul', 'debdyutipaul6@gmail.com', 'Blood', '20', 'A+', 'hospital', 'KPC Medical college & Hospital', 'Approved', 'D'),
(17, 'Debdyuti Paul', 'debdyutipaul6@gmail.com', 'Blood', '20', 'A+', 'hospital', 'Apollo Medical centre Kolkata', 'Approved', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `t_blood_recipent_pending_table`
--

CREATE TABLE `t_blood_recipent_pending_table` (
  `id` int(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(15) NOT NULL,
  `age` varchar(100) NOT NULL,
  `bloodGroup` varchar(50) NOT NULL,
  `donationPlace` varchar(30) NOT NULL,
  `placeName` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `process` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_blood_recipent_pending_table`
--

INSERT INTO `t_blood_recipent_pending_table` (`id`, `name`, `email`, `type`, `age`, `bloodGroup`, `donationPlace`, `placeName`, `status`, `process`) VALUES
(7, 'Deb', '', 'Blood', '42', 'A+', 'hospital', 'Belle Vue Clinic', 'Approved', 'D'),
(8, 'Debdyuti paul', '', 'Blood', '18', 'A+', 'hospital', 'Apollo Medical centre Kolkata', 'Approved', 'D'),
(9, 'Debdyuti paul', '', 'Blood', '20', 'A+', 'hospital', 'KPC Medical college & Hospital', 'Approved', 'D'),
(10, 'Akash Das ', '', 'Blood', '20', 'B+', 'bloodBank', 'Kothari Blood Bank', 'Approved', 'D'),
(11, 'Debdyuti Paul', 'debdyutipaul6@gmail.com', 'Blood', '20', 'B+', 'hospital', 'Medica Superspeciality Hospital[Kolkata]', 'Approved', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `t_hospital_blood_details_table`
--

CREATE TABLE `t_hospital_blood_details_table` (
  `id` int(250) NOT NULL,
  `Hospital_Name` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `A+` int(100) NOT NULL,
  `A-` int(100) NOT NULL,
  `B+` int(100) NOT NULL,
  `B-` int(100) NOT NULL,
  `AB+` int(100) NOT NULL,
  `AB-` int(200) NOT NULL,
  `O+` int(200) NOT NULL,
  `O-` int(200) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='#This table contains all the hospitals blood details';

--
-- Dumping data for table `t_hospital_blood_details_table`
--

INSERT INTO `t_hospital_blood_details_table` (`id`, `Hospital_Name`, `Address`, `A+`, `A-`, `B+`, `B-`, `AB+`, `AB-`, `O+`, `O-`, `Status`) VALUES
(1, 'Apollo Medical centre Kolkata', '48/1F, Leela Roy Sarani, Gariahat Rd, near Orchestra Co-Operative Housing Society, Ballygunge, Kolkata, West Bengal 700019', 52, 50, 50, 50, 60, 40, 30, 10, 'Y'),
(2, 'Belle Vue Clinic', 'Dr. U. N. Brahmachari Street (formerly, 9, Loudon St, Elgin, Kolkata, West Bengal 700017', 39, 50, 40, 50, 70, 10, 50, 20, 'Y'),
(3, 'ILS Hospital', ' DD 6, Salt Lake Bypass, DD Block, Sector 1, Bidhannagar, Kolkata, West Bengal 700064', 44, 11, 22, 44, 77, 45, 23, 11, 'Y'),
(4, 'ILS Hospital Dumdum', ' 1, Mall Road, near Nager Bazar Flyover, Dum Dum, North Dumdum, West Bengal 700080', 79, 41, 12, 44, 66, 88, 47, 15, 'Y'),
(5, 'KPC Medical college & Hospital', 'Kpc, 20, Raja Subodh Chandra Mallick Rd, Jadavpur, Kolkata, West Bengal 700032', 77, 42, 88, 44, 77, 66, 48, 20, 'Y'),
(6, 'Medica Superspeciality Hospital[Kolkata]', '127, Eastern Metropolitan Bypass, Nitai Nagar, Mukundapur, Kolkata, West Bengal 700099', 21, 23, 44, 56, 48, 78, 22, 9, 'Y'),
(7, 'Ruby General Hospital', '576, Anandapur Main Rd, Golpark, Sector I, Kasba, Kolkata, West Bengal 700107', 46, 64, 48, 74, 60, 12, 80, 7, 'Y'),
(8, 'Nrs. Medical College & Hospital', ' 8, Acharya Prafulla Chandra Rd, Shyambazar, Sealdah, Raja Bazar, Kolkata, West Bengal 700041', 78, 65, 88, 99, 62, 42, 110, 65, 'Y'),
(9, 'IPGME&R and SSKM Hospital', 'SSKM Hospital Rd, Bhowanipore, Kolkata, West Bengal 700020', 44, 88, 77, 11, 22, 78, 46, 12, 'Y'),
(10, 'Chittaranjan Seva Sadan Hospital', '83, Shyama Prasad Mukherjee Rd, Bakul Bagan, Bhowanipore, Kolkata, West Bengal 700026', 48, 78, 56, 48, 98, 78, 66, 35, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `t_hospital_heart_details_table`
--

CREATE TABLE `t_hospital_heart_details_table` (
  `id` int(20) NOT NULL,
  `Hospital_Name` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Age` varchar(20) NOT NULL,
  `Gender` varchar(2) NOT NULL,
  `A+` int(200) NOT NULL,
  `A-` int(200) NOT NULL,
  `B+` int(200) NOT NULL,
  `B-` int(200) NOT NULL,
  `O+` int(200) NOT NULL,
  `O-` int(200) NOT NULL,
  `AB+` int(200) NOT NULL,
  `AB-` int(200) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_hospital_heart_details_table`
--

INSERT INTO `t_hospital_heart_details_table` (`id`, `Hospital_Name`, `Address`, `Age`, `Gender`, `A+`, `A-`, `B+`, `B-`, `O+`, `O-`, `AB+`, `AB-`, `Status`) VALUES
(1, 'Apollo Medical centre Kolkata', '48/1F, Leela Roy Sarani, Gariahat Rd, near Orchestra Co-Operative Housing Society, Ballygunge, Kolkata, West Bengal 700019', '0-15', 'M', 1, 41, 18, 20, 21, 9, 30, 25, 'Y'),
(1, 'Apollo Medical centre Kolkata', '48/1F, Leela Roy Sarani, Gariahat Rd, near Orchestra Co-Operative Housing Society, Ballygunge, Kolkata, West Bengal 700019', '0-15', 'F', 20, 10, 14, 41, 3, 4, 6, 7, 'Y'),
(1, 'Apollo Medical centre Kolkata', '48/1F, Leela Roy Sarani, Gariahat Rd, near Orchestra Co-Operative Housing Society, Ballygunge, Kolkata, West Bengal 700019', '16-30', 'M', 12, 41, 10, 42, 8, 7, 6, 4, 'Y'),
(1, 'Apollo Medical centre Kolkata', '48/1F, Leela Roy Sarani, Gariahat Rd, near Orchestra Co-Operative Housing Society, Ballygunge, Kolkata, West Bengal 700019', '16-30', 'F', 12, 20, 11, 10, 19, 11, 14, 15, 'Y'),
(1, 'Apollo Medical centre Kolkata', '48/1F, Leela Roy Sarani, Gariahat Rd, near Orchestra Co-Operative Housing Society, Ballygunge, Kolkata, West Bengal 700019', '31-50', 'M', 11, 12, 13, 21, 11, 14, 15, 16, 'Y'),
(1, 'Apollo Medical centre Kolkata', '48/1F, Leela Roy Sarani, Gariahat Rd, near Orchestra Co-Operative Housing Society, Ballygunge, Kolkata, West Bengal 700019', '31-50', 'F', 10, 10, 12, 13, 16, 19, 18, 18, 'Y'),
(2, 'Belle Vue Clinic', 'Dr. U. N. Brahmachari Street (formerly, 9, Loudon St, Elgin, Kolkata, West Bengal 700017', '0-15', 'M', 8, 10, 13, 51, 12, 21, 20, 24, 'Y'),
(2, 'Belle Vue Clinic', 'Dr. U. N. Brahmachari Street (formerly, 9, Loudon St, Elgin, Kolkata, West Bengal 700017', '0-15', 'F', 19, 22, 2, 0, 0, 0, 0, 0, ''),
(2, 'Belle Vue Clinic', 'Dr. U. N. Brahmachari Street (formerly, 9, Loudon St, Elgin, Kolkata, West Bengal 700017', '16-30', 'M', 10, 11, 17, 15, 13, 16, 19, 18, 'Y'),
(2, 'Belle Vue Clinic', 'Dr. U. N. Brahmachari Street (formerly, 9, Loudon St, Elgin, Kolkata, West Bengal 700017', '16-30', 'F', 12, 15, 16, 19, 18, 17, 16, 18, 'Y'),
(2, 'Belle Vue Clinic', 'Dr. U. N. Brahmachari Street (formerly, 9, Loudon St, Elgin, Kolkata, West Bengal 700017)', '31-50', 'M', 14, 14, 13, 15, 17, 19, 17, 18, 'Y'),
(2, 'Belle Vue Clinic', 'Dr. U. N. Brahmachari Street (formerly, 9, Loudon St, Elgin, Kolkata, West Bengal 700017)', '31-50', 'F', 14, 18, 19, 17, 18, 15, 16, 14, 'Y'),
(3, 'ILS Hospital', ' DD 6, Salt Lake Bypass, DD Block, Sector 1, Bidhannagar, Kolkata, West Bengal 700064', '0-15', 'M', 12, 13, 16, 14, 15, 18, 19, 30, 'Y'),
(3, 'ILS Hospital', ' DD 6, Salt Lake Bypass, DD Block, Sector 1, Bidhannagar, Kolkata, West Bengal 700064', '0-15', 'F', 21, 32, 21, 24, 25, 26, 27, 28, 'Y'),
(3, 'ILS Hospital', ' DD 6, Salt Lake Bypass, DD Block, Sector 1, Bidhannagar, Kolkata, West Bengal 700064', '16-30', 'M', 31, 34, 24, 26, 27, 24, 20, 10, 'Y'),
(3, 'ILS Hospital', ' DD 6, Salt Lake Bypass, DD Block, Sector 1, Bidhannagar, Kolkata, West Bengal 700064', '16-30', 'F', 31, 4, 5, 6, 44, 20, 30, 9, 'Y'),
(3, 'ILS Hospital', 'DD 6, Salt Lake Bypass, DD Block, Sector 1, Bidhannagar, Kolkata, West Bengal 700064', '31-50', 'M', 10, 11, 22, 30, 21, 19, 6, 18, 'Y'),
(3, 'ILS Hospital', ' DD 6, Salt Lake Bypass, DD Block, Sector 1, Bidhannagar, Kolkata, West Bengal 700064', '31-50', 'F', 13, 16, 15, 19, 21, 23, 24, 26, 'Y'),
(4, 'ILS Hospital Dumdum', '1,Mall Road,near Nager Bazar Flyover,Dum Dum,North Dumdum, West Bengal 700080', '0-15', 'M', 3, 10, 12, 16, 19, 18, 17, 16, 'Y'),
(4, 'ILS Hospital Dumdum', ' 1, Mall Road, near Nager Bazar Flyover, Dum Dum, North Dumdum, West Bengal 700080', '0-15', 'F', 20, 21, 23, 24, 8, 9, 4, 12, 'Y'),
(4, 'ILS Hospital Dumdum', ' 1, Mall Road, near Nager Bazar Flyover, Dum Dum, North Dumdum, West Bengal 700080', '16-30', 'M', 16, 17, 24, 25, 20, 23, 29, 28, 'Y'),
(4, 'ILS Hospital Dumdum', ' 1, Mall Road, near Nager Bazar Flyover, Dum Dum, North Dumdum, West Bengal 700080', '16-30', 'F', 12, 17, 19, 18, 29, 28, 24, 21, 'Y'),
(4, 'ILS Hospital Dumdum', ' 1, Mall Road, near Nager Bazar Flyover, Dum Dum, North Dumdum, West Bengal 700080', '31-50', 'M', 21, 23, 24, 25, 26, 29, 27, 24, 'Y'),
(4, 'ILS Hospital Dumdum', ' 1, Mall Road, near Nager Bazar Flyover, Dum Dum, North Dumdum, West Bengal 700080', '31-50', 'F', 21, 23, 25, 20, 10, 8, 9, 4, 'Y'),
(5, 'KPC Medical college & Hospital', 'Kpc, 20, Raja Subodh Chandra Mallick Rd, Jadavpur, Kolkata, West Bengal 700032', '0-15', 'M', 13, 23, 13, 19, 80, 11, 77, 18, 'Y'),
(5, 'KPC Medical college & Hospital', 'Kpc, 20, Raja Subodh Chandra Mallick Rd, Jadavpur, Kolkata, West Bengal 700032', '0-15', 'F', 17, 23, 12, 19, 8, 20, 60, 10, 'Y'),
(5, 'KPC Medical college & Hospital', 'Kpc, 20, Raja Subodh Chandra Mallick Rd, Jadavpur, Kolkata, West Bengal 700032', '16-30', 'M', 11, 50, 86, 20, 15, 19, 20, 10, 'Y'),
(5, 'KPC Medical college & Hospital', 'Kpc, 20, Raja Subodh Chandra Mallick Rd, Jadavpur, Kolkata, West Bengal 700032', '16-30', 'F', 51, 11, 13, 19, 9, 11, 77, 12, 'Y'),
(5, 'KPC Medical college & Hospital', 'Kpc, 20, Raja Subodh Chandra Mallick Rd, Jadavpur, Kolkata, West Bengal 700032', '31-50', 'M', 11, 23, 22, 44, 11, 9, 6, 4, 'Y'),
(5, 'KPC Medical college & Hospital', 'Kpc, 20, Raja Subodh Chandra Mallick Rd, Jadavpur, Kolkata, West Bengal 700032', '31-50', 'F', 11, 11, 22, 44, 8, 4, 6, 10, 'Y'),
(6, 'Medica Superspeciality Hospital[Kolkata]\r\n', '127, Eastern Metropolitan Bypass, Nitai Nagar, Mukundapur, Kolkata, West Bengal 700099', '0-15', 'M', 15, 20, 24, 19, 16, 10, 22, 12, 'Y'),
(6, 'Medica Superspeciality Hospital[Kolkata]\r\n', '127, Eastern Metropolitan Bypass, Nitai Nagar, Mukundapur, Kolkata, West Bengal 700099', '0-15', 'F', 21, 15, 19, 36, 16, 14, 33, 17, 'Y'),
(6, 'Medica Superspeciality Hospital[Kolkata]\r\n', '127, Eastern Metropolitan Bypass, Nitai Nagar, Mukundapur, Kolkata, West Bengal 700099', '16-30', 'M', 21, 17, 11, 31, 20, 22, 12, 10, 'Y'),
(6, 'Medica Superspeciality Hospital[Kolkata]\r\n', '127, Eastern Metropolitan Bypass, Nitai Nagar, Mukundapur, Kolkata, West Bengal 700099', '16-30', 'F', 15, 22, 29, 23, 16, 20, 33, 17, 'Y'),
(6, 'Medica Superspeciality Hospital[Kolkata]\r\n', '127, Eastern Metropolitan Bypass, Nitai Nagar, Mukundapur, Kolkata, West Bengal 700099', '31-50', 'M', 23, 12, 11, 18, 17, 30, 44, 14, 'Y'),
(6, 'Medica Superspeciality Hospital[Kolkata]\r\n', '127, Eastern Metropolitan Bypass, Nitai Nagar, Mukundapur, Kolkata, West Bengal 700099', '31-50', 'F', 25, 17, 19, 25, 16, 27, 18, 19, 'Y'),
(7, 'Ruby General Hospital', '576, Anandapur Main Rd, Golpark, Sector I, Kasba, Kolkata, West Bengal 700107', '0-15', 'M', 10, 25, 7, 22, 36, 15, 9, 19, 'Y'),
(7, 'Ruby General Hospital', '576, Anandapur Main Rd, Golpark, Sector I, Kasba, Kolkata, West Bengal 700107', '0-15', 'F', 17, 20, 27, 21, 26, 35, 11, 10, 'Y'),
(7, 'Ruby General Hospital', '576, Anandapur Main Rd, Golpark, Sector I, Kasba, Kolkata, West Bengal 700107', '16-30', 'M', 15, 16, 19, 21, 20, 23, 27, 20, 'Y'),
(7, 'Ruby General Hospital', '576, Anandapur Main Rd, Golpark, Sector I, Kasba, Kolkata, West Bengal 700107', '16-30', 'F', 30, 15, 20, 10, 25, 17, 27, 19, 'Y'),
(7, 'Ruby General Hospital', '576, Anandapur Main Rd, Golpark, Sector I, Kasba, Kolkata, West Bengal 700107', '31-50', 'M', 16, 8, 12, 6, 17, 22, 30, 20, 'Y'),
(7, 'Ruby General Hospital', '576, Anandapur Main Rd, Golpark, Sector I, Kasba, Kolkata, West Bengal 700107', '31-50', 'F', 25, 20, 21, 35, 30, 19, 18, 15, 'Y'),
(8, 'Nrs. Medical College & Hospital', ' 8, Acharya Prafulla Chandra Rd, Shyambazar, Sealdah, Raja Bazar, Kolkata, West Bengal 700041', '0-15', 'M', 17, 19, 14, 20, 26, 24, 16, 18, 'Y'),
(8, 'Nrs. Medical College & Hospital', ' 8, Acharya Prafulla Chandra Rd, Shyambazar, Sealdah, Raja Bazar, Kolkata, West Bengal 700041', '0-15', 'F', 25, 22, 20, 15, 18, 16, 19, 31, 'Y'),
(8, 'Nrs. Medical College & Hospital', ' 8, Acharya Prafulla Chandra Rd, Shyambazar, Sealdah, Raja Bazar, Kolkata, West Bengal 700041', '16-30', 'M', 20, 10, 15, 22, 16, 19, 30, 17, 'Y'),
(8, 'Nrs. Medical College & Hospital', ' 8, Acharya Prafulla Chandra Rd, Shyambazar, Sealdah, Raja Bazar, Kolkata, West Bengal 700041', '16-30', 'F', 30, 20, 15, 10, 19, 18, 17, 27, 'Y'),
(8, 'Nrs. Medical College & Hospital', ' 8, Acharya Prafulla Chandra Rd, Shyambazar, Sealdah, Raja Bazar, Kolkata, West Bengal 700041', '31-50', 'M', 22, 44, 33, 11, 10, 20, 19, 28, 'Y'),
(8, 'Nrs. Medical College & Hospital', ' 8, Acharya Prafulla Chandra Rd, Shyambazar, Sealdah, Raja Bazar, Kolkata, West Bengal 700041', '31-50', 'F', 26, 14, 20, 15, 16, 26, 27, 29, 'Y'),
(9, 'IPGME&R and SSKM Hospital', 'SSKM Hospital Rd, Bhowanipore, Kolkata, West Bengal 700020', '0-15', 'M', 15, 10, 29, 27, 18, 33, 18, 29, 'Y'),
(9, 'IPGME&R and SSKM Hospital', 'SSKM Hospital Rd, Bhowanipore, Kolkata, West Bengal 700020', '0-15', 'F', 25, 27, 21, 14, 19, 18, 16, 20, 'Y'),
(9, 'IPGME&R and SSKM Hospital', 'SSKM Hospital Rd, Bhowanipore, Kolkata, West Bengal 700020', '16-30', 'M', 33, 20, 15, 18, 26, 29, 24, 11, 'Y'),
(9, 'IPGME&R and SSKM Hospital', 'SSKM Hospital Rd, Bhowanipore, Kolkata, West Bengal 700020', '16-30', 'F', 17, 15, 20, 25, 27, 24, 20, 19, 'Y'),
(9, 'IPGME&R and SSKM Hospital', 'SSKM Hospital Rd, Bhowanipore, Kolkata, West Bengal 700020', '31-50', 'M', 45, 25, 33, 34, 22, 29, 18, 20, 'Y'),
(9, 'IPGME&R and SSKM Hospital', 'SSKM Hospital Rd, Bhowanipore, Kolkata, West Bengal 700020', '31-50', 'F', 16, 14, 19, 23, 28, 24, 20, 17, 'Y'),
(10, 'Chittaranjan Seva Sadan Hospital', '83, Shyama Prasad Mukherjee Rd, Bakul Bagan, Bhowanipore, Kolkata, West Bengal 700026', '0-15', 'M', 40, 25, 29, 18, 17, 16, 25, 10, 'Y'),
(10, 'Chittaranjan Seva Sadan Hospital', '83, Shyama Prasad Mukherjee Rd, Bakul Bagan, Bhowanipore, Kolkata, West Bengal 700026', '0-15', 'F', 19, 10, 20, 17, 28, 25, 16, 22, 'Y'),
(10, 'Chittaranjan Seva Sadan Hospital', '83, Shyama Prasad Mukherjee Rd, Bakul Bagan, Bhowanipore, Kolkata, West Bengal 700026', '16-30', 'M', 31, 12, 22, 15, 18, 16, 27, 20, 'Y'),
(10, 'Chittaranjan Seva Sadan Hospital', '83, Shyama Prasad Mukherjee Rd, Bakul Bagan, Bhowanipore, Kolkata, West Bengal 700026', '16-30', 'F', 29, 11, 22, 36, 26, 45, 41, 20, 'Y'),
(10, 'Chittaranjan Seva Sadan Hospital', '83, Shyama Prasad Mukherjee Rd, Bakul Bagan, Bhowanipore, Kolkata, West Bengal 700026', '31-50', 'M', 19, 28, 16, 20, 39, 49, 16, 11, 'Y'),
(10, 'Chittaranjan Seva Sadan Hospital', '83, Shyama Prasad Mukherjee Rd, Bakul Bagan, Bhowanipore, Kolkata, West Bengal 700026', '31-50', 'F', 55, 46, 37, 20, 21, 29, 27, 30, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `t_hospital_lungs_details_table`
--

CREATE TABLE `t_hospital_lungs_details_table` (
  `Id` int(10) NOT NULL,
  `Hospital_Name` varchar(100) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Age` varchar(25) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `A+` int(200) NOT NULL,
  `A-` int(200) NOT NULL,
  `B+` int(200) NOT NULL,
  `B-` int(200) NOT NULL,
  `O+` int(200) NOT NULL,
  `O-` int(200) NOT NULL,
  `AB+` int(200) NOT NULL,
  `AB-` int(200) NOT NULL,
  `Status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_hospital_lungs_details_table`
--

INSERT INTO `t_hospital_lungs_details_table` (`Id`, `Hospital_Name`, `Address`, `Age`, `Gender`, `A+`, `A-`, `B+`, `B-`, `O+`, `O-`, `AB+`, `AB-`, `Status`) VALUES
(1, 'Apollo Medical centre Kolkata', '48/1F, Leela Roy Sarani, Gariahat Rd, near Orchestra Co-Operative Housing Society, Ballygunge, Kolkata, West Bengal 700019', '0-15', 'M', 7, 20, 13, 10, 12, 45, 13, 4, 'Y'),
(1, 'Apollo Medical centre Kolkata', '48/1F, Leela Roy Sarani, Gariahat Rd, near Orchestra Co-Operative Housing Society, Ballygunge, Kolkata, West Bengal 700019', '0-15', 'F', 25, 31, 15, 22, 36, 10, 55, 11, 'Y'),
(1, 'Apollo Medical centre Kolkata', '48/1F, Leela Roy Sarani, Gariahat Rd, near Orchestra Co-Operative Housing Society, Ballygunge, Kolkata, West Bengal 700019', '16-30', 'M', 21, 11, 6, 20, 45, 12, 33, 18, 'Y'),
(1, 'Apollo Medical centre Kolkata', '48/1F, Leela Roy Sarani, Gariahat Rd, near Orchestra Co-Operative Housing Society, Ballygunge, Kolkata, West Bengal 700019', '16-30', 'F', 31, 15, 9, 28, 17, 5, 66, 45, 'Y'),
(1, 'Apollo Medical centre Kolkata', '48/1F, Leela Roy Sarani, Gariahat Rd, near Orchestra Co-Operative Housing Society, Ballygunge, Kolkata, West Bengal 700019', '31-50', 'M', 23, 16, 20, 29, 32, 14, 22, 26, 'Y'),
(1, 'Apollo Medical centre Kolkata', '48/1F, Leela Roy Sarani, Gariahat Rd, near Orchestra Co-Operative Housing Society, Ballygunge, Kolkata, West Bengal 700019', '31-50', 'F', 25, 60, 45, 28, 70, 20, 45, 30, 'Y'),
(2, 'Belle Vue Clinic', 'Dr. U. N. Brahmachari Street (formerly, 9, Loudon St, Elgin, Kolkata, West Bengal 700017', '0-15', 'M', 12, 20, 24, 9, 16, 15, 22, 6, 'Y'),
(2, 'Belle Vue Clinic', 'Dr. U. N. Brahmachari Street (formerly, 9, Loudon St, Elgin, Kolkata, West Bengal 700017', '0-15', 'F', 10, 18, 55, 36, 28, 19, 45, 17, 'Y'),
(2, 'Belle Vue Clinic', 'Dr. U. N. Brahmachari Street (formerly, 9, Loudon St, Elgin, Kolkata, West Bengal 700017', '16-30', 'M', 12, 20, 23, 31, 36, 4, 16, 20, 'Y'),
(2, 'Belle Vue Clinic', 'Dr. U. N. Brahmachari Street (formerly, 9, Loudon St, Elgin, Kolkata, West Bengal 700017', '16-30', 'F', 21, 31, 18, 23, 26, 19, 45, 10, 'Y'),
(2, 'Belle Vue Clinic', 'Dr. U. N. Brahmachari Street (formerly, 9, Loudon St, Elgin, Kolkata, West Bengal 700017', '31-50', 'M', 40, 30, 25, 35, 55, 21, 66, 14, 'Y'),
(2, 'Belle Vue Clinic', 'Dr. U. N. Brahmachari Street (formerly, 9, Loudon St, Elgin, Kolkata, West Bengal 700017', '31-50', 'F', 60, 55, 12, 56, 47, 33, 26, 20, 'Y'),
(3, 'ILS Hospital', ' DD 6, Salt Lake Bypass, DD Block, Sector 1, Bidhannagar, Kolkata, West Bengal 700064', '0-15', 'M', 15, 25, 14, 19, 27, 5, 24, 12, 'Y'),
(3, 'ILS Hospital', ' DD 6, Salt Lake Bypass, DD Block, Sector 1, Bidhannagar, Kolkata, West Bengal 700064', '0-15', 'F', 14, 20, 26, 9, 23, 21, 15, 11, 'Y'),
(3, 'ILS Hospital', ' DD 6, Salt Lake Bypass, DD Block, Sector 1, Bidhannagar, Kolkata, West Bengal 700064', '16-30', 'M', 31, 18, 22, 16, 50, 21, 14, 15, 'Y'),
(3, 'ILS Hospital', ' DD 6, Salt Lake Bypass, DD Block, Sector 1, Bidhannagar, Kolkata, West Bengal 700064', '16-30', 'F', 12, 10, 9, 20, 15, 17, 24, 19, 'Y'),
(3, 'ILS Hospital', ' DD 6, Salt Lake Bypass, DD Block, Sector 1, Bidhannagar, Kolkata, West Bengal 700064', '31-50', 'M', 30, 25, 26, 19, 31, 22, 17, 15, 'Y'),
(3, 'ILS Hospital', ' DD 6, Salt Lake Bypass, DD Block, Sector 1, Bidhannagar, Kolkata, West Bengal 700064', '31-50', 'F', 20, 12, 19, 6, 9, 21, 23, 4, 'Y'),
(4, 'ILS Hospital Dumdum', ' 1, Mall Road, near Nager Bazar Flyover, Dum Dum, North Dumdum, West Bengal 700080', '0-15', 'M', 14, 21, 36, 14, 25, 28, 9, 15, 'Y'),
(4, 'ILS Hospital Dumdum', ' 1, Mall Road, near Nager Bazar Flyover, Dum Dum, North Dumdum, West Bengal 700080', '0-15', 'F', 17, 16, 10, 22, 40, 31, 15, 20, 'Y'),
(4, 'ILS Hospital Dumdum', ' 1, Mall Road, near Nager Bazar Flyover, Dum Dum, North Dumdum, West Bengal 700080', '16-30', 'M', 5, 12, 11, 20, 15, 8, 4, 21, 'Y'),
(4, 'ILS Hospital Dumdum', ' 1, Mall Road, near Nager Bazar Flyover, Dum Dum, North Dumdum, West Bengal 700080', '16-30', 'F', 10, 11, 13, 9, 21, 12, 36, 19, 'Y'),
(4, 'ILS Hospital Dumdum', ' 1, Mall Road, near Nager Bazar Flyover, Dum Dum, North Dumdum, West Bengal 700080', '31-50', 'M', 15, 21, 14, 10, 16, 19, 17, 10, 'Y'),
(4, 'ILS Hospital Dumdum', ' 1, Mall Road, near Nager Bazar Flyover, Dum Dum, North Dumdum, West Bengal 700080', '31-50', 'F', 20, 15, 30, 7, 19, 4, 20, 11, 'Y'),
(5, 'KPC Medical college & Hospital', 'Kpc, 20, Raja Subodh Chandra Mallick Rd, Jadavpur, Kolkata, West Bengal 700032', '0-15', 'M', 25, 19, 14, 21, 33, 17, 9, 10, 'Y'),
(5, 'KPC Medical college & Hospital', 'Kpc, 20, Raja Subodh Chandra Mallick Rd, Jadavpur, Kolkata, West Bengal 700032', '0-15', 'F', 15, 12, 19, 29, 9, 11, 21, 13, 'Y'),
(5, 'KPC Medical college & Hospital', 'Kpc, 20, Raja Subodh Chandra Mallick Rd, Jadavpur, Kolkata, West Bengal 700032', '16-30', 'M', 20, 10, 15, 25, 6, 12, 30, 10, 'Y'),
(5, 'KPC Medical college & Hospital', 'Kpc, 20, Raja Subodh Chandra Mallick Rd, Jadavpur, Kolkata, West Bengal 700032', '16-30', 'F', 19, 36, 22, 11, 17, 10, 6, 9, 'Y'),
(5, 'KPC Medical college & Hospital', 'Kpc, 20, Raja Subodh Chandra Mallick Rd, Jadavpur, Kolkata, West Bengal 700032', '31-50', 'M', 17, 18, 20, 6, 54, 33, 25, 19, 'Y'),
(5, 'KPC Medical college & Hospital', 'Kpc, 20, Raja Subodh Chandra Mallick Rd, Jadavpur, Kolkata, West Bengal 700032', '31-50', 'F', 30, 15, 20, 21, 29, 17, 18, 14, 'Y'),
(6, 'Medica Superspeciality Hospital[Kolkata]', '127, Eastern Metropolitan Bypass, Nitai Nagar, Mukundapur, Kolkata, West Bengal 700099', '0-15', 'M', 22, 12, 15, 66, 35, 26, 19, 10, 'Y'),
(6, 'Medica Superspeciality Hospital[Kolkata]', '127, Eastern Metropolitan Bypass, Nitai Nagar, Mukundapur, Kolkata, West Bengal 700099', '0-15', 'F', 20, 15, 19, 1, 26, 33, 45, 21, 'Y'),
(6, 'Medica Superspeciality Hospital[Kolkata]', '127, Eastern Metropolitan Bypass, Nitai Nagar, Mukundapur, Kolkata, West Bengal 700099', '16-30', 'M', 33, 23, 15, 19, 43, 50, 26, 22, 'Y'),
(6, 'Medica Superspeciality Hospital[Kolkata]', '127, Eastern Metropolitan Bypass, Nitai Nagar, Mukundapur, Kolkata, West Bengal 700099', '16-30', 'F', 39, 22, 19, 18, 27, 10, 9, 11, 'Y'),
(6, 'Medica Superspeciality Hospital[Kolkata]', '127, Eastern Metropolitan Bypass, Nitai Nagar, Mukundapur, Kolkata, West Bengal 700099', '31-50', 'M', 19, 20, 34, 25, 27, 29, 26, 17, 'Y'),
(6, 'Medica Superspeciality Hospital[Kolkata]', '127, Eastern Metropolitan Bypass, Nitai Nagar, Mukundapur, Kolkata, West Bengal 700099', '31-50', 'F', 40, 12, 20, 35, 19, 14, 22, 20, 'Y'),
(7, 'Ruby General Hospital', '576, Anandapur Main Rd, Golpark, Sector I, Kasba, Kolkata, West Bengal 700107', '0-15', 'M', 22, 15, 19, 20, 14, 17, 44, 29, 'Y'),
(7, 'Ruby General Hospital', '576, Anandapur Main Rd, Golpark, Sector I, Kasba, Kolkata, West Bengal 700107', '0-15', 'F', 29, 33, 15, 19, 20, 44, 55, 40, 'Y'),
(7, 'Ruby General Hospital', '576, Anandapur Main Rd, Golpark, Sector I, Kasba, Kolkata, West Bengal 700107', '16-30', 'M', 30, 40, 20, 15, 35, 9, 19, 22, 'Y'),
(7, 'Ruby General Hospital', '576, Anandapur Main Rd, Golpark, Sector I, Kasba, Kolkata, West Bengal 700107', '16-30', 'F', 31, 22, 23, 19, 14, 20, 65, 44, 'Y'),
(7, 'Ruby General Hospital', '576, Anandapur Main Rd, Golpark, Sector I, Kasba, Kolkata, West Bengal 700107', '31-50', 'M', 22, 25, 56, 45, 25, 34, 29, 66, 'Y'),
(7, 'Ruby General Hospital', '576, Anandapur Main Rd, Golpark, Sector I, Kasba, Kolkata, West Bengal 700107', '31-50', 'F', 44, 19, 20, 41, 29, 23, 15, 18, 'Y'),
(8, 'Nrs. Medical College & Hospital', ' 8, Acharya Prafulla Chandra Rd, Shyambazar, Sealdah, Raja Bazar, Kolkata, West Bengal 700041', '0-15', 'M', 25, 16, 9, 26, 32, 33, 24, 10, 'Y'),
(8, 'Nrs. Medical College & Hospital', ' 8, Acharya Prafulla Chandra Rd, Shyambazar, Sealdah, Raja Bazar, Kolkata, West Bengal 700041', '0-15', 'F', 22, 15, 19, 40, 27, 10, 19, 20, 'Y'),
(8, 'Nrs. Medical College & Hospital', ' 8, Acharya Prafulla Chandra Rd, Shyambazar, Sealdah, Raja Bazar, Kolkata, West Bengal 700041', '16-30', 'M', 21, 18, 15, 30, 37, 14, 17, 22, 'Y'),
(8, 'Nrs. Medical College & Hospital', ' 8, Acharya Prafulla Chandra Rd, Shyambazar, Sealdah, Raja Bazar, Kolkata, West Bengal 700041', '16-30', 'F', 10, 8, 9, 15, 17, 25, 11, 31, 'Y'),
(8, 'Nrs. Medical College & Hospital', ' 8, Acharya Prafulla Chandra Rd, Shyambazar, Sealdah, Raja Bazar, Kolkata, West Bengal 700041', '31-50', 'M', 40, 20, 14, 25, 48, 38, 15, 19, 'Y'),
(8, 'Nrs. Medical College & Hospital', ' 8, Acharya Prafulla Chandra Rd, Shyambazar, Sealdah, Raja Bazar, Kolkata, West Bengal 700041', '31-50', 'F', 22, 10, 4, 37, 25, 14, 16, 25, 'Y'),
(9, 'IPGME&R and SSKM Hospital', 'SSKM Hospital Rd, Bhowanipore, Kolkata, West Bengal 700020', '0-15', 'M', 17, 22, 19, 30, 45, 17, 20, 11, 'Y'),
(9, 'IPGME&R and SSKM Hospital', 'SSKM Hospital Rd, Bhowanipore, Kolkata, West Bengal 700020', '0-15', 'F', 30, 12, 17, 15, 20, 47, 22, 17, 'Y'),
(9, 'IPGME&R and SSKM Hospital', 'SSKM Hospital Rd, Bhowanipore, Kolkata, West Bengal 700020', '16-30', 'M', 19, 16, 1720, 29, 22, 35, 14, 11, 'Y'),
(9, 'IPGME&R and SSKM Hospital', 'SSKM Hospital Rd, Bhowanipore, Kolkata, West Bengal 700020', '16-30', 'F', 14, 28, 7, 21, 24, 17, 19, 15, 'Y'),
(9, 'IPGME&R and SSKM Hospital', 'SSKM Hospital Rd, Bhowanipore, Kolkata, West Bengal 700020', '31-50', 'M', 20, 25, 10, 14, 30, 17, 16, 18, 'Y'),
(9, 'IPGME&R and SSKM Hospital', 'SSKM Hospital Rd, Bhowanipore, Kolkata, West Bengal 700020', '31-50', 'F', 25, 20, 15, 55, 20, 3, 19, 17, 'Y'),
(10, 'Chittaranjan Seva Sadan Hospital', '83, Shyama Prasad Mukherjee Rd, Bakul Bagan, Bhowanipore, Kolkata, West Bengal 700026', '0-15', 'M', 45, 17, 35, 14, 12, 25, 23, 17, 'Y'),
(10, 'Chittaranjan Seva Sadan Hospital', '83, Shyama Prasad Mukherjee Rd, Bakul Bagan, Bhowanipore, Kolkata, West Bengal 700026', '0-15', 'F', 30, 33, 20, 29, 15, 17, 14, 16, 'Y'),
(10, 'Chittaranjan Seva Sadan Hospital', '83, Shyama Prasad Mukherjee Rd, Bakul Bagan, Bhowanipore, Kolkata, West Bengal 700026', '16-30', 'M', 15, 20, 25, 17, 19, 33, 22, 26, 'Y'),
(10, 'Chittaranjan Seva Sadan Hospital', '83, Shyama Prasad Mukherjee Rd, Bakul Bagan, Bhowanipore, Kolkata, West Bengal 700026', '16-30', 'F', 55, 17, 50, 41, 22, 31, 19, 20, 'Y'),
(10, 'Chittaranjan Seva Sadan Hospital', '83, Shyama Prasad Mukherjee Rd, Bakul Bagan, Bhowanipore, Kolkata, West Bengal 700026', '31-50', 'M', 25, 20, 36, 27, 31, 20, 19, 34, 'Y'),
(10, 'Chittaranjan Seva Sadan Hospital', '83, Shyama Prasad Mukherjee Rd, Bakul Bagan, Bhowanipore, Kolkata, West Bengal 700026', '31-50', 'F', 30, 25, 24, 19, 17, 22, 14, 24, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `t_organ_doner_pending_table`
--

CREATE TABLE `t_organ_doner_pending_table` (
  `id` int(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `organType` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bloodGroup` varchar(100) NOT NULL,
  `hospitalName` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `process` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_organ_doner_pending_table`
--

INSERT INTO `t_organ_doner_pending_table` (`id`, `name`, `email`, `organType`, `age`, `gender`, `bloodGroup`, `hospitalName`, `status`, `process`) VALUES
(5, 'Deb', '', 'Lungs', '0-15', 'M', 'O+', 'ILS Hospital', 'Approved', 'ND'),
(6, 'Akash Das ', '', 'Lungs', '16-30', 'M', 'B-', 'ILS Hospital', 'Approved', 'ND'),
(7, 'Debdyuti paul', '', 'Heart', '0-15', 'M', 'A+', 'Apollo Medical centre Kolkata', 'Approved', 'D'),
(8, 'fghfhgfhg', '', 'Heart', '0-15', 'M', 'A+', 'Apollo Medical centre Kolkata', 'Approved', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `t_organ_recipient_pending_table`
--

CREATE TABLE `t_organ_recipient_pending_table` (
  `id` int(100) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `organType` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bloodGroup` varchar(100) NOT NULL,
  `hospitalName` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `process` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_organ_recipient_pending_table`
--

INSERT INTO `t_organ_recipient_pending_table` (`id`, `Name`, `Email`, `organType`, `age`, `gender`, `bloodGroup`, `hospitalName`, `status`, `process`) VALUES
(5, 'Akash Das ', '', 'Heart', '0-15', 'M', 'A+', 'ILS Hospital Dumdum', 'Approved', ''),
(6, 'Akash Das ', '', 'Heart', '0-15', 'M', 'A+', 'ILS Hospital Dumdum', 'Approved', ''),
(7, 'shirsha Das', '', 'Heart', '16-30', 'F', 'O+', 'KPC Medical college & Hospital', 'Approved', ''),
(8, 'sanga haldar', '', 'Lungs', '16-30', 'F', 'B+', 'ILS Hospital Dumdum', 'Approved', ''),
(9, 'aaaa', '', 'Heart', '31-50', 'F', 'A+', 'Nrs. Medical College & Hospital', 'Approved', ''),
(10, 'awa', '', 'Heart', '16-30', 'F', 'O+', 'Apollo Medical centre Kolkata', 'Approved', ''),
(11, 'fghfhgfhg', '', 'Heart', '16-30', 'M', 'B+', 'KPC Medical college & Hospital', 'Approved', ''),
(12, 'promo', '', 'Heart', '0-15', 'M', 'A-', 'Belle Vue Clinic', 'Approved', ''),
(13, 'ab', '', 'Heart', '0-15', 'M', 'A+', 'Apollo Medical centre Kolkata', 'Approved', ''),
(14, 'ww', '', 'Heart', '0-15', 'M', 'A+', 'Apollo Medical centre Kolkata', 'Approved', ''),
(15, 'Debdyuti paul', '', 'Heart', '0-15', 'M', 'A+', 'Apollo Medical centre Kolkata', '0', ''),
(16, 'Debdyuti paul', '', 'Heart', '0-15', 'M', 'A+', 'Apollo Medical centre Kolkata', '0', ''),
(17, 'fghfhgfhg', '', 'Heart', '0-15', 'M', 'A+', 'Apollo Medical centre Kolkata', 'Approved', 'S'),
(18, 'Debdyuti paul', '', 'Heart', '0-15', 'M', 'A+', 'Apollo Medical centre Kolkata', 'Approved', 'ND'),
(19, 'Debdyuti paul', '', 'Heart', '0-15', 'M', 'A+', 'Apollo Medical centre Kolkata', 'Approved', 'ND'),
(20, 'Deb', '', 'Heart', '0-15', 'M', 'A+', 'Apollo Medical centre Kolkata', 'Approved', 'D'),
(21, 'Debdyuti paul', '', 'Heart', '0-15', 'M', 'A+', 'Apollo Medical centre Kolkata', 'Approved', 'D'),
(22, 'fghfhgfhg', '', 'Heart', '0-15', 'M', 'A-', 'Apollo Medical centre Kolkata', 'Approved', 'D'),
(23, 'Debdyuti paul', '', 'Lungs', '0-15', 'M', 'A+', 'Apollo Medical centre Kolkata', 'Approved', 'D'),
(24, 'Debdyuti paul', '', 'Lungs', '0-15', 'M', 'A+', 'Apollo Medical centre Kolkata', 'Approved', 'D'),
(25, 'Deb', '', 'Lungs', '0-15', 'M', 'A+', 'Apollo Medical centre Kolkata', 'Approved', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `t_registration_details`
--

CREATE TABLE `t_registration_details` (
  `id` int(250) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `petname` varchar(10) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Age` int(4) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='#this for registering into the site';

--
-- Dumping data for table `t_registration_details`
--

INSERT INTO `t_registration_details` (`id`, `Name`, `Email`, `password`, `petname`, `Mobile`, `DOB`, `Age`, `Address`, `Status`) VALUES
(4, 'Debdyuti Paul', 'debdyutipaul6@gmail.com', 'debdyuti', 'juli', '9330819490', '2023-09-04', 20, 'Birati,Kolkata', 'Approved'),
(5, 'albal chal', 'gandu@gmail.com', 'bokacoda', 'jangiya', '8981080990', '2017-06-22', 15, 'Anjangarh', 'Approved'),
(6, 'Akash Das', 'happyakashdas2003@gmail.com', 'akash169', 'vidyut', '', '', 0, '', 'Approved'),
(7, 'Sagnik Kar', 'Sagnikkar@gmail.com', 'sahnikka', 'promothesh', '', '', 0, '', 'Approved'),
(8, 'Shirsha Das ', 'ShirshaDas@gmail.com', 'debirsha', 'minu', '', '', 0, '', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `t_userlogin_table`
--

CREATE TABLE `t_userlogin_table` (
  `id` int(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `In_time` varchar(30) NOT NULL,
  `Out_time` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='#this for login into the site';

--
-- Dumping data for table `t_userlogin_table`
--

INSERT INTO `t_userlogin_table` (`id`, `email`, `In_time`, `Out_time`, `status`) VALUES
(20, 'debdyutipaul6@gmail.com', '17-07-2023 07:30:24 PM', '17-09-2023 06:10:18 ', 'out'),
(21, 'gandu@gmail.com', '22-07-2023 12:58:26 AM', '09-09-2023 12:52:36 ', 'out'),
(22, 'happyakashdas2003@gmail.com', '14-08-2023 10:48:21 PM', '17-09-2023 06:26:53 ', 'out'),
(23, 'Sagnikkar@gmail.com', '03-09-2023 12:02:19 PM', '', 'out'),
(24, 'Sagnikkar@gmail.com', '03-09-2023 12:48:40 PM', '', 'in'),
(25, 'debdyutipaul6@gmail.com', '09-09-2023 12:42:32 PM', '17-09-2023 06:10:18 ', 'out'),
(26, 'debdyutipaul6@gmail.com', '09-09-2023 01:21:01 PM', '17-09-2023 06:10:18 ', 'out'),
(27, 'debdyutipaul6@gmail.com', '09-09-2023 01:50:07 PM', '17-09-2023 06:10:18 ', 'out'),
(28, 'debdyutipaul6@gmail.com', '16-09-2023 02:31:27 PM', '17-09-2023 06:10:18 ', 'out'),
(29, 'debdyutipaul6@gmail.com', '17-09-2023 05:54:18 PM', '17-09-2023 06:10:18 ', 'out'),
(30, 'debdyutipaul6@gmail.com', '17-09-2023 10:54:40 PM', '', 'in');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin_information_table`
--
ALTER TABLE `t_admin_information_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_admin_login_table`
--
ALTER TABLE `t_admin_login_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_bloodbank_details_table`
--
ALTER TABLE `t_bloodbank_details_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `t_blood_doner_pending_table`
--
ALTER TABLE `t_blood_doner_pending_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_blood_recipent_pending_table`
--
ALTER TABLE `t_blood_recipent_pending_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_hospital_blood_details_table`
--
ALTER TABLE `t_hospital_blood_details_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_organ_doner_pending_table`
--
ALTER TABLE `t_organ_doner_pending_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_organ_recipient_pending_table`
--
ALTER TABLE `t_organ_recipient_pending_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_registration_details`
--
ALTER TABLE `t_registration_details`
  ADD UNIQUE KEY `id` (`id`,`Email`) USING BTREE;

--
-- Indexes for table `t_userlogin_table`
--
ALTER TABLE `t_userlogin_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_admin_information_table`
--
ALTER TABLE `t_admin_information_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_admin_login_table`
--
ALTER TABLE `t_admin_login_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_bloodbank_details_table`
--
ALTER TABLE `t_bloodbank_details_table`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_blood_doner_pending_table`
--
ALTER TABLE `t_blood_doner_pending_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t_blood_recipent_pending_table`
--
ALTER TABLE `t_blood_recipent_pending_table`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `t_hospital_blood_details_table`
--
ALTER TABLE `t_hospital_blood_details_table`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_organ_doner_pending_table`
--
ALTER TABLE `t_organ_doner_pending_table`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_organ_recipient_pending_table`
--
ALTER TABLE `t_organ_recipient_pending_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `t_registration_details`
--
ALTER TABLE `t_registration_details`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_userlogin_table`
--
ALTER TABLE `t_userlogin_table`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
