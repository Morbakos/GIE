<html>
   
   <head>
  <title>Modification des missions GIE</title>
  <link rel="stylesheet" href="../../css/home.css">
  <link rel="icon" type="image/png" href="../../css/img/logo.png" />
   </head>
   
   <body>
    
   <div class='container'>
   <div class='content'><a href="../../missions">Retour en arrière</a></div><br/>
   {!! Form::model($mission, ['route' => [ 'missions.update', $mission->id_mission], 'method' => 'PUT', 'class' => 'form-horizontal panel']) !!}
   {!! Form::token(); !!}
      
      <div class="form-group {!! $errors->has('nom_mission') ? 'has-error' : '' !!}">
        <fieldset style="display:inline-block;">
          <legend>Ajouter une mission :</legend>

          <div class="form-group {!! $errors->has('nom_mission') ? 'has-error' : '' !!}">

          <div class="form-group {!! $errors->has('auteur_mission') ? 'has-error' : '' !!}">
          Nom & auteur(s) :&nbsp&nbsp&nbsp&nbsp {!! Form::text('nom_mission', null, ['class' => 'form-control', 'placeholder' => 'Nom de la mission']) !!}&nbsp&nbsp&nbsp&nbsp
          {!! $errors->first('nom_mission', '<small class="help-block">:message</small>') !!}
          
          {!! Form::text('auteur_mission', null, ['class' => 'form-control', 'placeholder' => 'Auteur(s) de la mission']) !!}<br/><br/>
          {!! $errors->first('auteur_mission', '<small class="help-block">:message</small>') !!}
          

          <div class="form-group {!! $errors->has('map_mission') ? 'has-error' : '' !!}">
          Map:&nbsp&nbsp&nbsp&nbsp {!! Form::select('map_mission', array(
            'Map d\'Arma3' => array('Altis' => 'Altis','Stratis' => 'Stratis', 'Tanoa' => 'Tanoa', 'Malden2035' => 'Malden 2035'),
            'Map de CUP' => array('Bukovina' => 'Bukovina', 'Bystrica' => 'Bystrica', 'Chernarus (Autumn)' => 'Chernarus (Autumn)', 'Chernarus (Summer)' => 'Chernarus (Summer)', 'Chernarus (Winter)' => 'Chernarus (Winter)', 'Desert' => 'Desert','Desert Island' => 'Desert Island','Everon' => 'Everon','Kolgujev' => 'Kolgujev','Malden' => 'Malden','Nogova' => 'Nogova','Porto' => 'Porto','Proving Grounds' => 'Proving Grounds','Rahmadi' => 'Rahmadi','Sahrani' => 'Sahrani','Shapur' => 'Shapur','Southern Sahrani' => 'Southern Sahrani','Takistan' => 'Takistan','Takistan_mountains' => 'Takistan Mountains','United_sahrani' => 'United Sahrani','Utes' => 'Utes','Zargabad' => 'Zargabad'),
          ));!!}<br/><br/>
          {!! $errors->first('map_mission', '<small class="help-block">:message</small>') !!}

          <div class="form-group {!! $errors->has('composante_mission') ? 'has-error' : '' !!}">
          Composantes:<br>
          
          {!! Form::checkbox('composante_mission[]', 'Alpha') !!}Alpha<br>
          {!! Form::checkbox('composante_mission[]', 'Bravo') !!}Bravo<br>
          {!! Form::checkbox('composante_mission[]', 'Charlie') !!}Charlie<br>
          {!! Form::checkbox('composante_mission[]', 'Hotel') !!}Hotel<br>
          {!! Form::checkbox('composante_mission[]', 'November') !!}November<br>
          {!! Form::checkbox('composante_mission[]', 'Romeo') !!}Romeo<br>
          {!! Form::checkbox('composante_mission[]', 'Sierra') !!}Sierra<br><br>
          {!! $errors->first('composante_mission', '<small class="help-block">:message</small>') !!}
          

          <div class="form-group {!! $errors->has('nombre_slots_mission') ? 'has-error' : '' !!}">
          Nbr Slots :&nbsp&nbsp&nbsp&nbsp{!! Form::text('nombre_slots_mission', null, ['class' => 'form-control', 'placeholder' => 'Nombre de slots'])!!}<br/><br/>
          {!! $errors->first('nombre_slots_mission', '<small class="help-block">:message</small>') !!}
          
          <div class="form-group {!! $errors->has('correction_mission') ? 'has-error' : '' !!}">
          Correction :&nbsp&nbsp&nbsp&nbsp{!! Form::text('correction_mission', null, ['class' => 'form-control', 'placeholder' => 'Correction nécessaire'])!!}<br/><br/>
          {!! $errors->first('correction_mission', '<small class="help-block">:message</small>') !!}

          <div class="form-group {!! $errors->has('zeus_mission') ? 'has-error' : '' !!}">
          Zeus nécessaire ?&nbsp&nbsp&nbsp&nbspOui {!! Form::radio('zeus_mission', 'Oui')!!} - Non
          {!! Form::radio('zeus_mission', 'Non', true)!!}<br/><br/>
          {!! $errors->first('zeus_mission', '<small class="help-block">:message</small>') !!}

          <div class="form-group {!! $errors->has('briefing_mission') ? 'has-error' : '' !!}">
          Briefing :&nbsp&nbsp&nbsp&nbsp{!! Form::textarea('briefing_mission', null, ['class' => 'form-control', 'placeholder' => 'Briefing à saisir']) !!} <br/><br/>
          {!! $errors->first('briefing_mission', '<small class="help-block">:message</small>') !!}
          

          <div class="form-group {!! $errors->has('hostile_mission') ? 'has-error' : '' !!}">
          Ennemis :&nbsp&nbsp&nbsp&nbsp{!! Form::text('hostile_mission', null, ['class' => 'form-control', 'placeholder' => 'Hostile de la mission']) !!}<br/><br/>
          {!! $errors->first('hostile_mission', '<small class="help-block">:message</small>') !!}
          

          <div class="form-group {!! $errors->has('duree_estimee_mission') ? 'has-error' : '' !!}">
          Durée estimée :&nbsp&nbsp&nbsp&nbsp{!! Form::text('duree_estimee_mission', null, ['class' => 'form-control', 'placeholder' => 'Durée estimée']) !!}<br/><br/>
          {!! $errors->first('duree_estimee_mission', '<small class="help-block">:message</small>') !!}

          <div class="form-group {!! $errors->has('statut_mission') ? 'has-error' : '' !!}">
          Statut de la mission :&nbsp&nbsp&nbsp&nbsp{!! Form::select('statut_mission', array(
            'Statut actuel :' => array('A tester' => 'A tester','Jouable' => 'Jouable', 'A corriger' => 'A corriger'),
          ));!!}<br/><br/>
          {!! $errors->first('statut', '<small class="help-block">:message</small>') !!}
          

          <div class="form-group {!! $errors->has('nombre_jouer_mission') ? 'has-error' : '' !!}">
          Nombre de fois jouer :&nbsp&nbsp&nbsp&nbsp{!! Form::text('nombre_jouer_mission', null, ['class' => 'form-control', 'placeholder' => 'Nombre de fois jouer']) !!}<br/><br/>
          {!! $errors->first('nombre_jouer_mission', '<small class="help-block">:message</small>') !!}
          
          <div class="form-group {!! $errors->has('type_mission') ? 'has-error' : '' !!}">
          Type de mission :&nbsp&nbsp&nbsp&nbsp{!! Form::select('type_mission', array(
          
          'Type disponible :' => array('Offensive' => 'Offensive','Defensive' => 'Defensive', 'PvP' => 'PvP'),
          ));!!}<br/><br/>
          {!! $errors->first('type_mission', '<small class="help-block">:message</small>') !!}
          
          {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
        </fieldset>
        </div>

        {!! Form::close() !!}
                    
                </div>
                
            </body>