CREATE TABLE `vendor` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `account` varchar(255) DEFAULT NULL,
  `misc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `vendor` (`id`, `name`, `url`, `account`, `misc`) VALUES
(1, 'GMF', 'https://gmf.design', '555', 'hello world');

CREATE TABLE `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `grammage` varchar(255) DEFAULT NULL,
  `hierauch` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `ref_vendor` int(11) unsigned NOT NULL,
  `vendor_link` varchar(255) DEFAULT NULL,
  `vendor_ready_for_dispatch` varchar(255) DEFAULT NULL,
  `quantitiy_inventory` int(11) DEFAULT NULL,
  `archive` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `ibfk_1` (`ref_vendor`),
  CONSTRAINT `ibfk_1` FOREIGN KEY (`ref_vendor`) REFERENCES `vendor` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
