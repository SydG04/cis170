-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 12:37 PM
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
-- Database: `cis170`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `first_name`, `last_name`) VALUES
(1, 'George', 'Orwell'),
(2, 'Ester', 'Yi'),
(3, 'Ray', 'Bradbury'),
(4, 'R.F.', 'Kuang'),
(5, 'Ali', 'Hazelwood'),
(6, 'Karen M.', 'McManus'),
(7, 'Jerry', 'Craft'),
(8, 'Jarrett J.', 'Krosoczka'),
(9, 'Tiffany D.', 'Jackson');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `cover_url` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` int(11) NOT NULL,
  `ISBN` varchar(13) NOT NULL,
  `genre1` varchar(3) NOT NULL,
  `genre2` varchar(3) DEFAULT NULL,
  `genre3` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `cover_url`, `title`, `author`, `ISBN`, `genre1`, `genre2`, `genre3`) VALUES
(1, 'https://m.media-amazon.com/images/I/71rpa1-kyvL._AC_UF1000,1000_QL80_.jpg', '1984', 1, '9780451524935', 'CLA', 'DYS', 'SFI'),
(2, 'https://m.media-amazon.com/images/I/A16aTsAXcYL._AC_UF1000,1000_QL80_.jpg', 'Y/N', 2, '9781662602740', 'HUM', 'THR', NULL),
(3, 'https://m.media-amazon.com/images/I/61z7RDG3OIL._AC_UF1000,1000_QL80_.jpg', 'Fahrenheit 451', 3, '9781451673265', 'DYS', 'SFI', NULL),
(4, 'https://m.media-amazon.com/images/I/61pZ0M900BL._AC_UF1000,1000_QL80_.jpg', 'Yellowface', 4, '9780063250833', 'SAT', 'MYS', 'THR'),
(5, 'https://m.media-amazon.com/images/I/71QDhHvv7wL._AC_UF1000,1000_QL80_.jpg', 'The Love Hypothesis', 5, '9780593336823', 'ROM', NULL, NULL),
(6, 'https://m.media-amazon.com/images/I/914W0VECGCL._AC_UF1000,1000_QL80_.jpg', 'One Of Us is Lying', 6, '9781524714680', 'MYS', 'YA', 'THR'),
(7, 'https://m.media-amazon.com/images/I/8189nCNa3oL._AC_UF1000,1000_QL80_.jpg', 'New Kid', 7, '9780062691194', 'GRA', 'HUM', 'YA'),
(8, 'https://m.media-amazon.com/images/I/81rq+xTCSsL._AC_UF1000,1000_QL80_.jpg', 'Key, Kiddo', 8, '9780545902489', 'GRA', 'MEM', 'YA'),
(9, 'https://m.media-amazon.com/images/I/71B2Gzl6r2L._AC_UF1000,1000_QL80_.jpg', 'Monday\'s Not Coming', 9, '9780062422682', 'MYS', 'THR', 'YA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Jane', 'Doe', 'jane.doe123@gmail.com', '$2y$10$RRQOF0hTv6.HOt7PU/NFGO9IIFXGJJP4ACPlxAFFv6ZCi1ItfIfy.'),
(2, 'Matilda', 'Wormwood', 'mwormwood867@hotmail.com', '$2y$10$rilfp.fFIQK/e6VwWdAnhugD4bCvHmeCjE/RNPItOrNWn3tSb0AP2'),
(9, 'dwdwdw', 'wdwdsa', 'wed@gmail.com', '$2y$10$7go91.4Jf9anpHO1WM/At.2I6psdBsYGD5.HAjc.4eoLcEhvJmTj2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD UNIQUE KEY `cover_url` (`cover_url`),
  ADD UNIQUE KEY `ISBN` (`ISBN`),
  ADD KEY `author_id` (`author`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`author`) REFERENCES `authors` (`author_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
