-- MySQL dump 10.13  Distrib 5.5.62, for Linux (x86_64)
--
-- Host: localhost    Database: heroku_5d12a78b206aa4f
-- ------------------------------------------------------
-- Server version	5.5.62-log

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
-- Table structure for table `bb369a_migrations`
--

DROP TABLE IF EXISTS `bb369a_migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb369a_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bb369a_migrations`
--

LOCK TABLES `bb369a_migrations` WRITE;
/*!40000 ALTER TABLE `bb369a_migrations` DISABLE KEYS */;
INSERT INTO `bb369a_migrations` VALUES (2,'2014_10_12_000000_create_users_table',1),(12,'2014_10_12_100000_create_password_resets_table',1),(22,'2019_09_01_101716_create_sales_table',1),(32,'2019_09_01_161617_seed_old_data_sale_table',1);
/*!40000 ALTER TABLE `bb369a_migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bb369a_password_resets`
--

DROP TABLE IF EXISTS `bb369a_password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb369a_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `bb369a_password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bb369a_password_resets`
--

LOCK TABLES `bb369a_password_resets` WRITE;
/*!40000 ALTER TABLE `bb369a_password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `bb369a_password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bb369a_sales`
--

DROP TABLE IF EXISTS `bb369a_sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb369a_sales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `bb369a_sales_author_name_unique` (`author`,`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4133 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bb369a_sales`
--

LOCK TABLES `bb369a_sales` WRITE;
/*!40000 ALTER TABLE `bb369a_sales` DISABLE KEYS */;
INSERT INTO `bb369a_sales` VALUES (2,'beautheme','T08/2017',5247,'2017-08-31 00:00:00','2017-08-31 00:00:00'),(12,'beautheme','T09/2017',5352,'2017-09-30 00:00:00','2017-09-30 00:00:00'),(22,'beautheme','T10/2017',5476,'2017-10-31 00:00:00','2017-10-31 00:00:00'),(32,'beautheme','T11/2017',5607,'2017-11-30 00:00:00','2017-11-30 00:00:00'),(42,'beautheme','T12/2017',5704,'2017-12-31 00:00:00','2017-12-31 00:00:00'),(52,'beautheme','T01/2018',5872,'2018-01-31 00:00:00','2018-01-31 00:00:00'),(62,'beautheme','T02/2018',6036,'2018-02-28 00:00:00','2018-02-28 00:00:00'),(72,'beautheme','T03/2018',6142,'2018-03-31 00:00:00','2018-03-31 00:00:00'),(82,'beautheme','T04/2018',6285,'2018-04-30 00:00:00','2018-04-30 00:00:00'),(92,'beautheme','T05/2018',6409,'2018-05-31 00:00:00','2018-05-31 00:00:00'),(102,'beautheme','T06/2018',6495,'2018-06-30 00:00:00','2018-06-30 00:00:00'),(112,'beautheme','T07/2018',6584,'2018-07-31 00:00:00','2018-07-31 00:00:00'),(122,'beautheme','T08/2018',6678,'2018-08-31 00:00:00','2018-08-31 00:00:00'),(132,'beautheme','T09/2018',6727,'2018-09-30 00:00:00','2018-09-30 00:00:00'),(142,'beautheme','T10/2018',6785,'2018-10-31 00:00:00','2018-10-31 00:00:00'),(152,'beautheme','T11/2018',6860,'2018-11-30 00:00:00','2018-11-30 00:00:00'),(162,'beautheme','T12/2018',6913,'2018-12-31 00:00:00','2018-12-31 00:00:00'),(172,'beautheme','T01/2019',6985,'2019-01-31 00:00:00','2019-01-31 00:00:00'),(182,'beautheme','T02/2019',7062,'2019-02-28 00:00:00','2019-02-28 00:00:00'),(192,'beautheme','T03/2019',7138,'2019-03-31 00:00:00','2019-03-31 00:00:00'),(202,'beautheme','T04/2019',7194,'2019-04-30 00:00:00','2019-04-30 00:00:00'),(212,'beautheme','T05/2019',7235,'2019-05-31 00:00:00','2019-05-31 00:00:00'),(222,'beautheme','T06/2019',7265,'2019-06-30 00:00:00','2019-06-30 00:00:00'),(232,'beautheme','T07/2019',7297,'2019-07-31 00:00:00','2019-07-31 00:00:00'),(242,'beautheme','T08/2019',7321,'2019-08-31 00:00:00','2019-08-31 00:00:00'),(252,'beautheme','T09/2019',7337,'2019-09-02 09:35:02','2019-09-28 20:46:03'),(3992,'awethemes','T09/2019',5858,'2019-09-12 02:34:02','2019-09-28 10:20:03'),(4002,'beautheme','T10/2019',7362,'2019-10-01 00:00:03','2019-10-31 01:32:27'),(4012,'awethemes','T10/2019',5872,'2019-10-01 00:00:03','2019-10-27 20:02:56'),(4022,'beautheme','T11/2019',7381,'2019-11-01 00:03:33','2019-11-30 10:12:14'),(4032,'awethemes','T11/2019',5881,'2019-11-01 00:04:37','2019-11-25 18:22:27'),(4042,'nootheme','T11/2019',15891,'2019-11-08 07:50:47','2019-11-30 17:42:14'),(4052,'nootheme','T12/2019',16042,'2019-12-01 00:03:59','2019-12-31 21:12:27'),(4062,'awethemes','T12/2019',5888,'2019-12-01 00:04:48','2019-12-31 20:32:02'),(4072,'beautheme','T12/2019',7391,'2019-12-01 00:05:32','2019-12-23 12:32:53'),(4082,'beautheme','T01/2020',7403,'2020-01-01 00:03:06','2020-01-31 15:31:43'),(4092,'nootheme','T01/2020',16197,'2020-01-01 00:04:41','2020-01-30 21:32:28'),(4102,'awethemes','T01/2020',5901,'2020-01-01 00:06:44','2020-01-29 07:03:04'),(4112,'awethemes','T02/2020',5901,'2020-02-01 00:00:57','2020-02-01 00:00:57'),(4122,'beautheme','T02/2020',7403,'2020-02-01 00:05:00','2020-02-01 00:05:00'),(4132,'nootheme','T02/2020',16204,'2020-02-01 00:30:22','2020-02-01 00:30:22');
/*!40000 ALTER TABLE `bb369a_sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bb369a_users`
--

DROP TABLE IF EXISTS `bb369a_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bb369a_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `bb369a_users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bb369a_users`
--

LOCK TABLES `bb369a_users` WRITE;
/*!40000 ALTER TABLE `bb369a_users` DISABLE KEYS */;
INSERT INTO `bb369a_users` VALUES (2,'Hoang Kiem','kiemhd@outlook.com',NULL,'$2y$10$iw4NCMHHVNuTLWsbHD1X7.Tcd3xufTIl9FkVVqf8MQI6geUWGcVua',NULL,'2019-09-02 12:04:08','2019-09-02 12:04:08');
/*!40000 ALTER TABLE `bb369a_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'heroku_5d12a78b206aa4f'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-01  3:17:17
