-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 10, 2018 at 08:35 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `clientId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(8) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`clientId`, `name`, `surname`, `email`, `password`, `address`, `phone`, `city`, `country`) VALUES
(1, 'Owen', 'Magri', 'testemail@gmail.com', 'pass1234', '40, Random Address', 12345678, 'Mosta', 'Malta'),
(2, 'Jake', 'Salerno', 'salerno@gmail.com', '1234password', '40, address', 21345678, 'Pieta', 'Malta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `orderId` int(11) NOT NULL,
  `date` date NOT NULL,
  `priceTotal` float(10,2) NOT NULL,
  `clientId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`orderId`, `date`, `priceTotal`, `clientId`) VALUES
(2, '2018-05-10', 5.30, 1),
(3, '2018-05-10', 7.30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_list`
--

CREATE TABLE `tbl_order_list` (
  `orderId` int(11) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_list`
--

INSERT INTO `tbl_order_list` (`orderId`, `productId`) VALUES
(5, 2),
(6, 2),
(7, 5),
(7, 2),
(9, 2),
(9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float(10,2) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `price`, `img`) VALUES
(1, 'Margherita', 5.30, 'margherita.jpg'),
(2, 'Pepperoni', 7.50, 'pepperoni.jpg'),
(3, 'Funghi', 6.30, 'funghi.jpg'),
(4, 'Rucola', 7.50, 'rucola.jpg'),
(5, 'Chicken Wrap', 4.00, 'chickenwrap.jpg'),
(6, 'Bacon Wrap', 4.00, 'baconwrap.jpg'),
(7, 'Veggie Wrap', 4.00, 'veggiewrap.jpg'),
(8, 'Meat Wrap', 4.00, 'meatwrap.jpeg'),
(9, 'Carbonara', 5.50, 'carbonara.jpg'),
(10, 'Bolognese', 5.00, 'bolognese.jpg'),
(11, 'Tortellini', 5.50, 'tortellini.jpeg'),
(12, 'Lasagne', 5.50, 'lasagne.jpg'),
(13, 'Coca-Cola', 1.50, 'coca.jpg'),
(14, 'Fanta', 1.50, 'fanta.jpg'),
(15, 'Sprite', 1.50, 'sprite.jpg'),
(16, 'Cisk', 2.00, 'cisk.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`clientId`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `clientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
