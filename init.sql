CREATE DATABASE IF NOT EXISTS `accountant`;

USE `accountant`;

CREATE TABLE IF NOT EXISTS `entries` (
	`id` int(100) NOT NULL AUTO_INCREMENT,
	`date` varchar(10) NOT NULL,
	`difference` DECIMAL(10,2) SIGNED NOT NULL,
	`description` MEDIUMTEXT NOT NULL,
	`notes` LONGTEXT,
	`invoice_id` int(100),
	PRIMARY KEY (id)
);