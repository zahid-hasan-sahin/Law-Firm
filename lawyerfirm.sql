-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 10:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyerfirm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `profilepic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `name`, `profilepic`) VALUES
('admin@gmail.com', 'admin', 'zahid2', 'home2.png');

-- --------------------------------------------------------

--
-- Table structure for table `appoinments`
--

CREATE TABLE `appoinments` (
  `id` int(11) NOT NULL,
  `client` text NOT NULL,
  `lawyer` text NOT NULL,
  `fromdate` text NOT NULL,
  `details` text NOT NULL,
  `transaction` text NOT NULL,
  `approve` int(11) NOT NULL,
  `status` text NOT NULL DEFAULT 'unseen'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinments`
--

INSERT INTO `appoinments` (`id`, `client`, `lawyer`, `fromdate`, `details`, `transaction`, `approve`, `status`) VALUES
(5, 'c@gmail.com', 'zahidhasan6115342@gmail.com', '2022-09-08', 'fdsa', 'fdsa', 1, 'seen'),
(6, 'c@gmail.com', 'zahidhasan6115342@gmail.com', '2022-09-08', 'fdsa', 'fdsa', 1, 'seen'),
(7, 'c@gmail.com', 'zahidhasan6112@gmail.com', '2022-09-03', 'fdsa', 'fdsa', -1, 'seen'),
(8, 'c@gmail.com', 'zahidhasan6112@gmail.com', '2022-09-16', 'fdsa', 'fa', 1, 'seen'),
(9, 'c@gmail.com', 'zahidhasan8261@gmail.com', '2022-09-09', 'des', 'tra', -1, 'seen'),
(10, 'zahidhasan80611@gmail.com', 'zahidhasan6115342@gmail.com', '2022-09-13', 'dfas', 'fdsa', 0, 'unseen'),
(11, 'c@gmail.com', 'zahidhasan8061@gmail.com', '2022-09-28', 'testin', 'fdsa', -1, 'seen'),
(12, 'c@gmail.com', 'zahidhasan8061@gmail.com', '2022-09-16', 'fdsaf', '564534', 1, 'seen');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `email` varchar(700) NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `phonenumber` text NOT NULL,
  `picture` text NOT NULL,
  `joindate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`email`, `password`, `name`, `phonenumber`, `picture`, `joindate`) VALUES
('c@gmail.com', 'c', 'client1', '543', 'home3.png', '2022-09-05 07:53:51'),
('fdas@gmail.com', '532', 'a', 'f', 'logo3.jpg', '2022-09-04 12:03:33'),
('zahidhasan80611@gmail.com', 'fd', '32', 'fda', 'home2.png', '2022-09-04 12:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `lawyercategories`
--

CREATE TABLE `lawyercategories` (
  `id` int(11) NOT NULL,
  `category` varchar(700) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyercategories`
--

INSERT INTO `lawyercategories` (`id`, `category`, `description`, `image`) VALUES
(15, 'Fire Accident', 'sum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore .', 'services6.jpg'),
(16, 'Accident Injuries ', 'sum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore .', 'services2.jpg'),
(17, 'Family Law', 'sum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore .', 'services3.jpg'),
(18, 'Financial Law', 'sum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore ', 'services5.jpg'),
(19, 'Drug Offences', 'sum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore .', 'services1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `email` varchar(700) NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `categoryid` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `phonenumber` text NOT NULL,
  `location` text NOT NULL,
  `picture` text NOT NULL,
  `joindate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`email`, `password`, `name`, `categoryid`, `rate`, `description`, `phonenumber`, `location`, `picture`, `joindate`) VALUES
('admi1n@gmail.com', '32', '54', 16, 543, 'fads', '543', '43', 'icon2.png', '2022-09-04 09:41:23'),
('zahidhasan6112@gmail.com', '124', 'zahid', 16, 32, 'wring wring description is important for better understanding.wring description is important for better understanding.wring description is important for better understanding.wring description is important for better understanding.wring description is important for better understanding.wring description is important for better understanding.wring description is important for better understanding.wring description is important for better understanding.wring description is important for better understanding.wring description is important for better understanding.wring description is important for better understanding.wring description is important for better understanding.wring description is important for better understanding.wring description is important for better understanding.wring description is important for better understanding.wring description is important for better understanding.is important for better understanding.', '543', 'feafd', 'team4.jpg', '2022-09-03 21:55:33'),
('zahidhasan611435342@gmail.com', 'sfdsa', 'fahim', 19, 63543, 'write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write write ', '86575675675', 'fdsafasfas', 'gallery2.jpg', '2022-09-03 21:55:33'),
('zahidhasan6115342@gmail.com', '54', 'shamim', 16, 63, 'fdasfsag agfafgdsa ffdsafasdfdasfsag agfafgdsa ffdsafasdfdasfsag agfafgdsa ffdsafasdfdasfsag agfafgdsa ffdsafasdfdasfsag agfafgdsa ffdsafasdfdasfsag agfafgdsa ffdsafasdfdasfsag agfafgdsa ffdsafasd', '76576', 'gsdfgds', 'team3.jpg', '2022-09-03 21:55:33'),
('zahidhasan611@gmail.com', 'a', 'b', 17, 4, 'c', '32', 'd', 'logo6.jpg', '2022-09-04 09:42:27'),
('zahidhasan8061@gmail.com', '432', 'zahid', 17, 54, 'wring descrwring description is important for better understanding.\nso please write a descriptionwring description is important for better understanding.\nso please write a descriptionwring description is important for better understanding.\nso please write a descriptionwring description is important for better understanding.\nso please write a descriptionwring description is important for better understanding.\nso please write a descriptionwring description is important for better understanding.\nso please write a descriptionwring description is important for better understanding.\nso please write a descriptionwring description is important for better understanding.\nso please write a descriptionwring description is important for better understanding.\nso please write a descriptionwring description is important for better understanding.\nso please write a descriptionwring description is important for better understanding.\nso please write a descriptioniption is important for better understanding.\nso please write a description', '656456', 'hdsf', 'team4.jpg', '2022-09-03 21:55:33'),
('zahidhasan8261@gmail.com', '45w', 'hasan', 18, 5435, 'pleasplease write a description.please write a description.please write a description.please write a description.please write a description.please write a description.please write a description.please write a description.please write a description.please write a description.please write a description.e write a description.', '765765', 'dfgaftwe4', 'team2.jpg', '2022-09-03 21:55:33'),
('zahidhasan8264@gmail.com', '543', 'sahin', 19, 543, 'description description description description description ', '6776', 'hfdsg', 'team4.jpg', '2022-09-03 21:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `quote` varchar(750) NOT NULL,
  `writer` text NOT NULL,
  `identity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`quote`, `writer`, `identity`) VALUES
('If you don`t have time to read, you don`t have the time (or the tools) to write. Simple as that.', 'Stephen King', 'CEO of Facebook'),
('We write to taste life twice, in the moment and in retrospect', 'Anaïs Nin', 'CEO of uber');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `appoinments`
--
ALTER TABLE `appoinments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `lawyercategories`
--
ALTER TABLE `lawyercategories`
  ADD PRIMARY KEY (`id`,`category`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`quote`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinments`
--
ALTER TABLE `appoinments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lawyercategories`
--
ALTER TABLE `lawyercategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
