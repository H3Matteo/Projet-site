<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Liste des attractions</title>
</head>
<body>

<h2>Liste des attractions</h2>

<table>
    <tr>
        <th>Nom</th>
        <th>niveau de peur</th>
    </tr>
    <?php
    // Afficher les données de chaque attraction
    foreach ($attractions as $attraction): ?>
       <tr>
            <td><?= $attraction['nom'] ?></td>
            <td><?= $attraction['niveau_peur'] ?></td>
       </tr>
       <?php endforeach; ?>
</table>

</body>
</html>
