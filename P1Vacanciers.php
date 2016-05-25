<?php
session_start();
include "head.php";  
?>
<body>
		<center><h1>Partie 1 - Vacanciers</h1></center>
			<form  method="POST" action="test.php" class="register">
				<fieldset class="row2">
	            <legend>Informations résidence</legend>
	                <p>
						<label>Vous habitez :<br/><br/></label><select name="ville">
								<option value="Europe">En Europe ou au-delà</option>
								<option value="FranceHors">en France hors ALPC</option>
								<option value="ALPC">région ALPC hors Gironde et Landes </option>
								<option value="GirondeLandes">Gironde ou des Landes</option>
						</select>
					</p>
					<p>
						<label>Depuis combien de temps venez-vous en vacances aux abords de ce lac ?<br/><br/></label><select name="foisvac">
								<option type="radio" value="1fois">1ère fois</option>
								<option type="radio" value="5ans">Moins de 5 ans</option>
								<option type="radio" value="510ans">De 5 à 10 ans</option>
								<option type="radio" value="10ans">Plus de 10 ans</option>
						</select>
					</p>
					<p>
						<label>A quelle fréquence venez-vous en vacances ici ?<br/><br/></label><select name="freqvac">
								<option type="checkbox" value="plusparan">Plusieurs fois par an
								<option type="checkbox" value="touslesans">Tous les ans
								<option type="checkbox" value="tousles2ans">Tous les 2 ans
								<option type="checkbox" value="tousles5ans">Tous les 5 ans
								<option type="checkbox" value="moinssouvent">Moins souvent
						</select>
					</p>
					<p>
						<label>Quelle est la durée de votre séjour ? (en jours)</label>								
							<input type="text" name="dureesejour" maxlength="4"//>
					</p>
					<p class="sous">
						<label>Si la période est > 1j : Comment êtes-vous hébergé ?</label><select name="hebergement">
								<option type="checkbox" value="locendur">Location en dur
								<option type="checkbox" value="familleouami">Chez la famille ou des amis
								<option type="checkbox" value="hotel">Hôtel
								<option type="checkbox" value="camping">Camping
								<option type="checkbox" value="ressecond">Résidence secondaire
					</p>
							
            </fieldset>
			
			<div><center><br><br><a href="TroncCommun.php" type="submit" class="button2">Valider et poursuivre</a></center><br/><br/><br/><br/></div>
			

	        </form>
    	</body>
