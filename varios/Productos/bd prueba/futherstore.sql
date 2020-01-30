-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2019 a las 19:55:17
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `idcar` int(11) NOT NULL,
  `idpro1` char(18) NOT NULL,
  `idcli1` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `idciu` char(3) NOT NULL,
  `iddpto1` char(3) NOT NULL,
  `nomciu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcli` char(11) NOT NULL,
  `idtide1` char(4) NOT NULL,
  `nomcli` varchar(30) NOT NULL,
  `apecli` varchar(30) DEFAULT NULL,
  `gencli` char(2) NOT NULL,
  `fnaccli` date DEFAULT NULL,
  `dircli` varchar(40) DEFAULT NULL,
  `telcli` char(15) DEFAULT NULL,
  `emacli` char(200) DEFAULT NULL,
  `idciu2` char(3) NOT NULL,
  `rolcli` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventa`
--

CREATE TABLE `detalleventa` (
  `idfact1` char(11) NOT NULL,
  `idpro1` char(18) NOT NULL,
  `dvecan` double(12,2) NOT NULL,
  `dveiva` double(12,2) NOT NULL,
  `dvesiva` double(12,2) NOT NULL,
  `dvepde` double(12,2) NOT NULL,
  `dvetde` double(12,2) NOT NULL,
  `dvetot` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `idfact` char(11) NOT NULL,
  `idtdoc1` char(4) NOT NULL,
  `fecfact` date NOT NULL,
  `idcli1` char(11) NOT NULL,
  `idrfa1` char(15) NOT NULL,
  `idemp1` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineaproducto`
--

CREATE TABLE `lineaproducto` (
  `idlpro` char(11) NOT NULL,
  `deslpr` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idpro` char(18) NOT NULL,
  `idslpro1` char(11) NOT NULL,
  `despro` varchar(70) DEFAULT NULL,
  `vlrpro` double(12,2) DEFAULT NULL,
  `cancompro1` int(11) DEFAULT NULL,
  `canpro` double(12,2) DEFAULT NULL,
  `ivapro` double(2,2) DEFAULT NULL,
  `idprov1` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idprov` char(11) NOT NULL,
  `nomprov` varchar(70) NOT NULL,
  `idciu1` char(3) NOT NULL,
  `dirprov` varchar(40) NOT NULL,
  `telprov` char(15) DEFAULT NULL,
  `emaprov` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `idrop` char(8) NOT NULL,
  `idemp2` char(11) NOT NULL,
  `fecrop` date NOT NULL,
  `motrep` varchar(80) DEFAULT NULL,
  `desrep` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resolucionfactura`
--

CREATE TABLE `resolucionfactura` (
  `idrfa` char(15) NOT NULL,
  `fecrfa` date DEFAULT NULL,
  `numinirfa` char(20) DEFAULT NULL,
  `numfinrfa` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sublineadeproducto`
--

CREATE TABLE `sublineadeproducto` (
  `idslpro` char(11) NOT NULL,
  `idlpro1` char(11) NOT NULL,
  `desslpro` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `idtipdoc` char(4) NOT NULL,
  `destipdoc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoidentificacion`
--

CREATE TABLE `tipoidentificacion` (
  `idtide` char(4) NOT NULL,
  `destide` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`idcar`),
  ADD KEY `idpro1` (`idpro1`),
  ADD KEY `idcli1` (`idcli1`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`idciu`,`iddpto1`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcli`,`idtide1`),
  ADD KEY `idtide1` (`idtide1`),
  ADD KEY `idciu2` (`idciu2`);

--
-- Indices de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD PRIMARY KEY (`idfact1`,`idpro1`),
  ADD KEY `idpro1` (`idpro1`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idfact`,`idtdoc1`),
  ADD KEY `idtdoc1` (`idtdoc1`),
  ADD KEY `idcli1` (`idcli1`),
  ADD KEY `idrfa1` (`idrfa1`);

--
-- Indices de la tabla `lineaproducto`
--
ALTER TABLE `lineaproducto`
  ADD PRIMARY KEY (`idlpro`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idpro`,`idslpro1`),
  ADD KEY `idslpro1` (`idslpro1`),
  ADD KEY `idprov1` (`idprov1`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idprov`),
  ADD KEY `idciu1` (`idciu1`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`idrop`,`idemp2`);

--
-- Indices de la tabla `resolucionfactura`
--
ALTER TABLE `resolucionfactura`
  ADD PRIMARY KEY (`idrfa`);

--
-- Indices de la tabla `sublineadeproducto`
--
ALTER TABLE `sublineadeproducto`
  ADD PRIMARY KEY (`idslpro`,`idlpro1`),
  ADD KEY `idlpro1` (`idlpro1`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`idtipdoc`);

--
-- Indices de la tabla `tipoidentificacion`
--
ALTER TABLE `tipoidentificacion`
  ADD PRIMARY KEY (`idtide`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`idpro1`) REFERENCES `producto` (`idpro`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`idcli1`) REFERENCES `cliente` (`idcli`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idtide1`) REFERENCES `tipoidentificacion` (`idtide`),
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`idciu2`) REFERENCES `ciudad` (`idciu`);

--
-- Filtros para la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD CONSTRAINT `detalleventa_ibfk_1` FOREIGN KEY (`idfact1`) REFERENCES `factura` (`idfact`),
  ADD CONSTRAINT `detalleventa_ibfk_2` FOREIGN KEY (`idpro1`) REFERENCES `producto` (`idpro`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`idtdoc1`) REFERENCES `tipodocumento` (`idtipdoc`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`idcli1`) REFERENCES `cliente` (`idcli`),
  ADD CONSTRAINT `factura_ibfk_3` FOREIGN KEY (`idrfa1`) REFERENCES `resolucionfactura` (`idrfa`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`idslpro1`) REFERENCES `sublineadeproducto` (`idslpro`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`idprov1`) REFERENCES `proveedor` (`idprov`);

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `proveedor_ibfk_1` FOREIGN KEY (`idciu1`) REFERENCES `ciudad` (`idciu`);

--
-- Filtros para la tabla `sublineadeproducto`
--
ALTER TABLE `sublineadeproducto`
  ADD CONSTRAINT `sublineadeproducto_ibfk_1` FOREIGN KEY (`idlpro1`) REFERENCES `lineaproducto` (`idlpro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
