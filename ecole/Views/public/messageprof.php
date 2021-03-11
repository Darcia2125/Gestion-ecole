<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Message</title>
</head>
<body>
	<h1>Envoyer un message</h1>
	<form action="message.php?action=" method="post">
  <p>
    <label for="date">Date et heure d'envoie</sslabel>
    <input type="datetime-local" name="date" id="date">

  </p>
	<!-- PourCours -->
	<p>
		Sélectionnez votre cours
		<?php
			foreach ($cours as $module) {
		?>
		
		<select name="cours" id="cours">
			<option value="<?php $module['categorie'] ?>" name="cours[]"><?php $module['categorie'] ?></option>
		</select>
		<?php
			}
		?>
	</p>

  <P>
  Votre module:
  <?php
			foreach ($cours as $module) {
	?>
      <input type="radio" name="nom_cours" id="nom_cours"><label for="nom_cours"><?php echo $module['nom_cours'];?></label><br>
  <?php
		}
  ?>
  </P>

	<p>
		<label for="objet">Objet</label>
		<input type="text" name="objet" id="objet">
	</p>

	<p>
		<label for="message">Message:</label><br>
		<textarea rows="10" cols="100"></textarea>
	</p>

	<p>
		Destinataire
		<input type="checkbox" name="destinataire[]" id="destinataire" value="tous"><label>Tous</label><br>
  </p>

	<p>
		<input type="submit" name="envoie" value="Envoyer">
	</p>

	</form>
</body>
</html>