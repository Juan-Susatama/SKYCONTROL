-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2024 a las 00:39:22
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pwaeropuertobd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_vuelo_tripulacion`
--

CREATE TABLE `asignacion_vuelo_tripulacion` (
  `num_vuelo` int(11) NOT NULL,
  `cedula` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignacion_vuelo_tripulacion`
--

INSERT INTO `asignacion_vuelo_tripulacion` (`num_vuelo`, `cedula`) VALUES
(13514, 1204598754),
(13514, 2154632548),
(13514, 5462548596),
(51331, 1204598754),
(7474, 3265985421);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avion`
--

CREATE TABLE `avion` (
  `codigo` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `avion`
--

INSERT INTO `avion` (`codigo`, `tipo`) VALUES
(111, 'BOEING-747E'),
(289, 'Boeing-6'),
(341, 'Boeing-576'),
(643, ' Boeing B-17 Flying Fortress'),
(8899, 'BOEING-747');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `base`
--

CREATE TABLE `base` (
  `nombre` varchar(150) NOT NULL,
  `destino` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `base`
--

INSERT INTO `base` (`nombre`, `destino`) VALUES
('Puerto lluvia', 'Bogotá - Colombia'),
('Puerto Paris', 'Paris - Francia'),
('Puerto RedSky', 'Chicago - Estados unidos'),
('Valle azteca', 'Monterrey - Mexico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `fecha_revision` datetime NOT NULL,
  `codigoavion` int(11) NOT NULL,
  `nombrebase` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mantenimiento`
--

