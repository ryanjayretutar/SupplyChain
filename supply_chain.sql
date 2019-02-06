-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2019 at 01:26 AM
-- Server version: 10.1.34-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supply_chain`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_category`
--

CREATE TABLE `address_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address_category`
--

INSERT INTO `address_category` (`id`, `category`) VALUES
(1, 'Billing'),
(2, 'Shipping');

-- --------------------------------------------------------

--
-- Table structure for table `address_tbl`
--

CREATE TABLE `address_tbl` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `housenumber` varchar(30) NOT NULL,
  `streetname` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postalcode` varchar(6) NOT NULL,
  `caddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address_tbl`
--

INSERT INTO `address_tbl` (`id`, `user_id`, `housenumber`, `streetname`, `barangay`, `city`, `postalcode`, `caddress`) VALUES
(1, 1, 'BLk 5 Lot 7 ', 'Pavahai Road 3', 'Comembo', 'Makati City', '1630', 'Billing'),
(2, 1, '187-M ', '27th Avenue', 'East Rembo', 'Makati City', '1630', 'Shipping'),
(3, 2, 'University of Makati', 'J.P. Rizal Ext.', 'West Rembo', 'Makati City', '1630', 'Shipping'),
(4, 2, '187-M ', '27th Avenue', 'East Rembo', 'Makati City', '1630', 'Shipping'),
(5, 2, '123', '123', '123', '123', '123', 'Billing'),
(6, 2, 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'Billing');

-- --------------------------------------------------------

--
-- Table structure for table `credit_terms`
--

CREATE TABLE `credit_terms` (
  `id` int(11) NOT NULL,
  `terms` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credit_terms`
--

INSERT INTO `credit_terms` (`id`, `terms`) VALUES
(1, 'Cash On Delivery'),
(2, 'Cost to Company'),
(3, 'Net 7'),
(4, 'Net 14'),
(5, 'Net 30');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sku` int(11) NOT NULL,
  `description` mediumtext NOT NULL,
  `p_category` varchar(255) NOT NULL,
  `p_brand` varchar(255) NOT NULL,
  `purchase_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `reorder_quantity` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `sku`, `description`, `p_category`, `p_brand`, `purchase_price`, `selling_price`, `reorder_quantity`, `quantity`, `updated_at`) VALUES
