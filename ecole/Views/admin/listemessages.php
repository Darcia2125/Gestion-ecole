<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste message</title>
</head>
<body>
  <h1>Liste de tous les messages </h1>
  <table>
    <thead>
    <tr>
      <th>Date</th>
      <th>Objet</th>
      <th>Contenu du message</th>
    </tr>
    </thead>
    <tbody>
    <?php
      foreach ($message as $messages) {
      
    ?>
      <tr>
        <td><?php echo $messages['date']?></td>
        <td><?php echo $messages['objet']?></td>
        <td><?php echo $messages['contenu']?></td>
        
      </tr>
    <?php
      }
    ?>
    </tbody>
  </table>
</body>
</html>