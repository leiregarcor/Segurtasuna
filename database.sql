-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 18-12-2021 a las 09:56:19
-- Versión del servidor: 10.6.5-MariaDB-1:10.6.5+maria~focal
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Apunte`
--

CREATE TABLE `Apunte` (
  `Id` int(11) NOT NULL,
  `IgotzeData` date DEFAULT NULL,
  `Irakasgaia` varchar(45) DEFAULT NULL,
  `Gradua` varchar(45) DEFAULT NULL,
  `Kurtsoa` int(11) DEFAULT NULL,
  `Fitxategia` varchar(500) DEFAULT NULL,
  `ErabLDAP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Apunte`
--

INSERT INTO `Apunte` (`Id`, `IgotzeData`, `Irakasgaia`, `Gradua`, `Kurtsoa`, `Fitxategia`, `ErabLDAP`) VALUES
(1, '2021-12-09', 'DEA', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1ZvEJpM8IYijT4Eq4QAOoP3qsnVYWU4q7&export=download', 961005),
(3, '2021-10-19', 'Mecanica de fluidos', 'Ingenieritza Mekanikoa', 2, 'link00', 756423),
(4, '2021-10-19', 'Mecanica de fluidos', 'Ingenieritza Mekanikoa', 2, 'link01', 756423),
(8, '2021-11-02', 'KIS', 'Ingenieritza Mekanikoa', 5, 'LINK7', 756423),
(9, '2021-11-02', 'EA', 'Ingenieritza Mekanikoa', 5, 'linketo', 756423),
(10, '2021-11-02', 'SI', 'Ingenieritza Mekanikoa', 5, 'linketo', 756423),
(11, '2021-11-03', 'LKSA', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1RocaWbrogWonFGgiJCSBr7xxf9n8NAEF&export=downloadlink', 911222),
(12, '2021-11-03', 'SI', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1tV8Z1659L1MNWmMX1AKKuPH4WJtIU4Y3&export=download', 911222),
(13, '2021-11-03', 'SEO', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1G6NpA6RaCLV3bxNzdxPg1l0h-hy4-6ps&export=download', 911222),
(14, '2021-11-04', 'KSO', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1jZnhhPZD76bx3rpwfdpWEAZtkLBv-SdQ&export=download', 961005),
(15, '2021-11-04', 'IO', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1kt5XhDmD1nXC4s-Ivod9-4C4ENFq5Pz1&export=download', 961005),
(16, '2021-11-04', 'DB', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1zrlhes5FwvQjcNu1EVOJqYg1AXBoYmUG&export=download', 961005),
(17, '2021-11-04', 'Mate diskretua', 'Ingenieritza informatikoa', 1, 'https://drive.google.com/uc?id=1cJHstZSy2NcyvxcYq4lnVsyi5vGMfRis&export=download', 961005),
(18, '2021-11-04', 'Materialak', 'Ingenieritza Industriala', 2, 'https://i.ytimg.com/vi/UO2EAfB6pTE/maxresdefault.jpg', 235198),
(19, '2021-11-04', 'Elektronikaren oinarriak', 'Ingenieritza Industriala', 1, 'https://www.youtube.com/watch?v=T5xzmkz87v0', 235198),
(21, '2021-11-04', 'Elektronikaren oinarriak', 'Ingenieritza Elektronikoa', 1, 'https://www.youtube.com/watch?v=T5xzmkz87v0', 911222);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Erabiltzaile`
--