(4, 'IPhone IX', 2147483647, 'The iPhone X was completely redesigned from top to bottom for the iPhone’s 10th anniversary. Featuring a glass over aluminum body, the iPhone X does away with home button altogether and introduces all new gestures, as well as Face ID for authentication. The display is a first for the iPhone as well: The iPhone X features a bezel-less 5.8-inch OLED display with a top notch for the camera.', 'Electrical', 'Apple/ IOs', 60000, 80000, 20, 150, '2019-02-04 07:01:23'),
(5, 'Samsung s', 2147483647, 'Introducing the new super powerful Note: Galaxy Note9. With the all day battery, immense storage capacity, and intelligent S Pen.', 'Electrical', 'Toshiba', 50000, 55000, 25, 120, '2019-02-01 06:32:57'),
(6, 'Nintendo Switch', 2147483647, 'how off your personality when playing favorite Switch video games with this neon Nintendo Joy-Con controller. The small size lets you cradle it in your hand for maximum control, and the ergonomically designed buttons and analog stick reduce fatigue. This Nintendo Joy-Con controller contains a 525 mAh rechargeable battery for hours of play.', 'Electrical', 'Toshiba', 15000, 23000, 45, 1000, '2019-02-04 07:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `product_brand`
--

CREATE TABLE `product_brand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_brand`
--

INSERT INTO `product_brand` (`id`, `name`, `description`) VALUES
(1, 'Adidas', ''),
(2, 'Volvo', ''),
(3, 'Alex And Ani', ''),
(4, 'Urban Outfitters', ''),
(5, 'Cameo Creme', ''),
(6, 'Kit Kat', ''),
(7, 'Fox\'s Biscuits', ''),
(8, 'Aero Biscuits', ''),
(9, 'Shamrock Farms', ''),
(10, 'Nestle', ''),
(11, 'Borden Milk Products', ''),
(12, 'Gap', ''),
(13, 'Hollister', ''),
(14, 'Toshiba', ''),
(15, 'Apple/ IOs', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `description`) VALUES
(1, 'Bottles', ''),
(2, 'Caps', ''),
(3, 'Boxes', 'sadasdasdasdasd'),
(4, 'Electrical', ''),
(5, 'Jewelry', ''),
(6, 'Food', ''),
(7, 'Drinks', ''),
(8, 'Clothing', ''),
(9, 'Furniture', '');

-- --------------------------------------------------------

--
-- Table structure for table `quotations`
--

CREATE TABLE `quotations` (
  `id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `ship_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `credit_term` int(11) NOT NULL,
  `etd` date NOT NULL,
  `validity` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `quotation_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `id` int(11) NOT NULL,
  `so_number` varchar(100) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipment_status` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `etd` date NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `ucat_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `ucat_id`, `username`, `password`, `email`, `status`, `created_at`, `last_login`) VALUES
(1, 4, 'Rai', 'f6fdffe48c908deb0f4c3bd36c032e72', 'ryanjayretutar@gmail.com', 'Active', '2019-01-30 00:00:00', '2019-01-30 02:15:17'),
(2, 4, 'Raian', 'f5bb0c8de146c67b44babbf4e6584cc0', 'raintakeshix@gmail.com', 'active', '0000-00-00 00:00:00', '2019-01-30 03:46:36'),
(3, 4, 'zxc', '5fa72358f0b4fb4f2c5d7de8c9a41846', 'zxc@gmail.com', 'active', '0000-00-00 00:00:00', '2019-02-01 07:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `user_category`
--

CREATE TABLE `user_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_category`
--

INSERT INTO `user_category` (`id`, `category`) VALUES
(1, 'customer'),
(2, 'supplier'),
(4, 'admin\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_contact`
--

CREATE TABLE `user_contact` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_contact`
--

INSERT INTO `user_contact` (`id`, `user_id`, `firstname`, `lastname`, `designation`, `email`, `mobile`, `fax`, `office`) VALUES
(1, 1, 'ku', 'ku', 'Manager', 'raintakeshix@gmail.com', '245452452421', '54524212', 'HR Department'),
(2, 1, 'Ryan Jay', 'Retutar', 'IT Manager', 'ryanjayretutar@gmail.com', '09487924888', '45454542', 'IT Department'),
(3, 2, 'Ryan Jay', 'Retutar', 'Manager', 'ryanjayretutar@gmail.com', '090904455045', '42524212', 'Office of the registrar');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `customer_no` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `website` varchar(15) DEFAULT NULL,
  `tax_num` varchar(255) DEFAULT NULL,
  `credit_term` varchar(255) DEFAULT NULL,
  `credit_limit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `customer_no`, `company_name`, `website`, `tax_num`, `credit_term`, `credit_limit`) VALUES
(1, 'CU000001', 'Pahiram.PH', 'https://pahiram', '2454asd145454w', 'Cash On Delivery', '10000'),
(2, 'CU000004', 'University of Makati', 'umak.edu.ph', '54542120224', 'Cost to Company', '600000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_category`
--
ALTER TABLE `address_category`
  ADD PRIMARY KEY (`category`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `address_tbl`
--
ALTER TABLE `address_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `caddress` (`caddress`);

--
-- Indexes for table `credit_terms`
--
ALTER TABLE `credit_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotations`
--
ALTER TABLE `quotations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quotation_id` (`quotation_id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `so_number` (`so_number`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `ucat_id` (`ucat_id`);

--
-- Indexes for table `user_category`
--
ALTER TABLE `user_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_contact`
--
ALTER TABLE `user_contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_category`
--
ALTER TABLE `address_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `address_tbl`
--
ALTER TABLE `address_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `credit_terms`
--
ALTER TABLE `credit_terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `quotations`
--
ALTER TABLE `quotations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_category`
--
ALTER TABLE `user_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_contact`
--
ALTER TABLE `user_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address_tbl`
--
ALTER TABLE `address_tbl`
  ADD CONSTRAINT `address_tbl_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`),
  ADD CONSTRAINT `address_tbl_ibfk_3` FOREIGN KEY (`caddress`) REFERENCES `address_category` (`category`);

--
-- Constraints for table `quotations`
--
ALTER TABLE `quotations`
  ADD CONSTRAINT `quotations_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `user_account` (`id`),
  ADD CONSTRAINT `quotations_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`quotation_id`) REFERENCES `quotations` (`id`);

--
-- Constraints for table `user_account`
--
ALTER TABLE `user_account`
  ADD CONSTRAINT `user_account_ibfk_1` FOREIGN KEY (`ucat_id`) REFERENCES `user_category` (`id`);

--
-- Constraints for table `user_contact`
--
ALTER TABLE `user_contact`
  ADD CONSTRAINT `user_contact_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;