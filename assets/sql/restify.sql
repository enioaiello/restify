CREATE TABLE `restaurants` (
	`id` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	`name` TEXT(65535) NOT NULL,
	`localisation` TEXT(65535) NOT NULL,
	`opens` TIME NOT NULL,
	`close` TIME NOT NULL,
	`status` BOOLEAN,
	`phone` TEXT(65535),
	`email` TEXT(65535),
	`website` TEXT(65535),
	`image` TEXT(65535),
	`category` TEXT(65535) NOT NULL,
	PRIMARY KEY(`id`)
);


