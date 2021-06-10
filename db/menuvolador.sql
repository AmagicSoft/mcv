/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 10.4.14-MariaDB : Database - menuvolador
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `menuvolador`;

/*Table structure for table `dron` */

DROP TABLE IF EXISTS `dron`;

CREATE TABLE `dron` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `cantpedidos` smallint(2) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `dron` */

insert  into `dron`(`id`,`nombre`,`cantpedidos`,`status`) values (1,'d1',3,NULL),(4,'d2',3,NULL),(5,'d3',3,1),(6,'D4',3,1);

/*Table structure for table `rutas` */

DROP TABLE IF EXISTS `rutas`;

CREATE TABLE `rutas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(30) DEFAULT NULL,
  `coderuta` varchar(15) DEFAULT NULL,
  `pedido` varchar(15) DEFAULT NULL,
  `dron` int(11) DEFAULT NULL,
  `latitud` longblob DEFAULT NULL,
  `longitud` longblob DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `rutas` */

insert  into `rutas`(`id`,`cliente`,`coderuta`,`pedido`,`dron`,`latitud`,`longitud`) values (1,'Mv1','AAAAIAA\r\n','31',1,NULL,NULL),(2,'Mv1','DDDAIAD\r\n','32',1,NULL,NULL),(3,'Mv1','AAIADAD','33',1,NULL,NULL),(7,'Mv1','AADAIAA\r\n','41',2,NULL,NULL),(8,'Mv1','DADAIAD\r\n','42',2,NULL,NULL),(9,'Mv1','AAADAAA','43',2,NULL,NULL),(10,'Mv1','11AADAA\r\n','41',3,NULL,NULL),(11,'Mv1','DADAIAD\r\n','42',3,NULL,NULL),(12,'Mv1','AAIIDAD','43',3,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
