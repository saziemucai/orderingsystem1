-- MySQL dump 10.13  Distrib 5.1.41, for Win32 (ia32)
--
-- Host: localhost    Database: orderingsystem1
-- ------------------------------------------------------
-- Server version	5.1.41

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `orderdetails`
--

DROP TABLE IF EXISTS `orderdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderdetails` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `customer` varchar(30) NOT NULL,
  `qty` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `total` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `transactioncode` varchar(30) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderdetails`
--

LOCK TABLES `orderdetails` WRITE;
/*!40000 ALTER TABLE `orderdetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `orderdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderdetails1`
--

DROP TABLE IF EXISTS `orderdetails1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderdetails1` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `customer` varchar(30) NOT NULL,
  `qty` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `total` int(30) NOT NULL,
  `grandtotal` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `transactioncode` int(30) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderdetails1`
--

LOCK TABLES `orderdetails1` WRITE;
/*!40000 ALTER TABLE `orderdetails1` DISABLE KEYS */;
/*!40000 ALTER TABLE `orderdetails1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderdetails2`
--

DROP TABLE IF EXISTS `orderdetails2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderdetails2` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `customer` varchar(30) NOT NULL,
  `qty` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `total` int(30) NOT NULL,
  `grandtotal` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `transactioncode` varchar(30) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderdetails2`
--

LOCK TABLES `orderdetails2` WRITE;
/*!40000 ALTER TABLE `orderdetails2` DISABLE KEYS */;
/*!40000 ALTER TABLE `orderdetails2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderdetails3`
--

DROP TABLE IF EXISTS `orderdetails3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderdetails3` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `customer` varchar(30) NOT NULL,
  `qty` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `total` int(30) NOT NULL,
  `grandtotal` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `transactioncode` varchar(30) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=MyISAM AUTO_INCREMENT=340 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderdetails3`
--

LOCK TABLES `orderdetails3` WRITE;
/*!40000 ALTER TABLE `orderdetails3` DISABLE KEYS */;
/*!40000 ALTER TABLE `orderdetails3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zhyrizsh_products`
--

DROP TABLE IF EXISTS `zhyrizsh_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zhyrizsh_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_size_name` varchar(100) NOT NULL,
  `product_photo` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zhyrizsh_products`
--

LOCK TABLES `zhyrizsh_products` WRITE;
/*!40000 ALTER TABLE `zhyrizsh_products` DISABLE KEYS */;
INSERT INTO `zhyrizsh_products` VALUES (1,1,'Caramel Apple',70,'single','img001.jpg','available'),(2,2,'Chocolate Coffee Chunk',85,'single','img002.jpg','available'),(3,3,'Chocolate Peanut Butter Smoothie',85,'single','img003.jpg','available'),(4,4,'Chocolate Raspberry Mousse',65,'single','img004.jpg','available'),(5,5,'Chocolate Truffle Mousse',80,'single','img005.jpg','available'),(6,6,'Triple Chocolate Mousse',65,'single','img006.jpg','available'),(7,7,'Black Coffee',120,'single','img007.jpg','available'),(8,8,'Cappucino',135,'single','img008.jpg','available'),(9,9,'Coffee Espresso',120,'single','img009.jpg','available'),(10,10,'Cafe Au Lait',110,'single','img010.jpg','available'),(11,11,'Frappe',120,'single','img011.jpg','available'),(12,12,'Iced Coffee Macchiato',110,'single','img012.jpg','available'),(13,13,'Americano with Milk',100,'single','img013.jpg','unavailable'),(14,14,'Caffe Latte',100,'single','img014.jpg','unavailable'),(15,15,'Caffe Latte la Salvia',120,'single','img015.jpg','unavailable'),(16,16,'Double Shot',150,'single','img016.jpg','unavailable'),(17,17,'Iced Coffee with Milk',120,'single','img017.jpg','unavailable'),(18,13,'Iced Coffee',115,'single','img018.jpg','unavailable'),(19,19,'Blackout Torte',90,'single','img019.jpg','unavailable'),(20,20,'Chocolate Avalanche',80,'single','img020.jpg','unavailable'),(21,21,'Cookies and Cream',80,'single','img021.jpg','unavailable'),(22,22,'Chocolate Caramel',60,'single','img022.jpg','unavailable'),(23,23,'Deep Raspberry Flan',50,'single','img023.jpg','unavailable'),(24,24,'Deep Apple Pie',50,'single','img029.jpg','unavailable');
/*!40000 ALTER TABLE `zhyrizsh_products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-10-17 16:09:45
