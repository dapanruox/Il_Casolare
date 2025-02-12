<?php

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

$connex = "SELECT COUNT(*) FROM utilisateur WHERE (Nom = :username AND Mot_de_passe = :motpasse)";
$connexPrep = $db->prepare($connex);
$connexPrep->execute([
    'Nom' => $_POST['username'],
    'Mot_de_passe' => $_POST['motpasse']
]);
$foncfinal = $connexPrep->fetchColumn();

if($foncfinal){
    echo("Vous êtes connecté ! :)");
}else{
    echo("Votre nom d'utilisateur ou mot de passe est erronné");
}

?>