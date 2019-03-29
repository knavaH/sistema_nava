-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 12:05 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema_nava`
--

-- --------------------------------------------------------

--
-- Table structure for table `actividad`
--

CREATE TABLE `actividad` (
  `Id` int(99) NOT NULL,
  `Titulo` varchar(120) NOT NULL,
  `Caracteristicas` text NOT NULL,
  `Archivo_Muestra` varchar(120) NOT NULL,
  `Fecha_Vencimiento` date NOT NULL,
  `Matricula_Maestro` int(9) NOT NULL,
  `Clv_Asignatura` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `actividad_alumno`
--

CREATE TABLE `actividad_alumno` (
  `Id_Actividad` int(99) NOT NULL,
  `Matricula_Alumno` int(99) NOT NULL,
  `Archivo_Enviado` varchar(250) NOT NULL,
  `Calificacion` int(3) NOT NULL,
  `Fecha_Evaluado` date NOT NULL,
  `Fecha_Subido` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
  `Matricula` int(9) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellido_1` varchar(20) NOT NULL,
  `Apellido_2` varchar(20) NOT NULL,
  `Correo` varchar(60) NOT NULL,
  `Telefono` varchar(12) NOT NULL,
  `Movil` varchar(12) NOT NULL,
  `CURP` varchar(18) NOT NULL,
  `Calle` varchar(120) NOT NULL,
  `Numero_Exterior` varchar(5) NOT NULL,
  `Numero_Interior` varchar(5) NOT NULL,
  `Colonia` varchar(60) NOT NULL,
  `Municipio` varchar(60) NOT NULL,
  `Clv_Usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`Matricula`, `Nombres`, `Apellido_1`, `Apellido_2`, `Correo`, `Telefono`, `Movil`, `CURP`, `Calle`, `Numero_Exterior`, `Numero_Interior`, `Colonia`, `Municipio`, `Clv_Usuario`) VALUES
(115, 'kevin orlando', 'nava', 'huitron', 'kevin@Gmail.com', '1234567890', '1234567890', 'NAHK970831HGRVTV08', 'emiliano zapata', '100', '100', 'lucio cabaÃ±as', 'San Luis Potosi', 'knavahuitron');

-- --------------------------------------------------------

--
-- Table structure for table `alumno`
--

CREATE TABLE `alumno` (
  `Matricula` int(9) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellido_1` varchar(20) NOT NULL,
  `Apellido_2` varchar(20) NOT NULL,
  `Correo` varchar(60) NOT NULL,
  `Telefono` varchar(12) NOT NULL,
  `Movil` varchar(12) NOT NULL,
  `CURP` varchar(18) NOT NULL,
  `Password` varchar(120) NOT NULL,
  `Turno` varchar(10) NOT NULL,
  `Clv_Carrera` varchar(6) NOT NULL,
  `Semestre` varchar(10) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Fecha_Registro` date NOT NULL,
  `Calle` varchar(120) NOT NULL,
  `Numero_Interior` varchar(5) NOT NULL,
  `Numero_Exterior` varchar(5) NOT NULL,
  `Colonia` varchar(60) NOT NULL,
  `Municipio` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumno`
--

INSERT INTO `alumno` (`Matricula`, `Nombres`, `Apellido_1`, `Apellido_2`, `Correo`, `Telefono`, `Movil`, `CURP`, `Password`, `Turno`, `Clv_Carrera`, `Semestre`, `Status`, `Fecha_Registro`, `Calle`, `Numero_Interior`, `Numero_Exterior`, `Colonia`, `Municipio`) VALUES
(4, 'kevin', 'nava', 'huitron', 'kevin@', '123', '321', 'nahl', 'knavahuitron', 'Matutino', 'ISSC', '1', 'Activo', '2019-03-12', 'calle 1', '20', '10', 'colonia 1', 'slp'),
(5, 'jonathan', 'vargas', 'armendariz', 'jon@', '123', '123', 'VAJJ', 'jvargasarmendariz', 'Vespertino', 'ISSC', '1', 'Activo', '2019-03-12', 'CALLE 2', '40', '20', 'colonia 2', 'slp'),
(7, 'lkjl', 'kj', 'lkj', 'lj', 'lkj', 'lkj', 'lkj', 'lkjlkj', 'Matutino', 'emp', '1', 'Activo', '2019-03-19', 'jh', 'kjh', 'jkh', 'jh', 'k');

