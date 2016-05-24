<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
        <title>Formulaire participant CLAQH</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="defaut.css"/>
    </head>

   <body>

   	<center><h1>Tronc commun</h1></center>
		<form  method="POST" action="test.php" class="register">
			<fieldset class="row2">
	 		  	<legend>Habitudes de vie</legend>
				<p>
                    <label>Vous baignez-vous dans ce lac ?</label>
                    <input name="radio1" type="radio" value="radio"/> 
					<label class="mot1">Oui</label>
                    <input name="radio1" type="radio" value="radio"/>
					<label class="mot1">Non</label>
                </p>
				<p>
                    <label>Si oui, à quelle fréquence ?</label><select name="frequencebaignade">
								<option value="">Plusieurs fois / jour</option>
								<option value="">Tous les jours</option>
								<option value="">Toutes les semaines</option>
								<option value="">Tous les mois</option>
								<option value="">Moins souvent</option>
							</select>
                </p><br/><br/>
				<p>
                    <label>Pratiquez-vous des activités nautiques sur ce lac ?</label>
                    <input name="radio2" type="radio" value="radio"/> 
					<label class="mot1">Oui</label>
                    <input name="radio2" type="radio" value="radio"/>
					<label class="mot1">Non</label>
                </p>
				<p>
                    <label>Si oui, lesquelles ?</label><br/>
					<textarea name="textarea" rows="5" cols="50"></textarea>
                </p><br/><br/>
				<p>
                    <label>Pratiquez-vous d'autres activités sur ce lac ?</label>
                    <input name="radio3" type="radio" value="radio"/> 
					<label class="mot1">Oui</label>
                    <input name="radio3" type="radio" value="radio"/>
					<label class="mot1">Non</label>
                </p>
				<p>
                    <label>Si oui, lesquelles ?</label><br/>
					<textarea name="textarea2" rows="5" cols="50"></textarea>
                </p>
            </fieldset>
			<fieldset class="row2">
	 		  	<legend>Consommation des produits issus du lac</legend>
				<p>
                    <label>Savez-vous s'il est possible de consommer des produis provenant de ce lac comme des poissons ou des écrevisses ?</label>
                    <input name="radio4" type="radio" value="radio"/> 
					<label class="mot1">Oui</label>
                    <input name="radio4" type="radio" value="radio"/>
					<label class="mot1">Non</label>
					<input name="radio4" type="radio" value="radio"/>
					<label class="mot2">Ne sait pas</label>
                </p>
				<p>
                    <label>Savez-vous s'il y a des interdictions particulières concernant la consommation de certains d'entre eux ?</label>
                    <input name="radio5" type="radio" value="radio"/> 
					<label class="mot1">Oui</label>
                    <input name="radio5" type="radio" value="radio"/>
					<label class="mot1">Non</label>
					<input name="radio5" type="radio" value="radio"/>
					<label class="mot2">Ne sait pas</label>
                </p>
				<p>
                    <label>Si oui, lesquelles ?</label><br/>
					<textarea name="textarea3" rows="5" cols="50"></textarea>
                </p>
				<p>
					<label>Consommez-vous des produits issus de ce lac ?</label>
                    <input name="radio6" type="radio" value="radio"/> 
					<label class="mot1">Oui</label>
                    <input name="radio6" type="radio" value="radio"/>
					<label class="mot1">Non</label>
					<input name="radio6" type="radio" value="radio"/>
					<label class="mot2">Ne sait pas</label>
                </p>
				<p>
                    <label>Si oui, lesquels ?</label><br/>
					<textarea name="textarea4" rows="5" cols="50"></textarea>
                </p>
				<p>
                    <label>Et à quelle fréquence ?</label>
						<select name="frequenceconsomprod">
							<option value="">Tous les jours</option>
							<option value="">Toutes les semaines</option>
							<option value="">Tous les 15 jours</option>
							<option value="">Tous les mois</option>
							<option value="">Tous les trimestres</option>
							<option value="">Moins d'une fois / trimestre</option>
						</select>
                </p><br/><br/>
            </fieldset>
			<fieldset class="row2">
				<legend>Connaissance de la qualité de l’eau des lacs et des produits issus des lacs</legend>
				<p>
					<label>Vous êtes-vous déjà renseigné sur la qualité de l’eau de ce lac ?</label>
					<input name="radio7" type="radio" value="radio"/> 
					<label class="mot1">Oui</label>
                    <input name="radio7" type="radio" value="radio"/>
					<label class="mot1">Non</label>
				</p>
					<p class="sous">
						<label>Si oui :</label><br>
						<label>Comment / Auprès de quel organisme ?</label>
						<textarea name="textarea5" rows="5" cols="50"></textarea>
					</p>
					<p class="sous">
						<label>Pourquoi ?</label>
							<select name="pourquoirecherche">
								<option value="">Par curiosité</option>
								<option value="">Elément déclencheur</option>
								<option value="">Bouche à oreille</option>
							</select>
					</p>
					<p class="sous">
						<label>Quel type d'informations avez-vous obtenues ?</label>
						<textarea name="textarea6" rows="5" cols="50"></textarea>
					</p>
					<p class="sous">
						<label>Est-ce que cela a influencé votre perception des lacs / vos activités autour / sur les lacs ?</label>
						<input name="radio8" type="radio" value="radio"/> 
						<label class="mot1">Oui</label>
						<input name="radio8" type="radio" value="radio"/>
						<label class="mot1">Non</label>
					</p>
				<p>
					<label>Que pensez-vous de la qualité de l'eau de ce lac ?</label>
						<select name="qualiteeau">
							<option value="">Bonne</option>
							<option value="">Plutôt bonne</option>
							<option value="">Ni bonne ni mauvaise</option>
							<option value="">Plutôt mauvaise</option>
							<option value="">Mauvaise</option>
							<option value="">Ne sait pas</option>
						</select>
				</p>
				<p>
					<label>A quoi vous fiez vous pour juger de la qualité de l'eau de ce lac ?</label><br/><br/>
						<center><input name="checkb1" type="checkbox" value=""/>
						<label class="check">Visuel - Couleur - Clarté</label>
						<input name="checkb1" type="checkbox" value=""/>
						<label class="check">Propreté</label><br/>
						<input name="checkb1" type="checkbox" value=""/>
						<label class="check">Données dans les médias</label>
						<input name="checkb1" type="checkbox" value=""/>
						<label class="check">Présence ou non d'usine à proximité</label>
						<input name="checkb1" type="checkbox" value=""/>
						<label class="check">Odeur</label><br>
						<input name="checkb1" type="checkbox" value=""/>
						<label class="check">Vase</label>
						<input name="checkb1" type="checkbox" value=""/>
						<label class="check">Présence de plantes aquatiques et végétaux</label><br>
						<input name="checkb1" type="checkbox" value=""/>
						<label class="check">Le fait de voir des gens se baigner</label>
						<input name="checkb1" type="checkbox" value=""/>
						<label class="check">Affichage</label><br>
						<input name="checkb1" type="checkbox" value=""/>
						<label class="check">Bouche à oreille</label>
						<input name="checkb1" type="checkbox" value=""/>
						<label class="check">Autre :</label><br></center>
						<textarea name="textarea7" rows="2" cols="50"></textarea>
				</p>
				<p>
					<label>Vous êtes-vous déjà renseigné sur la qualité des produits issus de ce lac ?</label>
					<input name="radio9" type="radio" value="radio"/> 
					<label class="mot1">Oui</label>
                    <input name="radio9" type="radio" value="radio"/>
					<label class="mot1">Non</label>
				</p>
					<p class="sous">
						<label>Si oui :</label><br>
						<label>Comment / Auprès de quel organisme ?</label>
						<textarea name="textarea8" rows="5" cols="50"></textarea>
					</p>
					<p class="sous">
						<label>Pourquoi ?</label>
							<select name="pourquoirecherche2">
								<option value="">Par curiosité</option>
								<option value="">Elément déclencheur</option>
								<option value="">Bouche à oreille</option>
							</select>
					</p>
					<p class="sous">
						<label>Quel type d'informations avez-vous obtenues ?</label>
						<textarea name="textarea9" rows="5" cols="50"></textarea>
					</p>
					<p class="sous">
						<label>Est-ce que cela a influencé votre perception des lacs / vos activités autour / sur les lacs ?</label>
						<input name="radio10" type="radio" value="radio"/> 
						<label class="mot1">Oui</label>
						<input name="radio10" type="radio" value="radio"/>
						<label class="mot1">Non</label>
					</p>
				<p>
					<br><br><label>Que pensez-vous de la qualité des produits issus de ce lac ?</label>
						<select name="qualiteprod">
							<option value="">Bonne</option>
							<option value="">Plutôt bonne</option>
							<option value="">Ni bonne ni mauvaise</option>
							<option value="">Plutôt mauvaise</option>
							<option value="">Mauvaise</option>
							<option value="">Ne sait pas</option>
						</select>
				</p>
				<p>
					<label>A quoi vous fiez vous pour juger de la qualité de l'eau de ce lac ?</label><br/><br/>
						<center><input name="checkb2" type="checkbox" value=""/>
						<label class="check">Visuel - Couleur - Clarté</label>
						<input name="checkb2" type="checkbox" value=""/>
						<label class="check">Propreté</label><br/>
						<input name="checkb2" type="checkbox" value=""/>
						<label class="check">Données dans les médias</label>
						<input name="checkb2" type="checkbox" value=""/>
						<label class="check">Présence ou non d'usine à proximité</label>
						<input name="checkb2" type="checkbox" value=""/>
						<label class="check">Odeur</label><br>
						<input name="checkb2" type="checkbox" value=""/>
						<label class="check">Vase</label>
						<input name="checkb2" type="checkbox" value=""/>
						<label class="check">Présence de plantes aquatiques et végétaux</label><br>
						<input name="checkb2" type="checkbox" value=""/>
						<label class="check">Le fait de voir des gens se baigner</label>
						<input name="checkb2" type="checkbox" value=""/>
						<label class="check">Affichage</label><br>
						<input name="checkb2" type="checkbox" value=""/>
						<label class="check">Bouche à oreille</label>
						<input name="checkb2" type="checkbox" value=""/>
						<label class="check">Autre :</label></center>
						<textarea name="textarea10" rows="2" cols="50"></textarea><br/>
				</p>
			</fieldset>
			<div><center><br><br><a href="Profil2.php" type="submit" class="button2">Valider et poursuivre</a></center><br/><br/><br/><br/></div> 	
        </form>
   </body>
</html>
