-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-12-2020 a las 15:50:13
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id14864471_portal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(20) NOT NULL,
  `correo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `area` text COLLATE utf8_unicode_ci NOT NULL,
  `cv` text COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espacios`
--

CREATE TABLE `espacios` (
  `id_espacios` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `espacios`
--

INSERT INTO `espacios` (`id_espacios`, `nombre`) VALUES
(1, 'pileta'),
(2, 'quincho'),
(3, 'pista de baile'),
(4, 'jardín');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `descripcion` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `zona` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` tinyint(4) NOT NULL DEFAULT 0,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotosEventos`
--

CREATE TABLE `fotosEventos` (
  `id_fotos` int(11) NOT NULL,
  `foto` longtext COLLATE utf8_unicode_ci NOT NULL,
  `miniatura` text COLLATE utf8_unicode_ci NOT NULL,
  `id_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotosIdeas`
--

CREATE TABLE `fotosIdeas` (
  `id_fotos` int(11) NOT NULL,
  `foto` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `id_idea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotosImagen`
--

CREATE TABLE `fotosImagen` (
  `id_fotos` int(11) NOT NULL,
  `foto` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `id_imgpersonal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotosSalon`
--

CREATE TABLE `fotosSalon` (
  `id_fotos` int(11) NOT NULL,
  `foto` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `id_salon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotosServicios`
--

CREATE TABLE `fotosServicios` (
  `id_fotos` int(11) NOT NULL,
  `foto` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `id_servicios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `fotosServicios`
--

INSERT INTO `fotosServicios` (`id_fotos`, `foto`, `id_servicios`) VALUES
(22, 'COCTEL-PROFESIONAL.jpg', 7),
(23, 'drinking-vine.jpg', 7),
(59, '20170508174130-fiesta-oficina.jpeg', 20),
(60, 'COCTEL-PROFESIONAL.jpg', 20),
(61, 'Feria-1.jpg', 20),
(62, 'boda.jpg', 20),
(63, 'estancia_la_linda-quintas_y_estancias-buenos_aires-1480012318_grande.jpg', 20),
(64, 'fdi-origen-eventos.jpg', 20),
(65, 'gal010.jpg', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ideas`
--

CREATE TABLE `ideas` (
  `id_idea` int(11) NOT NULL,
  `titulo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `nivel` tinyint(4) NOT NULL DEFAULT 0,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenpersonal`
--

CREATE TABLE `imagenpersonal` (
  `id_imgpersonal` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `proveedor` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` tinyint(4) NOT NULL DEFAULT 0,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lservicios`
--

CREATE TABLE `lservicios` (
  `id_lservicio` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `lservicios`
--

INSERT INTO `lservicios` (`id_lservicio`, `nombre`) VALUES
(5, 'bar'),
(6, 'animación infantil'),
(7, 'dj'),
(8, 'catering');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE `salon` (
  `id_salon` int(11) NOT NULL,
  `nombre` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `capacidad` int(11) NOT NULL,
  `id_zona` int(11) DEFAULT NULL,
  `ubicacion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_tiposalon` int(11) DEFAULT NULL,
  `nivel` tinyint(4) NOT NULL DEFAULT 0,
  `descuento` tinyint(4) NOT NULL DEFAULT 0,
  `id_usuario` int(11) NOT NULL,
  `id_fotoPrincipal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon_espacio`
--

CREATE TABLE `salon_espacio` (
  `id_espacios` int(11) NOT NULL,
  `id_salon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon_lservicio`
--

CREATE TABLE `salon_lservicio` (
  `id_salon` int(11) NOT NULL,
  `id_lservicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicios` int(11) NOT NULL,
  `nombre` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `id_zona` int(20) DEFAULT NULL,
  `id_tiposervicio` int(15) DEFAULT NULL,
  `nivel` tinyint(4) NOT NULL DEFAULT 0,
  `descuento` int(11) NOT NULL DEFAULT 0,
  `id_usuario` int(11) NOT NULL,
  `id_fotoPrincipal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicios`, `nombre`, `descripcion`, `id_zona`, `id_tiposervicio`, `nivel`, `descuento`, `id_usuario`, `id_fotoPrincipal`) VALUES
(7, 'test servicio 1', '<h3> servicio 1</h3>\r\nprueba de descripcion\r\ny de carga de imagenes', 1, 2, 0, 0, 5, NULL),
(20, 'test pub basic', 'Lorem ipsum dolor sit amet consectetur.\r\nNon tenetur quas doloremque fuga odit.\r\nQuo natus perspiciatis laborum blanditiis facere!\r\nConsectetur eum laboriosam neque totam recusandae?\r\nExpedita, aut dolorum. Omnis, repudiandae quae.\r\nCorporis velit obcaecati ad dolore mollitia.\r\nAperiam fugiat nemo molestias odit veniam!\r\nCommodi cumque tempora soluta autem voluptas!\r\nCupiditate pariatur voluptates ipsum quas culpa.\r\nSaepe, debitis. Nemo totam alias aut?\r\nOdio reprehenderit dolores nam maxime voluptatibus?\r\nPerspiciatis ipsa inventore neque laudantium aut?\r\nLaboriosam ad consectetur unde nulla exercitationem?\r\nQuam labore eaque laboriosam dolor optio.\r\nEx labore magni doloremque veritatis quaerat?', 1, 2, 0, 0, 5, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposalon`
--

CREATE TABLE `tiposalon` (
  `id_tiposalon` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tiposalon`
--

INSERT INTO `tiposalon` (`id_tiposalon`, `nombre`) VALUES
(1, 'quinta'),
(2, 'formal'),
(3, 'auditorio'),
(4, 'deportivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposervicio`
--

CREATE TABLE `tiposervicio` (
  `id_tiposervicio` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tiposervicio`
--

INSERT INTO `tiposervicio` (`id_tiposervicio`, `nombre`) VALUES
(1, 'música'),
(2, 'catering'),
(3, 'limpieza'),
(4, 'animación infantil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` bigint(15) NOT NULL,
  `correo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fb` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ig` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tw` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `web` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre`, `pass`, `telefono`, `correo`, `fb`, `ig`, `tw`, `web`) VALUES
(5, 'jumpalo', 'a4b2b21e2e3e771e5a5b1791b78bb14f', 541169591671, 'gardeyjuanpablo@gmail.com', 'gardeyjuanpablo', '@jumpalois', NULL, NULL),
(6, 'Adidas', '048d5afb4c5213890a7dae1ae61104fb', 541169591671, 'gardeyjuanpablo@hotmail.com', 'adidasAR', '@adidas', '@adidasAR', 'http://adidas.com.ar/'),
(7, 'profe', '25d55ad283aa400af464c76d713c07ad', 5411112222, 'lchaz85@yahoo.com.ar', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verificaciones`
--

CREATE TABLE `verificaciones` (
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `verificaciones`
--

INSERT INTO `verificaciones` (`email`, `code`) VALUES
('gabriel.altha@gmail.com', 'TQSJBE'),
('lchaz85@yahoo.com.ar', 'PHX4P5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id_zona` int(11) NOT NULL,
  `zona` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id_zona`, `zona`) VALUES
(1, 'tortuguitas'),
(2, 'alberti'),
(3, 'grand bourg'),
(4, 'pilar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `espacios`
--
ALTER TABLE `espacios`
  ADD PRIMARY KEY (`id_espacios`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `fotosEventos`
--
ALTER TABLE `fotosEventos`
  ADD PRIMARY KEY (`id_fotos`),
  ADD KEY `fotosEventos_ibfk_4` (`id_evento`);

--
-- Indices de la tabla `fotosIdeas`
--
ALTER TABLE `fotosIdeas`
  ADD PRIMARY KEY (`id_fotos`),
  ADD KEY `id_vinculo` (`id_idea`);

--
-- Indices de la tabla `fotosImagen`
--
ALTER TABLE `fotosImagen`
  ADD PRIMARY KEY (`id_fotos`),
  ADD KEY `id_vinculo` (`id_imgpersonal`);

--
-- Indices de la tabla `fotosSalon`
--
ALTER TABLE `fotosSalon`
  ADD PRIMARY KEY (`id_fotos`),
  ADD KEY `id_vinculo` (`id_salon`);

--
-- Indices de la tabla `fotosServicios`
--
ALTER TABLE `fotosServicios`
  ADD PRIMARY KEY (`id_fotos`),
  ADD KEY `id_vinculo` (`id_servicios`);

--
-- Indices de la tabla `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`id_idea`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `imagenpersonal`
--
ALTER TABLE `imagenpersonal`
  ADD PRIMARY KEY (`id_imgpersonal`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `lservicios`
--
ALTER TABLE `lservicios`
  ADD PRIMARY KEY (`id_lservicio`);

--
-- Indices de la tabla `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`id_salon`),
  ADD KEY `salon_ibfk_2` (`id_usuario`),
  ADD KEY `id_tiposalon` (`id_tiposalon`),
  ADD KEY `id_zona` (`id_zona`);

--
-- Indices de la tabla `salon_espacio`
--
ALTER TABLE `salon_espacio`
  ADD PRIMARY KEY (`id_espacios`,`id_salon`),
  ADD KEY `salon_espacio_ibfk_2` (`id_salon`);

--
-- Indices de la tabla `salon_lservicio`
--
ALTER TABLE `salon_lservicio`
  ADD PRIMARY KEY (`id_salon`,`id_lservicio`),
  ADD KEY `salon_lservicio_ibfk_1` (`id_lservicio`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicios`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_zona` (`id_zona`),
  ADD KEY `id_tiposervicio` (`id_tiposervicio`);

--
-- Indices de la tabla `tiposalon`
--
ALTER TABLE `tiposalon`
  ADD PRIMARY KEY (`id_tiposalon`);

--
-- Indices de la tabla `tiposervicio`
--
ALTER TABLE `tiposervicio`
  ADD PRIMARY KEY (`id_tiposervicio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `verificaciones`
--
ALTER TABLE `verificaciones`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id_zona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `espacios`
--
ALTER TABLE `espacios`
  MODIFY `id_espacios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fotosEventos`
--
ALTER TABLE `fotosEventos`
  MODIFY `id_fotos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fotosIdeas`
--
ALTER TABLE `fotosIdeas`
  MODIFY `id_fotos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fotosImagen`
--
ALTER TABLE `fotosImagen`
  MODIFY `id_fotos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fotosSalon`
--
ALTER TABLE `fotosSalon`
  MODIFY `id_fotos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `fotosServicios`
--
ALTER TABLE `fotosServicios`
  MODIFY `id_fotos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `ideas`
--
ALTER TABLE `ideas`
  MODIFY `id_idea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenpersonal`
--
ALTER TABLE `imagenpersonal`
  MODIFY `id_imgpersonal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lservicios`
--
ALTER TABLE `lservicios`
  MODIFY `id_lservicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `salon`
--
ALTER TABLE `salon`
  MODIFY `id_salon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tiposalon`
--
ALTER TABLE `tiposalon`
  MODIFY `id_tiposalon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tiposervicio`
--
ALTER TABLE `tiposervicio`
  MODIFY `id_tiposervicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id_zona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuarios`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fotosEventos`
--
ALTER TABLE `fotosEventos`
  ADD CONSTRAINT `fotosEventos_ibfk_4` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fotosIdeas`
--
ALTER TABLE `fotosIdeas`
  ADD CONSTRAINT `fotosIdeas_ibfk_1` FOREIGN KEY (`id_idea`) REFERENCES `ideas` (`id_idea`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fotosImagen`
--
ALTER TABLE `fotosImagen`
  ADD CONSTRAINT `fotosImagen_ibfk_1` FOREIGN KEY (`id_imgpersonal`) REFERENCES `imagenpersonal` (`id_imgpersonal`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fotosSalon`
--
ALTER TABLE `fotosSalon`
  ADD CONSTRAINT `fotosSalon_ibfk_1` FOREIGN KEY (`id_salon`) REFERENCES `salon` (`id_salon`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fotosServicios`
--
ALTER TABLE `fotosServicios`
  ADD CONSTRAINT `fotosServicios_ibfk_1` FOREIGN KEY (`id_servicios`) REFERENCES `servicios` (`id_servicios`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ideas`
--
ALTER TABLE `ideas`
  ADD CONSTRAINT `ideas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuarios`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `imagenpersonal`
--
ALTER TABLE `imagenpersonal`
  ADD CONSTRAINT `imagenpersonal_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuarios`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `salon`
--
ALTER TABLE `salon`
  ADD CONSTRAINT `salon_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuarios`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salon_ibfk_3` FOREIGN KEY (`id_tiposalon`) REFERENCES `tiposalon` (`id_tiposalon`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `salon_ibfk_4` FOREIGN KEY (`id_zona`) REFERENCES `zonas` (`id_zona`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `salon_espacio`
--
ALTER TABLE `salon_espacio`
  ADD CONSTRAINT `salon_espacio_ibfk_1` FOREIGN KEY (`id_espacios`) REFERENCES `espacios` (`id_espacios`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salon_espacio_ibfk_2` FOREIGN KEY (`id_salon`) REFERENCES `salon` (`id_salon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `salon_lservicio`
--
ALTER TABLE `salon_lservicio`
  ADD CONSTRAINT `salon_lservicio_ibfk_1` FOREIGN KEY (`id_lservicio`) REFERENCES `lservicios` (`id_lservicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salon_lservicio_ibfk_2` FOREIGN KEY (`id_salon`) REFERENCES `salon` (`id_salon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuarios`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `servicios_ibfk_2` FOREIGN KEY (`id_zona`) REFERENCES `zonas` (`id_zona`),
  ADD CONSTRAINT `servicios_ibfk_3` FOREIGN KEY (`id_tiposervicio`) REFERENCES `tiposervicio` (`id_tiposervicio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
