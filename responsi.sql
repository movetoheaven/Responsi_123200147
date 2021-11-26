-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 05:59 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `responsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `item_id` varchar(10) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `unit` varchar(15) NOT NULL,
  `arrival_date` date NOT NULL,
  `category` varchar(20) NOT NULL,
  `item_status` varchar(20) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`item_id`, `item_name`, `amount`, `unit`, `arrival_date`, `category`, `item_status`, `price`) VALUES
('CMPi5', 'HP Core i5 . computer', 25, 'units', '2016-05-04', 'Electronic', 'Well', 127500000),
('GPEN12', '12 GoT Pen', 2, 'units', '2021-11-03', 'Office stationery', 'Maintenance', 1),
('HND01', 'Honda CR-V 2016', 3, 'units', '2016-04-01', 'Vehicle', 'Well', 570000000),
('IOR12', 'Intel Core 12', 2, 'units', '2015-12-11', 'Electronic', 'Maintenance', 2147483647),
('KINN12', 'Kindness Gun', 3, 'units', '2015-02-26', 'Electronic', 'Maintenance', 170000),
('KJ101', 'Toyota Kijang', 3, 'units', '2017-06-01', 'Vehicle', 'Well', 90000000),
('KUR', 'Chair king', 1, 'units', '2018-02-26', 'Office stationery', 'Well', 175000),
('KUR9', 'Chair Gigs', 1, 'units', '2021-05-13', 'Office stationery', 'Maintenance', 15000),
('OP892', 'Orange Pen', 2, 'fruits', '2016-03-26', 'Building', 'Maintenance', 20000),
('popo', 'penapplepen', 1, 'units', '2021-06-10', 'Office stationery', 'Damaged', 15000),
('TNH01', 'Main Building Land', 350, 'm2', '2015-11-05', 'Building', 'Well ', 27500000),
('TYT01', '2015 Toyota Camry', 5, 'units ', '2015-10-10', 'Vehicle', 'Well', 345000000);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_num` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`username`, `password`, `full_name`, `email`, `phone_num`) VALUES
('ajiganteng123', 'ajiganteng123', 'ajiganteng', 'aji@gmail.com', '082122266845465'),
('Jajang Handsome Prime', 'jajang123', 'Jajang Handsome', 'jajanghandsome@gmail.com', '555666123'),
('jamesbro123', 'james123', 'James Ganteng', 'jamesganteng@gmail.com', '55566600'),
('jojohandsome12', 'jojoganteng12', 'jojohandsome', 'jojohandsome12@gmail.com', '082122541232');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
