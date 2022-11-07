-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 09:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin1', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `id` int(30) NOT NULL,
  `plant_name` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`id`, `plant_name`, `photo`, `category`, `price`, `description`) VALUES
(2, 'Leopard', '2.jpg', 'indoor', 900, 'Small Leopard skin (Sansevieria trifasciata), is an air-purifying plant that doesn’t require much care, and its sizes and color shades vary and can be placed in the home or different work environments.\r\nWATERING\r\nIt is only watered after the soil dries out.\r\n\r\nLIGHTING\r\nYou need moderate to bright light such as direct sunlight or room lighting.\r\n\r\nTEMPERATURE\r\nIt needs a moderate atmosphere that matches the natural room temperature, and it can withstand warm weather up to 35 degrees Celsius.                     '),
(3, 'Anthoruim', '3.jpg', 'indoor', 70, 'IT is a beautiful plant with wavy colored leaves, does not require much care, and can be placed in different homes or work environments.WATERING\nIt is only watering after the soil has partially dried. It is preferable to spray its leaves with water spray to provide moisture.LIGHTING\nIt needs a light to medium filters like window light or artificial lighting in the room.TEMPERATURE\nIt needs a moderate atmosphere, suitable for normal room temperature up to 30 degrees Celsius.  '),
(4, 'Fittonia', '4.jpg', 'outdoor', 90, 'Fittonia, It is one of the plants that is distinguished by the beautiful color leaves.WATERING\nIt is only watering after the soil has partially dried. It is preferable to spray its leaves with water spray to provide moisture.LIGHTING\nIt needs a medium to dim filtered light.TEMPERATURE\nIt needs a moderate atmosphere that matches the natural room temperature. Also, it can withstand warm weather up to 30 degrees Celsius.'),
(5, 'Birbin', '5.jpg', 'outdoor', 60, 'The plant leaves are dark green when very young, but as it grows, the white pattern on the leaves will become more visible. It can be placed in the home or various work environments.WATERING\nDo not water the plant until the soil is partially dry, about 2 cm deep.LIGHTING\nThe plant needs bright.TEMPERATURE\nThe plant needs a moderate atmosphere, suitable for natural room temperature, and tolerates warm weather up to 30 degrees Celsius.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
