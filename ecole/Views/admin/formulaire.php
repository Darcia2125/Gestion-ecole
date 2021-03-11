<!DOCTYPE HTML>
<html>
    <head>
        <title> Formulaire professeur </title>
    </head>
    <body>
        <h1> Bienvenu</h1>
        <form action="../../professeur.php?action=ajoutMembre" method="POST">
            <p>
                <label for="nom">Nom </label>
                <input type="text" name="nom_prof">
            </p>

            <p>
                <label for="adresse">Adresse</label>
                <input  type="text" name="adresse_prof">
            </p>

            <p>
                <label for="tel">Téléphone</label>
                <input type="text" id="tel" name="tel_prof">
            </p>

            <p>
                <label for="mail">Email</label>
                <input type="email" id="mail" name="email_prof">
            </p>

            <p>
                <label for="photo">Photo</label>
                <input type="text" id="photo" name="photo_prof">
            </p>

            <p>
		        <label for="mdp">Mot de passe</label>
		        <input type="password" id="mdp_prof" name="mdp_prof" >
	        </p>

            <p><input type="submit" value="Enregistrer"></p>

        </form>
    </body>
</html> 
