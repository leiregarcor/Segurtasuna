-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 02-11-2021 a las 20:37:35
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
(4, '2021-10-19', 'Mecanica de fluidos', 'Ingenieritza Mekanikoa', 2, 'link01', 961005),
(7, '2021-11-02', 'EA', 'Ingenieritza Mekanikoa', 4, 'link001', 123456),
(8, '2021-11-02', 'KIS', 'Ingenieritza Mekanikoa', 5, 'LINK7', 953988),
(9, '2021-11-02', 'EA', 'Ingenieritza Mekanikoa', 5, 'linketo', 953985),
(10, '2021-11-02', 'SI', 'Ingenieritza Mekanikoa', 5, 'linketo', 953989);

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
(123456, '1234', 'Kerman', 'San', '11111111e', 987654321, 'kerman@gmail.com', '2001-10-29', 'Ingenieritza Mekanikoa'),
(953985, 'cualquiera', 'Leire', 'Garcia', '16102927Y', 660688416, 'leiregarciaupv@gmail.com', '2001-04-30', 'Ingenieritza informatikoa'),
(953986, '123', 'Ane', 'Martinez', '79135423J', 987654321, 'ane@gmail.com', '2021-10-25', 'Ingenieritza Industriala'),
(953987, 'cualquiera', 'Aner', 'Lopez', '79269379V', 987654321, 'aner@gmail.com', '2019-10-28', 'Ingenieritza Elektronikoa'),
(953988, '123', 'Clara', 'Campoamor', '45950218J', 987654321, 'amor@gmail.com', '2021-10-28', 'Ingenieritza Industriala'),
(953989, '123', 'Leire', 'Gonzalez', '16103278N', 987654321, 'lei@gmail.com', '2019-09-10', 'Ingenieritza Mekanikoa'),
(953990, '123', 'Jon', 'Snow', '78995188D', 987654321, 'snow@gmail.com', '2017-08-31', 'Ingenieritza Elektronikoa'),
(961005, 'prueba', 'Aitor', 'San José', '45893403P', 688875743, 'aitorsanjoseheras@gmail.com', '2001-01-28', 'Ingenieritza informatikoa');

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Apunte`
--
ALTER TABLE `Apunte`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
