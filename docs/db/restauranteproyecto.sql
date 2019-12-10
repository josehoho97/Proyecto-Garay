-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2019 a las 21:23:50
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restauranteproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `idBebida` int(11) NOT NULL,
  `nombreB` varchar(250) NOT NULL,
  `tipoB` varchar(250) NOT NULL,
  `tamañoB` varchar(250) NOT NULL,
  `precioB` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`idBebida`, `nombreB`, `tipoB`, `tamañoB`, `precioB`) VALUES
(1, 'Coca-Cola', 'Refresco', 'mediano', 35),
(2, 'Fanta-Naranja', 'Refresco', 'mediano', 35),
(3, 'Sprite', 'Refresco', 'mediano', 35),
(4, 'Lift', 'Refresco', 'mediano', 35),
(5, 'Coca-Cola Light', 'Refresco', 'mediano', 35),
(6, 'Corona', 'Cerveza', 'mediano', 35),
(7, 'Corona-Chica', 'Cerveza', 'chico', 28),
(8, 'Victoria', 'Cerveza', 'mediano', 35),
(9, 'Corona-Light', 'Cerveza', 'mediano', 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidascli`
--

CREATE TABLE `bebidascli` (
  `idBebidaCli` int(11) NOT NULL,
  `folioP` int(11) NOT NULL,
  `idBebida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(250) NOT NULL,
  `nomUsuarioC` varchar(50) NOT NULL,
  `nombresC` varchar(50) NOT NULL,
  `apPatC` varchar(50) NOT NULL,
  `apMatC` varchar(50) NOT NULL,
  `telefonoC` varchar(14) NOT NULL,
  `correoC` varchar(50) NOT NULL,
  `contraseñaC` varchar(50) NOT NULL,
  `numVisitas` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nomUsuarioC`, `nombresC`, `apPatC`, `apMatC`, `telefonoC`, `correoC`, `contraseñaC`, `numVisitas`) VALUES
(1, 'DaniBB_022', 'Daniela', 'Carrillo', 'Castro', '8711241713', 'd_ani_caramelo@hotmail.com', '*1912vyd', 5),
(2, 'LindaZax', 'Linda Patricia', 'Martinez', 'Lopez', '8711659845', 'lindaZax@gmail.com', 'nuevaPromesa', 12),
(3, 'LeslyVlad', 'Lesly Dennis', 'Sanchez', 'Rodriguez', '8716984544', 'darkLes@gmail.com', 'DarkLesly88', 1),
(4, 'LuisTrapo', 'Luis de Jesus', 'Alferez', 'Hernandez', '8710654898', 'lui_00@gmail.com', 'PrimasNorte', 4),
(5, 'KrisGato', 'Krisan Jared', 'Guzman', 'Hernandez', '8715456598', 'kris03@gmail.com', 'Resident_Jared', 7),
(6, 'Gar_vader', 'Garay', 'Fundamentos', 'Ing. SW', '732-11-11', 'garVader@gmail.com', 'ITLSISTEMAS', 0),
(7, 'UsPrueba', 'Ricardo', 'Milos', 'Acosta', '8711223344', 'ricardo_meme@yahoo.com', 'dancing', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idComentarios` int(11) NOT NULL,
  `nomUsuarioC` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `hora` int(11) NOT NULL,
  `minutos` int(11) NOT NULL,
  `comentarioRealizado` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(100) NOT NULL,
  `nomUsuarioE` varchar(50) NOT NULL,
  `nombreE` varchar(50) NOT NULL,
  `apPatE` varchar(50) NOT NULL,
  `apMatE` varchar(50) NOT NULL,
  `telefonoE` varchar(50) NOT NULL,
  `contraseñaE` varchar(50) NOT NULL,
  `tipoE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `nomUsuarioE`, `nombreE`, `apPatE`, `apMatE`, `telefonoE`, `contraseñaE`, `tipoE`) VALUES
(1, 'Administrador_prueba_1', 'Victor Manuel', 'Castañeda', 'Amparan', '8715035335', '1234', 'Admin'),
(2, 'Administrador_prueba_2', 'Jose Guadalupe', 'Zuñiga', 'Martinez', '8712326548', '1234', 'Admin'),
(3, 'Administrador_prueba_3', 'Ivan', 'Rios', 'Carrillo', '8713665978', '1234', 'Admin'),
(4, 'Cajero_prueba_1', 'Cajero1', 'Cajero1', 'Cajero1', '8716659845', '1234', 'Cajero'),
(5, 'Cajero_prueba_2', 'Cajero2', 'Cajero2', 'Cajero2', '8716523845', '1234', 'Cajero'),
(6, 'Cajero_prueba_3', 'Cajero3', 'Cajero3', 'Cajero3', '87132459895', '1234', 'Cajero'),
(7, 'Mesero_prueba_1', 'Mesero1', 'Mesero1', 'Mesero1', '8716659845', '1234', 'Mesero'),
(8, 'Mesero_prueba_2', 'Mesero2', 'Mesero2', 'Mesero2', '8712578845', '1234', 'Mesero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `idEncuesta` int(11) NOT NULL,
  `tipoP` varchar(250) NOT NULL,
  `tipoR` varchar(250) NOT NULL,
  `nomUsuarioC` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(11) NOT NULL,
  `folioP` int(11) NOT NULL,
  `nomUsuarioC` varchar(250) NOT NULL,
  `fechaP` date NOT NULL,
  `hora` int(11) NOT NULL,
  `minutos` int(11) NOT NULL,
  `nomUsuarioE` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idPedido`, `folioP`, `nomUsuarioC`, `fechaP`, `hora`, `minutos`, `nomUsuarioE`) VALUES
