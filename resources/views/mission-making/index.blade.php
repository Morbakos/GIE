<?php $nav_here = 'nav-2'; ?>
<!DOCTYPE html>
<html>
<head><title>GIE</title>
  <link rel="stylesheet" href="/css/tuto.css">
  <link rel="stylesheet" href="https://use.typekit.net/lsr4ukz.css">
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="icon" type="image/png" href="/css/img/logo.png" />
</head>
<body>
  <?php include(app_path().'/includes/navbar.php');?>
  <div class='container'>
    <div class='content'>
      Choisissez le tuto:
      <br><span>{!! link_to_route('tuto.show', 'Intégrer la traduction française du manuel de déminage ', [1], []) !!}</span>
      <br><span>{!! link_to_route('tuto.show', 'Intégrer le script HALO', [2], []) !!}</span>
    </div>
  </div>
</body>
</html>
