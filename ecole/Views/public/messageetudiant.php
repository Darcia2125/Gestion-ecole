<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Message</title>
</head>
<body>
	<h1>Envoyer un message</h1>
	<form action="message.php?action=envoie" method="post">
	<p>
    <label for="date">Date et heure d'envoie</label>
    <input type="datetime-local" name="date" id="date">

  </p>

	<!-- destinataire -->
	<p>
		Choisissez votre destinataire
		<input type="checkbox" name="destinataires[]" id="destinataire" value="tous"><label>Tous</label><br>
		<?php
		foreach ($etudiants as $etudiant){
		?>	
		
		<p><input type="checkbox" name="destinataire[]" id="destinataire" value="<?php echo $etudiant["id_etudiant"] ?>"><label><?php echo $etudiant['nom'].' '.$etudiant['prenom']?></label></p>
		<?php
		}
		?>	
	</p>

	<p>
		<label for="objet">Objet</label>
		<input type="text" name="objet" id="objet">
	</p>

	<p>
		<label for="message">Message:</label><br>
		<textarea rows="10" cols="100" name="contenu"></textarea>
	</p>

	<p>
		<input type="submit" name="envoie" value="Envoyer">
	</p>

	</form>
</body>
</html>