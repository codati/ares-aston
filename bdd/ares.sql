-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `ares`;
CREATE DATABASE `ares` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ares`;

DROP TABLE IF EXISTS `ChefDeProjet`;
CREATE TABLE `ChefDeProjet` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

TRUNCATE `ChefDeProjet`;
INSERT INTO `ChefDeProjet` (`id`, `password`, `login`) VALUES
(1,	'$2y$10$3sMrq.aQs9Jl6j04p9PEuuy/UopgfpnqdiT4sedKEs3FMTNfIJnVi',	'test');

DROP TABLE IF EXISTS `Tache`;
CREATE TABLE `Tache` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` int(11) NOT NULL,
  `echeance` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tmpRealisation` int(10) unsigned NOT NULL,
  `tmpReel` int(10) unsigned NOT NULL,
  `etat` enum('assignee','enCours','termine') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `Tache`;

DROP TABLE IF EXISTS `Utilisateur`;
CREATE TABLE `Utilisateur` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

TRUNCATE `Utilisateur`;
INSERT INTO `Utilisateur` (`id`, `password`, `login`) VALUES
(1,	'$2y$10$pTEmeZu2dtDstB0v.7wSTOwWVZlNCNMK74WnGJod57RoNiDeGgLyS',	'test');

DROP TABLE IF EXISTS `Utilisateur-Tache`;
CREATE TABLE `Utilisateur-Tache` (
  `id_tache` int(10) unsigned NOT NULL,
  `id_utilisateur` int(10) unsigned NOT NULL,
  KEY `id_tache` (`id_tache`),
  KEY `id_utilisateur` (`id_utilisateur`),
  CONSTRAINT `Utilisateur-Tache_ibfk_1` FOREIGN KEY (`id_tache`) REFERENCES `Tache` (`id`),
  CONSTRAINT `Utilisateur-Tache_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `Utilisateur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `Utilisateur-Tache`;

-- 2016-08-22 10:02:33
