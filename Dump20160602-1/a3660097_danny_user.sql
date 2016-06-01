CREATE DATABASE  IF NOT EXISTS `a3660097_danny` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `a3660097_danny`;
-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: a3660097_danny
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(145) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fullname` varchar(445) NOT NULL,
  `about` varchar(845) DEFAULT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (37,'asak999@gmail.com','b7bee6b36bd35b773132d4e3a74c2bb5','Akila Wickey','I\\\'m a Simple Person who Loves Programming'),(38,'raoffire@yahoo.com','63f5f1cb6bc1426179b90cc04b9dbcf1','ravindu kaluarachchi','abc'),(39,'test@mail.com','e9cfaec17fc8a54d3b445efd501c71dd','Dinney','Good Person'),(40,'nimashdilanka@gmail.com','46deccbda204e6657626ad8c778b3005','Nimash Dilanka','Simple man'),(41,'pgsamila@gmail.com','3c6ca37a78dd3b705164ca751beb71d2','Amila Sampath','I\\\'m a good person with good skills'),(42,'chama@mail.com','c2477f223c3c4ca19a5029e0cd91fda8','chama','asdasd'),(43,'gchaminda93@gmail.com','b7bee6b36bd35b773132d4e3a74c2bb5','Gayan Chaminda','good guy'),(44,'ki@gmail.com','a8f5f167f44f4964e6c998dee827110c','askmkajs assadiasdo','eg :- i\'m a Good person');
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

-- Dump completed on 2016-06-02  2:13:38
