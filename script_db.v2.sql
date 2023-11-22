
-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema coffee_db
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `coffee_db` ;

-- -----------------------------------------------------
-- Schema coffee_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `coffee_db` DEFAULT CHARACTER SET latin1 ;
USE `coffee_db` ;

-- -----------------------------------------------------
-- Table `coffee_db`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `coffee_db`.`users` ;

CREATE TABLE IF NOT EXISTS `coffee_db`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `usertype` ENUM('Member', 'Casual') NULL DEFAULT NULL,
  `credcardnum` VARCHAR(16) NULL DEFAULT NULL,
  `category` ENUM('Bronze', 'Silver', 'Gold') NULL DEFAULT NULL,
  `startdatemembership` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`id`))


-- -----------------------------------------------------
-- Table `coffee_db`.`card`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `coffee_db`.`card` ;

CREATE TABLE IF NOT EXISTS `coffee_db`.`card` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `num` INT(11) NULL DEFAULT NULL,
  `cvc` INT(11) NULL DEFAULT NULL,
  `month` INT(11) NULL DEFAULT NULL,
  `year` INT(11) NULL DEFAULT NULL,
  `iduser` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `iduser` (`iduser` ASC) VISIBLE,
  CONSTRAINT `card_ibfk_1`
    FOREIGN KEY (`iduser`)
    REFERENCES `coffee_db`.`users` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `coffee_db`.`machine`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `coffee_db`.`machine` ;

CREATE TABLE IF NOT EXISTS `coffee_db`.`machine` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL DEFAULT NULL,
  `specifications` VARCHAR(100) NULL DEFAULT NULL,
  `price` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))


-- -----------------------------------------------------
-- Table `coffee_db`.`services`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `coffee_db`.`services` ;

CREATE TABLE IF NOT EXISTS `coffee_db`.`services` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `serviceType` ENUM('Navigation', 'Cafeteria', 'Burning', 'Printing', 'Reservation') NULL DEFAULT NULL,
  PRIMARY KEY (`id`))


-- -----------------------------------------------------
-- Table `coffee_db`.`requests`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `coffee_db`.`requests` ;

CREATE TABLE IF NOT EXISTS `coffee_db`.`requests` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_user` INT(11) NULL DEFAULT NULL,
  `id_service` INT(11) NULL DEFAULT NULL,
  `id_mac` INT(11) NULL DEFAULT NULL,
  `date_request` DATETIME NULL DEFAULT NULL,
  `rate` DECIMAL(10,0) NULL DEFAULT NULL,
  `kb` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_user` (`id_user` ASC) VISIBLE,
  INDEX `id_service` (`id_service` ASC) VISIBLE,
  INDEX `id_mac` (`id_mac` ASC) VISIBLE,
  CONSTRAINT `requests_ibfk_1`
    FOREIGN KEY (`id_user`)
    REFERENCES `coffee_db`.`users` (`id`),
  CONSTRAINT `requests_ibfk_2`
    FOREIGN KEY (`id_service`)
    REFERENCES `coffee_db`.`services` (`id`),
  CONSTRAINT `requests_ibfk_3`
    FOREIGN KEY (`id_mac`)
    REFERENCES `coffee_db`.`machine` (`id`))


-- -----------------------------------------------------
-- Table `coffee_db`.`roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `coffee_db`.`roles` ;

CREATE TABLE IF NOT EXISTS `coffee_db`.`roles` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL DEFAULT NULL,
  `iduser` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `iduser` (`iduser` ASC) VISIBLE,
  CONSTRAINT `roles_ibfk_1`
    FOREIGN KEY (`iduser`)
    REFERENCES `coffee_db`.`users` (`id`))


