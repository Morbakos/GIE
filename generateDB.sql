-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 06 mars 2019 à 13:44
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

DROP TABLE IF EXISTS `forum_post`;
DROP TABLE IF EXISTS `forum_topic`;
DROP TABLE IF EXISTS `forum_validation`;
DROP TABLE IF EXISTS `forum_user`;
DROP TABLE IF EXISTS `forum_forum`;
DROP TABLE IF EXISTS `forum_categorie`;

-- --------------------------------------------------------

--
-- Structure de la table `forum_post`
--

CREATE TABLE IF NOT EXISTS `forum_post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `post_createur` int(11) NOT NULL,
  `post_texte` text COLLATE utf8_bin NOT NULL,
  `post_time` int(11) NOT NULL,
  `id_topic` int(11) NOT NULL,
  `post_id_forum` int(11) NOT NULL,
  PRIMARY KEY (`id_post`),
  KEY `forum_post-user` (`post_createur`),
  KEY `forum_post-topic` (`id_topic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `forum_topic`
--

CREATE TABLE IF NOT EXISTS `forum_topic` (
  `id_topic` int(11) NOT NULL AUTO_INCREMENT,
  `id_forum` int(11) NOT NULL,
  `topic_titre` char(60) COLLATE utf8_bin NOT NULL,
  `topic_createur` int(11) NOT NULL,
  `topic_vu` mediumint(8) NOT NULL,
  `topic_time` int(11) NOT NULL,
  `topic_genre` varchar(30) COLLATE utf8_bin NOT NULL,
  `topic_last_post` int(11) NOT NULL,
  `topic_first_post` int(11) NOT NULL,
  `topic_post` mediumint(8) NOT NULL,
  PRIMARY KEY (`id_topic`),
  UNIQUE KEY `topic_last_post` (`topic_last_post`),
  KEY `forum_topic-user` (`topic_createur`),
  KEY `forum_topic-forum` (`id_forum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `forum_validation`
--

CREATE TABLE IF NOT EXISTS `forum_validation` (
  `id_validation` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `validation_cle` varchar(64) COLLATE utf8_bin NOT NULL,
  `validation_until` date NOT NULL,
  PRIMARY KEY (`id_validation`),
  UNIQUE KEY `validation_forum_validation-user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `forum_user`
--

CREATE TABLE IF NOT EXISTS `forum_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_pseudo` varchar(30) COLLATE utf8_bin NOT NULL,
  `user_mdp` varchar(64) COLLATE utf8_bin NOT NULL,
  `user_email` varchar(250) COLLATE utf8_bin NOT NULL,
  `user_avatar` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '/users/avatars/default.jpg',
  `user_valide` tinyint(1) NOT NULL DEFAULT '0',
  `user_rang` tinyint(4) DEFAULT '1',
  `user_post` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `forum_forum`
--

CREATE TABLE IF NOT EXISTS `forum_forum` (
  `id_forum` int(11) NOT NULL AUTO_INCREMENT,
  `id_cat` int(11) NOT NULL,
  `forum_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `forum_desc` text COLLATE utf8_bin NOT NULL,
  `forum_ordre` mediumint(8) NOT NULL,
  `forum_last_id_post` int(11) NOT NULL,
  `forum_topic` mediumint(8) NOT NULL,
  `forum_post` mediumint(8) NOT NULL,
  `auth_view` tinyint(4) NOT NULL,
  `auth_post` tinyint(4) NOT NULL,
  `auth_topic` tinyint(4) NOT NULL,
  `auth_annonce` tinyint(4) NOT NULL,
  `auth_modo` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_forum`),
  KEY `forum_forum-categorie` (`id_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


-- --------------------------------------------------------

--
-- Structure de la table `forum_categorie`
--

CREATE TABLE IF NOT EXISTS `forum_categorie` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `cat_ordre` int(11) NOT NULL,
  PRIMARY KEY (`id_cat`),
  UNIQUE KEY `cat_ordre` (`cat_ordre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `forum_forum`
--
ALTER TABLE `forum_forum`
  ADD CONSTRAINT `forum_forum_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `forum_categorie` (`id_cat`);

--
-- Contraintes pour la table `forum_post`
--
ALTER TABLE `forum_post`
  ADD CONSTRAINT `forum_post-topic` FOREIGN KEY (`id_topic`) REFERENCES `forum_topic` (`id_topic`),
  ADD CONSTRAINT `forum_post-user` FOREIGN KEY (`post_createur`) REFERENCES `forum_user` (`id_user`);

--
-- Contraintes pour la table `forum_topic`
--
ALTER TABLE `forum_topic`
  ADD CONSTRAINT `forum_topic-forum` FOREIGN KEY (`id_forum`) REFERENCES `forum_forum` (`id_forum`),
  ADD CONSTRAINT `forum_topic-user` FOREIGN KEY (`topic_createur`) REFERENCES `forum_user` (`id_user`);

--
-- Contraintes pour la table `forum_validation`
--
ALTER TABLE `forum_validation`
  ADD CONSTRAINT `forum_validation-user` FOREIGN KEY (`id_user`) REFERENCES `forum_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;