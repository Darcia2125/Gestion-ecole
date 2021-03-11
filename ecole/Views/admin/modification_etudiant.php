

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Etudiant</title>
</head>
<body>
  <h1>Formulaire d'étudiant</h1>
	
  <form action="../../etudiant.php?action=modifier_etudiant" method="POST">
	<p>modifier</p>
	<div>
		<label for="nom">Nom</label>
		<input type="text" name="nom" id="nom" value="<?php echo $etudiant['nom']?>">
	</div>
	<div>
		<label for="prenom">Prénom</label>
		<input type="text" name="prenom" id="prenom" value="<?php echo $etudiant['prenom']?>">
	</div>
	
	<div>
		<label for="email">Adresse</label>
		<input type="text" name="adresse" id="adresse" value="<?php echo $etudiant['adresse']?>">
	</div>
	<div>
		<label for="facebook">Facebook</label>
		<input type="text" name="facebook" id="facebook" value="<?php echo $etudiant['facebook']?>">
	</div>
	<div>
		<label for="email">Email</label>
		<input type="email" name="email" id="email" value="<?php echo $etudiant['email']?>">
	</div>
	<div>
		<label for="mdp_Etudiant">mot de passe</label>
		<input type="passwrd" name="mdp_Etudiant" id="mdp_Etudiant" value="<?php echo $etudiant['mdp_Etudiant']?>">
	</div>


	<div>
		<button type="submit" name="ajouter" class="btn" > Modifier </button>
	</div>
  </form> 
</body>
</html>







