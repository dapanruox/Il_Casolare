<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de table - El Casolare</title>
    <link rel="stylesheet" href="assets/CSS/style_reservation_table.css">
</head>
<body>

    <header>
        <div class="flex1">
            <div class="flex2">
                <h1><strong>Il Casolare</strong></h1>
                <h2>Réservation de Table</h2>
            </div>
        </div>
        <nav></nav>
    </header>

    <main class = "main-content">
        <div class="container">
            <h2>Limoges</h2>
            <p class="address">Carrefour Nexon, 10 Avenue de l'abattoir, 87000 LIMOGES</p>
            <p class="phone">📞 <a href="tel:+33557072292">+33 5 55 70 22 92</a></p>

            <div class="buttons">
                <a href="#" class="btn">📍 Itinéraire</a>
                <a href="#" class="btn">🍕 Commander à emporter</a>
            </div>

            <button class="menu-btn">Voir la carte et les menus</button>

            <div class="toggle-buttons">
                <button class="toggle active">Sur place</button>
                <button class="toggle">À emporter</button>
            </div>

            <div class="schedule">
                <p><strong>lundi</strong> 11:30 – 14:30, 18:30 – 22:30</p>
                <p><strong>mardi</strong> 11:30 – 14:30, 18:30 – 22:30</p>
                <p><strong class="highlight">mercredi</strong> 11:30 – 14:30, 18:30 – 22:30</p>
                <p><strong>jeudi</strong> 11:30 – 14:30, 18:30 – 22:30</p>
                <p><strong>vendredi</strong> 11:30 – 14:30, 18:30 – 22:30</p>
                <p><strong>samedi</strong> 11:30 – 14:30, 18:30 – 22:30</p>
                <p><strong>dimanche</strong> 11:30 – 14:30, 18:30 – 22:30</p>
            </div>
        </div>

        <section class="reservation-form">
            <h2>Réservez votre table</h2>
            <form action="#" method="POST">
                <!-- Sélection de la date -->
                <div class="form-group">
                    <label for="date">Date :</label>
                    <input type="date" id="date" name="date" required onchange="updateTimeSlots()">
                </div>

                <!-- Sélection de l'horaire en fonction du jour -->
                <div class="form-group">
                    <label for="time">Heure :</label>
                    <select id="time" name="time" required>
                        <option value="">Sélectionnez une heure</option>
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

        <script>
            function updateTimeSlots() {
                const timeSelect = document.getElementById("time");
                const dateInput = document.getElementById("date").value;
                const dayOfWeek = new Date(dateInput).getDay();

                const horaires = {
                    1: ["11:30", "12:00", "12:30", "13:00", "18:30", "19:00", "19:30", "20:00"], // Lundi
                    2: ["11:30", "12:00", "12:30", "13:00", "18:30", "19:00", "19:30", "20:00"], // Mardi
                    3: ["11:30", "12:00", "12:30", "13:00", "18:30", "19:00", "19:30", "20:00"], // Mercredi
                    4: ["11:30", "12:00", "12:30", "13:00", "18:30", "19:00", "19:30", "20:00"], // Jeudi
                    5: ["11:30", "12:00", "12:30", "13:00", "18:30", "19:00", "19:30", "20:00"], // Vendredi
                    6: ["11:30", "12:00", "12:30", "13:00", "18:30", "19:00", "19:30", "20:30"], // Samedi
                    0: ["11:30", "12:00", "12:30", "13:00", "18:30", "19:00", "19:30", "20:30"]  // Dimanche
                };

                timeSelect.innerHTML = '<option value="">Sélectionnez une heure</option>';
                if (horaires[dayOfWeek]) {
                    horaires[dayOfWeek].forEach(time => {
                        let option = document.createElement("option");
                        option.value = time;
                        option.textContent = time;
                        timeSelect.appendChild(option);
                    });
                }
            }
        </script>

    </main>

</body>
</html>
