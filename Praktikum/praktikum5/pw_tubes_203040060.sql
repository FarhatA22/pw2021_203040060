-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 04:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040060`
--

-- --------------------------------------------------------

--
-- Table structure for table `garasi dut`
--

CREATE TABLE `garasi dut` (
  `Id` int(11) NOT NULL,
  `Merk` varchar(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Warna` varchar(50) NOT NULL,
  `Harga` varchar(50) NOT NULL,
  `Jenis` varchar(50) NOT NULL,
  `Kondisi` varchar(50) NOT NULL,
  `Tahun Pembuatan` varchar(50) NOT NULL,
  `Gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `garasi dut`
--

INSERT INTO `garasi dut` (`Id`, `Merk`, `Nama`, `Warna`, `Harga`, `Jenis`, `Kondisi`, `Tahun Pembuatan`, `Gambar`) VALUES
(1, 'Toyota', 'GR Supra', 'Matte Grey', 'Rp. 2.100.000.000', 'Coupe Sportscar', 'Baru', '2021', 'supra.jpg'),
(2, 'Nissan', 'GTR R35 Nismo', 'Putih', 'Rp. 2.600.000.000', 'Supercar', 'Bekas', '2017', 'gtr.jpg'),
(3, 'Ferrari', '458 Speciale', 'Orange', 'Rp. 3.650.000.000', 'Supercar', 'Bekas', '2015', '458.jpg'),
(4, 'Toyota', 'Land Cruiser VX80', 'Silver', 'Rp.400.000.000', 'SUV Offroad', 'Bekas', '1995', 'lc.jpg'),
(5, 'Lamborghini', 'Huracan', 'Kuning', 'Rp.3.200.000.000', 'Supercar', 'Bekas', '2015', 'huracan.jpg'),
(6, 'Tesla', 'Model 3', 'Grey', 'Rp.1.560.000.000', 'Electric Car', 'Baru', '2021', 'tesla3.jpg'),
(7, 'BMW', 'M4', 'Grey', 'Rp.2.300.000.000', 'Coupe Sportscar', 'Baru', '2021', 'm4.jpg'),
(8, 'Honda', 'Civic Type R', 'Putih', 'Rp.800.000.000', 'Sportscar', 'Bekas', '2018', 'civic.jpg'),
(9, 'Ford', 'Mustang', 'Merah', 'Rp.1.400.000.000', 'Coupe Sportscar', 'Bekas', '2016', 'mustang.jpg'),
(10, 'Audi', 'Q3', 'Putih', 'Rp.750.000.000', 'SUV', 'Bekas', '2020', 'q3.jpg'),
(11, 'Posche', '911 Carerra S', 'Putih', 'Rp.2.850.000.000', 'Coupe Sportscar', 'Bekas', '2014', '911.jpg'),
(12, 'Tesla', 'Model S P100D', 'Hitam', 'Rp.2.400.000.000', 'Electric Sportscar', 'Bekas', '2018', 'teslas.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `garasi dut`
--
ALTER TABLE `garasi dut`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `garasi dut`
--
ALTER TABLE `garasi dut`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
