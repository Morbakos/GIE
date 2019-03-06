<?php

//==== Définition des erreurs
define('ERR_IS_CO','Vous êtes déjà connecté');
define('ERR_IS_NOT_CO','Vous ne pouvez pas accéder à cette page si vous n\'êtes pas connecté');

//==== Définition des niveaux d'accès. On commence à 1, car 0 = utilisateur non connecté
define('VISITEUR',1);
define('INSCRIT',2);
define('MODO',3);
define('ADMIN',4);
?>