-- --------------------------------------------------------

--
-- Table structure for table `alumno_beca`
--

CREATE TABLE `alumno_beca` (
  `Matricula_Alumno` int(9) NOT NULL,
  `Clv_Beca` varchar(20) NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `alumno_grupo`
--

CREATE TABLE `alumno_grupo` (
  `Id` int(11) NOT NULL,
  `Matricula_Alumno` int(9) NOT NULL,
  `Clv_Grupo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `asignatura`
--

CREATE TABLE `asignatura` (
  `Clave` varchar(15) NOT NULL,
  `Nombre` varchar(120) NOT NULL,
  `Clv_Carrera` varchar(15) NOT NULL,
  `Creditos` int(3) NOT NULL,
  `Semestre` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `asignatura`
--

INSERT INTO `asignatura` (`Clave`, `Nombre`, `Clv_Carrera`, `Creditos`, `Semestre`) VALUES
('mat', 'mate', 'ISSC', 10, '1'),
('mat2', 'mate 2', 'ISSC', 2, '2'),
('qwe', 'adadsa', 'emp', 13, '2');

-- --------------------------------------------------------

--
-- Table structure for table `asignatura_alumno`
--

CREATE TABLE `asignatura_alumno` (
  `Id` int(99) NOT NULL,
  `Clv_Asignatura` varchar(15) NOT NULL,
  `Matricula_Alumno` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aviso`
--

CREATE TABLE `aviso` (
  `Folio` int(11) NOT NULL,
  `Titulo` varchar(256) NOT NULL,
  `Descripcion` text NOT NULL,
  `Fecha_Publicacion` date NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Matricula_Administrador` int(30) NOT NULL,
  `Archivo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `beca`
--

CREATE TABLE `beca` (
  `Clave` varchar(30) NOT NULL,
  `TIpo_Beca` varchar(60) NOT NULL,
  `Institucion` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `calendario`
--

CREATE TABLE `calendario` (
  `Folio` int(99) NOT NULL,
  `Titulo` varchar(256) NOT NULL,
  `Descripcion` text NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Fin` date NOT NULL,
  `Creado` date NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Matricula_Administrador` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `calificacion_final`
--

CREATE TABLE `calificacion_final` (
  `Folio` int(99) NOT NULL,
  `Calificacion` float NOT NULL,
  `Fecha` date NOT NULL,
  `Asistencia` int(3) NOT NULL,
  `Clv_Asignatura_Alumno` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `carrera`
--

CREATE TABLE `carrera` (
  `Clave` varchar(15) NOT NULL,
  `Nombre` varchar(120) NOT NULL,
  `Matricula_Coordinador` int(9) NOT NULL,
  `Creditos` int(3) NOT NULL,
  `Creditos_Minimos_Servicio_Social` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carrera`
--

INSERT INTO `carrera` (`Clave`, `Nombre`, `Matricula_Coordinador`, `Creditos`, `Creditos_Minimos_Servicio_Social`) VALUES
('123', 'carrea', 1, 123, 23),
('a', 'a', 1, 1, 1),
('b', 'b', 1, 1, 1),
('c', 'c', 1, 1, 1),
('car', 'carerrin', 1, 34, 34),
('d', 'b', 1, 1, 1),
('e', 'b', 1, 1, 1),
('emp', 'empresas', 1, 450, 200),
('f', 'b', 1, 1, 1),
('g', 'b', 1, 1, 1),
('h', 'b', 1, 1, 1),
('i', 'b', 1, 1, 1),
('ISSC', 'Ingenieria en software y sistemas computacionales', 1, 470, 100),
('j', 'c', 1, 1, 1),
('k', 'b', 1, 1, 1),
('l', 'b', 1, 1, 1),
('m', 'b', 1, 1, 1),
('n', 'b', 1, 1, 1),
('o', 'b', 1, 1, 1),
('p', 'b', 1, 1, 1),
('q', 'b', 1, 1, 1),
('r', 'b', 1, 1, 1),
('s', 'b', 1, 1, 1),
('t', 'b', 1, 1, 1),
('z', 'b', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `control_escolar`
--

CREATE TABLE `control_escolar` (
  `Matricula` int(9) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellido_1` varchar(20) NOT NULL,
  `Apellido_2` varchar(20) NOT NULL,
  `Correo` varchar(60) NOT NULL,
  `Telefono` varchar(12) NOT NULL,
  `Movil` varchar(12) NOT NULL,
  `CURP` varchar(18) NOT NULL,
  `Calle` varchar(120) NOT NULL,
  `Numero_Exterior` varchar(5) NOT NULL,
  `Numero_Interior` varchar(5) NOT NULL,
  `Colonia` varchar(60) NOT NULL,
  `Municipio` varchar(60) NOT NULL,
  `Clv_Usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `coordinador`
--

CREATE TABLE `coordinador` (
  `Matricula` int(9) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellido_1` varchar(20) NOT NULL,
  `Apellido_2` varchar(20) NOT NULL,
  `Correo` varchar(60) NOT NULL,
  `Telefono` varchar(12) NOT NULL,
  `Movil` varchar(12) NOT NULL,
  `CURP` varchar(18) NOT NULL,
  `Calle` varchar(120) NOT NULL,
  `Numero_Exterior` varchar(10) NOT NULL,
  `Numero_Interior` varchar(6) NOT NULL,
  `Colonia` varchar(10) NOT NULL,
  `Municipio` varchar(20) NOT NULL,
  `Clv_Usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coordinador`
--

INSERT INTO `coordinador` (`Matricula`, `Nombres`, `Apellido_1`, `Apellido_2`, `Correo`, `Telefono`, `Movil`, `CURP`, `Calle`, `Numero_Exterior`, `Numero_Interior`, `Colonia`, `Municipio`, `Clv_Usuario`) VALUES
(1, 'coordinador', '2', '2', 'coordi@', '456', '654', 'coo', 'calle 2', '2', '2', 'colonia 2', 'slp', 'c22');

-- --------------------------------------------------------

--
-- Table structure for table `directivo`
--

CREATE TABLE `directivo` (
  `Matricula` int(9) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellido_1` varchar(20) NOT NULL,
  `Apellido_2` varchar(20) NOT NULL,
  `Correo` varchar(60) NOT NULL,
  `Telefono` varchar(12) NOT NULL,
  `Movil` varchar(12) NOT NULL,
  `CURP` varchar(18) NOT NULL,
  `Calle` varchar(120) NOT NULL,
  `Numero_Exterior` varchar(5) NOT NULL,
  `Numero_Interior` varchar(5) NOT NULL,
  `Colonia` varchar(60) NOT NULL,
  `Municipio` varchar(60) NOT NULL,
  `Clv_Usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `directivo`
--

INSERT INTO `directivo` (`Matricula`, `Nombres`, `Apellido_1`, `Apellido_2`, `Correo`, `Telefono`, `Movil`, `CURP`, `Calle`, `Numero_Exterior`, `Numero_Interior`, `Colonia`, `Municipio`, `Clv_Usuario`) VALUES
(9, 'directivo', 'directivo', 'directivo', 'kjlk', 'jkl', 'jl', 'kj', 'lkj', 'lkj', 'lkj', 'lkj', 'lk', 'ddirectivodirectivo'),
(18, 'directivo', 'directivo', 'directivo', 'jkh', 'kjhj', 'kh', 'kjh', 'kjh', 'kjh', 'kj', 'kjh', 'hkj', 'ddirectivodirectivo38');

-- --------------------------------------------------------

--
-- Table structure for table `entrada_alumno`
--

CREATE TABLE `entrada_alumno` (
  `Id` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Matricula_Alumno` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `entrada_personal`
--

CREATE TABLE `entrada_personal` (
  `Id` int(99) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Clv_Usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `entrega_periodo`
--

CREATE TABLE `entrega_periodo` (
  `Id_Maestro_Grupo_Asignatura` int(99) NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Fin` int(11) NOT NULL,
  `TIpo_Parcial` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `grupo`
--

CREATE TABLE `grupo` (
  `Clv_Grupo` varchar(15) NOT NULL,
  `Semestre` varchar(2) NOT NULL,
  `Clv_Carrera` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `libreria`
--

CREATE TABLE `libreria` (
  `Matricula` int(9) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellido_1` varchar(20) NOT NULL,
  `Apellido_2` varchar(20) NOT NULL,
  `Correo` varchar(60) NOT NULL,
  `Telefono` varchar(12) NOT NULL,
  `Movil` varchar(12) NOT NULL,
  `CURP` varchar(18) NOT NULL,
  `Calle` varchar(120) NOT NULL,
  `Numero_Exterior` varchar(5) NOT NULL,
  `Numero_Interior` varchar(5) NOT NULL,
  `Colonia` varchar(60) NOT NULL,
  `Municipio` varchar(60) NOT NULL,
  `Clv_Usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `libro`
--

CREATE TABLE `libro` (
  `Folio` int(99) NOT NULL,
  `Titulo` varchar(120) NOT NULL,
  `Autor` varchar(250) NOT NULL,
  `Editorial` varchar(130) NOT NULL,
  `Disponibilidad_FIsico` int(9) NOT NULL,
  `Imagen_Url` varchar(250) NOT NULL,
  `Libro_Url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `libro_alumno`
--

CREATE TABLE `libro_alumno` (
  `Id` int(99) NOT NULL,
  `Folio_Libro` int(9) NOT NULL,
  `Matricula_Alumno` int(99) NOT NULL,
  `Fecha_Salida` date NOT NULL,
  `Hora_Salida` time NOT NULL,
  `Fecha_Devolucion` date NOT NULL,
  `Hora_Devolucion` time NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Matricula_Libreria` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `libro_personal`
--

CREATE TABLE `libro_personal` (
  `Id` int(9) NOT NULL,
  `Folio_Libro` int(9) NOT NULL,
  `Clv_Personal` varchar(30) NOT NULL,
  `Fecha_Salida` date NOT NULL,
  `Hora_Salida` time NOT NULL,
  `Fecha_Devolucion` date NOT NULL,
  `Hora_Devolucion` time NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Matricula_Libreria` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `maestro`
--

CREATE TABLE `maestro` (
  `Matricula` int(9) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellido_1` varchar(20) NOT NULL,
  `Apellido_2` varchar(20) NOT NULL,
  `Correo` varchar(60) NOT NULL,
  `Telefono` varchar(12) NOT NULL,
  `Movil` varchar(12) NOT NULL,
  `CURP` varchar(18) NOT NULL,
  `Calle` varchar(120) NOT NULL,
  `Numero_Exterior` varchar(5) NOT NULL,
  `Numero_Interior` varchar(5) NOT NULL,
  `Colonia` varchar(60) NOT NULL,
  `Municipio` varchar(60) NOT NULL,
  `Clv_Usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `maestro_asignatura`
--

CREATE TABLE `maestro_asignatura` (
  `Id` int(11) NOT NULL,
  `Clv_Asignatura` varchar(15) NOT NULL,
  `Matricula_Maestro` int(9) NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `maestro_grupo_asignatura`
--

CREATE TABLE `maestro_grupo_asignatura` (
  `Id` int(11) NOT NULL,
  `Matricula_Maestro` int(9) NOT NULL,
  `Clv_Grupo` varchar(15) NOT NULL,
  `Clv_Asignatura` varchar(15) NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `parcial_1`
--

CREATE TABLE `parcial_1` (
  `Folio` int(99) NOT NULL,
  `Calificacion` float NOT NULL,
  `Fecha` date NOT NULL,
  `Asistencia` int(3) NOT NULL,
  `Clv_Asignatura_Alumno` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `parcial_2`
--

CREATE TABLE `parcial_2` (
  `Folio` int(99) NOT NULL,
  `Calificacion` float NOT NULL,
  `Fecha` date NOT NULL,
  `Asistencia` int(3) NOT NULL,
  `Clv_Asignatura_Alumno` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `parcial_3`
--

CREATE TABLE `parcial_3` (
  `Folio` int(99) NOT NULL,
  `Calificacion` float NOT NULL,
  `Fecha` date NOT NULL,
  `Asistencia` int(3) NOT NULL,
  `Clv_Asignatura_Alumno` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `salida_alumno`
--

CREATE TABLE `salida_alumno` (
  `Id` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Id_Entrada` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `salida_personal`
--

CREATE TABLE `salida_personal` (
  `Id` int(99) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Id_Entrada` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `Clv_Usuario` varchar(30) NOT NULL,
  `Password` varchar(120) NOT NULL,
  `Rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`Clv_Usuario`, `Password`, `Rol`) VALUES
('c22', 'c22', 'Coordinador'),
('ddirectivodirectivo', 'ddirectivodirectivo', 'Directivo'),
('ddirectivodirectivo38', 'ddirectivodirectivo38', 'Directivo'),
('knavahuitron', 'knavahuitron', 'Administrador');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Clv_Maestro` (`Matricula_Maestro`),
  ADD KEY `Clv_Asignatura` (`Clv_Asignatura`);

--
-- Indexes for table `actividad_alumno`
--
ALTER TABLE `actividad_alumno`
  ADD KEY `Id_Actividad` (`Id_Actividad`),
  ADD KEY `Matricula_Alumno` (`Matricula_Alumno`);

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`Matricula`),
  ADD KEY `Clv_Usuario` (`Clv_Usuario`);

--
-- Indexes for table `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`Matricula`),
  ADD KEY `Clv_Carrera` (`Clv_Carrera`);

--
-- Indexes for table `alumno_beca`
--
ALTER TABLE `alumno_beca`
  ADD KEY `Clv_Beca` (`Clv_Beca`),
  ADD KEY `Clv_Alumno` (`Matricula_Alumno`);

--
-- Indexes for table `alumno_grupo`
--
ALTER TABLE `alumno_grupo`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Clv_Alumno` (`Matricula_Alumno`),
  ADD KEY `Clv_Grupo` (`Clv_Grupo`);

--
-- Indexes for table `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`Clave`),
  ADD KEY `Clv_Carrera` (`Clv_Carrera`);

--
-- Indexes for table `asignatura_alumno`
--
ALTER TABLE `asignatura_alumno`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Clv_Alumno` (`Matricula_Alumno`),
  ADD KEY `Clv_Asignatura` (`Clv_Asignatura`);

--
-- Indexes for table `aviso`
--
ALTER TABLE `aviso`
  ADD PRIMARY KEY (`Folio`),
  ADD KEY `Clv_Administrador` (`Matricula_Administrador`);

--
-- Indexes for table `beca`
--
ALTER TABLE `beca`
  ADD PRIMARY KEY (`Clave`);

--
-- Indexes for table `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`Folio`),
  ADD KEY `Clv_Administrador` (`Matricula_Administrador`);

--
-- Indexes for table `calificacion_final`
--
ALTER TABLE `calificacion_final`
  ADD PRIMARY KEY (`Folio`),
  ADD KEY `Clv_Asignatura_Alumno` (`Clv_Asignatura_Alumno`);

--
-- Indexes for table `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`Clave`),
  ADD KEY `Clv_Coordinador` (`Matricula_Coordinador`);

--
-- Indexes for table `control_escolar`
--
ALTER TABLE `control_escolar`
  ADD PRIMARY KEY (`Matricula`),
  ADD KEY `Clv_Usuario` (`Clv_Usuario`);

--
-- Indexes for table `coordinador`
--
ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`Matricula`),
  ADD KEY `Clv_Usuario` (`Clv_Usuario`);

--
-- Indexes for table `directivo`
--
ALTER TABLE `directivo`
  ADD PRIMARY KEY (`Matricula`),
  ADD KEY `Clv_Usuario` (`Clv_Usuario`);

--
-- Indexes for table `entrada_alumno`
--
ALTER TABLE `entrada_alumno`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Matricula_Alumno` (`Matricula_Alumno`);

--
-- Indexes for table `entrada_personal`
--
ALTER TABLE `entrada_personal`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Clv_Usuario` (`Clv_Usuario`);

--
-- Indexes for table `entrega_periodo`
--
ALTER TABLE `entrega_periodo`
  ADD KEY `Clv_Maestro_Grupo` (`Id_Maestro_Grupo_Asignatura`);

--
-- Indexes for table `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`Clv_Grupo`),
  ADD KEY `Clv_Carrera` (`Clv_Carrera`);

--
-- Indexes for table `libreria`
--
ALTER TABLE `libreria`
  ADD PRIMARY KEY (`Matricula`),
  ADD KEY `Clv_Usuario` (`Clv_Usuario`);

--
-- Indexes for table `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`Folio`);

--
-- Indexes for table `libro_alumno`
--
ALTER TABLE `libro_alumno`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Folio_Libro` (`Folio_Libro`),
  ADD KEY `Matricula_Alumno` (`Matricula_Alumno`),
  ADD KEY `Matricula_Libreria` (`Matricula_Libreria`);

--
-- Indexes for table `libro_personal`
--
ALTER TABLE `libro_personal`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Matricula_Libreria` (`Matricula_Libreria`),
  ADD KEY `Folio_Libro` (`Folio_Libro`),
  ADD KEY `Clv_Personal` (`Clv_Personal`);

--
-- Indexes for table `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`Matricula`),
  ADD KEY `Clv_Usuario` (`Clv_Usuario`);

--
-- Indexes for table `maestro_asignatura`
--
ALTER TABLE `maestro_asignatura`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Clv_Asignatura` (`Clv_Asignatura`),
  ADD KEY `Clv_Maestro` (`Matricula_Maestro`);

--
-- Indexes for table `maestro_grupo_asignatura`
--
ALTER TABLE `maestro_grupo_asignatura`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Clv_Maestro` (`Matricula_Maestro`),
  ADD KEY `Clv_Grupo` (`Clv_Grupo`),
  ADD KEY `Clv_Asignatura` (`Clv_Asignatura`);

--
-- Indexes for table `parcial_1`
--
ALTER TABLE `parcial_1`
  ADD PRIMARY KEY (`Folio`),
  ADD KEY `Clv_Asignatura_Alumno` (`Clv_Asignatura_Alumno`);

--
-- Indexes for table `parcial_2`
--
ALTER TABLE `parcial_2`
  ADD PRIMARY KEY (`Folio`),
  ADD KEY `Clv_Asignatura_Alumno` (`Clv_Asignatura_Alumno`);

--
-- Indexes for table `parcial_3`
--
ALTER TABLE `parcial_3`
  ADD PRIMARY KEY (`Folio`),
  ADD KEY `Clv_Asignatura_Alumno` (`Clv_Asignatura_Alumno`);

--
-- Indexes for table `salida_alumno`
--
ALTER TABLE `salida_alumno`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Entrada` (`Id_Entrada`);

--
-- Indexes for table `salida_personal`
--
ALTER TABLE `salida_personal`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Entrada` (`Id_Entrada`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Clv_Usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actividad`
--
ALTER TABLE `actividad`
  MODIFY `Id` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `actividad_alumno`
--
ALTER TABLE `actividad_alumno`
  MODIFY `Id_Actividad` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `Matricula` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `alumno`
--
ALTER TABLE `alumno`
  MODIFY `Matricula` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `alumno_grupo`
--
ALTER TABLE `alumno_grupo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aviso`
--
ALTER TABLE `aviso`
  MODIFY `Folio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `calendario`
--
ALTER TABLE `calendario`
  MODIFY `Folio` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `calificacion_final`
--
ALTER TABLE `calificacion_final`
  MODIFY `Folio` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `control_escolar`
--
ALTER TABLE `control_escolar`
  MODIFY `Matricula` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coordinador`
--
ALTER TABLE `coordinador`
  MODIFY `Matricula` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `directivo`
--
ALTER TABLE `directivo`
  MODIFY `Matricula` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `entrada_alumno`
--
ALTER TABLE `entrada_alumno`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `entrada_personal`
--
ALTER TABLE `entrada_personal`
  MODIFY `Id` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `libreria`
--
ALTER TABLE `libreria`
  MODIFY `Matricula` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `libro`
--
ALTER TABLE `libro`
  MODIFY `Folio` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `libro_alumno`
--
ALTER TABLE `libro_alumno`
  MODIFY `Id` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `libro_personal`
--
ALTER TABLE `libro_personal`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `maestro`
--
ALTER TABLE `maestro`
  MODIFY `Matricula` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `maestro_asignatura`
--
ALTER TABLE `maestro_asignatura`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `maestro_grupo_asignatura`
--
ALTER TABLE `maestro_grupo_asignatura`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `parcial_1`
--
ALTER TABLE `parcial_1`
  MODIFY `Folio` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `parcial_2`
--
ALTER TABLE `parcial_2`
  MODIFY `Folio` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `parcial_3`
--
ALTER TABLE `parcial_3`
  MODIFY `Folio` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salida_alumno`
--
ALTER TABLE `salida_alumno`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salida_personal`
--
ALTER TABLE `salida_personal`
  MODIFY `Id` int(99) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `actividad_ibfk_1` FOREIGN KEY (`Clv_Asignatura`) REFERENCES `asignatura` (`Clave`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actividad_ibfk_2` FOREIGN KEY (`Matricula_Maestro`) REFERENCES `maestro` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `actividad_alumno`
--
ALTER TABLE `actividad_alumno`
  ADD CONSTRAINT `actividad_alumno_ibfk_1` FOREIGN KEY (`Id_Actividad`) REFERENCES `actividad` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actividad_alumno_ibfk_2` FOREIGN KEY (`Matricula_Alumno`) REFERENCES `alumno` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`Clv_Usuario`) REFERENCES `usuario` (`Clv_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`Clv_Carrera`) REFERENCES `carrera` (`Clave`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `alumno_beca`
--
ALTER TABLE `alumno_beca`
  ADD CONSTRAINT `alumno_beca_ibfk_1` FOREIGN KEY (`Matricula_Alumno`) REFERENCES `alumno` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_beca_ibfk_2` FOREIGN KEY (`Clv_Beca`) REFERENCES `beca` (`Clave`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `alumno_grupo`
--
ALTER TABLE `alumno_grupo`
  ADD CONSTRAINT `alumno_grupo_ibfk_1` FOREIGN KEY (`Clv_Grupo`) REFERENCES `grupo` (`Clv_Grupo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_grupo_ibfk_2` FOREIGN KEY (`Matricula_Alumno`) REFERENCES `alumno` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`Clv_Carrera`) REFERENCES `carrera` (`Clave`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `asignatura_alumno`
--
ALTER TABLE `asignatura_alumno`
  ADD CONSTRAINT `asignatura_alumno_ibfk_1` FOREIGN KEY (`Matricula_Alumno`) REFERENCES `alumno` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignatura_alumno_ibfk_2` FOREIGN KEY (`Clv_Asignatura`) REFERENCES `asignatura` (`Clave`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `aviso`
--
ALTER TABLE `aviso`
  ADD CONSTRAINT `aviso_ibfk_1` FOREIGN KEY (`Matricula_Administrador`) REFERENCES `administrador` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `calendario`
--
ALTER TABLE `calendario`
  ADD CONSTRAINT `calendario_ibfk_1` FOREIGN KEY (`Matricula_Administrador`) REFERENCES `administrador` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `calificacion_final`
--
ALTER TABLE `calificacion_final`
  ADD CONSTRAINT `calificacion_final_ibfk_1` FOREIGN KEY (`Clv_Asignatura_Alumno`) REFERENCES `asignatura_alumno` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `carrera`
--
ALTER TABLE `carrera`
  ADD CONSTRAINT `carrera_ibfk_1` FOREIGN KEY (`Matricula_Coordinador`) REFERENCES `coordinador` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `control_escolar`
--
ALTER TABLE `control_escolar`
  ADD CONSTRAINT `control_escolar_ibfk_1` FOREIGN KEY (`Clv_Usuario`) REFERENCES `usuario` (`Clv_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `coordinador`
--
ALTER TABLE `coordinador`
  ADD CONSTRAINT `coordinador_ibfk_1` FOREIGN KEY (`Clv_Usuario`) REFERENCES `usuario` (`Clv_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `directivo`
--
ALTER TABLE `directivo`
  ADD CONSTRAINT `directivo_ibfk_1` FOREIGN KEY (`Clv_Usuario`) REFERENCES `usuario` (`Clv_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `entrada_alumno`
--
ALTER TABLE `entrada_alumno`
  ADD CONSTRAINT `entrada_alumno_ibfk_1` FOREIGN KEY (`Matricula_Alumno`) REFERENCES `alumno` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `entrada_personal`
--
ALTER TABLE `entrada_personal`
  ADD CONSTRAINT `entrada_personal_ibfk_1` FOREIGN KEY (`Clv_Usuario`) REFERENCES `usuario` (`Clv_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `entrega_periodo`
--
ALTER TABLE `entrega_periodo`
  ADD CONSTRAINT `entrega_periodo_ibfk_2` FOREIGN KEY (`Id_Maestro_Grupo_Asignatura`) REFERENCES `maestro_grupo_asignatura` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`Clv_Carrera`) REFERENCES `carrera` (`Clave`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `libreria`
--
ALTER TABLE `libreria`
  ADD CONSTRAINT `libreria_ibfk_1` FOREIGN KEY (`Clv_Usuario`) REFERENCES `usuario` (`Clv_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `libro_alumno`
--
ALTER TABLE `libro_alumno`
  ADD CONSTRAINT `libro_alumno_ibfk_1` FOREIGN KEY (`Matricula_Alumno`) REFERENCES `alumno` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libro_alumno_ibfk_2` FOREIGN KEY (`Folio_Libro`) REFERENCES `libro` (`Folio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libro_alumno_ibfk_3` FOREIGN KEY (`Matricula_Libreria`) REFERENCES `libreria` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `libro_personal`
--
ALTER TABLE `libro_personal`
  ADD CONSTRAINT `libro_personal_ibfk_1` FOREIGN KEY (`Folio_Libro`) REFERENCES `libro` (`Folio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libro_personal_ibfk_2` FOREIGN KEY (`Clv_Personal`) REFERENCES `usuario` (`Clv_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libro_personal_ibfk_3` FOREIGN KEY (`Matricula_Libreria`) REFERENCES `libreria` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maestro`
--
ALTER TABLE `maestro`
  ADD CONSTRAINT `maestro_ibfk_1` FOREIGN KEY (`Clv_Usuario`) REFERENCES `usuario` (`Clv_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maestro_grupo_asignatura`
--
ALTER TABLE `maestro_grupo_asignatura`
  ADD CONSTRAINT `maestro_grupo_asignatura_ibfk_1` FOREIGN KEY (`Clv_Grupo`) REFERENCES `grupo` (`Clv_Grupo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `maestro_grupo_asignatura_ibfk_3` FOREIGN KEY (`Clv_Asignatura`) REFERENCES `asignatura` (`Clave`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `maestro_grupo_asignatura_ibfk_4` FOREIGN KEY (`Matricula_Maestro`) REFERENCES `maestro` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parcial_1`
--
ALTER TABLE `parcial_1`
  ADD CONSTRAINT `parcial_1_ibfk_1` FOREIGN KEY (`Clv_Asignatura_Alumno`) REFERENCES `asignatura_alumno` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parcial_2`
--
ALTER TABLE `parcial_2`
  ADD CONSTRAINT `parcial_2_ibfk_1` FOREIGN KEY (`Clv_Asignatura_Alumno`) REFERENCES `asignatura_alumno` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parcial_3`
--
ALTER TABLE `parcial_3`
  ADD CONSTRAINT `parcial_3_ibfk_1` FOREIGN KEY (`Clv_Asignatura_Alumno`) REFERENCES `asignatura_alumno` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salida_alumno`
--
ALTER TABLE `salida_alumno`
  ADD CONSTRAINT `salida_alumno_ibfk_1` FOREIGN KEY (`Id_Entrada`) REFERENCES `entrada_alumno` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salida_personal`
--
ALTER TABLE `salida_personal`
  ADD CONSTRAINT `salida_personal_ibfk_1` FOREIGN KEY (`Id_Entrada`) REFERENCES `entrada_personal` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
