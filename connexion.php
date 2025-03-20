<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification si les champs existent
    if (!isset($_POST['username']) || !isset($_POST['mdp'])) {
        echo "Erreur : Les champs du formulaire sont vides..";
        exit;
    }

    $username = $_POST['username'];
    $mdp = $_POST['mdp'];

    try {
        $db = new PDO(
            'mysql:host=localhost;dbname=il_casolare;charset=utf8',
            'root',
            '',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );

        $connex = "SELECT * FROM utilisateur WHERE Nom = :username";
        $connexPrep = $db->prepare($connex);
        $connexPrep->execute(['username' => $username]);

        $user = $connexPrep->fetch(PDO::FETCH_ASSOC);

        // Vérifier si l'utilisateur existe bien en base de données
        if ($user && password_verify($mdp, $user['Mot_de_passe'])) {
            $_SESSION['user_id'] = $user['Id_utilisateur'];
            $_SESSION['username'] = $user['Nom'];
            $_SESSION['admin'] = $user['Admin'];

            header("Location: accueil.php");
            exit;
        } else {
            echo "Votre nom d'utilisateur ou mot de passe est erroné";
        }
    } catch (Exception $e) {
        echo 'Erreur de connexion : ' . $e->getMessage();
    }
} else {
    echo "Méthode non autorisée.";
}
?>