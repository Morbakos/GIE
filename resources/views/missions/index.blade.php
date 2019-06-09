<?php $nav_here = 'nav-3'; ?>
<html>

   <head>
  <title>Affichage des missions GIE</title>
  <link rel="stylesheet" href="css/missions.css">
  <link rel="stylesheet" href="https://use.typekit.net/lsr4ukz.css">
  <link rel="icon" type="image/png" href="css/img/logo.png" />
  <link rel="stylesheet" href="/css/navbar.css">
   </head>

   <body>
   <?php include(app_path().'/includes/navbar.php');?>
   <div class='container'>
   <div class='title'>Nos missions </div><br/>
      <table border = 1 class='center' style="text-align:center">
         <tr>
            <th>Nom de la mission</th>
            <th>Auteur de la mission</th>
            <th>Map</th>
            <th>Nombre de slot</th>
            <th>Correction</th>
            <th>Zeus</th>
            <th>Briefing</th>
            <th>Hostiles</th>
            <th>Durée estimée</th>
            <th>Statut de la mission</th>
            <th>Nombre de fois jouée</th>
            <th>Type de la mission</th>
         </tr>
         @foreach ($missions as $mission)
         <tr>
            <input type="hidden" value='{{ $mission->id_mission }}'>
            <td>{{ $mission->nom_mission }}</td>
            <td>{{ $mission->auteur_mission }}</td>
            <td>{{ $mission->map_mission }}</td>
            <td>{{ $mission->nombre_slots_mission }}</td>
            <td>{{ $mission->correction_mission }}</td>
            <td>{{ $mission->zeus_mission }}</td>
            <td width="20%">{{ $mission->briefing_mission }}</td>
            <td>{{ $mission->hostile_mission }}</td>
            <td>{{ $mission->duree_estimee_mission }}</td>
            <td>{{ $mission->statut_mission }}</td>
            <td>{{ $mission->nombre_jouer_mission }}</td>
            <td>{{ $mission->type_mission }} </td>
         </tr>

         @endforeach
      </table>
      <br/><br/><br/><br/>
      @if (Auth::check())
      {!! Form::open(['route' => 'missions.store', 'class' => 'form-horizontal panel']) !!}
      {!! Form::token(); !!}
                    <div class="form-group {!! $errors->has('nom_mission') ? 'has-error' : '' !!}">
                    <fieldset style="display:inline-block;">
                        <legend>Ajouter une mission :</legend>
                       Nom & auteur(s) :&nbsp&nbsp&nbsp&nbsp {!! Form::text('nom_mission', null, ['class' => 'form-control', 'placeholder' => 'Nom de la mission']) !!}&nbsp&nbsp&nbsp&nbsp
                        {!! Form::text('auteur_mission', null, ['class' => 'form-control', 'placeholder' => 'Auteur(s) de la mission']) !!}<br/><br/>
                        Map:&nbsp&nbsp&nbsp&nbsp {!! Form::select('map_mission', array(
                        'Map d\'Arma3' => array('Altis' => 'Altis','Stratis' => 'Stratis', 'Tanoa' => 'Tanoa', 'Malden2035' => 'Malden 2035'),
                        'Map de CUP' => array('Bukovina' => 'Bukovina', 'Bystrica' => 'Bystrica', 'Chernarus (Autumn)' => 'Chernarus (Autumn)', 'Chernarus (Summer)' => 'Chernarus (Summer)', 'Chernarus (Winter)' => 'Chernarus (Winter)', 'Desert' => 'Desert','Desert Island' => 'Desert Island','Everon' => 'Everon','Kolgujev' => 'Kolgujev','Malden' => 'Malden','Nogova' => 'Nogova','Porto' => 'Porto','Proving Grounds' => 'Proving Grounds','Rahmadi' => 'Rahmadi','Sahrani' => 'Sahrani','Shapur' => 'Shapur','Southern Sahrani' => 'Southern Sahrani','Takistan' => 'Takistan','Takistan_mountains' => 'Takistan Mountains','United_sahrani' => 'United Sahrani','Utes' => 'Utes','Zargabad' => 'Zargabad'),
                        ));!!}<br/><br/>
                        Nbr Slots :&nbsp&nbsp&nbsp&nbsp{!! Form::text('nombre_slots_mission', null, ['class' => 'form-control', 'placeholder' => 'Nombre de slots'])!!}<br/><br/>
                        Correction :&nbsp&nbsp&nbsp&nbsp{!! Form::text('correction_mission', null, ['class' => 'form-control', 'placeholder' => 'Correction nécessaire'])!!}<br/><br/>
                        Zeus nécessaire ?&nbsp&nbsp&nbsp&nbspOui {!! Form::radio('zeus_mission', 'Oui')!!} - Non
                        {!! Form::radio('zeus_mission', 'Non', true)!!}<br/><br/>
                        Briefing :&nbsp&nbsp&nbsp&nbsp{!! Form::textarea('briefing_mission', null, ['class' => 'form-control', 'placeholder' => 'Briefing à saisir']) !!} <br/><br/>
                        Ennemis :&nbsp&nbsp&nbsp&nbsp{!! Form::text('hostile_mission', null, ['class' => 'form-control', 'placeholder' => 'Hostile de la mission']) !!}<br/><br/>
                        Durée estimée :&nbsp&nbsp&nbsp&nbsp{!! Form::text('duree_estimee_mission', null, ['class' => 'form-control', 'placeholder' => 'Durée estimée']) !!}<br/><br/>
                        Statut de la mission :&nbsp&nbsp&nbsp&nbsp{!! Form::select('statut_mission', array(
                        'Statut actuel :' => array('A tester' => 'A tester','Jouable' => 'Jouable', 'A corriger' => 'A corriger'),
                        ));!!}<br/><br/>
                        Nombre de fois jouer :&nbsp&nbsp&nbsp&nbsp{!! Form::text('nombre_jouer_mission', null, ['class' => 'form-control', 'placeholder' => 'Nombre de fois jouer']) !!}<br/><br/>
                        Type de mission :&nbsp&nbsp&nbsp&nbsp{!! Form::select('type_mission', array(
                        'Type disponible :' => array('Offensive' => 'Offensive','Defensive' => 'Defensive', 'PvP' => 'PvP'),
                        ));!!}<br/><br/>
                        {!! $errors->first('nom_mission', '<small class="help-block">:message</small>') !!}<br/><br/>
                        {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
                        </fieldset>
                    </div>
</html>
                    {!! Form::close() !!}
                @else
                @endif
                </div>
                    </body>
