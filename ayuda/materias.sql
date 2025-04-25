-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2025 a las 05:00:29
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `materias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `materia` varchar(25) NOT NULL,
  `slogan` varchar(150) NOT NULL,
  `detalle` varchar(2000) NOT NULL,
  `indice` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `materia`, `slogan`, `detalle`, `indice`, `created_at`, `updated_at`) VALUES
(1, 'Matemática', '¡Descubre el poder de las matemáticas con nosotros!', '<p>Las matemáticas son una materia fundamental en la educación, que abarca una amplia variedad de conceptos y herramientas para el razonamiento lógico y la resolución de problemas. A través de las matemáticas, se pueden entender y describir fenómenos naturales, sociales y tecnológicos de una manera más precisa y profunda. Además, el dominio de las matemáticas es esencial para muchas carreras y profesiones en las áreas de ciencia, tecnología, ingeniería, finanzas, entre otras. Aprender matemáticas puede ser un desafío, pero también es una experiencia emocionante y gratificante que puede abrir muchas puertas en el futuro.</p>', NULL, '2023-04-17 01:24:39', '2023-04-21 08:47:47'),
(2, 'Física', 'La Física es la ciencia que desafía los límites de lo posible', 'La Física estudia las leyes de la naturaleza, desde partículas hasta el universo. Aprenderás mecánica, termodinámica, electromagnetismo y más mediante experimentos y matemáticas. Es clave para entender el mundo y resolver problemas en ingeniería, medicina y tecnología.', NULL, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(3, 'Química', 'Aprende Química y transforma la materia', 'La Física estudia las leyes de la naturaleza, desde partículas hasta el universo. Aprenderás mecánica, termodinámica, electromagnetismo y más mediante experimentos y matemáticas. Es clave para entender el mundo y resolver problemas en ingeniería, medicina y tecnología.', NULL, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(4, 'Lenguaje', 'El lenguaje es la herramienta más poderosa para la comunicación', 'La materia de Lenguaje se enfoca en el estudio de la comunicación, tanto verbal como escrita. En esta materia, los estudiantes aprenden a expresarse con claridad y precisión, a comprender y analizar diferentes tipos de textos, y a utilizar técnicas y estrategias de comunicación efectiva en diversas situaciones. Además, el estudio del Lenguaje incluye la exploración de la gramática, la sintaxis, la semántica y la pragmática, lo que permite a los estudiantes comprender la estructura y el uso del lenguaje. La materia de Lenguaje es esencial para la vida personal y profesional, ya que la comunicación es una habilidad clave en cualquier campo o industria. A través del estudio del Lenguaje, los estudiantes pueden mejorar su capacidad para comunicarse y conectarse con los demás de manera efectiva.', NULL, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(5, 'Estadística', 'La estadística te permite tomar decisiones inteligentes basadas en datos', 'La estadística es una ciencia que se ocupa de la recolección, análisis e interpretación de datos. La estadística es esencial en muchos campos, como la investigación científica, la toma de decisiones empresariales y la planificación gubernamental. La estadística nos permite describir y entender las tendencias y patrones en los datos, y nos da herramientas para hacer predicciones y tomar decisiones informadas basadas en evidencia. En resumen, la estadística es una herramienta importante para el análisis de datos y la investigación, y es esencial para comprender y solucionar problemas en una amplia variedad de áreas y disciplinas.', NULL, '2023-04-17 01:24:39', '2023-04-17 01:24:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
