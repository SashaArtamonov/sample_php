-- MySQL dump 10.15  Distrib 10.0.20-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: photos
-- ------------------------------------------------------
-- Server version	10.0.20-MariaDB

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
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (1,'aaa','Adrianna Navarette','photos/photos/adriana_n.jpg',1650),(2,'aab','alena_k','photos/photos/alena_k.jpg',1352),(3,'aac','anna_a','photos/photos/anna_a.jpg',2112),(4,'aad','anna_b','photos/photos/anna_b.jpg',1566),(5,'aae','anya_f','photos/photos/anya_f.jpg',1751),(6,'aaf','anya_s','photos/photos/anya_s.jpg',1455),(7,'aag','anya_t','photos/photos/anya_t.jpg',1542),(8,'aah','christina_b','photos/photos/christina_b.jpg',1519),(9,'aai','christina_h','photos/photos/christina_h.jpg',1513),(10,'aaj','chrystya_t','photos/photos/chrystya_t.jpg',1333),(11,'aak','chrystyna_d','photos/photos/chrystyna_d.jpg',1339),(12,'aal','dara_l','photos/photos/dara_l.jpg',1477),(13,'aam','dasha_b','photos/photos/dasha_b.jpg',1245),(14,'aan','diana_r','photos/photos/diana_r.jpg',1559),(16,'aap','estella_d','photos/photos/estella_d.jpg',1396),(17,'aaq','galya_k','photos/photos/galya_k.jpg',1715),(18,'aar','galya_m','photos/photos/galya_m.jpg',1436),(19,'aas','galyunya_m','photos/photos/galyunya_m.jpg',1337),(20,'aat','gde_zebra','photos/photos/gde_zebra.jpg',1520),(21,'aau','ira_p','photos/photos/ira_p.jpg',1394),(22,'aav','julia_z','photos/photos/julia_z.jpg',1370),(23,'aaw','khrystyna_l','photos/photos/khrystyna_l.jpg',1557),(24,'aax','ksusha_o','photos/photos/ksusha_o.jpg',1359),(25,'aay','lesya_s','photos/photos/lesya_s.jpg',1738),(26,'aaz','liliya_b','photos/photos/liliya_b.jpg',1395),(27,'aba','lyudmyla_b','photos/photos/lyudmyla_b.jpg',1921),(28,'abb','mariya_b','photos/photos/mariya_b.jpg',1420),(29,'abc','mariya_o','photos/photos/mariya_o.jpg',1806),(30,'abd','mariya_r','photos/photos/mariya_r.jpg',1631),(31,'abe','marta_k','photos/photos/marta_k.jpg',1510),(32,'abf','marta_t','photos/photos/marta_t.jpg',1518),(33,'abg','nadia_b','photos/photos/nadia_b.jpg',1514),(34,'abh','nata_s','photos/photos/nata_s.jpg',1762),(35,'adi','natali_k','photos/photos/natali_k.jpg',1230),(36,'abj','natalia_s','photos/photos/natalia_s.jpg',1444),(37,'abk','nataliya_g','photos/photos/nataliya_g.jpg',1692),(38,'abl','natalya_g','photos/photos/natalya_g.jpg',1478),(39,'abm','natalya_k','photos/photos/natalya_k.jpg',1356),(40,'abn','natalya_s','photos/photos/natalya_s.jpg',1564),(41,'abo','natalya_v','photos/photos/natalya_v.jpg',1522),(42,'abp','oksana_a','photos/photos/oksana_a.jpg',1542),(43,'abq','oksana_k','photos/photos/oksana_k.jpg',1480),(44,'abr','oksana_m','photos/photos/oksana_m.jpg',1249),(45,'abs','oksana_v','photos/photos/oksana_v.jpg',1376),(46,'abt','oksana_z','photos/photos/oksana_z.jpg',1429),(47,'abu','olena_y','photos/photos/olena_y.jpg',1419),(48,'abv','olya_k','photos/photos/olya_k.jpg',1537),(49,'abw','olya_p','photos/photos/olya_p.jpg',1548),(50,'abx','roksolana_z','photos/photos/roksolana_z.jpg',1438),(51,'aby','ruslana_f','photos/photos/ruslana_f.jpg',1627),(52,'abz','sofiya_s','photos/photos/sofiya_s.jpg',1475),(53,'aca','solomiya_k','photos/photos/solomiya_k.jpg',1535),(55,'acc','tanyuha_g','photos/photos/tanyuha_g.jpg',1649),(56,'acd','tetyana_g','photos/photos/tetyana_g.jpg',1518),(57,'ace','victoriya_b','photos/photos/victoriya_b.jpg',1445),(58,'acf','yulia_r','photos/photos/yulia_r.jpg',1498),(59,'acg','yulia_s','photos/photos/yulia_s.jpg',1355),(60,'ach','yulianna_p','photos/photos/yulianna_p.jpg',1585),(61,'aci','yuliya_r','photos/photos/yuliya_r.jpg',1397),(62,'acj','alina_p','photos/photos/alina_p.jpg',1519),(63,'ack','anya_p','photos/photos/anya_p.jpg',1507),(64,'acl','chris_kore','photos/photos/chris_kore.jpg',1523),(65,'acm','danysik_k','photos/photos/danysik_k.jpg',1511),(66,'acn','galya_g','photos/photos/galya_g.jpg',1477),(67,'aco','galyna_m','photos/photos/galyna_m.jpg',1309),(68,'acp','inna_h','photos/photos/inna_h.jpg',1441),(69,'acq','ira_k','photos/photos/ira_k.jpg',1356),(70,'acr','iryna_m','photos/photos/iryna_m.jpg',1429),(71,'acs','iryna_v','photos/photos/iryna_v.jpg',1376),(72,'act','ivanna_i','photos/photos/ivanna_i.jpg',1439),(73,'acu','ivanna_sh','photos/photos/ivanna_sh.jpg',1232),(74,'acv','julia_p','photos/photos/julia_p.jpg',1440),(75,'acw','julianna_p','photos/photos/julianna_p.jpg',1631),(76,'acx','khrystyna_g','photos/photos/khrystyna_g.jpg',1451),(77,'acy','khtystyna_m','photos/photos/khtystyna_m.jpg',1566),(78,'acz','kristina_k','photos/photos/kristina_k.jpg',1604),(79,'ada','kristina_v','photos/photos/kristina_v.jpg',1334),(80,'adb','maricka_h','photos/photos/maricka_h.jpg',1455),(81,'adc','mariya_k','photos/photos/mariya_k.jpg',1582),(82,'add','mariya_p','photos/photos/mariya_p.jpg',1628),(83,'ade','marta_o','photos/photos/marta_o.jpg',1655),(84,'adf','marta_s','photos/photos/marta_s.jpg',1422),(85,'adg','maya_t','photos/photos/maya_t.jpg',1590),(86,'adh','nataly_v','photos/photos/nataly_v.jpg',1701),(87,'adi','natalya_u','photos/photos/natalya_u.jpg',1230),(88,'adj','nicolette_s','photos/photos/nicolette_s.jpg',1915),(89,'adk','oksana_t','photos/photos/oksana_t.jpg',1458),(90,'adl','olena_g','photos/photos/olena_g.jpg',1334),(91,'adm','olena_k','photos/photos/olena_k.jpg',1593),(92,'adn','olena_p','photos/photos/olena_p.jpg',1376),(93,'ado','olena_pasternak','photos/photos/olena_pasternak.jpg',1590),(94,'adp','olesya_p','photos/photos/olesya_p.jpg',1420),(95,'adq','olka_f','photos/photos/olka_f.jpg',1422),(96,'adr','olya_f','photos/photos/olya_f.jpg',1311),(97,'ads','oskana_s','photos/photos/oskana_s.jpg',1518),(98,'adt','snizhana_v','photos/photos/snizhana_v.jpg',1540),(99,'adu','solomiya_v','photos/photos/solomiya_v.jpg',1579),(100,'adv','tanyuha_zh','photos/photos/tanyuha_zh.jpg',1682),(101,'adw','yaryna_s','photos/photos/yaryna_s.jpg',1416),(102,'adx','yulia_h','photos/photos/yulia_h.jpg',1474);
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-07 12:41:46
