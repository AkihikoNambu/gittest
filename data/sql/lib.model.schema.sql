
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- ask_writein
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `ask_writein`;


CREATE TABLE `ask_writein`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`title` TEXT,
	`body` TEXT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
);

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
