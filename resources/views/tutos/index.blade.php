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
      @foreach ($tutos as $tuto)
        {!! link_to_route('tuto.show', $tuto->nom_tuto, [$tuto->id_tuto], []) !!}<br>
      @endforeach
    </div>

     @if (Auth::check())
      {!! Form::open(['route' => 'tuto.store', 'class' => 'form-horizontal panel']) !!}
      {!! Form::token(); !!}
      <div class="form-group {!! $errors->has('nom_tuto') ? 'has-error' : '' !!}">
        <fieldset style="display:inline-block;">
          <legend>Ajouter un tuto :</legend>

          <div class="form-group {!! $errors->has('nom_tuto') ? 'has-error' : '' !!}">

          <div class="form-group {!! $errors->has('contenu') ? 'has-error' : '' !!}">
          Nom du tuto :{!! Form::text('nom_tuto', null, ['class' => 'form-control', 'placeholder' => 'Nom du tuto']) !!}
          {!! $errors->first('nom_mission', '<small class="help-block">:message</small>') !!}<br><br>
          
          Contenu :{!! Form::textarea('contenu', null, ['class' => 'form-control', 'placeholder' => 'Contenu (formatage HTML accepté)']) !!}<br/><br/>
          {!! $errors->first('contenu', '<small class="help-block">:message</small>') !!}
          
          {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
        </fieldset>
        </div>

        {!! Form::close() !!}
        @endif

  </div>
</body>
</html>
