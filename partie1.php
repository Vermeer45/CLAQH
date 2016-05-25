<?php
 include "head.php";  

	 if($_SESSION['profil'] == "ResPrincipalePecheur")
	 {
	 	?><body>
		<center><h1>Partie1 Résident</h1></center>
			<form  method="POST" action="test.php" class="register">
				<fieldset class="row1">
		 		  	<legend>Partie1 Résident</ilegend>
		                <center><p>
	                    	<table border=0>
	                    		<tr><td>Vous habitez : </td><td><select name="ville">
										<option value="PersonneMajeure">En Europe ou au-delà</option>
						                <option value="DecouverteFemme">en France hors ALPC</option>
						                <option value="PersonneMineure">région ALPC hors Gironde et Landes </option>
						                <option value="moinsde12ans">Gironde ou des Landes</option>
										</select></td></tr>

								<tr><td>Depuis combien de temps venez-vous en vacances aux abords de ce lac ? : </td><td>
	  									<option type="radio" value="female">1ère fois</option>
	 									<option type="radio" value="other">moins de 5 ans</option>
	 									<option type="radio" value="female">de 5 à 10 ans</option>
	 									<option type="radio" value="female">plus de 10 ans</option>
	 									</select></td></tr>

								<tr><td>A quelle fréquence venez-vous en vacances ici ?  </td><td>
									<table><tr>
										<option type="checkbox" value="Hourtin">plusieurs fois par an</td>
	 								    <option type="checkbox" value="Lacanau">tous les ans</td>
	 									<option type="checkbox" value="Sanguinet">tous les 2 ans</td>
	 									<option type="checkbox" value="Biscarosse">tous les 5 ans</td>
	 									<option type="checkbox" value="Biscarosse">moins souvent</td>
	 								</tr></table><br>

	 							<tr><td>Quelle est la durée de votre séjour ? (en jours)  </td><td>								
										<input type="text" name="dureesejour" maxlength="4"//>

						        
						        <tr><td> Si 3>1j : Comment êtes-vous hébergé ?</td><td>
						        	<table>
										<tr>
											<td><input type="checkbox" name="gender" value="brochet">location en dur</td>
	 								    	<td><input type="checkbox" name="gender" value="sandre">chez la famille ou des amis</td>
	 										<td><input type="checkbox" name="gender" value="perche">hôtel</td><br>
	 										<td><input type="checkbox" name="gender" value="perche">camping</td><br>
	 										<td><input type="checkbox" name="gender" value="perche">résidence secondaire</td><br>
	 										<td><input type="checkbox" name="gender" value="perche">camping</td><br>
	 										<td><input type="checkbox" name="gender" value="perche">Autre</td><br>
	 										<td><input type="text" name="autreherberg" maxlength="4"></td><br>
	 									</tr>
	 								
	 								</table>

	                	</p></center>
	            <legend>Partie1 pêcheur</legend>
	                <center><p>
                    	<table border=0>
                    		<tr><td>De quel type de carte de pêche disposez-vous ?  </td><td><select name="cartepeche">
											<option value="PersonneMajeure">Personne Majeure</option>
					                        <option value="DecouverteFemme">Découverte Femme</option>
					                        <option value="PersonneMineure">Personne Mineure</option>
					                        <option value="moinsde12ans">-12ans</option>
					                        <option value="Hebdomadaire">Hebdomadaire</option>
					                        <option value="Journaliere">Journalière</option>
											</select></td></tr>

							<tr><td>La pêche est-elle votre activité professionnelle ? : </td><td>
  									<td><input type="radio" name="gender" value="female"> Oui</td><br>
 									<td><input type="radio" name="gender" value="other"> Non</td><br><br>

							<tr><td>Dans quels lacs pêchez-vous ?  </td><td>
								<table><tr>
									<td><input type="checkbox" name="gender" value="Hourtin">Hourtin</td>
 								    <td><input type="checkbox" name="gender" value="Lacanau">Lacanau</td>
 									<td><input type="checkbox" name="gender" value="Sanguinet">Sanguinet</td>
 									<td><input type="checkbox" name="gender" value="Biscarosse">Biscarosse</td>
 								</tr></table><br>

 							<tr><td>A quelle fréquence pêchez-vous ?  </td><td><select name="freqpeche">
											<option value="touteslessemaines">touteslessemaines</option>
					                        <option value="toutlesmois">Tous les mois</option>
					                        <option value="10foisparans">10 fois par an</option>
					        
					        <tr><td>Quelles espèces avez-vous l’habitude de pêcher ?  </td><td>
					        	<table>
									<tr>
										<td><input type="checkbox" name="gender" value="brochet">brochet</td>
 								    	<td><input type="checkbox" name="gender" value="sandre">sandre</td>
 										<td><input type="checkbox" name="gender" value="perche">perche</td><br>
 									</tr>
 									<tr>
 										<td><input type="checkbox" name="gender" value="perchesoleil">perche soleil</td>
 										<td><input type="checkbox" name="gender" value="silure">silure</td>
 										<td><input type="checkbox" name="gender" value="bremeCommune">brème commune</td><br>
 									</tr>
 									<tr>
 										<td><input type="checkbox" name="gender" value="bremebordeliere">brème bordelière</td>
 										<td><input type="checkbox" name="gender" value="gardon">gardon</td>
 										<td><input type="checkbox" name="gender" value="carpes">carpes</td><br>
 									</tr>
 									<tr>
	 									<td><input type="checkbox" name="gender" value="grémille">grémille</td>
 										<td><input type="checkbox" name="gender" value="poissonchat">poisson chat</td>
 										<td><input type="checkbox" name="gender" value="ablette">ablette</td><br>
 									</tr>
 									<tr>
 										<td><input type="checkbox" name="gender" value="goujon">goujon</td>
 										<td><input type="checkbox" name="gender" value="rotengle">rotengle</td>
 										<td><input type="checkbox" name="gender" value="ecrevisse">écrevisse</td><br><br><br>
 									</tr>
 								</table>

 							<tr><td>Quel genre de pêche pratiquez-vous ? </td><td>
 								<table>
 									<tr>	
										<td><input type="checkbox" name="gender" value="pecheaucoup">pêche au coup</td>
 								    	<td><input type="checkbox" name="gender" value="auvif">au vif</td>
 										<td><input type="checkbox" name="gender" value="aumortmanie">au mort manié</td>
 										<td><input type="checkbox" name="gender" value="au lancer">au lancer<br>
 									</tr>
 								</table><br>

 							<tr><td>Pêchez-vous, depuis :  </td><td>
								<table>
									<tr>
										<td><input type="checkbox" name="gender" value="berges">Les berges ?</td>
 								    	<td><input type="checkbox" name="gender" value="bateau">à bord d’un bateau ?</td>
 									</tr>
 								</table><br>

 							<tr><td>Consommez-vous le poisson que vous pêchez ?: </td><td>
  									<input type="radio" name="gender" value="female"> Oui<br>
 									<input type="radio" name="gender" value="other"> Non<br><br>

 							<tr><td>A quelle fréquence pêchez-vous ?  </td><td><select name="freqpeche">
											<option value="touslesjours">tous les jours</option>
					                        <option value="touteslessemaines">toutes les semaines</option>
					                        <option value="tousles15j">tous les 15j</option>
					                        <option value="touslesmois">tous les mois</option>
					                        <option value="touslestrimestres">tous les trimestres</option>
					                        <option value="moinsunefoistrimestres)">moins d’une fois par trimestres</option>

							</table></br>
							
 							
                	</p></center>
            </fieldset>
	            </fieldset>
				<p><br/></p>
				<div class="button">
					<center><button type="submit">Valider</button></center>
				</div>	


	        </form>
    	</body><?php
	 }
	 if ($_SESSION['profil'] == "Res2dairePecheur")
	 {
	 	echo "Res2dairePecheur";
	 }
	 if ($_SESSION['profil'] == "VacancierPecheur")
	 {
	 	echo "VacancierPecheur";
	 }
	 if ($_SESSION['profil'] = "ResPrincipaleNonpecheur")
	 {
	 	echo "ResPrincipaleNonpecheur";
	 }
	 if ($_SESSION['profil'] = "Res2daireNonpecheur")
	 {
	 	echo "Res2daireNonpecheur";
	 }
	 if ($_SESSION['profil'] = "VacancierNonPecheur")
	 {

	 }
