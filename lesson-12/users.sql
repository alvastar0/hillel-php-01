CREATE TABLE `application`.`users` (
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT ,
    `email` VARCHAR(120) NOT NULL ,
    `password` VARCHAR(255) NOT NULL ,
    `name` VARCHAR(80) NOT NULL ,
    `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ,
    `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NULL ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;