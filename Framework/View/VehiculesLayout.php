<?php include 'includes/header.php'; ?>
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
  <h2>Conducteurs:</h2>
  <ul>
    <?php foreach($conducteurs as $c): ?>
      <li><?= $c['prenom']; ?> <?= $c['nom']; ?></li>
    <?php endforeach; ?>
  </ul>

  <pre><?php print_r($vw); ?></pre>
  <?php include 'includes/footer.php'; ?>