-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 05:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `email`, `date`) VALUES
(1, 'admin', '$2y$10$mI/hpZ59vGgjs/lPTQWLJu.I82O93AEJ3gwFycAjuibOjAGi9dcTm', 'admin123@gmail.com', '2021-02-26 16:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `cafes`
--

CREATE TABLE `cafes` (
  `cafe_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `o_hr` varchar(255) NOT NULL,
  `c_hr` varchar(255) NOT NULL,
  `o_days` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cafes`
--

INSERT INTO `cafes` (`cafe_id`, `c_id`, `name`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `img`) VALUES
(3, 3, 'Townsend Cafe', 'townsend@gmail.com', '1-333-222-7474', 'townsend.com', '8am', '8pm', 'mon-sat', '528  Veltri Drive', 'TOWNSEND.jpg'),
(4, 6, 'Artisan Bar & Grill', 'grilltisan@gmail.com', '1-222-333-7878', 'artisanbargr.com', '11am', '8pm', '24hr-x7', '1659  Ritter Avenue', 'artisan-cafe-berea-ky.jpg'),
(5, 3, 'Highland Cafe', 'contact@hlrt.com', '11555578522', 'highlandrestro.com', '9am', '8pm', '24hr-x7', '1547  Birch  Street', 'hlmg.jpg'),
(6, 3, 'Alchemist', 'alchems@gmail.com', '12454850000', 'alchemist.food', '10am', '8pm', 'mon-sat', '60  Trehafod Road', 'icnr.jpg'),
(7, 7, 'Treehouse Cafe', 'treehsr@gmail.com', '12457854101', 'treehouserestr.com', '8am', '6pm', 'mon-sat', '2902 Benson Park Drive', 'treehouserestr.jpg'),
(19, 4, 'Rost cafe', 'rost@email.com', '5555555555', 'http://coffee-shop.com', '9am', '7pm', 'mon-sat', 'gp-rajkot near ajidam bhavnagar highway', 'coffee-shop.jpg'),
(20, 10, 'sweet cafe', 'sweet@gmail.com', '989898989', 'http://coffee-shop.com', '6am', '8pm', '24hr-x7', 'near virani chalk vidhyanagar main road', 'my_shop.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `i_id` int(11) NOT NULL,
  `cafe_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`i_id`, `cafe_id`, `name`, `about`, `price`, `img`) VALUES
(3, 3, 'GreenTea Icecream', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi veniam ut dolor quidem quam. Quo eum veniam natus, doloribus minima aliquam architecto laborum nobis facere odit quis! Laboriosam, magnam cumque.', 45, 'p-3.jpg'),
(4, 4, 'Strauss Creamery', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi veniam ut dolor quidem quam. Quo eum veniam natus, doloribus minima aliquam architecto laborum nobis facere odit quis! Laboriosam, magnam cumque.', 60, 'p-4.jpg'),
(5, 5, 'Choco Donuts', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi veniam ut dolor quidem quam. Quo eum veniam natus, doloribus minima aliquam architecto laborum nobis facere odit quis! Laboriosam, magnam cumque.', 80, 'p-5.jpg'),
(6, 7, 'Spacial Tea', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi veniam ut dolor quidem quam. Quo eum veniam natus, doloribus minima aliquam architecto laborum nobis facere odit quis! Laboriosam, magnam cumque.', 80, 'p-6.jpg'),
(8, 19, 'lemon tea', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi veniam ut dolor quidem quam. Quo eum veniam natus, doloribus minima aliquam architecto laborum nobis facere odit quis! Laboriosam, magnam cumque.', 35, 'g-2.jpg'),
(33, 20, 'chocolate mango ice cream', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi veniam ut dolor quidem quam. Quo eum veniam natus, doloribus minima aliquam architecto laborum nobis facere odit quis! Laboriosam, magnam cumque.', 130, 'g-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review-details`
--

CREATE TABLE `review-details` (
  `u_id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `review-status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shop_category`
--

CREATE TABLE `shop_category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_category`
--

INSERT INTO `shop_category` (`c_id`, `c_name`) VALUES
(2, 'Cappuccino'),
(3, 'Lemon Tea'),
(4, 'Cold Coffee'),
(5, 'Desserts'),
(6, 'Cookies'),
(7, 'Cup Cake'),
(9, 'Icecream'),
(10, 'Spacial Tea'),
(15, 'Chocolate');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`) VALUES
(42, 'gprajkot', 'gp', 'gprajkot', 'gprajkot@email.com', '9898989898', '$2y$10$.WpkmYqXYVKEIr5Rl0ZSTOCe7yr.EVRKzA2PcALYxQ3.sSDxy3ez6', 'near ajidem ,bhavnagar highway rajkot');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `o_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `i_id` int(11) NOT NULL,
  `i_name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` float NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `success-date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cafe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`o_id`, `u_id`, `i_id`, `i_name`, `quantity`, `price`, `status`, `date`, `success-date`, `cafe_id`) VALUES
(102, 42, 6, 'Spacial Tea', 4, 320, 'closed', '2022-04-03 16:09:52', '2022-04-03 14:10:09', 7),
(104, 42, 33, 'chocolate mango ice cream', 4, 520, 'closed', '2022-04-03 16:16:43', '2022-04-03 14:17:00', 20),
(105, 42, 33, 'chocolate mango ice cream', 1, 130, 'closed', '2022-04-03 16:31:17', '2022-04-03 14:31:28', 20),
(106, 42, 4, 'Strauss Creamery', 2, 120, 'closed', '2022-04-03 16:33:58', '2022-04-03 14:34:58', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cafes`
--
ALTER TABLE `cafes`
  ADD PRIMARY KEY (`cafe_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `shop_category`
--
ALTER TABLE `shop_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cafes`
--
ALTER TABLE `cafes`
  MODIFY `cafe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `shop_category`
--
ALTER TABLE `shop_category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
