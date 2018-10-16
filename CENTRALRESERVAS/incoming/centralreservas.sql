-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2018 a las 10:09:40
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `centralreservas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casasrurales`
--

CREATE TABLE `casasrurales` (
  `id` int(11) NOT NULL,
  `REF` varchar(25) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `NOMBRERECINTO` varchar(45) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `DIRECCION` varchar(128) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `CIUDAD` varchar(25) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `CORREORECINTO` varchar(45) NOT NULL,
  `DESCRIPCION` varchar(250) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `PRECIOHABITUAL` float NOT NULL,
  `NOMBRECORTO` varchar(32) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `FECHAINICIOPUBLICACION` date NOT NULL,
  `FECHAFINALPUBLICACION` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `casasrurales`
--

INSERT INTO `casasrurales` (`id`, `REF`, `NOMBRERECINTO`, `DIRECCION`, `CIUDAD`, `CORREORECINTO`, `DESCRIPCION`, `PRECIOHABITUAL`, `NOMBRECORTO`, `FECHAINICIOPUBLICACION`, `FECHAFINALPUBLICACION`) VALUES
(1, '1', 'Casa Rural Las Escuelas', 'Calle la piedra s/n', 'Vadocones', 'recepcion@casarurallasecuelas.com', 'Casa rural en plena plaza mayor de vadocondes y al lado de la bodega del siglo XIX.', 30, 'Las Escuelas', '2018-05-04', '2019-06-27'),
(2, '2', 'El Molino', 'Calle Molino 3', 'Castrillo de la vega', 'elmolino@elmolino.es', 'Casa rural construida en un antiguo molino de piedra.', 30, 'El Molino', '2018-04-12', '2019-06-28'),
(3, '3', 'Casa Rural Las Lavanderas', 'Calle Valladolid n 4', 'Vadocondes', 'recepcion@laslavanderas.es', 'Casa rural acogedora, con un gran patio y balneario anexo.', 40, 'Las Lavanderas', '2018-04-18', '2019-08-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `NOMBRE` varchar(40) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `CORREOELECTRONICO` varchar(40) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `CONTRASENA` varchar(15) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `APELLIDOS` varchar(40) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `TELEFONO` varchar(15) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `DNI` varchar(12) NOT NULL,
  `DIRECCION` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `RUTA` varchar(40) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `DESCRIPCION` varchar(250) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `IDCASA` int(11) NOT NULL,
  `EXTENSION` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `RUTA`, `DESCRIPCION`, `IDCASA`, `EXTENSION`) VALUES
(1, 'casa11', 'Exterior de la puerta principal.\r\n', 1, 'jpg'),
(2, 'casa12', 'Interior de la casa rural', 1, 'jpg'),
(3, 'casa13', 'Patio de la casa rural', 1, 'jpg'),
(4, 'casa21', 'Exterior de la casa rural', 2, 'jpg'),
(5, 'casa22', 'Interior casa rural', 2, 'jpg'),
(6, 'casa23', 'Patio casa rural', 2, 'jpg'),
(7, 'casa31', 'Exterior casa rural', 3, 'jpg'),
(8, 'casa32', 'Interior casa rural', 3, 'jpg'),
(9, 'casa33', 'Patio casa rural', 3, 'jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `id` int(11) NOT NULL,
  `PRECIO` float NOT NULL,
  `DIAINICIO` date NOT NULL,
  `DIAFIN` date NOT NULL,
  `MOTIVOOFERTA` varchar(250) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `IDCASA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`id`, `PRECIO`, `DIAINICIO`, `DIAFIN`, `MOTIVOOFERTA`, `IDCASA`) VALUES
(1, 25, '2018-06-12', '2018-06-15', NULL, 1),
(2, 15, '2018-05-12', '2018-05-14', 'Puente de mayo', 1),
(3, 15, '2018-05-26', '2018-05-29', 'Puente de mayo', 1),
(4, 15, '2018-07-04', '2018-07-07', 'Fiestas Valladolid', 1),
(5, 10, '2018-07-10', '2018-07-14', NULL, 2),
(6, 5, '2018-08-01', '2018-08-04', 'Fiestas del pueblo', 2),
(7, 5, '2018-10-18', '2018-10-20', NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservascliente`
--

CREATE TABLE `reservascliente` (
  `id` int(11) NOT NULL,
  `CODIGOTRANSACCION` varchar(25) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `ESTADOTRANSACCION` int(11) NOT NULL,
  `ESTADORESERVA` int(11) NOT NULL,
  `IDCLIENTE` int(11) NOT NULL,
  `IDCASARURAL` int(11) NOT NULL,
  `FECHAINICIO` date NOT NULL,
  `FECHAFINAL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `casasrurales`
--
ALTER TABLE `casasrurales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idxcorreo` (`CORREOELECTRONICO`),
  ADD UNIQUE KEY `DNI` (`DNI`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDCASA` (`IDCASA`);

--
-- Indices de la tabla `precios`
--
ALTER TABLE `precios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `IDCASA_2` (`IDCASA`,`DIAINICIO`),
  ADD KEY `IDCASA` (`IDCASA`);

--
-- Indices de la tabla `reservascliente`
--
ALTER TABLE `reservascliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `IDCLIENTE_2` (`IDCLIENTE`,`IDCASARURAL`,`FECHAINICIO`),
  ADD KEY `IDCASARURAL` (`IDCASARURAL`),
  ADD KEY `IDCLIENTE` (`IDCLIENTE`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `casasrurales`
--
ALTER TABLE `casasrurales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `reservascliente`
--
ALTER TABLE `reservascliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`IDCASA`) REFERENCES `casasrurales` (`id`);

--
-- Filtros para la tabla `precios`
--
ALTER TABLE `precios`
  ADD CONSTRAINT `precios_ibfk_1` FOREIGN KEY (`IDCASA`) REFERENCES `casasrurales` (`id`);

--
-- Filtros para la tabla `reservascliente`
--
ALTER TABLE `reservascliente`
  ADD CONSTRAINT `reservascliente_ibfk_1` FOREIGN KEY (`IDCASARURAL`) REFERENCES `casasrurales` (`id`),
  ADD CONSTRAINT `reservascliente_ibfk_2` FOREIGN KEY (`IDCLIENTE`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
