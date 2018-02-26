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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` varchar(1545) DEFAULT NULL,
  `user` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `name` varchar(245) DEFAULT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (30,'hello Guys','1','11/17/2013 01:06:34 pm','Akila Oshadha','','',0),(31,'hello','1','11/17/2013 01:38:09 pm','Akila Oshadha','','',0),(32,'This is second post','1','11/17/2013 01:38:26 pm','Akila Oshadha','','',0),(33,'Oh really this is Cool.... Keep it up bro','5','11/17/2013 01:39:03 pm','Chama Wickey','','',0),(34,'Thanks ,,,,,','1','11/17/2013 02:14:10 pm','Akila Oshadha','','',0),(37,'Still finding a way to upload images','37','11/21/2013 02:55:20 am','Akila Wickey','','',0),(38,'from mobile','37','11/21/2013 03:16:41 am','Akila Wickey','','',0),(39,'à¶¸à·š à¶¸à·œà·„à·œà¶­à·š à¶…à¶¯à·„à·ƒà¶šà·Š...','37','11/21/2013 05:46:17 am','Akila Wickey','','',0),(40,'Keep it up bro','39','11/21/2013 11:04:35 am','Dinney','','',0),(41,'thesedays im at a training ','37','12/01/2013 01:03:48 pm','Akila Wickey','','',0),(42,'I played my violin after a long time!','40','12/19/2013 03:24:57 am','Nimash Dilanka','','',0),(43,'Thanks Nimash for using this ........','37','12/19/2013 03:25:45 am','Akila Wickey','','',0),(44,'After long time i came to my app\r\n','37','01/09/2014 09:53:16 am','Akila Wickey','','',0),(45,'Oh my after week im on my app again !!!','37','01/31/2014 11:20:15 am','Akila Wickey','','',0),(46,'OH itz long time ...... I feel good in my own App\r\n','37','02/13/2014 02:23:17 pm','Akila Wickey','','',0),(47,'After 2 weeks i came home...','37','02/27/2014 07:31:29 pm','Akila Wickey','','',0),(48,'ammo kalekin ne.................','37','05/30/2014 02:05:30 pm','Akila Wickey','','',0),(49,'hey','37','06/03/2014 02:00:23 pm','Akila Wickey','','',0),(50,'fun','37','06/12/2014 03:40:40 pm','Akila Wickey','','',0),(51,'ado math dan add una','41','06/24/2014 04:13:09 am','Amila Sampath','','',0),(52,'à¶¸à·š à¶¸à·œà·„à·œà¶­à·š à¶…à¶¯à·„à·ƒà¶šà·Š...','41','06/24/2014 04:13:23 am','Amila Sampath','','',0),(53,'Illamath dan onna mithuru hamuwata awa\r\n','41','06/24/2014 04:14:19 am','Amila Sampath','','',0),(54,'kalekin neda','37','07/27/2014 06:39:00 am','Akila Wickey','','',0),(55,'At CC\r\n','37','09/01/2014 01:39:29 am','Akila Wickey','','',0),(56,'After long time !!!','37','12/11/2014 03:45:49 am','Akila Wickey','','',0),(57,'ok user\r\n','37','06/01/2016 03:49:37 pm','Akila Wickey','','',0),(58,'ado','37','06/01/2016 03:59:41 pm','Akila Wickey','','',0),(59,'adasasdasd','37','06/01/2016 04:00:39 pm','Akila Wickey','','',0),(60,'sadasdasd','37','06/01/2016 04:02:22 pm','Akila Wickey','','',0),(61,'dssdfsdf','37','06/01/2016 04:04:55 pm','Akila Wickey','','',0),(62,'asdasdasd','37','06/02/2016 12:09:38 am','Akila Wickey','','',0),(63,'sdsdffsdffsdf','37','06/02/2016 12:16:46 am','Akila Wickey','','',0),(64,'dsfsd','37','06/02/2016 12:30:58 am','Akila Wickey','','',0),(65,'lplp','37','06/02/2016 12:33:19 am','Akila Wickey','','',0),(66,'fdsdfsdf','37','06/02/2016 12:37:30 am','Akila Wickey','','',0),(67,'hello world','37','06/02/2016 12:49:21 am','Akila Wickey','22517-cv2package.jpg','203286',0),(68,'ijiojiojioj','37','06/02/2016 12:51:03 am','Akila Wickey','10530-schematics1.jpg','',0),(69,'asdasd','37','06/02/2016 12:58:45 am','Akila Wickey','83414-cv2package.jpg','image/jpeg',203286),(70,'ok','37','06/02/2016 12:59:00 am','Akila Wickey','45914-IOTGreenhouse.docx','applicatio',285485),(71,'new','37','06/02/2016 12:59:21 am','Akila Wickey','60516-vlearn.jpg','image/jpeg',268920),(72,'asdkasdjansd','37','06/02/2016 01:41:43 am','Akila Wickey','19916-architecture.png','image/png',51357),(73,'jiJAISSJ','37','06/02/2016 01:43:53 am','Akila Wickey','25211-cv2package.jpg','image/jpeg',203286),(74,'ok','37','06/02/2016 01:46:42 am','Akila Wickey','69453-WP_20160519.jpg','image/jpeg',135160),(75,'dfsdfsdf','37','06/02/2016 01:56:48 am','Akila Wickey','60118-schematics1.jpg','',0);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
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
