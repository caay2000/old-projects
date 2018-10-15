-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Temps de generaci�: 25-08-2013 a les 18:39:48
-- Versi� del servidor: 5.5.16
-- Versi� de PHP : 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de dades: `aptgroc`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `detall`
--

CREATE TABLE IF NOT EXISTS `detall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_apartament` int(11) NOT NULL,
  `ca` longtext COLLATE utf8_unicode_ci NOT NULL,
  `es` longtext COLLATE utf8_unicode_ci NOT NULL,
  `en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `it` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Bolcant dades de la taula `detall`
--

INSERT INTO `detall` (`id`, `id_apartament`, `ca`, `es`, `en`, `fr`, `it`) VALUES
(1, 0, 'Preus especials per a les dates de: GSM, Setmana Santa, Sonar, Nadal i Any Nou. Suplement de 25€ per entrades després de la 20h. Suplement de 40€ per entrades i sortides entre les 23h. i les 7h.', 'Precios especiales para las fechas de: G.S.M., Semana Santa, Sonar, Navidad y Año Nuevo. Suplemento de 25€ para entradas después de la 20h. Suplemento de 40€ para entradas y salidas entre las 23h. y las 7h.', 'Special prices for the dates of: GSM, Easter, Sonar, Christmas and New Year. supplement 25€ surcharge for tickets after 20h. Supplement 40€ for inputs and outputs between 23h. and 7h.', 'Prix ​​spéciaux pour les dates: GSM, Pâques, Sonar, Noël et Nouvel-An. Supplément de 25€ pour les billets après 20h. Supplément de 40€ pour les entrées et les sorties entre 23h. et 7h.', 'Prezzi speciali per le date: GSM, Pasqua, Sonar, Natale e Capodanno. 25€ supplemento per i biglietti dopo 20h. Supplemento 40€ per gli ingressi e le uscite tra le 23h. e 7h. '),
(2, 1, 'Preus especials per a les dates de: GSM, Setmana Santa, Sonar, Nadal i Any Nou. Suplement de 25€ per entrades després de la 20h. Suplement de 40€ per entrades i sortides entre les 23h. i les 7h.', 'Precios especiales para las fechas de: G.S.M., Semana Santa, Sonar, Navidad y Año Nuevo. Suplemento de 25€ para entradas después de la 20h. Suplemento de 40€ para entradas y salidas entre las 23h. y las 7h.', 'Special prices for the dates of: GSM, Easter, Sonar, Christmas and New Year. supplement 25€ surcharge for tickets after 20h. Supplement 40€ for inputs and outputs between 23h. and 7h.', 'Prix ​​spéciaux pour les dates: GSM, Pâques, Sonar, Noël et Nouvel-An. Supplément de 25€ pour les billets après 20h. Supplément de 40€ pour les entrées et les sorties entre 23h. et 7h.', 'Prezzi speciali per le date: GSM, Pasqua, Sonar, Natale e Capodanno. 25€ supplemento per i biglietti dopo 20h. Supplemento 40€ per gli ingressi e le uscite tra le 23h. e 7h. '),
(3, 2, 'Preus especials per a les dates de: GSM, Setmana Santa, Sonar, Nadal i Any Nou. Suplement de 25€ per entrades després de la 20h. Suplement de 40€ per entrades i sortides entre les 23h. i les 7h.', 'Precios especiales para las fechas de: G.S.M., Semana Santa, Sonar, Navidad y Año Nuevo. Suplemento de 25€ para entradas después de la 20h. Suplemento de 40€ para entradas y salidas entre las 23h. y las 7h.', 'Special prices for the dates of: GSM, Easter, Sonar, Christmas and New Year. supplement 25€ surcharge for tickets after 20h. Supplement 40€ for inputs and outputs between 23h. and 7h.', 'Prix ​​spéciaux pour les dates: GSM, Pâques, Sonar, Noël et Nouvel-An. Supplément de 25€ pour les billets après 20h. Supplément de 40€ pour les entrées et les sorties entre 23h. et 7h.', 'Prezzi speciali per le date: GSM, Pasqua, Sonar, Natale e Capodanno. 25€ supplemento per i biglietti dopo 20h. Supplemento 40€ per gli ingressi e le uscite tra le 23h. e 7h. '),
(4, 3, 'Preus especials per a les dates de: GSM, Setmana Santa, Sonar, Nadal i Any Nou. Suplement de 25€ per entrades després de la 20h. Suplement de 40€ per entrades i sortides entre les 23h. i les 7h.', 'Precios especiales para las fechas de: G.S.M., Semana Santa, Sonar, Navidad y Año Nuevo. Suplemento de 25€ para entradas después de la 20h. Suplemento de 40€ para entradas y salidas entre las 23h. y las 7h.', 'Special prices for the dates of: GSM, Easter, Sonar, Christmas and New Year. supplement 25€ surcharge for tickets after 20h. Supplement 40€ for inputs and outputs between 23h. and 7h.', 'Prix ​​spéciaux pour les dates: GSM, Pâques, Sonar, Noël et Nouvel-An. Supplément de 25€ pour les billets après 20h. Supplément de 40€ pour les entrées et les sorties entre 23h. et 7h.', 'Prezzi speciali per le date: GSM, Pasqua, Sonar, Natale e Capodanno. 25€ supplemento per i biglietti dopo 20h. Supplemento 40€ per gli ingressi e le uscite tra le 23h. e 7h. '),
(5, 4, 'Preus especials per a les dates de: GSM, Setmana Santa, Sonar, Nadal i Any Nou. Suplement de 25€ per entrades després de la 20h. Suplement de 40€ per entrades i sortides entre les 23h. i les 7h.', 'Precios especiales para las fechas de: G.S.M., Semana Santa, Sonar, Navidad y Año Nuevo. Suplemento de 25€ para entradas después de la 20h. Suplemento de 40€ para entradas y salidas entre las 23h. y las 7h.', 'Special prices for the dates of: GSM, Easter, Sonar, Christmas and New Year. supplement 25€ surcharge for tickets after 20h. Supplement 40€ for inputs and outputs between 23h. and 7h.', 'Prix ​​spéciaux pour les dates: GSM, Pâques, Sonar, Noël et Nouvel-An. Supplément de 25€ pour les billets après 20h. Supplément de 40€ pour les entrées et les sorties entre 23h. et 7h.', 'Prezzi speciali per le date: GSM, Pasqua, Sonar, Natale e Capodanno. 25€ supplemento per i biglietti dopo 20h. Supplemento 40€ per gli ingressi e le uscite tra le 23h. e 7h. '),
(6, 5, 'Preus especials per a les dates de: GSM, Setmana Santa, Sonar, Nadal i Any Nou. Suplement de 25€ per entrades després de la 20h. Suplement de 40€ per entrades i sortides entre les 23h. i les 7h.', 'Precios especiales para las fechas de: G.S.M., Semana Santa, Sonar, Navidad y Año Nuevo. Suplemento de 25€ para entradas después de la 20h. Suplemento de 40€ para entradas y salidas entre las 23h. y las 7h.', 'Special prices for the dates of: GSM, Easter, Sonar, Christmas and New Year. supplement 25€ surcharge for tickets after 20h. Supplement 40€ for inputs and outputs between 23h. and 7h.', 'Prix ​​spéciaux pour les dates: GSM, Pâques, Sonar, Noël et Nouvel-An. Supplément de 25€ pour les billets après 20h. Supplément de 40€ pour les entrées et les sorties entre 23h. et 7h.', 'Prezzi speciali per le date: GSM, Pasqua, Sonar, Natale e Capodanno. 25€ supplemento per i biglietti dopo 20h. Supplemento 40€ per gli ingressi e le uscite tra le 23h. e 7h. '),
(7, 6, 'Preus especials per a les dates de: GSM, Setmana Santa, Sonar, Nadal i Any Nou. Suplement de 25€ per entrades després de la 20h. Suplement de 40€ per entrades i sortides entre les 23h. i les 7h.', 'Precios especiales para las fechas de: G.S.M., Semana Santa, Sonar, Navidad y Año Nuevo. Suplemento de 25€ para entradas después de la 20h. Suplemento de 40€ para entradas y salidas entre las 23h. y las 7h.', 'Special prices for the dates of: GSM, Easter, Sonar, Christmas and New Year. supplement 25€ surcharge for tickets after 20h. Supplement 40€ for inputs and outputs between 23h. and 7h.', 'Prix ​​spéciaux pour les dates: GSM, Pâques, Sonar, Noël et Nouvel-An. Supplément de 25€ pour les billets après 20h. Supplément de 40€ pour les entrées et les sorties entre 23h. et 7h.', 'Prezzi speciali per le date: GSM, Pasqua, Sonar, Natale e Capodanno. 25€ supplemento per i biglietti dopo 20h. Supplemento 40€ per gli ingressi e le uscite tra le 23h. e 7h. '),
(8, 7, 'Preus especials per a les dates de: GSM, Setmana Santa, Sonar, Nadal i Any Nou. Suplement de 25€ per entrades després de la 20h. Suplement de 40€ per entrades i sortides entre les 23h. i les 7h.', 'Precios especiales para las fechas de: G.S.M., Semana Santa, Sonar, Navidad y Año Nuevo. Suplemento de 25€ para entradas después de la 20h. Suplemento de 40€ para entradas y salidas entre las 23h. y las 7h.', 'Special prices for the dates of: GSM, Easter, Sonar, Christmas and New Year. supplement 25€ surcharge for tickets after 20h. Supplement 40€ for inputs and outputs between 23h. and 7h.', 'Prix ​​spéciaux pour les dates: GSM, Pâques, Sonar, Noël et Nouvel-An. Supplément de 25€ pour les billets après 20h. Supplément de 40€ pour les entrées et les sorties entre 23h. et 7h.', 'Prezzi speciali per le date: GSM, Pasqua, Sonar, Natale e Capodanno. 25€ supplemento per i biglietti dopo 20h. Supplemento 40€ per gli ingressi e le uscite tra le 23h. e 7h. '),
(9, 8, 'Preus especials per a les dates de: GSM, Setmana Santa, Sonar, Nadal i Any Nou. Suplement de 25€ per entrades després de la 20h. Suplement de 40€ per entrades i sortides entre les 23h. i les 7h.', 'Precios especiales para las fechas de: G.S.M., Semana Santa, Sonar, Navidad y Año Nuevo. Suplemento de 25€ para entradas después de la 20h. Suplemento de 40€ para entradas y salidas entre las 23h. y las 7h.', 'Special prices for the dates of: GSM, Easter, Sonar, Christmas and New Year. supplement 25€ surcharge for tickets after 20h. Supplement 40€ for inputs and outputs between 23h. and 7h.', 'Prix ​​spéciaux pour les dates: GSM, Pâques, Sonar, Noël et Nouvel-An. Supplément de 25€ pour les billets après 20h. Supplément de 40€ pour les entrées et les sorties entre 23h. et 7h.', 'Prezzi speciali per le date: GSM, Pasqua, Sonar, Natale e Capodanno. 25€ supplemento per i biglietti dopo 20h. Supplemento 40€ per gli ingressi e le uscite tra le 23h. e 7h. ');

-- --------------------------------------------------------

--
-- Estructura de la taula `oferta`
--

CREATE TABLE IF NOT EXISTS `oferta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_apartament` int(11) NOT NULL,
  `ca` longtext COLLATE utf8_unicode_ci NOT NULL,
  `es` longtext COLLATE utf8_unicode_ci NOT NULL,
  `en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `it` longtext COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Bolcant dades de la taula `oferta`
