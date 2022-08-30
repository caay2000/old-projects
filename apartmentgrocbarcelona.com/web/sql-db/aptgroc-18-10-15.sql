-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: mysql.apartmentgrocbarcelona.com
-- Generation Time: Oct 15, 2018 at 02:38 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aptgrocdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Detall`
--

CREATE TABLE `Detall` (
  `id` int(11) NOT NULL,
  `id_apartament` int(11) NOT NULL,
  `ca` longtext COLLATE utf8_unicode_ci NOT NULL,
  `es` longtext COLLATE utf8_unicode_ci NOT NULL,
  `en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `it` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Detall`
--

INSERT INTO `Detall` (`id`, `id_apartament`, `ca`, `es`, `en`, `fr`, `it`) VALUES
(1, 0, '', 'Precios especiales para las fechas de: G.S.M., Semana Santa, Primavera Sonud, Sonar, Navidad y AÃ±o Nuevo.<br />\r\n<br />\r\nLimpieza final del apartamento  50 â‚¬<br />\r\n<br />\r\nSuplemento de 25 â‚¬ para entradas despuÃ©s de las  20h.<br />\r\nSuplemento de 40 â‚¬ para entradas despuÃ©s de las  23 h<br />\r\nSuplemento de 40 â‚¬ para salidas de madrugada.', 'Special prices for the dates of: GSM, Easter,Primavera Sound,  Sonar, Christmas and New Year.<br />\r\nSupplement 25â‚¬ surcharge for tickets after 20h. Supplement 40â‚¬ for inputs and outputs between 23h. and 7h.', 'Prix spÃ©ciaux pour les dates: GSM, PÃ¢ques, Primavera Sound, Sonar, NoÃ«l et Nouvel-An. <br />\r\nSupplÃ©ment de 25â‚¬ pour les billets aprÃ©s 20h. SupplÃ©ment de 40â‚¬ pour les entrÃ©es et les sorties entre 23h. et 7h.', 'Prezzi speciali per le date: GSM, Pasqua, Primavera Sound, Sonar, Natale e Capodanno. <br />\r\n25â‚¬ supplemento per i biglietti dopo 20h. Supplemento 40â‚¬ per gli ingressi e le uscite tra le 23h. e 7h. '),
(2, 1, '', 'Precios especiales para las fechas de: G.S.M., Semana Santa, Primavera Sound, Sonar, Navidad y AÃ±o Nuevo<br />\r\n<br />\r\nLimpieza final del apartamento  50 â‚¬<br />\r\n.<br />\r\nSuplemento de 25 â‚¬ para entradas despuÃ©s de las  20h.<br />\r\nSuplemento de 40 â‚¬ para entradas despuÃ©s de las  23 h<br />\r\nSuplemento de 40 â‚¬ para salidas de madrugada.', 'Special prices for the dates of: GSM, Easter, Primavera Sound, Sonar, Christmas and New Year.<br />\r\nSupplement of â‚¬ 25 for arrivals after 20 h.<br />\r\nSupplement of â‚¬ 40 for arrivals after 23 h.<br />\r\nSupplement of â‚¬ 40 for departures, at dawn.', 'Prix â€‹â€‹spÃ©ciaux pour les dates: GSM, PÃ¢ques, Primavera Sound, Sonar, NoÃ«l et Nouvel-An.<br />\r\nSupplÃ©ment de 25 â‚¬ pour les arrivÃ©es aprÃ¨s 20h.<br />\r\nSupplÃ©ment de 40 â‚¬ pour les arrivÃ©es aprÃ¨s 23 h<br />\r\nSupplÃ©ment de 40 â‚¬ pour les dÃ©parts, Ã  l\'aube.', 'Prezzi speciali per le date: GSM, Pasqua, Primavera Sound, Sonar, Natale e Capodanno.<br />\r\nSupplemento di 25 â‚¬ per gli arrivi dopo le ore 20.<br />\r\nSupplemento di 40 â‚¬ per gli arrivi dopo 23 ore<br />\r\nSupplemento di 40 â‚¬ per le partenze, all\'alba.'),
(3, 2, 'Preus especials per a les dates de: GSM, Setmana Santa, Sonar, Nadal i Any Nou. Suplement de 25â‚¬ per entrades desprÃ©s de la 20h. Suplement de 40â‚¬ per entrades i sortides entre les 23h. i les 7h.', 'Precios especiales para las fechas de: G.S.M., Semana Santa, Primavera Sonud, Sonar, Navidad y AÃ±o Nuevo.<br />\r\n<br />\r\nLimpieza final del apartamento  50 â‚¬<br />\r\n<br />\r\nSuplemento de 25 â‚¬ para entradas despuÃ©s de las  20h.<br />\r\nSuplemento de 40 â‚¬ para entradas despuÃ©s de las  23 h<br />\r\nSuplemento de 40 â‚¬ para salidas de madrugada.<br />\r\n', 'Special prices for the dates of: GSM, Easter, Primavera Sound,Sonar, Christmas and New Year. supplement 25â‚¬ surcharge for tickets after 20h. Supplement 40â‚¬ for inputs and outputs between 23h. and 7h.', 'Prix spÃ©ciaux pour les dates: GSM, PÃ¢ques, Primavera Sound,Sonar, NoÃ«l et Nouvel-An. SupplÃ©ment de 25â‚¬ pour les billets aprÃ©s 20h. SupplÃ©ment de 40â‚¬ pour les entrÃ©es et les sorties entre 23h. et 7h.', 'Prezzi speciali per le date: GSM, Pasqua, Primavera Sound,Sonar, Natale e Capodanno. 25â‚¬ supplemento per i biglietti dopo 20h. Supplemento 40â‚¬ per gli ingressi e le uscite tra le 23h. e 7h. '),
(4, 3, 'Preus especials per a les dates de: GSM, Setmana Santa, Sonar, Nadal i Any Nou. Suplement de 25â‚¬ per entrades desprÃ©s de la 20h. Suplement de 40â‚¬ per entrades i sortides entre les 23h. i les 7h.', 'Precios especiales para las fechas de: G.S.M., Semana Santa, Primavera Sonud, Sonar, Navidad y AÃ±o Nuevo.<br />\r\n<br />\r\nLimpieza final del apartamento  50 â‚¬<br />\r\n<br />\r\nSuplemento de 25 â‚¬ para entradas despuÃ©s de las  20h.<br />\r\nSuplemento de 40 â‚¬ para entradas despuÃ©s de las  23 h<br />\r\nSuplemento de 40 â‚¬ para salidas de madrugada.', 'Special prices for the dates of: GSM, Easter, Primavera Sound,Sonar, Christmas and New Year. supplement 25â‚¬ surcharge for tickets after 20h. Supplement 40â‚¬ for inputs and outputs between 23h. and 7h.', 'Prix spÃ©ciaux pour les dates: GSM, PÃ¢ques, Primavera Sound,Sonar, NoÃ«l et Nouvel-An. SupplÃ©ment de 25â‚¬ pour les billets aprÃ©s 20h. SupplÃ©ment de 40â‚¬ pour les entrÃ©es et les sorties entre 23h. et 7h.', 'Prezzi speciali per le date: GSM, Pasqua, Primavera Sound, Sonar, Natale e Capodanno. 25â‚¬ supplemento per i biglietti dopo 20h. Supplemento 40â‚¬ per gli ingressi e le uscite tra le 23h. e 7h. '),
(5, 4, 'Preus especials per a les dates de: GSM, Setmana Santa, Sonar, Nadal i Any Nou. Suplement de 25â‚¬ per entrades desprÃ©s de la 20h. Suplement de 40â‚¬ per entrades i sortides entre les 23h. i les 7h.', 'Precios especiales para las fechas de: G.S.M., Semana Santa, Primavera Sonud, Sonar, Navidad y AÃ±o Nuevo.<br />\r\n<br />\r\nLimpieza final del apartamento  50 â‚¬<br />\r\n<br />\r\nSuplemento de 25 â‚¬ para entradas despuÃ©s de las  20h.<br />\r\nSuplemento de 40 â‚¬ para entradas despuÃ©s de las  23 h<br />\r\nSuplemento de 40 â‚¬ para salidas de madrugada.', 'Special prices for the dates of: GSM, Easter, Primavera Sound, Sonar, Christmas and New Year. supplement 25â‚¬ surcharge for tickets after 20h. Supplement 40â‚¬ for inputs and outputs between 23h. and 7h.', 'Prix spÃ©ciaux pour les dates: GSM, PÃ¢ques, Primavera Sound, Sonar, NoÃ«l et Nouvel-An. SupplÃ©ment de 25â‚¬ pour les billets aprÃ©s 20h. SupplÃ©ment de 40â‚¬ pour les entrÃ©es et les sorties entre 23h. et 7h.', 'Prezzi speciali per le date: GSM, Pasqua, Primavera Sound, Sonar, Natale e Capodanno. 25â‚¬ supplemento per i biglietti dopo 20h. Supplemento 40â‚¬ per gli ingressi e le uscite tra le 23h. e 7h. '),
(6, 5, 'Preus especials per a les dates de: GSM, Setmana Santa, Sonar, Nadal i Any Nou. Suplement de 25â‚¬ per entrades desprÃ©s de la 20h. Suplement de 40â‚¬ per entrades i sortides entre les 23h. i les 7h.', 'Precios especiales para las fechas de: G.S.M., Semana Santa, Primavera Sonud, Sonar, Navidad y AÃ±o Nuevo.<br />\r\n<br />\r\nLimpieza final del apartamento  50 â‚¬<br />\r\n<br />\r\nSuplemento de 25 â‚¬ para entradas despuÃ©s de las  20h.<br />\r\nSuplemento de 40 â‚¬ para entradas despuÃ©s de las  23 h<br />\r\nSuplemento de 40 â‚¬ para salidas de madrugada.', 'Special prices for the dates of: GSM, Easter, Primavera Sound, Sonar, Christmas and New Year. supplement 25â‚¬ surcharge for tickets after 20h. Supplement 40â‚¬ for inputs and outputs between 23h. and 7h.', 'Prix spÃ©ciaux pour les dates: GSM, PÃ¢ques, Primavera Sound, Sonar, NoÃ«l et Nouvel-An. SupplÃ©ment de 25â‚¬ pour les billets aprÃ©s 20h. SupplÃ©ment de 40â‚¬ pour les entrÃ©es et les sorties entre 23h. et 7h.', 'Prezzi speciali per le date: GSM, Pasqua, Primavera Sound, Sonar, Natale e Capodanno. 25â‚¬ supplemento per i biglietti dopo 20h. Supplemento 40â‚¬ per gli ingressi e le uscite tra le 23h. e 7h. '),
(7, 6, 'Preus especials per a les dates de: GSM, Setmana Santa, Sonar, Nadal i Any Nou. Suplement de 25â‚¬ per entrades desprÃ©s de la 20h. Suplement de 40â‚¬ per entrades i sortides entre les 23h. i les 7h.', 'Precios especiales para las fechas de: G.S.M., Semana Santa, Primavera Sonud, Sonar, Navidad y AÃ±o Nuevo.<br />\r\n<br />\r\nLimpieza final del apartamento  50 â‚¬<br />\r\n<br />\r\nSuplemento de 25 â‚¬ para entradas despuÃ©s de las  20h.<br />\r\nSuplemento de 40 â‚¬ para entradas despuÃ©s de las  23 h<br />\r\nSuplemento de 40 â‚¬ para salidas de madrugada.', 'Special prices for the dates of: GSM, Easter, Primavera Sound, Sonar, Christmas and New Year. supplement 25â‚¬ surcharge for tickets after 20h. Supplement 40â‚¬ for inputs and outputs between 23h. and 7h.', 'Prix spÃ©ciaux pour les dates: GSM, PÃ¢ques, Primavera Sound, Sonar, NoÃ«l et Nouvel-An. SupplÃ©ment de 25â‚¬ pour les billets aprÃ©s 20h. SupplÃ©ment de 40â‚¬ pour les entrÃ©es et les sorties entre 23h. et 7h.', 'Prezzi speciali per le date: GSM, Pasqua, Primavera Sound, Sonar, Natale e Capodanno. 25â‚¬ supplemento per i biglietti dopo 20h. Supplemento 40â‚¬ per gli ingressi e le uscite tra le 23h. e 7h. '),
(8, 7, 'Preus especials per a les dates de: GSM, Setmana Santa, Sonar, Nadal i Any Nou. Suplement de 25â‚¬ per entrades desprÃ©s de la 20h. Suplement de 40â‚¬ per entrades i sortides entre les 23h. i les 7h.', 'Precios especiales para las fechas de: G.S.M., Semana Santa, Primavera Sonud, Sonar, Navidad y AÃ±o Nuevo.<br />\r\n<br />\r\nLimpieza final del apartamento  50 â‚¬<br />\r\n<br />\r\nSuplemento de 25 â‚¬ para entradas despuÃ©s de las  20h.<br />\r\nSuplemento de 40 â‚¬ para entradas despuÃ©s de las  23 h<br />\r\nSuplemento de 40 â‚¬ para salidas de madrugada.', 'Special prices for the dates of: GSM, Easter, Primavera Sound, Sonar, Christmas and New Year. supplement 25â‚¬ surcharge for tickets after 20h. Supplement 40â‚¬ for inputs and outputs between 23h. and 7h.', 'Prix spÃ©ciaux pour les dates: GSM, PÃ¢ques,Primavera Sound,  Sonar, NoÃ«l et Nouvel-An. SupplÃ©ment de 25â‚¬ pour les billets aprÃ©s 20h. SupplÃ©ment de 40â‚¬ pour les entrÃ©es et les sorties entre 23h. et 7h.', 'Prezzi speciali per le date: GSM, Pasqua, Primavera Sound, Sonar, Natale e Capodanno. 25â‚¬ supplemento per i biglietti dopo 20h. Supplemento 40â‚¬ per gli ingressi e le uscite tra le 23h. e 7h.  '),
(9, 8, 'Preus especials per a les dates de: GSM, Setmana Santa, Sonar, Nadal i Any Nou. <br />\r\nSuplement de 25â‚¬ per entrades desprÃ©s de la 20h. Suplement de 40â‚¬ per entrades i sortides entre les 23h. i les 7h.', 'Precios especiales para las fechas de: G.S.M., Semana Santa, Sonar, Navidad y AÃ±o Nuevo.<br />\r\n<br />\r\nLimpieza final del apartamento  50 â‚¬<br />\r\n<br />\r\nSuplemento de 25 â‚¬ para entradas despuÃ©s de las  20h.<br />\r\nSuplemento de 40 â‚¬ para entradas despuÃ©s de las  23 h<br />\r\nSuplemento de 40 â‚¬ para salidas de madrugada.', 'Special prices for the dates of: GSM, Easter, Sonar, Christmas and New Year. <br />\r\nSupplement 25â‚¬ surcharge for tickets after 20h. Supplement 40â‚¬ for inputs and outputs between 23h. and 7h.', 'Prix spÃ©ciaux pour les dates: GSM, PÃ¢ques, Sonar, NoÃ«l et Nouvel-An. <br />\r\nSupplÃ©ment de 25â‚¬ pour les billets aprÃ©s 20h. SupplÃ©ment de 40â‚¬ pour les entrÃ©es et les sorties entre 23h. et 7h.', 'Prezzi speciali per le date: GSM, Pasqua, Sonar, Natale e Capodanno. <br />\r\nSupplemento 25â‚¬ per i biglietti dopo 20h. Supplemento 40â‚¬ per gli ingressi e le uscite tra le 23h. e 7h.  ');

-- --------------------------------------------------------

--
-- Table structure for table `Oferta`
--

CREATE TABLE `Oferta` (
  `id` int(11) NOT NULL,
  `id_apartament` int(11) NOT NULL,
  `ca` longtext COLLATE utf8_unicode_ci NOT NULL,
  `es` longtext COLLATE utf8_unicode_ci NOT NULL,
  `en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `it` longtext COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Oferta`
--

INSERT INTO `Oferta` (`id`, `id_apartament`, `ca`, `es`, `en`, `fr`, `it`, `active`) VALUES
(1, 0, '', 'OFERTA  ULTIMA  HORA:                10 % de descuento, para los dias LIBRES,  entre hoy y los proximos 30 dias.<br />\r\nOFERTA  POR  TEMPORADA:         Hasta un 75 %,  de descuento, para reservas de temporada.', 'LAST  MINUTE  OFFER:                   10% discount for the FREE days between now and the next 30 days.<br />\r\nOFFER  FOR  SEASON                    75% discount for bookings season.', 'OFFRE  DE  DERNIÃˆR  MINUTE:      10% de rÃ©duction pour les jours libres entre aujourd\'hui et les 30 prochains jours.<br />\r\nOFFRE  PAR  SAISON:                     75% de rÃ©duction pour la saison des rÃ©servations.', 'OFFERTA  LAST  MINUTE:               10% di sconto per i giorni liberi tra oggi e per i prossimi 30 giorni.<br />\r\nOFFERTA  PER  SEASO:                  Fino al 75% di sconto per prenotazioni di season.', 1),
(2, 1, '', 'OFERTA  ULTIMA  HORA:                10 % de descuento, para los dias LIBRES,  entre hoy y los proximos 30 dias.<br />\r\nOFERTA  POR  TEMPORADA:         Hasta un 75 %,  de descuento, para reservas de temporada.', 'LAST  MINUTE  OFFER:                   10% discount for the FREE days between now and the next 30 days.<br />\r\nOFFER  FOR  SEASON                    75% discount for bookings season.', 'OFFRE  DE  DERNIÃˆR  MINUTE:      10% de rÃ©duction pour les jours libres entre aujourd\'hui et les 30 prochains jours.<br />\r\nOFFRE  PAR  SAISON:                     75% de rÃ©duction pour la saison des rÃ©servations.', 'OFFERTA  LAST  MINUTE:               10% di sconto per i giorni liberi tra oggi e per i prossimi 30 giorni.<br />\r\nOFFERTA  PER  SEASO:                  Fino al 75% di sconto per prenotazioni di season.', 1),
(3, 2, '', 'OFERTA  ULTIMA  HORA:                10 % de descuento, para los dias LIBRES,  entre hoy y los proximos 30 dias.<br />\r\nOFERTA  POR  TEMPORADA:         Hasta un 75 %,  de descuento, para reservas de temporada.', 'LAST  MINUTE  OFFER:                   10% discount for the FREE days between now and the next 30 days.<br />\r\nOFFER  FOR  SEASON                    75% discount for bookings season.', 'OFFRE  DE  DERNIÃˆR  MINUTE:      10% de rÃ©duction pour les jours libres entre aujourd\'hui et les 30 prochains jours.<br />\r\nOFFRE  PAR  SAISON:                     75% de rÃ©duction pour la saison des rÃ©servations.', 'OFFERTA  LAST  MINUTE:               10% di sconto per i giorni liberi tra oggi e per i prossimi 30 giorni.<br />\r\nOFFERTA  PER  SEASO:                  Fino al 75% di sconto per prenotazioni di season.', 1),
(4, 3, '', 'OFERTA  ULTIMA  HORA:                10 % de descuento, para los dias LIBRES,  entre hoy y los proximos 30 dias.<br />\r\nOFERTA  POR  TEMPORADA:         Hasta un 75 %,  de descuento, para reservas de temporada.', 'LAST  MINUTE  OFFER:                   10% discount for the FREE days between now and the next 30 days.<br />\r\nOFFER  FOR  SEASON                    75% discount for bookings season.', 'OFFRE  DE  DERNIÃˆR  MINUTE:      10% de rÃ©duction pour les jours libres entre aujourd\'hui et les 30 prochains jours.<br />\r\nOFFRE  PAR  SAISON:                     75% de rÃ©duction pour la saison des rÃ©servations.', 'OFFERTA  LAST  MINUTE:               10% di sconto per i giorni liberi tra oggi e per i prossimi 30 giorni.<br />\r\nOFFERTA  PER  SEASO:                  Fino al 75% di sconto per prenotazioni di season.', 1),
(5, 4, '', 'OFERTA  ULTIMA  HORA:                10 % de descuento, para los dias LIBRES,  entre hoy y los proximos 30 dias.<br />\r\nOFERTA  POR  TEMPORADA:         Hasta un 75 %,  de descuento, para reservas de temporada.', 'LAST  MINUTE  OFFER:                   10% discount for the FREE days between now and the next 30 days.<br />\r\nOFFER  FOR  SEASON                    75% discount for bookings season.', 'OFFRE  DE  DERNIÃˆR  MINUTE:      10% de rÃ©duction pour les jours libres entre aujourd\'hui et les 30 prochains jours.<br />\r\nOFFRE  PAR  SAISON:                     75% de rÃ©duction pour la saison des rÃ©servations.', 'OFFERTA  LAST  MINUTE:               10% di sconto per i giorni liberi tra oggi e per i prossimi 30 giorni.<br />\r\nOFFERTA  PER  SEASO:                  Fino al 75% di sconto per prenotazioni di season.', 1),
(6, 5, '', '', '', '', '', 0),
(7, 6, '', 'OFERTA  ULTIMA  HORA:                10 % de descuento, para los dias LIBRES,  entre hoy y los proximos 30 dias.<br />\r\nOFERTA  POR  TEMPORADA:         Hasta un 75 %,  de descuento, para reservas de temporada.', 'LAST  MINUTE  OFFER:                   10% discount for the FREE days between now and the next 30 days.<br />\r\nOFFER  FOR  SEASON                    75% discount for bookings season.', 'OFFRE  DE  DERNIÃˆR  MINUTE:      10% de rÃ©duction pour les jours libres entre aujourd\'hui et les 30 prochains jours.<br />\r\nOFFRE  PAR  SAISON:                     75% de rÃ©duction pour la saison des rÃ©servations.', 'OFFERTA  LAST  MINUTE:               10% di sconto per i giorni liberi tra oggi e per i prossimi 30 giorni.<br />\r\nOFFERTA  PER  SEASO:                  Fino al 75% di sconto per prenotazioni di season.', 1),
(8, 7, '', 'OFFERTA  LAST  MINUTE:               10% di sconto per i giorni liberi tra oggi e per i prossimi 30 giorni.<br />\r\nOFFERTA  PER  SEASO:                  Fino al 75% di sconto per prenotazioni di season.', 'LAST  MINUTE  OFFER:                   10% discount for the FREE days between now and the next 30 days.<br />\r\nOFFER  FOR  SEASON                    75% discount for bookings season.', 'OFFRE  DE  DERNIÃˆR  MINUTE:      10% de rÃ©duction pour les jours libres entre aujourd\'hui et les 30 prochains jours.<br />\r\nOFFRE  PAR  SAISON:                     75% de rÃ©duction pour la saison des rÃ©servations.', 'OFFERTA  LAST  MINUTE:               10% di sconto per i giorni liberi tra oggi e per i prossimi 30 giorni.<br />\r\nOFFERTA  PER  SEASO:                  Fino al 75% di sconto per prenotazioni di season.', 1),
(9, 8, '', 'OFERTA  ULTIMA  HORA:              10 % de descuento, para los dias LIBRES,  entre hoy y los proximos 30 dias.<br />\r\nOFERTA  POR  TEMPORADA:       Hasta un 75 %,  de descuento, para reservas de temporada.', 'LAST  MINUTE  OFFER:               10% discount for the FREE days between now and the next 30 days.<br />\r\nOFFER  FOR  SEASON                75% discount for bookings season.', 'OFFRE  DE  DERNIÃˆR  MINUTE:      10% de rÃ©duction pour les jours libres entre aujourd\'hui et les 30 prochains jours.<br />\r\nOFFRE  PAR  SAISON:                     75% de rÃ©duction pour la saison des rÃ©servations.', 'OFFERTA  LAST  MINUTE:        10% di sconto per i giorni liberi tra oggi e per i prossimi 30 giorni.<br />\r\nOFFERTA  PER  SEASO:           fino al 75% di sconto per prenotazioni di season.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Preu`
--

