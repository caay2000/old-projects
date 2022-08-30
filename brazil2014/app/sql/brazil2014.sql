-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 22-04-2016 a les 17:44:34
-- Versió del servidor: 5.5.44-0+deb8u1
-- PHP Version: 5.6.17-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brazil2014`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `Partido`
--

CREATE TABLE IF NOT EXISTS `Partido` (
`id` int(11) NOT NULL,
  `team1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `team2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `result1` int(11) DEFAULT NULL,
  `result2` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `Pronostic`
--

CREATE TABLE IF NOT EXISTS `Pronostic` (
`id` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `partido` int(11) DEFAULT NULL,
  `result1` int(11) DEFAULT NULL,
  `result2` int(11) DEFAULT NULL,
  `punts` int(11) DEFAULT NULL,
  `punt3` tinyint(1) DEFAULT NULL,
  `punt1a` tinyint(1) DEFAULT NULL,
  `punt1b` tinyint(1) DEFAULT NULL,
  `punt2` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `Team`
--

CREATE TABLE IF NOT EXISTS `Team` (
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `User`
--

CREATE TABLE IF NOT EXISTS `User` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pagado` tinyint(1) NOT NULL,
  `punts` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Partido`
--
ALTER TABLE `Partido`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_81C44C97E1002E4` (`team1`), ADD KEY `IDX_81C44C979719535E` (`team2`);

--
-- Indexes for table `Pronostic`
--
ALTER TABLE `Pronostic`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_64BA5E7D8D93D649` (`user`), ADD KEY `IDX_64BA5E7D4E79750B` (`partido`);

--
-- Indexes for table `Team`
--
ALTER TABLE `Team`
 ADD PRIMARY KEY (`code`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_2DA17977F85E0677` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Partido`
--
ALTER TABLE `Partido`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `Pronostic`
--
ALTER TABLE `Pronostic`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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
