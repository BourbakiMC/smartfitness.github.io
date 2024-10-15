create database test;

use test;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `date` DATE NOT NULL,
  `weight` int(4) NOT NULL
  PRIMARY KEY  (`id`)
);