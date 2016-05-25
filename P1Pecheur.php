<?php
session_start();
include "head.php";  
?>

<body>
		<center><h1>Partie 1 - Pécheur</h1></center>
			<form  method="POST" action="test.php" class="register">
				<fieldset class="row2">
	            <legend>Informations type de pêche </legend>
	                <p>
						<label>De quel type de carte de pêche disposez-vous ?</label><select name="cartepeche">
								<option value="PersonneMajeure">Personne Majeure</option>
								<option value="DecouverteFemme">Découverte Femme</option>
								<option value="PersonneMineure">Personne Mineure</option>
								<option value="moinsde12ans">-12ans</option>
								<option value="Hebdomadaire">Hebdomadaire</option>
								<option value="Journaliere">Journalière</option>
							</select>
					</p>
					<p>
						<label>La pêche est-elle votre activité professionnelle ?</label>
						<input name="radio1" type="radio" value="radio"/> 
						<label class="mot1">Oui</label>
						<input name="radio1" type="radio" value="radio"/>
						<label class="mot1">Non</label>
					</p>
					<p>	
						<label>Dans quels lacs pêchez-vous ?</label><br/><br/>
							<input name="checkb1" type="checkbox" value="hourtin"/>
							<label class="check">Hourtin</label>
							<input name="checkb1" type="checkbox" value="lacanau"/>
							<label class="check">Lacanau</label><br/>
							<input name="checkb1" type="checkbox" value="sanguinet"/>
							<label class="check">Sanguinet</label>
							<input name="checkb1" type="checkbox" value="biscarosse"/>
							<label class="check">Biscarosse<br/><br/></label>
					</p>
					<p>
						<label>A quelle fréquence pêchez-vous ?</label><select name="cartepeche">
								<option value="touteslessemaines">Toutes les semaines</option>
								<option value="touslesmois">Tous les mois</option>
								<option value="10foisparan">10 fois par an</option>
						</select>
					</p>
					<p>	
						<label>Quelles espèces avez-vous l’habitude de pêcher ? </label><br/><br/>
							<input type="checkbox" name="checkb2" value="brochet">
							<label class="checkx3">Brochet</label>
							<input type="checkbox" name="checkb2" value="sandre">
							<label class="checkx3">Sandre</label>
							<input type="checkbox" name="checkb2" value="perche">
							<label class="checkx3">Perche</label><br/>
							<input type="checkbox" name="checkb2" value="perchesoleil">
							<label class="checkx3">Perche soleil</label>
 							<input type="checkbox" name="checkb2" value="silure">
							<label class="checkx3">Silure</label>
 							<input type="checkbox" name="checkb2" value="bremecommune">
							<label class="checkx3">Brème commune</label><br/>
 							<input type="checkbox" name="checkb2" value="bremebordeliere">
							<label class="checkx3">Brème bordelière</label>
 							<input type="checkbox" name="checkb2" value="gardon">
							<label class="checkx3">Gardon</label>
 							<input type="checkbox" name="checkb2" value="carpes">
							<label class="checkx3">Carpe</label><br/>
	 						<input type="checkbox" name="checkb2" value="grémille">
							<label class="checkx3">Grémille</label>
 							<input type="checkbox" name="checkb2" value="poissonchat">
							<label class="checkx3">Poisson chat</label>
 							<input type="checkbox" name="checkb2" value="ablette">
							<label class="checkx3">Ablette</label><br/>
 							<input type="checkbox" name="checkb2" value="goujon">
							<label class="checkx3">Goujon</label>
 							<input type="checkbox" name="checkb2" value="rotengle">
							<label class="checkx3">Rotengle</label>
 							<input type="checkbox" name="checkb2" value="ecrevisse">
							<label class="checkx3">Ecrevisse<br/><br/></label>
					</p>
					<p>	
						<label>Quel genre de pêche pratiquez-vous ?</label><br/><br/>
							<input name="checkb3" type="checkbox" value="coup"/>
							<label class="check">Pêche au coup</label>
							<input name="checkb3" type="checkbox" value="vif"/>
							<label class="check">Pêche au vif</label><br/>
							<input name="checkb3" type="checkbox" value="mortmanie"/>
							<label class="check">Pêche au mort manié</label>
							<input name="checkb3" type="checkbox" value="lancer"/>
							<label class="check">Pêche au lancer<br/><br/></label>
					</p>
					<p>	
						<label>Pêchez-vous, depuis :</label><br/><br/>
							<input name="checkb4" type="checkbox" value="berges"/>
							<label class="check">Les berges</label>
							<input name="checkb4" type="checkbox" value="bateau"/>
							<label class="check">A bord d’un bateau<br/><br/></label><br/>
					</p>
					<p>
						<label>Consommez-vous le poisson que vous pêchez ?</label>
						<input name="radio2" type="radio" value="oui"/> 
						<label class="mot1">Oui</label>
						<input name="radio2" type="radio" value="non"/>
						<label class="mot1">Non</label>
					</p>
					<p class="sous">
						<label>Si oui, à quelle fréquence ?</label><select name="freqconsom">
								<option value="touslesjours">Tous les jours</option>
								<option value="touteslessemaines">Toutes les semaines</option>
								<option value="tousles15j">Tous les 15 jours</option>
								<option value="touslesmois">Tous les mois</option>
								<option value="touslestrimestres">Tous les trimestres</option>
								<option value="moinsunefoistrimestres)">Moins d’une fois par trimestre</option>

						</select>
					</p>
            </fieldset>
			
			<php
			if($_SESSION['profil'] == "ResPrincipalePecheur")
			{
				?><div><center><br><br><a href="P1Residents.php" type="submit" class="button2">Valider et poursuivre</a></center><br/><br/><br/><br/></div><php
			}
			elseif($_SESSION['profil'] == "Res2dairePecheur")
			{
				?><div><center><br><br><a href="P1Residents.php" type="submit" class="button2">Valider et poursuivre</a></center><br/><br/><br/><br/></div><php
			}
			elseif($_SESSION['profil'] == "VacancierPecheur")
			{
				?><div><center><br><br><a href="P1Vacanciers.php" type="submit" class="button2">Valider et poursuivre</a></center><br/><br/><br/><br/></div><php
			}
			?>
	        </form>
    	</body>
