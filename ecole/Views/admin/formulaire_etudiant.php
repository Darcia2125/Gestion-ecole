
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Etudiant</title>
</head>
<body>
  <h1>Formulaire d'étudiant</h1>
  <form action="../../etudiant.php?action=ajout_etudiant" method="POST">
	<div>
		<label for="nom">Nom</label>
		<input type="text" name="nom" id="nom" >
	</div>
	<div>
		<label for="prenom">Prénom</label>
		<input type="text" name="prenom" id="prenom">
	</div>
	
	<div>
		<label for="email">Adresse</label>
		<input type="text" name="adresse" id="adresse">
	</div>
	<div>
		<label for="facebook">Facebook</label>
		<input type="text" name="facebook" id="facebook">
	</div>
	<div>
		<label for="email">Email</label>
		<input type="email" name="email" id="email">
	</div>

	<div>
		<label for="mdp">Mot de passe</label>
		<input type="password" name="mdp_Etudiant" id="mdp_Etudiant">
	</div>
	<div>
		<button type="submit" name="ajouter" class="btn" > Ajouter </button>
	</div>
  </form> 
</body>
</html>







