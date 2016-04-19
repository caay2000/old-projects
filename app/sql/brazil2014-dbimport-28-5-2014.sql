-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Temps de generació: 28-05-2014 a les 00:27:29
-- Versió del servidor: 5.5.16
-- Versió de PHP : 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de dades: `brazil2014`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `Partido`
--

CREATE TABLE IF NOT EXISTS `Partido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `team2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `result1` int(11) DEFAULT NULL,
  `result2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_81C44C97E1002E4` (`team1`),
  KEY `IDX_81C44C979719535E` (`team2`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=49 ;

--
-- Bolcant dades de la taula `Partido`
--

INSERT INTO `Partido` (`id`, `team1`, `team2`, `fecha`, `result1`, `result2`) VALUES
(1, 'BRA', 'CRO', '2014-06-12 17:00:00', 0, 0),
(2, 'MEX', 'CMR', '2014-06-13 13:00:00', 1, 1),
(3, 'ESP', 'NED', '2014-06-13 16:00:00', 2, 2),
(4, 'CHI', 'AUS', '2014-06-13 18:00:00', 1, 0),
(5, 'COL', 'GRE', '2014-06-14 13:00:00', 2, 1),
(6, 'CIV', 'JPN', '2014-06-14 22:00:00', 3, 3),
(7, 'URU', 'CRC', '2014-06-14 16:00:00', 1, 2),
(8, 'ENG', 'ITA', '2014-06-14 18:00:00', 3, 0),
(9, 'SUI', 'ECU', '2014-06-15 13:00:00', 1, 1),
(10, 'FRA', 'HON', '2014-06-15 16:00:00', NULL, NULL),
(11, 'ARG', 'BIH', '2014-06-15 19:00:00', NULL, NULL),
(12, 'IRN', 'NGA', '2014-06-16 16:00:00', NULL, NULL),
(13, 'GER', 'POR', '2014-06-16 13:00:00', NULL, NULL),
(14, 'GHA', 'USA', '2014-06-16 19:00:00', NULL, NULL),
(15, 'BEL', 'ALG', '2014-06-17 13:00:00', NULL, NULL),
(16, 'RUS', 'KOR', '2014-06-17 18:00:00', NULL, NULL),
(17, 'BRA', 'MEX', '2014-06-17 16:00:00', NULL, NULL),
(18, 'CMR', 'CRO', '2014-06-18 18:00:00', NULL, NULL),
(19, 'ESP', 'CHI', '2014-06-18 16:00:00', NULL, NULL),
(20, 'AUS', 'NED', '2014-06-18 13:00:00', NULL, NULL),
(21, 'COL', 'CIV', '2014-06-19 13:00:00', NULL, NULL),
(22, 'JPN', 'GRE', '2014-06-19 19:00:00', NULL, NULL),
(23, 'URU', 'ENG', '2014-06-19 16:00:00', NULL, NULL),
(24, 'URU', 'ENG', '2014-06-20 13:00:00', NULL, NULL),
(25, 'SUI', 'FRA', '2014-06-20 16:00:00', NULL, NULL),
(26, 'HON', 'ECU', '2014-06-20 19:00:00', NULL, NULL),
(27, 'ARG', 'IRN', '2014-06-21 13:00:00', NULL, NULL),
(28, 'NGA', 'BIH', '2014-06-21 18:00:00', NULL, NULL),
(29, 'GER', 'GHA', '2014-06-21 16:00:00', NULL, NULL),
(30, 'USA', 'POR', '2014-06-22 18:00:00', NULL, NULL),
(31, 'BEL', 'RUS', '2014-06-22 13:00:00', NULL, NULL),
(32, 'KOR', 'ALG', '2014-06-22 16:00:00', NULL, NULL),
(33, 'CMR', 'BRA', '2014-06-23 17:00:00', NULL, NULL),
(34, 'CRO', 'MEX', '2014-06-23 17:00:00', NULL, NULL),
(35, 'AUS', 'ESP', '2014-06-23 13:00:00', NULL, NULL),
(36, 'NED', 'CHI', '2014-06-23 13:00:00', NULL, NULL),
(37, 'JPN', 'COL', '2014-06-24 16:00:00', NULL, NULL),
(38, 'GRE', 'CIV', '2014-06-24 17:00:00', NULL, NULL),
(39, 'ITA', 'URU', '2014-06-24 13:00:00', NULL, NULL),
(40, 'CRC', 'ENG', '2014-06-24 13:00:00', NULL, NULL),
(41, 'HON', 'SUI', '2014-06-25 16:00:00', NULL, NULL),
(42, 'ECU', 'FRA', '2014-06-25 17:00:00', NULL, NULL),
(43, 'NGA', 'ARG', '2014-06-25 13:00:00', NULL, NULL),
(44, 'BIH', 'IRN', '2014-06-25 13:00:00', NULL, NULL),
(45, 'USA', 'GER', '2014-06-26 13:00:00', NULL, NULL),
(46, 'POR', 'GHA', '2014-06-26 13:00:00', NULL, NULL),
(47, 'KOR', 'BEL', '2014-06-26 17:00:00', NULL, NULL),
(48, 'ALG', 'RUS', '2014-06-26 17:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de la taula `Pronostic`
--

CREATE TABLE IF NOT EXISTS `Pronostic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  `partido` int(11) DEFAULT NULL,
  `result1` int(11) DEFAULT NULL,
  `result2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_64BA5E7D8D93D649` (`user`),
  KEY `IDX_64BA5E7D4E79750B` (`partido`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=193 ;

--
-- Bolcant dades de la taula `Pronostic`
--

INSERT INTO `Pronostic` (`id`, `user`, `partido`, `result1`, `result2`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 2, 1, 1),
(3, 1, 3, 1, 1),
(4, 1, 4, 1, 1),
(5, 1, 5, 1, 1),
(6, 1, 7, 1, 1),
(7, 1, 8, 1, 0),
(8, 1, 6, 1, 1),
(9, 1, 9, 1, 1),
(10, 1, 10, 1, 1),
(11, 1, 11, 1, 1),
(12, 1, 13, 0, 1),
(13, 1, 12, 1, 1),
(14, 1, 14, 1, 1),
(15, 1, 15, 1, 1),
(16, 1, 17, 1, 1),
(17, 1, 16, 1, 0),
(18, 1, 20, 1, 1),
(19, 1, 19, 1, 1),
(20, 1, 18, 1, 1),
(21, 1, 21, 1, 1),
(22, 1, 23, 1, 0),
(23, 1, 22, 1, 1),
(24, 1, 24, 1, 1),
(25, 1, 25, 1, 1),
(26, 1, 26, 1, 1),
(27, 1, 27, 1, 1),
(28, 1, 29, 1, 1),
(29, 1, 28, 1, 1),
(30, 1, 31, 1, 1),
(31, 1, 32, 0, 1),
(32, 1, 30, 1, 1),
(33, 1, 35, 1, 1),
(34, 1, 36, 1, 1),
(35, 1, 33, 1, 0),
(36, 1, 34, 1, 1),
(37, 1, 39, 1, 1),
(38, 1, 40, 1, 1),
(39, 1, 37, 1, 1),
(40, 1, 38, 1, 1),
(41, 1, 43, 1, 0),
(42, 1, 44, 1, 1),
(43, 1, 41, 1, 1),
(44, 1, 42, 1, 1),
(45, 1, 45, 1, 1),
(46, 1, 46, 1, 1),
(47, 1, 47, 1, 1),
(48, 1, 48, 1, 1),
(49, 2, 1, 2, 2),
(50, 2, 2, 2, 2),
(51, 2, 3, 2, 2),
(52, 2, 4, 2, 2),
(53, 2, 5, 2, 2),
(54, 2, 7, 2, 2),
(55, 2, 8, 2, 2),
(56, 2, 6, 2, 2),
(57, 2, 9, 2, 2),
(58, 2, 10, 2, 2),
(59, 2, 11, 2, 2),
(60, 2, 13, 2, 2),
(61, 2, 12, 2, 2),
(62, 2, 14, 2, 2),
(63, 2, 15, 2, 2),
(64, 2, 17, 2, 2),
(65, 2, 16, 2, 2),
(66, 2, 20, 2, 2),
(67, 2, 19, 2, 2),
(68, 2, 18, 2, 2),
(69, 2, 21, 2, 2),
(70, 2, 23, 2, 2),
(71, 2, 22, 2, 2),
(72, 2, 24, 2, 2),
(73, 2, 25, 2, 2),
(74, 2, 26, 2, 2),
(75, 2, 27, 2, 2),
(76, 2, 29, 2, 2),
(77, 2, 28, 2, 2),
(78, 2, 31, 2, 2),
(79, 2, 32, 2, 2),
(80, 2, 30, 2, 2),
(81, 2, 35, 2, 2),
(82, 2, 36, 2, 2),
(83, 2, 33, 2, 2),
(84, 2, 34, 2, 2),
(85, 2, 39, 2, 2),
(86, 2, 40, 2, 2),
(87, 2, 37, 2, 2),
(88, 2, 38, 2, 2),
(89, 2, 43, 2, 2),
(90, 2, 44, 2, 2),
(91, 2, 41, 2, 2),
(92, 2, 42, 2, 2),
(93, 2, 45, 0, 2),
(94, 2, 46, 2, 2),
(95, 2, 47, 2, 2),
(96, 2, 48, 2, 2),
(97, 3, 1, 3, 3),
(98, 3, 2, 3, 3),
(99, 3, 3, 3, 3),
(100, 3, 4, 3, 3),
(101, 3, 5, 3, 3),
(102, 3, 7, 3, 3),
(103, 3, 8, 3, 3),
(104, 3, 6, 3, 3),
(105, 3, 9, 3, 3),
(106, 3, 10, 3, 3),
(107, 3, 11, 3, 3),
(108, 3, 13, 3, 3),
(109, 3, 12, 3, 3),
(110, 3, 14, 3, 3),
(111, 3, 15, 3, 0),
(112, 3, 17, 3, 3),
(113, 3, 16, 3, 3),
(114, 3, 20, 3, 3),
(115, 3, 19, 3, 33),
(116, 3, 18, 3, 3),
(117, 3, 21, 3, 3),
(118, 3, 23, 3, 3),
(119, 3, 22, 3, 3),
(120, 3, 24, 3, 3),
(121, 3, 25, 0, 3),
(122, 3, 26, 3, 3),
(123, 3, 27, 3, 3),
(124, 3, 29, 3, 3),
(125, 3, 28, 0, 3),
(126, 3, 31, 3, 3),
(127, 3, 32, 3, 3),
(128, 3, 30, 3, 0),
(129, 3, 35, 3, 3),
(130, 3, 36, 3, 3),
(131, 3, 33, 3, 3),
(132, 3, 34, 3, 0),
(133, 3, 39, 3, 3),
(134, 3, 40, 3, 3),
(135, 3, 37, 3, 3),
(136, 3, 38, 0, 3),
(137, 3, 43, 3, 3),
(138, 3, 44, 3, 3),
(139, 3, 41, 0, 3),
(140, 3, 42, 3, 3),
(141, 3, 45, 3, 3),
(142, 3, 46, 3, 3),
(143, 3, 47, 3, 0),
(144, 3, 48, 3, 3),
(145, 4, 1, 4, 4),
(146, 4, 2, 4, 4),
(147, 4, 3, 4, 4),
(148, 4, 4, 4, 4),
(149, 4, 5, 4, 4),
(150, 4, 7, 4, 4),
(151, 4, 8, 4, 4),
(152, 4, 6, 4, 0),
(153, 4, 9, 4, 4),
(154, 4, 10, 4, 4),
(155, 4, 11, 4, 4),
(156, 4, 13, 4, 4),
(157, 4, 12, 4, 4),
(158, 4, 14, 4, 4),
(159, 4, 15, 4, 4),
(160, 4, 17, 4, 4),
(161, 4, 16, 4, 4),
(162, 4, 20, 4, 4),
(163, 4, 19, 4, 4),
(164, 4, 18, 4, 4),
(165, 4, 21, 4, 4),
(166, 4, 23, 4, 4),
(167, 4, 22, 4, 4),
(168, 4, 24, 4, 4),
(169, 4, 25, 4, 4),
(170, 4, 26, 4, 4),
(171, 4, 27, 4, 4),
(172, 4, 29, 4, 4),
(173, 4, 28, 4, 4),
(174, 4, 31, 0, 4),
(175, 4, 32, 4, 4),
(176, 4, 30, 4, 4),
(177, 4, 35, 4, 4),
(178, 4, 36, 4, 4),
(179, 4, 33, 4, 4),
(180, 4, 34, 4, 4),
(181, 4, 39, 0, 4),
(182, 4, 40, 4, 4),
(183, 4, 37, 4, 4),
(184, 4, 38, 4, 4),
(185, 4, 43, 4, 4),
(186, 4, 44, 4, 4),
(187, 4, 41, 4, 4),
(188, 4, 42, 4, 4),
(189, 4, 45, 4, 4),
(190, 4, 46, 4, 0),
(191, 4, 47, 4, 4),
(192, 4, 48, 4, 4);

-- --------------------------------------------------------

--
-- Estructura de la taula `Team`
--

CREATE TABLE IF NOT EXISTS `Team` (
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Bolcant dades de la taula `Team`
--

INSERT INTO `Team` (`code`, `name`) VALUES
('ALG', 'Algeria'),
('ARG', 'Argentina'),
('AUS', 'Australia'),
('BEL', 'Belgium'),
('BIH', 'Bosnia He.'),
('BRA', 'Brazil'),
('CHI', 'Chile'),
('CIV', 'Cote D''ivoire'),
('CMR', 'Cameroon'),
('COL', 'Colombia'),
('CRC', 'Costa Rica'),
('CRO', 'Croatia'),
('ECU', 'Ecuador'),
('ENG', 'England'),
('ESP', 'Spain'),
('FRA', 'France'),
('GER', 'Germany'),
('GHA', 'Ghana'),
('GRE', 'Greece'),
('HON', 'Honduras'),
('IRN', 'Iran'),
('ITA', 'Italy'),
('JPN', 'Japan'),
('KOR', 'Korea'),
('MEX', 'Mexico'),
('NED', 'Netherlands'),
('NGA', 'Nigeria'),
('POR', 'Portugal'),
('RUS', 'Russia'),
('SUI', 'Switzerland'),
('URU', 'Uruguay'),
('USA', 'USA');

-- --------------------------------------------------------

--
-- Estructura de la taula `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pagado` tinyint(1) NOT NULL,
  `punts` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2DA17977F85E0677` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Bolcant dades de la taula `User`
--

INSERT INTO `User` (`id`, `username`, `email`, `pagado`, `punts`, `password`) VALUES
(1, 'Test 1', 'test1@test.com', 1, 30, ''),
(2, 'Test2', 'test2@test.com', 1, 21, ''),
(3, 'Test 3', 'test3@test.com', 1, 20, ''),
(4, 'Test 4', 'test4@test.com', 1, 12, '86985e105f79b95d6bc918fb45ec7727');

--
-- Restriccions per taules bolcades
--

--
-- Restriccions per la taula `Partido`
--
ALTER TABLE `Partido`
  ADD CONSTRAINT `FK_81C44C979719535E` FOREIGN KEY (`team2`) REFERENCES `Team` (`code`),
  ADD CONSTRAINT `FK_81C44C97E1002E4` FOREIGN KEY (`team1`) REFERENCES `Team` (`code`);

--
-- Restriccions per la taula `Pronostic`
--
ALTER TABLE `Pronostic`
  ADD CONSTRAINT `FK_64BA5E7D4E79750B` FOREIGN KEY (`partido`) REFERENCES `Partido` (`id`),
  ADD CONSTRAINT `FK_64BA5E7D8D93D649` FOREIGN KEY (`user`) REFERENCES `User` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
