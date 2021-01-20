/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.14-MariaDB : Database - catalogoproductos
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`catalogoproductos` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `catalogoproductos`;

/*Table structure for table `producto` */

DROP TABLE IF EXISTS `producto`;

CREATE TABLE `producto` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(120) NOT NULL,
  `marca` varchar(35) NOT NULL,
  `img` varchar(200) NOT NULL,
  `path_img` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

/*Data for the table `producto` */

insert  into `producto`(`id`,`nombre`,`marca`,`img`,`path_img`) values (29,'Capitan Rex','HotToys','capitanRex.jpg','http://localhost/CatalogoProductos/public/Imagenes/capitanRex.jpg'),(30,'Superman','HotToys','superman.jpg','http://localhost/CatalogoProductos/public/Imagenes/superman.jpg'),(31,'The Mandalorian','HotToys','mandalorian1.jpeg','http://localhost/CatalogoProductos/public/Imagenes/mandalorian1.jpeg'),(32,'Tropper Incinerator','HotToys','tropper1.jpg','http://localhost/CatalogoProductos/public/Imagenes/tropper1.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
