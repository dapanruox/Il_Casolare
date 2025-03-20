<?php
session_start();

try {
    $db = new PDO(
        'mysql:host=localhost;dbname=il_casolare;charset=utf8',
        'root',
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Vérification de la session et des permissions
if (!isset($_SESSION['user_id']) || empty($_SESSION['admin']) || $_SESSION['admin'] != 1) {
    die("Accès interdit !");
}

// Récupération des plats
$sql = "SELECT * FROM Plat"; // Correction du nom de la table (respecte la casse de la BDD)
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
            <th>Action</th>
        </tr>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
                <td><?= htmlspecialchars($row['Id_plat']) ?></td>
                <td><?= htmlspecialchars($row['Nom']) ?></td>
                <td><?= htmlspecialchars($row['Prix']) ?> €</td>
                <td>
                    <a href="modifier_produit.php?id=<?= htmlspecialchars($row['Id_plat']) ?>">Modifier</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
