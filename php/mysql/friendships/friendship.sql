SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `friendship` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `friendship` ;

-- -----------------------------------------------------
-- Table `friendship`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `friendship`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `fist_name` VARCHAR(100) NULL ,
  `last_name` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `friendship`.`friendships`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `friendship`.`friendships` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `friend_id` VARCHAR(100) NULL ,
  `users_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_friendships_users_idx` (`users_id` ASC) ,
  CONSTRAINT `fk_friendships_users`
    FOREIGN KEY (`users_id` )
    REFERENCES `friendship`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `friendship` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
