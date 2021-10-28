-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 19-10-2021 a las 13:47:50
-- Versión del servidor: 10.6.4-MariaDB-1:10.6.4+maria~focal
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
  `Fitxategia` varchar(45) DEFAULT NULL,
  `ErabLDAP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Apunte`
--

INSERT INTO `Apunte` (`Id`, `IgotzeData`, `Irakasgaia`, `Gradua`, `Kurtsoa`, `Fitxategia`, `ErabLDAP`) VALUES
(1, '2021-10-19', 'DEA', 'Ingenieritza informatikoa', 2, 'link', 953985),
(2, '2021-10-18', 'SEO', 'Ingenieritza informatikoa', 2, 'link0', 953985),
(3, '2021-10-19', 'Mecanica de fluidos', 'Ingenieritza Mekanikoa', 2, 'link00', 961005),
(4, '2021-10-19', 'Mecanica de fluidos', 'Ingenieritza Mekanikoa', 2, 'link01', 961005);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Erabiltzaile`
--

CREATE TABLE `Erabiltzaile` (
  `LDAP` int(11) NOT NULL,
  `Pasahitza` varchar(45) DEFAULT NULL,
  `Izena` varchar(45) DEFAULT NULL,
  `Abizena` varchar(45) DEFAULT NULL,
  `NAN` varchar(9) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Mail` varchar(45) DEFAULT NULL,
  `JaioData` date DEFAULT NULL,
  `Gradua` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Erabiltzaile`
--

INSERT INTO `Erabiltzaile` (`LDAP`, `Pasahitza`, `Izena`, `Abizena`, `NAN`, `Telefono`, `Mail`, `JaioData`, `Gradua`) VALUES
(953985, 'cualquiera', 'Leire', 'Garcia', '16102927Y', 660688416, 'leiregarciaupv@gmail.com', '2001-04-30', 'Informatika'),
(961005, 'prueba', 'Aitor', 'San José', '45893403P', 688875743, 'aitorsanjoseheras@gmail.com', '2001-01-28', 'Informatika');

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
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Apunte`
--
ALTER TABLE `Apunte`
  ADD CONSTRAINT `Apunte_ibfk_1` FOREIGN KEY (`ErabLDAP`) REFERENCES `Erabiltzaile` (`LDAP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
