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

$checkEmail = "SELECT COUNT(*) FROM user WHERE email = :email";
$prepCheck = $db->prepare($checkEmail);
$prepCheck->execute(['email' => $_POST['email']]);   
$foncfinal = $prepCheck->fetchColumn();

if($foncfinal){
    echo("Le compte existe déjà");
}
else{
    $sqlQuery = 'INSERT INTO user(username, email, motpasse) VALUES (:username, :email, :motpasse)';

    $insertRequete = $db->prepare($sqlQuery);

    $insertRequete->execute([
        'username' => $_POST['username'] ,
        'email' => $_POST['email'],
        'motpasse' => $_POST['motpasse']
    ]);

    echo("Inscription réussie");
}


?>