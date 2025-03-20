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
    <link rel="stylesheet" href="style_reservation_table.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
</head>

<header>
        <div class="flex1">
            <div class="flex2">
                <h1><strong>Il Casolare</strong></h1>
                <h2>Page Admin</h2>
            </div>
        </div>
        <nav>
            <div class="liens">
                <a href="accueil.php" style="color: white;" >Accueil</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="apropos.php" style="color: white;">A propos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="menus.php" style="color: white;">Menus</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="creation_compte.php" style="color: white;">Connexion</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="reservations_table.php" style="color: white;">Réserver</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="verif_admin.php" style="color: white; font-weight: 900; text-decoration: underline;">Admin</a>
        
            </div>
        </nav>
</header>

<body>
    <p  class="pasH1">Réservations</p>
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
