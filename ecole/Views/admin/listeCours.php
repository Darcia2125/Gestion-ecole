<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste cours</title>
</head>
<body>
  <h1>Liste cours</h1>
  <table>
    <thead>
    <tr>
      <th>Catégorie</th>
      <th>Nom_cours</th>
      <th colspan="2">Action</th>
    </tr>
    </thead>
    
    <?php
    
      foreach ($cours as $cour) {
      
    ?>
      <tr>
        <td> <?= $cour["categories"]?></td>
        <td> <?= $cour["nom_cours"]?></td>
        
      <td>
          <a href="Views/admin/modif_cours.php?action=modifier&id_cours=<?= $cour["id_cours"]?>">Modifier</a>
          <a href="cours.php?action=supprimer&id_cours=<?= $cour["id_cours"]?>">Supprimer</a>
        </td>
        
      </tr>
    <?php
      };
    ?>
    </tbody>
  </table>

</html>