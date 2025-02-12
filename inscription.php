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

$checkEmail = "SELECT COUNT(*) FROM utilisateur WHERE Mail = :email";
$prepCheck = $db->prepare($checkEmail);
$prepCheck->execute(['email' => $_POST['email']]);   
$foncfinal = $prepCheck->fetchColumn();

if($foncfinal){
    echo("Le compte existe déjà");
}
else{
    $sqlQuery = 'INSERT INTO utilisateur(Nom, Mail, Mot_de_passe) VALUES (:username, :email, :mdp)';

    $insertRequete = $db->prepare($sqlQuery);

    $insertRequete->execute([
        'username' => $_POST['username'] ,
        'email' => $_POST['email'],
        'mdp' => $_POST['mdp']
    ]);

    echo("Inscription réussie");
}


?>