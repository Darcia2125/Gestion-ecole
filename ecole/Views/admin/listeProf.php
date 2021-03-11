<!DOCTYPE html>
<html>
    <head>
        <title>Liste des Professeurs</title>
    </head>
    <body>
       <ul>
       <li>Professeurs</li>       
       
       <table>
                <thead><tr>
                    <th>Nom</th>
                    <th>Photo</th>
                    <th>Adresse</th>
                    <th>Tel</th>
                    <th>Email</th>
                    </tr>
                </thead>
        
                <tbody>
                <?php
                    $i=0;
                    foreach ($professeur as $professeurs){ 
                ?>
                    <tr>       
                        <td> <?= $professeurs["nom_prof"] ?></td>
                        <td> <?= $professeurs["photo_prof"] ?></td>
                        <td> <?= $professeurs["adresse_prof"] ?></td>
                        <td> <?=$professeurs["tel_prof"]?></td>
                        <td> <?=$professeurs["email_prof"]?></td>
                        <td><a href="professeur.php?action=delete&id_prof=<?= $professeurs["id_prof"]?>"> Supprimer</a></td>
                        <td><a href="professeur.php?action=modifier&id_prof=<?= $professeurs["id_prof"]?>">Modifier</a></td>
                     </tr>
                     <?phP
                    };
                ?>
                </tbody>    
        </table>

        </ul>
</body>

</html>
