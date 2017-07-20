SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE DATABASE IF NOT EXISTS `lsac`;

USE lsac;


CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL,
  `parola` VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL,
  `tel` VARCHAR(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `categorie` VARCHAR(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'administrator',
  `sid` VARCHAR(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
   PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `user` (`nume`, `parola`, `email`, `tel`, `sid`, `categorie`) VALUES
    ('Trifu Marius', 'a80b568a237f50391d2f1f97beaf99564e33d2e1c8a2e5cac21ceda701570312', 'trifumarius01@gmail.com', '0764310664', '4js66jribkk2tduot8cutr8aj0', 'administrator'),
    ('Ionel Bogdan', 'a80b568a237f50391d2f1f97beaf99564e33d2e1c8a2e5cac21ceda701570312', 'ionelbogdan@gmail.com', '0764852345','0', 'administrator');

CREATE TABLE IF NOT EXISTS `evenimente` ( 
    `id` INT(11) NOT NULL AUTO_INCREMENT ,
    `nume` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
    `locatie` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    `data_incepere` BIGINT(20) NOT NULL DEFAULT '0',
    `data_terminare` BIGINT(20) NOT NULL DEFAULT '0',
    `id_organizatori` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
    `id_voluntari` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    `descriere` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    `parteneri` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    `sponsori` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

INSERT INTO `evenimente`(`nume`,`locatie`,`id_organizatori`,`id_voluntari`) VALUES
    ('moft','bucuresti','1','1,2,3'),
    ('tresure hunt','biblioteca upb','2','4,5,6');

CREATE TABLE IF NOT EXISTS `puncte` (
    `id` INT(11) NOT NULL AUTO_INCREMENT ,
    `nume_eveniment` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
    `nr_puncte` INT(11) NOT NULL DEFAULT '0',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

INSERT INTO `puncte`(`nume_eveniment`,`nr_puncte`) VALUES
    ('moft',50),
    ('treasure_hunt',100);

CREATE TABLE IF NOT EXISTS `voluntari_logs` ( 
    `id` INT(11) NOT NULL AUTO_INCREMENT ,
    `id_voluntar` INT(11) NOT NULL,
    `eveniment` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    `nr_puncte` INT(11) NOT NULL DEFAULT '0',
    `data` BIGINT(20) NOT NULL,
    `comentariu` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '' ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

INSERT INTO `voluntari_logs`(`id_voluntar`,`eveniment`,`nr_puncte`,`data`) VALUES
    (1,'moft',50,1500496672),
    (2,'moft',50,1500496672),
    (3,'moft',50,1500496672),
    (4,'treasure_hunt',50,1500496672),
    (5,'treasure_hunt',50,1500496672),
    (6,'treasure_hunt',50,1500496672);

CREATE TABLE IF NOT EXISTS `voluntari` ( 
    `id` INT(11) NOT NULL AUTO_INCREMENT ,
    `nume` VARCHAR(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
    `telefon` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    `email` VARCHAR(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    `nr_puncte` INT(11) NOT NULL DEFAULT '0',
    `data_inscriere` BIGINT(20) NOT NULL,
    `facultate` VARCHAR(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    `an` VARCHAR(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    `grupa` VARCHAR(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

INSERT INTO `voluntari`(`nume`,`telefon`,`email`,`nr_puncte`,`data_inscriere`,`facultate`,`an`,`grupa`) VALUES
    ('Andrei Vasile','0763421435','email@gmail.com',100,1500496672,'acs','2','321AC'),
    ('Popescu Mihai','0773525431','email2@gmail.com',100,1500496672,'acs','3',''),
    ('Daniel Gigel','0783431555','email3@gmail.com',100,1500496672,'acs','1','313AC'),
    ('Toma Vasile','0723524439','email4@gmail.com',100,1500496672,'acs','2','322AB'),
    ('Andreea Iancus','0745426435','email5@gmail.com',100,1500496672,'acs','1','311AA'),
    ('Ionescu Paul','0773431333','email6@gmail.com',100,1500496672,'acs','3','');
