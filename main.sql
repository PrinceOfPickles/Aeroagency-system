-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2024 at 08:41 AM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `main`
--
CREATE DATABASE IF NOT EXISTS `main` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `main`;

-- --------------------------------------------------------

--
-- Table structure for table `aircraftinfo`
--

CREATE TABLE IF NOT EXISTS `aircraftinfo` (
  `AirplaneID` varchar(15) COLLATE utf8_bin NOT NULL,
  `AirplaneModel` varchar(40) COLLATE utf8_bin NOT NULL,
  `FirstClassSeatAmount` int(11) NOT NULL,
  `NormalSeatAmount` int(11) NOT NULL,
  `Range` varchar(10) COLLATE utf8_bin NOT NULL,
  `MaxCargoCapacity` int(11) NOT NULL,
  `IsInRepairs` tinyint(1) NOT NULL,
  PRIMARY KEY (`AirplaneID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `arrivalinfo`
--

CREATE TABLE IF NOT EXISTS `arrivalinfo` (
  `AirportID` varchar(3) COLLATE utf8_bin NOT NULL,
  `IsLate` tinyint(1) NOT NULL,
  `LateTime` varchar(10) COLLATE utf8_bin NOT NULL,
  `IsRescheduled` tinyint(1) NOT NULL,
  `RescheduleDate` date DEFAULT NULL,
  `RescheduleTime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `departureinfo`
--

CREATE TABLE IF NOT EXISTS `departureinfo` (
  `AirportID` varchar(3) COLLATE utf8_bin NOT NULL,
  `IsLate` tinyint(1) NOT NULL,
  `LateTime` varchar(10) COLLATE utf8_bin NOT NULL,
  `IsRescheduled` tinyint(1) NOT NULL,
  `RescheduleDate` date NOT NULL,
  `RescheduleTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `flightlist`
--

CREATE TABLE IF NOT EXISTS `flightlist` (
  `FlightNr` varchar(6) COLLATE utf8_bin NOT NULL,
  `StartPoint` varchar(20) COLLATE utf8_bin NOT NULL,
  `Destination` varchar(20) COLLATE utf8_bin NOT NULL,
  `DepartureDate` date NOT NULL,
  `DepartureTime` time NOT NULL,
  `ArrivalDate` date NOT NULL,
  `ArrivalTime` time NOT NULL,
  `AirplaneID` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `flightlist`
--

INSERT INTO `flightlist` (`FlightNr`, `StartPoint`, `Destination`, `DepartureDate`, `DepartureTime`, `ArrivalDate`, `ArrivalTime`, `AirplaneID`) VALUES
('MH370', 'Kualalumpur', 'Beijing', '2023-03-08', '04:30:00', '2023-03-09', '10:30:00', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `FlightNr` varchar(6) COLLATE utf8_bin NOT NULL,
  `RowNum` int(11) NOT NULL,
  `SeatInRow` varchar(1) COLLATE utf8_bin NOT NULL,
  `IsFirstClass` tinyint(1) NOT NULL,
  `IsExtraBags` tinyint(1) NOT NULL,
  `IsReserved` tinyint(1) NOT NULL,
  `ReservedUser` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Name` varchar(30) COLLATE utf8_bin NOT NULL,
  `Surname` varchar(30) COLLATE utf8_bin NOT NULL,
  `Password` varchar(50) COLLATE utf8_bin NOT NULL,
  `E-mail` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
