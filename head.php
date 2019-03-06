<?php

//====	On include tous les fichiers de configs/fonctions
require_once 'Fonctions/base.inc.php';
require_once 'Fonctions/fonctions.inc.php';
require_once 'Fonctions/constantes.inc.php';

//====	On init les variables et les sessions
session_start();
$bd = Base::getBase();

?>


<!--  Étant un fichier unclu dans toutes les pages, on défini le header html -->
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titre ?></title>
	<meta charset="utf-8">
</head>
<body>