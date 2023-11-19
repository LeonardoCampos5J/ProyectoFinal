-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2023 at 04:26 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafetux`
--

-- --------------------------------------------------------

--
-- Table structure for table `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cargo`
--

INSERT INTO `cargo` (`id`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Cliente'),
(3, 'Proveedor');

-- --------------------------------------------------------

--
-- Table structure for table `carrito`
--

CREATE TABLE `carrito` (
  `usuario` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `usuario` varchar(50) NOT NULL,
  `nombreProducto` varchar(50) NOT NULL,
  `precioProducto` varchar(50) NOT NULL,
  `imgProducto` varchar(50) NOT NULL,
  `totalPedido` int(50) NOT NULL,
  `fechaPedido` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `entrecalles` varchar(50) NOT NULL,
  `numeroCasa` varchar(50) NOT NULL,
  `codigoPostal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `compras`
--

INSERT INTO `compras` (`usuario`, `nombreProducto`, `precioProducto`, `imgProducto`, `totalPedido`, `fechaPedido`, `estado`, `calle`, `entrecalles`, `numeroCasa`, `codigoPostal`) VALUES
('cancinorobleshernan@gmail.com', 'altura de cafe', '30.00', 'img/empresas/mirador1.jpeg', 30, '2023-11-16', 'chiapas', 'hernan ', 'cancino', '233', '56789'),
('cancinorobleshernan@gmail.com', 'cafeeeee', '147.00', 'img/empresas/concarfe2.jpeg', 147, '2023-11-15', 'chiapas', 'hernan ', 'cancino', '233', '56789'),
('cancinorobleshernan@gmail.com', 'Cafe de temporada', '450.00', 'img/empresas/chaak1.jpeg', 450, '2023-11-16', 'chiapas', 'hernan ', 'cancino', '233', '56789');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `usuario` varchar(50) NOT NULL,
  `NombreProducto` varchar(50) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Precio` varchar(20) NOT NULL,
  `ruta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`usuario`, `NombreProducto`, `Descripcion`, `Precio`, `ruta`) VALUES
('hernan.cancino09@unach.com', 'cafe', 'cafe del fuerte', '120.00', 'img/empresas/ajal2.jpeg'),
('hernan.cancino09@unach.com', 'cafe ajax', 'cafe del otro lado del mundo', '170.00', 'img/empresas/concarfe2.jpeg'),
('hernan.cancino09@unach.com', 'cafesito de olor grano', 'cafe bueno de colombia', '100.00', 'img/empresas/mirador1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `NombreUsuario` varchar(50) NOT NULL,
  `ApellidoUsuario` varchar(50) NOT NULL,
  `CorreoUsuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `NombreUsuario`, `ApellidoUsuario`, `CorreoUsuario`, `contrasena`, `direccion`, `telefono`, `id_cargo`) VALUES
(6, 'juan', 'cordoez', 'hernan.cancino09@unach.mx', '1234', 'cebech', '9611323456', 1),
(7, 'leonardo', 'campos', 'leonardo.campos23@gmail.com', 'leo1', 'por la procu', '9613245435', 1),
(8, 'blas', 'alberto', 'blas@gmail.com', 'blas1', 'reran', '12345678', 2),
(10, 'Hernan Nataniel', 'cancino', 'cancinorobleshernan@gmail.com', '111', 'fray victoria', '9612435656', 2),
(11, 'nataniel', 'rob', 'hernan.cancino09@unach.com', '1212', 'calle victor', '1234567899', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD UNIQUE KEY `NombreProducto` (`NombreProducto`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `CorreoUsuario` (`CorreoUsuario`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
