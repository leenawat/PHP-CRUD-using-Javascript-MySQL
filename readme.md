sql
```
CREATE TABLE `crudapp` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fullName` varchar(100) DEFAULT NULL,
  `empCode` varchar(100) DEFAULT NULL,
  `salary` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
```