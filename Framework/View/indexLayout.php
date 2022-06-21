<?php
include 'includes/header.php';
?>
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

<?php
include 'includes/footer.php';
?>