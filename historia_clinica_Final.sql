-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: historia_clinica
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `estratos`
--

DROP TABLE IF EXISTS `estratos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estratos` (
  `estr_id` int(11) NOT NULL,
  `estr_nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`estr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estratos`
--

LOCK TABLES `estratos` WRITE;
/*!40000 ALTER TABLE `estratos` DISABLE KEYS */;
INSERT INTO `estratos` VALUES (1,'estrato 1'),(2,'estrato 2'),(3,'estrato 3');
/*!40000 ALTER TABLE `estratos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `generos`
--

DROP TABLE IF EXISTS `generos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `generos` (
  `gen_id` int(11) NOT NULL,
  `gen_nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`gen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `generos`
--

LOCK TABLES `generos` WRITE;
/*!40000 ALTER TABLE `generos` DISABLE KEYS */;
INSERT INTO `generos` VALUES (1,'Masculino'),(2,'Femenino');
/*!40000 ALTER TABLE `generos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historias`
--

DROP TABLE IF EXISTS `historias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historias` (
  `hist_id` int(11) NOT NULL,
  `hist_motv` text DEFAULT NULL,
  `hist_esfod` varchar(50) NOT NULL,
  `hist_cilod` varchar(50) NOT NULL,
  `hist_ejeod` varchar(50) NOT NULL,
  `hist_esfoi` varchar(50) NOT NULL,
  `hist_ciloi` varchar(50) NOT NULL,
  `hist_ejeoi` varchar(50) NOT NULL,
  `hist_diaod` varchar(50) NOT NULL,
  `hist_diaoi` varchar(50) NOT NULL,
  `hist_recom` text DEFAULT NULL,
  `pac_id` int(11) NOT NULL,
  PRIMARY KEY (`hist_id`),
  KEY `pac_id` (`pac_id`),
  CONSTRAINT `historias_ibfk_1` FOREIGN KEY (`pac_id`) REFERENCES `paciente` (`pac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historias`
--

LOCK TABLES `historias` WRITE;
/*!40000 ALTER TABLE `historias` DISABLE KEYS */;
INSERT INTO `historias` VALUES (1,'paciente visita por mala vision en el ojo derecho','-5.00','-0.50','180','-4.0','-0.25','180','Astigmatismo leve','sin patologia','Aplicar gotas 3 veces al dia',44852428),(2,'paciente visita por cataratas en ambos ojos','-4.50','-1.00','150','-6.00','-2.00','5','catarata leve','catarata leve','requiere cirujia',46882928),(3,'paciente visita por vision borrosa ','+0.75','-2.00','20','+0.50','+0.50','20','miopia leve','miopia leve','usar gafas de aumento',1105107020);
/*!40000 ALTER TABLE `historias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hobbies`
--

DROP TABLE IF EXISTS `hobbies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hobbies` (
  `hob_id` int(11) NOT NULL,
  `hob_nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`hob_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hobbies`
--

LOCK TABLES `hobbies` WRITE;
/*!40000 ALTER TABLE `hobbies` DISABLE KEYS */;
INSERT INTO `hobbies` VALUES (1,'ir a cine'),(2,'playa'),(3,'comida');
/*!40000 ALTER TABLE `hobbies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paciente` (
  `pac_id` int(11) NOT NULL,
  `pac_nombre` varchar(50) NOT NULL,
  `pac_apellido` varchar(50) NOT NULL,
  `pac_direccion` varchar(70) NOT NULL,
  `pac_telefono` bigint(20) NOT NULL,
  `gen_id` int(11) NOT NULL,
  `estr_id` int(11) NOT NULL,
  PRIMARY KEY (`pac_id`),
  KEY `gen_id` (`gen_id`),
  KEY `estr_id` (`estr_id`),
  CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`gen_id`) REFERENCES `generos` (`gen_id`),
  CONSTRAINT `paciente_ibfk_2` FOREIGN KEY (`estr_id`) REFERENCES `estratos` (`estr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` VALUES (44852428,'Carlos Alberto','Ocoro','calle 10 #20-30',3207501015,1,2),(46882928,'Carol','Sanchez','calle 15 3b#25-10',3255643414,2,3),(1105107020,'Juan','Alcachofa','cra 39 5A-20',3172345634,1,1);
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente_hobbies`
--

DROP TABLE IF EXISTS `paciente_hobbies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paciente_hobbies` (
  `pac_hob_id` int(11) NOT NULL,
  `pac_id` int(11) NOT NULL,
  `hob_id` int(11) NOT NULL,
  PRIMARY KEY (`pac_hob_id`),
  KEY `pac_id` (`pac_id`),
  KEY `hob_id` (`hob_id`),
  CONSTRAINT `paciente_hobbies_ibfk_1` FOREIGN KEY (`pac_id`) REFERENCES `paciente` (`pac_id`),
  CONSTRAINT `paciente_hobbies_ibfk_2` FOREIGN KEY (`hob_id`) REFERENCES `hobbies` (`hob_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente_hobbies`
--

LOCK TABLES `paciente_hobbies` WRITE;
/*!40000 ALTER TABLE `paciente_hobbies` DISABLE KEYS */;
INSERT INTO `paciente_hobbies` VALUES (1,44852428,1),(2,46882928,3),(3,1105107020,2);
/*!40000 ALTER TABLE `paciente_hobbies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `rol_id` int(11) NOT NULL,
  `rol_nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`rol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'administrador'),(2,'optometra');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usu_id` int(11) NOT NULL,
  `usu_docum` int(11) NOT NULL,
  `usu_clave` varchar(20) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `usu_nombre` varchar(70) NOT NULL,
  PRIMARY KEY (`usu_id`),
  KEY `rol_id` (`rol_id`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`rol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,34558026,'peluchito13',2,'Alejandro'),(2,35853825,'nose14',1,'Juan Manuel'),(3,11064895,'pesecito45',2,'Camilo');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-26 15:33:01
