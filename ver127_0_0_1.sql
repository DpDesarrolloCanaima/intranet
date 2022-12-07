-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2022 a las 03:53:37
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbs`
--
CREATE DATABASE IF NOT EXISTS `bbs` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bbs`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `ID_AREA` int(11) NOT NULL,
  `AREA` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`ID_AREA`, `AREA`) VALUES
(1, 'Recursos Humanos'),
(2, 'Informatica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gender`
--

CREATE TABLE `gender` (
  `ID` int(11) NOT NULL,
  `GENDER` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gender`
--

INSERT INTO `gender` (`ID`, `GENDER`) VALUES
(1, 'Hombre'),
(2, 'Mujer'),
(3, 'No binario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `tipo` text NOT NULL,
  `contenido` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `level`
--

CREATE TABLE `level` (
  `ID_LEVEL` int(11) NOT NULL,
  `LEVEL` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `level`
--

INSERT INTO `level` (`ID_LEVEL`, `LEVEL`) VALUES
(1, 'Urgente'),
(2, 'Alta'),
(3, 'Normal'),
(4, 'Baja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `TIPO` int(11) NOT NULL,
  `TIPO_USUARIOS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`TIPO`, `TIPO_USUARIOS`) VALUES
(1, 'habilitado'),
(2, 'deshabilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos`
--

CREATE TABLE `recursos` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `cedula` text NOT NULL,
  `solicitud` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `recursos`
--

INSERT INTO `recursos` (`id`, `nombre`, `apellido`, `cedula`, `solicitud`) VALUES
(9, 'Deibel', 'Virguez', '27954640', 'a'),
(15, 'Deibel', 'Virguez', '27954640', 'asasa'),
(16, 'Deibel', 'Virguez', '27954640', 'asasas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `report`
--

CREATE TABLE `report` (
  `ID_REPORT` tinyint(11) NOT NULL,
  `TITLE` varchar(30) NOT NULL,
  `User_send` int(11) NOT NULL,
  `ID_NAME` int(50) DEFAULT NULL,
  `DESCRIPTION` varchar(50) NOT NULL,
  `CREATION_DATE` date NOT NULL,
  `DATE_FINAL` date DEFAULT NULL,
  `STATUS` int(11) NOT NULL,
  `ID_LEVEL` int(11) NOT NULL,
  `SOLUTION` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `report`
--

INSERT INTO `report` (`ID_REPORT`, `TITLE`, `User_send`, `ID_NAME`, `DESCRIPTION`, `CREATION_DATE`, `DATE_FINAL`, `STATUS`, `ID_LEVEL`, `SOLUTION`) VALUES
(14, 'asasa', 35, 43, 'asasassa', '2022-11-01', '2022-11-16', 3, 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `IDROLS` int(11) NOT NULL,
  `PRIVILEGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`IDROLS`, `PRIVILEGE`) VALUES
(1, 'SUPER-ADMINISTRADOR'),
(2, 'USUARIO'),
(3, 'TECNICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `ID_STATUS` int(11) NOT NULL,
  `STATUS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`ID_STATUS`, `STATUS`) VALUES
(1, 'Activo'),
(2, 'Cerrado'),
(3, 'En espera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_datos`
--

CREATE TABLE `user_datos` (
  `IDDATOS` int(11) NOT NULL,
  `NAME` text NOT NULL,
  `CEDULA` varchar(11) NOT NULL,
  `SURNAME` text NOT NULL,
  `GENDER` int(11) NOT NULL,
  `USER` text NOT NULL,
  `PASSWORD` text NOT NULL,
  `EMAIL` text NOT NULL,
  `IDROLS` int(11) NOT NULL,
  `LOGIN` int(11) NOT NULL,
  `ASSIGNED_AREA` int(11) NOT NULL,
  `PASSWORD_ID` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_datos`
--

INSERT INTO `user_datos` (`IDDATOS`, `NAME`, `CEDULA`, `SURNAME`, `GENDER`, `USER`, `PASSWORD`, `EMAIL`, `IDROLS`, `LOGIN`, `ASSIGNED_AREA`, `PASSWORD_ID`) VALUES
(35, 'Deibel', '27954640', 'Virguez', 1, 'dvirguez', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'correo@correo.com', 1, 1, 1, NULL),
(43, 'Jose', '10381774', 'Ab', 1, 'ctorrez', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'CORREO@CORREO.COM', 2, 1, 1, NULL),
(78, 'Deibel', '2030450', 'Torrez', 1, 'dvirguezs', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'correo@correo.com', 2, 1, 1, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`ID_AREA`);

--
-- Indices de la tabla `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`ID_LEVEL`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD KEY `TIPO` (`TIPO`);

--
-- Indices de la tabla `recursos`
--
ALTER TABLE `recursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`ID_REPORT`),
  ADD KEY `User_send` (`User_send`),
  ADD KEY `ID_NAME` (`ID_NAME`) USING BTREE,
  ADD KEY `ID_LEVEL` (`ID_LEVEL`) USING BTREE,
  ADD KEY `STATUS` (`STATUS`) USING BTREE;

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`IDROLS`) USING BTREE;

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID_STATUS`);

--
-- Indices de la tabla `user_datos`
--
ALTER TABLE `user_datos`
  ADD PRIMARY KEY (`IDDATOS`),
  ADD KEY `NAME` (`NAME`(1024)),
  ADD KEY `ASSIGNED_AREA` (`ASSIGNED_AREA`),
  ADD KEY `ID-ROLS` (`IDROLS`) USING BTREE,
  ADD KEY `LOGIN` (`LOGIN`),
  ADD KEY `GENDER` (`GENDER`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `ID_AREA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `level`
--
ALTER TABLE `level`
  MODIFY `ID_LEVEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `recursos`
--
ALTER TABLE `recursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `report`
--
ALTER TABLE `report`
  MODIFY `ID_REPORT` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `IDROLS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `ID_STATUS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user_datos`
--
ALTER TABLE `user_datos`
  MODIFY `IDDATOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`ID_NAME`) REFERENCES `user_datos` (`IDDATOS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`ID_LEVEL`) REFERENCES `level` (`ID_LEVEL`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_3` FOREIGN KEY (`STATUS`) REFERENCES `status` (`ID_STATUS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_4` FOREIGN KEY (`User_send`) REFERENCES `user_datos` (`IDDATOS`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `user_datos`
--
ALTER TABLE `user_datos`
  ADD CONSTRAINT `ASSIGNED_AREA` FOREIGN KEY (`ASSIGNED_AREA`) REFERENCES `area` (`ID_AREA`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `IDROLS` FOREIGN KEY (`IDROLS`) REFERENCES `rols` (`IDROLS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `LOGIN` FOREIGN KEY (`LOGIN`) REFERENCES `login` (`TIPO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_datos_ibfk_1` FOREIGN KEY (`GENDER`) REFERENCES `gender` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
