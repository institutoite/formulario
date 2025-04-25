-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2025 a las 05:09:25
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
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tema` varchar(250) NOT NULL,
  `slogan` varchar(250) NOT NULL,
  `detalle` varchar(5000) NOT NULL,
  `indice` bigint(20) UNSIGNED NOT NULL,
  `materia_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`id`, `tema`, `slogan`, `detalle`, `indice`, `materia_id`, `created_at`, `updated_at`) VALUES
(1, 'Potenciación', 'Hazte más fuerte en matemáticas con nuestra ayuda en potenciación', 'La potenciación es una operación matemática que consiste en multiplicar un número base por sí mismo un número determinado de veces, llamado exponente. Se representa por medio de un número base elevado a un exponente, por ejemplo, 2 elevado a la tercera potencia (2³) es igual a 2 x 2 x 2 = 8. La potenciación es una operación fundamental en la matemática y se utiliza para resolver una amplia variedad de problemas, desde cálculos simples hasta ecuaciones complejas en física, ingeniería y otras disciplinas científicas.', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(2, 'Radicación', 'La radicación nunca ha sido tan fácil. ¡Confía en nosotros!', 'La radicación es una operación matemática inversa a la potenciación. En lugar de elevar un número a una potencia, la radicación busca el número que, al ser elevado a una potencia determinada, producirá un resultado específico. La operación se representa mediante el símbolo radical (√) y el número que se busca se llama radicando. Por ejemplo, la raíz cuadrada de 25 (√25) es igual a 5, porque 5 x 5 = 25. La radicación se utiliza en una amplia variedad de aplicaciones, como en cálculos de medidas, ecuaciones matemáticas y estadísticas. Aprender a realizar operaciones de radicación es fundamental para el desarrollo de habilidades matemáticas avanzadas.', 2, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(3, 'Ecuación Cuadrática', 'Resolver ecuaciones cuadráticas es fácil con nuestra ayuda.', 'Las ecuaciones de segundo grado, también conocidas como ecuaciones cuadráticas, son ecuaciones algebraicas en las que la variable desconocida tiene un exponente de dos. Se pueden representar gráficamente como una parábola y se utilizan en diversas áreas de las matemáticas y la física para modelar situaciones del mundo real. La fórmula cuadrática es una herramienta fundamental para resolver este tipo de ecuaciones y encontrar las soluciones posibles.', 0, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(4, 'MOVIMIENTO RECTILINEO UNIFORME MRU', 'Descubre la simplicidad del movimiento rectilíneo uniforme con nosotros', 'El movimiento rectilíneo uniforme es un concepto básico de la física que describe el movimiento de un objeto que se mueve en línea recta a una velocidad constante. En otras palabras, la velocidad del objeto no cambia, lo que significa que no hay aceleración. El movimiento rectilíneo uniforme es un caso especial de movimiento uniforme, que es aquel en el que la velocidad es constante en magnitud y dirección. El movimiento rectilíneo uniforme se utiliza para modelar y analizar una amplia variedad de fenómenos físicos, desde el movimiento de un coche en una carretera recta hasta el movimiento de un satélite en órbita alrededor de la Tierra. Es un concepto fundamental en la física y es importante para entender conceptos más avanzados en esta disciplina.', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(5, 'MOVIMIENTO RECTILINEO UNIFORMEMENTE VARIADO MRUV', ' ¡Descubre la ciencia detrás del movimiento!', 'El movimiento rectilíneo uniformemente variado, o MRUV, es un concepto clave en la física que se refiere al movimiento de un objeto que se desplaza en línea recta con una aceleración constante. En otras palabras, en un MRUV la velocidad del objeto cambia en igual cantidad en cada unidad de tiempo. El MRUV se utiliza para describir una amplia variedad de fenómenos físicos, como la caída libre de los objetos y la aceleración de los vehículos. Aprender a entender y resolver problemas de MRUV es fundamental para el desarrollo de habilidades avanzadas en física y es esencial para entender muchos aspectos de la ciencia y la tecnología modernas.', 2, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(6, 'LOGARITMOS', 'Descubre el poder de los logaritmos', 'Los logaritmos son una herramienta matemática poderosa que se usa en muchas áreas diferentes. En este tema, aprenderás cómo funcionan los logaritmos, cómo calcularlos y cómo aplicarlos en problemas del mundo real.', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(7, 'INTRODUCCION A LA GEOMETRIA ANALITICA', 'Explora la belleza de la geometría analítica', 'La geometría analítica combina la geometría y el álgebra para crear una herramienta poderosa para resolver problemas geométricos. En este tema, aprenderás los fundamentos de la geometría analítica, incluyendo cómo trabajar con coordenadas y cómo encontrar ecuaciones de líneas y formas geométricas.', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(8, 'PROGRESIONES ARITMETICAS Y GEOMETRICAS', 'Descubre el patrón detrás de las progresiones', 'Las progresiones aritméticas y geométricas son secuencias numéricas que aparecen en muchos problemas y situaciones diferentes. En este tema, aprenderás cómo reconocer y trabajar con progresiones, incluyendo cómo encontrar términos y sumas.', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(9, 'LOGICA SIMBOLICA', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(10, 'DESIGUALDADES Y VALOR ABSOLUTO', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(11, 'RAZONES TRIGONOMETRICAS', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(12, 'TRIANGULOS RECTANGULOS', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(13, 'IDENTIDADES', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(14, 'SISTEMA DE ECUACIONES LINEALES', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(15, 'CONJUNTOS', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(16, 'FUNCIONES', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(17, 'RELACIONES', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(18, 'LA RECTA', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(19, 'LA CIRCUNFERECIA', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(20, 'LA PARABOLA', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(21, 'LA ELIPSE', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(22, 'LA HIPERBOLA', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(23, 'LIMITES', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(24, 'DERIVADAS', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(25, 'INTEGRALES', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(26, 'DESCOMPOSICION FACTORIAL', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(27, 'M.C.D. expresiones algebráicas', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(28, 'AREAS DE FIGURAS PLANAS', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(29, 'VOLUMENES DE CUERPOS', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(30, 'M.C.M de expresiones algebráicas', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(31, 'TRIANGULOS OBLICUANGULOS', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(32, 'RELACION INVERSA Y DIRECTAMENTE PROPORCIONALES', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(33, 'REGLA DE 3 SIMPLE Y COMPUESTA', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(34, 'CLASIFICACION DE LOS TRIANGULOS SEGUN SUS LADOS', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(35, 'CLASIFICACION DE LOS TRIANGULOS SEGUN SUS ANGULOS', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(36, 'PERIMETROS DE FIGURAS NOTABLES', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(37, 'AREA DE POLIGONOS POR COORDENADAS', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(38, 'CONVERSION DE FRACCIONES DECIMALES A FRACCIONES COMUNES', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(39, 'NOTACIÓN CIENTIFICA', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(40, 'PRODUCTOS NOTABLES', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(41, 'COCIENTES NOTABLES', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(42, 'BINOMIO DE NEWTON POR EL TRIANGULO DE PASSCAL Y POR COMBINATORIA', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(43, 'FACTORIAL,COMBINACION, PERMUTACION Y VARIACION', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(44, 'INDUCCION COMPLETA', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(45, 'NUMEROS COMLEJOS', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(46, 'MULTIPLICADORES DE LAGRANGE', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(47, 'GRAFICA DE FUNCIONES TRIGONOMETRICAS', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(48, 'CRITERIOS DE DIVISIBILIDAD', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(49, 'RAIZ CUADRADA Y RAIZ CUBICA', '', '', 1, 1, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(50, 'NOTACION CIENTIFICA', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(51, 'ESCALA TERMICA', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(52, 'DILATACION TERMICA', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(53, 'CALORIMETRIA', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(54, 'LEY DE LOS GASES', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(55, 'MOVIMIENTO RECTILINEO UNIFORMEMENTE VARIADO', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(56, 'MOVIMIENTO VERTICAL- CAIDA LIBRE', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(57, 'MOVIMIENTO PARABOLICO', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(58, 'MOVIMIENTO CIRCULAR UNIFORME', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(59, 'MOVIMIENTO CIRCULAR UNIFORMEMENTE VARIADO', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(60, 'MOVIMIENTO OSCILATORIO', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(61, 'DINAMICA DE PARTICULAS', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(62, 'FUERZA ELECTRICA', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(63, 'CAMPO ELECTRICO', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(64, 'POTENCIAL ELECTRICO', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(65, 'TRABAJO ELECTRICO', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(66, 'CAPACIDAD ELECTRICA', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(67, 'ASOCIACION DE CONDENSADORES', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(68, 'CIRCUITOS ELECTRICOS', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(69, 'LEYES DE KIRCHHOFF', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(70, 'LEYES DE KEPLER', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(71, 'OPTICA', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(72, 'TERMODINAMICA', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(73, 'ELECTROMAGNETISMO', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(74, 'EQUILIBRIO TERMICO', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(75, 'CAMBIOS DE ESTADO', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(76, 'TEORIA DE ERRORES', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(77, 'CENTROS DE GRAVEDAD Y MOMENTOS DE INERCIA', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(78, 'PRINCIO DE ARQUIMEDES', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(79, 'PRICIPIO DE PASCAL', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(80, 'EMPUJES Y FLOTACION', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(81, 'ECUACION DE CONTINUDAD', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(82, 'ECUACION DE BERNOULLI', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(83, 'LEY DE LA CONSERVACION DE LA ENERGIA', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(84, 'LEY DE LA CONSERVACION DE LA CANTIDAD DE MOVIMIENTO', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(85, 'TRABAJO,ENERGIA Y POTENCIA', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(86, 'CORRIENTE ELECTRICA', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(87, 'VECTORES', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(88, 'GRAVITACION UNIVERSAL', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(89, 'LEYES DE TERMODINAMICA', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(90, 'ECUACIONES DIMENSIONALES', '', '', 1, 2, '2023-04-17 01:24:39', '2023-04-17 01:24:39'),
(91, 'PROGRESIONES GEOMETRICAS', '¡Descubre el poder de las progresiones geométricas!', '<p>Explora el increíble mundo de las progresiones geométricas y descubre cómo multiplicar tus resultados con esta herramienta matemática poderosa.</p>', 0, 1, '2023-04-06 20:40:54', '2023-04-06 20:40:54'),
(92, 'GASES', 'Descubre el poder de los gases.', '<p>Explora el increíble mundo de los gases y descubre cómo aprender a conocerlos mejor. Descubre el poder que tienen para ayudarte a liberar tu mente y entender mejor cómo funciona el mundo.&nbsp;</p>', 0, 3, '2023-04-06 21:55:31', '2023-04-06 21:55:31'),
(95, 'Quimica Inorganica', 'a', '<p>Química Inorganica</p>', 0, 3, '2023-08-01 22:10:36', '2023-08-01 22:10:36'),
(97, 'Quimica Órganica', '“Se define la química orgánica como la química de los compuestos de carbono”', '<p>a</p>', 0, 3, '2023-08-03 19:02:36', '2023-08-03 19:02:36'),
(98, 'Soluciones', 'Una solución es una mezcla homogénea cuyos componentes, llamados soluto y solvente', '<p>a</p>', 0, 3, '2023-08-05 19:31:51', '2023-08-05 19:31:51'),
(99, 'Equilibrio', 'El equilibrio ácido-base es el balance que mantiene el organismo entre ácidos y bases con el objetivo de mantener un pH constante.', '<p>a</p>', 0, 3, '2023-08-10 16:18:46', '2023-08-10 16:18:46'),
(100, 'Interés Simple', 'Interés simple: Cuando los intereses que se pagan no se incorporan al capital para formar un nuevo capital, el interés se denomina simple.', '<p>.</p>', 0, 1, '2023-09-06 16:08:21', '2023-09-06 16:08:21'),
(101, 'Interes Compuesto', 'Interes Compuesto', '<p>.</p>', 0, 1, '2023-09-06 19:52:32', '2023-09-06 19:52:32');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `temas_materia_id_foreign` (`materia_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
