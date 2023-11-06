#### Create Database  Table for Users  
` 
CREATE TABLE users(
       id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL ,
       UserName varchar(128) NOT NULL ,
       Name varchar(128) NOT NULL ,
       UserEmail varchar(128) NOT NULL ,
       UserPassword varchar(128) NOT NULL ,
	);
`
### Create  table for Tags

CREATE TABLE `corephpblog`.`tags` (`id` INT NOT NULL AUTO_INCREMENT , `TagName` VARCHAR(100) NOT NULL , `created_at` TIMESTAMP NOT NULL , `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;
