<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cours</title>
</head>
<body>
  <h1>Formulaire Cours</h1>
  <form action="../../cours.php?action=modifier" method="POST" >
	<div>
		<label for="categories">Categories</label>
		<input type="text" name="categories" id="categories" value=<?php echo $cours [$id_cours-1]["categories"] ?>><br>
	</div>
	<div>
		<label for="nom_cours">Nom cours</label>
		<input type="text" name="nom_cours" id="nom_cours" value=<?php echo $cours [$id_cours-1]["nom_cours"]?>><br>
	</div>
    <div>
		<button type="submit" name="ajouter" class="btn"><a href ="listeCours.php"> Modifier</a> </button>
	</div>
    
    </form> 
</body>
</html>
