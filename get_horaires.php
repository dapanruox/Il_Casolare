<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "votre_base_de_donnees";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

if (isset($_GET['date'])) {
    $date = $_GET['date'];
    $jour = date('l', strtotime($date));

    $sql = "SELECT H.Id_horaire, H.Heure_ouverture, H.Heure_femerture
            FROM Horaire H
            LEFT JOIN Reserver R ON H.Id_horaire = R.Date_heure
            LEFT JOIN Table_Res T ON R.Numero = T.Numero
            WHERE H.Jour = ?
            AND (T.Numero IS NULL OR T.Numero NOT IN (
                SELECT Numero FROM Reserver WHERE Date_heure = H.Id_horaire
            ))
            GROUP BY H.Id_horaire";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $jour);
    $stmt->execute();
    $result = $stmt->get_result();

    echo '<option value="">Sélectionnez un horaire</option>';
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['Id_horaire'] . '">' . $row['Heure_ouverture'] . ' - ' . $row['Heure_femerture'] . '</option>';
    }

    $stmt->close();
}

$conn->close();
?>
