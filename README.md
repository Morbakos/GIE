# Branche "BACKEND"
Cette branche est dédié à l'intégration pré-prod des fonctionnalitées backend

Participants
==================
  * Morbakos: développeur backend + database
  * Jack Smith: développeur backend + database
  
Première étape: création base de données
========================================
  Dans un premier temps, nous avons défini la base de la manière suivante:

   Table           | Données                    | Type de valeur   |
  :---------------:|----------------------------|------------------|
  forum_categorie  |id_cat                      |int(11)           |
  forum_categorie  |cat_nom                     |varchar(30)       |
  forum_categorie  |cat_ordre                   |int(11)           |
   | | |
  forum_forum      |id_forum                    |int(11)           | 
  forum_forum      |id_cat                      |int(11)           |
  forum_forum      |forum_name                  |varchar(30)       |
  forum_forum      |forum_desc                  |text              |
  forum_forum      |forum_ordre                 |mediumint(8)      |
  forum_forum      |forum_last_id_post          |int(11)           |
  forum_forum      |forum_topic                 |mediumint(8)      |
  forum_forum      |forum_post                  |mediumint(8)      |
  forum_forum      |auth_view                   |tinyint(4)        |
  forum_forum      |auth_post                   |tinyint(4)        |
  forum_forum      |auth_topic                  |tinyint(4)        |
  forum_forum      |auth_annonce                |tinyint(4)        |
  forum_forum      |auth_modo                   |tinyint(4)        |
   | | |
  forum_topic      |id_topic                    |int(11)           | 
  forum_topic      |id_forum                    |int(11)           |
  forum_topic      |topic_titre                 |varchar(60)       |
  forum_topic      |topic_createur              |int(11)           |
  forum_topic      |topic_vu                    |mediumint(8)      |
  forum_topic      |topic_time                  |int(11)           |
  forum_topic      |topic_genre                 |varchar(30)       |
  forum_topic      |topic_last_post             |int(11)           |
  forum_topic      |topic_first_post            |int(11)           |
  forum_topic      |topic_post                  |mediumint(8)      |
   | | |
  forum_post       |id_post                     |int(11)           | 
  forum_post       |post_createur               |int(11)           |
  forum_post       |post_texte                  |text              |
  forum_post       |post_time                   |int(11)           |
  forum_post       |id_topic                    |int(11)           |
  forum_post       |post_id_forum               |int(11)           |
   | | |
  forum_user       |id_user                     |int(11)           | 
  forum_user       |user_pseudo                 |varchar(30)       |
  forum_user       |user_mdp                    |varchar(64)       |
  forum_user       |user_email                  |varchar(250)      |
  forum_user       |user_avatar                 |varchar(100)      |
  forum_user       |user_valide                 |tinyint(1)        |
  forum_user       |user_rang                   |tinyint(4)        |
  forum_user       |user_post                   |int(11)           |
   | | |
  forum_validation |id_validation               |int(11)           | 
  forum_validation |id_user                     |int(11)           |
  forum_validation |validation_cle              |varchar(64)       |
  forum_validation |validation_until            |datetime          |

  Cette base nous servira de "socle" afin de commencer à concevoir le reste du site. Ce format n'est pas définitif et pourra/devra être adapté en fonction de nos besoins.

Deuxième étape: réalisation des fonctions PHP 
=============================================

  Liaison avec la base de données
  -------------------------------

   Afin de simplifier la gestion de la connexion entre la base de données et le serveur Web, nous avons décidé de créer une classe "base", dont voici les méthodes à la date de mise à jour de ce document (08/03/2019):

   ```php
   //==== Note: les fonction sont représentées sous le format suivant: 
   //==== <encapsulation> [static] function <nom>( [(type_paramètre)paramètre] ):valeur_de_retour
   //==== Les termes contenus dans des crochets [] sont faculatifs  

   public static function get_base():Base
   public function get_password((String)$user):array
   public function get_personne((String)$user):array
   public function get_cle_validation((String)$id):array
   public function set_personne((Array)$data):void
   public function set_cle_validation((int)$id, (String)$cle, (date)$duree):void
   public function set_valide_user((int)$id):void
   ```

  Fonctions et constantes
  -----------------------

  ### Fonctions
   Afin de faciliter la gestion des fonctions, elle seront toutes regroupées dans un fichier "fonctions". Voici les méthodes à la date de mise à jour de ce document (08/03/2019):
   ```php

   //==== Note: les fonction sont représentées sous le format suivant: 
   //==== function <nom>( [(type_paramètre)paramètre] ):valeur_de_retour

   function crypt_password((String)$pass):String
   function check_password((String)$user, (String)$pass):bool
   function erreur((Constante)$err):void
   function check_cle_activation((int)$id, (String)$cle):bool
   function generate_verif_mail():void
   ```

  ### Constantes
   Comme pour les fonctions, les constantes seront regroupées dans un fichier "constantes". Les constantes existantes au 08/03/2019 sont:
   *Note: la liste suivante prends le format <nom_de_l_erreur>:<valeur_de_retour>*

   * ERR_IS_CO: Vous êtes déjà connecté
   * ERR_IS_NOT_CO: Vous ne pouvez pas accéder à cette page si vous n'êtes pas connecté
   * ERR_ALREADY_VALIDE: Votre compte a déjà été activé
   * ERR_DIFFERENT_KEYS: Les clés ne correspondent pas
   * ERR_EXPIRED_DATE: La date de validation a expiré

   * VISITEUR: 1
   * INSCRIT: 2
   * MODO: 3
   * ADMIN: 4

Ressources utiles
=================
[Code de conduite](CODE_OF_CONDUCT.md) <br/>
[Contributeurs](CONTRIBUTING.md)
