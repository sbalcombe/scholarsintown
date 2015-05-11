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
DROP TABLE IF EXISTS `sit`.`scholars` ;

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
DROP TABLE IF EXISTS `sit`.`series` ;

CREATE TABLE IF NOT EXISTS `sit`.`series` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sit`.`events`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sit`.`events` ;

CREATE TABLE IF NOT EXISTS `sit`.`events` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `speakers` VARCHAR(45) NOT NULL,
  `topic` VARCHAR(45) NOT NULL,
  `timestamp` DATETIME NOT NULL,
  `series_id` INT NULL,
  `location_gps` VARCHAR(15) NULL,
  `location_text` VARCHAR(100) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_events_series_idx` (`series_id` ASC),
  CONSTRAINT `fk_events_series`
    FOREIGN KEY (`series_id`)
    REFERENCES `sit`.`series` (`id`)
    ON DELETE SET NULL
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sit`.`attendance`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sit`.`attendance` ;

CREATE TABLE IF NOT EXISTS `sit`.`attendance` (
  `events_id` INT NOT NULL,
  `scholars_id` INT NOT NULL,
  PRIMARY KEY (`events_id`, `scholars_id`),
  INDEX `fk_event_has_scholars_idx` (`scholars_id` ASC),
  INDEX `fk_scholar_has_events_idx` (`events_id` ASC),
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


-- -----------------------------------------------------
-- Table `sit`.`favorites`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sit`.`favorites` ;

CREATE TABLE IF NOT EXISTS `sit`.`favorites` (
  `scholar_id` INT NOT NULL,
  `favorite_id` INT NOT NULL,
  PRIMARY KEY (`scholar_id`, `favorite_id`),
  INDEX `fk_scholar_has_favorite_idx` (`favorite_id` ASC),
  INDEX `fk_favorite_has_scholar_idx` (`scholar_id` ASC),
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


-- -----------------------------------------------------
-- Table `sit`.`onboarding`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sit`.`onboarding` ;

CREATE TABLE IF NOT EXISTS `sit`.`onboarding` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `interest` VARCHAR(45) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `affiliation` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sit`.`onboarding_favorites`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sit`.`onboarding_favorites` ;

CREATE TABLE IF NOT EXISTS `sit`.`onboarding_favorites` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sit`.`onboarding_has_onboarding_favorites`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sit`.`onboarding_has_onboarding_favorites` ;

CREATE TABLE IF NOT EXISTS `sit`.`onboarding_has_onboarding_favorites` (
  `onboarding_id` INT NOT NULL,
  `favorite_id` INT NOT NULL,
  PRIMARY KEY (`onboarding_id`, `favorite_id`),
  INDEX `fk_onboarding_has_onboarding_favorites_onboarding_favorites_idx` (`favorite_id` ASC),
  INDEX `fk_onboarding_has_onboarding_favorites_onboarding1_idx` (`onboarding_id` ASC),
  CONSTRAINT `fk_onboarding_has_onboarding_favorites_onboarding1`
    FOREIGN KEY (`onboarding_id`)
    REFERENCES `sit`.`onboarding` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_onboarding_has_onboarding_favorites_onboarding_favorites1`
    FOREIGN KEY (`favorite_id`)
    REFERENCES `sit`.`onboarding_favorites` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
