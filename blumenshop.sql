-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 16. Feb 2024 um 12:07
-- Server-Version: 10.4.32-MariaDB
-- PHP-Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `blumenshop`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzeraccount`
--
CREATE DATABASE `blumenshop`;

USE `blumenshop`; 

CREATE TABLE `benutzeraccount` (
  `BenutzerID` int(11) NOT NULL,
  `Benutzername` varchar(50) NOT NULL,
  `Mailadresse` varchar(50) NOT NULL,
  `Passwort` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `benutzeraccount`
--

INSERT INTO `benutzeraccount` (`BenutzerID`, `Benutzername`, `Mailadresse`, `Passwort`) VALUES
(1, '1', '1', '1'),
(2, 'q', 'q@q', '1111'),
(3, 'g', 'g', 'g'),
(4, 'e', 'e', 'e');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `blumenbestellung`
--

CREATE TABLE `blumenbestellung` (
  `BlumenID` int(11) NOT NULL,
  `rose` int(11) NOT NULL,
  `tulpe` int(11) NOT NULL,
  `orchidee` int(11) NOT NULL,
  `usercurrent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Daten für Tabelle `blumenbestellung`
--

INSERT INTO `blumenbestellung` (`BlumenID`, `rose`, `tulpe`, `orchidee`, `usercurrent`) VALUES
(1, 1, 0, 0, ''),
(2, 2, 2, 2, ''),
(3, 3, 3, 3, ''),
(4, 1, 1, 1, ''),
(5, 1, 1, 1, ''),
(6, 3, 3, 3, ''),
(7, 20, 20, 20, ''),
(8, 20, 20, 20, 'e');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `benutzeraccount`
--
ALTER TABLE `benutzeraccount`
  ADD PRIMARY KEY (`BenutzerID`),
  ADD UNIQUE KEY `Mailadresse` (`Mailadresse`);

--
-- Indizes für die Tabelle `blumenbestellung`
--
ALTER TABLE `blumenbestellung`
  ADD PRIMARY KEY (`BlumenID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `benutzeraccount`
--
ALTER TABLE `benutzeraccount`
  MODIFY `BenutzerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `blumenbestellung`
--
ALTER TABLE `blumenbestellung`
  MODIFY `BlumenID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
