<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8 sans bom" />
		<link rel="stylesheet" href="style.css"/>
        <title>Produits</title>
    </head>
	<body>
		<?php
			ini_set('SMTP','smtp-auth.sfr.fr');
			ini_set('smtp_port', '587');
			ini_set('sendmail_from', 'lafaunecommercial@gmail.com');
			if(isset($_POST) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message']))
			{
				if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message']))
				{
					$destinataire = "lafaunecommercial@gmail.com";
					$sujet = "Demande d'enregistrement";
					$message = "Nom : ".$_POST['nom']."\r\n";
					$message .= "Adresse email : ".$_POST['email']."\r\n";
					$message .= "Message : ".$_POST['message']."\r\n";
					$entete = 'From: '.$_POST['email']."\r\n".
						'Reply-To: '.$_POST['email']."\r\n".
					'X-Mailer: PHP/'.phpversion();
					if (mail($destinataire,$sujet,$message,$entete))
					{
						echo 'Message envoyé';
					} 
					else 
					{
						echo "Une erreur est survenue lors de l'envoi du formulaire par email";
					}
				}
			}
		?>
	</body>
</html>