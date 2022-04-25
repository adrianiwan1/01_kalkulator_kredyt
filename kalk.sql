-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Kwi 2022, 01:43
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kalk`
--
CREATE DATABASE IF NOT EXISTS `kalk` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci;
USE `kalk`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wynik`
--

CREATE TABLE IF NOT EXISTS `wynik` (
  `idwynik` int(11) NOT NULL AUTO_INCREMENT,
  `kwota` double NOT NULL,
  `lat` int(11) NOT NULL,
  `procent` double NOT NULL,
  `rata` double NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`idwynik`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `wynik`
--

INSERT INTO `wynik` (`idwynik`, `kwota`, `lat`, `procent`, `rata`, `data`) VALUES
(1, 23, 2, 34, 33.541666666667, '2022-04-25'),
(2, 23, 2, 1, 1.9166666666667, '2022-04-26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
