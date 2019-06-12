<html>
   
   <head>
  <title>Modification des missions GIE</title>
  <link rel="stylesheet" href="../../css/home.css">
  <link rel="icon" type="image/png" href="../../css/img/logo.png" />
   </head>
   
   <body>
    
   <div class='container'>
   <div class='content'><a href="../../missions">Retour en arrière</a></div><br/>
   {!! Form::model($mission, [route('missions.update', $mission->id_mission), 'method' => 'PUT', 'class' => 'form-horizontal panel']) !!}
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
                        Briefing :&nbsp&nbsp&nbsp&nbsp{!! Form::textarea('briefing_mission', null, ['class' => 'form-control', 'placeholder' => 'Briefing à saisir']) !!}<br/><br/>
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
                    {!! Form::close() !!}
                    
                </div>
                
            </body>