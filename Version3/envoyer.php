<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css"/>
        <title>Envoie commande</title>
    </head>
	<body>
	<?php
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=lafaune;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch (Exception $e)
		{
				die('Erreur : ' . $e->getMessage());
		}
		if (isset($_GET['id']) && isset($_GET['mdp']))
		{
			$req = 'SELECT * FROM client WHERE clt_code = \''.$_GET['id'].'\' AND clt_motPasse =\''.$_GET['mdp'].'\'';
			$res = $bdd->query($req);
			$i = 0;
			while ($ligne = $res->fetch())
				$i++;
			if ($i == 0) 
			{
				// aucune ligne renvoyée
				echo "Mauvais identifiants";	
			}
			 else 
			{
				$tps = time();
				$id = $_GET['id'].$tps;
				$date = date("d-m-Y");
				$req = 'INSERT INTO commande VALUES (\''.$id.'\', \''.$date.'\', \''.$_GET['id'].'\')';
				$res = $bdd->exec($req);
				for($i = 0; $i < count($_SESSION["reference"]); $i++)
				{
					$req = 'INSERT INTO contenir VALUES (\''.$id.'\', \''.$_SESSION["reference"][$i].'\', \''.$_SESSION["quantite"][$i].'\')';
					$res = $bdd->exec($req);
				}
			}
		}
	?>
	</body>
</html>