-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2022 a las 00:39:17
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quiniela_mundial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(120) COLLATE utf8_spanish_ci NOT NULL COMMENT 'nombre del admin',
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL COMMENT 'correo admin',
  `password` varchar(180) COLLATE utf8_spanish_ci NOT NULL COMMENT 'contraseña',
  `estado` varchar(1) COLLATE utf8_spanish_ci NOT NULL COMMENT 'estado si es Activo o Inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`ID`, `nombre`, `correo`, `password`, `estado`) VALUES
(1, 'Byron Roman', 'bromanc1@miumg.edu.gt', 'Hoyesviernes*1852', 'A'),
(2, 'Coralia Cuellar', 'ccuellard@miumg.edu.gt', 'Sabadodeentrega*1853', 'A'),
(3, 'Prueba De Datos', 'prueba@gmail.com', 'Holamundo*0622', 'A'),
(4, 'Prueba Numero 4', 'prueba4@gmial.com', 'Hoyeslaentrega*0725', 'A'),
(5, 'Prueba Numero 40 Actualizar Que paja porque mañana dice en el documento que es la entrega y entonces', 'prueba40@gmial.com', 'Hoyeslaentrega*0759', 'A'),
(6, 'Prueba Numero 6 Actualizar', 'prueba6@gmial.com', 'Hoyeslaentrega*0755', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(180) DEFAULT NULL,
  `VALOR` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`ID`, `NOMBRE`, `VALOR`) VALUES
(1, 'QUINIELA_MUNDIAL', 'QUINIELA MUNDIAL 2022');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estructuras`
--

CREATE TABLE `estructuras` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estructuras`
--

INSERT INTO `estructuras` (`ID`, `NOMBRE`) VALUES
(1, 'grupos'),
(2, 'octavos'),
(3, 'cuartos'),
(4, 'semifinales'),
(5, 'tercer puesto'),
(6, 'final');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `ID` int(11) NOT NULL,
  `CODIGO` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`ID`, `CODIGO`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E'),
(6, 'F'),
(7, 'G'),
(8, 'H');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `ID` int(11) NOT NULL,
  `ESTRUCTURA` int(11) NOT NULL,
  `FECHA` datetime NOT NULL,
  `UBICACION` int(11) NOT NULL,
  `JUGADOR_1` int(11) DEFAULT 99,
  `JUGADOR_2` int(11) DEFAULT 99,
  `GOLES_1` int(11) DEFAULT NULL,
  `GOLES_2` int(11) DEFAULT NULL,
  `SELECCION_1` varchar(50) DEFAULT NULL,
  `SELECCION_2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(40) DEFAULT NULL,
  `ISO` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`ID`, `NOMBRE`, `ISO`) VALUES
(1, 'QATAR', 'QAT'),
(2, 'ECUADOR', 'ECU'),
(3, 'SENEGAL', 'SEN'),
(4, 'HOLANDA', 'NED'),
(5, 'INGLATERRA', 'ENG'),
(6, 'IRAN', 'IRN'),
(7, 'EE.UU.', 'USA'),
(8, 'GALES', 'SCO'),
(9, 'ARGENTINA', 'ARG'),
(10, 'ARABIA SAUDITA', 'KSA'),
(11, 'MEXICO', 'MEX'),
(12, 'POLONIA', 'POL'),
(13, 'FRANCIA', 'FRA'),
(14, 'AUSTRALIA', 'AUS'),
(15, 'DINAMARCA', 'DEN'),
(16, 'TUNEZ', 'TUN'),
(17, 'ESPAÑA', 'ESP'),
(18, 'COSTA RICA', 'CRC'),
(19, 'ALEMANIA', 'GER'),
(20, 'JAPON', 'JPN'),
(21, 'BELGICA', 'BEL'),
(22, 'CANADA', 'CAN'),
(23, 'MARRUECOS', 'MAR'),
(24, 'CROACIA', 'CRO'),
(25, 'BRASIL', 'BRA'),
(26, 'SERBIA', 'SRB'),
(27, 'SUIZA', 'SUI'),
(28, 'CAMERUN', 'CMR'),
(29, 'PORTUGAL', 'POR'),
(30, 'GHANA', 'GHA'),
(31, 'URUGUAY', 'URU'),
(32, 'COREA DEL SUR', 'KOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises_grupos`
--

