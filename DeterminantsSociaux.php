<?php
include "head.php";  
?>

   <body>

   	<center><h1>Déterminants Sociaux</h1></center>
		<form  method="POST" action="test.php" class="register">
			<fieldset class="row2">
				<legend>Informations</legend>
				<p>
					<label>Quelle est votre année de naissance ?</label>
					<input type="text" maxlength="4"//>
                </p>
				<p>
				 <label>Genre : </label>
                    <input name="radio2" type="radio" value="radio"/> 
					<label class="mot2">Homme</label>
                    <input name="radio2" type="radio" value="radio"/>
					<label class="mot1">Femme</label>
				</p>
				<p>
					<label>Quelle est votre activité professionnelle ?</label>
					<input type="text"//>
                </p>
				<p>
					<label>Quelle est votre lieu d'habitation ?</label>
                </p>
	 		</fieldset>
			<div><center><br><br><a href="Profil2.php" type="submit" class="button2">Valider et poursuivre</a></center><br/><br/><br/><br/></div> 	
        </form>
   </body>
</html>
