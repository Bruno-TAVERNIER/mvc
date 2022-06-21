<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $titrePage; ?></title>
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
  <p><?= $contenu; ?></p>
  <table>
    <tr>
      <th>id</th>
      <th>Prenom</th>
      <th>Nom</th>
    </tr>
    <?php foreach($liste as $cond): ?>
      <tr>
        <td><?= $cond['id_conducteur']; ?></td>
        <td><?= $cond['prenom']; ?></td>
        <td><?= $cond['nom']; ?></td>
      </tr> 
    <?php endforeach; ?>
  </table>

  <pre><?php print_r($alex); ?></pre>
</body>
</html>