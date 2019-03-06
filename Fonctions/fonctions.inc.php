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

	//==== Fonction qui permet de générer le mail de validation de compte
	function generate_verif_mail(){

		//==== Déclaration du mail utilisateur
		$mail = $_SESSION['personne']['mail'];

		//==== Vérification du retour à la ligne
		if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)){
			$passage_ligne = "\r\n";
		} else {
			$passage_ligne = "\n";
		}

		//==== Déclaration du message au format texte.
		$message_txt = "Bonjour ".$_SESSION['personne']['pseudo'].",
							Bienvenue sur le site du Groupe d'Intervention Européen. Cette adresse mail a été utilisée pour créer un compte.

							Si vous êtes responsable de cette action, vous disposez de 24 heures pour cliquer sur le lien suivant afin de confirmer votre adresse mail : ".$lien."
								Si le lien ne fonctionne pas, merci de contacter un administrateur via le formulaire de contact.

							Si vous n'êtes pas à l'origine de cette action, merci d'ignorer ce mail.

							Nous vous souhaitons la bienvenue et espérons vous retrouver bientôt sur le terrain :)

							Cordialement,
							Le staff du Groupe d'Intervention Européen";

		//==== Déclaration du message au format HTML
		$message_html = "<html>
							<head>
								<meta charset='utf-8'>
							</head>
							<body>

								<h3>Bonjour ".$_SESSION['personne']['pseudo'].",</h3>

								<p>Bienvenue sur le site du Groupe d'Intervention Européen. Cette adresse mail a été utilisée pour créer un compte.<p>

								<p>Si vous êtes responsable de cette action, vous disposez de 24 heures pour cliquer sur le lien suivant afin de confirmer votre adresse mail : ".$lien."<br/>
								&emsp;Si le lien ne fonctionne pas, merci de contacter un administrateur via le formulaire de contact.</p>

								<p>Si vous n'êtes pas à l'origine de cette action, merci d'ignorer ce mail.</p>

								<p>Nous vous souhaitons la bienvenue et espérons vous retrouver bientôt sur le terrain :)</p>

								<h3>Cordialement,<br/>
								Le staff du Groupe d'Intervention Européen</h3>


							</body>
						</html>";

		//==== Création du boundary ("frontière" qui permet de séparer les différentes parties d'un mail)
		$boundary = "-----=".md5(rand());


		//==== Sujet du mail
		$sujet = "Bienvenue sur le site du Groupe d'Intervention Européen !";

		//==== Déclaration du header du mail
		$header = "From: \"team.gie.global@gmail.com\"<team.gie.global@gmail.com>".$passage_ligne;
		$header.= "MIME-Version: 1.0".$passage_ligne;
		$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

		//==== Création du message.
		$message = $passage_ligne."--".$boundary.$passage_ligne;
		//==== Ajout du message au format texte.
		$message.= "Content-Type: text/plain; charset=\"UTF-8\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_txt.$passage_ligne;		
		$message.= $passage_ligne."--".$boundary.$passage_ligne;
		
		//==== Ajout du message au format HTML
		$message.= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_html.$passage_ligne;
		
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

		//==== Envoi du mail
		mail($_SESSION['personne']['mail'],$sujet,$message,$header);
		
	}

?>