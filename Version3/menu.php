<?php
	session_start(); 
	if (!isset($_SESSION["reference"]))
	{
			$_SESSION["reference"]=array();
			$_SESSION["quantite"]=array();
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8 sans bom" />
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>
		<div id="page-wrap">
			<nav>
				<div id="sidebar">
					</br><h3  align=center> Sté Lafaune </h3></br></br>
					<A HREF="index1.html" TARGET="droite"><h3 align=center> ACCUEIL </h3></a></br>
					<hr color=black>
					<h3 align=center>Nos Produits</h3></br>
					<?php

						try
						{
							$bdd = new PDO('mysql:host=localhost;dbname=lafaune;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
						}
						catch (Exception $e)
						{
								die('Erreur : ' . $e->getMessage());
						}
						
							$req = 'SELECT * FROM categorie';
							$res = $bdd->query($req);
							while($ligne = $res->fetch())
							{
					?>
						<a href="listePdt.php?cat=<?php echo $ligne['cat_code']?>" TARGET="droite"><H4 align=center> <?php echo $ligne['cat_libelle'] ?></H4></a>
					<?php
							}
							$res->closeCursor();
					?>
					<a href="mail.html" TARGET="droite"><H4 align=center>Contacter le service commercial</H4></a>
					<hr color=black>
					<form action="panier.php" target="menu" method="get">
						<center><input type="submit" name="action" value="Vider le panier" /></center>
					</form>
					<form action="commande.php" target="droite" method="get">
						<center><p><input type="submit" value="Commander" /></center>
					</form>

				</div>
			</nav>
		</div>
	</body>