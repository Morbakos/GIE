<?php
	class Base{
		private $bdd;
		private static $instance = null;

		private function __construct() {
			try
	        {
	        	$hote = 'mysql:host=localhost;dbname=base_produit;charset=utf8';
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

		public static function getBase() {

			if (is_null(self::$instance)) self::$instance = new Base();
			return self::$instance;
		}

		public function insertUser($user,$pass){
			$sql = "INSERT INTO users VALUES(':user',':pass')";
			$req = $this->$bdd->prepare($sql);
			$req->bindValue(":user", $user);
			$req->bindValue(":pass", $pass);
			$req->execute();
		}

		public function getPassword($user){
			$sql = "SELECT password FROM users WHERE nom=:name";
			$req = $this->$bdd->prepare($sql);
			$req->bindValue(":name", $user);
			$req->execute();
			$res = $req->fetch(FETCH_ASSOC);
			return $res;
		}
	}
?>