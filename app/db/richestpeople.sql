-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 17 okt 2022 om 07:06
-- Serverversie: 8.0.27
-- PHP-versie: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc-oop-toets`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `richestpeople`
--

DROP TABLE IF EXISTS `richestpeople`;
CREATE TABLE IF NOT EXISTS `richestpeople` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `MyName` varchar(200) NOT NULL,
  `Networth` varchar(200) NOT NULL,
  `Age` tinyint NOT NULL,
  `Company` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `richestpeople`
--

INSERT INTO `richestpeople` (`Id`, `MyName`, `Networth`, `Age`, `Company`) VALUES
(1, 'Elon Musk', '261000000000', 50, 'Tesla'),
(2, 'Jeff Bezos', '183000000000', 58, 'Amazon'),
(3, 'Bernard Arnault', '142000000000', 73, 'Louis Vuitton Moet Hennessy'),
(4, 'Bill Gates', '130000000000', 66, 'Microsoft'),
(6, 'Warren Buffett', '126000000000', 91, 'Berkshire Hathaway');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
