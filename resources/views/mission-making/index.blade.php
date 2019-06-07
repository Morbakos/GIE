<!DOCTYPE html>
<html>
<head><title>GIE</title>
  <link rel="stylesheet" href="/css/tuto.css">
  <link rel="icon" type="image/png" href="/css/img/logo.png" />
</head>
<body>
  <div class='container'>
    <div class='content'>
      Choisissez le tuto:
      <br>{!! link_to_route('tuto.show', 'Intégrer la traduction française du manuel de déminage ', [1], []) !!}
      <br>{!! link_to_route('tuto.show', 'Intégrer le script HALO', [2], []) !!}
    </div>
  </div>
</body>
</html>
