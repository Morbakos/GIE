<!DOCTYPE html>
<html>
<head><title>GIE</title>
  <link rel="stylesheet" href="/css/tuto.css">
  <link rel="icon" type="image/png" href="/css/img/logo.png" />
</head>
<body>
  <div class='container'>
    <div class='content'>
     	@if ($id == 1)
     		<h3>Insertion de la traduction française du manuel de déminage</h3>

			Dans votre dossier mission, Créez un fichier nommé <code>init.sqf</code>.
			Dans le fichier <code>init.sqf</code>, insérez le code suivant:<br><br>

			<details >
				<summary>code</summary>
				<pre><code>[] execVM "bombManual.sqf"; </code></pre>
			</details>

			<br>Créez un fichier nommé <code>bombManual.sqf</code>.
			Dans le fichier <code>bombManual.sqf</code>, insérez le code suivant:<br><br>

			<details >
				<summary>code</summary>
				<pre class="data"><code>if !(hasInterface) exitWith {};
waituntil {alive player};

player createDiarySubject ["bombManual","Manuel du demineur"];

player createDiaryRecord ["bombManual", ["Credits", "&lt;font color='#add118' size=20>Credits&lt;/font>
&lt;br/>All rights belong to the MCC (Mission Control Center) development team. 
&lt;br/>Translated by Gavin 'Morbakos' Sertix for the Groupe d'Intervention Europeen (G.I.E)

&lt;br/>
&lt;br/>Tous les droits reviennent à l'equipe de developpement de MCC (Mission Control Center). 
&lt;br/>Traduit par Gavin 'Morbakos' Sertix pour le Groupe d'Intervention Europeen (G.I.E)"]];

player createDiaryRecord ["bombManual", ["Module pave numerique","&lt;font color='#add118' size=20>Module pave numerique&lt;/font>
&lt;br/>Appuyez sur les boutons du pave numerique dans l'ordre de droite lorsque leurs symboles apparaissent de gauche à droite.
&lt;br/>
&lt;br/>&lt;font color='#add118' size=15>Numero de serie divisible par 7&lt;/font>
&lt;br/>[ ^ , p , 2 , P , M , N , 0 , n , o , % , # , ) , } , | , i , m , I ]
&lt;br/>
&lt;br/>&lt;font color='#add118' size=15>Autre&lt;/font>
&lt;br/>[ 0 , m , ) , o , | , # , ^ , n , P , i , N , 2 , I , M , % , p , } ]"]];

player createDiaryRecord ["bombManual", ["Module Case a cocher","&lt;font color='#add118' size=20>Module Case a cocher&lt;/font>
&lt;br/>Cochez chaque case en fonction du symbole au-dessus et du type de bombe.
&lt;br/>
&lt;br/>&lt;font color='#add118' size=15>Numero de serie divisible par 3 et 7&lt;/font>
&lt;br/>@ - off      1 - off
&lt;br/>^ - on       ~ - on
&lt;br/>) - on       ] - on
&lt;br/>( - off      [ - on
&lt;br/>| - on       \ - off
&lt;br/>/ - off      ? - off
&lt;br/>3 - off      % - off
&lt;br/>* - on       L - on
&lt;br/>8 - on       5 - off
&lt;br/>; - on      A - off
&lt;br/>a - on       g - off
&lt;br/>G - on       b - off
&lt;br/>B - on       p - off
&lt;br/>P - on       w - on 
&lt;br/>W - off      m - on
&lt;br/>n - off      N - on
&lt;br/>M - off      t - on 
&lt;br/>T - off       ` - on
&lt;br/>: - off       o - on 
&lt;br/>0 - off
&lt;br/>
&lt;br/>&lt;font color='#add118' size=15>Numero de serie divisible uniquement par 3&lt;/font>
&lt;br/>@ - off      1 - off
&lt;br/>^ - off       ~ - on
&lt;br/>) - on       ] - on
&lt;br/>( - off      [ - on
&lt;br/>| - on       \ - off
&lt;br/>/ - off      ? - off
&lt;br/>3 - off      % - on 
&lt;br/>* - off       L - on
&lt;br/>8 - off       5 - off
&lt;br/>; - on      A - on
&lt;br/>a - off       g - off
&lt;br/>G - on       b - on
&lt;br/>B - on       p - on
&lt;br/>P - off       w - on 
&lt;br/>W - off      m - off
&lt;br/>n - off      N - off
&lt;br/>M - on      t - on 
&lt;br/>T - on       ` - off
&lt;br/>: - off       o - on 
&lt;br/>0 - off
&lt;br/>
&lt;br/>&lt;font color='#add118' size=15>Autre&lt;/font>
&lt;br/>@ - off      1 - off
&lt;br/>^ - on       ~ - off
&lt;br/>) - on       ] - off
&lt;br/>( - on      [ - off
&lt;br/>| - off       \ - off
&lt;br/>/ - off      ? - on
&lt;br/>3 - on      % - on 
&lt;br/>* - on       L - on
&lt;br/>8 - on       5 - off
&lt;br/>; - off      A - off
&lt;br/>a - on       g - on
&lt;br/>G - off       b - off
&lt;br/>B - on       p - off
&lt;br/>P - off       w - off 
&lt;br/>W - off      m - on
&lt;br/>n - off      N - on
&lt;br/>M - off      t - on 
&lt;br/>T - off       ` - on
&lt;br/>: - off       o - off 
&lt;br/>0 - off"]];

player createDiaryRecord ["bombManual", ["Module Fils","&lt;font color='#add118' size=20>Module Fils&lt;/font>

&lt;br/>Chaque module de fils peut avoir entre 3 et 8 fils de differentes couleurs.

&lt;br/>Vous devez couper un fil pour desarmer le module.

&lt;br/>Couper le mauvais fil signifie une faute.

&lt;br/>

&lt;br/>&lt;font color='#add118' size=15>Numero de serie divisible par 3&lt;/font>

&lt;br/>

&lt;br/>3 fils:

&lt;br/>S'il n'y a pas de fils rouges, coupez le premier fil.

&lt;br/>Sinon, si le dernier fil est vert, coupez le dernier fil.

&lt;br/>Sinon, s'il y a un fil bleu, coupez le fil bleu.

&lt;br/>Sinon, s'il y a un fil noir, coupez le fil noir.

&lt;br/>Sinon, coupez le deuxième fil.

&lt;br/>

&lt;br/>4 ou 5 fils:

&lt;br/>S'il n'y a pas de fils blancs, couper le deuxième fil.
&lt;br/>Au contraire, si le dernier fil est noir, coupez le dernier fil.
&lt;br/>S'il y a un fil vert, couper le fil vert.
&lt;br/>S'il y a un fil rouge, couper le fil rouge.
&lt;br/>Dans le cas contraire, couper le troisième fil.
&lt;br/>
&lt;br/>6+ fils :
&lt;br/>S'il n'y a pas de fils verts, couper le troisième fil.
&lt;br/>Si le dernier fil est bleu, coupez le dernier fil.
&lt;br/>S'il y a un fil noir, couper le fil noir.
&lt;br/>S'il y a un fil blanc, couper le fil blanc.
&lt;br/>Dans le cas contraire, couper le premier fil.
&lt;br/>

&lt;br/>&lt;font color='#add118' size=15>Numero de serie non divisible par 3&lt;/font>

&lt;br/>
&lt;br/>3 fils :
&lt;br/>S'il n'y a pas de fils verts, couper le premier fil.
&lt;br/>Au contraire, si le dernier fil est blanc, coupez le dernier fil.
&lt;br/>S'il y a un fil noir, couper le fil noir.
&lt;br/>S'il y a un fil bleu, coupez le fil bleu.
&lt;br/>Dans le cas contraire, couper le deuxième fil.
&lt;br/>
&lt;br/>4-5 fils :
&lt;br/>S'il n'y a pas de fils bleus, couper le deuxième fil.
&lt;br/>Au contraire, si le dernier fil est blanc, coupez le dernier fil.
&lt;br/>S'il y a un fil rouge, couper le fil rouge.
&lt;br/>S'il y a un fil bleu, coupez le fil bleu.
&lt;br/>Dans le cas contraire, couper le troisième fil.
&lt;br/>
&lt;br/>6+ fils
&lt;br/>S'il n'y a pas de fils rouges, couper le troisième fil.
&lt;br/>Au contraire, si le dernier fil est noir, coupez le dernier fil.
&lt;br/>S'il y a un fil blanc, couper le fil blanc.
&lt;br/>S'il y a un fil vert, couper le fil vert.
&lt;br/>Dans le cas contraire, couper le premier fil."]];

player createDiaryRecord ["bombManual", ["General","&lt;font color='#add118' size=20>Bombs &lt;/font>Bombs

&lt;br/>Une fois que le minuteur de la bombe a demarre, vous ne pouvez plus l'arrêter.

&lt;br/>La bombe explosera lorsque son compte à rebours atteindra zero ou si vous fermez le dialogue ou si vous avez eu 3 coups.

&lt;br/>Pour desamorcer la bombe, vous devrez desamorcer chacun de ses modules avant la fin du temps imparti.

&lt;br/>

&lt;br/>

&lt;br/>>&lt;font color='#add118' size=20>Modules&lt;/font>Font

&lt;br/>Chaque bombe peut avoir plusieurs modules selon sa difficulte. Chaque module est discret et peut être desarme à tout moment - mais vous devrez desarmer tous les modules avant que l'horloge ne s'arrête pour eviter l'explosion de la bombe.

&lt;br/>Puisque vous ne pouvez pas fermer la boîte de dialogue pendant le desarmement d'une bombe, vous devrez vraiment vous adresser à un autre joueur qui a la bombe manuellement ouverte devant lui et il devra vous guider dans le processus de desarmement des modules.
&lt;br/>
&lt;br/>>&lt;font color='#add118' size=20>Numero de serie&lt;/font>Numero de serie

&lt;br/>Chaque bombe a son propre numero de serie unique imprime sur le devant. Faites attention au numero de serie car il affectera la methode de desarmement de la bombe."]];
			</code></pre>
			</details>

			<br>Votre dossier de mission doit contenir les éléments suivants:

			<ul>
				<li>mission.sqm</li>
				<li>init.sqf</li>
				<li>bombManual.sqf</li>
			</ul>

			Tadaa ! Si vous ne vous êtes pas trompé, vous aurez un joli petit onglet “Manuel du démineur” sur votre carte :)





		@elseif ($id == 2)

		<h3>Insertion du script de parachutage HALO</h3>

			Dans l'éditeur, accédez aux propriétés de l'objet sur lequel vous souhaitez ajouter le saut HALO. Dans le champ <code>init</code>, insérez le code suivant<br><br>

			<details >
				<summary>code</summary>
				<pre><code>this addAction ["Saut HALO", {[] execVM "halo.sqf"}];
 </code></pre>
			</details>

			<br>Créez un fichier nommé <code>halo.sqf</code>.
			Dans le fichier <code>halo.sqf</code>, insérez le code suivant:<br><br>

			<details >
				<summary>code</summary>
				<pre class="data"><code>openMap true;
hint "Sélectionner le lieu de parachutage";
// Sauvegarde inventaire
_b = backpack player;
_bi = backpackItems player;

// Ajouter le parachute au joueur
removeBackpack player;
player addBackpack "B_Parachute";

mapclick = false;
onMapSingleClick "clickpos = _pos; mapclick = true; onMapSingleClick """";true;";

// Attendre que le joueur ai clické
waituntil {mapclick or !(visiblemap)};
_pos = clickpos;
_height = 1000;

player setPos [_pos select 0, _pos select 1,_height];
hint '';


// Attendre que le joueur atterisse pour lui redonner son sac
waitUntil {(getposATL player select 2) < 20};
removeBackpack player;
player addbackpack _b;
{
    player additemtobackpack _x;
} foreach _bi;
			</code></pre>
			</details>

			<br>Votre dossier de mission doit contenir les éléments suivants:

			<ul>
				<li>mission.sqm</li>
				<li>halo.sqf</li>
			</ul>

			Tadaa ! Si vous ne vous êtes pas trompé, vous aurez la possibilité de lancer le saut HALO depuis l'objet ;)

     	@endif
    </div>
  </div>
</body>
</html>
