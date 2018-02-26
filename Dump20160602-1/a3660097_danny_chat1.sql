CREATE DATABASE  IF NOT EXISTS `mithuru` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mithuru`;
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
-- Table structure for table `chat1`
--

DROP TABLE IF EXISTS `chat1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat1` (
  `sender` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `msg` text,
  `time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat1`
--

LOCK TABLES `chat1` WRITE;
/*!40000 ALTER TABLE `chat1` DISABLE KEYS */;
INSERT INTO `chat1` VALUES ('Akila','Chama','Ã‚Â hello','2013-05-17 11:04:35'),('Chama','Akila','Ã‚Â how are you?','2013-05-17 11:06:02'),('amila','Akila','Ã‚Â ado! Maara seen eka','2013-05-17 11:22:57'),('Chama','lahiru','Ã‚Â hello','2013-05-17 11:29:31'),('Chama','lahiru','Ã‚Â mama akila me test eka ta damme bn','2013-05-17 11:29:49'),('lahiru','Chama','Ã‚Â ela\n','2013-05-17 11:30:30'),('lahiru','Chama','aulak na\n','2013-05-17 11:30:40'),('Chama','lahiru','Thanks bn','2013-05-17 11:30:59'),('Chama','lahiru','fb wage nam thama na kollo','2013-05-17 11:31:14'),('Chama','lahiru','fb wage nam thama na kollo','2013-05-17 11:31:14'),('Chama','lahiru','fb wage nam thama na kollo','2013-05-17 11:31:14'),('Chama','lahiru','fb wage nam thama na kollo','2013-05-17 11:31:18'),('lahiru','Chama','msg yanawa nee\n','2013-05-17 11:31:24'),('Chama','lahiru','ela ela ','2013-05-17 11:31:41'),('Akila','ruwantha','Ã‚Â hello\n','2013-05-18 01:53:11'),('ruwantha','Akila','Ã‚Â oh\n','2013-05-18 01:53:24'),('Akila','ruwantha','itz working he he\n','2013-05-18 01:53:37'),('ruwantha','Akila','ela meka vada','2013-05-18 01:53:40'),('Akila','ruwantha','but kauda ewuwe kiyala na he he\n','2013-05-18 01:53:57'),('ruwantha','Akila','message sent kiyana eka ain karanna','2013-05-18 01:54:01'),('Akila','ruwantha','kk ayya\n','2013-05-18 01:54:10'),('ruwantha','Akila','ow ekath hadanna nathnam hoyaganna ba','2013-05-18 01:54:44'),('Akila','ruwantha','mama source 1ka net eken hoya gatha\n','2013-05-18 01:54:44'),('Akila','ruwantha','ita passe mata oni widihata hada gathe\n','2013-05-18 01:54:59'),('ruwantha','Akila','enter key press ekata send karanna hadanna','2013-05-18 01:55:01'),('Chama','Chandanaa','Ã‚Â hello','2013-05-18 10:45:59'),('Akila','Chathura','Ã‚Â ado\n','2013-06-22 05:50:54'),('Akila','Chathura','mage network eka\n','2013-06-22 05:51:07'),('Akila','Chathura','habai thama mula bn\n','2013-06-22 05:51:24'),('Chathura','Akila','Ã‚Â ela ne ban\n','2013-06-22 05:51:25'),('Chathura','Akila','Ã‚Â ela ne ban\nape kollonta demu\n','2013-06-22 05:51:50'),('Akila','Chathura','\nHE he\n','2013-06-22 05:52:07'),('Akila','Chathura','\nThawa meeka hadanna oni bn\n','2013-06-22 05:52:35'),('Chathura','Akila','Ã‚Â ela ne ban\nape kollonta demu\nall the best machan uba waddek wela ne','2013-06-22 05:53:14'),('Akila','Chathura','\nna machn man thama Egena Gannawa\n','2013-06-22 05:53:58'),('Akila','Chathura','\nFB tharam wenna thawa godak dewal oni\n','2013-06-22 05:54:21'),('Akila','Chathura',':-)\n','2013-06-22 05:56:59'),('Chama','Amila','Ã‚Â ado','2013-09-23 11:02:35'),('Chama','Amila','Ã‚Â ado','2013-09-23 11:02:38'),('Chama','Amila','oya thienne chat koranna\n','2013-09-23 11:03:07'),('Chama','Amila','Ai awul da?\n','2013-09-23 11:03:24'),('amila','Chama','Ã‚Â ayi do?\n\n','2013-09-23 11:03:26'),('amila','Chama','aul nae\n','2013-09-23 11:03:35'),('amila','Chama','aul nae\n','2013-09-23 11:03:37'),('Chama','amila','Ã‚Â hey','2013-09-23 11:03:38'),('amila','Chama','photo comments daapan ko\n','2013-09-23 11:03:48'),('amila','Chama','photo comments daapan ko\n','2013-09-23 11:03:53'),('Chama','amila','meke thawa hadanna oni bn','2013-09-23 11:03:57'),('Chama','amila','basic level eke thienne ','2013-09-23 11:04:17'),('Chama','amila',';-)\n','2013-09-23 11:05:12');
/*!40000 ALTER TABLE `chat1` ENABLE KEYS */;
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
