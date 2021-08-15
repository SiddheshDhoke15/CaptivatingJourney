-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 03:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(16, 'seedhita', 'seedhita94@gmail.com', '5f3343f3b397d4c9be7b4dad05e3051d'),
(17, 'seedhita', 'seedhita94@gmail.com', '5f3343f3b397d4c9be7b4dad05e3051d'),
(18, 'seedhita', 'seedhita94@gmail.com', '5f3343f3b397d4c9be7b4dad05e3051d'),
(19, 'seedhita', 'seedhita94@gmail.com', '5f3343f3b397d4c9be7b4dad05e3051d'),
(20, 'leafia', 'leafia@gmail.com', '5d41402abc4b2a76b9719d911017c592'),
(21, 'sayli', 'sayli@gmail.com', '429b03f7df5dd71abcbfe5eda9bcf28c'),
(22, 'swati', 'swati@gmail.com', 'f823937995b27ffcbf668da4a22d5bd3'),
(23, 'shruti', 'shruti@gmail.com', 'eab6930b3c87b22874b40a0e52fe1ca3'),
(24, 'seedhita chavan', 'seedhita94@gmail.com', '5f3343f3b397d4c9be7b4dad05e3051d'),
(25, 'sandhya chavan', 'hello@gmail.com', '78fd1f605b150bb65d514edfe1225c65'),
(26, 'swati', 'seedhita94@gmail.com', 'f823937995b27ffcbf668da4a22d5bd3'),
(27, 'sandhya chavan', 'hello@gmail.com', '78fd1f605b150bb65d514edfe1225c65'),
(28, 'swati', 'soham@gmail.com', 'f823937995b27ffcbf668da4a22d5bd3'),
(29, 'swati', 'hello@gmail.com', 'f823937995b27ffcbf668da4a22d5bd3'),
(30, 'teju', 'teju@gmail.com', 'cf2a5424877cea5696db372e3c67c925'),
(31, 'tej', 'seedhita94@gmail.com', 'fce63142cacdb8b04ce6685c5e5538c0'),
(32, 'swati', 'soham@gmail.com', 'f823937995b27ffcbf668da4a22d5bd3'),
(33, 'swati', 'seedhita94@gmail.com', 'f823937995b27ffcbf668da4a22d5bd3'),
(34, 'swati', 'seedhita94@gmail.com', 'f823937995b27ffcbf668da4a22d5bd3'),
(35, 'sailee', 'seedhita94@gmail.com', 'a8f4a8f71e320afefe9c91686d5b3581'),
(36, 'amit', 'seedhita94@gmail.com', '0cb1eb413b8f7cee17701a37a1d74dc3'),
(37, 'hiiiiiiiiiiiiiiiiiii', 'seedhita94@gmail.com', '49f68a5c8493ec2c0bf489821c21fc3b'),
(38, 'swati', 'seedhita94@gmail.com', '5f3343f3b397d4c9be7b4dad05e3051d'),
(39, 'swati', 'hello@gmail.com', 'f823937995b27ffcbf668da4a22d5bd3'),
(40, 'ayushi', 'seedhita94@gmail.com', 'e3f72e3ebbbbf715879e9da619cfb5ef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
