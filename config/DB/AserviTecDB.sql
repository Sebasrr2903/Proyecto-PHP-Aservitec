-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 25-03-2023 a las 06:18:30
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aservitecdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cantones`
--

CREATE TABLE `cantones` (
  `Canton_ID` int(11) NOT NULL,
  `Nombre` varchar(60) DEFAULT NULL,
  `Provincia_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distritos`
--

CREATE TABLE `distritos` (
  `Distrito_ID` int(11) NOT NULL,
  `Nombre` varchar(60) DEFAULT NULL,
  `Canton_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `Provincia_ID` int(11) NOT NULL,
  `Nombre` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `Rol_ID` int(11) NOT NULL,
  `Nombre` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`Rol_ID`, `Nombre`) VALUES
(1, 'administrador'),
(2, 'Colaborador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_identificacion`
--

CREATE TABLE `tipo_identificacion` (
  `Tipo_Identificacion_ID` int(11) NOT NULL,
  `Tipo` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Usuario_ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Rol_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Usuario_ID`, `username`, `password`, `Rol_ID`) VALUES
(1, 'Administrador', '$2y$10$jKYhoMKwVfYdxUzc5W7Ke.Ikft.7RRyyJKFYSeVi2nkN9.DKqknFC', 1),
(2, 'Colaborador', '$2y$10$jKYhoMKwVfYdxUzc5W7Ke.Ikft.7RRyyJKFYSeVi2nkN9.DKqknFC', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `datos_usuario`(
	`Identificacion` VARCHAR(15) NOT NULL,
  `Tipo_Identificacion_ID` INT NOT NULL,
	`Nombre` VARCHAR(100) NOT NULL,
  `Correo` VARCHAR(20) NOT NULL,
  `Telefono` VARCHAR(15) NOT NULL,
	`Provincia_ID` INT NOT NULL,
	`Canton_ID` INT NOT NULL,
  `Distrito_ID` INT NOT NULL,
	`Direccion_Exacta` VARCHAR(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cantones`
--
ALTER TABLE `cantones`
  ADD PRIMARY KEY (`Canton_ID`),
  ADD KEY `FK_Provincia` (`Provincia_ID`);

--
-- Indices de la tabla `distritos`
--
ALTER TABLE `distritos`
  ADD PRIMARY KEY (`Distrito_ID`),
  ADD KEY `FK_Canton` (`Canton_ID`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`Provincia_ID`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Rol_ID`);

--
-- Indices de la tabla `tipo_identificacion`
--
ALTER TABLE `tipo_identificacion`
  ADD PRIMARY KEY (`Tipo_Identificacion_ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Usuario_ID`),
  ADD KEY `FK_Rol` (`Rol_ID`);
  
--
-- Indices de la tabla `datos_usuario`
--
ALTER TABLE `datos_usuario`
  ADD PRIMARY KEY (`Identificacion`),
  ADD KEY `FK_TipoId` (`Tipo_Identificacion_ID`),
  ADD KEY `FK_Provincia_u` (`Provincia_ID`),
  ADD KEY `FK_Canton_u` (`Canton_ID`),
  ADD KEY `FK_Distrito_u` (`Distrito_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cantones`
--
ALTER TABLE `cantones`
  MODIFY `Canton_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `distritos`
--
ALTER TABLE `distritos`
  MODIFY `Distrito_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `Provincia_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `Rol_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_identificacion`
--
ALTER TABLE `tipo_identificacion`
  MODIFY `Tipo_Identificacion_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Usuario_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cantones`
--
ALTER TABLE `cantones`
  ADD CONSTRAINT `FK_Provincia` FOREIGN KEY (`Provincia_ID`) REFERENCES `provincias` (`Provincia_ID`);

--
-- Filtros para la tabla `distritos`
--
ALTER TABLE `distritos`
  ADD CONSTRAINT `FK_Canton` FOREIGN KEY (`Canton_ID`) REFERENCES `cantones` (`Canton_ID`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FK_Rol` FOREIGN KEY (`Rol_ID`) REFERENCES `roles` (`Rol_ID`);

--
-- Filtros para la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuario`
  ADD CONSTRAINT `FK_TipoId` FOREIGN KEY (`Tipo_Identificacion_ID`) REFERENCES `tipo_identificacion` (`Tipo_Identificacion_ID`),
  ADD CONSTRAINT `FK_Provincia_u` FOREIGN KEY (`Provincia_ID`) REFERENCES `provincias` (`Provincia_ID`),
  ADD CONSTRAINT `FK_Canton_u` FOREIGN KEY (`Canton_ID`) REFERENCES `cantones` (`Canton_ID`),
  ADD CONSTRAINT `FK_Distrito_u` FOREIGN KEY (`Distrito_ID`) REFERENCES `distritos` (`Distrito_ID`);
COMMIT;

--
-- Volcado de datos para la tabla `tipo_identificacion`
--

INSERT INTO `tipo_identificacion`(`Tipo`) VALUES
('Cedula de identificación'),('Identificación extranjera');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
