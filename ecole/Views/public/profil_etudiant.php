<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil étudiant</title>
</head>
<body>
  <h1>Bienvenu!</h1>
  
	<div> 
	  	<?php
		foreach ($liste as $etudiant){
		?> 
		<div>
			<img src="<?php echo $etudiant['photo']?>" alt="profil" sizes="400">
		</div>
		<div>
			<h2><?php echo $etudiant['nom'].' '.$etudiant['prenom']?></h2>
		</div>
		<?php
			}
		?>

		<div>
			<button><a href="../../message.php">Messages reçues</a></button>
		</div>
		<div>
			<button type="submit">Envoyer message</button>
		</div>
	</div>


  
</body>
</html>