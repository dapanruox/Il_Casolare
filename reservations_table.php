<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de table - El Casolare</title>
    <link rel="stylesheet" href="style_reservation_table.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="flex1">
            <div class="flex2">
                <h1><strong>Il Casolare</strong></h1>
                <h2>Réservation de Table</h2>
            </div>
        </div>
        <nav>
            <div class="liens">
                <a href="accueil.php" style="color: white;" >Accueil</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="apropos.php" style="color: white;">A propos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="menus.php" style="color: white;">Menus</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="creation_compte.php" style="color: white;">Connexion</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="reservations_table.php" style="color: white; font-weight: 900; text-decoration: underline;">Réserver</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="verif_admin.php" style="color: white;">Admin</a>
        
            </div>
        </nav>
    </header>

    <main class = "main-content">
        <div class="container">
            <h2>Limoges</h2>
            <p class="address">Groupe 3iL, 43 Rue de Sainte-Anne, 87000 LIMOGES</p>
            <p class="phone">📞 <a href="tel:+33555021205">+33 5 55 02 12 05</a></p>

            <a href="menus.php" class="menu-btn">Voir la carte et les menus</a>

            <div class="toggle-buttons">
                <button class="toggle active">Sur place</button>
                <button class="toggle">À emporter</button>
            </div>

            <div class="schedule">
                <p><strong>lundi</strong> 11:30 – 14:30, 18:30 – 22:30</p>
                <p><strong>mardi</strong> 11:30 – 14:30, 18:30 – 22:30</p>
                <p><strong>mercredi</strong> 11:30 – 14:30, 18:30 – 22:30</p>
                <p><strong>jeudi</strong> 11:30 – 14:30, 18:30 – 22:30</p>
                <p><strong class ="highlight">vendredi</strong> 11:30 – 14:30, 18:30 – 22:30</p>
                <p><strong>samedi</strong> 11:30 – 14:30, 18:30 – 22:30</p>
                <p><strong>dimanche</strong> 11:30 – 14:30, 18:30 – 22:30</p>
            </div>
        </div>

        <section class="reservation-form">
            <h2>Réservez votre table</h2>
            <form action="reserver_table.php" method="POST">
                <!-- Sélection de la date -->
                <div class="form-group">
                    <label for="date">Date :</label>
                    <input type="date" id="date" name="date" required onchange="updateTimeSlots()">
                </div>

                <!-- Sélection de l'horaire en fonction du jour -->
                <div class="form-group">
                    <label for="time">Heure :</label>
                    <select id="time" name="time" required>
                        <option value="">Veuillez sélectionner une date</option>
                    </select>
                </div>

                <!-- Sélection du nombre de personnes -->
                <div class="form-group">
                    <label for="guests">Nombre de personnes :</label>
                    <input type="number" id="guests" name="guests" min="1" max="20" required>
                </div>

                <!-- Sélection de la table disponible -->
                <div class="form-group">
                    <label for="table">Tables disponibles :</label>
                    <select id="table" name="table" required>
                        <option value="T01-intérieur">Intérieur - Table T01</option>
                        <option value="T02-intérieur">Intérieur - Table T02</option>
                        <option value="T03-intérieur">Intérieur - Table T03</option>
                        <option value="T04-extérieur">Extérieur - Table T04</option>
                        <option value="T05-extérieur">Extérieur - Table T05</option>
                    </select>
                </div>

                <button type="submit">Réserver</button>
            </form>
        </section>

        
        <script src="assets/js/script_reservation_table.js"></script>
    </main>

</body>
</html>
