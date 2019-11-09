-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema spotify
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `spotify` ;

-- -----------------------------------------------------
-- Schema spotify
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `spotify` DEFAULT CHARACTER SET latin1 ;
USE `spotify` ;

-- -----------------------------------------------------
-- Table `spotify`.`artistas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spotify`.`artistas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(75) NOT NULL,
  `descripcion` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `spotify`.`albumes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spotify`.`albumes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(75) NOT NULL,
  `fecha` DATE NOT NULL,
  `img` VARCHAR(75) NOT NULL DEFAULT 'defaultalbum',
  `artista` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id`),
  INDEX `fk_album_artista_idx` (`artista`),
  CONSTRAINT `fk_album_artista`
    FOREIGN KEY (`artista`)
    REFERENCES `spotify`.`artistas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `spotify`.`generos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spotify`.`generos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(75) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `spotify`.`canciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spotify`.`canciones` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(75) NOT NULL,
  `album` INT(11) NULL DEFAULT NULL,
  `ruta` VARCHAR(75) NOT NULL,
  `genero` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idcanciones_UNIQUE` (`id`),
  INDEX `fk_canciones_album_idx` (`album`),
  INDEX `fk_canciones_genero_idx` (`genero`),
  CONSTRAINT `fk_canciones_album`
    FOREIGN KEY (`album`)
    REFERENCES `spotify`.`albumes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_canciones_genero`
    FOREIGN KEY (`genero`)
    REFERENCES `spotify`.`generos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `spotify`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spotify`.`usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `correo` VARCHAR(100) NOT NULL,
  `contrasena` VARCHAR(100) NOT NULL,
  `fecha_de_nacimiento` DATE NOT NULL,
  `genero` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `correo_UNIQUE` (`correo`) ,
  UNIQUE INDEX `id_UNIQUE` (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `spotify`.`favoritas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spotify`.`favoritas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `cancion` INT(11) NOT NULL,
  `usuario` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_favoritas_usuarios_idx` (`usuario` ) ,
  INDEX `fk_favoritas_canciones_idx` (`cancion` ) ,
  CONSTRAINT `fk_favoritas_canciones`
    FOREIGN KEY (`cancion`)
    REFERENCES `spotify`.`canciones` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_favoritas_usuarios`
    FOREIGN KEY (`usuario`)
    REFERENCES `spotify`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `spotify`.`siguiendo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `spotify`.`siguiendo` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario` INT(11) NOT NULL,
  `artista` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_siguiendo_usuario_idx` (`usuario` ) ,
  INDEX `fk_siguiendo_artista_idx` (`artista` ) ,
  CONSTRAINT `fk_siguiendo_artista`
    FOREIGN KEY (`artista`)
    REFERENCES `spotify`.`artistas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_siguiendo_usuario`
    FOREIGN KEY (`usuario`)
    REFERENCES `spotify`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
