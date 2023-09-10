-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 10:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ypp`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `F_Name` varchar(255) NOT NULL,
  `L_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Msg` varchar(1000) NOT NULL,
  `Num` varchar(255) NOT NULL,
  `Time_Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `F_Name`, `L_Name`, `Email`, `Gender`, `Msg`, `Num`, `Time_Date`) VALUES
(7, 'aisha', 'afzal', 'ayeshaafzal1573@gmail.com', 'Female', 'Merhaba', '0347218291', '2023-08-02 11:35:44pm'),
(8, 'AISHA', 'afzal', 'ayeshaafzal1573@gmail.com', 'Female', 'hey', '+02 111-7777777', '2023-09-07 12:35:51am'),
(9, 'AISHA', 'afzal', 'ayeshaafzal1573@gmail.com', 'Female', 'hey', '+02 111-7777777', '2023-09-07 12:37:47am'),
(10, 'AISHA', 'afzal', 'ayeshaafzal1573@gmail.com', 'Female', 'hey', '+02 111-7777777', '2023-09-07 12:37:53am');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `logo` varchar(1000) NOT NULL,
  `title` varchar(500) NOT NULL,
  `subtitle` varchar(1000) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `number` varchar(500) NOT NULL,
  `timings` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`logo`, `title`, `subtitle`, `email`, `address`, `number`, `timings`) VALUES
('logo.png', 'Yummy Pet Palate', 'A PET LOVER PARADISE', 'yummypetpalate@gmail.com', 'Karachi, Pakistan', '92-312918743', '12:00am to 12:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `filter` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `filter`, `image`) VALUES
(1, 'Whiskas', '7500', 'cat', 'food', 'catfood1.png'),
(2, 'Meow-Mix', '500', 'cat', 'food', 'catfood8.png'),
(3, 'Josera', '5000', 'cat', 'food', 'catfood3.png'),
(4, 'Meoon', '4000', 'cat', 'food', 'catfood4.png'),
(5, 'Reflex', '4500', 'cat', 'food', 'catfood5.png'),
(6, 'Kitty Kat', '3700', 'cat', 'food', 'catfood6.png'),
(7, 'Whiskas Jelly', '950', 'cat', 'food', 'jelly1.png'),
(8, 'Felix', '800', 'cat', 'food', 'jelly2.png'),
(9, 'Brit', '700', 'cat', 'food', 'jelly3.png'),
(10, 'Josera Jelly', '550', 'cat', 'food', 'jelly6.png'),
(11, 'Royal Canin', '860', 'cat', 'food', 'jelly4.png'),
(12, 'Applaws', '450', 'cat', 'food', 'jelly5.png'),
(13, 'Bag', '2000', 'cat', 'accessory', 'bag.png'),
(14, 'Bowl', '2400', 'cat', 'accessory', 'bowl.png'),
(15, 'Collar', '500', 'cat', 'accessory', 'collar.png'),
(16, 'House', '5400', 'cat', 'accessory', 'house2.png'),
(17, 'Shoulder Bag', '2600', 'cat', 'accessory', 'shoulderbag.png'),
(18, 'Leash', '980', 'cat', 'accessory', 'leash.png'),
(19, 'Kitty Toy', '750', 'cat', 'accessory', 'taadaa.png'),
(20, 'Cage', '3400', 'cat', 'accessory', 'cage.png'),
(21, 'Carrier', '4500', 'cat', 'accessory', 'carrier.png'),
(23, 'Grim Cat', '500', 'cat', 'medicine', 'med1.png'),
(24, 'Quantum', '750', 'cat', 'medicine', 'med2.png'),
(25, 'Feline', '650', 'cat', 'medicine', 'med3.png'),
(26, 'Shampoo', '860', 'cat', 'medicine', 'med4.png'),
(27, 'Drontal', '970', 'cat', 'medicine', 'med5.png'),
(28, 'Cat Star', '550', 'cat', 'medicine', 'med6.png'),
(29, 'Ultra', '5500', 'dog', 'food', 'food01.png'),
(30, 'Pedigree', '4500', 'dog', 'food', 'food2.png'),
(31, 'Hypo', '5000', 'dog', 'food', 'food3.png'),
(32, 'Woof', '4700', 'dog', 'food', 'food4.png'),
(33, 'Puppy Paw', '4000', 'dog', 'food', 'food5.png'),
(34, 'Pedigree-Jelly', '1000', 'dog', 'food', 'dogjelly1.png'),
(35, 'Jelly', '900', 'dog', 'food', 'food6.png'),
(36, 'Husky', '1200', 'dog', 'food', 'dogjelly02.png'),
(37, 'Jelly', '960', 'dog', 'food', 'dogjelly3.png'),
(38, 'Winalot', '800', 'dog', 'food', 'dogjelly4.png'),
(39, 'Whiskas Jelly', '760', 'dog', 'food', 'dogjelly5.png'),
(40, 'Cesar', '700', 'dog', 'food', 'dogjelly6.png'),
(41, 'Bag', '1500', 'dog', 'accessory', 'acc1.png'),
(42, 'Cage', '2200', 'dog', 'accessory', 'acc2.png'),
(43, 'Leash', '2000', 'dog', 'accessory', 'acc3.png'),
(44, 'Shoulder Bag', '2000', 'dog', 'accessory', 'acc4.png'),
(45, 'Hand Bag', '2400', 'dog', 'accessory', 'acc5.png'),
(46, 'House', '3500', 'dog', 'accessory', 'acc6.png'),
(47, 'Belt', '900', 'dog', 'accessory', 'acc7.png'),
(48, 'Bowl', '750', 'dog', 'accessory', 'acc8.png'),
(49, 'Cage', '3000', 'dog', 'accessory', 'acc9.png'),
(50, 'Bravecto', '1000', 'dog', 'medicine', 'dmed1.png'),
(51, 'Vomitol', '1200', 'dog', 'medicine', 'dmed02.png'),
(52, 'Digyton', '900', 'dog', 'medicine', 'dmed3.png'),
(53, 'Defender Plus', '850', 'dog', 'medicine', 'dmed4.png'),
(54, 'Simparico', '650', 'dog', 'medicine', 'dmed5.png'),
(55, 'Allergy', '500', 'dog', 'medicine', 'dmed6.png');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fullname`, `phone`, `email`, `password`, `status`) VALUES
(2, 'aisha', 0, 'ayeshaafzal1573@gmail.com', '', 0),
(3, 'aisha', 0, 'ayeshaafzal1573@gmail.com', '', 0),
(4, 'AYESHA', 347228435, 'ayeshaafzal1573@gmail.com', 'aisha123', 1),
(5, 'sunaina', 2147483647, 'sunaina@gmail.com', 'awake123', 1),
(6, 'sunaina', 2147483647, 'sunaina@gmail.com', 'awake123', 0),
(7, 'nimra', 2147483647, 'nimrachurail@gmail.com', 'nimra123', 0),
(8, 'aisha', 2147483647, 'ayeshaafzal1573@gmail.com', 'ayesha', 0);

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `insta` varchar(500) DEFAULT NULL,
  `twitter` varchar(500) DEFAULT NULL,
  `linkedin` varchar(500) DEFAULT NULL,
  `google` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`insta`, `twitter`, `linkedin`, `google`) VALUES
('www.instagram.com', 'www.twitter.com', 'www.linkedin.com', 'www.google.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
