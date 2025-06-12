-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-01-2025 a las 06:27:10
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `game_haven`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  `Fecha_lanzamiento` date NOT NULL,
  `Desarrollador` varchar(100) NOT NULL,
  `Plataforma` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`Id`, `Nombre`, `Imagen`, `Fecha_lanzamiento`, `Desarrollador`, `Plataforma`) VALUES
(1, 'Super Mario 64', 'https://www.techies.es/wp-content/uploads/2020/08/super-mario-64-1536x864.webp', '1996-09-29', 'Nintendo', 'Nintendo 64'),
(2, 'The Legend of Zelda: Ocarina of Time', 'https://howlongtobeat.com/games/10035_The_Legend_of_Zelda_Ocarina_of_Time.png?width=250', '1998-11-21', 'Nintendo', 'Nintendo 64'),
(3, 'Celeste', 'https://image.api.playstation.com/cdn/UP2120/CUSA11302_00/hgqlI1LTcsd6zuL7YWVLQ8d00jkBmtCg.jpg?w=1920&thumb=false', '2018-01-25', 'Maddy Makes Games', 'Multiplataforma'),
(4, 'Hollow Knight', 'https://static.wikia.nocookie.net/hollowknight/images/7/79/Promo_04.png/revision/latest/scale-to-width-down/1000?cb=20181111043345', '2017-02-24', 'Team Cherry', 'Multiplataforma'),
(5, 'Resident Evil 2 Remake', 'https://store-images.s-microsoft.com/image/apps.29528.63971194712892648.2292346f-d9ca-4a4a-b979-4d2ce30b77e4.ae3fcb82-4513-42da-b58a-7fad858575b0?q=90&w=480&h=270', '2019-01-25', 'Capcom', 'Multiplataforma'),
(6, 'Minecraft', '2wCEAAkGBxMTEhUTExQWFhUXGR8bGRgYFx0aGxkgGhgYHR8dGBgbHigiGCAlIh4aITEhJikrLi4uGB8zODMtNygtLisBCgoKDg0OGxAQGzImICY1Ly0vLTgtLS4tMi0tKy0tLTAvLzIvLS0tLS0tLy0tLS0tLS0vLS8tLS0tLS0tLS0tLf', '2011-11-18', 'Mojang', 'Multiplataforma'),
(7, 'Dark Souls', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUTExMVFhUXGBgYFxcYGBoXGxcaFxgYGxcYGhoaHyggHRolHRcYITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGy0lHyUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALEBHAMBIgACEQEDEQH/', '2011-09-22', 'FromSoftware', 'Multiplataforma'),
(8, 'Portal', 'https://img.asmedia.epimg.net/resizer/v2/K6M5DVVAFVK2HCLYDSTDNTVSVA.jpg?auth=4c3b687372171d9e4461466e311ed223b3333f5dc4485bd42212635f5edada17&width=360', '2007-10-10', 'Valve', 'PC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `speedruns`
--

CREATE TABLE `speedruns` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `juego_id` varchar(100) NOT NULL,
  `Categoria` varchar(50) NOT NULL,
  `Tiempo` varchar(8) NOT NULL,
  `Fecha` date NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `speedruns`
--

INSERT INTO `speedruns` (`id`, `user_id`, `juego_id`, `Categoria`, `Tiempo`, `Fecha`, `video`) VALUES
(10, 4, '1', 'Plataforma', '00:19:60', '2024-10-01', 'https://youtu.be/sQEnDtyW_H4?si=DgnoA2nG5SUgbYSa'),
(19, 1, '5', '100%', '00:34:60', '2024-07-12', 'https://www.youtube.com/watch?v=54Uv2Gx-8kI&pp=ygUnc3BlZWRydW4gZGUgY29tcGxldGEgdW5kZXJ0YWxlIGVuIDMwbWlu'),
(59, 1, '3', 'glitchless', '00:45:12', '2025-01-31', 'https://youtu.be/sQEnDtyW_H4?si=DgnoA2nG5SUgbYSa'),
(60, 1, '3', '100%', '00:45:12', '2025-01-31', 'https://youtu.be/sQEnDtyW_H4?si=DgnoA2nG5SUgbYSa'),
(61, 1, 'hollow-knight', 'low%', '00:45:12', '2024-10-05', 'https://www.youtube.com/watch?v=54Uv2Gx-8kI&pp=ygUnc3BlZWRydW4gZGUgY29tcGxldGEgdW5kZXJ0YWxlIGVuIDMwbWlu'),
(62, 1, '8', 'low%', '00:34:60', '2025-01-24', 'https://www.youtube.com/watch?v=54Uv2Gx-8kI&pp=ygUnc3BlZWRydW4gZGUgY29tcGxldGEgdW5kZXJ0YWxlIGVuIDMwbWlu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'SansGDG', 'Fernando', 'vpokemonrojofuego@gmail.com', '103580910'),
(2, 'Diana', 'Dian', 'Diana@gmail.com', '1234567890'),
(4, 'Fern', 'Fernando Vicuña', 'fernandovicunavaz@gmail.com', 'DeadlyShadow12'),
(5, 'd', 'rfgf', 'fer@gmail.com', '$2y$10$76hofOPjlL3mKUPl9h5ayezVZHuUDD0j5SAU92oEXvpRWVwC4Nbae'),
(6, 'F', 'd', 'f@gmail.com', '$2y$10$JHFKzcZiy45oihnzMW9GseYQqudx6beptMtp0XGvsYzpvecDe/afO'),
(7, 'sssd', 'wed', 'dss@gmail.com', '$2y$10$6iJKpk4TLr0MXeKw0f.Qn.waek.nMfTc4CrHD0YucX/9FYgt9nGge');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `speedruns`
--
ALTER TABLE `speedruns`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `speedruns`
--
ALTER TABLE `speedruns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
