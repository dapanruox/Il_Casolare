<?php

session_start(); 

if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    echo json_encode(["success" => false, "message" => "Utilisateur non connecté."]);
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_utilisateur = $_SESSION['user_id'] ?? null; // Récupérer l'utilisateur connecté
    $id_restaurant = 1;
    $table_numero = $_POST['table'] ?? null;
    $nombre_personnes = $_POST['nombre_personnes'] ?? null;
    $date = $_POST['date'] ?? null;
    $heure = $_POST['heure'] ?? null;

    if (!$id_utilisateur || !$id_restaurant || !$table_numero || !$nombre_personnes || !$date || !$heure) {
        echo json_encode(["success" => false, "message" => "Tous les champs sont obligatoires :" ]);
        exit;
    }

    try {
        $db = new PDO(
            'mysql:host=localhost;dbname=il_casolare;charset=utf8',
            'root',
            '',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );

        // Insérer la réservation avec le numéro de table
        $stmt = $db->prepare("
            INSERT INTO reserver (Id_utilisateur, Id_restaurant, Numero, Nombre_personnes, Date_heure)
            VALUES (:id_utilisateur, :id_restaurant, :numero, :nombre_personnes, :date_heure)
        ");
        $stmt->execute([
            'id_utilisateur' => $id_utilisateur,
            'id_restaurant' => $id_restaurant,
            'numero' => $table_numero, // On enregistre directement le numéro de table
            'nombre_personnes' => $nombre_personnes,
            'date_heure' => $date . ' ' . $heure
        ]);

        echo json_encode(["success" => true, "message" => "Reservation effectuee avec succes."]);

    } catch (Exception $e) {
        echo json_encode(["success" => false, "message" => "Erreur : " . $e->getMessage()]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Méthode non autorisée."]);
}
?>