<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste étudiant</title>
</head>
<body>
  <h1>Liste de tous les étudiant en L1</h1>
  
  <table>
    <thead>
    <tr>
      <th>Numero</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Adresse</th>
      <th>Email</th>
      <th>Facebook</th>
      <th>mot de passe</th>
      <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
      foreach ($etudiant as $etudiants) {
      
    ?>
      <tr>
        <td><?php echo $etudiants['id_etudiant']?></td>
        <td><?php echo $etudiants['nom']?></td>
        <td><?php echo $etudiants['prenom']?></td>
        <td><?php echo $etudiants['adresse']?></td>
        <td><?php echo $etudiants['facebook']?></td>
        <td><?php echo $etudiants['email']?></td>
        <td><?php echo $etudiants['mdp_Etudiant']?></td>
        <td>
          <a href="etudiant.php?action=modifier&id=<?php echo $etudiants['id_etudiant'];?>">Modifier</a>
          <a href="etudiant.php?action=supprimer&id=<?php echo $etudiants['id_etudiant'];?>">Supprimer</a>
        </td>
        
      </tr>
    <?php
      }
    ?>
    </tbody>
  </table>
</body>
</html>