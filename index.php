<?php include 'psw.inc.php'; 
include 'base.inc.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title>Groupe d'Intervention Européen</title>
</head>
<body>

	<form action="#" method="post">
		<input type="text" name="name">
		<input type="password" name="pass">
		<input type="submit">
	</form>

	<?php 
		if(isset($_POST['name']) && isset($_POST['pass'])){
			$base = Base::getBase();
			/*$base->insertUser($_POST['name'], crypt_password($_POST['pass']));*/
			$res = $base->getPassword($_POST['name']);
			echo $res['password'];
		}
	?>

</body>
</html>
