-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema sit
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sit
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sit` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `sit` ;

-- -----------------------------------------------------
-- Table `sit`.`scholars`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sit`.`scholars` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `full_name` VARCHAR(45) NOT NULL,
  `affiliation` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `area_science` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sit`.`series`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sit`.`series` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sit`.`events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sit`.`events` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `speaker_name` VARCHAR(45) NOT NULL,
  `topic` VARCHAR(45) NOT NULL,
  `timestamp` DATETIME NOT NULL,
  `series_id` INT NULL,
  `location` VARCHAR(15) NULL,
  `location_text` VARCHAR(100) NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_events_series`
    FOREIGN KEY (`series_id`)
    REFERENCES `sit`.`series` (`id`)
    ON DELETE SET NULL
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_events_series_idx` ON `sit`.`events` (`series_id` ASC);


-- -----------------------------------------------------
-- Table `sit`.`attendance`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sit`.`attendance` (
  `events_id` INT NOT NULL,
  `scholars_id` INT NOT NULL,
  PRIMARY KEY (`events_id`, `scholars_id`),
  CONSTRAINT `fk_events_has_scholars_events`
    FOREIGN KEY (`events_id`)
    REFERENCES `sit`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_events_has_scholars_scholars1`
    FOREIGN KEY (`scholars_id`)
    REFERENCES `sit`.`scholars` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_event_has_scholars_idx` ON `sit`.`attendance` (`scholars_id` ASC);

CREATE INDEX `fk_scholar_has_events_idx` ON `sit`.`attendance` (`events_id` ASC);


-- -----------------------------------------------------
-- Table `sit`.`favorites`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sit`.`favorites` (
  `scholar_id` INT NOT NULL,
  `favorite_id` INT NOT NULL,
  PRIMARY KEY (`scholar_id`, `favorite_id`),
  CONSTRAINT `fk_scholar`
    FOREIGN KEY (`scholar_id`)
    REFERENCES `sit`.`scholars` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_favorite`
    FOREIGN KEY (`favorite_id`)
    REFERENCES `sit`.`scholars` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_scholar_has_favorite_idx` ON `sit`.`favorites` (`favorite_id` ASC);

CREATE INDEX `fk_favorite_has_scholar_idx` ON `sit`.`favorites` (`scholar_id` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
