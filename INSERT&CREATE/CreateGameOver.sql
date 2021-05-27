-- MySQL Script generated by MySQL Workbench
-- Mon May 24 21:48:20 2021
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
  `nom` VARCHAR(50) NOT NULL,
  `prenom` VARCHAR(50) NOT NULL,
  `mail` VARCHAR(200) NOT NULL,
  `mdp` VARCHAR(50) NOT NULL,
  `date_naissance` DATE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GameOver`.`articles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GameOver`.`articles` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `plateforme` ENUM('playstation', 'xbox', 'nintendo', 'pc') NOT NULL,
  `type` ENUM('ps3', 'ps4', 'ps5', 'aboPlay', 'xbox360', 'xboxOne', 'xboxSeriesX', 'aboXbox', 'nintendo3DS', 'nintendoSwitch', 'aboNintendo', 'Steam', 'EpicGames') NOT NULL,
  `nom` VARCHAR(50) NOT NULL,
  `genre` ENUM('horreur', 'gestion', 'action', 'abo', 'aventure', 'combat', 'course', 'educatif', 'guerre', 'sport') NULL,
  `description` VARCHAR(1000) NOT NULL,
  `pegi` ENUM('3', '7', '12', '16', '18') NOT NULL,
  `editeur` VARCHAR(50) NULL,
  `developpeur` VARCHAR(50) NULL,
  `prix` DECIMAL(5,2) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GameOver`.`commandes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GameOver`.`commandes` (
  `id` INT(11) NOT NULL,
  `clients` INT(11) NOT NULL,
  `date_commande` DATE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GameOver`.`lignes_commandes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GameOver`.`lignes_commandes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `commandes` INT(11) NOT NULL,
  `articles` INT(11) NOT NULL,
  `quantité` INT(11) NOT NULL,
  `prix_facture` DECIMAL(5,2) NOT NULL,
  `type_paiement` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
