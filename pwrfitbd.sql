-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: pwrfitbd
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
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentarios` (
  `IdComentario` int(11) NOT NULL AUTO_INCREMENT,
  `IdVideo` int(11) NOT NULL,
  `Comentario` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IdComentario`),
  KEY `IdVideo` (`IdVideo`),
  CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`IdVideo`) REFERENCES `videos` (`IdVideo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` VALUES (1,1,'comentario'),(2,1,'comentario 2'),(3,1,'comentario 3');
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacto`
--

DROP TABLE IF EXISTS `contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacto` (
  `Nombre` varchar(45) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Asunto` varchar(45) NOT NULL,
  `Mensaje` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacto`
--

LOCK TABLES `contacto` WRITE;
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` VALUES ('Wall','juan@gmail.com','Prueba','Prueba'),('Daniela casita','granda.goez@gmail.com','Prueba2','Prueba2');
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horario`
--

DROP TABLE IF EXISTS `horario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horario` (
  `IdHorario` int(11) NOT NULL,
  `Dia` varchar(11) NOT NULL,
  `Horario` varchar(20) NOT NULL,
  PRIMARY KEY (`IdHorario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horario`
--

LOCK TABLES `horario` WRITE;
/*!40000 ALTER TABLE `horario` DISABLE KEYS */;
INSERT INTO `horario` VALUES (1,'Lunes','9:00 - 11:00'),(2,'Lunes','7:00 - 9:00'),(3,'Lunes','11:00 - 13:00'),(4,'Martes','7:00 - 9:00'),(5,'Martes','9:00 - 11:00'),(6,'Martes','11:00 - 13:00'),(7,'Miércoles','7:00 - 9:00'),(8,'Miércoles','9:00 - 11:00'),(9,'Miércoles','11:00 - 13:00'),(10,'Jueves','7:00 - 9:00'),(11,'Jueves','9:00 - 11:00'),(12,'Jueves','11:00 - 13:00'),(13,'Viernes','7:00 - 9:00'),(14,'Viernes','9:00 - 11:00'),(15,'Viernes','11:00 - 13:00'),(16,'Sábado','7:00 - 9:00'),(17,'Sábado','9:00 - 11:00'),(18,'Sábado','11:00 - 13:00'),(19,'Domingo','7:00 - 9:00'),(20,'Domingo','9:00 - 11:00'),(21,'Domingo','11:00 - 13:00');
/*!40000 ALTER TABLE `horario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instructorhorario`
--

DROP TABLE IF EXISTS `instructorhorario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instructorhorario` (
  `HorarioIdInstructor` int(11) NOT NULL,
  `HorarioIdHorario` int(11) NOT NULL,
  KEY `HorarioIdInstructor` (`HorarioIdInstructor`),
  KEY `HorarioIdHorario` (`HorarioIdHorario`),
  CONSTRAINT `instructorhorario_ibfk_2` FOREIGN KEY (`HorarioIdHorario`) REFERENCES `horario` (`IdHorario`),
  CONSTRAINT `instructorhorario_ibfk_3` FOREIGN KEY (`HorarioIdInstructor`) REFERENCES `usuarios` (`IdUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instructorhorario`
--

LOCK TABLES `instructorhorario` WRITE;
/*!40000 ALTER TABLE `instructorhorario` DISABLE KEYS */;
/*!40000 ALTER TABLE `instructorhorario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membresia`
--

DROP TABLE IF EXISTS `membresia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membresia` (
  `IdMembresia` int(11) NOT NULL AUTO_INCREMENT,
  `TipoMembresia` varchar(20) DEFAULT NULL,
  `Precio` int(11) NOT NULL,
  PRIMARY KEY (`IdMembresia`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membresia`
--

LOCK TABLES `membresia` WRITE;
/*!40000 ALTER TABLE `membresia` DISABLE KEYS */;
INSERT INTO `membresia` VALUES (1,'Usuario Comprometido',460000),(2,'Usuario Casual',40000),(3,'Usuario Aficionado',5000),(4,'Miembro',0);
/*!40000 ALTER TABLE `membresia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `IdRol` int(11) NOT NULL,
  `Rol` varchar(25) NOT NULL,
  PRIMARY KEY (`IdRol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrador'),(2,'Instructor'),(3,'Cliente');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `IdTag` int(11) NOT NULL,
  `Tag` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`IdTag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Gluteos'),(2,'Abdominales'),(3,'Full-body'),(4,'Yoga'),(5,'Aeróbicos'),(6,'Espalda'),(7,'Calentamiento'),(8,'Cardio'),(9,'Piernas'),(10,'Fuerza'),(11,'Resistencia');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `Rol` int(11) NOT NULL,
  `NombreCompleto` varchar(100) NOT NULL,
  `Direccion` varchar(30) DEFAULT NULL,
  `Telefono` varchar(10) DEFAULT NULL,
  `Celular` varchar(15) DEFAULT NULL,
  `Contrasenna` varchar(40) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `Boletin` varchar(2) NOT NULL,
  `Membresia` int(11) NOT NULL,
  `Pago` varchar(20) NOT NULL,
  `Valido` date DEFAULT NULL,
  `Verificacion` varchar(6) NOT NULL,
  PRIMARY KEY (`IdUsuario`),
  KEY `Membresia` (`Membresia`),
  KEY `Rol` (`Rol`),
  CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`Membresia`) REFERENCES `membresia` (`IdMembresia`),
  CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`Rol`) REFERENCES `roles` (`IdRol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1000001,1,'Juan',NULL,NULL,NULL,'25d55ad283aa400af464c76d713c07ad','jpholguin77@misena.edu.co','NO',4,'Completo','2099-12-31',''),(1000002,2,'Julian',NULL,NULL,NULL,'25d55ad283aa400af464c76d713c07ad','jaospino481@misena.edu.co','NO',4,'Completo','2099-12-31',''),(1000003,3,'Juan Andres','CR 56 CL 94-12','5431232','3215631180','81dc9bdb52d04dc20036dbd8313ed055','juang12@gmail.com','SI',3,'Completo','2099-12-31','');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `IdVideo` int(11) NOT NULL AUTO_INCREMENT,
  `TituloVideo` varchar(45) DEFAULT NULL,
  `DescripcionVideo` varchar(255) DEFAULT NULL,
  `Video` varchar(400) NOT NULL,
  `Miniatura` varchar(200) NOT NULL,
  PRIMARY KEY (`IdVideo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'TRIKITAKATELAS','MI NIÑA BONITA MI DULCE PRINCESA ME SIENTO EN LAS NUBES, CUANDO TU ME BESAS','1 Minute Timer.mp4','adventure-time-bmo-finn-the-human-jake-the-dog-wallpaper-preview.jpg');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videospendientes`
--

DROP TABLE IF EXISTS `videospendientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videospendientes` (
  `IdVideo` int(11) NOT NULL AUTO_INCREMENT,
  `TituloVideo` varchar(45) DEFAULT NULL,
  `DescripcionVideo` varchar(255) DEFAULT NULL,
  `Video` varchar(200) NOT NULL,
  `Miniatura` varchar(200) NOT NULL,
  PRIMARY KEY (`IdVideo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videospendientes`
--

LOCK TABLES `videospendientes` WRITE;
/*!40000 ALTER TABLE `videospendientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `videospendientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videotags`
--

DROP TABLE IF EXISTS `videotags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videotags` (
  `IdVideo` int(11) NOT NULL,
  `IdTag` int(11) NOT NULL,
  KEY `IdTag` (`IdTag`),
  KEY `IdVideo` (`IdVideo`),
  CONSTRAINT `videotags_ibfk_1` FOREIGN KEY (`IdVideo`) REFERENCES `videos` (`IdVideo`),
  CONSTRAINT `videotags_ibfk_2` FOREIGN KEY (`IdTag`) REFERENCES `tags` (`IdTag`),
  CONSTRAINT `videotags_ibfk_3` FOREIGN KEY (`IdVideo`) REFERENCES `videospendientes` (`IdVideo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videotags`
--

LOCK TABLES `videotags` WRITE;
/*!40000 ALTER TABLE `videotags` DISABLE KEYS */;
/*!40000 ALTER TABLE `videotags` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-31 11:20:35
