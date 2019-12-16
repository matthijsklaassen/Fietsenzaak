-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 dec 2019 om 14:31
-- Serverversie: 10.2.27-MariaDB
-- PHP-versie: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u392629804_groep1`
--
CREATE DATABASE IF NOT EXISTS `u392629804_groep1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `u392629804_groep1`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Fiets`
--

CREATE TABLE `Fiets` (
  `Framenummer` int(30) NOT NULL,
  `Tl_nummer` int(11) NOT NULL,
  `Merk` tinytext COLLATE ascii_bin NOT NULL,
  `Type_fiets` tinytext COLLATE ascii_bin NOT NULL,
  `Bouwjaar` year(4) NOT NULL,
  `Framemaat` tinyint(2) NOT NULL,
  `Omschrijving` tinytext COLLATE ascii_bin NOT NULL,
  `Staat` tinytext COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Gegevens worden geëxporteerd voor tabel `Fiets`
--

INSERT INTO `Fiets` (`Framenummer`, `Tl_nummer`, `Merk`, `Type_fiets`, `Bouwjaar`, `Framemaat`, `Omschrijving`, `Staat`) VALUES
(1, 1, 'Batavus', 'Stadsfiets', 2015, 57, 'Prachtige fiets om je door de stinkende stad op voort te bewegen. ', 'Nieuw'),
(2, 2, 'Gazelle', 'Elektrische fiets', 2017, 53, 'Een prachtige, razendsnelle elektrische fiets met een accu met een enorm bereik.', 'Gebruikerssporen'),
(3, 3, 'Sparta', 'Sportfiets', 2008, 59, 'Een stoere en ultralichte sportfiets', 'Intensief gebruikt'),
(4, 14, 'Giant', 'Toerfiets', 2019, 61, 'Een fiets voor uw lange fietstochten door de Nederlandse landschappen.', 'Gebruik'),
(5, 15, 'Shimano', 'Mountainbike', 2018, 57, 'Een ijzersterke mountainbike', 'Nieuw'),
(6, 1, 'Giant', 'wielrenfiets', 2014, 55, 'De allersnelste fiets', 'nieuw');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Klant`
--

CREATE TABLE `Klant` (
  `Klantnummer` int(11) NOT NULL,
  `Kl_naam` tinytext COLLATE ascii_bin NOT NULL,
  `Kl_achternaam` tinytext COLLATE ascii_bin NOT NULL,
  `Kl_adres` tinytext COLLATE ascii_bin NOT NULL,
  `Kl_postcode` char(6) COLLATE ascii_bin NOT NULL,
  `Kl_telefoonnummer` text COLLATE ascii_bin NOT NULL,
  `Kl_datum_aanmelding` date NOT NULL DEFAULT current_timestamp(),
  `Kl_emailadres` tinytext COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Gegevens worden geëxporteerd voor tabel `Klant`
--

INSERT INTO `Klant` (`Klantnummer`, `Kl_naam`, `Kl_achternaam`, `Kl_adres`, `Kl_postcode`, `Kl_telefoonnummer`, `Kl_datum_aanmelding`, `Kl_emailadres`) VALUES
(10, 'Piet', 'Hoogland', 'Breeweg 19', '4401BN', '0612345678', '2019-11-08', 'iemand@iets.com'),
(11, 'Donald', 'Trump', 'Klein-frankrijk 19', '4461ZN', '0612345678', '2019-11-08', 'president@usa.nu'),
(12, 'Chris', 'Froome', 'Klein-frankrijk 14', '4461ZN', '0687654321', '2019-11-08', 'sneller@fietsen.fr'),
(13, 'Bouke', 'Mollema', 'Klein-frankrijk 21', '4461ZN', '0681726354', '2019-11-08', 'fietsen@sneller.nl'),
(14, 'Magnus ', 'Carlsen', 'Wereldkampioenstraat 1', '1234AB', '0116382749', '0000-00-00', 'magnus@fide.org'),
(15, 'Barak', 'Obama', 'Klein-frankrijk 19', '4461ZN', '0612365478', '2019-11-08', 'iwaspresident@usa.gov');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Toeleverancier`
--

CREATE TABLE `Toeleverancier` (
  `Tl_nummer` int(11) NOT NULL,
  `Tl_naam` tinytext CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `Tl_adres` tinytext CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `Tl_email` tinytext CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `Tl_bankrekeningnummer` tinytext CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Gegevens worden geëxporteerd voor tabel `Toeleverancier`
--

INSERT INTO `Toeleverancier` (`Tl_nummer`, `Tl_naam`, `Tl_adres`, `Tl_email`, `Tl_bankrekeningnummer`) VALUES
(1, 'Batavus', 'Niemandsland 2', 'info@batavus.com', 'NL07 ABNA 1234 5678 90'),
(2, 'Gazelle', 'Safaristraat 67', 'info@gazelle.nl', 'NL08 RABO 1234 5678 90'),
(3, 'Sparta', 'Griekenlandstraat 84', 'strijder@stadstaat.com', 'NL74 INGB 0341 5839 29'),
(14, 'Giant', 'fietsstraat 20', 'grotefietsen@reus.nl', 'NL74 INGB 0341 5839 56'),
(15, 'Shimano', 'langestraat 33f', 'shimaho@fietsen.com', 'NL74 INGB 0367 5839 29');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Verkoop`
--

CREATE TABLE `Verkoop` (
  `Verkoopnummer` int(11) NOT NULL,
  `Klantnummer` int(11) NOT NULL,
  `Framenummer` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Gegevens worden geëxporteerd voor tabel `Verkoop`
--

INSERT INTO `Verkoop` (`Verkoopnummer`, `Klantnummer`, `Framenummer`) VALUES
(2, 10, 2),
(3, 11, 1),
(4, 12, 3),
(5, 13, 4),
(6, 14, 5);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Fiets`
--
ALTER TABLE `Fiets`
  ADD PRIMARY KEY (`Framenummer`),
  ADD KEY `Tl_nummer` (`Tl_nummer`);

--
-- Indexen voor tabel `Klant`
--
ALTER TABLE `Klant`
  ADD PRIMARY KEY (`Klantnummer`);

--
-- Indexen voor tabel `Toeleverancier`
--
ALTER TABLE `Toeleverancier`
  ADD PRIMARY KEY (`Tl_nummer`);

--
-- Indexen voor tabel `Verkoop`
--
ALTER TABLE `Verkoop`
  ADD PRIMARY KEY (`Verkoopnummer`),
  ADD KEY `Klantnummer` (`Klantnummer`),
  ADD KEY `Framenummer` (`Framenummer`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Klant`
--
ALTER TABLE `Klant`
  MODIFY `Klantnummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT voor een tabel `Toeleverancier`
--
ALTER TABLE `Toeleverancier`
  MODIFY `Tl_nummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT voor een tabel `Verkoop`
--
ALTER TABLE `Verkoop`
  MODIFY `Verkoopnummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `Fiets`
--
ALTER TABLE `Fiets`
  ADD CONSTRAINT `Tl_nummer` FOREIGN KEY (`Tl_nummer`) REFERENCES `Toeleverancier` (`Tl_nummer`);

--
-- Beperkingen voor tabel `Verkoop`
--
ALTER TABLE `Verkoop`
  ADD CONSTRAINT `Framenummer` FOREIGN KEY (`Framenummer`) REFERENCES `Fiets` (`Framenummer`),
  ADD CONSTRAINT `Klantnummer` FOREIGN KEY (`Klantnummer`) REFERENCES `Klant` (`Klantnummer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
