-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 20 Ara 2018, 06:41:23
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `denemeproje1`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dogu`
--

CREATE TABLE `dogu` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `adress` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `cardname` varchar(20) NOT NULL,
  `cardnumber` varchar(20) NOT NULL,
  `expiration` varchar(20) NOT NULL,
  `cvv` varchar(20) NOT NULL,
  `productname` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `tarih` date NOT NULL,
  `saat` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `dogu`
--

INSERT INTO `dogu` (`firstname`, `lastname`, `email`, `adress`, `country`, `state`, `cname`, `cardname`, `cardnumber`, `expiration`, `cvv`, `productname`, `price`, `tarih`, `saat`) VALUES
('', '', '', '', '', '', '', '', '', '', '', 'MACBOOK AIR', 699, '2020-12-20', '02:38:02'),
('', '', '', '', '', '', '', '', '', '', '', 'AIRPODS 2', 399, '2020-12-20', '02:38:06'),
('', '', '', '', '', '', '', '', '', '', '', 'BEATS SOLO 3', 220, '2020-12-20', '02:38:10'),
('DOĞUKAN', 'KARASU', 'dogu@dogu.com', 'KEŞAN', 'TURKEY', 'EDIRNE', 'CREDIT', 'DOĞUKAN KARASU', '147852369874', '2020', '123', '', 0, '2020-12-20', '02:38:51'),
('', '', '', '', '', '', '', '', '', '', '', 'IPHONE XS', 1100, '2020-12-20', '09:05:41'),
('', '', '', '', '', '', '', '', '', '', '', 'IMAC PRO', 899, '2020-12-20', '09:05:43'),
('sajad', 'eıny', 'sajad@hotmail.com', 'besyol', 'turkey', 'ıatanbul', 'credıt', 'sajad eıny', '147852369874', '2020', '123', '', 0, '2020-12-20', '09:11:26'),
('', '', '', '', '', '', '', '', '', '', '', 'MACBOOK AIR', 699, '2020-12-20', '09:16:05'),
('', '', '', '', '', '', '', '', '', '', '', 'IPAD PRO', 1000, '2020-12-20', '09:16:08');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('dogukan', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `productname1` varchar(20) NOT NULL,
  `price1` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
