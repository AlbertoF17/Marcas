DROP DATABASE IF EXISTS socialpkmn;
CREATE DATABASE socialpkmn;
DROP TABLE IF EXISTS `socialpkmn`.`users`;
CREATE TABLE `socialpkmn`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` CHAR(60) NOT NULL,
  `pokemon` VARCHAR(45) NOT NULL,
  `description` LONGTEXT NULL,
  `createDate` DATE NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE);