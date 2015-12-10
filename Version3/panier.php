<?php
	session_start(); 
	
	if (isset($_GET['action']))
	{
		if ($_GET['action'] == "Vider le panier")
		{
			unset($_SESSION["reference"]);
			unset($_SESSION["quantite"]);
		}
		else if ($_GET['action'] == "Ajouter au panier")
		{
				$i = count($_SESSION["reference"]);
				$j = 0;
				while ($j < $i && $_SESSION["reference"][$j] != $_GET['refPdt'])
				{
					$j++;
				}
				if ($_SESSION["reference"][$j] == $_GET['refPdt'])
				{
					$_SESSION["quantite"][$j] += $_GET['quantite'];
				}
				else
				{
					$_SESSION["reference"][$i] = $_GET['refPdt'];
					$_SESSION["quantite"][$i] = $_GET['quantite'];
				}	
		}
	}
	header("Location: menu.php");
?>