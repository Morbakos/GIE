<?php $nav_here = 'nav-1'; ?>
@include('navbar')
<!DOCTYPE html>
<html>
<head><title>GIE</title>
  <link rel="stylesheet" href="/css/home.css">
  <link rel="icon" type="image/png" href="/css/img/logo.png" />
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="https://use.typekit.net/lsr4ukz.css">
</head>
<body>
  <div class='container'>
      <div class='content'>
        <img src="/css/img/logo.png" alt="logo du GIE">
      <div class='title'>Bienvenue sur le site du GIE !</div>
      <div class='container'>
      <div class='content'>Bienvenue sur le nouveau site du GIE. Il est en cours de construction mais il sera bientôt disponible. Cependant si vous souhaitez accéder à l'ancienne version je vous invite à <a class='link' href="https://gie.polygames.net/">cliquer ici</a>.
	  
	  @if(Auth::check())
	    <br>
		<br>
		<form action="test.php" method="POST">
				<input type="hidden" name="serveur" value="milsim">
				<input type="submit" value="Éteindre le serveur milsim" onclick="return confirm('Veux tu vraiment éteindre le serveur milsim ?');">
			</form>
			<form action="test.php" method="POST">
				<input type="hidden" name="serveur" value="antistasi">
				<input type="submit" value="Éteindre le serveur Antistasi" onclick="return confirm('Veux tu vraiment éteindre le serveur antistasi ?');">
			</form>		
	  @endif
      </div>
      </div>
    </div>
  </div>
</body>
</html>
