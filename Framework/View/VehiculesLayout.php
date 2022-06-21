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
  <?= $contenu; ?>

  <table>
    <tr>
      <th>id</th>
      <th>Marque</th>
      <th>Modele</th>
      <th>Immatriculation</th>
      <th>couleur</th>
    </tr>
    <?php foreach($vehicules as $v): ?>
      <tr>
        <td><?= $v['id_vehicule']; ?></td>
        <td><?= $v['marque']; ?></td>
        <td><?= $v['modele']; ?></td>
        <td><?= $v['immatriculation']; ?></td>
        <td><?= $v['couleur']; ?></td>
      </tr> 
    <?php endforeach; ?>
  </table>

  <pre><?php print_r($vw); ?></pre>
</body>
</html>