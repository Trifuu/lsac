SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE DATABASE IF NOT EXISTS lsac;
USE lsac;


CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `parola` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `categorie` varchar(20) NOT NULL DEFAULT 'administrator',
  `sid` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
   PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `user` (`id`, `nume`, `parola`, `email`, `tel`, `sid`, `categorie`) VALUES
(1, 'Trifu Marius', 'a80b568a237f50391d2f1f97beaf99564e33d2e1c8a2e5cac21ceda701570312', 'trifumarius01@gmail.com', '0764310664', '4js66jribkk2tduot8cutr8aj0', 'administrator'),
(2, 'Ionel Bogdan', 'a80b568a237f50391d2f1f97beaf99564e33d2e1c8a2e5cac21ceda701570312', 'ionelbogdan@gmail.com', '0764852345','0', 'administrator');
