<?php
 session_start();
 include "head.php";  

 require("connexionbase.php");

 $resprinc = $_POST['residenceprincipale'];
 $ressecond = $_POST['residencesecondaire'];
 $logvac = $_POST['logvac'];
 $peche = $_POST['peche'];

 echo $_SESSION['idparticipant'];
 echo $resprinc;	  

	if ($resprinc != "1" && $peche == "oui")
	{
		$_SESSION['profil'] = "ResPrincipalePecheur";
		?><div><center><a href="partie1resident.php" class="button2">partie1pecheur</a></center></div><?php
	}
	elseif ($peche == "oui" && $ressecond != "1")
	{
		$_SESSION['profil'] = "Res2dairePecheur";
		?><div><center><a href="partie1resident.php" class="button2">partie1pecheur</a></center></div><?php	
	}
	elseif ($ressecond == "1" && $resprinc == "1" && $peche == "oui")
	{
		$_SESSION['profil'] = "VacancierPecheur";
		?><div><center><a href="partie1pecheur.php" class="button2">partie1pecheur</a></center></div><?php
	}
	elseif ($resprinc != "1" && $peche == "non")
	{
		$_SESSION['profil'] = "ResPrincipaleNonpecheur";
		?><div><center><a href="partie1resident.php" class="button2">partie1resident</a></center></div><?php
	}
	elseif ($ressecond != "1" && $peche == "non") 
	{
		$_SESSION['profil'] = "Res2daireNonpecheur";
		?><div><center><a href="partie1resident.php" class="button2">partie1resident</a></center></div><?php
	}
	elseif ($ressecond == "1" && $resprinc == "1" && $peche == "non")
	{
		$_SESSION['profil'] = "VacancierNonPecheur";
		?><div><center><a href="partie1vacancier.php" class="button2">partie1vacancier </a></center></div><?php
	}

$profil = $_SESSION['profil'];
$id = $_SESSION['idparticipant'];

$requete = "UPDATE introduction SET TypeProfil = '$profil' WHERE IDparticipant = '$id'";
mysql_query($requete,$CONNEXION);

echo $profil;

?>










