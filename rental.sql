-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 05, 2018 at 11:47 PM
-- Server version: 10.0.35-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `armg3295_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-09-03 11:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `FromDate` varchar(20) DEFAULT NULL,
  `ToDate` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `userEmail`, `VehicleId`, `FromDate`, `ToDate`, `message`, `Status`, `PostingDate`) VALUES
(5, 'armanbasir7@gmail.com', 13, '12/09/2018', '13/09/2018', 'Semoga Bisa Bekerja Sama Pak Ya', 1, '2018-09-04 19:02:37'),
(6, 'abi@gmail.com', 12, '06/10/2018', '15/01/2019', 'Pak semoga kerja sama kita berjalan dengan baik\r\n', 0, '2018-09-05 02:20:39'),
(7, 'abi@gmail.com', 16, '2018-09-06 09:00', '2018-09-13 10:30', 'Semoga masih Ready Pak Ya', 0, '2018-09-05 02:35:20'),
(8, 'dede@gmail.com', 12, '2018-09-05 22:25', '2018-09-09 22:25', 'Pak Kami mohon konfirmasinya', 1, '2018-09-05 14:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrands`
--

CREATE TABLE `tblbrands` (
  `id` int(11) NOT NULL,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`id`, `BrandName`, `CreationDate`, `UpdationDate`) VALUES
