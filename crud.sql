-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 08:04 AM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`, `c_desc`) VALUES
(753, 'Fashion', ' FASHION This Instagram Account Spotlights Handmade Works by Indigenous Elders'),
(755, 'Science', 'kksit amet consectetur adipisicing elit. Voluptatum ex molestiae quidem eum voluptate dicta tempora repellat, quae et ratione tempore, voluptates laborum veniam quasi quibusdam nulla nesciunt doloremque unde nostrum perferendis excepturi, '),
(756, 'Business', 'njknn;This Instagram Account Spotlights Handmade Works by Indigenous Elders'),
(757, 'Tcehnology', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ex molestiae quidem eum voluptate dicta tempora repellat, quae et ratione tempore, voluptates laborum veniam quasi quibusdam nulla nesciunt doloremque unde nostrum perferendis excepturi, '),
(759, 'Entertainment', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ex molestiae quidem eum voluptate dicta tempora repellat, quae et ratione tempore, voluptates laborum veniam quasi quibusdam nulla nesciunt doloremque unde nostrum perferendis excepturi, '),
(760, 'Politics', 'ppppppdipisicing elit. Voluptatum ex molestiae quidem eum voluptate dicta tempora repellat, quae et ratione tempore, voluptates laborum veniam quasi quibusdam nulla nesciunt doloremque unde nostrum perferendis excepturi, '),
(763, 'INTERNATIONAL', 'otlights Handmade Works by Indigenous Elders'),
(764, 'Education', 'kkmet consectetur adipisicing elit. Voluptatum ex molestiae quidem eum voluptate dicta tempora repellat, quae et ratione tempore, voluptates laborum veniam quasi quibusdam nulla nesciunt doloremque unde nostrum perferendis excepturi, ');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `p_id` int(11) NOT NULL,
  `p_title` varchar(255) NOT NULL,
  `p_desc` text NOT NULL,
  `p_date` date NOT NULL,
  `p_cat` int(11) NOT NULL,
  `p_author` varchar(255) NOT NULL,
  `p_thumbnail` varchar(255) NOT NULL,
  `p_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_mail` varchar(255) NOT NULL,
  `u_phone` int(11) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `u_photo` varchar(255) NOT NULL,
  `u_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=765;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