INSERT INTO `mantenimiento` (`fecha_revision`, `codigoavion`, `nombrebase`) VALUES
('2024-11-29 00:00:00', 643, 'Valle azteca'),
('2024-12-07 00:00:00', 341, 'Puerto lluvia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembro_tripulacion`
--

CREATE TABLE `miembro_tripulacion` (
  `cedula` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `miembro_tripulacion`
--

INSERT INTO `miembro_tripulacion` (`cedula`) VALUES
(1204598754),
(2154632548),
(3265985421),
(5462548596);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasaje`
--

CREATE TABLE `pasaje` (
  `id_pasaje` int(11) NOT NULL,
  `num_vuelo` int(11) NOT NULL,
  `cedula_persona` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pasaje`
--

INSERT INTO `pasaje` (`id_pasaje`, `num_vuelo`, `cedula_persona`) VALUES
(212, 13514, 6521458547),
(888, 7474, 6521458547);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `cedula` bigint(20) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellido` varchar(150) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `contrasenia` varchar(150) NOT NULL,
  `rol` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`cedula`, `nombre`, `apellido`, `correo`, `contrasenia`, `rol`) VALUES
(1204598754, 'Carlos Antonio ', 'Velez', 'Car932vel@gmail.com', 'velez555', 'miembro_tripulacion'),
(2147483647, 'Juan Esteban', 'Susatama Valderrama', 'juansusatama@gmail.com', '1234', 'admin'),
(2154632548, 'Valentina', 'Hernandez', 'Vassrez@gmail.com', '4568', 'miembro_tripulacion'),
(3265985421, 'Natalia ', 'Fernandez', 'Nata3444@gmail.com', '99999', 'miembro_tripulacion'),
(4514548754, 'Carlos', 'Cepeda', 'juansusa30@gmail.com', '444', 'piloto'),
(4578963254, 'David', 'Gonzalez', 'DArovidfda@gmail.com', '9876', 'piloto'),
(5462548596, 'Jairo Antonio', 'Martinez Almiron', 'Martin123@gmail.com', 'mar987', 'miembro_tripulacion'),
(6521458547, 'Maria Fernanda', 'Aguirre Pedraza', 'PEdrazafer999@gmail.com', '777', 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piloto`
--

CREATE TABLE `piloto` (
  `cedula` bigint(20) NOT NULL,
  `horas_vuelo` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `piloto`
--

INSERT INTO `piloto` (`cedula`, `horas_vuelo`) VALUES
(4578963254, 50.11),
(4514548754, 190.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regreso`
--

CREATE TABLE `regreso` (
  `cedula` bigint(20) NOT NULL,
  `nombre_base` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `regreso`
--

INSERT INTO `regreso` (`cedula`, `nombre_base`) VALUES
(4578963254, 'Puerto lluvia'),
(5462548596, 'Puerto lluvia'),
(2154632548, 'Puerto lluvia'),
(1204598754, 'Puerto lluvia'),
(4514548754, 'Valle azteca'),
(3265985421, 'Valle azteca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelo`
--

CREATE TABLE `vuelo` (
  `num_vuelo` int(11) NOT NULL,
  `origen` varchar(100) NOT NULL,
  `destino` varchar(100) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `cedula_piloto` bigint(20) NOT NULL,
  `codigo_avion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vuelo`
--

INSERT INTO `vuelo` (`num_vuelo`, `origen`, `destino`, `hora`, `fecha`, `cedula_piloto`, `codigo_avion`) VALUES
(7474, 'Medellín - Colombia', 'Tokio - Japón ', '19:30:00', '2024-12-04', 4578963254, 8899),
(13514, 'Medellín - Colombia', 'Los Ángeles - Estados Unidos', '10:00:00', '2024-11-29', 4578963254, 643),
(51331, 'Bogotá - Colombia', 'Paris - Francia', '19:30:00', '2024-12-04', 4578963254, 289);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacion_vuelo_tripulacion`
--
ALTER TABLE `asignacion_vuelo_tripulacion`
  ADD KEY `vuelo_num_vuelo_asignacion` (`num_vuelo`),
  ADD KEY `miembro_tripulacion_cedula_asignacion` (`cedula`);

--
-- Indices de la tabla `avion`
--
ALTER TABLE `avion`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `base`
--
ALTER TABLE `base`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD KEY `nombrebase` (`nombrebase`),
  ADD KEY `codigoavion` (`codigoavion`);

--
-- Indices de la tabla `miembro_tripulacion`
--
ALTER TABLE `miembro_tripulacion`
  ADD KEY `persona_cedula_miembro_tripulacion` (`cedula`);

--
-- Indices de la tabla `pasaje`
--
ALTER TABLE `pasaje`
  ADD PRIMARY KEY (`id_pasaje`),
  ADD KEY `vuelo_num_vuelo_pasaje` (`num_vuelo`),
  ADD KEY `persona_cedula_persona_pasaje` (`cedula_persona`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `piloto`
--
ALTER TABLE `piloto`
  ADD KEY `codigo` (`cedula`);

--
-- Indices de la tabla `regreso`
--
ALTER TABLE `regreso`
  ADD KEY `codigopersona` (`cedula`),
  ADD KEY `base_nombre_base_regreso` (`nombre_base`);

--
-- Indices de la tabla `vuelo`
--
ALTER TABLE `vuelo`
  ADD PRIMARY KEY (`num_vuelo`),
  ADD KEY `codigoavion` (`codigo_avion`),
  ADD KEY `codigopersona` (`cedula_piloto`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacion_vuelo_tripulacion`
--
ALTER TABLE `asignacion_vuelo_tripulacion`
  ADD CONSTRAINT `miembro_tripulacion_cedula_asignacion` FOREIGN KEY (`cedula`) REFERENCES `miembro_tripulacion` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vuelo_num_vuelo_asignacion` FOREIGN KEY (`num_vuelo`) REFERENCES `vuelo` (`num_vuelo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD CONSTRAINT `mantenimiento_ibfk_1` FOREIGN KEY (`nombrebase`) REFERENCES `base` (`nombre`),
  ADD CONSTRAINT `mantenimiento_ibfk_2` FOREIGN KEY (`codigoavion`) REFERENCES `avion` (`codigo`);

--
-- Filtros para la tabla `miembro_tripulacion`
--
ALTER TABLE `miembro_tripulacion`
  ADD CONSTRAINT `persona_cedula_miembro_tripulacion` FOREIGN KEY (`cedula`) REFERENCES `persona` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pasaje`
--
ALTER TABLE `pasaje`
  ADD CONSTRAINT `persona_cedula_persona_pasaje` FOREIGN KEY (`cedula_persona`) REFERENCES `persona` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vuelo_num_vuelo_pasaje` FOREIGN KEY (`num_vuelo`) REFERENCES `vuelo` (`num_vuelo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `piloto`
--
ALTER TABLE `piloto`
  ADD CONSTRAINT `persona_cedula_piloto` FOREIGN KEY (`cedula`) REFERENCES `persona` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `regreso`
--
ALTER TABLE `regreso`
  ADD CONSTRAINT `base_nombre_base_regreso` FOREIGN KEY (`nombre_base`) REFERENCES `base` (`nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `persona_cedula_regreso` FOREIGN KEY (`cedula`) REFERENCES `persona` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vuelo`
--
ALTER TABLE `vuelo`
  ADD CONSTRAINT `piloto_cedula_piloto_vuelo` FOREIGN KEY (`cedula_piloto`) REFERENCES `piloto` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vuelo_ibfk_1` FOREIGN KEY (`codigo_avion`) REFERENCES `avion` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
