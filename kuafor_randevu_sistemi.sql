-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: localhost    Database: kuafor_randevu
-- ------------------------------------------------------
-- Server version	8.0.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `appointment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `artist_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `date` date NOT NULL,
  `process_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_artist` (`artist_id`),
  KEY `fk_customer` (`customer_id`),
  KEY `fk_process_type` (`process_id`),
  CONSTRAINT `fk_artist` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_process_type` FOREIGN KEY (`process_id`) REFERENCES `process` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointment`
--

LOCK TABLES `appointment` WRITE;
/*!40000 ALTER TABLE `appointment` DISABLE KEYS */;
INSERT INTO `appointment` VALUES (2,6,1,'2021-05-10',11),(3,3,1,'2021-05-04',8),(4,5,2,'2021-06-30',1),(5,2,2,'2021-04-06',2),(9,7,3,'2021-06-26',10),(10,8,3,'2021-06-25',9),(12,10,1,'2021-06-26',1),(13,10,1,'2021-06-26',10),(14,10,1,'2021-06-26',7),(15,10,4,'2021-06-20',1),(16,10,4,'2021-06-20',10),(17,10,4,'2021-06-20',7),(21,8,1,'2021-06-13',12);
/*!40000 ALTER TABLE `appointment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artist`
--

DROP TABLE IF EXISTS `artist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artist` (
  `artist_id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(45) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `lastName` varchar(45) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `position` int NOT NULL,
  PRIMARY KEY (`artist_id`),
  KEY `fk_process` (`position`),
  CONSTRAINT `fk_process` FOREIGN KEY (`position`) REFERENCES `kind-of-process` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artist`
--

LOCK TABLES `artist` WRITE;
/*!40000 ALTER TABLE `artist` DISABLE KEYS */;
INSERT INTO `artist` VALUES (1,'artist1','artist1',1),(2,'artist2','2',1),(3,'artist3','artist3',1),(4,'artist4','artist4',1),(5,'artist5','artist5',1),(6,'artist6','artist6',2),(7,'artist7','artist7',2),(8,'artist8','artist8',2),(9,'artist9','artist9',2),(10,'artist10','artist10',2);
/*!40000 ALTER TABLE `artist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer` (
  `firstName` varchar(45) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `lastName` varchar(45) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `phoneNo` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `customer_id` int NOT NULL AUTO_INCREMENT,
  `customer_password` varchar(8) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `customer_password_UNIQUE` (`customer_password`),
  KEY `fk_password` (`customer_password`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES ('zeynep','demirel','zeynepdemirel081@gmail.com','111111',1,'9999'),('deneme','deneme','deneme@deneme','578941',2,'67894'),('try','try','try@try','541236',3,'1111'),('aaa','aaa','aaa@aaa','98745',4,'24680'),('gthty','hjhytu','dfrg@ddffgbh','8523697',5,'456789');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kind-of-process`
--

DROP TABLE IF EXISTS `kind-of-process`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kind-of-process` (
  `id` int NOT NULL AUTO_INCREMENT,
  `process` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kind-of-process`
--

LOCK TABLES `kind-of-process` WRITE;
/*!40000 ALTER TABLE `kind-of-process` DISABLE KEYS */;
INSERT INTO `kind-of-process` VALUES (1,'makyaj'),(2,'tırnak'),(3,'diğer işlemler');
/*!40000 ALTER TABLE `kind-of-process` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `process`
--

DROP TABLE IF EXISTS `process`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `process` (
  `id` int NOT NULL AUTO_INCREMENT,
  `process_name` int NOT NULL,
  `sub_process` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `price` double NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_process_name` (`process_name`),
  CONSTRAINT `fk_process_name` FOREIGN KEY (`process_name`) REFERENCES `kind-of-process` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `process`
--

LOCK TABLES `process` WRITE;
/*!40000 ALTER TABLE `process` DISABLE KEYS */;
INSERT INTO `process` VALUES (1,1,'Express Makyaj',250,'00:30:00'),(2,1,'Gece-Gündüz Makyajı',350,'01:00:00'),(3,1,'Kına Makyajı',1000,'03:00:00'),(4,1,'Gelin Makyajı',2000,'04:00:00'),(5,1,'Nişan Makyajı',750,'01:00:00'),(6,3,'Kaş Laminasyonu',450,'01:00:00'),(7,3,'Lifting',450,'01:00:00'),(8,3,'Kaş Tasarımı',60,'00:30:00'),(9,2,'Protez Tırnak',440,'04:00:00'),(10,2,'Manikür+Pedikür',210,'02:00:00'),(11,2,'Manikür',110,'01:00:00'),(12,2,'Pedikür',130,'01:00:00');
/*!40000 ALTER TABLE `process` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `password` varchar(8) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-16 10:14:50
