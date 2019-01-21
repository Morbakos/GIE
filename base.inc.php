<?php
	class Base{
		//Variables
		private $bd;
		private static $instance = null;

		private function __construct() {
			try
	        {
	        	$hote = 'mysql:host=localhost;dbname=gie;charset=utf8';
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
			try {
				$sql = "INSERT INTO users(name,password) VALUES(:user,:pass)";
				$req = $this->bd->prepare($sql);
				$req->bindValue(":user", $user);
				$req->bindValue(":pass", $pass);
				$req->execute();
			} catch (PDOException $e){
				die('<p> Erreur : '. $e->getMessage().'</p>');
			}
		}

		public function getPassword($user){
			$sql = "SELECT password FROM users WHERE name=:name";
			$req = $this->bd->prepare($sql);
			$req->bindValue(":name"	, $user);
			$req->execute();
			$res = $req->fetch(PDO::FETCH_ASSOC);
			return $res;
		}
	}
?>