CREATE TABLE `Erabiltzaile` (
  `LDAP` int(11) NOT NULL,
  `Pasahitza` varchar(200) DEFAULT NULL,
  `Izena` varchar(45) DEFAULT NULL,
  `Abizena` varchar(45) DEFAULT NULL,
  `NAN` varchar(9) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Mail` varchar(45) DEFAULT NULL,
  `JaioData` date DEFAULT NULL,
  `Gradua` varchar(45) DEFAULT NULL,
  `BankuKontu` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Erabiltzaile`
--

INSERT INTO `Erabiltzaile` (`LDAP`, `Pasahitza`, `Izena`, `Abizena`, `NAN`, `Telefono`, `Mail`, `JaioData`, `Gradua`, `BankuKontu`) VALUES
(235198, '$2y$10$ANbiwsKBsF.IN04Ok1itqeXtclrlQWqUKuXXtKprNUBf60EK0tQdu', 'Enzo', 'Fernandez', '09876542C', 657834292, 'enzofernandez@gmail.com', '2021-12-08', 'Ingenieritza Industriala', 'DAasSzDZFYOILq4qxFOLR/DBS9QrOaWqDa6RUQLvOsg='),
(756423, '$2y$10$bkxznTXdVMA179WmmACROOQwX19.Y9O40tpODfpurx7vIg2256rWm', 'Ander', 'Prieto', '11916226H', 948576321, 'anderpri@gmail.com', '2021-12-12', 'Ingenieritza Mekanikoa', 'E4vSvRfeVuYzMK0GW+gWY8mXc2oPY1Ldd+vHCfpiHlQ='),
(900000, '$2y$10$zUP2y3bsIJJYa/ImQ.RR.eWzWxYyLLtAbvPLSRXpudJ/renF2eKCC', 'Unai', 'Gonzalez', '11223344B', 999999999, 'example@gmail.com', '2021-12-02', 'Ingenieritza informatikoa', 'v/fQZzGdjbTh5+DyXNauREKeKjhbwfe2TbYcxNx2Ftg='),
(911222, '$2y$10$Ho9PCZrGhZ2tV7VeEEaoLu3JBPYkC41xgO9Wf4pPg3OpfU6pwHnLS', 'Jon', 'Blanco', '45950218J', 987351712, 'example@gmail.com', '2021-12-03', 'Ingenieritza Elektronikoa', '0'),
(961005, '$2y$10$eQ5jxDL.WQaMvuCeb6qZb.5NMpeJnj2pUyjsAgnN7YYAhRWolhPFa', 'Aitor', 'San José', '45893403P', 688875743, 'aitorsanjoseheras@gmail.com', '2001-01-28', 'Ingenieritza informatikoa', '/7jdD3ZrA4PUdmUtcroerHBX7y/5apqRwQ4maGYiKSA=');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Logging`
--

CREATE TABLE `Logging` (
  `ErabId` int(11) NOT NULL,
  `DataOrdua` datetime NOT NULL,
  `Arrakastatsua` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Logging`
--

INSERT INTO `Logging` (`ErabId`, `DataOrdua`, `Arrakastatsua`) VALUES
(961005, '2021-12-18 09:47:51', 0),
(961005, '2021-12-18 09:49:17', 0),
(961005, '2021-12-18 09:50:51', 0),
(961005, '2021-12-18 09:51:01', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Apunte`
--
ALTER TABLE `Apunte`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ErabLDAP` (`ErabLDAP`);

--
-- Indices de la tabla `Erabiltzaile`
--
ALTER TABLE `Erabiltzaile`
  ADD PRIMARY KEY (`LDAP`);

--
-- Indices de la tabla `Logging`
--
ALTER TABLE `Logging`
  ADD PRIMARY KEY (`ErabId`,`DataOrdua`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Apunte`
--
ALTER TABLE `Apunte`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Apunte`
--
ALTER TABLE `Apunte`
  ADD CONSTRAINT `Apunte_ibfk_1` FOREIGN KEY (`ErabLDAP`) REFERENCES `Erabiltzaile` (`LDAP`);

--
-- Filtros para la tabla `Logging`
--
ALTER TABLE `Logging`
  ADD CONSTRAINT `Logging_ibfk_1` FOREIGN KEY (`ErabId`) REFERENCES `Erabiltzaile` (`LDAP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
