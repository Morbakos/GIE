-- 
-- Table `forum_categorie`
-- 

DROP TABLE IF EXISTS `forum_categorie`; 
CREATE TABLE IF NOT EXISTS `forum_categorie` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(30)  NOT NULL,
  `cat_ordre` int(11) NOT NULL,
  PRIMARY KEY  (`id_cat`),
  UNIQUE KEY `cat_ordre` (`cat_ordre`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
 
-- 
-- Table `forum_forum`
-- 

DROP TABLE IF EXISTS `forum_forum`;  
CREATE TABLE IF NOT EXISTS `forum_forum` (
  `id_forum` int(11) NOT NULL AUTO_INCREMENT,
  `id_cat` int(11) NOT NULL,
  `forum_name` varchar(30)  NOT NULL,
  `forum_desc` text  NOT NULL,
  `forum_ordre` mediumint(8) NOT NULL,
  `forum_last_id_post` int(11) NOT NULL,
  `forum_topic` mediumint(8) NOT NULL,
  `forum_post` mediumint(8) NOT NULL,
  `auth_view` tinyint(4) NOT NULL,
  `auth_post` tinyint(4) NOT NULL,
  `auth_topic` tinyint(4) NOT NULL,
  `auth_annonce` tinyint(4) NOT NULL,
  `auth_modo` tinyint(4) NOT NULL,
  PRIMARY KEY  (`id_forum`),
  KEY `forum_forum-categorie` (`id_cat`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
 
 
-- 
-- Table `forum_membres`
-- 

DROP TABLE IF EXISTS `forum_user`;  
CREATE TABLE IF NOT EXISTS `forum_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_pseudo` varchar(30)  NOT NULL,
  `user_mdp` varchar(64)  NOT NULL,
  `user_email` varchar(250)  NOT NULL,
  `user_avatar` varchar(100)  NOT NULL DEFAULT '/users/avatars/default.jpg',
  `user_valide` tinyint(1) NOT NULL DEFAULT 0,
  `user_rang` tinyint(4) DEFAULT 1,
  `user_post` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY  (`id_user`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
 
 
-- 
-- Table `forum_post`
-- 

DROP TABLE IF EXISTS `forum_post`;  
CREATE TABLE IF NOT EXISTS `forum_post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `post_createur` int(11) NOT NULL,
  `post_texte` text  NOT NULL,
  `post_time` int(11) NOT NULL,
  `id_topic` int(11) NOT NULL,
  `post_id_forum` int(11) NOT NULL,
  PRIMARY KEY  (`id_post`),
  KEY `forum_post-user` (`post_createur`),
  KEY `forum_post-topic` (`id_topic`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
 
 
 
-- 
-- Table  `forum_topic`
-- 
 
DROP TABLE IF EXISTS `forum_topic`; 
CREATE TABLE IF NOT EXISTS `forum_topic` (
  `id_topic` int(11) NOT NULL AUTO_INCREMENT,
  `id_forum` int(11) NOT NULL,
  `topic_titre` char(60)  NOT NULL,
  `topic_createur` int(11) NOT NULL,
  `topic_vu` mediumint(8) NOT NULL,
  `topic_time` int(11) NOT NULL,
  `topic_genre` varchar(30)  NOT NULL,
  `topic_last_post` int(11) NOT NULL,
  `topic_first_post` int(11) NOT NULL,
  `topic_post` mediumint(8) NOT NULL,
  PRIMARY KEY  (`id_topic`),
  UNIQUE KEY `topic_last_post` (`topic_last_post`),
  KEY `forum_topic-user` (`topic_createur`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

ALTER TABLE `forum_categorie`
  ADD CONSTRAINT `forum_categorie-forum` FOREIGN KEY (`id_cat`) REFERENCES `forum_forum` (`id_cat`);

ALTER TABLE `forum_topic`
  ADD CONSTRAINT `forum_topic-forum` FOREIGN KEY (`id_forum`) REFERENCES `forum_forum` (`id_forum`),
  ADD CONSTRAINT `forum_topic-user` FOREIGN KEY (`topic_createur`) REFERENCES `forum_user` (`id_user`);

ALTER TABLE `forum_post`
  ADD CONSTRAINT `forum_post-topic` FOREIGN KEY (`id_topic`) REFERENCES `forum_topic` (`id_topic`),
  ADD CONSTRAINT `forum_post-user` FOREIGN KEY (`post_createur`) REFERENCES `forum_user` (`id_user`);
