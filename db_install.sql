-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`scholars`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`scholars` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `full_name` VARCHAR(45) NOT NULL,
  `affiliation` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `area_science` VARCHAR(45) NOT NULL,
  `scholarscol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`series`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`series` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`events` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `speaker_name` VARCHAR(45) NOT NULL,
  `topic` VARCHAR(45) NOT NULL,
  `timestamp` DATETIME NOT NULL,
  `series_id` INT NOT NULL,
  PRIMARY KEY (`id`, `series_id`),
  CONSTRAINT `fk_events_series`
    FOREIGN KEY ()
    REFERENCES `mydb`.`series` ()
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`events_scholars`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`events_scholars` (
  `events_id` INT NOT NULL,
  `scholars_id` INT NOT NULL,
  PRIMARY KEY (`events_id`, `scholars_id`),
  INDEX `fk_events_has_scholars_scholars1_idx` (`scholars_id` ASC),
  INDEX `fk_events_has_scholars_events_idx` (`events_id` ASC),
  CONSTRAINT `fk_events_has_scholars_events`
    FOREIGN KEY (`events_id`)
    REFERENCES `mydb`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_events_has_scholars_scholars1`
    FOREIGN KEY (`scholars_id`)
    REFERENCES `mydb`.`scholars` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;