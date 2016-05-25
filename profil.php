<?php
session_start(); 
include "head.php";

?>

   <body>
   	<?php
   	require("connexionbase.php");

   	$lacs = $_POST['lacs'];
   	$expe = $_POST['expe'];
   	$lieu = $_POST['commune'];
	$heure = date("H:i");

   	$requete ="INSERT INTO introduction VALUES (IDparticipant, '$lacs', '$lieu', NOW(), '$heure', '$expe', NULL, NULL, NULL, NULL, NULL, NULL)";
	mysql_query($requete,$CONNEXION);


	$requete2 = "SELECT MAX(IDparticipant) FROM introduction";
	$resultat = mysql_query($requete2,$CONNEXION);
	$tuple1=mysql_fetch_array($resultat);

	$idparticipant =$tuple1['MAX(IDparticipant)'];

	$_SESSION['idparticipant'] = $idparticipant;
	echo $_SESSION['idparticipant'];

	?>

   	<center><h1>Profil</h1></center>
		<form  method="POST" action="traiteProfil.php" class="register">
			<fieldset class="row1">
	 		  	<legend>Profil du praticipant</legend>
	                <center><p>
                    <label>Vous ête ici car : 
                    </label>
                    	<table border=0>
                    	<?php
						if ($lacs == "Lacanau")
						{
							?><tr><td>Vous avez votre résidence principale ici : </td><td><select name="residenceprincipale">$
											<option value="1"></option>
											<option value="Lacanau">Lacanau</option>
											<option value="Leporge">Le porge</option>
											<option value="Saumos">Saumos</option>
											<option value="SaintHelene">Saint-Helene</option>
											<option value="Letemple">Le temple</option>
											<option value="Brach">Brach</option>
											<option value="Carcan">Carcan</option>
											<option value="Carcan">Autre</option>
						
							<tr><td>Vous avez votre résidence secondaire ici :  </td><td><select name="residencesecondaire">
											<option value="1"></option>
											<option value="Lacanau">Lacanau</option>
											<option value="Leporge">Le porge</option>
											<option value="Saumos">Saumos</option>
											<option value="SaintHelene">Saint-Helene</option>
											<option value="Letemple">Le temple</option>
											<option value="Brach">Brach</option>
											<option value="Carcan">Carcan</option>
											<option value="Carcan">Autre</option>
											</select></td></tr><?php
						}
						elseif($lacs == "Biscarosse")
						{
							?><tr><td>Vous avez votre résidence principale ici : </td><td><select name="residenceprincipale">
											<option value="1"></option>
											<option value="Biscarosse">Biscarosse</option>
											<option value="Parentisenbore">Parentis-en-bore</option>
											<option value="Gaste">Gaste</option>
											<option value="Ychoux">Ychoux</option>
											<option value="SaintEulalieEnBorn">Saint-Eulalie-En-Born</option>
											<option value="Potenxlesforges">Potenx-les-forges</option>
											<option value="Lue">Lue</option>
											<option value="Carcan">Autre</option>
						
							<tr><td>Vous avez votre résidence secondaire ici :  </td><td><select name="residencesecondaire">
											<option value="1"></option>
											<option value="Biscarosse">Biscarosse</option>
											<option value="Parentisenbore">Parentis-en-bore</option>
											<option value="Gaste">Gaste</option>
											<option value="Ychoux">Ychoux</option>
											<option value="SaintEulalieEnBorn">Saint-Eulalie-En-Born</option>
											<option value="Potenxlesforges">Potenx-les-forges</option>
											<option value="Lue">Lue</option>
											<option value="Carcan">Autre</option>
											</select></td></tr><?php
						}

						elseif($lacs == "Hourtin")
						{
							?><tr><td>Vous avez votre résidence principale ici : </td><td><select name="residenceprincipale">
											<option value="1"></option>
											<option value="Hourtin">Hourtin</option>
											<option value="Brach">Brach</option>
											<option value="Carcan">Carcan</option>
											<option value="Naujacsurmer">Le temple</option>
											<option value="SaintLaurentMédoc">Saint-Laurent-Médoc</option>
											<option value="SaintGermaind’esteuil">Saint-Germain-d’esteuil</option>
											<option value="LesparreMédoc">Lesparre Médoc</option>
											<option value="Vendaysmontalivet">Vendays-montalivet</option>
											<option value="Carcan">Autre</option>
						
							<tr><td>Vous avez votre résidence secondaire ici :  </td><td><select name="residencesecondaire">
											<option value="1"></option>
											<option value="Hourtin">Hourtin</option>
											<option value="Brach">Brach</option>
											<option value="Carcan">Carcan</option>
											<option value="Naujacsurmer">Le temple</option>
											<option value="SaintLaurentMédoc">Saint-Laurent-Médoc</option>
											<option value="SaintGermaind’esteuil">Saint-Germain-d’esteuil</option>
											<option value="LesparreMédoc">Lesparre Médoc</option>
											<option value="Vendaysmontalivet">Vendays-montalivet</option>
											<option value="Carcan">Autre</option>
											</select></td></tr><?php
						}


						elseif($lacs == "Sanguinet")
						{
							?><tr><td>Vous avez votre résidence principale ici : </td><td><select name="residenceprincipale">
											<option value="1"></option>
											<option value="Sanguinet">Sanguinet</option>
											<option value="Latestedepuch">La teste-de-puch</option>
											<option value="Gujanmestras">Gujan-mestras</option>
											<option value="Leteich">Le teich</option>
											<option value="Mios">Mios</option>
											<option value="Salle">Salle</option>
											<option value="Lugos">Lugos</option>
											<option value="Biscarosse">Biscarosse</option>
											<option value="Carcan">Autre</option>
						
							<tr><td>Vous avez votre résidence secondaire ici :  </td><td><select name="residencesecondaire">
											<option value="1"></option>
											<option value="Sanguinet">Sanguinet</option>
											<option value="Latestedepuch">La teste-de-puch</option>
											<option value="Gujanmestras">Gujan-mestras</option>
											<option value="Leteich">Le teich</option>
											<option value="Mios">Mios</option>
											<option value="Salle">Salle</option>
											<option value="Lugos">Lugos</option>
											<option value="Biscarosse">Biscarosse</option>
											<option value="Carcan">Autre</option>
											</select></td></tr><?php
						}

						?>
							<tr><td>Vous avez un logement de courte durée pour les vacances ou pour la journée : 
							</td><td><br>
  									<input type="radio" name="logvac" value="oui"> Oui<br>
 									<input type="radio" name="logvac" value="non"> Non</td></tr>
							<tr><td>Autre : </td><td><input type="text" name="autrelogement"></td></tr><br>
							</table></br>
							<label>Pêchez-vous ? : </label>
  									<input type="radio" name="peche" value="oui"> Oui<br>
 									<input type="radio" name="peche" value="non"> Non<br><br>
 							
                	</p></center>
            </fieldset>
			<p><br/></p>
			<div class="button">
				<center><button type="submit">Valider</button></center>
			</div>	
        </form>
   </body>
</html>
