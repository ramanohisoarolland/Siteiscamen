<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>

<table>
<thead>
    <th>NOM DE FICHIER</th>
    <th>DEPARTEMENT</th>
    <th>NIVEAUX</th>
    <th>POUR</th>
    <th>TAILLE (in mb)</th>
    <th>TELECHARGE</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo $file['departement']; ?></td>
      <td><?php echo $file['niveaux']; ?></td>
      <td><?php echo $file['pour']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">TELECHARGE</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>