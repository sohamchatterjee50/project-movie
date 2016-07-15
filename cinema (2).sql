-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2016 at 07:43 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pass`) VALUES
(1, 'soham', 'soham');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details-1`
--

CREATE TABLE `booking_details-1` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `theater_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `show_timing` varchar(255) NOT NULL,
  `ticket_cost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_details-1`
--

INSERT INTO `booking_details-1` (`id`, `city_name`, `movie_name`, `theater_name`, `date`, `show_timing`, `ticket_cost`) VALUES
(1, 'asansol', 'Conjuring 2', 'bioscope', '2016-06-21', '9:00AM-12PM', '50'),
(2, 'durgapur', 'Conjuring 2', 'arti cinemas', '2016-06-21', '9:00AM-12PM', '50'),
(3, 'asansol', 'Conjuring 2', 'arti cinemas', '2016-06-20', '9:00AM-12PM', '50'),
(4, 'kolkata', 'Conjuring 2', 'bioscope', '2016-06-20', '3:00PM-5:30PM', '60'),
(5, 'durgapur', 'Now You See Me 2', 'arti cinemas', '2016-06-23', '6:30PM-9:00PM', '50'),
(6, 'durgapur', 'Now You See Me 2', 'bioscope', '2016-06-22', '10:00PM-12:45AM', '70'),
(7, 'durgapur', 'Now You See Me 2', 'arti cinemas', '2016-06-22', '10:00PM-12:45AM', '70'),
(8, 'durgapur', 'X-men Apocalypse', 'bioscope', '2016-06-23', '10:00PM-12:45AM', '70'),
(9, 'durgapur', 'X-men Apocalypse', 'bioscope', '2016-06-21', '10:00PM-12:45AM', '70'),
(10, 'durgapur', 'X-men Apocalypse', 'bioscope', '2016-06-23', '10:00PM-12:45AM', '50'),
(11, 'durgapur', 'Conjuring 2', 'arti cinemas', '2016-06-21', '6:30PM-9:00PM', '50'),
(12, 'durgapur', 'Conjuring 2', 'arti cinemas', '2016-06-22', '9:00AM-12PM', '60'),
(13, 'durgapur', 'Conjuring 2', 'arti cinemas', '2016-06-21', '9:00AM-12PM', '50'),
(14, 'darjiling', 'Now You See Me 2', 'bioscope', '2016-06-21', '9:00AM-12PM', '50');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details-2`
--

CREATE TABLE `booking_details-2` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `tickets_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_details-2`
--

INSERT INTO `booking_details-2` (`id`, `email`, `contact`, `tickets_quantity`) VALUES
(6, 'schat@gmail.com', 1234567890, 4),
(7, 'schat@gmail.com', 1234567890, 6),
(8, 'schat@gmail.com', 1234567990, 6),
(9, 'schat@gmail.com', 1234568901, 1),
(10, 'schat@gmail.com', 2147483647, 1),
(11, 'schat@gmail.com', 2147483647, 1),
(12, 's@gmail.com', 1234567890, 1),
(13, 's@gmail.com', 1234567890, 2);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `city_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `city_description`) VALUES
(1, 'durgapur', ''),
(2, 'asansol', ''),
(3, 'kolkata', ''),
(4, 'darjiling', '');

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `did` int(11) NOT NULL,
  `dname` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` (`did`, `dname`) VALUES
(1, '2016-06-21'),
(2, '2016-06-20'),
(3, '2016-06-22'),
(4, '2016-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`m_id`, `m_name`) VALUES
(1, 'Conjuring 2'),
(2, 'Now You See Me 2'),
(3, 'X-men Apocalypse');

-- --------------------------------------------------------

--
-- Table structure for table `seat_map`
--

CREATE TABLE `seat_map` (
  `seat_id` int(11) NOT NULL,
  `seat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat_map`
--

INSERT INTO `seat_map` (`seat_id`, `seat_name`) VALUES
(1, 'A12,A13,A14,A15,A16,A17,'),
(2, 'A12,A13,A14,A15,A16,A17,'),
(3, 'C11,C12,C13,C14,C15,C16,'),
(4, 'O5,O6,O7,O8,O9,O10,'),
(5, 'C7,C8,C9,'),
(6, 'O5,O6,O7,O8,O9,O10,'),
(7, 'O19,O20,O21,O22,O23,O24,'),
(8, 'A12,'),
(9, 'A4,'),
(10, 'G13,'),
(11, 'A12,'),
(12, 'C12,C13,');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(17, 'Soham', 'Chatterjee', 'schat@gmail.com', '$2y$10$wmqNejlCdR2pLnpsqPeTGu48GTFzdxqBtcBnObDR/h9IkPPiYuSEW'),
(18, 'shubham', 'banerjee', 's@gmail.com', '$2y$10$zthQT1qviBl4JluNOyblAev1DWa4hGuAlobwwnbMjvrAGqFe8Ohay');

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(25) NOT NULL,
  `t_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`t_id`, `t_name`, `t_description`) VALUES
(1, 'arti cinemas', ''),
(2, 'bioscope', ''),
(3, 'inox', ''),
(4, 'dc cinema', '');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `tid` int(11) NOT NULL,
  `tcost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`tid`, `tcost`) VALUES
(1, 50),
(2, 60),
(3, 70);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_no`
--

CREATE TABLE `ticket_no` (
  `tno_id` int(11) NOT NULL,
  `tickets_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_no`
--

INSERT INTO `ticket_no` (`tno_id`, `tickets_quantity`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `time_id` int(11) NOT NULL,
  `time_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`time_id`, `time_name`) VALUES
(1, '9:00AM-12PM'),
(2, '3:00PM-5:30PM'),
(3, '6:30PM-9:00PM'),
(4, '10:00PM-12:45AM');

-- --------------------------------------------------------

--
-- Table structure for table `total_amount`
--

CREATE TABLE `total_amount` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_amount`
--

INSERT INTO `total_amount` (`id`, `amount`) VALUES
(1, 300),
(2, 300),
(3, 300),
(4, 300),
(5, 200),
(7, 420),
(8, 50),
(9, 50),
(10, 70),
(11, 50),
(12, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_details-1`
--
ALTER TABLE `booking_details-1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_details-2`
--
ALTER TABLE `booking_details-2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `seat_map`
--
ALTER TABLE `seat_map`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `ticket_no`
--
ALTER TABLE `ticket_no`
  ADD PRIMARY KEY (`tno_id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `total_amount`
--
ALTER TABLE `total_amount`
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
-- AUTO_INCREMENT for table `booking_details-1`
--
ALTER TABLE `booking_details-1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `booking_details-2`
--
ALTER TABLE `booking_details-2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `seat_map`
--
ALTER TABLE `seat_map`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ticket_no`
--
ALTER TABLE `ticket_no`
  MODIFY `tno_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `total_amount`
--
ALTER TABLE `total_amount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
