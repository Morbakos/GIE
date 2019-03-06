<?php

	//==== Fonction qui permet de crypter un mot de passe
	function crypt_password($pass){
		$password = "lp1uigz75d".$pass."kpbm2dhofe";
		$passw = hash("sha1", $password);
		return $passw;
	}

	//==== Fonction qui permet d'obtenir un mot de passe
	function get_password($user){
		$db = Base::getBase();
		$data = $db->getPassword($user);
		return $data['user_mdp'];
	}

	//==== Fonction qui permet de vérifier que le mot de passe saisi est correct
	function check_password($user, $pass){
		if(crypt_password($pass) === get_password($user)){
			return true;
		} else {
			return false;
		}
	}

	//==== Fonction qui permet d'afficher une erreur
	function erreur($err=''){
	   $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
	   exit('<p>'.$mess.'</p>
	   <p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');
	}

?>