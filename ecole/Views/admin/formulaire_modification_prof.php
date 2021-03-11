<!DOCTYPE HTML>
<html>
    <head>
        <title> Formulaire professeur </title>
    </head>
    <body>
        <h1> Bienvenu</h1>
        <form action="../../professeur.php?action=liste_membres" method="POST">
        
            <p>
                <label for="nom">Nom </label>
                <input type="text" name="nom" value=<?php echo $professeur [$id_prof-1]["nom_prof"]?>>
            </p>

            <p>
                <label for="adresse">Prenom</label>
                <input  type="text" name="prenom" value=<?php echo $professeur [$id_prof-1]["adresse_prof"] ?>>
            </p>

            <p>
                <label for="tel">Adresse</label>
                <input type="text" id="tel" name="adresse" value=<?php echo $professeur [$id_prof-1]["tel_prof"]?>>
            </p>

            <p>
                <label for="photo">Facebook</label>
                <input type="text" id="photo" name="facebook" value=<?php echo $professeur [$id_prof-1]["photo_prof"]?>>
            </p>

            <p>
                <label for="mail">Email</label>
                <input type="email" id="mail" name="email" value=<?php echo $professeur [$id_prof-1]["email_prof"]?>>
            </p>

            

            <p><input type="submit" value="Modifier"><a href="listeProf"></a></p>
            
        </form>
    </body>
</html> 
