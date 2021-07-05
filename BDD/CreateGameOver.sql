-- MySQL Script generated by MySQL Workbench
-- Thu Jul  1 16:07:10 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema GameOver
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema GameOver
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `GameOver` DEFAULT CHARACTER SET utf8 ;
USE `GameOver` ;

-- -----------------------------------------------------
-- Table `GameOver`.`utilisateurs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GameOver`.`utilisateurs` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `etat` ENUM('admin', 'client') NOT NULL DEFAULT 'client',
  `prenom` VARCHAR(50) NOT NULL,
  `nom` VARCHAR(50) NOT NULL,
  `date_naissance` DATE NOT NULL,
  `email` VARCHAR(200) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GameOver`.`articles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GameOver`.`articles` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(50) NOT NULL,
  `plateforme` ENUM('playstation', 'xbox', 'nintendo', 'pc') NOT NULL,
  `type` ENUM('ps3', 'ps4', 'ps5', 'aboPlay', 'xbox360', 'xboxOne', 'xboxSeriesX', 'aboXbox', 'nintendo3DS', 'nintendoSwitch', 'aboNintendo', 'Steam', 'EpicGames') NOT NULL,
  `genre` ENUM('horreur', 'gestion', 'action', 'aventure', 'combat', 'course', 'educatif', 'guerre', 'sport') NULL,
  `description` VARCHAR(1000) NOT NULL,
  `pegi` ENUM('3', '7', '12', '16', '18') NOT NULL,
  `editeur` VARCHAR(50) NULL,
  `developpeur` VARCHAR(50) NULL,
  `prix` DECIMAL(5,2) NOT NULL,
  `image` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GameOver`.`commandes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GameOver`.`commandes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `utilisateurs` INT(11) NOT NULL,
  `date_commande` DATE NOT NULL,
  `type_paiement` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GameOver`.`lignes_commandes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GameOver`.`lignes_commandes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `commandes` INT(11) NOT NULL,
  `articles` INT(11) NOT NULL,
  `qty` INT(11) NOT NULL,
  `prix_facture` DECIMAL(5,2) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GameOver`.`minichat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GameOver`.`minichat` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `prenom` VARCHAR(50) NOT NULL,
  `message` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `GameOver`.`likes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GameOver`.`likes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_article` INT(11) NOT NULL,
  `id_membre` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GameOver`.`dislikes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GameOver`.`dislikes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_article` INT(11) NOT NULL,
  `id_membre` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
