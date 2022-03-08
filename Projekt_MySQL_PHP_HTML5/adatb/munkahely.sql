-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 09:46 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `munkahely`
--

-- --------------------------------------------------------

--
-- Table structure for table `dolgozó`
--

CREATE TABLE `dolgozó` (
  `DolgozóiID` varchar(11) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `Név` text COLLATE utf8mb4_hungarian_ci NOT NULL,
  `Születési Dátum` varchar(8) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `Lakcim` varchar(20) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `dolgozó`
--

INSERT INTO `dolgozó` (`DolgozóiID`, `Név`, `Születési Dátum`, `Lakcim`) VALUES
('0', 'Roland', '1982', 'Hódmezővásárhely'),
('1', 'Gabor', '1969', 'Miskolc'),
('10', 'Amanda', '1977', 'Szeged'),
('11', 'Abel', '1965', 'Szeged'),
('12', 'Csaba', '1955', 'Kecskemét'),
('2', 'Szabolcs', '1962', 'Budapest'),
('3', 'Gergely', '1981', 'Győr'),
('4', 'Marton', '1983', 'Pécs'),
('5', 'Tamas', '1952', 'Kecskemét'),
('6', 'Gabor', '1991', 'Nagykőrös'),
('7', 'Lajos', '1965', 'Cegléd'),
('8', 'Nora', '1953', 'Szeged'),
('9', 'Aron', '1965', 'Kecskemét');

-- --------------------------------------------------------

--
-- Table structure for table `használ`
--

CREATE TABLE `használ` (
  `DolgozóiID` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `SzobaID` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `Mikor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `helyiség`
--

CREATE TABLE `helyiség` (
  `SzobaID` varchar(11) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `helyiség`
--

INSERT INTO `helyiség` (`SzobaID`) VALUES
('0'),
('1'),
('2'),
('3'),
('4'),
('5');

-- --------------------------------------------------------

--
-- Table structure for table `iroda`
--

CREATE TABLE `iroda` (
  `SzobaID` varchar(11) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `Iroaszal` int(11) NOT NULL,
  `Szék` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `iroda`
--

INSERT INTO `iroda` (`SzobaID`, `Iroaszal`, `Szék`) VALUES
('0', 2, 4),
('1', 1, 2),
('2', 3, 6),
('3', 2, 2),
('4', 1, 2),
('5', 5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `pihenő`
--

CREATE TABLE `pihenő` (
  `SzobaID` varchar(11) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `Fotel` int(10) NOT NULL,
  `Kanapé` int(10) NOT NULL,
  `Kávéfőző` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `pihenő`
--

INSERT INTO `pihenő` (`SzobaID`, `Fotel`, `Kanapé`, `Kávéfőző`) VALUES
('0', 2, 1, 1),
('1', 3, 2, 2),
('2', 4, 1, 1),
('3', 2, 2, 1),
('4', 2, 1, 2),
('5', 3, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `számítógép`
--

CREATE TABLE `számítógép` (
  `Rendszer` text COLLATE utf8mb4_hungarian_ci NOT NULL,
  `SzámítógépID` int(11) NOT NULL,
  `Processzor` text COLLATE utf8mb4_hungarian_ci NOT NULL,
  `GPU` text COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `számítógép`
--

INSERT INTO `számítógép` (`Rendszer`, `SzámítógépID`, `Processzor`, `GPU`) VALUES
('Windows', 1, 'Ryzen3', '1060'),
('Windows', 2, 'I7', '1050ti'),
('Windows', 3, 'Ryzen5', '1050ti'),
('Windows', 4, 'Ryzen3', '2060'),
('Windows', 5, 'Ryzen3', '1050ti'),
('Windows', 6, 'Ryzen3', '1050ti'),
('Windows', 7, 'Ryzen5', '1050ti'),
('Windows', 8, 'Ryzen3', '1050'),
('Windows', 9, 'Ryzen7', '2060'),
('Windows', 10, 'I7', '1060'),
('Linux', 11, 'I5', '950ti'),
('Linux', 12, 'I5', '1050ti'),
('Linux', 13, 'I3', '750ti'),
('Linux', 14, 'I9', '2080'),
('Linux', 15, 'Ryzen5', '1060'),
('Linux', 16, 'Ryzen7', '1080');

-- --------------------------------------------------------

--
-- Table structure for table `telefon`
--

CREATE TABLE `telefon` (
  `DolgozóiID` varchar(11) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `Telefonszám` varchar(20) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `Tipus` text COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `telefon`
--

INSERT INTO `telefon` (`DolgozóiID`, `Telefonszám`, `Tipus`) VALUES
('0', '36700101011', 'Huawei'),
('1', '36700101012', 'Huawei'),
('10', '36700101021', 'Nokia'),
('11', '36700101022', 'Samsung'),
('12', '36700101023', 'Blackberry'),
('2', '36700101013', 'Samsung'),
('3', '36700101014', 'Nokia'),
('4', '36700101015', 'Xiaomi'),
('5', '36700101016', 'Nokia'),
('6', '36700101017', 'Huawei'),
('7', '36700101018', 'Huawei'),
('8', '36700101019', 'Huawei'),
('9', '36700101020', 'Nokia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dolgozó`
--
ALTER TABLE `dolgozó`
  ADD PRIMARY KEY (`DolgozóiID`);

--
-- Indexes for table `használ`
--
ALTER TABLE `használ`
  ADD PRIMARY KEY (`DolgozóiID`,`SzobaID`);

--
-- Indexes for table `helyiség`
--
ALTER TABLE `helyiség`
  ADD PRIMARY KEY (`SzobaID`);

--
-- Indexes for table `iroda`
--
ALTER TABLE `iroda`
  ADD PRIMARY KEY (`SzobaID`);

--
-- Indexes for table `pihenő`
--
ALTER TABLE `pihenő`
  ADD PRIMARY KEY (`SzobaID`);

--
-- Indexes for table `számítógép`
--
ALTER TABLE `számítógép`
  ADD PRIMARY KEY (`SzámítógépID`);

--
-- Indexes for table `telefon`
--
ALTER TABLE `telefon`
  ADD PRIMARY KEY (`DolgozóiID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `számítógép`
--
ALTER TABLE `számítógép`
  MODIFY `SzámítógépID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `iroda`
--
ALTER TABLE `iroda`
  ADD CONSTRAINT `h1` FOREIGN KEY (`SzobaID`) REFERENCES `helyiség` (`SzobaID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pihenő`
--
ALTER TABLE `pihenő`
  ADD CONSTRAINT `h2` FOREIGN KEY (`SzobaID`) REFERENCES `helyiség` (`SzobaID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `telefon`
--
ALTER TABLE `telefon`
  ADD CONSTRAINT `d1` FOREIGN KEY (`DolgozóiID`) REFERENCES `dolgozó` (`DolgozóiID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
