-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 10-12-2021 a las 10:57:46
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
(1, '2021-11-30', 'DEA', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1ZvEJpM8IYijT4Eq4QAOoP3qsnVYWU4q7&export=download', 961005),
(11, '2021-11-03', 'LKSA', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1RocaWbrogWonFGgiJCSBr7xxf9n8NAEF&export=downloadlink', 953985),
(12, '2021-11-03', 'SI', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1tV8Z1659L1MNWmMX1AKKuPH4WJtIU4Y3&export=download', 953985),
(14, '2021-11-04', 'KSO', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1jZnhhPZD76bx3rpwfdpWEAZtkLBv-SdQ&export=download', 961005),
(15, '2021-11-04', 'IO', 'Ingenieritza Mekanikoa', 2, 'https://drive.google.com/uc?id=1kt5XhDmD1nXC4s-Ivod9-4C4ENFq5Pz1&export=download', 953989),
(16, '2021-11-04', 'DB', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1zrlhes5FwvQjcNu1EVOJqYg1AXBoYmUG&export=download', 961005),
(17, '2021-11-04', 'Mate diskretua', 'Ingenieritza informatikoa', 1, 'https://drive.google.com/uc?id=1cJHstZSy2NcyvxcYq4lnVsyi5vGMfRis&export=download', 961005),
(18, '2021-11-04', 'Materialak', 'Ingenieritza Industriala', 2, 'https://i.ytimg.com/vi/UO2EAfB6pTE/maxresdefault.jpg', 953986),
(19, '2021-11-04', 'Elektronikaren oinarriakII', 'Ingenieritza Elektronikoa', 2, 'https://www.youtube.com/watch?v=T5xzmkz87v0', 953986),
(21, '2021-11-04', 'Elektronikaren oinarriak', 'Ingenieritza Elektronikoa', 1, 'https://www.youtube.com/watch?v=T5xzmkz87v0', 953987),
(22, '2021-11-04', 'materialak', 'Ingenieritza Mekanikoa', 3, 'https://drive.google.com/uc?id=1kt5XhDmD1nXC4s-Ivod9-4C4ENFq5Pz1&export=download', 961005);

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
  `Gradua` varchar(45) DEFAULT NULL,
  `BankuZenb` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Erabiltzaile`
--

INSERT INTO `Erabiltzaile` (`LDAP`, `Pasahitza`, `Izena`, `Abizena`, `NAN`, `Telefono`, `Mail`, `JaioData`, `Gradua`, `BankuZenb`) VALUES
(953985, '32d064da8114739ce7ba481b78a8f868', 'Leire', 'Garcia', '16102927Y', 660688416, 'leiregarciaupv@gmail.com', '2001-04-30', 'Ingenieritza informatikoa', 0),
(953986, '202cb962ac59075b964b07152d234b70', 'Ane', 'Martinez', '79135423J', 987654321, 'ane@gmail.com', '2021-10-25', 'Ingenieritza Industriala', 0),
(953987, '32d064da8114739ce7ba481b78a8f868', 'Aner', 'Lopez', '79269379V', 987654321, 'aner@gmail.com', '2019-10-28', 'Ingenieritza Elektronikoa', 0),
(953989, '202cb962ac59075b964b07152d234b70', 'Leire', 'Gonzalez', '16103278N', 987654321, 'lei@gmail.com', '2019-09-10', 'Ingenieritza Mekanikoa', 0),
(961005, 'c893bad68927b457dbed39460e6afd62', 'Aitor', 'San José', '45893403P', 688875743, 'aitorsanjoseheras@gmail.com', '2001-01-28', 'Ingenieritza informatikoa', 0);

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
