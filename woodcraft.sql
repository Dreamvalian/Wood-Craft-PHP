-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1

-- Generation Time: Jun 10, 2023 at 09:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `woodcraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(15) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `password`, `email`, `role`) VALUES
('AD-11', 'UUS Firdaus', '222222', 'uus@gmail.com', 'Admin'),
('AD-12', 'Hadiansyah', '333333', 'hadiansyah@gmail.com', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `item_pesanan`
--

CREATE TABLE `item_pesanan` (
  `item_id` varchar(100) NOT NULL,
  `order_id` varchar(100) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `product_price` double DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_pesanan`
--

INSERT INTO `item_pesanan` (`item_id`, `order_id`, `user_id`, `product_id`, `product_name`, `product_image`, `product_model`, `product_price`, `quantity`, `order_date`) VALUES
('IT1', 'OD1', 'U2', 'P02', 'Kayu Jati', 'product-2.jpg', 'Meja Makan', 67000, 2, '2023-06-08'),
('IT2', 'OD1', 'U2', 'P02', 'Kayu Jati', 'product-2.jpg', 'Meja Makan', 67000, 2, '2023-06-08'),
('IT3', 'OD2', 'U2', 'P01', 'Joseph', 'product-1.jpg', '1 pcs Lemari 2 pintu ', 30000000, 2, '2023-06-10'),
('IT4', 'OD3', 'U2', 'P02', 'Kayu Jati', 'product-2.jpg', '1 pcs Lemari 2 pintu ', 67000, 3, '2023-06-10'),
('IT5', 'OD3', 'U2', 'P03', 'Kayu Jepara', 'product-3.jpg', '1 pcs Lemari 2 pintu ', 3400000, 1, '2023-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `kayu`
--

CREATE TABLE `kayu` (
  `product_id` varchar(10) NOT NULL,
  `jenis_kayu` varchar(50) NOT NULL,
  `product_price` double NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kayu`
--

INSERT INTO `kayu` (`product_id`, `jenis_kayu`, `product_price`, `product_description`, `stok`, `product_image`) VALUES
('P01', 'Joseph', 30000000, 'BURUUUU', 23, 'product-1.jpg'),
('P02', 'Kayu Jati', 67000, 'naonweh', 30, 'product-2.jpg'),
('P03', 'Kayu Jepara', 3400000, 'Kayu pilihan asal jepara', 34, 'product-3.jpg'),
('P05', 'Kayu Malang', 55000, 'PPPPPPP', 45, 'product-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `order_id` varchar(100) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `grandtotal` double DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `payment_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`order_id`, `user_id`, `user_name`, `user_address`, `user_phone`, `grandtotal`, `order_date`, `payment_status`) VALUES
('OD1', 'U2', '', '', '', 134000, '2023-06-16', 'Unpaid'),
('OD2', 'U2', 'Hadiansyah Rabbani', 'Cigondewah Kidul', '0876123144', 60000000, '2023-06-10', 'Unpaid'),
('OD3', 'U2', 'Micel lele', 'Dago pakar', '098124145', 3601000, '2023-06-10', 'Unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` varchar(100) NOT NULL,
  `order_id` varchar(100) DEFAULT NULL,
  `payment_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `order_id`, `payment_date`) VALUES
('TRANS-1', 'OD1', '2023-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `member` date NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `alamat`, `member`, `role`) VALUES
('1', 'aliudin', 'aliudin@gmail.com', 'aliudin', 'Arcamanik', '2023-06-09', 'customer'),
('U2', 'Hadiansyah', 'h@gmail.com', '96e79218965eb72c92a549dd5a330112', 'Meikarta', '0000-00-00', 'customer'),
('U3', 'gg', 'fg@gmail.com', '96e79218965eb72c92a549dd5a330112', 'Meikartaaaa', '2023-06-08', 'customer'),
('U4', 'Mawang', 'mw@gmail.com', '96e79218965eb72c92a549dd5a330112', 'bdg bgt', '2023-06-08', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `item_pesanan`
--
ALTER TABLE `item_pesanan`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `kayu`
--
ALTER TABLE `kayu`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item_pesanan`
--
ALTER TABLE `item_pesanan`
  ADD CONSTRAINT `item_pesanan_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `pemesanan` (`order_id`),
  ADD CONSTRAINT `item_pesanan_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `item_pesanan_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `kayu` (`product_id`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `pemesanan` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
