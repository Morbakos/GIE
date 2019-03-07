<?php

//==== Définition des erreurs
define('ERR_IS_CO','Vous êtes déjà connecté', true);
define('ERR_IS_NOT_CO','Vous ne pouvez pas accéder à cette page si vous n\'êtes pas connecté', true);
define('ERR_ALREADY_VALIDE','Votre compte a déjà été activé', true);
define('ERR_DIFFERENT_KEYS','Les clés ne correspondent pas', true);
define('ERR_EXPIRED_DATE','La date de validation a expiré', true);

//==== Définition des niveaux d'accès. On commence à 1, car 0 = utilisateur non connecté
define('VISITEUR',1, true);
define('INSCRIT',2, true);
define('MODO',3, true);
define('ADMIN',4, true);
?>