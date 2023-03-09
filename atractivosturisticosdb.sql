-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2023 a las 18:09:44
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `atractivosturisticosdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesibilidad`
--

CREATE TABLE `accesibilidad` (
  `idaccesibilidad` int(11) NOT NULL,
  `poblado` varchar(45) DEFAULT NULL,
  `distancia` varchar(15) DEFAULT NULL,
  `desplazamiento` varchar(15) DEFAULT NULL,
  `latitud` varchar(45) DEFAULT NULL,
  `longitud` varchar(45) DEFAULT NULL,
  `modalidadacceso` varchar(45) DEFAULT NULL,
  `tipoacceso` varchar(45) DEFAULT NULL,
  `tipovia` varchar(150) DEFAULT NULL,
  `estadovia` varchar(45) DEFAULT NULL,
  `cooperativa` varchar(255) DEFAULT NULL,
  `terminal` varchar(255) DEFAULT NULL,
  `frecuencia` varchar(45) DEFAULT NULL,
  `detalletraslado` varchar(150) DEFAULT NULL,
  `accesibilidad` varchar(15) DEFAULT NULL,
  `senializacion` varchar(15) DEFAULT NULL,
  `estadosenial` varchar(15) DEFAULT NULL,
  `observacion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `accesibilidad`
--

INSERT INTO `accesibilidad` (`idaccesibilidad`, `poblado`, `distancia`, `desplazamiento`, `latitud`, `longitud`, `modalidadacceso`, `tipoacceso`, `tipovia`, `estadovia`, `cooperativa`, `terminal`, `frecuencia`, `detalletraslado`, `accesibilidad`, `senializacion`, `estadosenial`, `observacion`) VALUES
(2, 'Loja2', '12', '2', '1.212', '2.1212', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'Ninguno', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atractivo`
--

CREATE TABLE `atractivo` (
  `idatractivo` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `parroquia_idparroquia` int(11) NOT NULL,
  `barrio` varchar(100) DEFAULT NULL,
  `calle` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `transversal` varchar(45) DEFAULT NULL,
  `latitud` varchar(45) DEFAULT NULL,
  `longitud` varchar(45) DEFAULT NULL,
  `altura` varchar(45) DEFAULT NULL,
  `tipoAdmin` varchar(45) DEFAULT NULL,
  `nombreAdmin` varchar(150) DEFAULT NULL,
  `nombreInstitucion` varchar(150) DEFAULT NULL,
  `cargoAdmin` varchar(45) DEFAULT NULL,
  `telefonoAdmin` varchar(45) DEFAULT NULL,
  `correoAdmin` varchar(50) DEFAULT NULL,
  `subtipo_idsubtipo` int(11) NOT NULL,
  `caracteristicas_idcaracteristicas` int(11) DEFAULT NULL,
  `accesibilidad_idaccesibilidad` int(11) DEFAULT NULL,
  `turistica_idturistica` int(11) DEFAULT NULL,
  `conservacion_idconservacion` int(11) DEFAULT NULL,
  `higiene_id1` int(11) DEFAULT NULL,
  `politica_idpolitica` int(11) DEFAULT NULL,
  `promocion_idpromocion` int(11) DEFAULT NULL,
  `datosAtractivo_iddatosAtractivo` int(11) DEFAULT NULL,
  `recursoshumanos_idrecursoshumanos` int(11) DEFAULT NULL,
  `visitante_idvisitante` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `atractivo`
--

INSERT INTO `atractivo` (`idatractivo`, `nombre`, `parroquia_idparroquia`, `barrio`, `calle`, `numero`, `transversal`, `latitud`, `longitud`, `altura`, `tipoAdmin`, `nombreAdmin`, `nombreInstitucion`, `cargoAdmin`, `telefonoAdmin`, `correoAdmin`, `subtipo_idsubtipo`, `caracteristicas_idcaracteristicas`, `accesibilidad_idaccesibilidad`, `turistica_idturistica`, `conservacion_idconservacion`, `higiene_id1`, `politica_idpolitica`, `promocion_idpromocion`, `datosAtractivo_iddatosAtractivo`, `recursoshumanos_idrecursoshumanos`, `visitante_idvisitante`) VALUES
(1, 'El Valle1', 1, 'Trapichillo', 'Av. Catamayo3', '123', 'NA', '3.212', '3.1212', '1800', 'Genrecia', 'Edy Roa', 'Agua Mania3', 'Gerente', '099999', 'edy@gmail.com3', 1, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Prueba', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 2, 3, 4, 2, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canton`
--

CREATE TABLE `canton` (
  `idcanton` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `provincia_idprovincia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `canton`
--

INSERT INTO `canton` (`idcanton`, `nombre`, `provincia_idprovincia`) VALUES
(1, 'Loja', 1),
(2, 'Quito', 2),
(3, 'Quito', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas`
--

CREATE TABLE `caracteristicas` (
  `idcaracteristicas` int(11) NOT NULL,
  `clima` varchar(45) DEFAULT NULL,
  `temperatura` varchar(15) DEFAULT NULL,
  `precipitacion` varchar(45) DEFAULT NULL,
  `lineaPertenece` varchar(45) DEFAULT NULL,
  `escenario` varchar(45) DEFAULT NULL,
  `tipoIngreso` varchar(25) DEFAULT NULL,
  `horarios` varchar(45) DEFAULT NULL,
  `diasAtencion` varchar(45) DEFAULT NULL,
  `reservas` varchar(5) DEFAULT NULL,
  `precios` varchar(45) DEFAULT NULL,
  `formaPagos` varchar(45) DEFAULT NULL,
  `recomendacionTiempo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `caracteristicas`
--

INSERT INTO `caracteristicas` (`idcaracteristicas`, `clima`, `temperatura`, `precipitacion`, `lineaPertenece`, `escenario`, `tipoIngreso`, `horarios`, `diasAtencion`, `reservas`, `precios`, `formaPagos`, `recomendacionTiempo`) VALUES
(1, '12', '', '', '2', '', '', '', '', '', '', '', ''),
(2, 'Templado', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`) VALUES
(1, 'Atractivos Naturales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conservacion`
--

CREATE TABLE `conservacion` (
  `idconservacion` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `factores` varchar(255) DEFAULT NULL,
  `factores2` varchar(255) DEFAULT NULL,
  `estadocon` varchar(45) DEFAULT NULL,
  `factores3` varchar(255) DEFAULT NULL,
  `factores4` varchar(255) DEFAULT NULL,
  `declaratoria` varchar(5) DEFAULT NULL,
  `declarante` varchar(5) DEFAULT NULL,
  `denominacion` varchar(5) DEFAULT NULL,
  `fechadeclaratoria` varchar(45) DEFAULT NULL,
  `alcance` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `conservacion`
--

INSERT INTO `conservacion` (`idconservacion`, `estado`, `factores`, `factores2`, `estadocon`, `factores3`, `factores4`, `declaratoria`, `declarante`, `denominacion`, `fechadeclaratoria`, `alcance`) VALUES
(2, 'Alterado', 'Clima, flora y fauna, desastres naturales', 'Actividaes agrícolas', 'Conservado', 'Clima', 'Actividades Extractivas', 'Si', 'Si', 'Si', '2023-03-10', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosatractivo`
--

CREATE TABLE `datosatractivo` (
  `iddatosAtractivo` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `imagen` varchar(105) DEFAULT NULL,
  `objetivos` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `higiene`
--

CREATE TABLE `higiene` (
  `id` int(11) NOT NULL,
  `servicios` varchar(45) DEFAULT NULL,
  `servicios2` varchar(45) DEFAULT NULL,
  `servicios3` varchar(45) DEFAULT NULL,
  `servicios4` varchar(45) DEFAULT NULL,
  `servicios5` varchar(45) DEFAULT NULL,
  `servicios6` varchar(45) DEFAULT NULL,
  `servicios7` varchar(45) DEFAULT NULL,
  `sercicios8` varchar(45) DEFAULT NULL,
  `senialetica1` varchar(255) DEFAULT NULL,
  `senialetica2` varchar(255) DEFAULT NULL,
  `senialetica3` varchar(255) DEFAULT NULL,
  `senialetica4` varchar(255) DEFAULT NULL,
  `salud1` varchar(255) DEFAULT NULL,
  `salud2` varchar(255) DEFAULT NULL,
  `seguridad` varchar(255) DEFAULT NULL,
  `comunicacion` varchar(45) DEFAULT NULL,
  `comunicacion2` varchar(45) DEFAULT NULL,
  `comunicacion3` varchar(45) DEFAULT NULL,
  `comunicacion4` varchar(45) DEFAULT NULL,
  `comunicacion5` varchar(45) DEFAULT NULL,
  `amenaza` varchar(255) DEFAULT NULL,
  `contingencia` varchar(5) DEFAULT NULL,
  `autorcntingencia` varchar(45) DEFAULT NULL,
  `nombrecontingencia` varchar(45) DEFAULT NULL,
  `fechacontingencia` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parroquia`
--

CREATE TABLE `parroquia` (
  `idparroquia` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `canton_idcanton` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `parroquia`
--

INSERT INTO `parroquia` (`idparroquia`, `nombre`, `canton_idcanton`) VALUES
(1, 'Sucre', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politica`
--

CREATE TABLE `politica` (
  `idpolitica` int(11) NOT NULL,
  `pregunta1` varchar(5) DEFAULT NULL,
  `fecha` varchar(15) DEFAULT NULL,
  `planificacion` varchar(5) DEFAULT NULL,
  `normativas` varchar(155) DEFAULT NULL,
  `ordenanzas` varchar(255) DEFAULT NULL,
  `actividades1` varchar(255) DEFAULT NULL,
  `actividades2` varchar(255) DEFAULT NULL,
  `actividades3` varchar(255) DEFAULT NULL,
  `actividades4` varchar(255) DEFAULT NULL,
  `politicacol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `idpromocion` int(11) NOT NULL,
  `promocion` varchar(5) DEFAULT NULL,
  `plancantonal` varchar(5) DEFAULT NULL,
  `medios` varchar(255) DEFAULT NULL,
  `direccionmedios` varchar(255) DEFAULT NULL,
  `periodicidad` varchar(45) DEFAULT NULL,
  `paquete` varchar(5) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `idprovincia` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`idprovincia`, `nombre`) VALUES
(1, 'Loja'),
(2, 'Pichincha');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursoshumanos`
--

CREATE TABLE `recursoshumanos` (
  `idrecursoshumanos` int(11) NOT NULL,
  `numero1` varchar(5) DEFAULT NULL,
  `numero2` varchar(5) DEFAULT NULL,
  `numero3` varchar(5) DEFAULT NULL,
  `numero4` varchar(5) DEFAULT NULL,
  `numero5` varchar(5) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subtipo`
--

CREATE TABLE `subtipo` (
  `idsubtipo` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `tipo_idtipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `subtipo`
--

INSERT INTO `subtipo` (`idsubtipo`, `nombre`, `tipo_idtipo`) VALUES
(1, 'Boqueron', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `idtipo` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `categoria_idcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`idtipo`, `nombre`, `categoria_idcategoria`) VALUES
(2, 'Rios', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turistica`
--

CREATE TABLE `turistica` (
  `idturistica` int(11) NOT NULL,
  `planta` varchar(10) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `numalojamiento` varchar(10) DEFAULT NULL,
  `numHabitaciones` varchar(10) NOT NULL,
  `numplazas` varchar(10) NOT NULL,
  `tipoalimentos` varchar(255) NOT NULL,
  `numalimentos` varchar(10) NOT NULL,
  `nummesas` varchar(10) NOT NULL,
  `numplazasalim` varchar(10) NOT NULL,
  `tipoagencia` varchar(100) NOT NULL,
  `numagencias` varchar(10) NOT NULL,
  `tipoaloja` varchar(255) NOT NULL,
  `establecimiento` varchar(10) NOT NULL,
  `numhabitacionespueblo` varchar(10) NOT NULL,
  `plazascercano` varchar(10) NOT NULL,
  `tipoestablecicercano` varchar(255) NOT NULL,
  `estaalimencerca` varchar(10) NOT NULL,
  `nummesascerca` varchar(10) NOT NULL,
  `nummesascerca2` varchar(10) NOT NULL,
  `tipoagen2` varchar(250) NOT NULL,
  `numagen2` varchar(10) NOT NULL,
  `catafacilidad` varchar(100) NOT NULL,
  `catafacilidad2` varchar(100) NOT NULL,
  `cantidacatfacilidad` varchar(10) NOT NULL,
  `lat1` varchar(10) NOT NULL,
  `long1` varchar(10) NOT NULL,
  `admin` varchar(200) NOT NULL,
  `acceuniver` varchar(10) NOT NULL,
  `estadofacilidad` varchar(50) NOT NULL,
  `complementarios1` varchar(200) NOT NULL,
  `complementarios2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `turistica`
--

INSERT INTO `turistica` (`idturistica`, `planta`, `tipo`, `numalojamiento`, `numHabitaciones`, `numplazas`, `tipoalimentos`, `numalimentos`, `nummesas`, `numplazasalim`, `tipoagencia`, `numagencias`, `tipoaloja`, `establecimiento`, `numhabitacionespueblo`, `plazascercano`, `tipoestablecicercano`, `estaalimencerca`, `nummesascerca`, `nummesascerca2`, `tipoagen2`, `numagen2`, `catafacilidad`, `catafacilidad2`, `cantidacatfacilidad`, `lat1`, `long1`, `admin`, `acceuniver`, `estadofacilidad`, `complementarios1`, `complementarios2`) VALUES
(4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(150) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `rol` varchar(10) NOT NULL,
  `ex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `correo`, `clave`, `rol`, `ex`) VALUES
(6, 'Administrador del sistema', 'Admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1', ''),
(7, 'Jenny Patricia', 'Maza Estrada', 'jpmaza@utpl.edu.ec', '827ccb0eea8a706c4c34a16891f84e7b', '1', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitante`
--

CREATE TABLE `visitante` (
  `idvisitante` int(11) NOT NULL,
  `registro` varchar(5) DEFAULT NULL,
  `tiporegistro` varchar(45) DEFAULT NULL,
  `aniosregistro` varchar(45) DEFAULT NULL,
  `reportes` varchar(5) DEFAULT NULL,
  `frecuenciareportes` varchar(45) DEFAULT NULL,
  `temporada` varchar(150) DEFAULT NULL,
  `ciudadesvisitas` varchar(255) DEFAULT NULL,
  `nacionales` varchar(45) DEFAULT NULL,
  `nacionales2` varchar(45) DEFAULT NULL,
  `paisvisita` varchar(255) DEFAULT NULL,
  `internacionales` varchar(45) DEFAULT NULL,
  `internacionales2` varchar(45) DEFAULT NULL,
  `informante` varchar(155) DEFAULT NULL,
  `contactoinformante` varchar(45) DEFAULT NULL,
  `demanda1` varchar(45) DEFAULT NULL,
  `demanda2` varchar(45) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesibilidad`
--
ALTER TABLE `accesibilidad`
  ADD PRIMARY KEY (`idaccesibilidad`);

--
-- Indices de la tabla `atractivo`
--
ALTER TABLE `atractivo`
  ADD PRIMARY KEY (`idatractivo`,`parroquia_idparroquia`,`subtipo_idsubtipo`),
  ADD KEY `fk_atractivo_parroquia1_idx` (`parroquia_idparroquia`),
  ADD KEY `fk_atractivo_subtipo1_idx` (`subtipo_idsubtipo`),
  ADD KEY `fk_atractivo_caracteristicas1_idx` (`caracteristicas_idcaracteristicas`),
  ADD KEY `fk_atractivo_accesibilidad1_idx` (`accesibilidad_idaccesibilidad`),
  ADD KEY `fk_atractivo_turistica1_idx` (`turistica_idturistica`),
  ADD KEY `fk_atractivo_conservacion1_idx` (`conservacion_idconservacion`),
  ADD KEY `fk_atractivo_higiene2_idx` (`higiene_id1`),
  ADD KEY `fk_atractivo_politica1_idx` (`politica_idpolitica`),
  ADD KEY `fk_atractivo_promocion1_idx` (`promocion_idpromocion`),
  ADD KEY `fk_atractivo_datosAtractivo1_idx` (`datosAtractivo_iddatosAtractivo`),
  ADD KEY `fk_atractivo_recursoshumanos1_idx` (`recursoshumanos_idrecursoshumanos`),
  ADD KEY `fk_atractivo_visitante1_idx` (`visitante_idvisitante`);

--
-- Indices de la tabla `canton`
--
ALTER TABLE `canton`
  ADD PRIMARY KEY (`idcanton`,`provincia_idprovincia`),
  ADD KEY `fk_canton_provincia1_idx` (`provincia_idprovincia`);

--
-- Indices de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`idcaracteristicas`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `conservacion`
--
ALTER TABLE `conservacion`
  ADD PRIMARY KEY (`idconservacion`);

--
-- Indices de la tabla `datosatractivo`
--
ALTER TABLE `datosatractivo`
  ADD PRIMARY KEY (`iddatosAtractivo`);

--
-- Indices de la tabla `higiene`
--
ALTER TABLE `higiene`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parroquia`
--
ALTER TABLE `parroquia`
  ADD PRIMARY KEY (`idparroquia`,`canton_idcanton`),
  ADD KEY `fk_parroquia_canton1_idx` (`canton_idcanton`);

--
-- Indices de la tabla `politica`
--
ALTER TABLE `politica`
  ADD PRIMARY KEY (`idpolitica`);

--
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD PRIMARY KEY (`idpromocion`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`idprovincia`);

--
-- Indices de la tabla `recursoshumanos`
--
ALTER TABLE `recursoshumanos`
  ADD PRIMARY KEY (`idrecursoshumanos`);

--
-- Indices de la tabla `subtipo`
--
ALTER TABLE `subtipo`
  ADD PRIMARY KEY (`idsubtipo`),
  ADD KEY `fk_subtipo_tipo_idx` (`tipo_idtipo`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idtipo`,`categoria_idcategoria`),
  ADD KEY `fk_tipo_categoria1_idx` (`categoria_idcategoria`);

--
-- Indices de la tabla `turistica`
--
ALTER TABLE `turistica`
  ADD PRIMARY KEY (`idturistica`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `visitante`
--
ALTER TABLE `visitante`
  ADD PRIMARY KEY (`idvisitante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesibilidad`
--
ALTER TABLE `accesibilidad`
  MODIFY `idaccesibilidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `atractivo`
--
ALTER TABLE `atractivo`
  MODIFY `idatractivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `canton`
--
ALTER TABLE `canton`
  MODIFY `idcanton` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `idcaracteristicas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `conservacion`
--
ALTER TABLE `conservacion`
  MODIFY `idconservacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `datosatractivo`
--
ALTER TABLE `datosatractivo`
  MODIFY `iddatosAtractivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `higiene`
--
ALTER TABLE `higiene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `parroquia`
--
ALTER TABLE `parroquia`
  MODIFY `idparroquia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `politica`
--
ALTER TABLE `politica`
  MODIFY `idpolitica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `idpromocion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `idprovincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `recursoshumanos`
--
ALTER TABLE `recursoshumanos`
  MODIFY `idrecursoshumanos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subtipo`
--
ALTER TABLE `subtipo`
  MODIFY `idsubtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `turistica`
--
ALTER TABLE `turistica`
  MODIFY `idturistica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `visitante`
--
ALTER TABLE `visitante`
  MODIFY `idvisitante` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `atractivo`
--
ALTER TABLE `atractivo`
  ADD CONSTRAINT `fk_atractivo_accesibilidad1` FOREIGN KEY (`accesibilidad_idaccesibilidad`) REFERENCES `accesibilidad` (`idaccesibilidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_atractivo_caracteristicas1` FOREIGN KEY (`caracteristicas_idcaracteristicas`) REFERENCES `caracteristicas` (`idcaracteristicas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_atractivo_conservacion1` FOREIGN KEY (`conservacion_idconservacion`) REFERENCES `conservacion` (`idconservacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_atractivo_datosAtractivo1` FOREIGN KEY (`datosAtractivo_iddatosAtractivo`) REFERENCES `datosatractivo` (`iddatosAtractivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_atractivo_higiene2` FOREIGN KEY (`higiene_id1`) REFERENCES `higiene` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_atractivo_parroquia1` FOREIGN KEY (`parroquia_idparroquia`) REFERENCES `parroquia` (`idparroquia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_atractivo_politica1` FOREIGN KEY (`politica_idpolitica`) REFERENCES `politica` (`idpolitica`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_atractivo_promocion1` FOREIGN KEY (`promocion_idpromocion`) REFERENCES `promocion` (`idpromocion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_atractivo_recursoshumanos1` FOREIGN KEY (`recursoshumanos_idrecursoshumanos`) REFERENCES `recursoshumanos` (`idrecursoshumanos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_atractivo_subtipo1` FOREIGN KEY (`subtipo_idsubtipo`) REFERENCES `subtipo` (`idsubtipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_atractivo_turistica1` FOREIGN KEY (`turistica_idturistica`) REFERENCES `turistica` (`idturistica`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_atractivo_visitante1` FOREIGN KEY (`visitante_idvisitante`) REFERENCES `visitante` (`idvisitante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `canton`
--
ALTER TABLE `canton`
  ADD CONSTRAINT `fk_canton_provincia1` FOREIGN KEY (`provincia_idprovincia`) REFERENCES `provincia` (`idprovincia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `parroquia`
--
ALTER TABLE `parroquia`
  ADD CONSTRAINT `fk_parroquia_canton1` FOREIGN KEY (`canton_idcanton`) REFERENCES `canton` (`idcanton`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `subtipo`
--
ALTER TABLE `subtipo`
  ADD CONSTRAINT `fk_subtipo_tipo` FOREIGN KEY (`tipo_idtipo`) REFERENCES `tipo` (`idtipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD CONSTRAINT `fk_tipo_categoria1` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
