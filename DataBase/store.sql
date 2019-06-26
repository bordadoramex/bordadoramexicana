
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- Base de datos: `bordadora`
--
CREATE DATABASE IF NOT EXISTS `bordadora` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bordadora`;

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `administrador` (
  `Nombre` varchar(30) NOT NULL,
  `Clave` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

---

INSERT INTO `administrador` (`Nombre`, `Clave`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `categoria` (
  `CodigoCat` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--

INSERT INTO `categoria` (`CodigoCat`, `Nombre`, `Descripcion`) VALUES
('C1', 'Electrodomésticos', 'Articulos de primera necesidad para el hogar'),
('C2', 'Multimedia', 'Articulos de entretenimiento y diversión'),
('C3', 'Móbiles', 'Teléfonos celulares smartphones');

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `cliente` (
  `NIT` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `NombreCompleto` varchar(70) NOT NULL,
  `Apellido` varchar(70) NOT NULL,
  `Clave` text NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Telefono` int(20) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `detalle` (
  `NumPedido` int(20) NOT NULL,
  `CodigoProd` varchar(30) NOT NULL,
  `CantidadProductos` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `producto` (
  `CodigoProd` varchar(30) NOT NULL,
  `NombreProd` varchar(30) NOT NULL,
  `CodigoCat` varchar(30) NOT NULL,
  `Precio` decimal(30,2) NOT NULL,
  `Modelo` varchar(30) NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `Stock` int(20) NOT NULL,
  `NITProveedor` varchar(30) NOT NULL,
  `Imagen` varchar(150) NOT NULL,
  `Nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `proveedor` (
  `NITProveedor` varchar(30) NOT NULL,
  `NombreProveedor` varchar(30) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Telefono` int(20) NOT NULL,
  `PaginaWeb` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--

INSERT INTO `proveedor` (`NITProveedor`, `NombreProveedor`, `Direccion`, `Telefono`, `PaginaWeb`) VALUES
('0001781', 'Sony', 'Minato, Tokio, Japón', 22596485, 'www.sony.com'),
('0001782', 'HTC', 'Taoyuan, Taiwán, (República de China)', 25987456, 'www.htc.com'),
('0001783', 'TCL', 'Huizhou, Guangdong, China', 25698745, 'tcl.com.ar'),
('0001785', 'Samsung', 'Samsung Town, Seúl, Corea del Sur', 22504787, 'www.samsung.com'),
('0001787', 'LG', 'Seúl,Corea del Sur', 26589874, 'www.lg.com'),
('0001788', 'Compaq', 'Houston, Texas, EE.UU', 24569875, 'www.compaq.com');

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `venta` (
`NumPedido` int(20) NOT NULL,
  `Fecha` varchar(150) NOT NULL,
  `NIT` varchar(30) NOT NULL,
  `Descuento` int(20) NOT NULL,
  `TotalPagar` decimal(30,2) NOT NULL,
  `Estado` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
ALTER TABLE `administrador`
 ADD PRIMARY KEY (`Nombre`);

--

ALTER TABLE `categoria`
 ADD PRIMARY KEY (`CodigoCat`);

--

ALTER TABLE `cliente`
 ADD PRIMARY KEY (`NIT`);

--

ALTER TABLE `detalle`
 ADD KEY `NumPedido` (`NumPedido`), ADD KEY `CodigoProd` (`CodigoProd`);

--

ALTER TABLE `producto`
 ADD PRIMARY KEY (`CodigoProd`), ADD KEY `CodigoCat` (`CodigoCat`), ADD KEY `NITProveedor` (`NITProveedor`), ADD KEY `Agregado` (`Nombre`);

--

ALTER TABLE `proveedor`
 ADD PRIMARY KEY (`NITProveedor`);

--

ALTER TABLE `venta`
 ADD PRIMARY KEY (`NumPedido`), ADD KEY `NIT` (`NIT`), ADD KEY `NIT_2` (`NIT`);

--
ALTER TABLE `venta`
MODIFY `NumPedido` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--

ALTER TABLE `detalle`
ADD CONSTRAINT `detalle_ibfk_8` FOREIGN KEY (`CodigoProd`) REFERENCES `producto` (`CodigoProd`) ON UPDATE CASCADE,
ADD CONSTRAINT `detalle_ibfk_9` FOREIGN KEY (`NumPedido`) REFERENCES `venta` (`NumPedido`) ON DELETE CASCADE ON UPDATE CASCADE;

--

ALTER TABLE `producto`
ADD CONSTRAINT `producto_ibfk_7` FOREIGN KEY (`CodigoCat`) REFERENCES `categoria` (`CodigoCat`) ON UPDATE CASCADE,
ADD CONSTRAINT `producto_ibfk_8` FOREIGN KEY (`NITProveedor`) REFERENCES `proveedor` (`NITProveedor`) ON UPDATE CASCADE,
ADD CONSTRAINT `producto_ibfk_9` FOREIGN KEY (`Nombre`) REFERENCES `administrador` (`Nombre`);

--

ALTER TABLE `venta`
ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`NIT`) REFERENCES `cliente` (`NIT`) ON UPDATE CASCADE;


