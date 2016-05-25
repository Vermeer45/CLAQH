<?php
session_start();
include "head.php";  
?>
<body>
		<center><h1>Partie 1 - Résidents</h1></center>
			<form  method="POST" action="test.php" class="register">
				<fieldset class="row2">
	            <legend>Informations résidence</legend>
	                <p>
						<label>Depuis combien de temps habitez-vous dans cette commune ?</label><select name="tempscommune">
								<option value="5ans">Moins de 5 ans</option>
								<option value="515ans">De 5 à 15 ans</option>
								<option value="15ans">Plus de 15 ans</option>
							</select>
					</p>
            </fieldset>
				
			<php
			if($_SESSION['profil'] == "ResPrincipalePecheur")
			{
				?><div><center><br><br><a href="TroncCommun.php" type="submit" class="button2">Valider et poursuivre</a></center><br/><br/><br/><br/></div><php
			}
			elseif($_SESSION['profil'] == "Res2dairePecheur")
			{
				?><div><center><br><br><a href="P1Vacanciers.php" type="submit" class="button2">Valider et poursuivre</a></center><br/><br/><br/><br/></div><php
			}
			elseif($_SESSION['profil'] == "ResPrincipaleNonPecheur")
			{
				?><div><center><br><br><a href="TroncCommun.php" type="submit" class="button2">Valider et poursuivre</a></center><br/><br/><br/><br/></div><php
			}
			elseif($_SESSION['profil'] == "Res2daireNonPecheur")
			{
				?><div><center><br><br><a href="P1Vacanciers.php" type="submit" class="button2">Valider et poursuivre</a></center><br/><br/><br/><br/></div><php
			}
			?>

	        </form>
    	</body>
