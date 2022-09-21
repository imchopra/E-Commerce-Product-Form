DROP database if exists shoes;
CREATE DATABASE shoes;
USE shoes;

CREATE TABLE `product` (
  `id` int(6)  NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(400) NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `added_by` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4;