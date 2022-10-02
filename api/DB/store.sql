-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2022 a las 08:29:19
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 10,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `stock`, `created_at`) VALUES
(1, 'Air Jordan 1 Low', 'Inspirado en el original que se lanzó en 1985, el Air Jordan 1 Low ofrece un estilo clásico impecable que se resulta familiar, pero renovado. Con un diseño icónico que combina perfectamente con cualquier ajuste, este calzado garantiza que siempre estará a la moda.', 125990, 'air-jordan1low.jpg', 10, '2022-10-01 23:14:45'),
(2, 'Nike Air Max 90 Se', 'Max Air cambió todos los paradigmas en el 87. Ahora, honramos sus bodas de esmeralda (¡35 años!) con el Nike Air Max 97 SE. Los gráficos y los colores de la esmeralda resaltan este gran hito, a la vez que su clásica suela tipo wafle y la amortiguación Air expuesta mantienen vivo el legado con comodidad', 110000, 'nike-airmax90.jpg', 10, '2022-10-01 23:16:00'),
(3, 'Air Max 90 Se', 'Nada tan genial, nada tan cómodo, nada tan eficaz: el Air Max 90 te brinda un estilo primaveral al caminar. Con detalles divertidos, desde la seta en el talón hasta la mariposa en la plantilla, ofrece una sensación de verano. Además, te permite hacer el bien y verte bien', 1379990, 'air-max90.jpg', 10, '2022-10-01 23:16:55'),
(4, 'Air Jordan 1 Mid SE', 'Destaca con un estilo de básquetbol atemporal. El cuero premium se pule, brilla y texturiza para brindar una versión fresca del calzado que comenzó todo. La amortiguación Air y el diseño clásico mantienen todo lo que más te gusta del original', 134990, 'air-jordanmix1.jpg', 10, '2022-10-01 23:17:45'),
(5, 'Air Jordan 1 Retro High', 'El icónico Air Jordan 1 mantiene su diseño familiar e impecable, pero ahora se renueva para la cultura actual de los amantes del calzado. Esta versión del Retro High OG presenta cuero de plena flor, amortiguación cómoda y detalles clásicos de diseño', 122000, 'air-jordan1retro.jpg', 10, '2022-10-01 23:18:31'),
(6, 'Air Force 1 Gtx Krmg', 'El resplandor sigue vivo en el Nike Air Force 1 GTX, el modelo original de básquetbol que le da un nuevo giro a lo que ya conoces bien: cuero impecable, colores audaces y la cantidad perfecta de destellos para hacerte brillar.Esta vez está revestido con tecnología GORE-TEX, lista para marcar el cambio estacional de estilo (y un poco de lluvia)', 148990, 'air-force.jpg', 10, '2022-10-01 23:19:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shoppings`
--

CREATE TABLE `shoppings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `shoppings`
--

INSERT INTO `shoppings` (`id`, `user_id`, `product_id`, `created_at`) VALUES
(2, 4, 2, '2022-10-02 03:07:53'),
(3, 4, 5, '2022-10-02 03:27:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `uodated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `created_at`, `uodated_at`) VALUES
(4, 'Fermin', 'email@email.com', '$2y$10$ido23f7Lm6R2roHly.puf.g/tDwlC2xz63WJ/6ak1xCl28RHSooC.', '2022-10-01 22:40:52', NULL),
(5, 'juan', 'juan@email.com', '$2y$10$h1kFxADrBz4x.xAbhOI83.GPUN0HyLaUMMJxk1InwqpB1uiyPTDuu', '2022-10-01 22:49:48', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `shoppings`
--
ALTER TABLE `shoppings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `shoppings`
--
ALTER TABLE `shoppings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
