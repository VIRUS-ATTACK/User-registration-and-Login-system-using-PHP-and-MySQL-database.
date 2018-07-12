CREATE DATABASE IF NOT EXISTS `user_login` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;

USE `user_login` ;

CREATE  TABLE IF NOT EXISTS `user_login`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(40) NOT NULL,
  `lastname` VARCHAR(40) NOT NULL,
  `email` VARCHAR(40) NOT NULL,
  `username` VARCHAR(40) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`id`) )

ENGINE = InnoDB;

use `users`;

INSERT INTO `users`(`firstname`,`lastname`,`email`,`username`,`password`) VALUES
('surya teja','Achanta','suryateja.a16@gmail.com','surya','password'),
('sanjay', 'vihar','sanjay@vihar.com','sanjay','password');

CREATE USER 'login_user'@'localhost' IDENTIFIED BY 'password';
GRANT USAGE ON *.* TO 'login_user'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON `user_login`.* TO 'login_user'@'localhost';