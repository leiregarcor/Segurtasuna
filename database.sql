-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 30-11-2021 a las 15:01:31
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
  `Fitxategia` varchar(500) DEFAULT NULL,
  `ErabLDAP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Apunte`
--

INSERT INTO `Apunte` (`Id`, `IgotzeData`, `Irakasgaia`, `Gradua`, `Kurtsoa`, `Fitxategia`, `ErabLDAP`) VALUES
(1, '2021-11-30', 'DEA', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1ZvEJpM8IYijT4Eq4QAOoP3qsnVYWU4q7&export=download', 961005),
(3, '2021-10-19', 'Mecanica de fluidos', 'Ingenieritza Mekanikoa', 2, 'link00', 961005),
(4, '2021-10-19', 'Mecanica de fluidos', 'Ingenieritza Mekanikoa', 2, 'link01', 961005),
(8, '2021-11-02', 'KIS', 'Ingenieritza Mekanikoa', 5, 'LINK7', 953988),
(9, '2021-11-02', 'EA', 'Ingenieritza Mekanikoa', 5, 'linketo', 953985),
(10, '2021-11-02', 'SI', 'Ingenieritza Mekanikoa', 5, 'linketo', 953989),
(11, '2021-11-03', 'LKSA', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1RocaWbrogWonFGgiJCSBr7xxf9n8NAEF&export=downloadlink', 953985),
(12, '2021-11-03', 'SI', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1tV8Z1659L1MNWmMX1AKKuPH4WJtIU4Y3&export=download', 953985),
(13, '2021-11-03', 'SEO', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1G6NpA6RaCLV3bxNzdxPg1l0h-hy4-6ps&export=download', 654321),
(14, '2021-11-04', 'KSO', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1jZnhhPZD76bx3rpwfdpWEAZtkLBv-SdQ&export=download', 961005),
(15, '2021-11-04', 'IO', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1kt5XhDmD1nXC4s-Ivod9-4C4ENFq5Pz1&export=download', 961005),
(16, '2021-11-04', 'DB', 'Ingenieritza informatikoa', 2, 'https://drive.google.com/uc?id=1zrlhes5FwvQjcNu1EVOJqYg1AXBoYmUG&export=download', 961005),
(17, '2021-11-04', 'Mate diskretua', 'Ingenieritza informatikoa', 1, 'https://drive.google.com/uc?id=1cJHstZSy2NcyvxcYq4lnVsyi5vGMfRis&export=download', 961005),
(18, '2021-11-04', 'Materialak', 'Ingenieritza Industriala', 2, 'https://i.ytimg.com/vi/UO2EAfB6pTE/maxresdefault.jpg', 953986),
(19, '2021-11-04', 'Elektronikaren oinarriak', 'Ingenieritza Industriala', 1, 'https://www.youtube.com/watch?v=T5xzmkz87v0', 953986),
(21, '2021-11-04', 'Elektronikaren oinarriak', 'Ingenieritza Elektronikoa', 1, 'https://www.youtube.com/watch?v=T5xzmkz87v0', 953987);

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
(123446, '827ccb0eea8a706c4c34a16891f84e7b', 'Luna', 'San Jose', '16102928F', 987654321, 'l@gmail.com', '2021-11-30', 'Ingenieritza Industriala'),
(123457, '202cb962ac59075b964b07152d234b70', 'Bernar', 'Garcia', '16049111X', 987654321, 'b@gmail.cm', '2021-10-25', 'Ingenieritza Elektronikoa'),
(234162, '900150983cd24fb0d6963f7d28e17f72', 'Aitor', 'Heras', '11916226H', 987351712, 'a@gmail.com', '2021-11-09', 'Ingenieritza informatikoa'),
(654321, 'e648d51fc787008ebe1c88498ef8b18c', 'Juan Carlos', 'San Jose', '11916226H', 660045513, 'jotacex1@gmail.com', '2021-11-02', 'Ingenieritza informatikoa'),
(953985, '32d064da8114739ce7ba481b78a8f868', 'Leire', 'Garcia', '16102927Y', 660688416, 'leiregarciaupv@gmail.com', '2001-04-30', 'Ingenieritza informatikoa'),
(953986, '202cb962ac59075b964b07152d234b70', 'Ane', 'Martinez', '79135423J', 987654321, 'ane@gmail.com', '2021-10-25', 'Ingenieritza Industriala'),
(953987, '32d064da8114739ce7ba481b78a8f868', 'Aner', 'Lopez', '79269379V', 987654321, 'aner@gmail.com', '2019-10-28', 'Ingenieritza Elektronikoa'),
(953988, '202cb962ac59075b964b07152d234b70', 'Clara', 'Campoamor', '45950218J', 987654321, 'amor@gmail.com', '2021-10-28', 'Ingenieritza Industriala'),
(953989, '202cb962ac59075b964b07152d234b70', 'Leire', 'Gonzalez', '16103278N', 987654321, 'lei@gmail.com', '2019-09-10', 'Ingenieritza Mekanikoa'),
(953990, '202cb962ac59075b964b07152d234b70', 'Jon', 'Snow', '78995188D', 987654321, 'snow@gmail.com', '2017-08-31', 'Ingenieritza Elektronikoa'),
(961005, 'c893bad68927b457dbed39460e6afd62', 'Aitor', 'San José', '45893403P', 688875743, 'aitorsanjoseheras@gmail.com', '2001-01-28', 'Ingenieritza informatikoa');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
