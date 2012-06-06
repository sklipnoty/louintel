-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Machine: loudragonage.lo.funpicsql.org
-- Genereertijd: 06 Jun 2012 om 18:01
-- Serverversie: 5.1.61
-- PHP-Versie: 5.3.3-7+squeeze8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mysql1063035`
--
CREATE DATABASE `mysql1063035` DEFAULT CHARACTER SET latin1 COLLATE latin1_german2_ci;
USE `mysql1063035`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coords` varchar(7) COLLATE latin1_german2_ci NOT NULL,
  `continent` int(11) NOT NULL,
  `playername` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `allianceName` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `guards` int(11) NOT NULL,
  `berserker` int(11) NOT NULL,
  `mage` int(11) NOT NULL,
  `ranger` int(11) NOT NULL,
  `guardian` int(11) NOT NULL,
  `templar` int(11) NOT NULL,
  `scout` int(11) NOT NULL,
  `knight` int(11) NOT NULL,
  `warlock` int(11) NOT NULL,
  `crossbowman` int(11) NOT NULL,
  `paladin` int(11) NOT NULL,
  `ram` int(11) NOT NULL,
  `catapult` int(11) NOT NULL,
  `ballista` int(11) NOT NULL,
  `frigate` int(11) NOT NULL,
  `wargalleon` int(11) NOT NULL,
  `sloop` int(11) NOT NULL,
  `baron` int(11) NOT NULL,
  `isWaterCastle` tinyint(1) NOT NULL,
  `extra` varchar(200) COLLATE latin1_german2_ci NOT NULL,
  `report` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `coords` (`coords`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci AUTO_INCREMENT=46 ;

--
-- Gegevens worden uitgevoerd voor tabel `city`
--

INSERT INTO `city` (`id`, `coords`, `continent`, `playername`, `allianceName`, `guards`, `berserker`, `mage`, `ranger`, `guardian`, `templar`, `scout`, `knight`, `warlock`, `crossbowman`, `paladin`, `ram`, `catapult`, `ballista`, `frigate`, `wargalleon`, `sloop`, `baron`, `isWaterCastle`, `extra`, `report`, `timestamp`) VALUES
(38, '215:462', 42, 'Strystre', 'Destined to Rule', 0, 500, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Zerk castle', 'NGJF-U6PW-8R2C-7VSQ', '2012-06-04 22:25:26'),
(39, '218:456', 42, 'Strystre', 'Destined to Rule', 0, 15000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Zerk castle', 'LCGR-8ZAH-M2F4-25DL', '2012-06-04 22:26:18'),
(40, '232:459', 42, 'Eminaria', 'Destined to Rule', 0, 0, 0, 0, 0, 0, 30000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Scout castle', '8MHE-EC77-MDMC-ULFH', '2012-06-04 22:27:15'),
(42, '231:458', 42, 'Eminaria', 'Destined to Rule', 0, 0, 0, 0, 0, 0, 8000, 0, 0, 500, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Xbow and Scouts', 'MCRS-9DBH-VEG3-HEPQ', '2012-06-04 22:28:27'),
(43, '216:457', 42, 'Strystre', 'Destined to Rule', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'We lost 8k scouts here', '', '2012-06-05 00:02:43'),
(44, '544:219', 25, 'herembert', 'the 25th legion', 0, 0, 203, 0, 0, 0, 0, 0, 50, 0, 0, 442, 1240, 0, 0, 0, 0, 0, 0, 'Magic and siege  crap castle', 'G6PB-JFXP-4DC8-LWTK', '2012-06-05 01:08:08'),
(45, '441:483', 44, 'NkoziKulu', 'Royal Carbon Tigers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'TEST', '', '2012-06-06 00:32:36');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `name` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `playerId` int(11) NOT NULL,
  `title` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `rank` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `score` int(11) NOT NULL,
  `cities` int(11) NOT NULL,
  `role` varchar(100) COLLATE latin1_german2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Gegevens worden uitgevoerd voor tabel `player`
--

INSERT INTO `player` (`name`, `playerId`, `title`, `rank`, `score`, `cities`, `role`) VALUES
('Aeternus72', 1024, 'King', '84', 552620, 68, 'Officer'),
('AFluffyBunny', 7246, 'Duke', '1587', 22940, 25, 'Apprentice'),
('Anomdaris', 375, 'Duke', '458', 167003, 24, 'Member'),
('Artier', 7090, 'Duke', '336', 233491, 31, 'Member'),
('asheron2007', 21214, 'Duke', '631', 112544, 15, 'Member'),
('Astroth', 1018, 'King', '153', 396785, 43, 'Apprentice'),
('AvB', 1698, 'King', '131', 434301, 50, 'Member'),
('bathory', 42439, 'Prince', '897', 65359, 11, 'Apprentice'),
('cionzo', 4990, 'Duke', '383', 204178, 29, 'Member'),
('CrewHammer', 9258, 'Duke', '361', 218789, 32, 'Member'),
('cristianmit', 10018, 'Duke', '313', 247887, 31, 'Member'),
('Ctine', 15506, 'King', '193', 352981, 47, 'Member'),
('DarkGhostuk', 42350, 'Duke', '584', 124722, 18, 'Member'),
('DeathstarDon', 6779, 'King', '54', 627362, 72, 'Member'),
('Debauchery', 8436, 'Marquess', '2255', 8491, 4, 'Apprentice'),
('delwatson', 443, 'Duke', '435', 176690, 28, 'Apprentice'),
('Domarc', 787, 'Duke', '820', 75263, 16, 'Member'),
('Dysp', 42243, 'Marquess', '2064', 11524, 3, 'Apprentice'),
('Eola', 12365, 'Prince', '1497', 26435, 6, 'Apprentice'),
('Fantragore', 8415, 'King', '138', 420074, 47, 'Apprentice'),
('Fillionous', 11587, 'Prince', '1627', 21600, 5, 'Apprentice'),
('Flanly', 8749, 'Duke', '216', 320816, 38, 'Member'),
('Fredriiik', 8795, 'Emperor', '41', 699269, 96, 'Officer'),
('Fuzzle', 2897, 'Emperor', '15', 968492, 101, 'Alliance Leader'),
('GandolfWhite', 29012, 'Duke', '543', 135733, 17, 'Member'),
('got3balls', 6350, 'Duke', '410', 190389, 21, 'Apprentice'),
('Gruntbuttock', 1953, 'King', '105', 498883, 57, 'Officer'),
('Hans89', 14499, 'Duke', '390', 201612, 29, 'Member'),
('HP2007', 1501, 'Duke', '264', 279448, 31, 'Member'),
('Hymer', 43066, 'Prince', '931', 62423, 9, 'Apprentice'),
('Jammi', 14226, 'King', '184', 362181, 44, 'Member'),
('Kalahari', 9928, 'King', '141', 413807, 48, 'Member'),
('Kaledon', 3648, 'Prince', '788', 79584, 10, 'Apprentice'),
('KanChuen', 10076, 'King', '56', 624381, 71, 'Member'),
('KautoStar', 43491, 'Marquess', '1234', 38277, 6, 'Apprentice'),
('Keios', 897, 'King', '87', 545503, 66, 'Second Leader'),
('KJF', 502, 'Duke', '462', 164773, 19, 'Apprentice'),
('Krazik', 4073, 'Duke', '372', 211980, 30, 'Apprentice'),
('lordapp', 28321, 'Duke', '626', 113408, 19, 'Member'),
('LordInferno', 11172, 'Duke', '407', 191462, 23, 'Member'),
('lordofalll', 8483, 'Duke', '1027', 53181, 11, 'Apprentice'),
('Mabkitty', 1189, 'King', '73', 592063, 67, 'Member'),
('Maltehk', 9556, 'Emperor', '37', 724742, 91, 'Officer'),
('Mantikor777', 43592, 'Earl', '2264', 8364, 2, 'Apprentice'),
('Megaped76', 5037, 'King', '112', 481822, 55, 'Member'),
('Mekkur', 2200, 'Prince', '1123', 45318, 14, 'Apprentice'),
('MightyKing', 20559, 'Marquess', '1964', 13500, 4, 'Apprentice'),
('MissCnduct', 15507, 'King', '43', 691694, 77, 'Veteran'),
('Mkas', 8914, 'Duke', '714', 94977, 18, 'Apprentice'),
('moon2010', 648, 'Prince', '1425', 29383, 5, 'Apprentice'),
('MultiMax007', 26092, 'Duke', '989', 57040, 8, 'Apprentice'),
('nanory', 2132, 'Duke', '273', 270774, 35, 'Member'),
('nateness', 7149, 'Duke', '363', 216968, 23, 'Member'),
('nikdemuss', 6574, 'Emperor', '4', 1186180, 130, 'Member'),
('Noppius', 19913, 'Duke', '246', 291023, 33, 'Member'),
('NoYoda', 2896, 'King', '116', 475688, 53, 'Member'),
('oddworld', 1843, 'King', '71', 594135, 70, 'Officer'),
('Orgillion', 3923, 'Emperor', '3', 1201133, 144, 'Member'),
('perdix', 960, 'Emperor', '45', 685355, 81, 'Officer'),
('Planetoid', 414, 'Emperor', '20', 845607, 91, 'Alliance Leader'),
('PloxTehFox', 6445, 'King', '96', 522204, 62, 'Member'),
('Puglia', 9516, 'King', '179', 366746, 42, 'Member'),
('r0gu', 40629, 'Duke', '559', 130540, 18, 'Member'),
('Reiness', 9155, 'King', '81', 558351, 68, 'Member'),
('Roboro', 6585, 'King', '66', 604019, 71, 'Officer'),
('RockofShar', 22365, 'Prince', '1006', 55162, 10, 'Member'),
('Sam001', 12392, 'Duke', '320', 242680, 31, 'Apprentice'),
('Sarapas', 43189, 'Prince', '667', 103920, 15, 'Apprentice'),
('Serblander', 9170, 'King', '170', 373629, 54, 'Member'),
('Silvaen', 8962, 'Prince', '1385', 30906, 7, 'Apprentice'),
('Sklipnoty', 7171, 'King', '111', 482818, 58, 'Member'),
('StarKitty', 1147, 'King', '60', 613688, 73, 'Member'),
('stevedelil', 17741, 'Prince', '1039', 51222, 6, 'Apprentice'),
('TJman', 10875, 'King', '204', 333952, 40, 'Member'),
('Torak2000', 8943, 'King', '227', 310207, 41, 'Member'),
('tractor', 855, 'King', '125', 452118, 57, 'Member'),
('Twonkster', 1722, 'King', '194', 352441, 46, 'Member'),
('Upobeat', 22499, 'Duke', '370', 212148, 25, 'Member'),
('xannan', 41056, 'Marquess', '1674', 20430, 5, 'Apprentice'),
('YesSire', 26506, 'Knight', '3461', 36, 1, 'Apprentice'),
('Zagmar', 2976, 'Duke', '236', 302254, 31, 'Member'),
('ZeeQue', 8688, 'Emperor', '24', 819438, 90, 'Member');