CREATE TABLE `paises_grupos` (
  `ID` int(11) NOT NULL,
  `PAIS` int(11) NOT NULL,
  `GRUPO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paises_grupos`
--

INSERT INTO `paises_grupos` (`ID`, `PAIS`, `GRUPO`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 2),
(6, 6, 2),
(7, 7, 2),
(8, 8, 2),
(9, 9, 3),
(10, 10, 3),
(11, 11, 3),
(12, 12, 3),
(13, 13, 4),
(14, 14, 4),
(15, 15, 4),
(16, 16, 4),
(17, 17, 5),
(18, 18, 5),
(19, 19, 5),
(20, 20, 5),
(21, 21, 6),
(22, 22, 6),
(23, 23, 6),
(24, 24, 6),
(25, 25, 7),
(26, 26, 7),
(27, 27, 7),
(28, 28, 7),
(29, 29, 8),
(30, 30, 8),
(31, 31, 8),
(32, 32, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quinielas`
--

CREATE TABLE `quinielas` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(60) DEFAULT NULL,
  `TIPO_DE_QUINIELA` int(11) DEFAULT NULL,
  `DESCRIPCION` varchar(180) DEFAULT NULL,
  `CREADO_POR` int(11) NOT NULL,
  `FECHA_DE_CREACION` date DEFAULT NULL,
  `CODIGO_COMPARTIR` varchar(12) NOT NULL,
  `GANADOR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quiniela_invitaciones`
--

CREATE TABLE `quiniela_invitaciones` (
  `ID` int(11) NOT NULL,
  `USUARIO` int(11) NOT NULL,
  `QUINIELA` int(11) NOT NULL,
  `FECHA_DE_CREACION` date DEFAULT NULL,
  `STATUS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quiniela_predicciones`
--

CREATE TABLE `quiniela_predicciones` (
  `ID` int(11) NOT NULL,
  `JUEGO` int(11) NOT NULL,
  `QUINIELA` int(11) NOT NULL,
  `USUARIO` int(11) DEFAULT NULL,
  `GOL_1` int(11) DEFAULT NULL,
  `GOL_2` int(11) DEFAULT NULL,
  `JUEGO_1` int(11) DEFAULT 99,
  `JUEGO_2` int(11) DEFAULT 99
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quiniela_premios`
--

CREATE TABLE `quiniela_premios` (
  `ID` int(11) NOT NULL,
  `QUINIELA` int(11) DEFAULT NULL,
  `PUESTO` int(11) DEFAULT NULL,
  `PREMIO` varchar(120) DEFAULT NULL,
  `DESCRIPCION` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quiniela_tipos`
--

CREATE TABLE `quiniela_tipos` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `quiniela_tipos`
--

INSERT INTO `quiniela_tipos` (`ID`, `NOMBRE`) VALUES
(1, 'normal'),
(2, 'super');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quiniela_usuarios`
--

CREATE TABLE `quiniela_usuarios` (
  `ID` int(11) NOT NULL,
  `QUINIELA` int(11) DEFAULT NULL,
  `USUARIO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciones`
--

CREATE TABLE `ubicaciones` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(60) NOT NULL,
  `CIUDAD` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ubicaciones`
--

INSERT INTO `ubicaciones` (`ID`, `NOMBRE`, `CIUDAD`) VALUES
(1, 'AL BAYT', 'AL KHOR'),
(2, 'AL THUMAMA', 'DOHA, CATAR'),
(3, 'KHALIFA INTERNATIONAL', 'DOHA, CATAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(80) DEFAULT NULL,
  `CORREO` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD UNIQUE KEY `id` (`ID`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CONFIGURACION_ID_uindex` (`ID`);

--
-- Indices de la tabla `estructuras`
--
ALTER TABLE `estructuras`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `structure_id_uindex` (`ID`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `groups_id_uindex` (`ID`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `game_id_uindex` (`ID`),
  ADD KEY `game_structure_id_fk` (`ESTRUCTURA`),
  ADD KEY `game_locations_id_fk` (`UBICACION`),
  ADD KEY `game_countries_id_fk` (`JUGADOR_1`),
  ADD KEY `game_countries2_id_fk` (`JUGADOR_2`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `paises_grupos`
--
ALTER TABLE `paises_grupos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `quinielas`
--
ALTER TABLE `quinielas`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `quinela_id_uindex` (`ID`),
  ADD UNIQUE KEY `quinela_share_code_uindex` (`CODIGO_COMPARTIR`),
  ADD KEY `quinela_quinela_type_id_fk` (`TIPO_DE_QUINIELA`),
  ADD KEY `quinela_users_id_fk` (`CREADO_POR`),
  ADD KEY `quinela_users2__fk` (`GANADOR`);

--
-- Indices de la tabla `quiniela_invitaciones`
--
ALTER TABLE `quiniela_invitaciones`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `quinela_invitations_id_uindex` (`ID`),
  ADD KEY `quinela_invitations_quinela_id_fk` (`QUINIELA`),
  ADD KEY `quinela_invitations_users_id_fk` (`USUARIO`);

--
-- Indices de la tabla `quiniela_predicciones`
--
ALTER TABLE `quiniela_predicciones`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `quinela_predictions_id_uindex` (`ID`),
  ADD KEY `quinela_predictions_game_id_fk` (`JUEGO`),
  ADD KEY `quinela_predictions_quinela_id_fk` (`QUINIELA`),
  ADD KEY `quinela_predictions_users_id_fk` (`USUARIO`),
  ADD KEY `quinela_predictions_countries_id_fk` (`JUEGO_1`),
  ADD KEY `quinela_predictions_countries2__fk` (`JUEGO_2`);

--
-- Indices de la tabla `quiniela_premios`
--
ALTER TABLE `quiniela_premios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `quinela_award_id_uindex` (`ID`),
  ADD KEY `quinela_award_quinela_id_fk` (`QUINIELA`);

--
-- Indices de la tabla `quiniela_tipos`
--
ALTER TABLE `quiniela_tipos`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `quinela_type_id_uindex` (`ID`);

--
-- Indices de la tabla `quiniela_usuarios`
--
ALTER TABLE `quiniela_usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `quinela_users_id_uindex` (`ID`),
  ADD KEY `quinela_users_quinela_id_fk` (`QUINIELA`),
  ADD KEY `quinela_users_users_id_fk` (`USUARIO`);

--
-- Indices de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `locations_id_uindex` (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `users_id_uindex` (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estructuras`
--
ALTER TABLE `estructuras`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `paises_grupos`
--
ALTER TABLE `paises_grupos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `quinielas`
--
ALTER TABLE `quinielas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `quiniela_invitaciones`
--
ALTER TABLE `quiniela_invitaciones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `quiniela_predicciones`
--
ALTER TABLE `quiniela_predicciones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `quiniela_premios`
--
ALTER TABLE `quiniela_premios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `quiniela_tipos`
--
ALTER TABLE `quiniela_tipos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `quiniela_usuarios`
--
ALTER TABLE `quiniela_usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD CONSTRAINT `game_countries2_id_fk` FOREIGN KEY (`JUGADOR_2`) REFERENCES `paises` (`ID`),
  ADD CONSTRAINT `game_countries_id_fk` FOREIGN KEY (`JUGADOR_1`) REFERENCES `paises` (`ID`),
  ADD CONSTRAINT `game_locations_id_fk` FOREIGN KEY (`UBICACION`) REFERENCES `ubicaciones` (`ID`),
  ADD CONSTRAINT `game_structure_id_fk` FOREIGN KEY (`ESTRUCTURA`) REFERENCES `estructuras` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
