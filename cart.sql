-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: cart
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

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
-- Table structure for table 'cart'
--

DROP TABLE IF EXISTS 'cart';
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE 'cart' (
  'id' int(20) NOT NULL AUTO_INCREMENT,
  'title' varchar(500) NOT NULL,
  'image' varchar(600) NOT NULL,
  'price' char(20) NOT NULL,
  'session_id' char(225) DEFAULT NULL,
  'created_at' timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table 'cart'
--

LOCK TABLES 'cart' WRITE;
/*!40000 ALTER TABLE 'cart' DISABLE KEYS */;
/*!40000 ALTER TABLE 'cart' ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table 'product'
--

DROP TABLE IF EXISTS 'product';
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE 'product' (
  'id' int(20) NOT NULL AUTO_INCREMENT,
  'title' varchar(500) DEFAULT NULL,
  'image' varchar(1000) DEFAULT NULL,
  'description' text DEFAULT NULL,
  'price' char(15) DEFAULT NULL,
  'category' char(100) DEFAULT NULL,
  'created_at' timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table 'product'
--

LOCK TABLES 'product' WRITE;
/*!40000 ALTER TABLE 'product' DISABLE KEYS */;
/*!40000 ALTER TABLE 'product' ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table 'u_order'
--

DROP TABLE IF EXISTS 'u_order';
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE 'u_order' (
  'id' int(10) NOT NULL AUTO_INCREMENT,
  'title' varchar(100) DEFAULT NULL,
  'price' char(100) DEFAULT NULL,
  'email' char(225) DEFAULT NULL,
  'address' text DEFAULT NULL,
  'session_id' char(225) DEFAULT NULL,
  'created_at' timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table 'u_order'
--

LOCK TABLES 'u_order' WRITE;
/*!40000 ALTER TABLE 'u_order' DISABLE KEYS */;
/*!40000 ALTER TABLE 'u_order' ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table 'user'
--

DROP TABLE IF EXISTS 'user';
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE 'user' (
  'id' int(20) NOT NULL AUTO_INCREMENT,
  'email' varchar(100) DEFAULT NULL,
  'password' varchar(100) DEFAULT NULL,
  'created_at' timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY ('id')
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table 'user'
--

LOCK TABLES 'user' WRITE;
/*!40000 ALTER TABLE 'user' DISABLE KEYS */;
INSERT INTO 'user' VALUES (1,'demo@gmail.com','demo','2020-09-20 16:00:00');
/*!40000 ALTER TABLE 'user' ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
