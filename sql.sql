/*
All scripts and code are by ThatZiv (Zua)
*/

CREATE DATABASE IF NOT EXISTS `store`;
USE `store`;

CREATE TABLE IF NOT EXISTS `inventory` (
  `item` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT IGNORE INTO `inventory` (`item`, `price`, `quantity`) VALUES
	('Shoes', 90, 21),
	('Hoodies', 20, 23),
	('T-Shirts', 10, 13),
	('Toys', 2, 5),
	('Candles', 12, 5),
	('Dresses', 120, 3),
	('Torch Light', 5, 10),
	('Portable Charger', 30, 4);
