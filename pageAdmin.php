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
$sql = "SELECT * FROM `reserver`
        INNER JOIN utilisateur
        ON utilisateur.Id_utilisateur = reserver.Id_utilisateur;"; 

$result = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin - Il Casolare</title>
</head>
<body>
    <h1>Réservations</h1>
    <table border="1">
        <tr>
            <th>Nom utilisateur</th>
            <th>Id</th>
            <th>Mail</th>
            <th>Numéro de téléphone</th>
            <th>Date de la réservation</th>
            <th>N° Table</th>
            <th>Nombre de personnes</th>
        </tr>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
                <td><?= htmlspecialchars($row['Nom']) ?></td>
                <td><?= htmlspecialchars($row['Id_utilisateur']) ?></td>
                <td><?= htmlspecialchars($row['Mail']) ?></td>
                <td><?= htmlspecialchars($row['Num_Telephone']) ?></td>
                <td><?= htmlspecialchars($row['Date_heure']) ?></td>
                <td><?= htmlspecialchars($row['Numero']) ?></td>
                <td><?= htmlspecialchars($row['Nombre_personnes']) ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
