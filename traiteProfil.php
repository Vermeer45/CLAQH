<?php
 include "head.php";  


 $resprinc = $_POST['residenceprincipale'];
 $ressecond = $_POST['residencesecondaire'];
 $logvac = $_POST['logvac'];
 $peche = $_POST['peche'];
	  

	if ($resprinc != " " && $peche == "oui")
	{
		$_SESSION['profil'] = "ResPrincipalePecheur";
	}
	if ($peche == "oui" && $ressecond != " ")
	{
		$_SESSION['profil'] = "Res2dairePecheur";	
	}
	if ($ressecond = " " && $resprinc = " " && $peche == "oui")
	{
		$_SESSION['profil'] = "VacancierPecheur";
	}
	if ($resprinc != " " && $peche == "non")
	{
		$_SESSION['profil'] = "ResPrincipaleNonpecheur";
	}
	if ($ressecond != " " && $peche == "non") 
	{
		$_SESSION['profil'] = "Res2daireNonpecheur";
	}
	if ($ressecond = " " && $resprinc = " " && $peche == "oui")
	{
		$_SESSION['profil'] = "VacancierNonPecheur";
	}

$profil = $_SESSION['profil'];
$id = $_SESSION['idparticipant'];

echo $profil;
echo $id;

$requete ="UPDATE introduction SET TypeProfil = $profil WHERE IDparticipant = $id";
mysql_query($requete,$CONNEXION);

?>
<div class="button">
				<center><button type="submit">Valider</button></center>
</div>




