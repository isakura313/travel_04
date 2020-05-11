-- MySQL dump 10.13  Distrib 8.0.17, for macos10.14 (x86_64)
--
-- Host: 127.0.0.1    Database: travel
-- ------------------------------------------------------
-- Server version	8.0.17

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
-- Table structure for table `anchors`
--

DROP TABLE IF EXISTS `anchors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anchors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anchor` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `content` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ordera` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anchors`
--

LOCK TABLES `anchors` WRITE;
/*!40000 ALTER TABLE `anchors` DISABLE KEYS */;
INSERT INTO `anchors` VALUES (1,'#main','Главная',5),(2,'#about','О нас ',5),(3,'#contact','Контакты',15),(5,'admin/admin.php','Войти на ресурс',20);
/*!40000 ALTER TABLE `anchors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cards`
--

DROP TABLE IF EXISTS `cards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text COLLATE utf8mb4_general_ci,
  `header` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `parag` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alt` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ordera` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cards`
--

LOCK TABLES `cards` WRITE;
/*!40000 ALTER TABLE `cards` DISABLE KEYS */;
INSERT INTO `cards` VALUES (6,'img/upload/5eaa7bcdedf0bsweden.jpg','Швеция','там очень красиво, все умный и там есть  ABBA','швеция, путешествия',30);
/*!40000 ALTER TABLE `cards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quest` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `answer` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ordera` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` VALUES (1,'Какова стоимость путешествия','Стоимость путешествия зависит от страны',5),(2,'Нужен ли загранник для получения визы?','Да, очень нужен',10);
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(100) DEFAULT NULL,
  `content` text,
  `author` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `review` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1,'Работа офиса','Работа офиса великолепна','user','2020-05-05 09:41:36',NULL),(2,'история','хочу написать тут анекдот','Admin','2020-05-07 08:44:12',NULL),(3,'там такой красивый аниматор','Обожаю аниматоров отеля Гранд Будапешт','Admin','2020-05-07 09:10:44',NULL),(4,'Случай в отеле','Я проиграл в шахматы гроссмейстеры в пиджаке и белой кокарде','Admin','2020-05-07 09:47:08',NULL),(5,'игра в настольный тенис','я очень хотел поиграть в настольный тенис. Почему этого нет в походе на Камчатку?','Admin','2020-05-07 09:47:51',1);
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keywords`
--

DROP TABLE IF EXISTS `keywords`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `keywords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keywords` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keywords`
--

LOCK TABLES `keywords` WRITE;
/*!40000 ALTER TABLE `keywords` DISABLE KEYS */;
INSERT INTO `keywords` VALUES (1,'путешествия'),(3,'история'),(4,'кенгуру'),(5,'туры');
/*!40000 ALTER TABLE `keywords` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parag`
--

DROP TABLE IF EXISTS `parag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parag`
--

LOCK TABLES `parag` WRITE;
/*!40000 ALTER TABLE `parag` DISABLE KEYS */;
INSERT INTO `parag` VALUES (1,'На нашем сайте вы сможете найти кучу актуальной информации по поводу путешствий'),(2,'История становления путешествий очень полезна всем путешественникам'),(3,'Никогда не уходите с нашего сайта'),(4,'Прекрасный открывался в доме отдыха в Финляндии на красивое озеро, потому что в финке классно');
/*!40000 ALTER TABLE `parag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reasons`
--

DROP TABLE IF EXISTS `reasons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reasons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `smiles` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `content` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reasons`
--

LOCK TABLES `reasons` WRITE;
/*!40000 ALTER TABLE `reasons` DISABLE KEYS */;
INSERT INTO `reasons` VALUES (1,'?','Сердито'),(2,'?','Сердито'),(3,'?','Гиды умеют говорить по русски'),(4,'☠️','Полное сопровождение');
/*!40000 ALTER TABLE `reasons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `login` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `activated` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `role` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'igrock@me.com','igrock123','15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225',1,NULL,NULL),(2,'pascha.yakupov@yandex.ru','yakupov','15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225',0,NULL,NULL),(3,'pascha.yakupov@yandex.ru','yakupov','15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225',0,NULL,NULL),(4,'pascha.yakupov@yandex.ru','yakupov','15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225',0,NULL,NULL),(5,'pascha.yakupov@yandex.ru','yakupov','15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225',0,NULL,NULL),(6,'pascha.yakupov@yandex.ru','yakupov','15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225',0,NULL,NULL),(7,'example1@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(8,'example2@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(9,'example2@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(10,'example2@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(11,'example2@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(12,'example2@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(13,'example2@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(14,'example2@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(15,'example2@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(16,'example2@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(17,'example2@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(18,'example2@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(19,'example2@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(20,'example2@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(21,'example2@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(22,'example2@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(23,'example2@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(24,'example3@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(25,'example123123@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(26,'example1223@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(27,'example122223@me.com','igrock','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(28,'nikepol@me.com','login','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(29,'nikepo122222l@me.com','login','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(30,'nikepo12222222l@me.com','login','8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414',0,NULL,NULL),(31,'nikepo12222sssss222l@me.com','login','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',0,NULL,NULL),(32,'nikepo12222ssssass222l@me.com','login','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',0,NULL,NULL),(33,'nikepo12222ssssaasass222l@me.com','login','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',0,NULL,NULL),(34,'nikepo12222ssssaassass222l@me.com','login','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',0,NULL,NULL),(35,'safari@me.com','login','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',1,NULL,NULL),(36,'jenkins@me.com','jenkins','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',0,'2020-05-05 09:41:36','user'),(37,'jenkins1@me.com','jenkins1','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',1,'2020-05-05 09:42:51','user'),(38,'safari2@me.com','safari2','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',1,'2020-05-05 09:56:57','user'),(39,'isakura313@gmail.com','Admin','a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3',1,'2020-05-07 07:36:01','user');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-07 16:21:45
