-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-11-2021 a las 05:04:41
-- Versión del servidor: 5.7.33
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gymnasioo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `usuario`, `nombre`, `password`) VALUES
(1, 'admin', 'Jhon Salvador', '123'),
(2, 'admin1', 'Jhon Salvador', '$2y$12$U8YPxIKM.9WQvsiBpkV5i.vvoshcDmwUuGPHA3xVjz/VdwTiPhiv6'),
(3, 'admin2', 'ki', '$2y$12$zfEfwT7MWqKf4IEuT7EKgOj3e..RWgTJXBn8qVt4poUJckg0uD6aC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calculos`
--

CREATE TABLE `calculos` (
  `idcalculos` int(11) NOT NULL,
  `imc` int(11) NOT NULL,
  `calculohidrico` int(11) NOT NULL,
  `calculoproteico` int(11) NOT NULL,
  `idcliente` int(8) NOT NULL,
  `mensajeimc` varchar(254) DEFAULT NULL,
  `mensajehidrico` varchar(254) DEFAULT NULL,
  `fecharegist` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calculos`
--

INSERT INTO `calculos` (`idcalculos`, `imc`, `calculohidrico`, `calculoproteico`, `idcliente`, `mensajeimc`, `mensajehidrico`, `fecharegist`) VALUES
(1, 10, 4000, 55, 45781236, 'Hola', 'Hola', '2021-11-18'),
(2, 17, 4000, 60, 16849659, 'El usuario esta con bajo de peso', 'Tomar de 5-7 mililitros por 50 kg de peso por lo menos 4 horas antes del ejercicio.<br>\nDebera consumir entre 250 - 350 ,ml(un vaso comÃºn tiene 250 ml) antes del ejercicio.', '2021-11-18'),
(3, 17, 4000, 75, 16849659, 'El usuario esta con bajo de peso', 'Tomar de 5-7 mililitros por 50 kg de peso por lo menos 4 horas antes del ejercicio.<br>\r\nDebera consumir entre 250 - 350 ,ml(un vaso comÃºn tiene 250 ml) antes del ejercicio.', '2021-11-18'),
(4, 17, 6250, 55, 98653217, 'El usuario esta con bajo de peso', 'Tomar de 5-7 mililitros por 50 kg de peso por lo menos 4 horas antes del ejercicio.<br>\r\nDebera consumir entre 250 - 350 ,ml(un vaso comÃºn tiene 250 ml) antes del ejercicio.', '2021-11-18'),
(5, 17, 6250, 55, 98653217, 'El usuario esta con bajo de peso', 'Tomar de 5-7 mililitros por 50 kg de peso por lo menos 4 horas antes del ejercicio.<br>\r\nDebera consumir entre 250 - 350 ,ml(un vaso comÃºn tiene 250 ml) antes del ejercicio.', '2021-11-18'),
(6, 17, 6250, 55, 98653217, 'El usuario esta con bajo de peso', 'Tomar de 5-7 mililitros por 50 kg de peso por lo menos 4 horas antes del ejercicio.<br>\r\nDebera consumir entre 250 - 350 ,ml(un vaso comÃºn tiene 250 ml) antes del ejercicio.', '2021-11-18'),
(7, 17, 6250, 55, 98653217, 'El usuario esta con bajo de peso', 'Tomar de 5-7 mililitros por 50 kg de peso por lo menos 4 horas antes del ejercicio.<br>\r\nDebera consumir entre 250 - 350 ,ml(un vaso comÃºn tiene 250 ml) antes del ejercicio.', '2021-11-18'),
(8, 17, 6250, 55, 98653217, 'El usuario esta con bajo de peso', 'Tomar de 5-7 mililitros por 50 kg de peso por lo menos 4 horas antes del ejercicio.<br>\r\nDebera consumir entre 250 - 350 ,ml(un vaso comÃºn tiene 250 ml) antes del ejercicio.', '2021-11-18'),
(9, 17, 6250, 55, 98653217, 'El usuario esta con bajo de peso', 'Tomar de 5-7 mililitros por 50 kg de peso por lo menos 4 horas antes del ejercicio.<br>\r\nDebera consumir entre 250 - 350 ,ml(un vaso comÃºn tiene 250 ml) antes del ejercicio.', '2021-11-18'),
(10, 17, 6250, 55, 98653217, 'El usuario esta con bajo de peso', 'Tomar de 5-7 mililitros por 50 kg de peso por lo menos 4 horas antes del ejercicio.<br>\r\nDebera consumir entre 250 - 350 ,ml(un vaso comÃºn tiene 250 ml) antes del ejercicio.', '2021-11-18'),
(11, 17, 3250, 75, 98653217, 'El usuario esta con bajo de peso', 'Tomar de 5-7 mililitros por 50 kg de peso por lo menos 4 horas antes del ejercicio.<br>\r\nDebera consumir entre 250 - 350 ,ml(un vaso comÃºn tiene 250 ml) antes del ejercicio.', '2021-11-18'),
(12, 21, 3600, 72, 98653217, 'El usuario esta con peso normal', 'Tomar de 5-7 mililitros por 60 kg de peso por lo menos 4 horas antes del ejercicio.Debera consumir entre 300 - 420 ,ml(un vaso comÃºn tiene 250 ml) antes del ejercicio.', '2021-11-18'),
(13, 17, 4750, 60, 98653217, 'El usuario esta con bajo de peso', 'Tomar de 5-7 mililitros por 50 kg de peso por lo menos 4 horas antes del ejercicio.<br>\r\nDebera consumir entre 250 - 350 ,ml(un vaso comÃºn tiene 250 ml) antes del ejercicio.', '2021-11-18'),
(14, 24, 3950, 84, 98653217, 'El usuario esta con peso normal', 'Tomar de 5-7 mililitros por 70 kg de peso por lo menos 4 horas antes del ejercicio.<br>\r\nDebera consumir entre 350 - 490 ,ml(un vaso comÃºn tiene 250 ml) antes del ejercicio.', '2021-11-18'),
(15, 17, 4750, 60, 45781236, 'El usuario esta con bajo de peso', 'Tomar de 5-7 mililitros por 50 kg de peso por lo menos 4 horas antes del ejercicio.<br>\r\nDebera consumir entre 250 - 350 ,ml(un vaso comÃºn tiene 250 ml) antes del ejercicio.', '2021-11-19'),
(16, 24, 5450, 84, 78945612, 'El usuario esta con peso normal', 'Tomar de 5-7 mililitros por 70 kg de peso por lo menos 4 horas antes del ejercicio.<br>\r\nDebera consumir entre 350 - 490 ,ml(un vaso comÃºn tiene 250 ml) antes del ejercicio.', '2021-11-20'),
(17, 21, 3600, 90, 78945612, 'El usuario esta con peso normal', 'Tomar de 5-7 mililitros por 60 kg de peso por lo menos 4 horas antes del ejercicio.<br>\r\nDebera consumir entre 300 - 420 ,ml(un vaso comÃºn tiene 250 ml) antes del ejercicio.', '2021-11-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `dnic` int(8) NOT NULL,
  `nombrec` varchar(50) NOT NULL,
  `apellidoc` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` int(9) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`dnic`, `nombrec`, `apellidoc`, `correo`, `telefono`, `estado`) VALUES
(15779989, 'Angela', 'Ramirez', 'ramirez@gmail.com', 598484756, 0),
(16849659, 'Luis', 'Salvador', 'luis@gmail.com', 845845548, 1),
(45678125, 'Prueba', 'Pruebaape', 'prueba@gmail.com', 789451236, 0),
(45781236, 'Fernando', 'Martinez', 'nando@gmail.com', 653298741, 1),
(48548587, 'Piloto', 'Plan', 'pilo@gmail.com', 458511441, 0),
(54723930, 'Sonia', 'Quiroz', 'sonia@gmail.com', 265180066, 1),
(55684584, 'Lionel', 'Messi', 'lionel@gmail.com', 584584888, 1),
(65435789, 'Antonio', 'Salvador', 'anto@gmail.com', 789513274, 1),
(78451236, 'Gian', 'Pereyra', 'gia@gmail.com', 951753159, 1),
(78695321, 'Jorge', 'Martinez', 'jorge@outlook.com', 753951426, 1),
(78945612, 'Daniel', 'Salvador', 'glensb2000@gmail.com', 796133571, 1),
(84165818, 'Lucho', 'Salvador', 'lucho@gmail.com', 151265514, 1),
(84585989, 'Carlos', 'Salvador', 'carlos@gmail.com', 598454158, 1),
(84598489, 'Plan', 'Prueba', 'prueba@gmail.com', 569544847, 1),
(85239016, 'Sara', 'Palomino', 'sara@gmail.com', 112701031, 1),
(96881452, 'Pamela', 'Paucar', 'pamela@gmail.com', 856841481, 1),
(98653214, 'Jorge', 'Martinez', 'jorge@outlook.com', 984756324, 1),
(98653217, 'Winny', 'Flores', '72207888@idepro.pe', 798532145, 1),
(98754321, 'Jhonathan', 'Martinez', 'shonn@gmail.com', 975321548, 1),
(98756412, 'Antonella', 'Salvador', 'ja@gmail.com', 456891257, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clihor`
--

CREATE TABLE `clihor` (
  `idclihor` int(11) NOT NULL,
  `idc` int(8) NOT NULL,
  `idh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clihor`
--

INSERT INTO `clihor` (`idclihor`, `idc`, `idh`) VALUES
(1, 96881452, 1006),
(2, 98653214, 1006),
(3, 98756412, 1001),
(4, 16849659, 1002),
(5, 84585989, 1003),
(6, 15779989, 1007),
(7, 78695321, 1010),
(8, 45678125, 1010),
(9, 98653214, 1010);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `empresa` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `ruc` varchar(100) NOT NULL,
  `telefono` int(9) NOT NULL,
  `impuesto_planes` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `empresa`, `direccion`, `ruc`, `telefono`, `impuesto_planes`) VALUES
(1, 'ByoGym', 'Av. Los Heroes', '354355', 978458753, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horariosrut`
--

CREATE TABLE `horariosrut` (
  `id_horario` int(11) NOT NULL,
  `horas` varchar(50) NOT NULL,
  `dias` varchar(50) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fechainicio` date DEFAULT NULL,
  `id_rutin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horariosrut`
--

INSERT INTO `horariosrut` (`id_horario`, `horas`, `dias`, `estado`, `fechainicio`, `id_rutin`) VALUES
(1001, '10:00AM - 12:00 PM', 'Lunes - Miercoles', 1, '2021-11-09', 1),
(1002, '12:00PM -02:00 PM', 'Martes - Jueves ', 1, '2021-11-09', 2),
(1003, '08:00AM - 10:00 AM', 'Miercoles - Viernes', 1, '2021-11-09', 3),
(1004, '04:00PM -06:00 PM', 'Jueves-Viernes', 0, '2021-11-09', 4),
(1005, '12:00PM - 02:00 PM', 'Miercoles - Jueves ', 1, '2021-11-11', 6),
(1006, '06:30 PM-08:30 PM', 'Lunes-Martes', 1, '2021-11-20', 1),
(1007, '07:30 PM-08:30 PM', 'Martes-Miercoles', 1, '2021-12-02', 2),
(1008, '08:45 AM-10:45 AM', 'Lunes-Martes', 1, '2021-11-30', 14),
(1009, '07:45 AM-09:45 AM', 'Lunes-Martes-Miercoles', 1, '2021-11-21', 3),
(1010, '09:30 AM-11:30 AM', 'Lunes-Miercoles', 1, '2021-11-21', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `dni` int(8) NOT NULL,
  `nombreins` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `distrito` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` int(9) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`dni`, `nombreins`, `apellido`, `distrito`, `correo`, `telefono`, `direccion`, `estado`) VALUES
(41659451, 'Jorge', 'Martinez', 'VMT', 'jorgee@gmail.com', 541481548, 'Av. Los Heroes', 1),
(54858548, 'Cristiano', 'Ronaldo', 'La victoria', 'cr7@gmail.com', 845148157, 'Av. Los Circulos', 1),
(72207888, 'Jhon', 'Salvador', 'Surquillo', 'glensb2000@gmail.com', 789456123, 'Av. Los Heroes', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `membresias`
--

CREATE TABLE `membresias` (
  `idmemb` int(11) NOT NULL,
  `nommemb` varchar(50) NOT NULL,
  `descripcion` varchar(254) NOT NULL,
  `precio` double NOT NULL,
  `tipo_tiempo` varchar(20) NOT NULL,
  `numero_tiempo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `membresias`
--

INSERT INTO `membresias` (`idmemb`, `nommemb`, `descripcion`, `precio`, `tipo_tiempo`, `numero_tiempo`) VALUES
(1, 'MEMBRESIA B. 14 dias', 'Afiliate por un mes con este plan, ESTE PLAN SOLO SE PUEDE COMPRAR UNA VEZ. Este plan es para 1 mes ùnicamente y no se puede adquirir 2 o mas veces ', 69, 'dias', 14),
(2, 'MEMBRESIA 2MESES', 'Afiliate por 3 meses con este plan. ESTE PLAN SOLO SE PUEDE COMPRAR UNA VEZ. Compra 2 Planes 3 meses , 3 meses para ti y 3 meses para un amigo o conocidos', 153, 'meses', 2),
(3, 'MEMBRESIA X 21 dias', 'Afiliate por dos años con este plan. ESTE PLAN SOLO SE PUEDE COMPRAR DOS VECES. Compra 2 Planes 1 año, 1 año para ti y 1 año para un amigo o ambos para ti', 74.42, 'dias', 21),
(4, 'MEMBRESIA 3MESES ', 'Afíliate 6 meses con este plan. ESTE PLAN SOLO SE PUEDE COMPRAR UNA VEZ. Para grupo máximo de 6 personas. Únete con tu grupo y recibe el primer mes gratis.', 180, 'meses', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_cliente`
--

CREATE TABLE `plan_cliente` (
  `id_plan_cliente` int(11) NOT NULL,
  `codigo` varchar(200) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `id_cliente` int(8) NOT NULL,
  `id_plan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plan_cliente`
--

INSERT INTO `plan_cliente` (`id_plan_cliente`, `codigo`, `fecha_inicio`, `fecha_fin`, `id_cliente`, `id_plan`) VALUES
(4, '202110164', '2021-10-16', '2021-10-30', 98754321, 1),
(5, '202110165', '2021-10-16', '2021-11-06', 98653217, 3),
(6, '202110166', '2021-10-16', '2021-10-30', 65435789, 1),
(7, '202110167', '2021-10-16', '2021-10-30', 78945612, 1),
(8, '202110168', '2021-10-16', '2021-11-06', 45678125, 3),
(9, '202110199', '2021-10-19', '2021-12-18', 96881452, 2),
(10, '2021102010', '2021-10-20', '2022-01-18', 15779989, 4),
(11, '2021102011', '2021-10-20', '2021-11-10', 85239016, 3),
(12, '2021101912', '2021-10-19', '2022-01-17', 54723930, 4),
(13, '2021101713', '2021-10-17', '2021-12-16', 45781236, 2),
(14, '2021102314', '2021-10-23', '2022-01-21', 84165818, 4),
(15, '2021102315', '2021-10-23', '2021-12-22', 16849659, 2),
(16, '2021102916', '2021-10-29', '2022-01-27', 55684584, 4),
(19, '2021103017', '2021-10-30', '2021-12-29', 84585989, 2),
(20, '2021103020', '2021-10-30', '2021-12-29', 84598489, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reginsrut`
--

CREATE TABLE `reginsrut` (
  `idregis` int(11) NOT NULL,
  `dnins` int(8) NOT NULL,
  `id_rutin` int(11) NOT NULL,
  `id_horar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reginsrut`
--

INSERT INTO `reginsrut` (`idregis`, `dnins`, `id_rutin`, `id_horar`) VALUES
(1, 72207888, 2, 1002),
(2, 41659451, 3, 1003),
(3, 54858548, 1, 1001),
(4, 54858548, 1, 1006),
(5, 72207888, 2, 1007),
(6, 72207888, 14, 1008),
(7, 72207888, 6, 1005),
(8, 41659451, 3, 1009),
(9, 41659451, 3, 1010);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina`
--

CREATE TABLE `rutina` (
  `id_rut` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `DIA1` varchar(254) NOT NULL,
  `DIA2` varchar(254) NOT NULL,
  `DIA3` varchar(254) NOT NULL,
  `DIA4` varchar(254) NOT NULL,
  `DIA5` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rutina`
--

INSERT INTO `rutina` (`id_rut`, `nombre`, `DIA1`, `DIA2`, `DIA3`, `DIA4`, `DIA5`) VALUES
(1, 'ABDOMEN XP', 'BICICLETA 1 SERIE: 15 REP CADA PIERNA\r\n', 'FLEXION DE PIERNAS 1 SERIE: 12 REPETICIONES', 'PIERNAS EXTENDIDAS CON MOVIMIENTOS LATERALES(UTILIZANDO PESA RUSA) 1 SERIE, 10 REP. CADA LADO', 'PIERNAS EXTENDIDAS CON APERTURA(UTILIZANDO PESA RUSA)1 SERIE : 10 REPETICIONES', 'FLEXION DE PIERNAS(UTILIZANDO PESA RUSA)1 SERIE:15 REPETICIONES'),
(2, 'BODY ATTACK', 'CURL DE PIERNA SENTADO 3 sets de 15 repeticiones', 'PESO MUERTO HUMANO 3sets de 15 repeticiones', 'LEVANTAMIENTO DE CADERA HIPEREXTENSIONES 3 sets de 20 de repeticiones', 'PIERNAS EXTENDIDAS CON APERTURA(UTILIZANDO PESA RUSA)1 SERIE : 10 REPETICIONES', 'CURL DE PIERNAS ACOSTADO 3 sets de 20 repeticiones'),
(3, 'BODY COMBAT', 'BICICLETA 1 SERIE: 15 REP CADA PIERNA\r\n', 'FLEXION DE PIERNAS 1 SERIE: 12 REPETICIONES\r\n', 'PIERNAS EXTENDIDAS CON MOVIMIENTOS LATERALES(UTILIZANDO PESA RUSA) 1 SERIE, 10 REP. CADA LADO', 'PIERNAS EXTENDIDAS CON APERTURA(UTILIZANDO PESA RUSA)1 SERIE : 10 REPETICIONES', 'FLEXION DE PIERNAS(UTILIZANDO PESA RUSA)1 SERIE:15 REPETICIONES'),
(4, 'BOXING', 'BICICLETA 1 SERIE: 15 REP CADA PIERNA', 'FLEXION DE PIERNAS 1 SERIE: 12 REPETICIONES', 'PIERNAS EXTENDIDAS CON MOVIMIENTOS LATERALES(UTILIZANDO PESA RUSA) 1 SERIE, 10 REP. CADA LADO', 'PIERNAS EXTENDIDAS CON APERTURA(UTILIZANDO PESA RUSA)1 SERIE : 10 REPETICIONES', 'FLEXION DE PIERNAS(UTILIZANDO PESA RUSA)1 SERIE:15 REPETICIONES'),
(5, 'DANZAS PERUANAS', 'Aprender algunos pasos basicos', 'Aprender el golpe', 'Practicar los pies felices', 'Haz el hopscotch', 'Practica el two-step'),
(6, 'BAILE STEP', 'BICICLETA 1 SERIE: 15 REP CADA PIERNA', 'FLEXION DE PIERNAS 1 SERIE: 12 REPETICIONES', 'PIERNAS EXTENDIDAS CON MOVIMIENTOS LATERALES(UTILIZANDO PESA RUSA) 1 SERIE, 10 REP. CADA LADO', 'PIERNAS EXTENDIDAS CON APERTURA(UTILIZANDO PESA RUSA)1 SERIE : 10 REPETICIONES', 'FLEXION DE PIERNAS(UTILIZANDO PESA RUSA)1 SERIE:15 REPETICIONES'),
(7, 'MUAY THAI', 'BICICLETA 1 SERIE: 15 REP CADA PIERNA', 'FLEXION DE PIERNAS 1 SERIE: 12 REPETICIONES', 'PIERNAS EXTENDIDAS CON MOVIMIENTOS LATERALES(UTILIZANDO PESA RUSA) 1 SERIE, 10 REP. CADA LADO', 'PIERNAS EXTENDIDAS CON APERTURA(UTILIZANDO PESA RUSA)1 SERIE : 10 REPETICIONES', 'FLEXION DE PIERNAS(UTILIZANDO PESA RUSA)1 SERIE:15 REPETICIONES'),
(8, 'FULLBODY', 'BICICLETA 1 SERIE: 15 REP CADA PIERNA', 'FLEXION DE PIERNAS 1 SERIE: 12 REPETICIONES', 'PIERNAS EXTENDIDAS CON MOVIMIENTOS LATERALES(UTILIZANDO PESA RUSA) 1 SERIE, 10 REP. CADA LADO', 'PIERNAS EXTENDIDAS CON APERTURA(UTILIZANDO PESA RUSA)1 SERIE : 10 REPETICIONES\r\n', 'FLEXION DE PIERNAS(UTILIZANDO PESA RUSA)1 SERIE:15 REPETICIONES'),
(12, 'Fitness', 'SALTAR', 'PESAS ', 'CORRER ', 'MANEJAR ', 'OBS '),
(14, 'Ejercicios para ganar Musculo', 'Correr', 'Levantar Pesas ', 'Saltar ', 'Correr con mas ritmo ', 'Descanso '),
(17, 'Ejercicios', 'Prueba 1', 'Prueba 2 ', 'Prueba 3 ', 'Prueba 4 ', 'Prueba 5 ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `calculos`
--
ALTER TABLE `calculos`
  ADD PRIMARY KEY (`idcalculos`),
  ADD KEY `idcliente` (`idcliente`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`dnic`);

--
-- Indices de la tabla `clihor`
--
ALTER TABLE `clihor`
  ADD PRIMARY KEY (`idclihor`),
  ADD KEY `idc` (`idc`),
  ADD KEY `idh` (`idh`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `horariosrut`
--
ALTER TABLE `horariosrut`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `id_rut` (`id_rutin`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `membresias`
--
ALTER TABLE `membresias`
  ADD PRIMARY KEY (`idmemb`);

--
-- Indices de la tabla `plan_cliente`
--
ALTER TABLE `plan_cliente`
  ADD PRIMARY KEY (`id_plan_cliente`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_plan` (`id_plan`);

--
-- Indices de la tabla `reginsrut`
--
ALTER TABLE `reginsrut`
  ADD PRIMARY KEY (`idregis`),
  ADD KEY `dnins` (`dnins`),
  ADD KEY `id_rutin` (`id_rutin`),
  ADD KEY `id_horar` (`id_horar`);

--
-- Indices de la tabla `rutina`
--
ALTER TABLE `rutina`
  ADD PRIMARY KEY (`id_rut`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `calculos`
--
ALTER TABLE `calculos`
  MODIFY `idcalculos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `clihor`
--
ALTER TABLE `clihor`
  MODIFY `idclihor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `horariosrut`
--
ALTER TABLE `horariosrut`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT de la tabla `instructor`
--
ALTER TABLE `instructor`
  MODIFY `dni` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72207889;

--
-- AUTO_INCREMENT de la tabla `membresias`
--
ALTER TABLE `membresias`
  MODIFY `idmemb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `plan_cliente`
--
ALTER TABLE `plan_cliente`
  MODIFY `id_plan_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `reginsrut`
--
ALTER TABLE `reginsrut`
  MODIFY `idregis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `rutina`
--
ALTER TABLE `rutina`
  MODIFY `id_rut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calculos`
--
ALTER TABLE `calculos`
  ADD CONSTRAINT `calculos_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`dnic`);

--
-- Filtros para la tabla `clihor`
--
ALTER TABLE `clihor`
  ADD CONSTRAINT `clihor_ibfk_1` FOREIGN KEY (`idh`) REFERENCES `horariosrut` (`id_horario`),
  ADD CONSTRAINT `clihor_ibfk_2` FOREIGN KEY (`idc`) REFERENCES `cliente` (`dnic`);

--
-- Filtros para la tabla `horariosrut`
--
ALTER TABLE `horariosrut`
  ADD CONSTRAINT `horariosrut_ibfk_1` FOREIGN KEY (`id_rutin`) REFERENCES `rutina` (`id_rut`);

--
-- Filtros para la tabla `plan_cliente`
--
ALTER TABLE `plan_cliente`
  ADD CONSTRAINT `plan_cliente_ibfk_1` FOREIGN KEY (`id_plan`) REFERENCES `membresias` (`idmemb`),
  ADD CONSTRAINT `plan_cliente_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`dnic`);

--
-- Filtros para la tabla `reginsrut`
--
ALTER TABLE `reginsrut`
  ADD CONSTRAINT `reginsrut_ibfk_1` FOREIGN KEY (`dnins`) REFERENCES `instructor` (`dni`),
  ADD CONSTRAINT `reginsrut_ibfk_2` FOREIGN KEY (`id_rutin`) REFERENCES `rutina` (`id_rut`),
  ADD CONSTRAINT `reginsrut_ibfk_3` FOREIGN KEY (`id_horar`) REFERENCES `horariosrut` (`id_horario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
