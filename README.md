# Branche "BACKEND"
Cette branche est dédié à l'intégration pré-prod des fonctionnalitées backend

Participants
==================
  * Morbakos: développeur backend + database
  * Jack Smith: développeur backend + database
  
Première étape: création base de données
========================================
  Dans un premier temps, nous avons défini que les données suivantes devaient être sauvegardées:

   Catégorie  | Données                    | Type de valeur   |
  :----------:|----------------------------|------------------|
  Utilisateur |Username                    |String            |
  Utilisateur |Password                    |String            |
  Utilisateur |Email                       |String            |
  Utilisateur |Photo de profile            |File (à découper) | 
  Utilisateur |Status membre               |Booléen           |
  Utilisateur |Status membre composante(s) |Booléen           |
  Utilisateur |Status admin                |Int               |
   | | |
  Forum       |Sujet topic                 |String
  Forum       |Contenu topic               |String ou file
  Forum       |Nom auteur                  |String

Deuxième étape: réalisation de la base
======================================
  En se basant sur le tableau précédent, nous allons réaliser le script pour générer la base de données.

Troisième étape: listing des fonctionnalités nécessaires
=========================================================
  Une fois le script de la base de données terminée, nous allons réaliser une liste des fonctionnalités à réaliser.