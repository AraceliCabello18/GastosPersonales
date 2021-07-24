CREATE DATABASE  IF NOT EXISTS `gastos`;
USE `gastos`;

CREATE TABLE `t_gastos`(
  `id_gastos` INT NOT NULL AUTO_INCREMENT,
   `fecha` TEXT NOT NULL,
  `nombre` TEXT NOT NULL,
  `descripcion` TEXT NOT NULL,
  `monto` FLOAT NOT NULL,
  PRIMARY KEY (`id_gastos`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


  

   