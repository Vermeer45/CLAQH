<?php
include "head.php";  
?>
   <body>

   	<center><h1>Conclusion - Pécheurs</h1></center>
		<form  method="POST" action="test.php" class="register">
			<fieldset class="row2">
				<legend>Qualité de l'eau et des produits</legend>
				<p>
                    <label>Est-ce que la notion de qualité de l'eau influence votre pratique de pêche ?</label>
                    <input name="radio1" type="radio" value="radio"/> 
					<label class="mot1">Oui</label>
                    <input name="radio1" type="radio" value="radio"/>
					<label class="mot1">Non</label>
                </p>
				<p>
                    <label>Est-ce que la notion de qualité des produits issus des lacs influence votre pratique de pêche ?</label>
                    <input name="radio2" type="radio" value="radio"/> 
					<label class="mot1">Oui</label>
                    <input name="radio2" type="radio" value="radio"/>
					<label class="mot1">Non</label>
                </p>
				<p>
					<label>Selon vous est-ce que :</label><br/><br/>
				</p>
					<p class="sous">
						<label>La qualité des produits issus des lacs dépend de la qualité de l'eau ?</label>
						<input name="radio3" type="radio" value="radio"/> 
						<label class="mot1">Oui</label>
						<input name="radio3" type="radio" value="radio"/>
						<label class="mot1">Non</label>
						<input name="radio3" type="radio" value="radio"/>
						<label class="mot2">Ne sait pas</label>
					</p>
					<p class="sous">
						<label>Il y a un lien entre la qualité de l'eau et les autorisations de pêche ?</label>
						<input name="radio4" type="radio" value="radio"/> 
						<label class="mot1">Oui</label>
						<input name="radio4" type="radio" value="radio"/>
						<label class="mot1">Non</label>
						<input name="radio4" type="radio" value="radio"/>
						<label class="mot2">Ne sait pas</label>
					</p>
					<p class="sous">
						<label>Il y a un lien entre la qualité des produits issus des lacs et les autorisations de pêche ?</label>
						<input name="radio4" type="radio" value="radio"/> 
						<label class="mot1">Oui</label>
						<input name="radio4" type="radio" value="radio"/>
						<label class="mot1">Non</label>
						<input name="radio4" type="radio" value="radio"/>
						<label class="mot2">Ne sait pas</label>
					</p>
	 		</fieldset>
			
			<php
			if($_SESSION['profil'] == "ResPrincipalePecheur")
			{
				?><div><center><br><br><a href="ConclResidents.php" type="submit" class="button2">Valider et poursuivre</a></center><br/><br/><br/><br/></div><php
			}
			elseif($_SESSION['profil'] == "Res2dairePecheur")
			{
				?><div><center><br><br><a href="ConclResidents.php" type="submit" class="button2">Valider et poursuivre</a></center><br/><br/><br/><br/></div><php
			}
			elseif($_SESSION['profil'] == "VacancierPecheur")
			{
				?><div><center><br><br><a href="ConclVacanciers.php" type="submit" class="button2">Valider et poursuivre</a></center><br/><br/><br/><br/></div><php
			}
			?>
			
		</form>
   </body>
</html>
