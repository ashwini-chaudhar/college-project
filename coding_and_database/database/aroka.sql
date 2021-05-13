-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 12:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aroka`
--

-- --------------------------------------------------------

--
-- Table structure for table `addhoney`
--

CREATE TABLE `addhoney` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` text NOT NULL,
  `disc` text NOT NULL,
  `pack` varchar(40) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addhoney`
--

INSERT INTO `addhoney` (`id`, `name`, `img`, `disc`, `pack`, `price`) VALUES
(2, 'SHIMLA', 'img/shimla.jpg', 'SHIMLA HONEYMOON PACKAGES', '3 DAYS 2 NIGHTS', 40000),
(3, 'MANALI', 'img/manali.jpg', 'MANALI HONEYMOON PACKAGE', '3 DAYS 2 NIGHTS', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `addplaces`
--

CREATE TABLE `addplaces` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` text NOT NULL,
  `disc` varchar(400) NOT NULL,
  `pack` varchar(30) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addplaces`
--

INSERT INTO `addplaces` (`id`, `name`, `img`, `disc`, `pack`, `price`) VALUES
(1, 'PUNE(MAHARASHTRA)', 'img\\pune.jpg', 'PLACES TO VISIT : SHANIWARWADA,AGHAKHAN PALACE,LAL MAHAL,DAGDUSHETH TEMPLE,& MANY MORE...\r\nMODE OF TRAVEL : BY BUS(FROM HYDRABAD,MUMBAI,AHEMDABAD)..\r\nACCOMODATION : YES(FREE)+FOOD(VEG/NON-VEG).\r\n\r\n', '2 DAYS 1 NIGHT', 5000),
(2, 'AURANGABAD(MAHARASHTRA)', 'img\\aurangabad.jpg', 'PLACE TO VISIT : BIBI KA MAQBARA,CAVES,PANCHAKI,MUESEUMS,ZOOS,& MANY MORE...\r\nMODE OF TRAVEL : BY BUS(FROM MUMBAI,HYDRABAD,CHENNAI)...\r\nACCOMODATION : YES(FREE)+FOOD(VEG/NON-VEG).', '2 DAYS 1 NIGHT', 4000),
(3, 'MUMBAI(MAHARASHTRA)', 'img\\mumbai.jpg', 'PLACE TO VISIT : GATE WAY OF INDIA,CST,MARINE DRIVE,MUSEUMS,ZOOS,& MANY MORE...\r\nMODE OF TRAVEL : BY BUS(FROM MUMBAI,HYDRABAD,CHENNAI)...\r\nACCOMODATION : YES(FREE)+FOOD(VEG/NON-VEG).', '3 DAYS 2 NIGHT', 6000),
(10, 'SINDHUDURG(MAHARASHTRA)', 'img/sindhudurg.jpg', 'PLACE TO VISIT : VIJAYDURG,TARKALI,FORTS, & MANY MORE... MODE OF TRAVEL : BY BUS(FROM MUMBAI,HYDRABAD,CHENNAI)... ACCOMODATION : YES(FREE)+FOOD(VEG/NON-VEG).', '2 DAYS 1 NIGHT', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `addtemp`
--

CREATE TABLE `addtemp` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` text NOT NULL,
  `disc` varchar(400) NOT NULL,
  `pack` varchar(40) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addtemp`
--

INSERT INTO `addtemp` (`id`, `name`, `img`, `disc`, `pack`, `price`) VALUES
(2, 'KEDARNATH(UK)', 'img/t2.jpg', 'Kedarnath is situated in Uttrakhand.It is located in the HIMALAYAS,about 3,583 m above sea level', '2 days 1 night', 1000),
(10, 'AMRITSAR TEMPLE', 'img/golden.jpg', 'AMRITSAR TEMPLE ALSO KNOWN AS GOLDEN TEMPLE OF INDIA.', '2 days 1 night', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `mno` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`, `mno`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123', 9876543219);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `usr_id` int(11) DEFAULT NULL,
  `placeid` int(11) DEFAULT NULL,
  `arvPlace` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `noOfPerson` int(11) DEFAULT NULL,
  `noOfChild` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `mno` bigint(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `gender` varchar(20) NOT NULL,
  `noRoom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `usr_id`, `placeid`, `arvPlace`, `date`, `noOfPerson`, `noOfChild`, `name`, `mno`, `address`, `gender`, `noRoom`) VALUES
(4, 1, 1, 'pune', '2020-05-22', 2, 0, 'kajal', 43454657, 'kondwa', 'Female', 4),
(5, 1, 1, 'pune', '2020-05-20', 2, 0, 'kajal', 1234567890, 'kondwa', 'Female', 4),
(0, 1, 1, 'pune', '2020-05-26', 2, 0, 'kajal', 8790678798, 'puune', 'Female', 2),
(0, 1, 2, 'delhi', '2020-05-28', 3, 1, 'kp', 1234567892, 'delhi 1', 'Male', 2),
(0, 0, 1, '', '0000-00-00', 0, 0, '', 0, '', '', 0),
(0, 4, 3, 'pune', '2020-06-10', 1, 0, 'Poonam Parate', 9087908790, 'undri pisoli road,pune', 'Female', 1),
(0, 7, 2, 'PUNE', '2020-06-25', 1, 0, 'KAJAL PARATE', 9087908790, 'undri pisoli road,pune', 'Female', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookingshoney`
--

CREATE TABLE `bookingshoney` (
  `id` int(5) NOT NULL,
  `usr_id` int(5) NOT NULL,
  `placeid` int(5) NOT NULL,
  `arvPlace` int(11) NOT NULL,
  `date` date NOT NULL,
  `noOfPerson` int(2) NOT NULL,
  `noOfChild` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mno` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `noRoom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingshoney`
--

INSERT INTO `bookingshoney` (`id`, `usr_id`, `placeid`, `arvPlace`, `date`, `noOfPerson`, `noOfChild`, `name`, `mno`, `address`, `gender`, `noRoom`) VALUES
(0, 1, 2, 0, '2020-06-04', 2, 0, 'kpp', 2147483647, 'mumbai,sion', 'Ma', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookingstemp`
--

CREATE TABLE `bookingstemp` (
  `id` int(5) NOT NULL,
  `usr_id` int(7) NOT NULL,
  `placeid` int(10) NOT NULL,
  `arvPlace` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `noOfPerson` int(11) NOT NULL,
  `noOfChild` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mno` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `noRoom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingstemp`
--

INSERT INTO `bookingstemp` (`id`, `usr_id`, `placeid`, `arvPlace`, `date`, `noOfPerson`, `noOfChild`, `name`, `mno`, `address`, `gender`, `noRoom`) VALUES
(0, 8, 2, 'delhi', '2020-06-24', 1, 0, 'kajal parate', 2147483647, 'undri pisoli road,pune', 'Fe', 1),
(0, 9, 9, 'Delhi', '2020-05-28', 1, 0, 'KAJAL PARATE', 2147483647, 'delhi 1', 'Fe', 1),
(0, 12, 2, 'Delhi', '2020-05-28', 1, 0, 'KAJAL SURESH PARATE', 2147483647, 'DELHI', '', 1),
(0, 13, 2, 'AHEMDABAD', '2020-05-28', 1, 0, 'KAJAL SURESH PARATE', 987987988, 'AHEMDABAD,06', 'Fe', 1),
(0, 1, 10, 'punjab', '2020-06-03', 1, 0, 'kps', 2147483647, 'chandigarh,punjab', 'Ma', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `mno` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `pass`, `mno`) VALUES
(1, 'kajal', 'kajal@gmail.com', 'kajal123', 8790678798),
(13, 'kajal parate', 'kajal1@gmail.com', 'kajal1', 987987988);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addhoney`
--
ALTER TABLE `addhoney`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addplaces`
--
ALTER TABLE `addplaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addtemp`
--
ALTER TABLE `addtemp`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mno` (`mno`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mno` (`mno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addhoney`
--
ALTER TABLE `addhoney`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `addplaces`
--
ALTER TABLE `addplaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `addtemp`
--
ALTER TABLE `addtemp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