(11, 'Acura', '2018-09-04 18:22:58', NULL),
(12, 'Alfa Romeo', '2018-09-04 18:23:14', NULL),
(13, 'Aston Martin', '2018-09-04 18:23:26', NULL),
(14, 'Audi', '2018-09-04 18:23:29', NULL),
(15, 'Bentley', '2018-09-04 18:23:39', NULL),
(16, 'BMW', '2018-09-04 18:23:44', NULL),
(17, 'Bugatti', '2018-09-04 18:23:54', NULL),
(18, 'Buick', '2018-09-04 18:24:04', NULL),
(19, 'Cadillac', '2018-09-04 18:24:15', NULL),
(20, 'Chevrolet', '2018-09-04 18:24:22', NULL),
(21, 'Chrysler', '2018-09-04 18:24:33', NULL),
(22, 'Citroen', '2018-09-04 18:24:42', NULL),
(23, 'Dodge', '2018-09-04 18:24:51', NULL),
(24, 'Ferrari', '2018-09-04 18:25:00', NULL),
(25, 'Flat', '2018-09-04 18:25:12', NULL),
(26, 'Geely', '2018-09-04 18:25:17', NULL),
(27, 'General Motors', '2018-09-04 18:25:27', NULL),
(28, 'GMC', '2018-09-04 18:25:30', NULL),
(29, 'Honda', '2018-09-04 18:25:39', NULL),
(30, 'Hyunday', '2018-09-04 18:25:45', NULL),
(31, 'Infiniti', '2018-09-04 18:25:59', NULL),
(32, 'Jaguar', '2018-09-04 18:26:03', NULL),
(33, 'Jeep', '2018-09-04 18:26:09', NULL),
(34, 'Kia', '2018-09-04 18:26:14', '2018-09-04 18:29:38'),
(35, 'General Motors', '2018-09-04 18:26:23', NULL),
(36, 'Lamborghini', '2018-09-04 18:26:30', NULL),
(37, 'Land Rover', '2018-09-04 18:26:38', NULL),
(38, 'Lexus', '2018-09-04 18:26:46', NULL),
(39, 'Maserati', '2018-09-04 18:26:53', NULL),
(40, 'Mazda', '2018-09-04 18:27:01', NULL),
(41, 'McLaren', '2018-09-04 18:27:07', NULL),
(42, 'Mercedes-Benz', '2018-09-04 18:27:13', NULL),
(43, 'Mini', '2018-09-04 18:27:22', NULL),
(44, 'Mitsubishi', '2018-09-04 18:27:36', NULL),
(45, 'Nissan ', '2018-09-04 18:27:44', NULL),
(46, 'Pagan', '2018-09-04 18:27:47', NULL),
(47, 'Peugeot', '2018-09-04 18:27:56', NULL),
(48, 'Porsche', '2018-09-04 18:28:05', NULL),
(49, 'RAM', '2018-09-04 18:28:17', NULL),
(50, 'Renault', '2018-09-04 18:28:21', NULL),
(51, 'Rolls Royce', '2018-09-04 18:28:30', NULL),
(52, 'SAAB', '2018-09-04 18:28:34', NULL),
(53, 'Subaru', '2018-09-04 18:28:44', NULL),
(54, 'Suzuki', '2018-09-04 18:28:48', NULL),
(55, 'Tata', '2018-09-04 18:28:55', NULL),
(56, 'Tesla', '2018-09-04 18:28:59', NULL),
(57, 'Toyota', '2018-09-04 18:29:07', '2018-09-04 18:29:57'),
(58, 'Volvo', '2018-09-04 18:29:10', NULL),
(59, 'Volkwagen', '2018-09-04 18:29:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE `tblcontactusinfo` (
  `id` int(11) NOT NULL,
  `Address` tinytext,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, 'Jl. Malino, Kel Malino, Kabupaten Gowa, Sulawesi Selatan, Indonesia 92145', 'armandelta7@gmail.com', '+62 81 5247 37292');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(3, 'Arman', 'armandelta7@gmail.com', '08152473729', 'Pak Bagaimana dengan yang kemarin saya bilang, kok Begitu ya', '2018-09-04 19:43:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `type`, `detail`) VALUES
(1, 'Terms and Conditions', 'terms', '<i style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</i>'),
(2, 'Privacy Policy', 'privacy', '<i style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</i>'),
(3, 'About Us ', 'aboutus', '<i style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</i>'),
(11, 'FAQs', 'faqs', '<i style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</i>');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscribers`
--

CREATE TABLE `tblsubscribers` (
  `id` int(11) NOT NULL,
  `SubscriberEmail` varchar(120) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubscribers`
--

INSERT INTO `tblsubscribers` (`id`, `SubscriberEmail`, `PostingDate`) VALUES
(5, 'armandelta7@gmail.conm', '2018-09-04 19:45:32'),
(6, 'armandelta@gmail.com', '2018-09-05 14:25:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonial`
--

CREATE TABLE `tbltestimonial` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `Testimonial` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltestimonial`
--

INSERT INTO `tbltestimonial` (`id`, `UserEmail`, `Testimonial`, `PostingDate`, `status`) VALUES
(3, 'armanbasir7@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '2018-09-04 19:14:29', 1),
(4, 'abi@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '2018-09-04 19:19:22', 1),
(5, 'lawan@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '2018-09-04 19:22:08', 1),
(6, 'alif@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. \r\n\r\n', '2018-09-04 19:23:49', 1),
(7, 'ardi@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '2018-09-04 19:26:44', 1),
(8, 'dede@gmail.com', 'Car Rental adalah website terbaik untuk melakukan pemasanan rentarl mobil dengan harga yang sangat terjangku.', '2018-09-05 14:31:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNo` varchar(25) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `EmailId`, `Password`, `ContactNo`, `dob`, `Address`, `City`, `Country`, `RegDate`, `UpdationDate`) VALUES
(6, 'Arman', 'armanbasir7@gmail.com', 'f69d037742b470f00879e81b7835a1a3', '0815247372', '', 'Mamampang, garassi Tinggimocong, Gowa, Indonesia', 'Makassar', 'Malino', '2018-09-04 19:01:42', '2018-09-04 19:13:26'),
(7, 'Abi', 'abi@gmail.com', 'f69d037742b470f00879e81b7835a1a3', '0817625676', '12/03/2007', 'Pettarani, Makassar, Kota Mkassar, Sulawesi Selatan', 'Makassar', 'Makassar', '2018-09-04 19:17:55', '2018-09-04 19:19:06'),
(8, 'Lawan', 'lawan@gmail.com', 'f69d037742b470f00879e81b7835a1a3', '081245678', NULL, NULL, NULL, NULL, '2018-09-04 19:20:45', NULL),
(9, 'Alif', 'alif@gmail.com', 'f69d037742b470f00879e81b7835a1a3', '0814527998', NULL, NULL, NULL, NULL, '2018-09-04 19:23:15', NULL),
(10, 'Nur Ardi', 'ardi@gmail.com', 'f69d037742b470f00879e81b7835a1a3', '0824578756', NULL, NULL, NULL, NULL, '2018-09-04 19:26:12', NULL),
(11, 'Dede', 'dede@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', '081524737292', '1899-12-31 00:00', 'Makassar, Jalan Pettarani, Sulawesi-Selatan', 'Makassar', 'Makassar', '2018-09-05 14:26:21', '2018-09-05 14:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicles`
--

CREATE TABLE `tblvehicles` (
  `id` int(11) NOT NULL,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `Vimage2` varchar(120) DEFAULT NULL,
  `Vimage3` varchar(120) DEFAULT NULL,
  `Vimage4` varchar(120) DEFAULT NULL,
  `Vimage5` varchar(120) DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `PowerDoorLocks` int(11) DEFAULT NULL,
  `AntiLockBrakingSystem` int(11) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `PowerSteering` int(11) DEFAULT NULL,
  `DriverAirbag` int(11) DEFAULT NULL,
  `PassengerAirbag` int(11) DEFAULT NULL,
  `PowerWindows` int(11) DEFAULT NULL,
  `CDPlayer` int(11) DEFAULT NULL,
  `CentralLocking` int(11) DEFAULT NULL,
  `CrashSensor` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvehicles`
--

INSERT INTO `tblvehicles` (`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Vimage4`, `Vimage5`, `AirConditioner`, `PowerDoorLocks`, `AntiLockBrakingSystem`, `BrakeAssist`, `PowerSteering`, `DriverAirbag`, `PassengerAirbag`, `PowerWindows`, `CDPlayer`, `CentralLocking`, `CrashSensor`, `LeatherSeats`, `RegDate`, `UpdationDate`) VALUES
(11, 'Unde omnis iste natus error sit voluptatem accusantium', 47, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 10000000, 'Petrol', 2018, 2, 'featured-img-1.jpg', 'featured-img-2.jpg', 'featured-img-3.jpg', 'featured-img-3.jpg', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2018-09-04 18:32:16', '2018-09-04 18:40:32'),
(12, ' Quae ab illo inventore veritatis et quasi architecto beatae', 11, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 200000, 'Diesel', 2000, 6, 'listing_img1.jpg', 'listing_img2.jpg', 'listing_img3.jpg', 'recent-blog-1.jpg', '', 1, NULL, NULL, NULL, 1, 1, NULL, NULL, 1, 1, NULL, NULL, '2018-09-04 18:34:43', '2018-09-04 18:42:14'),
(13, 'Ut labore et dolore magnam aliquam quaerat voluptatem', 17, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 50000000, 'CNG', 2007, 2, 'recent-blog-1.jpg', 'recent-blog-1.jpg', 'recent-blog-2.jpg', 'recent-car-1.jpg', '', 1, 1, 1, NULL, 1, NULL, NULL, NULL, 1, 1, 1, NULL, '2018-09-04 18:35:58', '2018-09-04 18:42:31'),
(14, 'qui in ea voluptate velit esse, quam nihil molestiae consequatur', 23, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 20000, 'Diesel', 2007, 4, 'recent-car-2.jpg', 'recent-car-4.jpg', 'recent-car-5.jpg', 'trending-car-img-3.jpg', '', NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, '2018-09-04 18:37:03', '2018-09-04 18:42:48'),
(15, 'quis nostrum exercitationem ullam corporis suscipit laboriosam', 24, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 300000, 'Diesel', 2009, 7, 'recent-car-6.jpg', 'trending-car-img-1.jpg', 'trending-car-img-2.jpg', 'featured-img-3.jpg', '', NULL, 1, 1, NULL, NULL, 1, 1, NULL, NULL, 1, 1, NULL, '2018-09-04 18:38:27', '2018-09-04 18:43:20'),
(16, 'Vero eos et accusamus et iusto odio dignissimos ducimus', 29, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 20000, 'Petrol', 2018, 8, 'recent-car-4.jpg', 'featured-img-1.jpg', 'recent-blog-2.jpg', 'listing_img2.jpg', '', NULL, 1, NULL, NULL, NULL, 1, 1, NULL, NULL, 1, 1, NULL, '2018-09-04 18:39:45', '2018-09-04 18:43:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbrands`
--
ALTER TABLE `tblbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblbrands`
--
ALTER TABLE `tblbrands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
