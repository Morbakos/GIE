<?php $nav_here = 'nav-1'; ?>
<!DOCTYPE html>
<html>
<head><title>GIE</title>
  <link rel="stylesheet" href="/css/home.css">
  <link rel="icon" type="image/png" href="/css/img/logo.png" />
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="https://use.typekit.net/lsr4ukz.css">
</head>
<body>
  <?php include(app_path().'/includes/navbar.php');?>
  <div class='container'>
      <div class='content'>
        <img src="/css/img/logo.png" alt="logo du GIE">
      <div class='title'>Bienvenue sur le site du GIE !</div>
      <div class='container'>
      <div class='content'>Bienvenue sur le nouveau site du GIE. Il est en cours de construction mais il sera bientôt disponible. Cependant si vous souhaitez accéder à l'ancienne version je vous invite à <a class='link' href="https://gie.polygames.net/">cliquer ici</a>.

      @if (!Auth::guest())
        <br>
        <a href="{{ route('logout') }}"
          class='link'
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          Se déconnecter
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      @endif
      </div>
      </div>
    </div>
  </div>
</body>
</html>
