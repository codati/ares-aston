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
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

TRUNCATE `ChefDeProjet`;
INSERT INTO `ChefDeProjet` (`id`, `login`, `password`) VALUES
(1,	'test',	'$2y$10$3sMrq.aQs9Jl6j04p9PEuuy/UopgfpnqdiT4sedKEs3FMTNfIJnVi');

DROP TABLE IF EXISTS `Tache`;
CREATE TABLE `Tache` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(10) unsigned NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `echeance` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tmpRealisation` int(10) unsigned NOT NULL,
  `tmpReel` int(10) unsigned DEFAULT NULL,
  `etat` enum('assignee','enCours','termine') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_utilisateur` (`id_utilisateur`),
  CONSTRAINT `Tache_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `Utilisateur` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Utilisateur`;
CREATE TABLE `Utilisateur` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

TRUNCATE `Utilisateur`;
INSERT INTO `Utilisateur` (`id`, `login`, `password`, `firstName`, `lastName`) VALUES
(1,	'test',	'$2y$10$pTEmeZu2dtDstB0v.7wSTOwWVZlNCNMK74WnGJod57RoNiDeGgLyS',	'prenom',	'nom');

-- 2016-08-23 08:06:53
