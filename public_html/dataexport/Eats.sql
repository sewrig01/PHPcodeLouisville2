CREATE DATABASE  IF NOT EXISTS `Eats` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `Eats`;
-- MySQL dump 10.13  Distrib 5.7.9, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: Eats
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `EatSpots`
--

DROP TABLE IF EXISTS `EatSpots`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EatSpots` (
  `EatName` varchar(45) DEFAULT NULL,
  `EatAddress` varchar(255) DEFAULT NULL,
  `EatGenre` varchar(45) DEFAULT NULL,
  `EatPrice` varchar(45) DEFAULT NULL,
  `EatPicked` char(10) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EatSpots`
--

LOCK TABLES `EatSpots` WRITE;
/*!40000 ALTER TABLE `EatSpots` DISABLE KEYS */;
INSERT INTO `EatSpots` VALUES ('Bob Evans','Preston Highway','American','$$','n',1),('Pizza Hut','Preston Highway','Pizza','$$','n',2),('Rallys','Preston Highway','Fast','$','n',3),('WW Cousins','Outer Loop','American','$$','n',4),('Wendys','Poplar Level','Fast','$','n',5),('Dominos','Eastern Parkway','Pizza','$$','n',6),('China Inn','Eastern Parkway','Chinese','$$','n',7),('Mirage','Preston Highway','Middle Eastern','$$','n',8),('McDonalds','Preston Highway','Fast','$','n',9),('Old Spaghetti Factory','Market Street','Italian','$$','n',10),('Vincenzos','Main Street','Italian','$$$$','n',11),('White Castle','Eastern Parkway','Fast','$','n',13),('Burger King','Preston Highway','Fast','$','n',14),('Huck Finns','River Road','Seafood','$$$','n',15),('Checks Cafe','Burnett','American','$','y',17),('Dennys','Eastern Parkway','American','$$','y',18),('El Nopal ','Eastern Parkway','Mexican','$$','n',19),('Papa johns','Preston Highway','Pizza','$$','n',20),('Lotus Blossom','High Street','Chinese','$','n',21),('Holiday Garden','Flat Iron Road','Chinese','$$$','n',22),('Blue Fin Seafood','High Street','Seafood','$$$','n',23),('Fresh Seafood','Old Street','Seafood','$$','n',24),('Blaze Pizza','Shelbyville Road','Pizza','$$','n',25),('la chatea','Main Street','French','$$$','n',26),('Jim Dandys','Waterford Loop','American','$$','n',27),('Fat Tonys','Hundred Acre Way','Italian','$$$','n',28),('Stephen Wright','Molter Ave','American','$$$','n',33),('Molly Malones','Bardstown Road','Irish','$$$','n',34),('Tokyo Joes','Glen Haven Road','Chinese','$$','n',35),('Senior Iguanas','Central Ave','Mexican','$$','n',36),('Moby Dick','Preston Highway','Seafood','$$','n',37),('Freddys','Fazbear Drive','Pizza','$','n',39),('Kashmir','1498 Bardstown Road','Indian','$$','n',40),('Dakshin','Bardstown Road','Indian','$$','n',41),('Paleo Pantry','Frankfort Avenue','Paleo','$$$','n',42),('Tim Tams','Clarks Lane','American','$','n',45),('New Grounds','Frankfort Avenue','Cafe','$$','n',46),('O\'Shays','Bardstown Road','Irish','$$$','n',47),('O\'Tooles','Rolling Oak Way','Irish','$$','n',50),('The Tiger\'s Paw','Hillock Ave','Chinese','$$$','n',51),('Fazzoli\'s','Preston Highway','Italian','$','n',52);
/*!40000 ALTER TABLE `EatSpots` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-23 15:38:02
