SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE DATABASE IF NOT EXISTS lsac;
USE lsac;


CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nume` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `parola` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `categorie` varchar(20) NOT NULL DEFAULT 'administrator',
  `last_action` bigint(20) NOT NULL DEFAULT '0',
  `t` bigint(20) NOT NULL DEFAULT '0',
  `d` bigint(20) NOT NULL DEFAULT '0',
  `a` int(11) NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT '0',
  `is_super_admin` int(11) NOT NULL DEFAULT '0',
  `attempts` int(11) NOT NULL DEFAULT '0',
  `sid` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `user` (`id`, `nume`, `parola`, `email`, `tel`, `last_action`, `t`, `d`, `a`, `is_admin`, `is_super_admin`, `attempts`, `sid`, `categorie`) VALUES
(1, 'Trifu Marius', 'a80b568a237f50391d2f1f97beaf99564e33d2e1c8a2e5cac21ceda701570312', 'trifumarius01@gmail.com', '0764310664', 1490091455, 1484668731, 0, 1477667921, 0, 1, 0, '4js66jribkk2tduot8cutr8aj0', 'administrator'),
(2, 'Ionel Bogdan', 'a80b568a237f50391d2f1f97beaf99564e33d2e1c8a2e5cac21ceda701570312', 'ionelbogdan@gmail.com', '0764852345', 1490091455, 1484556532, 0, 1484066503, 0, 1, 0, '', 'administrator');
