<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
        <title>Formulaire participant CLAQH</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="defaut.css"/>
    </head>

   <body>

   	<center><h1>Conclusion - Résidents</h1></center>
		<form  method="POST" action="test.php" class="register">
			<fieldset class="row2">
				<legend>Qualité de l'eau et des produits</legend>
				<p>
                    <label>Est-ce que la notion de qualité de l'eau des lacs influence votre niveau de qualité de vie/environnement ?</label>
                    <input name="radio1" type="radio" value="radio"/> 
					<label class="mot1">Oui</label>
                    <input name="radio1" type="radio" value="radio"/>
					<label class="mot1">Non</label>
                </p>
					<p class="sous">
						<label>Si oui : Comment ?</label>
						<textarea name="textarea" rows="5" cols="50"></textarea>
					</p>
				<p>
					<label>Selon vous est-ce que :</label><br/><br/>
				</p>
					<p class="sous">
						<label>La qualité de l'eau influence la possibilité de se baigner ?</label>
						<input name="radio2" type="radio" value="radio"/> 
						<label class="mot1">Oui</label>
						<input name="radio2" type="radio" value="radio"/>
						<label class="mot1">Non</label>
						<input name="radio2" type="radio" value="radio"/>
						<label class="mot2">Ne sait pas</label>
					</p>
					<p class="sous">
						<label>La qualité des produits issus des lacs influence la possibilité de se baigner ?</label>
						<input name="radio3" type="radio" value="radio"/> 
						<label class="mot1">Oui</label>
						<input name="radio3" type="radio" value="radio"/>
						<label class="mot1">Non</label>
						<input name="radio3" type="radio" value="radio"/>
						<label class="mot2">Ne sait pas</label>
					</p>
					<p class="sous">
						<label>La qualité des produits issus des lacs dépend de la qualité de l'eau ?</label>
						<input name="radio4" type="radio" value="radio"/> 
						<label class="mot1">Oui</label>
						<input name="radio4" type="radio" value="radio"/>
						<label class="mot1">Non</label>
						<input name="radio4" type="radio" value="radio"/>
						<label class="mot2">Ne sait pas</label>
					</p>
					<p class="sous">
						<label>Il y a un lien entre la qualité de l'eau et les autorisations de pêche ?</label>
						<input name="radio5" type="radio" value="radio"/> 
						<label class="mot1">Oui</label>
						<input name="radio5" type="radio" value="radio"/>
						<label class="mot1">Non</label>
						<input name="radio5" type="radio" value="radio"/>
						<label class="mot2">Ne sait pas</label>
					</p>
					<p class="sous">
						<label>Il y a un lien entre la qualité des produits issus des lacs et les autorisations de pêche ?</label>
						<input name="radio6" type="radio" value="radio"/> 
						<label class="mot1">Oui</label>
						<input name="radio6" type="radio" value="radio"/>
						<label class="mot1">Non</label>
						<input name="radio6" type="radio" value="radio"/>
						<label class="mot2">Ne sait pas</label>
					</p>
	 		</fieldset>
			<div><center><br><br><a href="Profil2.php" type="submit" class="button2">Valider et poursuivre</a></center><br/><br/><br/><br/></div> 	
        </form>
   </body>
</html>
