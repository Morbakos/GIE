<?php

	function crypt_password($pass){
		$password = "Grou".$pass."IntEuro";
		$passw = hash("sha1", $password);
		return $passw;
	}

	function get_password($user){
		var_dump($personnes);
	}

	function check_password($user, $pass){
		if(crypt_password($pass) === get_password($user)){
			return true;
		} else {
			return false;
		}
	}
?>