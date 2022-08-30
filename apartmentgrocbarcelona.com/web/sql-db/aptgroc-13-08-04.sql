CREATE TABLE IF NOT EXISTS 'Preu' (
  'id' int(11) NOT NULL,
  'preu' int(11) NOT NULL,
  PRIMARY KEY ('id')
);

INSERT INTO 'Preu' ('id', 'preu') VALUES
(0, 60),
(1, 10),
(2, 20),
(3, 80),
(4, 60),
(5, 90),
(6, 60),
(7, 120),
(8, 60);

CREATE TABLE IF NOT EXISTS 'Reserva' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'persona' varchar(255) NOT NULL,
  'desde' datetime NOT NULL,
  'hasta' datetime NOT NULL,
  'id_apartament' varchar(255) NOT NULL,
  PRIMARY KEY ('id')
);

INSERT INTO 'Reserva' ('id', 'persona', 'desde', 'hasta', 'id_apartament') VALUES
(1, 'asdasd', '2013-08-01 00:00:00', '2013-08-28 00:00:00', '1'),
(5, 'asasd', '2013-08-05 00:00:00', '2013-08-11 00:00:00', '2'),
(6, 'asdda', '2013-08-10 00:00:00', '2013-08-20 00:00:00', '3'),
(7, '342', '2013-08-12 00:00:00', '2013-08-15 00:00:00', '4'),
(8, '', '2013-08-19 00:00:00', '2013-08-23 00:00:00', '5'),
(13, 'Hola', '2013-08-08 20:44:29', '2013-08-16 20:44:29', '0'),
(14, 'Adeu', '2013-08-21 20:44:36', '2013-08-22 20:44:36', '0'),
(15, 'ASDQW', '2013-08-08 20:57:27', '2013-08-10 20:57:27', '0'),
(16, '', '2013-08-08 20:58:44', '2013-08-10 20:58:44', '3');