--

INSERT INTO `oferta` (`id`, `id_apartament`, `ca`, `es`, `en`, `fr`, `it`, `active`) VALUES
(1, 0, 'Oferta última hora: des 2013.08.25 fins 2013.09.24 un 10% més barat. </br>\r\nOferta especial: Ampolla de cava gratis', 'Oferta última hora: desde 25/08/2013 hasta 24/09/2013 un 10% más barato.</br>\r\nOferta especial: Botella de cava gratis', 'Last minute offer: from 25/08/2013 to 24/09/2013 10% cheaper.</br>\r\nSpecial offer: Free bottle of champagne', 'Offre de dernière minute: à partir de 25/08/2013 à 24/09/2013 10% moins cher.</br>\r\nOffre spéciale: Une bouteille de champagne', 'Offerta last minute: dal 25/08/2013 al 24.09.2013 10% in meno.</br>\r\nOfferta speciale: Bottiglia di champagne', 1),
(2, 1, '', '', '', '', '', 0),
(3, 2, 'ca', 'es', 'en', 'fr', 'it', 0),
(4, 3, 'ca', 'es', 'en', 'fr', 'it', 0),
(5, 4, 'ca', 'es', 'en', 'fr', 'it', 0),
(6, 5, 'ca', 'es', 'en', 'fr', 'it', 0),
(7, 6, 'ca', 'es', 'en', 'fr', 'it', 0),
(8, 7, 'ca', 'es', 'en', 'fr', 'it', 0),
(9, 8, 'ca', 'es', 'en', 'fr', 'it', 0);

