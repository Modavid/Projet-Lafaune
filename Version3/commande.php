<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css"/>
        <title>Resume commande</title>
    </head>
	<body>
		</br></br><h1 align=center>Formulaire de contact</h1></br></br>
		<?php
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=lafaune;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			}
			catch (Exception $e)
			{
					die('Erreur : ' . $e->getMessage());
			}
			$i = 0;
		?>
			<table align=left border class="tablecmd">
			<tr>
				<td>Ref</td>
				<td>Désignation</td>
				<td>PU</td>
				<td>Qté</td>
				<td>Montant</td>
			</tr>
		<?php
			while ($i < count($_SESSION["reference"]))
			{
				$req = 'SELECT * FROM produit WHERE pdt_ref = \''.$_SESSION["reference"][$i].'\'';
				$res = $bdd->query($req);
				$ligne = $res->fetch();
		?>
			<tr>
				<td> <?php echo $ligne['pdt_ref']; ?></td>
				<td> <?php echo $ligne['pdt_designation']; ?></td>
				<td> <?php echo $ligne['pdt_prix']; ?></td>
				<td> <?php echo $_SESSION["quantite"][$i]; ?></td>
				<td> <?php echo $_SESSION["quantite"][$i] * $ligne['pdt_prix']; ?></td>
			</tr>
		<?php
				$i++;
			}
		?>
			</table>
			</br>
		<div id="envoie">
			<form action="envoyer.php" target="droite" method="get" class="ajoutpdt">
			Code client : 
			<input type="text" name="id" />
			Mot de passe : 
			<input type="password" name="mdp" /></br>
			<input type="submit" name="action" value="Envoyer la commande" />
			</form>
		</div>
	</body>
</html>