CREATE TABLE `Preu` (
  `id` int(11) NOT NULL,
  `id_apt` int(11) NOT NULL,
  `pax` int(11) NOT NULL,
  `preu_3_baixa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preu_7_baixa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preu_3_mitja` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preu_7_mitja` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preu_3_alta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preu_7_alta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preu_mes_baixa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preu_mes_mitja` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preu_mes_alta` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Preu`
--

INSERT INTO `Preu` (`id`, `id_apt`, `pax`, `preu_3_baixa`, `preu_7_baixa`, `preu_3_mitja`, `preu_7_mitja`, `preu_3_alta`, `preu_7_alta`, `preu_mes_baixa`, `preu_mes_mitja`, `preu_mes_alta`) VALUES
(1, 0, 2, '130', '110', '143', '116', '156', '133', 'consultar', 'consultar', 'consultar'),
(2, 0, 4, '130', '110', '143', '116', '156', '133', 'consultar', 'consultar', 'consultar'),
(3, 0, 6, '154', '131', '169', '144', '178', '151', 'consultar', 'consultar', 'consultar'),
(4, 0, 8, '178', '151', '196', '167', '216', '183', 'consultar', 'consultar', 'consultar'),
(5, 1, 2, '82', '72', '90', '79', '98', '86', 'consultar', 'consultar', 'consultar'),
(6, 1, 4, '80', '99', '98', '86', '106', '93', 'consultar', 'consultar', 'consultar'),
(7, 2, 2, '72', '62', '80', '69', '88', '76', 'consultar', 'consultar', 'consultar'),
(8, 2, 4, '80', '69', '88', '76', '96', '83', 'consultar', 'consultar', 'consultar'),
(9, 3, 2, '72', '62', '80', '69', '88', '76', 'consultar', 'consultar', 'consultar'),
(10, 3, 4, '80', '69', '88', '76', '96', '83', 'consultar', 'consultar', 'consultar'),
(11, 4, 2, '72', '62', '80', '69', '88', '76', 'consultar', 'consultar', 'consultar'),
(12, 4, 4, '80', '69', '88', '76', '96', '83', 'consultar', 'consultar', 'consultar'),
(13, 5, 2, '72', '62', '80', '69', '88', '76', 'consultar', 'consultar', 'consultar'),
(14, 5, 4, '80', '69', '88', '76', '96', '83', 'consultar', 'consultar', 'consultar'),
(15, 6, 2, '90', '77', '100', '86', '110', '95', 'consultar', 'consultar', 'consultar'),
(16, 6, 4, '100', '86', '110', '95', '120', '104', 'consultar', 'consultar', 'consultar'),
(17, 6, 6, '110', '95', '120', '104', '130', '112', 'consultar', 'consultar', 'consultar'),
(18, 7, 2, '90', '77', '100', '86', '110', '95', 'consultar', 'consultar', 'consultar'),
(19, 7, 4, '100', '86', '110', '95', '120', '104', 'consultar', 'consultar', 'consultar'),
(20, 7, 6, '110', '95', '120', '104', '130', '112', 'consultar', 'consultar', 'consultar'),
(21, 8, 2, 'consultar', 'consultar', 'consultar', 'consultar', '-', '1000', 'consultar', 'consultar', '3500'),
(22, 8, 4, '95', '600', '125', '800', '-', '1000', 'consultar', 'consultar', '3500'),
(23, 8, 6, 'consultar', 'consultar', 'consultar', 'consultar', '-', 'consultar', 'consultar', 'consultar', 'consultar');

-- --------------------------------------------------------

--
-- Table structure for table `Reserva`
--

CREATE TABLE `Reserva` (
  `id` int(11) NOT NULL,
  `persona` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desde` datetime NOT NULL,
  `hasta` datetime NOT NULL,
  `id_apartament` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Reserva`
--

INSERT INTO `Reserva` (`id`, `persona`, `desde`, `hasta`, `id_apartament`) VALUES
(1, 'asdasd', '2013-08-01 00:00:00', '2013-08-28 00:00:00', '1'),


--
-- Indexes for dumped tables
--

--
-- Indexes for table `Detall`
--
ALTER TABLE `Detall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Oferta`
--
ALTER TABLE `Oferta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Preu`
--
ALTER TABLE `Preu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Reserva`
--
ALTER TABLE `Reserva`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Detall`
--
ALTER TABLE `Detall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Oferta`
--
ALTER TABLE `Oferta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Preu`
--
ALTER TABLE `Preu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `Reserva`
--
ALTER TABLE `Reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