(1, 1, 'UsPrueba', '2019-11-28', 5, 5, 'Administrador_prueba_1'),
(2, 1234, 'UsPrueba', '2019-11-28', 6, 18, 'Administrador_prueba_1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillos`
--

CREATE TABLE `platillos` (
  `idPlatillo` int(11) NOT NULL,
  `nombrePla` varchar(250) NOT NULL,
  `tipoPla` varchar(250) NOT NULL,
  `tamañoPla` varchar(250) NOT NULL,
  `precioPla` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `platillos`
--

INSERT INTO `platillos` (`idPlatillo`, `nombrePla`, `tipoPla`, `tamañoPla`, `precioPla`) VALUES
(1, 'Empanizado', 'Filete', 'mediano', 150),
(2, 'Veracruzano', 'Filete', 'mediano', 180),
(3, 'A la Plancha', 'Filete', 'mediano', 120),
(4, 'Mojo de Ajo', 'Filete', 'mediano', 180),
(5, 'Camaron', 'Coctel', 'chico', 75),
(6, 'Camaron', 'Coctel', 'mediano', 90),
(7, 'Camaron', 'Coctel', 'grande', 120),
(8, 'Pescado', 'Caldo', 'mediano', 75),
(9, 'Camaron', 'Caldo', 'mediano', 75);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platilloscli`
--

CREATE TABLE `platilloscli` (
  `idPlatiloCli` int(11) NOT NULL,
  `folioP` int(11) NOT NULL,
  `idPlatillo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postres`
--

CREATE TABLE `postres` (
  `idPostre` int(11) NOT NULL,
  `nombreP` varchar(250) NOT NULL,
  `tipoP` varchar(250) NOT NULL,
  `tamañoP` varchar(250) NOT NULL,
  `precioP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `postres`
--

INSERT INTO `postres` (`idPostre`, `nombreP`, `tipoP`, `tamañoP`, `precioP`) VALUES
(1, 'Chocolate', 'Pastel Nina', 'chico', 50),
(2, 'Tres Leches', 'Pastel Nina', 'chico', 50),
(3, 'Queso', 'Pay', 'chico', 35),
(4, 'Limon con Galleta Maria', 'Pay', 'chico', 35),
(5, 'Flan', 'Flan', 'chico', 30),
(6, 'Fresas con Crema', 'Frutas', 'chico', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postrescli`
--

CREATE TABLE `postrescli` (
  `idPostreCli` int(11) NOT NULL,
  `folioP` int(11) NOT NULL,
  `idPostre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `idPreguntas` int(11) NOT NULL,
  `tipoP` varchar(250) NOT NULL,
  `pregunta` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `idRespuestas` int(11) NOT NULL,
  `tipoR` varchar(250) NOT NULL,
  `respuesta` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `password`) VALUES
(1, 'Administrador_prueba_1', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`idBebida`);

--
-- Indices de la tabla `bebidascli`
--
ALTER TABLE `bebidascli`
  ADD PRIMARY KEY (`idBebidaCli`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idComentarios`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`idEncuesta`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`);

--
-- Indices de la tabla `platillos`
--
ALTER TABLE `platillos`
  ADD PRIMARY KEY (`idPlatillo`);

--
-- Indices de la tabla `platilloscli`
--
ALTER TABLE `platilloscli`
  ADD PRIMARY KEY (`idPlatiloCli`);

--
-- Indices de la tabla `postres`
--
ALTER TABLE `postres`
  ADD PRIMARY KEY (`idPostre`);

--
-- Indices de la tabla `postrescli`
--
ALTER TABLE `postrescli`
  ADD PRIMARY KEY (`idPostreCli`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`idPreguntas`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`idRespuestas`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `idBebida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `bebidascli`
--
ALTER TABLE `bebidascli`
  MODIFY `idBebidaCli` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idComentarios` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `idEncuesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `platillos`
--
ALTER TABLE `platillos`
  MODIFY `idPlatillo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `platilloscli`
--
ALTER TABLE `platilloscli`
  MODIFY `idPlatiloCli` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `postres`
--
ALTER TABLE `postres`
  MODIFY `idPostre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `postrescli`
--
ALTER TABLE `postrescli`
  MODIFY `idPostreCli` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `idPreguntas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `idRespuestas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
