<?php
session_start();

try {
    $db = new PDO(
        'mysql:host=localhost;dbname=il_casolare;charset=utf8',
        'root',
        '',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );
} catch (Exception $e) {
    die('Erreur : ' . htmlspecialchars($e->getMessage()));
}

if (!isset($_SESSION['user_id']) || !isset($_SESSION['username'])) {
    die("Accès refusé. Veuillez vous connecter.");
}

$connex = "SELECT * FROM utilisateur WHERE Nom = :username";
$connexPrep = $db->prepare($connex);
$connexPrep->execute([
    'username' => $_SESSION['username']
]);

$user = $connexPrep->fetch(PDO::FETCH_ASSOC);

if ($user && isset($_SESSION['mdp']) && password_verify($_SESSION['mdp'], $user['Mot_de_passe'])) {
    $_SESSION['user_id'] = $user['Id_utilisateur'];
    $_SESSION['username'] = $user['Nom'];
    $_SESSION['admin'] = $user['Admin'];

    header("Location: accueil.php");
    exit();
} else {
    echo "Votre nom d'utilisateur ou mot de passe est erroné.";
}
?>
