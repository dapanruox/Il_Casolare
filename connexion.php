<?php

try
{
    $db = new PDO(
        'mysql:host=localhost;dbname=budgetonportefeuille;charset=utf8',
        'root',
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$connex = "SELECT COUNT(*) FROM user WHERE (username = :username AND motpasse = :motpasse)";
$connexPrep = $db->prepare($connex);
$connexPrep->execute([
    'username' => $_POST['username'],
    'motpasse' => $_POST['motpasse']
]);
$foncfinal = $connexPrep->fetchColumn();

if($foncfinal){
    echo("Vous êtes connecté ! :)");
}else{
    echo("Votre nom d'utilisateur ou mot de passe est erronné");
}

?>