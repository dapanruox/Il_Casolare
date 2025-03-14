<?php
session_start();
require 'connexion.php';

// Vérifier si l'utilisateur est admin
if (!isset($_SESSION['user_id']) || $_SESSION['admin'] !== 1) {
    die("Accès interdit !");
}

// Récupérer les produits
$sql = "SELECT * FROM plat";
$result = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Produits</title>
</head>
<body>
    <h1>Modifier les Produits</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['nom']) ?></td>
                <td><?= $row['prix'] ?> €</td>
                <td><?= htmlspecialchars($row['description']) ?></td>
                <td>
                    <a href="modifier_produit.php?id=<?= $row['id'] ?>">Modifier</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
