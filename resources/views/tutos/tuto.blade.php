<?php $nav_here = 'nav-2'; ?>
@include('navbar')
<!DOCTYPE html>
<html>
<head><title>GIE</title>
  <link rel="stylesheet" href="/css/tuto.css">
  <link rel="stylesheet" href="https://use.typekit.net/lsr4ukz.css">
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="icon" type="image/png" href="/css/img/logo.png" />
</head>
<body>
  <div class='container'>
    <div class='content'>
      <div class="user">
        {!! $tuto->contenu !!}
      </div>
      <a class="retour" href="/tuto">Retour</a>
    </div>
  </div>
</body>
</html>
