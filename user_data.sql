-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 11:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `msg_inquiry`
--

CREATE TABLE `msg_inquiry` (
  `id` int(11) NOT NULL,
  `fldName` varchar(100) NOT NULL,
  `fldEmail` varchar(50) NOT NULL,
  `fldPhone` varchar(11) NOT NULL,
  `fldMessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `subtotal` decimal(50,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Orchestra 500D', 'A guitar with a premium build quality and feel at an affordable price', '3600.00', '4500.00', 20, 'G1F.jpg', '2022-07-14 19:36:40'),
(2, 'Orchestra 500F', 'Do you want the performance of the Orchestra 500D but you want it in natural wood style? Say no more. Introducing the Orchestra 500F. Its performance is identical to the 500D but with a stylish natural wood color.', '3600.00', '4500.00', 20, 'G2F.jpg', '2022-07-14 19:52:35'),
(3, 'Orchestra 300A', 'With its beautiful dreadnought shape, you will get a fuller, richer sound that will be sure to soothe the soul of anyone listening', '4400.00', '5500.00', 15, 'G3F.jpg', '2022-07-14 19:58:54'),
(4, 'Classical A3', 'Our recommended guitar for aspiring guitarists out there. A premium feeling classical guitar at a super affordable price! The Classical A3 is the best guitar if you are just starting out on your musical journey.', '2800.00', '3500.00', 30, 'G4FB.jpg', '2022-07-14 20:00:40'),
(5, 'Mendini E300', 'Great for beginners and expert alike. This ebony violin has a solid wood hand-carved spruce top; maple back, neck and sides with a beautiful finish; and an alloy tailpiece with 4 built-in fine tuners.', '4000.00', '5000.00', 20, 'V1F.jpg', '2022-07-15 10:39:02'),
(6, 'Cecilio EV-50', 'A performance-grade violin with a smooth fingerboard that allows for quick and easy shifts. This violin is sure to make your performances sound and feel better.', '4800.00', '6000.00', 30, 'V2F.jpg', '2022-07-15 10:48:30'),
(7, 'Global 5V', 'A great amplifier for beginners. Offering a plethora of controls for achieving that tone that you desire.', '2000.00', '2500.00', 40, 'amp2f.png', '2022-07-15 11:02:13'),
(8, 'Marshall MA-05', 'Perfect for late night jamming sessions in your bedroom. This small and portable amp allows you to practice without disturbing your neighbors.', '2400.00', '3000.00', 40, 'amp1f.png', '2022-07-15 11:05:46'),
(9, 'SPL Guitar Pick [4 pcs/set]', 'Solid hard plastic was used to create the exquisitely constructed SPL Guitar Pick. Play your favorite guitar with these vibrant picks that are competitively priced, comfortable to the touch, and of great quality.', '128.00', '160.00', 120, 'pick1.jpg', '2022-07-16 14:34:19'),
(10, 'Plectrum Wooden Guitar Pick [ 4pcs/set ]', 'Even when playing the guitar, stay natural. This Plectrum Brand guitar pick is crafted from Narra and Mahogany wood and polished to produce a high-quality, smooth, and clean texture.', '360.00', '450.00', 120, 'pick2.jpg', '2022-07-16 14:34:19'),
(11, 'Blakewood Bow O7', 'This fine piece of violin equipment is perfect for both beginners and professional violinists. It is made out of Pernambuco wood, which is known to be the best quality wood for bows.', '1200.00', '1500.00', 100, 'vbow.jpg', '2022-07-17 00:53:41'),
(12, 'Sharktooth Zinc Alloy Capo', 'Without using a capo to tune the guitar, playing is incomplete. This guitar capo is silver in color and is composed of zinc alloy, which is significantly more rust-resistant and durable. Additionally, it is highly hip and enticing to guitarists.', '200.00', '250.00', 100, 'scapo.jpg', '2022-07-17 00:53:41'),
(13, 'Browning Faith I3 Guitar Bag', 'The instrument is protected and the user is comfortable thanks to the great quality of this guitar bag, which does its job well. The Browning Faith also features a cushioned strap and pockets for additional small items.', '2000.00', '2500.00', 50, 'case2.jpg', '2022-07-17 01:18:23'),
(14, 'Midnight A3', 'The Midnight A3 guitar case is well-padded and ideal for storing players\' guitars. Its exterior is composed of acrylic, and both the interior and exterior are blue in hue.', '2960.00', '3700.00', 50, 'case3.png', '2022-07-17 01:18:23'),
(15, 'Classic B4 Case', 'Are you aiming for a traditional, nearly vintage-style guitar case? This case gives consumers a sense of quality and age.', '1280.00', '1600.00', 50, 'case1.png', '2022-07-17 10:05:56'),
(16, 'Sunset A1 Case', 'This guitar case, which is made of fiberglass, protects your guitars while still appearing stylish and excellent. It is vivid and the colors will undoubtedly help you remember it.', '2560.00', '3200.00', 50, 'case4.png', '2022-07-17 10:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `registration_user`
--

CREATE TABLE `registration_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msg_inquiry`
--
ALTER TABLE `msg_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_user`
--
ALTER TABLE `registration_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msg_inquiry`
--
ALTER TABLE `msg_inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registration_user`
--
ALTER TABLE `registration_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