-- --------------------------------------------------------

--
-- Estructura de la taula `preu`
--

CREATE TABLE IF NOT EXISTS `preu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_apt` int(11) NOT NULL,
  `pax` int(11) NOT NULL,
  `preu_3_baixa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preu_7_baixa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preu_3_mitja` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preu_7_mitja` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preu_3_alta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preu_7_alta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Bolcant dades de la taula `preu`
--

INSERT INTO `preu` (`id`, `id_apt`, `pax`, `preu_3_baixa`, `preu_7_baixa`, `preu_3_mitja`, `preu_7_mitja`, `preu_3_alta`, `preu_7_alta`) VALUES
(1, 0, 2, '130', '110', '143', '116', '156', '133'),
(2, 0, 4, '130', '110', '143', '116', '156', '133'),
(3, 0, 6, '154', '131', '169', '144', '178', '151'),
(4, 0, 8, '178', '151', '196', '167', '216', '183'),
(5, 1, 2, '72', '62', '80', '69', '88', '76'),
(6, 1, 4, '80', '69', '88', '76', '96', '83'),
(7, 2, 2, '72', '62', '80', '69', '88', '76'),
(8, 2, 4, '80', '69', '88', '76', '96', '83'),
(9, 3, 2, '72', '62', '80', '69', '88', '76'),
(10, 3, 4, '80', '69', '88', '76', '96', '83'),
(11, 4, 2, '72', '62', '80', '69', '88', '76'),
(12, 4, 4, '80', '69', '88', '76', '96', '83'),
(13, 5, 2, '72', '62', '80', '69', '88', '76'),
(14, 5, 4, '80', '69', '88', '76', '96', '83'),
(15, 6, 2, '90', '77', '100', '86', '110', '95'),
(16, 6, 4, '100', '86', '110', '95', '120', '104'),
(17, 6, 6, '110', '95', '120', '104', '130', '112'),
(18, 7, 2, '90', '77', '100', '86', '110', '95'),
(19, 7, 4, '100', '86', '110', '95', '120', '104'),
(20, 7, 6, '110', '95', '120', '104', '130', '112'),
(21, 8, 2, '0', '0', '8', '0', '0', '0'),
(22, 8, 4, '0', '0', '0', '0', '0', '0'),
(23, 8, 6, '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Estructura de la taula `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desde` datetime NOT NULL,
  `hasta` datetime NOT NULL,
  `id_apartament` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Bolcant dades de la taula `reserva`
--

INSERT INTO `reserva` (`id`, `persona`, `desde`, `hasta`, `id_apartament`) VALUES
(1, 'asdasd', '2013-08-01 00:00:00', '2013-08-28 00:00:00', '1'),
(5, 'asasd', '2013-08-05 00:00:00', '2013-08-11 00:00:00', '2'),
(6, 'asdda', '2013-08-10 00:00:00', '2013-08-20 00:00:00', '3'),
(7, '342', '2013-08-12 00:00:00', '2013-08-15 00:00:00', '4'),
(8, '', '2013-08-19 00:00:00', '2013-08-23 00:00:00', '5'),
(13, 'Hola', '2013-08-08 20:44:29', '2013-08-16 20:44:29', '0'),
(15, 'ASDQW', '2013-08-08 20:57:27', '2013-08-10 20:57:27', '0'),
(16, '', '2013-08-08 20:58:44', '2013-08-10 20:58:44', '3'),
(17, 'asd', '2013-08-08 16:56:04', '2013-08-16 16:56:04', '4'),
(18, '', '2013-08-09 18:40:17', '2013-08-16 18:40:17', '0'),
(21, 'Albert', '2013-08-16 20:29:40', '2013-08-29 20:29:40', '0'),
(22, 'Jenny', '2013-09-18 21:24:31', '2013-09-22 21:24:31', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
