<?php
	class Base{
		//==== Variables
		private $bd;
		private static $instance = null;

		private function __construct() {
			try
	        {
	        	$hote = 'mysql:host=localhost;dbname=test;charset=utf8';
				$user = 'root';
				$pass = '';
	            $this->bd = new PDO($hote, $user , $pass);
	            $this->bd->query('SET NAMES utf8');
	            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        }
	        catch (Exception $e)
	        {
	            die('Erreur : '.$e->getCode().' '. $e->getMessage());
	        }

		}

		//==== On instancie la classe
		public static function getBase() {
			if (is_null(self::$instance)) self::$instance = new Base();
			return self::$instance;
		}

		//==== Méthode permettant d'obtenir le mdp d'un user
		public function getPassword($user){
			try {
				$sql = "SELECT 
							user_mdp 
						FROM 
							forum_user 
						where 
							user_pseudo = :nom";

				$req = $this->bd->prepare($sql);
				$req->bindValue(':nom',$user);
				$req->execute();
				$tab = $req->fetch(PDO::FETCH_ASSOC);

				if ($tab !== "")
					return $tab;
				else
					return false;

			} catch (PDOException $e){
				die('<p> Erreur : '. $e->getMessage().'</p>');
			}
		}

		//==== Méthode permettant d'obtenir toutes les informations d'un user
		public function getPersonne($user){
			
			try {
				$sql = "SELECT 
							id_user, user_rang, user_pseudo
		        		FROM 
		        			forum_user 
		        		WHERE 
		        			user_pseudo = :user";
				$req = $this->bd->prepare($sql);
				$req->bindValue(":user"	, $user);
				$req->execute();
				$res = $req->fetch(PDO::FETCH_ASSOC);

				if($res != "")
					return $res;
				else
					return false;

			} catch (PDOException $e){
				die('<p> Erreur : '. $e->getMessage().'</p>');
			}
		}

	}
?>