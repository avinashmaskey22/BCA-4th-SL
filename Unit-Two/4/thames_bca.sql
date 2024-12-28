-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 28, 2024 at 07:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thames_bca`
--

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `full_name`, `email`, `address`, `contact_number`) VALUES
(12, 'Zeph Fitzgerald', 'zybi@mailinator.com', 'Voluptas a quisquam ', 36),
(13, 'Sulav Bhai', 'gumihic@mailinator.com', 'Deserunt cum rerum s', 10),
(14, 'Merrill French', 'sequkyvi@mailinator.com', 'Accusantium sed cons', 793433434),
(15, 'Hilary Riley', 'cocur@mailinator.com', 'Facere ad dolor est', 55);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
