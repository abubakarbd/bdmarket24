-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2020 at 04:46 PM
-- Server version: 10.2.27-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abubakar_bdmarket24`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_mobile` varchar(20) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_status` tinyint(1) NOT NULL DEFAULT 1,
  `admin_role` tinyint(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_mobile`, `admin_password`, `admin_status`, `admin_role`) VALUES
(1, 'Md Abubakar', '01726122917', '$2y$10$G0xFyyg.3RwDhlNlm9Dd0O6GnguaPQK/0G23uUyXtNVbrlhZ6MNUy', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `brand_image` varchar(255) NOT NULL,
  `brand_description` text CHARACTER SET utf8 NOT NULL,
  `brand_status` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_image`, `brand_description`, `brand_status`) VALUES
(13, 'এসিআই', 'uploads/Ramadan_2020_copy2.jpg', '<p>test 1</p>\r\n', 1),
(26, 'প্রাণ', '<p>You did not select a file to upload.</p><p>You did not select a file to upload.</p>', '<p>test</p>\r\n', 2),
(20, 'বসুন্ধরা', '<p>You did not select a file to upload.</p><p>You did not select a file to upload.</p>', '<p>test</p>\r\n', 1),
(18, 'তীর', '', '<p>test</p>\r\n', 1),
(21, 'রুপচাদা', '', '', 1),
(29, 'রাধুনি', 'uploads/1.jpg', '<p>রাধুনি</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `category_parent` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `category_description` text CHARACTER SET utf8 NOT NULL,
  `category_status` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_parent`, `category_image`, `category_description`, `category_status`) VALUES
(3, 'MENS 1', 'kigh', 'uploads/Ramadan_2020_copy9.jpg', '<p>test 2</p>\r\n', 1),
(2, 'kigh', 'kigh', 'uploads/Ramadan_2020_copy8.jpg', '<p>test</p>\r\n', 1),
(4, 'WOMENS', 'WOMENS', 'uploads/Ramadan_2020_copy10.jpg', '<p>t23</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_short_desc` text CHARACTER SET utf8 NOT NULL,
  `product_long_desc` text CHARACTER SET utf8 NOT NULL,
  `product_brand` tinyint(4) NOT NULL,
  `product_category` tinyint(4) NOT NULL,
  `product_qit` tinyint(4) NOT NULL,
  `product_rprice` varchar(10) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `product_type` tinyint(3) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_status` tinyint(2) NOT NULL DEFAULT 1,
  `product_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_short_desc`, `product_long_desc`, `product_brand`, `product_category`, `product_qit`, `product_rprice`, `product_price`, `product_type`, `product_image`, `product_status`, `product_date`) VALUES
(1, 'Easy Polo Black Edition', 'fgjmnhmng', '<p>fxgb fgn g</p>\r\n', 0, 0, 10, '100', '80', 0, 'uploads/Ramadan_2020_copy11.jpg', 1, '2020-05-04 10:13:24'),
(2, 'Easy Polo Black Edition new 1', '                      hvhvvv                  ', '<p>test</p>\r\n', 13, 3, 10, '100', '12', 0, 'uploads/Ramadan_2020_copy12.jpg', 1, '2020-05-04 09:51:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
