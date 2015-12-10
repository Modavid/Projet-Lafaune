<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8 sans bom" />
		<link rel="stylesheet" href="style.css"/>
        <title>Produits</title>
    </head>
	<body>
		<div id="page-wrap">
			<div id="listepdt">
				<table align=left class="tablecmd">
					<tr>
						<td>Photo</td>
						<td>Référence</td>
						<td>Désignation</td>
						<td width="10%">Prix</td>
					</tr>
					<?php
						try
						{
							$bdd = new PDO('mysql:host=localhost;dbname=lafaune;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
						}
						catch (Exception $e)
						{
								die('Erreur : ' . $e->getMessage());
						}
						if (isset($_GET['cat']))
						{
							$req = 'SELECT * FROM produit, categorie WHERE pdt_categorie = cat_code AND pdt_categorie =\''.$_GET['cat'].'\'';
							$res = $bdd->query($req);
							while($ligne = $res->fetch())
							{
					?>
								<tr>
									<td><img src="../image/<?php echo $ligne['pdt_image']; ?>" class="photo"></td>
									<td><?php echo $ligne['pdt_ref']; ?></td>
									<td><?php echo $ligne['pdt_designation']; ?></td>
									<td><?php echo $ligne['pdt_prix']; ?></td>
								</tr>
					<?php
							}
				echo '</table>';
				echo '</div>';
						$res->closeCursor();
					}
					else
					{
						echo("Erreur");
					}
					$req = 'SELECT * FROM produit, categorie WHERE pdt_categorie = cat_code AND pdt_categorie =\''.$_GET['cat'].'\'';
					$res = $bdd->query($req);
					echo '<div id="ajoutpanier">';
					echo '</br><form action="panier.php" target="menu" method="get">';
					echo '<select name="refPdt" size="1">';
					while($ligne = $res->fetch())
					{
				?>
						<option value="<?php echo $ligne['pdt_ref']; ?>"> <?php echo $ligne['pdt_designation'];
					}
					echo '</select>';
						echo '&nbsp&nbsp&nbsp';
					echo 'Quantité : ';
						echo '<input type="text" name="quantite" size="5" value="1" />';
					echo '<p><input type="submit" name="action" value="Ajouter au panier" />';
					echo '</form>';
					echo '</div>';
				?>
		</div>
	</body>
</html>
		