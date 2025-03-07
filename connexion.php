<?php
session_start();

try
{
    $db = new PDO(
        'mysql:host=localhost;dbname=il_casolare;charset=utf8',
        'root',
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$connex = "SELECT * FROM utilisateur WHERE (Nom = :username)";
$connexPrep = $db->prepare($connex);
$connexPrep->execute([
    'username' => $_POST['username'] ]);
$user = $connexPrep->fetch(PDO::FETCH_ASSOC);

if(password_verify($_POST['mdp'], $user['Mot_de_passe'])){
    $_SESSION['user_id'] = $user['Id_utilisateur'];  
    $_SESSION['username'] = $user['Nom'];           
    $_SESSION['admin'] = $user['Admin'];            
 

    header("Location: accueil.php");
    exit();
}else{
    echo("Votre nom d'utilisateur ou mot de passe est erronné");
}

?>