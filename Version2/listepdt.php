<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8 sans bom" />
		<link rel="stylesheet" href="style.css"/>
        <title>TEST</title>
    </head>
	<body>
		<div id="page-wrap">
		<table align=left border width=80%>
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
					$req = 'SELECT * FROM produit, categorie WHERE pdt_categorie = cat_code AND pdt_categorie=\''.$_GET['cat'].'\'';
					$res = $bdd->query($req);
					while($ligne = $res->fetch())
					{
			?>
						<tr>
							<td><center><img src="../image/<?php echo $ligne['pdt_image']; ?>" class="photo"></center></td>
							<td><?php echo $ligne['pdt_ref']; ?></td>
							<td><?php echo $ligne['pdt_designation']; ?></td>
							<td><?php echo $ligne['pdt_prix']; ?></td>
						</tr>
			<?php
					}
					$res->closeCursor();
				}
				else
				{
					echo("Erreur 404");
				}
			?>
		</div>
	</body>
</html>
		