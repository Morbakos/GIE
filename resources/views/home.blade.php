<!DOCTYPE html>
<html>
<head><title>GIE</title>
  <link rel="stylesheet" href="/css/home.css">
  <link rel="icon" type="image/png" href="/css/img/logo.png" />
</head>
<body>
  <div class='container'>
      <div class='content'>
        <img src="/css/img/logo.png" alt="logo du GIE">
      <div class='title'>Bienvenue sur le site du GIE !</div>
      <div class='container'>
      <div class='content'>Bienvenue sur le nouveau site du GIE. Il est en cours de construction mais il sera bientôt disponible. Cependant si vous souhaitez accéder à l'ancienne version je vous invite à <a href="https://gie.polygames.net/">cliquer ici</a>.
      
      @if (!Auth::guest())
        <a href="{{ route('logout') }}"
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
