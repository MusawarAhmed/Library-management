-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 08:47 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_book`
--

CREATE TABLE `add_book` (
  `id` int(11) NOT NULL,
  `book_ISBN` char(13) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `book_generation` varchar(50) NOT NULL,
  `book_price` int(10) NOT NULL,
  `book_author` varchar(200) NOT NULL,
  `book_copyright` varchar(200) NOT NULL,
  `book_publisher` varchar(200) NOT NULL,
  `book_edition_pages` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_book`
--

INSERT INTO `add_book` (`id`, `book_ISBN`, `book_name`, `book_generation`, `book_price`, `book_author`, `book_copyright`, `book_publisher`, `book_edition_pages`) VALUES
(5, '0012312322322', 'Fast and Furius', 'fist', 200, 'mkstar', 'qwerty', 'saimpair', 30),
(8, '0012312322343', 'Fast and Furius', 'third', 123, 'mkamboh', 'qwerty', '123333', 11),
(9, '0000001121342', 'Bale jabreel 2', 'first', 215, 'Allama Iqbal', 'Allama Iqbal', 'Musawar', 450),
(10, '1232131230011', 'eqwal e zarin 1', 'third', 450, 'mkstar', 'Allama Iqbal', 'mk', 65),
(17, '8172364871692', 'Fast and Furius', 'fist', 123, 'mkstar', 'qwerty', '123333', 0),
(18, '0000021343444', 'Bale jabreel 2', 'first', 1050, 'Allama Iqbal', 'Allama Iqbal', 'Musawar', 450),
(19, '1232131236560', 'eqwal e zarin 1', 'third', 450, 'mkstar', 'Allama Iqbal', 'mk', 65);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_email`, `admin_password`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `issue_books`
--

CREATE TABLE `issue_books` (
  `id` int(11) NOT NULL,
  `book_ISBN` varchar(13) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `book_price` int(4) NOT NULL,
  `Issue_date` date NOT NULL,
  `issue_time` time NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue_books`
--

INSERT INTO `issue_books` (`id`, `book_ISBN`, `user_name`, `book_name`, `book_price`, `Issue_date`, `issue_time`, `due_date`) VALUES
(2, '1234567890123', 'mk', 'A Game of Thrones', 500, '2021-10-24', '02:16:38', '2021-11-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_book`
--
ALTER TABLE `add_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_books`
--
ALTER TABLE `issue_books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_book`
--
ALTER TABLE `add_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `issue_books`
--
ALTER TABLE `issue_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
