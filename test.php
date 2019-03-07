<?php
	include 'head.php'
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
</head>
<body>
<?php 
	$_SESSION['personne']['mail'] = "jacobalexis993@gmail.com";
	$_SESSION['personne']['pseudo'] = "Morbakos";
	$_SESSION['personne']['id'] = 1;

	generate_verif_mail();
?>

</body>
</html>