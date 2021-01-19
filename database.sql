CREATE TABLE `users` (`id` INT NOT NULL AUTO_INCREMENT ,
        `first_name` VARCHAR(50) NOT NULL ,
        `last_name` VARCHAR(50) NOT NULL ,
        `email` VARCHAR(150) NOT NULL ,
        `password` VARCHAR(200) NOT NULL ,
        `dob` DATE NOT NULL ,
        `mobile` INT(10) NOT NULL ,
        `gender` VARCHAR(10) NOT NULL ,
        PRIMARY KEY (`id`)) ENGINE = InnoDB;