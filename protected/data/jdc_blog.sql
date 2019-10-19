-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2019 a las 16:40:20
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jdc_blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_country` int(11) NOT NULL,
  `id_state` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `last_access` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `img`, `first_name`, `last_name`, `email`, `password`, `id_country`, `id_state`, `id_role`, `created_at`, `updated_at`, `last_access`) VALUES
(3, 'user.png', 'test', 'test', 'test@hotmail.com', '$2y$10$FUh/9oPP6PWN8RAj2PMhteEhl1KbJ0FPAqB5kGHB3.5gNu2lLJeme', 4, 4, 2, '2019-07-25', '2019-07-25', '17-55-23'),
(4, 'user.png', 'df', 'df', 'df@hotmail.com', '$2y$10$1YCAoVuWnth2Hk9FgxbIpO/RAfVxvzzvqPLO0cXWZdF0L/GT9IfS2', 15, 15, 2, '25-07-2019', '25-07-2019', '18-00-29'),
(5, 'user.png', 'carlos', 'pacheco', 'carlos@hotmail.com', '$2y$10$wgGhTxfWvJFe4WZBqQBPauWlTqLN/UUwDiCCe/mak0gQqULqnSO0K', 7, 7, 2, '25-07-2019', '25-07-2019', '18-19-01'),
(17, 'user.png', 'test3', 'sds', 'test3@hotmail.com', '$2y$10$oujLuDxoxEOGvB2yPc21JOlhC8cEqF7g8gt1axKq7wzfpKfn9Vyl2', 21, 21, 1, '27-07-2019', '27-07-2019', '20-13-45'),
(18, 'user.png', 'test4', 'fdfdfd', 'test4@hotmail.com', '$2y$10$3BFMxiPu.6VzZA4HuGUs9OmJ4mprwt9sUF1I5n.nTMQc6igTCB5G6', 35, 35, 1, '27-07-2019', '27-07-2019', '20-15-05'),
(22, 'user.png', 'admin', 'test', 'admin@hotmail.com', '$2y$10$9tB9f1bssMuznENa0HIsnec8OmK3xEte0gaXuo8pv4Rh4UkVPNKg2', 16, 16, 1, '30-07-2019', '30-07-2019', '08-58-06'),
(23, 'user.png', 'dalyles', 'sdsd', 'dayles@hotmail.com', '$2y$10$AdVtqQKJ8doVL/Y9dUWumugAVYv155Ps1K97Ls/s3Wzv9Ct6qZo8C', 14, 14, 2, '30-07-2019', '30-07-2019', '19-52-15'),
(24, 'user.png', 'mario', 'sdsdsd', 'mario@hotmail.com', '$2y$10$rGGmA2e5UGOgAC15p6RLwePlQ3bQ7KC4zIocPKgikZZq3t/u/UKOK', 19, 19, 2, '30-07-2019', '30-07-2019', '19-52-30'),
(25, 'user.png', 'crystobal', 'sdsdsdsd', 'crystobal@hotmail.com', '$2y$10$oeC6plcGoSe5KmFU5nHuveUfTL6aIMNmuph6gKmR/N2VHWgJEWOea', 16, 16, 2, '30-07-2019', '30-07-2019', '19-52-45'),
(26, 'user.png', 'kaymil', 'fdfd', 'kaymel@hotmail.com', '$2y$10$UeCWWPOaCl1tb222g5h4EO2SYZnLLFuHXBVBT/OrS/aJidi0QX7m2', 30, 30, 2, '30-07-2019', '30-07-2019', '19-53-21'),
(27, 'user.png', 'pachom', 'fdfd', 'pachom@hotmail.com', '$2y$10$fpm1t/dJ0P67EF9I9hvZYOuhacBVTcDbCfWSDMznuO5oda97f8ayS', 34, 34, 2, '30-07-2019', '30-07-2019', '19-53-36'),
(28, 'user.png', 'kachin', 'sdsd', 'kachin@hotmail.com', '$2y$10$YFcKwXXd.o9brwI6Cmc7huyiQ.YbgNGL23w9Z0j1WxqL2bF.9mHd2', 5, 5, 2, '31-07-2019', '31-07-2019', '22-36-04'),
(29, 'user.png', 'sds', 'sdsd', 'kllsd@hotmail.com', '$2y$10$tTAqi2k.78v6w3D67rAZaes6ZaOg6vDeKTODqer.eRY7T6smpPSwm', 8, 8, 2, '31-07-2019', '31-07-2019', '22-56-12'),
(30, 'user.png', 'alberto', 'sds', 'alberto@hotmail.com', '$2y$10$YsBi2GCGJEn9KXf0c1nKce1gmfvFamzHjJNqTJo8z3RAbmD/ICWrG', 14, 14, 2, '31-07-2019', '31-07-2019', '23-08-18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
